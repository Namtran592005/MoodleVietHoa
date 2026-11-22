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
 * @package    qformat
 * @subpackage xml
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Tệp XML không hợp lệ - cần có chuỗi (hãy dùng CDATA?)';
$string['pluginname'] = 'Định dạng XML Moodle';
$string['pluginname_help'] = 'Đây là định dạng riêng của Moodle để nhập và xuất câu hỏi.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'Plugin định dạng câu hỏi XML không lưu trữ dữ liệu cá nhân nào.';
$string['truefalseimporterror'] = '<b>Cảnh báo</b>: Không thể nhập đúng câu hỏi đúng/sai \'{$a->questiontext}\'. Không xác định được câu trả lời đúng là đúng hay sai. Câu hỏi đã được nhập với giả định câu trả lời là \'{$a->answer}\'. Nếu điều này không chính xác, bạn cần chỉnh sửa câu hỏi.';
$string['unsupportedexport'] = 'Loại câu hỏi {$a} không được hỗ trợ khi xuất XML';
$string['xmlimportnoname'] = 'Thiếu tên câu hỏi trong tệp XML';
$string['xmlimportnoquestion'] = 'Thiếu nội dung câu hỏi trong tệp XML';
$string['xmltypeunsupported'] = 'Loại câu hỏi {$a} không được hỗ trợ khi nhập XML';
