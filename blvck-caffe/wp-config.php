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
define( 'DB_NAME', 'blvck-caffe' );

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
define( 'AUTH_KEY',         'OJIprhCMzAijDp6IZdqcOA1d9BxLIyXaFkZPeTIZyh3PV7FbBBXQaGklWuDgdklU' );
define( 'SECURE_AUTH_KEY',  'FSAz1hh9zjKJGlLofhTldZ6il9w3usLMT76kayOz17qEQ8vAWqdGFu7BPlu2zwBp' );
define( 'LOGGED_IN_KEY',    'gzn6ZsmA50EMNiltsGmaixSE3rt8byyQowlcyKa5rH0k2gtUQCFfX2FFwiLGLdne' );
define( 'NONCE_KEY',        '7SUa0NaJ2dIA51NxhkhWx4mR5PFOvgHJdOeb7t5xTa2AwwrceChBxtKzaJ1FrGf7' );
define( 'AUTH_SALT',        'dFvSTYzLrdjLgHld0Ea37s0MCsTIUNQ9JtXOcEH6nPBZMFiz5fKflb3F23OKiFBC' );
define( 'SECURE_AUTH_SALT', 'hNqsRQinKS8KWWpD80Wpn7LZPOytpVE6rahqwWXoQN8edhoH3bUVjaV4nunfMbbS' );
define( 'LOGGED_IN_SALT',   'Nms6NrF0RoOF0s1qQL2jQQc3xcVUH6tVk0ELLj7vm8t4TmEC4ROKXA0KqqfCyzyy' );
define( 'NONCE_SALT',       'cC9r9qE6LiWdi7EIMKSJJ7iEz4a2bsDQzbc3qWu9R1JBTon5k97EXyD2uDCOA4nI' );

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
