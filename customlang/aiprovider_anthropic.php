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
 * @package    aiprovider
 * @subpackage anthropic
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'Điểm cuối API';
$string['action:explain_text:model'] = 'Mô hình AI';
$string['action:explain_text:model_help'] = 'Mô hình được dùng để giải thích văn bản đã cung cấp.';
$string['action:explain_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:explain_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này trừ khi thực sự cần thiết.';
$string['action:generate_text:endpoint'] = 'Điểm cuối API';
$string['action:generate_text:model'] = 'Mô hình AI';
$string['action:generate_text:model_help'] = 'Mô hình được dùng để tạo phản hồi bằng văn bản.';
$string['action:generate_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:generate_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này trừ khi thực sự cần thiết.';
$string['action:summarise_text:endpoint'] = 'Điểm cuối API';
$string['action:summarise_text:model'] = 'Mô hình AI';
$string['action:summarise_text:model_help'] = 'Mô hình được dùng để tóm tắt văn bản đã cung cấp.';
$string['action:summarise_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:summarise_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này trừ khi thực sự cần thiết.';
$string['apikey'] = 'Khóa API Anthropic';
$string['apikey_help'] = 'Lấy khóa từ <a href="https://console.anthropic.com/settings/keys" target="_blank">khóa API trong bảng điều khiển Anthropic</a>.';
$string['custom_model_name'] = 'Tên mô hình tùy chỉnh';
$string['custom_model_name_help'] = 'Tên mô hình Claude cần sử dụng, chính xác như hiển thị trong API Anthropic, ví dụ claude-sonnet-4-5-20250929. Dùng tùy chọn này để chọn mô hình không có trong danh sách, chẳng hạn mô hình được phát hành sau phiên bản Moodle LMS này. Các mô hình Claude mới hơn không còn chấp nhận cài đặt temperature, vì vậy hãy để trống Temperature trừ khi bạn biết mô hình có hỗ trợ.';
$string['error:nocontent'] = 'API Anthropic không trả về nội dung văn bản nào có thể sử dụng (lý do dừng: {$a}).';
$string['pluginname'] = 'Nhà cung cấp API Anthropic Claude';
$string['privacy:metadata:aiprovider_anthropic:externalpurpose'] = 'Thông tin này được gửi đến API Anthropic Claude để tạo phản hồi. Cài đặt tài khoản Anthropic của bạn có thể ảnh hưởng đến cách Anthropic lưu trữ và lưu giữ dữ liệu này. Plugin này không lưu trữ dữ liệu trong Moodle LMS.';
$string['privacy:metadata:aiprovider_anthropic:model'] = 'Mô hình được dùng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_anthropic:prompttext'] = 'Lời nhắc văn bản do người dùng nhập để tạo phản hồi.';
$string['privacy:metadata:aiprovider_anthropic:userid'] = 'Mã băm một chiều của mã định danh trang web và ID người dùng, được gửi để Anthropic có thể phát hiện và giảm thiểu hành vi lạm dụng. Mã này không xác định danh tính người dùng.';
$string['settings'] = 'Cài đặt mô hình';
$string['settings_max_tokens'] = 'Số token tối đa';
$string['settings_max_tokens_help'] = 'Số token tối đa cần tạo trong phản hồi. API Anthropic yêu cầu phải đặt giá trị này.';
$string['settings_temperature'] = 'Temperature';
$string['settings_temperature_help'] = 'Temperature kiểm soát mức độ ngẫu nhiên trong đầu ra của mô hình. Giá trị thấp hơn (gần 0) giúp đầu ra dễ dự đoán và tập trung hơn. Giá trị cao hơn (gần 1) giúp đầu ra sáng tạo và đa dạng hơn.';
