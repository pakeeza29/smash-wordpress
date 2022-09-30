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
define( 'DB_NAME', 'smash-wp' );

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
define( 'AUTH_KEY',         '(vm >RiOS=q(x5^P6kEagUc>opmxlsD~x.$L@7Aq-oWZ&HQ;Hf?o2Gq=luqN:O5K' );
define( 'SECURE_AUTH_KEY',  ':&L58{07f!h&i RSpR=Vo#OeD:lnpjQ 4+m6ha2}_c/(|=tO;m7m%<1<irC5vJNJ' );
define( 'LOGGED_IN_KEY',    'SWh+ENW=p2/,:TaD_2#jf$M63<krU!3dKlMW^&4?PhX?Tifkp,$O?[GmMt14IWTF' );
define( 'NONCE_KEY',        '$hz6=e7&vy*bavh-b@v.,35ptDu<Qp:,lVhNWMb=,<_#~?n`6?o^WDq<qpO]T.[F' );
define( 'AUTH_SALT',        'BtI!u_p#dnLdUxZ<~uPEF#_Uh16dE/6a7Ks1}tTmF$E_lL.9+eA+>ar.gjcGdjf!' );
define( 'SECURE_AUTH_SALT', 'ykP;|M<{]tM>KZ))wWHpb-37i.anDa__h3sg|L#>HU^7~yDYTg`EJjvlE}Oj8v?L' );
define( 'LOGGED_IN_SALT',   '&dk<mrgM&|pB@xMGCrCyfJEt6PqnM2!xM|D$C^I[{;NO~7JG!G[+*>AX?sb{M`j^' );
define( 'NONCE_SALT',       '&=FB}n4`J#6yLb-Q(-y{Ur2qzw_;dpC,z0ECR(;Ml$B4-Ou_=I?u]e2UcT-G)l3Y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
