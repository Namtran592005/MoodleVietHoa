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
 * @subpackage messageinbound
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Tên lớp';
$string['component'] = 'Thành phần';
$string['configmessageinboundhost'] = 'Địa chỉ máy chủ mà Moodle sẽ kiểm tra thư. Để chỉ định cổng không mặc định, hãy dùng [server]:[port], ví dụ mail.example.com:993. Nếu không chỉ định cổng, cổng mặc định của loại máy chủ thư sẽ được sử dụng.';
$string['defaultexpiration'] = 'Thời hạn hết hạn địa chỉ mặc định';
$string['defaultexpiration_help'] = 'Khi bộ xử lý tạo địa chỉ email, địa chỉ đó có thể được thiết lập để tự động hết hạn sau một khoảng thời gian và không thể sử dụng tiếp. Bạn nên đặt thời hạn hết hạn.';
$string['description'] = 'Mô tả';
$string['domain'] = 'Tên miền email';
$string['edit'] = 'Chỉnh sửa';
$string['edithandler'] = 'Chỉnh sửa cài đặt cho bộ xử lý {$a}';
$string['editinghandler'] = 'Đang chỉnh sửa {$a}';
$string['enabled'] = 'Đã bật';
$string['fixedenabled_help'] = 'Bạn không thể thay đổi trạng thái của bộ xử lý này. Có thể các bộ xử lý khác cần đến bộ xử lý này.';
$string['fixedvalidateaddress'] = 'Xác thực địa chỉ người gửi';
$string['fixedvalidateaddress_help'] = 'Bạn không thể thay đổi việc xác thực địa chỉ cho bộ xử lý này. Có thể bộ xử lý yêu cầu một cài đặt cụ thể.';
$string['handlerdisabled'] = 'Bộ xử lý email mà bạn đã cố liên hệ đã bị tắt. Hiện không thể xử lý thư.';
$string['incomingmailconfiguration'] = 'Cấu hình thư đến';
$string['incomingmailserversettings'] = 'Cài đặt máy chủ thư đến';
$string['incomingmailserversettings_desc'] = 'Moodle có thể kết nối với các máy chủ IMAP được cấu hình phù hợp. Bạn có thể chỉ định tại đây các cài đặt dùng để kết nối với máy chủ IMAP.';
$string['invalid_recipient_handler'] = 'Nếu nhận được thư hợp lệ nhưng không thể xác thực người gửi, thư sẽ được lưu trên máy chủ email và người dùng sẽ được liên hệ qua địa chỉ email trong hồ sơ người dùng. Người dùng sẽ có cơ hội trả lời để xác nhận tính xác thực của thư ban đầu.

Trình xử lý này xử lý những thư trả lời đó.

Không thể tắt xác minh người gửi của trình xử lý này vì người dùng có thể trả lời từ một địa chỉ email không chính xác nếu cấu hình ứng dụng email của họ không đúng.';
$string['invalid_recipient_handler_name'] = 'Trình xử lý người gửi không hợp lệ';
$string['invalidrecipientdescription'] = 'Không thể xác thực thư "{$a->subject}" vì thư được gửi từ địa chỉ email khác với địa chỉ trong hồ sơ người dùng của bạn. Để xác thực thư, bạn cần trả lời thư này.';
$string['invalidrecipientdescriptionhtml'] = 'Không thể xác thực thư "{$a->subject}" vì thư được gửi từ địa chỉ email khác với địa chỉ trong hồ sơ người dùng của bạn. Để xác thực thư, bạn cần trả lời thư này.';
$string['invalidrecipientfinal'] = 'Không thể xác thực thư "{$a->subject}". Vui lòng kiểm tra để đảm bảo bạn gửi thư từ cùng địa chỉ email với địa chỉ trong hồ sơ của mình.';
$string['mailbox'] = 'Tên hộp thư';
$string['mailboxconfiguration'] = 'Cấu hình hộp thư';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Cài đặt thư';
$string['message_handlers'] = 'Trình xử lý thư';
$string['messageinbound'] = 'Thư đến';
$string['messageinboundenabled'] = 'Bật xử lý thư đến';
$string['messageinboundenabled_desc'] = 'Phải bật tính năng xử lý thư đến để gửi thư kèm thông tin phù hợp.';
$string['messageinboundgeneralconfiguration'] = 'Cấu hình chung';
$string['messageinboundgeneralconfiguration_desc'] = 'Tính năng xử lý thư đến cho phép bạn nhận và xử lý email trong Moodle. Tính năng này có thể được dùng để gửi email trả lời bài đăng diễn đàn hoặc thêm tệp vào các tệp riêng tư của người dùng.';
$string['messageinboundhost'] = 'Máy chủ thư đến';
$string['messageinboundhostoauth_help'] = 'Dịch vụ OAuth 2 dùng để truy cập máy chủ IMAP bằng xác thực XOAUTH2. Nếu dịch vụ chưa tồn tại, bạn cần tạo dịch vụ đó.';
$string['messageinboundhostpass'] = 'Mật khẩu';
$string['messageinboundhostpass_desc'] = 'Đây là mật khẩu mà nhà cung cấp dịch vụ đã cấp để đăng nhập vào tài khoản email của bạn.';
$string['messageinboundhostssl'] = 'Dùng SSL';
$string['messageinboundhostssl_desc'] = 'Một số máy chủ thư hỗ trợ thêm một lớp bảo mật bằng cách mã hóa liên lạc giữa Moodle và máy chủ. Chúng tôi khuyên bạn nên dùng mã hóa SSL này nếu máy chủ hỗ trợ.';
$string['messageinboundhosttype'] = 'Loại máy chủ';
$string['messageinboundhostuser'] = 'Tên đăng nhập';
$string['messageinboundhostuser_desc'] = 'Đây là tên đăng nhập mà nhà cung cấp dịch vụ đã cấp để đăng nhập vào tài khoản email của bạn.';
$string['messageinboundmailboxconfiguration_desc'] = 'Khi gửi thư, địa chỉ sẽ theo định dạng address+data@example.com. Để tạo địa chỉ đáng tin cậy từ Moodle, hãy chỉ định riêng địa chỉ bạn thường dùng trước dấu @ và tên miền sau dấu @. Ví dụ, Tên hộp thư trong ví dụ sẽ là "address", còn Tên miền email là "example.com". Bạn nên dùng một tài khoản email riêng cho mục đích này.';
$string['messageprocessingerror'] = 'Gần đây bạn đã gửi email "{$a->subject}" nhưng rất tiếc, email không thể được xử lý.

