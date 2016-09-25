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
define('DB_NAME', 'u395510457_hewag');

/** MySQL database username */
define('DB_USER', 'u395510457_meves');

/** MySQL database password */
define('DB_PASSWORD', 'baSeBubuge');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'LRIkhfN346eXIOpZqtMLoOZJiYbqEUW0I6AvaP1umKxSuRQIoRAybsbDRiPhbhDy');
define('SECURE_AUTH_KEY',  '4p2PkYa3ZhUgPO6oKAtjOiHBju9DOi8CN99brqUGt9wj9cgDcd5Iowsj3W2Rrjho');
define('LOGGED_IN_KEY',    'w5NZls16KzUkLCh0486Nia5MRhVO5yWRAlpYWkUbzDrVnUPImHEx2Reyqshpwd44');
define('NONCE_KEY',        'UaJxP2WTMwaBPExi6E2ztZdPs6OfUCTKFNpyexFx1OynbZu8B41ivAcFJE2BMxjD');
define('AUTH_SALT',        'rHtniJpQawP8B1dQ39NbCY6oWkwUDJbfKoy3Bm8B8xUPdQeUaahpSP99AbQkfwYA');
define('SECURE_AUTH_SALT', 'ERRqkBAfRKP2IfHx6KKd6IwrC5Ra2p8tn32fZv8wOm2P5TDGA0YwUbwbf2cBk11Q');
define('LOGGED_IN_SALT',   '31qq0rHUHhN98EJ6VFGSgyy8zFd3fUtarJvE8JSYGGaKiiFmjxNZPj1lIwHbZN4k');
define('NONCE_SALT',       'a60hysdqVei7vnOoscmCX0K10kFHxofQK9s54HQYEIbvnxFWiLoroxHozu2WKWnv');

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
$table_prefix  = 'e9qv_';

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
