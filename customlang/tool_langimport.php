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
 * @subpackage langimport
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Không thể kết nối với máy chủ tải xuống. Không thể tự động cài đặt hoặc cập nhật gói ngôn ngữ. Vui lòng tải (các) tệp ZIP thích hợp từ <a href="{$a->src}">{$a->src}</a> và giải nén thủ công vào thư mục dữ liệu <code>{$a->dest}</code>';
$string['install'] = 'Cài đặt (các) gói ngôn ngữ đã chọn';
$string['installedlangs'] = 'Các gói ngôn ngữ đã cài đặt';
$string['installfailed'] = 'Cài đặt gói ngôn ngữ không thành công!';
$string['installfinished'] = 'Đã hoàn tất cài đặt gói ngôn ngữ.';
$string['installpending'] = 'Các gói ngôn ngữ sau sẽ sớm được cài đặt: {$a}.';
$string['installscheduled'] = 'Đã lên lịch cài đặt các gói ngôn ngữ.';
$string['langimport'] = 'Tiện ích nhập ngôn ngữ';
$string['langimportdisabled'] = 'Tính năng nhập ngôn ngữ đã bị vô hiệu hóa. Bạn phải cập nhật thủ công các gói ngôn ngữ ở cấp hệ thống tệp. Đừng quên xóa bộ nhớ đệm chuỗi sau khi thực hiện.';
$string['langpackinstalled'] = 'Gói ngôn ngữ \'{$a}\' đã được cài đặt thành công';
$string['langpackinstalledevent'] = 'Đã cài đặt gói ngôn ngữ';
$string['langpacknotremoved'] = 'Đã xảy ra lỗi; gói ngôn ngữ \'{$a}\' chưa được gỡ cài đặt hoàn toàn. Vui lòng kiểm tra quyền truy cập tệp.';
$string['langpackremoved'] = 'Gói ngôn ngữ \'{$a}\' đã được gỡ cài đặt';
$string['langpackremovedevent'] = 'Đã gỡ cài đặt gói ngôn ngữ';
$string['langpackupdated'] = 'Gói ngôn ngữ \'{$a}\' đã được cập nhật thành công';
$string['langpackupdatedevent'] = 'Đã cập nhật gói ngôn ngữ';
$string['langpackupdateskipped'] = 'Đã bỏ qua việc cập nhật gói ngôn ngữ \'{$a}\\';
$string['langpackuptodate'] = 'Gói ngôn ngữ \'{$a}\' đã được cập nhật';
$string['langunsupported'] = '<p>Có vẻ như máy chủ của bạn không hỗ trợ đầy đủ các ngôn ngữ sau:</p><ul>{$a->missinglocales}</ul><p>Thay vào đó, thiết lập vùng toàn cục ({$a->globallocale}) sẽ được dùng để định dạng một số chuỗi như ngày tháng hoặc số.</p>';
$string['langupdatecomplete'] = 'Đã hoàn tất cập nhật gói ngôn ngữ';
$string['missingcfglangotherroot'] = 'Thiếu giá trị cấu hình $CFG->langotherroot';
$string['missinglangparent'] = 'Thiếu ngôn ngữ cha <em>{$a->parent}</em> của <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Không thể gỡ cài đặt gói ngôn ngữ tiếng Anh.';
$string['noenglishuninstalltitle'] = 'Không thể gỡ cài đặt';
$string['nolangupdateneeded'] = 'Tất cả gói ngôn ngữ của bạn đều đã được cập nhật, không cần cập nhật';
$string['pluginname'] = 'Gói ngôn ngữ';
$string['privacy:metadata'] = 'Plugin Gói ngôn ngữ không lưu trữ dữ liệu cá nhân.';
$string['purgestringcaches'] = 'Xóa bộ nhớ đệm chuỗi';
$string['search'] = 'Tìm kiếm các gói ngôn ngữ hiện có';
$string['selectlangs'] = 'Chọn ngôn ngữ cần gỡ cài đặt';
$string['uninstall'] = 'Gỡ cài đặt (các) gói ngôn ngữ đã chọn';
$string['uninstallconfirm'] = 'Bạn sắp gỡ cài đặt hoàn toàn các gói ngôn ngữ này: <strong>{$a}</strong>. Bạn có chắc không?';
$string['updatelangs'] = 'Cập nhật tất cả gói ngôn ngữ đã cài đặt';
$string['updatelangsnote'] = 'Nhấp vào nút để cập nhật tất cả gói ngôn ngữ đã cài đặt có thể mất nhiều thời gian và gây hết thời gian chờ. Thay vào đó, bạn nên sử dụng tác vụ đã lên lịch \'{$a->taskname}\' (mặc định chạy mỗi ngày).';
