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
 * @subpackage ollama
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:model'] = 'Mô hình giải thích văn bản';
$string['action:explain_text:model_help'] = 'Mô hình được sử dụng để giải thích văn bản đã cung cấp.';
$string['action:explain_text:systeminstruction'] = 'Chỉ thị hệ thống';
$string['action:explain_text:systeminstruction_help'] = 'Chỉ thị này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ thị này trừ khi thực sự cần thiết.';
$string['action:generate_text:model'] = 'Mô hình tạo văn bản';
$string['action:generate_text:model_help'] = 'Mô hình được sử dụng để tạo phản hồi văn bản.';
$string['action:generate_text:systeminstruction'] = 'Chỉ thị hệ thống';
$string['action:generate_text:systeminstruction_help'] = 'Chỉ thị này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ thị này trừ khi thực sự cần thiết.';
$string['action:summarise_text:model'] = 'Mô hình tóm tắt văn bản';
$string['action:summarise_text:model_help'] = 'Mô hình được sử dụng để tóm tắt văn bản đã cung cấp.';
$string['action:summarise_text:systeminstruction'] = 'Chỉ thị hệ thống';
$string['action:summarise_text:systeminstruction_help'] = 'Chỉ thị này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ thị này trừ khi thực sự cần thiết.';
$string['custom_model_name'] = 'Tên mô hình tùy chỉnh';
$string['enablebasicauth'] = 'Bật xác thực cơ bản';
$string['enablebasicauth_help'] = 'Bật xác thực cơ bản cho nhà cung cấp API Ollama.';
$string['endpoint'] = 'Điểm cuối API';
$string['endpoint_help'] = 'Điểm cuối API của máy chủ Ollama API.';
$string['extraparams'] = 'Tham số bổ sung';
$string['extraparams_help'] = 'Có thể cấu hình thêm các tham số tại đây. Chúng tôi hỗ trợ định dạng JSON. Ví dụ:
<pre>
{
    "temperature": 0.5,
    "max_tokens": 100
}
</pre>';
$string['invalidjson'] = 'Chuỗi JSON không hợp lệ';
$string['password'] = 'Mật khẩu';
$string['password_help'] = 'Mật khẩu được sử dụng để xác thực cơ bản.';
$string['pluginname'] = 'Nhà cung cấp API Ollama';
$string['privacy:metadata'] = 'Plugin nhà cung cấp API Ollama không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['privacy:metadata:aiprovider_ollama:externalpurpose'] = 'Thông tin này được gửi đến Ollama API để tạo phản hồi. Cài đặt tài khoản Ollama của bạn có thể ảnh hưởng đến cách Ollama lưu trữ và lưu giữ dữ liệu này. Plugin này không gửi rõ ràng dữ liệu người dùng đến Ollama hoặc lưu trữ dữ liệu đó trong Moodle LMS.';
$string['privacy:metadata:aiprovider_ollama:model'] = 'Mô hình được sử dụng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_ollama:prompttext'] = 'Văn bản lời nhắc do người dùng nhập, được sử dụng để tạo phản hồi.';
$string['settings'] = 'Cài đặt';
$string['settings_help'] = 'Điều chỉnh các cài đặt bên dưới để tùy chỉnh cách gửi yêu cầu đến Ollama.';
$string['settings_mirostat'] = 'Mirostat';
$string['settings_mirostat_help'] = 'Mirostat là thuật toán giải mã văn bản bằng mạng nơ-ron để kiểm soát độ hỗn loạn. 0 = tắt, 1 = Mirostat, 2 = Mirostat 2.0. (Mặc định: 0)';
$string['settings_seed'] = 'seed';
$string['settings_seed_help'] = 'Đặt seed số ngẫu nhiên được dùng để tạo văn bản. Đặt thành một số cụ thể sẽ khiến mô hình tạo cùng một văn bản cho cùng một lời nhắc. (Mặc định: 0)';
$string['settings_temperature'] = 'temperature';
$string['settings_temperature_help'] = 'Temperature ảnh hưởng đến việc đầu ra có tính ngẫu nhiên, sáng tạo hơn hay dễ dự đoán hơn. Tăng temperature sẽ khiến mô hình trả lời sáng tạo hơn. (Mặc định: 0.8)';
$string['settings_top_k'] = 'top_k';
$string['settings_top_k_help'] = 'Giảm khả năng tạo ra nội dung vô nghĩa. Giá trị cao hơn (ví dụ: 100) sẽ tạo ra câu trả lời đa dạng hơn, trong khi giá trị thấp hơn (ví dụ: 10) sẽ thận trọng hơn. (Mặc định: 40)';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'Hoạt động kết hợp với top-k. Giá trị cao hơn (ví dụ: 0.95) sẽ tạo ra văn bản đa dạng hơn, trong khi giá trị thấp hơn (ví dụ: 0.5) sẽ tạo ra văn bản tập trung và thận trọng hơn. (Mặc định: 0.9)';
$string['username'] = 'Tên đăng nhập';
$string['username_help'] = 'Tên đăng nhập được sử dụng để xác thực cơ bản.';
