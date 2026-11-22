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
 * @package    fileconverter
 * @subpackage unoconv
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Đường dẫn đến bộ chuyển đổi tài liệu unoconv';
$string['pathtounoconv_help'] = 'Đường dẫn đến bộ chuyển đổi tài liệu unoconv. Đây là chương trình thực thi có khả năng chuyển đổi giữa các định dạng tài liệu được LibreOffice hỗ trợ. Tùy chọn này không bắt buộc, nhưng nếu được chỉ định, Moodle sẽ sử dụng chương trình này để tự động chuyển đổi giữa các định dạng tài liệu. Tính năng này hỗ trợ nhiều loại tệp đầu vào hơn cho tính năng chú thích PDF của bài tập.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Plugin chuyển đổi tài liệu Unoconv không lưu trữ dữ liệu cá nhân nào.';
$string['test_unoconv'] = 'Kiểm tra đường dẫn unoconv';
$string['test_unoconvdoesnotexist'] = 'Đường dẫn unoconv không trỏ đến chương trình unoconv. Vui lòng kiểm tra lại thiết lập đường dẫn.';
$string['test_unoconvdownload'] = 'Tải xuống tệp PDF kiểm tra đã chuyển đổi.';
$string['test_unoconvempty'] = 'Chưa thiết lập đường dẫn unoconv. Vui lòng kiểm tra lại thiết lập đường dẫn.';
$string['test_unoconvisdir'] = 'Đường dẫn unoconv trỏ đến một thư mục. Vui lòng thêm chương trình unoconv vào đường dẫn bạn chỉ định';
$string['test_unoconvnotestfile'] = 'Thiếu tài liệu kiểm tra cần chuyển đổi sang PDF.';
$string['test_unoconvnotexecutable'] = 'Đường dẫn unoconv trỏ đến một tệp không thể thực thi';
$string['test_unoconvok'] = 'Đường dẫn unoconv có vẻ đã được cấu hình đúng.';
$string['test_unoconvversionnotsupported'] = 'Phiên bản unoconv bạn đã cài đặt không được hỗ trợ.';
