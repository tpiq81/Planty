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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'tQDtF0fUN3rEqI2TMuWcCPVNpGMCbTDF7mt55ri0QkdzYJ+Gfe2riGK/tmiKS27mwmzF07KAwT1kFAO+APYHFg==');
define('SECURE_AUTH_KEY',  '/d4wdQfWejo6C1YNKohaFONTboROegHAOjd9+GzRuSI2HnF263kfnwaTiDLCG+sJ9LO6/Y0plfTM3dBbAkeWAg==');
define('LOGGED_IN_KEY',    'mfdPHTiYHL5ARXZBwv9CknPW3XaMzO3ew4TttgTNBPiT5fn6bzNMyPv/Lz/9zX/kYs1N/veCmRGMV9vjyfMp9g==');
define('NONCE_KEY',        'D2fTHxYkZAA3ncoc3X/Jt73ggEo6tJ+U4AS//0w1W4EbBVMKOMnDjTuOLsmLudI4QJ9UZ+LpTbxW4jysR1Z/Kw==');
define('AUTH_SALT',        'Geb2PhyY6+SQZNpNEn0pUVipbRI5brmfSihPTxEOKNusC22MyzwwHL1nCWVsWuLrmYGyp3L44OlRHIaFxrR3ww==');
define('SECURE_AUTH_SALT', '0kqXVPUs+CFF8bEShLkrdxU+0Hz6K/qPwW6uaz1i8kYpvou59VPEFMeTqBaaDO4yhlh8268QiD6OeBSfnHpDYQ==');
define('LOGGED_IN_SALT',   '6gVu/5L0wS7Q+OX9HmpK3NpUI9b/nMmPTQAVMcVWH2EEvohUc5BQwp1Wme4jTGu4F7qHxEPGX0JhpX1YEdSDLQ==');
define('NONCE_SALT',       'zD/R0lfgIDM4ITyVBux55RYMKVvMBptgWNIP6R5J9DSoblbuLKHiEGcVuPMT5fmQVr2ELrMQ3WAGgAha9IB/0Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
