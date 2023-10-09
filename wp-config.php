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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '/z,:$R4ZTtuKC(|s2-bmHC`_^ZmG$N-1XsV q!]U,?}%1%()wpH,BF+IlY;wFstf' );
define( 'SECURE_AUTH_KEY',  'Gwz]6=]qZaxp81Zb/Wwj4?]0oaY<+XN!w)DrrFS^HutPV!g?doWc=YnAEE*)cmXL' );
define( 'LOGGED_IN_KEY',    'x%w|btWkw)%(owa2fx45*o;<,3tZ- +=)(;w&x!f_d`v/jP]^3[p%N8,d:xf;5^5' );
define( 'NONCE_KEY',        'w<<q|a]74S%RTU*p6[^LX5bXuh]RV_}KcI95n5-HfcsDRH@i~WJ )`PO[[XU-N7Q' );
define( 'AUTH_SALT',        ':U%mHv+I3hYeb`x*&,}$-_/?{|#dhhf<W(5m[2C)<~;XXxluL(({#XZ|A]9X3pp_' );
define( 'SECURE_AUTH_SALT', 'tpX:sABQcYU(&(?C*xg@5Zjq}ELF >_H[Z0~b8)wstK^Fdyg2-Mi>udm*RJ&){mk' );
define( 'LOGGED_IN_SALT',   'j2-UbxS;`m8OX%^IO9ftOJHs_b dD}Ck9yo?DOVqHuGoSKVa5XF;Ic`fkr}H3wRO' );
define( 'NONCE_SALT',       'A8#<If6{SZg%E@Bc=-a.-O5W+&`,r/QbU>{R+kPrH#`6nYr6~U-2=/q,5;aBry$v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'demo1';

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
