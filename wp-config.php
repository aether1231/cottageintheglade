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
define('DB_NAME', 'cottglad_wp574');

/** MySQL database username */
define('DB_USER', 'cottglad_wp574');

/** MySQL database password */
define('DB_PASSWORD', 'S4T)Mfp-52');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'yfgcrncnvyvw2f8bfzb5d6i8zcdn3yogvqkeooayc7pec1ltwnhmldgszedg7qnl');
define('SECURE_AUTH_KEY',  'avxpnnnz3tnqbbhlxholiop0x59e9oesnidaatoj2ru0tqv4qvsqvbtouedh5aai');
define('LOGGED_IN_KEY',    'fgyk1mfz0zekem2x26b4wghob0sqv0yq7sxwb00pzurlqmbzwqcda3qdgz9os9he');
define('NONCE_KEY',        'dil2ccvdwbvddhsxpzqq853dzq7givweih7ctjrh0fxp9pnloizfbj3sx2pixz95');
define('AUTH_SALT',        'vmveim11myhjq550eu5av948tsj8yhpvolxippeps5gvhmeqs8gxganpcvrxwzdp');
define('SECURE_AUTH_SALT', 'n6sf35mbekthusirnp80eu1oharjtltunoaiqz0rmu2xz6cnlzddhaxgaoc74hlw');
define('LOGGED_IN_SALT',   'xl5i6fjvc30e5kiui7x1hnnbvcmtpupnjfdgb43qorksxftirumf72i7rb7jmj3t');
define('NONCE_SALT',       'a00f4ngwrkqjsngn125l7iqydnw39m1fhktqnomn6ppgveovf89dpzwy2t5orhki');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpki_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'cottageintheglade.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
