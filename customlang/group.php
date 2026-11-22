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
 * @subpackage group
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Được thêm bởi {$a}';
$string['addgroup'] = 'Thêm người dùng vào nhóm';
$string['addgroupstogrouping'] = 'Thêm nhóm vào tập hợp nhóm';
$string['addgroupstogroupings'] = 'Thêm/xóa nhóm';
$string['adduserstogroup'] = 'Thêm/xóa người dùng';
$string['allocateby'] = 'Phân bổ thành viên';
$string['anygrouping'] = '[Bất kỳ tập hợp nhóm nào]';
$string['autocreategroups'] = 'Tự động tạo nhóm';
$string['backtogroupings'] = 'Quay lại tập hợp nhóm';
$string['backtogroups'] = 'Quay lại nhóm';
$string['badnamingscheme'] = 'Quy tắc đặt tên phải chứa chính xác một ký tự \'@\' hoặc một ký tự \'#\'.';
$string['byfirstname'] = 'Theo thứ tự bảng chữ cái: tên, họ';
$string['byidnumber'] = 'Theo thứ tự bảng chữ cái của mã số';
$string['bylastname'] = 'Theo thứ tự bảng chữ cái: họ, tên';
$string['createautomaticgrouping'] = 'Tạo tập hợp nhóm tự động';
$string['creategroup'] = 'Tạo nhóm';
$string['creategrouping'] = 'Tạo tập hợp nhóm';
$string['creategroupinselectedgrouping'] = 'Tạo nhóm trong tập hợp nhóm';
$string['createingrouping'] = 'Tập hợp các nhóm được tạo tự động';
$string['createorphangroup'] = 'Tạo nhóm độc lập';
$string['csvdelimiter'] = 'Dấu phân cách CSV';
$string['databaseupgradegroups'] = 'Phiên bản nhóm hiện là {$a}';
$string['defaultgrouping'] = 'Tập hợp nhóm mặc định';
$string['defaultgroupingname'] = 'Tập hợp nhóm';
$string['defaultgroupname'] = 'Nhóm';
$string['deleteallgroupings'] = 'Tất cả tập hợp nhóm';
$string['deleteallgroups'] = 'Tất cả nhóm';
$string['deletegroupconfirm'] = 'Bạn có chắc chắn muốn xóa nhóm \'{$a}\' không?';
$string['deletegrouping'] = 'Xóa tập hợp nhóm';
$string['deletegroupingconfirm'] = 'Bạn có chắc chắn muốn xóa tập hợp nhóm \'{$a}\' không? (Các nhóm trong tập hợp sẽ không bị xóa.)';
$string['deletegroupsconfirm'] = 'Bạn có chắc chắn muốn xóa các nhóm sau không?';
$string['deleteselectedgroup'] = 'Xóa';
$string['disablemessagingaction'] = 'Tắt thao tác nhắn tin';
$string['editgroupingsettings'] = 'Chỉnh sửa thiết lập tập hợp nhóm';
$string['editgroupsettings'] = 'Chỉnh sửa thiết lập nhóm';
$string['editusersgroupsa'] = 'Chỉnh sửa nhóm của "{$a}"';
$string['enablemessaging'] = 'Nhắn tin nhóm';
$string['enablemessaging_help'] = 'Nếu bật, các thành viên nhóm có thể gửi tin nhắn cho nhau trong nhóm thông qua ngăn nhắn tin.';
$string['enablemessagingaction'] = 'Bật thao tác nhắn tin';
$string['encoding'] = 'Mã hóa';
$string['enrolmentkey'] = 'Khóa ghi danh';
$string['enrolmentkey_help'] = 'Khóa ghi danh giới hạn quyền truy cập khóa học chỉ cho những người biết khóa. Nếu chỉ định khóa ghi danh nhóm, việc nhập khóa đó không chỉ cho phép người dùng vào khóa học mà còn tự động thêm họ vào nhóm này.

