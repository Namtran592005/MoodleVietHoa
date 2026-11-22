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
 * @package    quizaccess
 * @subpackage seb
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Thêm mẫu mới';
$string['allowedbrowserkeysdistinct'] = 'Tất cả các khóa phải khác nhau.';
$string['allowedbrowserkeyssyntax'] = 'Khóa phải là chuỗi hex gồm 64 ký tự.';
$string['cachedef_config'] = 'Bộ nhớ đệm cấu hình SEB';
$string['cachedef_configkey'] = 'Bộ nhớ đệm khóa cấu hình SEB';
$string['cachedef_quizsettings'] = 'Bộ nhớ đệm cài đặt bài kiểm tra SEB';
$string['cantdelete'] = 'Không thể xóa mẫu này vì mẫu đã được sử dụng cho một hoặc nhiều bài kiểm tra.';
$string['cantedit'] = 'Không thể chỉnh sửa mẫu này vì mẫu đã được sử dụng cho một hoặc nhiều bài kiểm tra.';
$string['checkingaccess'] = 'Đang kiểm tra quyền truy cập vào Safe Exam Browser...';
$string['clientrequiresseb'] = 'Bài kiểm tra này đã được cấu hình để sử dụng Safe Exam Browser với cấu hình của máy khách.';
$string['confirmtemplateremovalquestion'] = 'Bạn có chắc chắn muốn xóa mẫu này không?';
$string['confirmtemplateremovaltitle'] = 'Xác nhận xóa mẫu?';
$string['conflictingsettings'] = 'Bạn không có quyền cập nhật các cài đặt Safe Exam Browser hiện có.';
$string['content'] = 'Mẫu';
$string['description'] = 'Mô tả';
$string['disabledsettings'] = 'Các cài đặt đã bị tắt.';
$string['disabledsettings_help'] = 'Không thể thay đổi cài đặt Safe Exam Browser của bài kiểm tra nếu bài kiểm tra đã có người làm. Để thay đổi cài đặt, trước tiên phải xóa tất cả các lần làm bài.';
$string['downloadsebconfig'] = 'Tải xuống tệp cấu hình SEB';
$string['duplicatetemplate'] = 'Đã tồn tại mẫu có cùng tên.';
$string['edittemplate'] = 'Chỉnh sửa mẫu';
$string['enabled'] = 'Đã bật';
$string['error:ws:nokeyprovided'] = 'error:ws:nokeyprovided';
$string['error:ws:quiznotexists'] = 'Không tìm thấy bài kiểm tra khớp với ID mô-đun khóa học: {$a}';
$string['event:accessprevented'] = 'Đã ngăn truy cập bài kiểm tra';
$string['event:templatecreated'] = 'Đã tạo mẫu SEB';
$string['event:templatedeleted'] = 'Đã xóa mẫu SEB';
$string['event:templatedisabled'] = 'Đã tắt mẫu SEB';
$string['event:templateenabled'] = 'Đã bật mẫu SEB';
$string['event:templateupdated'] = 'Đã cập nhật mẫu SEB';
$string['exitsebbutton'] = 'Thoát Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Tải tệp cấu hình Safe Exam Browser lên';
$string['filemanager_sebconfigfile_help'] = 'Vui lòng tải tệp cấu hình Safe Exam Browser của bạn lên cho bài kiểm tra này.';
$string['filenotpresent'] = 'Vui lòng tải lên tệp cấu hình SEB.';
$string['fileparsefailed'] = 'Không thể lưu tệp đã tải lên dưới dạng tệp cấu hình SEB.';
$string['httplinkbutton'] = 'Tải cấu hình xuống';
$string['invalid_browser_key'] = 'Khóa trình duyệt SEB không hợp lệ';
$string['invalid_config_key'] = 'Khóa cấu hình SEB không hợp lệ';
$string['invalidkeys'] = 'Không thể xác thực các khóa Safe Exam Browser. Hãy kiểm tra xem bạn có đang sử dụng Safe Exam Browser với đúng tệp cấu hình hay không.';
$string['invalidtemplate'] = 'Mẫu cấu hình SEB không hợp lệ';
$string['manage_templates'] = 'Mẫu Safe Exam Browser';
$string['managetemplates'] = 'Quản lý mẫu';
$string['missingrequiredsettings'] = 'Một số giá trị bắt buộc còn thiếu trong cài đặt cấu hình.';
$string['name'] = 'Tên';
$string['newtemplate'] = 'Mẫu mới';
$string['noconfigfilefound'] = 'Không tìm thấy tệp cấu hình SEB đã tải lên cho bài kiểm tra có cmid: {$a}';
$string['noconfigfound'] = 'Không tìm thấy cấu hình SEB cho bài kiểm tra có cmid: {$a}';
$string['not_seb'] = 'Không sử dụng Safe Exam Browser.';
$string['notemplate'] = 'Không có mẫu';
$string['passwordnotset'] = 'Cài đặt hiện tại yêu cầu các bài kiểm tra sử dụng Safe Exam Browser phải có mật khẩu.';
$string['pluginname'] = 'Quy tắc truy cập Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Cài đặt Safe Exam Browser cho một bài kiểm tra. Bao gồm ID của người dùng cuối cùng tạo hoặc sửa đổi cài đặt.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID của bài kiểm tra có các cài đặt này.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Thời gian Unix tạo các cài đặt.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Thời gian Unix sửa đổi các cài đặt lần cuối.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID của người dùng cuối cùng tạo hoặc sửa đổi các cài đặt.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Cài đặt mẫu Safe Exam Browser. Bao gồm ID của người dùng cuối cùng tạo hoặc sửa đổi mẫu.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Thời gian Unix tạo mẫu.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Thời gian Unix sửa đổi mẫu lần cuối.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID của người dùng cuối cùng tạo hoặc sửa đổi mẫu.';
$string['quizsettings'] = 'Cài đặt bài kiểm tra';
$string['restoredfrom'] = '{$a->name} (được khôi phục qua cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb_activateurlfiltering'] = 'Bật lọc URL';
$string['seb_activateurlfiltering_help'] = 'Nếu bật, URL sẽ được lọc khi tải trang web. Bộ lọc cần được xác định bên dưới.';
$string['seb_allowcapturecamera'] = 'Cho phép trình duyệt truy cập camera';
$string['seb_allowcapturecamera_help'] = 'Nếu bật, người dùng sẽ được yêu cầu cấp quyền truy cập camera cho SEB trước khi bắt đầu phiên thi. Trên macOS 12/iOS 15 trở lên, tắt cài đặt này sẽ ngăn các ứng dụng web truy cập camera, tức là không thể quay video qua WebRTC.';
$string['seb_allowcapturemicrophone'] = 'Cho phép trình duyệt truy cập micrô';
$string['seb_allowcapturemicrophone_help'] = 'Nếu bật, người dùng sẽ được yêu cầu cấp quyền truy cập micrô cho SEB trước khi bắt đầu phiên thi. Trên macOS 12/iOS 15 trở lên, tắt cài đặt này sẽ ngăn các ứng dụng web truy cập micrô, tức là không thể ghi âm qua WebRTC.';
$string['seb_allowedbrowserexamkeys'] = 'Các khóa bài thi của trình duyệt được phép';
$string['seb_allowedbrowserexamkeys_help'] = 'Trong trường này, bạn có thể nhập các khóa bài thi của trình duyệt cho những phiên bản Safe Exam Browser được phép truy cập bài kiểm tra này. Nếu không nhập khóa nào, các khóa bài thi của trình duyệt sẽ không được kiểm tra.';
$string['seb_alloweddisplaysmaxnumber'] = 'Số màn hình tối đa được phép';
$string['seb_alloweddisplaysmaxnumber_help'] = 'Đặt số lượng màn hình kết nối tối đa được phép (1-3).';
$string['seb_allowreloadinexam'] = 'Bật chức năng tải lại trong bài thi';
$string['seb_allowreloadinexam_help'] = 'Nếu bật, có thể tải lại trang (bằng nút tải lại trên thanh tác vụ SEB, thanh công cụ trình duyệt, menu trượt bên iOS hoặc phím tắt F5/cmd+R). Lưu ý rằng bộ nhớ đệm ngoại tuyến có thể bị lỗi nếu người dùng cố tải lại trang khi không có kết nối Internet.';
$string['seb_allowscreencapture'] = 'Cho phép trình duyệt truy cập màn hình';
$string['seb_allowscreencapture_help'] = 'Nếu bật, chức năng chụp màn hình của hệ điều hành (phím Print Screen, công cụ quay màn hình) được phép sử dụng khi Safe Exam Browser đang chạy. Cần bật tùy chọn này để các công cụ giám sát như Veyon có thể truy cập màn hình của học viên trên SEB 3.10 trở lên. Lưu ý: bật tùy chọn này cho phép chụp nội dung bài thi bằng ảnh màn hình.';
$string['seb_allowspellchecking'] = 'Bật kiểm tra chính tả';
$string['seb_allowspellchecking_help'] = 'Nếu bật, chức năng kiểm tra chính tả trong trình duyệt SEB sẽ được phép.';
$string['seb_allowuserquitseb'] = 'Cho phép thoát SEB';
$string['seb_allowuserquitseb_help'] = 'Nếu bật, người dùng có thể thoát SEB bằng nút "Thoát" trên thanh tác vụ SEB, nhấn Ctrl-Q hoặc nhấp vào nút đóng cửa sổ trình duyệt chính.';
$string['seb_enableaudiocontrol'] = 'Bật điều khiển âm thanh';
$string['seb_enableaudiocontrol_help'] = 'Nếu bật, biểu tượng điều khiển âm thanh sẽ hiển thị trên thanh tác vụ SEB.';
$string['seb_expressionsallowed'] = 'Các biểu thức được phép';
$string['seb_expressionsallowed_help'] = 'Trường văn bản chứa các biểu thức lọc được phép cho các URL được phép. Có thể dùng ký tự đại diện \'\\*\'. Ví dụ về biểu thức: \'example.com\' hoặc \'example.com/stuff/\\*\'. \'example.com\' khớp với \'example.com\', \'www.example.com\' và \'www.mail.example.com\'. \'example.com/stuff/\\*\' khớp với mọi yêu cầu đến bất kỳ tên miền phụ nào của \'example.com\' có \'stuff\' là thành phần đầu tiên của đường dẫn.';
$string['seb_expressionsblocked'] = 'Các biểu thức bị chặn';
$string['seb_expressionsblocked_help'] = 'Trường văn bản chứa các biểu thức lọc cho những URL bị chặn. Có thể dùng ký tự đại diện \'\\*\'. Ví dụ về biểu thức: \'example.com\' hoặc \'example.com/stuff/\\*\'. \'example.com\' khớp với \'example.com\', \'www.example.com\' và \'www.mail.example.com\'. \'example.com/stuff/\\*\' khớp với mọi yêu cầu đến bất kỳ tên miền phụ nào của \'example.com\' có \'stuff\' là thành phần đầu tiên của đường dẫn.';
$string['seb_filterembeddedcontent'] = 'Lọc cả nội dung nhúng';
$string['seb_filterembeddedcontent_help'] = 'Nếu bật, các tài nguyên nhúng cũng sẽ được lọc bằng bộ lọc đã thiết lập.';
$string['seb_help'] = 'Cấu hình bài kiểm tra để sử dụng Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Hiển thị nút Thoát Safe Exam Browser, được cấu hình bằng liên kết thoát này';
$string['seb_linkquitseb_help'] = 'Trong trường này, bạn có thể nhập liên kết để thoát SEB. Liên kết này được dùng cho nút "Thoát Safe Exam Browser" trên trang xuất hiện sau khi nộp bài thi. Khi nhấp vào nút hoặc liên kết được đặt ở vị trí tùy ý, có thể thoát SEB mà không cần nhập mật khẩu thoát. Với trang HTTPS, liên kết thoát phải bắt đầu bằng https://. Nếu không nhập liên kết, nút "Thoát Safe Exam Browser" sẽ không xuất hiện và không có liên kết nào được thiết lập để thoát SEB.';
$string['seb_managetemplates'] = 'Quản lý mẫu Safe Exam Browser';
$string['seb_muteonstartup'] = 'Tắt tiếng khi khởi động';
$string['seb_muteonstartup_help'] = 'Nếu bật, âm thanh sẽ bị tắt tiếng khi khởi động SEB.';
$string['seb_quitpassword'] = 'Mật khẩu thoát';
$string['seb_quitpassword_help'] = 'Mật khẩu này sẽ được yêu cầu khi người dùng cố thoát SEB bằng nút "Thoát", Ctrl-Q hoặc nút đóng trong cửa sổ trình duyệt chính. Nếu không đặt mật khẩu thoát, SEB chỉ hiển thị lời nhắc "Bạn có chắc chắn muốn thoát SEB không?".';
$string['seb_regexallowed'] = 'Cho phép Regex';
$string['seb_regexallowed_help'] = 'Trường văn bản chứa các biểu thức lọc URL được phép, ở định dạng biểu thức chính quy (Regex).';
$string['seb_regexblocked'] = 'Chặn Regex';
$string['seb_regexblocked_help'] = 'Trường văn bản chứa các biểu thức lọc URL bị chặn, ở định dạng biểu thức chính quy (Regex).';
$string['seb_requiresafeexambrowser'] = 'Yêu cầu sử dụng Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Nếu bật, học viên chỉ có thể làm bài kiểm tra bằng Safe Exam Browser.
Các tùy chọn hiện có:

