<?php
/**
 * The base configuration for WordPress
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'leto_wp' );

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
define( 'AUTH_KEY',         '+?M3$$GnchL&IpaePSU=H8bO|{,*h;S.5=G$dUeQ/rt7h/|d`;ZH)]b/79J!=E;A' );
define( 'SECURE_AUTH_KEY',  'aUV-N3`LdrGWw}V;~%p&)pK)%@1d^)qap}fAjM0i3lDXAYl*Ii.xkC~Y]okE8`5q' );
define( 'LOGGED_IN_KEY',    'pNV_:$,aq-Q+/fk>W)EM&j,o jj@v>4]*Ya|-s3ff*[*~KRk9`Q0E)aT)bK(6X7L' );
define( 'NONCE_KEY',        'E^VX-3smF[NjM/n|)gr}VZLtbJC+f)r jnxGGtA<^nGQSv]eF8_+VCIm>J4x^|Yg' );
define( 'AUTH_SALT',        '`7GlXfAW}pJ/_j,+!a2FoM-Si)B+qCp[STJf&}^<oR_RcL+{)d1bFt3_.&BZA+c+' );
define( 'SECURE_AUTH_SALT', '|O=J,:z>Rih[::!]FoYk&ug-LqJ<q;1H&*za8%^cK5u<6Le-:o?9[%3`qSlj/Dbv' );
define( 'LOGGED_IN_SALT',   ']0lAt|YQKq8+ehXgk}<H?UpwQD$`yVwc4r p:cOcWv%]/4FT|<n4MtzD(e.Mk>O{' );
define( 'NONCE_SALT',       'P@qE`6&{i>TM)GhDp]*TzF:a[Qnr&wDoLPu C/DDW|)V&RAn@m~.Ay qZ#4yob$a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/* Add any custom values between this line and the "stop editing" line. */

// OpenServer: direct filesystem method (no FTP prompts).
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
