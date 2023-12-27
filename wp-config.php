<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '4#e3iWm+,tBhT0HPr5n*+T$gy ySQQ5z/!~gOjTokg<6h@xTZxM#2jI>ep+! +@P' );
define( 'SECURE_AUTH_KEY',   'c6I&9GRk:Bc4zRoaB*n/|aBNL(0),q?/(>_8Otrkw6`4Ca:TuVkBB]`NK[>4et,!' );
define( 'LOGGED_IN_KEY',     'AR6P==ll:uZ42I#atnW#f= x.Zha-`qIeY>]A)sZeY|zIAlN0%HCn[%$+0=f=0Nb' );
define( 'NONCE_KEY',         'v.vd`$mD0Z9H;)],1iG/c4{_LY5j~PvS7G$lM`ffe4$}W3P=L]Tn{kKex((?VOCI' );
define( 'AUTH_SALT',         'q0/,vXr uS;vd4B`e/BKIzS?pvrvuikYl{|0{9[M`5Dhd)sM>Y_seEz!_Vfg 7}:' );
define( 'SECURE_AUTH_SALT',  's.$a$<n<E8kp<|z2V/10}Zz)fn<c/=JRp]z]Q[U]WU6eNJ/W }y*|_eCTYE6~R>x' );
define( 'LOGGED_IN_SALT',    'yu;:8(R|V#u*3vdISu7eI^>?qK-!g,Wu_|}xM^oj^as#[!Md2,w%AtCE,YxVwE2d' );
define( 'NONCE_SALT',        'fJlfKUfq6i=+6>BC%% _B_$k[&,%t!R)mHc XU@Dr,v_W]D:0f>o0Uu<l/s?LP*f' );
define( 'WP_CACHE_KEY_SALT', 'yi#jv4qwkDa#S~@hdj{>WE<(MOAj9bo~T@a[3R|A04ads+^zw=_JV#E?ko&X&LJa' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
