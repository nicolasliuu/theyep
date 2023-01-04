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
define( 'DB_NAME', 'wzshwyq7_wp607' );

/** MySQL database username */
define( 'DB_USER', 'wzshwyq7_wp607' );

/** MySQL database password */
define( 'DB_PASSWORD', '26)UPS(p5S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '3e2queeirr1any7lddavg7uzote2zlbt5ek8hgcmsqdafl16yo1wf5hvmquvznlw' );
define( 'SECURE_AUTH_KEY',  'w12ndae2h3jpntx9k1l9sh3lrffhgqovhs5rtft40hw1rjwgp8gawzbnlqc1hv0n' );
define( 'LOGGED_IN_KEY',    'toqwbqw0g65ekqulmlisroamcxbogtgwgfpbf5rpokinidxh1pl04bcq8izkcfha' );
define( 'NONCE_KEY',        'p3irkehzv5gnbpnffbhv5csu9yedbqzwryjsptyyob02nrlie0x4cmptnhmxcsda' );
define( 'AUTH_SALT',        '2znqxcm9xaqokyouqbha9jlh2ufy4jiu9f8ec3ppwxyowb8lny02v55eazozqxqh' );
define( 'SECURE_AUTH_SALT', 'jxh782zlyhygn14dejhssm3rgfnbv2ykfhel5mbynsub6maegonhnwazthq2uzhp' );
define( 'LOGGED_IN_SALT',   'bpn3tg5zwftjybhugnaa78dnrzaauu1vby13pjj7srdmauftfqe87x15xdstezcx' );
define( 'NONCE_SALT',       '4mzbpvopl8lywvc62brjf7e0l80gqa3kr5bozkh3p73n6cnu1yyrqoycwf305jhf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmc_';

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
