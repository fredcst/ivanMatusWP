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
define( 'AUTH_KEY',          'O@KMRUxmhDfSU18h,=G) Em8_npE!j0.qevU22L`&(#yKLjB1SUITiR2g[e:QIp8' );
define( 'SECURE_AUTH_KEY',   'Tp;0sJNd9*3(5ultrp5-l|?H:sHVMyGl8/rL?NzzAGb;_~n;pY[x9}Yax1&/-KT$' );
define( 'LOGGED_IN_KEY',     ';afDK|!l]>5D@xmPxCVr+(-Kqe]1%=Q7)w.-~2<C*1d#(7*321J5HRC?~)t5.|N^' );
define( 'NONCE_KEY',         '$Z2wX<:8QoIb=Uxre_IYDOQA.0L/ ecNr!I&J>^h>MW]-DS?m+{mh,zJQb;>| xI' );
define( 'AUTH_SALT',         '8wkULcH%5&B(%b%BCI%3DtAf7yVKME|1O|#qi)eoJbVa)pC3k6t{ci$$J2G#OK<@' );
define( 'SECURE_AUTH_SALT',  'C=]<+#qoI|8Dnh&]1-^^nBEi^4eOgH>62SHR_G|L^6pt`!0ZlK6@^vjDxc{pS{p~' );
define( 'LOGGED_IN_SALT',    'uIbFKW3dQ*d4@JTR_:W|W#o{/)J%Nb_]{XlVl&%vz`T9qsgd.>fldG6/J(~<i|M?' );
define( 'NONCE_SALT',        'g6v$UXsr@ M`hw8{$rl3:=]uoQpob%ADN34lp=q>]R6;N/?6nYo28eNClJ%i~u@$' );
define( 'WP_CACHE_KEY_SALT', 'sQVFP]z}A8@DyhQ8#7;3~{vhnrwB]p/wIxS(I_3^(<)=<,!a XzH3sVue8@`n20U' );


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
