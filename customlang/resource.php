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
 * @subpackage resource
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = 'Nhấp vào liên kết {$a} để tải tệp xuống.';
$string['clicktoopen2'] = 'Nhấp vào liên kết {$a} để xem tệp.';
$string['configdisplayoptions'] = 'Chọn tất cả các tùy chọn cần cung cấp; các cài đặt hiện có sẽ không bị thay đổi. Giữ phím CTRL để chọn nhiều trường.';
$string['configframesize'] = 'Khi một trang web hoặc tệp đã tải lên được hiển thị trong khung, giá trị này là chiều cao (tính bằng pixel) của khung phía trên (chứa phần điều hướng).';
$string['configparametersettings'] = 'Thiết lập giá trị mặc định cho bảng cài đặt Tham số trong biểu mẫu khi thêm một số tài nguyên mới. Sau lần đầu tiên, tùy chọn này trở thành tùy chọn riêng của người dùng.';
$string['configpopup'] = 'Khi thêm tài nguyên mới có thể hiển thị trong cửa sổ bật lên, tùy chọn này có nên được bật theo mặc định không?';
$string['configpopupdirectories'] = 'Cửa sổ bật lên có nên hiển thị liên kết thư mục theo mặc định không?';
$string['configpopupheight'] = 'Chiều cao mặc định cho cửa sổ bật lên mới là bao nhiêu?';
$string['configpopuplocation'] = 'Cửa sổ bật lên có nên hiển thị thanh địa chỉ theo mặc định không?';
$string['configpopupmenubar'] = 'Cửa sổ bật lên có nên hiển thị thanh menu theo mặc định không?';
$string['configpopupresizable'] = 'Cửa sổ bật lên có nên cho phép thay đổi kích thước theo mặc định không?';
$string['configpopupscrollbars'] = 'Cửa sổ bật lên có nên cho phép cuộn theo mặc định không?';
$string['configpopupstatus'] = 'Cửa sổ bật lên có nên hiển thị thanh trạng thái theo mặc định không?';
$string['configpopuptoolbar'] = 'Cửa sổ bật lên có nên hiển thị thanh công cụ theo mặc định không?';
$string['configpopupwidth'] = 'Chiều rộng mặc định cho cửa sổ bật lên mới là bao nhiêu?';
$string['contentheader'] = 'Nội dung';
$string['displayoptions'] = 'Các tùy chọn hiển thị có sẵn';
$string['displayselect'] = 'Hiển thị';
$string['displayselect_help'] = 'Cài đặt này, cùng với loại tệp và khả năng nhúng nội dung của trình duyệt, quyết định cách hiển thị tệp. Các tùy chọn có thể bao gồm:

* Tự động - Tự động chọn tùy chọn hiển thị phù hợp nhất với loại tệp
* Nhúng - Tệp được hiển thị trong trang, bên dưới thanh điều hướng, cùng với mô tả tệp và các khối
* Buộc tải xuống - Nhắc người dùng tải tệp xuống
* Mở - Chỉ hiển thị tệp trong cửa sổ trình duyệt
* Trong cửa sổ bật lên - Hiển thị tệp trong cửa sổ trình duyệt mới không có menu hoặc thanh địa chỉ
* Trong khung - Hiển thị tệp trong một khung bên dưới thanh điều hướng và mô tả tệp
* Cửa sổ mới - Hiển thị tệp trong cửa sổ trình duyệt mới có menu và thanh địa chỉ';
$string['displayselect_link'] = 'mod/file/mod';
$string['displayselectexplain'] = 'Chọn kiểu hiển thị; rất tiếc, không phải kiểu nào cũng phù hợp với mọi tệp.';
$string['dnduploadresource'] = 'Tạo tài nguyên tệp';
$string['encryptedcode'] = 'Mã đã mã hóa';
$string['filenotfound'] = 'Rất tiếc, không tìm thấy tệp.';
$string['filterfiles'] = 'Sử dụng bộ lọc cho nội dung tệp';
$string['filterfilesexplain'] = 'Chọn kiểu lọc nội dung tệp. Xin lưu ý, thao tác này có thể gây sự cố với một số ứng dụng Flash và Java. Hãy đảm bảo tất cả tệp văn bản đều được mã hóa UTF-8.';
$string['filtername'] = 'Tự động liên kết tên tài nguyên';
$string['forcedownload'] = 'Buộc tải xuống';
$string['framesize'] = 'Chiều cao khung';
$string['indicator:cognitivedepth'] = 'Nhận thức của tệp';
$string['indicator:cognitivedepth_help'] = 'Chỉ báo này dựa trên mức độ nhận thức mà học viên đạt được trong tài nguyên Tệp.';
$string['indicator:cognitivedepthdef'] = 'Nhận thức của tệp';
$string['indicator:cognitivedepthdef_help'] = 'Trong khoảng thời gian phân tích này, người tham gia đã đạt được tỷ lệ phần trăm mức độ tham gia nhận thức mà tài nguyên Tệp cung cấp (Các mức = Chưa xem, Đã xem)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Tương tác xã hội với tệp';
$string['indicator:socialbreadth_help'] = 'Chỉ báo này dựa trên mức độ tương tác xã hội mà học viên đạt được trong tài nguyên Tệp.';
$string['indicator:socialbreadthdef'] = 'Tương tác xã hội với tệp';
$string['indicator:socialbreadthdef_help'] = 'Trong khoảng thời gian phân tích này, người tham gia đã đạt được tỷ lệ phần trăm mức độ tương tác xã hội mà tài nguyên Tệp cung cấp (Các mức = Chưa tham gia, Chỉ có người tham gia)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['legacyfiles'] = 'Di chuyển tệp khóa học cũ';
$string['legacyfilesactive'] = 'Đang hoạt động';
$string['legacyfilesdone'] = 'Đã hoàn tất';
$string['modifieddate'] = 'Đã chỉnh sửa {$a}';
$string['modulename'] = 'Tệp';
$string['modulename_help'] = '#### Tính năng chính
* Tải lên mọi loại tệp kỹ thuật số để học viên xem hoặc tải xuống

