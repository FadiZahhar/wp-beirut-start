<?php
define( 'WP_DEBUG', true );

define('WP_HOME', 'http://localhost:81/public_html/');
define('WP_SITEURL', WP_HOME . '/wp-beirut-core/');

define('WP_CONTENT_DIR',APP_ROOT . '/public_html/content');
define('WP_CONTENT_URL',WP_HOME . '/content');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-beirut' );

/** MySQL database username */
define( 'DB_USER', 'wp-beirut');

/** MySQL database password */
define( 'DB_PASSWORD', 'wp-beirutP@ssword@123' );

/** MySQL hostname */
define( 'DB_HOST', getenv('IP'));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

$base = '/';
 
/* Cron tries to make an HTTP request to the blog, which always fails, because tests are run in CLI mode only */
define( 'DISABLE_WP_CRON', true );
 
/* Also not interested in testing multisite for this project, so setting to false. */
define( 'WP_ALLOW_MULTISITE', false );
if ( WP_ALLOW_MULTISITE ) {
    define( 'WP_TESTS_BLOGS', 'first,second,third,fourth' );
}
if ( WP_ALLOW_MULTISITE && !defined('WP_INSTALLING') ) {
    define( 'SUBDOMAIN_INSTALL', WP_TESTS_SUBDOMAIN_INSTALL );
    define( 'MULTISITE', true );
    define( 'DOMAIN_CURRENT_SITE', WP_TESTS_DOMAIN );
    define( 'PATH_CURRENT_SITE', '/' );
    define( 'SITE_ID_CURRENT_SITE', 1);
    define( 'BLOG_ID_CURRENT_SITE', 1);
}
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
