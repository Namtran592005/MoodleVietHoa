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
 * @subpackage auth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Kiểm tra loại xác thực được dùng để đăng nhập như một yếu tố MFA.';
$string['pluginname'] = 'Loại xác thực';
$string['privacy:metadata'] = 'Plugin yếu tố Loại xác thực không lưu trữ dữ liệu cá nhân.';
$string['settings:description'] = 'Tự động xác minh người dùng dựa trên loại xác thực của họ.';
$string['settings:goodauth'] = 'Các loại xác thực được chấp nhận';
$string['settings:goodauth_help'] = 'Chọn tất cả các loại xác thực sẽ nhận điểm từ yếu tố này. Các loại xác thực khác sẽ không bị xem là thất bại trong MFA, nhưng cũng không nhận được điểm trọng số của yếu tố này.';
$string['settings:shortdescription'] = 'Cho phép người dùng bỏ qua các bước xác thực bổ sung dựa trên loại xác thực của họ.';
$string['summarycondition'] = 'có loại xác thực là {$a}';
