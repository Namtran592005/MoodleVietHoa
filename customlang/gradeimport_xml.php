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
 * @package    gradeimport
 * @subpackage xml
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadgrade'] = 'Lỗi - điểm \'{$a->badgrade}\' được cung cấp không hợp lệ đối với người dùng có mã số \'{$a->useridnumber}\'.';
$string['errbadxmlformat'] = 'Lỗi - định dạng XML không hợp lệ';
$string['errduplicategradeidnumber'] = 'Lỗi - có hai mục điểm mang idnumber \'{$a}\' trong khóa học này. Điều này không thể xảy ra.';
$string['errduplicateidnumber'] = 'Lỗi - idnumber bị trùng lặp';
$string['errincorrectgradeidnumber'] = 'Lỗi - idnumber \'{$a}\' trong tệp nhập không khớp với mục điểm nào.';
$string['errincorrectidnumber'] = 'Lỗi - idnumber không chính xác';
$string['errincorrectuseridnumber'] = 'Lỗi - idnumber \'{$a}\' trong tệp nhập không khớp với người dùng nào.';
$string['error'] = 'Đã xảy ra lỗi';
$string['errorduringimport'] = 'Đã xảy ra lỗi khi thử nhập: {$a}';
$string['fileurl'] = 'URL tệp từ xa';
$string['fileurl_help'] = 'Trường URL tệp từ xa dùng để lấy dữ liệu từ máy chủ từ xa, chẳng hạn như hệ thống thông tin học viên.';
$string['importxml'] = 'Nhập XML';
$string['importxml_help'] = 'Có thể nhập điểm từ tệp XML chứa mã số người dùng và mã số hoạt động. Để lấy đúng định dạng, trước tiên hãy xuất một số điểm sang tệp XML rồi xem tệp đó.';
$string['importxml_link'] = 'grade/import/xml/index';
$string['pluginname'] = 'Tệp XML';
$string['privacy:metadata'] = 'Trình bổ trợ nhập điểm từ XML không lưu trữ dữ liệu cá nhân nào.';
$string['xml:publish'] = 'Công bố chức năng nhập điểm từ XML';
$string['xml:view'] = 'Nhập điểm từ XML';
