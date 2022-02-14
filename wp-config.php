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
define( 'DB_NAME', 'wpthemedev1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'i,0f?;Uz%U#Q|gQB>,)hisD}b{FY&&8]abX<4RT&GRSs{A}=y$J`TTm`@4Ef@C/-' );
define( 'SECURE_AUTH_KEY',  't)#Z90hTnCSLt->yyN/luYrrT8RQh=vWB>r -|I%@)w~)P!rTIsDDlF[Y7D@tj21' );
define( 'LOGGED_IN_KEY',    'IOn/0Ci+ >#o8>)D(HiG]!>Ig#{C,T4X/Du[wT!Em%Q!aU]l,u;d2-k>!`m~u|VV' );
define( 'NONCE_KEY',        ')<8hSTxK&z:n[PsW)yTZnI]er?PMAN!nYKpI1]evGkG H)|5^|+[X+cT?Ok[; ZG' );
define( 'AUTH_SALT',        'v)iuF783=R3aA6lojTTm}`AE_rv78n~K-3zi6^[N9b%[#7)jLI-mOK(:5>=eW3NW' );
define( 'SECURE_AUTH_SALT', 'I-~op%S0KVe28fv iv=>^UXOMNs$aTMqL{mViG<%NUr0j!8Oa{sR9`V^gUgQvV1K' );
define( 'LOGGED_IN_SALT',   '3rF4{0=PO5TsmQowUR1M2i]:/sJ{?}F$}yZRf4;ZpQL]h*O@ZULR`)<VWY(~,^%Q' );
define( 'NONCE_SALT',       '+p%;vu&@@P ]LYc{&?6qAj3.`4/hG_(939&gY3;!K<CIoel+KlQt*Sl8cOn%i4:V' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
