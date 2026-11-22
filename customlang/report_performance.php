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
 * @package    report
 * @subpackage performance
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Sao lưu tự động';
$string['check_backup_comment_disable'] = 'Hiệu suất có thể bị ảnh hưởng trong quá trình sao lưu. Nếu bật tính năng này, nên lên lịch sao lưu vào thời gian ít người sử dụng.';
$string['check_backup_comment_enable'] = 'Hiệu suất có thể bị ảnh hưởng trong quá trình sao lưu. Nên lên lịch sao lưu vào thời gian ít người sử dụng.';
$string['check_backup_details'] = 'Bật sao lưu tự động sẽ tự động tạo bản lưu trữ của tất cả khóa học trên máy chủ vào thời điểm bạn đã chỉ định.<p>Trong quá trình này, máy chủ sẽ sử dụng nhiều tài nguyên hơn và hiệu suất có thể bị ảnh hưởng.</p>';
$string['check_cachejs_comment_disable'] = 'Nếu được bật, hiệu suất tải trang sẽ được cải thiện.';
$string['check_cachejs_comment_enable'] = 'Nếu bị tắt, trang có thể tải chậm.';
$string['check_cachejs_details'] = 'Bộ nhớ đệm và nén JavaScript giúp cải thiện đáng kể hiệu suất tải trang. Bạn nên bật tính năng này trên các trang web đang hoạt động.';
$string['check_dbschema_errors'] = 'Lược đồ cơ sở dữ liệu không đồng nhất.';
$string['check_dbschema_name'] = 'Kiểm tra lược đồ cơ sở dữ liệu';
$string['check_dbschema_ok'] = 'Lược đồ cơ sở dữ liệu chính xác.';
$string['check_debugmsg_comment_developer'] = 'Nếu đặt thành giá trị khác DEVELOPER, hiệu suất có thể được cải thiện đôi chút.';
$string['check_debugmsg_comment_nodeveloper'] = 'Nếu đặt thành DEVELOPER, hiệu suất có thể bị ảnh hưởng đôi chút.';
$string['check_debugmsg_details'] = 'Hiếm khi có lợi ích khi chuyển sang mức Developer, trừ khi được nhà phát triển yêu cầu.<p>Sau khi nhận được thông báo lỗi và sao chép thông báo đó, bạn RẤT NÊN chuyển Debug trở lại thành NONE. Thông báo gỡ lỗi có thể tiết lộ cho tin tặc thông tin về cấu hình trang web của bạn và ảnh hưởng đến hiệu suất.</p>';
$string['check_enablestats_comment_disable'] = 'Hiệu suất có thể bị ảnh hưởng bởi quá trình xử lý thống kê. Nếu bật tính năng này, cần thận trọng khi thiết lập thống kê.';
$string['check_enablestats_comment_enable'] = 'Hiệu suất có thể bị ảnh hưởng bởi quá trình xử lý thống kê. Cần thận trọng khi thiết lập thống kê.';
$string['check_enablestats_details'] = 'Bật tính năng này sẽ xử lý nhật ký trong cronjob và thu thập một số số liệu thống kê. Tùy thuộc vào lưu lượng truy cập trang web, quá trình này có thể mất một lúc.<p>Trong quá trình này, máy chủ sẽ sử dụng nhiều tài nguyên hơn và hiệu suất có thể bị ảnh hưởng.</p>';
$string['check_themedesignermode_comment_disable'] = 'Nếu được bật, hình ảnh và biểu định kiểu sẽ không được lưu vào bộ nhớ đệm, làm giảm đáng kể hiệu suất.';
$string['check_themedesignermode_comment_enable'] = 'Nếu bị tắt, hình ảnh và biểu định kiểu sẽ được lưu vào bộ nhớ đệm, giúp cải thiện đáng kể hiệu suất.';
$string['check_themedesignermode_details'] = 'Đây thường là nguyên nhân khiến các trang Moodle chạy chậm. <p>Trung bình, một trang Moodle bật chế độ thiết kế giao diện có thể cần ít nhất gấp đôi lượng CPU.</p>';
$string['comments'] = 'Chú thích';
$string['disabled'] = 'Đã tắt';
$string['edit'] = 'Chỉnh sửa';
$string['enabled'] = 'Đã bật';
$string['issue'] = 'Vấn đề';
$string['morehelp'] = 'trợ giúp thêm';
$string['performance:view'] = 'Xem báo cáo hiệu suất';
$string['performancereportdesc'] = 'Báo cáo này liệt kê các vấn đề có thể ảnh hưởng đến hiệu suất của trang web {$a}';
$string['pluginname'] = 'Tổng quan hiệu suất';
$string['privacy:metadata'] = 'Plugin Performance overview không lưu trữ dữ liệu cá nhân nào.';
$string['value'] = 'Giá trị';
