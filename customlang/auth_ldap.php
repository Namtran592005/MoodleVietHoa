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
 * @package    auth
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Không thể tạo tài khoản mới trong Active Directory. Hãy đảm bảo bạn đáp ứng mọi yêu cầu để tính năng này hoạt động (kết nối LDAPS, người dùng bind có đủ quyền, v.v.).';
$string['auth_ldap_attrcreators'] = 'Danh sách các nhóm hoặc ngữ cảnh có thành viên được phép tạo thuộc tính. Phân tách nhiều nhóm bằng \\';
$string['auth_ldap_attrcreators_key'] = 'Người tạo thuộc tính';
$string['auth_ldap_auth_user_create_key'] = 'Tạo người dùng bên ngoài';
$string['auth_ldap_bind_dn'] = 'Nếu muốn dùng người dùng bind để tìm kiếm người dùng, hãy chỉ định tại đây. Ví dụ: \'cn=ldapuser,ou=public,o=org\\';
$string['auth_ldap_bind_dn_key'] = 'Tên phân biệt';
$string['auth_ldap_bind_pw'] = 'Mật khẩu của người dùng bind.';
$string['auth_ldap_bind_pw_key'] = 'Mật khẩu';
$string['auth_ldap_bind_settings'] = 'Cài đặt bind';
$string['auth_ldap_changepasswordurl_key'] = 'URL đổi mật khẩu';
$string['auth_ldap_contexts'] = 'Danh sách các ngữ cảnh chứa người dùng. Phân tách các ngữ cảnh bằng \\';
$string['auth_ldap_contexts_key'] = 'Ngữ cảnh';
$string['auth_ldap_create_context'] = 'Nếu bật tính năng tạo người dùng có xác nhận qua email, hãy chỉ định ngữ cảnh nơi người dùng được tạo. Ngữ cảnh này nên khác với ngữ cảnh của những người dùng khác để tránh vấn đề bảo mật. Bạn không cần thêm ngữ cảnh này vào biến ldap_context; Moodle sẽ tự động tìm kiếm người dùng trong ngữ cảnh này.<br /><b>Lưu ý!</b> Bạn phải sửa phương thức user_create() trong tệp auth/ldap/auth.php để tính năng tạo người dùng hoạt động';
$string['auth_ldap_create_context_key'] = 'Ngữ cảnh cho người dùng mới';
$string['auth_ldap_create_error'] = 'Lỗi khi tạo người dùng trong LDAP.';
$string['auth_ldap_expiration_desc'] = 'Chọn \'{$a->no}\' để tắt kiểm tra mật khẩu hết hạn hoặc \'{$a->ldapserver}\' để đọc trực tiếp thời điểm hết hạn mật khẩu từ máy chủ LDAP.';
$string['auth_ldap_expiration_key'] = 'Thời hạn';
$string['auth_ldap_expiration_warning_desc'] = 'Số ngày trước khi gửi cảnh báo mật khẩu sắp hết hạn.';
$string['auth_ldap_expiration_warning_key'] = 'Cảnh báo hết hạn';
$string['auth_ldap_expireattr_desc'] = 'Tùy chọn: Ghi đè thuộc tính LDAP lưu thời điểm hết hạn mật khẩu.';
$string['auth_ldap_expireattr_key'] = 'Thuộc tính hết hạn';
$string['auth_ldap_graceattr_desc'] = 'Tùy chọn: Ghi đè thuộc tính đăng nhập ân hạn';
$string['auth_ldap_gracelogin_key'] = 'Thuộc tính đăng nhập ân hạn';
$string['auth_ldap_gracelogins_desc'] = 'Bật hỗ trợ đăng nhập ân hạn LDAP. Sau khi mật khẩu hết hạn, người dùng có thể đăng nhập cho đến khi số lần đăng nhập ân hạn bằng 0. Bật cài đặt này sẽ hiển thị thông báo đăng nhập ân hạn khi mật khẩu đã hết hạn.';
$string['auth_ldap_gracelogins_key'] = 'Số lần đăng nhập ân hạn';
$string['auth_ldap_groupecreators'] = 'Danh sách nhóm hoặc ngữ cảnh có thành viên được phép tạo nhóm. Phân tách nhiều nhóm bằng \\';
$string['auth_ldap_groupecreators_key'] = 'Người tạo nhóm';
$string['auth_ldap_host_url'] = 'Chỉ định máy chủ LDAP dưới dạng URL, chẳng hạn \'ldap://ldap.myorg.com/\' hoặc \'ldaps://ldap.myorg.com/\'. Phân tách nhiều máy chủ bằng \\';
$string['auth_ldap_host_url_key'] = 'URL máy chủ';
$string['auth_ldap_ldap_encoding'] = 'Bảng mã được máy chủ LDAP sử dụng, thường là utf-8. Nếu chọn LDAP v2, Active Directory sẽ dùng bảng mã đã cấu hình, chẳng hạn cp1252 hoặc cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Bảng mã LDAP';
$string['auth_ldap_login_settings'] = 'Cài đặt đăng nhập';
$string['auth_ldap_memberattribute'] = 'Tùy chọn: Ghi đè thuộc tính thành viên người dùng khi người dùng thuộc một nhóm. Thường là \'member\\';
$string['auth_ldap_memberattribute_isdn'] = 'Ghi đè cách xử lý các giá trị thuộc tính thành viên';
$string['auth_ldap_memberattribute_isdn_key'] = 'Thuộc tính thành viên sử dụng dn';
$string['auth_ldap_memberattribute_key'] = 'Thuộc tính thành viên';
$string['auth_ldap_no_mbstring'] = 'Bạn cần phần mở rộng mbstring để tạo người dùng trong Active Directory.';
$string['auth_ldap_noconnect'] = 'Mô-đun LDAP không thể kết nối với máy chủ: {$a}';
$string['auth_ldap_noconnect_all'] = 'Mô-đun LDAP không thể kết nối với bất kỳ máy chủ nào: {$a}';
$string['auth_ldap_noextension'] = 'Có vẻ như mô-đun PHP LDAP chưa được cài đặt. Hãy đảm bảo mô-đun này đã được cài đặt và bật nếu bạn muốn sử dụng plugin xác thực này.';
$string['auth_ldap_objectclass'] = 'Tùy chọn: Ghi đè objectClass dùng để định danh/tìm kiếm người dùng theo ldap_user_type. Thông thường, bạn không cần thay đổi mục này.';
$string['auth_ldap_objectclass_key'] = 'Lớp đối tượng';
$string['auth_ldap_opt_deref'] = 'Xác định cách xử lý bí danh trong quá trình tìm kiếm. Chọn một trong các giá trị sau: "No" (LDAP_DEREF_NEVER) hoặc "Yes" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Tham chiếu bí danh';
$string['auth_ldap_passtype'] = 'Chỉ định định dạng của mật khẩu mới hoặc được thay đổi trên máy chủ LDAP.';
$string['auth_ldap_passtype_key'] = 'Định dạng mật khẩu';
$string['auth_ldap_passwdexpire_settings'] = 'Cài đặt hết hạn mật khẩu LDAP';
$string['auth_ldap_preventpassindb'] = 'Chọn có để ngăn mật khẩu được lưu trong cơ sở dữ liệu Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Ngăn lưu bộ nhớ đệm mật khẩu';
$string['auth_ldap_rolecontext'] = 'Ngữ cảnh {$a->localname}';
$string['auth_ldap_rolecontext_help'] = 'Ngữ cảnh LDAP dùng để chọn ánh xạ cho <i>{$a->localname}</i>. Phân tách nhiều nhóm bằng \\';
$string['auth_ldap_search_sub'] = 'Tìm kiếm người dùng trong các ngữ cảnh con.';
$string['auth_ldap_search_sub_key'] = 'Tìm kiếm ngữ cảnh con';
$string['auth_ldap_server_settings'] = 'Cài đặt máy chủ LDAP';
$string['auth_ldap_suspended_attribute'] = 'Tùy chọn: Khi được cung cấp, thuộc tính này sẽ được dùng để bật/tạm ngưng tài khoản người dùng được tạo cục bộ.';
$string['auth_ldap_suspended_attribute_key'] = 'Thuộc tính tạm ngưng';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['auth_ldap_update_userinfo'] = 'Cập nhật thông tin người dùng (firstname, lastname, address..) từ LDAP sang Moodle. Chỉ định các cài đặt "Ánh xạ dữ liệu" theo nhu cầu.';
$string['auth_ldap_user_attribute'] = 'Tùy chọn: Ghi đè thuộc tính dùng để định danh/tìm kiếm người dùng. Thường là \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Thuộc tính người dùng';
$string['auth_ldap_user_exists'] = 'Tên người dùng LDAP đã tồn tại.';
$string['auth_ldap_user_settings'] = 'Cài đặt tra cứu người dùng';
$string['auth_ldap_user_type'] = 'Chọn cách lưu trữ người dùng trong LDAP. Cài đặt này cũng xác định cách hoạt động của thời hạn đăng nhập, đăng nhập ân hạn và việc tạo người dùng.';
$string['auth_ldap_user_type_key'] = 'Loại người dùng';
$string['auth_ldap_usertypeundefined'] = 'config.user_type chưa được xác định hoặc hàm ldap_expirationtime2unix không hỗ trợ loại đã chọn!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type chưa được xác định hoặc hàm ldap_unixi2expirationtime không hỗ trợ loại đã chọn!';
$string['auth_ldap_version'] = 'Phiên bản giao thức LDAP mà máy chủ của bạn đang sử dụng.';
$string['auth_ldap_version_key'] = 'Phiên bản';
$string['auth_ldapdescription'] = 'Phương thức này xác thực dựa trên máy chủ Lightweight Directory Access Protocol (LDAP) bên ngoài. Nếu tên đăng nhập và mật khẩu đã cho hợp lệ, Moodle sẽ tạo một mục người dùng mới trong cơ sở dữ liệu. Plugin này có thể đọc thuộc tính người dùng từ LDAP và điền trước các trường mong muốn trong Moodle. Với các lần đăng nhập sau, chỉ tên đăng nhập và mật khẩu được kiểm tra.';
$string['auth_ldapextrafields'] = 'Các trường này không bắt buộc. Bạn có thể chọn điền trước một số trường người dùng Moodle bằng thông tin từ <b>các trường LDAP</b> mà bạn chỉ định tại đây. <p>Nếu để trống các trường này, sẽ không có thông tin nào được chuyển từ LDAP và thay vào đó sẽ dùng các giá trị mặc định của Moodle.</p><p>Trong cả hai trường hợp, người dùng vẫn có thể chỉnh sửa tất cả các trường này sau khi đăng nhập.</p>';
$string['auth_ldapnotinstalled'] = 'Không thể sử dụng xác thực LDAP. Mô-đun PHP LDAP chưa được cài đặt.';
$string['auth_ntlmsso'] = 'Đăng nhập một lần (SSO) bằng New Technology LAN Manager (NTLM)';
$string['auth_ntlmsso_enabled'] = 'Đặt thành có để thử đăng nhập một lần (SSO) với miền NTLM. Lưu ý rằng cần cấu hình bổ sung trên máy chủ để tính năng này hoạt động. Xem tài liệu <a href="https://docs.moodle.org/en/NTLM_authentication">Xác thực NTLM</a> để biết chi tiết.';
$string['auth_ntlmsso_enabled_key'] = 'Bật';
$string['auth_ntlmsso_ie_fastpath'] = 'Đặt để bật đường dẫn nhanh NTLM SSO (bỏ qua một số bước nếu trình duyệt của máy khách là MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Thử NTLM với tất cả trình duyệt';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Đường dẫn nhanh Microsoft Internet Explorer (MS IE)';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Có, thử NTLM với các trình duyệt khác';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Có, các trình duyệt khác dùng biểu mẫu đăng nhập tiêu chuẩn';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Không thể trích xuất tên người dùng từ tiêu đề REMOTE_USER. Định dạng đã cấu hình có đúng không?';
$string['auth_ntlmsso_missing_username'] = 'Bạn cần chỉ định ít nhất %username% trong định dạng tên người dùng từ xa';
$string['auth_ntlmsso_remoteuserformat'] = 'Nếu đã chọn \'NTLM\' trong \'Loại xác thực\', bạn có thể chỉ định định dạng tên người dùng từ xa tại đây. Nếu để trống, định dạng mặc định DOMAIN\\\\username sẽ được dùng. Bạn có thể sử dụng chỗ giữ chỗ tùy chọn <b>%domain%</b> để chỉ định vị trí tên miền xuất hiện và chỗ giữ chỗ bắt buộc <b>%username%</b> để chỉ định vị trí tên người dùng xuất hiện. <br /><br />Một số định dạng thường dùng là <tt>%domain%\\\\%username%</tt> (mặc định MS Windows), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> và chỉ <tt>%username%</tt> (nếu không có phần tên miền).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Định dạng tên người dùng từ xa';
$string['auth_ntlmsso_subnet'] = 'Nếu được đặt, chỉ thử SSO với máy khách trong mạng con này. Định dạng: xxx.xxx.xxx.xxx/bitmask. Phân tách nhiều mạng con bằng \',\' (dấu phẩy).';
$string['auth_ntlmsso_subnet_key'] = 'Mạng con';
$string['auth_ntlmsso_type'] = 'Phương thức xác thực được cấu hình trên máy chủ web để xác thực người dùng. Nếu không chắc, hãy chọn NTLM.';
$string['auth_ntlmsso_type_key'] = 'Loại xác thực';
$string['cannotmaprole'] = 'Không thể ánh xạ vai trò "{$a->rolename}" vì tên rút gọn "{$a->shortname}" quá dài và/hoặc chứa dấu gạch nối. Để cho phép ánh xạ, cần rút ngắn tên này xuống tối đa {$a->charlimit} ký tự và xóa mọi dấu gạch nối. <a href="{$a->link}">Chỉnh sửa vai trò</a>';
$string['connectingldap'] = 'Đang kết nối với máy chủ LDAP...';
$string['connectingldapsuccess'] = 'Kết nối với máy chủ LDAP của bạn thành công';
$string['creatingtemptable'] = 'Đang tạo bảng tạm {$a}';
$string['diag_contextnotfound'] = 'Ngữ cảnh {$a} không tồn tại hoặc không thể được bind DN đọc.';
$string['diag_emptycontext'] = 'Đã tìm thấy ngữ cảnh trống.';
$string['diag_genericerror'] = 'Lỗi LDAP {$a->code} khi đọc {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Nhóm {$a->group} cho vai trò {$a->localname} không tồn tại hoặc không thể được bind DN đọc.';
$string['diag_toooldversion'] = 'Rất ít khả năng máy chủ LDAP hiện đại sử dụng giao thức LDAPv2. Cài đặt sai có thể làm hỏng giá trị trong các trường người dùng. Hãy kiểm tra với quản trị viên LDAP của bạn.';
$string['didntfindexpiretime'] = 'password_expire() không tìm thấy thời điểm hết hạn.';
$string['didntgetusersfromldap'] = 'Không nhận được người dùng nào từ LDAP -- có lỗi không? -- đang thoát';
$string['gotcountrecordsfromldap'] = 'Đã nhận {$a} bản ghi từ LDAP';
$string['invalidusererrors'] = 'Cảnh báo: Đã bỏ qua việc tạo {$a} tài khoản người dùng.';
$string['invaliduserexception'] = 'Lỗi: Không thể tạo tài khoản người dùng mới. Chi tiết và nguyên nhân:
{$a}
Đang bỏ qua người dùng này.';
$string['ldapnotconfigured'] = 'URL máy chủ LDAP hiện chưa được cấu hình';
$string['morethanoneuser'] = 'Tìm thấy nhiều hơn một bản ghi người dùng trong LDAP. Chỉ sử dụng bản ghi đầu tiên.';
$string['needbcmath'] = 'Bạn cần phần mở rộng BCMath để sử dụng chức năng kiểm tra mật khẩu hết hạn với Active Directory.';
$string['needmbstring'] = 'Bạn cần phần mở rộng mbstring để thay đổi mật khẩu trong Active Directory';
$string['nodnforusername'] = 'Lỗi trong user_update_password(). Không có DN cho: {$a->username}';
$string['noemail'] = 'Đã thử gửi email cho bạn nhưng không thành công!';
$string['notcalledfromserver'] = 'Không nên được gọi từ máy chủ web!';
$string['noupdatestobedone'] = 'Không có nội dung cập nhật nào cần thực hiện';
$string['nouserentriestoremove'] = 'Không có mục người dùng nào cần xóa';
$string['nouserentriestorevive'] = 'Không có mục người dùng nào cần khôi phục';
$string['nouserstobeadded'] = 'Không có mục người dùng nào cần thêm';
$string['ntlmsso_attempting'] = 'Đang thử đăng nhập một lần qua NTLM...';
$string['ntlmsso_failed'] = 'Tự động đăng nhập không thành công, hãy thử trang đăng nhập thông thường...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO đã bị tắt.';
$string['ntlmsso_unknowntype'] = 'Loại NTLM SSO không xác định.';
$string['pagedresultsnotsupp'] = 'LDAP không hỗ trợ kết quả phân trang (phiên bản PHP của bạn có thể không hỗ trợ, bạn đã cấu hình Moodle dùng giao thức LDAP phiên bản 2, hoặc Moodle không thể liên hệ máy chủ LDAP để kiểm tra xem có hỗ trợ phân trang hay không.)';
$string['pagesize'] = 'Đảm bảo giá trị này nhỏ hơn giới hạn kích thước tập kết quả của máy chủ LDAP (số mục nhập tối đa có thể trả về trong một truy vấn)';
$string['pagesize_key'] = 'Kích thước trang';
$string['pluginname'] = 'Máy chủ LDAP';
$string['pluginnotenabled'] = 'Plugin chưa được bật!';
$string['privacy:metadata'] = 'Plugin xác thực máy chủ LDAP không lưu trữ dữ liệu cá nhân nào.';
$string['renamingnotallowed'] = 'Không cho phép đổi tên người dùng trong LDAP';
$string['rootdseerror'] = 'Lỗi khi truy vấn rootDSE cho Active Directory';
$string['start_tls'] = 'Sử dụng dịch vụ LDAP thông thường (cổng 389) với mã hóa TLS.';
$string['start_tls_key'] = 'Sử dụng Transport Layer Security (TLS)';
$string['sync_updateuserchunk'] = 'Đặt giá trị này bằng số người dùng bạn muốn cập nhật trong mỗi giao dịch. Đặt thành 0 sẽ cập nhật tất cả người dùng trong một giao dịch.';
$string['sync_updateuserchunk_key'] = 'Kích thước lô cập nhật người dùng khi đồng bộ hóa';
$string['syncroles'] = 'Đồng bộ hóa vai trò hệ thống từ LDAP';
$string['synctask'] = 'Tác vụ đồng bộ hóa người dùng LDAP';
$string['systemrolemapping'] = 'Ánh xạ vai trò hệ thống';
$string['updatepasserror'] = 'Lỗi trong user_update_password(). Mã lỗi: {$a->errno}; Chuỗi lỗi: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Lỗi trong user_update_password() khi đọc thời điểm hết hạn mật khẩu. Mã lỗi: {$a->errno}; Chuỗi lỗi: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Lỗi trong user_update_password() khi sửa thời điểm hết hạn và/hoặc số lần đăng nhập ân hạn. Mã lỗi: {$a->errno}; Chuỗi lỗi: {$a->errstring}';
$string['updateremfail'] = 'Lỗi khi cập nhật bản ghi LDAP. Mã lỗi: {$a->errno}; Chuỗi lỗi: {$a->errstring}<br/>Khóa ({$a->key}) - giá trị Moodle cũ: \'{$a->ouvalue}\' giá trị mới: \'{$a->nuvalue}\\';
$string['updateremfailamb'] = 'Không thể cập nhật LDAP do trường {$a->key} không rõ ràng; giá trị Moodle cũ: \'{$a->ouvalue}\', giá trị mới: \'{$a->nuvalue}\\';
$string['updateusernotfound'] = 'Không tìm thấy người dùng khi cập nhật từ bên ngoài. Chi tiết: cơ sở tìm kiếm: \'{$a->userdn}\\';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['useracctctrlerror'] = 'Lỗi khi lấy userAccountControl cho {$a}';
$string['userentriestoadd'] = 'Mục người dùng cần thêm: {$a}';
$string['userentriestoremove'] = 'Mục người dùng cần xóa: {$a}';
$string['userentriestorevive'] = 'Mục người dùng cần khôi phục: {$a}';
$string['userentriestoupdate'] = 'Mục người dùng cần cập nhật: {$a}';
$string['usernotfound'] = 'Không tìm thấy người dùng trong LDAP';
