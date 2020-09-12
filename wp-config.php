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
define( 'DB_NAME', 'myshopwp' );

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
define( 'AUTH_KEY',         'aP=1WGP50Bqirm-|uDcL)Wh8|U,u]N$[`# Wt..MIA@6QB_ AQu:sk|FehU?x<Kp' );
define( 'SECURE_AUTH_KEY',  '9`tjT:B%G)0gU,X%~9V~COf,fVi/x?0oX4xWZGFU3H3[v&!{YSTl/0B.yT[|4W9]' );
define( 'LOGGED_IN_KEY',    'Vba/Tj,ArLi+5>oNgy,?T&7X<A!8CykZoA8|NFapxUj-t+)K{S+Pc1jo7L!5mlQb' );
define( 'NONCE_KEY',        '~QSoDz*yaI*Ygt~$4a1@ty4QSSZaTp>N13N~ne0S;<zxkg+x:C}qk{P30#hRV pi' );
define( 'AUTH_SALT',        'QplYm0jH@0_m(+(ii@vG+Vp.v`x7$fbtF#YYd!%BiCD;S-o4JY3(f~J}[/_GF+Jb' );
define( 'SECURE_AUTH_SALT', '*x:/~3@{KA#AJQL4In~Ot}a2EC(/P|1]XnxiN8ITC5{s0RlxduhQgH9kal(`|1Ui' );
define( 'LOGGED_IN_SALT',   'q3,Sugtg#d6KLdpDY AJd4fWou)8sGwK^+,,Q>Hp.WNn&{b.qdWdP%|R:2i6WH(U' );
define( 'NONCE_SALT',       '^[L},S(89ykz&[0Ss@4W:G3<7>Nh=VKK=h=L{-@C-mN.f*zk7rqu%oLo=8.$zL/=' );

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
