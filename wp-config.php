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
define( 'DB_NAME', 'examdb' );

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
define( 'AUTH_KEY',         ')BcpI_05rZh|(}@7>w<RwR<kR)uOuU85ONh_5HZ#|z+tybsMjCS>#;{?CTsULhft' );
define( 'SECURE_AUTH_KEY',  'cy%i*6oXZwGRXD+^nCn^(Z_;7Z<ZB]#_E-]`{/JSm0YU8fMOWeYlh2BX^6m@-k#K' );
define( 'LOGGED_IN_KEY',    '2V^#u4iV<OShl$BpJ*?.(]ZJP2c.2s$pw!+m628oU1y2h/^0TV!GtaBH7#%AD+79' );
define( 'NONCE_KEY',        ' IxgE7vltsrnxE6{DAlbUEJM)*p*0vKN,nZQ2^X%Hw! B }v.K+kct^y1F_woJ:=' );
define( 'AUTH_SALT',        '1ZmRBCv1Tn7F*`k!DYw1]nbh,h=h?8&*Mgv^|/1#`fV@8csyASfk)b3fPb=QhKlE' );
define( 'SECURE_AUTH_SALT', '22Q=JI>:.q{yCV,*w,h9$][<5!&G^[d~G}<(=&6*Cff@;3)m}l2KL[%ysT,%w7fk' );
define( 'LOGGED_IN_SALT',   'axq.h|mXL6/Gg;#w=[{>3mbCL1yx-MPzo7A&]z<LS#%%<cpyy*15Ce<GAUist``A' );
define( 'NONCE_SALT',       'ayy5i^2!e`RL8& pN ,no$Oj4vJ;Kd7da,j5o,1j<04%A;Zc]C+B[@)?x#.bXA!_' );

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
