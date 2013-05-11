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
define('DB_NAME', 'theatre_academy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'A:;2:S#Ir-ozUjBCyq@IK)MO1qsz/ZZ$ss.k1+AS__#]!}Sh^g~~s%Yl>|(*lT~+');
define('SECURE_AUTH_KEY',  '9`!|,W@K_;0m%+)@/0Ub5TL3^XA}ke,]b&[rMRIMdEs$-565y(}03## q^*GsStN');
define('LOGGED_IN_KEY',    'Syy[[! <KZ@;25:$Fp!bua${[(,!WZx:hLxcv2D92sSci$TiMP#Vm{~k7S!^d9Np');
define('NONCE_KEY',        'swNzz!RF7sW+`q1hT;(/A4#(z4hK;L.0rPjUv3luH;fCtzEiHXVZ{W]yuh hIWO_');
define('AUTH_SALT',        'WZF7oEx3#vpGOQ3Zp8P.4#?w[qkJeh5hE/h@l;+![DQanY8F)hi3az0cO&8&R @(');
define('SECURE_AUTH_SALT', 'd;m&UdK^gP~+S+PgXGJ0]cB*vCyz]H/qHR;_@y@HrC ^FgX/j&!pA/~`bpW4MBj!');
define('LOGGED_IN_SALT',   'B4UQN6|.s<:%VG!$`^8[Fg>[!B?7(4f6Hy<)l).VX;|/Kb@[H?_a=B4iQa^Ua27;');
define('NONCE_SALT',       'NVU(3uD;^5N%9lxJY0}Mb&w<3Cgz,k?(@xnX@TFGzpBV%j79WIB/jd>kIR1&#u!K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
