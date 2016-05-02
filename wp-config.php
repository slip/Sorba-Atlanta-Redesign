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
define('DB_NAME', 'wp-sorba');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'spandy');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'yHBUjFN>`{WplTxQg_/:5k@g30JT!voiz@*cxv1 |Sb|12U8Yw:GLDk^.|(l!ZYa');
define('SECURE_AUTH_KEY',  'bT&q.fI.y``,)0btO0hh }9gy-v?@(zwsny$)5}]P/e~m9+Oh#s^200~1/}@NI=w');
define('LOGGED_IN_KEY',    'P`#{tb3A,PAYj#VL;vHYY+R$gi``lE#Haf:G4=]KWJ`)&#,}4[o4Sw)k v+xz,Ys');
define('NONCE_KEY',        'N/hllz8@)q-W&0g1:ljY,?wVtWYq>__o5R3Drp h_Z?Lu3;`taG8/0sIu!q%_gaC');
define('AUTH_SALT',        'hcl%yd1)}$xBa%E]4<MxQOOxF?VdZoRzG<9mk)diXll:tlr*Zm4mdxUD58l7Xu[&');
define('SECURE_AUTH_SALT', 'UQl/+GRpV8:eb B0/#3@[Ro$|%8WxA.383L(7_$BJ7=EX~?&JLCDLMMk!]Fx{cAf');
define('LOGGED_IN_SALT',   '{j4Lcc&etK7QI>Arp.p8(@;(+w~:DP}*XJ.tM<Iwwh5n0B*oX&zdc?2}B;J[xw])');
define('NONCE_SALT',       '[TZgJ[fZjN6[ W=mmHLcGmr9H Z`aR/t9CNV/ed}P)SvUjx/OU(|#s`biY@Rm8sD');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
