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
 * @subpackage monitor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Thêm quy tắc mới';
$string['allevents'] = 'Tất cả sự kiện';
$string['allmodules'] = 'Tất cả phiên bản';
$string['area'] = 'Khu vực';
$string['areatomonitor'] = 'Khu vực cần theo dõi';
$string['cachedef_eventsubscriptions'] = 'Danh sách đăng ký sự kiện cho từng khóa học được lưu tại đây';
$string['contactadmin'] = 'Liên hệ quản trị viên để bật tính năng này.';
$string['core'] = 'Lõi';
$string['coresubsystem'] = 'Hệ thống con ({$a})';
$string['currentsubscriptions'] = 'Các đăng ký hiện tại của bạn';
$string['defaultmessagetemplate'] = 'Tên quy tắc: {rulename}<br />Mô tả: {description}<br />Tên sự kiện: {eventname}';
$string['deleterule'] = 'Xóa quy tắc';
$string['deletesubscription'] = 'Xóa đăng ký';
$string['description'] = 'Mô tả:';
$string['disablefieldswarning'] = 'Không thể chỉnh sửa một số trường vì quy tắc này đã có đăng ký.';
$string['duplicaterule'] = 'Nhân bản quy tắc';
$string['editrule'] = 'Chỉnh sửa quy tắc';
$string['enablehelp'] = 'Bật/tắt theo dõi sự kiện';
$string['enablehelp_help'] = 'Phải bật tính năng theo dõi sự kiện trước khi bạn có thể tạo và đăng ký quy tắc. Xin lưu ý rằng việc bật tính năng này có thể ảnh hưởng đến hiệu năng của trang web.';
$string['errorincorrectevent'] = 'Vui lòng chọn một sự kiện liên quan đến plugin đã chọn';
$string['event'] = 'Sự kiện';
$string['eventnotfound'] = 'Không tìm thấy sự kiện';
$string['eventrulecreated'] = 'Đã tạo quy tắc';
$string['eventruledeleted'] = 'Đã xóa quy tắc';
$string['eventruleupdated'] = 'Đã cập nhật quy tắc';
$string['eventsubcreated'] = 'Đã tạo đăng ký';
$string['eventsubcriteriamet'] = 'Đã đáp ứng tiêu chí đăng ký';
$string['eventsubdeleted'] = 'Đã xóa đăng ký';
$string['freqdesc'] = '{$a->freq} lần trong {$a->mins} phút';
$string['frequency'] = 'Ngưỡng thông báo';
$string['frequency_help'] = 'Số lượng sự kiện cần xảy ra trong một khoảng thời gian xác định để gửi thông báo.';
$string['inminutes'] = 'trong phút';
$string['invalidmodule'] = 'Mô-đun không hợp lệ';
$string['manage'] = 'Quản lý';
$string['managerules'] = 'Quy tắc theo dõi sự kiện';
$string['manageruleslink'] = 'Bạn có thể quản lý các quy tắc tại trang {$a}.';
$string['managesubscriptions'] = 'Theo dõi sự kiện';
$string['managesubscriptionslink'] = 'Bạn có thể đăng ký các quy tắc tại trang {$a}.';
$string['messageprovider:notification'] = 'Thông báo về các đăng ký quy tắc';
$string['messagetemplate'] = 'Tin nhắn thông báo';
$string['messagetemplate_help'] = 'Tin nhắn thông báo được gửi cho người đăng ký khi đạt đến ngưỡng thông báo. Tin nhắn có thể bao gồm một hoặc tất cả các placeholder sau:

