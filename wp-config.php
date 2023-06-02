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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fictional-university' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '=1 L@D4xlqq/hBtsG?9m**@}]DD ZDc!@Xh5?&VqiPAJPky:DOP/`w`O[G/ujy=?' );
define( 'SECURE_AUTH_KEY',  'AOnYR=;Dzm7J`[5Bk7aRyz7a7ndqq~c [ZRR;eOwudEP}IfVqsl?or5ZFE)E|H{X' );
define( 'LOGGED_IN_KEY',    ')g:o/@)HVGb~Y2N?we$&sj1$-X.=sNfTX0&y_9|7wPFB< /.}K5:;T|,McG>t4-A' );
define( 'NONCE_KEY',        '81Xt7Q~7hyKmDN^oe5d1h=z:7!FN<U-(^EK=k~]Go[f5 8lYh^X+vW624qfEbk>o' );
define( 'AUTH_SALT',        'g$$dz!0d;(eE$Ah@CK*ZM/aK^{uR_:5<,)E3o|I6ama05#C_%W71KEVE 50C7W9>' );
define( 'SECURE_AUTH_SALT', 'pqQrk}c{ewy3bv2gOlL^X0xp2xZ6<rIP:BSstQp10ysZCwu6+uK=n8+y7R?9luRC' );
define( 'LOGGED_IN_SALT',   '[Y/YAr6i]5:|$<=Rhk<MkNj2C~QP)Gd|[quS#om`t_=@TM5.}}+*.<T5|?P3b@Kq' );
define( 'NONCE_SALT',       '^%p<Vs|0@2q.(p]Rh._}pU&`LLr*<p3S<AIesO]!ZAg ch,NAP=X ] ( g$/Yu[K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
