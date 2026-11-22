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
 * @package    tool
 * @subpackage componentlibrary
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['copied'] = 'Đã sao chép!';
$string['copy'] = 'Sao chép';
$string['copytoclipboard'] = 'Sao chép vào bảng nhớ tạm';
$string['installer'] = '<h1>Thiết lập thư viện thành phần</h1>
    <div class="alert alert-warning">Trước khi xem nội dung thư viện thành phần, bạn cần có quyền truy cập shell vào bản cài đặt Moodle, có quyền ghi vào thư mục /admin/tool/componentlibrary và cài đặt npm trên máy chủ Moodle.</div>
    <p>Cài đặt NVM và Node: <a target="_blank" href="https://moodledev.io/general/development/tools/nodejs">https://moodledev.io/general/development/tools/nodejs</a></p>
    <p>Nếu đáp ứng các yêu cầu này, bạn có thể chuyển đến thư mục gốc Moodle và chạy:</p>
    <pre>$ npm install</pre>
    <pre>$ npm install grunt</pre>
    <p>Lệnh này sẽ tải tất cả các gói cần thiết để xây dựng tài liệu thư viện thành phần.</p>
    <p>Sau khi cài đặt xong, bạn có thể chạy:</p>
    <pre>$ grunt componentlibrary</pre>
    <p>Để biết thêm thông tin, hãy xem tệp README.md trong plugin này.</p>';
$string['pluginname'] = 'Thư viện thành phần giao diện người dùng';
$string['privacy:metadata'] = 'Plugin Thư viện thành phần không lưu trữ dữ liệu cá nhân nào.';
$string['runjsdoc'] = 'Tài liệu JavaScript được tạo riêng, không nằm trong thư viện thành phần. Để tạo tài liệu, hãy chạy `grunt jsdoc`';
$string['showboth'] = 'Hiển thị cả hai';
$string['showdefault'] = 'Hiển thị mặc định';
$string['showhelp'] = 'Hiển thị kèm trợ giúp';
$string['showmixed'] = 'Hiển thị dạng kết hợp';
$string['showrequired'] = 'Hiển thị kèm trạng thái bắt buộc';
$string['toggleviewinfo'] = 'Bật/tắt chế độ xem của phiên bản biểu mẫu này';
