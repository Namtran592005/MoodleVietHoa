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
 * @package    factor
 * @subpackage sms
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Quản lý số điện thoại di động';
$string['action:revoke'] = 'Xóa số điện thoại di động';
$string['addnumber'] = 'Số điện thoại di động';
$string['clientnotfound'] = 'Không tìm thấy ứng dụng dịch vụ AWS. Ứng dụng phải là tên lớp đầy đủ, ví dụ: \\Aws\\S3\\S3Client.';
$string['editphonenumber'] = 'Chỉnh sửa số điện thoại';
$string['editphonenumberinfo'] = 'Nếu bạn không nhận được mã hoặc đã nhập sai số, vui lòng chỉnh sửa số điện thoại rồi thử lại.';
$string['error:emptyverification'] = 'Mã trống. Hãy thử lại.';
$string['error:wrongphonenumber'] = 'Số điện thoại bạn cung cấp không đúng định dạng hợp lệ.';
$string['error:wrongverification'] = 'Mã không đúng. Hãy thử lại.';
$string['errorawsconection'] = 'Lỗi khi kết nối với máy chủ AWS: {$a}';
$string['errorsmssent'] = 'Lỗi khi gửi tin nhắn SMS có chứa mã xác minh của bạn.';
$string['event:smssent'] = 'Đã gửi tin nhắn SMS.';
$string['event:smssentdescription'] = 'Mã xác minh đã được gửi qua SMS cho người dùng có ID {$a->userid}. Thông tin: {$a->debuginfo}';
$string['info'] = 'Nhận mã xác minh được gửi đến số điện thoại di động bạn chọn.';
$string['logindesc'] = 'Để bảo vệ tài khoản, chúng tôi cần kiểm tra xem có đúng là bạn hay không. Chúng tôi đã gửi mã đến <strong>{$a}</strong>. Vui lòng nhập mã bên dưới để tiếp tục.';
$string['loginoption'] = 'Nhận mã qua SMS';
$string['loginskip'] = 'Tôi chưa nhận được mã';
$string['loginsubmit'] = 'Tiếp tục';
$string['logintitle'] = 'Nhập mã xác minh đã gửi đến điện thoại di động của bạn';
$string['managefactor'] = 'Quản lý SMS';
$string['managefactorbutton'] = 'Quản lý';
$string['manageinfo'] = 'Bạn đang dùng \'{$a}\' để xác thực.';
$string['notification:smsgatewaymigration'] = 'Cài đặt SMS đã được chuyển';
$string['notification:smsgatewaymigrationinfo'] = 'Một hệ thống SMS mới hiện có sẵn để quản lý và cấu hình tất cả chức năng liên quan đến SMS. Các cấu hình SMS hiện có của bạn đã được chuyển sang trang <a href="{$a}">Cổng SMS</a>.';
$string['phonehelp'] = 'Nhập số điện thoại di động của bạn (bao gồm mã quốc gia) để nhận mã xác minh.';
$string['pluginname'] = 'SMS';
$string['privacy:metadata'] = 'Plugin yếu tố SMS không lưu trữ dữ liệu cá nhân.';
$string['revokefactorconfirmation'] = 'Xóa SMS của \'{$a}\'?';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = 'Khóa';
$string['settings:aws:key_help'] = 'Thông tin xác thực khóa API Amazon.';
$string['settings:aws:region'] = 'Khu vực';
$string['settings:aws:region_help'] = 'Khu vực cổng API Amazon.';
$string['settings:aws:secret'] = 'Khóa bí mật';
$string['settings:aws:secret_help'] = 'Thông tin xác thực khóa bí mật API Amazon.';
$string['settings:aws:usecredchain'] = 'Tìm thông tin xác thực AWS bằng chuỗi nhà cung cấp thông tin xác thực mặc định';
$string['settings:countrycode'] = 'Mã gọi quốc gia';
$string['settings:countrycode_help'] = 'Mã gọi quốc gia không có dấu + ở đầu, được dùng mặc định nếu người dùng không nhập số quốc tế có tiền tố +.

Xem liên kết này để biết danh sách mã gọi quốc gia: {$a}';
$string['settings:duration'] = 'Thời hạn hiệu lực';
$string['settings:duration_help'] = 'Khoảng thời gian mã có hiệu lực.';
$string['settings:gateway'] = 'Cổng SMS';
$string['settings:gateway_help'] = 'Nhà cung cấp SMS mà bạn muốn dùng để gửi tin nhắn';
$string['settings:heading'] = 'Người dùng sẽ nhận mã xác minh gồm 6 chữ số qua SMS và phải nhập mã này để hoàn tất quá trình đăng nhập. Trước tiên, người dùng cần đăng ký số điện thoại di động.';
$string['settings:setupdesc'] = 'Để sử dụng SMS làm yếu tố xác thực, trước tiên bạn cần <a href="{$a}">thiết lập cổng SMS</a>.';
$string['settings:shortdescription'] = 'Yêu cầu người dùng nhập mã nhận được qua SMS khi đăng nhập.';
$string['settings:smsgateway'] = 'Cổng SMS';
$string['settings:smsgateway_help'] = 'Chọn một cổng từ danh sách hoặc <a href="{$a}">tạo cổng mới</a>.';
$string['setupfactor'] = 'Thiết lập SMS';
$string['setupfactorbutton'] = 'Thiết lập';
$string['setupsubmitcode'] = 'Lưu';
$string['setupsubmitphone'] = 'Gửi mã';
$string['smsstring'] = '{$a->code} là mã bảo mật dùng một lần của {$a->fullname}.

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'Sử dụng mã bảo mật SMS dùng một lần';
