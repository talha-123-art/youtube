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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'talha' );

/** Database password */
define( 'DB_PASSWORD', 'ucp-bba-8f' );

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
define( 'AUTH_KEY',         '!Fq}yt&1Ey#.7BZw^$t`xe5f 1c(#Q}M%^yLi!KAI1oq^FG6RPlG?e48P<GG+t)3' );
define( 'SECURE_AUTH_KEY',  'Q&Lc.eM4`?y{4<lz@+Gch#%lqTbP#AIP_T03];%BR1%a?vNUK1vf !!P%Q{|;0xg' );
define( 'LOGGED_IN_KEY',    'g_Q5=oxNc)uZ!H8VMHO?,jQ+%p1f?d(6Lhc%%F!Va0Ym+<Hlmr.S+A/&<cv8]LxI' );
define( 'NONCE_KEY',        '9ggGfpGdS*WZ2z8G9sl_!^jI{x>yChi q,@h&|LypEgiw0+Ejhm{t&=Ay9BRz`wL' );
define( 'AUTH_SALT',        'Eq~!:<@q)JpopP#B<3gycp6Elg_^bSt({}uOoL93q43bxsO5gHr0$BHy+-F[cV-u' );
define( 'SECURE_AUTH_SALT', 'Kdx^l)>G2*Ow5Bh!|J.2+N3hAeQ858.RC?6rk*eKO@e1fh{lqYD+jcv:w@)A3ULF' );
define( 'LOGGED_IN_SALT',   '8]ls{h)kF?mqs%!rj62U#kQ4o]IomuD3:-F[?BXt3Lm~a=cPn;!Z]KPtq`2)%yhF' );
define( 'NONCE_SALT',       'mc{x+/`mt?]|vT,9$)f)skdE3G $zTR49AYZ4OsvPsj)K7GSVY%D`Sh/,?BQm1Oc' );

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
