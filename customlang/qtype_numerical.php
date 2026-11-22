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
 * @subpackage numerical
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Sai số được chấp nhận';
$string['addmoreanswerblanks'] = 'Ô trống cho thêm {no} đáp án';
$string['addmoreunitblanks'] = 'Ô trống cho thêm {no} đơn vị';
$string['answercolon'] = 'Đáp án:';
$string['answererror'] = 'Sai số';
$string['answermustbenumberorstar'] = 'Đáp án phải là một số, ví dụ -1.234 hoặc 3e8, hoặc \'*\'.';
$string['answerno'] = 'Đáp án {$a}';
$string['decfractionofquestiongrade'] = 'theo tỷ lệ (0-1) của điểm câu hỏi';
$string['decfractionofresponsegrade'] = 'theo tỷ lệ (0-1) của điểm câu trả lời';
$string['decimalformat'] = 'số thập phân';
$string['editableunittext'] = 'phần tử nhập văn bản';
$string['errornomultiplier'] = 'Bạn phải chỉ định hệ số nhân cho đơn vị này.';
$string['errorrepeatedunit'] = 'Không thể có hai đơn vị cùng tên.';
$string['geometric'] = 'Hình học';
$string['invalidnumber'] = 'Bạn phải nhập một số hợp lệ.';
$string['invalidnumbernounit'] = 'Bạn phải nhập một số hợp lệ. Không đưa đơn vị vào câu trả lời.';
$string['invalidnumericanswer'] = 'Một trong các đáp án bạn đã nhập không phải là số hợp lệ.';
$string['invalidnumerictolerance'] = 'Một trong các mức dung sai bạn đã nhập không phải là số hợp lệ.';
$string['leftexample'] = 'ở bên trái, ví dụ $1.00 hoặc £1.00';
$string['manynumerical'] = 'Đơn vị là tùy chọn. Nếu nhập đơn vị, đơn vị đó sẽ được dùng để quy đổi câu trả lời sang Đơn vị 1 trước khi chấm điểm.';
$string['multiplier'] = 'Hệ số nhân';
$string['nominal'] = 'Danh nghĩa';
$string['noneditableunittext'] = 'Văn bản KHÔNG thể chỉnh sửa của Đơn vị số 1';
$string['nonvalidcharactersinnumber'] = 'Các ký tự KHÔNG hợp lệ trong số';
$string['notenoughanswers'] = 'Bạn phải nhập ít nhất một đáp án.';
$string['nounitdisplay'] = 'Không chấm điểm đơn vị';
$string['numericalmultiplier'] = 'Hệ số nhân';
$string['numericalmultiplier_help'] = 'Hệ số nhân là giá trị dùng để nhân câu trả lời số chính xác.

Đơn vị đầu tiên (Đơn vị 1) có hệ số nhân mặc định là 1. Vì vậy, nếu câu trả lời số chính xác là 5500 và bạn đặt W làm đơn vị tại Đơn vị 1 với hệ số nhân mặc định là 1, thì câu trả lời đúng là 5500 W.

Nếu bạn thêm đơn vị kW với hệ số nhân 0.001, câu trả lời đúng 5.5 kW cũng sẽ được chấp nhận. Điều này có nghĩa là các đáp án 5500W hoặc 5.5kW sẽ được chấm là đúng.

