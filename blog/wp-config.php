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
define('DB_NAME', 'sgw1332909094936');


/** MySQL database username */
define('DB_USER', 'sgw1332909094936');


/** MySQL database password */
define('DB_PASSWORD', 'Onnt1992!');


/** MySQL hostname */
define('DB_HOST', 'sgw1332909094936.db.6562445.hostedresource.com');


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
define('AUTH_KEY',         '|*QEcL[|6Dm_kgZR-:JMq!u2S6U?MB&eCwyOunawf@nZ+TG7sCpb>*]PzqIEeex8');

define('SECURE_AUTH_KEY',  'O[$_>N}X/tyi:(4g)XJKHt?EU v557!t+={s8<<?$txGjqnY|g3v5&ne2osE53B;');

define('LOGGED_IN_KEY',    '=yFAfe;E#h(eY30~},B?jvT-42u,|i9]R)e*NO8%MKoT{)Y-f(._O^]Y<?vp^dli');

define('NONCE_KEY',        '#^b4RQDd$S$8;[|7.8jH<gvX3a-+}R7eY{]x+I[UP8r02w@%:a o-V.:t5+Q<|-&');

define('AUTH_SALT',        '?%i|?M=c0s~2:c*]I6D~2).MmRx24[!~2|v|/;77Tx+f4WBV-U%gnoT1!(VUl!?c');

define('SECURE_AUTH_SALT', 'QBHpp9o2z$nM : x4fk{71y9(G#xl[F`R,TFC,F{#.}J/ZNXKYT$qA@[DccOK{{Y');

define('LOGGED_IN_SALT',   'Wz>l`h7q+NZ^Dt;%5`):qj`{zX8d@GDW@.u]{GVs|AtyBR[x`@I/x(Udn9|Lpe1u');

define('NONCE_SALT',       '%&VS{(9y-X7bS|K@7n?|_(ZP-p-hHlB)+u.khFIIM=]nPjYj$2-8]_gFW)+>IN${');


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
