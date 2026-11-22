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
 * @subpackage capability
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = 'Phải dùng yếu tố khác trong MFA để xác thực';
$string['pluginname'] = 'Quyền năng lực người dùng';
$string['privacy:metadata'] = 'Plugin yếu tố Quyền năng lực người dùng không lưu trữ dữ liệu cá nhân.';
$string['settings:adminpasses'] = 'Quản trị viên trang web có thể vượt qua yếu tố này';
$string['settings:adminpasses_help'] = 'Theo mặc định, quản trị viên vượt qua mọi kiểm tra quyền năng lực, bao gồm cả kiểm tra này sử dụng \'factor/capability:cannotpassfactor\', điều đó có nghĩa là họ sẽ không vượt qua yếu tố này.
    Nếu chọn, tất cả quản trị viên trang web sẽ vượt qua yếu tố này nếu họ không có quyền năng lực này từ vai trò khác.
    Nếu bỏ chọn, quản trị viên trang web sẽ không vượt qua yếu tố này.';
$string['settings:description'] = '<p>Dùng quyền năng lực factor/capability:cannotpassfactor để chỉ định người dùng nào phải dùng yếu tố khác để xác thực.</p>
<p>Cấp quyền năng lực này cho các vai trò đã chọn trong <a href="roles/manage.php">Xác định vai trò</a>.</p>';
$string['settings:shortdescription'] = 'Chỉ định người dùng nào phải dùng các yếu tố khác để xác thực. Phải kết hợp với các yếu tố khác.';
$string['summarycondition'] = 'KHÔNG có quyền năng lực \'factor/capability:cannotpassfactor\' trong bất kỳ vai trò nào, kể cả quản trị viên trang web.';
