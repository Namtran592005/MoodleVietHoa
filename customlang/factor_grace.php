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
 * @package    factor
 * @subpackage grace
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Cho phép đăng nhập mà không cần yếu tố khác trong một khoảng thời gian xác định.';
$string['pluginname'] = 'Thời gian gia hạn';
$string['preferences'] = 'Tùy chọn người dùng';
$string['privacy:metadata'] = 'Plugin yếu tố Thời gian gia hạn không lưu trữ dữ liệu cá nhân';
$string['redirectsetup'] = 'Bạn phải hoàn tất thiết lập xác thực đa yếu tố trước khi tiếp tục.';
$string['revokeexpiredfactors'] = 'Thu hồi các yếu tố thời gian gia hạn đã hết hạn';
$string['settings:customwarning'] = 'Nội dung biểu ngữ cảnh báo';
$string['settings:customwarning_help'] = 'Thêm nội dung tại đây để thay thông báo cảnh báo thời gian gia hạn bằng nội dung HTML tùy chỉnh. Thêm {timeremaining} vào văn bản sẽ thay thế bằng thời gian gia hạn hiện tại của người dùng, còn {setuplink} sẽ thay thế bằng URL trang thiết lập của người dùng.';
$string['settings:description'] = 'Cho phép người dùng đăng nhập mà không cần MFA trong một khoảng thời gian nhất định, để họ có thời gian thiết lập các yếu tố xác thực. Sau khi hết thời gian gia hạn, người dùng phải dùng MFA để đăng nhập.';
$string['settings:forcesetup'] = 'Bắt buộc thiết lập yếu tố';
$string['settings:forcesetup_help'] = 'Buộc người dùng chuyển đến trang tùy chọn để thiết lập xác thực đa yếu tố khi hết thời gian gia hạn. Nếu bỏ chọn, người dùng sẽ không thể xác thực khi hết thời gian gia hạn.';
$string['settings:graceperiod'] = 'Thời gian gia hạn';
$string['settings:graceperiod_help'] = 'Khoảng thời gian người dùng có thể truy cập trang web mà không cần các yếu tố đã được cấu hình và bật.';
$string['settings:ignorelist'] = 'Các yếu tố bỏ qua';
$string['settings:ignorelist_help'] = 'Thời gian gia hạn sẽ không cấp điểm nếu có các yếu tố khác mà người dùng có thể dùng để xác thực đa yếu tố. Thời gian gia hạn sẽ không tính các yếu tố được liệt kê tại đây khi quyết định cấp điểm. Điều này có thể giúp Thời gian gia hạn cho phép xác thực nếu một yếu tố khác, chẳng hạn email, gặp sự cố cấu hình hoặc hệ thống.';
$string['settings:shortdescription'] = 'Cho phép người dùng đăng nhập mà không cần MFA trong một khoảng thời gian nhất định để họ có thời gian thiết lập các yếu tố xác thực.';
$string['setupfactors'] = 'Bạn hiện đang trong thời gian gia hạn và có thể chưa thiết lập đủ yếu tố để đăng nhập khi thời gian gia hạn kết thúc. Truy cập {$a->url} để kiểm tra trạng thái xác thực và thiết lập thêm yếu tố xác thực. Thời gian gia hạn của bạn sẽ kết thúc sau {$a->time}.';
$string['summarycondition'] = 'đang trong thời gian gia hạn';
