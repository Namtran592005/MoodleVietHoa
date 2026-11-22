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
 * @package    mod
 * @subpackage book
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Thêm chương mới';
$string['addafterchapter'] = 'Thêm chương mới sau "{$a->title}"';
$string['book:addinstance'] = 'Thêm sách mới';
$string['book:edit'] = 'Chỉnh sửa các chương sách';
$string['book:read'] = 'Xem sách';
$string['book:viewhiddenchapters'] = 'Xem các chương sách bị ẩn';
$string['chapterandsubchaptersdeleted'] = 'Chương "{$a->title}" và {$a->subchapters} chương phụ của chương này đã bị xóa';
$string['chapterdeleted'] = 'Chương "{$a->title}" đã bị xóa';
$string['chapters'] = 'Chương';
$string['chaptertitle'] = 'Tiêu đề chương';
$string['confchapterdelete'] = 'Bạn có thực sự muốn xóa chương này không?';
$string['confchapterdeleteall'] = 'Bạn có thực sự muốn xóa chương này và tất cả các chương phụ của chương này không?';
$string['content'] = 'Nội dung';
$string['customtitles'] = 'Tiêu đề tùy chỉnh';
$string['customtitles_help'] = 'Thông thường, tiêu đề chương được hiển thị trong mục lục (TOC) VÀ làm tiêu đề phía trên nội dung.

Nếu đánh dấu hộp kiểm tiêu đề tùy chỉnh, tiêu đề chương sẽ KHÔNG hiển thị làm tiêu đề phía trên nội dung. Có thể nhập một tiêu đề khác (có thể dài hơn tiêu đề chương) trong phần nội dung.';
$string['deletechapter'] = 'Xóa chương "{$a}"';
$string['editchapter'] = 'Chỉnh sửa chương "{$a}"';
$string['editingchapter'] = 'Đang chỉnh sửa chương';
$string['errorchapter'] = 'Lỗi khi đọc chương của sách.';
$string['eventchaptercreated'] = 'Đã tạo chương';
$string['eventchapterdeleted'] = 'Đã xóa chương';
$string['eventchapterupdated'] = 'Đã cập nhật chương';
$string['eventchapterviewed'] = 'Đã xem chương';
$string['hidechapter'] = 'Ẩn chương "{$a}"';
$string['indicator:cognitivedepth'] = 'Nhận thức của sách';
$string['indicator:cognitivedepth_help'] = 'Chỉ báo này dựa trên mức độ nhận thức mà học viên đạt được trong tài nguyên Sách.';
$string['indicator:cognitivedepthdef'] = 'Nhận thức của sách';
$string['indicator:cognitivedepthdef_help'] = 'Trong khoảng thời gian phân tích này, người tham gia đã đạt được tỷ lệ phần trăm mức độ tương tác nhận thức do hoạt động Sách cung cấp (Các mức = Chưa xem, Đã xem)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Tương tác xã hội trong sách';
$string['indicator:socialbreadth_help'] = 'Chỉ báo này dựa trên mức độ tương tác xã hội mà học viên đạt được trong tài nguyên Sách.';
$string['indicator:socialbreadthdef'] = 'Tương tác xã hội trong sách';
$string['indicator:socialbreadthdef_help'] = 'Trong khoảng thời gian phân tích này, người tham gia đã đạt được tỷ lệ phần trăm mức độ tương tác xã hội do hoạt động Sách cung cấp (Các mức = Không tham gia, Người tham gia một mình)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'Sách';
$string['modulename_help'] = '#### Tính năng chính
* Thêm văn bản, danh sách, bảng, hình ảnh, video và các phương tiện nhúng khác
* Dùng chương và chương phụ để chia nội dung dài thành các phần nhỏ
* Thêm mục lục để học viên dễ dàng điều hướng
* Cung cấp phiên bản thân thiện với việc in (có thể tải xuống)

Cách sử dụng
* Tạo sổ tay khóa học có cấu trúc với các chính sách hoặc lịch trình
* Sắp xếp ghi chú bài giảng thành các chương và chương phụ để tạo cảm giác như một giáo trình trực tuyến
* Tạo hướng dẫn với các chỉ dẫn từng bước được trình bày trên nhiều trang';
$string['modulename_link'] = 'mod/book/view';
$string['modulename_summary'] = 'Tổ chức và hiển thị nội dung theo định dạng giống như một cuốn sách.';
$string['modulenameplural'] = 'Sách';
$string['movechapterdown'] = 'Chuyển chương "{$a}" xuống dưới';
$string['movechapterup'] = 'Chuyển chương "{$a}" lên trên';
$string['navexit'] = 'Thoát khỏi sách';
$string['navnext'] = 'Tiếp theo';
$string['navnexttitle'] = 'Tiếp theo: {$a}';
$string['navoptions'] = 'Các tùy chọn hiện có cho liên kết điều hướng';
$string['navoptions_desc'] = 'Tùy chọn hiển thị điều hướng trên các trang sách';
$string['navprev'] = 'Trước đó';
$string['navprevtitle'] = 'Trước: {$a}';
$string['navstyle'] = 'Kiểu điều hướng';
$string['navstyle_help'] = '* Hình ảnh - dùng biểu tượng để điều hướng
* Văn bản - dùng tiêu đề chương để điều hướng';
$string['nocontent'] = 'Chưa có nội dung nào được thêm vào sách này.';
$string['numbering'] = 'Định dạng chương';
$string['numbering_help'] = '* Không có - tiêu đề chương và chương phụ không được định dạng
* Số - đánh số chương và chương phụ lần lượt là 1, 1.1, 1.2, 2, ...
* Dấu đầu dòng - thụt lề các chương phụ và hiển thị bằng dấu đầu dòng trong mục lục
* Thụt lề - thụt lề các chương phụ trong mục lục';
$string['numbering0'] = 'Không có';
$string['numbering1'] = 'Số';
$string['numbering2'] = 'Dấu đầu dòng';
$string['numbering3'] = 'Thụt lề';
$string['numberingoptions'] = 'Các tùy chọn định dạng chương hiện có';
$string['numberingoptions_desc'] = 'Tùy chọn hiển thị chương và chương phụ trong mục lục';
$string['page-mod-book-x'] = 'Bất kỳ trang nào của mô-đun sách';
$string['pluginadministration'] = 'Quản trị sách';
$string['pluginname'] = 'Sách';
$string['previouschapter'] = 'Chương trước';
$string['privacy:metadata'] = 'Mô-đun hoạt động sách không lưu trữ dữ liệu cá nhân.';
$string['removeallbooktags'] = 'Tất cả thẻ sách';
$string['search:activity'] = 'Sách - thông tin tài nguyên';
$string['search:chapter'] = 'Sách - các chương';
$string['showchapter'] = 'Hiển thị chương "{$a}"';
$string['subchapter'] = 'Chương phụ';
$string['subchapternotice'] = '(Chỉ khả dụng sau khi tạo chương đầu tiên)';
$string['subplugintype_booktool'] = 'Công cụ sách';
$string['subplugintype_booktool_plural'] = 'Các công cụ sách';
$string['tagarea_book_chapters'] = 'Các chương sách';
$string['tagsdeleted'] = 'Thẻ sách đã bị xóa';
$string['toc'] = 'Mục lục';
$string['top'] = 'đầu trang';
