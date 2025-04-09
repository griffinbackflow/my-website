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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'r6teaivs_wp275' );

/** Database username */
define( 'DB_USER', 'r6teaivs_wp275' );

/** Database password */
define( 'DB_PASSWORD', 'l87S(p6@7W' );

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
define( 'AUTH_KEY',         'lelrpgf2hjis7vqswa0mwotptnno25hcbnpepfzdb55rgxsmdhrjeolbd84tuawh' );
define( 'SECURE_AUTH_KEY',  'pinstofegoignsgjl8xlduaxvpueaopxhiws92ofzwtq6yxfoxjsh26y87junklr' );
define( 'LOGGED_IN_KEY',    '3kvi73zjues9qrg1qug5tv5k6xsbxuzj5svjfuatlldselzbnub93tssw6mzttvp' );
define( 'NONCE_KEY',        'we0s10zdchekxmoaqdvrlo1dtlvnze9zovgxjv1aichoufqx9ngeg7dipyqx2gdt' );
define( 'AUTH_SALT',        'phhgvvytgyituxveortf6vq90cdxb4fgqamobb6dqh1nyzfipnfh9yr1qrblyots' );
define( 'SECURE_AUTH_SALT', 'phzisrvelqnbe0raywqaeqhhyztndrbdrdrtfcxijldonqonmg9ew3gbmimfnn1u' );
define( 'LOGGED_IN_SALT',   'sqjop0rnctjq5guxsi22lutwkbucumzuttrqny1rhr5be0egmwobchspk4udp1kf' );
define( 'NONCE_SALT',       '7beaajgjidey1tlft0gfvkkctyvogggn15gnvroxfsxe7hizbhgubf31h9a3qnlj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpg8_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
