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
 * @package    tool
 * @subpackage httpsreplace
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Đã hoàn tất';
$string['count'] = 'Số lượng mục nội dung nhúng';
$string['disclaimer'] = 'Tôi hiểu những rủi ro của thao tác này';
$string['doclink'] = 'Công cụ chuyển đổi HTTPS';
$string['doit'] = 'Thực hiện chuyển đổi';
$string['domain'] = 'Tên miền có vấn đề';
$string['domainexplain'] = 'Khi một trang web được chuyển từ HTTP sang HTTPS, tất cả nội dung HTTP được nhúng sẽ ngừng hoạt động. Công cụ này cho phép bạn tự động chuyển đổi nội dung HTTP sang HTTPS.

Trước khi thực hiện chuyển đổi, nội dung sẽ được quét để tìm các URL có thể không hoạt động sau khi chuyển đổi. Bạn có thể kiểm tra từng URL để xác nhận HTTPS khả dụng hoặc tìm tài nguyên thay thế.';
$string['domainexplainhelp'] = 'Các tên miền này được tìm thấy trong nội dung của bạn nhưng dường như không hỗ trợ nội dung HTTPS. Sau khi chuyển sang HTTPS, nội dung được lấy từ các trang web này sẽ không còn hiển thị trong Moodle đối với người dùng sử dụng trình duyệt hiện đại có bảo mật. Có thể các trang web này tạm thời hoặc vĩnh viễn không khả dụng và sẽ không hoạt động với bất kỳ cài đặt bảo mật nào. Chỉ tiếp tục sau khi xem xét các kết quả này và xác định rằng nội dung được lưu trữ bên ngoài này không thiết yếu. Lưu ý: Nội dung này vốn sẽ không còn hoạt động sau khi chuyển sang HTTPS.';
$string['httpwarning'] = 'Phiên bản này vẫn đang chạy trên HTTP. Bạn vẫn có thể chạy công cụ này và nội dung bên ngoài sẽ được đổi sang HTTPS, nhưng nội dung nội bộ sẽ vẫn dùng HTTP. Bạn cần chạy lại tập lệnh này sau khi chuyển sang HTTPS để chuyển đổi nội dung nội bộ.';
$string['notimplemented'] = 'Rất tiếc, tính năng này chưa được triển khai trong trình điều khiển cơ sở dữ liệu của bạn.';
$string['oktoprocede'] = 'Quá trình quét không phát hiện vấn đề nào với nội dung của bạn. Bạn có thể tiếp tục nâng cấp mọi nội dung HTTP sang HTTPS.';
$string['pageheader'] = 'Nâng cấp URL nội dung được lưu trữ bên ngoài sang HTTPS';
$string['pluginname'] = 'Công cụ chuyển đổi HTTPS';
$string['privacy:metadata'] = 'Plugin công cụ chuyển đổi HTTPS không lưu trữ dữ liệu cá nhân.';
$string['replacing'] = 'Đang thay thế nội dung HTTP bằng HTTPS...';
$string['searching'] = 'Đang tìm kiếm {$a}';
$string['takeabackupwarning'] = 'Cảnh báo: Sau khi chạy công cụ này, bạn không thể hoàn tác các thay đổi. Bạn nên sao lưu trang web trước khi tiếp tục vì có một rủi ro nhỏ là nội dung không phù hợp sẽ bị thay thế.';
$string['toolintro'] = 'Nếu bạn dự định chuyển đổi trang web sang HTTPS, bạn có thể dùng <a href="{$a}">công cụ chuyển đổi HTTPS</a> để chuyển nội dung nhúng sang HTTPS.';
