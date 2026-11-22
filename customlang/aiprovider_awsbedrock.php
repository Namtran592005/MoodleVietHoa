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
 * @subpackage awsbedrock
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:model'] = 'Mô hình AI';
$string['action:explain_text:model_help'] = 'Mô hình được dùng để giải thích văn bản đã cung cấp.';
$string['action:explain_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:explain_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này trừ khi thực sự cần thiết.';
$string['action:generate_image:model'] = 'Mô hình AI';
$string['action:generate_image:model_help'] = 'Mô hình được dùng để tạo hình ảnh từ lời nhắc của người dùng. <a href="https://docs.aws.amazon.com/bedrock/latest/userguide/models-supported.html" target="_blank">Các mô hình nền tảng được hỗ trợ trong Amazon Bedrock</a>';
$string['action:generate_text:model'] = 'Mô hình AI';
$string['action:generate_text:model_help'] = 'Mô hình được dùng để tạo phản hồi bằng văn bản. <a href="https://docs.aws.amazon.com/bedrock/latest/userguide/models-supported.html" target="_blank">Các mô hình nền tảng được hỗ trợ trong Amazon Bedrock</a>';
$string['action:generate_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:generate_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này trừ khi thực sự cần thiết.';
$string['action:summarise_text:model'] = 'Mô hình AI';
$string['action:summarise_text:model_help'] = 'Mô hình được dùng để tóm tắt văn bản đã cung cấp.';
$string['action:summarise_text:systeminstruction'] = 'Chỉ dẫn hệ thống';
$string['action:summarise_text:systeminstruction_help'] = 'Chỉ dẫn này được gửi đến mô hình AI cùng với lời nhắc của người dùng. Không nên chỉnh sửa chỉ dẫn này trừ khi thực sự cần thiết.';
$string['apikey'] = 'Thông tin xác thực khóa API Amazon';
$string['apikey_help'] = 'Tạo khóa bằng Identity and Access Management (IAM) trong bảng điều khiển Amazon Web Services (AWS) hoặc bằng AWS Command Line Interface (CLI).';
$string['apisecret'] = 'Thông tin xác thực khóa bí mật API Amazon';
$string['apisecret_help'] = 'Tạo khóa bí mật bằng Identity and Access Management (IAM) trong bảng điều khiển Amazon Web Services (AWS) hoặc bằng AWS Command Line Interface (CLI).';
$string['awsregion'] = 'Khu vực';
$string['awsregion_help'] = 'Khu vực Amazon Web Services (AWS) nơi lưu trữ mô hình AI.';
$string['awsregion:af-south-1'] = 'Châu Phi (Cape Town)';
$string['awsregion:ap-east-2'] = 'Châu Á Thái Bình Dương (Đài Bắc)';
$string['awsregion:ap-northeast-1'] = 'Châu Á Thái Bình Dương (Tokyo)';
$string['awsregion:ap-northeast-2'] = 'Châu Á Thái Bình Dương (Seoul)';
$string['awsregion:ap-northeast-3'] = 'Châu Á Thái Bình Dương (Osaka)';
$string['awsregion:ap-south-1'] = 'Châu Á Thái Bình Dương (Mumbai)';
$string['awsregion:ap-south-2'] = 'Châu Á Thái Bình Dương (Hyderabad)';
$string['awsregion:ap-southeast-1'] = 'Châu Á Thái Bình Dương (Singapore)';
$string['awsregion:ap-southeast-2'] = 'Châu Á Thái Bình Dương (Sydney)';
$string['awsregion:ap-southeast-3'] = 'Châu Á Thái Bình Dương (Jakarta)';
$string['awsregion:ap-southeast-4'] = 'Châu Á Thái Bình Dương (Melbourne)';
$string['awsregion:ap-southeast-5'] = 'Châu Á Thái Bình Dương (Malaysia)';
$string['awsregion:ap-southeast-6'] = 'Châu Á Thái Bình Dương (New Zealand)';
$string['awsregion:ap-southeast-7'] = 'Châu Á Thái Bình Dương (Thái Lan)';
$string['awsregion:ca-central-1'] = 'Canada (Miền Trung)';
$string['awsregion:ca-west-1'] = 'Miền Tây Canada (Calgary)';
$string['awsregion:eu-central-1'] = 'Châu Âu (Frankfurt)';
$string['awsregion:eu-central-2'] = 'Châu Âu (Zurich)';
$string['awsregion:eu-north-1'] = 'Châu Âu (Stockholm)';
$string['awsregion:eu-south-1'] = 'Châu Âu (Milan)';
$string['awsregion:eu-south-2'] = 'Châu Âu (Tây Ban Nha)';
$string['awsregion:eu-west-1'] = 'Châu Âu (Ireland)';
$string['awsregion:eu-west-2'] = 'Châu Âu (London)';
$string['awsregion:eu-west-3'] = 'Châu Âu (Paris)';
$string['awsregion:il-central-1'] = 'Israel (Tel Aviv)';
$string['awsregion:me-central-1'] = 'Trung Đông (UAE)';
$string['awsregion:me-south-1'] = 'Trung Đông (Bahrain)';
$string['awsregion:mx-central-1'] = 'Mexico (Miền Trung)';
$string['awsregion:sa-east-1'] = 'Nam Mỹ (São Paulo)';
$string['awsregion:us-east-1'] = 'Miền Đông Hoa Kỳ (Bắc Virginia)';
$string['awsregion:us-east-2'] = 'Miền Đông Hoa Kỳ (Ohio)';
$string['awsregion:us-gov-east-1'] = 'AWS GovCloud (Miền Đông Hoa Kỳ)';
$string['awsregion:us-gov-west-1'] = 'AWS GovCloud (Miền Tây Hoa Kỳ)';
$string['awsregion:us-west-1'] = 'Miền Tây Hoa Kỳ (Bắc California)';
$string['awsregion:us-west-2'] = 'Miền Tây Hoa Kỳ (Oregon)';
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
$string['model_ai21.jamba-1-5-large-v1:0'] = 'AI21 Labs Jamba 1.5 Large';
$string['model_ai21.jamba-1-5-mini-v1:0'] = 'AI21 Labs Jamba 1.5 Mini';
$string['model_amazon.nova-canvas-v1:0'] = 'Amazon Nova Canvas';
$string['model_amazon.nova-lite-v1:0'] = 'Amazon Nova Lite';
$string['model_amazon.nova-micro-v1:0'] = 'Amazon Nova Micro';
$string['model_amazon.nova-pro-v1:0'] = 'Amazon Nova Pro';
$string['model_amazon.titan-image-generator-v2:0'] = 'Amazon Titan Image Generator V2';
$string['model_anthropic.claude-3-5-sonnet-20240620-v1:0'] = 'Claude 3.5 Sonnet V1';
$string['model_anthropic.claude-3-5-sonnet-20241022-v2:0'] = 'Claude 3.5 Sonnet V2';
$string['model_anthropic.claude-3-7-sonnet-20250219-v1:0'] = 'Claude 3.7 Sonnet V1';
$string['model_anthropic.claude-3-haiku-20240307-v1:0'] = 'Claude 3 Haiku';
$string['model_anthropic.claude-haiku-4-5-20251001-v1:0'] = 'Claude 4.5 Haiku';
$string['model_anthropic.claude-sonnet-4-20250514-v1:0'] = 'Claude 4.0 Sonnet V1';
$string['model_anthropic.claude-sonnet-4-5-20250929-v1:0'] = 'Claude 4.5 Sonnet V1';
$string['model_meta.llama3-1-405b-instruct-v1:0'] = 'Meta Llama 3.1 405B Instruct';
$string['model_meta.llama3-1-70b-instruct-v1:0'] = 'Meta Llama 3.1 70B Instruct';
$string['model_meta.llama3-1-8b-instruct-v1:0'] = 'Meta Llama 3.1 8B Instruct';
$string['model_meta.llama3-2-11b-instruct-v1:0'] = 'Meta Llama 3.2 11B Instruct';
$string['model_meta.llama3-2-1b-instruct-v1:0'] = 'Meta Llama 3.2 1B Instruct';
$string['model_meta.llama3-2-3b-instruct-v1:0'] = 'Meta Llama 3.2 3B Instruct';
$string['model_meta.llama3-2-90b-instruct-v1:0'] = 'Meta Llama 3.2 90B Instruct';
$string['model_meta.llama3-3-70b-instruct-v1:0'] = 'Meta Llama 3.3 70B Instruct';
$string['model_meta.llama3-70b-instruct-v1:0'] = 'Meta Llama 3 70B Instruct';
$string['model_meta.llama3-8b-instruct-v1:0'] = 'Meta Llama 3 8B Instruct';
$string['model_mistral.mistral-7b-instruct-v0:2'] = 'Mistral 7B Instruct';
$string['model_mistral.mistral-large-2402-v1:0'] = 'Mistral Large Instruct';
$string['model_mistral.mistral-small-2402-v1:0'] = 'Mistral Small Instruct';
$string['model_mistral.mixtral-8x7b-instruct-v0:1'] = 'Mixtral 8X7B Instruct';
$string['model_stability.sd3-5-large-v1:0'] = 'Stability AI Stable Diffusion 3.5 Large';
$string['model_stability.stable-image-core-v1:1'] = 'Stability AI Stable Image Core 1.1';
$string['model_stability.stable-image-ultra-v1:1'] = 'Stability AI Stable Image Ultra 1.1';
$string['none'] = 'Không có';
$string['pluginname'] = 'Nhà cung cấp Amazon Bedrock';
$string['privacy:metadata'] = 'Plugin nhà cung cấp Amazon Bedrock không lưu trữ dữ liệu cá nhân nào.';
$string['privacy:metadata:aiprovider_awsbedrock:externalpurpose'] = 'Thông tin này được gửi đến Amazon Web Services (AWS) để tạo phản hồi. Cài đặt tài khoản AWS của bạn có thể ảnh hưởng đến cách AWS lưu trữ và duy trì dữ liệu này. Plugin này không chủ động gửi dữ liệu người dùng đến AWS hoặc lưu trữ dữ liệu đó trong Moodle LMS.';
$string['privacy:metadata:aiprovider_awsbedrock:model'] = 'Mô hình được dùng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_awsbedrock:numberimages'] = 'Khi tạo hình ảnh, số lượng hình ảnh trong phản hồi.';
$string['privacy:metadata:aiprovider_awsbedrock:prompttext'] = 'Lời nhắc dạng văn bản do người dùng nhập, được dùng để tạo phản hồi.';
$string['privacy:metadata:aiprovider_awsbedrock:responseformat'] = 'Định dạng phản hồi khi tạo hình ảnh.';
$string['settings'] = 'Cài đặt';
$string['settings_cfg_scale'] = 'Hệ số Classifier-Free Guidance (CFG)';
$string['settings_cfg_scale_help'] = 'Xác định mức độ hình ảnh được tạo ra phải tuân theo lời nhắc. Dùng giá trị thấp hơn để tạo ra nhiều yếu tố ngẫu nhiên hơn. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
$string['settings_cross_region_inference'] = 'Suy luận xuyên khu vực';
$string['settings_cross_region_inference_help'] = 'ID hồ sơ suy luận cho mô hình này. Mặc định: {$a->default}';
$string['settings_frequency_penalty'] = 'Mức phạt tần suất';
$string['settings_frequency_penalty_help'] = 'Mức phạt tần suất điều chỉnh tần suất lặp lại của từ. Mức phạt càng cao thì văn bản được tạo ra càng ít lặp lại. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
$string['settings_help'] = 'Điều chỉnh các cài đặt bên dưới để tùy chỉnh cách gửi yêu cầu đến Amazon Bedrock.';
$string['settings_max_tokens'] = 'Số token tối đa';
$string['settings_max_tokens_help'] = 'Số token tối đa được dùng để tạo nội dung. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
$string['settings_negative_prompt_img'] = 'Lời nhắc phủ định';
$string['settings_negative_prompt_img_help'] = 'Chỉ định các từ khóa mô tả những yếu tố cần loại trừ khỏi hình ảnh được tạo. Nhập các từ hoặc cụm từ ngắn, phân tách bằng dấu phẩy. Độ dài tối đa: 10.000 ký tự';
$string['settings_presence_penalty'] = 'Mức phạt sự hiện diện';
$string['settings_presence_penalty_help'] = 'Tăng giá trị này để giảm tần suất lặp lại từ trong một thông điệp. Khác với mức phạt tần suất, mức phạt sự hiện diện không thay đổi dù một từ xuất hiện bao nhiêu lần. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
$string['settings_schema_version'] = 'Phiên bản lược đồ';
$string['settings_schema_version_help'] = 'Phiên bản lược đồ dùng cho yêu cầu. Mặc định: {$a->default}.';
$string['settings_seed'] = 'Seed';
$string['settings_seed_help'] = 'Đảm bảo kết quả nhất quán khi dùng cùng seed và các tham số. Kết quả thường có thể lặp lại, nhưng không đảm bảo nhất quán tuyệt đối 100%. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
$string['settings_seed_img'] = 'Seed';
$string['settings_seed_img_help'] = 'Xác định mức nhiễu ban đầu cho quy trình tạo ảnh. Thay đổi giá trị seed trong khi giữ nguyên các tham số khác sẽ tạo ra một hình ảnh hoàn toàn mới nhưng vẫn tuân theo lời nhắc, kích thước và các cài đặt khác. Thông thường, bạn nên thử nhiều giá trị seed để tìm được hình ảnh phù hợp nhất. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
$string['settings_stop_sequences'] = 'Chuỗi dừng';
$string['settings_stop_sequences_help'] = 'Chỉ định chuỗi ký tự cho biết vị trí mô hình cần dừng.';
$string['settings_temperature'] = 'Temperature';
$string['settings_temperature_help'] = 'Dùng giá trị thấp hơn để giảm tính ngẫu nhiên của phản hồi. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
$string['settings_top_k'] = 'Top K';
$string['settings_top_k_help'] = 'Chỉ lấy mẫu trong số K tùy chọn hàng đầu cho mỗi token tiếp theo. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
$string['settings_top_p'] = 'Top P';
$string['settings_top_p_help'] = 'Dùng giá trị thấp hơn để bỏ qua các tùy chọn ít có khả năng xảy ra hơn và giảm tính đa dạng của phản hồi. Tối thiểu: {$a->min}, Tối đa: {$a->max}, Mặc định: {$a->default}.';
