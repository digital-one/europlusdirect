var isTouchDevice = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isTouchDevice.Android() || isTouchDevice.BlackBerry() || isTouchDevice.iOS() || isTouchDevice.Opera() || isTouchDevice.Windows());
    }
};



$(function(){

var _handleShown = true,
	_fullpageActive = false,
	_isTablet,
	_isMobile,
	_isDesktop,
	_container,
	_scrollDirection,
	_currentPathName;

$.each(Offices, function(office, geolocation) {

    if($('#'+office).length){
      $('#'+office).gmap({

      markers: [{'latitude': geolocation.lat,'longitude': geolocation.lng}],
      markerFile: Marker,
      markerWidth:82,
      markerHeight:94,
      markerAnchorX:41,
      markerAnchorY:94,
      centerLat: geolocation.lat,
      centerLng: geolocation.lng,
      zoom:14
     });
    }
  

  });
  
  $(document).on('click', '.video-btn', function(e) {
  e.preventDefault();
  $.fancybox({

      'padding'   : 0,
      'autoScale'   : false,
      'transitionIn'  : 'none',
      'transitionOut' : 'none',
      'title'     : this.title,
      'width'     : 640,
      'height'    : 385,
      'href'      : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
      'type'      : 'swf',
      'swf'     : {
      'wmode'       : 'transparent',
      'allowfullscreen' : 'true'
      }
    });

  });

  


var _menus = $('#location-filter select');
$(document).on('change',_menus,function(e){
e.preventDefault();
       var _menu = e.currentTarget;
       
        _menus.each(function(){
          _hidden = $(this).attr('rel');
          $('input[name='+_hidden+']').val($(this).val());
        })
     //   $('input[name='+_hidden+']').val($(_menu).val());
        _menus.attr('disabled','disabled');
         $('.selectBox').addClass('selectBox-disabled');
      //  button.html('Saving');

         var dat = $('#location-filter').find(':input').serialize();
         // var dat = $('#location-filter').find("input").serialize();
                    $.ajax( {
                                  type: "POST",
                                  url: ajaxurl,
                                  dataType: "json",
                                  data: dat,
                                  success: function( data ) {
                                     _menus.removeAttr('disabled');
                                     $('.selectBox').removeClass('selectBox-disabled');
                                    if (data) {
                                      
                                      _markers = [];
                                     for(i=0;i<data.length;i++){
                                     _markers[i] = {'latitude':data[i].latitude,'longitude':data[i].longitude,'name':data[i].name,'content':data[i].content};
                                     }
                                     var _centerLat=0,
                                         _centerLng=0,
                                         _zoom=3;

                                     if(_markers.length==1){
                                        _centerLat = data[0].latitude;
                                        _centerLng = data[0].longitude;
                                        _zoom=6
                                     } 

                                     //if all countries selected, filter menu
                                     if(data.length>1){
                                        $('#country_select').html('').append('<option value="0">All Countries</option>');
                                        for(i=0;i<data.length;i++){
                                          $('#country_select').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
                                         }
                                          $('#country_select').selectBox('refresh');
                                        }

                                 //    console.log(_centerLat+','+_centerLng);
                                     $('#location-map').gmap({
                                      markers: _markers,
                                      markerFile: Marker,
                                      markerFileSmall: MarkerSmall,
                                      markerSmallWidth:12,
                                      markerSmallHeight:24,
                                      markerSmallAnchorX:6,
                                      markerSmallAnchorY:24,
                                      markerWidth:82,
                                      markerHeight:94,
                                      markerAnchorX:36,
                                      markerAnchorY:90,
                                      zoom:_zoom,
                                      centerLat: _centerLat,
                                      centerLng: _centerLng
                                    });

                                     
                                        //reload_menu();
                                    }
                                    else {
                                      // 
                                        
                                    }
                                  }
                                } );
                });


$('#country_select').trigger('change');
//Map




//Selectbox

if($('select').length){
$('select').selectBox({ hideOnWindowScroll: false });
}

//Homepage slider
if($('#slider').length){


$('#slider').slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 600,
    pauseOnHover: true,
    arrows: false
  });
}

if($('#faqs').length){


$('#faqs .slider').slick({
    dots: false,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 600,
    pauseOnHover: true,
    arrows: true
  });
}

// Menu dropdown

activateDropdown = function(){
  var _width = $(window).width();

  if( _width > 1024){
  if(!isTouchDevice.any()){

$('li.menu-item-has-children').on('mouseenter',function(){
  $(this).addClass('rollover');
  $('.sub-menu',$(this)).show();
})
$('li.menu-item-has-children').on('mouseleave',function(){
   $(this).removeClass('rollover');
  $('.sub-menu',$(this)).hide();
})

}

if(isTouchDevice.any()){

$('li.menu-item-has-children').on('click',function(e){
  e.preventDefault();
  if($(this).hasClass('rollover')){
     $(this).removeClass('rollover');
      $('.sub-menu',$(this)).hide();
  } else {
   $(this).addClass('rollover');
  $('.sub-menu',$(this)).show();
}
})
}

} else {
  $('li.menu-item-has-children').off('mouseenter');
  $('li.menu-item-has-children').off('mouseleave');
}

}
$(window).on('resize',activateDropdown);

