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
 * @subpackage iprange
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'Hiện tại sẽ không có ai vượt qua yếu tố này! Bạn có thể thêm địa chỉ IP của mình (<i>{$a->ip}</i>)';
$string['allowedipshasmyip'] = 'IP của bạn (<i>{$a->ip}</i>) nằm trong danh sách và bạn sẽ vượt qua yếu tố này.';
$string['allowedipshasntmyip'] = 'IP của bạn (<i>{$a->ip}</i>) không nằm trong danh sách và bạn sẽ không vượt qua yếu tố này.';
$string['pluginname'] = 'Dải IP';
$string['privacy:metadata'] = 'Plugin yếu tố Dải IP không lưu trữ dữ liệu cá nhân.';
$string['settings:description'] = 'Bật tính năng xác minh người dùng tự động bằng địa chỉ IP. Tính năng này không cần người dùng thiết lập và có thể cung cấp trải nghiệm đăng nhập liền mạch, an toàn trên các mạng đáng tin cậy.';
$string['settings:safeips'] = 'Dải IP an toàn';
$string['settings:safeips_help'] = 'Nhập danh sách địa chỉ IP hoặc mạng con được tính là vượt qua yếu tố này. Nếu để trống, sẽ không ai vượt qua được yếu tố này. {$a->info} {$a->syntax}';
$string['settings:shortdescription'] = 'Dùng địa chỉ IP để tự động xác minh danh tính người dùng.';
$string['summarycondition'] = 'đang dùng mạng an toàn';
