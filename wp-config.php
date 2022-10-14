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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'W+~rL{*2*6aeN,8!/2`S9qKh~*<JMiL0%#L<65vp@~ma8n9z5Bmv~mNBS`f~7,Ih' );
define( 'SECURE_AUTH_KEY',  'J/:j%%1TB^/qC@+=k};Hh ^xW4+9R)qZx[AcLpD~e?nNH,Um_;#V!3_fL5Ajo+y#' );
define( 'LOGGED_IN_KEY',    '>C{$jm/J!fGm,7OD*pbAcUIpK^z 9.o~!aZojp@/p`B e9}6UgI/d^{V5q !t[]?' );
define( 'NONCE_KEY',        'f@N?|g=BI$,EBUP>TJ^R#!)BLut/sYn^k9Ros}-cb%F kkx=ea@S,pS|!NAiJfYi' );
define( 'AUTH_SALT',        'BxpZ/5fdUg>&M;mgMoIqU]|>>%e3)S#~M]H?2md0/+JxZmA?AtuZI/pO?^@tDO2X' );
define( 'SECURE_AUTH_SALT', '{%:NJ0_HB:#`/Fx I,GGh)v0H]ze.!myIwkr,4#[u&+O45$eXCY1|.;k_FvhKdGj' );
define( 'LOGGED_IN_SALT',   '?kgz!5=$2(Sw/Bo-FdVgKf)=Q:r$Dz<qgSHe)<Lkmu5~L9a5d=(l+)(UE4_sM_yu' );
define( 'NONCE_SALT',       '@Q|/j,-W_u-sPdGatbZp$ARHya RMN9 E_|kh,GCY7+sHzL_vK*tf6ub|*{&Zc3r' );

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

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */
/* Multisite */ 

define( 'WP_ALLOW_MULTISITE', true );
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
