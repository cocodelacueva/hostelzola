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
define('DB_NAME', 'zolahost_wpbdzo');

/** MySQL database username */
define('DB_USER', 'zolahost_usbdwp');

/** MySQL database password */
define('DB_PASSWORD', 'VqM)T#Q,7FHb');

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
define('AUTH_KEY',         '0So Lu|;.DAMiiOhKz`x3#s$b-qI8M^*2m1YK|;SY>2`QqgLCN$r3Qq33L(>rYEo');
define('SECURE_AUTH_KEY',  'D*H{-~rmm:yz-NeIE.bsFOmS~{3-gzH|A`Qn$<axp`pmIpjnJFw]MW<IXh[bq6=%');
define('LOGGED_IN_KEY',    'p8rpzd>ja/<n1JRj.O]T<N8Nc4 V5!(4F/, BTKkq(xSOUDAq/|rko6jm}Gy=6:Q');
define('NONCE_KEY',        '=O;p<KNFd0)R_p?(e<9i`pB]o:B/J<RnGCj1.S:|vy?9r|D-zAlb:kmgS >SAfvr');
define('AUTH_SALT',        '+vx`ON4{th_16e.<rs:E8DuQ_|.biwn#wLAL!,,-$t-E5O!S6F-eHEcmj#SoHZH:');
define('SECURE_AUTH_SALT', 'u%$,w++,&A4G;#4M;/k<L*&a69&05&o_<8fgU7lZLoS.QB<+$x]y8Z(@|pI&~L3.');
define('LOGGED_IN_SALT',   't<.)>Y|hCuQ-|fH|r;bDqGJv8&&+-=x-rWPQM8t-eeATd,YZqs7>gGc%]%0$iF2u');
define('NONCE_SALT',       '4GD;@z:vv+F@.$XO-hXX5B%;#;y;YkDAD|eNR1L=]>V5FJ3+%M0zv(JOI{:L pTK');


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
