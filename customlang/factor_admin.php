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
 * @subpackage admin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Yếu tố này cho phép tính việc không phải là quản trị viên như một yếu tố xác thực. Mục đích là đảm bảo quản trị viên phải dùng bảo mật nghiêm ngặt hơn, vì vậy người dùng thông thường được tính điểm miễn phí, còn quản trị viên phải dùng các yếu tố khác.';
$string['pluginname'] = 'Người không phải quản trị viên';
$string['privacy:metadata'] = 'Plugin yếu tố Người không phải quản trị viên không lưu trữ dữ liệu cá nhân.';
$string['settings:description'] = 'Tất cả người dùng ngoại trừ quản trị viên trang web đều nhận điểm cho yếu tố này. Điều này cho phép bạn yêu cầu quản trị viên trang web dùng thêm các yếu tố xác thực.';
$string['settings:shortdescription'] = 'Yêu cầu quản trị viên dùng thêm các yếu tố xác thực.';
$string['settings:weight_help'] = 'Người dùng thông thường được tính điểm cho yếu tố này, vì vậy quản trị viên phải có nhiều yếu tố hơn người dùng thông thường để vượt qua.';
$string['summarycondition'] = 'không phải là quản trị viên';
