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
define('DB_NAME', 'wp_attic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'labuelle');

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
define('AUTH_KEY',         'M|A2e#@i93Wf5E1Yl~)#*3IqO;jS`T$;Xt$o8$Z{yD.xH03Z1!))?qJmhy7KCQUx');
define('SECURE_AUTH_KEY',  'ePMNlh>_1$.S1e#<i_p2<(G.:Ao$f/U%.l%]eCz#ki-srJh*G|4T,hV]^u#hpfH7');
define('LOGGED_IN_KEY',    'zZy64t5e=Qa;na.lvEb+m^22GqZ2I.Nt=<W!x:Fo;g~Xs>Hv~%d9$.QcB;kGrx23');
define('NONCE_KEY',        'fnj,7DL}P$4;<aCwO{n%%WO2V(DEQ1Bp1A-$h={6O*=b}DX5R)5zK)j=g#MN2:DI');
define('AUTH_SALT',        'GA%_vhe%_bzFh#$>lWm(9#06G9kI(-!sS$.8.rBonqC*h_{%qe*L&&kTyD3-?|ml');
define('SECURE_AUTH_SALT', 'I#PsbjL8,c>q]+r4$%T&lU2YnsiL_$zlBUE-|b5UErfs[gF@4j5zF@#>~;$@f3L4');
define('LOGGED_IN_SALT',   'xQFp8q:^CC/3.-fJwbk:0DNTQ.b+?I%YP&I/f{RRoDDbsIH*G=xwO}XnI-vA;xxB');
define('NONCE_SALT',       'Irn En*o&F?mr`Gk2j~PK7G3Ttg]-}9Fo6<XMcvN>`#xi5Hvxr!/MW.6E2Rvwmvp');

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
