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
define('DB_NAME', 'oilpaintingkim');

/** MySQL database username */
define('DB_USER', 'oilpaintingkim');

/** MySQL database password */
define('DB_PASSWORD', 'hello01!');

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
define('AUTH_KEY',         'l^WR;8%6ljuHiX;ADchzm1Ep0OAt$|*hVC&CB<~fT+=O}9w|tDoC]uS*&&l$[Rn:');
define('SECURE_AUTH_KEY',  'd)4VkFd2bfiRQTv659e(8p#4O[:T~(c:U`OVMbS`qr?1-_&Z|eTr`)j`qvs$,:q2');
define('LOGGED_IN_KEY',    '2~},|/7b_I<cT%*cUz(<5]QR4klh!7kmCq^3eWzv0rP)G<K.D3TImhW)5YW=b-^`');
define('NONCE_KEY',        '1+;cO;L=YTtr=] -e8loJo{d|)NHzY&&JB#??i{H__p3.49A:W+`~iE{YJv*c7SI');
define('AUTH_SALT',        'M%zdQ@,)d{:NT<ksf+NU S<]v8>x!z<y!fuBUN7G$Z{ion~.o0VsvN:nsdtg@dg8');
define('SECURE_AUTH_SALT', '1M/+E|zucgfXqe(EoIt~Box,BeP!HpO(~w2D}>5p^^e_~%yeAS. 95uLz/N-n|~M');
define('LOGGED_IN_SALT',   'c<MD0C#Xt|[Sc07;=n=ub#OY)3zbHZ07Bh?/,mDL ea/j4`Ig@Bd,+d.#uOYm3zg');
define('NONCE_SALT',       '2(o8-I$-FJh@+Nz~CGRZXzw=>=D~g0YMlJ1$|x,FL#fQ/B?~KX|fW,~FLKxyFuA;');

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
