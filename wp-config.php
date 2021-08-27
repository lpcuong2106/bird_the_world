<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bird_the_world');

/** MySQL database username */
define('DB_USER', 'bird_account');

/** MySQL database password */
define('DB_PASSWORD', 'bird123123!');

/** MySQL hostname */
define('DB_HOST', '45.77.45.184');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e=u&sS*Oun3Wz6hr2H,BiJc@o7TiW.ei >27X/:^e{`r1A!9yZ%hJ(Vr$>u#;#qN');
define('SECURE_AUTH_KEY',  'm)}eYsGsHFa8N3{rz4QtNx(|ql8a+UN]Y)M&0kp2LL`$~|_R.#G)C!w26+jZ@,&`');
define('LOGGED_IN_KEY',    '~@%gorD65{4,t*]f4+c}0f+Kzv!T_iwxQn:/2&g.+dH:Zk#K08 fpw1_8zii(iP3');
define('NONCE_KEY',        '^y@u2N^F__2x/c1@JMz=120nt QG.[:P2xy_5x6?Vt_`F^og5N1F1Z/9o6VFI#rH');
define('AUTH_SALT',        'alL5x5IAr4(O~^i@<M6WkDS[<nw8C#)jlg2]s(-d_]Z:LOE+Bhj`&ljV[(RW0r9W');
define('SECURE_AUTH_SALT', 'wTU;G(bKDL62i12mAfTd8`8[w8Aw%)y:Em?(|K2zMO6P-lipUZ4L;V>%aME^vBsO');
define('LOGGED_IN_SALT',   '1!txh0]V76+j u$v0/  fo_Hg|tW]7Gly^CD4K|$!9zW|s7ntC)E@lp^oz:4 Y$C');
define('NONCE_SALT',       'd/_!sZMEK5>C^^io{23zGpg{im:X34]s7l49DU@b)Ctd<ee?r:OP_@&t*Z3D_>iF');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
