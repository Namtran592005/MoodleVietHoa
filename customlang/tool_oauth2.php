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
 * @subpackage oauth2
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Tôi hiểu rằng việc tắt xác minh email có thể gây ra vấn đề bảo mật.';
$string['acceptrisk_help'] = 'Việc tắt xác minh email có thể cho phép người dùng xác thực với tư cách người dùng khác.';
$string['authconfirm'] = 'Thao tác này sẽ cấp quyền truy cập API vĩnh viễn vào Moodle cho tài khoản đã xác thực. Tài khoản này được dùng làm tài khoản hệ thống để quản lý các tệp do Moodle sở hữu.';
$string['authconnected'] = 'Tài khoản hệ thống hiện đã được kết nối để truy cập ngoại tuyến';
$string['authnotconnected'] = 'Tài khoản hệ thống chưa được kết nối để truy cập ngoại tuyến';
$string['clever_service'] = 'Clever';
$string['configured'] = 'Đã cấu hình';
$string['configuredstatus'] = 'Trạng thái cấu hình';
$string['connectsystemaccount'] = 'Kết nối với tài khoản hệ thống';
$string['createfromtemplate'] = 'Tạo dịch vụ OAuth 2 từ mẫu';
$string['createfromtemplatedesc'] = 'Chọn một trong các mẫu dịch vụ OAuth 2 dưới đây để tạo dịch vụ OAuth với cấu hình hợp lệ cho một trong các loại dịch vụ đã biết. Thao tác này sẽ tạo dịch vụ OAuth 2 với tất cả điểm cuối và tham số chính xác cần thiết cho việc xác thực, tuy nhiên bạn vẫn cần nhập ID client và mã bí mật cho dịch vụ mới trước khi có thể sử dụng.';
$string['createnewendpoint'] = 'Tạo điểm cuối mới cho nhà phát hành "{$a}"';
$string['createnewservice'] = 'Tạo dịch vụ mới:';
$string['createnewuserfieldmapping'] = 'Tạo ánh xạ trường người dùng mới cho nhà phát hành "{$a}"';
$string['custom_service'] = 'Tùy chỉnh';
$string['deleteconfirm'] = 'Bạn có chắc muốn xóa nhà phát hành danh tính "{$a}" không? Mọi plugin phụ thuộc vào nhà phát hành này sẽ ngừng hoạt động.';
$string['deleteendpointconfirm'] = 'Bạn có chắc muốn xóa điểm cuối "{$a->endpoint}" của nhà phát hành "{$a->issuer}" không? Mọi plugin phụ thuộc vào điểm cuối này sẽ ngừng hoạt động.';
$string['deleteuserfieldmappingconfirm'] = 'Bạn có chắc muốn xóa ánh xạ trường người dùng cho nhà phát hành "{$a}" không?';
$string['discovered'] = 'Khám phá dịch vụ thành công';
$string['discovered_help'] = 'Khám phá có nghĩa là các điểm cuối OAuth 2 có thể được tự động xác định từ URL cơ sở của dịch vụ OAuth. Không phải dịch vụ nào cũng cần được "khám phá"; nếu không, bạn cần nhập thủ công các điểm cuối và thông tin ánh xạ người dùng.';
$string['discoverystatus'] = 'Khám phá';
$string['editendpoint'] = 'Sửa điểm cuối: {$a->endpoint} của nhà phát hành {$a->issuer}';
$string['editendpoints'] = 'Cấu hình điểm cuối';
$string['editissuer'] = 'Sửa nhà phát hành danh tính: {$a}';
$string['edituserfieldmapping'] = 'Sửa ánh xạ trường người dùng cho nhà phát hành {$a}';
$string['edituserfieldmappings'] = 'Cấu hình ánh xạ trường người dùng';
$string['endpointdeleted'] = 'Đã xóa điểm cuối';
$string['endpointname'] = 'Tên';
$string['endpointname_help'] = 'Khóa dùng để tìm kiếm điểm cuối này. Phải kết thúc bằng "_endpoint".';
$string['endpointsforissuer'] = 'Điểm cuối của nhà phát hành: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL của điểm cuối này. Phải sử dụng giao thức https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['issueralloweddomains'] = 'Miền đăng nhập';
$string['issueralloweddomains_help'] = 'Nếu được đặt, đây là danh sách các miền phân tách bằng dấu phẩy mà người dùng chỉ được phép đăng nhập từ đó khi sử dụng nhà cung cấp này.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'URL cơ sở của dịch vụ';
$string['issuerbaseurl_help'] = 'URL cơ sở dùng để truy cập dịch vụ.';
$string['issuerclientid'] = 'ID client';
$string['issuerclientid_help'] = 'ID client OAuth của nhà phát hành này.';
$string['issuerclientsecret'] = 'Mã bí mật client';
$string['issuerclientsecret_help'] = 'Mã bí mật client OAuth của nhà phát hành này.';
$string['issuerdeleted'] = 'Đã xóa nhà phát hành danh tính';
$string['issuerdisabled'] = 'Đã tắt nhà phát hành danh tính';
$string['issuerenabled'] = 'Đã bật nhà phát hành danh tính';
$string['issuerimage'] = 'URL biểu trưng';
$string['issuerimage_help'] = 'URL hình ảnh dùng để hiển thị biểu trưng cho nhà phát hành này. Có thể được hiển thị trên trang đăng nhập.';
$string['issuerloginpagename'] = 'Tên hiển thị trên trang đăng nhập';
$string['issuerloginpagename_help'] = 'Khi được cung cấp, tên này sẽ thay thế tên dịch vụ trên trang đăng nhập. Để hiển thị tên này bằng nhiều ngôn ngữ, hãy sử dụng <a href="https://docs.moodle.org/en/Multi-language_content_filter" target="_blank">bộ lọc nội dung đa ngôn ngữ</a>.';
$string['issuerloginparams'] = 'Các tham số bổ sung được đưa vào yêu cầu đăng nhập.';
$string['issuerloginparams_help'] = 'Một số hệ thống yêu cầu các tham số bổ sung trong yêu cầu đăng nhập để đọc hồ sơ cơ bản của người dùng.';
$string['issuerloginparamsoffline'] = 'Các tham số bổ sung được đưa vào yêu cầu đăng nhập để truy cập ngoại tuyến.';
$string['issuerloginparamsoffline_help'] = 'Mỗi hệ thống OAuth định nghĩa cách yêu cầu quyền truy cập ngoại tuyến khác nhau. Ví dụ: Google yêu cầu các tham số bổ sung: "access_type=offline&prompt=consent". Các tham số này phải ở định dạng tham số truy vấn URL.';
$string['issuerloginscopes'] = 'Các phạm vi được đưa vào yêu cầu đăng nhập.';
$string['issuerloginscopes_help'] = 'Một số hệ thống yêu cầu phạm vi bổ sung trong yêu cầu đăng nhập để đọc hồ sơ cơ bản của người dùng. Các phạm vi tiêu chuẩn cho hệ thống tuân thủ OpenID Connect là "openid profile email".';
$string['issuerloginscopesoffline'] = 'Các phạm vi được đưa vào yêu cầu đăng nhập để truy cập ngoại tuyến.';
$string['issuerloginscopesoffline_help'] = 'Mỗi hệ thống OAuth định nghĩa cách yêu cầu quyền truy cập ngoại tuyến khác nhau. Ví dụ: Microsoft yêu cầu phạm vi bổ sung "offline_access".';
$string['issuername'] = 'Tên';
$string['issuername_help'] = 'Tên của nhà phát hành danh tính. Có thể được hiển thị trên trang đăng nhập.';
$string['issuerrequireconfirmation'] = 'Yêu cầu xác minh email';
$string['issuerrequireconfirmation_help'] = 'Yêu cầu tất cả người dùng xác minh địa chỉ email trước khi đăng nhập bằng OAuth. Áp dụng cho các tài khoản mới được tạo trong quá trình đăng nhập hoặc khi tài khoản Moodle hiện có được liên kết với thông tin đăng nhập OAuth thông qua địa chỉ email trùng khớp.';
$string['issuers'] = 'Nhà phát hành';
$string['issuersetup'] = 'Hướng dẫn chi tiết cấu hình các dịch vụ OAuth 2 phổ biến';
$string['issuersetuptype'] = 'Hướng dẫn chi tiết thiết lập nhà cung cấp OAuth 2 {$a}';
$string['issuershowonloginpage'] = 'Hiển thị trên trang đăng nhập';
$string['issuershowonloginpage_help'] = 'Nếu plugin xác thực OAuth 2 được bật, nhà phát hành đăng nhập này sẽ được liệt kê trên trang đăng nhập để người dùng đăng nhập bằng tài khoản từ nhà phát hành này.';
$string['issuersmtpsystememail'] = 'Email SMTP';
$string['issuersmtpsystememail_help'] = 'Nếu được chỉ định, email này sẽ được dùng để kết nối tài khoản hệ thống nhằm gửi email qua SMTP. Một số dịch vụ OAuth 2 yêu cầu điều này (ví dụ: Microsoft). Vui lòng kiểm tra tài liệu về dịch vụ OAuth 2 để biết có cần thiết hay không.';
$string['issuersservicesallow'] = 'Cho phép dịch vụ';
$string['issuersservicesnotallow'] = 'Không cho phép dịch vụ';
$string['issuerusedforinternal'] = 'Dịch vụ nội bộ';
$string['issuerusedforlogin'] = 'Đăng nhập';
$string['issuerusein'] = 'Dịch vụ này sẽ được sử dụng';
$string['issuerusein_help'] = 'Có thể sử dụng dịch vụ OAuth 2 cho các dịch vụ nội bộ, trên trang đăng nhập, SMTP với XOAUTH2 hoặc cả trang đăng nhập và dịch vụ nội bộ nếu cần.';
$string['issueruseineverywhere'] = 'Trang đăng nhập và dịch vụ nội bộ';
$string['issueruseininternalonly'] = 'Chỉ dịch vụ nội bộ';
$string['issueruseinloginonly'] = 'Chỉ trang đăng nhập';
$string['issueruseinsmtpwithoauth'] = 'Chỉ SMTP với XOAUTH2';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Hiển thị trên trang đăng nhập với tên';
$string['loginissuer'] = 'Cho phép đăng nhập';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Chưa cấu hình';
$string['notdiscovered'] = 'Khám phá dịch vụ không thành công';
$string['notloginissuer'] = 'Không cho phép đăng nhập';
$string['pluginname'] = 'Dịch vụ OAuth 2';
$string['privacy:metadata'] = 'Plugin dịch vụ OAuth 2 không lưu trữ dữ liệu cá nhân nào.';
$string['savechanges'] = 'Lưu thay đổi';
$string['serviceshelp'] = 'Hướng dẫn thiết lập nhà cung cấp dịch vụ.';
$string['systemaccountconnected'] = 'Đã kết nối tài khoản hệ thống';
$string['systemaccountconnected_help'] = 'Tài khoản hệ thống được dùng để cung cấp chức năng nâng cao cho các plugin. Tài khoản này không cần thiết chỉ để đăng nhập, nhưng các plugin khác sử dụng dịch vụ OAuth có thể cung cấp ít tính năng hơn nếu chưa kết nối tài khoản hệ thống. Ví dụ: kho lưu trữ không thể hỗ trợ "liên kết có kiểm soát" nếu không có tài khoản hệ thống để thực hiện các thao tác với tệp.';
$string['systemaccountnotconnected'] = 'Chưa kết nối tài khoản hệ thống';
$string['systemauthstatus'] = 'Đã kết nối tài khoản hệ thống';
$string['usebasicauth'] = 'Xác thực yêu cầu token qua tiêu đề HTTP';
$string['usebasicauth_help'] = 'Sử dụng lược đồ xác thực HTTP Basic khi gửi ID client và mật khẩu cùng yêu cầu token làm mới. Đây là khuyến nghị của tiêu chuẩn OAuth 2, nhưng một số nhà phát hành có thể không hỗ trợ.';
$string['userfieldexternalfield'] = 'Tên trường bên ngoài';
$string['userfieldexternalfield_error'] = 'Trường này không được chứa HTML.';
$string['userfieldexternalfield_help'] = 'Tên trường do hệ thống OAuth bên ngoài cung cấp.';
$string['userfieldinternalfield'] = 'Tên trường nội bộ';
$string['userfieldinternalfield_help'] = 'Tên trường người dùng Moodle cần được ánh xạ từ trường bên ngoài.';
$string['userfieldmappingdeleted'] = 'Đã xóa ánh xạ trường người dùng';
$string['userfieldmappingsforissuer'] = 'Ánh xạ trường người dùng của nhà phát hành: {$a}';
