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
 * @subpackage totp
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Quản lý ứng dụng xác thực bằng mật khẩu dùng một lần theo thời gian (TOTP)';
$string['action:revoke'] = 'Xóa ứng dụng xác thực bằng mật khẩu dùng một lần theo thời gian (TOTP)';
$string['devicename'] = 'Nhãn thiết bị';
$string['devicename_help'] = 'Đây là thiết bị đã cài ứng dụng xác thực. Bạn có thể thiết lập nhiều thiết bị, vì vậy nhãn này giúp theo dõi thiết bị nào đang được sử dụng. Bạn nên thiết lập mỗi thiết bị bằng một mã riêng để có thể thu hồi từng thiết bị riêng biệt.';
$string['devicenameexample'] = 'ví dụ: "iPhone 11 công việc"';
$string['error:alreadyregistered'] = 'Bí mật TOTP này đã được đăng ký.';
$string['error:codealreadyused'] = 'Mã này đã được dùng để xác thực. Vui lòng đợi mã mới được tạo rồi thử lại.';
$string['error:futurecode'] = 'Mã này không hợp lệ. Vui lòng kiểm tra thời gian trên thiết bị xác thực có chính xác không rồi thử lại.
    Thời gian hệ thống hiện tại là {$a}.';
$string['error:oldcode'] = 'Mã này đã quá hạn. Vui lòng kiểm tra thời gian trên thiết bị xác thực có chính xác không rồi thử lại.
    Thời gian hệ thống hiện tại là {$a}.';
$string['error:wrongverification'] = 'Mã xác minh không chính xác.';
$string['factorsetup'] = 'Thiết lập ứng dụng';
$string['info'] = 'Tạo mã xác minh bằng ứng dụng xác thực.';
$string['logindesc'] = 'Để bảo vệ tài khoản, chúng tôi cần xác minh đúng là bạn. Nhấp vào tiếp tục để sử dụng <strong>ứng dụng xác thực</strong>.';
$string['loginoption'] = 'Nhận mã qua ứng dụng xác thực';
$string['loginskip'] = 'Tôi không có thiết bị của mình';
$string['loginsubmit'] = 'Tiếp tục';
$string['logintitle'] = 'Xác minh bạn là chính chủ bằng ứng dụng di động';
$string['managefactor'] = 'Quản lý ứng dụng xác thực';
$string['managefactorbutton'] = 'Quản lý';
$string['manageinfo'] = 'Bạn đang sử dụng \'{$a}\' để xác thực.';
$string['pluginname'] = 'Ứng dụng xác thực';
$string['privacy:metadata'] = 'Plugin yếu tố Ứng dụng xác thực không lưu trữ dữ liệu cá nhân.';
$string['replacefactor'] = 'Thay thế ứng dụng xác thực';
$string['replacefactorconfirmation'] = 'Thay thế ứng dụng xác thực \'{$a}\'?';
$string['revokefactorconfirmation'] = 'Xóa ứng dụng xác thực \'{$a}\'?';
$string['settings:description'] = 'Người dùng cần cài ứng dụng xác thực trên thiết bị di động để tạo mã và phải nhập mã này khi đăng nhập.';
$string['settings:shortdescription'] = 'Yêu cầu người dùng nhập mã từ ứng dụng xác thực trên thiết bị khi đăng nhập.';
$string['settings:totplink'] = 'Hiển thị liên kết thiết lập ứng dụng di động';
$string['settings:totplink_help'] = 'Nếu bật, người dùng sẽ thấy tùy chọn thiết lập thứ 3 với liên kết otpauth:// trực tiếp';
$string['settings:window'] = 'Cửa sổ xác minh TOTP';
$string['settings:window_help'] = 'Cửa sổ TOTP tính đến độ lệch thời gian và xác định thời gian hiệu lực của mỗi mã.
    Khoảng thời gian giữa các mã được tạo mới là 30 giây.
    Nếu cửa sổ là 15 (mặc định) và dấu thời gian hiện tại là 147682209, các OTP được kiểm tra nằm trong khoảng 147682194 (147682209 - 15), 147682209 và 147682224 (147682209 + 15).
    Cửa sổ phải nhỏ hơn 30. Vì vậy, phép kiểm tra này bao gồm OTP trước đó nhưng không bao gồm OTP tiếp theo.
    Bạn có thể đặt giá trị cao hơn (tối đa 29) để khắc phục nếu đồng hồ trên thiết bị của người dùng thường bị lệch nhẹ.';
$string['setupfactor'] = 'Thiết lập ứng dụng xác thực';
$string['setupfactor:account'] = 'Tài khoản:';
$string['setupfactor:devicename'] = 'Tên thiết bị';
$string['setupfactor:devicenameinfo'] = 'Tên này giúp bạn xác định thiết bị nào nhận mã xác minh.';
$string['setupfactor:enter'] = 'Nhập thông tin thủ công';
$string['setupfactor:instructionsdevicename'] = '1. Đặt tên cho thiết bị của bạn.';
$string['setupfactor:instructionsscan'] = '2. Quét mã QR bằng ứng dụng xác thực.';
$string['setupfactor:instructionsverification'] = '3. Nhập mã xác minh.';
$string['setupfactor:intro'] = 'Để thiết lập phương thức này, bạn cần có thiết bị cài ứng dụng xác thực. Nếu chưa có ứng dụng, bạn có thể tải một ứng dụng xuống. Ví dụ: <a href="https://2fas.com/" target="_blank">2FAS Auth</a>, <a href="https://freeotp.github.io/" target="_blank">FreeOTP</a>, Google Authenticator, Microsoft Authenticator hoặc Twilio Authy.';
$string['setupfactor:key'] = 'Khóa bí mật:';
$string['setupfactor:link'] = 'Hoặc nhập thông tin thủ công.';
$string['setupfactor:link_help'] = 'Nếu bạn đang dùng thiết bị di động và đã cài ứng dụng xác thực, liên kết này có thể hoạt động. Lưu ý rằng sử dụng TOTP trên cùng thiết bị dùng để đăng nhập có thể làm giảm hiệu quả của MFA.';
$string['setupfactor:linklabel'] = 'Mở ứng dụng đã cài trên thiết bị này';
$string['setupfactor:mode'] = 'Chế độ:';
$string['setupfactor:mode:timebased'] = 'Dựa trên thời gian';
$string['setupfactor:scanwithapp'] = 'Quét mã QR bằng ứng dụng xác thực bạn chọn.';
$string['setupfactor:verificationcode'] = 'Mã xác minh';
$string['setupfactorbutton'] = 'Thiết lập';
$string['summarycondition'] = 'sử dụng ứng dụng TOTP';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = 'Nhập mã xác minh gồm 6 chữ số';
$string['verificationcode_help'] = 'Mở ứng dụng xác thực, chẳng hạn như Google Authenticator, rồi tìm mã gồm 6 chữ số khớp với trang web và tên người dùng này';
