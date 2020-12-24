<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K{j7dsXtJyV:$9OdM-wxY<PX0t@DJ$7`&M<tXn9im%}:q@X{q&f`p&$qn->H-q#l' );
define( 'SECURE_AUTH_KEY',  '%`,a$;nV#(6+%2mj~$jjC_}@~OAggX)!r*d|t|Y(_Gqm5d.&h8OF1mMiF*L75;E9' );
define( 'LOGGED_IN_KEY',    '(yP=5k{VS# @^~d4x&=d=l2^5ee^fw1$;GUd`r,c4<}2rr,AJutYlhK*(8BFP5S}' );
define( 'NONCE_KEY',        'w8Y,[~VKxv<+6e>Dw_D{-Vs*I;{c$un$,6M:@!Ju|yN1Q5Gv}UsoBeV]pm*:?viv' );
define( 'AUTH_SALT',        'nRHpqm:7M14 EO[i/nk| S*p3:]8U>fJn0KbB]O3m*~Bt*NAKU9y:LG#aQNnx9[-' );
define( 'SECURE_AUTH_SALT', 'b=`ow*!@XxR=UBEQ,R314)3oGLtTN!1UWWNX<bB=<Vrtbr5T;4XR}*7s@m&6s/Uf' );
define( 'LOGGED_IN_SALT',   'gZ%9{<;YG1VobTqS8eRHDN9!Hs|ikC(;SsZf_YP8+^qcqWOJd*qw,#-7xMz<;l#!' );
define( 'NONCE_SALT',       'N[yeYWn5$q#Mn?`5/+^!6ogD{g2={aPpc3HLU+%L64]6=Lb0EP1#b3_rx|i[__h&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