Lưu ý: Khóa ghi danh nhóm phải được bật trong thiết lập tự ghi danh và cũng phải chỉ định khóa ghi danh cho khóa học.';
$string['enrolmentkeyalreadyinuse'] = 'Khóa ghi danh này đã được sử dụng cho một nhóm khác.';
$string['erroraddremoveuser'] = 'Lỗi khi thêm/xóa người dùng {$a} khỏi nhóm';
$string['erroraddtogroup'] = 'Giá trị addtogroup không hợp lệ. Giá trị phải là 0 nếu không dùng chế độ nhóm hoặc 1 nếu cần tạo nhóm mới.';
$string['erroraddtogroupgroupname'] = 'Bạn không thể chỉ định groupname khi addtogroup được thiết lập.';
$string['erroreditgroup'] = 'Lỗi khi tạo/cập nhật nhóm {$a}';
$string['erroreditgrouping'] = 'Lỗi khi tạo/cập nhật tập hợp nhóm {$a}';
$string['errorinvalidgroup'] = 'Lỗi, nhóm {$a} không hợp lệ';
$string['errorremovenotpermitted'] = 'Bạn không có quyền xóa thành viên nhóm {$a} được thêm tự động.';
$string['errorselectone'] = 'Vui lòng chọn một nhóm duy nhất trước khi chọn tùy chọn này.';
$string['errorselectsome'] = 'Vui lòng chọn một hoặc nhiều nhóm trước khi chọn tùy chọn này.';
$string['evenallocation'] = 'Lưu ý: Để phân bổ đều vào các nhóm, số thành viên thực tế trong mỗi nhóm sẽ khác với số bạn đã chỉ định.';
$string['eventgroupcreated'] = 'Đã tạo nhóm';
$string['eventgroupdeleted'] = 'Đã xóa nhóm';
$string['eventgroupingcreated'] = 'Đã tạo tập hợp nhóm';
$string['eventgroupingdeleted'] = 'Đã xóa tập hợp nhóm';
$string['eventgroupinggroupassigned'] = 'Đã gán nhóm vào tập hợp nhóm';
$string['eventgroupinggroupunassigned'] = 'Đã hủy gán nhóm khỏi tập hợp nhóm';
$string['eventgroupingupdated'] = 'Đã cập nhật tập hợp nhóm';
$string['eventgroupmemberadded'] = 'Đã thêm thành viên nhóm';
$string['eventgroupmemberremoved'] = 'Đã xóa thành viên nhóm';
$string['eventgroupupdated'] = 'Đã cập nhật nhóm';
$string['existingmembers'] = 'Thành viên hiện có: {$a}';
$string['exportgroupsgroupings'] = 'Tải nhóm và tập hợp nhóm xuống dưới dạng';
$string['filtergroups'] = 'Lọc nhóm theo:';
$string['group'] = 'Nhóm';
$string['groupaddedsuccesfully'] = 'Đã thêm thành công nhóm {$a}';
$string['groupaddedtogroupingsuccesfully'] = 'Đã thêm thành công nhóm {$a->groupname} vào tập hợp nhóm {$a->groupingname}';
$string['groupby'] = 'Tự động tạo dựa trên';
$string['groupdescription'] = 'Mô tả nhóm';
$string['groupinfo'] = 'Thông tin về nhóm đã chọn';
$string['groupinfomembers'] = 'Thông tin về các thành viên đã chọn';
$string['groupinfopeople'] = 'Thông tin về những người đã chọn';
$string['grouping'] = 'Tập hợp nhóm';
$string['grouping_help'] = 'Phân nhóm là tập hợp các nhóm trong một khóa học. Nếu chọn phân nhóm, học viên được xếp vào các nhóm thuộc phân nhóm đó sẽ có thể cùng làm việc với nhau.';
$string['groupingaddedsuccesfully'] = 'Đã thêm thành công tập hợp nhóm {$a}';
$string['groupingdescription'] = 'Mô tả phân nhóm';
$string['groupingname'] = 'Tên phân nhóm';
$string['groupingnameexists'] = 'Tên phân nhóm \'{$a}\' đã tồn tại trong khóa học này, vui lòng chọn tên khác.';
$string['groupings'] = 'Các phân nhóm';
$string['groupingsection'] = 'Quyền truy cập phân nhóm';
$string['groupingsection_help'] = 'Phân nhóm là tập hợp các nhóm trong một khóa học. Nếu chọn phân nhóm tại đây, chỉ học viên được xếp vào các nhóm thuộc phân nhóm này mới có quyền truy cập mục.';
$string['groupingsonly'] = 'Chỉ phân nhóm';
$string['groupmember'] = 'Thành viên nhóm';
$string['groupmemberdesc'] = 'Vai trò tiêu chuẩn dành cho thành viên của một nhóm.';
$string['groupmembers'] = 'Thành viên nhóm';
$string['groupmemberssee'] = 'Xem thành viên nhóm';
$string['groupmembersselected'] = 'Thành viên của nhóm đã chọn';
$string['groupmode'] = 'Chế độ nhóm';
$string['groupmode_groupsseparate_help'] = 'Học viên được chia thành các nhóm và chỉ có thể xem bài làm của nhóm mình.';
$string['groupmode_groupsvisible_help'] = 'Học viên được chia thành các nhóm nhưng có thể xem bài làm của các nhóm khác.';
$string['groupmode_help'] = '* Không có nhóm
* Nhóm riêng biệt: Học viên được chia thành các nhóm và chỉ có thể xem bài làm của nhóm mình.
* Nhóm hiển thị: Học viên được chia thành các nhóm nhưng có thể xem bài làm của các nhóm khác.

