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
define( 'DB_NAME', 'database-website' );

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
define( 'AUTH_KEY',         ',T]vGIWD%[fA.ws3O^@B[`CG:;c~Yv3o9UwyQ~dKJXt@ ,hnzgk4/C%&^|zcG>r^' );
define( 'SECURE_AUTH_KEY',  '}?`oE:Y}vhvfFO#,v9g:cql VCMUIt_{T(gXAL4^0/cPx:X;;&NaTx *r}}_/6j6' );
define( 'LOGGED_IN_KEY',    'MVB]3%T`eA89oYHp9c^D:_+Cav<Mx*>wKx>ft[&^ZjDrU<_iT3akZ8X-`Ihd0],.' );
define( 'NONCE_KEY',        'BP5v##Hlvi+k`EB; +N{^46rUZV>6!:W`h*>vWy^1)}Fph1NGCFx<n:),E0qMhGi' );
define( 'AUTH_SALT',        '_wOM]+T_-D2RFCXoPU:h`A8eTda~4[Jo*jU)2g$OiaP#S/df=.!m-htls@q9RGo@' );
define( 'SECURE_AUTH_SALT', '@EB|X Z4kl,{Q&Bc@Law{Y=og=u Z~MC`_5jRLdp]!@i~ nkHEPZh8x{rdeS|6cG' );
define( 'LOGGED_IN_SALT',   '}>_YAH5YR8(h`o]p6zYx8D<5(9&-dGoA9SNxssPoG@+hyPNK!V~CW^:}jWh^a ,v' );
define( 'NONCE_SALT',       '-ccoCFUAV^MoS|jqqv[=x<Pl|.e(TsHwCX97ke?= SR6bBt_Ga(^:kN4v[ID?Kq6' );

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
