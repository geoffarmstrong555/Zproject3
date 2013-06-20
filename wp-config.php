<?php
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
define('DB_NAME', 'wordpress_g');

/** MySQL database username */
define('DB_USER', 'admin1');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         'hHndsrZ^<(m5O=X2dl#+Gz!&p)sf?KkCt4d+++n/?-~[xio6@#AT@Jk8nTAX+Fg*');
define('SECURE_AUTH_KEY',  'W++]-Oo(gA@0TGB?gbxjqKY]!M*BdY2@xtSaVzPPMiS`|y#H,rh8Js_++C~u_0z+');
define('LOGGED_IN_KEY',    ')9L ; *t^|3uCi}DC<Z;mJeL _$)k,qg?[tt2OV.y/<fZhf?`+1+y|4lf!PI:Ydz');
define('NONCE_KEY',        '7yzrUi7EIc~R2:Y|1BMEdfgx2~>_rV|Asey7!Cq/n#C[aR<auNEHnaoFsXJ:n~7y');
define('AUTH_SALT',        'E||R0*_{l#qaA>6JlZO^q/JaR 5KpE_c/s5FW,v>^^BfroM-:(6TtJ~8jk%:=6fb');
define('SECURE_AUTH_SALT', '748{:Er@(_3|&#Jm+S|$owK7r?/C!gb-A48C{V{e#}/j!|LalsF+m N;/RdV/I9R');
define('LOGGED_IN_SALT',   '+ue+x<t|ePfjjt]6BBLSu;;1gTu4s 4al]6kE)CPaEow<NJJx.@e%r7y&0IefR4g');
define('NONCE_SALT',       'k:pcCDXP.q,nHWSM)|tu=Yq*#bYb|!b,(IqERldBjEK1-Km3w7%T.Td`X kV>xsU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '20620131942_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
