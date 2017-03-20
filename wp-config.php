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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/pinckney/public_html/ccfFix/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'pinckney_wp11');

/** MySQL database username */
define('DB_USER', 'pinckney_wp11');

/** MySQL database password */
define('DB_PASSWORD', 'K*sHpDW]1Bc(D]fieB^30#*9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_MEMORY_LIMIT', '256M' );
set_time_limit(300);
//max_input_vars(1596);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gPvwoz04tLYCYQH2BzqghGgcX5ndjfUgIQTLWnVSeoUunQlxxwlT7g7r7STSiC8f');
define('SECURE_AUTH_KEY',  'TYWuLcqWTCxSjN7XbdgxznD88oZSLnWn5B7VFUK8eUWlqi4MOmO0irAMR6zGSKlL');
define('LOGGED_IN_KEY',    'arXaTfgdXPCpK2RHkyKjiEoU7jYswX108YYtDwQgTZEPySLFDLc3bzJdONn2AM4s');
define('NONCE_KEY',        'ORWIcw2XhNepHaJVsLPQV5piskAfk6uz70nL4milXY5w2PFALDJG6faCu3s006Yw');
define('AUTH_SALT',        'RrHJ94pOPogmhSQZXurMUtvqJxAtL8N970nwZg9B7tuwsk4O68T1dPh0csgG5qZi');
define('SECURE_AUTH_SALT', 'MWUpY8RBTmr7D7GbO24BxtLHz0BtlPVZEUaZI8cqJh1akVKy1QI44HZUCaI6jLR7');
define('LOGGED_IN_SALT',   'ZvQOeGWbpio7lOan2aZQN4dcdL4n1DI6HrkXokQyaBhzccNctnwavOT8DGi64vsT');
define('NONCE_SALT',       'Puk3id6mbeJNBU3CeuSo4guKfyKO0y6Af0j8RlU0MdDTjRcMGrykopq9D4FqOr4f');

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
