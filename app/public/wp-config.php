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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'n0FhKsNik+43oHchW6ROuzjh+RA9qEctDfYXbCod4S7dhgxvvwpbDiZORgaSSN0hUBTPUTChnoKb9l1lpimHGQ==');
define('SECURE_AUTH_KEY',  '3xIDmYSV0xL4O0PhcSs/bxDmwfmJWsi1P3rQ/7G7P1mi4OIuiANVDgzdlUDkkzZ78CeJ2ZPNkNwC1WFml3zfFA==');
define('LOGGED_IN_KEY',    '1xupx2aakfE95DzgbxC2CzhPk6/6S1fmCi82RIAIrJQIQ+dGRxGMLpvJDJJ6eKZzDaVuFoXDN5uGeKZMq18t3A==');
define('NONCE_KEY',        'FCCzp9+UJeOXBMhNMrs2khB2lquDf8yOxQZNHc5aJQH3rGsEkf+cmLwfdcSKnAeXZF9B/KabxwL0YBCrCoWaEQ==');
define('AUTH_SALT',        'rRR6BPigLFElbHzyx2e3jmYPsRvYYU1sACdHBUQo+WKkhgRqB8zvkvHB2LQ5EkwImT6UFpPolRlq+CJkJUhprw==');
define('SECURE_AUTH_SALT', 'L203Nfd96lsdb2CBmtYH1zfSvjZdnH7c0NMgt9g8MY6Sk2GsH0Xpe2UbOvUUkml2/zdQQMNM+ySJ31BpyyWw2A==');
define('LOGGED_IN_SALT',   '07u3lWl/+rhwOxX0sudxrfWgZPfTJSYOJmKrlJjmF/JE9UO7gWqGZsh8Q4MkfTxTowdnGn4lj2vO7XYJo72Bnw==');
define('NONCE_SALT',       'AqyeXrZFpsve/06sZp/8Pnm3UDMMqjc1GRu9uuEf2tkrmUIweScXhxdDf+PjIzYKc+lrYszcA5RvH97ggpjlKg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
