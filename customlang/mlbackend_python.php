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
 * @package    mlbackend
 * @subpackage python
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Cấu hình máy chủ chưa hoàn tất.';
$string['errorserver'] = 'Lỗi máy chủ {$a}';
$string['host'] = 'Máy chủ';
$string['hostdesc'] = 'Máy chủ';
$string['packageinstalledshouldbe'] = 'Cần cập nhật gói Python moodlemlbackend. Phiên bản bắt buộc là "{$a->required}" và phiên bản đã cài đặt là "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'Gói Python moodlemlbackend không tương thích với phiên bản Moodle này. Phiên bản bắt buộc là "{$a->required}" trở lên, miễn là tương thích API. Phiên bản đã cài đặt "{$a->installed}" quá cao.';
$string['password'] = 'Mật khẩu';
$string['passworddesc'] = 'Chuỗi ký tự được dùng làm mật khẩu để giao tiếp giữa máy chủ Moodle và máy chủ Python.';
$string['pluginname'] = 'Backend học máy Python';
$string['port'] = 'Cổng';
$string['portdesc'] = 'Cổng';
$string['privacy:metadata'] = 'Plugin backend học máy Python không lưu trữ dữ liệu cá nhân.';
$string['pythonpackagenotinstalled'] = 'Gói Python moodlemlbackend chưa được cài đặt hoặc đang gặp sự cố. Vui lòng chạy "{$a}" từ giao diện dòng lệnh để biết thêm thông tin.';
$string['pythonpathnotdefined'] = 'Chưa xác định đường dẫn đến tệp thực thi Python. Vui lòng truy cập "{$a}" để thiết lập.';
$string['secure'] = 'Sử dụng HTTPS';
$string['securedesc'] = 'Có sử dụng HTTP hay HTTPS.';
$string['serversettingsinfo'] = 'Nếu bật \'Sử dụng máy chủ\', các cài đặt máy chủ sẽ được hiển thị.';
$string['tensorboardinfo'] = 'Khởi chạy TensorBoard từ dòng lệnh bằng cách nhập tensorboard --logdir=\'{$a}\' trên máy chủ web.';
$string['username'] = 'Tên người dùng';
$string['usernamedesc'] = 'Chuỗi ký tự được dùng làm tên người dùng để giao tiếp giữa máy chủ Moodle và máy chủ Python.';
$string['useserver'] = 'Sử dụng máy chủ';
$string['useserverdesc'] = 'Gói backend học máy Python chưa được cài đặt trên máy chủ web mà được cài đặt trên một máy chủ khác.';
