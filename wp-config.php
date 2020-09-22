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
define( 'DB_NAME', 'heroku_11f5db4e48ef465' );

/** MySQL database username */
define( 'DB_USER', 'b8a545cff782e1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c2d3a281' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-02.cleardb.com' );

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
define('AUTH_KEY',         'DEout?/WT`s%+;H}3-%Rq-hg<s#+H%dn_>^LWQ&+s7=<ebc%_6T_!v_4OrGcj);m');
define('SECURE_AUTH_KEY',  'y!(WKhijNVICX[Pm=1z[0?K9JGY^CvMrl>d0*GNUD;nC]W`DgeK2jpE(IuU7e>OF');
define('LOGGED_IN_KEY',    'zeu3 &bcZ;$kX{_x;DX=!+|0-j|6<[fr~&]v*{EpXv^Ef+_I-ZaQA 1Cv/58NkkE');
define('NONCE_KEY',        's:]-WBNB|+n`$)qCx1_8>S{^[r&XEhp|hjUvAwCs%W&dF1.gD;d U;p)B<p:lvR@');
define('AUTH_SALT',        'ak5Tl%;,mFd%p3?BooE8TdwKP7n2_@>YWn*Z-#CMT}I0npw|Rj-Vf$[`@qWs GN?');
define('SECURE_AUTH_SALT', 'uH|)%hmw%|W.=Kinirp_7y!B<`}FNpU,#(d$7KqMxt0}}IoAz#r*MrVZol]xz:+n');
define('LOGGED_IN_SALT',   'Z }uq)5vwp(1p%?(QS -VlOVAAG+xj9^du%+zZ:v%L=@._/Bnk=3:. a>=AT qZD');
define('NONCE_SALT',       '--RG]~BvRx6@6GwsYO3@T]{ITww9`^9joe?GCJ+#4LpK2ZCEuEHOZ?ffW M+7AYO');

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
