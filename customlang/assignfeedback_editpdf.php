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
 * @package    assignfeedback
 * @subpackage editpdf
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Thêm vào danh sách nhanh';
$string['annotationcolour'] = 'Màu chú thích';
$string['black'] = 'Đen';
$string['blue'] = 'Xanh dương';
$string['cannotopenpdf'] = 'Không thể mở PDF. Tệp có thể bị hỏng hoặc có định dạng không được hỗ trợ.';
$string['clear'] = 'Xóa';
$string['colourpicker'] = 'Bộ chọn màu';
$string['command'] = 'Lệnh:';
$string['comment'] = 'Nhận xét';
$string['commentcolour'] = 'Màu nhận xét';
$string['commentcontextmenu'] = 'Menu ngữ cảnh nhận xét';
$string['commentindex'] = 'Danh mục nhận xét';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Không thể lưu trang {$a}';
$string['currentstamp'] = 'Con dấu';
$string['default'] = 'Bật theo mặc định';
$string['default_help'] = 'Nếu được chọn, phương thức phản hồi này sẽ được bật theo mặc định cho tất cả bài tập mới.';
$string['deleteannotation'] = 'Xóa chú thích';
$string['deletecomment'] = 'Xóa nhận xét';
$string['deletefeedback'] = 'Xóa PDF phản hồi';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Tải PDF phản hồi xuống';
$string['draftchangessaved'] = 'Đã lưu bản nháp chú thích';
$string['drag'] = 'Kéo';
$string['editpdf'] = 'Chú thích PDF';
$string['editpdf_help'] = 'Chú thích bài nộp của học viên trực tiếp trong trình duyệt và tạo tệp PDF đã chỉnh sửa để tải xuống.';
$string['enabled'] = 'Chú thích PDF';
$string['enabled_help'] = 'Nếu bật, giáo viên có thể tạo tệp PDF có chú thích khi chấm bài nộp. Giáo viên có thể thêm nhận xét, hình vẽ và con dấu trực tiếp lên bài làm của học viên. Việc chú thích được thực hiện trong trình duyệt và không cần phần mềm bổ sung.';
$string['errorgenerateimage'] = 'Lỗi khi tạo hình ảnh bằng ghostscript, thông tin gỡ lỗi: {$a}';
$string['errorpdfpage'] = 'Đã xảy ra lỗi khi tạo trang này.';
$string['expcolcomments'] = 'Mở rộng/thu gọn tất cả nhận xét';
$string['filter'] = 'Lọc nhận xét...';
$string['generatefeedback'] = 'Tạo PDF phản hồi';
$string['generatingpdf'] = 'Đang tạo PDF...';
$string['gotopage'] = 'Đi đến trang';
$string['green'] = 'Xanh lá';
$string['gsimage'] = 'Ảnh thử nghiệm Ghostscript';
$string['highlight'] = 'Tô sáng';
$string['jsrequired'] = 'Cần có JavaScript để chú thích PDF. Vui lòng bật JavaScript trong trình duyệt để sử dụng tính năng này.';
$string['launcheditor'] = 'Mở trình chỉnh sửa PDF...';
$string['line'] = 'Đường kẻ';
$string['loadingeditor'] = 'Đang tải trình chỉnh sửa PDF';
$string['markerfeedback'] = 'Phản hồi của người chấm ({$a})';
$string['markernumberfeedback'] = 'Phản hồi của người chấm {$a}';
$string['markernumberpdf'] = 'PDF của người chấm {$a}';
$string['navigatenext'] = 'Trang tiếp theo (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['navigateprevious'] = 'Trang trước (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['output'] = 'Đầu ra:';
$string['oval'] = 'Hình bầu dục';
$string['overallfeedback'] = 'Phản hồi tổng thể';
$string['pagenumber'] = 'Trang {$a}';
$string['pagexofy'] = 'Trang {$a->page} trên tổng số {$a->total}';
$string['partialwarning'] = 'Chỉ có thể truy cập trực tiếp một số tệp trong bài nộp này bằng cách tải xuống.';
$string['pathtogserror'] = 'Đường dẫn đã cấu hình đến ghostscript chưa được đặt chính xác: {$a}';
$string['pathtogspathdesc'] = 'Xin lưu ý rằng tính năng chú thích PDF yêu cầu đường dẫn đến ghostscript phải được đặt trong {$a}.';
$string['pen'] = 'Bút';
$string['pluginname'] = 'Chú thích PDF';
$string['preparesubmissionsforannotation'] = 'Chuẩn bị bài nộp để chú thích';
$string['privacy:metadata:colourpurpose'] = 'Màu của nhận xét hoặc chú thích';
$string['privacy:metadata:conversionpurpose'] = 'Các tệp được chuyển đổi sang PDF để có thể thêm chú thích.';
$string['privacy:metadata:filepurpose'] = 'Lưu trữ PDF có chú thích và phản hồi dành cho người dùng.';
$string['privacy:metadata:rawtextpurpose'] = 'Lưu trữ văn bản thô cho dữ liệu nhanh.';
$string['privacy:metadata:tablepurpose'] = 'Lưu trữ các nhận xét trong danh sách nhanh do giáo viên chỉ định';
$string['privacy:metadata:userid'] = 'ID người dùng';
$string['privacy:path'] = 'Phản hồi PDF';
$string['rectangle'] = 'Hình chữ nhật';
$string['red'] = 'Đỏ';
$string['result'] = 'Kết quả:';
$string['rotateleft'] = 'Xoay 90 độ sang trái';
$string['rotateright'] = 'Xoay 90 độ sang phải';
$string['searchcomments'] = 'Tìm kiếm nhận xét';
$string['select'] = 'Chọn';
$string['stamp'] = 'Con dấu';
$string['stamppicker'] = 'Bộ chọn con dấu';
$string['stamps'] = 'Con dấu';
$string['stampsdesc'] = 'Con dấu phải là tệp hình ảnh (kích thước đề xuất: 40x40). Có thể dùng những hình ảnh này với công cụ con dấu để chú thích PDF.';
$string['test_doesnotexist'] = 'Đường dẫn ghostscript trỏ đến một tệp không tồn tại';
$string['test_empty'] = 'Đường dẫn ghostscript đang để trống - vui lòng nhập đúng đường dẫn';
$string['test_isdir'] = 'Đường dẫn ghostscript trỏ đến một thư mục, vui lòng thêm chương trình ghostscript vào đường dẫn bạn chỉ định';
$string['test_notestfile'] = 'Thiếu tệp PDF kiểm tra';
$string['test_notexecutable'] = 'Đường dẫn ghostscript trỏ đến một tệp không thể thực thi';
$string['test_ok'] = 'Đường dẫn ghostscript có vẻ ổn - vui lòng kiểm tra xem bạn có thấy thông báo trong hình bên dưới không';
$string['testgs'] = 'Kiểm tra đường dẫn ghostscript';
$string['tool'] = 'Công cụ';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Xem PDF có chú thích...';
$string['white'] = 'Trắng';
$string['yellow'] = 'Vàng';