Chi tiết lỗi được hiển thị bên dưới.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Gần đây bạn đã gửi email "{$a->subject}" nhưng rất tiếc, email không thể được xử lý.</p>
<p>Chi tiết lỗi được hiển thị bên dưới.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Không thể xử lý email "{$a->subject}". Lỗi như sau: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'Không thể xử lý email "{$a->subject}". Hãy liên hệ quản trị viên để biết thêm thông tin.';
$string['messageprocessingsuccess'] = '{$a->plain}

Nếu không muốn nhận những thông báo này trong tương lai, bạn có thể chỉnh sửa tùy chọn nhắn tin cá nhân bằng cách mở {$a->messagepreferencesurl} trong trình duyệt.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Nếu không muốn nhận những thông báo này trong tương lai, bạn có thể <a href="{$a->messagepreferencesurl}">chỉnh sửa tùy chọn nhắn tin cá nhân</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Thư xác nhận rằng thư đến được gửi từ bạn';
$string['messageprovider:messageprocessingerror'] = 'Cảnh báo khi không thể xử lý thư đến';
$string['messageprovider:messageprocessingsuccess'] = 'Xác nhận thư đã được xử lý thành công';
$string['name'] = 'Tên';
$string['noencryption'] = 'Tắt - Không mã hóa';
$string['noexpiry'] = 'Không hết hạn';
$string['oldmessagenotfound'] = 'Bạn đã thử xác thực thư theo cách thủ công nhưng không tìm thấy thư. Có thể thư đã được xử lý hoặc đã hết hạn.';
$string['oneday'] = 'Một ngày';
$string['onehour'] = 'Một giờ';
$string['oneweek'] = 'Một tuần';
$string['oneyear'] = 'Một năm';
$string['pluginname'] = 'Cấu hình thư đến';
$string['privacy:metadata:coreuserkey'] = 'Khóa của người dùng dùng để xác thực email đã nhận';
$string['privacy:metadata:messagelist'] = 'Danh sách mã định danh thư không xác thực được và cần được cấp quyền thêm';
$string['privacy:metadata:messagelist:address'] = 'Địa chỉ nhận email';
$string['privacy:metadata:messagelist:messageid'] = 'ID thư';
$string['privacy:metadata:messagelist:timecreated'] = 'Thời điểm tạo bản ghi';
$string['privacy:metadata:messagelist:userid'] = 'ID của người dùng cần phê duyệt thư';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Xác thực địa chỉ người gửi';
$string['ssl'] = 'SSL (Tự động phát hiện phiên bản SSL)';
$string['sslv2'] = 'SSLv2 (Buộc dùng phiên bản SSL 2)';
$string['sslv3'] = 'SSLv3 (Buộc dùng phiên bản SSL 3)';
$string['taskcleanup'] = 'Dọn dẹp email đến chưa xác minh';
$string['taskpickup'] = 'Thu nhận email đến';
$string['tls'] = 'Transport Layer Security (TLS) (TLS; khởi tạo thông qua thương lượng ở cấp giao thức trên kênh chưa mã hóa; CÁCH ĐƯỢC KHUYẾN NGHỊ để bắt đầu kết nối an toàn)';
$string['tlsv1'] = 'Transport Layer Security (TLS) v1 (kết nối trực tiếp với máy chủ TLS phiên bản 1.x)';
$string['validateaddress'] = 'Xác thực địa chỉ email người gửi';
$string['validateaddress_help'] = 'Khi nhận được thư từ người dùng, Moodle sẽ xác thực thư bằng cách so sánh địa chỉ email của người gửi với địa chỉ email trong hồ sơ người dùng.

Nếu địa chỉ người gửi không khớp, người dùng sẽ nhận được thông báo để xác nhận rằng họ thực sự đã gửi email.

Nếu tắt cài đặt này, địa chỉ email của người gửi sẽ không được kiểm tra.';
