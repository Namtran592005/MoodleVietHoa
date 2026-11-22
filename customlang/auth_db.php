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
 * @package    auth
 * @subpackage db
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Không thể kết nối với cơ sở dữ liệu bên ngoài.';
$string['auth_dbcannotreadtable'] = 'Không thể đọc bảng bên ngoài.';
$string['auth_dbcantconnect'] = 'Không thể kết nối với cơ sở dữ liệu xác thực đã chỉ định...';
$string['auth_dbchangepasswordurl_key'] = 'URL đổi mật khẩu';
$string['auth_dbcolumnlist'] = 'Bảng bên ngoài chứa các cột sau:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Gỡ lỗi ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Gỡ lỗi kết nối ADOdb với cơ sở dữ liệu bên ngoài — sử dụng khi gặp trang trống trong lúc đăng nhập. Không phù hợp với các trang đang hoạt động thực tế.';
$string['auth_dbdeleteuser'] = 'Đã xóa người dùng {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Lỗi khi xóa người dùng {$a}';
$string['auth_dbdescription'] = 'Phương thức này sử dụng một bảng cơ sở dữ liệu bên ngoài để kiểm tra tên đăng nhập và mật khẩu đã cho có hợp lệ hay không. Nếu tài khoản là tài khoản mới, thông tin từ các trường khác cũng có thể được sao chép vào Moodle.';
$string['auth_dbextencoding'] = 'Mã hóa cơ sở dữ liệu bên ngoài';
$string['auth_dbextencodinghelp'] = 'Mã hóa được sử dụng trong cơ sở dữ liệu bên ngoài';
$string['auth_dbextrafields'] = 'Các trường này không bắt buộc. Bạn có thể chọn điền trước một số trường người dùng Moodle bằng thông tin từ <b>các trường cơ sở dữ liệu bên ngoài</b> mà bạn chỉ định tại đây. <p>Nếu để trống, các giá trị mặc định sẽ được sử dụng.</p><p>Dù trong trường hợp nào, người dùng vẫn có thể chỉnh sửa tất cả các trường này sau khi đăng nhập.</p>';
$string['auth_dbfieldpass'] = 'Tên trường chứa mật khẩu';
$string['auth_dbfieldpass_key'] = 'Trường mật khẩu';
$string['auth_dbfielduser'] = 'Tên trường chứa tên đăng nhập. Trường này phải có kiểu dữ liệu varchar.';
$string['auth_dbfielduser_key'] = 'Trường tên đăng nhập';
$string['auth_dbhost'] = 'Máy tính lưu trữ máy chủ cơ sở dữ liệu. Nếu sử dụng Open Database Connectivity (ODBC), hãy dùng mục Data Source Name (DSN) của hệ thống. Nếu sử dụng PDO, hãy dùng mục DSN của PHP Data Objects (PDO).';
$string['auth_dbhost_key'] = 'Máy chủ';
$string['auth_dbinsertuser'] = 'Đã thêm người dùng {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Lỗi khi thêm người dùng {$a->username} - người dùng có tên đăng nhập này đã được tạo bằng plugin \'{$a->auth}\'.';
$string['auth_dbinsertusererror'] = 'Lỗi khi thêm người dùng {$a}';
$string['auth_dbname'] = 'Tên của chính cơ sở dữ liệu. Để trống nếu sử dụng ODBC DSN. Để trống nếu PDO DSN đã chứa tên cơ sở dữ liệu.';
$string['auth_dbname_key'] = 'Tên cơ sở dữ liệu';
$string['auth_dbnoexttable'] = 'Chưa chỉ định bảng bên ngoài.';
$string['auth_dbnouserfield'] = 'Chưa chỉ định trường người dùng bên ngoài.';
$string['auth_dbpass'] = 'Mật khẩu tương ứng với tên đăng nhập ở trên';
$string['auth_dbpass_key'] = 'Mật khẩu';
$string['auth_dbpasstype'] = '<p>Chỉ định định dạng được sử dụng cho trường mật khẩu.</p> <p>Chọn \'internal\' nếu bạn muốn cơ sở dữ liệu bên ngoài quản lý tên đăng nhập và địa chỉ email, còn Moodle quản lý mật khẩu. Nếu chọn \'internal\', bạn phải cung cấp trường địa chỉ email có dữ liệu trong cơ sở dữ liệu bên ngoài và bật tác vụ đã lên lịch \\auth_db\\task\\sync_users. Moodle sẽ gửi email cho người dùng mới cùng mật khẩu tạm thời.</p>';
$string['auth_dbpasstype_key'] = 'Định dạng mật khẩu';
$string['auth_dbreviveduser'] = 'Đã khôi phục người dùng {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Lỗi khi khôi phục người dùng {$a}';
$string['auth_dbsaltedcrypt'] = 'Băm chuỗi một chiều bằng Crypt';
$string['auth_dbsetupsql'] = 'Lệnh thiết lập SQL';
$string['auth_dbsetupsqlhelp'] = 'Lệnh SQL để thiết lập cơ sở dữ liệu đặc biệt, thường dùng để thiết lập mã hóa giao tiếp — ví dụ cho MySQL và PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Đã tạm khóa người dùng {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Lỗi khi tạm khóa người dùng {$a}';
$string['auth_dbsybasequoting'] = 'Sử dụng dấu nháy kiểu Sybase';
$string['auth_dbsybasequotinghelp'] = 'Thoát dấu nháy đơn theo kiểu Sybase — cần thiết cho MS SQL và một số cơ sở dữ liệu khác. Không sử dụng cho MySQL!';
$string['auth_dbsyncuserstask'] = 'Tác vụ đồng bộ người dùng';
$string['auth_dbtable'] = 'Tên bảng trong cơ sở dữ liệu';
$string['auth_dbtable_key'] = 'Bảng';
$string['auth_dbtableempty'] = 'Bảng bên ngoài trống.';
$string['auth_dbtype'] = 'Loại cơ sở dữ liệu (xem tài liệu <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer for PHP</a> để biết chi tiết).';
$string['auth_dbtype_key'] = 'Cơ sở dữ liệu';
$string['auth_dbupdateerror'] = 'Lỗi khi cập nhật cơ sở dữ liệu bên ngoài.';
$string['auth_dbupdateusers'] = 'Cập nhật người dùng';
$string['auth_dbupdateusers_description'] = 'Ngoài việc thêm người dùng mới, hãy cập nhật cả người dùng hiện có.';
$string['auth_dbupdatinguser'] = 'Đang cập nhật người dùng {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Tên đăng nhập có quyền đọc cơ sở dữ liệu';
$string['auth_dbuser_key'] = 'Người dùng cơ sở dữ liệu';
$string['auth_dbuserstoadd'] = 'Các mục người dùng cần thêm: {$a}';
$string['auth_dbuserstoremove'] = 'Các mục người dùng cần xóa: {$a}';
$string['pluginname'] = 'Cơ sở dữ liệu bên ngoài';
$string['privacy:metadata'] = 'Plugin xác thực bằng cơ sở dữ liệu bên ngoài không lưu trữ bất kỳ dữ liệu cá nhân nào.';
