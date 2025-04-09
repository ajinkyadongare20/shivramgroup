<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shivramgroup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '$~Y:Gtq=Tzs1pz@3LgnRs62nu3mn1lG,JH;IA1JH}l`PCmX@B:.m&7G:_6dB3RT%' );
define( 'SECURE_AUTH_KEY',  '7jA~-o5QO!*ckrl]6u8ken3?J+M]C%SJ VD]3SFq0EX.Nu+]LCc3Aa[pj?zx9WTe' );
define( 'LOGGED_IN_KEY',    '_{c3)KabJ{z!BL[E[KEKs[uYTM)dcVIK^gZz3p[)t=~[F0{L-lzmXiW-N2!)&[GA' );
define( 'NONCE_KEY',        'R}+J*@*jv5z*J>T]#i#w5 o^Nu>/%3W)=jY5kZJ^qzj._Ne71<J)*0ske8?S}pLI' );
define( 'AUTH_SALT',        '[kG(-&FQh]m_)Oh5#8%.]QzRret)O^M>70/EkhT:(]1|N+{l@l;cb~H1Wkkz9;VZ' );
define( 'SECURE_AUTH_SALT', ';&0&.:3;k`xBqL~]3:@D&x% HQwB#9WOZlP/Ai?L?7,V}AE|Z{!jEFSFgzzt1xJU' );
define( 'LOGGED_IN_SALT',   '2whlPL5hL7ntH+S)(4fiZtuW;+O Q9r&k/[:uNKi]u %6^1pMNP?BL#IN?Qnby{N' );
define( 'NONCE_SALT',       'Pvuq.>FbsJ`[!YHRSE@0mPl&t2>F!]cJx.1&@d#t$Cz%mv4`FE3_lckyHZ,;B3k8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
