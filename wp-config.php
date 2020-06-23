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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define('AUTH_KEY',         'NTv5TXr5yessr7Qnt4K0FUG5DgjfVUr4n4zsGA8llVoqndT5Kb8ZXnmm/TuvUD07U7XqEaWsZV+tmxOeGIxnuw==');
define('SECURE_AUTH_KEY',  'GEk7GsFADQLGHn/6vtERC1qrx5ul5WSJlnVXx88Yo87fFZC2mI+n2aMg7pOIa6HoGhIp0GQMBRLOUXc1MpE9mw==');
define('LOGGED_IN_KEY',    'h0DUMAaPqVWMXval0n3gJwEW5Ivoo06bJc1KlMQw8a3rIF1yAuloOH0VSZVFpG5n4kIpTOn7PcQJJgb6YIV1tg==');
define('NONCE_KEY',        '8QRbHIM06yjzT3zFAsOmn2VHbQ4cxUWuwkTW/UPf+SV3TJlbHKrD56nTpWvmO/E5nHuTBmNScH8ik0tMEea8rw==');
define('AUTH_SALT',        'kL/GSxAtupQmmwbONG0O2MAsPsL73lgnVeXd8Vsf7s2IWEQvULZmart3EFVcBqjBP1vwZLru37Z/IBtiAewi5Q==');
define('SECURE_AUTH_SALT', 'SpXODj1Bbu9rjPBIK1sQ8aGSqvgNVWE/7dM2yAWZae6yYuEdp9q5UjuKQ3xonUCf+NNd9dzBM9n3nMC19ij0hQ==');
define('LOGGED_IN_SALT',   'BO2lOOSUfK3/rVcqxKtcUTEJOcmhKG2OrAPcrc86GFkIFfPMTgwXDojL5iDo3sXC+jI8VgrFZD8RwjQB0YegWg==');
define('NONCE_SALT',       'aj30oZVIpnpEDH3UvTGo3pUd7P5uCc6Zfun4BjJOruzbtP6pcfu8Xu2kpxNad1ok+qA3tMTW+4x5FCFQzuyFhw==');

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
