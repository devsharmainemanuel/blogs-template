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
define('DB_NAME', 'robs-blog');

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
define('AUTH_KEY',         '`~}NCXT].=:B%9a3B{UZ0N;>jliq)v{yyyDis=nI~Z+q6Cz`1<,r0jg3f:mod:1b');
define('SECURE_AUTH_KEY',  'Txel-W07(-5ibHu:# |M+k[u*l?a6z|M%~HOxmSwb5B3Q4vf$HrDm0H+yem}=?]u');
define('LOGGED_IN_KEY',    '!eX|kFWuBIKvmS+xd0oxbu07u04zfhcUZY:0Al-_Qo6xL:VdIGMA_/,usL-+d{:{');
define('NONCE_KEY',        '>@uRMq00=U@KAz>REhw`hqUD|#&?PRW%Z>xLK*$Mi%bjBmTxe/@%{rBHu}L~IW3,');
define('AUTH_SALT',        'B@5@zN{uhg6ij Lgp(y;yE^wDc`L*v~~EV![Lz&vZfeU_SWG;|J!(eorJtn<ZIrb');
define('SECURE_AUTH_SALT', 'UPQbto@@t:8[T+K8 7xd[/8<a]0XS{@k0x2Yw&7Z&)uW1c9rsi]Fqd+.|^iMyz?v');
define('LOGGED_IN_SALT',   'p&2=ZR8{jiX$&iFi[?aR]T!M o3D#&/c mh$X)-9PR12*q!B}idkHVd~ p37&4j*');
define('NONCE_SALT',       'dW_eR0GA?#ndbUP K8hLyiY`,peQqgf{@-{P!lwpAj?DT4ta991VDyP7Y7XxC=Mf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rb_wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
