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
 * @subpackage guest
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowguests'] = 'Khóa học này cho phép khách truy cập';
$string['guest:config'] = 'Cấu hình các phiên bản truy cập khách';
$string['guestaccess_withoutpassword'] = 'Truy cập khách';
$string['guestaccess_withpassword'] = 'Truy cập khách cần mật khẩu';
$string['password'] = 'Mật khẩu';
$string['password_help'] = 'Mật khẩu giúp giới hạn quyền truy cập khóa học của khách chỉ dành cho những người biết mật khẩu. Khách sẽ phải nhập mật khẩu mỗi lần truy cập khóa học.';
$string['passwordinvalid'] = 'Mật khẩu truy cập không đúng, vui lòng thử lại';
$string['passwordinvalidhint'] = 'Mật khẩu truy cập không đúng, vui lòng thử lại<br />
(Gợi ý: mật khẩu bắt đầu bằng \'{$a}\')';
$string['passwordrequired'] = 'Cần có mật khẩu.';
$string['pluginname'] = 'Truy cập khách';
$string['pluginname_desc'] = 'Trình bổ trợ truy cập khách chỉ cấp quyền truy cập tạm thời vào khóa học, chứ không thực sự ghi danh người dùng.';
$string['privacy:metadata'] = 'Trình bổ trợ ghi danh truy cập khách không lưu trữ dữ liệu cá nhân nào.';
$string['requirepassword'] = 'Yêu cầu mật khẩu truy cập khách';
$string['requirepassword_desc'] = 'Yêu cầu mật khẩu truy cập trong các khóa học mới và ngăn việc xóa mật khẩu truy cập khỏi các khóa học hiện có.';
$string['showhint'] = 'Hiển thị gợi ý';
$string['showhint_desc'] = 'Hiển thị chữ cái đầu tiên của mật khẩu truy cập khách.';
$string['status'] = 'Cho phép truy cập khách';
$string['status_desc'] = 'Mặc định cho phép truy cập khách tạm thời.';
$string['status_help'] = 'Cài đặt này xác định liệu người dùng có thể truy cập khóa học với tư cách khách mà không cần ghi danh hay không.';
$string['status_link'] = 'enrol/guest';
$string['usepasswordpolicy'] = 'Sử dụng chính sách mật khẩu';
$string['usepasswordpolicy_desc'] = 'Sử dụng chính sách mật khẩu tiêu chuẩn cho mật khẩu truy cập khách.';
