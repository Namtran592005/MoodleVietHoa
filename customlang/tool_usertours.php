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
 * @package    tool
 * @subpackage usertours
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Phía trên';
$string['actions'] = 'Thao tác';
$string['appliesto'] = 'Áp dụng cho';
$string['backdrop'] = 'Hiển thị với lớp phủ nền';
$string['backdrop_help'] = 'Bạn có thể dùng lớp phủ nền để làm nổi bật phần trang mà bạn đang chỉ đến.

Lưu ý: Lớp phủ nền không tương thích với một số phần của trang, chẳng hạn như thanh điều hướng.';
$string['below'] = 'Phía dưới';
$string['block'] = 'Khối';
$string['block_named'] = 'Khối có tên \'{$a}\\';
$string['cachedef_stepdata'] = 'Danh sách các bước trong hướng dẫn người dùng';
$string['cachedef_tourdata'] = 'Danh sách thông tin về các hướng dẫn người dùng đã bật, được truy xuất trên mỗi trang';
$string['confirmstepremovalquestion'] = 'Bạn có chắc chắn muốn xóa bước này không?';
$string['confirmstepremovaltitle'] = 'Xác nhận xóa bước';
$string['confirmtourremovalquestion'] = 'Bạn có chắc chắn muốn xóa hướng dẫn này không?';
$string['confirmtourremovaltitle'] = 'Xác nhận xóa hướng dẫn';
$string['content'] = 'Nội dung';
$string['content_heading'] = 'Nội dung';
$string['content_help'] = 'Có thể thêm nội dung mô tả bước dưới dạng văn bản thuần, được đặt trong thẻ đa ngôn ngữ (để sử dụng với bộ lọc nội dung đa ngôn ngữ) nếu cần.';
$string['content_type'] = 'Loại nội dung';
$string['content_type_help'] = '* Thủ công - nội dung được nhập bằng trình soạn thảo văn bản
* ID chuỗi ngôn ngữ - theo định dạng string identifier,component (không có khoảng trắng sau dấu phẩy)';
$string['content_type_langstring'] = 'ID chuỗi ngôn ngữ';
$string['content_type_manual'] = 'Thủ công';
$string['cssselector'] = 'Bộ chọn CSS';
$string['defaultvalue'] = 'Mặc định ({$a})';
$string['delay'] = 'Độ trễ trước khi hiển thị bước';
$string['delay_help'] = 'Bạn có thể tùy chọn thêm độ trễ trước khi hiển thị bước.

Độ trễ được tính bằng mili giây.';
$string['description'] = 'Mô tả';
$string['description_help'] = 'Có thể thêm mô tả của hướng dẫn dưới dạng văn bản thuần, được đặt trong thẻ đa ngôn ngữ (để sử dụng với bộ lọc nội dung đa ngôn ngữ) nếu cần.

Ngoài ra, có thể nhập ID chuỗi ngôn ngữ theo định dạng identifier,component (không có dấu ngoặc hoặc khoảng trắng sau dấu phẩy).';
$string['displaystepnumbers'] = 'Hiển thị số thứ tự bước';
$string['displaystepnumbers_help'] = 'Có hiển thị số thứ tự bước, ví dụ 1/4, 2/4, v.v., để cho biết độ dài của hướng dẫn người dùng hay không.';
$string['done'] = 'Hoàn tất';
$string['duplicatetour'] = 'Nhân bản hướng dẫn';
$string['duplicatetour_name'] = '{$a} (bản sao)';
$string['editstep'] = 'Đang chỉnh sửa "{$a}"';
$string['enabled'] = 'Đã bật';
$string['endonesteptour'] = 'Đã hiểu';
$string['endtour'] = 'Kết thúc hướng dẫn';
$string['endtourlabel'] = 'Nhãn nút kết thúc hướng dẫn';
$string['endtourlabel_help'] = 'Bạn có thể tùy chọn chỉ định nhãn riêng cho nút kết thúc hướng dẫn. Nhãn mặc định là \'Đã hiểu\' đối với hướng dẫn một bước và \'Kết thúc hướng dẫn\' đối với hướng dẫn nhiều bước.

