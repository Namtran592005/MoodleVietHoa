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
 * @subpackage enrol
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Các plugin ghi danh khóa học hiện có';
$string['addinstance'] = 'Thêm phương thức';
$string['addinstanceanother'] = 'Thêm phương thức và tạo phương thức khác';
$string['ajaxnext25'] = '25 kết quả tiếp theo...';
$string['ajaxoneuserfound'] = 'Tìm thấy 1 người dùng';
$string['ajaxxmoreusersfound'] = 'Tìm thấy hơn {$a} người dùng';
$string['ajaxxusersfound'] = 'Tìm thấy {$a} người dùng';
$string['assignnotpermitted'] = 'Bạn không có quyền hoặc không thể chỉ định vai trò trong khóa học này.';
$string['bulkuseroperation'] = 'Thao tác hàng loạt với người dùng';
$string['configenrolplugins'] = 'Vui lòng chọn tất cả plugin bắt buộc và sắp xếp chúng theo thứ tự phù hợp.';
$string['custominstancename'] = 'Tên phiên bản tùy chỉnh';
$string['customwelcomemessage'] = 'Thông điệp chào mừng tùy chỉnh';
$string['customwelcomemessage_help'] = 'Các định dạng được chấp nhận: Văn bản thuần hoặc định dạng tự động Moodle. Thẻ HTML và thẻ đa ngôn ngữ cũng được chấp nhận, cùng với các placeholder sau:
<ul>
<li>Tên khóa học {$a->coursename}</li>
<li>Liên kết đến trang khóa học {$a->courselink}</li>
<li>Ngày bắt đầu khóa học {$a->coursestartdate}</li>
<li>Liên kết đến trang hồ sơ người dùng {$a->profileurl}</li>
<li>Email người dùng {$a->email}</li>
<li>Họ và tên người dùng {$a->fullname}</li>
<li>Tên người dùng {$a->firstname}</li>
<li>Họ người dùng {$a->lastname}</li>
<li>Vai trò của người dùng trong khóa học {$a->courserole}</li>
</ul>';
$string['customwelcomemessageplaceholder'] = 'Xin chào {$a->firstname}, bạn đã được ghi danh vào khóa học {$a->coursename}.';
$string['defaultenrol'] = 'Thêm phiên bản vào các khóa học mới';
$string['defaultenrol_desc'] = 'Theo mặc định, có thể thêm plugin này vào tất cả khóa học mới.';
$string['deleteinstanceconfirm'] = 'Bạn sắp xóa phương thức ghi danh "{$a->name}". Tất cả {$a->users} người dùng hiện được ghi danh bằng phương thức này sẽ bị hủy ghi danh và mọi dữ liệu liên quan đến khóa học, chẳng hạn như điểm của người dùng, tư cách thành viên nhóm hoặc đăng ký diễn đàn, sẽ bị xóa.

