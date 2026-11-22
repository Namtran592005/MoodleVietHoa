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
 * @subpackage essay
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Các loại tệp được chấp nhận';
$string['acceptedfiletypes_help'] = 'Có thể giới hạn các loại tệp được chấp nhận bằng cách nhập danh sách phần mở rộng tệp. Nếu để trống trường này, mọi loại tệp đều được phép.';
$string['allowattachments'] = 'Cho phép tệp đính kèm';
$string['answerfiles'] = 'Tệp trả lời';
$string['answertext'] = 'Văn bản trả lời';
$string['attachedfiles'] = 'Tệp đính kèm: {$a}';
$string['attachmentsoptional'] = 'Tệp đính kèm không bắt buộc';
$string['attachmentsrequired'] = 'Yêu cầu tệp đính kèm';
$string['attachmentsrequired_help'] = 'Tùy chọn này chỉ định số lượng tệp đính kèm tối thiểu cần có để câu trả lời được xem là có thể chấm điểm.';
$string['err_maxminmismatch'] = 'Giới hạn số từ tối đa phải lớn hơn giới hạn số từ tối thiểu';
$string['err_maxwordlimit'] = 'Đã bật giới hạn số từ tối đa nhưng chưa đặt giá trị';
$string['err_maxwordlimitnegative'] = 'Giới hạn số từ tối đa không thể là số âm';
$string['err_minwordlimit'] = 'Đã bật giới hạn số từ tối thiểu nhưng chưa đặt giá trị';
$string['err_minwordlimitnegative'] = 'Giới hạn số từ tối thiểu không thể là số âm';
$string['formateditor'] = 'Trình soạn thảo HTML';
$string['formateditorfilepicker'] = 'Trình soạn thảo HTML có bộ chọn tệp';
$string['formatmonospaced'] = 'Văn bản thuần, phông chữ đơn cách';
$string['formatnoinline'] = 'Không có văn bản trực tuyến';
$string['formatplain'] = 'Văn bản thuần';
$string['graderinfo'] = 'Thông tin dành cho người chấm';
$string['graderinfoheader'] = 'Thông tin người chấm';
$string['maxbytes'] = 'Kích thước tệp tối đa';
$string['maxwordlimit'] = 'Giới hạn số từ tối đa';
$string['maxwordlimit_help'] = 'Nếu câu trả lời yêu cầu học viên nhập văn bản, đây là số từ tối đa mỗi học viên được phép nộp.';
$string['maxwordlimitboundary'] = 'Giới hạn số từ của câu hỏi này là {$a->limit} từ, nhưng bạn đang định nộp {$a->count} từ. Vui lòng rút ngắn câu trả lời rồi thử lại.';
$string['minwordlimit'] = 'Giới hạn số từ tối thiểu';
$string['minwordlimit_help'] = 'Nếu câu trả lời yêu cầu học viên nhập văn bản, đây là số từ tối thiểu mỗi học viên phải nộp.';
$string['minwordlimitboundary'] = 'Câu hỏi này yêu cầu câu trả lời có ít nhất {$a->limit} từ, nhưng bạn đang định nộp {$a->count} từ. Vui lòng viết thêm rồi thử lại.';
$string['mustattach'] = 'Khi chọn "Không có văn bản trực tuyến" hoặc khi không bắt buộc trả lời, bạn phải cho phép ít nhất một tệp đính kèm.';
$string['mustrequire'] = 'Khi chọn "Không có văn bản trực tuyến" hoặc khi không bắt buộc trả lời, bạn phải yêu cầu ít nhất một tệp đính kèm.';
$string['mustrequirefewer'] = 'Bạn không thể yêu cầu số tệp đính kèm nhiều hơn số tệp được phép.';
$string['nlines'] = '{$a} dòng';
$string['nonexistentfiletypes'] = 'Không nhận diện được các loại tệp sau: {$a}';
$string['pluginname'] = 'Bài luận';
$string['pluginname_help'] = 'Để trả lời câu hỏi, người trả lời có thể tải lên một hoặc nhiều tệp và/hoặc nhập văn bản trực tuyến. Có thể cung cấp mẫu trả lời. Câu trả lời phải được chấm thủ công.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Thêm câu hỏi bài luận';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi bài luận';
$string['pluginnamesummary'] = 'Cho phép trả lời bằng cách tải tệp lên và/hoặc nhập văn bản trực tuyến. Câu trả lời sau đó phải được chấm thủ công.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi Bài luận cho phép tác giả câu hỏi đặt các tùy chọn mặc định dưới dạng tùy chọn của người dùng.';
$string['privacy:preference:attachments'] = 'Số lượng tệp đính kèm được phép.';
$string['privacy:preference:attachmentsrequired'] = 'Số lượng tệp đính kèm bắt buộc.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi cụ thể.';
$string['privacy:preference:maxbytes'] = 'Kích thước tệp tối đa.';
$string['privacy:preference:responsefieldlines'] = 'Số dòng biểu thị kích thước của ô nhập liệu (textarea).';
$string['privacy:preference:responseformat'] = 'Định dạng câu trả lời là gì (trình soạn thảo HTML, văn bản thuần, v.v.)?';
$string['privacy:preference:responserequired'] = 'Học viên có bắt buộc nhập văn bản hay không, hoặc phần nhập văn bản có phải là tùy chọn.';
$string['responsefieldlines'] = 'Kích thước ô nhập liệu';
$string['responseformat'] = 'Định dạng câu trả lời';
$string['responseisrequired'] = 'Yêu cầu học viên nhập văn bản';
$string['responsenotrequired'] = 'Không bắt buộc nhập văn bản';
$string['responseoptions'] = 'Tùy chọn câu trả lời';
$string['responserequired'] = 'Yêu cầu văn bản';
$string['responsetemplate'] = 'Mẫu trả lời';
$string['responsetemplate_help'] = 'Mọi văn bản nhập tại đây sẽ hiển thị trong ô nhập câu trả lời khi bắt đầu lần làm bài mới cho câu hỏi.';
$string['responsetemplateheader'] = 'Mẫu trả lời';
$string['wordcount'] = 'Số từ: {$a}';
$string['wordcounttoofew'] = 'Số từ: {$a->count}, ít hơn số từ tối thiểu yêu cầu là {$a->limit}.';
$string['wordcounttoomuch'] = 'Số từ: {$a->count}, vượt quá giới hạn {$a->limit} từ.';
