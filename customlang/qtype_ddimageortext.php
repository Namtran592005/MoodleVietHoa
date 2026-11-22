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
 * @subpackage ddimageortext
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoredropzones'] = 'Ô trống cho {no} vùng thả nữa';
$string['addmoreimages'] = 'Ô trống cho {no} mục có thể kéo nữa';
$string['answer'] = 'Câu trả lời';
$string['bgimage'] = 'Ảnh nền';
$string['blank'] = 'trống';
$string['correctansweris'] = 'Đáp án đúng là: {$a}';
$string['deletedchoice'] = '[Lựa chọn đã xóa]';
$string['draggableimage'] = 'Ảnh có thể kéo';
$string['draggableitem'] = 'Mục có thể kéo';
$string['draggableitemheader'] = 'Mục có thể kéo {$a}';
$string['draggableitems'] = 'Các mục có thể kéo';
$string['draggableitemtype'] = 'Loại';
$string['draggableword'] = 'Văn bản có thể kéo';
$string['dropbackground'] = 'Ảnh nền để thả các điểm đánh dấu lên';
$string['dropzone'] = 'Vùng thả {$a}';
$string['dropzoneheader'] = 'Các vùng thả';
$string['dropzonevisibility'] = 'Hiển thị vùng thả';
$string['dropzonevisibility_help'] = 'Các vùng thả có nên trong suốt để không che khuất một phần ảnh nền không? Các mục có thể kéo sẽ tự căn vào vùng thả gần nhất.';
$string['dropzonevisibility_hideoption'] = 'Vùng thả trong suốt';
$string['dropzonevisibility_showoption'] = 'Hiển thị vùng thả';
$string['dropzonevisibilitydesc'] = 'Đường viền vẫn hiển thị khi chỉnh sửa câu hỏi để hỗ trợ thiết lập vùng thả.';
$string['formerror_disallowedtags'] = 'Chỉ cho phép các thẻ "{$a}" trong văn bản có thể kéo này.';
$string['formerror_dragrequired'] = 'Bạn phải thêm ít nhất một mục có thể kéo vào câu hỏi này.';
$string['formerror_droprequired'] = 'Bạn phải xác định ít nhất một vùng thả cho câu hỏi này.';
$string['formerror_multipledraginstance'] = 'Bạn đã chọn ảnh này {$a} nhiều lần làm lựa chọn đúng cho một vùng thả, nhưng ảnh chưa được đánh dấu là mục kéo không giới hạn.';
$string['formerror_multipledraginstance2'] = 'Bạn đã chọn ảnh này nhiều lần làm lựa chọn đúng cho một vùng thả, nhưng ảnh chưa được đánh dấu là mục kéo không giới hạn.';
$string['formerror_noallowedtags'] = 'Không được dùng thẻ HTML trong văn bản này, vì đây là văn bản thay thế cho ảnh có thể kéo.';
$string['formerror_nobgimage'] = 'Bạn cần chọn một ảnh làm nền cho khu vực kéo và thả.';
$string['formerror_nofile'] = 'Bạn cần tải lên hoặc chọn một tệp để sử dụng tại đây.';
$string['formerror_nofile3'] = 'Bạn cần chọn một tệp ảnh tại đây, hoặc xóa nhãn liên quan và bỏ chọn hộp kiểm không giới hạn.';
$string['formerror_noimageselected'] = 'Bạn cần chọn một mục để kéo làm lựa chọn đúng cho vùng thả này.';
$string['formerror_notintxleft'] = 'Tọa độ x phải là số nguyên.';
$string['formerror_notintytop'] = 'Tọa độ y phải là số nguyên.';
$string['formerror_noxleft'] = 'Bạn phải nhập tọa độ x cho góc trên bên trái của vùng thả này. Bạn có thể kéo vùng thả ở phía trên để đặt tọa độ hoặc nhập thủ công tại đây.';
$string['formerror_noytop'] = 'Bạn phải nhập tọa độ y cho góc trên bên trái của vùng thả này. Bạn có thể kéo vùng thả ở phía trên để đặt tọa độ hoặc nhập thủ công tại đây.';
$string['infinite'] = 'Không giới hạn';
$string['label'] = 'Văn bản';
$string['nolabel'] = 'Không có văn bản nhãn';
$string['pleasedraganimagetoeachdropregion'] = 'Câu trả lời của bạn chưa hoàn chỉnh; hãy kéo một mục vào mỗi vùng thả.';
$string['pluginname'] = 'Kéo và thả lên ảnh';
$string['pluginname_help'] = 'Câu hỏi kéo và thả lên ảnh yêu cầu người trả lời kéo ảnh hoặc nhãn văn bản và thả vào các vùng thả được xác định trên ảnh nền. Có thể nhóm các mục có thể kéo để tất cả mục trong một nhóm có cùng màu với các vùng thả. Các mục được đánh dấu là không giới hạn có thể được thả vào nhiều vùng.';
$string['pluginname_link'] = 'question/type/ddimageortext';
$string['pluginnameadding'] = 'Thêm câu hỏi kéo và thả lên ảnh';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi kéo và thả lên ảnh';
$string['pluginnamesummary'] = 'Ảnh hoặc nhãn văn bản được kéo và thả vào các vùng thả trên ảnh nền.

Lưu ý: Người dùng khiếm thị không thể tiếp cận loại câu hỏi này.';
$string['previewareaheader'] = 'Xem trước';
$string['previewareamessage'] = 'Chọn ảnh nền, chỉ định các mục có thể kéo và xác định các vùng thả trên ảnh nền để thả các mục vào.';
$string['privacy:metadata'] = 'Loại câu hỏi Kéo và thả lên ảnh cho phép người tạo câu hỏi đặt các tùy chọn mặc định làm tùy chọn ưu tiên của người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi.';
$string['privacy:preference:penalty'] = 'Mức phạt cho mỗi lần thử sai khi câu hỏi được thực hiện bằng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích ứng\'.';
$string['privacy:preference:shuffleanswers'] = 'Có tự động xáo trộn các câu trả lời hay không.';
$string['refresh'] = 'Làm mới bản xem trước';
$string['shuffleimages'] = 'Xáo trộn các mục kéo mỗi lần làm câu hỏi';
$string['summarisechoice'] = '{$a->no}. {$a->text}';
$string['summarisechoiceno'] = 'Mục {$a}';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Vùng thả {$a}';
$string['xleft'] = 'Trái';
$string['ytop'] = 'Trên';
