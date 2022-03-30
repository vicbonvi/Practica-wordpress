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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'usuario' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'OT!<)x2.5MVKe##/5g^DJpu)Q8J3cN3W.fk0|lZBP}u_8hrZ:#%ylvhV6*XVv.`A' );
define( 'SECURE_AUTH_KEY',  'NakjcN/m&-P:A?;` }U1U$[s&k7&yW;Xb8Eh4gp7Wqx3M#AJ#+p:.ntDatWAMM91' );
define( 'LOGGED_IN_KEY',    'kFkLv2{UB>]wNm5PmSG+ ZA?;:>2$dE$3dFCC-ke#:1exeXy3Z!Yu%z~Ayn`ZyoJ' );
define( 'NONCE_KEY',        't^j9! })[g#9R@mH~4gKa2|<=6hNeF$9y6V>6!H@X)1S8>jc7Nn@x~-xHhZ|PT!b' );
define( 'AUTH_SALT',        '1[D6TCd9%%.S8VLFJk-mZuIWPe2:m&]_._SR$R:>lMR>L-L[x{056Iq+^1H)?u]m' );
define( 'SECURE_AUTH_SALT', 'Q@PuX >{e<sI0$:,MW6kbkm&`,EBOzV$u_Zh^4J#z_V$0m<)Rw0>$VWrDx>>H:Ku' );
define( 'LOGGED_IN_SALT',   'P~Fh0*lh&,9J,#Z{l~V{w|+^.3gY8m|T$.5pDBM&-vHq_$,!*/cGr~_HU vs [N3' );
define( 'NONCE_SALT',       'I6<Sf2zHHx`XPCo[%rah&TfMFd%)2|-UMfqiR~=ttBOlRno7(yb%Cyx2hUImaAo ' );

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
