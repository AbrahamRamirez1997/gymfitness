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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'Hg,tL1O{mi2MaM`AxABvV!eyaxFsfg9OA`$tAyJ9R_(w?);Wh?z$`cNPm|u@o!IS' );
define( 'SECURE_AUTH_KEY',  '6J8J9n?^m3Se#p{/E;K1Ib`(l# <(|wuYX3AZ&L,XYF?d*S@?,6RU*sKjftNV[f7' );
define( 'LOGGED_IN_KEY',    '5#%zyFXQ-*`.x2bgk#%k)s}+{k[s^q?h-d&h6wkHVyoWw%dUC<^yH`9!mx&H*TAw' );
define( 'NONCE_KEY',        '}&ty)u*/ $ziwJgUP$G#oythtA s{pz}mi@ZSBOpJ+DU)l!~Ne&EDD6Bdz)0zDw@' );
define( 'AUTH_SALT',        'n${m4Hl>m41)lSAxS{#[2`!9/YHD(;}MJY!+Wh56`|VN289*h`>#=hG2~FHRBr&$' );
define( 'SECURE_AUTH_SALT', 'Tj^;G<Q>b>Vdgvd.` (IY9O@590!2zeY=/w,xq-vzVrZu@dm^cri3+S%4r&Qi$Fe' );
define( 'LOGGED_IN_SALT',   '2.Yp5XosWlNZ(*8QeKmHGsw<CQcd9i?Sna7fqM[x%ee#lVzkj[B=6rh4Mg.%a6S%' );
define( 'NONCE_SALT',       'gHZuW1XW8|D5Z4N_))sfJ*]c?3<?s~QdK hjJ}{hZ3Nq8*_$&TY18[ki: .).b@S' );

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
