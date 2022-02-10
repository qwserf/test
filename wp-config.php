<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache







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

define( 'DB_NAME', "serwer119846_frezypl" );


/** MySQL database username */

define( 'DB_USER', "serwer119846_frezypl" );


/** MySQL database password */

define( 'DB_PASSWORD', "4y8WgCcLKqQEDZVg" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '%bwrLr2mes,OI2<eDyMAP)rJ)fvuSDlh|o+)9V(afUv-Il%~: s`>YJ6 )?=XDy<' );

define( 'SECURE_AUTH_KEY',  '?QL4:m#e!e,t!{YE^a]{iX#MaL0*GJEIF?~[qieY})!/u&$!!+BaQ>NZx`$trUmI' );

define( 'LOGGED_IN_KEY',    'U/(2]TvU2Cot:=,TB,%!7Y2rpUWa>+}rVj+L#&zH #] 6Z;O:lZ=IAp^(V-A%(EP' );

define( 'NONCE_KEY',        'y+AlQ8pTFv89W&G?mgh:D&yF3VJ-;2Y7N{^>S^K*6;;K7:+yA)Tt[AL1@+O[3Q2E' );

define( 'AUTH_SALT',        'D8nabc rVh*ptwR)c%x]rB`PJ6l0$3}f|@=ea}7XX{tf>rpxv3hXUeE1PZP^K{4L' );

define( 'SECURE_AUTH_SALT', '=cu0A,L)E!fnqeBX@Fuw#<8/4wO@)#ohVu-62s#T4lbyo,P5J5RToZj_|tK1kkCI' );

define( 'LOGGED_IN_SALT',   '5x.T6dy]*E$>K$ANd%*Y10OK:|k,L8Pf< bn9^Codj/JWs3Xwr]4lyj:86H*|ZqR' );

define( 'NONCE_SALT',       '=~H,E1k/!*qi*6f,k3y)&=VLf9-%vM!ZP;7qVw.3JIFs1JN!OwtWcM-<SxGENl0(' );


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

