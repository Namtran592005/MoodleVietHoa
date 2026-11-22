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
 * @subpackage webauthn
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Quản lý khóa bảo mật';
$string['action:revoke'] = 'Xóa khóa bảo mật';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Kết hợp';
$string['authenticator:internal'] = 'Nội bộ';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Tên khóa bảo mật';
$string['error'] = 'Xác thực không thành công';
$string['error:alreadyregistered'] = 'Bí mật của khóa bảo mật này đã được đăng ký.';
$string['info'] = 'Sử dụng khóa bảo mật vật lý hoặc máy quét dấu vân tay.';
$string['logindesc'] = 'Để bảo vệ tài khoản, chúng tôi cần xác minh đúng là bạn. Nhấp vào tiếp tục để sử dụng khóa bảo mật.';
$string['loginoption'] = 'Xác minh bằng khóa bảo mật';
$string['loginskip'] = 'Tôi không có khóa bảo mật';
$string['loginsubmit'] = 'Tiếp tục';
$string['logintitle'] = 'Xác minh bạn là chính chủ bằng khóa bảo mật';
$string['managefactor'] = 'Quản lý khóa bảo mật';
$string['managefactorbutton'] = 'Quản lý';
$string['manageinfo'] = 'Bạn đang sử dụng \'{$a}\' để xác thực.';
$string['pluginname'] = 'Khóa bảo mật';
$string['privacy:metadata'] = 'Plugin yếu tố Khóa bảo mật không lưu trữ dữ liệu cá nhân.';
$string['register'] = 'Đăng ký khóa bảo mật';
$string['registererror'] = 'Không thể đăng ký khóa bảo mật: {$a}';
$string['registersuccess'] = 'Đã đăng ký khóa bảo mật.';
$string['replacefactor'] = 'Thay thế khóa bảo mật';
$string['replacefactorconfirmation'] = 'Thay thế khóa bảo mật \'{$a}\'?';
$string['revokefactorconfirmation'] = 'Xóa khóa bảo mật \'{$a}\'?';
$string['settings:authenticatortypes'] = 'Các loại bộ xác thực';
$string['settings:authenticatortypes_help'] = 'Bật hoặc tắt một số loại bộ xác thực';
$string['settings:description'] = '<p>Người dùng xác thực bằng khóa bảo mật vật lý, chẳng hạn như token USB hoặc NFC, hoặc bằng phương thức sinh trắc học như dấu vân tay. Khi đăng nhập, họ phải sử dụng khóa bảo mật vật lý để xác minh danh tính.</p>
<p>Trước tiên, người dùng cần tự thiết lập khóa bảo mật.</p>';
$string['settings:shortdescription'] = 'Yêu cầu người dùng sử dụng khóa bảo mật, chẳng hạn như token USB hoặc NFC, hoặc phương thức sinh trắc học khi đăng nhập.';
$string['settings:userverification'] = 'Xác minh người dùng';
$string['settings:userverification_help'] = 'Đảm bảo người đang xác thực đúng là người mà họ tự nhận. Xác minh người dùng có thể được thực hiện bằng nhiều cách, chẳng hạn như mật khẩu, mã PIN, dấu vân tay, v.v.';
$string['setupfactor'] = 'Thiết lập khóa bảo mật';
$string['setupfactor:instructionsregistersecuritykey'] = '2. Đăng ký khóa bảo mật.';
$string['setupfactor:instructionssecuritykeyname'] = '1. Đặt tên cho khóa của bạn.';
$string['setupfactor:intro'] = 'Khóa bảo mật là thiết bị vật lý mà bạn có thể dùng để xác thực danh tính. Khóa bảo mật có thể là token USB, thiết bị Bluetooth hoặc thậm chí là máy quét dấu vân tay được tích hợp trong điện thoại hay máy tính.';
$string['setupfactor:securitykeyinfo'] = 'Thông tin này giúp bạn xác định khóa bảo mật đang sử dụng.';
$string['setupfactorbutton'] = 'Thiết lập';
$string['setupfactorbuttonadditional'] = 'Thêm khóa bảo mật';
$string['summarycondition'] = 'sử dụng bộ xác thực hỗ trợ WebAuthn';
$string['userverification:discouraged'] = 'Không nên sử dụng xác minh người dùng, ví dụ để giảm thiểu tương tác của người dùng';
$string['userverification:preferred'] = 'Nên sử dụng xác minh người dùng; xác thực sẽ không thất bại nếu thiếu xác minh người dùng';
$string['userverification:required'] = 'Bắt buộc xác minh người dùng (ví dụ bằng mã PIN). Xác thực sẽ thất bại nếu khóa không hỗ trợ xác minh người dùng';
