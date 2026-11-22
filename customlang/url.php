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
 * @subpackage url
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'Cho phép biến URL';
$string['allowvariables_desc'] = 'Cho phép thêm biến vào URL. Các biến cho phép bạn truyền thông tin nội bộ, chẳng hạn như tên người dùng, trong URL. Hãy lưu ý các rủi ro tiềm ẩn về quyền riêng tư khi sử dụng tính năng này.';
$string['chooseavariable'] = 'Chọn một biến...';
$string['clicktoopen'] = 'Nhấp vào {$a} để mở tài nguyên.';
$string['configdisplayoptions'] = 'Chọn tất cả các tùy chọn cần cung cấp; các thiết lập hiện có sẽ không bị thay đổi. Giữ phím CTRL để chọn nhiều trường.';
$string['configframesize'] = 'Khi một trang web hoặc tệp đã tải lên được hiển thị trong khung, giá trị này là chiều cao (tính bằng pixel) của khung trên cùng (chứa thanh điều hướng).';
$string['configrolesinparams'] = 'Tên vai trò tùy chỉnh (từ thiết lập khóa học) có được cung cấp dưới dạng biến cho tham số URL không?';
$string['configsecretphrase'] = 'Cụm từ bí mật này được dùng để tạo giá trị mã hóa có thể gửi đến một số máy chủ dưới dạng tham số. Mã hóa được tạo bằng giá trị md5 của địa chỉ IP hiện tại của người dùng nối với cụm từ bí mật của bạn. Ví dụ: code = md5(IP.secretphrase). Xin lưu ý rằng cách này không đáng tin cậy vì địa chỉ IP có thể thay đổi và thường được nhiều máy tính dùng chung.';
$string['contentheader'] = 'Nội dung';
$string['createurl'] = 'Tạo URL';
$string['displayoptions'] = 'Các tùy chọn hiển thị có sẵn';
$string['displayselect'] = 'Hiển thị';
$string['displayselect_help'] = 'Thiết lập này, cùng với loại tệp URL và việc trình duyệt có cho phép nhúng hay không, quyết định cách hiển thị URL. Các tùy chọn có thể bao gồm:

* Tự động - Tự động chọn tùy chọn hiển thị phù hợp nhất cho URL
* Nhúng - URL được hiển thị trong trang, bên dưới thanh điều hướng, cùng với mô tả URL và các khối
* Mở - Chỉ URL được hiển thị trong cửa sổ trình duyệt
* Trong cửa sổ bật lên - URL được hiển thị trong cửa sổ trình duyệt mới không có menu hoặc thanh địa chỉ
* Trong khung - URL được hiển thị trong một khung bên dưới thanh điều hướng và mô tả URL
* Cửa sổ mới - URL được hiển thị trong cửa sổ trình duyệt mới có menu và thanh địa chỉ';
$string['displayselectexplain'] = 'Chọn kiểu hiển thị; tiếc là không phải kiểu nào cũng phù hợp với mọi URL.';
$string['externalurl'] = 'URL bên ngoài';
$string['framesize'] = 'Chiều cao khung';
$string['indicator:cognitivedepth'] = 'Nhận thức qua URL';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên mức độ nhận thức mà học viên đạt được trong tài nguyên URL.';
$string['indicator:cognitivedepthdef'] = 'Nhận thức qua URL';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm mức độ tham gia nhận thức do các tài nguyên URL cung cấp trong khoảng thời gian phân tích này (Cấp độ = Chưa xem, Đã xem)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Tương tác xã hội qua URL';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên phạm vi tương tác xã hội mà học viên đạt được trong tài nguyên URL.';
$string['indicator:socialbreadthdef'] = 'Tương tác xã hội qua URL';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm mức độ tham gia xã hội do các tài nguyên URL cung cấp trong khoảng thời gian phân tích này (Cấp độ = Không tham gia, Chỉ người tham gia)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Không thể hiển thị tài nguyên này vì URL không hợp lệ.';
$string['invalidurl'] = 'URL đã nhập không hợp lệ';
$string['modulename'] = 'URL';
$string['modulename_help'] = '#### Tính năng chính
* Liên kết đến bất kỳ nội dung trực tuyến nào

Cách sử dụng
* Liên kết đến một bài viết trực tuyến
* Liên kết đến video được lưu trữ trên nền tảng bên ngoài';
$string['modulename_link'] = 'mod/url/view';
$string['modulename_summary'] = 'Thêm liên kết đến trang web bên ngoài hoặc tệp trực tuyến.';
$string['modulenameplural'] = 'Các URL';
$string['name'] = 'Tên';
$string['name_help'] = 'Đây sẽ là văn bản liên kết cho URL.

Nhập nội dung có ý nghĩa, mô tả ngắn gọn mục đích của URL.

Tránh dùng từ "liên kết". Điều này giúp người dùng trình đọc màn hình, vì trình đọc màn hình sẽ thông báo các liên kết (ví dụ: "Moodle.org, liên kết"), nên không cần đưa từ "liên kết" vào trường tên.';
$string['page-mod-url-x'] = 'Bất kỳ trang nào của mô-đun URL';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Biến URL';
$string['parametersheader_help'] = 'Mục này cho phép bạn truyền thông tin nội bộ trong URL. Điều này hữu ích nếu URL là một trang web tương tác có nhận tham số và bạn muốn truyền thông tin như tên người dùng hiện tại. Nhập tên tham số của URL vào hộp văn bản, sau đó chọn biến tương ứng của trang.';
$string['pluginadministration'] = 'Quản trị mô-đun URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Chiều cao cửa sổ bật lên (tính bằng pixel)';
$string['popupheightexplain'] = 'Chỉ định chiều cao mặc định của cửa sổ bật lên.';
$string['popupwidth'] = 'Chiều rộng cửa sổ bật lên (tính bằng pixel)';
$string['popupwidthexplain'] = 'Chỉ định chiều rộng mặc định của cửa sổ bật lên.';
$string['printintro'] = 'Hiển thị mô tả URL';
$string['printintroexplain'] = 'Hiển thị mô tả URL bên dưới nội dung? Một số kiểu hiển thị có thể không hiện mô tả ngay cả khi đã bật tùy chọn này.';
$string['privacy:metadata'] = 'Plugin tài nguyên URL không lưu trữ dữ liệu cá nhân nào.';
$string['rolesinparams'] = 'Tên vai trò dưới dạng biến URL';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL máy chủ';
$string['url:addinstance'] = 'Thêm tài nguyên URL mới';
$string['url:view'] = 'Xem URL';
