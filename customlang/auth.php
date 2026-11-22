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
 * @subpackage auth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Các plugin xác thực hiện có';
$string['allowaccountssameemail'] = 'Cho phép các tài khoản dùng chung email';
$string['allowaccountssameemail_desc'] = 'Nếu bật, nhiều tài khoản người dùng có thể dùng chung một địa chỉ email. Điều này có thể dẫn đến các vấn đề về bảo mật hoặc quyền riêng tư, chẳng hạn như với email xác nhận đổi mật khẩu.';
$string['alternatelogin'] = 'Nếu nhập URL tại đây, URL đó sẽ được dùng làm trang đăng nhập cho trang này. Trang phải chứa biểu mẫu có thuộc tính action được đặt thành <strong>\'{$a}\'</strong> và trả về các trường <strong>username</strong> và <strong>password</strong>.<br />Hãy cẩn thận để không nhập sai URL, nếu không bạn có thể tự khóa quyền truy cập vào trang này.<br />Để trống cài đặt này để dùng trang đăng nhập mặc định.';
$string['alternateloginurl'] = 'URL đăng nhập thay thế';
$string['auth_changepasswordhelp'] = 'Trợ giúp đổi mật khẩu';
$string['auth_changepasswordhelp_expl'] = 'Hiển thị trợ giúp khôi phục mật khẩu cho người dùng đã quên mật khẩu {$a}. Nội dung này sẽ được hiển thị cùng với hoặc thay cho <strong>URL đổi mật khẩu</strong> hoặc chức năng đổi mật khẩu nội bộ của Moodle.';
$string['auth_changepasswordurl'] = 'URL đổi mật khẩu';
$string['auth_changepasswordurl_expl'] = 'Chỉ định URL để chuyển người dùng đã quên mật khẩu {$a} đến. Đặt <strong>Sử dụng trang đổi mật khẩu tiêu chuẩn</strong> thành <strong>Không</strong>.';
$string['auth_changingemailaddress'] = 'Bạn đã yêu cầu đổi địa chỉ email từ {$a->oldemail} thành {$a->newemail}. Vì lý do bảo mật, chúng tôi sẽ gửi một thông báo đến địa chỉ mới để xác nhận địa chỉ đó thuộc về bạn. Địa chỉ email sẽ được cập nhật ngay khi bạn mở URL được gửi trong thông báo. Liên kết xác nhận sẽ hết hạn sau 10 phút.';
$string['auth_common_settings'] = 'Cài đặt chung';
$string['auth_data_mapping'] = 'Ánh xạ dữ liệu';
$string['auth_fieldlock'] = 'Khóa giá trị';
$string['auth_fieldlock_expl'] = '<p>Khóa giá trị: Nếu được bật, người dùng sẽ không thể chỉnh sửa trường này. Hãy dùng tùy chọn này nếu bạn đang quản lý dữ liệu trong hệ thống xác thực bên ngoài. </p>';
$string['auth_fieldlockfield'] = 'Khóa giá trị ({$a})';
$string['auth_fieldlocks'] = 'Khóa các trường người dùng';
$string['auth_fieldlocks_help'] = '<p>Bạn có thể khóa các trường dữ liệu người dùng. Tùy chọn này hữu ích cho những trang mà quản trị viên quản lý dữ liệu người dùng theo cách thủ công bằng cách chỉnh sửa hồ sơ người dùng hoặc tải lên bằng chức năng \'Tải người dùng lên\'. Nếu khóa các trường Moodle yêu cầu, hãy đảm bảo cung cấp dữ liệu đó khi tạo tài khoản người dùng, nếu không tài khoản sẽ không sử dụng được.</p><p>Hãy cân nhắc đặt chế độ khóa thành \'Mở khóa nếu trống\' để tránh vấn đề này.</p>';
$string['auth_fieldmapping'] = 'Ánh xạ dữ liệu ({$a})';
$string['auth_forgotpasswordrecaptcha'] = 'Bật reCAPTCHA cho chức năng quên mật khẩu';
$string['auth_forgotpasswordrecaptcha_desc'] = 'Thêm thành phần xác nhận bằng hình ảnh/âm thanh vào trang quên mật khẩu. Điều này giúp giảm nguy cơ có yêu cầu đặt lại mật khẩu không hợp lệ. Xem <a href="https://www.google.com/recaptcha">Google reCAPTCHA</a> để biết thêm chi tiết.';
$string['auth_invalidnewemailkey'] = 'Lỗi: nếu bạn đang cố xác nhận việc đổi địa chỉ email, có thể bạn đã sao chép sai URL chúng tôi gửi qua email. Vui lòng sao chép địa chỉ và thử lại.';
$string['auth_loginpasswordtoggle'] = 'Bật/tắt hiển thị mật khẩu';
$string['auth_loginpasswordtoggle_desc'] = 'Thêm biểu tượng vào trường mật khẩu trên màn hình đăng nhập để người dùng có thể hiện hoặc ẩn mật khẩu đã nhập.';
$string['auth_loginrecaptcha'] = 'Bật reCAPTCHA cho đăng nhập';
$string['auth_loginrecaptcha_desc'] = 'Thêm thành phần xác nhận bằng hình ảnh/âm thanh vào trang đăng nhập. Điều này giúp giảm nguy cơ có yêu cầu đăng nhập không hợp lệ. Xem <a href="https://www.google.com/recaptcha">Google reCAPTCHA</a> để biết thêm chi tiết.';
$string['auth_multiplehosts'] = 'Có thể chỉ định nhiều máy chủ HOẶC địa chỉ (ví dụ: host1.com;host2.com;host3.com) hoặc (ví dụ: xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'Phương thức xác thực {$a} chưa được cấu hình.';
$string['auth_outofnewemailupdateattempts'] = 'Bạn đã sử dụng hết số lần cho phép để cập nhật địa chỉ email. Yêu cầu cập nhật của bạn đã bị hủy.';
$string['auth_passwordisexpired'] = 'Mật khẩu của bạn đã hết hạn. Vui lòng đổi mật khẩu ngay.';
$string['auth_passwordwillexpire'] = 'Mật khẩu của bạn sẽ hết hạn sau {$a} ngày. Bạn có muốn đổi mật khẩu ngay bây giờ không?';
$string['auth_remove_delete'] = 'Xóa hoàn toàn tài khoản nội bộ';
$string['auth_remove_keep'] = 'Giữ tài khoản nội bộ';
$string['auth_remove_suspend'] = 'Tạm khóa tài khoản nội bộ';
$string['auth_remove_user'] = 'Chỉ định cách xử lý tài khoản người dùng nội bộ trong quá trình đồng bộ hàng loạt khi người dùng bị xóa khỏi nguồn bên ngoài. Chỉ những người dùng bị tạm khóa mới được tự động khôi phục nếu xuất hiện trở lại trong nguồn bên ngoài.';
$string['auth_remove_user_key'] = 'Người dùng bên ngoài đã bị xóa';
$string['auth_sync_script'] = 'Đồng bộ tài khoản người dùng';
$string['auth_sync_suspended'] = 'Nếu bật, thuộc tính tạm khóa sẽ được dùng để cập nhật trạng thái tạm khóa của tài khoản người dùng cục bộ.';
$string['auth_sync_suspended_key'] = 'Đồng bộ trạng thái tạm khóa của người dùng cục bộ';
$string['auth_updatelocal'] = 'Cập nhật cục bộ';
$string['auth_updatelocal_expl'] = '<p><b>Cập nhật cục bộ:</b> Nếu bật, trường sẽ được cập nhật (từ xác thực bên ngoài) mỗi khi người dùng đăng nhập hoặc khi có hoạt động đồng bộ người dùng. Các trường được đặt để cập nhật cục bộ nên được khóa.</p>';
$string['auth_updatelocalfield'] = 'Cập nhật cục bộ ({$a})';
$string['auth_updateremote'] = 'Cập nhật bên ngoài';
$string['auth_updateremote_expl'] = '<p><b>Cập nhật bên ngoài:</b> Nếu bật, hệ thống xác thực bên ngoài sẽ được cập nhật khi bản ghi người dùng được cập nhật. Các trường cần được mở khóa để cho phép chỉnh sửa.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Lưu ý:</b> Việc cập nhật dữ liệu LDAP bên ngoài yêu cầu bạn đặt binddn và bindpw cho một người dùng liên kết có quyền chỉnh sửa tất cả bản ghi người dùng. Hiện tại, thao tác này không giữ lại các thuộc tính có nhiều giá trị và sẽ xóa các giá trị bổ sung khi cập nhật. </p>';
$string['auth_updateremotefield'] = 'Cập nhật bên ngoài ({$a})';
$string['auth_user_create'] = 'Cho phép tạo người dùng';
$string['auth_user_creation'] = 'Người dùng mới (ẩn danh) có thể tạo tài khoản người dùng trên nguồn xác thực bên ngoài và xác nhận qua email. Nếu bật tùy chọn này, hãy nhớ cấu hình cả các tùy chọn riêng của mô-đun để tạo người dùng.';
$string['auth_usernameexists'] = 'Tên người dùng đã chọn đã tồn tại. Vui lòng chọn tên khác.';
$string['auth_usernotexist'] = 'Không thể cập nhật người dùng không tồn tại: {$a}';
$string['authenticationoptions'] = 'Tùy chọn xác thực';
$string['authinstructions'] = 'Để trống mục này để hiển thị hướng dẫn đăng nhập mặc định trên trang đăng nhập. Nếu muốn cung cấp hướng dẫn đăng nhập tùy chỉnh, hãy nhập nội dung tại đây.';
$string['authloginviaemail'] = 'Cho phép đăng nhập bằng email';
$string['authloginviaemail_desc'] = 'Cho phép người dùng sử dụng cả tên người dùng và địa chỉ email (nếu là duy nhất) để đăng nhập vào trang web.';
$string['auto_add_remote_users'] = 'Tự động thêm người dùng từ xa';
$string['cannotmapfield'] = 'Không thể ánh xạ trường "{$a->fieldname}" vì tên rút gọn "{$a->shortname}" quá dài. Để cho phép ánh xạ trường này, bạn cần rút ngắn tên rút gọn xuống còn {$a->charlimit} ký tự. <a href="{$a->link}">Chỉnh sửa các trường hồ sơ người dùng</a>';
$string['changepassword'] = 'URL đổi mật khẩu';
$string['changepasswordhelp'] = 'URL của trang khôi phục mật khẩu bị mất, sẽ được gửi cho người dùng qua email. Lưu ý rằng thiết lập này không có hiệu lực nếu đã đặt URL khôi phục mật khẩu bị quên trong các thiết lập xác thực chung.';
$string['chooseauthmethod'] = 'Chọn phương thức xác thực';
$string['chooseauthmethod_help'] = 'Thiết lập này xác định phương thức xác thực được sử dụng khi người dùng đăng nhập. Chỉ nên chọn các plugin xác thực đã bật, nếu không người dùng sẽ không thể đăng nhập. Để chặn người dùng đăng nhập, hãy chọn "Không đăng nhập".';
$string['createpassword'] = 'Tạo mật khẩu và thông báo cho người dùng';
$string['createpasswordifneeded'] = 'Tạo mật khẩu nếu cần và gửi qua email';
$string['emailchangecancel'] = 'Hủy thay đổi email';
$string['emailchangepending'] = 'Đang chờ thay đổi. Mở liên kết đã gửi đến {$a->preference_newemail}.';
$string['emailnowexists'] = 'Địa chỉ email bạn định gán cho hồ sơ của mình đã được người khác sử dụng kể từ khi bạn gửi yêu cầu ban đầu. Yêu cầu thay đổi địa chỉ email của bạn đã bị hủy. Bạn có thể thử lại với một địa chỉ khác.';
$string['emailupdate'] = 'Cập nhật địa chỉ email';
$string['emailupdatemessage'] = 'Xin chào {$a->firstname},

