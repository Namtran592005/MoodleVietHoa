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
 * @subpackage googledocs
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID ứng dụng khách';
$string['noauthtoken'] = 'Chưa nhận được mã thông báo xác thực từ Google. Vui lòng đảm bảo bạn cho phép Moodle truy cập vào tài khoản Google của mình';
$string['nooauthcredentials'] = 'Cần thông tin xác thực OAuth.';
$string['nooauthcredentials_help'] = 'Để sử dụng plugin danh mục hồ sơ Google Drive, bạn phải cấu hình thông tin xác thực OAuth trong phần cài đặt danh mục hồ sơ.';
$string['nosessiontoken'] = 'Không có mã thông báo phiên nên không thể xuất sang Google.';
$string['oauthinfo'] = '<p>Để sử dụng plugin này, bạn phải đăng ký trang web của mình với Google theo hướng dẫn trong tài liệu <a href="{$a->docsurl}">Thiết lập Google OAuth 2.0</a>.</p><p>Trong quá trình đăng ký, bạn cần nhập URL sau làm \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>Sau khi đăng ký, bạn sẽ được cấp ID ứng dụng khách và mã bí mật để cấu hình tất cả plugin Google Drive.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Plugin này gửi dữ liệu đến tài khoản Google được liên kết. Dữ liệu không được lưu trữ cục bộ.';
$string['privacy:metadata:data'] = 'Dữ liệu cá nhân được chuyển qua từ hệ thống danh mục hồ sơ.';
$string['secret'] = 'Mã bí mật';
$string['sendfailed'] = 'Không thể chuyển tệp {$a} sang Google';
