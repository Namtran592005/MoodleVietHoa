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
 * @subpackage multianswer
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Tôi xác nhận muốn lưu câu hỏi theo nội dung đã chỉnh sửa';
$string['confirmsave'] = 'Xác nhận rồi lưu {$a}';
$string['correctanswer'] = 'Đáp án đúng';
$string['correctanswerandfeedback'] = 'Đáp án đúng và phản hồi';
$string['corruptedquestion'] = 'Câu hỏi này bị hỏng và chứa các câu hỏi phụ không có trong hệ thống của bạn.';
$string['decodeverifyquestiontext'] = 'Giải mã và xác minh văn bản câu hỏi';
$string['invalidmultianswerquestion'] = 'Câu hỏi điền đáp án vào chỗ trống (Cloze) không hợp lệ ({$a}).';
$string['layout'] = 'Bố cục';
$string['layouthorizontal'] = 'Hàng nút radio nằm ngang';
$string['layoutmultiple_horizontal'] = 'Hàng hộp kiểm nằm ngang';
$string['layoutmultiple_vertical'] = 'Cột hộp kiểm nằm dọc';
$string['layoutselectinline'] = 'Danh sách thả xuống nằm trong dòng văn bản';
$string['layoutundefined'] = 'Bố cục chưa xác định';
$string['layoutvertical'] = 'Cột nút radio nằm dọc';
$string['missingsubquestion'] = 'Câu hỏi phụ này không có trong hệ thống của bạn và không thể hiển thị.';
$string['multichoicex'] = 'Câu hỏi trắc nghiệm {$a}';
$string['nooptionsforsubquestion'] = 'Không thể lấy tùy chọn cho phần câu hỏi # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'Câu hỏi Cloze (nhiều đáp án) "<strong>{$a}</strong>" không chứa câu hỏi nào';
$string['pleaseananswerallparts'] = 'Vui lòng trả lời tất cả các phần của câu hỏi.';
$string['pluginname'] = 'Đáp án nhúng (Cloze)';
$string['pluginname_help'] = 'Câu hỏi dạng đáp án nhúng (Cloze) gồm một đoạn văn bản có lồng các câu hỏi như trắc nghiệm và trả lời ngắn.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Thêm câu hỏi dạng đáp án nhúng (Cloze)';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi dạng đáp án nhúng (Cloze)';
$string['pluginnamesummary'] = 'Các câu hỏi thuộc loại này rất linh hoạt, nhưng chỉ có thể được tạo bằng cách nhập văn bản chứa mã đặc biệt để tạo các câu hỏi trắc nghiệm, trả lời ngắn và câu hỏi số nhúng.';
$string['privacy:metadata'] = 'Trình bổ trợ loại câu hỏi Đáp án nhúng (Cloze) không lưu trữ dữ liệu cá nhân.';
$string['qtypenotrecognized'] = 'Không nhận diện được loại câu hỏi {$a}';
$string['questiondefinition'] = 'Định nghĩa câu hỏi';
$string['questiondeleted'] = 'Đã xóa câu hỏi';
$string['questioninquiz'] = '<ul>
  <li>thêm hoặc xóa câu hỏi, </li>
  <li>thay đổi thứ tự câu hỏi trong văn bản,</li>
  <li>thay đổi loại câu hỏi (số, trả lời ngắn, trắc nghiệm). </li></ul>';
$string['questionnotfound'] = 'Không thể tìm thấy câu hỏi thuộc phần câu hỏi #{$a}';
$string['questionsadded'] = 'Đã thêm câu hỏi';
$string['questionsaveasedited'] = 'Câu hỏi sẽ được lưu dưới dạng đã chỉnh sửa';
$string['questionsless'] = 'Ít hơn {$a} câu hỏi so với câu hỏi nhiều đáp án được lưu trong cơ sở dữ liệu';
$string['questionsmissing'] = 'Văn bản câu hỏi phải bao gồm ít nhất một đáp án nhúng.';
$string['questionsmore'] = 'Nhiều hơn {$a} câu hỏi so với câu hỏi nhiều đáp án được lưu trong cơ sở dữ liệu';
$string['questiontypechanged'] = 'Đã thay đổi loại câu hỏi';
$string['questiontypechangedcomment'] = 'Ít nhất một loại câu hỏi đã được thay đổi.<br />Bạn đã thêm, xóa hoặc di chuyển câu hỏi chưa?<br />Hãy kiểm tra phần tiếp theo.';
$string['questionusedinquiz'] = 'Câu hỏi này được sử dụng trong {$a->nb_of_quiz} bài kiểm tra, tổng số lần làm bài: {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'Số câu hỏi phụ được nhúng trong câu hỏi đã thay đổi.';
$string['storedqtype'] = 'Loại câu hỏi được lưu: {$a}';
$string['subqresponse'] = 'phần {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Loại câu hỏi không xác định: {$a->type} thuộc phần câu hỏi # {$a->sub}';
$string['warningquestionmodified'] = '<b>CẢNH BÁO</b>';
$string['youshouldnot'] = '<b>BẠN KHÔNG NÊN</b>';
