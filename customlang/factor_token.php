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
 * @subpackage token
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'Đã tạo token MFA.';
$string['form:trust'] = 'Tin cậy thiết bị này trong {$a}.';
$string['pluginname'] = 'Tin cậy thiết bị này';
$string['privacy:metadata'] = 'Plugin yếu tố Tin cậy thiết bị này không lưu trữ dữ liệu cá nhân.';
$string['settings:description'] = 'Cho phép người dùng bỏ qua bước xác thực bổ sung trên các thiết bị được đánh dấu là đáng tin cậy sau lần xác thực đầu tiên.';
$string['settings:expireovernight'] = 'Hết hạn tin cậy qua đêm';
$string['settings:expireovernight_help'] = 'Cài đặt này buộc token hết hạn qua đêm, tránh làm gián đoạn người dùng vào giữa ngày. Thay vào đó, sau khi token hết hạn, người dùng sẽ được yêu cầu xác thực đa yếu tố vào đầu ngày.';
$string['settings:expiry'] = 'Thời hạn tin cậy';
$string['settings:expiry_help'] = 'Khoảng thời gian thiết bị được tin cậy trước khi yêu cầu xác thực đa yếu tố mới.';
$string['settings:shortdescription'] = 'Cho phép người dùng bỏ qua xác thực trên các thiết bị được đánh dấu là đáng tin cậy. Cần kết hợp với các yếu tố khác.';
$string['summarycondition'] = 'người dùng đã từng tin cậy thiết bị này';
$string['tokenstoredindevice'] = 'Người dùng có ID {$a->userid} có token xác thực đa yếu tố được lưu trên thiết bị. <br> Thông tin: {$a->string}.';