Lưu ý rằng sai số được chấp nhận cũng được nhân theo hệ số này, vì vậy sai số cho phép 100W sẽ trở thành sai số 0.1kW.';
$string['oneunitshown'] = 'Đơn vị 1 được tự động hiển thị bên cạnh ô trả lời.';
$string['onlynumerical'] = 'Không sử dụng đơn vị. Chỉ chấm điểm giá trị số.';
$string['pleaseenterananswer'] = 'Vui lòng nhập câu trả lời.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Vui lòng nhập câu trả lời không dùng dấu phân cách hàng nghìn ({$a}).';
$string['pluginname'] = 'Câu hỏi số';
$string['pluginname_help'] = 'Theo góc nhìn của học viên, câu hỏi số trông giống như câu hỏi trả lời ngắn. Điểm khác biệt là đáp án số được phép có sai số được chấp nhận. Nhờ đó, một khoảng đáp án cố định có thể được chấm như cùng một đáp án. Ví dụ, nếu đáp án là 10 với sai số được chấp nhận là 2, thì mọi số từ 8 đến 12 đều được chấp nhận là đúng.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Thêm câu hỏi số';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi số';
$string['pluginnamesummary'] = 'Cho phép trả lời bằng số, có thể kèm đơn vị; câu trả lời được chấm bằng cách so sánh với nhiều đáp án mẫu, có thể áp dụng dung sai.';
$string['privacy:metadata'] = 'Trình bổ trợ loại câu hỏi số cho phép tác giả câu hỏi đặt các tùy chọn mặc định dưới dạng tùy chọn ưu tiên của người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi.';
$string['privacy:preference:multichoicedisplay'] = 'Đơn vị được hiển thị dưới dạng phần tử nhập văn bản, lựa chọn trắc nghiệm hay danh sách thả xuống.';
$string['privacy:preference:penalty'] = 'Mức phạt cho mỗi lần trả lời sai khi câu hỏi được thực hiện bằng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích ứng\'.';
$string['privacy:preference:unitgradingtypes'] = 'Mức phạt đơn vị được áp dụng theo tỷ lệ (0-1) của điểm câu trả lời hay điểm câu hỏi.';
$string['privacy:preference:unitpenalty'] = 'Áp dụng tỷ lệ nào (0-1) của điểm câu trả lời hoặc điểm câu hỏi?';
$string['privacy:preference:unitrole'] = 'Đơn vị là bắt buộc, tùy chọn hay không được mong đợi.';
$string['privacy:preference:unitsleft'] = 'Đơn vị hiển thị ở bên trái (ví dụ $, £) hay bên phải (ví dụ kg, km, cm).';
$string['relative'] = 'Tương đối';
$string['rightexample'] = 'ở bên phải, ví dụ 1.00cm hoặc 1.00km';
$string['selectunit'] = 'Chọn một đơn vị';
$string['selectunits'] = 'Chọn đơn vị';
$string['studentunitanswer'] = 'Nhập đơn vị bằng cách sử dụng';
$string['tolerancetype'] = 'Loại dung sai';
$string['unit'] = 'Đơn vị';
$string['unitappliedpenalty'] = 'Các điểm này đã bao gồm mức phạt {$a} do đơn vị sai.';
$string['unitchoice'] = 'một lựa chọn trắc nghiệm';
$string['unitedit'] = 'Chỉnh sửa đơn vị';
$string['unitgraded'] = 'Phải nhập đơn vị và đơn vị sẽ được chấm điểm.';
$string['unithandling'] = 'Cách xử lý đơn vị';
$string['unitincorrect'] = 'Bạn đã nhập sai đơn vị.';
$string['unitmandatory'] = 'Bắt buộc';
$string['unitmandatory_help'] = '* Câu trả lời sẽ được chấm dựa trên đơn vị đã nhập.

* Mức phạt đơn vị sẽ được áp dụng nếu trường đơn vị để trống';
$string['unitnotselected'] = 'Bạn phải chọn một đơn vị.';
$string['unitonerequired'] = 'Bạn phải nhập ít nhất một đơn vị';
$string['unitoptional'] = 'Đơn vị tùy chọn';
$string['unitoptional_help'] = '* Nếu trường đơn vị không để trống, câu trả lời sẽ được chấm dựa trên đơn vị này.

* Nếu đơn vị được viết sai hoặc không xác định, câu trả lời sẽ bị xem là không hợp lệ.';
$string['unitpenalty'] = 'Mức phạt đơn vị';
$string['unitpenalty_help'] = 'Mức phạt được áp dụng nếu

* nhập sai tên đơn vị vào trường nhập đơn vị, hoặc
* nhập đơn vị vào ô nhập giá trị';
$string['unitposition'] = 'Vị trí của đơn vị';
$string['units'] = 'Đơn vị';
$string['unitselect'] = 'danh sách thả xuống';
$string['unitx'] = 'Đơn vị {no}';
$string['xmustbenumeric'] = '{$a} phải là một số.';
$string['xmustnotbenumeric'] = '{$a} không thể là một số.';
$string['youmustenteramultiplierhere'] = 'Bạn phải nhập hệ số nhân tại đây.';
