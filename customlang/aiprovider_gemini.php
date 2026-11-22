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
 * @subpackage gemini
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'Điểm cuối API';
$string['action:explain_text:model'] = 'Mô hình AI';
$string['action:explain_text:model_help'] = 'Mô hình được dùng để giải thích văn bản đã cung cấp.';
$string['action:explain_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:explain_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
$string['action:generate_image:endpoint'] = 'Điểm cuối API';
$string['action:generate_image:model'] = 'Mô hình AI';
$string['action:generate_image:model_help'] = 'Mô hình được dùng để tạo hình ảnh từ lời nhắc của người dùng.';
$string['action:generate_image:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:generate_image:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
$string['action:generate_text:endpoint'] = 'Điểm cuối API';
$string['action:generate_text:model'] = 'Mô hình AI';
$string['action:generate_text:model_help'] = 'Mô hình được dùng để tạo phản hồi dạng văn bản.';
$string['action:generate_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:generate_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
$string['action:summarise_text:endpoint'] = 'Điểm cuối API';
$string['action:summarise_text:model'] = 'Mô hình AI';
$string['action:summarise_text:model_help'] = 'Mô hình được dùng để tóm tắt văn bản đã cung cấp.';
$string['action:summarise_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:summarise_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
$string['apikey'] = 'Khóa API Gemini';
$string['apikey_help'] = 'Lấy khóa từ <a href="https://aistudio.google.com/apikey" target="_blank">các khóa API Google AI Studio</a>.';
$string['custom_model_name'] = 'Tên mô hình tùy chỉnh';
$string['extraparams'] = 'Tham số bổ sung';
$string['extraparams_help'] = 'Có thể cấu hình các tham số bổ sung tại đây. Chúng tôi hỗ trợ định dạng JSON. Ví dụ:
<pre>
{
    "temperature": 0.5,
    "max_output_tokens": 100
}
</pre>';
$string['getallmodels_error'] = 'Trước tiên, bạn cần nhập khóa API.';
$string['invalidjson'] = 'Chuỗi JSON không hợp lệ';
$string['pluginname'] = 'Nhà cung cấp API Gemini';
$string['privacy:metadata'] = 'Plugin nhà cung cấp API Gemini không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['privacy:metadata:aiprovider_gemini:externalpurpose'] = 'Thông tin này được gửi đến Gemini API để tạo phản hồi. Cài đặt tài khoản Gemini của bạn có thể ảnh hưởng đến cách Gemini lưu trữ và lưu giữ dữ liệu này. Plugin này không gửi rõ ràng dữ liệu người dùng đến Gemini hoặc lưu trữ dữ liệu đó trong Moodle LMS.';
$string['privacy:metadata:aiprovider_gemini:model'] = 'Mô hình được sử dụng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_gemini:numberimages'] = 'Khi tạo hình ảnh, số lượng hình ảnh được sử dụng trong phản hồi.';
$string['privacy:metadata:aiprovider_gemini:prompttext'] = 'Văn bản lời nhắc do người dùng nhập, được sử dụng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_gemini:responseformat'] = 'Khi tạo hình ảnh, định dạng của phản hồi.';
$string['settings'] = 'Cài đặt';
$string['settings_help'] = 'Điều chỉnh các cài đặt bên dưới để tùy chỉnh cách gửi yêu cầu đến Gemini.';
$string['settings_max_output_tokens'] = 'Số token tối đa';
$string['settings_max_output_tokens_help'] = 'Số token tối đa được sử dụng trong văn bản được tạo.';
$string['settings_stop_sequences'] = 'Chuỗi dừng';
$string['settings_stop_sequences_help'] = 'Chỉ định một hoặc nhiều chuỗi ký tự (phân tách bằng dấu phẩy) tại đó mô hình sẽ dừng tạo văn bản.';
$string['settings_temperature'] = 'Temperature';
$string['settings_temperature_help'] = 'Temperature ảnh hưởng đến việc đầu ra có tính ngẫu nhiên, sáng tạo hơn hay dễ dự đoán hơn. Tăng temperature sẽ khiến mô hình trả lời sáng tạo hơn. Cài đặt này hoạt động cùng với các tùy chọn khác như top p và top k để tạo đầu ra.';
$string['settings_top_k'] = 'Top k';
$string['settings_top_k_help'] = 'Giảm khả năng tạo ra nội dung vô nghĩa. Giá trị cao hơn (ví dụ: 100) sẽ tạo ra câu trả lời đa dạng hơn, trong khi giá trị thấp hơn (ví dụ: 10) sẽ thận trọng hơn.';
$string['settings_top_p'] = 'Top p';
$string['settings_top_p_help'] = 'Top p (lấy mẫu hạt nhân) xác định số lượng từ có thể được cân nhắc. Giá trị cao (ví dụ: 0.9) nghĩa là mô hình xem xét nhiều từ hơn, giúp văn bản được tạo ra đa dạng hơn.';
