<?php
define('WP_CACHE', true); // Added by SpeedyCache

 // Added by SpeedyCache

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
define( 'DB_NAME', 'planeta4_wp602' );

/** Database username */
define( 'DB_USER', 'planeta4_wp602' );

/** Database password */
define( 'DB_PASSWORD', 'Z4a96.5.pS' );

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
define( 'AUTH_KEY',         'fxgdvuoeqgybp1eam1r8zkmbtbljo8uabhgjplnwgwinkmz5mqzfpw6bmh6ffpba' );
define( 'SECURE_AUTH_KEY',  'xetbimohnoou7vnyvb9znksln7vmqxp9xmwq996j0zgwadqybxzakg2uwyocjy9g' );
define( 'LOGGED_IN_KEY',    '4eqlvcu0a84ykjtfdwo9ubph6az4aldkbmks7qdm0kvtldmpyee3cidz5fduxeel' );
define( 'NONCE_KEY',        'optibmnw8ylcwvxodtbohnxioipzb4fleaid7wqmhaaa0d60a0ymjlgpg9mdldwh' );
define( 'AUTH_SALT',        'tgsufjah2pkdfndyom4j8yitt4cgrholdxxiuzblkmaczf0kw0wdvijud7ktfe0w' );
define( 'SECURE_AUTH_SALT', 'ne4pm2igtochfgjneqbxtj9czggcjsga6rfjzc4ngrltcxiehidybtndgqi2edrv' );
define( 'LOGGED_IN_SALT',   'ez049bdnfyqc8s5wlqrjqdhisxhfgfrnwhdku1ogael5a5nzet1gavxcz64yiiri' );
define( 'NONCE_SALT',       '5jq1t9tjpqlffye7i0q6ie6gp7wqkq4kjknfnjqbgat1wdxfwi4dvffjuypqqdcf' );

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
$table_prefix = 'wpf9_';

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
