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
 * @subpackage azureai
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_apiversion'] = 'Phiên bản API';
$string['action_deployment'] = 'ID triển khai';
$string['action_deployment_desc'] = 'ID triển khai liên kết với điểm cuối API mà nhà cung cấp sử dụng cho tác vụ này.';
$string['action_systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action_systeminstruction_desc'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
$string['action:explain_text:apiversion'] = 'Phiên bản API';
$string['action:explain_text:deployment'] = 'ID triển khai';
$string['action:explain_text:deployment_help'] = 'ID triển khai liên kết với điểm cuối API mà nhà cung cấp sử dụng cho tác vụ này.';
$string['action:explain_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:explain_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
$string['action:generate_image:apiversion'] = 'Phiên bản API';
$string['action:generate_image:deployment'] = 'ID triển khai';
$string['action:generate_image:deployment_help'] = 'ID triển khai liên kết với điểm cuối API mà nhà cung cấp sử dụng cho tác vụ này.';
$string['action:generate_text:apiversion'] = 'Phiên bản API';
$string['action:generate_text:deployment'] = 'ID triển khai';
$string['action:generate_text:deployment_help'] = 'ID triển khai liên kết với điểm cuối API mà nhà cung cấp sử dụng cho tác vụ này.';
$string['action:generate_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:generate_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
$string['action:summarise_text:apiversion'] = 'Phiên bản API';
$string['action:summarise_text:deployment'] = 'ID triển khai';
$string['action:summarise_text:deployment_help'] = 'ID triển khai liên kết với điểm cuối API mà nhà cung cấp sử dụng cho tác vụ này.';
$string['action:summarise_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:summarise_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
$string['apikey'] = 'Khóa API Azure AI';
$string['apikey_desc'] = 'Nhập khóa API Azure AI của bạn.';
$string['apikey_help'] = 'Nhập khóa API Azure AI của bạn.';
$string['deployment'] = 'Tên triển khai API Azure AI';
$string['deployment_desc'] = 'Nhập tên triển khai cho API Azure AI của bạn.';
$string['enableglobalratelimit'] = 'Đặt giới hạn tốc độ toàn trang';
$string['enableglobalratelimit_desc'] = 'Giới hạn số yêu cầu mà nhà cung cấp Azure AI API có thể nhận trên toàn trang trong mỗi giờ.';
$string['enableuserratelimit'] = 'Đặt giới hạn tốc độ cho người dùng';
$string['enableuserratelimit_desc'] = 'Giới hạn số yêu cầu mỗi người dùng có thể gửi đến nhà cung cấp Azure AI API trong mỗi giờ.';
$string['endpoint'] = 'Điểm cuối API Azure AI';
$string['endpoint_desc'] = 'Nhập URL điểm cuối cho API Azure AI theo định dạng sau: https://YOUR_RESOURCE_NAME.openai.azure.com';
$string['endpoint_help'] = 'Nhập URL điểm cuối cho API Azure AI theo định dạng sau: https://YOUR_RESOURCE_NAME.openai.azure.com';
$string['globalratelimit'] = 'Số yêu cầu tối đa trên toàn trang';
$string['globalratelimit_desc'] = 'Số yêu cầu được phép trên toàn trang trong mỗi giờ.';
$string['pluginname'] = 'Nhà cung cấp Azure AI API';
$string['privacy:metadata'] = 'Plugin nhà cung cấp Azure AI API không lưu trữ dữ liệu cá nhân nào.';
$string['privacy:metadata:aiprovider_azureai:externalpurpose'] = 'Thông tin này được gửi đến Azure API để tạo phản hồi. Cài đặt tài khoản Azure AI của bạn có thể ảnh hưởng đến cách Microsoft lưu trữ và duy trì dữ liệu này. Plugin này không chủ động gửi dữ liệu người dùng đến Microsoft hoặc lưu trữ dữ liệu đó trong Moodle LMS.';
$string['privacy:metadata:aiprovider_azureai:model'] = 'Mô hình được dùng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_azureai:numberimages'] = 'Khi tạo hình ảnh, số lượng hình ảnh trong phản hồi.';
$string['privacy:metadata:aiprovider_azureai:prompttext'] = 'Lời nhắc dạng văn bản do người dùng nhập, được dùng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_azureai:responseformat'] = 'Định dạng phản hồi khi tạo hình ảnh.';
$string['userratelimit'] = 'Số yêu cầu tối đa cho mỗi người dùng';
$string['userratelimit_desc'] = 'Số yêu cầu được phép cho mỗi người dùng trong mỗi giờ.';
