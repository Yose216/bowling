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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bowling');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DM,{O&cci<Zl^0n3^ksg,5*k4`(=rpxC}5tCX#T,1I+b%S.m8BVR]6~T!6v8&pbb');
define('SECURE_AUTH_KEY',  '03i|tj?#<B;}6rK=>JM=Z$hB2de?] fPuOnjYAiJkPntX72QcIx~UI#CcIB+8#Tw');
define('LOGGED_IN_KEY',    'z/QokF((rQQBFtxbTDp(C6E_M_pa{;#&Mt(HkqPTNp&frr.wg(zgbr2$^aP-.ZF0');
define('NONCE_KEY',        'F5?)y3?v;C5bnSs2r59-R}f0MZCdFB^0y={}g$_? PVxiC$`|or:1a4$5YQ>~@Yh');
define('AUTH_SALT',        'D+n~QA6#SY}21v6n%t~Y^wcwG2N:GpJpf=LfimCVUO LC[X4_ca-B:nTRsEcq!-&');
define('SECURE_AUTH_SALT', 'G3U2-GJ7KtO6W_]/io9b}L=(F12!7#}JA}tPg9{1FE lE*qf6>PwxUvKd#+geU d');
define('LOGGED_IN_SALT',   'i;+.3R`AqIGV(!se,IZ9PJ1x;Rf$q]zj~O]]h<u-;4p.Be!~IO;rAr]gCl!PIJ*~');
define('NONCE_SALT',       'p0z),h*b!kLV`gI^04>9HCcCBEJWe^%xUS7uW*fEz#;nf`I)|p2,rji/!,`Jfpiv');

/**#@-*/

define('WPLANG', 'fr_FR');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_bow';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
