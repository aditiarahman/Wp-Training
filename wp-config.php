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
define('DB_NAME', 'wp_training');

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
define('AUTH_KEY',         'C%M:K`87wIpAS&Z=UBvvSnK8rr^(n}r:ML0y/tMWV<@Z_e!!?}tR@6N> ]6KlhJ]');
define('SECURE_AUTH_KEY',  '|fUVJvQ+dfoHN8$ AyzON4__~,sS(B+|HS(;>^L:WMhpcs+^+b=xl>nFspWU}+91');
define('LOGGED_IN_KEY',    'qG+z/4(ko!+Z1tVXrhEya6]vZe?;]U-VkoH|AoCiDep~]xH@o=mg CGphN:pnXh&');
define('NONCE_KEY',        '}hVJNvsd0]r9q#8~^/vi~LHoKc.x?ypYvW|pO/h(?/)P*L iM],U[$:DR[++QhNI');
define('AUTH_SALT',        '-5pZ>CctfEm;HlNJahnM.|!q+H/2;l?Uz.;;{Ofv |>6L]jIR+GH<(:F_hgKMY9E');
define('SECURE_AUTH_SALT', 'B>V0Oir8g#_dI^sHN7VCc%W$1P_2yIpla:4T9r]$eKDb:g!P7+4^^B:B=IT9C>Sk');
define('LOGGED_IN_SALT',   'kW3M;=;GL,f<{*K-9OrvA+Q:zzso_+-W(sHdJ4ic&:v+c9: %WJ|ISy:^;%O-yhS');
define('NONCE_SALT',       '?No+bodGlewai+N`-Qr vldt6]l$`>C(+;YGiUlpuehFovH9NSIK`VX=P$tVi|`P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpt';

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
