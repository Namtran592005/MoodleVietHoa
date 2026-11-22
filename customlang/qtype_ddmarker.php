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
 * @subpackage ddmarker
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Ô trống cho {no} điểm đánh dấu nữa';
$string['alttext'] = 'Văn bản thay thế';
$string['answer'] = 'Câu trả lời';
$string['bgimage'] = 'Ảnh nền';
$string['clearwrongparts'] = 'Đưa các dấu đặt sai trở lại vị trí bắt đầu mặc định bên dưới hình ảnh';
$string['coords'] = 'Tọa độ';
$string['correctansweris'] = 'Đáp án đúng là: {$a}';
$string['draggableimage'] = 'Ảnh có thể kéo';
$string['draggableitem'] = 'Mục có thể kéo';
$string['draggableitemheader'] = 'Mục có thể kéo {$a}';
$string['draggableitemtype'] = 'Loại';
$string['draggableword'] = 'Văn bản có thể kéo';
$string['dropbackground'] = 'Ảnh nền để thả các điểm đánh dấu lên';
$string['dropzone'] = 'Vùng thả {$a}';
$string['dropzoneheader'] = 'Các vùng thả';
$string['dropzones'] = 'Các vùng thả';
$string['dropzones_help'] = 'Có thể xác định vùng thả bằng tọa độ hoặc kéo chúng đến vị trí trong bản xem trước ở trên.

Trước tiên, chọn một hình dạng (hình tròn, hình chữ nhật hoặc đa giác) để thêm hình dạng vùng thả mới ở góc trên bên trái của bản xem trước. Có thể thu nhỏ mục Điểm đánh dấu để dễ xem bản xem trước khi chỉnh sửa Các vùng thả.

Để chỉnh sửa hình dạng, hãy nhấp vào hình trong bản xem trước để hiện các nút điều khiển. Bạn có thể di chuyển hình bằng nút điều khiển ở giữa hoặc điều chỉnh kích thước bằng các nút điều khiển ở đỉnh.

Chỉ với đa giác, giữ nút control (nút command trên máy Mac) khi nhấp vào nút điều khiển ở đỉnh để thêm đỉnh mới vào đa giác. Hãy giữ hình đa giác đơn giản nhất có thể và tránh các đường cắt nhau.

Ba hình dạng sử dụng tọa độ như sau:

* Hình tròn: tâm_x, tâm_y; bán kính<br />ví dụ: <code>80,100;50</code>
* Hình chữ nhật: trên_trái_x, trên_trái_y; chiều rộng, chiều cao<br />ví dụ: <code>20,60;80,40</code>
* Đa giác: x1, y1; x2, y2; ...; xn, yn<br />ví dụ: <code>20,60;100,60;20,100</code>

