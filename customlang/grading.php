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
 * @package    core
 * @subpackage grading
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' được chọn làm phương pháp chấm điểm đang hoạt động cho khu vực \'{$a->area}\\';
$string['activemethodinfonone'] = 'Không có phương pháp chấm điểm nâng cao nào được chọn cho khu vực \'{$a->area}\'. Phương pháp chấm điểm trực tiếp đơn giản sẽ được sử dụng.';
$string['changeactivemethod'] = 'Thay đổi phương pháp chấm điểm đang hoạt động thành';
$string['clicktoclose'] = 'nhấp để đóng';
$string['error:gradingunavailable'] = 'Phương pháp chấm điểm nâng cao chưa được thiết lập chính xác. Vui lòng kiểm tra toàn bộ tùy chọn chấm điểm diễn đàn trong phần thiết lập diễn đàn.';
$string['error:notinrange'] = 'Đã cung cấp điểm \'{$a->grade}\' không hợp lệ. Điểm phải nằm trong khoảng từ 0 đến {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Không thể khởi tạo phần tử biểu mẫu chấm điểm';
$string['formnotavailable'] = 'Đã chọn phương pháp chấm điểm nâng cao nhưng vẫn cần xác định biểu mẫu chấm điểm.';
$string['gradingformunavailable'] = 'Xin lưu ý: biểu mẫu chấm điểm nâng cao hiện chưa sẵn sàng. Phương pháp chấm điểm đơn giản sẽ được sử dụng cho đến khi biểu mẫu có trạng thái hợp lệ.';
$string['gradingmanagement'] = 'Chấm điểm nâng cao';
$string['gradingmanagementtitle'] = 'Chấm điểm nâng cao: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Phương pháp chấm điểm';
$string['gradingmethod_help'] = 'Chọn phương pháp chấm điểm nâng cao sẽ được sử dụng để tính điểm trong ngữ cảnh đã cho.

Để tắt tính năng chấm điểm nâng cao và chuyển về cơ chế chấm điểm mặc định, hãy chọn \'Chấm điểm trực tiếp đơn giản\'.';
$string['gradingmethodnone'] = 'Chấm điểm trực tiếp đơn giản';
$string['gradingmethods'] = 'Các phương pháp chấm điểm';
$string['manageactionclone'] = 'Tạo biểu mẫu chấm điểm mới từ mẫu';
$string['manageactiondelete'] = 'Xóa biểu mẫu hiện được xác định';
$string['manageactiondeleteconfirm'] = 'Bạn sắp xóa biểu mẫu chấm điểm \'{$a->formname}\' và toàn bộ thông tin liên quan khỏi \'{$a->component} ({$a->area})\'. Hãy đảm bảo bạn hiểu rõ các hệ quả sau:

