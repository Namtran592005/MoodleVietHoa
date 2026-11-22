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
 * @subpackage antivirus
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Các plugin chống vi-rút hiện có';
$string['antiviruscommonsettings'] = 'Cài đặt chống vi-rút chung';
$string['antiviruses'] = 'Plugin chống vi-rút';
$string['antivirussettings'] = 'Quản lý plugin chống vi-rút';
$string['configantivirusplugins'] = 'Vui lòng chọn các plugin chống vi-rút bạn muốn sử dụng và sắp xếp thứ tự áp dụng.';
$string['dataerrordesc'] = 'Đã xảy ra lỗi ở trình quét dữ liệu.';
$string['dataerrorname'] = 'Lỗi trình quét dữ liệu';
$string['datainfecteddesc'] = 'Phát hiện dữ liệu bị nhiễm.';
$string['datainfectedname'] = 'Dữ liệu bị nhiễm';
$string['datastream'] = 'Dữ liệu';
$string['emailadditionalinfo'] = 'Thông tin bổ sung do công cụ phát hiện vi-rút trả về:';
$string['emailauthor'] = 'Người tải lên:';
$string['emailcontenthash'] = 'Mã băm nội dung:';
$string['emailcontenttype'] = 'Loại nội dung:';
$string['emaildate'] = 'Ngày tải lên:';
$string['emailfilename'] = 'Tên tệp:';
$string['emailfilesize'] = 'Kích thước tệp:';
$string['emailgeoinfo'] = 'Vị trí địa lý:';
$string['emailinfectedfiledetected'] = 'Đã phát hiện tệp bị nhiễm';
$string['emailipaddress'] = 'Địa chỉ IP:';
$string['emailreferer'] = 'Trang giới thiệu:';
$string['emailreport'] = 'Báo cáo:';
$string['emailscanner'] = 'Trình quét:';
$string['emailscannererrordetected'] = 'Đã phát hiện lỗi trình quét';
$string['emailsubject'] = '{$a} :: Thông báo chống vi-rút';
$string['enablequarantine'] = 'Bật cách ly';
$string['enablequarantine_help'] = 'Nếu được bật, mọi tệp bị phát hiện có vi-rút sẽ được chuyển vào thư mục cách ly ([dataroot]/{$a}) để kiểm tra sau. Tệp sẽ không được tải lên Moodle. Nếu bạn đang dùng tính năng quét vi-rút ở cấp hệ thống tệp, hãy loại trừ thư mục cách ly khỏi quá trình quét để tránh phát hiện các tệp đã cách ly.';
$string['fileerrordesc'] = 'Đã xảy ra lỗi ở trình quét tệp.';
$string['fileerrorname'] = 'Lỗi trình quét tệp';
$string['fileinfecteddesc'] = 'Đã phát hiện tệp bị nhiễm.';
$string['fileinfectedname'] = 'Tệp bị nhiễm';
$string['notifyemail'] = 'Email thông báo cảnh báo chống vi-rút';
$string['notifyemail_help'] = 'Địa chỉ email nhận thông báo khi phát hiện vi-rút. Nếu để trống, tất cả quản trị viên trang sẽ nhận được thông báo.';
$string['notifylevel'] = 'Mức thông báo';
$string['notifylevel_help'] = 'Các mức thông tin khác nhau mà bạn muốn nhận thông báo';
$string['notifylevelerror'] = 'Các mối đe dọa được phát hiện và lỗi trình quét';
$string['notifylevelfound'] = 'Chỉ các mối đe dọa được phát hiện';
$string['privacy:metadata'] = 'Hệ thống chống vi-rút không lưu trữ dữ liệu cá nhân nào.';
$string['quarantinedfiles'] = 'Các tệp được cách ly bởi hệ thống chống vi-rút';
$string['quarantinedisabled'] = 'Tính năng cách ly đã bị tắt. Tệp không được lưu trữ.';
$string['quarantinetime'] = 'Thời gian cách ly tối đa';
$string['quarantinetime_desc'] = 'Các tệp bị cách ly quá thời hạn đã chỉ định sẽ bị xóa.';
$string['taskcleanup'] = 'Dọn dẹp các tệp bị cách ly.';
$string['threshold'] = 'Ngưỡng kiểm tra trạng thái';
$string['threshold_desc'] = 'Khoảng thời gian cần kiểm tra các kết quả trước đó về lỗi, v.v. được báo cáo trong {$a}.';
$string['unknown'] = 'Không xác định';
$string['virusfound'] = '{$a->item} đã được trình quét vi-rút kiểm tra và phát hiện bị nhiễm!';
