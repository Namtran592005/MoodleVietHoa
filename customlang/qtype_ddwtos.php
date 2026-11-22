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
 * @subpackage ddwtos
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Ô trống cho {no} lựa chọn khác';
$string['answer'] = 'Câu trả lời';
$string['blank'] = 'ô trống';
$string['blanknumber'] = 'Ô trống {$a}';
$string['choicesacceptedtext'] = 'Viết các câu trả lời cần kéo vào chỗ trống. Bạn có thể thêm câu trả lời phụ để tăng độ khó. <br/>
Định dạng văn bản được chấp nhận: &lt;sub&gt;, &lt;sup&gt;, &lt;b&gt;, &lt;i&gt;, &lt;em&gt;, &lt;strong&gt;. Cũng chấp nhận TeX, dùng $$ ở đầu và cuối.';
$string['correctansweris'] = 'Đáp án đúng là: {$a}';
$string['errorlimitedchoice'] = 'Lựa chọn [[{$a}]] đã được sử dụng nhiều hơn một lần mà chưa được đặt thành "Không giới hạn". Vui lòng kiểm tra lại câu hỏi này.';
$string['infinite'] = 'Không giới hạn';
$string['pleaseputananswerineachbox'] = 'Vui lòng điền câu trả lời vào mỗi ô.';
$string['pluginname'] = 'Kéo thả vào văn bản';
$string['pluginname_help'] = 'Câu hỏi kéo thả vào văn bản yêu cầu người trả lời kéo từ hoặc cụm từ vào đúng chỗ trống trong nội dung câu hỏi. [[1]], [[2]], [[3]], ... được dùng làm chỗ giữ chỗ trong nội dung câu hỏi; các câu trả lời đúng lần lượt được chỉ định là lựa chọn 1, 2, 3, ... Có thể nhóm các lựa chọn trả lời để tất cả câu trả lời trong một nhóm có cùng màu với các chỗ trống tương ứng trong nội dung câu hỏi. Các lựa chọn trả lời được đánh dấu là không giới hạn có thể được dùng cho nhiều chỗ trống.';
$string['pluginname_link'] = 'question/type/ddwtos';
$string['pluginnameadding'] = 'Thêm câu hỏi kéo thả vào văn bản';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi kéo thả vào văn bản';
$string['pluginnamesummary'] = 'Các từ còn thiếu trong nội dung câu hỏi được điền bằng cách kéo thả.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi kéo thả vào văn bản cho phép tác giả câu hỏi đặt các tùy chọn mặc định dưới dạng tùy chọn của người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi cụ thể.';
$string['privacy:preference:penalty'] = 'Mức phạt cho mỗi lần thử sai khi câu hỏi được chạy bằng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích ứng\'.';
$string['privacy:preference:shuffleanswers'] = 'Có tự động xáo trộn các câu trả lời hay không.';
