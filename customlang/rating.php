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
 * @subpackage rating
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Trung bình các điểm đánh giá';
$string['aggregatecount'] = 'Số lượng điểm đánh giá';
$string['aggregatemax'] = 'Điểm đánh giá cao nhất';
$string['aggregatemin'] = 'Điểm đánh giá thấp nhất';
$string['aggregatenone'] = 'Không có điểm đánh giá';
$string['aggregatesum'] = 'Tổng các điểm đánh giá';
$string['aggregatetype'] = 'Kiểu tổng hợp';
$string['aggregatetype_help'] = 'Kiểu tổng hợp xác định cách kết hợp các điểm đánh giá để tạo thành điểm cuối cùng trong sổ điểm.

* Trung bình các điểm đánh giá - Trung bình cộng của tất cả điểm đánh giá
* Số lượng điểm đánh giá - Số mục được đánh giá trở thành điểm cuối cùng. Lưu ý rằng tổng điểm không thể vượt quá điểm tối đa của hoạt động.
* Cao nhất - Điểm đánh giá cao nhất trở thành điểm cuối cùng
* Thấp nhất - Điểm đánh giá thấp nhất trở thành điểm cuối cùng
* Tổng - Cộng tất cả điểm đánh giá. Lưu ý rằng tổng điểm không thể vượt quá điểm tối đa của hoạt động.

Nếu chọn "Không có điểm đánh giá", hoạt động sẽ không xuất hiện trong sổ điểm.';
$string['allowratings'] = 'Cho phép đánh giá các mục?';
$string['allratingsforitem'] = 'Tất cả điểm đánh giá đã nộp';
$string['capabilitychecknotavailable'] = 'Không thể kiểm tra quyền năng lực cho đến khi lưu hoạt động';
$string['couldnotdeleteratings'] = 'Rất tiếc, không thể xóa mục này vì người dùng đã đánh giá rồi';
$string['norate'] = 'Không cho phép đánh giá các mục!';
$string['noratings'] = 'Chưa có điểm đánh giá nào được nộp';
$string['noviewanyrate'] = 'Bạn chỉ có thể xem kết quả của những mục do mình tạo';
$string['noviewrate'] = 'Bạn không có quyền năng lực xem điểm đánh giá mục';
$string['privacy:metadata:rating'] = 'Điểm đánh giá do người dùng nhập được lưu cùng với thông tin liên kết đến mục được đánh giá.';
$string['privacy:metadata:rating:rating'] = 'Điểm đánh giá dạng số do người dùng nhập.';
$string['privacy:metadata:rating:timecreated'] = 'Thời điểm điểm đánh giá được tạo lần đầu.';
$string['privacy:metadata:rating:timemodified'] = 'Thời điểm điểm đánh giá được cập nhật lần cuối.';
$string['privacy:metadata:rating:userid'] = 'Người dùng đã đưa ra đánh giá.';
$string['rate'] = 'Đánh giá';
$string['ratepermissiondenied'] = 'Bạn không có quyền đánh giá mục này';
$string['rating'] = 'Điểm đánh giá';
$string['ratinginvalid'] = 'Điểm đánh giá không hợp lệ';
$string['ratings'] = 'Các điểm đánh giá';
$string['ratingtime'] = 'Giới hạn đánh giá ở các mục có ngày trong khoảng này:';
$string['rolewarning'] = 'Vai trò có quyền đánh giá';
$string['rolewarning_help'] = 'Các vai trò có quyền đánh giá là những vai trò có quyền năng lực moodle/rating:rate cùng mọi quyền năng lực đánh giá riêng của hoạt động. Bạn có thể cấp quyền đánh giá cho các vai trò khác trên trang Quyền.';
$string['scaleselectionrequired'] = 'Khi chọn kiểu tổng hợp điểm đánh giá, bạn cũng phải chọn sử dụng thang điểm hoặc đặt điểm tối đa.';
