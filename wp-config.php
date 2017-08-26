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
define('DB_NAME', 'kulnaorg_general');

/** MySQL database username */
define('DB_USER', 'kulnaorg_admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localdb');

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
define('AUTH_KEY',         'YX<Xc%xsS$yD_!&6?,22S +1E(5=a6twWt%Igz+];Aco&}b~ j.AUy!cS(*<LZT#');
define('SECURE_AUTH_KEY',  '&qrlbS!V9g{?19.2)g6)iS{2ktsAcg;AXxM/PZnMUhNK-Rf84hu*~XZ.FrqewS+<');
define('LOGGED_IN_KEY',    '`j{4p.MPn.Ru~t>uza23Z[]xxA=nDKmD%_% PZ8Q8clkf07e-fPrfs4.zgSBaP-8');
define('NONCE_KEY',        'LPAPIF Pb4iZi;fhNHl+eCly/i(O)k_o6)Pi^]0xrmY/ERKP/I.!WPoo>n+9<cFs');
define('AUTH_SALT',        ',=dgD3hYzH5uHY> <R+iowTLKgxk_8RyaXfoSzD}`*CB0W6=B$|S<*RUX_6Z~@k|');
define('SECURE_AUTH_SALT', ',hgehDv,2+4ghXe(j.``#O^F)Ea:<jUTCX4zP*2xPvXmq}>)>daif?TtpyF0&LS6');
define('LOGGED_IN_SALT',   '{;>DP93(ftcmKB=Lw@tI*WL4k}!i9~Un(+/BK^J}]/i{7ujGjbH7pqq:}=g@Td.5');
define('NONCE_SALT',       '4/[EvTD^s!u#W$==e<WJ8AT5B5dt1^ 7pngiB ?`Y:JU}4KZ>EpNn/fOz@KE(D7L');

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