Chế độ nhóm được đặt ở cấp khóa học là chế độ mặc định cho tất cả hoạt động. Nếu chế độ nhóm bị bắt buộc ở cấp khóa học, bạn không thể thay đổi chế độ này trong một hoạt động.';
$string['groupmodeforce'] = 'Bắt buộc chế độ nhóm';
$string['groupmodeforce_help'] = 'Chế độ nhóm được áp dụng cho tất cả hoạt động và không thể thay đổi trong một hoạt động.';
$string['groupmy'] = 'Nhóm của tôi';
$string['groupname'] = 'Tên nhóm';
$string['groupnameexists'] = 'Tên nhóm \'{$a}\' đã tồn tại trong khóa học này, vui lòng chọn tên khác.';
$string['groupnotamember'] = 'Rất tiếc, bạn không phải là thành viên của nhóm đó';
$string['groups'] = 'Các nhóm';
$string['groupscount'] = 'Các nhóm ({$a})';
$string['groupsettingsheader'] = 'Các nhóm';
$string['groupsgroupings'] = 'Nhóm và phân nhóm';
$string['groupsinselectedgrouping'] = 'Các nhóm trong:';
$string['groupsnone'] = 'Không có nhóm nào';
$string['groupsonly'] = 'Chỉ nhóm';
$string['groupspreview'] = 'Xem trước các nhóm';
$string['groupsseparate'] = 'Nhóm riêng biệt';
$string['groupsvisible'] = 'Nhóm hiển thị';
$string['grouptemplate'] = 'Nhóm @';
$string['importgroups'] = 'Nhập nhóm';
$string['importgroups_help'] = 'Có thể nhập nhóm bằng tệp văn bản. Định dạng tệp như sau:

* Mỗi dòng của tệp chứa một bản ghi
* Mỗi bản ghi là một chuỗi dữ liệu được phân tách bằng dấu phân cách đã chọn
* Bản ghi đầu tiên chứa danh sách tên trường xác định định dạng của phần còn lại trong tệp
* Tên trường bắt buộc là groupname
* Các tên trường tùy chọn là groupidnumber, description, enrolmentkey, groupingname, enablemessaging';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Chỉ bao gồm các lượt ghi danh đang hoạt động';
$string['includeonlyactiveenrol_help'] = 'Nếu bật, người dùng bị tạm ngưng sẽ không được đưa vào nhóm.';
$string['javascriptrequired'] = 'Trang này yêu cầu bật JavaScript.';
$string['manageactions'] = 'Quản lý';
$string['memberofgroup'] = 'Thành viên của nhóm: {$a}';
$string['members'] = 'Số thành viên mỗi nhóm';
$string['membersofselectedgroup'] = 'Thành viên của:';
$string['messagingdisabled'] = 'Đã tắt tính năng nhắn tin thành công trong {$a} nhóm';
$string['messagingenabled'] = 'Đã bật tính năng nhắn tin thành công trong {$a} nhóm';
$string['mygroups'] = 'Nhóm của tôi';
$string['namingscheme'] = 'Lược đồ đặt tên';
$string['namingscheme_help'] = 'Có thể dùng ký hiệu @ để tạo các nhóm có tên chứa chữ cái. Ví dụ: Group @ sẽ tạo các nhóm có tên Group A, Group B, Group C, ...