Cách sử dụng
* Tải lên bản ghi âm của diễn giả khách mời
* Chia sẻ ghi chú bài giảng ở nhiều định dạng như Portable Document Format (PDF), tài liệu Word hoặc bản trình chiếu PowerPoint (PPT)
* Cung cấp tài liệu đọc cho một buổi học';
$string['modulename_link'] = 'mod/resource/view';
$string['modulename_summary'] = 'Chia sẻ tệp để học viên xem hoặc tải xuống.';
$string['modulename_tip'] = 'Đảm bảo học viên có phần mềm cần thiết để mở và xem các tệp bạn tải lên.';
$string['modulenameplural'] = 'Tệp';
$string['notmigrated'] = 'Rất tiếc, loại tài nguyên cũ này ({$a}) vẫn chưa được di chuyển.';
$string['optionsheader'] = 'Tùy chọn hiển thị';
$string['page-mod-resource-x'] = 'Trang mô-đun tệp bất kỳ';
$string['pluginadministration'] = 'Quản trị mô-đun Tệp';
$string['pluginname'] = 'Tệp';
$string['popupheight'] = 'Chiều cao cửa sổ bật lên (tính bằng pixel)';
$string['popupheightexplain'] = 'Chỉ định chiều cao mặc định của cửa sổ bật lên.';
$string['popupresource'] = 'Tài nguyên này sẽ xuất hiện trong cửa sổ bật lên.';
$string['popupresourcelink'] = 'Nếu không, hãy nhấp vào đây: {$a}';
$string['popupwidth'] = 'Chiều rộng cửa sổ bật lên (tính bằng pixel)';
$string['popupwidthexplain'] = 'Chỉ định chiều rộng mặc định của cửa sổ bật lên.';
$string['printintro'] = 'Hiển thị mô tả tài nguyên';
$string['printintroexplain'] = 'Hiển thị mô tả tài nguyên bên dưới nội dung? Một số kiểu hiển thị có thể không hiển thị mô tả ngay cả khi tùy chọn này được bật.';
$string['privacy:metadata'] = 'Trình bổ trợ tài nguyên Tệp không lưu trữ dữ liệu cá nhân.';
$string['resource:addinstance'] = 'Thêm tài nguyên mới';
$string['resource:exportresource'] = 'Xuất tài nguyên';
$string['resource:view'] = 'Xem tài nguyên';
$string['resourcecontent'] = 'Tệp và thư mục con';
$string['resourcedetails_sizedate'] = '{$a->size} · {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} · {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} · {$a->type} · {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} · {$a->date}';
$string['search:activity'] = 'Tệp';
$string['selectmainfile'] = 'Vui lòng chọn tệp chính bằng cách nhấp vào biểu tượng bên cạnh tên tệp.';
$string['showdate'] = 'Hiển thị ngày tải lên/chỉnh sửa';
$string['showdate_desc'] = 'Hiển thị ngày tải lên/chỉnh sửa trên trang khóa học?';
$string['showdate_help'] = 'Hiển thị ngày tải lên/chỉnh sửa bên cạnh liên kết đến tệp.

Nếu tài nguyên này có nhiều tệp, ngày tải lên/chỉnh sửa của tệp khởi chạy sẽ được hiển thị.';
$string['showsize'] = 'Hiển thị kích thước';
$string['showsize_desc'] = 'Hiển thị kích thước tệp trên trang khóa học?';
$string['showsize_help'] = 'Hiển thị kích thước tệp, chẳng hạn như \'3.1 MB\', bên cạnh liên kết đến tệp.

Nếu tài nguyên này có nhiều tệp, tổng kích thước của tất cả các tệp sẽ được hiển thị.';
$string['showtype'] = 'Hiển thị loại tệp';
$string['showtype_desc'] = 'Hiển thị loại tệp (ví dụ: \'Tài liệu Word\') trên trang khóa học?';
$string['showtype_help'] = 'Hiển thị loại tệp, chẳng hạn như \'Tài liệu Word\', bên cạnh liên kết đến tệp.

Nếu tài nguyên này có nhiều tệp, loại của tệp khởi chạy sẽ được hiển thị.

Nếu hệ thống không nhận diện được loại tệp, loại tệp sẽ không được hiển thị.';
$string['uploadeddate'] = 'Đã tải lên {$a}';
