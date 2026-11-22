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
 * @subpackage database
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Cấu hình các phiên bản ghi danh cơ sở dữ liệu';
$string['database:unenrol'] = 'Hủy ghi danh người dùng bị tạm ngưng';
$string['dbencoding'] = 'Mã hóa cơ sở dữ liệu';
$string['dbhost'] = 'Máy chủ cơ sở dữ liệu';
$string['dbhost_desc'] = 'Địa chỉ IP hoặc tên máy chủ cơ sở dữ liệu. Sử dụng Tên nguồn dữ liệu (DSN) của hệ thống nếu dùng Open Database Connectivity (ODBC). Sử dụng DSN của PHP Data Objects (PDO) nếu dùng PDO.';
$string['dbname'] = 'Tên cơ sở dữ liệu';
$string['dbname_desc'] = 'Để trống nếu sử dụng tên DSN trong máy chủ cơ sở dữ liệu.';
$string['dbpass'] = 'Mật khẩu cơ sở dữ liệu';
$string['dbsetupsql'] = 'Lệnh thiết lập cơ sở dữ liệu';
$string['dbsetupsql_desc'] = 'Lệnh SQL để thiết lập cơ sở dữ liệu đặc biệt, thường dùng để thiết lập mã hóa giao tiếp - ví dụ cho MySQL và PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Sử dụng dấu nháy kiểu Sybase';
$string['dbsybasequoting_desc'] = 'Thoát dấu nháy đơn theo kiểu Sybase - cần thiết cho MS SQL và một số cơ sở dữ liệu khác. Không sử dụng cho MySQL!';
$string['dbtype'] = 'Trình điều khiển cơ sở dữ liệu';
$string['dbtype_desc'] = 'Tên trình điều khiển cơ sở dữ liệu ADOdb, loại của bộ máy cơ sở dữ liệu bên ngoài.';
$string['dbuser'] = 'Người dùng cơ sở dữ liệu';
$string['debugdb'] = 'Gỡ lỗi ADOdb';
$string['debugdb_desc'] = 'Gỡ lỗi kết nối ADOdb tới cơ sở dữ liệu bên ngoài - sử dụng khi gặp trang trống trong lúc đăng nhập. Không phù hợp với các trang web đang hoạt động!';
$string['defaultcategory'] = 'Danh mục mặc định cho khóa học mới';
$string['defaultcategory_desc'] = 'Danh mục mặc định cho các khóa học được tự động tạo. Được sử dụng khi không chỉ định hoặc không tìm thấy ID danh mục mới.';
$string['defaultrole'] = 'Vai trò mặc định';
$string['defaultrole_desc'] = 'Vai trò sẽ được gán theo mặc định nếu bảng bên ngoài không chỉ định vai trò khác.';
$string['ignorehiddencourses'] = 'Bỏ qua các khóa học bị ẩn';
$string['ignorehiddencourses_desc'] = 'Nếu bật, người dùng sẽ không được ghi danh vào các khóa học được đặt là không khả dụng với học viên.';
$string['localcategoryfield'] = 'Trường danh mục cục bộ';
$string['localcoursefield'] = 'Trường khóa học cục bộ';
$string['localrolefield'] = 'Trường vai trò cục bộ';
$string['localuserfield'] = 'Trường người dùng cục bộ';
$string['newcoursecategory'] = 'Trường danh mục khóa học mới';
$string['newcourseenddate'] = 'Trường ngày kết thúc khóa học mới';
$string['newcourseenddate_desc'] = 'Chỉ định ngày theo định dạng yyyy-mm-dd hoặc thời gian Unix, hoặc để trống để ngày kết thúc khóa học được tính theo thời lượng khóa học đã cấu hình.';
$string['newcoursefullname'] = 'Trường tên đầy đủ khóa học mới';
$string['newcourseidnumber'] = 'Trường mã số khóa học mới';
$string['newcourseshortname'] = 'Trường tên ngắn khóa học mới';
$string['newcoursestartdate'] = 'Trường ngày bắt đầu khóa học mới';
$string['newcoursestartdate_desc'] = 'Chỉ định ngày theo định dạng yyyy-mm-dd hoặc thời gian Unix, hoặc để trống để ngày bắt đầu khóa học được đặt thành ngày hiện tại.';
$string['newcoursetable'] = 'Bảng khóa học mới từ xa';
$string['newcoursetable_desc'] = 'Chỉ định tên bảng chứa danh sách các khóa học cần được tạo tự động. Để trống nếu không tạo khóa học nào.';
$string['pluginname'] = 'Cơ sở dữ liệu bên ngoài';
$string['pluginname_desc'] = 'Bạn có thể sử dụng cơ sở dữ liệu bên ngoài (gần như thuộc bất kỳ loại nào) để kiểm soát việc ghi danh. Cơ sở dữ liệu bên ngoài cần có ít nhất một trường chứa ID khóa học và một trường chứa ID người dùng. Các giá trị này được đối chiếu với những trường bạn chọn trong bảng khóa học và người dùng cục bộ.';
$string['privacy:metadata'] = 'Trình bổ trợ ghi danh bằng cơ sở dữ liệu bên ngoài không lưu trữ dữ liệu cá nhân nào.';
$string['remotecoursefield'] = 'Trường khóa học từ xa';
$string['remotecoursefield_desc'] = 'Tên trường trong bảng từ xa dùng để đối chiếu các bản ghi trong bảng khóa học.';
$string['remoteenroltable'] = 'Bảng ghi danh người dùng từ xa';
$string['remoteenroltable_desc'] = 'Chỉ định tên bảng chứa danh sách ghi danh của người dùng. Để trống nếu không đồng bộ ghi danh người dùng.';
$string['remoteotheruserfield'] = 'Trường Người dùng khác từ xa';
$string['remoteotheruserfield_desc'] = 'Tên trường trong bảng từ xa dùng để đánh dấu các phân công vai trò "Người dùng khác".';
$string['remoterolefield'] = 'Trường vai trò từ xa';
$string['remoterolefield_desc'] = 'Tên trường trong bảng từ xa dùng để đối chiếu các bản ghi trong bảng vai trò.';
$string['remoteuserfield'] = 'Trường người dùng từ xa';
$string['remoteuserfield_desc'] = 'Tên trường trong bảng từ xa dùng để đối chiếu các bản ghi trong bảng người dùng.';
$string['settingsheaderdb'] = 'Kết nối cơ sở dữ liệu bên ngoài';
$string['settingsheaderlocal'] = 'Ánh xạ trường cục bộ';
$string['settingsheadernewcourses'] = 'Tạo khóa học mới';
$string['settingsheaderremote'] = 'Đồng bộ ghi danh từ xa';
$string['syncenrolmentstask'] = 'Tác vụ đồng bộ ghi danh từ cơ sở dữ liệu bên ngoài';
$string['templatecourse'] = 'Mẫu khóa học mới';
$string['templatecourse_desc'] = 'Tùy chọn: khóa học được tự động tạo có thể sao chép cài đặt từ một khóa học mẫu. Nhập tên ngắn của khóa học mẫu tại đây.';
