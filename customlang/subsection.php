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
 * @package    mod
 * @subpackage subsection
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cleandescriptionsdetail'] = 'Các trang và mô tả của tiểu mục không còn được hỗ trợ trong Moodle 5.2.
<p>Trang này có <strong>{$a->count} mô tả tiểu mục</strong> hiện không còn hiển thị với người dùng.</p>
<p>Bạn có thể chọn:
<ul>
  <li><strong>Chuyển các mô tả này sang khu vực Văn bản và phương tiện</strong>.<br/> Các khu vực Văn bản và phương tiện sẽ hiển thị ở đầu mỗi tiểu mục.<br/>{$a->migratelink}<br/><br/>
  </li>
  <li><strong>Xóa vĩnh viễn các mô tả này</strong>.<br/> Thao tác này sẽ xóa hoàn toàn các mô tả khỏi cơ sở dữ liệu.<br/>{$a->deletelink}
  </li>
</ul>
</p>';
$string['deleteconfirmbutton'] = 'Xóa tất cả mô tả';
$string['deleteconfirmtext'] = 'Thao tác này sẽ xóa vĩnh viễn {$a} mô tả tiểu mục khỏi cơ sở dữ liệu.<br/><br/>Bạn không thể hoàn tác thao tác này. Bạn có chắc chắn muốn xóa tất cả mô tả không?';
$string['deleteconfirmtitle'] = 'Xóa tất cả mô tả tiểu mục?';
$string['deletelinktext'] = 'Xóa mô tả';
$string['descriptionsdeletedpending'] = 'Mô tả tiểu mục đang chờ xóa: <strong>{$a}</strong>';
$string['descriptionsdeletedsuccess'] = '<strong>Tác vụ xóa tất cả mô tả tiểu mục đã được tạo</strong>. Tác vụ này sẽ chạy ở chế độ nền và có thể mất vài phút.';
$string['descriptionsmigratedpending'] = 'Mô tả tiểu mục đang chờ chuyển: <strong>{$a}</strong>';
$string['descriptionsmigratedsuccess'] = '<strong>Tác vụ chuyển tất cả mô tả tiểu mục đã được tạo</strong>. Tác vụ này sẽ chạy ở chế độ nền và có thể mất vài phút.';
$string['invalidaction'] = 'Hành động được chỉ định không hợp lệ.';
$string['migrateconfirmbutton'] = 'Chuyển tất cả mô tả';
$string['migrateconfirmtext'] = 'Thao tác này sẽ chuyển {$a} mô tả tiểu mục sang các khu vực Văn bản và phương tiện.<br/><br/>Bạn không thể hoàn tác thao tác này. Bạn có chắc chắn muốn chuyển tất cả mô tả không?';
$string['migrateconfirmtitle'] = 'Chuyển tất cả mô tả tiểu mục?';
$string['migratelinktext'] = 'Chuyển mô tả';
$string['modulename'] = 'Tiểu mục';
$string['modulenameplural'] = 'Các tiểu mục';
$string['pluginadministration'] = 'Quản trị tiểu mục';
$string['pluginname'] = 'Tiểu mục';
$string['privacy:metadata'] = 'Tiểu mục không lưu trữ dữ liệu cá nhân nào';
$string['quickcreatename'] = 'Tiểu mục mới';
$string['subsection:addinstance'] = 'Thêm tiểu mục';
$string['subsection:view'] = 'Xem tiểu mục';
$string['subsectionname'] = 'Tên';
