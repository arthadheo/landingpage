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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         'j=XZo@Fk<}f rDLoYEI8BQE.E+b*)g`Eld]F<4C>8)BIFxG=JC3ATUH%y!Ua+A^a' );

define( 'SECURE_AUTH_KEY',  '7#Qq/<.ai(^[x3a+F%DeMUF{g;228aEbtnP0s`L65K}QBwh^w9/rtZD/<)sv5.Q^' );

define( 'LOGGED_IN_KEY',    '`X8lq[M9~7HceWhN6W=)z`^TQ&1Ka90<nL}OXKOV$wR*!T-.d7/J)VuRmo{bfQQK' );

define( 'NONCE_KEY',        'n[]H%Zl 9r&~<HM2y:rc(4cIa~Kqg>D>S}/o0dm_#}2.<.P<j6|@fnn3iZRD@&hg' );

define( 'AUTH_SALT',        'tIIh$k}S2.%MJVbUFx14W+niD6(mMtO}i|P&q%PZ4|I<u4+24*zPxR5[wB{omH`>' );

define( 'SECURE_AUTH_SALT', 'n)TDXo.nRMNcbZjy*9_`I-.3qcQ>[3&69})$kziMBowuGl{N-G4U$];W<XuUGbgV' );

define( 'LOGGED_IN_SALT',   '1[NT[;5Hssvmb_DsP2|fq?,&jKwDL&6jv0jxE?cVC=3UJloWHCCaa0D:/Cr[w1Fh' );

define( 'NONCE_SALT',       '%M=@~G@O,=?M38USIP|F@v1P 5{5kI`sg97Vmb2vu,#^+>Z_ YA.Xjr2UpW+I!@T' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_zoomin';


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

