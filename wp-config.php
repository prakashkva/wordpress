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
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4vkW%+yVA<ra.)@m&Uu (^GJ9y>>JR{%$@GnW^m;w`!L%yGGJ*&8IW1?q>#1L^jf');
define('SECURE_AUTH_KEY',  '*K;&I7:UD9g}4o08ac3P?-Hm(}ilg?m$mgm*4=Sij9(2YPbkE0ha):GgiUl<h+5{');
define('LOGGED_IN_KEY',    'y8<Ce|jAO#m=nA{%J+}Mujj2z2GyA??wiMn,=2mTg !H[9,*/UD?Ba4IuC1O{D9[');
define('NONCE_KEY',        ':0WvJ;[&D}50o#%M34-:x6GV |p0K5e@;^MhzKfY!Z=me#kY}6*NH .2[)Yz80Mn');
define('AUTH_SALT',        'thJvV>H9*|4/O{hOUo5w/kyycAD,$U}FN?PFgD^F[a2)*dW9?ihSD`p{f4C6DP c');
define('SECURE_AUTH_SALT', 'e QPJF3w/S].#YEr{tsTTb&Uxe2be/t4PuigN7F8+`6Xd2~`!+6n;%d~P+{entYn');
define('LOGGED_IN_SALT',   '3Oq6?PO^pNN:eE eWmyE>;{GvRBGK]_Di;ek- wf4!{&;5-xiI7xqCQ^W<.>]vp2');
define('NONCE_SALT',       'l[-CSbD`60y20VBB~ck4ZN:.Y b^e(&[`u5|8?D8KVDLmJHSQ}1_91_uG$EK  NV');

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
