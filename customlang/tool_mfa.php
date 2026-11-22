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
 * @subpackage mfa
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Trọng số đạt được';
$string['added'] = 'Đã thêm';
$string['alltime'] = 'Mọi thời điểm';
$string['areyousure'] = 'Bạn có chắc chắn muốn xóa yếu tố này không?';
$string['backtologin'] = 'Quay lại đăng nhập';
$string['cancellogin'] = 'Hủy đăng nhập';
$string['combination'] = 'Kết hợp';
$string['confirmationreplace'] = 'Bạn sẽ được yêu cầu thiết lập một \'{$a}\' khác ngay lập tức. Hãy đảm bảo bạn sẵn sàng hoàn tất quá trình thiết lập.';
$string['confirmationrevoke'] = 'Bạn sẽ không thể dùng \'{$a}\' để đăng nhập vào trang này nữa.';
$string['connector'] = 'VÀ';
$string['debugmode:heading'] = 'Chế độ gỡ lỗi';
$string['devicename'] = 'Thiết bị';
$string['editfactor'] = 'Chỉnh sửa cài đặt cho yếu tố {$a}';
$string['email:subject'] = 'Không thể đăng nhập vào {$a}';
$string['enablefactor'] = 'Bật yếu tố';
$string['entercode'] = 'Nhập mã';
$string['error:actionnotfound'] = 'Không hỗ trợ hành động \'{$a}\\';
$string['error:couldnotreplace'] = 'Không thể thay thế yếu tố này.';
$string['error:directaccess'] = 'Không nên truy cập trực tiếp vào trang này';
$string['error:factornotenabled'] = 'Yếu tố xác thực đa yếu tố \'{$a}\' chưa được bật';
$string['error:factornotfound'] = 'Không tìm thấy yếu tố xác thực đa yếu tố \'{$a}\\';
$string['error:isguestuser'] = 'Khách không được phép truy cập vào đây.';
$string['error:notenoughfactors'] = 'Không thể xác thực';
$string['error:reauth'] = 'Chúng tôi không thể xác nhận danh tính của bạn đủ mức để đáp ứng chính sách bảo mật xác thực của trang web.<br>Nguyên nhân có thể là: <br> 1) Các bước đã bị khóa - vui lòng đợi vài phút rồi thử lại.
     <br> 2) Các bước đã thất bại - vui lòng kiểm tra kỹ thông tin của từng bước. <br> 3) Các bước đã bị bỏ qua - vui lòng tải lại trang này hoặc thử đăng nhập lại.';
