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
 * @package    qtype
 * @subpackage randomsamatch
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Không có đủ lựa chọn cho câu hỏi này nên câu hỏi không khả dụng trong bài kiểm tra này. Vui lòng báo cho giáo viên của bạn.';
$string['nosaincategory'] = 'Không có câu hỏi trả lời ngắn nào trong danh mục bạn đã chọn \'{$a->catname}\'. Hãy chọn danh mục khác hoặc tạo câu hỏi trong danh mục này.';
$string['notenoughsaincategory'] = 'Chỉ có {$a->nosaquestions} câu hỏi trả lời ngắn trong danh mục bạn đã chọn \'{$a->catname}\'. Hãy chọn danh mục khác, tạo thêm câu hỏi trong danh mục này hoặc giảm số lượng câu hỏi đã chọn.';
$string['pluginname'] = 'Ghép câu trả lời ngắn ngẫu nhiên';
$string['pluginname_help'] = 'Đối với học viên, dạng câu hỏi này trông giống như câu hỏi ghép đôi. Điểm khác biệt là danh sách tên hoặc phát biểu (câu hỏi) cần ghép được chọn ngẫu nhiên từ các câu hỏi trả lời ngắn trong danh mục hiện tại. Danh mục cần có đủ câu hỏi trả lời ngắn chưa được sử dụng; nếu không, thông báo lỗi sẽ được hiển thị.';
$string['pluginname_link'] = 'question/type/randomsamatch';
$string['pluginnameadding'] = 'Thêm câu hỏi Ghép câu trả lời ngắn ngẫu nhiên';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi Ghép câu trả lời ngắn ngẫu nhiên';
$string['pluginnamesummary'] = 'Tương tự câu hỏi Ghép đôi, nhưng được tạo ngẫu nhiên từ các câu hỏi trả lời ngắn trong một danh mục cụ thể.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi Ghép câu trả lời ngắn ngẫu nhiên không lưu trữ dữ liệu cá nhân nào.';
$string['randomsamatch'] = 'Ghép câu trả lời ngắn ngẫu nhiên';
$string['randomsamatchintro'] = 'Với mỗi câu hỏi sau đây, hãy chọn câu trả lời phù hợp trong menu.';
$string['randomsamatchnumber'] = 'Số câu hỏi cần chọn';
$string['subcats'] = 'Bao gồm các danh mục con';
$string['subcats_help'] = 'Nếu chọn, câu hỏi cũng sẽ được lấy từ các danh mục con.';
