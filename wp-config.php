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
define('DB_NAME', 'db_stephie');

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
define('AUTH_KEY',         'W3lQ?pM)T5+|djBD*Sz7Rv1_|uJz+L!(Eqm&pZf/@3I.qMjay7+${GSOyj&uuz]/');
define('SECURE_AUTH_KEY',  '7X()||f0+&.Wy$GYZ^f_|o#bT6^ycq-.KE j.^v{uA?z..,}S^&+;FsnMw&^[QQ&');
define('LOGGED_IN_KEY',    '$)X7FBsm;JBdu W^,,Ra~,&2P.qt7o3l[.Yn<DOUt407,jz+7L)2}?K83aN|Kx%b');
define('NONCE_KEY',        'Fs&5*l+co%14~8*@gupup+9yJH-&2#$#k>8X>uF>VMN$!chlSR>U4PQf36UpKpEb');
define('AUTH_SALT',        'lyWu;WAu~hB#kN&rVbiYiEQL+At?:Z38~+c%N|L+xzfcZ<=b1M2@*Bx1T(1_A|m_');
define('SECURE_AUTH_SALT', 'cSr>Hd#0F:|`dnY_,(HbK2Gcj]?*XX*k:A`y:z%TOioVX&[^C14&NT0oK[#[[w-o');
define('LOGGED_IN_SALT',   'X-(~lvVO 0@[5_61S_zP;/.gW(+=yp)G~BP#SKKDZyI@z.Ur|x9-we}0X&!k~/=o');
define('NONCE_SALT',       '4X@>jK8MYnpKgDzMX-yX}c87AIm7@VOI/{/$iR-I<1ajVbCd$QxOl-e?^E=Z;B$0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl_';

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
