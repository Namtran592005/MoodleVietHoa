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
 * @subpackage shortanswer
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Ô trống cho {no} câu trả lời khác';
$string['answer'] = 'Câu trả lời: {$a}';
$string['answermustbegiven'] = 'Bạn phải nhập câu trả lời nếu có điểm hoặc phản hồi.';
$string['answerno'] = 'Câu trả lời {$a}';
$string['caseno'] = 'Không, không phân biệt chữ hoa chữ thường';
$string['casesensitive'] = 'Phân biệt chữ hoa chữ thường';
$string['caseyes'] = 'Có, phải khớp chữ hoa chữ thường';
$string['correctansweris'] = 'Câu trả lời đúng là: {$a}';
$string['correctanswers'] = 'Các câu trả lời đúng';
$string['filloutoneanswer'] = 'Bạn phải cung cấp ít nhất một câu trả lời có thể chấp nhận. Các câu trả lời để trống sẽ không được sử dụng. Có thể dùng \'*\' làm ký tự đại diện để khớp với bất kỳ ký tự nào. Câu trả lời khớp đầu tiên sẽ được dùng để xác định điểm và phản hồi.';
$string['notenoughanswers'] = 'Loại câu hỏi này cần ít nhất {$a} câu trả lời';
$string['pleaseenterananswer'] = 'Vui lòng nhập câu trả lời.';
$string['pluginname'] = 'Trả lời ngắn';
$string['pluginname_help'] = 'Để trả lời câu hỏi (có thể bao gồm hình ảnh), người trả lời nhập một từ hoặc cụm từ ngắn. Có thể có nhiều câu trả lời đúng, mỗi câu có điểm khác nhau. Nếu chọn tùy chọn "Phân biệt chữ hoa chữ thường", bạn có thể đặt điểm khác nhau cho "Word" và "word".';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = 'Thêm câu hỏi Trả lời ngắn';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi Trả lời ngắn';
$string['pluginnamesummary'] = 'Cho phép trả lời bằng một hoặc vài từ; câu trả lời được chấm bằng cách so sánh với nhiều câu trả lời mẫu, có thể chứa ký tự đại diện.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi Trả lời ngắn cho phép người soạn câu hỏi đặt các tùy chọn mặc định làm tùy chọn ưu tiên của người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi.';
$string['privacy:preference:penalty'] = 'Mức trừ điểm cho mỗi lần thử sai khi câu hỏi được thực hiện bằng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích ứng\'.';
$string['privacy:preference:usecase'] = 'Câu trả lời có phân biệt chữ hoa chữ thường hay không.';
