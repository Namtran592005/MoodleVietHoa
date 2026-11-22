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
 * @subpackage shibboleth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logo phương thức xác thực';
$string['auth_shib_auth_logo_description'] = 'Cung cấp logo cho phương thức xác thực Shibboleth sao cho quen thuộc với người dùng. Đây có thể là logo của liên minh Shibboleth, ví dụ: <tt>SWITCHaai Login</tt> hoặc <tt>InCommon Login</tt> hoặc logo tương tự.';
$string['auth_shib_auth_method'] = 'Tên phương thức xác thực';
$string['auth_shib_auth_method_description'] = 'Đặt tên cho phương thức xác thực Shibboleth sao cho quen thuộc với người dùng. Tên này có thể là tên của liên minh Shibboleth, ví dụ: <tt>SWITCHaai Login</tt> hoặc <tt>InCommon Login</tt> hoặc tên tương tự.';
$string['auth_shib_changepasswordurl'] = 'URL đổi mật khẩu';
$string['auth_shib_contact_administrator'] = 'Nếu bạn không thuộc các tổ chức đã nêu và cần truy cập khóa học trên máy chủ này, vui lòng liên hệ với <a href="mailto:{$a}">Quản trị viên Moodle</a>.';
$string['auth_shib_convert_data'] = 'API sửa đổi dữ liệu';
$string['auth_shib_convert_data_description'] = 'Bạn có thể dùng API này để sửa đổi thêm dữ liệu do Shibboleth cung cấp. Đọc <a href="{$a}">README</a> để biết hướng dẫn chi tiết.';
$string['auth_shib_convert_data_filepath_warning'] = 'Bạn không thể dùng tệp nằm trong thư mục dữ liệu hiện tại của trang web ($CFG->dataroot) làm API sửa đổi dữ liệu.';
$string['auth_shib_convert_data_warning'] = 'Tệp không tồn tại hoặc tiến trình máy chủ web không thể đọc được!';
$string['auth_shib_idp_list'] = 'Nhà cung cấp danh tính';
$string['auth_shib_idp_list_description'] = 'Cung cấp danh sách entityID của Nhà cung cấp danh tính để người dùng chọn trên trang đăng nhập.<br />Mỗi dòng phải chứa một bộ giá trị được phân tách bằng dấu phẩy: entityID của IdP (xem tệp siêu dữ liệu Shibboleth) và Tên IdP sẽ hiển thị trong danh sách thả xuống.<br />Có thể thêm tham số thứ ba tùy chọn là vị trí của trình khởi tạo phiên Shibboleth sẽ được dùng nếu cài đặt Moodle của bạn thuộc thiết lập liên minh nhiều cấp.';
$string['auth_shib_instructions'] = 'Dùng <a href="{$a}">đăng nhập Shibboleth</a> để truy cập qua Shibboleth nếu cơ sở của bạn hỗ trợ. Nếu không, hãy dùng biểu mẫu đăng nhập thông thường hiển thị ở đây.';
$string['auth_shib_instructions_help'] = 'Tại đây, bạn có thể cung cấp hướng dẫn tùy chỉnh giải thích về Shibboleth cho người dùng. Hướng dẫn sẽ hiển thị trong mục hướng dẫn trên trang đăng nhập. Hướng dẫn phải có liên kết đến "<b>{$a}</b>" để người dùng nhấp vào khi muốn đăng nhập.';
$string['auth_shib_instructions_key'] = 'Hướng dẫn đăng nhập';
$string['auth_shib_integrated_wayf'] = 'Dịch vụ WAYF của Moodle';
$string['auth_shib_integrated_wayf_description'] = 'Nếu bật tùy chọn này, Moodle sẽ dùng dịch vụ WAYF riêng thay cho dịch vụ được cấu hình cho Shibboleth. Moodle sẽ hiển thị danh sách thả xuống trên trang đăng nhập thay thế này để người dùng chọn Nhà cung cấp danh tính của mình.';
$string['auth_shib_logout_return_url'] = 'URL chuyển hướng sau khi đăng xuất thay thế';
$string['auth_shib_logout_return_url_description'] = 'Cung cấp URL để chuyển hướng người dùng Shibboleth đến đó sau khi đăng xuất.<br />Nếu để trống, người dùng sẽ được chuyển hướng đến vị trí mà Moodle chuyển hướng người dùng đến.';
$string['auth_shib_logout_url'] = 'URL trình xử lý đăng xuất của Shibboleth Service Provider';
$string['auth_shib_logout_url_description'] = 'Cung cấp URL đến trình xử lý đăng xuất của Shibboleth Service Provider. Thông thường là <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Nếu muốn dùng dịch vụ WAYF tích hợp, bạn phải cung cấp danh sách phân tách bằng dấu phẩy gồm entityID của Nhà cung cấp danh tính, tên của họ và tùy chọn trình khởi tạo phiên.';
$string['auth_shib_only'] = 'Chỉ Shibboleth';
$string['auth_shib_only_description'] = 'Chọn tùy chọn này nếu cần bắt buộc xác thực Shibboleth';
$string['auth_shib_username_description'] = 'Tên biến môi trường Shibboleth của máy chủ web sẽ được dùng làm tên người dùng Moodle';
$string['auth_shibboleth_errormsg'] = 'Vui lòng chọn tổ chức mà bạn là thành viên!';
$string['auth_shibboleth_login'] = 'Đăng nhập Shibboleth';
$string['auth_shibboleth_login_long'] = 'Đăng nhập qua Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Đăng nhập thủ công';
$string['auth_shibboleth_select_member'] = 'Tôi là thành viên của ...';
$string['auth_shibboleth_select_organization'] = 'Để xác thực qua Shibboleth, vui lòng chọn tổ chức của bạn trong danh sách thả xuống:';
$string['auth_shibbolethdescription'] = 'Phương thức này tạo và xác thực người dùng bằng Shibboleth. Để biết chi tiết thiết lập, xem <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Plugin xác thực Shibboleth không lưu trữ dữ liệu cá nhân nào.';
$string['shib_invalid_account_error'] = 'Có vẻ như bạn đã được xác thực bằng Shibboleth nhưng Moodle không có tài khoản hợp lệ cho tên người dùng của bạn. Tài khoản có thể không tồn tại hoặc đã bị tạm ngưng.';
$string['shib_no_attributes_error'] = 'Có vẻ như bạn đã được xác thực bằng Shibboleth nhưng Moodle không nhận được thuộc tính người dùng nào. Vui lòng kiểm tra để đảm bảo Nhà cung cấp danh tính của bạn gửi các thuộc tính cần thiết ({$a}) đến Service Provider mà Moodle đang chạy trên đó, hoặc thông báo cho quản trị viên web của máy chủ này.';
$string['shib_not_all_attributes_error'] = 'Moodle cần một số thuộc tính Shibboleth nhưng trường hợp của bạn không có các thuộc tính đó. Các thuộc tính là: {$a}<br />Vui lòng liên hệ với quản trị viên web của máy chủ này hoặc Nhà cung cấp danh tính của bạn.';
$string['shib_not_set_up_error'] = 'Có vẻ như xác thực Shibboleth chưa được thiết lập đúng cách vì trang này không có biến môi trường Shibboleth nào. Vui lòng xem <a href="{$a}">README</a> để biết hướng dẫn thiết lập xác thực Shibboleth hoặc liên hệ với quản trị viên web của cài đặt Moodle này.';
