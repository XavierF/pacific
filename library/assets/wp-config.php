<?php define('WP_CACHE', true);

define( 'BWPS_FILECHECK', true );

/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pacifice_wrdp1');

/** MySQL database username */
define('DB_USER', 'pacifice_wp');

/** MySQL database password */
define('DB_PASSWORD', 'G}bsa+D@g@7t');

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
define('AUTH_KEY',         'aouxyt636jo0blp06ozt0f0xrn39lmq8kox7irguynmesirxyw2ta2sy0yz1sacj');
define('SECURE_AUTH_KEY',  'c4bwt8lkrbymwexolugyae1bx3mt0etzdkz7zqs7cor6rxih1t6msxdqdxxpxuji');
define('LOGGED_IN_KEY',    'zf3gxj4undswlcadompwj6axbi7zuherhjjcqvepw6ea0rgn1x7l4fkjxuoggkoh');
define('NONCE_KEY',        'zjdjw4qb0yhx27zzxxfyolac0mlxqwfkxombytxmjx6d0zoqunucr1k9gamrjv0o');
define('AUTH_SALT',        'k76nfq3mvbca33sa2wr9j2florkewc1n0zdfzpbygr2mfse3vefrpbaejee5fyvh');
define('SECURE_AUTH_SALT', 'nv9gtns6ft6brzfrlu1wj4mdbvaltrthnoibsn7ivgen0sh2kz00plo0fg72p5co');
define('LOGGED_IN_SALT',   'oexsjppe2ntfqmagavb7fmu6tbpdpca5ivffzhfb2orwhcme9leb8kndabeiy3c7');
define('NONCE_SALT',       'lwluyvsvt3jbi1ldh6swxppyrjgmnz8xbqd491apjvrelxbtz2l1jiwah8kfetri');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'vtzfl8_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress.  A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define ('WPLANG', '');

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
