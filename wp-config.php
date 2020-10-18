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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpressP@ssw0rd' );

/** MySQL hostname */
define( 'DB_HOST', 'zerone-addon-2341-72-mysql.zerone-1302-2341.svc.cluster.local' );

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
define( 'AUTH_KEY',         'C;g!aaS8dY>{L:-Ho%}1JZ/4GV@_)rTY[U`,&DlcJ+yN=(TLbTWD^kF!|~bneKD+' );
define( 'SECURE_AUTH_KEY',  'bPF4/NGCBJ;G<CzSVyAD)f:qWhWpL6|)!dO)s+u4_|JjIQ?<3)*a^ve~$HI3+kED' );
define( 'LOGGED_IN_KEY',    '!*j/>.U5%m7%>ZjSel>C+e=ABgvd~tm)PVdw7]8135CKkKTLMg_/7GK5=)K0fL2@' );
define( 'NONCE_KEY',        '}&|o3$(9KB|pa!8]HfIsY(8U7A&*KH*#}xu8Naltqn|v4NRt!].97@}k{OY`lZ&l' );
define( 'AUTH_SALT',        '&L%Q%A*>#R,8A$` x#)RaTK9;gOt:mFyj%=:|L]cOMAx(;GWL0<1Sxe$dzeO[KIN' );
define( 'SECURE_AUTH_SALT', 'W`Y,|x^0$aMCgCz5)9A2!)v1Aj|{gEGFdnu6V,_%@aKWjNWZp8#9A :>}77OI%wd' );
define( 'LOGGED_IN_SALT',   'NK[kz_vMvazp;^N5Kr6Xk=wqPaZgTe2XDLv%RQ9X7]H]!<VTQO+shU#E4B7Pie+@' );
define( 'NONCE_SALT',       'bIS?#%1,0udiEo0;`_{o7F<YCP13:,jsR&uZ|v&#F1S %}Ol(uN1<pmB~KRa_|O#' );

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
