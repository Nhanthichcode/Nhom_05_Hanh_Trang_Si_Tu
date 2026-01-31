<?php
/**
 * The base configuration for WordPress
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** CẤU HÌNH DATABASE - Hãy sửa lại 3 dòng dưới đây cho đúng với máy bạn ** //

/** 1. Tên Database (Ví dụ: 'local', 'wordpress', 'web_demo'...) */
define( 'DB_NAME', 'local' );

/** 2. Tên người dùng Database (Thường là 'root') */
define( 'DB_USER', 'root' );

/** 3. Mật khẩu Database (XAMPP để trống '', MAMP/LocalWP để 'root') */
define( 'DB_PASSWORD', 'root' );

/** Database hostname (Thường là 'localhost') */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Change these to different unique phrases!
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
/**#@-*/

/**
 * WordPress database table prefix.
 * Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 * Change this to true to enable the display of notices during development.
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
/* CẤU HÌNH: CHẶN CHUYỂN HƯỚNG HTTPS TRÊN LOCALHOST */

/* CẤU HÌNH FIX LỖI GIỎ HÀNG & SSL (Dành cho Localhost + Cloudflare) */
if (isset($_SERVER['HTTP_HOST'])) {
    $host = $_SERVER['HTTP_HOST'];
    
    // TRƯỜNG HỢP 1: Đang chạy qua Cloudflare (Có HTTPS)
    if (strpos($host, 'trycloudflare.com') !== false) {
        $_SERVER['HTTPS'] = 'on';
        define('WP_HOME', 'https://' . $host);
        define('WP_SITEURL', 'https://' . $host);
        
        // Bật bảo mật Cookie cho Cloudflare
        define('COOKIE_SECURE', true); 
    } 
    // TRƯỜNG HỢP 2: Đang chạy Localhost (Chỉ HTTP)
    else {
        $_SERVER['HTTPS'] = 'off';
        define('WP_HOME', 'http://' . $host);
        define('WP_SITEURL', 'http://' . $host);

        // QUAN TRỌNG: Tắt toàn bộ bảo mật Cookie để Localhost nhận được giỏ hàng
        define('COOKIE_SECURE', false); 
        define('WooCommerce_FORCE_SSL_CHECKOUT', false);
        define('FORCE_SSL_ADMIN', false);
        
        // Đặt domain cookie là rỗng để trình duyệt tự hiểu theo host hiện tại
        define('COOKIE_DOMAIN', false);
    }
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';