$string['error:revoke'] = 'Không thể xóa yếu tố';
$string['error:setupfactor'] = 'Không thể thiết lập yếu tố';
$string['error:support'] = 'Nếu bạn vẫn không thể đăng nhập hoặc cho rằng thông báo này xuất hiện do lỗi, vui lòng gửi email đến:';
$string['error:wrongfactorid'] = 'ID yếu tố \'{$a}\' không chính xác';
$string['event:failfactor'] = 'Xác thực đa yếu tố thất bại do một yếu tố không đạt.';
$string['event:faillockout'] = 'Xác thực đa yếu tố thất bại do có quá nhiều lần thử.';
$string['event:failnotenoughfactors'] = 'Xác thực đa yếu tố thất bại do chưa đủ số yếu tố được đáp ứng.';
$string['event:userdeletedfactor'] = 'Đã xóa yếu tố';
$string['event:userfailedmfa'] = 'Người dùng xác thực đa yếu tố không thành công';
$string['event:userpassedmfa'] = 'Xác minh thành công';
$string['event:userrevokedfactor'] = 'Thu hồi yếu tố';
$string['event:usersetupfactor'] = 'Thiết lập yếu tố';
$string['factor'] = 'Yếu tố';
$string['factorreplace'] = 'Đã thay thế thành công yếu tố \'{$a}\'.';
$string['factorreport'] = 'Báo cáo tất cả yếu tố';
$string['factorreset'] = 'Yếu tố xác thực đa yếu tố \'{$a->factor}\' của bạn đã được quản trị viên trang web đặt lại. Bạn có thể cần thiết lập lại yếu tố này. {$a->url}';
$string['factorresetall'] = 'Tất cả các yếu tố xác thực đa yếu tố của bạn đã được quản trị viên trang web đặt lại. Bạn có thể cần thiết lập lại các yếu tố này. {$a}';
$string['factorrevoked'] = 'Đã xóa thành công \'{$a}\'.';
$string['factorsetup'] = 'Đã thiết lập thành công \'{$a}\'.';
$string['fallback'] = 'Yếu tố dự phòng';
$string['fallback_info'] = 'Yếu tố này dùng làm phương án dự phòng nếu chưa cấu hình yếu tố nào khác. Yếu tố này luôn không đạt.';
$string['guidance'] = 'Hướng dẫn sử dụng xác thực đa yếu tố';
$string['inputrequired'] = 'Thông tin nhập của người dùng';
$string['ipatcreation'] = 'Địa chỉ IP tại thời điểm tạo yếu tố';
$string['lastused'] = 'Lần sử dụng gần nhất';
$string['locked'] = '{$a} (Không khả dụng)';
$string['lockedusersforallfactors'] = 'Người dùng bị khóa: Tất cả yếu tố';
$string['lockedusersforfactor'] = 'Người dùng bị khóa: {$a}';
$string['lockoutnotification'] = 'Bạn còn {$a} lần thử.';
$string['logintitle'] = 'Chúng tôi cần xác minh danh tính của bạn';
$string['managefactor'] = 'Quản lý yếu tố';
$string['mfa'] = 'Xác thực đa yếu tố';
$string['mfa:intro'] = 'Tăng cường bảo mật tài khoản bằng cách yêu cầu thêm một phương thức xác minh khi bạn đăng nhập.';
$string['mfa:mfaaccess'] = 'Tương tác với MFA';
$string['mfareports'] = 'Báo cáo MFA';
$string['mfasettings'] = 'Quản lý xác thực đa yếu tố';
$string['na'] = 'không áp dụng';
$string['needhelp'] = 'Bạn cần trợ giúp?';
$string['nologinusers'] = 'Chưa đăng nhập';
$string['nonauthusers'] = 'Đang chờ MFA';
$string['overall'] = 'Tổng quan';
$string['pending'] = 'Đang chờ';
$string['performbulk'] = 'Thao tác hàng loạt';
$string['pluginname'] = 'Xác thực đa yếu tố';
$string['preferences:activefactors'] = 'Các yếu tố đang hoạt động';
$string['preferences:availablefactors'] = 'Các yếu tố khả dụng';
$string['preferences:header'] = 'Tùy chọn xác thực đa yếu tố';
$string['preferenceslink'] = 'Nhấp vào đây để đến tùy chọn người dùng.';
$string['privacy:metadata:tool_mfa'] = 'Dữ liệu về các yếu tố MFA đã cấu hình';
$string['privacy:metadata:tool_mfa_auth'] = 'Thời điểm gần nhất ghi nhận xác thực đa yếu tố thành công cho một ID người dùng.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Thời điểm người dùng được xác thực lần cuối bằng';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Người dùng liên kết với dấu thời gian này.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Mã bí mật tạm thời dùng để xác thực người dùng.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Yếu tố liên kết với mã bí mật này.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Mã bảo mật bí mật.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'ID phiên liên kết với mã bí mật này.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Người dùng liên kết với mã bí mật này.';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP được dùng để thiết lập yếu tố.';
$string['privacy:metadata:tool_mfa:factor'] = 'Loại yếu tố';
$string['privacy:metadata:tool_mfa:id'] = 'ID bản ghi';
$string['privacy:metadata:tool_mfa:label'] = 'Nhãn cho phiên bản yếu tố, ví dụ: thiết bị hoặc email.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Thời điểm người dùng được xác minh lần cuối bằng yếu tố này';
$string['privacy:metadata:tool_mfa:secret'] = 'Mọi dữ liệu bí mật của yếu tố';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Thời điểm thiết lập phiên bản yếu tố.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Thời điểm yếu tố được sửa đổi lần cuối';
$string['privacy:metadata:tool_mfa:userid'] = 'ID của người dùng sở hữu yếu tố đó';
$string['redirecterrordetected'] = 'Phát hiện chuyển hướng không được hỗ trợ, đã kết thúc thực thi tập lệnh. Đã xảy ra lỗi chuyển hướng giữa MFA và {$a}.';
$string['remove'] = 'Xóa';
$string['replace'] = 'Thay thế';
$string['replacefactor'] = 'Thay thế yếu tố';
$string['resetconfirm'] = 'Đặt lại yếu tố của người dùng';
$string['resetfactor'] = 'Đặt lại các yếu tố xác thực của người dùng';
$string['resetfactorconfirm'] = 'Bạn có chắc muốn đặt lại yếu tố này cho {$a} không?';
$string['resetfactorplaceholder'] = 'Tên đăng nhập hoặc email';
$string['resetsuccess'] = 'Đã đặt lại thành công yếu tố \'{$a->factor}\' cho người dùng \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Đã đặt lại thành công yếu tố \'{$a}\' cho những người dùng được cung cấp.';
$string['resetuser'] = 'Người dùng:';
$string['revokefactor'] = 'Xóa yếu tố';
$string['selectfactor'] = 'Chọn yếu tố cần đặt lại:';
$string['selectperiod'] = 'Chọn khoảng thời gian hồi cứu cho báo cáo:';
$string['settings:combinations'] = 'Tóm tắt các điều kiện đạt yêu cầu để đăng nhập';
$string['settings:debugmode'] = 'Bật chế độ gỡ lỗi';
$string['settings:debugmode_help'] = 'Chế độ gỡ lỗi sẽ hiển thị một biểu ngữ thông báo nhỏ trên các trang quản trị MFA cũng như trang tùy chọn người dùng
         với thông tin về các yếu tố hiện đang được bật.';