Bạn đã yêu cầu thay đổi địa chỉ email cho tài khoản của mình trên {$a->site}.

Để xác nhận thay đổi này, vui lòng nhấp vào liên kết bên dưới:

<a href="{$a->url}">Xác nhận thay đổi email</a>


Liên kết xác nhận sẽ hết hạn sau <strong>10 phút</strong>.

{$a->supportemail}';
$string['emailupdatesuccess'] = 'Địa chỉ email của người dùng <em>{$a->fullname}</em> đã được cập nhật thành công thành <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Xác nhận cập nhật email trên {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Mật khẩu phải có tối đa {$a} ký tự giống nhau liên tiếp.';
$string['errorminpassworddigits'] = 'Mật khẩu phải có ít nhất {$a} chữ số.';
$string['errorminpasswordlength'] = 'Mật khẩu phải có ít nhất {$a} ký tự.';
$string['errorminpasswordlower'] = 'Mật khẩu phải có ít nhất {$a} chữ cái thường.';
$string['errorminpasswordnonalphanum'] = 'Mật khẩu phải có ít nhất {$a} ký tự đặc biệt, chẳng hạn như *, - hoặc #.';
$string['errorminpasswordupper'] = 'Mật khẩu phải có ít nhất {$a} chữ cái hoa.';
$string['errorpasswordreused'] = 'Mật khẩu này đã được sử dụng trước đây và không được phép sử dụng lại.';
$string['errorpasswordupdate'] = 'Lỗi khi cập nhật mật khẩu, mật khẩu chưa được thay đổi.';
$string['eventuserloggedin'] = 'Người dùng đã đăng nhập';
$string['eventuserloggedinas'] = 'Người dùng đã đăng nhập với tư cách người dùng khác';
$string['eventuserloginfailed'] = 'Người dùng đăng nhập thất bại';
$string['forcechangepassword'] = 'Buộc đổi mật khẩu';
$string['forcechangepassword_help'] = 'Buộc người dùng đổi mật khẩu trong lần đăng nhập tiếp theo vào Moodle.';
$string['forcechangepasswordfirst_help'] = 'Buộc người dùng đổi mật khẩu trong lần đăng nhập đầu tiên vào Moodle.';
$string['forgottenpassword'] = 'Nếu bạn nhập URL tại đây, URL đó sẽ được dùng làm trang khôi phục mật khẩu bị mất cho trang này. Tùy chọn này dành cho các trang web xử lý mật khẩu hoàn toàn bên ngoài Moodle. Để trống để sử dụng chức năng khôi phục mật khẩu mặc định.';
$string['forgottenpasswordurl'] = 'URL khôi phục mật khẩu bị quên';
$string['getrecaptchaapi'] = 'Để sử dụng reCAPTCHA, bạn phải lấy khóa API tại <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Nút đăng nhập khách';
$string['incorrectpleasetryagain'] = 'Không chính xác. Vui lòng thử lại.';
$string['infilefield'] = 'Trường bắt buộc trong tệp';
$string['informminpassworddigits'] = 'ít nhất {$a} chữ số';
$string['informminpasswordlength'] = 'ít nhất {$a} ký tự';
$string['informminpasswordlower'] = 'ít nhất {$a} chữ cái thường';
$string['informminpasswordnonalphanum'] = 'ít nhất {$a} ký tự đặc biệt, chẳng hạn như *, - hoặc #';
$string['informminpasswordreuselimit'] = 'Có thể sử dụng lại mật khẩu sau {$a} lần thay đổi';
$string['informminpasswordupper'] = 'ít nhất {$a} chữ cái hoa';
$string['informpasswordpolicy'] = 'Mật khẩu phải có {$a}';
$string['instructions'] = 'Hướng dẫn';
$string['internal'] = 'Nội bộ';
$string['limitconcurrentlogins'] = 'Giới hạn số lần đăng nhập đồng thời';
$string['limitconcurrentlogins_desc'] = 'Nếu bật, số phiên đăng nhập đồng thời trên trình duyệt của mỗi người dùng sẽ bị giới hạn. Khi đạt đến giới hạn, phiên cũ nhất sẽ bị kết thúc. Xin lưu ý rằng người dùng có thể mất mọi công việc chưa lưu. Thiết lập này không tương thích với các plugin xác thực đăng nhập một lần (SSO).';
$string['locked'] = 'Đã khóa';
$string['md5'] = 'Giá trị băm MD5';
$string['nopasswordchange'] = 'Không thể đổi mật khẩu';
$string['nopasswordchangeforced'] = 'Bạn không thể tiếp tục nếu không đổi mật khẩu, nhưng hiện không có trang nào để đổi mật khẩu. Vui lòng liên hệ Quản trị viên Moodle.';
$string['noprofileedit'] = 'Không thể chỉnh sửa hồ sơ';
$string['ntlmsso_attempting'] = 'Đang thử đăng nhập một lần qua NTLM...';
$string['ntlmsso_failed'] = 'Đăng nhập tự động thất bại, hãy thử trang đăng nhập thông thường...';
$string['ntlmsso_isdisabled'] = 'Đăng nhập một lần (SSO) bằng New Technology LAN Manager (NTLM) đã bị tắt.';
$string['passwordhandling'] = 'Xử lý trường mật khẩu';
$string['plaintext'] = 'Văn bản thuần';
$string['pluginnotenabled'] = 'Plugin xác thực \'{$a}\' chưa được bật.';
$string['pluginnotinstalled'] = 'Plugin xác thực \'{$a}\' chưa được cài đặt.';
$string['potentialidps'] = 'Đăng nhập bằng tài khoản của bạn trên:';
$string['privacy:metadata:userpref:createpassword'] = 'Cho biết cần tạo mật khẩu cho người dùng';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Cho biết người dùng có cần đổi mật khẩu khi đăng nhập hay không';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Số lần người dùng đăng nhập thất bại';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Số lần người dùng đăng nhập thất bại kể từ lần đăng nhập thành công gần nhất.';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Ngày ghi nhận lần đăng nhập thất bại gần nhất';
$string['privacy:metadata:userpref:loginlockout'] = 'Tài khoản người dùng có bị khóa do đăng nhập thất bại hay không và ngày tài khoản bị khóa';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Cho biết tài khoản người dùng không bao giờ bị khóa';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Khi tài khoản bị khóa, mã bí mật người dùng phải dùng để mở khóa tài khoản';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA dùng để ngăn chặn hành vi lạm dụng từ các chương trình tự động. Hãy làm theo hướng dẫn để xác minh bạn là người thật. Bạn có thể cần đánh dấu vào ô, nhập các ký tự hiển thị trong hình hoặc chọn một nhóm hình ảnh.

