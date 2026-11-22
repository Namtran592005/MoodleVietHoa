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
 * @package    portfolio
 * @subpackage flickr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Khóa API';
$string['contenttype'] = 'Loại nội dung';
$string['err_noapikey'] = 'Không có khóa API';
$string['err_noapikey_help'] = 'Chưa cấu hình khóa API cho plugin này. Bạn có thể lấy khóa API từ trang dịch vụ Flickr.';
$string['hidefrompublicsearches'] = 'Ẩn những hình ảnh này khỏi các lượt tìm kiếm công khai?';
$string['isfamily'] = 'Hiển thị với gia đình';
$string['isfriend'] = 'Hiển thị với bạn bè';
$string['ispublic'] = 'Công khai (mọi người đều có thể xem)';
$string['moderate'] = 'Trung bình';
$string['noauthtoken'] = 'Không thể lấy mã thông báo xác thực để sử dụng trong phiên này';
$string['other'] = 'Hình nghệ thuật, minh họa, CGI hoặc hình ảnh phi nhiếp ảnh khác';
$string['photo'] = 'Ảnh';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Plugin này gửi dữ liệu đến tài khoản Flickr được liên kết. Dữ liệu không được lưu trữ cục bộ.';
$string['privacy:metadata:data'] = 'Dữ liệu cá nhân được chuyển qua từ hệ thống danh mục hồ sơ.';
$string['restricted'] = 'Hạn chế';
$string['safe'] = 'An toàn';
$string['safetylevel'] = 'Mức độ an toàn';
$string['screenshot'] = 'Ảnh chụp màn hình';
$string['set'] = 'Bộ';
$string['setupinfo'] = 'Hướng dẫn thiết lập';
$string['setupinfodetails'] = 'Để lấy khóa API và chuỗi bí mật, hãy đăng nhập Flickr và <a href="{$a->applyurl}">đăng ký khóa mới</a>. Sau khi bạn được cấp khóa và mã bí mật mới, hãy mở liên kết \'Edit auth flow for this app\' trên trang. Chọn \'App Type\' là \'Web Application\'. Trong trường \'Callback URL\', nhập giá trị: <br /><code>{$a->callbackurl}</code><br />Bạn cũng có thể cung cấp mô tả và logo cho trang Moodle của mình. Có thể đặt các giá trị này sau tại <a href="{$a->keysurl}">trang</a> liệt kê các ứng dụng Flickr của bạn.';
$string['sharedsecret'] = 'Chuỗi bí mật';
$string['title'] = 'Tiêu đề';
$string['uploadfailed'] = 'Không thể tải (các) hình ảnh lên flickr.com: {$a}';
