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
 * @subpackage sms
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Thao tác';
$string['countrycode'] = 'Mã quốc gia mặc định';
$string['countrycode_help'] = 'Mã quốc gia sẽ được thêm vào số điện thoại nếu người dùng không nhập mã quốc gia của họ. Nhập số mà không có ký hiệu \'+\' ở đầu.';
$string['createnewgateway'] = 'Tạo cổng SMS mới';
$string['delete_sms_gateway'] = 'Xóa cổng SMS';
$string['delete_sms_gateway_confirmation'] = 'Thao tác này sẽ xóa cổng SMS {$a->gateway}.';
$string['edit_sms_gateway'] = 'Chỉnh sửa cổng SMS {$a->gateway}';
$string['gateway'] = 'Cổng';
$string['gateway_name'] = 'Tên cổng';
$string['manage_sms_gateways'] = 'Quản lý các cổng SMS';
$string['phonenumbernotvalid'] = 'Không nhận diện được định dạng số điện thoại: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Lưu trữ các tin nhắn được gửi qua SMS';
$string['privacy:metadata:sms_messages:content'] = 'Nội dung tin nhắn';
$string['privacy:metadata:sms_messages:id'] = 'ID của tin nhắn';
$string['privacy:metadata:sms_messages:recipient'] = 'Số điện thoại đã nhận tin nhắn';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'Người dùng đã nhận tin nhắn, nếu xác định được';
$string['privacy:metadata:sms_messages:status'] = 'Trạng thái của tin nhắn';
$string['privacy:metadata:sms_messages:timecreated'] = 'Thời điểm tạo tin nhắn';
$string['privacy:sms:sensitive_not_shown'] = 'Nội dung tin nhắn này không được lưu trữ vì tin nhắn được đánh dấu là có chứa nội dung nhạy cảm.';
$string['select_sms_gateways'] = 'Nhà cung cấp cổng SMS';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Không thể xóa cổng SMS {$a->gateway}. Cổng đang được sử dụng hoặc có sự cố với cơ sở dữ liệu. Kiểm tra xem cổng có đang hoạt động hay không hoặc liên hệ với quản trị viên cơ sở dữ liệu để được trợ giúp.';
$string['sms_gateway_deleted'] = 'Đã xóa cổng SMS {$a->gateway}';
$string['sms_gateway_disable_failed'] = 'Không thể tắt cổng SMS. Cổng đang được sử dụng hoặc có sự cố với cơ sở dữ liệu. Kiểm tra xem cổng có đang hoạt động hay không hoặc liên hệ với quản trị viên cơ sở dữ liệu để được trợ giúp.';
$string['sms_gateways'] = 'Các cổng SMS';
$string['sms_gateways_info'] = 'Tạo và quản lý các cổng SMS để gửi tin nhắn SMS từ trang của bạn.';
$string['status:gateway_failed'] = 'Cổng không gửi được tin nhắn';
$string['status:gateway_not_available'] = 'Cổng không khả dụng để gửi tin nhắn';
$string['status:gateway_queued'] = 'Tin nhắn đang nằm trong hàng đợi chờ cổng gửi';
$string['status:gateway_rejected'] = 'Cổng đã từ chối tin nhắn';
$string['status:gateway_sent'] = 'Tin nhắn đã được cổng gửi';
$string['status:message_over_size'] = 'Tin nhắn quá lớn để cổng gửi';
$string['status:unknown'] = 'Không thể xác định trạng thái của tin nhắn';
