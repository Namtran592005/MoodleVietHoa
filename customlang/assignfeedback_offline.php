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
 * @package    assignfeedback
 * @subpackage offline
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Xác nhận nhập điểm';
$string['default'] = 'Được bật theo mặc định';
$string['default_help'] = 'Nếu được chọn, tính năng chấm điểm ngoại tuyến bằng phiếu chấm sẽ được bật theo mặc định cho tất cả bài tập mới.';
$string['downloadgrades'] = 'Tải phiếu chấm xuống';
$string['enabled'] = 'Phiếu chấm ngoại tuyến';
$string['enabled_help'] = 'Nếu được bật, giáo viên có thể tải xuống và tải lên phiếu chấm điểm học viên khi chấm bài tập.';
$string['feedbackupdate'] = 'Đặt trường "{$a->field}" của "{$a->student}" thành "{$a->text}"';
$string['gradelockedingradebook'] = 'Điểm trong sổ điểm đã bị khóa đối với {$a}';
$string['graderecentlymodified'] = 'Điểm đã được sửa đổi trong Moodle gần đây hơn so với trong phiếu chấm dành cho {$a}';
$string['gradesfile'] = 'Phiếu chấm (định dạng csv)';
$string['gradesfile_help'] = 'Phiếu chấm có chứa các điểm đã sửa đổi. Tệp này phải là tệp CSV được mã hóa UTF-8, đã tải xuống từ bài tập và có các cột dành cho điểm và mã định danh của học viên.';
$string['gradeupdate'] = 'Đặt điểm của {$a->student} thành {$a->grade}';
$string['ignoremodified'] = 'Cho phép cập nhật các bản ghi được sửa đổi trong Moodle gần đây hơn so với trong bảng tính.';
$string['ignoremodified_help'] = 'Khi tải phiếu chấm xuống từ Moodle, phiếu sẽ chứa ngày sửa đổi gần nhất của từng điểm. Nếu có điểm nào được cập nhật trong Moodle sau khi tải phiếu này xuống, theo mặc định Moodle sẽ từ chối ghi đè thông tin đã cập nhật đó khi nhập điểm. Chọn tùy chọn này sẽ tắt bước kiểm tra an toàn đó; khi ấy nhiều người chấm có thể ghi đè điểm của nhau.';
$string['importgrades'] = 'Xác nhận thay đổi trong phiếu chấm';
$string['invalidgradeimport'] = 'Moodle không thể đọc phiếu đã tải lên. Hãy đảm bảo phiếu được lưu ở định dạng giá trị phân tách bằng dấu phẩy (.csv) rồi thử lại.';
$string['markupdate'] = 'Đặt điểm số của {$a->student} thành {$a->mark}';
$string['nochanges'] = 'Không tìm thấy điểm đã sửa đổi trong phiếu đã tải lên';
$string['offlinegradingworksheet'] = 'Điểm';
$string['pluginname'] = 'Phiếu chấm ngoại tuyến';
$string['privacy:nullproviderreason'] = 'Plugin này không có cơ sở dữ liệu để lưu thông tin người dùng. Plugin chỉ sử dụng các API trong mod_assign để hỗ trợ hiển thị giao diện chấm điểm.';
$string['processgrades'] = 'Nhập điểm';
$string['skiprecord'] = 'Bỏ qua bản ghi';
$string['updatedgrades'] = 'Đã cập nhật <strong>{$a->gradeupdatescount}</strong> điểm, <strong>{$a->markupdatescount}</strong> điểm số và <strong>{$a->feedbackupdatescount}</strong> mục phản hồi.';
$string['updaterecord'] = 'Cập nhật bản ghi';
$string['uploadgrades'] = 'Tải phiếu chấm lên';
