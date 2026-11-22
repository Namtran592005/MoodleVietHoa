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
 * @package    tool
 * @subpackage lpmigrate
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Các khóa học được phép';
$string['allowedcourses_help'] = 'Chọn các khóa học cần chuyển sang khung mới. Nếu không chỉ định khóa học nào, tất cả khóa học sẽ được chuyển.';
$string['continuetoframeworks'] = 'Tiếp tục đến các khung';
$string['coursecompetencymigrations'] = 'Chuyển đổi năng lực khóa học';
$string['coursemodulecompetencymigrations'] = 'Chuyển đổi năng lực của hoạt động và tài nguyên trong khóa học';
$string['coursemodulesfound'] = 'Các hoạt động hoặc tài nguyên trong khóa học được tìm thấy';
$string['coursesfound'] = 'Các khóa học được tìm thấy';
$string['coursestartdate'] = 'Ngày bắt đầu khóa học';
$string['coursestartdate_help'] = 'Nếu bật, các khóa học có ngày bắt đầu trước ngày đã chỉ định sẽ không được chuyển đổi.';
$string['disallowedcourses'] = 'Các khóa học không được phép';
$string['disallowedcourses_help'] = 'Chọn các khóa học KHÔNG nên được chuyển sang khung mới.';
$string['errorcannotmigratetosameframework'] = 'Không thể chuyển đổi từ và sang cùng một khung.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Không thể ánh xạ đến bất kỳ năng lực nào trong khung này.';
$string['errors'] = 'Lỗi';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Đã xảy ra lỗi khi chuyển đổi năng lực khóa học: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Đã xảy ra lỗi khi chuyển đổi năng lực hoạt động hoặc tài nguyên: {$a}';
$string['excludethese'] = 'Loại trừ các mục này';
$string['explanation'] = 'Công cụ này có thể được dùng để cập nhật khung năng lực lên phiên bản mới hơn. Công cụ tìm các năng lực trong khóa học và hoạt động đang sử dụng khung cũ, rồi cập nhật liên kết để trỏ đến khung mới.

Không nên chỉnh sửa trực tiếp bộ năng lực cũ, vì việc này sẽ làm thay đổi tất cả năng lực đã được ghi nhận trong kế hoạch học tập của người dùng.

Thông thường, bạn sẽ nhập phiên bản mới của khung, ẩn khung cũ, sau đó dùng công cụ này để chuyển các khóa học sang khung mới.';
$string['findingcoursecompetencies'] = 'Đang tìm năng lực khóa học';
$string['findingmodulecompetencies'] = 'Đang tìm năng lực của hoạt động và tài nguyên';
$string['frameworks'] = 'Các khung';
$string['limittothese'] = 'Chỉ giới hạn ở các mục này';
$string['lpmigrate:frameworksmigrate'] = 'Di chuyển khung';
$string['migrateframeworks'] = 'Di chuyển khung';
$string['migratefrom'] = 'Chuyển từ';
$string['migratefrom_help'] = 'Chọn khung cũ hiện đang được sử dụng.';
$string['migratemore'] = 'Chuyển đổi thêm';
$string['migrateto'] = 'Chuyển sang';
$string['migrateto_help'] = 'Chọn phiên bản mới hơn của khung. Chỉ có thể chọn khung không bị ẩn.';
$string['migratingcourses'] = 'Đang chuyển đổi khóa học';
$string['missingmappings'] = 'Các ánh xạ còn thiếu';
$string['performmigration'] = 'Thực hiện chuyển đổi';
$string['pluginname'] = 'Công cụ chuyển đổi năng lực';
$string['privacy:metadata'] = 'Plugin Công cụ chuyển đổi năng lực không lưu trữ dữ liệu cá nhân nào.';
$string['results'] = 'Kết quả';
$string['startdatefrom'] = 'Ngày bắt đầu từ';
$string['unmappedin'] = 'Chưa được ánh xạ trong {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Không thể xóa năng lực khóa học.';
$string['warningcouldnotremovemodulecompetency'] = 'Không thể xóa năng lực của hoạt động hoặc tài nguyên.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Năng lực khóa học đích đã tồn tại.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Năng lực của hoạt động hoặc tài nguyên đích đã tồn tại.';
$string['warnings'] = 'Cảnh báo';