// match heights of side by side skewed boxes

var _elms = $('.two-box .columns'),
    _nestedElms = $('.two-box .nested-section-content'),
    _maxHeight = 0;
_elms.each(function(){
  if($(this).height() > _maxHeight){
   _maxHeight =  $(this).height();
  }
})
_elms.css({ height: _maxHeight+'px'});
_nestedElms.css({ height: _maxHeight+'px'});

//if(!isTouchDevice.any()){

  //var stickyHeaderTop= $('#breadcrumb').offset().top ;
  //var _anchorNavTop = $('#anchor-nav').offset().top;
  //var _stickyHeaderTop = $('#header').offset().top;
  var _stickyHeaderTop = $(window).height() - $('#header').outerHeight() - $('#anchor-nav').outerHeight();
//var animating = false;
    $(window).scroll(function(){
      var _scrollTop = $(window).scrollTop();
     // console.log(_scrollTop);
    if( _scrollTop > _stickyHeaderTop ) {
     // alert('top')
      $('body').addClass('minimise');
      
                } else {
          $('body').removeClass('minimise');       
                }
       
  })
//}


if($('.accordion').length){
  $('.accordion').each(function(){
      $('dt.tab-handle',$(this)).eq(0).addClass('active');
      $('dd.tab-content',$(this)).eq(0).show();
  })
  $('dt.tab-handle').on('click',function(e){
    e.preventDefault();
    var _tabcontent = $(this).next('.tab-content');
    if($(this).hasClass('active')){
      $(this).removeClass('active');
       _tabcontent.slideUp(100);
    } else {
      $(this).addClass('active');
       _tabcontent.slideDown(100);
    }
  })

}



load_posts = function(){
if($('.posts').length){
var _windowMiddle = $(window).height()/2,
	_windowHeight = $(window).height(),
	_offset = $('.posts').offset(),
	_postsHeight = $('.posts').height(),
	_scrollTop = $(window).scrollTop(),
	_postsBottom = _offset.top + _postsHeight,
	_scrollAmount  = _postsBottom - _windowMiddle,
	_footerHeight = $('.posts-footer').outerHeight(),
	_waypoint = (_postsHeight - _windowHeight) + 400;
if(_scrollTop > _waypoint && _scrollDirection=='down'){
	$('a.load-posts').trigger('click');
}
}
}

load_posts_click = function(e){

	e.preventDefault();
	var _this = e.currentTarget,
		_url = $(_this).attr('href'),
		_loadElement =  '.posts',
		_btnElement = 'a.load-posts';

		if(!$(_btnElement).hasClass('end')){
	$(_this).data("label",$(_this).text());
	$(window).off('scroll',load_posts); //stop the scroll action
	$('a.load-posts').off('click', load_posts_click); //stop the click action
	$(_this).addClass('loading');

	$.get(_url).done(function(data){
	$('a.load-posts').on('click', load_posts_click);	
	$(window).on('scroll',load_posts);
	$('a.load-posts').removeClass('loading');
	var _obj = $(data).find(_loadElement),
	 	_btn = $(data).find(_btnElement);
	 	_items = _obj.children();
	$(_this).attr('href',_btn.attr('href')); //update the paging link
	$(_this).attr('class',_btn.attr('class'));
	$(_loadElement).append(_items);
	//_container.append(_items).masonry('appended',_items);
	});
	}
}

$('a.load-posts').on('click',load_posts_click);
$(window).on('scroll',load_posts);
//$(window).on('scroll',sticky_nav);

$('.anchor-up').on('click',function(e){

	e.preventDefault();
	var _animationSpeed = 500,
		_target = '0';
	 $.scrollTo( _target, _animationSpeed, {
          easing: 'easeOutExpo',
          offset: 0,
          axis: 'y'
        });
})
  
 
$('#anchor-nav a').on('click',function(e){
 console.log('click');
  e.preventDefault();
  var _animationSpeed = 500,
    _target = $(this).attr('href');
   $.scrollTo( _target, _animationSpeed, {
          easing: 'easeOutExpo',
          offset: -180,
          axis: 'y'
        });
})
       



$(window).on( 'DOMMouseScroll mousewheel', function ( event ) {
  if( event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0 ) { 
    //scroll down
    _scrollDirection = 'down';
  } else {
    //scroll up
   	_scrollDirection = 'up';
  }
});


});