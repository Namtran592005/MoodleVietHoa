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
 * @package    cachestore
 * @subpackage apcu
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Xin lưu ý rằng APCu chỉ phù hợp với các trang web một nút hoặc các bộ nhớ đệm có thể được lưu trữ cục bộ.
Để biết thêm thông tin, hãy xem <a href="{$a}">tài liệu về bộ nhớ đệm người dùng APC</a>.';
$string['notice'] = 'Thông báo';
$string['pluginname'] = 'Bộ nhớ đệm người dùng APC (APCu)';
$string['prefix'] = 'Tiền tố';
$string['prefix_help'] = 'Tiền tố ở trên được dùng cho tất cả khóa lưu trong phiên bản APC này. Theo mặc định, tiền tố cơ sở dữ liệu sẽ được sử dụng.';
$string['prefixinvalid'] = 'Tiền tố bạn đã chọn không hợp lệ. Bạn chỉ có thể sử dụng a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'Tiền tố bạn đã chọn không phải là duy nhất. Vui lòng chọn một tiền tố duy nhất.';
$string['privacy:metadata'] = 'Tiện ích bộ nhớ đệm người dùng APC (APCu) lưu trữ dữ liệu trong thời gian ngắn như một phần của chức năng lưu vào bộ nhớ đệm. Dữ liệu này được xóa thường xuyên và không được gửi ra bên ngoài.';
$string['testperformance'] = 'Kiểm tra hiệu năng';
$string['testperformance_desc'] = 'Nếu bật, hiệu năng APCu sẽ được đưa vào khi xem trang Kiểm tra hiệu năng. Không khuyến nghị bật tính năng này trên trang web đang hoạt động.';
