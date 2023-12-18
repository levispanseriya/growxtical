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
define( 'DB_NAME', 'growxtical' );

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
define( 'AUTH_KEY',         '9Q:jGcVm,QLvN.=C*M{.f+OHA`G?Bs?A0l:VFwQe%T|XH&vbER1v;w^LzKQEjB~;' );
define( 'SECURE_AUTH_KEY',  '.*+fvP3?q}Fi ]Z0[XvYpojM^DE,4rAy%hsV].?4uNYJjyakAm`PbLty.=A2qV`)' );
define( 'LOGGED_IN_KEY',    'P-;x32c2]lM@hXk6;uM.6]=&nP/vHfB&G{^(Yp6:N;R+M`sdWu~sPW.R8xejs|kv' );
define( 'NONCE_KEY',        'J7t,(47I?NiRY>_MW-hxyJq^sD>YDQ6A:=uTr,qcTE2kKZo6(/X$5,A9<Wr)Mg|e' );
define( 'AUTH_SALT',        'jQQ?Y?w!NOM9Tt{.)6sYhm$1J%HPrd;|`=|.r/<,Gr3 Z]vT8EF)I =FgOt7]G_B' );
define( 'SECURE_AUTH_SALT', 'Z*vbxR/`iLOc{U})<recq>$;G3om,MUL2d8UZo*;9H)%l^g)BUB@uv+bD7J0xic@' );
define( 'LOGGED_IN_SALT',   '#v_7]AG2o=c30Pj_MaGYndkH+#D<w&R7![n!m#]0rE3Py.q=ib7_>#~C2K9IK.B]' );
define( 'NONCE_SALT',       'QDGxP7&fiwk]M.uxrNzkT0q_Z8soe LFobA7{hh-};nVo3x{7q`u@0}.^=:2@vMu' );

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