Ngoài ra, có thể nhập ID chuỗi ngôn ngữ theo định dạng identifier,component (không có dấu ngoặc hoặc khoảng trắng sau dấu phẩy).';
$string['event_step_shown'] = 'Đã hiển thị bước';
$string['event_tour_ended'] = 'Đã kết thúc hướng dẫn';
$string['event_tour_reset'] = 'Đã đặt lại hướng dẫn';
$string['event_tour_started'] = 'Đã bắt đầu hướng dẫn';
$string['exporttour'] = 'Xuất hướng dẫn';
$string['filter_accessdate'] = 'Ngày truy cập';
$string['filter_accessdate_enabled'] = 'Bật bộ lọc ngày truy cập';
$string['filter_accessdate_enabled_help'] = 'Chỉ hiển thị hướng dẫn cho người dùng mới hoặc người dùng đã truy cập trang gần đây.';
$string['filter_category'] = 'Danh mục';
$string['filter_category_help'] = 'Hiển thị hướng dẫn này trên các trang liên quan đến khóa học thuộc các danh mục đã chọn.';
$string['filter_course'] = 'Các khóa học đã chọn';
$string['filter_course_error_course_selection'] = 'Bạn phải chọn ít nhất một khóa học';
$string['filter_course_help'] = 'Tùy thuộc vào giá trị của bộ lọc Khóa học:

* **Chỉ các khóa học đã chọn**: Hiển thị hướng dẫn này trên các trang liên quan đến những khóa học đã chọn.
* **Tất cả khóa học trừ các khóa học đã chọn**: Không hiển thị hướng dẫn này trên các trang liên quan đến những khóa học đã chọn.';
$string['filter_course_operator'] = 'Khóa học';
$string['filter_course_operator_all'] = 'Tất cả khóa học';
$string['filter_course_operator_except'] = 'Tất cả khóa học trừ các khóa học đã chọn';
$string['filter_course_operator_help'] = 'Có thể cấu hình để hướng dẫn chỉ xuất hiện trong một số khóa học nhất định.

* **Tất cả khóa học**: Hiển thị hướng dẫn này bất kể khóa học nào.
* **Chỉ các khóa học đã chọn**: Chỉ hiển thị hướng dẫn này trên các trang liên quan đến (những) khóa học được chọn bên dưới.
* **Tất cả khóa học trừ các khóa học đã chọn**: Không hiển thị hướng dẫn này trên các trang liên quan đến (những) khóa học được chọn bên dưới.';
$string['filter_course_operator_select'] = 'Chỉ các khóa học đã chọn';
$string['filter_courseformat'] = 'Định dạng khóa học';
$string['filter_courseformat_help'] = 'Hiển thị hướng dẫn trên trang liên quan đến khóa học sử dụng định dạng khóa học đã chọn.';
$string['filter_cssselector'] = 'Bộ chọn CSS';
$string['filter_cssselector_help'] = 'Chỉ hiển thị hướng dẫn khi tìm thấy bộ chọn CSS được chỉ định trên trang.';
$string['filter_date_account_creation'] = 'Ngày tạo tài khoản người dùng trong khoảng';
$string['filter_date_first_login'] = 'Ngày truy cập đầu tiên của người dùng trong khoảng';
$string['filter_date_last_login'] = 'Ngày truy cập gần nhất của người dùng trong khoảng';
$string['filter_exclude_category'] = 'Loại trừ danh mục';
$string['filter_exclude_category_help'] = 'Không hiển thị hướng dẫn này trên các trang liên quan đến danh mục khóa học đã chọn.

Nếu chọn một danh mục cha, các danh mục con liên quan sẽ tự động được chọn và không thể chọn riêng lẻ.

