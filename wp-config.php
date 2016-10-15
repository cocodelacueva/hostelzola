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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zolahostel');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-qa47PJo=(m.ZB+Cu>~IGdsP&w+bL&M=-{-/5X[`u6p{A@Zbl#k?a8iQDPV,s~rq');
define('SECURE_AUTH_KEY',  'Rf-9jVW?M1B#npB[y-z1X9|G9TL${*>f[pkrV9zCRD_MIu{~~UU*N]c6ufZg-K_P');
define('LOGGED_IN_KEY',    'L1nPF|M,m=[F2K~1f+ht0nuZ]H}2=g^j1}bX^y ).pv}1y<mYe+*rS4Xt92er2ex');
define('NONCE_KEY',        '<-!H.SV#f{>vek?KWODI|FG_X?%*`[F:O2+@>`D/rp7>AlD8:fr@ LVbXG8Q`yqP');
define('AUTH_SALT',        'T)NesC]b^bCc+hP2Dn+TO0|HxFj+:wT>+F!E1y1.CjO|f!bRaLsp9IZ^oz%@:f+C');
define('SECURE_AUTH_SALT', 'wc/+Y75Rjh-^ez<fEb7$N2*&2Tc:aJ~`mxqx#P_g0{7r+RM8!|W1mSJXzmEd}q k');
define('LOGGED_IN_SALT',   '2:>>tFr<c;v Jl(/X(PS)>oXUfwTzC(2MQ]+m.dA-lrE0Y<k4;,O+wUGmM@x(?nV');
define('NONCE_SALT',       '0vl=+pd!6ZEf^gf|i!j|!P5e_0V4T 6%gMT%!%7W%lrq7]m5a?,ZJ-I/4nX+D[qe');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zla_';




define('WP_DEBUG', true);

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp' );

/**
 * Custom content directory.
 * 
 * Use a content directory different from the usual wp-content, so it becomes
 * easier to update WordPress versions.
 */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/core' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/core' );

//desactiva el editor por defecto
define( 'DISALLOW_FILE_EDIT', true);

//quita o enumera la cantidad de revisiones guardadas, en vez de false se puede poner un número
define( 'WP_POST_REVISIONS', false );

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('UPLOADS', '../contenido');
