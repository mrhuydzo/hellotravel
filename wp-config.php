<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'travel' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*^LA)8P-B~;?a@EeMX9W~Nc(7maxQ!s(D@#.lVfv#oFxj#0K.4t57iEtwh-u-J,3' );
define( 'SECURE_AUTH_KEY',  '/*Z!}}2%`.PFNs]mN&F*UEy14>:bkr)+OGLnMfvW:Y;cIYAf9-}s/*Gs~ ;`7E} ' );
define( 'LOGGED_IN_KEY',    'FY4}UNhpk>R=rxp;/.^,>v13(2@^K-FbG`hXWYp@q3GSh~LHi;$LieW:QAOs=` U' );
define( 'NONCE_KEY',        '3v5!KQCs*d%Tk{V1$QTi_:JTu&ida`R~,MB{W2d]uEk.: lhA9z5f_|t28#3[%vZ' );
define( 'AUTH_SALT',        'A!@Dn3W88FM1pn$0ZQ$A<l(]mn;Z.JxC*9j~hu,SjeBzV1*!W&Llbxz+I$C0(P:c' );
define( 'SECURE_AUTH_SALT', '%Iwwm{{tn1}vgDWkz5CjTRb7QRqQYnaR6Eh;{_y:=_8zdm2tw~!;^Y;yo?N5%>o ' );
define( 'LOGGED_IN_SALT',   '5r00KetoAq/Q|*:i|{?6kwCW:fuL,R_V+TN6#s!p4U8v1N7cQ?2j>Q<2&a(Sl6{^' );
define( 'NONCE_SALT',       '%E*}=uw+a!P5u-J 5@kuulRCO/_w|J>!4m.lG]~i=D|C:oI(1W16&KMK4V=M18lk' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
