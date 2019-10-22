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
define( 'DB_NAME', 'university_db' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'ihnb0aJ:e;=<1vx|l>dGX;!IT*N#IAgc1*ALEl=,.5PK,n*`bk C<^1g |Vr_^C3' );
define( 'SECURE_AUTH_KEY',  'ED[47d1}SkcW0sXWM1u?/#bkVM?>)wfLk}]<8<p@sMz3bl<F]}{d,%}Ml-+aJ@%V' );
define( 'LOGGED_IN_KEY',    '/&|1V/2}r}iZ;x%#y|1VnImA,dCC?!KcY/18%D1]6iHdlW@]/=33F[X2Qq$qXO_4' );
define( 'NONCE_KEY',        'B!dql7JLZ~}wal%Mc<v~d/^xkY_8|}bgN0OnkiGt*{^]iU&s1B/^/%j4yGkTk-5c' );
define( 'AUTH_SALT',        '%pcT.cIoqrps(&NsW%i?Q4;vsus|rn*0Z#&z1]mWg;3tQu2:|1>1GklPS@6:^Z[_' );
define( 'SECURE_AUTH_SALT', 'L9c6QEo<3dw}q6<o>og111g*;*%Q?6Z>S!_pKU8J!Mc@a nZF.D|W])+zKR)WK7y' );
define( 'LOGGED_IN_SALT',   '*Wx4<PwCfmmP1^SD)~KfE`!glKq>a.2B=|g:[b)z!:~}`X|oidIV2`={w<Q2]cc$' );
define( 'NONCE_SALT',       'k;@rYQphsjlF#*RhBB]yt>nO8B -Ch8J55J[ZH~=.>kmTdn^?-Em?l.([0xeMufq' );

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