* Không thể hoàn tác thao tác này.
* Bạn có thể chuyển sang phương pháp chấm điểm khác, bao gồm \'Chấm điểm trực tiếp đơn giản\', mà không cần xóa biểu mẫu này.
* Toàn bộ thông tin về cách điền các biểu mẫu chấm điểm sẽ bị mất.
* Điểm kết quả đã tính và lưu trong sổ điểm sẽ không bị ảnh hưởng. Tuy nhiên, sẽ không còn thông tin giải thích cách tính điểm.
* Thao tác này không ảnh hưởng đến các bản sao của biểu mẫu này trong những hoạt động khác.';
$string['manageactiondeletedone'] = 'Đã xóa biểu mẫu thành công';
$string['manageactionedit'] = 'Chỉnh sửa định nghĩa biểu mẫu hiện tại';
$string['manageactionnew'] = 'Tạo định nghĩa biểu mẫu chấm điểm mới từ đầu';
$string['manageactionshare'] = 'Xuất bản biểu mẫu dưới dạng mẫu mới';
$string['manageactionshareconfirm'] = 'Bạn sắp lưu một bản sao của biểu mẫu chấm điểm \'{$a}\' dưới dạng mẫu công khai mới. Những người dùng khác trên trang web của bạn có thể tạo biểu mẫu chấm điểm mới trong hoạt động của họ từ mẫu này.';
$string['manageactionsharedone'] = 'Đã lưu biểu mẫu thành mẫu thành công';
$string['noitemid'] = 'Không thể chấm điểm. Mục được chấm điểm không tồn tại.';
$string['nosharedformfound'] = 'Không tìm thấy mẫu nào';
$string['privacy:metadata:grading_definitions'] = 'Thông tin cơ bản về biểu mẫu chấm điểm nâng cao được xác định trong khu vực có thể chấm điểm.';
$string['privacy:metadata:grading_definitions:areaid'] = 'ID khu vực nơi biểu mẫu chấm điểm nâng cao được xác định.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'ID định nghĩa chấm điểm mà từ đó nội dung này được sao chép.';
$string['privacy:metadata:grading_definitions:description'] = 'Mô tả về phương pháp chấm điểm nâng cao.';
$string['privacy:metadata:grading_definitions:method'] = 'Phương pháp chấm điểm chịu trách nhiệm cho định nghĩa này.';
$string['privacy:metadata:grading_definitions:name'] = 'Tên của định nghĩa chấm điểm nâng cao.';
$string['privacy:metadata:grading_definitions:options'] = 'Một số thiết lập của định nghĩa chấm điểm này.';
$string['privacy:metadata:grading_definitions:status'] = 'Trạng thái của định nghĩa chấm điểm nâng cao này.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Thời điểm sao chép định nghĩa chấm điểm.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Thời điểm tạo định nghĩa chấm điểm.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Thời điểm sửa đổi định nghĩa chấm điểm gần nhất.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ID người dùng đã tạo định nghĩa chấm điểm.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'ID người dùng đã sửa đổi định nghĩa chấm điểm gần nhất.';
$string['privacy:metadata:grading_instances'] = 'Bản ghi đánh giá cho một mục có thể chấm điểm do một người chấm đánh giá.';
$string['privacy:metadata:grading_instances:feedback'] = 'Phản hồi do người dùng đưa ra.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Định dạng văn bản của phản hồi do người dùng đưa ra.';
$string['privacy:metadata:grading_instances:raterid'] = 'ID người dùng đã chấm điểm lần đánh giá này.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Điểm của lần đánh giá này.';
$string['privacy:metadata:grading_instances:status'] = 'Trạng thái của lần đánh giá này.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Thời điểm sửa đổi lần đánh giá gần nhất.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Dữ liệu về phương pháp chấm điểm.';
$string['searchownforms'] = 'bao gồm biểu mẫu của tôi';
$string['searchtemplate'] = 'Tìm kiếm biểu mẫu chấm điểm';
$string['searchtemplate_help'] = 'Bạn có thể tìm kiếm biểu mẫu chấm điểm và sử dụng biểu mẫu đó làm mẫu cho biểu mẫu chấm điểm mới tại đây. Chỉ cần nhập các từ có thể xuất hiện trong tên, mô tả hoặc nội dung biểu mẫu. Để tìm kiếm một cụm từ, hãy đặt toàn bộ nội dung tìm kiếm trong dấu ngoặc kép.

Theo mặc định, kết quả tìm kiếm chỉ bao gồm các biểu mẫu chấm điểm đã được lưu làm mẫu dùng chung. Bạn cũng có thể đưa tất cả biểu mẫu chấm điểm của mình vào kết quả tìm kiếm. Nhờ đó, bạn có thể dùng lại biểu mẫu mà không cần chia sẻ. Chỉ những biểu mẫu được đánh dấu \'Sẵn sàng sử dụng\' mới có thể được dùng lại theo cách này.';
$string['statusdraft'] = 'Bản nháp';
$string['statusready'] = 'Sẵn sàng sử dụng';
$string['templatedelete'] = 'Xóa';
$string['templatedeleteconfirm'] = 'Bạn sắp xóa mẫu dùng chung \'{$a}\'. Việc xóa mẫu không ảnh hưởng đến các biểu mẫu hiện có được tạo từ mẫu đó.';
$string['templateedit'] = 'Chỉnh sửa';
$string['templatepick'] = 'Sử dụng mẫu này';
$string['templatepickconfirm'] = 'Bạn có muốn sử dụng biểu mẫu chấm điểm \'{$a->formname}\' làm mẫu cho biểu mẫu chấm điểm mới trong \'{$a->component} ({$a->area})\' không?';
$string['templatepickownform'] = 'Sử dụng biểu mẫu này làm mẫu';
$string['templatesource'] = 'Vị trí: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Biểu mẫu của tôi';
$string['templatetypeshared'] = 'Mẫu dùng chung';
