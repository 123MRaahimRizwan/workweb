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
define( 'DB_NAME', 'workweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'NEMhBYdPE+f[{~Km2>`9s-C^tsxBG$>rJ#M7d|-S>0fz.V;~)/uvULUz4kvuBVn;' );
define( 'SECURE_AUTH_KEY',  ' KmlKZJ=@PXPjPRqxIk8rNBpL=9|_hsGGhlMb06^hMy]FH}s<uTo|a2 wFpNIAZs' );
define( 'LOGGED_IN_KEY',    '%bYE.tc4F0F5 k7WDS,YQ>=tDtVz cjYn!NslOo-E4fYMr&7,mI*gM}`+ytO]Tvl' );
define( 'NONCE_KEY',        'O__dIQosLqyk*Ako#s)4rOL%N2cO]{Gi@vRpu@uSq`ME0lBSu/Xt[_IcHgMsiCo2' );
define( 'AUTH_SALT',        '>z _&@.g/S$wk5Rb9_+TJdhe@Gxp5{x6Gm/8+y1Jk R&{Xi#wCXXKRDC8^sfA}EN' );
define( 'SECURE_AUTH_SALT', '&B)b~py8?i;SO(tpKRf`Y);NYu#O}N(pVq[EAKW0ul&T0cUzE.ssHM#L[SlLg,/_' );
define( 'LOGGED_IN_SALT',   '@-I*ba`:~Y=Ql BnO`~N[]IxW(kBzYoY9_baZ$U)zI#+Ej6gS:Avl=}l|?f1M$f.' );
define( 'NONCE_SALT',       '.e9vYL-`[yKZrr|k8DkRRFXHd7KwnNFp}R1+ob>X%N#V}YVB/-`Jbh`tmAf,I^Xe' );

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