Chọn văn bản Điểm đánh dấu sẽ thêm văn bản đó vào hình trong bản xem trước.';
$string['followingarewrong'] = 'Các điểm đánh dấu được đặt sai khu vực: {$a}.';
$string['followingarewrongandhighlighted'] = 'Các điểm đánh dấu được đặt sai: {$a}. Các điểm đánh dấu được tô sáng hiện được hiển thị ở vị trí đúng. Nhấp vào điểm đánh dấu để tô sáng khu vực được phép.';
$string['formerror_dragrequired'] = 'Bạn phải thêm ít nhất một điểm đánh dấu vào câu hỏi này.';
$string['formerror_droprequired'] = 'Bạn phải xác định ít nhất một vùng thả cho câu hỏi này.';
$string['formerror_nobgimage'] = 'Bạn cần chọn một hình ảnh làm nền cho vùng kéo thả.';
$string['formerror_noitemselected'] = 'Bạn đã chỉ định một vùng thả nhưng chưa chọn dấu cần kéo vào vùng đó.';
$string['formerror_nosemicolons'] = 'Chuỗi tọa độ của bạn không có dấu chấm phẩy. Tọa độ của {$a->shape} phải có dạng - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Chỉ cho phép các thẻ "{$a}" trong nhãn của dấu.';
$string['formerror_onlyusewholepositivenumbers'] = 'Vui lòng chỉ dùng số nguyên dương để xác định tọa độ x,y và/hoặc chiều rộng, chiều cao của các hình. Tọa độ của {$a->shape} phải có dạng - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Với hình đa giác, bạn cần chỉ định ít nhất 3 điểm. Tọa độ của {$a->shape} phải có dạng - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Bạn đã nhập cùng một tọa độ hai lần. Mỗi điểm phải là duy nhất. Tọa độ của {$a->shape} phải có dạng - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Hình bạn đã xác định vượt ra ngoài phạm vi của hình ảnh nền.';
$string['formerror_toomanysemicolons'] = 'Bạn đã chỉ định quá nhiều phần tọa độ được phân tách bằng dấu chấm phẩy. Tọa độ của {$a->shape} phải có dạng - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Không nhận diện được chiều rộng và chiều cao bạn đã chỉ định. Tọa độ của {$a->shape} phải có dạng - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Không nhận diện được tọa độ x,y bạn đã chỉ định. Tọa độ của {$a->shape} phải có dạng - {$a->coordsstring}.';
$string['infinite'] = 'Không giới hạn';
$string['marker'] = 'Dấu';
$string['marker_n'] = 'Dấu {no}';
$string['markers'] = 'Các dấu';
$string['nolabel'] = 'Không có văn bản nhãn';
$string['noofdrags'] = 'Số lượng';
$string['pleasedragatleastonemarker'] = 'Câu trả lời của bạn chưa hoàn chỉnh; bạn phải đặt ít nhất một dấu lên hình ảnh.';
$string['pluginname'] = 'Kéo thả dấu';
$string['pluginname_help'] = 'Câu hỏi kéo thả dấu yêu cầu người trả lời kéo các nhãn văn bản và thả chúng vào những vùng thả được xác định trên một hình ảnh nền.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Thêm câu hỏi kéo thả dấu';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi kéo thả dấu';
$string['pluginnamesummary'] = 'Các dấu được kéo và thả lên hình ảnh nền.

Lưu ý: Loại câu hỏi này không hỗ trợ người dùng khiếm thị.';
$string['previewareaheader'] = 'Xem trước';
$string['previewareamessage'] = 'Chọn tệp hình ảnh nền, nhập nhãn văn bản cho các dấu và xác định những vùng thả trên hình ảnh nền nơi chúng cần được kéo đến.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi kéo thả dấu cho phép tác giả câu hỏi đặt các tùy chọn mặc định dưới dạng tùy chọn của người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi cụ thể.';
$string['privacy:preference:penalty'] = 'Mức phạt cho mỗi lần thử sai khi câu hỏi được chạy bằng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích ứng\'.';
$string['privacy:preference:shuffleanswers'] = 'Có tự động xáo trộn các câu trả lời hay không.';
$string['refresh'] = 'Làm mới bản xem trước';
$string['shape'] = 'Hình dạng';
$string['shape_circle'] = 'Hình tròn';
$string['shape_circle_coords'] = 'x,y;r (trong đó x,y là tọa độ tâm hình tròn và r là bán kính)';
$string['shape_circle_lowercase'] = 'hình tròn';
$string['shape_polygon'] = 'Hình đa giác';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (trong đó x1, y1 là tọa độ đỉnh thứ nhất, x2, y2 là tọa độ đỉnh thứ hai, v.v. Không cần lặp lại tọa độ đỉnh thứ nhất để khép kín đa giác.)';
$string['shape_polygon_lowercase'] = 'hình đa giác';
$string['shape_rectangle'] = 'Hình chữ nhật';
$string['shape_rectangle_coords'] = 'x,y;w,h (trong đó x,y là tọa độ góc trên bên trái của hình chữ nhật, w và h lần lượt là chiều rộng và chiều cao)';
$string['shape_rectangle_lowercase'] = 'hình chữ nhật';
$string['showmisplaced'] = 'Tô sáng các vùng thả chưa có dấu chính xác được thả vào';
$string['shuffleimages'] = 'Xáo trộn các mục cần kéo mỗi lần làm bài kiểm tra';
$string['stateincorrectlyplaced'] = 'Cho biết những dấu nào được đặt sai';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Vùng thả {$a}';
$string['ytop'] = 'Trên cùng';