$string['settings:duration'] = 'Thời hạn hiệu lực của mã bí mật';
$string['settings:duration_help'] = 'Thời hạn hiệu lực của các mã bí mật được tạo.';
$string['settings:enabled'] = 'Đã bật plugin MFA';
$string['settings:enablefactor'] = 'Bật yếu tố';
$string['settings:enablefactor_help'] = 'Chọn tùy chọn này để cho phép sử dụng yếu tố trong xác thực MFA.';
$string['settings:general'] = 'Cài đặt MFA chung';
$string['settings:guidancecheck'] = 'Sử dụng trang hướng dẫn';
$string['settings:guidancecheck_help'] = 'Thêm liên kết đến trang hướng dẫn trên các trang xác thực MFA và trang tùy chọn MFA.';
$string['settings:guidancefiles'] = 'Tệp trên trang hướng dẫn';
$string['settings:guidancefiles_help'] = 'Thêm tệp tại đây để dùng trên trang hướng dẫn, rồi nhúng chúng vào trang bằng {{filename}} (đường dẫn đã phân giải) hoặc {{{filename}}} (liên kết HTML) trong trình biên tập';
$string['settings:guidancepage'] = 'Nội dung trang hướng dẫn';
$string['settings:guidancepage_help'] = 'HTML tại đây sẽ được hiển thị trên trang hướng dẫn. Nhập tên tệp từ khu vực tệp để nhúng tệp bằng đường dẫn đã phân giải {{filename}} hoặc dưới dạng liên kết HTML bằng {{{filename}}}.';
$string['settings:lockout'] = 'Ngưỡng khóa tài khoản';
$string['settings:lockout_help'] = 'Số lần người dùng có thể trả lời các yếu tố nhập liệu trước khi bị ngăn đăng nhập.';
$string['settings:redir_exclusions'] = 'Các URL không được chuyển hướng khi kiểm tra MFA.';
$string['settings:redir_exclusions_help'] = 'Mỗi dòng mới là một URL tương đối tính từ thư mục gốc của trang mà bước kiểm tra MFA sẽ không chuyển hướng khỏi đó';
$string['settings:weight'] = 'Trọng số yếu tố';
$string['settings:weight_help'] = 'Trọng số của yếu tố này khi vượt qua. Người dùng cần ít nhất 100 điểm để đăng nhập.';
$string['setup'] = 'Thiết lập';
$string['setupfactor'] = 'Thiết lập yếu tố';
$string['setupfactorbuttonadditional'] = 'Thêm yếu tố khác';
$string['setuprequired'] = 'Thiết lập của người dùng';
$string['state:fail'] = 'Thất bại';
$string['state:locked'] = 'Đã khóa';
$string['state:neutral'] = 'Trung tính';
$string['state:pass'] = 'Đạt';
$string['state:unknown'] = 'Không rõ';
$string['subplugintype_factor'] = 'Loại yếu tố';
$string['subplugintype_factor_plural'] = 'Các loại yếu tố';
$string['totalusers'] = 'Tổng số người dùng';
$string['totalweight'] = 'Tổng trọng số';
$string['userempty'] = 'Không được để trống người dùng.';
$string['userlogs'] = 'Nhật ký người dùng';
$string['usernotfound'] = 'Không tìm thấy người dùng.';
$string['usersauthedinperiod'] = 'Đã đăng nhập';
$string['verification'] = 'Xác minh 2 bước';
$string['verification_desc'] = 'Để bảo vệ tài khoản của bạn, chúng tôi cần xác minh đúng là bạn.';
$string['verificationcode'] = 'Mã xác minh';
$string['verificationcode_help'] = 'Mã xác minh do yếu tố xác thực hiện tại cung cấp.';
$string['verifyalt'] = 'Thử cách xác minh khác:';
$string['weight'] = 'Trọng số';
$string['yesremove'] = 'Có, xóa';
$string['yesreplace'] = 'Có, thay thế';