* Không
<br/>Không yêu cầu Safe Exam Browser để làm bài kiểm tra.
* Có – Sử dụng mẫu hiện có
<br/>Có thể sử dụng mẫu cấu hình Safe Exam Browser. Mẫu được quản lý trong phần quản trị trang. Các cài đặt thủ công của bạn sẽ ghi đè cài đặt trong mẫu.
* Có – Cấu hình thủ công
<br/>Không sử dụng mẫu cấu hình Safe Exam Browser. Bạn có thể cấu hình Safe Exam Browser thủ công.
* Có – Tải cấu hình riêng lên
<br/>Bạn có thể tải lên tệp cấu hình Safe Exam Browser của riêng mình. Tất cả cài đặt thủ công và việc sử dụng mẫu sẽ bị tắt.
* Có – Sử dụng cấu hình máy khách SEB
<br/>Không có cấu hình Safe Exam Browser nào ở phía Moodle. Có thể làm bài kiểm tra bằng bất kỳ cấu hình Safe Exam Browser nào.';
$string['seb_showkeyboardlayout'] = 'Hiển thị bố cục bàn phím';
$string['seb_showkeyboardlayout_help'] = 'Nếu bật, bố cục bàn phím hiện tại sẽ hiển thị trên thanh tác vụ SEB. Tùy chọn này cho phép chuyển sang các bố cục bàn phím khác đã được bật trong hệ điều hành.';
$string['seb_showreloadbutton'] = 'Hiển thị nút tải lại';
$string['seb_showreloadbutton_help'] = 'Nếu bật, nút tải lại sẽ hiển thị trên thanh tác vụ SEB, cho phép tải lại trang web hiện tại.';
$string['seb_showsebdownloadlink'] = 'Hiển thị nút tải Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Nếu bật, nút tải Safe Exam Browser sẽ hiển thị trên trang bắt đầu bài kiểm tra.';
$string['seb_showsebtaskbar'] = 'Hiển thị thanh tác vụ SEB';
$string['seb_showsebtaskbar_help'] = 'Nếu bật, thanh tác vụ sẽ xuất hiện ở cuối cửa sổ trình duyệt SEB. Thanh tác vụ cần thiết để hiển thị các mục như điều khiển Wi-Fi, nút tải lại, thời gian và bố cục bàn phím.';
$string['seb_showtime'] = 'Hiển thị thời gian';
$string['seb_showtime_help'] = 'Nếu bật, thời gian hiện tại sẽ hiển thị trên thanh tác vụ SEB.';
$string['seb_showwificontrol'] = 'Hiển thị điều khiển Wi-Fi';
$string['seb_showwificontrol_help'] = 'Nếu bật, nút điều khiển Wi-Fi sẽ xuất hiện trên thanh tác vụ SEB. Nút này cho phép người dùng kết nối lại với các mạng Wi-Fi đã từng kết nối.';
$string['seb_templateid'] = 'Mẫu cấu hình Safe Exam Browser';
$string['seb_templateid_help'] = 'Các cài đặt trong mẫu cấu hình được chọn sẽ được dùng để cấu hình Safe Exam Browser khi làm bài kiểm tra. Bạn có thể ghi đè cài đặt trong mẫu bằng các cài đặt thủ công.';
$string['seb_use_client'] = 'Có – Sử dụng cấu hình máy khách SEB';
$string['seb_use_manually'] = 'Có – Cấu hình thủ công';
$string['seb_use_template'] = 'Có – Sử dụng mẫu hiện có';
$string['seb_use_upload'] = 'Có – Tải cấu hình riêng lên';
$string['seb_userconfirmquit'] = 'Yêu cầu người dùng xác nhận khi thoát';
$string['seb_userconfirmquit_help'] = 'Nếu bật, người dùng phải xác nhận việc thoát SEB khi phát hiện liên kết thoát.';
$string['seb:bypassseb'] = 'Bỏ qua yêu cầu xem bài kiểm tra bằng Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Thay đổi cài đặt bài kiểm tra SEB: Chọn tệp cấu hình SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Thay đổi cài đặt bài kiểm tra SEB: Bật lọc URL';
$string['seb:manage_seb_allowcapturecamera'] = 'Thay đổi cài đặt bài kiểm tra SEB: Cho phép trình duyệt truy cập camera';
$string['seb:manage_seb_allowcapturemicrophone'] = 'Thay đổi cài đặt bài kiểm tra SEB: Cho phép trình duyệt truy cập micrô';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Thay đổi cài đặt bài kiểm tra SEB: Các khóa bài thi của trình duyệt được phép';
$string['seb:manage_seb_alloweddisplaysmaxnumber'] = 'Thay đổi cài đặt bài kiểm tra SEB: Số màn hình tối đa được phép';
$string['seb:manage_seb_allowreloadinexam'] = 'Thay đổi cài đặt bài kiểm tra SEB: Cho phép tải lại';
$string['seb:manage_seb_allowscreencapture'] = 'Thay đổi cài đặt bài kiểm tra SEB: Cho phép trình duyệt truy cập màn hình';
$string['seb:manage_seb_allowspellchecking'] = 'Thay đổi cài đặt bài kiểm tra SEB: Bật kiểm tra chính tả';
$string['seb:manage_seb_allowuserquitseb'] = 'Thay đổi cài đặt bài kiểm tra SEB: Cho phép thoát';
$string['seb:manage_seb_configuremanually'] = 'Thay đổi cài đặt bài kiểm tra SEB: Chọn cấu hình thủ công';
$string['seb:manage_seb_enableaudiocontrol'] = 'Thay đổi cài đặt bài kiểm tra SEB: Bật điều khiển âm thanh';
$string['seb:manage_seb_expressionsallowed'] = 'Thay đổi cài đặt bài kiểm tra SEB: Cho phép biểu thức đơn giản';
$string['seb:manage_seb_expressionsblocked'] = 'Thay đổi cài đặt bài kiểm tra SEB: Chặn biểu thức đơn giản';
$string['seb:manage_seb_filterembeddedcontent'] = 'Thay đổi cài đặt bài kiểm tra SEB: Lọc nội dung nhúng';
$string['seb:manage_seb_linkquitseb'] = 'Thay đổi cài đặt bài kiểm tra SEB: Liên kết thoát';
$string['seb:manage_seb_muteonstartup'] = 'Thay đổi cài đặt bài kiểm tra SEB: Tắt tiếng khi khởi động';
$string['seb:manage_seb_quitpassword'] = 'Thay đổi cài đặt bài kiểm tra SEB: Mật khẩu thoát';
$string['seb:manage_seb_regexallowed'] = 'Thay đổi cài đặt bài kiểm tra SEB: Cho phép biểu thức Regex';
$string['seb:manage_seb_regexblocked'] = 'Thay đổi cài đặt bài kiểm tra SEB: Chặn biểu thức Regex';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Thay đổi cài đặt bài kiểm tra SEB: Yêu cầu Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Thay đổi cài đặt bài kiểm tra SEB: Hiển thị bố cục bàn phím';
$string['seb:manage_seb_showreloadbutton'] = 'Thay đổi cài đặt bài kiểm tra SEB: Hiển thị nút tải lại';
$string['seb:manage_seb_showsebdownloadlink'] = 'Thay đổi cài đặt bài kiểm tra SEB: Hiển thị liên kết tải xuống';
$string['seb:manage_seb_showsebtaskbar'] = 'Thay đổi cài đặt bài kiểm tra SEB: Hiển thị thanh tác vụ';
$string['seb:manage_seb_showtime'] = 'Thay đổi cài đặt bài kiểm tra SEB: Hiển thị thời gian';
$string['seb:manage_seb_showwificontrol'] = 'Thay đổi cài đặt bài kiểm tra SEB: Hiển thị điều khiển Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Thay đổi cài đặt bài kiểm tra SEB: Chọn mẫu SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Thay đổi cài đặt bài kiểm tra SEB: Yêu cầu xác nhận khi thoát';
$string['seb:manage_seb_usesebclientconfig'] = 'Thay đổi cài đặt bài kiểm tra SEB: Sử dụng cấu hình máy khách SEB';
$string['seb:managetemplates'] = 'Quản lý mẫu cấu hình SEB';
$string['sebdownloadbutton'] = 'Tải Safe Exam Browser xuống';
$string['sebkeysvalidationfailed'] = 'Lỗi xác thực khóa SEB';
$string['seblinkbutton'] = 'Khởi chạy Safe Exam Browser';
$string['sebrequired'] = 'Bài kiểm tra này đã được cấu hình để học viên chỉ có thể làm bài bằng Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Tự động cấu hình SEB';
$string['setting:autoreconfigureseb_desc'] = 'Nếu bật, người dùng truy cập bài kiểm tra bằng Safe Exam Browser sẽ tự động bị buộc phải cấu hình lại Safe Exam Browser.';
$string['setting:displayblocksbeforestart'] = 'Hiển thị các khối trước khi bắt đầu bài kiểm tra';
$string['setting:displayblocksbeforestart_desc'] = 'Nếu bật, các khối sẽ được hiển thị trước khi người dùng làm bài kiểm tra.';
$string['setting:displayblockswhenfinished'] = 'Hiển thị khối sau khi hoàn thành bài kiểm tra';
$string['setting:displayblockswhenfinished_desc'] = 'Nếu bật, các khối sẽ được hiển thị sau khi người dùng hoàn thành lần làm bài kiểm tra.';
$string['setting:downloadlink'] = 'Liên kết tải Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL tải ứng dụng Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Yêu cầu mật khẩu bài kiểm tra';
$string['setting:quizpasswordrequired_desc'] = 'Nếu bật, tất cả bài kiểm tra yêu cầu Safe Exam Browser phải được đặt mật khẩu.';
$string['setting:showhttplink'] = 'Hiển thị liên kết http://';
$string['setting:showseblink'] = 'Hiển thị liên kết seb://';
$string['setting:showseblinks'] = 'Hiển thị liên kết cấu hình Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Có hiển thị liên kết để người dùng truy cập tệp cấu hình Safe Exam Browser khi bị ngăn truy cập bài kiểm tra hay không. Lưu ý rằng liên kết seb:// có thể không hoạt động trong mọi trình duyệt.';
$string['setting:supportedversions'] = 'Lưu ý rằng để sử dụng tính năng khóa cấu hình, cần có các phiên bản tối thiểu sau của ứng dụng Safe Exam Browser: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Do đã có ít nhất một lần làm bài kiểm tra, không thể cập nhật cài đặt Safe Exam Browser nữa.';
$string['unknown_reason'] = 'Lý do không xác định';
$string['used'] = 'Đang sử dụng';
