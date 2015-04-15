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

// match heights of side by side skewed boxes

var _elms = $('.two-box .columns'),
    _nestedElms = $('.two-box .nested-section-content'),
    _maxHeight = 0;
_elms.each(function(){
  if($(this).height() > _maxHeight){
   _maxHeight =  $(this).height();
  }
})
console.log(_maxHeight);
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
		_target = $(this).attr('href');
		_target = '0';
	 $.scrollTo( _target, _animationSpeed, {
          easing: 'easeInOutExpo',
          offset: 0
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