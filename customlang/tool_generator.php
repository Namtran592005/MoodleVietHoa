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
 * @subpackage generator
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalmodules'] = 'Hoạt động bổ sung';
$string['additionalmodules_help'] = 'Chọn thêm các hoạt động triển khai hàm course_backend_generator_create_activity để đưa vào khóa học thử nghiệm.';
$string['bigfile'] = 'Tệp lớn {$a}';
$string['courseexplanation'] = 'Công cụ này tạo các khóa học thử nghiệm tiêu chuẩn, bao gồm nhiều
mục, hoạt động và tệp.

Công cụ nhằm cung cấp thước đo tiêu chuẩn để kiểm tra độ tin cậy
và hiệu năng của các thành phần hệ thống khác nhau (chẳng hạn như sao lưu và khôi phục).

Bài kiểm tra này rất quan trọng vì trước đây đã có nhiều trường hợp hệ thống không hoạt động
khi gặp các tình huống sử dụng thực tế (ví dụ: khóa học có 1.000 hoạt động).

Các khóa học được tạo bằng tính năng này có thể chiếm dung lượng lớn trong cơ sở dữ liệu và
hệ thống tệp (hàng chục gigabyte). Bạn cần xóa các khóa học
(và chờ các lượt dọn dẹp khác nhau chạy xong) để giải phóng dung lượng này.

**Không sử dụng tính năng này trên hệ thống đang hoạt động**. Chỉ sử dụng trên máy chủ phát triển.
(Để tránh sử dụng nhầm, tính năng này bị tắt trừ khi bạn cũng đã chọn
mức gỡ lỗi DEVELOPER.)';
$string['coursesize_0'] = 'XS (~10KB; tạo trong ~1 giây)';
$string['coursesize_1'] = 'S (~10MB; tạo trong ~30 giây)';
$string['coursesize_2'] = 'M (~100MB; tạo trong ~2 phút)';
$string['coursesize_3'] = 'L (~1GB; tạo trong ~30 phút)';
$string['coursesize_4'] = 'XL (~10GB; tạo trong ~2 giờ)';
$string['coursesize_5'] = 'XXL (~20GB; tạo trong ~4 giờ)';
$string['coursewithoutusers'] = 'Khóa học đã chọn không có người dùng';
$string['createcourse'] = 'Tạo khóa học';
$string['createtestplan'] = 'Tạo kế hoạch kiểm thử';
$string['creating'] = 'Đang tạo khóa học';
$string['done'] = 'hoàn tất ({$a}s)';
$string['downloadtestplan'] = 'Tải xuống kế hoạch kiểm thử';
$string['downloadusersfile'] = 'Tải xuống tệp người dùng';
$string['error_nocourses'] = 'Không có khóa học để tạo kế hoạch kiểm thử';
$string['error_noforumdiscussions'] = 'Khóa học đã chọn không có cuộc thảo luận nào trong diễn đàn';
$string['error_noforuminstances'] = 'Khóa học đã chọn không có phiên bản mô-đun diễn đàn nào';
$string['error_noforumreplies'] = 'Khóa học đã chọn không có phản hồi nào trong diễn đàn';
$string['error_nonexistingcourse'] = 'Khóa học được chỉ định không tồn tại';
$string['error_nopageinstances'] = 'Khóa học đã chọn không có phiên bản mô-đun trang nào';
$string['error_notdebugging'] = 'Không khả dụng trên máy chủ này vì chế độ gỡ lỗi chưa được đặt thành DEVELOPER';
$string['error_nouserspassword'] = 'Bạn cần đặt $CFG->tool_generator_users_password trong config.php để tạo kế hoạch kiểm thử';
$string['execute'] = 'Thực thi';
$string['execute_cleanup'] = 'Các tình huống dọn dẹp';
$string['execute_scenarios'] = 'Các tình huống kiểm thử';
$string['fullname'] = 'Khóa học thử nghiệm: {$a->size}';
$string['maketestcourse'] = 'Tạo khóa học thử nghiệm';
$string['maketestplan'] = 'Tạo kế hoạch kiểm thử JMeter';
$string['notenoughusers'] = 'Khóa học đã chọn không có đủ người dùng';
$string['pluginname'] = 'Trình tạo dữ liệu phát triển';
$string['privacy:metadata'] = 'Plugin Development data generator không lưu trữ dữ liệu cá nhân.';
$string['progress_checkaccounts'] = 'Đang kiểm tra tài khoản người dùng ({$a})';
$string['progress_coursecompleted'] = 'Đã hoàn tất khóa học ({$a}s)';
$string['progress_createaccounts'] = 'Đang tạo tài khoản người dùng ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Đang tạo bài tập ({$a})';
$string['progress_createbigfiles'] = 'Đang tạo tệp lớn ({$a})';
$string['progress_createcourse'] = 'Đang tạo khóa học {$a}';
$string['progress_createforum'] = 'Đang tạo diễn đàn ({$a} bài viết)';
$string['progress_createpages'] = 'Đang tạo trang ({$a})';
$string['progress_createsmallfiles'] = 'Đang tạo tệp nhỏ ({$a})';
$string['progress_createusers'] = 'Đang tạo tài khoản người dùng ({$a})';
$string['progress_enrol'] = 'Đang ghi danh người dùng vào khóa học ({$a})';
$string['progress_sitecompleted'] = 'Đã hoàn tất trang web ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 khóa học, tạo trong ~30 giây)';
$string['sitesize_1'] = 'S (~50MB; 8 khóa học, tạo trong ~2 phút)';
$string['sitesize_2'] = 'M (~200MB; 73 khóa học, tạo trong ~10 phút)';
$string['sitesize_3'] = 'L (~1\'5GB; 277 khóa học, tạo trong ~1\'5 giờ)';
$string['sitesize_4'] = 'XL (~10GB; 1065 khóa học, tạo trong ~5 giờ)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 khóa học, tạo trong ~10 giờ)';
$string['size'] = 'Kích thước khóa học';
$string['smallfiles'] = 'Tệp nhỏ';
$string['step_example'] = 'Ví dụ về bước:';
$string['targetcourse'] = 'Khóa học đích thử nghiệm';
$string['testplanexplanation'] = 'Công cụ này tạo một tệp kế hoạch kiểm thử JMeter cùng với tệp thông tin đăng nhập người dùng.

