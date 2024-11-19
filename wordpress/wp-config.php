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
define( 'DB_NAME', 'fotoblog' );

/** Database username */
define( 'DB_USER', 'webuser' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'Z);A[AFB=(C{s1Z.,>x+5kP2#wi81U_*}z8g%J_nqE]Ig>,QkA=y!6qEvkIO?-/v' );
define( 'SECURE_AUTH_KEY',  '^~yE|Z(HIIRDZW/M:?T*e@NNLcnZ24-,+XlZsaW|7LXc7&hgpI>!YwvUSI6Z#(EE' );
define( 'LOGGED_IN_KEY',    'MkHFU23+za4UD=pjE0O=I0)gXOqwMH!u_/MpqXv4m=*SA;z&P}+sK@Os?M9LhLC5' );
define( 'NONCE_KEY',        '^d{wy_>&Jl5oOc(DvDlkGvFYdw&DX1A/o)Qv5F2!wn rH$YnXp?#0>jrH<zy[+rH' );
define( 'AUTH_SALT',        'wmo1jTZL5byw(_^9RO9kk$/Tgy4tw,bP/=&F$eQHI~9%GNK%]GR(Enj[vX2><SlA' );
define( 'SECURE_AUTH_SALT', 'Dl8;R624%-^!>luO-RN_PaV;BF{L!RY gFRmC+?PLWG@WK!E4e0J&xer;}TK>X|G' );
define( 'LOGGED_IN_SALT',   'gblzAAe7G mrVw Jdv]Bi3Yo=fAzUUBy6R.s/>{QMPQXieX_AO.K&,Rv>D7,bK^V' );
define( 'NONCE_SALT',       '1 8L*ux]YId}`tf3A3G}8BXBL{Eu=c&_`Lm}p}=gIH%t;-G:vJ3fR5>Br6e5b*aS' );

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