Nếu không chắc các hình ảnh là gì, bạn có thể thử lấy CAPTCHA khác hoặc CAPTCHA âm thanh.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Câu hỏi bảo mật';
$string['selfregistration'] = 'Tự ghi danh';
$string['selfregistration_help'] = 'Nếu chọn một plugin xác thực, chẳng hạn như tự ghi danh qua email, người dùng tiềm năng có thể tự đăng ký và tạo tài khoản. Điều này có thể khiến những kẻ gửi thư rác tạo tài khoản để đăng nội dung rác trong diễn đàn, blog, v.v. Để tránh rủi ro này, nên tắt tính năng tự ghi danh hoặc giới hạn bằng thiết lập <em>Các miền email được phép</em>.';
$string['settingmigrationmismatch'] = 'Phát hiện giá trị không khớp khi sửa tên thiết lập plugin! Plugin xác thực \'{$a->plugin}\' có thiết lập \'{$a->setting}\' được cấu hình thành \'{$a->legacy}\' dưới tên cũ và \'{$a->current}\' dưới tên hiện tại. Giá trị sau đã được đặt làm giá trị hợp lệ, nhưng bạn nên kiểm tra và xác nhận rằng đây là kết quả mong muốn.';
$string['sha1'] = 'Giá trị băm SHA-1';
$string['showguestlogin'] = 'Bạn có thể ẩn hoặc hiện nút đăng nhập khách trên trang đăng nhập.';
$string['showloginform'] = 'Hiển thị biểu mẫu đăng nhập thủ công';
$string['showloginform_desc'] = 'Nếu tất cả người dùng trên trang web sử dụng phương thức xác thực như OAuth 2 không yêu cầu nhập tên người dùng và mật khẩu, bạn có thể ẩn biểu mẫu đăng nhập thủ công. Lưu ý rằng người dùng có tài khoản thủ công sẽ không thể đăng nhập.