Bỏ chọn danh mục cha để chọn lại các danh mục con.';
$string['filter_header'] = 'Bộ lọc hướng dẫn';
$string['filter_help'] = 'Chọn các điều kiện để hiển thị hướng dẫn. Tất cả bộ lọc phải khớp thì hướng dẫn mới được hiển thị cho người dùng.';
$string['filter_role'] = 'Vai trò';
$string['filter_role_help'] = 'Có thể giới hạn hướng dẫn cho người dùng có các vai trò đã chọn trong ngữ cảnh hiển thị hướng dẫn. Ví dụ: giới hạn hướng dẫn Bảng điều khiển cho người dùng có vai trò học viên sẽ không hiệu quả nếu người dùng có vai trò học viên trong một khóa học (như thường thấy). Chỉ có thể giới hạn hướng dẫn Bảng điều khiển cho người dùng có vai trò hệ thống.';
$string['filter_theme'] = 'Giao diện';
$string['filter_theme_help'] = 'Hiển thị hướng dẫn khi người dùng đang sử dụng một trong các giao diện đã chọn.';
$string['importtour'] = 'Nhập hướng dẫn';
$string['invalid_lang_id'] = 'ID chuỗi ngôn ngữ không hợp lệ';
$string['left'] = 'Bên trái';
$string['modifyshippedtourwarning'] = 'Đây là hướng dẫn người dùng được cung cấp kèm Moodle. Mọi chỉnh sửa bạn thực hiện có thể bị ghi đè trong lần nâng cấp trang tiếp theo.';
$string['moodle_language_identifier'] = 'ID chuỗi ngôn ngữ';
$string['movestepdown'] = 'Di chuyển bước xuống';
$string['movestepup'] = 'Di chuyển bước lên';
$string['movetourdown'] = 'Di chuyển hướng dẫn xuống';
$string['movetourup'] = 'Di chuyển hướng dẫn lên';
$string['name'] = 'Tên';
$string['name_help'] = 'Có thể thêm tên hướng dẫn dưới dạng văn bản thuần, được đặt trong thẻ đa ngôn ngữ (để sử dụng với bộ lọc nội dung đa ngôn ngữ) nếu cần.

Ngoài ra, có thể nhập ID chuỗi ngôn ngữ theo định dạng identifier,component (không có dấu ngoặc hoặc khoảng trắng sau dấu phẩy).';
$string['newstep'] = 'Bước mới';
$string['newtour'] = 'Tạo hướng dẫn mới';
$string['next'] = 'Tiếp theo';
$string['nextstep'] = 'Tiếp theo';
$string['nextstep_sequence'] = 'Tiếp theo ({$a->position}/{$a->total})';
$string['options_heading'] = 'Tùy chọn';
$string['orphan'] = 'Hiển thị nếu không tìm thấy mục tiêu';
$string['orphan_help'] = 'Hiển thị bước này nếu không tìm thấy mục tiêu trên trang.';
$string['pathmatch'] = 'Áp dụng khi URL khớp';
$string['pathmatch_help'] = 'Hướng dẫn sẽ được hiển thị trên mọi trang có URL khớp với giá trị này.

Bạn có thể dùng ký tự % làm ký tự đại diện để khớp với mọi nội dung.
Một số giá trị ví dụ:

* /my/% - để khớp với Bảng điều khiển
* /course/view.php?id=2 - để khớp với một khóa học cụ thể
* /mod/forum/view.php% - để khớp với danh sách thảo luận diễn đàn
* /user/profile.php% - để khớp với trang hồ sơ người dùng

Nếu muốn hiển thị hướng dẫn trên trang chủ của trang web, bạn có thể dùng giá trị: "FRONTPAGE".';
$string['pausetour'] = 'Tạm dừng';
$string['placement'] = 'Vị trí';
$string['placement_help'] = 'Có thể đặt một bước phía trên, phía dưới, bên trái hoặc bên phải mục tiêu. Nên đặt phía trên hoặc phía dưới vì các vị trí này phù hợp hơn với màn hình di động.

