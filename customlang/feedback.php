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
 * @package    mod
 * @subpackage feedback
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Thêm câu hỏi';
$string['add_pagebreak'] = 'Thêm dấu ngắt trang';
$string['adjustment'] = 'Điều chỉnh';
$string['after_submit'] = 'Sau khi gửi';
$string['allowfullanonymous'] = 'Cho phép ẩn danh hoàn toàn';
$string['analysis'] = 'Phân tích';
$string['anonymous'] = 'Ẩn danh';
$string['anonymous_edit'] = 'Ghi lại tên người dùng';
$string['anonymous_entries'] = 'Các mục ẩn danh ({$a})';
$string['anonymous_user'] = 'Người dùng ẩn danh';
$string['answerquestions'] = 'Trả lời các câu hỏi';
$string['append_new_items'] = 'Giữ các câu hỏi hiện có và thêm câu hỏi mới vào cuối';
$string['autonumbering'] = 'Đánh số câu hỏi tự động';
$string['autonumbering_help'] = 'Bật hoặc tắt tính năng tự động đánh số cho từng câu hỏi';
$string['availableforallcourses'] = 'Khả dụng cho tất cả khóa học';
$string['average'] = 'Trung bình';
$string['bold'] = 'Đậm';
$string['browseresponses'] = 'Duyệt các phản hồi';
$string['calendarend'] = '{$a} đóng';
$string['calendarstart'] = '{$a} mở';
$string['cannotaccess'] = 'Bạn chỉ có thể truy cập phản hồi này từ một khóa học';
$string['cannotcreatepagebreak'] = 'Không thể thêm dấu ngắt trang ở đầu và chỉ có thể thêm một dấu ngắt trang ở cuối.';
$string['cannotsavetempl'] = 'Không được phép lưu mẫu';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Chưa thiết lập Captcha.';
$string['check'] = 'Trắc nghiệm - nhiều câu trả lời';
$string['check_values'] = 'Các phản hồi có thể có';
$string['checkbox'] = 'Trắc nghiệm - cho phép nhiều câu trả lời (hộp kiểm)';
$string['choosefile'] = 'Chọn tệp';
$string['chosen_feedback_response'] = 'Phản hồi đã chọn';
$string['closebeforeopen'] = 'Bạn đã đặt ngày kết thúc trước ngày bắt đầu.';
$string['complete_the_form'] = 'Trả lời các câu hỏi';
$string['completed'] = 'Đã hoàn thành';
$string['completed_feedbacks'] = 'Câu trả lời đã gửi';
$string['completedon'] = 'Hoàn thành vào {$a}';
$string['completiondetail:submit'] = 'Gửi phản hồi';
$string['completionsubmit'] = 'Gửi phản hồi';
$string['configallowfullanonymous'] = 'Nếu được đặt thành \'có\', người dùng có thể hoàn thành hoạt động phản hồi trên trang chủ của trang web mà không cần đăng nhập.';
$string['confirmdeleteentry'] = 'Bạn có chắc chắn muốn xóa mục này không?';
$string['confirmdeleteitem'] = 'Bạn có chắc chắn muốn xóa phần tử này không?';
$string['confirmdeletetemplate'] = 'Bạn có chắc chắn muốn xóa mẫu này không?';
$string['confirmusetemplate'] = 'Bạn có chắc chắn muốn sử dụng mẫu này không?';
$string['continue_the_form'] = 'Tiếp tục trả lời các câu hỏi';
$string['count_of_nums'] = 'Số lượng số';
$string['courseid'] = 'ID khóa học';
$string['coursetemplates'] = 'Mẫu khóa học';
$string['creating_templates'] = 'Lưu các câu hỏi này thành mẫu mới';
$string['delete_entry'] = 'Xóa mục';
$string['delete_item'] = 'Xóa câu hỏi';
$string['delete_old_items'] = 'Ghi đè các câu hỏi hiện có';
$string['delete_pagebreak'] = 'Xóa ngắt trang';
$string['delete_template'] = 'Xóa mẫu';
$string['delete_templates'] = 'Xóa mẫu...';
$string['depending'] = 'Điều kiện phụ thuộc';
$string['depending_help'] = 'Có thể hiển thị một mục tùy thuộc vào giá trị của một mục khác.<br />
<strong>Ví dụ như sau.</strong><br />
<ul>
<li>Trước tiên, tạo một mục mà mục khác sẽ phụ thuộc vào.</li>
<li>Tiếp theo, thêm một ngắt trang.</li>
<li>Sau đó, thêm các mục phụ thuộc vào giá trị của mục đã tạo trước đó. Chọn mục từ danh sách có nhãn "Mục phụ thuộc" và nhập giá trị cần thiết vào hộp văn bản có nhãn "Giá trị phụ thuộc".</li>
</ul>
<strong>Cấu trúc mục sẽ trông như sau.</strong>
<ol>
<li>Mục C: Bạn có xe hơi không? Đ: có/không</li>
<li>Ngắt trang</li>
<li>Mục C: Xe hơi của bạn màu gì?<br />
(mục này phụ thuộc vào mục 1 với giá trị = có)</li>
<li>Mục C: Tại sao bạn không có xe hơi?<br />
(mục này phụ thuộc vào mục 1 với giá trị = không)</li>
<li> ... các mục khác</li>
</ol>';
$string['dependitem'] = 'Mục phụ thuộc';
$string['dependvalue'] = 'Giá trị phụ thuộc';
$string['description'] = 'Mô tả';
$string['do_not_analyse_empty_submits'] = 'Không đưa các bài gửi trống vào phân tích';
$string['downloadresponseas'] = 'Tải tất cả phản hồi xuống dưới dạng:';
$string['drop_feedback'] = 'Xóa khỏi khóa học này';
$string['dropdown'] = 'Trắc nghiệm - chỉ cho phép một câu trả lời (menu thả xuống)';
$string['dropdown_values'] = 'Câu trả lời';
$string['dropdownlist'] = 'Trắc nghiệm - một câu trả lời (menu thả xuống)';
$string['dropdownrated'] = 'Menu thả xuống (có chấm điểm)';
$string['duedate'] = 'Hạn chót';
$string['edit_item'] = 'Chỉnh sửa câu hỏi';
$string['edit_items'] = 'Chỉnh sửa câu hỏi';
$string['email_notification'] = 'Bật thông báo về bài nộp';
$string['email_notification_help'] = 'Nếu bật, giáo viên sẽ nhận được thông báo về các bài nộp phản hồi.';
$string['emailteachermail'] = '{$a->username} đã hoàn thành hoạt động phản hồi: \'{$a->feedback}\'

