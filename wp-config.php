<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings


/** WP 2FA plugin data encryption key. For more information please visit wp2fa.io */
define( 'WP2FA_ENCRYPT_KEY', 'PlrnInTYj5yC0fvb5rzDZg==' );

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
define( 'DB_NAME', 'balesin-new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '3vs@CVm>/~.N_pNaC!CawU<~hb`~Nw?^H;!LmGXWf,mB,b`K-gB0DeGg9e#Y0wQ&' );
define( 'SECURE_AUTH_KEY',  'aF^sx^H9mvBj/<aq13Ph?#KDP|x7vw)i3oIx773vr2r1nL~h?)~]52uSl %jvC~z' );
define( 'LOGGED_IN_KEY',    '_)vMoz;R~gWdNiOZnnwGj3<74Q[%k=OhuyO@CsI89y-0rE9o_8t%R;1jbGR44Wr.' );
define( 'NONCE_KEY',        'gCH,P{+&`X<u-D|$|=QX+Y@&.}cb}GT4s$a_Vdl`R)Ayv~s+>bSUV8=et{BpSUk>' );
define( 'AUTH_SALT',        '7lb,- Zh(Ms,M?&}l(%IOLa!8a6OS)W7FlhUScaV~4 MI^mY)`gZZZ6to`uWHKAR' );
define( 'SECURE_AUTH_SALT', 'cvhw2x~,5VR]VgJg955XQAAmNpF[o#u+/lz%}e}bOxN.7NrwbNkiRJh?4Eo00@qn' );
define( 'LOGGED_IN_SALT',   '<k>fr,[pH;tmERq}a>9}67Am<05dcJoV$1zZI$HLgc#E>$UD?r^JZ)vxxhy8>z[e' );
define( 'NONCE_SALT',       'IFjbt@z GwD6%^$ywe:2QU&a4#?Xb%VdjW]GUj#kN>)9W&g]|v-n;xrcy,tkgQ!p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** Memory allocated limit */
define('WP_MEMORY_LIMIT', '512M');
