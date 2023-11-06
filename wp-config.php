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
define( 'DB_NAME', 'mishpo' );

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
define( 'AUTH_KEY',         'c-znfqrZ?sQ_[q|<81r6:+./SD2M&MkK&C#%^Zq-dm(#TuKxZNW[!{!tl-zrh?#e' );
define( 'SECURE_AUTH_KEY',  'J*BDqj1,[xntvvZz8~+.^Hl>3T,)W5O7_~CZtuy4d]$`,:V2#,8pl&`{yq1mo,T^' );
define( 'LOGGED_IN_KEY',    '-MO:| zl=~HOSukNU*hMiytzg4rWV[vBRfM(F~+f|Ui=I5P3R:Eo;]|W/v28jgK^' );
define( 'NONCE_KEY',        ']Gaib&@5E65MX$q)6mc[=LDI9Z*J8Kacn~<<FBn=lFq#)u+ey1l&a^N (B;M7?N-' );
define( 'AUTH_SALT',        '`mLu?vpw-I abBDl0uo_p%x>V{J s*zf+q#|](Dct4+/94RvU1hNoVkVCd2Tbl>:' );
define( 'SECURE_AUTH_SALT', 'zv2a~a>cGM8rK;F(VB.Z`bgChXLS_DE-(O?EC1<_ez&g@<XJK9~]lzEqFi=<2*eE' );
define( 'LOGGED_IN_SALT',   'nC*qL`M&Rd:L2Tm;<HHk95`d-i#d^!*tOmza$6Vn-+(W.{u}n05+pDO`v<,Xi}?^' );
define( 'NONCE_SALT',       'OKT/Y$}]_B?yDAM7v>TCZ#~$Uf<)}gdx5)bJ]HO-o{Wz])#t~V/lpdiF!5117t@v' );

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
