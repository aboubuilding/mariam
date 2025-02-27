<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mariam' );

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
define( 'AUTH_KEY',         'c4J.W`9tUWILRsHt;T;:@+P05Ioeu8gbCx^t%E2(.m>8E+4bomTG/6;(~+9Mxi/t' );
define( 'SECURE_AUTH_KEY',  '*N#`,iX8W/5CR86!0v!jb=&FEERfJ;3>L6}yH]cy:~ yu=M2.r:I0|kM1how(:{d' );
define( 'LOGGED_IN_KEY',    '!_VR;(mp:nq<uU$f^U&7+O-$oN|ubQ9$V6Dw`.K~H*]9@6XxV!$5m>if!)5iE?[X' );
define( 'NONCE_KEY',        'XIw*9(9FED)gqv/e?l,!@86LjOA7r~R*L7=E9{MFU~|o-2ou?`^|sR?@L2}-g`]{' );
define( 'AUTH_SALT',        'N0nnnh3~?xxs+kIumN+DDC-z n>0h,1I}4|lux!5X]v ARsN;Q;yBHgo#WTe~pl*' );
define( 'SECURE_AUTH_SALT', '~{a{K1#-_C,(-G/SX.^#gZ~TJ/M.f/IvOS`HCqApDe]v=8^_ M1zvW)bLPqA/[2H' );
define( 'LOGGED_IN_SALT',   '(@e1Z^PHPIwPtcRRV!(BXt2zWZt=_LDKvx3rd<tQrr}~z4KH2,P2)b;Gi7nZqt(Z' );
define( 'NONCE_SALT',       'rM:.#&d9=9S0jXs|z7,#s?,Q.59JyTX=z_+F P0!w-@g,B1LeZAiG1]NJY~n?dVy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
