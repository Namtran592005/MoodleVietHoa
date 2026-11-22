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
 * @subpackage oauth2
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Một người dùng có tên người dùng này đã tồn tại trên trang web. Nếu đây là tài khoản của bạn, hãy đăng nhập bằng tên người dùng và mật khẩu, sau đó thêm tài khoản này làm phương thức đăng nhập được liên kết trên trang tùy chọn.';
$string['alreadylinked'] = 'Tài khoản bên ngoài này đã được liên kết với một tài khoản trên trang web này';
$string['auth_oauth2description'] = 'Xác thực dựa trên các tiêu chuẩn OAuth 2';
$string['auth_oauth2settings'] = 'Cài đặt xác thực OAuth 2.';
$string['confirmaccountemail'] = 'Chào {$a->firstname},

Một tài khoản mới đã được yêu cầu tạo trên \'{$a->sitename}\' bằng địa chỉ email của bạn.

Để xác nhận tài khoản mới, vui lòng nhấp vào liên kết bên dưới:

<a href="{$a->link}">Xác nhận tài khoản</a>


Nếu cần trợ giúp, vui lòng liên hệ quản trị viên trang web.
{$a->admin}

Nếu bạn không thực hiện yêu cầu này, có thể người khác đang cố xâm nhập tài khoản của bạn.
Vui lòng liên hệ ngay với quản trị viên trang web.';
$string['confirmaccountemailsubject'] = '{$a}: xác nhận tài khoản';
$string['confirmationinvalid'] = 'Liên kết xác nhận không hợp lệ hoặc đã hết hạn. Vui lòng bắt đầu lại quy trình đăng nhập để tạo email xác nhận mới.';
$string['confirmationpending'] = 'Tài khoản này đang chờ xác nhận qua email.';
$string['confirmlinkedloginemail'] = 'Chào {$a->firstname},

Đã có yêu cầu liên kết thông tin đăng nhập {$a->issuername}
{$a->linkedemail} với tài khoản của bạn trên \'{$a->sitename}\'
bằng địa chỉ email của bạn.

Để xác nhận yêu cầu này và liên kết các thông tin đăng nhập, vui lòng nhấp vào liên kết bên dưới:

<a href="{$a->link}">Liên kết tài khoản</a>


Nếu cần trợ giúp, vui lòng liên hệ quản trị viên trang web.
{$a->admin}

Nếu bạn không thực hiện yêu cầu này, có thể người khác đang cố xâm nhập tài khoản của bạn.
Vui lòng liên hệ ngay với quản trị viên trang web.';
$string['confirmlinkedloginemailsubject'] = '{$a}: xác nhận liên kết đăng nhập';
$string['createaccountswarning'] = 'Plugin xác thực này cho phép người dùng tạo tài khoản trên trang web của bạn. Nếu sử dụng plugin này, bạn có thể muốn bật cài đặt "authpreventaccountcreation".';
$string['createnewlinkedlogin'] = 'Liên kết tài khoản mới ({$a})';
$string['deleteexpiredconfirmtokens'] = 'Xóa token xác nhận đã hết hạn';
$string['emailconfirmlink'] = 'Liên kết tài khoản';
$string['emailconfirmlinksent'] = '<p>Đã tìm thấy tài khoản hiện có với địa chỉ email này nhưng tài khoản chưa được liên kết.</p>
   <p>Bạn phải liên kết các tài khoản trước khi có thể đăng nhập.</p>
   <p>Một email lẽ ra đã được gửi đến địa chỉ <b>{$a}</b> của bạn.</p>
   <p>Email có hướng dẫn đơn giản để liên kết các tài khoản.</p>
   <p>Nếu gặp khó khăn, hãy liên hệ quản trị viên trang web.</p>';
$string['emailpasswordchangeinfo'] = 'Chào {$a->firstname},

Một người nào đó (có thể là bạn) đã yêu cầu mật khẩu mới cho tài khoản của bạn trên \'{$a->sitename}\'.

Tuy nhiên, bạn không thể đặt lại mật khẩu vì đang sử dụng tài khoản của mình trên một trang web khác để đăng nhập.

Vui lòng đăng nhập như trước đây bằng liên kết trên trang đăng nhập.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Thông tin đổi mật khẩu';
$string['info'] = 'Tài khoản bên ngoài';
$string['issuer'] = 'Dịch vụ OAuth 2';
$string['issuernologin'] = 'Không thể dùng đơn vị phát hành này để đăng nhập.';
$string['key'] = 'Khóa';
$string['linkedlogins'] = 'Thông tin đăng nhập được liên kết';
$string['linkedloginshelp'] = 'Trợ giúp về thông tin đăng nhập được liên kết';
$string['loggedin'] = 'Người dùng đã được nhà cung cấp xác thực thành công.';
$string['loginerror_authenticationfailed'] = 'Quá trình xác thực không thành công.';
$string['loginerror_cannotcreateaccounts'] = 'Không tìm thấy tài khoản có địa chỉ email của bạn.';
$string['loginerror_invaliddomain'] = 'Địa chỉ email này không được phép sử dụng trên trang web này.';
$string['loginerror_nouserinfo'] = 'Không nhận được thông tin người dùng. Dịch vụ OAuth 2 có thể được cấu hình không chính xác.';
$string['loginerror_userincomplete'] = 'Thông tin người dùng được trả về không chứa tên người dùng và địa chỉ email. Dịch vụ OAuth 2 có thể được cấu hình không chính xác.';
$string['noconfiguredidps'] = 'Chưa cấu hình nhà cung cấp OAuth 2 nào.';
$string['noissuersavailable'] = 'Không có dịch vụ OAuth 2 nào đã cấu hình cho phép bạn liên kết tài khoản đăng nhập.';
$string['notenabled'] = 'Rất tiếc, plugin xác thực OAuth 2 chưa được bật';
$string['notloggedindebug'] = 'Lần đăng nhập không thành công. Lý do: {$a}';
$string['notwhileloggedinas'] = 'Không thể quản lý các tài khoản đăng nhập đã liên kết khi bạn đang đăng nhập bằng tài khoản người dùng khác.';
$string['oauth2:managelinkedlogins'] = 'Quản lý các tài khoản đăng nhập đã liên kết của riêng mình';
$string['plugindescription'] = 'Plugin xác thực này hiển thị danh sách các nhà cung cấp danh tính đã cấu hình trên trang đăng nhập. Khi chọn một nhà cung cấp danh tính, người dùng có thể đăng nhập bằng thông tin xác thực từ nhà cung cấp OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Xác thực OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Plugin này được kết nối với hệ thống con xác thực.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Mã thông báo xác nhận.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Dấu thời gian khi mã thông báo xác nhận hết hạn.';
$string['privacy:metadata:auth_oauth2:email'] = 'Email bên ngoài được liên kết với tài khoản này.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'ID của bên phát hành OAuth 2 cho lần đăng nhập OAuth 2 này';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Các tài khoản OAuth 2 được liên kết với tài khoản Moodle của người dùng.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Dấu thời gian khi tài khoản người dùng được liên kết với lần đăng nhập OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Dấu thời gian khi bản ghi này được sửa đổi.';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID của tài khoản người dùng được liên kết với lần đăng nhập OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID của người dùng đã sửa đổi tài khoản này.';
$string['privacy:metadata:auth_oauth2:username'] = 'Tên người dùng bên ngoài được liên kết với tài khoản này.';
$string['testidplogin'] = 'Kiểm tra đăng nhập bằng:';
$string['userinfo'] = 'Dữ liệu người dùng từ nhà cung cấp:';
$string['value'] = 'Giá trị';
