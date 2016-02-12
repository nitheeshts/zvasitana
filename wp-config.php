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
define('DB_NAME', 'adventis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'AuzR$/TQjgD iFO:.|(<@U`Zf1v*.OsZU-hc-GK| c/^E~xV++FD5<.hS-XHBA0+');
define('SECURE_AUTH_KEY',  'Hn}A-l3tOmq09TpkCyb~zq@o+Q&TYR?vt4f1:3?J;MVIq&4|A-vZ)JkIC#UMR@)i');
define('LOGGED_IN_KEY',    'w%$OKy3JA^Q(,j,Qj(qP<izPcNF+/K_+2-3dabYysAvYo_aZ-qEOh-8K*{Z4Wenb');
define('NONCE_KEY',        'qUP!,v{]cug7eBNWlp;^%l+gLz%5f2WY)sI-uh|4[+|No|WcNMNLNRh Amk>-}*F');
define('AUTH_SALT',        'U|XF3!W>hMw<OP(%Q_?S{EB|p*/|72s|+pEP`>v/4x,>X{}F+%D8#|H)Hu-WTJ01');
define('SECURE_AUTH_SALT', 'POq(tv^ke|03;n&xI;brX_o|YWP&$EJPvajp+YGIV2<:p7VCY7UVy20<?D?jeZ9%');
define('LOGGED_IN_SALT',   '8Z(={`+U?:3@a=Qj:w+]-jFS}y!+O2JbtwjR&|cNG()M`-2?)_k<v!/*7bE8}(9.');
define('NONCE_SALT',       '+J0*$bu|[h3IL%r D;]*.<Z6b9z^GI6PcAT-hiDb $w<W0RwzEOb}[R-0|>^8|8h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
