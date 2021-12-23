<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PXU/nBBaKpXgQ/VQK4zjGK4XWXjFarExyrX8IrmBeBCfe54AOunazPlB40xOtqLAAvrCoOm5Hel7Mdv0xuzqAg==');
define('SECURE_AUTH_KEY',  'diQuFhvRFp46ber2nAzAQ7AsXyQn7p0FE+sJKCsUbFVh0aaQ/g9MARHH41ycg22i9/EBJCrt32BFon7Kw2ZFjw==');
define('LOGGED_IN_KEY',    'wqJPjv3EZGSld10usRPRsP6E8b+5LhxJJJr6ffxlkkrdEEiicddrMk1ZbKdh3qEdw/vZSP7h3Wk7aLtQhgZCzA==');
define('NONCE_KEY',        'd+ediceWSMk3ombimm0JmEDI/H5ubaYkcC8431V9GCCaghpxK9/6uvIeuHAJR2oNjez1wIrwSsfeZ6aToSEv3A==');
define('AUTH_SALT',        'q6TzUY4DS/i/DuxvCNG1DnLgBPG2QhfB1wRbJ5afiSPjrXJr1P4uo9DVFu4xW2+32Wda+xIxHw2Pj+qTPt4V9Q==');
define('SECURE_AUTH_SALT', 'DNHzYX1qX3dpNDu6loNgL2OcNr9qTo8Z5m8DjmgMVT4Hc4OFnqfDi9IeA+rL4lLgo+fptf7T+2B7O3szIUyLvw==');
define('LOGGED_IN_SALT',   'nqDZQpK7sWPKkXR7TQz88f/gGuCD4nxjGRyiUBOXQpqRh/q0+nIjDUUI9gD8lCcDDp6M/ra1zdCRNFKqBq5W0A==');
define('NONCE_SALT',       'JH4AiRN5Pjzr3MahU6yG94VsjThIdHSsIUMtB5m1y2Gc1p9PAstQICocnRoQWyOgHHFF6GsED8HZMWzNiMPfaA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
