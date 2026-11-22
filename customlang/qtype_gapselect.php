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
 * @subpackage gapselect
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Ô trống cho {no} lựa chọn khác';
$string['answer'] = 'Câu trả lời';
$string['blanknumber'] = 'Ô trống {$a}';
$string['choices'] = 'Các lựa chọn';
$string['choicex'] = 'Lựa chọn [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'menu thả xuống';
$string['combinedcontrolnamegapselectplural'] = 'các menu thả xuống';
$string['correctansweris'] = 'Đáp án đúng là: {$a}';
$string['errorblankchoice'] = 'Vui lòng kiểm tra các lựa chọn: Lựa chọn {$a} đang để trống.';
$string['errormissingchoice'] = 'Vui lòng kiểm tra nội dung câu hỏi: Không tìm thấy {$a} trong các lựa chọn! Chỉ được dùng làm chỗ giữ chỗ các số có câu trả lời lựa chọn tương ứng.';
$string['errornoslots'] = 'Nội dung câu hỏi phải có các chỗ giữ chỗ như [[1]] để chỉ vị trí của những từ còn thiếu.';
$string['errorquestiontextblank'] = 'Bạn phải nhập nội dung câu hỏi.';
$string['group'] = 'Nhóm';
$string['pleaseputananswerineachbox'] = 'Vui lòng điền câu trả lời vào mỗi ô.';
$string['pluginname'] = 'Chọn từ còn thiếu';
$string['pluginname_help'] = 'Câu hỏi chọn từ còn thiếu yêu cầu người trả lời chọn đáp án đúng từ các menu thả xuống. [[1]], [[2]], [[3]], ... được dùng làm chỗ giữ chỗ trong nội dung câu hỏi; các đáp án đúng lần lượt được chỉ định là lựa chọn 1, 2, 3, ... Có thể thêm lựa chọn trả lời phụ để tăng độ khó. Có thể nhóm các lựa chọn trả lời để giới hạn các đáp án có sẵn trong mỗi menu thả xuống.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Thêm câu hỏi chọn từ còn thiếu';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi chọn từ còn thiếu';
$string['pluginnamesummary'] = 'Các từ còn thiếu trong nội dung câu hỏi được điền bằng menu thả xuống.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi chọn từ còn thiếu cho phép tác giả câu hỏi đặt các tùy chọn mặc định dưới dạng tùy chọn của người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi cụ thể.';
$string['privacy:preference:penalty'] = 'Mức phạt cho mỗi lần thử sai khi câu hỏi được chạy bằng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích ứng\'.';
$string['privacy:preference:shuffleanswers'] = 'Có tự động xáo trộn các câu trả lời hay không.';
$string['regradeissuenumchoiceschanged'] = 'Số lượng lựa chọn trong nhóm {$a} đã thay đổi.';
$string['regradeissuenumgroupsschanged'] = 'Số lượng nhóm lựa chọn đã thay đổi.';
$string['shuffle'] = 'Xáo trộn';
$string['tagsnotallowed'] = 'Không cho phép {$a->tag}. (Chỉ cho phép {$a->allowed}.)';
$string['tagsnotallowedatall'] = 'Không cho phép {$a->tag}. (Không được phép dùng HTML tại đây.)';
