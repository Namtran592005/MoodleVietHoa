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
 * @package    enrol
 * @subpackage self
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Ghi danh đã bị tắt hoặc không hoạt động';
$string['canntenrolearly'] = 'Bạn chưa thể ghi danh; việc ghi danh sẽ bắt đầu vào {$a}.';
$string['canntenrollate'] = 'Bạn không thể ghi danh nữa vì thời gian ghi danh đã kết thúc vào {$a}.';
$string['cohortnonmemberinfo'] = 'Chỉ thành viên của nhóm người dùng \'{$a}\' mới có thể tự ghi danh.';
$string['cohortonly'] = 'Chỉ thành viên nhóm người dùng';
$string['cohortonly_help'] = 'Có thể giới hạn việc tự ghi danh chỉ dành cho thành viên của một nhóm người dùng được chỉ định. Lưu ý rằng thay đổi thiết lập này không ảnh hưởng đến các lượt ghi danh hiện có.';
$string['confirmbulkdeleteenrolment'] = 'Bạn có chắc chắn muốn xóa các lượt ghi danh của người dùng này không?';
$string['defaultrole'] = 'Gán vai trò mặc định';
$string['defaultrole_desc'] = 'Chọn vai trò sẽ được gán cho người dùng khi họ tự ghi danh';
$string['deleteselectedusers'] = 'Xóa các lượt ghi danh của người dùng đã chọn';
$string['editselectedusers'] = 'Chỉnh sửa các lượt ghi danh của người dùng đã chọn';
$string['enroledas'] = '{$a->enrol} với vai trò \'{$a->role}\\';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu được bật, người dùng chỉ có thể tự ghi danh cho đến ngày này.';
$string['enrolenddaterror'] = 'Ngày kết thúc ghi danh không thể sớm hơn ngày bắt đầu';
$string['enrolkeyrequired'] = 'Cần có khóa ghi danh.';
$string['enrolme'] = 'Ghi danh cho tôi';
$string['enrolperiod'] = 'Thời hạn ghi danh';
$string['enrolperiod_desc'] = 'Khoảng thời gian mặc định mà lượt ghi danh còn hiệu lực. Nếu đặt là 0, thời hạn ghi danh mặc định là không giới hạn.';
$string['enrolperiod_help'] = 'Khoảng thời gian lượt ghi danh còn hiệu lực, tính từ thời điểm người dùng tự ghi danh. Nếu bị tắt, thời hạn ghi danh sẽ không giới hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu được bật, người dùng chỉ có thể tự ghi danh kể từ ngày này trở đi.';
$string['expiredaction'] = 'Hành động khi ghi danh hết hạn';
$string['expiredaction_help'] = 'Chọn hành động sẽ thực hiện khi lượt ghi danh của người dùng hết hạn. Lưu ý rằng một số dữ liệu và thiết lập của người dùng sẽ bị xóa khỏi khóa học khi hủy ghi danh khỏi khóa học.';
$string['expiryinactivemessageenrolledbody'] = 'Xin chào {$a->user},

Lượt ghi danh của bạn vào khóa học {$a->course} sẽ hết hạn vào {$a->timeend} vì bạn đã không truy cập khóa học trong {$a->inactivetime} ngày qua.

Để duy trì lượt ghi danh, hãy đăng nhập và truy cập <a href="{$a->url}">{$a->course}</a> trước {$a->timeend}.';
$string['expiryinactivemessageenrolledsubject'] = 'Lượt ghi danh của bạn sắp hết hạn: {$a->course}';
$string['expirymessageenrolledbody'] = 'Kính gửi {$a->user},

Đây là thông báo cho biết lượt ghi danh của bạn vào khóa học \'{$a->course}\' sẽ hết hạn vào {$a->timeend}.

