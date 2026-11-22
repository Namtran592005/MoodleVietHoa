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
 * @subpackage folder
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bynameondate'] = 'bởi {$a->name} - {$a->date}';
$string['contentheader'] = 'Nội dung';
$string['display'] = 'Hiển thị nội dung thư mục';
$string['display_help'] = 'Nếu chọn hiển thị nội dung thư mục trên trang khóa học, sẽ không có liên kết đến một trang riêng. Mô tả chỉ được hiển thị nếu chọn \'Hiển thị mô tả trên trang khóa học\'. Lưu ý rằng các thao tác xem của người tham gia sẽ không được ghi nhật ký trong trường hợp này.';
$string['displayinline'] = 'Hiển thị trực tiếp trên trang khóa học';
$string['displaypage'] = 'Trên một trang riêng';
$string['dnduploadmakefolder'] = 'Giải nén tệp và tạo thư mục';
$string['downloadfolder'] = 'Tải thư mục xuống';
$string['eventallfilesdownloaded'] = 'Đã tải xuống tệp lưu trữ ZIP của thư mục';
$string['eventfolderupdated'] = 'Đã cập nhật thư mục';
$string['folder:addinstance'] = 'Thêm thư mục mới';
$string['folder:managefiles'] = 'Quản lý tệp trong mô-đun thư mục';
$string['folder:view'] = 'Xem nội dung thư mục';
$string['foldercontent'] = 'Tệp và thư mục con';
$string['forcedownload'] = 'Buộc tải tệp xuống';
$string['forcedownload_help'] = 'Có hiển thị một số tệp, chẳng hạn như hình ảnh hoặc tệp HTML, trong trình duyệt thay vì tải xuống hay không. Vì lý do bảo mật, chỉ bỏ chọn cài đặt này nếu tất cả người dùng có quyền năng lực quản lý tệp trong thư mục đều là người dùng đáng tin cậy.';
$string['indicator:cognitivedepth'] = 'Nhận thức của thư mục';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên mức độ nhận thức mà học viên đạt được trong tài nguyên Thư mục.';
$string['indicator:cognitivedepthdef'] = 'Nhận thức của thư mục';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này trong mức độ tham gia nhận thức do tài nguyên Thư mục cung cấp trong khoảng thời gian phân tích này (Các cấp độ = Chưa xem, Đã xem)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Tương tác xã hội của thư mục';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên mức độ tương tác xã hội mà học viên đạt được trong tài nguyên Thư mục.';
$string['indicator:socialbreadthdef'] = 'Tương tác xã hội của thư mục';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này trong mức độ tương tác xã hội do tài nguyên Thư mục cung cấp trong khoảng thời gian phân tích này (Các cấp độ = Không tham gia, Chỉ người tham gia)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'Kích thước tải thư mục tối đa (MB)';
$string['maxsizetodownload_help'] = 'Kích thước tối đa của thư mục có thể tải xuống dưới dạng tệp zip. Nếu đặt là 0, kích thước thư mục không bị giới hạn.';
$string['modulename'] = 'Thư mục';
$string['modulename_help'] = '#### Tính năng chính
* Sắp xếp tệp trong các thư mục và thư mục con
* Cho phép học viên tải toàn bộ thư mục xuống dưới dạng tệp zip

Cách sử dụng
* Chia sẻ một bộ tài liệu cũ để ôn tập
* Cung cấp tài liệu đọc (bài viết, trang trình chiếu, tệp PDF) tại một nơi
* Chia sẻ hình ảnh có thể tải xuống cho dự án nghệ thuật hoặc thiết kế';
$string['modulename_link'] = 'mod/folder/view';
$string['modulename_summary'] = 'Tạo thư mục trong khóa học để tải lên và sắp xếp tệp.';
$string['modulenameplural'] = 'Thư mục';
$string['newfoldercontent'] = 'Nội dung thư mục mới';
$string['noautocompletioninline'] = 'Không thể chọn tự động hoàn thành khi xem hoạt động cùng lúc với tùy chọn "Hiển thị trực tiếp"';
$string['page-mod-folder-view'] = 'Trang chính của mô-đun thư mục';
$string['page-mod-folder-x'] = 'Trang mô-đun thư mục bất kỳ';
$string['pluginadministration'] = 'Quản trị thư mục';
$string['pluginname'] = 'Thư mục';
$string['privacy:metadata'] = 'Plugin tài nguyên Thư mục không lưu trữ dữ liệu cá nhân nào.';
$string['search:activity'] = 'Thư mục';
$string['showdownloadfolder'] = 'Hiển thị nút tải thư mục xuống';
$string['showdownloadfolder_help'] = 'Nếu đặt là \'có\', một nút sẽ xuất hiện cho phép tải nội dung thư mục xuống dưới dạng tệp zip.';
$string['showexpanded'] = 'Hiển thị thư mục con ở trạng thái mở rộng';
$string['showexpanded_help'] = 'Nếu đặt là \'có\', các thư mục con sẽ được mở rộng theo mặc định; nếu không, chúng sẽ được thu gọn.';
$string['topleveldirectory'] = 'Thư mục cấp cao nhất';
