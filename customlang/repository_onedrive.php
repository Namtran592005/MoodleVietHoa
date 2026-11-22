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
 * @subpackage onedrive
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Quyền truy cập';
$string['both'] = 'Nội bộ và bên ngoài';
$string['cachedef_folder'] = 'ID tệp OneDrive của các thư mục trong tài khoản hệ thống';
$string['configplugin'] = 'Cấu hình plugin OneDrive';
$string['confirmimportskydrive'] = 'Bạn có chắc chắn muốn nhập tất cả tệp từ kho lưu trữ Microsoft SkyDrive sang kho lưu trữ Microsoft OneDrive không? Kho lưu trữ Microsoft OneDrive phải được cấu hình và hoạt động để các tệp đã nhập tiếp tục hoạt động như trước. Cảnh báo: Không thể hoàn tác thao tác này!';
$string['defaultreturntype'] = 'Kiểu trả về mặc định';
$string['external'] = 'Bên ngoài (chỉ liên kết được lưu trữ trong Moodle)';
$string['fileoptions'] = 'Có thể cấu hình các kiểu và giá trị mặc định cho tệp được trả về tại đây. Lưu ý rằng chủ sở hữu của tất cả tệp được liên kết bên ngoài sẽ được đổi thành tài khoản hệ thống Moodle.';
$string['importskydrivefiles'] = 'Nhập tệp từ kho lưu trữ Microsoft SkyDrive';
$string['internal'] = 'Nội bộ (tệp được lưu trữ trong Moodle)';
$string['issuer'] = 'Dịch vụ OAuth 2';
$string['issuer_help'] = 'Chọn dịch vụ OAuth 2 được cấu hình để kết nối với OneDrive API. Nếu dịch vụ chưa tồn tại, bạn cần tạo dịch vụ đó.';
$string['mysitenotfound'] = 'Bạn chưa từng đăng nhập vào OneDrive. Bạn phải đăng nhập vào OneDrive ít nhất một lần trước khi có thể sử dụng với Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Liên kết đến cấu hình dịch vụ OAuth 2">Cấu hình dịch vụ OAuth 2</a>';
$string['onedrive:view'] = 'Xem kho lưu trữ OneDrive';
$string['owner'] = 'Thuộc sở hữu của: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Kho lưu trữ Microsoft OneDrive lưu các quyền cấp quyền truy cập tạm thời và truyền dữ liệu người dùng từ Moodle đến hệ thống từ xa.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'ID mục cấp quyền truy cập tạm thời Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'ID quyền cấp quyền truy cập tạm thời Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Ngày/giờ tạo quyền cấp quyền truy cập tạm thời Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Ngày/giờ sửa đổi quyền cấp quyền truy cập tạm thời Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'ID người dùng sửa đổi quyền cấp quyền truy cập tạm thời Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Truy vấn văn bản tìm kiếm của người dùng kho lưu trữ Microsoft OneDrive.';
$string['removetempaccesstask'] = 'Gỡ quyền ghi tạm thời khỏi các liên kết được kiểm soát';
$string['searchfor'] = 'Tìm kiếm {$a}';
$string['servicenotenabled'] = 'Chưa cấu hình quyền truy cập.';
$string['skydrivefilesexist'] = 'Kho lưu trữ Microsoft SkyDrive đã được bật nhưng không còn được hỗ trợ. Vui lòng đảm bảo bạn di chuyển tệp từ SkyDrive sang kho lưu trữ OneDrive sớm nhất có thể. Từ Moodle 4.4, thao tác này sẽ không còn khả thi.';
$string['skydrivefilesimported'] = 'Đã nhập tất cả tệp từ kho lưu trữ Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Không thể nhập một số tệp từ kho lưu trữ Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Các tệp được hỗ trợ';
