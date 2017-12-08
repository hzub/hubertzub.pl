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
define('DB_NAME', 'hubertzu_wp1');

/** MySQL database username */
define('DB_USER', 'hubertzu_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Z~zfYu^7[qD)2@y)9(~97,&4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7c9uoi3Iey6DEQtJxGDNqP9BLtYhXE7ASr0Q3u6UhnF56yoCNUjZpfC67uAt9ssa');
define('SECURE_AUTH_KEY',  'HHG9zWqbM4NNdunDDAvf4Ygv9YXIpFz0e0oUraMlxiuUcWaztn5D4HOGs8yTKN21');
define('LOGGED_IN_KEY',    'X9bulz06FiPNbMOwOtfM8vImp4nFozWk3dZxIzFE41Vdqq8KGizjRmGGNMRNtsWo');
define('NONCE_KEY',        'bfvuiOVM3fEgFi6G7le9tWAmmI0lj1QTE81zKhFvUmNuOP7U4q00qsm9CwsIDzar');
define('AUTH_SALT',        'MqPXWVewXdtcphj2MqZzyr9XQe46owl3XzrmCF3rystEzZL1PfhArx2rHDEgoGwj');
define('SECURE_AUTH_SALT', 'tJNaFzfsnSkyaBrKrrS9KS1rNEBZUg7Fh4URc0Hahnasr3sn8nSdg2vTysLZmZ3c');
define('LOGGED_IN_SALT',   'szfIWHJiwQgUsArWOdIEiBgUOUDvsZ9T0kVmIvvOINw3L2vw55K6GCultrqBAAxA');
define('NONCE_SALT',       '7i0ovUQcr3qZq8W29hCh4AI4abbkXKEAx2pjVFJCaq54gppCnr6gZarqP23f0Ylv');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
