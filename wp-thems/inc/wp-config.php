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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'f0109501_kwork' );

/** Database username */
define( 'DB_USER', 'f0109501_kwork' );

/** Database password */
define( 'DB_PASSWORD', 'samsung1426' );

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
define( 'AUTH_KEY',         'ec;45J>@,~m6FZH|K*==bG1wyR?c)#BS|udZ08Dat<BrXUOLS:ZWeN+A%JL5=qw1' );
define( 'SECURE_AUTH_KEY',  ',>d.,n4v}^Bwib#7}4 UTuiU0VkHCBuyi9G P[}B,&e`weAqPq5Kpj<CaQeZo}SA' );
define( 'LOGGED_IN_KEY',    'Bo(]P9CA}ky-##M!S::TO Hj*][o}N[%_Dn}>Q3yi6q/]8o[;s3LP{:900-B{t)A' );
define( 'NONCE_KEY',        '4M*8(tTND9Sp-e 4=(]5VdB<pKXxD*&%^X*u@0|bc-TFM-6Uaxu8hcLd}+Z&HLP6' );
define( 'AUTH_SALT',        'n8Yb<UDmIFfS-swD6$=9.}Ubq}7};}n9RsZ(*kPF3cT*@Y]Zxx^1,+To.6.{0DCO' );
define( 'SECURE_AUTH_SALT', 'wsrxf,mCH!o{I2O(sn}C}][=,5C_ONx3%NFZ5j3B~j8ikQ/GoY5xG$M|iFVHO41z' );
define( 'LOGGED_IN_SALT',   '+hIktJ:&7DXkF=mH^p`S8F&WD4j>Xmvr#wkC$0k3`M0Q:g/6H72rlB3NG}+GKmsQ' );
define( 'NONCE_SALT',       '`C(WJ~xsxY)klO7jj&RZGZs)DwnoW9Ysx!)Z!bMdVdJ}3iK^4Kr|G`f5ku_{I|pg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nwagr';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
