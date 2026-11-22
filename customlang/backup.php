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
 * @subpackage backup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Quá trình sao lưu đã hoàn tất';
$string['asyncbackupcompletebutton'] = 'Tiếp tục';
$string['asyncbackupcompletedetail'] = 'Quá trình sao lưu đã hoàn tất thành công. <br/> Bạn có thể truy cập bản sao lưu tại <a href="{$a}">trang khôi phục.</a>';
$string['asyncbackuperror'] = 'Quá trình sao lưu thất bại';
$string['asyncbackuperrordetail'] = 'Quá trình sao lưu thất bại. Vui lòng liên hệ quản trị viên hệ thống.';
$string['asyncbackuppending'] = 'Quá trình sao lưu đang chờ xử lý';
$string['asyncbackupprocessing'] = 'Đang tiến hành sao lưu';
$string['asyncbadexecution'] = 'Thực thi bộ điều khiển sao lưu không hợp lệ. Giá trị hiện tại là {$a}, nhưng phải là 2.';
$string['asynccheckprogress'] = 'Bạn có thể kiểm tra tiến độ bất cứ lúc nào trên <a href="{$a}">trang khôi phục</a>.';
$string['asyncemailenable'] = 'Bật thông báo';
$string['asyncemailenabledetail'] = 'Nếu bật, người dùng sẽ nhận được thông báo khi quá trình sao lưu hoặc khôi phục không đồng bộ hoàn tất.';
$string['asyncgeneralsettings'] = 'Sao lưu/khôi phục không đồng bộ';
$string['asyncmessagebody'] = 'Nội dung thông báo';
$string['asyncmessagebodydefault'] = '{operation} (ID: {backupid}) đã hoàn tất. Truy cập tại đây: <a href="{link}">{link}</a>.';
$string['asyncmessagebodydetail'] = 'Thông báo sẽ gửi khi quá trình sao lưu hoặc khôi phục không đồng bộ hoàn tất.';
$string['asyncmessagesubject'] = 'Chủ đề';
$string['asyncmessagesubjectdefault'] = 'Moodle {operation} đã hoàn tất thành công';
$string['asyncmessagesubjectdetail'] = 'Chủ đề thông báo';
$string['asyncnowait'] = 'Bạn không cần chờ ở đây vì quá trình sẽ tiếp tục chạy trong nền.';
$string['asyncprocesspending'] = 'Đang chờ xử lý';
$string['asyncrestorecomplete'] = 'Quá trình khôi phục đã hoàn tất';
$string['asyncrestorecompletebutton'] = 'Tiếp tục';
$string['asyncrestorecompletedetail'] = 'Quá trình khôi phục đã hoàn tất thành công. Nhấp vào Tiếp tục để đến <a href="{$a}">khóa học chứa mục đã khôi phục.</a>';
$string['asyncrestoreerror'] = 'Quá trình khôi phục thất bại';
$string['asyncrestoreerrordetail'] = 'Quá trình khôi phục thất bại. Vui lòng liên hệ quản trị viên hệ thống.';
$string['asyncrestoreinprogress'] = 'Các lần khôi phục đang diễn ra';
$string['asyncrestoreinprogress_help'] = 'Các lần khôi phục khóa học không đồng bộ đang diễn ra được hiển thị tại đây.';
$string['asyncrestorepending'] = 'Quá trình khôi phục đang chờ xử lý';
$string['asyncrestoreprocessing'] = 'Đang tiến hành khôi phục';
$string['asyncreturn'] = 'Quay lại khóa học';
$string['autoactivedescription'] = 'Bản sao lưu tự động có thể chạy tự động hoặc thủ công bằng tập lệnh Giao diện dòng lệnh (CLI).';
$string['autoactivedisabled'] = 'Đã tắt';
$string['autoactiveenabled'] = 'Đã bật';
$string['autoactivemanual'] = 'Thủ công';
$string['automatedbackupschedule'] = 'Lịch trình';
$string['automatedbackupschedulehelp'] = 'Chọn những ngày trong tuần để thực hiện sao lưu tự động.';
$string['automatedbackupsinactive'] = 'Quản trị viên trang web chưa bật tính năng sao lưu tự động';
$string['automatedbackupstatus'] = 'Trạng thái sao lưu tự động';
$string['automateddeletedays'] = 'Xóa các bản sao lưu cũ hơn';
$string['automatedmaxkept'] = 'Số lượng bản sao lưu tối đa được giữ lại';
$string['automatedmaxkepthelp'] = 'Chỉ định số lượng bản sao lưu tự động gần đây tối đa được giữ lại cho mỗi khóa học. Các bản sao lưu cũ hơn sẽ tự động bị xóa.';
$string['automatedminkept'] = 'Số lượng bản sao lưu tối thiểu được giữ lại';
$string['automatedminkepthelp'] = 'Nếu xóa các bản sao lưu cũ hơn số ngày được chỉ định, một khóa học không hoạt động có thể không còn bản sao lưu nào. Để ngăn việc này, hãy chỉ định số lượng bản sao lưu tối thiểu cần giữ lại.';
$string['automatedsettings'] = 'Cài đặt sao lưu tự động';
$string['automatedsetup'] = 'Thiết lập sao lưu tự động';
$string['automatedstorage'] = 'Vị trí lưu trữ bản sao lưu tự động';
$string['automatedstoragehelp'] = 'Chọn vị trí lưu trữ bản sao lưu khi chúng được tạo tự động.';
$string['backupactivity'] = 'Sao lưu hoạt động: {$a}';
$string['backupautoactivitiesdescription'] = 'Đặt mặc định cho việc đưa các hoạt động vào bản sao lưu. Để thùng rác hoạt động, phải bật cài đặt này.';
$string['backupcoursedetails'] = 'Chi tiết khóa học';
$string['backupcoursesection'] = 'Mục: {$a}';
$string['backupcoursesections'] = 'Các mục của khóa học';
$string['backupdate'] = 'Ngày tạo';
$string['backupdetails'] = 'Chi tiết bản sao lưu';
$string['backupdetailsnonstandardinfo'] = 'Tệp đã chọn không phải là tệp sao lưu Moodle tiêu chuẩn. Quá trình khôi phục sẽ cố chuyển đổi tệp sao lưu sang định dạng tiêu chuẩn rồi khôi phục.';
$string['backupfile'] = 'Tệp sao lưu';
$string['backupformat'] = 'Định dạng';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Định dạng không xác định';
$string['backuplog'] = 'Thông tin kỹ thuật và cảnh báo';
$string['backupmode'] = 'Chế độ';
$string['backupmode10'] = 'Chung';
$string['backupmode20'] = 'Nhập';
$string['backupmode30'] = 'Hub';
$string['backupmode40'] = 'Cùng trang web';
$string['backupmode50'] = 'Tự động';
$string['backupmode60'] = 'Đã chuyển đổi';
$string['backupmode70'] = 'Không đồng bộ';
$string['backupsection'] = 'Sao lưu mục khóa học: {$a}';
$string['backupsettings'] = 'Cài đặt sao lưu';
$string['backupsitedetails'] = 'Chi tiết trang web';
$string['backupstage16action'] = 'Tiếp tục';
$string['backupstage1action'] = 'Tiếp theo';
$string['backupstage2action'] = 'Tiếp theo';
$string['backupstage4action'] = 'Thực hiện sao lưu';
$string['backupstage8action'] = 'Tiếp tục';
$string['backupthenrestore'] = 'Đã hoàn tất sao lưu. Bắt đầu khôi phục.';
$string['backuptype'] = 'Loại';
$string['backuptypeactivity'] = 'Hoạt động';
$string['backuptypecourse'] = 'Khóa học';
$string['backuptypesection'] = 'Mục';
$string['backupversion'] = 'Phiên bản sao lưu';
$string['cannotfindassignablerole'] = 'Không thể ánh xạ vai trò {$a} trong tệp sao lưu tới bất kỳ vai trò nào mà bạn được phép chỉ định.';
$string['choosefilefromactivitybackup'] = 'Khu vực sao lưu hoạt động';
$string['choosefilefromactivitybackup_help'] = 'Các tệp sao lưu của hoạt động này.';
$string['choosefilefromautomatedbackup'] = 'Bản sao lưu tự động';
$string['choosefilefromautomatedbackup_help'] = 'Các tệp sao lưu được tạo tự động.';
$string['choosefilefromcoursebackup'] = 'Khu vực sao lưu khóa học';
$string['choosefilefromcoursebackup_help'] = 'Các tệp sao lưu của khóa học này.';
$string['choosefilefromuserbackup'] = 'Khu vực sao lưu riêng tư của người dùng';
$string['choosefilefromuserbackup_help'] = 'Các tệp sao lưu riêng tư của tất cả khóa học, kèm thông tin người dùng đã được ẩn danh.';
$string['config_keep_groups_and_groupings'] = 'Theo mặc định, giữ lại các nhóm và nhóm phân nhóm hiện tại.';
$string['config_keep_roles_and_enrolments'] = 'Theo mặc định, giữ lại các vai trò và phương thức ghi danh hiện tại.';
$string['config_overwrite_conf'] = 'Cho phép người dùng ghi đè cấu hình khóa học hiện tại';
$string['config_overwrite_course_fullname'] = 'Theo mặc định, ghi đè tên đầy đủ của khóa học bằng tên trong tệp sao lưu. Cần chọn "Ghi đè cấu hình khóa học" và người dùng hiện tại phải có quyền năng lực thay đổi tên đầy đủ của khóa học (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Theo mặc định, ghi đè tên viết tắt của khóa học bằng tên trong tệp sao lưu. Cần chọn "Ghi đè cấu hình khóa học" và người dùng hiện tại phải có quyền năng lực thay đổi tên viết tắt của khóa học (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Theo mặc định, ghi đè ngày bắt đầu khóa học bằng ngày trong tệp sao lưu. Cần chọn "Ghi đè cấu hình khóa học" và người dùng hiện tại phải có quyền năng lực điều chỉnh ngày của khóa học khi khôi phục (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Đặt mặc định cho việc đưa các hoạt động vào bản sao lưu.';
$string['configgeneralanonymize'] = 'Nếu bật, mọi thông tin liên quan đến người dùng sẽ được ẩn danh theo mặc định.';
$string['configgeneralbadges'] = 'Đặt mặc định cho việc đưa huy hiệu vào bản sao lưu.';
$string['configgeneralblocks'] = 'Đặt mặc định cho việc đưa các khối vào bản sao lưu.';
$string['configgeneralcalendarevents'] = 'Đặt mặc định cho việc đưa các sự kiện lịch vào bản sao lưu.';
$string['configgeneralcomments'] = 'Đặt mặc định cho việc đưa nhận xét vào bản sao lưu.';
$string['configgeneralcompetencies'] = 'Đặt mặc định cho việc đưa các năng lực vào bản sao lưu.';
$string['configgeneralcontentbankcontent'] = 'Đặt mặc định cho việc đưa nội dung ngân hàng nội dung vào bản sao lưu.';
$string['configgeneralcustomfield'] = 'Đặt mặc định cho việc đưa các trường tùy chỉnh vào bản sao lưu.';
$string['configgeneralfiles'] = 'Đặt mặc định cho việc đưa tệp vào bản sao lưu. Lưu ý: Tắt cài đặt này sẽ tạo bản sao lưu chỉ chứa tham chiếu đến các tệp. Điều này không gây vấn đề nếu bản sao lưu được khôi phục trên cùng trang web và các tệp chưa bị xóa theo cài đặt \'Dọn dẹp tệp trong vùng chứa rác\' (filescleanupperiod).';
$string['configgeneralfilters'] = 'Đặt mặc định cho việc đưa các bộ lọc vào bản sao lưu.';
$string['configgeneralgroups'] = 'Đặt mặc định cho việc đưa các nhóm và nhóm phân nhóm vào bản sao lưu.';
$string['configgeneralhistories'] = 'Đặt mặc định cho việc đưa lịch sử người dùng vào bản sao lưu.';
$string['configgenerallogs'] = 'Nếu bật, nhật ký sẽ được đưa vào bản sao lưu theo mặc định.';
$string['configgeneralpermissions'] = 'Nếu bật, quyền của vai trò sẽ được nhập. Việc này có thể ghi đè các quyền hiện có của người dùng đã ghi danh.';
$string['configgeneralquestionbank'] = 'Nếu bật, ngân hàng câu hỏi sẽ được bao gồm trong các bản sao lưu theo mặc định. LƯU Ý: Tắt thiết lập này sẽ vô hiệu hóa việc sao lưu các hoạt động sử dụng ngân hàng câu hỏi, chẳng hạn như bài kiểm tra.';
$string['configgeneralroleassignments'] = 'Nếu bật, các phân công vai trò cũng sẽ được sao lưu theo mặc định.';
$string['configgeneralusers'] = 'Đặt mặc định cho việc đưa người dùng vào bản sao lưu.';
$string['configgeneraluserscompletion'] = 'Nếu bật, thông tin hoàn thành của người dùng sẽ được đưa vào bản sao lưu theo mặc định.';
$string['configgeneralxapistate'] = 'Đặt mặc định cho việc đưa trạng thái của người dùng trong nội dung, chẳng hạn như hoạt động H5P, vào bản sao lưu.';
$string['configlegacyfiles'] = 'Đặt mặc định cho việc đưa các tệp khóa học cũ vào bản sao lưu. Tệp khóa học cũ là các tệp từ những phiên bản Moodle trước 2.0.';
$string['configloglifetime'] = 'Chỉ định khoảng thời gian lưu thông tin nhật ký sao lưu. Nhật ký cũ hơn khoảng thời gian này sẽ tự động bị xóa. Nên đặt giá trị này thấp vì thông tin nhật ký sao lưu có thể rất lớn.';
$string['configrestoreactivities'] = 'Đặt mặc định cho việc khôi phục các hoạt động.';
$string['configrestorebadges'] = 'Đặt mặc định cho việc khôi phục huy hiệu.';
$string['configrestoreblocks'] = 'Đặt mặc định cho việc khôi phục các khối.';
$string['configrestorecalendarevents'] = 'Đặt mặc định cho việc khôi phục các sự kiện lịch.';
$string['configrestorecomments'] = 'Đặt mặc định cho việc khôi phục nhận xét.';
$string['configrestorecompetencies'] = 'Đặt mặc định cho việc khôi phục các năng lực.';
$string['configrestorecontentbankcontent'] = 'Đặt mặc định cho việc khôi phục nội dung ngân hàng nội dung.';
$string['configrestorecustomfield'] = 'Đặt mặc định cho việc khôi phục các trường tùy chỉnh.';
$string['configrestoreenrolments'] = 'Đặt mặc định cho việc khôi phục các phương thức ghi danh.';
$string['configrestorefilters'] = 'Đặt mặc định cho việc khôi phục các bộ lọc.';
$string['configrestoregroups'] = 'Đặt mặc định cho việc khôi phục các nhóm và nhóm phân nhóm nếu chúng được đưa vào bản sao lưu.';
$string['configrestorehistories'] = 'Đặt mặc định cho việc khôi phục lịch sử người dùng nếu lịch sử đó được đưa vào bản sao lưu.';
$string['configrestorelogs'] = 'Nếu bật, nhật ký sẽ được khôi phục theo mặc định nếu chúng được đưa vào bản sao lưu.';
$string['configrestorepermissions'] = 'Nếu bật, quyền của vai trò sẽ được khôi phục. Việc này có thể ghi đè các quyền hiện có của người dùng đã ghi danh.';
$string['configrestoreroleassignments'] = 'Nếu bật, các phân công vai trò sẽ được khôi phục theo mặc định nếu chúng được đưa vào bản sao lưu.';
$string['configrestoreusers'] = 'Đặt mặc định cho việc khôi phục người dùng nếu họ được đưa vào bản sao lưu.';
$string['configrestoreuserscompletion'] = 'Nếu bật, thông tin hoàn thành của người dùng sẽ được khôi phục theo mặc định nếu được đưa vào bản sao lưu.';
$string['configrestorexapistate'] = 'Đặt mặc định cho việc khôi phục trạng thái của người dùng trong nội dung, chẳng hạn như hoạt động H5P.';
$string['confirmcancel'] = 'Hủy sao lưu';
$string['confirmcancelimport'] = 'Hủy nhập';
$string['confirmcancelno'] = 'Không hủy';
$string['confirmcancelquestion'] = 'Bạn có chắc chắn muốn hủy không?
Mọi thông tin bạn đã nhập sẽ bị mất.';
$string['confirmcancelrestore'] = 'Hủy khôi phục';
$string['confirmcancelyes'] = 'Hủy sao lưu';
$string['confirmnewcoursecontinue'] = 'Cảnh báo khóa học mới';
$string['confirmnewcoursecontinuequestion'] = 'Quá trình khôi phục sẽ tạo một khóa học tạm thời (ẩn). Để hủy khôi phục, hãy nhấp vào Hủy. Không đóng trình duyệt trong khi đang khôi phục.';
$string['copiesinprogress'] = 'Khóa học này có các bản sao đang được tạo. <a href="{$a}">Xem các bản sao đang xử lý.</a>';
$string['copycoursedesc'] = 'Tạo bản sao của khóa học này trong bất kỳ danh mục khóa học nào.';
$string['copycoursetitle'] = 'Sao chép khóa học: {$a}';
$string['copydest'] = 'Đích';
$string['copyfieldnotfound'] = 'Không tìm thấy dữ liệu bắt buộc cho (các) trường: {$a}';
$string['copyformfail'] = 'Gửi biểu mẫu sao chép khóa học bằng AJAX không thành công.';
$string['copyingcourse'] = 'Đang sao chép khóa học';
$string['copyingcourseshortname'] = 'đang sao chép';
$string['copyop'] = 'Thao tác hiện tại';
$string['copyprogressheading'] = 'Các bản sao khóa học đang xử lý';
$string['copyprogressheading_help'] = 'Bảng này hiển thị trạng thái của tất cả các bản sao khóa học chưa hoàn tất.';
$string['copyprogresstitle'] = 'Tiến trình sao chép khóa học';
$string['copyreturn'] = 'Sao chép và quay lại';
$string['copysource'] = 'Nguồn';
$string['copyview'] = 'Sao chép và xem';
$string['coursecategory'] = 'Danh mục sẽ khôi phục khóa học vào';
$string['courseid'] = 'ID gốc';
$string['coursesettings'] = 'Cài đặt khóa học';
$string['coursetitle'] = 'Tiêu đề';
$string['currentstage1'] = 'Cài đặt ban đầu';
$string['currentstage16'] = 'Hoàn tất';
$string['currentstage2'] = 'Cài đặt cấu trúc';
$string['currentstage4'] = 'Xác nhận và xem lại';
$string['currentstage8'] = 'Thực hiện sao lưu';
$string['defaultbackupfilenameactivity'] = 'Tên tệp mặc định cho bản sao lưu hoạt động';
$string['defaultbackupfilenameactivity_desc'] = 'Ngữ cảnh bổ sung cho bản sao lưu hoạt động:
<ul>
<li><code>activity.name</code> - chuỗi - tên hoạt động</li>
<li><code>activity.modname</code> - số nguyên - tên mô-đun</li>
</ul>';
$string['defaultbackupfilenamecourse'] = 'Tên tệp mặc định cho bản sao lưu khóa học';
$string['defaultbackupfilenamecourse_desc'] = 'Ngữ cảnh bổ sung cho bản sao lưu khóa học:
<ul>
<li><code>course.shortname</code> - chuỗi - tên viết tắt của khóa học</li>
<li><code>course.fullname</code> - chuỗi - tên đầy đủ của khóa học</li>
<li><code>course.startdate</code> - chuỗi - ngày bắt đầu khóa học theo định dạng được chỉ định trong chuỗi ngôn ngữ <code>backupnameformat</code></li>
<li><code>course.endddate</code> - chuỗi - ngày kết thúc khóa học theo định dạng được chỉ định trong chuỗi ngôn ngữ <code>backupnameformat</code></li>
</ul>';
$string['defaultbackupfilenamesection'] = 'Tên tệp mặc định cho bản sao lưu mục';
$string['defaultbackupfilenamesection_desc'] = 'Ngữ cảnh bổ sung cho bản sao lưu mục:
<ul>
<li><code>section.name</code> - chuỗi - tên mục</li>
<li><code>section.section</code> - số nguyên - số thứ tự mục</li>
</ul>';
$string['defaultbackupfilenamesettings'] = 'Tên tệp sao lưu mặc định';
$string['defaultbackupfilenamesettings_help'] = 'Các mẫu Mustache được xử lý để tạo tên tệp mặc định cho bản sao lưu.
Mọi mẫu sao lưu đều có sẵn ngữ cảnh sau:
<ul>
<li><code>format</code> - chuỗi - định dạng sao lưu, thường là moodle2</li>
<li><code>type</code> - chuỗi - một trong các giá trị course, section hoặc activity</li>
<li><code>id</code> - số nguyên - ID cơ sở dữ liệu của mục</li>
<li><code>useidonly</code> - bool - liệu bản sao lưu có được tạo khi chưa bật cấu hình <code>backup_shortname</code> hay không</li>
<li><code>date</code> - chuỗi - ngày theo định dạng được chỉ định trong chuỗi ngôn ngữ <code>backupnameformat</code></li>
<li><code>users</code> - bool - liệu dữ liệu người dùng có được đưa vào hay không</li>
<li><code>anonymised</code> - bool - liệu dữ liệu người dùng có được ẩn danh hay không</li>
<li><code>files</code> - bool - liệu các tệp có được đưa vào hay không</li>
</ul>
Ngoài từng giá trị giữ chỗ được chỉ định, bạn cũng có thể dùng trình trợ giúp {{#str}} để thêm chuỗi ngôn ngữ. Phần mở rộng .mbz luôn được thêm vào. Tên tệp được cắt ngắn còn 251 ký tự.';
$string['enableasyncbackup'] = 'Bật sao lưu không đồng bộ';
$string['enableasyncbackup_help'] = 'Nếu bật, các thao tác sao lưu và khôi phục sẽ được thực hiện không đồng bộ. Điều này giúp cải thiện trải nghiệm người dùng, cho phép người dùng thực hiện các thao tác khác trong khi đang sao lưu hoặc khôi phục. Cài đặt này không ảnh hưởng đến việc nhập và xuất.';
$string['enterasearch'] = 'Nhập từ khóa tìm kiếm';
$string['error_block_for_module_not_found'] = 'Tìm thấy phiên bản khối mồ côi (id: {$a->bid}) của mô-đun khóa học (id: {$a->mid}). Khối này sẽ không được sao lưu';
$string['error_course_module_not_found'] = 'Tìm thấy mô-đun khóa học mồ côi (id: {$a}). Mô-đun này sẽ không được sao lưu.';
$string['error_delegate_section_not_found'] = 'Thiếu mục được ủy quyền cho mô-đun khóa học (ID {$a}). Mục này sẽ không được sao lưu.';
$string['errorcopyingbackupfile'] = 'Không thể sao chép tệp sao lưu vào thư mục tạm trước khi khôi phục.';
$string['errorfilenamemustbezip'] = 'Tên tệp bạn nhập phải là tệp ZIP và có phần mở rộng .mbz';
$string['errorfilenamerequired'] = 'Bạn phải nhập tên tệp hợp lệ cho bản sao lưu này';
$string['errorfilenametoolong'] = 'Tên tệp phải có độ dài dưới 255 ký tự.';
$string['errorinvalidformat'] = 'Định dạng sao lưu không xác định';
$string['errorinvalidformatinfo'] = 'Tệp đã chọn không phải là tệp sao lưu Moodle hợp lệ và không thể khôi phục.';
$string['errorminbackup20version'] = 'Tệp sao lưu này được tạo bằng phiên bản phát triển của Moodle backup ({$a->backup}). Phiên bản tối thiểu được yêu cầu là {$a->min}. Không thể khôi phục.';
$string['errorrestorefrontpagebackup'] = 'Bạn chỉ có thể khôi phục bản sao lưu trang chủ tại trang chủ';
$string['executionsuccess'] = 'Đã tạo tệp sao lưu thành công.';
$string['extractingbackupfileto'] = 'Đang giải nén tệp sao lưu vào: {$a}';
$string['failed'] = 'Sao lưu không thành công';
$string['filealiasesrestorefailures'] = 'Lỗi khôi phục bí danh tệp';
$string['filealiasesrestorefailures_help'] = 'Bí danh là liên kết tượng trưng đến các tệp khác, bao gồm cả những tệp được lưu trong kho lưu trữ bên ngoài. Trong một số trường hợp, Moodle không thể khôi phục chúng — chẳng hạn khi khôi phục bản sao lưu trên trang web khác hoặc khi tệp được tham chiếu không tồn tại.

Bạn có thể tìm thêm chi tiết và nguyên nhân thực tế của lỗi trong tệp nhật ký khôi phục.';
$string['filealiasesrestorefailures_link'] = 'restore/filealiases';
$string['filealiasesrestorefailuresinfo'] = 'Không thể khôi phục một số bí danh có trong tệp sao lưu. Danh sách sau đây cho biết vị trí dự kiến của chúng và tệp nguồn mà chúng tham chiếu đến trên trang web ban đầu.';
$string['filename'] = 'Tên tệp';
$string['filereferencesincluded'] = 'Các tham chiếu tệp đến nội dung bên ngoài được đưa vào tệp sao lưu. Chúng sẽ không hoạt động nếu bản sao lưu được khôi phục trên trang web khác.';
$string['filereferencesnotsamesite'] = 'Tệp sao lưu này thuộc một trang web khác nên không thể khôi phục các tham chiếu tệp.';
$string['filereferencessamesite'] = 'Tệp sao lưu này thuộc trang web hiện tại nên có thể khôi phục các tham chiếu tệp.';
$string['generalactivities'] = 'Đưa các hoạt động và tài nguyên vào';
$string['generalanonymize'] = 'Ẩn danh thông tin';
$string['generalbackdefaults'] = 'Mặc định sao lưu chung';
$string['generalbadges'] = 'Đưa huy hiệu vào';
$string['generalblocks'] = 'Đưa các khối vào';
$string['generalcalendarevents'] = 'Đưa các sự kiện lịch vào';
$string['generalcomments'] = 'Đưa nhận xét vào';
$string['generalcompetencies'] = 'Đưa các năng lực vào';
$string['generalcontentbankcontent'] = 'Đưa nội dung ngân hàng nội dung vào';
$string['generalcustomfield'] = 'Đưa các trường tùy chỉnh vào';
$string['generalenrolments'] = 'Đưa các phương thức ghi danh vào';
$string['generalfiles'] = 'Đưa tệp vào';
$string['generalfilters'] = 'Đưa các bộ lọc vào';
$string['generalgradehistories'] = 'Đưa lịch sử vào';
$string['generalgroups'] = 'Đưa các nhóm và nhóm phân nhóm vào';
$string['generalhistories'] = 'Đưa lịch sử vào';
$string['generallegacyfiles'] = 'Đưa các tệp khóa học cũ vào';
$string['generallogs'] = 'Đưa nhật ký vào';
$string['generalpermissions'] = 'Đưa các ghi đè quyền vào';
$string['generalquestionbank'] = 'Bao gồm ngân hàng câu hỏi';
$string['generalrestoredefaults'] = 'Mặc định khôi phục chung';
$string['generalrestoresettings'] = 'Cài đặt khôi phục chung';
$string['generalroleassignments'] = 'Đưa các phân công vai trò vào';
$string['generalsettings'] = 'Cài đặt sao lưu chung';
$string['generalusers'] = 'Đưa người dùng vào';
$string['generaluserscompletion'] = 'Đưa thông tin hoàn thành của người dùng vào';
$string['generalxapistate'] = 'Bao gồm trạng thái của người dùng trong nội dung như các hoạt động H5P';
$string['hidetypes'] = 'Ẩn các tùy chọn loại';
$string['importbackupstage16action'] = 'Tiếp tục';
$string['importbackupstage1action'] = 'Tiếp theo';
$string['importbackupstage2action'] = 'Tiếp theo';
$string['importbackupstage4action'] = 'Thực hiện nhập';
$string['importbackupstage8action'] = 'Tiếp tục';
$string['importcurrentstage0'] = 'Chọn khóa học';
$string['importcurrentstage1'] = 'Thiết lập ban đầu';
$string['importcurrentstage16'] = 'Hoàn tất';
$string['importcurrentstage2'] = 'Thiết lập lược đồ';
$string['importcurrentstage4'] = 'Xác nhận và xem lại';
$string['importcurrentstage8'] = 'Thực hiện nhập';
$string['importfile'] = 'Tải lên tệp sao lưu';
$string['importfromccmidtocourse'] = 'Nhập từ cmid:{$a->srccmid} vào khóa học:{$a->dstcourseid}';
$string['importfromcoursetocourse'] = 'Nhập từ khóa học:{$a->srccourseid} vào khóa học:{$a->dstcourseid}';
$string['importgeneralduplicateadminallowed'] = 'Cho phép quản trị viên xử lý xung đột';
$string['importgeneralduplicateadminallowed_desc'] = 'Nếu trang web có tài khoản với tên đăng nhập \'admin\', việc khôi phục tệp sao lưu có chứa tài khoản tên đăng nhập \'admin\' có thể gây ra xung đột. Nếu bật thiết lập này, xung đột sẽ được giải quyết bằng cách đổi tên đăng nhập trong tệp sao lưu thành \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Số khóa học tối đa được liệt kê để nhập';
$string['importgeneralmaxresults_desc'] = 'Thiết lập này kiểm soát số khóa học được liệt kê trong bước đầu tiên của quy trình nhập';
$string['importgeneralsettings'] = 'Thiết lập mặc định chung khi nhập';
$string['importrootsettings'] = 'Thiết lập nhập';
$string['importsettings'] = 'Thiết lập nhập chung';
$string['importsuccess'] = 'Đã hoàn tất nhập. Nhấp vào tiếp tục để quay lại khóa học.';
$string['includeactivities'] = 'Bao gồm:';
$string['includeditems'] = 'Các mục được bao gồm:';
$string['includefilereferences'] = 'Tham chiếu tệp đến nội dung bên ngoài';
$string['includesection'] = 'Mục {$a}';
$string['includeuserinfo'] = 'Dữ liệu người dùng';
$string['includeuserinfo_instance'] = 'Bao gồm dữ liệu người dùng {$a}';
$string['inprogress'] = 'Đang sao lưu';
$string['jumptofinalstep'] = 'Chuyển đến bước cuối cùng';
$string['keep'] = 'Giữ lại';
$string['keptroles'] = 'Bao gồm ghi danh theo vai trò';
$string['keptroles_help'] = 'Người dùng có các vai trò được chọn sẽ được ghi danh vào khóa học mới. Không có dữ liệu người dùng nào được sao chép trừ khi bật \'Bao gồm dữ liệu người dùng\'.';
$string['locked'] = 'Đã khóa';
$string['lockedbyconfig'] = 'Thiết lập này đã bị khóa bởi các thiết lập sao lưu mặc định';
$string['lockedbyhierarchy'] = 'Đã khóa do phụ thuộc';
$string['lockedbypermission'] = 'Bạn không có đủ quyền để thay đổi thiết lập này';
$string['loglifetime'] = 'Giữ nhật ký trong';
$string['managefiles'] = 'Quản lý tệp sao lưu';
$string['managefiles_activity'] = 'Quản lý bản sao lưu hoạt động';
$string['managefiles_automated'] = 'Quản lý bản sao lưu tự động';
$string['managefiles_backup'] = 'Quản lý bản sao lưu riêng tư';
$string['managefiles_course'] = 'Quản lý bản sao lưu khóa học';
$string['mergerestoredefaults'] = 'Khôi phục theo mặc định khi gộp vào khóa học khác';
$string['missingfilesinpool'] = 'Không thể lưu một số tệp trong quá trình sao lưu, vì vậy sẽ không thể khôi phục các tệp đó.';
$string['module'] = 'Mô-đun';
$string['moodleversion'] = 'Phiên bản Moodle';
$string['morecoursesearchresults'] = 'Tìm thấy hơn {$a} khóa học, đang hiển thị {$a} kết quả đầu tiên';
$string['moreresults'] = 'Có quá nhiều kết quả; hãy nhập cụm từ tìm kiếm cụ thể hơn.';
$string['nomatchingcourses'] = 'Không có khóa học nào để hiển thị';
$string['norestoreoptions'] = 'Không có danh mục hoặc khóa học hiện có nào mà bạn có thể khôi phục vào.';
$string['originalwwwroot'] = 'URL của bản sao lưu';
$string['overwrite'] = 'Ghi đè';
$string['pendingasyncdeletedetail'] = 'Khóa học này đang có một bản sao lưu không đồng bộ chờ xử lý. <br/> Không thể xóa khóa học cho đến khi quá trình sao lưu này hoàn tất.';
$string['pendingasyncdetail'] = 'Mỗi lần, bản sao lưu không đồng bộ chỉ cho phép người dùng có một bản sao lưu đang chờ xử lý cho mỗi tài nguyên. <br/> Không thể xếp hàng nhiều bản sao lưu không đồng bộ của cùng một tài nguyên vì điều này có thể tạo ra nhiều bản sao lưu có cùng nội dung.';
$string['pendingasyncedit'] = 'Có một yêu cầu sao lưu hoặc sao chép đang chờ xử lý cho khóa học này. Vui lòng không chỉnh sửa khóa học cho đến khi quá trình hoàn tất.';
$string['pendingasyncerror'] = 'Đang chờ sao lưu tài nguyên này';
$string['preparingdata'] = 'Đang chuẩn bị dữ liệu';
$string['preparingui'] = 'Đang chuẩn bị hiển thị trang';
$string['previousstage'] = 'Trước';
$string['privacy:metadata:backup_controllers'] = 'Danh sách các thao tác sao lưu';
$string['privacy:metadata:backup_controllers:itemid'] = 'ID của khóa học';
$string['privacy:metadata:backup_controllers:operation'] = 'Thao tác đã thực hiện, ví dụ: khôi phục.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Thời điểm tạo thao tác';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Thời điểm chỉnh sửa thao tác';
$string['privacy:metadata:backup_controllers:type'] = 'Loại mục đang được thao tác, ví dụ: hoạt động.';
$string['privacy:metadata:backup:detailsofarchive'] = 'Kho lưu trữ này có thể chứa nhiều loại dữ liệu người dùng liên quan đến khóa học, chẳng hạn như điểm, ghi danh của người dùng và dữ liệu hoạt động.';
$string['privacy:metadata:backup:externalpurpose'] = 'Mục đích của kho lưu trữ này là lưu trữ thông tin liên quan đến khóa học để có thể khôi phục trong tương lai.';
$string['qcategory2coursefallback'] = 'Danh mục câu hỏi "{$a->name}", ban đầu nằm trong ngữ cảnh system|course|course_category trong tệp sao lưu, sẽ được tạo trong ngữ cảnh mô-đun ngân hàng câu hỏi khi khôi phục';
$string['qcategorycannotberestored'] = 'Không thể tạo danh mục câu hỏi "{$a->name}" khi khôi phục';
$string['question2coursefallback'] = 'Danh mục câu hỏi "{$a->name}", ban đầu nằm trong ngữ cảnh system|course|course_category trong tệp sao lưu, sẽ được tạo trong ngữ cảnh mô-đun ngân hàng câu hỏi khi khôi phục';
$string['questioncannotberestored'] = 'Không thể tạo câu hỏi "{$a->name}" khi khôi phục';
$string['recyclebin_desc'] = 'Lưu ý rằng các thiết lập này cũng sẽ được áp dụng cho thùng rác.';
$string['replacerestoredefaults'] = 'Khôi phục theo mặc định khi khôi phục vào khóa học khác và xóa nội dung';
$string['restoreactivity'] = 'Khôi phục hoạt động';
$string['restorecourse'] = 'Khôi phục khóa học';
$string['restorecoursesettings'] = 'Thiết lập khóa học';
$string['restoredcourseid'] = 'ID khóa học đã khôi phục: {$a}';
$string['restoreexecutionsuccess'] = 'Đã khôi phục khóa học thành công.';
$string['restorefileweremissing'] = 'Không thể khôi phục một số tệp vì chúng bị thiếu trong bản sao lưu.';
$string['restorenewcoursefullname'] = 'Tên khóa học mới';
$string['restorenewcourseshortname'] = 'Tên viết tắt khóa học mới';
$string['restorenewcoursestartdate'] = 'Ngày bắt đầu mới';
$string['restorenofilesbackuparea'] = 'Chưa có tệp sao lưu nào.';
$string['restorenofilesbackuparea_activity'] = 'Chưa có tệp sao lưu nào cho hoạt động này.';
$string['restorenofilesbackuparea_automated'] = 'Chưa có tệp sao lưu tự động nào.';
$string['restorenofilesbackuparea_backup'] = 'Bạn chưa có tệp sao lưu riêng tư nào.';
$string['restorenofilesbackuparea_course'] = 'Chưa có tệp sao lưu nào cho khóa học này.';
$string['restorerolemappings'] = 'Khôi phục ánh xạ vai trò';
$string['restorerootsettings'] = 'Thiết lập khôi phục';
$string['restoresection'] = 'Khôi phục mục';
$string['restorestage1'] = 'Xác nhận';
$string['restorestage16'] = 'Xem lại';
$string['restorestage16action'] = 'Thực hiện khôi phục';
$string['restorestage1action'] = 'Tiếp theo';
$string['restorestage2'] = 'Đích đến';
$string['restorestage2action'] = 'Tiếp theo';
$string['restorestage32'] = 'Xử lý';
$string['restorestage32action'] = 'Tiếp tục';
$string['restorestage4'] = 'Thiết lập';
$string['restorestage4action'] = 'Tiếp theo';
$string['restorestage64'] = 'Hoàn tất';
$string['restorestage64action'] = 'Tiếp tục';
$string['restorestage8'] = 'Lược đồ';
$string['restorestage8action'] = 'Tiếp theo';
$string['restoretarget'] = 'Đích khôi phục';
$string['restoretocourse'] = 'Khôi phục vào khóa học:';
$string['restoretocurrentcourse'] = 'Khôi phục vào khóa học này';
$string['restoretocurrentcourseadding'] = 'Gộp khóa học trong bản sao lưu vào khóa học này';
$string['restoretocurrentcoursedeleting'] = 'Xóa nội dung khóa học này rồi khôi phục';
$string['restoretoexistingcourse'] = 'Khôi phục vào khóa học hiện có';
$string['restoretoexistingcourseadding'] = 'Gộp khóa học trong bản sao lưu vào khóa học hiện có';
$string['restoretoexistingcoursedeleting'] = 'Xóa nội dung khóa học hiện có rồi khôi phục';
$string['restoretonewcourse'] = 'Khôi phục thành khóa học mới';
$string['restoringcourse'] = 'Đang khôi phục khóa học';
$string['restoringcourseshortname'] = 'đang khôi phục';
$string['rootenrolmanual'] = 'Khôi phục dưới dạng ghi danh thủ công';
$string['rootsettingactivities'] = 'Bao gồm hoạt động và tài nguyên';
$string['rootsettinganonymize'] = 'Ẩn danh thông tin người dùng';
$string['rootsettingbadges'] = 'Bao gồm huy hiệu';
$string['rootsettingblocks'] = 'Bao gồm các khối';
$string['rootsettingcalendarevents'] = 'Bao gồm sự kiện lịch';
$string['rootsettingcomments'] = 'Bao gồm bình luận';
$string['rootsettingcompetencies'] = 'Bao gồm năng lực';
$string['rootsettingcontentbankcontent'] = 'Bao gồm nội dung ngân hàng nội dung';
$string['rootsettingcustomfield'] = 'Bao gồm các trường tùy chỉnh';
$string['rootsettingenrolments'] = 'Bao gồm các phương thức ghi danh';
$string['rootsettingenrolments_always'] = 'Có, luôn luôn';
$string['rootsettingenrolments_never'] = 'Không, khôi phục người dùng dưới dạng ghi danh thủ công';
$string['rootsettingenrolments_withusers'] = 'Có, nhưng chỉ khi bao gồm người dùng';
$string['rootsettingfiles'] = 'Bao gồm tệp';
$string['rootsettingfilters'] = 'Bao gồm bộ lọc';
$string['rootsettinggradehistories'] = 'Bao gồm lịch sử điểm';
$string['rootsettinggroups'] = 'Bao gồm nhóm và phân nhóm';
$string['rootsettingimscc1'] = 'Chuyển đổi sang IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Chuyển đổi sang IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Bao gồm các tệp khóa học cũ';
$string['rootsettinglogs'] = 'Bao gồm nhật ký khóa học';
$string['rootsettingpermissions'] = 'Bao gồm các ghi đè quyền';
$string['rootsettingquestionbank'] = 'Bao gồm ngân hàng câu hỏi';
$string['rootsettingroleassignments'] = 'Bao gồm phân công vai trò cho người dùng';
$string['rootsettings'] = 'Thiết lập sao lưu';
$string['rootsettingusers'] = 'Bao gồm người dùng đã ghi danh';
$string['rootsettinguserscompletion'] = 'Bao gồm chi tiết hoàn thành của người dùng';
$string['rootsettingxapistate'] = 'Bao gồm trạng thái của người dùng trong nội dung như các hoạt động H5P';
$string['samesitenotification'] = 'Bản sao lưu này chỉ chứa tham chiếu đến tệp, không chứa chính các tệp đó. Chỉ có thể khôi phục trên trang web này.';
$string['section_prefix'] = 'Mục {$a}:';
$string['sectionactivities'] = 'Hoạt động';
$string['sectioninc'] = 'Được bao gồm trong bản sao lưu (không có thông tin người dùng)';
$string['sectionincanduser'] = 'Được bao gồm trong bản sao lưu cùng với thông tin người dùng';
$string['selectacategory'] = 'Chọn một danh mục';
$string['selectacourse'] = 'Chọn một khóa học';
$string['setting_course_fullname'] = 'Tên khóa học';
$string['setting_course_shortname'] = 'Tên viết tắt khóa học';
$string['setting_course_startdate'] = 'Ngày bắt đầu khóa học';
$string['setting_keep_groups_and_groupings'] = 'Giữ lại các nhóm và phân nhóm hiện tại';
$string['setting_keep_roles_and_enrolments'] = 'Giữ lại các vai trò và ghi danh hiện tại';
$string['setting_overwrite_conf'] = 'Ghi đè cấu hình khóa học';
$string['setting_overwrite_course_fullname'] = 'Ghi đè tên đầy đủ của khóa học';
$string['setting_overwrite_course_shortname'] = 'Ghi đè tên viết tắt khóa học';
$string['setting_overwrite_course_startdate'] = 'Ghi đè ngày bắt đầu khóa học';
$string['showtypes'] = 'Hiện các tùy chọn loại';
$string['sitecourseformatwarning'] = 'Đây là bản sao lưu trang chủ. Chỉ có thể khôi phục vào trang chủ.';
$string['skiphidden'] = 'Bỏ qua các khóa học bị ẩn';
$string['skiphiddenhelp'] = 'Chọn có bỏ qua các khóa học bị ẩn hay không';
$string['skipmodifdays'] = 'Bỏ qua các khóa học chưa được chỉnh sửa kể từ';
$string['skipmodifdayshelp'] = 'Chọn bỏ qua các khóa học chưa được chỉnh sửa trong một số ngày nhất định';
$string['skipmodifprev'] = 'Bỏ qua các khóa học chưa được chỉnh sửa kể từ lần sao lưu trước';
$string['skipmodifprevhelp'] = 'Chọn có bỏ qua các khóa học chưa được chỉnh sửa kể từ lần sao lưu tự động trước hay không. Yêu cầu bật tính năng ghi nhật ký.';
$string['status'] = 'Trạng thái';
$string['storagecourseandexternal'] = 'Khu vực tệp sao lưu khóa học và thư mục đã chỉ định';
$string['storagecourseonly'] = 'Khu vực tệp sao lưu khóa học';
$string['storageexternalonly'] = 'Thư mục đã chỉ định cho các bản sao lưu tự động';
$string['subsectioncontent'] = 'Nội dung mục con';
$string['successful'] = 'Sao lưu thành công';
$string['successfulcopy'] = 'Sao chép thành công';
$string['successfulrestore'] = 'Khôi phục thành công';
$string['timetaken'] = 'Thời gian thực hiện';
$string['title'] = 'Tiêu đề';
$string['totalcategorysearchresults'] = 'Tổng số danh mục: {$a}';
$string['totalcoursesearchresults'] = 'Tổng số khóa học: {$a}';
$string['undefinedrolemapping'] = 'Chưa xác định ánh xạ vai trò cho loại vai trò \'{$a}\'.';
$string['unnamedsection'] = 'Mục chưa có tên';
$string['userdata'] = 'Bao gồm dữ liệu người dùng';
$string['userdata_help'] = 'Nếu bật, dữ liệu như bài đăng diễn đàn, bài nộp bài tập, v.v. sẽ được sao chép vào khóa học mới cho mọi người dùng có vai trò được chọn trong \'Bao gồm ghi danh theo vai trò\'.';
$string['userinfo'] = 'Thông tin người dùng';
