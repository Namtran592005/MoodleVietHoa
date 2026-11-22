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
 * @package    factor
 * @subpackage email
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'Nếu bạn không yêu cầu email này, hãy nhấn tiếp tục để vô hiệu hóa lần đăng nhập. Nếu bạn nhấn vào liên kết do nhầm lẫn, hãy nhấn hủy và sẽ không có hành động nào được thực hiện.';
$string['email:browseragent'] = 'Chi tiết trình duyệt của yêu cầu này là: \'{$a}\\';
$string['email:geoinfo'] = 'Yêu cầu này có vẻ bắt nguồn từ khoảng:';
$string['email:greeting'] = 'Xin chào {$a} &#128075;';
$string['email:ipinfo'] = 'Chi tiết yêu cầu đăng nhập:';
$string['email:link'] = 'liên kết xác minh';
$string['email:loginlink'] = 'Hoặc nếu bạn đang dùng cùng thiết bị, hãy dùng {$a} này.';
$string['email:message'] = 'Đây là mã xác minh của bạn cho {$a->sitename} ({$a->siteurl}).';
$string['email:originatingip'] = 'Yêu cầu đăng nhập này được thực hiện từ \'{$a}\\';
$string['email:revokelink'] = 'Nếu không phải bạn, bạn có thể {$a}.';
$string['email:revokesuccess'] = 'Mã này đã được thu hồi thành công. Tất cả phiên của người dùng này đã kết thúc.
    Email sẽ không thể dùng làm yếu tố cho đến khi xác minh bảo mật tài khoản.';
$string['email:stoploginlink'] = 'dừng lần đăng nhập này';
$string['email:subject'] = 'Đây là mã xác minh của bạn';
$string['email:uadescription'] = 'Định danh trình duyệt cho yêu cầu này:';
$string['email:validity'] = 'Mã chỉ có thể dùng một lần và có hiệu lực trong {$a}.';
$string['error:badcode'] = 'Không tìm thấy mã. Có thể đây là liên kết cũ, một mã mới đã được gửi qua email hoặc lần đăng nhập bằng mã này đã thành công.';
$string['error:parameters'] = 'Tham số trang không chính xác.';
$string['error:wrongverification'] = 'Mã không đúng. Hãy thử lại.';
$string['event:unauthemail'] = 'Đã nhận email không được ủy quyền';
$string['info'] = 'Bạn đang dùng email {$a} để xác thực. Quản trị viên trang web đã thiết lập tính năng này.';
$string['logindesc'] = 'Để bảo vệ tài khoản, chúng tôi cần kiểm tra xem có đúng là bạn hay không. Chúng tôi đã gửi mã đến <strong>{$a}</strong>. Vui lòng nhập mã bên dưới để tiếp tục.';
$string['loginoption'] = 'Nhận mã qua email';
$string['loginskip'] = 'Tôi chưa nhận được mã';
$string['loginsubmit'] = 'Tiếp tục';
$string['logintitle'] = 'Xác minh danh tính qua email';
$string['managefactor'] = 'Quản lý email';
$string['manageinfo'] = '\'{$a}\' đang được dùng để xác thực. Quản trị viên đã thiết lập tính năng này.';
$string['pluginname'] = 'Email';
$string['privacy:metadata'] = 'Plugin yếu tố Email không lưu trữ dữ liệu cá nhân';
$string['settings:description'] = 'Người dùng sẽ nhận mã xác minh gồm 6 chữ số qua email và phải nhập mã để hoàn tất quá trình đăng nhập.';
$string['settings:duration'] = 'Thời hạn hiệu lực';
$string['settings:duration_help'] = 'Khoảng thời gian mã còn hiệu lực.';
$string['settings:shortdescription'] = 'Yêu cầu người dùng nhập mã nhận qua email khi đăng nhập.';
$string['settings:suspend'] = 'Tạm ngưng tài khoản không được ủy quyền';
$string['settings:suspend_help'] = 'Chọn tùy chọn này để tạm ngưng tài khoản người dùng khi nhận được email xác minh không được ủy quyền.';
$string['setupfactor'] = 'Thiết lập email';
$string['summarycondition'] = 'đã thiết lập email hợp lệ';
$string['unauthemail'] = 'Email không được ủy quyền';
$string['unauthloginattempt'] = 'Người dùng có ID {$a->userid} đã thực hiện lần đăng nhập không được ủy quyền bằng xác minh email từ
IP {$a->ip} với tác nhân trình duyệt {$a->useragent}.';
$string['verificationcode'] = 'Nhập mã xác minh để xác nhận';
$string['verificationcode_help'] = 'Mã xác minh đã được gửi đến email của bạn.';
