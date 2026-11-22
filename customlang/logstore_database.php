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
 * @package    logstore
 * @subpackage database
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Kích thước bộ đệm';
$string['buffersize_help'] = 'Số lượng mục nhật ký được chèn trong một thao tác cơ sở dữ liệu theo lô, giúp cải thiện hiệu suất.';
$string['conectexception'] = 'Không thể kết nối với cơ sở dữ liệu.';
$string['create'] = 'Tạo';
$string['databasecollation'] = 'Đối chiếu cơ sở dữ liệu';
$string['databasehandlesoptions'] = 'Cơ sở dữ liệu xử lý các tùy chọn';
$string['databasehandlesoptions_help'] = 'Cơ sở dữ liệu từ xa có tự xử lý các tùy chọn hay không.';
$string['databasepersist'] = 'Kết nối cơ sở dữ liệu liên tục';
$string['databaseschema'] = 'Lược đồ cơ sở dữ liệu';
$string['databasesettings'] = 'Cài đặt cơ sở dữ liệu';
$string['databasesettings_help'] = 'Chi tiết kết nối của cơ sở dữ liệu nhật ký bên ngoài: {$a}';
$string['databasetable'] = 'Bảng cơ sở dữ liệu';
$string['databasetable_help'] = 'Tên bảng nơi lưu trữ nhật ký. Bảng này phải có cấu trúc giống hệt cấu trúc được logstore_standard sử dụng (mdl_logstore_standard_log).';
$string['filters'] = 'Lọc nhật ký';
$string['filters_help'] = 'Bật bộ lọc để loại trừ một số hành động khỏi nhật ký.';
$string['includeactions'] = 'Bao gồm các hành động thuộc những loại này';
$string['includelevels'] = 'Bao gồm các hành động thuộc những cấp độ giáo dục này';
$string['jsonformat'] = 'Định dạng JSON';
$string['jsonformat_desc'] = 'Sử dụng định dạng JSON chuẩn thay cho dữ liệu được tuần tự hóa bằng PHP trong trường cơ sở dữ liệu \'other\'.';
$string['logguests'] = 'Ghi nhật ký hành động của khách';
$string['other'] = 'Khác';
$string['participating'] = 'Tham gia';
$string['pluginname'] = 'Nhật ký cơ sở dữ liệu bên ngoài';
$string['pluginname_desc'] = 'Một plugin nhật ký lưu các mục nhật ký vào bảng cơ sở dữ liệu bên ngoài.';
$string['privacy:metadata:log'] = 'Tập hợp các sự kiện đã xảy ra';
$string['privacy:metadata:log:anonymous'] = 'Sự kiện có được đánh dấu là ẩn danh hay không';
$string['privacy:metadata:log:eventname'] = 'Tên sự kiện';
$string['privacy:metadata:log:ip'] = 'Địa chỉ IP được sử dụng tại thời điểm xảy ra sự kiện';
$string['privacy:metadata:log:origin'] = 'Nguồn gốc của sự kiện';
$string['privacy:metadata:log:other'] = 'Thông tin bổ sung về sự kiện';
$string['privacy:metadata:log:realuserid'] = 'ID của người dùng thực đứng sau sự kiện, khi đang mạo danh một người dùng.';
$string['privacy:metadata:log:relateduserid'] = 'ID của người dùng có liên quan đến sự kiện này';
$string['privacy:metadata:log:timecreated'] = 'Thời điểm xảy ra sự kiện';
$string['privacy:metadata:log:userid'] = 'ID của người dùng đã kích hoạt sự kiện này';
$string['read'] = 'Đọc';
$string['tablenotfound'] = 'Không tìm thấy bảng được chỉ định';
$string['teaching'] = 'Giảng dạy';
$string['testingsettings'] = 'Đang kiểm tra cài đặt cơ sở dữ liệu...';
$string['testsettings'] = 'Kiểm tra kết nối';
$string['update'] = 'Cập nhật';
