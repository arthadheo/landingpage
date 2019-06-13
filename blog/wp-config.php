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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ')CtM!Wb~u`>}&WWqn.%UashQ#[u&C(=E:Vs`w?CV/KM2Y|{5E3uI>Dt(-T4c_U 2' );
define( 'SECURE_AUTH_KEY',  'R!,-Od<I;VlI` e.q0/rD*{e4fM<h!9YDyhGYSZI8]6+/1w=,}q^cB#$X9aD;24V' );
define( 'LOGGED_IN_KEY',    'UT&+]NMIwKE^:yi@X&Xx&@SM^</0]q9JK*Dr(tR[?B5*WCjNf.jN0y/IkDLCzV*=' );
define( 'NONCE_KEY',        '&WmFESaXE.xWG)0pUxW@$W);,?/{KyC[7$Pz)*mA4}VZ<__KwQ.Rc?_$36{(%7p/' );
define( 'AUTH_SALT',        'sV^.:3iCpPPx4f.*k{p/o}[w=2,YGShI;pd%Yas~2~!6d0ldEsB&UseLi}BQCrG}' );
define( 'SECURE_AUTH_SALT', '7K$3swl5y1VX@^Hue>De)C|7wz]J$c*nFG:&gM tO3Xh,@ZC]5q<.O^jrrBxVd;`' );
define( 'LOGGED_IN_SALT',   'sE; Jh}HL5-sF[{}K{[Q[jS|Ns*Gg^b{WWC3tSjpItxH+;*h[x]n3`nHZ0i0>djW' );
define( 'NONCE_SALT',       '01]XH,6^[ K9;vd36QVU%s@iSFi~Rs:ne+gI#D[kN36);+|z96sHjP gHHJ;,n^G' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
