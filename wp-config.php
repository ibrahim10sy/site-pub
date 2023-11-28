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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitepub' );

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
define( 'AUTH_KEY',         'kcH7.}FJugw2*)`s%e,& 15..InV+IHigJ<2E/e/c _ua}Ppb0Kk^CF)ovTn2s]r' );
define( 'SECURE_AUTH_KEY',  '?Aw^g}=V_t![<#PlzwnT]Qc^SL_l5w#+Qj/+#h&VGgO<HNntB!e6qbC}&Jl*awIH' );
define( 'LOGGED_IN_KEY',    'xowLbz1(3=M4d|t@m4 qd2Qt{C9Nd4(X`H^j1zg/joFl#Y#{sD_xd>8J5bCKTm/`' );
define( 'NONCE_KEY',        'QK#)_?naUFTz5C`Lt}h:u;eJOgWcG1as`~fzg7R}6!baZ4y.+=_0VPdrEkS-/1>>' );
define( 'AUTH_SALT',        '{-ob5W<h4GtX4><1Cl 8Kl{IrYD*Cr*a e97.NogHXt;Y+Mk,+m@I!Wr&FF:)aX<' );
define( 'SECURE_AUTH_SALT', '8} ,-xQuyazG=C9/Gtbfa3{LR9O|v<83*g]5v)Sp69>8#@t`r[y([F^vyyX`,jUC' );
define( 'LOGGED_IN_SALT',   ')G&0DqsWKo5:5 H=&)khz{::%.JO1A+ G|IFOc/,OW3h];rNTDwusX#]EumSTa8/' );
define( 'NONCE_SALT',       'b6XJt{eS)WhpQR1p_)+w3{NLjRWLhsFx^PS2%3>M#*5_Y0;:<PU{Bj=K=3-~83!K' );

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
