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
define( 'DB_NAME', 'deertest' );

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
define( 'AUTH_KEY',         'RR2nIcv?ylhYS!pgMPFr`Ud-Es#;m((|]1nb6&[BlDrz/+jWUv3s?cR7=b:0^}HK' );
define( 'SECURE_AUTH_KEY',  '$W[[OYDx6O8{i:*sF5Yy36Z{]RD^l/|Y<!JRYVR$><><0CbOhiwc0pfdsJQre;Rl' );
define( 'LOGGED_IN_KEY',    'O7J.j,[_J;VDz,<K]4b=o/k>>DT$O4)@rFejm5(7C*=-dM}b{}$AmX3aEgO)_dE~' );
define( 'NONCE_KEY',        '{GIK4}Rz<V*)>_-&^(..-il8N>oGe9/1@;}L!iEde}M_E.Fl[U{I-(BstOl<63Mi' );
define( 'AUTH_SALT',        'cGcm)X8s,0)+_X0 ^K!sG9k,Jms@W;h[KHjWDCV9HR1wS1TT:U*X3+ykX8,/pkGN' );
define( 'SECURE_AUTH_SALT', '}Vzc<x7EE,/6B>BqVBE!1=[j?4<pp|5[c@2rB^E0sW6LwRu7&Zmg|S>}FQb7Wq4|' );
define( 'LOGGED_IN_SALT',   'i;[-8k|viOM,Na>ny$:5;vFUAcHT/wsci%y>},Ay_~zMr0a=TaOPIs59fgS`R9 }' );
define( 'NONCE_SALT',       'u9Q=Q}2{3d,@@x<kPnvc3s:nA)HdGkV(K`LxG>74G^$Bv(Ic4H2A&J^AjpXRJl5Q' );

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