Bạn có thể xem tại đây:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} đã hoàn thành hoạt động phản hồi: <i>\'{$a->feedback}\'</i>.</p>
<p>Hoạt động <a href="{$a->url}">có trên trang web</a>.</p>';
$string['entries_saved'] = 'Câu trả lời của bạn đã được lưu. Xin cảm ơn.';
$string['eventresponsedeleted'] = 'Đã xóa phản hồi';
$string['eventresponsesubmitted'] = 'Đã gửi phản hồi';
$string['export_questions'] = 'Xuất câu hỏi';
$string['export_to_excel'] = 'Xuất sang Excel';
$string['feedback_is_not_for_anonymous'] = 'Phản hồi không dành cho người dùng ẩn danh';
$string['feedback_is_not_open'] = 'Phản hồi chưa mở';
$string['feedback:addinstance'] = 'Thêm phản hồi mới';
$string['feedback:complete'] = 'Hoàn thành phản hồi';
$string['feedback:createprivatetemplate'] = 'Tạo mẫu riêng tư';
$string['feedback:createpublictemplate'] = 'Tạo mẫu công khai';
$string['feedback:deletesubmissions'] = 'Xóa các bài nộp đã hoàn thành';
$string['feedback:deletetemplate'] = 'Xóa mẫu';
$string['feedback:edititems'] = 'Chỉnh sửa mục';
$string['feedback:mapcourse'] = 'Ánh xạ khóa học với các phản hồi toàn cục';
$string['feedback:receivemail'] = 'Nhận thông báo qua email';
$string['feedback:view'] = 'Xem phản hồi';
$string['feedback:viewanalysepage'] = 'Xem trang phân tích sau khi gửi';
$string['feedback:viewreports'] = 'Xem báo cáo';
$string['feedbackclose'] = 'Cho phép trả lời đến';
$string['feedbackcompleted'] = '{$a->username} đã hoàn thành {$a->feedbackname}';
$string['feedbackopen'] = 'Cho phép trả lời từ';
$string['feedbackupdated'] = 'Đã cập nhật phản hồi.';
$string['file'] = 'Tệp';
$string['filter_by_course'] = 'Lọc theo khóa học';
$string['gotoallresponses'] = 'Đi đến tất cả phản hồi';
$string['handling_error'] = 'Đã xảy ra lỗi khi xử lý hành động của mô-đun phản hồi';
$string['hide_no_select_option'] = 'Ẩn tùy chọn "Chưa chọn"';
$string['horizontal'] = 'Ngang';
$string['import_questions'] = 'Nhập câu hỏi';
$string['import_successfully'] = 'Nhập thành công';
$string['importfromthisfile'] = 'Nhập từ tệp này';
$string['includeuserinrecipientslist'] = 'Thêm {$a} vào danh sách người nhận';
$string['indicator:cognitivedepth'] = 'Nhận thức của hoạt động phản hồi';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên độ sâu nhận thức mà học viên đạt được trong một hoạt động phản hồi.';
$string['indicator:cognitivedepthdef'] = 'Nhận thức của hoạt động phản hồi';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này trong mức độ tham gia nhận thức do các hoạt động phản hồi mang lại trong khoảng thời gian phân tích này (Các mức = Chưa xem, Đã xem, Đã gửi)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Tính xã hội của hoạt động phản hồi';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên mức độ tương tác xã hội mà học viên đạt được trong một hoạt động phản hồi.';
$string['indicator:socialbreadthdef'] = 'Tính xã hội của hoạt động phản hồi';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này trong mức độ tương tác xã hội do các hoạt động phản hồi mang lại trong khoảng thời gian phân tích này (Các mức = Không tham gia, Người tham gia một mình, Người tham gia cùng người khác)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Thông tin';
$string['infotype'] = 'Loại thông tin';
$string['insufficient_responses'] = 'không đủ phản hồi';
$string['insufficient_responses_for_this_group'] = 'Không có đủ phản hồi cho nhóm này';
$string['insufficient_responses_help'] = 'Để phản hồi được ẩn danh, cần có ít nhất 2 phản hồi.';
$string['item_label'] = 'Nhãn';
$string['item_name'] = 'Câu hỏi';
$string['label'] = 'Vùng văn bản và phương tiện';
$string['labelcontents'] = 'Nội dung';
$string['mapcourse'] = 'Ánh xạ phản hồi với các khóa học';
$string['mapcourse_help'] = 'Theo mặc định, các biểu mẫu phản hồi được tạo trên trang chủ sẽ khả dụng trên toàn trang web
và xuất hiện trong tất cả khóa học sử dụng khối phản hồi. Bạn có thể buộc biểu mẫu phản hồi xuất hiện bằng cách đặt khối ở chế độ cố định, hoặc giới hạn các khóa học có biểu mẫu phản hồi bằng cách ánh xạ biểu mẫu với các khóa học cụ thể.';
$string['mapcourseinfo'] = 'Đây là phản hồi trên toàn trang web, khả dụng cho tất cả khóa học sử dụng khối phản hồi. Tuy nhiên, bạn có thể giới hạn các khóa học được hiển thị phản hồi này bằng cách ánh xạ chúng. Tìm khóa học và ánh xạ khóa học đó với phản hồi này.';
$string['mapcoursenone'] = 'Chưa ánh xạ khóa học nào. Phản hồi khả dụng cho tất cả khóa học';
$string['mapcourses'] = 'Ánh xạ phản hồi với các khóa học';
$string['mappedcourses'] = 'Các khóa học đã ánh xạ';
$string['mappingchanged'] = 'Ánh xạ khóa học đã thay đổi';
$string['maximal'] = 'Tối đa';
$string['messageprovider:message'] = 'Lời nhắc phản hồi';
$string['messageprovider:submission'] = 'Thông báo về phản hồi';
$string['minimal'] = 'Tối thiểu';
$string['mode'] = 'Chế độ';
$string['modulename'] = 'Phản hồi';
$string['modulename_help'] = '#### Tính năng chính
* Tạo khảo sát với nhiều loại câu hỏi, bao gồm trắc nghiệm, thang đo và câu trả lời mở
* Thu thập phản hồi ẩn danh hoặc kèm tên
* Xem phản hồi dưới dạng tổng quan, phân tích chi tiết hoặc theo từng học viên

