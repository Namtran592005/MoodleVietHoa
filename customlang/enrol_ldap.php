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
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Đang gán vai trò \'{$a->role_shortname}\' cho người dùng \'{$a->user_username}\' vào khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Không thể gán vai trò \'{$a->role_shortname}\' cho người dùng \'{$a->user_username}\' vào khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = '<p>Khóa học có thể được tạo tự động nếu có ghi danh vào một khóa học chưa tồn tại trong Moodle.</p><p>Nếu sử dụng tính năng tự động tạo khóa học, bạn nên gỡ các quyền năng lực sau khỏi những vai trò liên quan: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname và moodle/course:changesummary, để ngăn việc chỉnh sửa bốn trường khóa học đã nêu ở trên (số ID, tên ngắn, tên đầy đủ và phần tóm tắt).</p>';
$string['autocreate_key'] = 'Tự động tạo';
$string['autocreation_settings'] = 'Cài đặt tự động tạo khóa học';
$string['autoupdate_settings'] = 'Cài đặt tự động cập nhật khóa học';
$string['autoupdate_settings_desc'] = '<p>Chọn các trường cần cập nhật khi tác vụ đã lên lịch \'Đồng bộ ghi danh LDAP\' đang chạy.</p><p>Việc cập nhật sẽ diễn ra khi có ít nhất một trường được chọn.</p>';
$string['bind_dn'] = 'Nếu muốn dùng người dùng bind để tìm kiếm người dùng, hãy chỉ định tại đây. Ví dụ: \'cn=ldapuser,ou=public,o=org\\';
$string['bind_dn_key'] = 'Tên phân biệt của người dùng bind';
$string['bind_pw'] = 'Mật khẩu của người dùng bind';
$string['bind_pw_key'] = 'Mật khẩu';
$string['bind_settings'] = 'Cài đặt bind';
$string['cannotcreatecourse'] = 'Không thể tạo khóa học: thiếu dữ liệu bắt buộc trong bản ghi LDAP!';
$string['cannotupdatecourse'] = 'Không thể cập nhật khóa học: thiếu dữ liệu bắt buộc trong bản ghi LDAP! Số ID khóa học: \'{$a->idnumber}\\';
$string['cannotupdatecourse_duplicateshortname'] = 'Không thể cập nhật khóa học: tên ngắn bị trùng. Bỏ qua khóa học có số ID \'{$a->idnumber}\'...';
$string['category'] = 'Danh mục dành cho các khóa học được tạo tự động';
$string['category_key'] = 'Danh mục';
$string['contexts'] = 'Ngữ cảnh LDAP';
$string['couldnotfinduser'] = 'Không tìm thấy người dùng \'{$a}\', đang bỏ qua';
$string['course_fullname'] = 'Không bắt buộc: thuộc tính LDAP để lấy tên đầy đủ';
$string['course_fullname_key'] = 'Tên đầy đủ';
$string['course_fullname_updateonsync'] = 'Cập nhật tên đầy đủ trong quá trình chạy tập lệnh đồng bộ';
$string['course_fullname_updateonsync_key'] = 'Cập nhật tên đầy đủ';
$string['course_idnumber'] = 'Thuộc tính LDAP để lấy số ID khóa học. Thường là \'cn\' hoặc \'uid\'.';
$string['course_idnumber_key'] = 'Số ID';
$string['course_search_sub'] = 'Tìm kiếm tư cách thành viên nhóm trong các ngữ cảnh con';
$string['course_search_sub_key'] = 'Tìm kiếm ngữ cảnh con';
$string['course_settings'] = 'Cài đặt ghi danh khóa học';
$string['course_shortname'] = 'Không bắt buộc: thuộc tính LDAP để lấy tên ngắn';
$string['course_shortname_key'] = 'Tên ngắn';
$string['course_shortname_updateonsync'] = 'Cập nhật tên ngắn trong quá trình chạy tập lệnh đồng bộ';
$string['course_shortname_updateonsync_key'] = 'Cập nhật tên ngắn';
$string['course_summary'] = 'Không bắt buộc: thuộc tính LDAP để lấy phần tóm tắt';
$string['course_summary_key'] = 'Phần tóm tắt';
$string['course_summary_updateonsync'] = 'Cập nhật phần tóm tắt trong quá trình chạy tập lệnh đồng bộ';
$string['course_summary_updateonsync_key'] = 'Cập nhật phần tóm tắt';
$string['coursenotexistskip'] = 'Khóa học \'{$a}\' không tồn tại và tính năng tự động tạo đã tắt, đang bỏ qua';
$string['courseupdated'] = 'Đã cập nhật thành công khóa học có số ID \'{$a->idnumber}\'.';
$string['courseupdateskipped'] = 'Khóa học có số ID \'{$a->idnumber}\' không cần cập nhật. Đang bỏ qua...';
$string['createcourseextid'] = 'CREATE Người dùng được ghi danh vào khóa học không tồn tại \'{$a->courseextid}\\';
$string['createnotcourseextid'] = 'Người dùng được ghi danh vào khóa học không tồn tại \'{$a->courseextid}\\';
$string['creatingcourse'] = 'Đang tạo khóa học \'{$a}\'...';
$string['duplicateshortname'] = 'Không thể tạo khóa học. Tên ngắn bị trùng. Bỏ qua khóa học có số ID \'{$a->idnumber}\'...';
$string['editlock'] = 'Giá trị khóa';
$string['emptyenrolment'] = 'Ghi danh trống cho vai trò \'{$a->role_shortname}\' trong khóa học \'{$a->course_shortname}\'';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Ghi danh người dùng \'{$a->user_username}\' vào khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Đã bật ghi danh cho người dùng \'{$a->user_username}\' trong khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['extcourseidinvalid'] = 'ID ngoài của khóa học không hợp lệ!';
$string['extremovedsuspend'] = 'Đã tắt ghi danh cho người dùng \'{$a->user_username}\' trong khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Đã tắt ghi danh và gỡ các vai trò của người dùng \'{$a->user_username}\' trong khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Hủy ghi danh người dùng \'{$a->user_username}\' khỏi khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Thất bại!';
$string['general_options'] = 'Tùy chọn chung';
$string['group_memberofattribute'] = 'Tên thuộc tính chỉ định các nhóm mà một người dùng hoặc nhóm thuộc về (ví dụ: memberOf, groupMembership, v.v.)';
$string['group_memberofattribute_key'] = 'Thuộc tính \'Thành viên của\\';
$string['host_url'] = 'Chỉ định máy chủ LDAP theo định dạng URL, chẳng hạn \'ldap://ldap.myorg.com/\' hoặc \'ldaps://ldap.myorg.com/\\';
$string['host_url_key'] = 'URL máy chủ';
$string['idnumber_attribute'] = 'Nếu tư cách thành viên nhóm chứa tên phân biệt, hãy chỉ định cùng thuộc tính đã dùng để ánh xạ \'Số ID\' của người dùng trong cài đặt xác thực LDAP.';
$string['idnumber_attribute_key'] = 'Thuộc tính số ID';
$string['ignorehiddencourses'] = 'Bỏ qua các khóa học ẩn';
$string['ignorehiddencourses_desc'] = 'Nếu bật, người dùng sẽ không được ghi danh vào các khóa học được đặt là không khả dụng đối với học viên.';
$string['ldap_encoding'] = 'Chỉ định bảng mã mà máy chủ LDAP sử dụng; thường là utf-8. Microsoft Active Directory (AD) v2 sử dụng bảng mã mặc định của nền tảng, chẳng hạn cp1252, cp1250, v.v.';
$string['ldap_encoding_key'] = 'Bảng mã LDAP';
$string['ldap:manage'] = 'Quản lý các phiên bản ghi danh LDAP';
$string['memberattribute'] = 'Thuộc tính thành viên LDAP';
$string['memberattribute_isdn'] = 'Nếu tư cách thành viên nhóm chứa tên phân biệt, bạn cần chỉ định chúng tại đây. Nếu vậy, bạn cũng cần cấu hình các cài đặt còn lại trong mục này.';
$string['memberattribute_isdn_key'] = 'Thuộc tính thành viên sử dụng dn';
$string['nested_groups'] = 'Bạn có muốn sử dụng nhóm lồng nhau (nhóm trong nhóm) để ghi danh không?';
$string['nested_groups_key'] = 'Nhóm lồng nhau';
$string['nested_groups_settings'] = 'Cài đặt nhóm lồng nhau';
$string['nosuchrole'] = 'Không có vai trò như vậy: \'{$a}\'';
$string['objectclass'] = 'objectClass dùng để tìm kiếm khóa học. Thường là \'group\' hoặc \'posixGroup\\';
$string['objectclass_key'] = 'Lớp đối tượng';
$string['ok'] = 'OK!';
$string['opt_deref'] = 'Nếu tư cách thành viên nhóm chứa tên phân biệt, hãy chỉ định cách xử lý bí danh khi tìm kiếm. Chọn một trong các giá trị sau: \'No\' (LDAP_DEREF_NEVER) hoặc \'Yes\' (LDAP_DEREF_ALWAYS).';
$string['opt_deref_key'] = 'Bỏ tham chiếu bí danh';
$string['phpldap_noextension'] = 'Có vẻ như mô-đun PHP LDAP chưa được cài đặt. Hãy đảm bảo mô-đun được cài đặt và bật nếu bạn muốn sử dụng trình bổ trợ ghi danh này.';
$string['pluginname'] = 'Ghi danh LDAP';
$string['pluginname_desc'] = '<p>Bạn có thể dùng máy chủ Lightweight Directory Access Protocol (LDAP) để quản lý việc ghi danh. Cây LDAP được giả định là chứa các nhóm ánh xạ tới các khóa học và mỗi nhóm/khóa học có các mục thành viên ánh xạ tới học viên. Ngoài ra, khóa học được định nghĩa là các nhóm trong LDAP, mỗi nhóm có nhiều trường thành viên (<em>member</em> hoặc <em>memberUid</em>) chứa thông tin nhận dạng duy nhất của người dùng.</p><p>Để sử dụng ghi danh LDAP, người dùng <strong>phải</strong> có trường Số ID hợp lệ. Các nhóm LDAP phải có Số ID đó trong trường thành viên thì người dùng mới được ghi danh vào khóa học. Cách này hoạt động tốt với Xác thực LDAP.</p><p>Ghi danh được cập nhật khi người dùng đăng nhập. Bạn cũng có thể chạy tập lệnh <em>enrol/ldap/cli/sync.php</em> để đồng bộ hóa ghi danh.</p><p>Bạn cũng có thể cấu hình trình bổ trợ này để tự động tạo khóa học mới khi có nhóm mới xuất hiện trong LDAP.</p>';
$string['pluginnotenabled'] = 'Trình bổ trợ chưa được bật!';
$string['privacy:metadata'] = 'Trình bổ trợ ghi danh LDAP không lưu trữ dữ liệu cá nhân nào.';
$string['role_mapping'] = '<p>Đối với mỗi vai trò, bạn cần chỉ định tất cả ngữ cảnh LDAP chứa các nhóm đại diện cho khóa học. Phân tách các ngữ cảnh bằng dấu chấm phẩy (;).</p><p>Bạn cũng cần chỉ định thuộc tính mà máy chủ LDAP dùng để lưu thành viên của nhóm. Thuộc tính này thường là \'member\' hoặc \'memberUid\'.</p>';
$string['role_mapping_attribute'] = 'Thuộc tính thành viên LDAP cho {$a}';
$string['role_mapping_context'] = 'Ngữ cảnh LDAP cho {$a}';
$string['role_mapping_key'] = 'Ánh xạ vai trò từ LDAP';
$string['roles'] = 'Ánh xạ vai trò';
$string['server_settings'] = 'Cài đặt máy chủ LDAP';
$string['synccourserole'] = '== Đang đồng bộ khóa học \'{$a->idnumber}\' cho vai trò \'{$a->role_shortname}\'';
$string['syncenrolmentstask'] = 'Tác vụ đồng bộ ghi danh LDAP';
$string['template'] = 'Không bắt buộc: các khóa học được tạo tự động có thể sao chép cài đặt từ một khóa học mẫu';
$string['template_key'] = 'Mẫu';
$string['unassignrole'] = 'Đang gỡ gán vai trò \'{$a->role_shortname}\' của người dùng \'{$a->user_username}\' khỏi khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Không thể gỡ gán vai trò \'{$a->role_shortname}\' của người dùng \'{$a->user_username}\' khỏi khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignroleid'] = 'Đang gỡ gán vai trò có id \'{$a->role_id}\' của người dùng có id \'{$a->user_id}\'';
$string['updatelocal'] = 'Cập nhật dữ liệu cục bộ';
$string['user_attribute'] = 'Nếu tư cách thành viên nhóm chứa tên phân biệt, hãy chỉ định thuộc tính dùng để đặt tên/tìm kiếm người dùng. Nếu bạn đang sử dụng xác thực LDAP, giá trị này phải khớp với thuộc tính được chỉ định trong phần ánh xạ \'Số ID\' của trình bổ trợ xác thực LDAP.';
$string['user_attribute_key'] = 'Thuộc tính số ID';
$string['user_contexts'] = 'Nếu tư cách thành viên nhóm chứa tên phân biệt, hãy chỉ định danh sách ngữ cảnh chứa người dùng. Phân tách các ngữ cảnh bằng dấu chấm phẩy (;). Ví dụ: \'ou=users,o=org; ou=others,o=org\'.';
$string['user_contexts_key'] = 'Ngữ cảnh';
$string['user_search_sub'] = 'Nếu tư cách thành viên nhóm chứa tên phân biệt, hãy chỉ định có tìm kiếm người dùng trong các ngữ cảnh con hay không.';
$string['user_search_sub_key'] = 'Tìm kiếm ngữ cảnh con';
$string['user_settings'] = 'Cài đặt tra cứu người dùng';
$string['user_type'] = 'Nếu tư cách thành viên nhóm chứa tên phân biệt, hãy chỉ định cách lưu trữ người dùng trong LDAP';
$string['user_type_key'] = 'Loại người dùng';
$string['version'] = 'Phiên bản giao thức LDAP mà máy chủ của bạn đang sử dụng';
$string['version_key'] = 'Phiên bản';
