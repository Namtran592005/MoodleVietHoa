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
 * @package    gradepenalty
 * @subpackage duedate
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Thêm quy tắc';
$string['deleteallrules'] = 'Xóa tất cả quy tắc';
$string['duedate:manage'] = 'Quyền quản lý các quy tắc phạt';
$string['duedaterule'] = 'Quy tắc phạt';
$string['editduedaterule'] = 'Chỉnh sửa quy tắc phạt';
$string['error_overdueby_abovevalue'] = 'Số lượng quá hạn phải lớn hơn số lượng của quy tắc phía trên ({$a}).';
$string['error_overdueby_maxvalue'] = 'Số lượng quá hạn không được lớn hơn {$a}.';
$string['error_overdueby_minvalue'] = 'Số lượng quá hạn phải lớn hơn hoặc bằng {$a}.';
$string['error_penalty_abovevalue'] = 'Mức phạt phải lớn hơn mức phạt của quy tắc phía trên ({$a}%).';
$string['error_penalty_maxvalue'] = 'Mức phạt không được lớn hơn {$a}%.';
$string['error_penalty_minvalue'] = 'Mức phạt phải lớn hơn hoặc bằng {$a}%.';
$string['existingrule'] = 'Các quy tắc hiện có';
$string['finalpenaltyrule'] = 'Quy tắc phạt cuối cùng';
$string['finalpenaltyrule_help'] = 'Quy tắc phạt cuối cùng xác định mức phạt áp dụng cho các bài nộp quá hạn lâu hơn thời gian quy định trong bất kỳ quy tắc phạt nào khác.';
$string['insertrule'] = 'Chèn bên dưới';
$string['overdueby'] = 'Quá hạn';
$string['overdueby_help'] = 'Thời gian tính bằng giây sau ngày đến hạn mà mức phạt sẽ được áp dụng.';
$string['overdueby_label'] = 'Quá hạn:';
$string['overdueby_lastrow'] = '&gt; {$a}';
$string['overdueby_onerow'] = 'Tất cả bài nộp muộn';
$string['overdueby_row'] = '&le; {$a}';
$string['penalty'] = 'Mức phạt';
$string['penalty_help'] = 'Mức phạt tính theo phần trăm được áp dụng cho các bài nộp muộn.';
$string['penalty_label'] = 'Mức phạt:';
$string['penaltyrule'] = 'Quy tắc phạt';
$string['penaltyrule_group'] = 'Quy tắc phạt {no}';
$string['penaltyrule_inherited'] = 'Các quy tắc phạt trong ngữ cảnh này được kế thừa từ ngữ cảnh cha. Nhấp vào Chỉnh sửa để ghi đè các giá trị.';
$string['penaltyrule_not_inherited'] = 'Nhấp vào Chỉnh sửa để thay đổi hoặc thêm quy tắc.';
$string['penaltyrule_overridden'] = 'Các quy tắc phạt đã bị ghi đè. Nhấp vào Đặt lại để xóa các quy tắc bị ghi đè. Thao tác này sẽ xóa tất cả quy tắc nếu ngữ cảnh cha không có quy tắc nào.';
$string['pluginname'] = 'Mức phạt cho bài nộp muộn';
$string['privacy:metadata:gradepenalty_duedate_rule'] = 'Bảng ngày đến hạn của mức phạt điểm';
$string['privacy:metadata:gradepenalty_duedate_rule:usermodified'] = 'Người dùng đã sửa đổi quy tắc';
$string['resetconfirm'] = 'Thao tác này sẽ xóa tất cả quy tắc trong ngữ cảnh này. Bạn có chắc muốn tiếp tục không?';
