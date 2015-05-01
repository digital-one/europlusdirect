<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'europlusdirect');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2$_DUF6.>Ei.*3-h_+2ntR|<;VHVl03@69Ep6/ZNU/>4QN05f=Wq@1e#`~8/2_@U');
define('SECURE_AUTH_KEY',  'q0}#zS-6j^BGH+DyX(^4@dP>C<(?8sh`/&E$nvG#jsj@_]&Yy8$bz&l=r_mZYzt@');
define('LOGGED_IN_KEY',    'M<%p]D:y`}T:A#+9Y_J%|+Y$;>R{)x+N]wlqxkhU7/~~#`-*J D}-!A^o{,cttcp');
define('NONCE_KEY',        '(A;t_^=4/hQ-Ux;1N69bJ=gWdS@?9WA7-h.:gKV{VD^l&++Y[E{=>sJ.+0C/2+6V');
define('AUTH_SALT',        '~ Mgq0~86Y/Hm}#Bm<KN-JkaM1#5]b20Z8T)+KdO?6lyIwEEj `.[|S@a+kX4>@4');
define('SECURE_AUTH_SALT', 'u?+|d8c11!~:84QXvpeIZPWQGUhyPANg%vyVu` `(B7xX,t@6M_m6V1u-A&/FhH|');
define('LOGGED_IN_SALT',   'u>z:3G$078a>S?.nCHsLTMBZCr>d?:ZEYS /VO]]OO*@G(5Mr-#LH?(6b /%``zW');
define('NONCE_SALT',       'tz5whtv.+qK)-cPijnQBG:&G~^NWqw}*Bsc *-U-aDGb9iluOnQad!kjmCfIK)!Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
