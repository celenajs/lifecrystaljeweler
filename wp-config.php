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
define( 'DB_NAME', 'sam_lifecrystaljeweler' );

/** MySQL database username */
define( 'DB_USER', 'sam_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S/852*963.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

/* define('AUTH_KEY',         '<Mz. ^2 }[J[-X<MpJ0Na=WYM<BMp]|V9[-;loag+EP|sWOUyR+*i8u@.[1Vi2Xr');
define('SECURE_AUTH_KEY',  '9g27%`i|&w`-c~@b=hr[bIgyE0]w+Hg~^2wxF5wFa4k>+$XwbXfD=f*w8L=MiU1T');
define('LOGGED_IN_KEY',    '> b=<|aiF-oi3lqnnx!0_@CSi<u~|+_#,foWZpT+5n9_?Y*!ICy(6.Lpw>z+7U29');
define('NONCE_KEY',        'p0:h;ao$r6z:07cIq,kuYTg$[BkTK;5RZh ^)r6<-gMTXLC^qX(1a:m92f>ke~Aj');
define('AUTH_SALT',        'zx%/a]b,#d|e^=I` 7U,pP[nvwcb3-M`-=iKFZ+ya#k>03,{}J<W+p_5p1+`>YUF');
define('SECURE_AUTH_SALT', 'x!#Y#l/tBsnCI o<lu+kX,dpopXfL[C7Ft4H0G5eS/JXx7*VwL!r-FXJad@CM}S7');
define('LOGGED_IN_SALT',   ']a-7`I^DA{K0Oyz I=kAZD)fjGa|vTTE0y,50F&T-|deb*A&sgS_07EhiomM|Kz7');
define('NONCE_SALT',       '{_jx+GFA&W-O+73[6Zp-=xy4c?|rf|VO{m8?/PgSL9[t,yaB7BE#Lq_ey5+INVza');*/

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
