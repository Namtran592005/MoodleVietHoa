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
 * @package    message
 * @subpackage airnotifier
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Quản lý thiết bị';
$string['airnotifieraccesskey'] = 'Khóa truy cập AirNotifier';
$string['airnotifierappname'] = 'Tên ứng dụng AirNotifier';
$string['airnotifierfielderror'] = 'Vui lòng xóa mọi khoảng trắng hoặc ký tự không cần thiết khỏi trường sau: {$a}';
$string['airnotifiermobileappname'] = 'Tên ứng dụng di động';
$string['airnotifierport'] = 'Cổng AirNotifier';
$string['airnotifierurl'] = 'URL AirNotifier';
$string['checkconfiguration'] = 'Kiểm tra và thử nghiệm cấu hình thông báo đẩy';
$string['configairnotifieraccesskey'] = 'Lấy khóa truy cập bằng cách nhấp vào \'Yêu cầu khóa truy cập\' bên dưới (chỉ dành cho trang đã đăng ký) hoặc tạo tài khoản trên <a href="https://apps.moodle.com">Cổng ứng dụng Moodle</a>.';
$string['configairnotifierappname'] = 'Mã định danh tên ứng dụng trong AirNotifier.';
$string['configairnotifiermobileappname'] = 'Mã định danh duy nhất của ứng dụng di động (thường có dạng như com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Cổng cần sử dụng khi kết nối với máy chủ AirNotifier.';
$string['configairnotifierurl'] = 'URL máy chủ cần kết nối để gửi thông báo đẩy.';
$string['configured'] = 'Đã cấu hình';
$string['deletecheckdevicename'] = 'Xóa thiết bị của bạn: {$a->name}';
$string['deletedevice'] = 'Xóa thiết bị. Lưu ý rằng ứng dụng có thể đăng ký lại thiết bị. Nếu thiết bị liên tục xuất hiện lại, hãy tắt thiết bị.';
$string['devicetoken'] = 'Mã thông báo thiết bị';
$string['donotsendnotification'] = 'Không gửi thông báo';
$string['enableprocessor'] = 'Bật thông báo trên thiết bị di động';
$string['encryptnotifications'] = 'Mã hóa thông báo';
$string['encryptnotifications_help'] = 'Bật mã hóa đầu cuối cho thông báo ứng dụng. Một số dữ liệu có thể bị xóa khỏi thông báo nếu không thể mã hóa.';
$string['encryptprocessing'] = 'Đối với thiết bị không hỗ trợ mã hóa';
$string['encryptprocessing_desc'] = 'Thông báo được mã hóa yêu cầu ít nhất Android 8 hoặc iOS 13 và Moodle App 4.2 trở lên.';
$string['errorretrievingkey'] = 'Đã xảy ra lỗi khi lấy khóa truy cập. Trang của bạn phải được đăng ký để sử dụng dịch vụ này. Nếu trang đã được đăng ký, vui lòng thử cập nhật thông tin đăng ký. Ngoài ra, bạn có thể lấy khóa truy cập bằng cách tạo tài khoản trên <a href="https://apps.moodle.com">Cổng ứng dụng Moodle</a>.';
$string['keyretrievedsuccessfully'] = 'Đã lấy khóa truy cập thành công. Để truy cập thống kê sử dụng ứng dụng Moodle, vui lòng tạo tài khoản trên <a href="https://apps.moodle.com">Cổng ứng dụng Moodle</a>.';
$string['messageprovidersempty'] = 'Không có thông báo trên thiết bị di động nào được bật trong tùy chọn thông báo mặc định.';
$string['messageproviderslow'] = 'Chỉ có một vài thông báo trên thiết bị di động được bật trong tùy chọn thông báo mặc định.';
$string['moodleappsportallimitswarning'] = 'Xin lưu ý rằng số lượng thiết bị người dùng được phép nhận thông báo phụ thuộc vào gói đăng ký ứng dụng Moodle của bạn. Để biết chi tiết, hãy truy cập <a href="{$a}" target="_blank">Cổng ứng dụng Moodle</a>.';
$string['nodevices'] = 'Không có thiết bị nào được đăng ký. Thiết bị sẽ tự động xuất hiện sau khi bạn cài đặt ứng dụng Moodle và thêm trang này.';
$string['noemailevernotset'] = '$CFG->noemailever đã bị tắt';
$string['noemaileverset'] = '$CFG->noemailever được bật trong config.php. Bạn cần đặt giá trị này thành false hoặc xóa thiết lập.';
$string['nopermissiontomanagedevices'] = 'Bạn không có quyền quản lý thiết bị.';
$string['notconfigured'] = 'Cấu hình máy chủ AirNotifier để bật thông báo đẩy.';
$string['notificationsserverconfiguration'] = 'Cấu hình máy chủ thông báo (AirNotifier)';
$string['pluginname'] = 'Di động';
$string['privacy:appiddescription'] = 'Đây là mã định danh của ứng dụng đang được sử dụng.';
$string['privacy:enableddescription'] = 'Cho biết thiết bị này có được bật cho AirNotifier hay không.';
$string['privacy:metadata:date'] = 'Ngày gửi thông báo.';
$string['privacy:metadata:enabled'] = 'Thiết bị AirNotifier có được bật hay không.';
$string['privacy:metadata:externalpurpose'] = 'Thông tin này được gửi đến một trang bên ngoài để cuối cùng được chuyển đến thiết bị di động của người dùng.';
$string['privacy:metadata:fullmessage'] = 'Toàn bộ thông báo.';
$string['privacy:metadata:notification'] = 'Thông báo này có phải là thông báo hệ thống hay không.';
$string['privacy:metadata:smallmessage'] = 'Một phần của thông báo.';
$string['privacy:metadata:subject'] = 'Dòng chủ đề của thông báo.';
$string['privacy:metadata:tableexplanation'] = 'Thông tin thiết bị AirNotifier được lưu trữ tại đây.';
$string['privacy:metadata:userdeviceid'] = 'ID liên kết đến thiết bị di động của người dùng';
$string['privacy:metadata:userfromfullname'] = 'Họ tên đầy đủ của người dùng đã gửi thông báo.';
$string['privacy:metadata:userfromid'] = 'ID người dùng là tác giả của thông báo.';
$string['privacy:metadata:userid'] = 'ID của người dùng đã gửi thông báo.';
$string['privacy:metadata:username'] = 'Tên đăng nhập của người dùng.';
$string['privacy:metadata:usersubsystem'] = 'Plugin này được kết nối với hệ thống con người dùng.';
$string['privacy:subcontext'] = 'Thông báo AirNotifier';
$string['requestaccesskey'] = 'Yêu cầu khóa truy cập';
$string['sendnotificationnotenc'] = 'Gửi thông báo không mã hóa';
$string['sendtest'] = 'Gửi thông báo đẩy thử nghiệm đến thiết bị của tôi';
$string['sendtestconfirmation'] = 'Thông báo đẩy thử nghiệm sẽ được gửi đến các thiết bị bạn dùng để kết nối với trang này. Hãy đảm bảo thiết bị của bạn được kết nối Internet và ứng dụng di động không mở (vì thông báo đẩy chỉ hiển thị khi được nhận trong nền).';
$string['serverconnectivityerror'] = 'Trang này không thể kết nối với máy chủ thông báo {$a}';
$string['showhide'] = 'Bật/tắt thiết bị.';
$string['sitemustberegistered'] = 'Đăng ký trang của bạn để sử dụng phiên bản AirNotifier công khai hoặc lấy khóa truy cập bằng cách tạo tài khoản trên <a href="https://apps.moodle.com">Cổng ứng dụng Moodle</a>.';
$string['taskcleanup'] = 'Dọn dẹp thiết bị AirNotifier.';
$string['unknowndevice'] = 'Thiết bị không xác định';
$string['userdevices'] = 'Thiết bị người dùng';
$string['view_notification'] = 'Nhấn để xem';
