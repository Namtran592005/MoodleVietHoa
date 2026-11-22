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
 * @subpackage paypal
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Gán vai trò';
$string['businessemail'] = 'Email doanh nghiệp PayPal';
$string['businessemail_desc'] = 'Địa chỉ email của tài khoản PayPal doanh nghiệp của bạn';
$string['cost'] = 'Chi phí ghi danh';
$string['costerror'] = 'Chi phí ghi danh không phải là số';
$string['costorkey'] = 'Vui lòng chọn một trong các phương thức ghi danh sau.';
$string['currency'] = 'Tiền tệ';
$string['defaultrole'] = 'Gán vai trò mặc định';
$string['defaultrole_desc'] = 'Chọn vai trò cần gán cho người dùng khi ghi danh qua PayPal';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu bật, người dùng chỉ có thể được ghi danh cho đến ngày này.';
$string['enrolenddaterror'] = 'Ngày kết thúc ghi danh không thể sớm hơn ngày bắt đầu';
$string['enrolperiod'] = 'Thời lượng ghi danh';
$string['enrolperiod_desc'] = 'Thời lượng mặc định mà lượt ghi danh có hiệu lực. Nếu đặt là 0, thời lượng ghi danh mặc định sẽ không giới hạn.';
$string['enrolperiod_help'] = 'Thời lượng mà lượt ghi danh có hiệu lực, tính từ thời điểm người dùng được ghi danh. Nếu tắt tùy chọn này, thời lượng ghi danh sẽ không giới hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu bật, người dùng chỉ có thể được ghi danh kể từ ngày này.';
$string['errdisabled'] = 'Plugin ghi danh PayPal đã bị tắt và không xử lý thông báo thanh toán.';
$string['erripninvalid'] = 'PayPal chưa xác minh thông báo thanh toán tức thời.';
$string['errpaypalconnect'] = 'Không thể kết nối với {$a->url} để xác minh thông báo thanh toán tức thời: {$a->result}';
$string['expiredaction'] = 'Thao tác khi lượt ghi danh hết hạn';
$string['expiredaction_help'] = 'Chọn thao tác sẽ thực hiện khi lượt ghi danh của người dùng hết hạn. Lưu ý rằng một số dữ liệu và thiết lập của người dùng sẽ bị xóa khỏi khóa học khi hủy ghi danh.';
$string['mailadmins'] = 'Thông báo cho quản trị viên';
$string['mailstudents'] = 'Thông báo cho học viên';
$string['mailteachers'] = 'Thông báo cho giáo viên';
$string['messageprovider:paypal_enrolment'] = 'Thông báo ghi danh PayPal';
$string['nocost'] = 'Ghi danh vào khóa học này hoàn toàn miễn phí!';
$string['paypal:config'] = 'Cấu hình các phiên bản ghi danh PayPal';
$string['paypal:manage'] = 'Quản lý người dùng đã ghi danh';
$string['paypal:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['paypal:unenrolself'] = 'Tự hủy ghi danh khỏi khóa học';
$string['paypalaccepted'] = 'Chấp nhận thanh toán qua PayPal';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Mô-đun PayPal cho phép bạn thiết lập các khóa học có thu phí. Nếu chi phí của khóa học là 0, học viên sẽ không phải trả phí để tham gia. Tại đây, bạn đặt chi phí chung cho toàn trang làm giá trị mặc định, sau đó có thể đặt chi phí riêng cho từng khóa học. Chi phí của khóa học sẽ được ưu tiên hơn chi phí chung của trang.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Thông tin về các giao dịch PayPal trong những lượt ghi danh qua PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Địa chỉ email hoặc ID tài khoản PayPal của người nhận thanh toán (tức là người bán).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID của khóa học được bán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'ID của phiên bản ghi danh trong khóa học.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Tên đầy đủ của khóa học được bán quyền ghi danh.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Ghi chú do người mua nhập vào trường ghi chú thanh toán trên trang PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Họ tên đầy đủ của người mua.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Trong trường hợp hoàn tiền, đảo ngược giao dịch hoặc hủy việc đảo ngược, đây là ID giao dịch của giao dịch ban đầu.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Trạng thái thanh toán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Cho biết khoản thanh toán được thực hiện bằng séc điện tử (echeck) hay bằng số dư PayPal, thẻ tín dụng hoặc chuyển khoản tức thời (instant).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Lý do trạng thái thanh toán đang chờ xử lý (nếu có).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Lý do trạng thái thanh toán là Reversed, Refunded, Canceled_Reversal hoặc Denied (nếu trạng thái thuộc một trong các trường hợp này).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Địa chỉ email chính của người nhận thanh toán (tức là người bán).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID tài khoản PayPal duy nhất của người nhận thanh toán (tức là người bán).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Số thuế được tính trên khoản thanh toán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Thời điểm PayPal thông báo cho Moodle về khoản thanh toán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Mã nhận dạng giao dịch ban đầu của người bán cho khoản thanh toán từ người mua, đối với giao dịch mà khiếu nại được lập';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID của người dùng đã mua quyền ghi danh vào khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Plugin ghi danh PayPal truyền dữ liệu người dùng từ Moodle đến trang web PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Địa chỉ của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Thành phố của người dùng mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Quốc gia của người dùng mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Chuỗi phân tách bằng dấu gạch nối chứa ID của người dùng (người mua), ID của khóa học và ID của phiên bản ghi danh.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Địa chỉ email của người dùng mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Tên của người dùng mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Họ của người dùng mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Họ tên đầy đủ của người mua.';
$string['processexpirationstask'] = 'Tác vụ gửi thông báo hết hạn ghi danh PayPal';
$string['sendpaymentbutton'] = 'Gửi thanh toán qua PayPal';
$string['status'] = 'Cho phép ghi danh qua PayPal';
$string['status_desc'] = 'Mặc định cho phép người dùng sử dụng PayPal để ghi danh vào khóa học.';
$string['transactions'] = 'Giao dịch PayPal';
$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn hủy ghi danh khỏi khóa học "{$a}" không?';
