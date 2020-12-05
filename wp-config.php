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
define( 'DB_NAME', 'elmono' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Biu8r8U r+*v V>vaInR#D35&U{b~Zg)[omrLi1Q*MvW^/aT2wCq+IO}Zz,)JZ)N' );
define( 'SECURE_AUTH_KEY',  '+vI!QZ@kR=:32<++~Umt`zOb0SfJ#,MtykeQxLg3Gu#SZ$L/ZJiE@kgzx](@_sy7' );
define( 'LOGGED_IN_KEY',    'oBJGhb#fO5Z4`Njf]V.}}DUgw{1vS}oxV(ijZx w`i|.!qQMB=^PY$Bm$w^=<Qbs' );
define( 'NONCE_KEY',        'K5fH#r]za/5t1*&DB%N[NR]b1axyB(z%QF+]BJ|n3^:M~A56hXk)e>1 $r!%]uQd' );
define( 'AUTH_SALT',        'Q_k:cjk/^NBE%/V][DeVaoVLxgG{Gj9axf<tj~P>Rf[`h,OeQ)RyB<vRog 4:G|d' );
define( 'SECURE_AUTH_SALT', 'A0*0It~D]L9$/zw6`(&<dA_LM@.u7JYlhwLn=rENXmh#l>y(//,9Lu-$_8LtFS8x' );
define( 'LOGGED_IN_SALT',   'io mnZ[RRYQ^u7tTzqp-}tb]R(OB22:{?7CrtD~4`7r|+5;$!a.8VI^s/zOPAS-k' );
define( 'NONCE_SALT',       '`V{=iZ*(1j25`U4AsB(T*$n|] S6;4v}!iy~IZ%u_f*dZ8Xg/#WaThX84F93-LW%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'elmo';

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
