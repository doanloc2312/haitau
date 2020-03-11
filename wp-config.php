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
define('DB_NAME', 'haitau');

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
define('AUTH_KEY',         'Q$n#|bcxX0Mp*n.RC3.%gyHOAIXSC6Kispp&!9yOca3(Yb#hPm^RbpQwLn:EQKu5');
define('SECURE_AUTH_KEY',  'K5@{J[MyzfYA>)Bi.e9RBrD%^3J3b5@v,cQ#J5w&Y`jf={gF655/VKB@< +8FRJw');
define('LOGGED_IN_KEY',    'jHO6%s1_Qr>Cr1T[de.q$l]$1E^g8VL<@jav[.Z#J3kCR;C9j7jD9|WCLFfo#]a;');
define('NONCE_KEY',        'LcCDk7K3.|A;J$YZo!eNH.2%I|H_uAA/?vup]/WE6}%U+cI5se6-7F$%m uN)AWn');
define('AUTH_SALT',        ',&yrpM@dpO=(5++LAE#au]Krpm&Ch@fxsvBJF.047N{(^OYgi%XFp;7r<m;&8HxO');
define('SECURE_AUTH_SALT', '2r2Kch^c{ @Bk+h=s1cLacs<a+(-P*3,|bASeZ(mTh71?F?S_snjD5^XOXQV}W~Z');
define('LOGGED_IN_SALT',   '-_0]>kT`#Jg%CVJiT;mP]6<kh>wvZRHT$E9L+}hFg%q0*1xU$Bh%9sx*9K+u@H%/');
define('NONCE_SALT',       '<*xNM},Vz8.bt=IBE,/{*i-vnfE}vBe*jcNxfm=>_F!8;K@veI9ihP%v?{!E$`y.');

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