Nếu bạn cần trợ giúp, vui lòng liên hệ {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Thông báo hết hạn tự ghi danh';
$string['expirymessageenrollerbody'] = 'Lượt tự ghi danh vào khóa học \'{$a->course}\' sẽ hết hạn trong vòng {$a->threshold} tới đối với những người dùng sau:

{$a->users}

Để gia hạn ghi danh cho họ, hãy truy cập {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Thông báo hết hạn tự ghi danh';
$string['expirynotifyall'] = 'Giáo viên và người dùng đã ghi danh';
$string['expirynotifyenroller'] = 'Chỉ giáo viên';
$string['groupkey'] = 'Sử dụng khóa ghi danh nhóm';
$string['groupkey_desc'] = 'Mặc định sử dụng khóa ghi danh nhóm.';
$string['groupkey_help'] = 'Ngoài việc giới hạn quyền truy cập khóa học cho những người biết khóa, sử dụng khóa ghi danh nhóm còn giúp tự động thêm người dùng vào các nhóm khi họ ghi danh vào khóa học.

Lưu ý: Cần chỉ định khóa ghi danh cho khóa học trong thiết lập tự ghi danh, đồng thời thiết lập khóa ghi danh nhóm trong phần cài đặt nhóm.';
$string['keyholder'] = 'Bạn đáng lẽ đã nhận được khóa ghi danh này từ:';
$string['longtimenosee'] = 'Hủy ghi danh người dùng không hoạt động sau';
$string['longtimenosee_help'] = 'Nếu người dùng không truy cập khóa học trong thời gian dài, họ sẽ tự động bị hủy ghi danh. Tham số này xác định giới hạn thời gian đó.';
$string['maxenrolled'] = 'Số người dùng ghi danh tối đa';
$string['maxenrolled_help'] = 'Chỉ định số lượng người dùng tối đa có thể tự ghi danh. 0 nghĩa là không giới hạn.';
$string['maxenrolledreached'] = 'Đã đạt đến số lượng người dùng tối đa được phép tự ghi danh.';
$string['messageprovider:expiry_notification'] = 'Thông báo hết hạn tự ghi danh';
$string['newenrols'] = 'Cho phép tự ghi danh mới';
$string['newenrols_desc'] = 'Mặc định cho phép người dùng tự ghi danh vào các khóa học mới.';
$string['newenrols_help'] = 'Thiết lập này xác định liệu người dùng có thể ghi danh vào khóa học này hay không.';
$string['nopassword'] = 'Không cần khóa ghi danh.';
$string['password'] = 'Khóa ghi danh';
$string['password_help'] = 'Khóa ghi danh cho phép giới hạn quyền truy cập khóa học chỉ dành cho những người biết khóa.

Nếu để trống trường này, bất kỳ người dùng nào cũng có thể ghi danh vào khóa học.

Nếu chỉ định khóa ghi danh, mọi người dùng muốn ghi danh vào khóa học sẽ phải nhập khóa. Lưu ý rằng người dùng chỉ cần nhập khóa ghi danh MỘT LẦN, khi họ ghi danh vào khóa học.';
$string['passwordinvalid'] = 'Khóa ghi danh không chính xác, vui lòng thử lại';
$string['passwordinvalidhint'] = 'Khóa ghi danh không chính xác, vui lòng thử lại<br />
(Gợi ý: khóa bắt đầu bằng \'{$a}\')';
$string['passwordmatchesgroupkey'] = 'Khóa ghi danh này đã được sử dụng làm khóa ghi danh nhóm.';
$string['pluginname'] = 'Tự ghi danh';
$string['pluginname_desc'] = 'Plugin tự ghi danh cho phép người dùng chọn khóa học mà họ muốn tham gia. Các khóa học có thể được bảo vệ bằng khóa ghi danh. Việc ghi danh được thực hiện nội bộ thông qua plugin ghi danh thủ công, plugin này phải được bật trong cùng khóa học.';
$string['privacy:metadata'] = 'Plugin tự ghi danh không lưu trữ dữ liệu cá nhân nào.';
$string['requirepassword'] = 'Yêu cầu khóa ghi danh';
$string['requirepassword_desc'] = 'Yêu cầu khóa ghi danh trong các khóa học mới và ngăn việc xóa khóa ghi danh khỏi các khóa học hiện có.';
$string['role'] = 'Vai trò được gán mặc định';
$string['self:config'] = 'Cấu hình các phiên bản tự ghi danh';
$string['self:enrolself'] = 'Tự ghi danh vào khóa học';
$string['self:holdkey'] = 'Xuất hiện với tư cách người giữ khóa tự ghi danh';
$string['self:manage'] = 'Quản lý người dùng đã ghi danh';
$string['self:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['self:unenrolself'] = 'Tự hủy ghi danh khỏi khóa học';
$string['sendcoursewelcomemessage'] = 'Gửi thư chào mừng khóa học';
$string['sendcoursewelcomemessage_help'] = 'Khi người dùng tự ghi danh vào khóa học, họ có thể nhận được email chào mừng. Nếu email được gửi từ người liên hệ khóa học (mặc định là giáo viên) và có nhiều người dùng mang vai trò này, email sẽ được gửi từ người đầu tiên được gán vai trò đó.';
$string['sendexpirynotificationstask'] = 'Tác vụ gửi thông báo hết hạn tự ghi danh';
$string['showhint'] = 'Hiển thị gợi ý';
$string['showhint_desc'] = 'Hiển thị chữ cái đầu tiên của khóa truy cập dành cho khách.';
$string['status'] = 'Duy trì hiệu lực các lượt tự ghi danh hiện tại';
$string['status_desc'] = 'Bật phương thức tự ghi danh trong các khóa học mới.';
$string['status_help'] = 'Nếu đặt là Không, những người tham gia hiện tại đã tự ghi danh vào khóa học sẽ không còn quyền truy cập.';
$string['syncenrolmentstask'] = 'Tác vụ đồng bộ hóa lượt tự ghi danh';
$string['unenrol'] = 'Hủy ghi danh người dùng';
$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn hủy ghi danh khỏi khóa học "{$a}" không?';
$string['unenroluser'] = 'Bạn có thực sự muốn hủy ghi danh "{$a->user}" khỏi khóa học "{$a->course}" không?';
$string['unenrolusers'] = 'Hủy ghi danh người dùng';
$string['usepasswordpolicy'] = 'Sử dụng chính sách mật khẩu';
$string['usepasswordpolicy_desc'] = 'Sử dụng chính sách mật khẩu tiêu chuẩn cho khóa ghi danh.';
