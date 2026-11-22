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
 * @subpackage match
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Câu trả lời {$a}';
$string['availablechoices'] = 'Các lựa chọn có sẵn';
$string['blanksforxmorequestions'] = 'Ô trống cho {no} câu hỏi khác';
$string['correctansweris'] = 'Đáp án đúng là: {$a}';
$string['deletedchoice'] = '[Lựa chọn đã bị xóa]';
$string['deletedsubquestion'] = 'Phần này của câu hỏi đã bị xóa sau khi lần làm bài bắt đầu.';
$string['filloutthreeqsandtwoas'] = 'Bạn phải cung cấp ít nhất hai câu hỏi và ba câu trả lời. Bạn có thể cung cấp thêm câu trả lời sai bằng cách nhập câu trả lời nhưng để trống câu hỏi. Các mục có cả câu hỏi lẫn câu trả lời đều để trống sẽ bị bỏ qua.';
$string['nomatchinganswer'] = 'Bạn phải chỉ định câu trả lời khớp với câu hỏi \'{$a}\'.';
$string['nomatchinganswerforq'] = 'Bạn phải chỉ định câu trả lời cho câu hỏi này.';
$string['notenoughqsandas'] = 'Bạn phải cung cấp ít nhất {$a->q} câu hỏi và {$a->a} câu trả lời.';
$string['notenoughquestions'] = 'Bạn phải cung cấp ít nhất {$a} cặp câu hỏi và câu trả lời.';
$string['pleaseananswerallparts'] = 'Vui lòng trả lời tất cả các phần của câu hỏi.';
$string['pluginname'] = 'Ghép đôi';
$string['pluginname_help'] = 'Câu hỏi ghép đôi yêu cầu người trả lời ghép chính xác một danh sách tên hoặc mệnh đề (câu hỏi) với một danh sách tên hoặc mệnh đề khác (câu trả lời).';
$string['pluginname_link'] = 'question/type/match';
$string['pluginnameadding'] = 'Thêm câu hỏi ghép đôi';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi ghép đôi';
$string['pluginnamesummary'] = 'Phải chọn câu trả lời cho mỗi câu hỏi phụ từ một danh sách các lựa chọn.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi ghép đôi cho phép tác giả câu hỏi đặt các tùy chọn mặc định dưới dạng tùy chọn của người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi cụ thể.';
$string['privacy:preference:penalty'] = 'Mức phạt cho mỗi lần thử sai khi câu hỏi được chạy bằng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích ứng\'.';
$string['privacy:preference:shuffleanswers'] = 'Có tự động xáo trộn các câu trả lời hay không.';
$string['regradeissuenumchoiceschanged'] = 'Số lượng lựa chọn đã thay đổi.';
$string['regradeissuenumstemschanged'] = 'Số lượng câu hỏi phụ đã thay đổi.';
$string['shuffle'] = 'Xáo trộn';
$string['shuffle_help'] = 'Nếu được bật, thứ tự câu hỏi sẽ được xáo trộn ngẫu nhiên trong mỗi lần làm bài, với điều kiện tùy chọn "Xáo trộn trong câu hỏi" trong cài đặt hoạt động cũng được bật. Trong câu hỏi ghép đôi, tham số này chỉ áp dụng cho các câu hỏi. Các lựa chọn trả lời luôn được xáo trộn.';
