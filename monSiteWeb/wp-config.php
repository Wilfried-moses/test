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
define( 'DB_NAME', 'sondage' );

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
define( 'AUTH_KEY',         'R~C +Q=fT98[>LzHlnzOn?t21YN)<*p;c42Q:J]advBYQP(l:_bxQB{=mcU5`<-l' );
define( 'SECURE_AUTH_KEY',  '?D1&:TP9^ohwT^sN`#HKK;p3&!X#G3Cc2|FE2QOs:KO(Z&z;*]5V)MOG&p0`c23B' );
define( 'LOGGED_IN_KEY',    '9 G,9`59KA+k|1w_qb@5i~gGam~}F4n}uathG^UUPwpw2sm!A3voag[@F4BBY}!x' );
define( 'NONCE_KEY',        '{E76$wVURy81@fE@0Ax(Vc}EK6<>4Fln?TD7`Kt6pQY`A[~p{cRMcUFq%p (SRrt' );
define( 'AUTH_SALT',        '{<#*, Z|T@E$o?t^M,BMN,mxlB*Cdy}pgh~;GbsSzj;sDuaV$qOWW`47(k(-{r/9' );
define( 'SECURE_AUTH_SALT', ']^m`^`B+IN/Y7=c=}Hdp;5]aGj8~IoI*eg:3ct*b-()cvG.|nxBgAqD`QJ ZoT7p' );
define( 'LOGGED_IN_SALT',   '!cwWV)rC88cu_xmQkofX*_7$jOj]O^qeA2#Z|jh8p&sxrZE/eFZ(=`<;dLxoBU$0' );
define( 'NONCE_SALT',       '[,*5HG~Iq-.$Li6X$*ehk4~W~UBJvf^~%4G^q.?=Q_APcPCT:JxsOw!7|UZ,TF3-' );

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