Bạn có chắc chắn muốn tiếp tục không?';
$string['deleteinstanceconfirmself'] = 'Bạn có thật sự chắc chắn muốn xóa phiên bản "{$a->name}" đang cấp quyền truy cập cho bạn vào khóa học này không? Nếu tiếp tục, có thể bạn sẽ không truy cập được khóa học này nữa.';
$string['deleteinstancenousersconfirm'] = 'Bạn sắp xóa phương thức ghi danh "{$a->name}". Bạn có chắc chắn muốn tiếp tục không?';
$string['disableinstanceconfirmself'] = 'Bạn có thật sự chắc chắn muốn tắt phiên bản "{$a->name}" đang cấp quyền truy cập cho bạn vào khóa học này không? Nếu tiếp tục, có thể bạn sẽ không truy cập được khóa học này nữa.';
$string['durationdays'] = '{$a} ngày';
$string['editenrolment'] = 'Chỉnh sửa ghi danh';
$string['edituserenrolment'] = 'Chỉnh sửa ghi danh của {$a}';
$string['enrol'] = 'Ghi danh';
$string['enrolcandidates'] = 'Người dùng chưa ghi danh';
$string['enrolcandidatesmatching'] = 'Người dùng chưa ghi danh phù hợp';
$string['enrolcohort'] = 'Ghi danh nhóm người dùng';
$string['enrolcohortusers'] = 'Ghi danh người dùng';
$string['enroldetails'] = 'Chi tiết ghi danh';
$string['enrollednewusers'] = 'Đã ghi danh thành công {$a} người dùng mới';
$string['enrolledusers'] = 'Người dùng đã ghi danh';
$string['enrolledusersmatching'] = 'Người dùng đã ghi danh phù hợp';
$string['enrolme'] = 'Ghi danh tôi vào khóa học này';
$string['enrolment'] = 'Việc ghi danh';
$string['enrolment_delete_scope_desc'] = 'Cho phép hủy ghi danh người dùng khỏi khóa học, xóa phương thức ghi danh và xóa các phân công vai trò.';
$string['enrolment_delete_scope_summary'] = 'Xóa ghi danh khóa học';
$string['enrolment_read_scope_desc'] = 'Cho phép truy cập chỉ đọc để lấy danh sách người dùng đã ghi danh, phương thức ghi danh đang hoạt động, phân công vai trò và trạng thái ghi danh.';
$string['enrolment_read_scope_summary'] = 'Xem ghi danh khóa học';
$string['enrolment_write_scope_desc'] = 'Cho phép ghi danh người dùng vào khóa học, thay đổi phương thức ghi danh và thay đổi phân công vai trò.';
$string['enrolment_write_scope_summary'] = 'Quản lý ghi danh';
$string['enrolmentexpired'] = 'Ghi danh đã hết hạn';
$string['enrolmentinstances'] = 'Phương thức ghi danh';
$string['enrolmentmethod'] = 'Phương thức ghi danh';
$string['enrolmentnew'] = 'Ghi danh mới trong {$a}';
$string['enrolmentnewuser'] = '{$a->user} đã ghi danh vào khóa học "{$a->course}"';
$string['enrolmentoptions'] = 'Tùy chọn ghi danh';
$string['enrolments'] = 'Các lượt ghi danh';
$string['enrolmentupdatedforuser'] = 'Đã cập nhật ghi danh của người dùng "{$a->fullname}"';
$string['enrolnotpermitted'] = 'Bạn không có quyền hoặc không được phép ghi danh người khác vào khóa học này';
$string['enrolperiod'] = 'Thời hạn ghi danh';
$string['enroltimecreated'] = 'Thời điểm tạo ghi danh';
$string['enroltimeend'] = 'Thời điểm kết thúc ghi danh';
$string['enroltimeendinvalid'] = 'Ngày kết thúc ghi danh phải sau ngày bắt đầu ghi danh';
$string['enroltimestart'] = 'Thời điểm bắt đầu ghi danh';
$string['enrolusage'] = 'Phiên bản / lượt ghi danh';
$string['enrolusers'] = 'Ghi danh người dùng';
$string['enrolxusers'] = 'Ghi danh {$a} người dùng';
$string['errajaxfailedenrol'] = 'Không thể ghi danh người dùng';
$string['errajaxsearch'] = 'Lỗi khi tìm kiếm người dùng';
$string['erroreditenrolment'] = 'Đã xảy ra lỗi khi cố gắng chỉnh sửa ghi danh của người dùng';
$string['errorenrolcohort'] = 'Lỗi khi tạo phiên bản ghi danh đồng bộ nhóm người dùng trong khóa học này.';
$string['errorenrolcohortusers'] = 'Lỗi khi ghi danh thành viên nhóm người dùng vào khóa học này.';
$string['errorthresholdlow'] = 'Ngưỡng thông báo phải ít nhất là 1 ngày.';
$string['errorwithbulkoperation'] = 'Đã xảy ra lỗi khi xử lý thay đổi ghi danh hàng loạt của bạn.';
$string['eventenrolinstancecreated'] = 'Đã tạo phiên bản ghi danh';
$string['eventenrolinstancedeleted'] = 'Đã xóa phiên bản ghi danh';
$string['eventenrolinstanceupdated'] = 'Đã cập nhật phiên bản ghi danh';
$string['eventuserenrolmentcreated'] = 'Người dùng đã được ghi danh vào khóa học';
$string['eventuserenrolmentdeleted'] = 'Người dùng đã bị hủy ghi danh khỏi khóa học';
$string['eventuserenrolmentupdated'] = 'Đã cập nhật ghi danh người dùng';
$string['expirynotify'] = 'Thông báo trước khi ghi danh hết hạn';
$string['expirynotify_help'] = 'Thiết lập này xác định liệu có gửi thông báo qua tin nhắn khi ghi danh sắp hết hạn hay không.';
$string['expirynotifyall'] = 'Người ghi danh và người được ghi danh';
$string['expirynotifyenroller'] = 'Chỉ người ghi danh';
$string['expirynotifyhour'] = 'Giờ gửi thông báo ghi danh sắp hết hạn';
$string['expirythreshold'] = 'Ngưỡng thông báo';
$string['expirythreshold_help'] = 'Cần thông báo cho người dùng trước khi ghi danh hết hạn bao lâu?';
$string['extremovedaction'] = 'Thao tác hủy ghi danh bên ngoài';
$string['extremovedaction_help'] = 'Chọn thao tác cần thực hiện khi ghi danh người dùng không còn trong nguồn ghi danh bên ngoài. Xin lưu ý rằng một số dữ liệu và thiết lập của người dùng sẽ bị xóa khỏi khóa học khi hủy ghi danh.';
$string['extremovedkeep'] = 'Giữ người dùng đã ghi danh';
$string['extremovedsuspend'] = 'Vô hiệu hóa ghi danh khóa học';
$string['extremovedsuspendnoroles'] = 'Vô hiệu hóa ghi danh khóa học và xóa vai trò';
$string['extremovedunenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['finishenrollingusers'] = 'Hoàn tất ghi danh người dùng';
$string['foundxcohorts'] = 'Tìm thấy {$a} nhóm người dùng';
$string['futureenrolment'] = 'Ghi danh chưa bắt đầu';
$string['instanceadded'] = 'Đã thêm phương thức';
$string['instanceeditselfwarning'] = 'Cảnh báo:';
$string['instanceeditselfwarningtext'] = 'Bạn được ghi danh vào khóa học này thông qua phương thức ghi danh này; các thay đổi có thể ảnh hưởng đến quyền truy cập khóa học của bạn.';
$string['invalidenrolduration'] = 'Thời hạn ghi danh không hợp lệ';
$string['invalidenrolinstance'] = 'Phiên bản ghi danh không hợp lệ';
$string['invalidrequest'] = 'Yêu cầu không hợp lệ';
$string['invalidrole'] = 'Vai trò không hợp lệ';
$string['manageenrols'] = 'Quản lý plugin ghi danh';
$string['manageinstance'] = 'Quản lý';
$string['method'] = 'Phương thức';
$string['migratetomanual'] = 'Chuyển sang ghi danh thủ công';
$string['nochange'] = 'Không thay đổi';
$string['noexistingparticipants'] = 'Không có người tham gia hiện tại';
$string['nogroup'] = 'Không có nhóm';
$string['noguestaccess'] = 'Khách không thể truy cập khóa học này. Vui lòng đăng nhập.';
$string['none'] = 'Không có';
$string['notenrollable'] = 'Bạn không thể tự ghi danh vào khóa học này.';
$string['notenrolledusers'] = 'Người dùng khác';
$string['otheruserdesc'] = 'Những người dùng sau chưa được ghi danh vào khóa học này nhưng có vai trò được kế thừa hoặc được chỉ định trong khóa học.';
$string['participationactive'] = 'Đang hoạt động';
$string['participationnotcurrent'] = 'Không còn hiện hành';
$string['participationstatus'] = 'Trạng thái';
$string['participationsuspended'] = 'Đã tạm khóa';
$string['periodend'] = 'đến {$a}';
$string['periodnone'] = 'đã ghi danh {$a}';
$string['periodstart'] = 'từ {$a}';
$string['periodstartend'] = 'từ {$a->start} đến {$a->end}';
$string['plugindisabled'] = 'Plugin ghi danh {$a} đã bị tắt';
$string['privacy:metadata:user_enrolments'] = 'Các lượt ghi danh';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Phiên bản của plugin ghi danh';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID của người dùng chỉnh sửa ghi danh người dùng lần gần nhất';
$string['privacy:metadata:user_enrolments:status'] = 'Trạng thái ghi danh của người dùng trong khóa học';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Plugin ghi danh lõi lưu thông tin người dùng đã ghi danh.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Thời điểm tạo ghi danh người dùng';
$string['privacy:metadata:user_enrolments:timeend'] = 'Thời điểm kết thúc ghi danh người dùng';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Thời điểm chỉnh sửa ghi danh người dùng';
$string['privacy:metadata:user_enrolments:timestart'] = 'Thời điểm bắt đầu ghi danh người dùng';
$string['privacy:metadata:user_enrolments:userid'] = 'ID của người dùng';
$string['recovergrades'] = 'Khôi phục điểm cũ của người dùng nếu có thể';
$string['rolefromcategory'] = '{$a->role} (Được kế thừa từ danh mục khóa học)';
$string['rolefrommetacourse'] = '{$a->role} (Được kế thừa từ khóa học cha)';
$string['rolefromsystem'] = '{$a->role} (Được chỉ định ở cấp trang)';
$string['rolefromthiscourse'] = '{$a->role} (Được chỉ định trong khóa học này)';
$string['sendcoursewelcomemessage'] = 'Gửi thông điệp chào mừng khóa học';
$string['sendcoursewelcomemessage_help'] = 'Khi ghi danh người dùng hoặc nhóm người dùng vào khóa học, có thể gửi cho họ email chào mừng. Nếu email được gửi từ người liên hệ khóa học (theo mặc định là giáo viên) và có nhiều người dùng giữ vai trò này, email sẽ được gửi từ người đầu tiên được chỉ định vai trò đó.';
$string['sendfromcoursecontact'] = 'Từ người liên hệ khóa học';
$string['sendfromkeyholder'] = 'Từ người giữ khóa';
$string['sendfromnoreply'] = 'Từ địa chỉ không nhận trả lời';
$string['startdatetoday'] = 'Hôm nay';
$string['synced'] = 'Đã đồng bộ';
$string['testsettings'] = 'Kiểm tra thiết lập';
$string['testsettingsheading'] = 'Kiểm tra thiết lập ghi danh - {$a}';
$string['timeended'] = 'Thời điểm kết thúc';
$string['timeenrolled'] = 'Thời điểm ghi danh';
$string['timereaggregated'] = 'Thời điểm tổng hợp lại';
$string['timestarted'] = 'Thời điểm bắt đầu';
$string['totalenrolledusers'] = '{$a} người dùng đã ghi danh';
$string['totalotherusers'] = '{$a} người dùng khác';
$string['totalunenrolledusers'] = '{$a} người dùng đã hủy ghi danh';
$string['unassignnotpermitted'] = 'Bạn không có quyền bỏ phân công vai trò trong khóa học này';
$string['unenrol'] = 'Hủy ghi danh';
$string['unenrolconfirm'] = 'Bạn có thật sự muốn hủy ghi danh của "{$a->user}" khỏi "{$a->course}" không (trước đây được ghi danh qua "{$a->enrolinstancename}")?';
$string['unenrolleduser'] = 'Người dùng "{$a->fullname}" đã bị hủy ghi danh khỏi khóa học';
$string['unenrolme'] = 'Hủy ghi danh của tôi khỏi khóa học này';
$string['unenrolnotpermitted'] = 'Bạn không có quyền hủy ghi danh người dùng này khỏi khóa học.';
$string['unenrolroleusers'] = 'Hủy ghi danh người dùng';
$string['uninstallmigrating'] = 'Đang chuyển đổi các lượt ghi danh "{$a}"';
$string['unknowajaxaction'] = 'Đã yêu cầu hành động không xác định';
$string['unlimitedduration'] = 'Không giới hạn';
$string['userremovedfromselectiona'] = 'Người dùng "{$a}" đã bị xóa khỏi lựa chọn.';
$string['usersearch'] = 'Tìm kiếm';
$string['withselectedusers'] = 'Với người dùng đã chọn';
$string['youenrolledincourse'] = 'Bạn đã được ghi danh vào khóa học.';
$string['youunenrolledfromcourse'] = 'Bạn đã bị hủy ghi danh khỏi khóa học "{$a}".';
