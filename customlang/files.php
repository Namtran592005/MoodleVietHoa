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
 * @package    core
 * @subpackage files
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Giá trị băm nội dung';
$string['eventfileaddedtodraftarea'] = 'Đã thêm tệp vào vùng nháp';
$string['eventfiledeletedfromdraftarea'] = 'Đã xóa tệp khỏi vùng nháp';
$string['privacy:metadata:core_userkey'] = 'Một token riêng tư được tạo và lưu trữ. Token này có thể dùng để truy cập các tệp Moodle mà không cần đăng nhập.';
$string['privacy:metadata:file_conversion:usermodified'] = 'Người dùng đã bắt đầu chuyển đổi tệp.';
$string['privacy:metadata:file_conversions'] = 'Bản ghi các thao tác chuyển đổi tệp do người dùng thực hiện.';
$string['privacy:metadata:files'] = 'Bản ghi các tệp do người dùng tải lên hoặc chia sẻ';
$string['privacy:metadata:files:author'] = 'Tác giả nội dung của tệp';
$string['privacy:metadata:files:contenthash'] = 'Giá trị băm nội dung của tệp';
$string['privacy:metadata:files:filename'] = 'Tên tệp trong vùng tệp của tệp';
$string['privacy:metadata:files:filepath'] = 'Đường dẫn đến tệp trong vùng tệp của tệp';
$string['privacy:metadata:files:filesize'] = 'Dung lượng tệp';
$string['privacy:metadata:files:license'] = 'Giấy phép của nội dung tệp';
$string['privacy:metadata:files:mimetype'] = 'Loại MIME của tệp';
$string['privacy:metadata:files:source'] = 'Nguồn của tệp';
$string['privacy:metadata:files:timecreated'] = 'Thời điểm tạo tệp';
$string['privacy:metadata:files:timemodified'] = 'Thời điểm sửa đổi tệp lần cuối';
$string['privacy:metadata:files:userid'] = 'Người dùng đã tạo tệp';
$string['redactor'] = 'Biên tập tệp';
$string['redactor:exifremover'] = 'Công cụ xóa EXIF';
$string['redactor:exifremover:emptyremovetags'] = 'Danh sách thẻ cần xóa không được để trống!';
$string['redactor:exifremover:enabled'] = 'Bật công cụ xóa EXIF';
$string['redactor:exifremover:enabled_desc'] = 'Theo mặc định, công cụ xóa EXIF chỉ hỗ trợ tệp JPG bằng PHP GD hoặc ExifTool nếu được cấu hình.
Việc sử dụng PHP GD cho mục đích này có thể làm giảm chất lượng hình ảnh.

Để cải thiện hiệu suất của công cụ xóa EXIF, vui lòng cấu hình các thiết lập ExifTool bên dưới.

Bạn có thể tìm thêm thông tin về cách cài đặt ExifTool tại {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Không thể biên tập: xử lý tệp bằng ExifTool thất bại!';
$string['redactor:exifremover:failedprocessgd'] = 'Không thể biên tập: xử lý tệp bằng PHP gd thất bại!';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'Các loại MIME được hỗ trợ';
$string['redactor:exifremover:mimetype_desc'] = 'Để thêm loại MIME mới, hãy đảm bảo chúng có trong <a href="./tool/filetypes/index.php">Các loại tệp</a>.';
$string['redactor:exifremover:removetags'] = 'Các thẻ EXIF cần xóa';
$string['redactor:exifremover:removetags_desc'] = 'Các thẻ EXIF cần được xóa.';
$string['redactor:exifremover:tag:all'] = 'Tất cả';
$string['redactor:exifremover:tag:gps'] = 'Chỉ GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Không thể biên tập: không tìm thấy ExifTool!';
$string['redactor:exifremover:toolpath'] = 'Đường dẫn đến ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'Để sử dụng ExifTool, vui lòng cung cấp đường dẫn đến tệp thực thi ExifTool.
Thông thường, trên hệ thống Unix/Linux, đường dẫn là /usr/bin/exiftool.';
