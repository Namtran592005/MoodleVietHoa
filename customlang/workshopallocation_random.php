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
 * @package    workshopallocation
 * @subpackage random
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Thêm bài tự đánh giá';
$string['allocationaddeddetail'] = 'Bài đánh giá mới cần thực hiện: <strong>{$a->reviewername}</strong> là người đánh giá bài nộp của <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Không thể hủy phân công bài đánh giá đã được chấm điểm: người đánh giá <strong>{$a->reviewername}</strong>, tác giả bài nộp <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Đã sử dụng lại bài đánh giá: <strong>{$a->reviewername}</strong> tiếp tục là người đánh giá bài nộp của <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Cài đặt phân công';
$string['assessmentdeleteddetail'] = 'Đã hủy phân công bài đánh giá: <strong>{$a->reviewername}</strong> không còn là người đánh giá bài nộp của <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Người tham gia có thể đánh giá mà không cần nộp bài';
$string['confignumofreviews'] = 'Số lượng bài nộp mặc định được phân công ngẫu nhiên';
$string['excludesamegroup'] = 'Không cho phép người cùng nhóm đánh giá lẫn nhau';
$string['noallocationtoadd'] = 'Không có phân công nào để thêm';
$string['nogroupusers'] = '<p>Cảnh báo: Nếu hội thảo ở chế độ \'nhóm hiển thị\' hoặc \'nhóm tách biệt\', người dùng PHẢI thuộc ít nhất một nhóm để công cụ này phân công bài đánh giá đồng đẳng cho họ. Người dùng không thuộc nhóm vẫn có thể được giao bài tự đánh giá mới hoặc xóa các bài đánh giá hiện có.</p>
<p>Hiện những người dùng này không thuộc nhóm nào: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Đang hủy phân công {$a} bài đánh giá';
$string['numofrandomlyallocatedsubmissions'] = 'Đang phân công ngẫu nhiên {$a} bài đánh giá';
$string['numofreviews'] = 'Số lượng bài đánh giá';
$string['numofselfallocatedsubmissions'] = 'Đang tự phân công {$a} bài nộp';
$string['numperauthor'] = 'cho mỗi bài nộp';
$string['numperreviewer'] = 'cho mỗi người đánh giá';
$string['pluginname'] = 'Phân công ngẫu nhiên';
$string['privacy:metadata'] = 'Plugin Phân công ngẫu nhiên không lưu trữ dữ liệu cá nhân. Dữ liệu cá nhân thực tế về việc ai sẽ đánh giá bài của ai được lưu trong chính mô-đun Workshop và là cơ sở để xuất thông tin chi tiết về bài đánh giá.';
$string['randomallocationdone'] = 'Đã hoàn tất phân công ngẫu nhiên';
$string['removecurrentallocations'] = 'Xóa các phân công hiện tại';
$string['resultnomorepeers'] = 'Không còn người đánh giá đồng đẳng nào';
$string['resultnomorepeersingroup'] = 'Không còn người đánh giá đồng đẳng nào trong nhóm tách biệt này';
$string['resultnotenoughpeers'] = 'Không đủ người đánh giá đồng đẳng';
$string['resultnumperauthor'] = 'Đang cố gắng phân công {$a} bài đánh giá cho mỗi tác giả';
$string['resultnumperreviewer'] = 'Đang cố gắng phân công {$a} bài đánh giá cho mỗi người đánh giá';
$string['stats'] = 'Thống kê phân công hiện tại';
