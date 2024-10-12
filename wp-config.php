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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'www_eco_eye_cn' );

/** MySQL database username */
define( 'DB_USER', 'www_eco_eye_cn' );

/** MySQL database password */
define( 'DB_PASSWORD', '6anwAjkAmdbG8dJt' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')r^1{S0hqH9{89alxTe/`c=JFQ_]4PNLx.Z{CSoXprrUtt`hRY8Wa[hlG-M>Uzl.' );
define( 'SECURE_AUTH_KEY',  'l4LiM5t#^dRk},XP-L80kNAc~hi6iI_VqtQ#$_cRB?r!K~}1lznOrE0q_>])<Y*k' );
define( 'LOGGED_IN_KEY',    'X8C}E?VNLvI<C9r<xDZ @oetO*s!q{(tat:scB`A:_1c2rWV(gZ28kxUAqs`Jt%?' );
define( 'NONCE_KEY',        '_|J D`ymXB[:Oc hTJl|0CPW1gT(VqzoUHH]:wG{!{uE;*q&w8?wYtfuGrIpBLM.' );
define( 'AUTH_SALT',        'OwFBifLJDKcW6Gu?5;^Sc^pgE^QD[.s^4$=_eYp,A2|$bMYCr9Flu[JOV-<}r>gn' );
define( 'SECURE_AUTH_SALT', '0|!DIVe?&f}0P+%hP35gV[ZMn3:~^E[SuuD;o-yKtD5TBB]cU/%<4j-KF)ld5I.%' );
define( 'LOGGED_IN_SALT',   '!JAeg[3A~E&DE$*xA96Ufx6|jki=R:bl@TFz!W:+ki=wtKLfaw~)HzvS^AN;-hv*' );
define( 'NONCE_SALT',       ' ywB)r4))]&pJP]tLALD<-(!4pa|T7K`v-ESp5u!(U^exUA?!Q//k0=y#N.UG}Vo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
