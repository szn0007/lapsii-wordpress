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
define( 'DB_NAME', 'lapsii' );

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
define( 'AUTH_KEY',         'D1#h:%#%C_]doK4<nX~z#pUr_*[:pt+2Fo}&@x u|-:^q/j]oLT(i0Q|_]D,J+sh' );
define( 'SECURE_AUTH_KEY',  '`OJSe &SOQ|0TrS!-_Bzl}i4]jO+)}^gPQw6-q?$P!2Fh[X RKqY)@g4i6}?b&8+' );
define( 'LOGGED_IN_KEY',    'ujQJCT_S  cawD=!b0(5;eb9Usx_CD4D/gs|?cE2dmY)w?%Zv!)bI0S~G.LGS}X9' );
define( 'NONCE_KEY',        '!Fxvw>%hf^Pe}fm7O)caR8K9~M~(x7TbgA{2z2%ZMQ#k3AX6r:*EBbDYzORZhH^e' );
define( 'AUTH_SALT',        'EESulb^t-0j;foY~[8>?;Nzm86,8|;Ek>c>QO9>&2K/GG_pX.{SYhku$6&nNUW3d' );
define( 'SECURE_AUTH_SALT', 'yMe_cc ]Bh[8eN=/c@!oq,JT4p`^j,Aw2b4~8^E/?Un@vUUb,7/!T+!]]!zOs*)G' );
define( 'LOGGED_IN_SALT',   '@=|GkL|E!P7Wkjq5ct=3/7^ktKWh.+4t1h9-MkG8BU|^X94*GfKn5{w=@BIHbDz9' );
define( 'NONCE_SALT',       '9 Gjo/s_`I9w~Kul|EPY4_m(7pDKR)z4[f!(jNa+~`R=J&X8/E5/wNZYI:^u+To>' );

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
    
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
