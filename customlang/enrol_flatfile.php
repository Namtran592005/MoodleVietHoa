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
 * @package    enrol
 * @subpackage flatfile
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Mã hóa tệp';
$string['expiredaction'] = 'Hành động khi ghi danh hết hạn';
$string['expiredaction_help'] = 'Chọn hành động cần thực hiện khi ghi danh của người dùng hết hạn. Xin lưu ý rằng một số dữ liệu và cài đặt người dùng sẽ bị xóa khỏi khóa học khi hủy ghi danh.';
$string['filelockedmail'] = 'Tệp văn bản bạn đang sử dụng để ghi danh bằng tệp ({$a}) không thể bị tiến trình cron xóa. Điều này thường có nghĩa là quyền truy cập tệp không chính xác. Vui lòng sửa quyền để Moodle có thể xóa tệp, nếu không tệp có thể bị xử lý nhiều lần.';
$string['filelockedmailsubject'] = 'Lỗi quan trọng: Tệp ghi danh';
$string['flatfile:manage'] = 'Quản lý thủ công việc ghi danh người dùng';
$string['flatfile:unenrol'] = 'Hủy ghi danh thủ công người dùng khỏi khóa học';
$string['flatfileenrolments'] = 'Ghi danh bằng tệp phẳng (CSV)';
$string['flatfilesync'] = 'Đồng bộ ghi danh bằng tệp phẳng';
$string['location'] = 'Vị trí tệp';
$string['location_desc'] = 'Chỉ định đường dẫn đầy đủ đến tệp ghi danh. Tệp sẽ tự động bị xóa sau khi xử lý.';
$string['mapping'] = 'Ánh xạ vai trò bằng tệp phẳng';
$string['messageprovider:flatfile_enrolment'] = 'Tin nhắn ghi danh bằng tệp phẳng';
$string['notifyadmin'] = 'Thông báo cho quản trị viên';
$string['notifyenrolled'] = 'Thông báo cho người dùng đã ghi danh';
$string['notifyenroller'] = 'Thông báo cho người dùng phụ trách ghi danh';
$string['pluginname'] = 'Tệp phẳng (CSV)';
$string['pluginname_desc'] = 'Phương thức này sẽ liên tục kiểm tra và xử lý một tệp văn bản có định dạng đặc biệt tại vị trí bạn chỉ định.
Tệp là tệp phân tách bằng dấu phẩy, mỗi dòng được giả định có bốn hoặc sáu trường:

    operation, role, user idnumber, course idnumber [, starttime [, endtime]]

trong đó:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber trong bảng người dùng, lưu ý: không phải id
* course idnumber - idnumber trong bảng khóa học, lưu ý: không phải id
* starttime - thời gian bắt đầu (tính bằng giây kể từ epoch) - tùy chọn
* endtime - thời gian kết thúc (tính bằng giây kể từ epoch) - tùy chọn

Ví dụ:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Trình bổ trợ ghi danh bằng tệp phẳng (CSV) có thể lưu trữ dữ liệu cá nhân liên quan đến các lần ghi danh trong tương lai trong bảng enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Hành động ghi danh dự kiến vào ngày đã cho';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'ID khóa học liên quan đến việc ghi danh';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'ID vai trò cần gán hoặc hủy gán';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Thời điểm kết thúc ghi danh';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Thời điểm chỉnh sửa ghi danh';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Thời điểm bắt đầu ghi danh';
$string['privacy:metadata:enrol_flatfile:userid'] = 'ID người dùng liên quan đến việc gán vai trò';
