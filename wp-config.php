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
define( 'DB_NAME', 'uniqora' );

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
define( 'AUTH_KEY',         'hB5v,altZ-i(YBPk^*TGa0RfB]V._njEy1BEHIJPN(Rdt}Jv.{&Pq#3|.01DPU^O' );
define( 'SECURE_AUTH_KEY',  'Har5[Ceb /)NaSD?7TyOqvl5Rw^S,;%N%sq1<jsvw_S)<&TVgr)^x.?ztEF6jw/Y' );
define( 'LOGGED_IN_KEY',    '1qK*?MMY<dZ=`R=ryG6p?ETIR@7**rqXHpiO_=3vp^62x|9X.![Q:|EFiqY{pvBP' );
define( 'NONCE_KEY',        'Z`c%}:fh7SntB?_E?`atNr1K,=|ErZI<^1j%VLBGo)l%-bHQzUl*|+@|uK,:U7(q' );
define( 'AUTH_SALT',        '#^6yJ,i2-f][q9Y2wIU^(_V32{s(~3X*G/Z$v~wJo[;$8.%P`yH?th T_Pl;k&+/' );
define( 'SECURE_AUTH_SALT', 'I-9VJ]zAf6ZHb= dM32s%|HJ]s+KW~9#tBwaePfS^=?8A9b|1^3kDp^Z 9gqGKB+' );
define( 'LOGGED_IN_SALT',   '$ O]nD9Kx<(W:_&6FnUJY<&0eV`%TWU220Y&n);)/* pm}!!0q*Pw%5js5A<kT%/' );
define( 'NONCE_SALT',       '+xJ>KmA aDMoP.of62 kodlU[Vv&}p| Ov]G^g+gDxkVDRvmLNVM8l=mXj7d&tCZ' );

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
