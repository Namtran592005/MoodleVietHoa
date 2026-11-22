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
 * @subpackage ai
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Chấp nhận và tiếp tục';
$string['action'] = 'Hành động';
$string['action_explain_text'] = 'Giải thích văn bản';
$string['action_explain_text_desc'] = 'Giải thích nội dung văn bản trên trang khóa học.';
$string['action_explain_text_help'] = 'Cung cấp lời giải thích làm rõ các ý chính, đơn giản hóa khái niệm phức tạp và bổ sung ngữ cảnh để văn bản dễ hiểu hơn.';
$string['action_explain_text_instruction'] = 'Bạn sẽ nhận được văn bản do người dùng nhập. Nhiệm vụ của bạn là giải thích văn bản được cung cấp. Hãy làm theo các hướng dẫn sau:
    1. Diễn giải sâu hơn: Làm rõ các ý tưởng và khái niệm chính, đảm bảo lời giải thích bổ sung nội dung có ý nghĩa và tránh lặp lại nguyên văn văn bản.
    2. Đơn giản hóa: Chia các thuật ngữ hoặc ý tưởng phức tạp thành những phần đơn giản hơn để nhiều đối tượng, bao gồm cả người học, dễ hiểu.
    3. Cung cấp ngữ cảnh: Giải thích vì sao điều gì đó xảy ra, cách thức hoạt động hoặc mục đích của nó. Khi phù hợp, hãy đưa ra ví dụ hoặc phép so sánh có liên quan để tăng khả năng hiểu.
    4. Sắp xếp hợp lý: Trình bày lời giải thích theo trình tự tự nhiên, bắt đầu từ những ý cơ bản rồi chuyển sang các chi tiết cụ thể hơn.

Hướng dẫn quan trọng:
    1. Chỉ trả lời phần tóm tắt bằng văn bản thuần.
    2. Không sử dụng định dạng Markdown, lời chào hoặc những câu sáo rỗng.
    3. Tập trung vào sự rõ ràng, súc tích và dễ tiếp cận.

Đảm bảo lời giải thích dễ đọc và truyền tải hiệu quả các ý chính của văn bản gốc.';
$string['action_generate_image'] = 'Tạo hình ảnh';
$string['action_generate_image_desc'] = 'Tạo hình ảnh dựa trên câu lệnh văn bản.';
$string['action_generate_image_help'] = 'Tạo hình ảnh dựa trên câu lệnh.';
$string['action_generate_text'] = 'Tạo văn bản';
$string['action_generate_text_desc'] = 'Tạo văn bản dựa trên câu lệnh văn bản.';
$string['action_generate_text_help'] = 'Tạo văn bản dựa trên câu lệnh.';
$string['action_generate_text_instruction'] = 'Bạn sẽ nhận được văn bản do người dùng nhập. Nhiệm vụ của bạn là tạo văn bản theo yêu cầu của họ. Hãy làm theo các hướng dẫn quan trọng sau:
    1. Chỉ trả lời phần tóm tắt bằng văn bản thuần.
    2. Không sử dụng định dạng Markdown, lời chào hoặc những câu sáo rỗng.';
$string['action_summarise_text'] = 'Tóm tắt văn bản';
$string['action_summarise_text_desc'] = 'Tóm tắt nội dung văn bản trên trang khóa học.';
$string['action_summarise_text_help'] = 'Tạo bản tóm tắt ngắn gọn nội dung trên một trang.';
$string['action_summarise_text_instruction'] = 'Bạn sẽ nhận được văn bản do người dùng nhập. Nhiệm vụ của bạn là tóm tắt văn bản được cung cấp. Hãy làm theo các hướng dẫn sau:
    1. Cô đọng: Rút gọn những đoạn dài thành các ý chính.
    2. Đơn giản hóa: Giúp thông tin phức tạp dễ hiểu hơn, đặc biệt là với người học.

Hướng dẫn quan trọng:
    1. Chỉ trả lời phần tóm tắt bằng văn bản thuần.
    2. Không sử dụng định dạng Markdown, lời chào hoặc những câu sáo rỗng.
    3. Tập trung vào sự rõ ràng, súc tích và dễ tiếp cận.

