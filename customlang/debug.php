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
 * @subpackage debug
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Không tìm thấy plugin xác thực {$a}.';
$string['blocknotexist'] = 'Khối {$a} không tồn tại';
$string['cannotbenull'] = '{$a} không thể là null!';
$string['cannotdowngrade'] = 'Không thể hạ cấp {$a->plugin} từ {$a->oldversion} xuống {$a->newversion}.';
$string['cannotfindadmin'] = 'Không tìm thấy người dùng quản trị viên!';
$string['cannotinitpage'] = 'Không thể khởi tạo đầy đủ trang: id {$a->name} không hợp lệ {$a->id}';
$string['cannotsetuptable'] = 'KHÔNG thể thiết lập thành công các bảng {$a}!';
$string['codingerror'] = 'Phát hiện lỗi lập trình, lập trình viên cần khắc phục: {$a}';
$string['configmoodle'] = 'Moodle chưa được cấu hình. Trước tiên, bạn cần chỉnh sửa config.php.';
$string['debuginfo'] = 'Thông tin gỡ lỗi';
$string['erroroccur'] = 'Đã xảy ra lỗi trong quá trình này';
$string['invalidarraysize'] = 'Kích thước mảng trong tham số của {$a} không chính xác';
$string['invalideventdata'] = 'Dữ liệu sự kiện được gửi không chính xác: {$a}';
$string['invalidparameter'] = 'Phát hiện giá trị tham số không hợp lệ';
$string['invalidresponse'] = 'Phát hiện giá trị phản hồi không hợp lệ';
$string['line'] = 'Dòng';
$string['missingconfigversion'] = 'Bảng Config không chứa phiên bản. Bạn không thể tiếp tục.';
$string['modulenotexist'] = 'Mô-đun {$a} không tồn tại';
$string['morethanonerecordinfetch'] = 'Tìm thấy nhiều hơn một bản ghi trong fetch() !';
$string['mustbeoveride'] = 'Phương thức trừu tượng {$a} phải được ghi đè.';
$string['noadminrole'] = 'Không tìm thấy vai trò quản trị viên';
$string['noblocks'] = 'Chưa cài đặt khối nào!';
$string['nocate'] = 'Không có danh mục nào!';
$string['nomodules'] = 'Không tìm thấy mô-đun nào!!';
$string['nopageclass'] = 'Đã nhập {$a} nhưng không tìm thấy lớp trang nào';
$string['noreports'] = 'Không có báo cáo nào có thể truy cập';
$string['notables'] = 'Không có bảng nào!';
$string['outputbuffer'] = 'Bộ đệm đầu ra';
$string['phpvaroff'] = 'Biến máy chủ PHP \'{$a->name}\' phải được đặt thành Off - {$a->link}';
$string['phpvaron'] = 'Biến máy chủ PHP \'{$a->name}\' chưa được bật - {$a->link}';
$string['reactive_highlightoff'] = 'Tắt tô sáng';
$string['reactive_highlighton'] = 'Bật tô sáng';
$string['reactive_instances'] = 'Các phiên bản phản ứng:';
$string['reactive_noinstances'] = 'Trang này không có phiên bản phản ứng nào.';
$string['reactive_pin'] = 'Ghim';
$string['reactive_readmodeoff'] = 'Tắt chế độ đọc';
$string['reactive_readmodeon'] = 'Bật chế độ đọc';
$string['reactive_resetpanel'] = 'Đặt lại bảng';
$string['reactive_saveingwarning'] = 'Cảnh báo: Chỉnh sửa trạng thái có thể gây ra kết quả không mong muốn.';
$string['reactive_statedata'] = 'Dữ liệu trạng thái';
$string['reactive_unpin'] = 'Bỏ ghim';
$string['sessionmissing'] = 'Thiếu đối tượng {$a} trong phiên';
$string['sqlrelyonobsoletetable'] = 'SQL này phụ thuộc vào (các) bảng đã lỗi thời: {$a}! Nhà phát triển cần sửa mã.';
$string['stacktrace'] = 'Dấu vết ngăn xếp';
$string['withoutversion'] = 'Tệp version.php chính bị thiếu, không thể đọc hoặc bị hỏng.';
$string['xmlizeunavailable'] = 'Các hàm xmlize không khả dụng';
