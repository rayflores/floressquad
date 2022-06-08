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
define('DB_NAME', 'wordpress-323134c6e9');

/** MySQL database username */
define('DB_USER', 'wordpress-323134c6e9');

/** MySQL database password */
define('DB_PASSWORD', 'dc43bbefe583');

/** MySQL hostname */
define('DB_HOST', 'sdb-x.hosting.stackcp.net');

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
define('AUTH_KEY',         'ms3kvHp7v/Ubvemon+uimemDQff/HptP');
define('SECURE_AUTH_KEY',  'VhylPNIko3F7Pj0ZORwMaO3kNNt7bDrl');
define('LOGGED_IN_KEY',    'v4urgKzqo+o1Blsvi2mvtgksSxz9m7OG');
define('NONCE_KEY',        'S6N4j36RNLEvbiJyUmuRvGdRPKQ9Oau4');
define('AUTH_SALT',        '67UPTM7gPDz51UzeMosrh7zDOzR9r+nT');
define('SECURE_AUTH_SALT', 'JlT+lNSgTcvS2MxC2hjLE6jf4ujvZDse');
define('LOGGED_IN_SALT',   'WEKWjpsEy9E0YvoqMP+NXqfGni+Iexs7');
define('NONCE_SALT',       'msPkpj6T1tbXvFC57mDwz74MDtbSr12H');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '9e_';

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
