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
 * @subpackage manual
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtogroup'] = 'Thêm vào nhóm';
$string['advanced'] = 'Nâng cao';
$string['alterstatus'] = 'Thay đổi trạng thái';
$string['altertimeend'] = 'Thay đổi thời gian kết thúc';
$string['altertimestart'] = 'Thay đổi thời gian bắt đầu';
$string['assignrole'] = 'Gán vai trò';
$string['assignroles'] = 'Gán vai trò';
$string['browsecohorts'] = 'Duyệt tập hợp người dùng';
$string['browseusers'] = 'Duyệt người dùng';
$string['confirmbulkdeleteenrolment'] = 'Bạn có chắc chắn muốn xóa các lượt ghi danh của những người dùng này không?';
$string['defaultperiod'] = 'Thời lượng ghi danh mặc định';
$string['defaultperiod_desc'] = 'Thời lượng mặc định mà lượt ghi danh có hiệu lực. Nếu đặt là 0, thời lượng ghi danh mặc định sẽ không giới hạn.';
$string['defaultperiod_help'] = 'Thời lượng mặc định mà lượt ghi danh có hiệu lực, tính từ thời điểm người dùng được ghi danh. Nếu tắt tùy chọn này, thời lượng ghi danh mặc định sẽ không giới hạn.';
$string['defaultstart'] = 'Thời điểm bắt đầu ghi danh mặc định';
$string['deleteselectedusers'] = 'Xóa lượt ghi danh của người dùng đã chọn';
$string['editselectedusers'] = 'Chỉnh sửa lượt ghi danh của người dùng đã chọn';
$string['enrolledincourserole'] = 'Đã ghi danh vào "{$a->course}" với vai trò "{$a->role}"';
$string['enrolusers'] = 'Ghi danh người dùng';
$string['enroluserscohorts'] = 'Ghi danh người dùng và tập hợp người dùng đã chọn';
$string['expiredaction'] = 'Thao tác khi lượt ghi danh hết hạn';
$string['expiredaction_help'] = 'Chọn thao tác sẽ thực hiện khi lượt ghi danh của người dùng hết hạn. Lưu ý rằng một số dữ liệu và thiết lập của người dùng sẽ bị xóa khỏi khóa học khi hủy ghi danh.';
$string['expirymessageenrolledbody'] = 'Chào {$a->user},

Đây là thông báo cho biết lượt ghi danh của bạn vào khóa học \'{$a->course}\' sẽ hết hạn vào {$a->timeend}.

Nếu cần trợ giúp, vui lòng liên hệ {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Thông báo hết hạn ghi danh';
$string['expirymessageenrollerbody'] = 'Lượt ghi danh vào khóa học \'{$a->course}\' của những người dùng sau sẽ hết hạn trong vòng {$a->threshold} tới:

{$a->users}

Để gia hạn ghi danh, hãy truy cập {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Thông báo hết hạn ghi danh';
$string['managemanualenrolements'] = 'Quản lý ghi danh thủ công';
$string['manual:config'] = 'Cấu hình các phiên bản ghi danh thủ công';
$string['manual:enrol'] = 'Ghi danh người dùng';
$string['manual:manage'] = 'Quản lý lượt ghi danh của người dùng';
$string['manual:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['manual:unenrolself'] = 'Tự hủy ghi danh khỏi khóa học';
$string['manualpluginnotinstalled'] = 'Plugin "Manual" chưa được cài đặt';
$string['messageprovider:expiry_notification'] = 'Thông báo hết hạn ghi danh thủ công';
$string['now'] = 'Bây giờ';
$string['pluginname'] = 'Ghi danh thủ công';
$string['pluginname_desc'] = 'Plugin ghi danh thủ công cho phép người dùng được ghi danh thủ công qua một liên kết trong thiết lập quản trị khóa học, bởi người dùng có quyền phù hợp như giáo viên. Thông thường, plugin này nên được bật vì một số plugin ghi danh khác, chẳng hạn như tự ghi danh, cần đến plugin này.';
$string['privacy:metadata'] = 'Plugin ghi danh thủ công không lưu trữ dữ liệu cá nhân nào.';
$string['selectcohorts'] = 'Chọn tập hợp người dùng';
$string['selection'] = 'Lựa chọn';
$string['selectusers'] = 'Chọn người dùng';
$string['sendexpirynotificationstask'] = 'Tác vụ gửi thông báo hết hạn ghi danh thủ công';
$string['showgroups'] = 'Hiển thị nhóm';
$string['status'] = 'Bật ghi danh thủ công';
$string['status_desc'] = 'Cho phép người dùng được ghi danh nội bộ truy cập khóa học. Trong hầu hết trường hợp, nên bật tùy chọn này.';
$string['status_help'] = 'Thiết lập này xác định liệu người dùng có thể được ghi danh thủ công qua một liên kết trong thiết lập quản trị khóa học bởi người dùng có quyền phù hợp, chẳng hạn như giáo viên, hay không.';
$string['statusdisabled'] = 'Đã tắt';
$string['statusenabled'] = 'Đã bật';
$string['syncenrolmentstask'] = 'Tác vụ đồng bộ lượt ghi danh thủ công';
$string['unenrol'] = 'Hủy ghi danh người dùng';
$string['unenrolselectedusers'] = 'Hủy ghi danh những người dùng đã chọn';
$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn tự hủy ghi danh khỏi khóa học "{$a}" không?';
$string['unenroluser'] = 'Bạn có thực sự muốn hủy ghi danh "{$a->user}" khỏi khóa học "{$a->course}" không?';
$string['unenrolusers'] = 'Hủy ghi danh người dùng';
$string['wscannotenrol'] = 'Phiên bản plugin không thể ghi danh thủ công người dùng vào khóa học có id = {$a->courseid}';
$string['wsnoinstance'] = 'Phiên bản plugin ghi danh thủ công không tồn tại hoặc đã bị tắt cho khóa học (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Bạn không có quyền gán vai trò này ({$a->roleid}) cho người dùng này ({$a->userid}) trong khóa học này ({$a->courseid}).';
