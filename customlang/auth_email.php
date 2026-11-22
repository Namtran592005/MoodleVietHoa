<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://localhost
 *
 * @package    auth
 * @subpackage email
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>Tự ghi danh qua email cho phép người dùng tự tạo tài khoản bằng nút \'Tạo tài khoản mới\' trên trang đăng nhập. Sau đó, người dùng nhận được email có liên kết bảo mật đến một trang để xác nhận tài khoản. Các lần đăng nhập sau chỉ cần đối chiếu tên đăng nhập và mật khẩu với các giá trị được lưu trong cơ sở dữ liệu Moodle.</p><p>Lưu ý: Ngoài việc bật plugin, cũng phải chọn tự ghi danh qua email trong menu thả xuống tự ghi danh trên trang \'Quản lý xác thực\'.</p>';
$string['auth_emailnoemail'] = 'Đã thử gửi email cho bạn nhưng không thành công!';
$string['auth_emailrecaptcha'] = 'Thêm một thành phần xác nhận bằng hình ảnh/âm thanh vào biểu mẫu đăng ký dành cho người dùng tự ghi danh qua email. Tính năng này bảo vệ trang của bạn khỏi thư rác và góp phần hỗ trợ một mục đích có ý nghĩa. Xem https://www.google.com/recaptcha để biết thêm chi tiết.';
$string['auth_emailrecaptcha_key'] = 'Bật thành phần reCAPTCHA';
$string['auth_emailsettings'] = 'Cài đặt';
$string['pluginname'] = 'Tự ghi danh qua email';
$string['privacy:metadata'] = 'Plugin xác thực tự ghi danh qua email không lưu trữ bất kỳ dữ liệu cá nhân nào.';
