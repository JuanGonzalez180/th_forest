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
define( 'DB_NAME', 'th_forest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aFvxGNL4hzWdzwuWrR5O/11WsX29KQORTSrWlEgSSPSBcpP7FHcO3dTkNzsJiDPEGStlR0nR0b+y4Gb9JrNjAQ==');
define('SECURE_AUTH_KEY',  'xtDXyziJnG5/mkzwyBKj4s+C37xZ8mtieqjtQotFVjl3DaImZMf4PkAaqGZYrnRGPLgPDi9gNC8lAJoUpBYvbQ==');
define('LOGGED_IN_KEY',    'eKHkIF0QSZxAxQQW7Lj9/r8SU8OcOQP3CYuFaP0zWJ1fr9sKM1YeymFfmFc8HnGu99P1IHj64ukVlyh//SP9dQ==');
define('NONCE_KEY',        'JM5SIdHZFTmysmNmNpRS31rM5Zc36hIq/ryT0j9dtRyJFEBUoq6JS/78xB7N3QtNrmY8C87peZ3F7uLWHabuXw==');
define('AUTH_SALT',        'HEh1mKzBY5i55EbseEaPnBaghypQCRIukFp6Mt1OAMJPcuyqxGDvoAwsSSQ/pNATFgly936RJTeaWclE9cZ9AA==');
define('SECURE_AUTH_SALT', 'IU1zeQY7vfAPGOSyM4Xz4WY89PyGD8Wc+SeHy+Pt0i/UFtdc5ebTOq44/B7C0OLHH092cohbeegTaHU+fLHLbw==');
define('LOGGED_IN_SALT',   'Di2Dm8LCsC3s1P52phhnoartcLPVkcuVjWM9Ev5fzgHB84P7N1FIa56CTjLpznUpHzwsztc/ipziemap+9l28Q==');
define('NONCE_SALT',       'SMK+6qLsHeV2l+/ry9LFd3Lka6xhCIs8fEUZzGRraPmmhyUouHpMk06OgJkuTlRazn/08Loqz8uO//CN/3fFnQ==');

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

define('FS_METHOD','direct');