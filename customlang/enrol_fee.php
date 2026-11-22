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
 * @subpackage fee
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Gán vai trò';
$string['cost'] = 'Phí ghi danh';
$string['costerror'] = 'Phí ghi danh phải là một số.';
$string['currency'] = 'Tiền tệ';
$string['defaultrole'] = 'Gán vai trò mặc định';
$string['defaultrole_desc'] = 'Chọn vai trò sẽ gán cho người dùng sau khi thanh toán.';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu bật, người dùng chỉ có thể được ghi danh đến ngày này.';
$string['enrolenddaterror'] = 'Ngày kết thúc ghi danh không thể trước ngày bắt đầu.';
$string['enrolperiod'] = 'Thời lượng ghi danh';
$string['enrolperiod_desc'] = 'Khoảng thời gian mặc định mà việc ghi danh có hiệu lực. Nếu đặt thành 0, thời lượng ghi danh mặc định là không giới hạn.';
$string['enrolperiod_help'] = 'Khoảng thời gian mà việc ghi danh có hiệu lực, tính từ thời điểm người dùng được ghi danh. Nếu tắt, thời lượng ghi danh sẽ không giới hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu bật, người dùng chỉ có thể được ghi danh kể từ ngày này trở đi.';
$string['expiredaction'] = 'Hành động khi ghi danh hết hạn';
$string['expiredaction_help'] = 'Chọn hành động sẽ thực hiện khi ghi danh của người dùng hết hạn. Xin lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khi người dùng bị hủy ghi danh.';
$string['fee:config'] = 'Cấu hình ghi danh thanh toán cho các phiên bản phương thức ghi danh';
$string['fee:manage'] = 'Quản lý người dùng đã ghi danh';
$string['fee:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['fee:unenrolself'] = 'Tự hủy ghi danh khỏi khóa học';
$string['instancedescription'] = 'Mô tả phiên bản';
$string['instancedescription_help'] = 'Mô tả chỉ hiển thị trên trang \'Phương thức ghi danh\' và không hiển thị cho người dùng ghi danh vào khóa học.';
$string['nocost'] = 'Ghi danh vào khóa học này miễn phí!';
$string['paymentaccount'] = 'Tài khoản thanh toán';
$string['paymentaccount_help'] = 'Phí ghi danh sẽ được thanh toán vào tài khoản này.';
$string['pluginname'] = 'Ghi danh bằng thanh toán';
$string['pluginname_desc'] = 'Phương thức ghi danh bằng thanh toán cho phép bạn thiết lập các khóa học yêu cầu thanh toán. Nếu phí của khóa học được đặt bằng 0, học viên sẽ không phải trả phí để vào học. Bạn có thể đặt phí chung cho toàn trang web làm mặc định tại đây, sau đó đặt phí riêng cho từng khóa học. Phí khóa học sẽ thay thế phí toàn trang web.';
$string['privacy:metadata'] = 'Trình bổ trợ ghi danh bằng thanh toán không lưu trữ dữ liệu cá nhân nào.';
$string['processexpirationstask'] = 'Xử lý ghi danh hết hạn';
$string['purchasedescription'] = 'Ghi danh vào khóa học {$a}';
$string['sendpaymentbutton'] = 'Chọn loại thanh toán';
$string['status'] = 'Cho phép ghi danh bằng thanh toán';
$string['status_desc'] = 'Mặc định cho phép người dùng thanh toán để ghi danh vào khóa học.';