Cách sử dụng
* Kiểm tra mong đợi và kiến thức nền trước khi bắt đầu khóa học
* Thực hiện đánh giá cuối khóa học để thu thập phản hồi của học viên
* Cung cấp cách thức an toàn và ẩn danh để học viên báo cáo những mối lo ngại';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulename_summary'] = 'Tạo khảo sát tùy chỉnh bằng nhiều loại câu hỏi khác nhau.';
$string['modulenameplural'] = 'Phản hồi';
$string['move_item'] = 'Di chuyển câu hỏi này';
$string['multichoice'] = 'Trắc nghiệm';
$string['multichoice_values'] = 'Các giá trị trắc nghiệm';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Trắc nghiệm (có chấm điểm)';
$string['multichoicetype'] = 'Loại câu hỏi trắc nghiệm';
$string['multiplesubmit'] = 'Cho phép gửi nhiều lần';
$string['multiplesubmit_help'] = 'Nếu đặt là Có:

* Với khảo sát ẩn danh: người tham gia có thể gửi không giới hạn số phản hồi và tất cả phản hồi sẽ được ghi lại.
* Với khảo sát không ẩn danh: người tham gia có thể gửi không giới hạn số phản hồi, nhưng chỉ phản hồi mới nhất của họ được ghi lại.';
$string['name'] = 'Tên';
$string['name_required'] = 'Bắt buộc nhập tên';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Trang tiếp theo';
$string['nextresponse'] = 'Phản hồi tiếp theo';
$string['no_handler'] = 'Không có bộ xử lý hành động cho';
$string['no_itemlabel'] = 'Không có nhãn';
$string['no_itemname'] = 'Không có tên mục';
$string['no_items_available_yet'] = 'Chưa có câu hỏi nào được thiết lập';
$string['no_templates_available_yet'] = 'Chưa có mẫu nào';
$string['non_anonymous'] = 'Tên người dùng sẽ được ghi lại và hiển thị cùng với câu trả lời';
$string['non_anonymous_entries'] = 'Các mục không ẩn danh ({$a})';
$string['non_respondents_students'] = 'Học viên chưa phản hồi ({$a})';
$string['not_completed_yet'] = 'Chưa hoàn thành';
$string['not_selected'] = 'Chưa chọn';
$string['not_started'] = 'Chưa bắt đầu';
$string['numberoutofrange'] = 'Số nằm ngoài phạm vi cho phép';
$string['numeric'] = 'Câu trả lời dạng số';
$string['numeric_range_from'] = 'Phạm vi từ';
$string['numeric_range_to'] = 'Phạm vi đến';
$string['of'] = 'trên';
$string['oldvaluespreserved'] = 'Tất cả câu hỏi cũ và các giá trị đã gán sẽ được giữ lại';
$string['oldvalueswillbedeleted'] = 'Các câu hỏi hiện tại và tất cả phản hồi sẽ bị xóa.';
$string['only_one_captcha_allowed'] = 'Mỗi phản hồi chỉ được phép có một captcha';
$string['openafterclose'] = 'Bạn đã đặt ngày mở sau ngày đóng';
$string['overview'] = 'Tổng quan';
$string['page'] = 'Trang';
$string['page_after_submit'] = 'Thông báo hoàn thành';
$string['page-mod-feedback-x'] = 'Bất kỳ trang nào của mô-đun phản hồi';
$string['pagebreak'] = 'Ngắt trang';
$string['pluginadministration'] = 'Quản trị phản hồi';
$string['pluginname'] = 'Phản hồi';
$string['position'] = 'Vị trí';
$string['previewquestions'] = 'Xem trước câu hỏi';
$string['previewtemplate'] = 'Đang xem trước mẫu \'{$a}\\';
$string['previous_page'] = 'Trang trước';
$string['prevresponse'] = 'Phản hồi trước';
$string['privacy:metadata:completed'] = 'Bản ghi các bài nộp phản hồi';
$string['privacy:metadata:completed:anonymousresponse'] = 'Cho biết bài nộp có được sử dụng ẩn danh hay không.';
$string['privacy:metadata:completed:timemodified'] = 'Thời điểm bài nộp được sửa đổi lần cuối.';
$string['privacy:metadata:completed:userid'] = 'ID của người dùng đã hoàn thành hoạt động phản hồi.';
$string['privacy:metadata:completedtmp'] = 'Bản ghi các bài nộp vẫn đang thực hiện.';
$string['privacy:metadata:value'] = 'Bản ghi câu trả lời cho một câu hỏi.';
$string['privacy:metadata:value:value'] = 'Câu trả lời đã chọn.';
$string['privacy:metadata:valuetmp'] = 'Bản ghi câu trả lời cho một câu hỏi trong bài nộp đang thực hiện.';
$string['public'] = 'Công khai';
$string['question'] = 'Câu hỏi';
$string['questionandsubmission'] = 'Cài đặt câu hỏi và bài nộp';
$string['questionmoved'] = 'Đã di chuyển câu hỏi';
$string['questions'] = 'Câu hỏi';
$string['questionslimited'] = 'Chỉ hiển thị {$a} câu hỏi đầu tiên; hãy xem câu trả lời riêng lẻ hoặc tải dữ liệu bảng xuống để xem tất cả.';
$string['radio'] = 'Trắc nghiệm - một câu trả lời';
$string['radio_values'] = 'Các phản hồi';
$string['ready_feedbacks'] = 'Các phản hồi sẵn sàng';
$string['required'] = 'Bắt buộc';
$string['resetting_data'] = 'Phản hồi';
$string['resetting_delete'] = 'Xóa phản hồi';
$string['resetting_feedbacks'] = 'Đặt lại phản hồi';
$string['responded'] = 'Đã phản hồi';
$string['response_nr'] = 'Số thứ tự phản hồi';
$string['responses'] = 'Các phản hồi';
$string['responsetime'] = 'Thời gian phản hồi';
$string['save_as_new_item'] = 'Lưu thành câu hỏi mới';
$string['save_as_new_template'] = 'Lưu thành mẫu';
$string['save_entries'] = 'Gửi câu trả lời của bạn';
$string['save_item'] = 'Lưu câu hỏi';
$string['saving_failed'] = 'Lưu không thành công';
$string['search_course'] = 'Tìm kiếm khóa học';
$string['search:activity'] = 'Phản hồi - thông tin hoạt động';
$string['searchcourses'] = 'Tìm kiếm khóa học';
$string['searchcourses_help'] = 'Tìm kiếm mã hoặc tên khóa học bạn muốn liên kết với phản hồi này.';
$string['selected_dump'] = 'Các chỉ mục đã chọn của biến $SESSION được hiển thị bên dưới:';
$string['send'] = 'Gửi';
$string['send_message'] = 'Gửi thông báo';
$string['show_all'] = 'Hiển thị tất cả';
$string['show_analysepage_after_submit'] = 'Hiển thị trang phân tích';
$string['show_entries'] = 'Hiển thị phản hồi';
$string['show_entry'] = 'Hiển thị phản hồi';
$string['show_nonrespondents'] = 'Hiển thị người chưa phản hồi';
$string['site_after_submit'] = 'Trang web sau khi gửi';
$string['sitetemplates'] = 'Mẫu trên trang web';
$string['sort_by_course'] = 'Sắp xếp theo khóa học';
$string['started'] = 'Đã bắt đầu';
$string['startedon'] = 'Bắt đầu vào {$a}';
$string['subject'] = 'Chủ đề';
$string['switch_item_to_not_required'] = 'Đặt là không bắt buộc';
$string['switch_item_to_required'] = 'Đặt là bắt buộc';
$string['template'] = 'Mẫu';
$string['template_deleted'] = 'Đã xóa mẫu';
$string['template_saved'] = 'Đã lưu mẫu';
$string['templates'] = 'Mẫu';
$string['textarea'] = 'Câu trả lời dài';
$string['textarea_height'] = 'Số dòng';
$string['textarea_width'] = 'Chiều rộng';
$string['textfield'] = 'Câu trả lời ngắn';
$string['textfield_maxlength'] = 'Số ký tự tối đa được chấp nhận';
$string['textfield_size'] = 'Độ rộng trường văn bản';
$string['there_are_no_settings_for_recaptcha'] = 'Không có cài đặt nào cho captcha';
$string['this_feedback_is_already_submitted'] = 'Bạn đã gửi phản hồi này rồi.';
$string['typemissing'] = 'Thiếu giá trị "type"';
$string['update_item'] = 'Lưu thay đổi cho câu hỏi';
$string['url_for_continue'] = 'Liên kết đến hoạt động tiếp theo';
$string['url_for_continue_help'] = 'Sau khi gửi phản hồi, nút tiếp tục sẽ xuất hiện và liên kết đến trang khóa học. Ngoài ra, nút này có thể liên kết đến hoạt động tiếp theo nếu bạn nhập URL của hoạt động đó tại đây.';
$string['use_one_line_for_each_value'] = 'Mỗi câu trả lời phải nằm trên một dòng!';
$string['use_this_template'] = 'Sử dụng mẫu';
$string['using_templates'] = 'Sử dụng mẫu';
$string['vertical'] = 'Dọc';
$string['whatfor'] = 'Bạn muốn áp dụng mẫu như thế nào?';
