<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%SY$/`EfLrPWsa*d~>aQB~i= b0$L6p%<Z}K*?aEHe<!lj&|HiGFy{ekaEVHI@gs' );
define( 'SECURE_AUTH_KEY',  'E8e<G>>;]OupJlzww>NtSt1I(oO_xOTi|U:?D!(Q{zkxE}b~XF6r9dIaiLH1mDAx' );
define( 'LOGGED_IN_KEY',    '6H[?7-8g35a_Wg:Nl2/0{Crx?}u6Olm#dY9M3)S~Mpy$r6g:tc0W&suEnDPpol|V' );
define( 'NONCE_KEY',        'DIb_B`5=PKKCL9z@_,NgNXRWK9<fBfKs/Vm:(;cj9^Z*%Rdd`8N@UW[)del9p{0(' );
define( 'AUTH_SALT',        ',(G*fwVG>YHmyF$%y)P?AUq%Iv}rL/[P%8Fn@->)>,u!-.zO,IH08n?c_&IR]R&2' );
define( 'SECURE_AUTH_SALT', 'unFW7O![WIn=6keZ)9DzL8.p_V*^_y?iz(n69g8P&RS<8gj6eGeGEwrh>*W0Xoba' );
define( 'LOGGED_IN_SALT',   '%J/Kbexnv@nEro`U-VN2l:X1;f1~> p5T$R%0BOll0s]n]9I`hWw!/x[)TBj!ka&' );
define( 'NONCE_SALT',       'n{V~?0O}9mtbL#&>WjTGk?~7}(eO!ef6aGWhYYw_#xY41gBXkjBfL~MS%H@A<:wE' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
