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
 * @subpackage payment
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Đã lưu trữ';
$string['accountconfignote'] = 'Cổng thanh toán cho tài khoản này sẽ được cấu hình riêng';
$string['accountdeleteconfirm'] = 'Nếu tài khoản này có các khoản thanh toán trước đây, tài khoản sẽ được lưu trữ; nếu không, dữ liệu cấu hình sẽ bị xóa vĩnh viễn. Bạn có chắc chắn muốn tiếp tục không?';
$string['accountidnumber'] = 'Số ID';
$string['accountidnumber_help'] = 'Số ID chỉ được dùng khi đối chiếu tài khoản với các hệ thống bên ngoài và không hiển thị ở bất kỳ đâu trên trang web. Nếu tài khoản có mã tên chính thức, bạn có thể nhập mã đó; nếu không, hãy để trống trường này.';
$string['accountname'] = 'Tên tài khoản';
$string['accountname_help'] = 'Tên dùng để nhận diện tài khoản này đối với giáo viên hoặc người quản lý thiết lập thanh toán (ví dụ: trong plugin ghi danh khóa học).';
$string['accountnotavailable'] = 'Không khả dụng';
$string['createaccount'] = 'Tạo tài khoản thanh toán';
$string['deleteorarchive'] = 'Xóa hoặc lưu trữ';
$string['editpaymentaccount'] = 'Chỉnh sửa tài khoản thanh toán';
$string['eventaccountcreated'] = 'Đã tạo tài khoản thanh toán';
$string['eventaccountdeleted'] = 'Đã xóa tài khoản thanh toán';
$string['eventaccountupdated'] = 'Đã cập nhật tài khoản thanh toán';
$string['feeincludesurcharge'] = '{$a->fee} (đã bao gồm phụ phí {$a->surcharge}% khi sử dụng loại thanh toán này)';
$string['gatewaycannotbeenabled'] = 'Không thể bật cổng thanh toán vì cấu hình chưa hoàn chỉnh.';
$string['gatewaydisabled'] = 'Đã tắt';
$string['gatewayenabled'] = 'Đã bật';
$string['gatewaynotfound'] = 'Không tìm thấy cổng thanh toán';
$string['gotomanageplugins'] = 'Bật và tắt cổng thanh toán cũng như thiết lập phụ phí tại {$a}.';
$string['gotopaymentaccounts'] = 'Tạo tài khoản thanh toán bằng bất kỳ cổng nào trong số này tại {$a}.';
$string['hidearchived'] = 'Ẩn các mục đã lưu trữ';
$string['noaccountsavilable'] = 'Không có tài khoản thanh toán nào.';
$string['nocurrencysupported'] = 'Không hỗ trợ thanh toán bằng bất kỳ loại tiền tệ nào. Vui lòng đảm bảo có ít nhất một cổng thanh toán được bật.';
$string['nogateway'] = 'Không có cổng thanh toán nào có thể sử dụng.';
$string['nogatewayselected'] = 'Trước tiên, bạn cần chọn một cổng thanh toán.';
$string['paymentaccount'] = 'Tài khoản thanh toán';
$string['paymentaccounts'] = 'Tài khoản thanh toán';
$string['paymentaccountsexplained'] = 'Tạo một hoặc nhiều tài khoản thanh toán cho trang web này. Mỗi tài khoản bao gồm cấu hình cho các cổng thanh toán hiện có. Người cấu hình thanh toán trên trang web (ví dụ: thanh toán cho việc ghi danh khóa học) sẽ có thể chọn trong số các tài khoản hiện có.';
$string['payments'] = 'Thanh toán';
$string['privacy:metadata:database:payments'] = 'Thông tin về các khoản thanh toán.';
$string['privacy:metadata:database:payments:amount'] = 'Số tiền thanh toán.';
$string['privacy:metadata:database:payments:currency'] = 'Loại tiền tệ của khoản thanh toán.';
$string['privacy:metadata:database:payments:gateway'] = 'Cổng thanh toán được sử dụng cho khoản thanh toán.';
$string['privacy:metadata:database:payments:timecreated'] = 'Thời điểm thực hiện thanh toán.';
$string['privacy:metadata:database:payments:timemodified'] = 'Thời điểm cập nhật bản ghi thanh toán lần cuối.';
$string['privacy:metadata:database:payments:userid'] = 'Người dùng đã thực hiện thanh toán.';
$string['restoreaccount'] = 'Khôi phục';
$string['selectpaymenttype'] = 'Chọn loại thanh toán';
$string['showarchived'] = 'Hiển thị các mục đã lưu trữ';
$string['supportedcurrencies'] = 'Các loại tiền tệ được hỗ trợ';
$string['surcharge'] = 'Phụ phí (phần trăm)';
$string['surcharge_desc'] = 'Phụ phí là khoản phần trăm cộng thêm được tính cho người dùng chọn thanh toán bằng cổng thanh toán này.';
