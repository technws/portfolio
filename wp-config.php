<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'CQ`1?Y! :1Y%iEC[u;s@=B:d_JX 0t-fW`!PD0@Nm,y8X7Pl(zO_&6^v$p{X[3hJ');
define('SECURE_AUTH_KEY',  'eW2ezzM}RgdQ(sMX%4]:30^cWNvcWRq+|a?N|wxI+d?~uO~^8,y$9.{@]1BXBVqj');
define('LOGGED_IN_KEY',    '*;!U/1o|nz)Msc[+g$$7s6iB-+xe*qzzCAoHnyy{8`D-pmGr]4U_ KB?#5.Q6Ea`');
define('NONCE_KEY',        '|s^;/uJGF5-d_UWcfN/~OEgCd3:]-fs{jb8o+r7dy2sgXNE=P _~9V9g#]W5$J9*');
define('AUTH_SALT',        '+.dvY/2E: yXyo|P8SNw*1$3LN|9xN4(_}44*-o(s)JYERrj=^i,?_Amtbx.S+0=');
define('SECURE_AUTH_SALT', 'U#S@#8tc`^k:dJIw0n7I,akj3(;jzPk2z.{t7?OVn-nCsr<{%mH|HM_8~Bz#$|mN');
define('LOGGED_IN_SALT',   '%fsC3~Qb0ru_YPlzT}:Q:mRw#:BaTj_Q:@M^NVo7N5[E;(BM:x+m*b]J}Vmlbg,p');
define('NONCE_SALT',       '63mC]nu&Knz^W,UdYW8:SR_=#lX6,t0;6(OXC]D2I/ZlJnxaFzsuPe>=[]2-JFn|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
