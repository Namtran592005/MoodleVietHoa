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
 * @subpackage deepseek
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'Điểm cuối API';
$string['action:explain_text:model'] = 'Mô hình giải thích văn bản';
$string['action:explain_text:model_help'] = 'Mô hình được dùng để giải thích văn bản đã cung cấp.';
$string['action:explain_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:explain_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này, trừ khi thực sự cần thiết.';
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
$string['apikey'] = 'Khóa API DeepSeek';
$string['apikey_help'] = 'Lấy khóa từ <a href="https://platform.deepseek.com/api_keys" target="_blank">các khóa API DeepSeek</a> của bạn.';
$string['custom_model_name'] = 'Tên mô hình tùy chỉnh';
$string['extraparams'] = 'Tham số bổ sung';
$string['extraparams_help'] = 'Có thể cấu hình các tham số bổ sung tại đây. Chúng tôi hỗ trợ định dạng JSON. Ví dụ:
<pre>
{
    "temperature": 0.5,
    "max_tokens": 100
}
</pre>';
$string['invalidjson'] = 'Chuỗi JSON không hợp lệ';
$string['pluginname'] = 'Nhà cung cấp DeepSeek API';
$string['privacy:metadata'] = 'Plugin nhà cung cấp DeepSeek API không lưu trữ dữ liệu cá nhân nào.';
$string['privacy:metadata:aiprovider_deepseek:externalpurpose'] = 'Thông tin này được gửi đến DeepSeek API để tạo phản hồi. Cài đặt tài khoản DeepSeek của bạn có thể ảnh hưởng đến cách DeepSeek lưu trữ và duy trì dữ liệu này. Plugin này không chủ động gửi dữ liệu người dùng đến DeepSeek hoặc lưu trữ dữ liệu đó trong Moodle LMS.';
$string['privacy:metadata:aiprovider_deepseek:model'] = 'Mô hình được dùng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_deepseek:prompttext'] = 'Lời nhắc dạng văn bản do người dùng nhập, được dùng để tạo phản hồi.';
$string['settings'] = 'Cài đặt';
$string['settings_frequency_penalty'] = 'frequency_penalty';
$string['settings_frequency_penalty_help'] = 'Số từ -2.0 đến 2.0. Giá trị dương phạt các token mới dựa trên tần suất xuất hiện của chúng trong văn bản trước đó, làm giảm khả năng mô hình lặp lại nguyên văn cùng một câu.';
$string['settings_help'] = 'Điều chỉnh các cài đặt bên dưới để tùy chỉnh cách gửi yêu cầu đến DeepSeek.';
$string['settings_logprobs'] = 'logprobs';
$string['settings_logprobs_help'] = 'Có trả về log probability của các token đầu ra hay không. Nếu bật, log probability của từng token đầu ra được trả về trong nội dung thông điệp.';
$string['settings_logprobs_label'] = 'Bật';
$string['settings_max_tokens'] = 'max_tokens';
$string['settings_max_tokens_help'] = 'Số nguyên từ 1 đến 8192. Số token tối đa có thể được tạo trong lần hoàn thành cuộc trò chuyện. Tổng độ dài của token đầu vào và token được tạo bị giới hạn bởi độ dài ngữ cảnh của mô hình. Nếu không chỉ định max_tokens, giá trị mặc định 4096 sẽ được sử dụng.';
$string['settings_presence_penalty'] = 'presence_penalty';
$string['settings_presence_penalty_help'] = 'Số từ -2.0 đến 2.0. Giá trị dương phạt các token mới dựa trên việc chúng đã xuất hiện trong văn bản trước đó hay chưa, làm tăng khả năng mô hình đề cập đến chủ đề mới.';
$string['settings_temperature'] = 'temperature';
$string['settings_temperature_help'] = 'Mức nhiệt độ lấy mẫu cần dùng, trong khoảng từ 0 đến 2. Giá trị cao hơn như 0.8 khiến đầu ra ngẫu nhiên hơn, còn giá trị thấp hơn như 0.2 khiến đầu ra tập trung và có tính xác định hơn. Nhìn chung, chúng tôi khuyên bạn chỉ điều chỉnh thông số này hoặc top_p, không điều chỉnh cả hai.';
$string['settings_top_logprobs'] = 'top_logprobs';
$string['settings_top_logprobs_help'] = 'Số nguyên từ 0 đến 20, chỉ định số token có khả năng cao nhất cần trả về tại mỗi vị trí token, kèm theo log probability tương ứng. Nếu sử dụng tham số này, logprobs phải được đặt thành true.';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'Một phương pháp thay thế cho lấy mẫu bằng temperature, gọi là lấy mẫu theo hạt nhân, trong đó mô hình xem xét kết quả của các token có tổng xác suất top_p. Ví dụ, 0.1 nghĩa là chỉ xem xét các token chiếm 10% tổng xác suất cao nhất. Nhìn chung, chúng tôi khuyên bạn chỉ điều chỉnh thông số này hoặc temperature, không điều chỉnh cả hai.';
