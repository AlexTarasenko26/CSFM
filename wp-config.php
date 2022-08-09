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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bupq81yodmbr5iefbbna' );

/** Database username */
define( 'DB_USER', 'u1ei98acuhihekev' );

/** Database password */
define( 'DB_PASSWORD', 't08vghRQuCqOrrbd4ML6' );

/** Database hostname */
define( 'DB_HOST', 'bupq81yodmbr5iefbbna-mysql.services.clever-cloud.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'AS3CF_SETTINGS', serialize( array(
	'provider' => 'aws',
	'access-key-id' => 'AKIAXP5RXBHL5XBDCDOS',
	'secret-access-key' => '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',
) ) );
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

define('AUTH_KEY',         'zB8G-Y>L~q^Z5 tcH+sSWu}^Ig`k[y0ep,<Sfj#|:[!N81{C;.GkfhUZ! &9bk*d');
define('SECURE_AUTH_KEY',  ',t#njb)0-0M)-Eg_m/sLvS.~iQvP|(gp9t!$r*Ri=l(_mb*D|~B[2C(dD3-Vfk]I');
define('LOGGED_IN_KEY',    'mXiHszw;!wL,5Im63^VqWPIA4*FIm,jJj)rc:hC~8^HvX7w7Zdo>@6A_(Sb`3RBn');
define('NONCE_KEY',        'utZo`gvthH<OqOSPH>9+Z+|>1V:2)jE9PC+;hS[3aVayBT>NrDHkvj8NeyX7R2B6');
define('AUTH_SALT',        ';!+LjKdSy`Z9,5+_^fNX=ux)sFw5*l`6LiWTG#4Oo&fJm=fP5a*u1aM=|sL]o++E');
define('SECURE_AUTH_SALT', '01I_s8gy7wL<1,Crr$e)Jqm_<Z!/^ -,7Ydk$I&)7E|o@5jy+=7Xe+4n45{$k~Y*');
define('LOGGED_IN_SALT',   'z(r&(-!*d%~^)+2!k@5vys.:x9&.4F-2en-:~Ne<@DqRHdkTT}k|?T/+p2Upe6W0');
define('NONCE_SALT',       'FU]Z%?XKPD.*7$>DzX,6U|iKBgf+80g8ZA,O.;=I/?QS}0:zL?+a6y=UnAel.dHG');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