Đảm bảo bản tóm tắt dễ đọc và truyền tải hiệu quả các ý chính của văn bản gốc.';
$string['action_translate_text'] = 'Dịch văn bản';
$string['action_translate_text_desc'] = 'Dịch văn bản được cung cấp từ ngôn ngữ này sang ngôn ngữ khác.';
$string['actiondetailsummary'] = 'Tóm tắt hành động';
$string['actionsettingprovider'] = 'Cài đặt hành động {$a}';
$string['actionsettingprovider_desc'] = 'Các cài đặt này kiểm soát cách {$a->providername} thực hiện hành động {$a->actionname}.';
$string['actionsettings'] = 'Cài đặt hành động';
$string['actionsettings_desc'] = 'Các cài đặt này kiểm soát các hành động AI cho phiên bản nhà cung cấp này.';
$string['ai'] = 'AI';
$string['aiactionregister'] = 'Sổ đăng ký hành động AI';
$string['aiactionshdr'] = 'Chọn các tính năng AI cho hoạt động này:';
$string['aiplacements'] = 'Vị trí AI';
$string['aipolicyacceptance'] = 'Chấp nhận chính sách AI';
$string['aipolicyregister'] = 'Sổ đăng ký chính sách AI';
$string['aiproviders'] = 'Nhà cung cấp AI';
$string['aireports'] = 'Báo cáo AI';
$string['aitools'] = 'Công cụ AI';
$string['aitoolsincourseactivitydesc'] = 'Nếu chọn Có, bạn có thể chỉ định những tính năng AI nào sẽ khả dụng.';
$string['aitoolsincoursedesc'] = 'Nếu chọn Có, các công cụ AI sẽ khả dụng cho các hoạt động trong khóa học này. Có thể cấu hình công cụ AI trong phần cài đặt của từng hoạt động.';
$string['aitoolsnotenabled'] = 'Để chỉ định những tính năng AI khả dụng trong hoạt động này, hãy vào phần cài đặt khóa học và cho phép sử dụng công cụ AI.';
$string['aiusage'] = 'Mức sử dụng AI';
$string['aiusagepolicy'] = 'Chính sách sử dụng AI';
$string['availableplacements'] = 'Chọn nơi có thể sử dụng các hành động AI';
$string['availableplacements_desc'] = 'Vị trí xác định cách thức và nơi có thể sử dụng các hành động AI trên trang của bạn. Bạn có thể chọn những hành động khả dụng tại từng vị trí thông qua phần cài đặt.';
$string['availableproviders'] = 'Quản lý các nhà cung cấp AI được kết nối với LMS của bạn';
$string['availableproviders_desc'] = 'Nhà cung cấp AI bổ sung chức năng AI cho trang của bạn thông qua các \'hành động\' như tóm tắt văn bản hoặc tạo hình ảnh.<br/>
Bạn có thể quản lý các hành động của từng nhà cung cấp trong phần cài đặt của họ.';
$string['backtousagereport'] = 'Quay lại báo cáo mức sử dụng AI';
$string['btninstancecreate'] = 'Tạo phiên bản';
$string['btninstanceupdate'] = 'Cập nhật phiên bản';
$string['completiontokens'] = 'Token hoàn thành';
$string['completiontokens_help'] = 'Token hoàn thành là các đơn vị văn bản do mô hình AI tạo ra để phản hồi nội dung bạn nhập. Phản hồi càng dài thì càng sử dụng nhiều token và có thể tốn kém hơn.';
$string['configureprovider'] = 'Cấu hình phiên bản nhà cung cấp';
$string['contentwatermark'] = 'Được tạo bởi AI';
$string['createnewprovider'] = 'Tạo phiên bản nhà cung cấp mới';
$string['dateaccepted'] = 'Ngày chấp nhận';
$string['declineaipolicy'] = 'Từ chối';
$string['detailcolumn'] = 'Chi tiết';
$string['detailcolumn_help'] = 'Xem toàn bộ chi tiết của hành động AI này, bao gồm câu lệnh đầy đủ đã gửi cho nhà cung cấp và phản hồi đầy đủ do nhà cung cấp tạo ra.';
$string['detailpagetitle'] = 'Chi tiết hành động AI';
$string['enableaitoolsincourse'] = 'Cho phép sử dụng công cụ AI cho khóa học này';
$string['enableaitoolsincourseactivity'] = 'Cho phép sử dụng công cụ AI trong hoạt động này';
$string['enableglobalratelimit'] = 'Đặt giới hạn tần suất trên toàn trang';
$string['enableglobalratelimit_help'] = 'Giới hạn số yêu cầu mà nhà cung cấp AI có thể nhận được mỗi giờ trên toàn bộ trang.';
$string['enableuserratelimit'] = 'Đặt giới hạn tần suất cho người dùng';
$string['enableuserratelimit_help'] = 'Giới hạn số yêu cầu mỗi người dùng có thể gửi đến nhà cung cấp AI mỗi giờ.';
$string['error:400'] = 'Yêu cầu không hợp lệ';
$string['error:401'] = 'Không được phép';
$string['error:401:upstreamless'] = 'Không thể kết nối với dịch vụ AI. Hãy thử lại sau.';
$string['error:404'] = 'Không tìm thấy';
$string['error:404:upstreamless'] = 'Dịch vụ AI tạm thời không khả dụng. Hãy thử lại sau.';
$string['error:429'] = 'Quá nhiều yêu cầu';
$string['error:429:internalsitewide'] = 'Dịch vụ AI đã đạt đến số yêu cầu tối đa mỗi giờ trên toàn trang. Hãy thử lại sau.';
$string['error:429:internaluser'] = 'Bạn đã đạt đến số yêu cầu AI tối đa có thể gửi trong một giờ. Hãy thử lại sau.';
$string['error:429:upstreamless'] = 'Dịch vụ AI này đã đạt đến giới hạn yêu cầu. Hãy thử lại sau.';
$string['error:500'] = 'Lỗi máy chủ nội bộ';
$string['error:503'] = 'Dịch vụ không khả dụng';
$string['error:actionnotfound'] = 'Hành động \'{$a}\' không được hỗ trợ.';
$string['error:defaultmessage'] = 'Đã xảy ra lỗi khi xử lý yêu cầu của bạn. Hãy thử lại sau.';
$string['error:defaultmessageshort'] = 'Hãy thử lại sau.';
$string['error:defaultname'] = 'Đã xảy ra sự cố';
$string['error:noproviders'] = 'Không có nhà cung cấp nào khả dụng để xử lý hành động.';
$string['error:providernotfound'] = 'Không tìm thấy phiên bản nhà cung cấp AI.';
$string['error:unknown'] = 'Lỗi không xác định';
$string['generatedcontent'] = 'Nội dung được tạo';
$string['generatedimage'] = 'Hình ảnh được tạo';
$string['globalratelimit'] = 'Số yêu cầu tối đa trên toàn trang';
$string['globalratelimit_help'] = 'Số yêu cầu được phép mỗi giờ trên toàn trang.';
$string['imageaspectratio'] = 'Tỷ lệ khung hình';
$string['imagequality'] = 'Chất lượng';
$string['imagestyle'] = 'Kiểu';
$string['invaliddetailrecord'] = 'Không tìm thấy hành động AI này.';
$string['manageaiplacements'] = 'Quản lý vị trí AI';
$string['manageaiproviders'] = 'Quản lý nhà cung cấp AI';
$string['model'] = 'Mô hình';
$string['noimageavailable'] = 'Không có hình ảnh cho hành động này.';
$string['nopermissiontoviewdetail'] = 'Bạn không có quyền xem chi tiết của hành động AI này.';
$string['noproviderplugins'] = 'Chưa cài đặt plugin nhà cung cấp nào. Hãy cài đặt plugin nhà cung cấp để bật tính năng tạo phiên bản nhà cung cấp.';
$string['noproviders'] = 'Hành động này không khả dụng. Chưa cấu hình <a href="{$a}">nhà cung cấp AI</a> nào cho hành động này.';
$string['off'] = 'Tắt';
$string['on'] = 'Bật';
$string['placement'] = 'Vị trí';
$string['placementactionsettings'] = 'Hành động';
$string['placementactionsettings_desc'] = 'Các hành động AI khả dụng tại vị trí này.';
$string['placementsettings'] = 'Cài đặt riêng cho vị trí';
$string['placementsettings_desc'] = 'Các cài đặt này kiểm soát cách vị trí AI này kết nối với dịch vụ AI và các thao tác liên quan.';
$string['privacy:metadata:ai_action_explain_text'] = 'Bảng lưu các yêu cầu giải thích văn bản do người dùng gửi.';
$string['privacy:metadata:ai_action_explain_text:completiontoken'] = 'Số token hoàn thành được sử dụng để giải thích văn bản.';
$string['privacy:metadata:ai_action_explain_text:fingerprint'] = 'Mã băm duy nhất thể hiện trạng thái/phiên bản của mô hình và nội dung.';
$string['privacy:metadata:ai_action_explain_text:generatedcontent'] = 'Văn bản thực tế do mô hình AI tạo ra dựa trên câu lệnh đầu vào.';
$string['privacy:metadata:ai_action_explain_text:prompt'] = 'Câu lệnh cho yêu cầu giải thích văn bản.';
$string['privacy:metadata:ai_action_explain_text:prompttokens'] = 'Số token câu lệnh được sử dụng để giải thích văn bản.';
$string['privacy:metadata:ai_action_explain_text:responseid'] = 'ID của phản hồi.';
$string['privacy:metadata:ai_action_generate_image'] = 'Bảng lưu các yêu cầu tạo hình ảnh do người dùng gửi.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Tỷ lệ khung hình của các hình ảnh được tạo.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Số lượng hình ảnh được tạo.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Câu lệnh cho yêu cầu tạo hình ảnh.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Chất lượng của các hình ảnh được tạo.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Câu lệnh đã chỉnh sửa cho các hình ảnh được tạo.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'URL nguồn của các hình ảnh được tạo.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Kiểu của các hình ảnh được tạo.';
$string['privacy:metadata:ai_action_generate_text'] = 'Bảng lưu các yêu cầu tạo văn bản do người dùng gửi.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Số token hoàn thành được sử dụng để tạo văn bản.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Mã băm duy nhất thể hiện trạng thái/phiên bản của mô hình và nội dung.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Văn bản thực tế do mô hình AI tạo ra dựa trên câu lệnh đầu vào.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Câu lệnh cho yêu cầu tạo văn bản.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Số token câu lệnh được sử dụng để tạo văn bản.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'ID của phản hồi.';
$string['privacy:metadata:ai_action_register'] = 'Bảng lưu các yêu cầu hành động do người dùng gửi.';
$string['privacy:metadata:ai_action_register:actionid'] = 'ID của yêu cầu hành động.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Tên hành động được yêu cầu.';
$string['privacy:metadata:ai_action_register:completiontokens'] = 'Số token hoàn thành được sử dụng cho yêu cầu.';
$string['privacy:metadata:ai_action_register:courseid'] = 'ID của khóa học mà ngữ cảnh của hành động quy về.';
$string['privacy:metadata:ai_action_register:model'] = 'Mô hình được sử dụng để tạo phản hồi.';
$string['privacy:metadata:ai_action_register:prompttokens'] = 'Số token câu lệnh được sử dụng cho yêu cầu.';
$string['privacy:metadata:ai_action_register:provider'] = 'Tên của nhà cung cấp đã xử lý yêu cầu.';
$string['privacy:metadata:ai_action_register:success'] = 'Trạng thái của yêu cầu hành động.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Thời điểm hoàn tất yêu cầu.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Thời điểm tạo yêu cầu.';
$string['privacy:metadata:ai_action_register:userid'] = 'ID của người dùng đã gửi yêu cầu.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Bảng lưu các yêu cầu tóm tắt văn bản do người dùng gửi.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Số token hoàn thành được sử dụng để tóm tắt văn bản.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Mã băm duy nhất thể hiện trạng thái/phiên bản của mô hình và nội dung.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Văn bản thực tế do mô hình AI tạo ra dựa trên câu lệnh đầu vào.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Câu lệnh cho yêu cầu tóm tắt văn bản.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Số token câu lệnh được sử dụng để tóm tắt văn bản.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'ID của phản hồi.';
$string['privacy:metadata:ai_policy_register'] = 'Bảng lưu trạng thái chấp nhận chính sách AI của từng người dùng.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'ID của ngữ cảnh có dữ liệu được lưu.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Thời điểm người dùng chấp nhận chính sách AI.';
$string['privacy:metadata:ai_policy_register:userid'] = 'ID của người dùng có dữ liệu được lưu.';
$string['prompt'] = 'Câu lệnh';
$string['prompttokens'] = 'Token câu lệnh';
$string['prompttokens_help'] = 'Token câu lệnh là các đơn vị văn bản cấu thành dữ liệu đầu vào bạn gửi cho mô hình AI. Đầu vào càng dài thì càng sử dụng nhiều token và có thể tốn kém hơn.';
$string['provider'] = 'Nhà cung cấp';
$string['provideractionsettings'] = 'Hành động';
$string['provideractionsettings_desc'] = 'Chọn và cấu hình các hành động mà {$a} có thể thực hiện trên trang của bạn.';
$string['providerinstanceactionupdated'] = 'Đã cập nhật cài đặt hành động {$a}';
$string['providerinstancecreated'] = 'Đã tạo phiên bản nhà cung cấp AI {$a}.';
$string['providerinstancedelete'] = 'Xóa phiên bản nhà cung cấp AI';
$string['providerinstancedeleteconfirm'] = 'Bạn sắp xóa phiên bản nhà cung cấp AI {$a->name} ({$a->provider}). Bạn có chắc chắn không?';
$string['providerinstancedeleted'] = 'Đã xóa phiên bản nhà cung cấp AI {$a}.';
$string['providerinstancedeletefailed'] = 'Không thể xóa phiên bản nhà cung cấp AI {$a}. Nhà cung cấp đang được sử dụng hoặc đã xảy ra sự cố cơ sở dữ liệu. Kiểm tra xem nhà cung cấp có đang hoạt động không hoặc liên hệ quản trị viên cơ sở dữ liệu để được trợ giúp.';
$string['providerinstancedisablefailed'] = 'Không thể tắt phiên bản nhà cung cấp AI. Nhà cung cấp đang được sử dụng hoặc đã xảy ra sự cố cơ sở dữ liệu. Kiểm tra xem nhà cung cấp có đang hoạt động không hoặc liên hệ quản trị viên cơ sở dữ liệu để được trợ giúp.';
$string['providerinstanceupdated'] = 'Đã cập nhật phiên bản nhà cung cấp AI {$a}.';
$string['providermoveddown'] = '{$a} đã được chuyển xuống.';
$string['providermovedup'] = '{$a} đã được chuyển lên.';
$string['providername'] = 'Tên phiên bản';
$string['providers'] = 'Nhà cung cấp';
$string['providersettings'] = 'Cài đặt';
$string['providertype'] = 'Chọn plugin nhà cung cấp AI';
$string['revisedprompt'] = 'Câu lệnh đã được nhà cung cấp chỉnh sửa';
$string['timecompleted'] = 'Thời điểm hoàn tất';
$string['timegenerated'] = 'Thời điểm tạo';
$string['unknownvalue'] = '—';
$string['userpolicy'] = '<h4><strong>Chào mừng bạn đến với tính năng AI mới!</strong></h4>
<p>Tính năng trí tuệ nhân tạo (AI) này chỉ dựa trên các Mô hình Ngôn ngữ Lớn (LLM) bên ngoài nhằm cải thiện trải nghiệm học tập và giảng dạy của bạn. Trước khi bắt đầu sử dụng các dịch vụ AI này, vui lòng đọc chính sách sử dụng.</p>
<h4><strong>Độ chính xác của nội dung do AI tạo</strong></h4>
<p>AI có thể đưa ra các gợi ý và thông tin hữu ích, nhưng độ chính xác có thể khác nhau. Bạn luôn nên kiểm tra lại thông tin được cung cấp để đảm bảo thông tin chính xác, đầy đủ và phù hợp với tình huống cụ thể của mình.</p>
<h4><strong>Cách dữ liệu của bạn được xử lý</strong></h4>
<p>Tính năng AI này sử dụng các Mô hình Ngôn ngữ Lớn (LLM) bên ngoài. Nếu sử dụng tính năng này, mọi thông tin hoặc dữ liệu cá nhân bạn chia sẻ sẽ được xử lý theo chính sách quyền riêng tư của các LLM đó. Chúng tôi khuyên bạn nên đọc chính sách quyền riêng tư của họ để hiểu cách dữ liệu của bạn được xử lý. Ngoài ra, trang này có thể lưu lại lịch sử tương tác của bạn với các tính năng AI.</p>
<p>Nếu có câu hỏi về cách dữ liệu của bạn được xử lý, vui lòng hỏi giáo viên hoặc tổ chức học tập của bạn.</p>
<p>Bằng cách tiếp tục, bạn xác nhận rằng mình hiểu và đồng ý với chính sách này.</p>';
$string['userratelimit'] = 'Số yêu cầu tối đa cho mỗi người dùng';
$string['userratelimit_help'] = 'Số yêu cầu được phép mỗi giờ cho mỗi người dùng.';
$string['viewdetail'] = 'Xem chi tiết';
