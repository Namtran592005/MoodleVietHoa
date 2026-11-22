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
 * @subpackage calculatedmulti
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Các lựa chọn';
$string['answeroptions_help'] = 'Công thức lựa chọn được đề xuất là ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Trắc nghiệm tính toán';
$string['pluginname_help'] = 'Câu hỏi trắc nghiệm tính toán tương tự câu hỏi trắc nghiệm, nhưng các lựa chọn có thể bao gồm kết quả công thức số sử dụng ký tự đại diện trong dấu ngoặc nhọn. Khi làm bài kiểm tra, các ký tự này được thay bằng các giá trị riêng lẻ. Ví dụ, với câu hỏi "Diện tích hình chữ nhật có chiều dài {l} và chiều rộng {w} là bao nhiêu?", một lựa chọn có thể là {={l}*{w}} (trong đó * biểu thị phép nhân).';
$string['pluginname_link'] = 'question/type/calculatedmulti';
$string['pluginnameadding'] = 'Thêm câu hỏi trắc nghiệm tính toán';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi trắc nghiệm tính toán';
$string['pluginnamesummary'] = 'Câu hỏi trắc nghiệm tính toán tương tự câu hỏi trắc nghiệm, nhưng các lựa chọn có thể bao gồm kết quả công thức từ các giá trị số được chọn ngẫu nhiên trong một tập hợp khi làm bài kiểm tra.';
$string['privacy:metadata'] = 'Loại câu hỏi Trắc nghiệm tính toán không lưu trữ dữ liệu cá nhân nào.';
