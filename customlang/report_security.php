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
 * @subpackage security
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'Trạng thái này kiểm tra xem có phát hiện lỗi gần đây hay không, dựa trên ngưỡng được đặt trong cài đặt chống vi-rút chính.';
$string['check_antivirus_error'] = 'Đã phát hiện {$a->errors} lỗi trong {$a->lookback} vừa qua';
$string['check_antivirus_info'] = 'Hiện không có trình quét vi-rút nào được bật';
$string['check_antivirus_logstore_not_supported'] = 'Không thể xác minh trạng thái của các trình quét vi-rút do loại kho lưu trữ nhật ký đã chọn';
$string['check_antivirus_name'] = 'Chống vi-rút';
$string['check_antivirus_ok'] = 'Đã bật {$a->scanners} trình quét vi-rút, không phát hiện sự cố nào trong {$a->lookback} vừa qua';
$string['check_configrw_details'] = '<p>Bạn nên thay đổi quyền truy cập tệp <code>config.php</code> sau khi cài đặt để máy chủ web không thể sửa đổi tệp này.
Xin lưu ý rằng biện pháp này không cải thiện đáng kể tính bảo mật của máy chủ, dù có thể làm chậm hoặc hạn chế các hình thức khai thác lỗ hổng phổ biến.</p>';
$string['check_configrw_name'] = 'config.php có thể ghi';
$string['check_configrw_ok'] = 'Các tập lệnh PHP không thể sửa đổi config.php.';
$string['check_configrw_warning'] = 'Các tập lệnh PHP có thể sửa đổi config.php.';
$string['check_cookiesecure_details'] = '<p>Nếu bật giao tiếp https, bạn nên bật gửi cookie bảo mật. Bạn nên thiết lập chuyển hướng vĩnh viễn từ http sang https và tốt nhất là cung cấp cả tiêu đề HSTS.</p>';
$string['check_cookiesecure_error'] = 'Vui lòng bật cookie bảo mật';
$string['check_cookiesecure_http'] = 'Bạn phải bật https để sử dụng cookie bảo mật';
$string['check_cookiesecure_name'] = 'Cookie bảo mật';
$string['check_cookiesecure_ok'] = 'Đã bật cookie bảo mật.';
$string['check_crawlers_details'] = '<p>Cài đặt "Cho phép công cụ tìm kiếm truy cập" cho phép công cụ tìm kiếm truy cập các khóa học với quyền truy cập khách. Không có ích gì khi bật cài đặt này nếu không cho phép đăng nhập với tư cách khách.</p>';
$string['check_crawlers_error'] = 'Đã cho phép công cụ tìm kiếm truy cập nhưng quyền truy cập khách đã bị tắt.';
$string['check_crawlers_info'] = 'Công cụ tìm kiếm có thể truy cập với tư cách khách.';
$string['check_crawlers_name'] = 'Cho phép công cụ tìm kiếm truy cập';
$string['check_crawlers_ok'] = 'Chưa bật quyền truy cập của công cụ tìm kiếm.';
$string['check_defaultuserrole_details'] = '<p>Tất cả người dùng đã đăng nhập đều được cấp các quyền năng lực của vai trò người dùng mặc định. Hãy đảm bảo vai trò này không được cấp các quyền năng lực tiềm ẩn rủi ro.</p>
<p>Loại kế thừa duy nhất được hỗ trợ cho vai trò người dùng mặc định là <em>Người dùng đã xác thực</em>. Không được bật quyền năng lực xem khóa học.</p>
<p>Vui lòng kiểm tra xem tùy chọn phê duyệt yêu cầu xóa dữ liệu tự động (tool_dataprivacy | automaticdatadeletionapproval) có được bật hay không. Người dùng có thể yêu cầu xóa lượng lớn dữ liệu.</p>';
$string['check_defaultuserrole_error'] = 'Vai trò người dùng mặc định "{$a}" được xác định không chính xác!';
$string['check_defaultuserrole_name'] = 'Vai trò mặc định cho tất cả người dùng';
$string['check_defaultuserrole_notset'] = 'Chưa đặt vai trò mặc định.';
$string['check_defaultuserrole_ok'] = 'Định nghĩa vai trò mặc định cho tất cả người dùng là hợp lệ.';
$string['check_dirindex_info'] = 'Không nên bật chỉ mục thư mục';
$string['check_displayerrors_details'] = '<p>Không nên bật cài đặt PHP <code>display_errors</code> trên các trang web đang hoạt động vì thông báo lỗi có thể tiết lộ thông tin nhạy cảm về máy chủ.</p>';
$string['check_displayerrors_error'] = 'Cài đặt PHP để hiển thị lỗi đang được bật. Bạn nên tắt cài đặt này.';
$string['check_displayerrors_name'] = 'Hiển thị lỗi PHP';
$string['check_displayerrors_ok'] = 'Đã tắt hiển thị lỗi PHP.';
$string['check_dotfiles_info'] = 'Không nên công khai bất kỳ tệp ẩn nào, ngoại trừ /.well-known/*';
$string['check_emailchangeconfirmation_details'] = '<p>Bạn nên yêu cầu xác nhận qua email khi người dùng thay đổi địa chỉ email trong hồ sơ. Nếu không bật tính năng này, kẻ gửi thư rác có thể tìm cách lợi dụng máy chủ để gửi thư rác.</p>
<p>Các plugin xác thực cũng có thể khóa trường email; trường hợp này không được xem xét ở đây.</p>';
$string['check_emailchangeconfirmation_error'] = 'Người dùng có thể nhập bất kỳ địa chỉ email nào.';
$string['check_emailchangeconfirmation_info'] = 'Người dùng chỉ có thể nhập địa chỉ email thuộc các miền được phép.';
$string['check_emailchangeconfirmation_name'] = 'Xác nhận thay đổi email';
$string['check_emailchangeconfirmation_ok'] = 'Xác nhận thay đổi địa chỉ email trong hồ sơ người dùng.';
$string['check_embed_details'] = '<p>Cho phép nhúng đối tượng không giới hạn rất nguy hiểm — bất kỳ người dùng đã đăng ký nào cũng có thể khởi chạy cuộc tấn công XSS nhằm vào những người dùng khác trên máy chủ. Cần tắt cài đặt này trên các máy chủ đang hoạt động.</p>';
$string['check_embed_error'] = 'Đã bật tính năng nhúng đối tượng không giới hạn — điều này rất nguy hiểm đối với hầu hết máy chủ.';
$string['check_embed_name'] = 'Cho phép EMBED và OBJECT';
$string['check_embed_ok'] = 'Không cho phép nhúng đối tượng không giới hạn.';
$string['check_frontpagerole_details'] = '<p>Vai trò mặc định trên trang chủ được cấp cho tất cả người dùng đã xác thực để tham gia các hoạt động trên trang chủ. Hãy đảm bảo vai trò này không được cấp các quyền năng lực tiềm ẩn rủi ro.</p>
<p>Bạn nên tạo một vai trò riêng cho mục đích này và không sử dụng vai trò thuộc loại kế thừa.</p>';
$string['check_frontpagerole_error'] = 'Phát hiện vai trò trang chủ "{$a}" được xác định không chính xác!';
$string['check_frontpagerole_name'] = 'Vai trò trang chủ';
$string['check_frontpagerole_notset'] = 'Chưa đặt vai trò trang chủ.';
$string['check_frontpagerole_ok'] = 'Định nghĩa vai trò trang chủ của site hợp lệ.';
$string['check_guestrole_details'] = '<p>Vai trò khách được dùng cho khách, người dùng chưa đăng nhập và quyền truy cập khóa học tạm thời dành cho khách. Hãy đảm bảo không cho phép các quyền năng lực rủi ro trong vai trò này.</p>
<p>Loại cũ duy nhất được hỗ trợ cho vai trò khách là <em>Guest</em>.</p>';
$string['check_guestrole_error'] = 'Vai trò khách "{$a}" được định nghĩa không chính xác!';
$string['check_guestrole_name'] = 'Vai trò khách';
$string['check_guestrole_notset'] = 'Chưa thiết lập vai trò khách.';
$string['check_guestrole_ok'] = 'Định nghĩa vai trò khách hợp lệ.';
$string['check_nodemodules_details'] = '<p>Thư mục <code>{$a->path}</code> chứa các mô-đun Node.js và các phần phụ thuộc, thường được cài đặt bằng tiện ích NPM. Các mô-đun này có thể cần thiết cho việc phát triển Moodle cục bộ, chẳng hạn như sử dụng framework grunt. Chúng không cần thiết để chạy một site Moodle trong môi trường sản xuất và có thể chứa mã nguy hiểm tiềm ẩn, khiến site của bạn bị tấn công từ xa.</p><p>Bạn nên xóa thư mục này nếu site được truy cập qua URL công khai, hoặc ít nhất cấm truy cập web vào thư mục này trong cấu hình máy chủ web.</p>';
$string['check_nodemodules_info'] = 'Không nên có thư mục node_modules trên các site công khai.';
$string['check_nodemodules_name'] = 'Thư mục mô-đun Node.js';
$string['check_openprofiles_details'] = 'Hồ sơ người dùng công khai có thể bị những kẻ gửi thư rác lợi dụng. Bạn nên bật một trong hai tùy chọn <code>Buộc người dùng đăng nhập để xem hồ sơ</code> hoặc <code>Buộc người dùng đăng nhập</code>.';
$string['check_openprofiles_error'] = 'Bất kỳ ai cũng có thể xem hồ sơ người dùng mà không cần đăng nhập.';
$string['check_openprofiles_name'] = 'Hồ sơ người dùng công khai';
$string['check_openprofiles_ok'] = 'Cần đăng nhập trước khi xem hồ sơ người dùng.';
$string['check_passwordpolicy_details'] = '<p>Bạn nên đặt chính sách mật khẩu, vì đoán mật khẩu thường là cách dễ nhất để truy cập trái phép.
Tuy nhiên, đừng đặt yêu cầu quá nghiêm ngặt, vì người dùng có thể không nhớ được mật khẩu, dẫn đến quên hoặc ghi mật khẩu ra giấy.</p>';
$string['check_passwordpolicy_error'] = 'Chưa thiết lập chính sách mật khẩu.';
$string['check_passwordpolicy_name'] = 'Chính sách mật khẩu';
$string['check_passwordpolicy_ok'] = 'Đã bật chính sách mật khẩu.';
$string['check_preventexecpath_details'] = '<p>Cho phép thiết lập đường dẫn tệp thực thi qua giao diện quản trị có thể dẫn đến việc nâng cao đặc quyền. Phải bắt buộc thiết lập trong config.php:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'Đường dẫn tệp thực thi';
$string['check_preventexecpath_ok'] = 'Chỉ có thể thiết lập đường dẫn tệp thực thi trong config.php.';
$string['check_preventexecpath_warning'] = 'Có thể thiết lập đường dẫn tệp thực thi trong giao diện quản trị.';
$string['check_publicpaths_403'] = '(Trả về mã 403, lý tưởng nhất là nên trả về 404)';
$string['check_publicpaths_generic'] = 'Không nên công khai {$a} tệp';
$string['check_publicpaths_name'] = 'Kiểm tra tất cả đường dẫn công khai / riêng tư';
$string['check_publicpaths_ok'] = 'Không thể truy cập công khai các đường dẫn nội bộ';
$string['check_publicpaths_warning'] = 'Có thể truy cập công khai một số đường dẫn nội bộ';
$string['check_riskadmin_detailsok'] = '<p>Vui lòng xác minh danh sách quản trị viên hệ thống sau:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Vui lòng xác minh danh sách quản trị viên hệ thống sau:</p>{$a->admins}
<p>Bạn nên chỉ gán vai trò quản trị viên trong ngữ cảnh hệ thống. Những người dùng sau được gán vai trò quản trị viên (không được hỗ trợ) trong các ngữ cảnh khác:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Quản trị viên';
$string['check_riskadmin_ok'] = 'Tìm thấy {$a} quản trị viên máy chủ.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">Xem lại việc gán vai trò của {$a->fullname} ({$a->email})</a>';
$string['check_riskadmin_warning'] = 'Tìm thấy {$a->admincount} quản trị viên máy chủ và {$a->unsupcount} trường hợp gán vai trò quản trị viên không được hỗ trợ.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Các ghi đè đang hoạt động này cho phép người dùng đưa dữ liệu người dùng vào bản sao lưu. Hãy đảm bảo rằng quyền này là cần thiết.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Các vai trò hệ thống sau hiện cho phép người dùng đưa dữ liệu người dùng vào bản sao lưu. Hãy đảm bảo rằng quyền này là cần thiết.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Do các vai trò hoặc ghi đè cục bộ nêu trên, các tài khoản người dùng sau hiện có quyền tạo bản sao lưu chứa dữ liệu riêng tư của bất kỳ người dùng nào đã ghi danh vào khóa học của họ. Hãy đảm bảo họ (a) đáng tin cậy và (b) được bảo vệ bằng mật khẩu mạnh:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Không có vai trò nào cho phép rõ ràng việc sao lưu dữ liệu người dùng. Tuy nhiên, lưu ý rằng quản trị viên có quyền năng lực "doanything" vẫn có khả năng thực hiện việc này.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} trong {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Sao lưu dữ liệu người dùng';
$string['check_riskbackup_ok'] = 'Không có vai trò nào cho phép rõ ràng việc sao lưu dữ liệu người dùng';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) trong {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Tìm thấy {$a->rolecount} vai trò, {$a->overridecount} ghi đè và {$a->usercount} người dùng có khả năng sao lưu dữ liệu người dùng.';
$string['check_riskxss_details'] = '<p>RISK_XSS biểu thị tất cả các quyền năng lực nguy hiểm mà chỉ người dùng đáng tin cậy mới được sử dụng.</p>
<p>Vui lòng xác minh danh sách người dùng sau và đảm bảo bạn hoàn toàn tin tưởng họ trên máy chủ này:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'Người dùng đáng tin cậy có quyền XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - tìm thấy {$a} người dùng cần được tin cậy.';
$string['check_securitymessages_action_enable'] = 'Bật';
$string['check_securitymessages_action_enable_notification'] = 'Bật thông báo';
$string['check_securitymessages_action_enableandlock'] = 'Bật và khóa';
$string['check_securitymessages_action_lock'] = 'Khóa';
$string['check_securitymessages_details'] = '<p>Bạn rất nên bắt buộc bật thông báo về các thông điệp quan trọng liên quan đến bảo mật để người dùng không thể từ chối nhận chúng. Các thông báo này bao gồm cảnh báo đăng nhập mới được gửi qua email và thông báo đẩy trên thiết bị di động.</p>';
$string['check_securitymessages_error'] = 'Các thông báo về bảo mật sau đây chưa bị buộc bật: {$a}';
$string['check_securitymessages_name'] = 'Thông báo về bảo mật';
$string['check_securitymessages_notification_disabled'] = 'đã tắt thông báo';
$string['check_securitymessages_notification_enabled'] = 'Đã bật thông báo';
$string['check_securitymessages_ok'] = 'Tất cả thông báo về các thông điệp quan trọng liên quan đến bảo mật đều bị buộc bật.';
$string['check_unsecuredataroot_details'] = '<p>Không được truy cập thư mục dataroot qua web. Cách tốt nhất để đảm bảo thư mục không thể truy cập là đặt thư mục bên ngoài thư mục web công khai.</p>
<p>Nếu di chuyển thư mục, bạn cần cập nhật tương ứng cài đặt <code>$CFG->dataroot</code> trong <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Thư mục dataroot <code>{$a}</code> của bạn nằm sai vị trí và đang bị lộ trên web!';
$string['check_unsecuredataroot_name'] = 'Dataroot không an toàn';
$string['check_unsecuredataroot_ok'] = 'Không được truy cập thư mục dataroot qua web.';
$string['check_unsecuredataroot_warning'] = 'Thư mục dataroot <code>{$a}</code> của bạn nằm sai vị trí và có thể bị lộ trên web.';
$string['check_upgradefile_info'] = 'Không nên công khai các tệp ghi chú nâng cấp';
$string['check_vendordir_details'] = '<p>Thư mục <code>{$a->path}</code> chứa nhiều thư viện bên thứ ba và các phần phụ thuộc, thường được cài đặt bằng PHP Composer. Các thư viện này có thể cần thiết cho việc phát triển Moodle cục bộ, chẳng hạn như cài đặt framework PHPUnit. Chúng không cần thiết để chạy một site Moodle trong môi trường sản xuất và có thể chứa mã nguy hiểm tiềm ẩn, khiến site của bạn bị tấn công từ xa.</p><p>Bạn nên xóa thư mục này nếu site được truy cập qua URL công khai, hoặc ít nhất cấm truy cập web vào thư mục này trong cấu hình máy chủ web.</p>';
$string['check_vendordir_info'] = 'Không nên có thư mục vendor trên các site công khai.';
$string['check_vendordir_name'] = 'Thư mục vendor';
$string['check_webcron_details'] = '<p>Chạy cron từ trình duyệt web có thể làm lộ thông tin đặc quyền cho người dùng ẩn danh. Bạn nên chỉ chạy cron từ dòng lệnh hoặc đặt mật khẩu cron để truy cập từ xa.</p>';
$string['check_webcron_name'] = 'Cron web';
$string['check_webcron_ok'] = 'Người dùng ẩn danh không thể truy cập cron.';
$string['check_webcron_warning'] = 'Người dùng ẩn danh có thể truy cập cron.';
$string['configuration'] = 'Cấu hình';
$string['description'] = 'Mô tả';
$string['details'] = 'Chi tiết';
$string['eventreportviewed'] = 'Đã xem báo cáo kiểm tra bảo mật';
$string['issue'] = 'Sự cố';
$string['pluginname'] = 'Kiểm tra bảo mật';
$string['privacy:metadata'] = 'Plugin tổng quan bảo mật không lưu trữ dữ liệu cá nhân.';
$string['security:view'] = 'Xem báo cáo bảo mật';
$string['timewarning'] = 'Quá trình xử lý dữ liệu có thể mất nhiều thời gian, vui lòng kiên nhẫn...';
