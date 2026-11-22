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
 * @package    repository
 * @subpackage nextcloud
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Nội bộ và bên ngoài';
$string['cannotconnect'] = 'Không thể xác thực người dùng. Vui lòng đăng nhập rồi tải tệp lên.';
$string['chooseissuer'] = 'Đơn vị phát hành';
$string['chooseissuer_help'] = 'Để thêm đơn vị phát hành mới, hãy vào Quản trị trang / Máy chủ / Dịch vụ OAuth 2.';
$string['configplugin'] = 'Cấu hình kho lưu trữ Nextcloud';
$string['configuration_exception'] = 'Đã xảy ra lỗi trong cấu hình ứng dụng OAuth 2: {$a}';
$string['contactadminwith'] = 'Không thể thực hiện thao tác được yêu cầu. Nếu tình trạng này tiếp diễn, vui lòng liên hệ với quản trị viên trang và cung cấp thông tin bổ sung sau:<br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'Không thể di chuyển tệp được yêu cầu vào thư mục {$a}.';
$string['defaultreturntype'] = 'Kiểu trả về mặc định';
$string['endpointnotdefined'] = 'Chưa xác định điểm cuối {$a}.';
$string['external'] = 'Bên ngoài (chỉ liên kết được lưu trữ trong Moodle)';
$string['externalpubliclinkwarning'] = 'Cảnh báo: Tệp này sẽ được công khai.';
$string['filenotaccessed'] = 'Không thể truy cập tệp được yêu cầu. Vui lòng kiểm tra xem bạn đã chọn tệp hợp lệ và xác thực bằng đúng tài khoản chưa.';
$string['fileoptions'] = 'Có thể cấu hình các kiểu và giá trị mặc định cho tệp được trả về tại đây. Lưu ý rằng chủ sở hữu của tất cả tệp được liên kết bên ngoài sẽ được đổi thành tài khoản hệ thống Moodle.';
$string['foldername'] = 'Tên thư mục được tạo trong không gian riêng tư của người dùng Nextcloud để lưu tất cả liên kết có kiểm soát quyền truy cập.';
$string['foldername_help'] = 'Để đảm bảo người dùng tìm thấy các tệp được chia sẻ với họ, các tệp chia sẻ sẽ được lưu trong một thư mục cụ thể.

Thiết lập này xác định tên thư mục. Bạn nên chọn tên gắn với phiên bản Moodle của mình.';
$string['internal'] = 'Nội bộ (tệp được lưu trữ trong Moodle)';
$string['invalidresponse'] = 'Phản hồi máy chủ không hợp lệ.';
$string['issuervalidation_invalid'] = 'Đơn vị phát hành {$a} hiện đang hoạt động, tuy nhiên đơn vị này không triển khai tất cả các điểm cuối cần thiết. Kho lưu trữ sẽ không hoạt động.';
$string['issuervalidation_valid'] = 'Đơn vị phát hành {$a} hiện đang hoạt động.';
$string['issuervalidation_without'] = 'Bạn chưa chọn máy chủ Nextcloud làm đơn vị phát hành OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Xem Nextcloud';
$string['no_right_issuers'] = 'Không có đơn vị phát hành hiện có nào triển khai đầy đủ các điểm cuối bắt buộc. Vui lòng đăng ký một đơn vị phát hành phù hợp.';
$string['noclientconnection'] = 'Không thể kết nối các ứng dụng khách OAuth.';
$string['notauthorized'] = 'Bạn không được phép thực hiện yêu cầu này. Vui lòng đảm bảo bạn đã xác thực bằng đúng tài khoản.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Liên kết đến cấu hình dịch vụ OAuth 2">Cấu hình dịch vụ OAuth 2</a>';
$string['pathnotcreated'] = 'Không thể tạo đường dẫn thư mục {$a} trong tài khoản hệ thống.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Kho lưu trữ Nextcloud';
$string['privacy:metadata'] = 'Plugin kho lưu trữ Nextcloud không lưu trữ dữ liệu cá nhân và cũng không truyền dữ liệu người dùng đến hệ thống từ xa.';
$string['request_exception'] = 'Yêu cầu gửi đến {$a->instance} không thành công. {$a->errormessage}';
$string['requestnotexecuted'] = 'Không thể thực hiện yêu cầu. Nếu tình trạng này tiếp diễn, vui lòng liên hệ với quản trị viên trang.';
$string['right_issuers'] = 'Các đơn vị phát hành sau triển khai các điểm cuối bắt buộc: <br> {$a}';
$string['supportedreturntypes'] = 'Các tệp được hỗ trợ';
