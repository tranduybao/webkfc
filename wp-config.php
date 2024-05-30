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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webKFC' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'mDfWsNgi7F8aQwDk3QbK00N9PILg581yuuBIZ0GiYV7AbhY3z0MpS2E24H0Z8Iqj' );
define( 'SECURE_AUTH_KEY',  '8KaD59phdqOJWN0axFgXqXgfcsphYWsMghza6W2Elehqwx0g6fmCt0kSlqj7sC0O' );
define( 'LOGGED_IN_KEY',    'mKg9TueGq3QaVlGpnzXScVJNJTNrbjyF1O5PsK6XGtBxMMrrFVUKy7hItNXM8djD' );
define( 'NONCE_KEY',        'HfpQVMAJOB4ndyUwyIjTpvYVKJwmKhEK1Ob43nIC2MtnhklY49ojn9jClsrPQYDk' );
define( 'AUTH_SALT',        'GBMMzXEsAXV34lzLMnzR2uJDW5FTj3qQrt4AfFeXk0CVcsCb91LEbbLCvn8b2NI8' );
define( 'SECURE_AUTH_SALT', 'LsbVo5gOxhZubNWTmfvV56gUDO0agob79zxGEMkFEBlbnTwL2r5pHkhFpAFUgMWN' );
define( 'LOGGED_IN_SALT',   'brkQCj9u5PnuNESSUBv4IigBa5dObYhmm2grpexGZYMJ9J5FecvngsnD2y2k4Iqo' );
define( 'NONCE_SALT',       'kwln1qp1QtNc8ybcNjfHKBNZxsfLwdKh6DF6fhcuoAcqtaLjZvSiNViJgsCVChNq' );

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
