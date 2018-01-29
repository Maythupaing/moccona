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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'aGmdbt4/H(?wA!o*dD &RIut%vJHsvdJ8$oxjdn+Ih&u zq)PmH?t_%_,650bFZr');
define('SECURE_AUTH_KEY',  '/!ZiFNJyiRB([tC8^Js]{[GGgs.2vH}EBB^3S%5y^7;j^E^0IFzIR1Vcv)8iPK%+');
define('LOGGED_IN_KEY',    'Vs^Q$a&Q}x(>|Jc|!Z[JDSrh#Id5szLaA}Yo0&|X2XS|U5264EY&o}@d Q|st#tl');
define('NONCE_KEY',        'M @|?MqY-Q!BFZqtg!i(lCh?GVUs*KaLHNrS#CGj%!z;g;y8!Xlfsregkq+u7v.3');
define('AUTH_SALT',        'yy<o&@ 9vcg0kxvT]~Fdaji8IG^b9sk0VTkC^x{L~gmEvu8k&HSBvt~W&Sm,JXUH');
define('SECURE_AUTH_SALT', '3bHgX7Tq*CvpIoA71iFL$>aKvpA(G(Gq|,X WF;Ldsf<Hn4;7k>9r2e&p+dX}NHc');
define('LOGGED_IN_SALT',   '09a.i3He+]UvG{A#B.6wN#tjOC~7yvc>A1wBBUEX~ZeU=i}ONI$m;2kSxT?pn~_Y');
define('NONCE_SALT',       'T7m:WAvaRCA[rRL%WisHkwu3 ~Kqn}?YDuW=/Un0SSmT@r4[1`9K,W,(2XNTQQ7 ');

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
