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
define('DB_NAME', 'db_sinje');

/** MySQL database username */
define('DB_USER', 'db_admin');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');

/** MySQL hostname */
define('DB_HOST', 'dbsinjeinstanceidentifier.c5norroipcoe.sa-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'kJ`#J}FOxpP&oqcn&~Ukr#L+k@?J!3#sS;G:d$-&8AX-1+aO2_<%O:+i#Qyqp }.');
define('SECURE_AUTH_KEY',  '8c5O}uBD,nA?|K3EEw+Nf%+?+DB?fF%^as;blDK?Nj*P0Jqf8c@o8q6Fz`Kyk>$x');
define('LOGGED_IN_KEY',    '=3IsZ>x+wEXz|8fq=ciC7xZ(}fYNi=e+!cXv@3{8*-Py1*f^Nxt/tv%ItO(?1/Y>');
define('NONCE_KEY',        'ljp{NK*M7-b+aLv?*wE-Yci8(CY6,c5Y(xe#w8tdDr#vQO<ut,6fq4vN2oY#Nz&8');
define('AUTH_SALT',        'fEaI(dCWF$jo!_-.~v3Y)so?Ls}ZE(0T^^K#pYd>AcejSc,RE`-bu/qGpO|ahr`B');
define('SECURE_AUTH_SALT', 'vWn&O^v!|.g-3guf}wBPj(`80^bb}zcfrAJ]<hP/1V~W;8V|:-_TvWm~jm8wx4b@');
define('LOGGED_IN_SALT',   '-_X-zd2D`|=W,m!mS<qNy3a6L4pGn&8{/3<Z#SP098|+9Zi]4X[mEsk%H|sj:C8(');
define('NONCE_SALT',       'co5+HNd`xyiM|>PeO-:)K-KY,zK%g7NBV-dqD(0n7q)$XuL*M3?XR _U{g1:3?gF');

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