Nếu bạn ẩn biểu mẫu đăng nhập thủ công và không thể đăng nhập, bạn có thể hiển thị lại biểu mẫu bằng lệnh php admin/cli/cfg.php --name=showloginform --set=1 trên dòng lệnh.';
$string['stdchangepassword'] = 'Sử dụng trang chuẩn để đổi mật khẩu';
$string['stdchangepassword_expl'] = 'Nếu hệ thống xác thực bên ngoài cho phép đổi mật khẩu thông qua Moodle, hãy chuyển thiết lập này thành Có. Thiết lập này sẽ ghi đè \'URL đổi mật khẩu\'.';
$string['stdchangepassword_explldap'] = 'LƯU Ý: Nên sử dụng LDAP qua đường hầm mã hóa SSL (ldaps://) nếu máy chủ LDAP ở xa.';
$string['suspended'] = 'Tài khoản bị tạm khóa';
$string['suspended_help'] = 'Tài khoản người dùng bị tạm khóa không thể đăng nhập hoặc sử dụng dịch vụ web, và mọi tin nhắn gửi đi sẽ bị loại bỏ.';
$string['testsettings'] = 'Kiểm tra thiết lập';
$string['testsettingsheading'] = 'Kiểm tra thiết lập xác thực - {$a}';
$string['unlocked'] = 'Đã mở khóa';
$string['unlockedifempty'] = 'Mở khóa nếu để trống';
$string['update_never'] = 'Không bao giờ';
$string['update_oncreate'] = 'Khi tạo';
$string['update_onlogin'] = 'Mỗi lần đăng nhập';
$string['update_onupdate'] = 'Khi cập nhật';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() không hỗ trợ loại người dùng đã chọn (chưa)';
$string['username'] = 'Tên người dùng';
$string['username_help'] = 'Xin lưu ý rằng một số plugin xác thực không cho phép bạn thay đổi tên người dùng.';
