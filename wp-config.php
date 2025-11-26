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
define( 'DB_NAME', 'nestlaptopswpdb' );

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
define( 'AUTH_KEY',         '4,-o;aGdQ=|6hYT t_m;N#`P}#h~z.;)*2HP:z%RhE X/1|8I*W[j#z-rp#j+o@_' );
define( 'SECURE_AUTH_KEY',  'NRjO,Ja_zpUK~UVJZ*/7;Tf?(ER)VP]]zMu_1[/@YM:!SoIHi CPj@ };=>Zbi$d' );
define( 'LOGGED_IN_KEY',    'I%f)CiHER~$77!m=5Y$jzIvtX{C{nC@]_/Sn?nwWm<Y;+[:/PNNVJeb-GSo3qm^Y' );
define( 'NONCE_KEY',        'Y/}tj&#VkIl-&wzCQ}ecuP58$s)Y;aOsv)[^~j?jQuncAv};0kv.l Rg91=8B(at' );
define( 'AUTH_SALT',        '_n *T(yyo6fRQ0vE$l_}buL]$sN;$W]OPr6q*s~[$.FiNZ!;0DrnmeFVq5jn}p6$' );
define( 'SECURE_AUTH_SALT', '%#zDL?tK!NoDtS/[,53H~/{,kS@.lpYs#X0-jWfmL,CZLnmzdxj+nbiuowhL!~^Q' );
define( 'LOGGED_IN_SALT',   'Rj0eBh,Z#+i5ND_P}:y4iThQux{<n{es}!e=@iZ:Q*vTYKFDJg>NB-vV5,z}hM.5' );
define( 'NONCE_SALT',       'k!-.@Sp*bpkjd/N#[Z-<_|}+MV_}0F9!<!~mhq&WHFVLLE^Bo{A#sD27rAP,gbRk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'nestlaps1432_';

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
