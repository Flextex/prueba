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
define( 'DB_NAME', 'flex' );

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
define( 'AUTH_KEY',         '.Lgw!9n,eu+Tpjz/%w=ms]:)bNCC[i5djzO]{]l&0+jYc@$++B?A^BPa}L~A{Uui' );
define( 'SECURE_AUTH_KEY',  's>c|2<`G!2~{ }B|:.oNaol*$2@gQNc&|$w3QSB(#WJnze In+?H q3`JXUh<o%{' );
define( 'LOGGED_IN_KEY',    'CV=M}wBVROer2!i&gt+OfTD4R19h93SF7pG`t6WsqTd/Et)R:s^k@R2p5/4%f:{M' );
define( 'NONCE_KEY',        ' pq%F7fa9$p2j$?OlB1M_*2Hp>3-l{*9X+&5?HtCLa)N}_jUQ)3|8cDH8dSP*R_a' );
define( 'AUTH_SALT',        '{p];<v[d-4~/* GLY#A}bA0uok)*nXY47#;?}8lGAPX+ZTzmIPr|.fGOW1d[F0a0' );
define( 'SECURE_AUTH_SALT', 'YQ-i~S`/4*Co*%ZRp`V#FRM,RRX@E*^F&Jx@%9aaOpK2udsz$f@AEfuE:!oUwA1&' );
define( 'LOGGED_IN_SALT',   'M*GT}PPH%yvw:cWt=cnH42&D&_9,=D5g8|IK~ r%IQfA[O*k3b%.Jttj|$i?$m`b' );
define( 'NONCE_SALT',       'nC9%|*XlR ~D<OyGdCD3;MoZGZ-Y}DH6eHx,O6|J4![RqJMLCN&[;kLt`GkK)Nl_' );

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
