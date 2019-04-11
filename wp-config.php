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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'AuTpRMb1H3FDHYrh5zcO5MVp16YBNxZR4MphUB5qXcpJTMizDrI+1yRI6Vd6sltuwj2i97Y02GFuTHvJeqjgFg==');
define('SECURE_AUTH_KEY',  'ZH9lawocb5USNCDkwWu4uARNDUsc3EylggcnHfZ/GkZX6fSIAxc7SOkiXS5AhdArmVBxYHwKNwpTjMSOmTpP4w==');
define('LOGGED_IN_KEY',    '9uSMM7ltbbPKhL4hWxjV1cEBwf5fyS4xokpju4qHd3RXRE2Q3WAjr8F6JAGlYK+PtL6lOGtBq4w8R7YU76o8gw==');
define('NONCE_KEY',        'Jj8cCYZzBRJgnxVtU49BGO+yozpsweqWx3uKkuy1LhDLepzERqEdqb1Hqr/onEorEm96oMB38PWa0QKGcLTohA==');
define('AUTH_SALT',        'GPqL4Q4p19+Q8eJOojzmM4tgup+HHq12uWCE2UazLEfBpX3CqDjM/FscYERZfPL+PY7aI3Jb7Szrj2rgmkqePA==');
define('SECURE_AUTH_SALT', 'Kp4gHbE1GNYtO+47MxIxrL4/t/fy+exDOrDQBcErm+sHUhqD4cZuIteOBLCWcWZSKa/Aj1q0PG8dVerQswwT/Q==');
define('LOGGED_IN_SALT',   '4CRzT4x+U5fE5X9HtxEbHpANCTvQxn9HBej7MFMI3042SBo0g7LkBZBGZP+hy1/DSjXd0tpeJH1FMCNW8x3pSA==');
define('NONCE_SALT',       '+BxI2MNUR8Z71mj1UQpjs4RP+1vu4zYam59mk7geQDZyLy3qjAUekeyQddh3k/CqU7V9E5EYT0CaGKrUgrYMCQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