* Liên kết đến vị trí của sự kiện {link}
* Liên kết đến khu vực được theo dõi {modulelink}
* Tên mô-đun của khóa học {modulename}
* Tên quy tắc {rulename}
* Mô tả {description}
* Sự kiện {eventname}
* Tên đầy đủ của khóa học {coursefullname}
* Tên ngắn của khóa học {courseshortname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Phiên bản';
$string['monitor:managerules'] = 'Quản lý các quy tắc theo dõi sự kiện';
$string['monitor:managetool'] = 'Bật/tắt theo dõi sự kiện';
$string['monitor:subscribe'] = 'Đăng ký quy tắc theo dõi sự kiện';
$string['monitordisabled'] = 'Hiện đang tắt tính năng theo dõi sự kiện.';
$string['monitorenabled'] = 'Hiện đang bật tính năng theo dõi sự kiện.';
$string['norules'] = 'Không có quy tắc theo dõi sự kiện nào.';
$string['pluginname'] = 'Theo dõi sự kiện';
$string['privacy:createdrules'] = 'Các quy tắc theo dõi sự kiện do tôi tạo';
$string['privacy:metadata:description'] = 'Mô tả quy tắc';
$string['privacy:metadata:eventname'] = 'Tên đầy đủ của sự kiện';
$string['privacy:metadata:frequency'] = 'Tần suất thông báo';
$string['privacy:metadata:historysummary'] = 'Lưu lịch sử các thông báo đã gửi';
$string['privacy:metadata:inactivedate'] = 'Khoảng thời gian tính bằng ngày, sau đó đăng ký không hoạt động sẽ bị xóa hoàn toàn';
$string['privacy:metadata:lastnotificationsent'] = 'Thời điểm thông báo gần nhất được gửi cho đăng ký này.';
$string['privacy:metadata:messagesummary'] = 'Thông báo được gửi đến hệ thống nhắn tin.';
$string['privacy:metadata:name'] = 'Tên quy tắc';
$string['privacy:metadata:plugin'] = 'Tên theo kiểu Frankenstyle của plugin';
$string['privacy:metadata:rulessummary'] = 'Lưu các quy tắc theo dõi.';
$string['privacy:metadata:subscriptionssummary'] = 'Lưu các đăng ký của người dùng đối với nhiều quy tắc khác nhau';
$string['privacy:metadata:template'] = 'Mẫu tin nhắn';
$string['privacy:metadata:timecreatedrule'] = 'Thời điểm tạo quy tắc này';
$string['privacy:metadata:timecreatedsub'] = 'Thời điểm tạo đăng ký này';
$string['privacy:metadata:timemodifiedrule'] = 'Thời điểm sửa đổi quy tắc này gần nhất';
$string['privacy:metadata:timesent'] = 'Thời điểm gửi tin nhắn';
$string['privacy:metadata:timewindow'] = 'Khoảng thời gian tính bằng giây';
$string['privacy:metadata:userid'] = 'ID của người dùng đã tạo quy tắc.';
$string['privacy:metadata:useridhistory'] = 'ID của người dùng đã nhận thông báo này';
$string['privacy:metadata:useridsub'] = 'ID của người đăng ký.';
$string['privacy:subscriptions'] = 'Các đăng ký theo dõi sự kiện của tôi';
$string['processevents'] = 'Xử lý sự kiện';
$string['ruleareyousure'] = 'Bạn có chắc chắn muốn xóa quy tắc "{$a}" không?';
$string['ruleareyousureextra'] = 'Có {$a} đăng ký quy tắc này cũng sẽ bị xóa.';
$string['rulecopysuccess'] = 'Đã nhân bản quy tắc thành công';
$string['ruledeletesuccess'] = 'Đã xóa quy tắc thành công';
$string['rulehelp'] = 'Chi tiết quy tắc';
$string['rulehelp_help'] = 'Quy tắc này theo dõi sự kiện \'{$a->eventname}\' trong \'{$a->eventcomponent}\' khi sự kiện được kích hoạt {$a->frequency} lần trong {$a->minutes} phút.';
$string['rulename'] = 'Tên quy tắc';
$string['rulenopermission'] = 'Bạn không có quyền đăng ký bất kỳ sự kiện nào.';
$string['rulenopermissions'] = 'Bạn không có quyền "{$a} quy tắc"';
$string['rulescansubscribe'] = 'Các quy tắc bạn có thể đăng ký';
$string['selectacourse'] = 'Chọn khóa học';
$string['selectcourse'] = 'Truy cập báo cáo này ở cấp khóa học để xem danh sách các mô-đun có thể chọn';
$string['subareyousure'] = 'Bạn có chắc chắn muốn xóa đăng ký quy tắc "{$a}" không?';
$string['subcreatesuccess'] = 'Đã tạo đăng ký thành công';
$string['subdeletesuccess'] = 'Đã xóa đăng ký thành công';
$string['subhelp'] = 'Chi tiết đăng ký';
$string['subhelp_help'] = 'Đăng ký này theo dõi sự kiện \'{$a->eventname}\' khi sự kiện được kích hoạt trong \'{$a->moduleinstance}\' {$a->frequency} lần trong {$a->minutes} phút.';
$string['subscribeto'] = 'Đăng ký quy tắc "{$a}"';
$string['taskchecksubscriptions'] = 'Kích hoạt/hủy kích hoạt các đăng ký quy tắc không hợp lệ';
$string['taskcleanevents'] = 'Dọn dẹp sự kiện theo dõi sự kiện';
$string['unsubscribe'] = 'Hủy đăng ký';
