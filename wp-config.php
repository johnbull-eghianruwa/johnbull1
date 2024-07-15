<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jbdbwebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hLMSfF-:!_1&}*j/J4Ik?3?6*]bQ?.2.5 Bq&^{h5-UO v)@,V+Q YML%RM6W0RO' );
define( 'SECURE_AUTH_KEY',  '92_qsyV9q*/NLTi,.rI,MC2`2ZFp&&uE[EWO(/Pw?r 5^Bfbkw793x/) )gWr/ti' );
define( 'LOGGED_IN_KEY',    'BREq%2a?1$oh{CH#:BT(r4fPF~0R}-V(#1C_^C},%e2>}F+ND:)@!+v`u$MSh7Z4' );
define( 'NONCE_KEY',        '4$f?Gz@-+x:B3<xk*]j{*]Fn`tlrG:7hxr&WDVJny4^.{fL?.+y-C!XG]2;)GY|9' );
define( 'AUTH_SALT',        '9A|U7sEm XFr!XR>29v%.WRP7_3LkLX6<q-*/sp7:/)GRTmIrx`{h uxEl$|Wbi9' );
define( 'SECURE_AUTH_SALT', '!w*]My<I97;:lP`L8t`HgS|WN?B7]1+yh&ht;d=)tP1@|cMATLzY$OIP_.(}*.8O' );
define( 'LOGGED_IN_SALT',   'z;x?@]KQtW(z(_rxNi8fa4^EOb^%:~Riq~8r:_XEkR]/R3fqJ&a;Fi53k#xpM}Z;' );
define( 'NONCE_SALT',       '7D8+<w[Hl:w52dR+{:Qwk57-e0=#pUB<wr4?A#XOb~J{X[#Bj8-H 0~Lkv!&A^_3' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
