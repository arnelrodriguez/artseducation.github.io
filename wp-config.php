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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arts-db' );

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
define( 'AUTH_KEY',         'l_4$6FNENBJ?[>e@Jk[5V+w7P&Eo/}y?NyIqvZe?P,U+!BdULd:|V-~Pp34!11(B' );
define( 'SECURE_AUTH_KEY',  'sqT<_)ZB-j.gqR-,1F`7AC6D[ce,[g6>7_bp*gd9?;PY{ewI$E12~/Pgiv0.>|OJ' );
define( 'LOGGED_IN_KEY',    'fNYPXUBmMM^pZAK=@;$usX`6:gpTC*jxHNci.s#~Gf]ph=T M1)*GF31$2}zm4@2' );
define( 'NONCE_KEY',        'yRlYo}28d.LJBoW+N>m2[8$H&k~f;T;~+a1=n4E22jF@!WYT9SKr:5{/a8.tG%~0' );
define( 'AUTH_SALT',        '{Bv&wrJ J|UE%r8N3XOc}OhLc hT3xZ5#g-*)WCt+hz+(.<}/LFV{+Aw!uiwH.qd' );
define( 'SECURE_AUTH_SALT', '(fa7]BLxiVn7Rut&ooGubty%m-OV~=<NM$#Np4} &4Dv)1M2U}cdU[Xt6^]q]vOa' );
define( 'LOGGED_IN_SALT',   'G7Q}N3}GveFlg/(;HL(B=$p)7`@`sIGhF{+rbDfS1ImTA6/p`!/Yzz{3 }q8-spF' );
define( 'NONCE_SALT',       'fH-Q+2x~YfRT)*!xt[_:}i1cpx|mTpZX-K9;?`n*Is9_.G-p!<S02)-~r|GHJ]CV' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
