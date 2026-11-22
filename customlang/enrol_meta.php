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
 * @package    enrol
 * @subpackage meta
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Thêm vào nhóm';
$string['coursesort'] = 'Thứ tự danh sách khóa học nguồn';
$string['coursesort_help'] = 'Khi liên kết khóa học nguồn với khóa học đích, cần sắp xếp các khóa học nguồn theo thứ tự nào?';
$string['creategroup'] = 'Tạo nhóm mới';
$string['defaultgroupnametext'] = 'Khóa học {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'Tác vụ đồng bộ ghi danh meta';
$string['linkedcourse'] = 'Liên kết khóa học';
$string['meta:config'] = 'Cấu hình các phiên bản ghi danh meta';
$string['meta:selectaslinked'] = 'Chọn khóa học làm khóa học liên kết meta';
$string['meta:unenrol'] = 'Hủy ghi danh người dùng bị đình chỉ';
$string['nosyncroleids'] = 'Các vai trò không được đồng bộ';
$string['nosyncroleids_desc'] = 'Chọn các vai trò không nên được đồng bộ từ khóa học nguồn sang khóa học đích.';
$string['pluginname'] = 'Liên kết meta khóa học';
$string['pluginname_desc'] = 'Liên kết meta khóa học đồng bộ lượt ghi danh và vai trò từ khóa học nguồn sang khóa học đích.';
$string['privacy:metadata:core_group'] = 'Plugin ghi danh liên kết meta khóa học có thể tạo nhóm mới hoặc sử dụng nhóm hiện có để thêm người tham gia từ khóa học nguồn.';
$string['samemetacourse'] = 'Bạn không thể thêm liên kết meta vào cùng một khóa học.';
$string['syncall'] = 'Đồng bộ tất cả người dùng đã ghi danh';
$string['syncall_desc'] = 'Nếu bật, tất cả người dùng đã ghi danh sẽ được đồng bộ từ khóa học nguồn, ngay cả khi họ không có vai trò trong khóa học đó. Nếu không, chỉ những người dùng có ít nhất một vai trò mới được ghi danh vào khóa học đích.';
$string['unknownmetacourse'] = 'Không rõ tên ngắn của khóa học meta';
$string['wscannotcreategroup'] = 'Không có quyền tạo nhóm trong khóa học được liên kết có id = {$a}.';
$string['wsinvalidcourse'] = 'ID khóa học = {$a} không tồn tại hoặc bạn không có quyền thêm liên kết meta khóa học.';
$string['wsinvalidmetacourse'] = 'ID khóa học meta = {$a} không tồn tại hoặc bạn không có quyền thêm phiên bản ghi danh.';
$string['wsnoinstancesspecified'] = 'Chưa chỉ định phiên bản nào';
