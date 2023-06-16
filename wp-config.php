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
define( 'DB_NAME', 'firstweb' );

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
define( 'AUTH_KEY',         'qC=K=*a$-1;`K&tVyklPExayOeiauP])ps^N{0,FqQ$!VwA5Z;SPBYd(yA2+(why' );
define( 'SECURE_AUTH_KEY',  '(06I?95FVL!10d+z5/V^CI`T5f8hC`hm+g+X+@Qz?~UADS4]mxbPQ  zQo]y2l^L' );
define( 'LOGGED_IN_KEY',    '0=UYBf.4yAva1e.D~}guu+XTP?*^6}mQUC|}8^g}6+7{fL&$qs&0)Ce.+9.iV]j=' );
define( 'NONCE_KEY',        '],hW&a_yv3KBNkeCLrTBElnyI,t}ubAQ//)fzneko0f/Fj#G0s($Q/6OOCx~_+3$' );
define( 'AUTH_SALT',        '%(yxIGCXNc0?,>OLZzYkm*/Y<02fvM0^qF fF&I *MwPFrkKiT|>()aq[LLJy<kM' );
define( 'SECURE_AUTH_SALT', '/ecr`)LK%v^Mr7xhM-MncfY%I/{#~KgCSLAfk?4[s_T6W4?(g{3wel5_7BU%Q ;,' );
define( 'LOGGED_IN_SALT',   ']>V{qVeFKg`&+(9%Cz!XBVSJUWl)s:v%mxFj[N&6ZQ31Q:#q;|RsFM*O?$#MTe$?' );
define( 'NONCE_SALT',       'JdW!&13r;<Xd`0f+z*R4VT|&{#.;fS$L:DyPnEsPn Rt`}E!f^~!fXjS6!y!{ mf' );

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