Có thể dùng ký hiệu # để tạo các nhóm có tên chứa số. Ví dụ: Group # sẽ tạo các nhóm có tên Group 1, Group 2, Group 3, ...';
$string['newgrouping'] = 'Phân nhóm mới';
$string['newpicture'] = 'Ảnh mới';
$string['newpicture_help'] = 'Chọn ảnh định dạng JPG hoặc PNG. Ảnh sẽ được cắt thành hình vuông và đổi kích thước thành 100x100 pixel.';
$string['noallocation'] = 'Không phân bổ';
$string['nogroup'] = 'Không có nhóm';
$string['nogrouping'] = 'Không có phân nhóm';
$string['nogroups'] = 'Chưa có nhóm nào được thiết lập trong khóa học này';
$string['nogroupsassigned'] = 'Chưa phân nhóm nào';
$string['nonparticipation'] = 'Không tham gia';
$string['nopermissionforcreation'] = 'Không thể tạo nhóm "{$a}" vì bạn không có quyền cần thiết';
$string['nosmallgroups'] = 'Ngăn nhóm nhỏ cuối cùng';
$string['notingroup'] = 'Bỏ qua người dùng trong nhóm';
$string['notingrouping'] = 'Không thuộc phân nhóm nào';
$string['notingrouplist'] = 'Không thuộc nhóm nào';
$string['nousersinrole'] = 'Không có người dùng phù hợp trong vai trò đã chọn';
$string['number'] = 'Số lượng nhóm/thành viên';
$string['numgroups'] = 'Số lượng nhóm';
$string['nummembers'] = 'Số thành viên mỗi nhóm';
$string['othergroups'] = 'Các nhóm khác';
$string['overview'] = 'Tổng quan';
$string['participation'] = 'Hiển thị nhóm trong danh sách thả xuống cho các hoạt động ở chế độ nhóm';
$string['participation_help'] = 'Thành viên nhóm có nên được phép chọn nhóm này cho các hoạt động ở chế độ nhóm riêng biệt hoặc nhóm hiển thị không? (Chỉ áp dụng nếu tư cách thành viên nhóm hiển thị hoặc chỉ hiển thị với thành viên.)';
$string['participationshort'] = 'Tham gia';
$string['potentialmembers'] = 'Thành viên tiềm năng: {$a}';
$string['potentialmembs'] = 'Thành viên tiềm năng';
$string['printerfriendly'] = 'Hiển thị thân thiện khi in';
$string['privacy:metadata:core_message'] = 'Các cuộc trò chuyện nhóm';
$string['privacy:metadata:groups'] = 'Bản ghi về tư cách thành viên nhóm.';
$string['privacy:metadata:groups:groupid'] = 'ID của nhóm.';
$string['privacy:metadata:groups:timeadded'] = 'Dấu thời gian cho biết thời điểm người dùng được thêm vào nhóm.';
$string['privacy:metadata:groups:userid'] = 'ID của người dùng được liên kết với nhóm';
$string['random'] = 'Ngẫu nhiên';
$string['removefromgroup'] = 'Xóa người dùng khỏi nhóm {$a}';
$string['removefromgroupconfirm'] = 'Bạn có thực sự muốn xóa người dùng "{$a->user}" khỏi nhóm "{$a->group}" không?';
$string['removegroupfromselectedgrouping'] = 'Xóa nhóm khỏi phân nhóm';
$string['removegroupingsmembers'] = 'Tất cả nhóm khỏi các phân nhóm';
$string['removegroupsmembers'] = 'Tất cả thành viên nhóm';
$string['removeselectedusers'] = 'Xóa người dùng đã chọn';
$string['selectfromgroup'] = 'Chọn thành viên từ nhóm';
$string['selectfromgrouping'] = 'Chọn thành viên từ phân nhóm';
$string['selectfromrole'] = 'Chọn thành viên theo vai trò';
$string['showgroupsingrouping'] = 'Hiển thị các nhóm trong phân nhóm';
$string['showmembersforgroup'] = 'Hiển thị thành viên của nhóm';
$string['toomanygroups'] = 'Không đủ người dùng để phân vào số nhóm này - chỉ có {$a} người dùng trong vai trò đã chọn.';
$string['usercount'] = 'Số lượng người dùng';
$string['usercounttotal'] = 'Số lượng người dùng ({$a})';
$string['usergroupmembership'] = 'Tư cách thành viên nhóm của người dùng đã chọn:';
$string['visibility'] = 'Khả năng hiển thị tư cách thành viên nhóm';
$string['visibility_help'] = '* Hiển thị - tất cả người tham gia khóa học có thể xem ai thuộc nhóm
* Chỉ hiển thị với thành viên - người tham gia khóa học không thuộc nhóm không thể xem nhóm hoặc thành viên của nhóm
* Chỉ xem tư cách thành viên của mình - người dùng có thể biết mình thuộc nhóm nhưng không thể xem các thành viên khác
* Ẩn - chỉ giáo viên mới có thể xem nhóm và thành viên của nhóm

Người dùng có quyền năng lực xem nhóm ẩn luôn có thể xem tư cách thành viên nhóm.

Lưu ý rằng bạn không thể thay đổi thiết lập này nếu nhóm có thành viên.';
$string['visibilityall'] = 'Hiển thị';
$string['visibilitymembers'] = 'Chỉ hiển thị với thành viên';
$string['visibilitynone'] = 'Ẩn';
$string['visibilityown'] = 'Chỉ xem tư cách thành viên của mình';
$string['visibilityshort'] = 'Khả năng hiển thị';
$string['withselected'] = 'Với mục đã chọn';
