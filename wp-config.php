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
define( 'DB_NAME', 'bajqn6kcbqkfixd4uoqs' );

/** MySQL database username */
define( 'DB_USER', 'upouvd1b4vnos33j' );

/** MySQL database password */
define( 'DB_PASSWORD', '0aJVPDXP9yt6CdixBVOa' );

/** MySQL hostname */
define( 'DB_HOST', 'bajqn6kcbqkfixd4uoqs-mysql.services.clever-cloud.com' );

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
define( 'AUTH_KEY',         '3<<_S/8R9?]Z{#DV~3cN!:dk)A]xZA-A3ch&D1U%Q8j>S~+N5HGY *are**6EAj[' );
define( 'SECURE_AUTH_KEY',  '>|9=bTM@(LwnuM2p2V!oyB99,Dz3pVMWQ#PO.Q~Skw/hU> P#nChK#1BS1WmW)E6' );
define( 'LOGGED_IN_KEY',    '{k@` pGEjpPSC>{(.n+[3T}VnZmVLq~3Iw!+yj/ao)%R;Qb;&hnVA}1J,L(@pbc6' );
define( 'NONCE_KEY',        '&u ]NB$5K-NtziYpT%&0l4:$Z:RpwS;#4G=T,9Ks.z(RoM:o2@lx_lyl_Uw8bdbc' );
define( 'AUTH_SALT',        'r:ZD1oVdX</J(jvJx8!:$%Tiv>>eC%4Zbc%i0rgosTT9e2<+=!%_]Qt?Dsj[ wLi' );
define( 'SECURE_AUTH_SALT', 'y>{bVE)-aCo(,A2)~9!+qWtgbHJ+%/7%`3?Xp:zO;J^827LUfo<Q!PrWrQpu;J-x' );
define( 'LOGGED_IN_SALT',   '`,lp;TudT.)$TUm&i(NU&(VOuK}_t^SL(3ImXkGy4n)uhD@e#$:*N~M5l&*n&-N*' );
define( 'NONCE_SALT',       'vfK02S}oqfbib6|.~@r1nu:,gh-JjIE>c{?L$z55y,x{0uQD&yc!Sl.)@CeKu|5!' );

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