Kế hoạch kiểm thử này được thiết kế để hoạt động cùng với {$a}, giúp chạy kế hoạch kiểm thử trong một môi trường Moodle cụ thể dễ dàng hơn, thu thập thông tin về các lần chạy và so sánh kết quả. Vì vậy, bạn cần tải xuống và sử dụng tập lệnh test_runner.sh của nó hoặc làm theo hướng dẫn cài đặt và sử dụng.

Bạn cần đặt mật khẩu cho người dùng khóa học trong config.php (ví dụ: $CFG->tool_generator_users_password = \'moodle\\';
$string['testplansize_0'] = 'XS ({$a->users} người dùng, {$a->loops} vòng lặp và thời gian rampup {$a->rampup})';
$string['testplansize_1'] = 'S ({$a->users} người dùng, {$a->loops} vòng lặp và thời gian rampup {$a->rampup})';
$string['testplansize_2'] = 'M ({$a->users} người dùng, {$a->loops} vòng lặp và thời gian rampup {$a->rampup})';
$string['testplansize_3'] = 'L ({$a->users} người dùng, {$a->loops} vòng lặp và thời gian rampup {$a->rampup})';
$string['testplansize_4'] = 'XL ({$a->users} người dùng, {$a->loops} vòng lặp và thời gian rampup {$a->rampup})';
$string['testplansize_5'] = 'XXL ({$a->users} người dùng, {$a->loops} vòng lặp và thời gian rampup {$a->rampup})';
$string['testscenario'] = 'Tạo kịch bản kiểm thử';
$string['testscenario_description'] = 'Việc tạo kịch bản kiểm thử sử dụng cú pháp tệp tính năng giới hạn để tạo tất cả các thành phần cần thiết nhằm chạy kiểm thử thủ công.';
$string['testscenario_errorparsing'] = 'Lỗi khi phân tích cú pháp tệp tính năng: {$a}';
$string['testscenario_file'] = 'Tệp tính năng';
$string['testscenario_filedesc'] = 'Các tệp tính năng được tải lên chỉ có thể chứa những kịch bản có các bước core_data_generator hoặc một số bước cụ thể không yêu cầu selenium. Tất cả kịch bản sẽ được thực thi cùng lúc, ngoại trừ những kịch bản có thẻ @cleanup.';
$string['testscenario_filedesc_cleanup'] = 'Các kịch bản có thẻ @cleanup sẽ chỉ được thực thi nếu cài đặt "Execute"
được đặt thành "Cleanup". Để thực hiện dọn dẹp qua Giao diện dòng lệnh (CLI), hãy dùng tùy chọn --cleanup.';
$string['testscenario_filedesc_list'] = 'Đây là danh sách các bước có thể được dùng trong tệp tính năng của kịch bản kiểm thử:';
$string['testscenario_invalidfile'] = 'Định dạng tệp không hợp lệ hoặc chứa các bước không hợp lệ.';
$string['testscenario_invalidstep'] = 'Bước không xác định. Chỉ chấp nhận các bước của trình tạo khi tạo kịch bản kiểm thử.';
$string['testscenario_nosteps'] = 'Không có bước nào trong tệp để thực thi.';
$string['testscenario_notready'] = 'Các thư viện Composer và Behat chưa được cài đặt.<br><br>Thực thi lệnh này để bật công cụ: <strong>php admin/tool/generator/cli/runtestscenario.php</strong>';
$string['testscenario_outline'] = 'Không hỗ trợ phác thảo kịch bản.';
$string['testscenario_scenarionosteps'] = 'Kịch bản này không có bước nào.';
$string['testscenario_steps'] = 'Các bước của kịch bản kiểm thử:';
$string['updateuserspassword'] = 'Cập nhật mật khẩu người dùng khóa học';
$string['updateuserspassword_help'] = 'JMeter cần đăng nhập bằng tài khoản người dùng khóa học. Bạn có thể đặt mật khẩu người dùng bằng cách sử dụng $CFG->tool_generator_users_password trong config.php; cài đặt này cập nhật mật khẩu người dùng khóa học theo $CFG->tool_generator_users_password. Điều này có thể hữu ích nếu bạn đang sử dụng khóa học không được tạo bởi tool_generator hoặc nếu $CFG->tool_generator_users_password chưa được đặt khi bạn tạo các khóa học thử nghiệm.';
