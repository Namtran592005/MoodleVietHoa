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
 * @subpackage ordering
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Vị trí tuyệt đối';
$string['addmultipleanswers'] = 'Thêm {$a} mục nữa';
$string['addsingleanswer'] = 'Thêm một mục nữa';
$string['allornothing'] = 'Đúng hết hoặc không được điểm';
$string['answer'] = 'Văn bản mục';
$string['correctitemsnumber'] = 'Mục đúng: {$a}';
$string['correctorder'] = 'Thứ tự đúng của các mục này như sau:';
$string['defaultanswerformat'] = 'Định dạng đáp án mặc định';
$string['defaultquestionname'] = 'Kéo các mục sau vào đúng thứ tự.';
$string['draggableitemno'] = 'Mục có thể kéo {no}';
$string['draggableitems'] = 'Các mục có thể kéo';
$string['duplicatesnotallowed'] = 'Không được phép trùng lặp các mục có thể kéo. Chuỗi "{$a->text}" đã được sử dụng trong {$a->item}.';
$string['editingordering'] = 'Chỉnh sửa câu hỏi sắp xếp thứ tự';
$string['gradedetails'] = 'Chi tiết điểm';
$string['gradingtype'] = 'Kiểu chấm điểm';
$string['gradingtype_help'] = '**Đúng hết hoặc không được điểm**
&nbsp; Nếu tất cả các mục ở đúng vị trí, học viên được điểm tối đa. Nếu không, điểm là không.

**Vị trí tuyệt đối**
&nbsp; Một mục được xem là đúng nếu ở cùng vị trí với đáp án đúng. Điểm tối đa có thể đạt cho câu hỏi **bằng** số mục hiển thị cho học viên.

**Tương đối với vị trí đúng**
&nbsp; Một mục được xem là đúng nếu ở cùng vị trí với đáp án đúng. Mục đúng nhận điểm bằng số mục hiển thị trừ một. Mục sai nhận điểm bằng số mục hiển thị trừ một và trừ tiếp khoảng cách từ vị trí đúng của mục đó. Vì vậy, nếu hiển thị ***n*** mục cho học viên, mỗi mục có thể nhận tối đa ***(n - 1)*** điểm, và điểm tối đa có thể đạt cho câu hỏi là ***n x (n - 1)***, tương đương ***(n² - n)***.

**Tương đối với mục kế tiếp (không tính mục cuối)**
&nbsp; Một mục được xem là đúng nếu mục theo sau nó giống với mục trong đáp án đúng. Mục ở vị trí cuối không được kiểm tra. Vì vậy, điểm tối đa có thể đạt cho câu hỏi **ít hơn một** so với số mục hiển thị cho học viên.

**Tương đối với mục kế tiếp (tính cả mục cuối)**
&nbsp; Một mục được xem là đúng nếu mục theo sau nó giống với mục trong đáp án đúng. Bao gồm cả mục cuối, mục này không được có mục nào theo sau. Vì vậy, điểm tối đa có thể đạt cho câu hỏi **bằng** số mục hiển thị cho học viên.

**Tương đối với cả mục trước và mục kế tiếp**
&nbsp; Một mục được xem là đúng nếu cả mục trước và mục kế tiếp đều giống với đáp án đúng. Mục đầu tiên không được có mục trước, còn mục cuối cùng không được có mục kế tiếp. Vì vậy, mỗi mục có thể nhận hai điểm và điểm tối đa có thể đạt cho câu hỏi là **gấp đôi** số mục hiển thị cho học viên.

**Tương đối với TẤT CẢ các mục trước và sau**
&nbsp; Một mục được xem là đúng nếu trước nó là tất cả các mục giống như trong đáp án đúng và sau nó cũng là tất cả các mục giống như trong đáp án đúng. Thứ tự các mục đứng trước và các mục đứng sau không quan trọng. Vì vậy, nếu hiển thị ***n*** mục cho học viên, mỗi mục có thể nhận tối đa ***(n - 1)*** điểm và điểm tối đa có thể đạt cho câu hỏi là ***n x (n - 1)***, tương đương ***(n² - n)***.

**Tập hợp con có thứ tự dài nhất**
&nbsp; Điểm là số mục trong tập hợp con có thứ tự dài nhất. Điểm tối đa có thể đạt bằng số mục được hiển thị. Tập hợp con phải có ít nhất hai mục. Tập hợp con không cần bắt đầu từ mục đầu tiên (nhưng có thể) và không cần liền kề nhau (nhưng có thể). Nếu có nhiều tập hợp con có độ dài bằng nhau, các mục thuộc tập hợp con được tìm thấy đầu tiên khi tìm từ trái sang phải sẽ được hiển thị là đúng. Các mục khác sẽ được đánh dấu là sai.