Nếu bước không vừa ở vị trí đã chỉ định trên một trang cụ thể, bước sẽ tự động được đặt ở vị trí khác.';
$string['pluginname'] = 'Hướng dẫn người dùng';
$string['privacy:metadata:preference:completed'] = 'Thời điểm người dùng hoàn thành hướng dẫn người dùng lần gần nhất.';
$string['privacy:metadata:preference:requested'] = 'Thời điểm người dùng yêu cầu hướng dẫn người dùng lần gần nhất theo cách thủ công.';
$string['privacy:request:preference:completed'] = 'Bạn đã đánh dấu hướng dẫn người dùng "{$a->name}" là hoàn thành lần gần nhất vào {$a->time}';
$string['privacy:request:preference:requested'] = 'Bạn đã yêu cầu hướng dẫn người dùng "{$a->name}" lần gần nhất vào {$a->time}';
$string['reflex'] = 'Tiếp tục khi nhấp';
$string['reflex_help'] = 'Chuyển sang bước tiếp theo khi nhấp vào mục tiêu.';
$string['resettouronpage'] = 'Đặt lại hướng dẫn người dùng trên trang này';
$string['resumetour'] = 'Tiếp tục';
$string['right'] = 'Bên phải';
$string['select_block'] = 'Chọn một khối';
$string['selector_defaulttitle'] = 'Nhập tiêu đề mô tả';
$string['selectordisplayname'] = 'Bộ chọn CSS khớp với \'{$a}\\';
$string['selecttype'] = 'Chọn loại bước';
$string['sharedtourslink'] = 'Kho lưu trữ hướng dẫn';
$string['showtoureachtime'] = 'mỗi khi bộ lọc khớp';
$string['showtouruntilcomplete'] = 'cho đến khi đóng hướng dẫn';
$string['showtourwhen'] = 'Hiển thị hướng dẫn';
$string['skip'] = 'Bỏ qua';
$string['skip_tour'] = 'Bỏ qua hướng dẫn';
$string['target'] = 'Mục tiêu';
$string['target_block'] = 'Khối';
$string['target_heading'] = 'Mục tiêu của bước';
$string['target_selector'] = 'Bộ chọn';
$string['target_selector_targetvalue'] = 'Bộ chọn CSS';
$string['target_selector_targetvalue_help'] = 'Có thể dùng bộ chọn CSS để xác định hầu hết mọi phần tử trên trang. Bạn có thể dễ dàng tìm bộ chọn phù hợp bằng công cụ dành cho nhà phát triển trên trình duyệt web.';
$string['target_unattached'] = 'Hiển thị ở giữa trang';
$string['targettype'] = 'Loại mục tiêu';
$string['targettype_help'] = 'Mỗi bước được gắn với một phần của trang - mục tiêu. Các loại mục tiêu gồm:

* Khối - hiển thị bước bên cạnh một khối được chỉ định
* Bộ chọn CSS - xác định chính xác vùng mục tiêu bằng CSS
* Hiển thị ở giữa trang - dành cho bước không cần gắn với một phần cụ thể của trang';
$string['title'] = 'Tiêu đề';
$string['title_help'] = 'Tiêu đề của một bước có thể được thêm dưới dạng văn bản thuần, nếu cần thì đặt trong thẻ đa ngôn ngữ (để sử dụng với bộ lọc nội dung đa ngôn ngữ).

Ngoài ra, có thể nhập ID chuỗi ngôn ngữ theo định dạng identifier,component (không có dấu ngoặc và không có khoảng trắng sau dấu phẩy).';
$string['tour_activityinfo_activity_student_content'] = 'Ngày của hoạt động và những việc cần làm để hoàn thành hoạt động được hiển thị trên trang hoạt động.';
$string['tour_activityinfo_activity_student_title'] = 'Mới: Thông tin hoạt động';
$string['tour_activityinfo_activity_teacher_content'] = 'Ngày của hoạt động và điều kiện hoàn thành hiện được hiển thị cho học viên trên từng trang hoạt động (và tùy chọn trên trang khóa học).

