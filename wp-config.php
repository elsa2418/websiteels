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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elsasi1b' );

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
define( 'AUTH_KEY',         'A+R4rk/}!4l|5qGziU>>~?|]95ErVwZv[Fh7p 4>jrC7TZ&<0O%-Q`6=%+%B1%X.' );
define( 'SECURE_AUTH_KEY',  '?E*Bnu1!oa]MWceE>KaHxoe@+Tc@=A,0 7K19k.gs.g ,xzW[l^6FpR*I|,FB*Bi' );
define( 'LOGGED_IN_KEY',    'Im_2<Ix@G.q6l[J|}*Gq*#`m+r?Ef9|j(9^$/;Kr/<-lkLm#D}K$w=%R]sKOcsFW' );
define( 'NONCE_KEY',        '}fYn@I TV9~$f/zyvhs^58q=e[~Iz*(0{#}(eCCJc~U]/7]$4zDL39n(:l)e,_;z' );
define( 'AUTH_SALT',        'q7J|GS>lYId!r5k~Axo  RuvCyKC>XDUL3ZId7ZE7CWtUfNyxCHd@cvbN_m!x__^' );
define( 'SECURE_AUTH_SALT', '(Bl|Y/!~$zO3D<?Z`TXn47O;i*Rnb>+VkF/UO>D56PdSyoN!?SsFmOwitWk314R#' );
define( 'LOGGED_IN_SALT',   'P@j~bPHWQ%B0|!?v0x]n_lX9(-~>6r|rGekKg#XpDn4|<hDNmCOW;&%Jsl*I~iys' );
define( 'NONCE_SALT',       'NjbKS-W&+6+4-t]u,>0^X[O+D`JN<$Azi3a8irYZ,*H<2dyt+HN!lhS!1yin;KiU' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
