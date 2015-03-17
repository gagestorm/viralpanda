<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'buzzpanda');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'take3AGAIN#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',g8-h7^:C+_j&o46jKiM|[WI|y93>-3E;dY)kU(>PI0zoI-?vQs|M(g%2:,V-.HC');
define('SECURE_AUTH_KEY',  'a=}}=OXV1@49=`Te+s)x<2I-Q#RBGF-M:B3U@J}8gZYANH:d/1ADJyP[^}.B+9aR');
define('LOGGED_IN_KEY',    'GzG]ZK)Uf>.D8slgy&EC|!&0rA|^:fzB[[]7_&Q}1|{wYk3tZIS E`K.uUQgn;?t');
define('NONCE_KEY',        '4W.6P-*<g7QVrFzXu@4ZTT-kFlF(wCY@j+|Ap3t~?SZ+>W?uZm5D$gj{8Kllk~YX');
define('AUTH_SALT',        'UE/]%(Ka>*L`vPJUu3p5fK7[SpOA+G/Pq@GI=VGv64yrcEf.34-`bEDO,g@]2:%r');
define('SECURE_AUTH_SALT', 'e#dHB8]}!|Lmxmb7m_ab{`E5D|+5~InhJ|sxWJt+l^QwULKU%Ut[~kN-FX@`a:@|');
define('LOGGED_IN_SALT',   'Hod$Po-H|OV%wGz+0M`6#a,zNO4Frmc2SXZ]/FKC1Q?G2?XW5y*3HAkq.+pF|2>M');
define('NONCE_SALT',       '3c8y+p2gF)_(aGFyt*<#c$;u$ DkhNy&X, Dy8-zr0:*-_Au)2mq$H[=O-%G88=[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