Đối với các hoạt động yêu cầu học viên tự đánh dấu là đã hoàn thành, nút \'Đánh dấu là hoàn thành\' sẽ hiển thị trên trang hoạt động.';
$string['tour_activityinfo_activity_teacher_title'] = 'Mới: Thông tin hoạt động';
$string['tour_activityinfo_course_student_content'] = 'Ngày của hoạt động và/hoặc những việc cần làm để hoàn thành hoạt động được hiển thị trên trang khóa học.';
$string['tour_activityinfo_course_student_title'] = 'Mới: Thông tin hoạt động';
$string['tour_activityinfo_course_teacher_content'] = 'Các cài đặt khóa học mới \'Hiển thị điều kiện hoàn thành\' và \'Hiển thị ngày hoạt động\' cho phép bạn chọn có hiển thị điều kiện hoàn thành hoạt động (nếu đã thiết lập) và/hoặc ngày hoạt động cho học viên trên trang khóa học hay không.';
$string['tour_activityinfo_course_teacher_title'] = 'Mới: Thông tin hoạt động';
$string['tour_final_step_content'] = 'Đây là phần kết thúc hướng dẫn người dùng. Hướng dẫn sẽ không hiển thị lại trừ khi bạn đặt lại bằng liên kết ở chân trang.';
$string['tour_final_step_title'] = 'Kết thúc hướng dẫn';
$string['tour_gradebook_action_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_action_menu::tool_usertours@@</div>Sắp xếp các cột và chọn những cột cần hiển thị. Trong chế độ chỉnh sửa, dùng lối tắt này để truy cập các tác vụ thường dùng liên quan đến xem và chỉnh sửa mục điểm.';
$string['tour_gradebook_action_title'] = 'Liên kết nhanh đến thao tác';
$string['tour_gradebook_filter_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_initials::tool_usertours@@</div>Lọc học viên theo chữ cái đầu trong tên hoặc họ.';
$string['tour_gradebook_filter_title'] = 'Lọc theo tên';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div>Dùng ô tìm kiếm để nhanh chóng tìm học viên cụ thể.';
$string['tour_gradebook_search_title'] = 'Dễ dàng tìm học viên';
$string['tour_gradebook_tour_description'] = 'Các tính năng tìm kiếm và điều hướng trong báo cáo chấm điểm của sổ điểm';
$string['tour_gradebook_tour_name'] = 'Báo cáo chấm điểm của sổ điểm';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Đăng tin tức quan trọng tại đây.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Bạn có điều gì muốn thông báo với mọi người không?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Thêm nội dung mới hoặc chỉnh sửa nội dung hiện có.';
$string['tour_navigation_course_edit_teacher_title'] = 'Bật chế độ chỉnh sửa';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Duyệt các hoạt động và theo dõi tiến độ của bạn.';
$string['tour_navigation_course_index_student_title'] = 'Tìm hiểu cách sử dụng';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Kéo và thả hoạt động để sắp xếp lại nội dung khóa học.';
$string['tour_navigation_course_index_teacher_title'] = 'Mục lục khóa học';
$string['tour_navigation_course_student_tour_des'] = 'Nơi duyệt các hoạt động trong khóa học';
$string['tour_navigation_course_student_tour_name'] = 'Mục lục khóa học';
$string['tour_navigation_course_teacher_tour_des'] = 'Chế độ chỉnh sửa, kéo và thả hoạt động, đăng thông báo trong khóa học';
$string['tour_navigation_course_teacher_tour_name'] = 'Chỉnh sửa khóa học';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Bảng bên này có thể chứa thêm nhiều tính năng.';
$string['tour_navigation_dashboard_title'] = 'Mở rộng để khám phá';
$string['tour_navigation_dashboard_tour_des'] = 'Nơi tìm thấy các khối';
$string['tour_navigation_dashboard_tour_name'] = 'Ngăn khối';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Thêm, sao chép, xóa và ẩn khóa học từ menu này.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Tôi đã hiểu';
$string['tour_navigation_mycourses_title'] = 'Khóa học và danh mục';
$string['tour_navigation_mycourses_tour_des'] = 'Các tùy chọn quản lý khóa học trên trang Khóa học của tôi';
$string['tour_navigation_mycourses_tour_name'] = 'Quản lý khóa học';
$string['tour_resetforall'] = 'Trạng thái của hướng dẫn đã được đặt lại. Hướng dẫn sẽ được hiển thị lại cho tất cả người dùng.';
$string['tour1_content_addingblocks'] = 'Trên thực tế, hãy cân nhắc kỹ trước khi thêm khối vào các trang. Khối không hiển thị trong ứng dụng Moodle, vì vậy nhìn chung, tốt hơn hết là đảm bảo trang web hoạt động tốt mà không cần khối nào.';
$string['tour1_content_blockregion'] = 'Ở đây vẫn có một vùng khối. Chúng tôi khuyên bạn nên xóa hoàn toàn các khối Điều hướng và Quản trị, vì tất cả chức năng của chúng đều có ở nơi khác trong giao diện Boost.';
$string['tour1_content_customisation'] = 'Để tùy chỉnh giao diện trang web và trang chủ, hãy dùng menu cài đặt ở góc tiêu đề này. Hãy thử bật chế độ chỉnh sửa ngay bây giờ.';
$string['tour1_content_end'] = 'Đây là phần kết thúc hướng dẫn người dùng. Hướng dẫn sẽ không hiển thị lại trừ khi bạn đặt lại bằng liên kết ở chân trang. Với tư cách quản trị viên, bạn cũng có thể tạo hướng dẫn của riêng mình như thế này!';
$string['tour1_content_navigation'] = 'Các mục điều hướng chính hiện nằm trong ngăn điều hướng này. Nội dung sẽ thay đổi tùy theo vị trí của bạn trên trang. Dùng nút ở phía trên để ẩn hoặc hiện ngăn.';
$string['tour1_content_welcome'] = 'Chào mừng bạn đến với giao diện Boost. Nếu bạn đã nâng cấp từ phiên bản trước, có thể bạn sẽ thấy một số thứ trông hơi khác trong giao diện này.';
$string['tour1_title_addingblocks'] = 'Thêm khối';
$string['tour1_title_blockregion'] = 'Vùng khối';
$string['tour1_title_customisation'] = 'Tùy chỉnh';
$string['tour1_title_end'] = 'Kết thúc hướng dẫn';
$string['tour1_title_navigation'] = 'Điều hướng';
$string['tour1_title_welcome'] = 'Chào mừng';
$string['tour2_content_addblock'] = 'Nếu bật chế độ chỉnh sửa, bạn có thể thêm khối từ ngăn điều hướng. Tuy nhiên, hãy cân nhắc kỹ trước khi thêm khối vào các trang. Khối không hiển thị trong ứng dụng Moodle, vì vậy để có trải nghiệm tốt nhất, hãy đảm bảo khóa học hoạt động tốt mà không cần khối nào.';
$string['tour2_content_addingblocks'] = 'Bạn có thể thêm khối vào trang này bằng nút này. Tuy nhiên, hãy cân nhắc kỹ trước khi thêm khối vào các trang. Khối không hiển thị trong ứng dụng Moodle, vì vậy để có trải nghiệm tốt nhất, hãy đảm bảo khóa học hoạt động tốt mà không cần khối nào.';
$string['tour2_content_customisation'] = 'Để thay đổi cài đặt khóa học, hãy dùng menu cài đặt ở góc tiêu đề này. Bạn cũng sẽ thấy menu cài đặt tương tự trên trang chủ của mỗi hoạt động. Hãy thử bật chế độ chỉnh sửa ngay bây giờ.';
$string['tour2_content_end'] = 'Đây là phần kết thúc hướng dẫn người dùng. Hướng dẫn sẽ không hiển thị lại trừ khi bạn đặt lại bằng liên kết ở chân trang. Quản trị viên trang web cũng có thể tạo thêm hướng dẫn cho trang web này nếu cần.';
$string['tour2_content_navigation'] = 'Giờ đây, bạn điều hướng bằng ngăn điều hướng này. Dùng nút ở phía trên để ẩn hoặc hiện ngăn. Bạn sẽ thấy các liên kết đến các mục trong khóa học.';
$string['tour2_content_opendrawer'] = 'Hãy thử mở ngăn điều hướng ngay bây giờ.';
$string['tour2_content_participants'] = 'Xem người tham gia tại đây. Bạn cũng có thể thêm hoặc xóa học viên tại đây.';
$string['tour2_content_welcome'] = 'Chào mừng bạn đến với giao diện Boost. Nếu trang web của bạn đã được nâng cấp từ phiên bản trước, có thể bạn sẽ thấy trang khóa học trông hơi khác.';
$string['tour2_title_addblock'] = 'Thêm khối';
$string['tour2_title_addingblocks'] = 'Thêm khối';
$string['tour2_title_customisation'] = 'Tùy chỉnh';
$string['tour2_title_end'] = 'Kết thúc hướng dẫn';
$string['tour2_title_navigation'] = 'Điều hướng';
$string['tour2_title_opendrawer'] = 'Mở ngăn điều hướng';
$string['tour2_title_participants'] = 'Người tham gia khóa học';
$string['tour2_title_welcome'] = 'Chào mừng';
$string['tour3_content_dashboard'] = 'Bảng điều khiển mới có nhiều tính năng giúp bạn dễ dàng truy cập những thông tin quan trọng nhất.';
$string['tour3_content_displayoptions'] = 'Có thể sắp xếp khóa học theo tên khóa học, tên ngắn của khóa học hoặc ngày truy cập gần nhất.

Bạn cũng có thể chọn hiển thị các khóa học dưới dạng danh sách, kèm thông tin tóm tắt hoặc theo chế độ xem \'thẻ\' mặc định.';
$string['tour3_content_overview'] = 'Khối Tổng quan khóa học hiển thị tất cả các khóa học bạn đã ghi danh.

Bạn có thể chọn hiển thị các khóa học đang diễn ra, đã qua, sắp tới hoặc các khóa học bạn đã đánh dấu sao.';
$string['tour3_content_recentcourses'] = 'Khối Các khóa học đã truy cập gần đây hiển thị những khóa học bạn đã truy cập gần nhất, giúp bạn quay lại ngay.';
$string['tour3_content_starring'] = 'Bạn có thể đánh dấu sao một khóa học để làm nổi bật khóa học đó, hoặc ẩn một khóa học không còn quan trọng với bạn.

Các thao tác này chỉ ảnh hưởng đến chế độ xem của bạn.

Bạn cũng có thể chọn hiển thị các khóa học dưới dạng danh sách, kèm thông tin tóm tắt hoặc theo chế độ xem \'thẻ\' mặc định.';
$string['tour3_content_timeline'] = 'Khối Dòng thời gian hiển thị các sự kiện sắp tới quan trọng của bạn.

Bạn có thể chọn hiển thị các hoạt động trong tuần tới, tháng tới hoặc thời gian xa hơn.

Bạn cũng có thể hiển thị các mục đã quá hạn.';
$string['tour3_title_dashboard'] = 'Bảng điều khiển của bạn';
$string['tour3_title_displayoptions'] = 'Tùy chọn hiển thị';
$string['tour3_title_overview'] = 'Tổng quan khóa học';
$string['tour3_title_recentcourses'] = 'Các khóa học đã truy cập gần đây';
$string['tour3_title_starring'] = 'Đánh dấu sao và ẩn khóa học';
$string['tour3_title_timeline'] = 'Khối Dòng thời gian';
$string['tour4_content_groupconvo'] = 'Nếu bạn là thành viên của một nhóm đã bật tính năng nhắn tin nhóm, các cuộc trò chuyện nhóm sẽ hiển thị tại đây.

Các cuộc trò chuyện nhóm trong khóa học cho phép bạn tương tác với những người khác trong nhóm tại một nơi riêng tư và thuận tiện.';
$string['tour4_content_icon'] = 'Bạn có thể truy cập tin nhắn từ bất kỳ trang nào bằng biểu tượng này.

Nếu có tin nhắn chưa đọc, số lượng tin nhắn chưa đọc cũng sẽ hiển thị tại đây.

Nhấp vào biểu tượng để mở ngăn nhắn tin và tiếp tục hướng dẫn.';
$string['tour4_content_messaging'] = 'Các tính năng nhắn tin mới bao gồm nhắn tin nhóm trong khóa học và khả năng kiểm soát tốt hơn những người có thể nhắn tin cho bạn.';
$string['tour4_content_settings'] = 'Bạn có thể truy cập cài đặt nhắn tin bằng biểu tượng bánh răng. Cài đặt quyền riêng tư mới cho phép bạn giới hạn những người có thể nhắn tin cho mình.';
$string['tour4_content_starred'] = 'Bạn có thể đánh dấu sao các cuộc trò chuyện cụ thể để dễ tìm hơn.';
$string['tour4_title_groupconvo'] = 'Tin nhắn nhóm';
$string['tour4_title_icon'] = 'Nhắn tin';
$string['tour4_title_messaging'] = 'Giao diện nhắn tin mới';
$string['tour4_title_settings'] = 'Cài đặt nhắn tin';
$string['tour4_title_starred'] = 'Đã đánh dấu sao';
$string['tourconfig'] = 'Tệp cấu hình hướng dẫn để nhập';
$string['tourisenabled'] = 'Hướng dẫn đã được bật';
$string['tourlist_explanation'] = 'Bạn có thể tạo bao nhiêu hướng dẫn tùy ý và bật chúng cho các phần khác nhau của Moodle. Mỗi trang chỉ có thể tạo một hướng dẫn.';
$string['tours'] = 'Hướng dẫn';
$string['usertours'] = 'Hướng dẫn người dùng';
$string['usertours:managetours'] = 'Tạo, chỉnh sửa và xóa hướng dẫn người dùng';
$string['viewtour_edit'] = 'Bạn có thể <a href="{$a->editlink}">chỉnh sửa mặc định của hướng dẫn</a> và <a href="{$a->resetlink}">buộc hiển thị lại hướng dẫn</a> cho tất cả người dùng.';
$string['viewtour_info'] = 'Đây là hướng dẫn \'{$a->tourname}\'. Hướng dẫn áp dụng cho đường dẫn \'{$a->path}\'.';