**Tập hợp con liền kề dài nhất**
&nbsp; Điểm là số mục trong tập hợp con liền kề dài nhất. Điểm tối đa có thể đạt bằng số mục được hiển thị. Tập hợp con phải có ít nhất hai mục. Tập hợp con không cần bắt đầu từ mục đầu tiên (nhưng có thể) và BẮT BUỘC PHẢI LIỀN KỀ NHAU. Nếu có nhiều tập hợp con có độ dài bằng nhau, các mục thuộc tập hợp con được tìm thấy đầu tiên khi tìm từ trái sang phải sẽ được hiển thị là đúng. Các mục khác sẽ được đánh dấu là sai.';
$string['highlightresponse'] = 'Đánh dấu câu trả lời là đúng hoặc sai';
$string['horizontal'] = 'Ngang';
$string['incorrectitemsnumber'] = 'Mục sai: {$a}';
$string['layouttype'] = 'Bố cục các mục';
$string['layouttype_help'] = 'Chọn hiển thị các mục theo chiều dọc hay chiều ngang.';
$string['longestcontiguoussubset'] = 'Tập hợp con liền kề dài nhất';
$string['longestorderedsubset'] = 'Tập hợp con được sắp xếp dài nhất';
$string['moved'] = 'Đã di chuyển {$a->item}. Vị trí mới: {$a->position} trên tổng số {$a->total}.';
$string['moveleft'] = 'Di chuyển sang trái';
$string['moveright'] = 'Di chuyển sang phải';
$string['noresponsedetails'] = 'Rất tiếc, không có thông tin chi tiết về câu trả lời cho câu hỏi này.';
$string['noscore'] = 'Không có điểm';
$string['notenoughanswers'] = 'Câu hỏi sắp xếp thứ tự phải có nhiều hơn {$a} câu trả lời.';
$string['notenoughsubsetitems'] = 'Tập hợp con phải có ít nhất {$a} mục.';
$string['numberingstyle'] = 'Đánh số các lựa chọn?';
$string['numberingstyle_desc'] = 'Kiểu đánh số mặc định.';
$string['numberingstyle_help'] = 'Chọn kiểu đánh số cho các mục có thể kéo trong câu hỏi này.';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstylenone'] = 'Không đánh số';
$string['partialitemsnumber'] = 'Các mục đúng một phần: {$a}';
$string['pluginname'] = 'Sắp xếp thứ tự';
$string['pluginname_help'] = 'Một số mục được hiển thị theo thứ tự lộn xộn. Có thể kéo các mục để sắp xếp chúng theo một thứ tự hợp lý.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Thêm câu hỏi Sắp xếp thứ tự';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi Sắp xếp thứ tự';
$string['pluginnamesummary'] = 'Sắp xếp các mục lộn xộn theo một thứ tự hợp lý.';
$string['positionx'] = 'Vị trí {$a}';
$string['privacy:preference:gradingtype'] = 'Kiểu chấm điểm.';
$string['privacy:preference:layouttype'] = 'Bố cục các mục.';
$string['privacy:preference:numberingstyle'] = 'Kiểu đánh số các lựa chọn.';
$string['privacy:preference:selectcount'] = 'Số lượng được chọn.';
$string['privacy:preference:selecttype'] = 'Kiểu chọn mục.';
$string['privacy:preference:showgrading'] = 'Có hiển thị chi tiết chấm điểm hay không.';
$string['regradeissuenumitemschanged'] = 'Số lượng mục có thể kéo đã thay đổi.';
$string['relativeallpreviousandnext'] = 'So với TẤT CẢ các mục đứng trước và đứng sau';
$string['relativenextexcludelast'] = 'So với mục tiếp theo (không bao gồm mục cuối)';
$string['relativenextincludelast'] = 'So với mục tiếp theo (bao gồm mục cuối)';
$string['relativeonepreviousandnext'] = 'So với cả mục đứng trước và mục đứng sau';
$string['relativetocorrect'] = 'So với vị trí đúng';
$string['removeeditor'] = 'Xóa trình chỉnh sửa HTML';
$string['removeitem'] = 'Xóa mục có thể kéo';
$string['scoredetails'] = 'Dưới đây là điểm của từng mục trong câu trả lời này:';
$string['selectall'] = 'Chọn tất cả các mục';
$string['selectcontiguous'] = 'Chọn một tập hợp con gồm các mục liên tiếp';
$string['selectcount'] = 'Kích thước tập hợp con';
$string['selectcount_help'] = 'Số lượng mục sẽ được hiển thị khi câu hỏi xuất hiện trong bài kiểm tra.';
$string['selectrandom'] = 'Chọn ngẫu nhiên một tập hợp con các mục';
$string['selecttype'] = 'Kiểu chọn mục';
$string['selecttype_help'] = 'Chọn hiển thị tất cả các mục hay chỉ một tập hợp con.';
$string['showgrading'] = 'Chi tiết chấm điểm';
$string['showgrading_help'] = 'Chọn hiển thị hoặc ẩn chi tiết tính điểm khi học viên xem lại câu trả lời cho câu hỏi Sắp xếp thứ tự này.';
$string['vertical'] = 'Dọc';
