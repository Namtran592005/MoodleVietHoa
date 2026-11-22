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
 * @subpackage openai
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'Điểm cuối API';
$string['action:explain_text:model'] = 'Mô hình AI';
$string['action:explain_text:model_help'] = 'Mô hình được sử dụng để giải thích văn bản đã cung cấp.';
$string['action:explain_text:systeminstruction'] = 'Chỉ thị hệ thống';
$string['action:explain_text:systeminstruction_help'] = 'Chỉ thị này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ thị này trừ khi thực sự cần thiết.';
$string['action:generate_image:endpoint'] = 'Điểm cuối API';
$string['action:generate_image:model'] = 'Mô hình AI';
$string['action:generate_image:model_desc'] = 'Mô hình được sử dụng để tạo hình ảnh từ lời nhắc của người dùng.';
$string['action:generate_image:model_help'] = 'Mô hình được sử dụng để tạo hình ảnh từ lời nhắc của người dùng.';
$string['action:generate_text:endpoint'] = 'Điểm cuối API';
$string['action:generate_text:model'] = 'Mô hình AI';
$string['action:generate_text:model_desc'] = 'Mô hình được sử dụng để tạo phản hồi văn bản.';
$string['action:generate_text:model_help'] = 'Mô hình được sử dụng để tạo phản hồi văn bản.';
$string['action:generate_text:systeminstruction'] = 'Chỉ thị hệ thống';
$string['action:generate_text:systeminstruction_desc'] = 'Chỉ thị này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ thị này trừ khi thực sự cần thiết.';
$string['action:generate_text:systeminstruction_help'] = 'Chỉ thị này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ thị này trừ khi thực sự cần thiết.';
$string['action:summarise_text:endpoint'] = 'Điểm cuối API';
$string['action:summarise_text:model'] = 'Mô hình AI';
$string['action:summarise_text:model_desc'] = 'Mô hình được sử dụng để tóm tắt văn bản đã cung cấp.';
$string['action:summarise_text:model_help'] = 'Mô hình được sử dụng để tóm tắt văn bản đã cung cấp.';
$string['action:summarise_text:systeminstruction'] = 'Chỉ thị hệ thống';
$string['action:summarise_text:systeminstruction_desc'] = 'Chỉ thị này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ thị này trừ khi thực sự cần thiết.';
$string['action:summarise_text:systeminstruction_help'] = 'Chỉ thị này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ thị này trừ khi thực sự cần thiết.';
$string['apikey'] = 'Khóa OpenAI API';
$string['apikey_desc'] = 'Lấy khóa từ <a href="https://platform.openai.com/account/api-keys">khóa API trên OpenAI Platform</a>.';
$string['apikey_help'] = 'Lấy khóa tại <a href="https://platform.openai.com/account/api-keys" target="_blank">khóa OpenAI API</a>.';
$string['custom_model_name'] = 'Tên mô hình tùy chỉnh';
$string['enableglobalratelimit'] = 'Đặt giới hạn tốc độ trên toàn trang';
$string['enableglobalratelimit_desc'] = 'Giới hạn số yêu cầu mà nhà cung cấp API OpenAI có thể nhận được mỗi giờ trên toàn bộ trang.';
$string['enableuserratelimit'] = 'Đặt giới hạn tốc độ cho người dùng';
$string['enableuserratelimit_desc'] = 'Giới hạn số yêu cầu mỗi người dùng có thể gửi đến nhà cung cấp API OpenAI mỗi giờ.';
$string['extraparams'] = 'Tham số bổ sung';
$string['extraparams_help'] = 'Có thể cấu hình thêm các tham số tại đây. Chúng tôi hỗ trợ định dạng JSON. Ví dụ:
<pre>
{
    "temperature": 0.5,
    "max_completion_tokens": 100
}
</pre>';
$string['globalratelimit'] = 'Số yêu cầu tối đa trên toàn trang';
$string['globalratelimit_desc'] = 'Số yêu cầu được phép mỗi giờ trên toàn trang.';
$string['invalidjson'] = 'Chuỗi JSON không hợp lệ';
$string['orgid'] = 'ID tổ chức OpenAI';
$string['orgid_desc'] = 'Lấy ID tổ chức OpenAI từ <a href="https://platform.openai.com/account/org-settings">tài khoản OpenAI Platform</a> của bạn.';
$string['orgid_help'] = 'Lấy ID tổ chức OpenAI từ <a href="https://platform.openai.com/account/org-settings" target="_blank">tài khoản OpenAI</a> của bạn.';
$string['pluginname'] = 'Nhà cung cấp API OpenAI';
$string['privacy:metadata'] = 'Plugin nhà cung cấp API OpenAI không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = 'Thông tin này được gửi đến OpenAI API để tạo phản hồi. Cài đặt tài khoản OpenAI của bạn có thể ảnh hưởng đến cách OpenAI lưu trữ và lưu giữ dữ liệu này. Plugin này không gửi rõ ràng dữ liệu người dùng đến OpenAI hoặc lưu trữ dữ liệu đó trong Moodle LMS.';
$string['privacy:metadata:aiprovider_openai:model'] = 'Mô hình được sử dụng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_openai:numberimages'] = 'Khi tạo hình ảnh, số lượng hình ảnh được sử dụng trong phản hồi.';
$string['privacy:metadata:aiprovider_openai:prompttext'] = 'Văn bản lời nhắc do người dùng nhập, được sử dụng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_openai:responseformat'] = 'Định dạng của phản hồi khi tạo hình ảnh.';
$string['settings'] = 'Cài đặt';
$string['settings_frequency_penalty'] = 'frequency_penalty';
$string['settings_frequency_penalty_help'] = 'Mức phạt tần suất điều chỉnh mức độ lặp lại của từ. Mức phạt càng cao, văn bản được tạo càng ít lặp lại.';
$string['settings_help'] = 'Điều chỉnh các cài đặt bên dưới để tùy chỉnh cách gửi yêu cầu đến OpenAI.';
$string['settings_max_completion_tokens'] = 'max_completion_tokens';
$string['settings_max_completion_tokens_help'] = 'Số token tối đa được sử dụng trong văn bản được tạo.';
$string['settings_max_tokens'] = 'max_tokens';
$string['settings_max_tokens_help'] = 'Số token tối đa được sử dụng trong văn bản được tạo.';
$string['settings_presence_penalty'] = 'presence_penalty';
$string['settings_presence_penalty_help'] = 'Mức phạt hiện diện khuyến khích mô hình sử dụng từ mới bằng cách tăng khả năng chọn những từ chưa từng dùng. Giá trị cao hơn khiến văn bản được tạo đa dạng hơn, trong khi giá trị thấp hơn cho phép lặp lại nhiều hơn.';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'top_p (lấy mẫu hạt nhân) xác định số lượng từ có thể được cân nhắc. Giá trị cao (ví dụ: 0.9) nghĩa là mô hình xem xét nhiều từ hơn, giúp văn bản được tạo ra đa dạng hơn.';
$string['userratelimit'] = 'Số yêu cầu tối đa cho mỗi người dùng';
$string['userratelimit_desc'] = 'Số yêu cầu được phép mỗi giờ cho mỗi người dùng.';
