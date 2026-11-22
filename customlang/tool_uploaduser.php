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
 * @subpackage uploaduser
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Cho phép xóa';
$string['allowrenames'] = 'Cho phép đổi tên';
$string['allowsuspends'] = 'Cho phép tạm ngưng và kích hoạt tài khoản';
$string['assignedsysrole'] = 'Vai trò hệ thống được gán {$a}';
$string['clidefault'] = 'Mặc định:';
$string['clierrorargument'] = 'Giá trị của đối số --{$a->name} không hợp lệ. Các giá trị được phép: {$a->values}';
$string['clifile'] = 'Đường dẫn đến tệp CSV chứa dữ liệu người dùng. Bắt buộc.';
$string['clifilenotreadable'] = 'Tệp {$a} không tồn tại hoặc không thể đọc được';
$string['clihelp'] = 'In trợ giúp này.';
$string['climissingargument'] = 'Bắt buộc có đối số --{$a}';
$string['clititle'] = 'Công cụ tải người dùng lên bằng dòng lệnh.';
$string['clivalidationerror'] = 'Lỗi xác thực:';
$string['csvcontainserrors'] = 'Đã phát hiện lỗi trong tệp CSV. Các hàng không hợp lệ sẽ bị bỏ qua.';
$string['csvdelimiter'] = 'Dấu phân cách CSV';
$string['defaultvalues'] = 'Giá trị mặc định';
$string['deleteerrors'] = 'Lỗi xóa';
$string['duplicateemail'] = 'Phát hiện nhiều người dùng có địa chỉ email {$a}';
$string['duplicatevalueupload'] = 'Giá trị này đã được sử dụng trong tệp người dùng đã tải lên.';
$string['encoding'] = 'Bảng mã';
$string['errormnetadd'] = 'Không thể thêm người dùng từ xa';
$string['errorprefix'] = 'Lỗi:';
$string['errors'] = 'Lỗi';
$string['examplecsv'] = 'Tệp văn bản mẫu';
$string['examplecsv_help'] = 'Để sử dụng tệp văn bản mẫu, hãy tải tệp xuống rồi mở bằng trình soạn thảo văn bản hoặc bảng tính. Giữ nguyên dòng đầu tiên, sau đó chỉnh sửa các dòng tiếp theo (bản ghi) và thêm dữ liệu người dùng, thêm dòng nếu cần. Lưu tệp dưới dạng CSV rồi tải lên.

Bạn cũng có thể dùng tệp văn bản mẫu để thử nghiệm vì có thể xem trước dữ liệu người dùng và chọn hủy thao tác trước khi tạo tài khoản người dùng.';
$string['infoprefix'] = 'Thông tin:';
$string['invalidtheme'] = 'Giao diện "{$a}" chưa được cài đặt và sẽ bị bỏ qua.';
$string['invalidupdatetype'] = 'Không thể chọn tùy chọn này với kiểu tải lên đã chọn.';
$string['invaliduserdatavalues'] = 'Đã tìm thấy dữ liệu không chính xác ({$a->values}) cho người dùng {$a->username}. Dữ liệu này đã được sửa hoặc xóa.';
$string['linex'] = 'Dòng {$a}';
$string['matchemail'] = 'Khớp theo địa chỉ email';
$string['nochanges'] = 'Không có thay đổi';
$string['notheme'] = 'Người dùng này chưa xác định giao diện.';
$string['pluginname'] = 'Tải người dùng lên';
$string['privacy:metadata'] = 'Plugin tải người dùng lên không lưu trữ dữ liệu cá nhân nào.';
$string['renameerrors'] = 'Lỗi đổi tên';
$string['requiredtemplate'] = 'Bắt buộc. Bạn có thể sử dụng cú pháp mẫu ở đây (%l = họ, %f = tên, %u = tên đăng nhập). Xem trợ giúp để biết chi tiết và ví dụ.';
$string['rowpreviewnum'] = 'Xem trước các hàng';
$string['unassignedsysrole'] = 'Vai trò hệ thống chưa được gán {$a}';
$string['uploadpicture_baduserfield'] = 'Thuộc tính người dùng được chỉ định không hợp lệ. Vui lòng thử lại.';
$string['uploadpicture_cannotmovezip'] = 'Không thể di chuyển tệp zip vào thư mục tạm.';
$string['uploadpicture_cannotprocessdir'] = 'Không thể xử lý các tệp đã giải nén.';
$string['uploadpicture_cannotsave'] = 'Không thể lưu ảnh cho người dùng {$a}. Hãy kiểm tra tệp ảnh gốc.';
$string['uploadpicture_cannotunzip'] = 'Không thể giải nén tệp ảnh.';
$string['uploadpicture_invalidfilename'] = 'Tên tệp ảnh {$a} chứa ký tự không hợp lệ. Đang bỏ qua.';
$string['uploadpicture_overwrite'] = 'Ghi đè ảnh người dùng hiện có?';
$string['uploadpicture_userfield'] = 'Thuộc tính người dùng dùng để khớp ảnh:';
$string['uploadpicture_usernotfound'] = 'Người dùng có giá trị \'{$a->uservalue}\' cho \'{$a->userfield}\' không tồn tại. Đang bỏ qua.';
$string['uploadpicture_userskipped'] = 'Đang bỏ qua người dùng {$a} (đã có ảnh).';
$string['uploadpicture_userupdated'] = 'Đã cập nhật ảnh cho người dùng {$a}.';
$string['uploadpictures'] = 'Tải ảnh người dùng lên';
$string['uploadpictures_help'] = 'Có thể tải ảnh người dùng lên dưới dạng tệp zip chứa các tệp hình ảnh. Tên tệp hình ảnh cần theo định dạng thuộc-tính-người-dùng-đã-chọn.phần-mở-rộng, ví dụ user1234.jpg cho người dùng có tên đăng nhập user1234.';
$string['uploaduser:uploaduserpictures'] = 'Tải ảnh người dùng lên';
$string['uploadusers'] = 'Tải người dùng lên';
$string['uploadusers_help'] = 'Có thể tải người dùng lên (và tùy chọn ghi danh vào các khóa học) bằng tệp văn bản. Tệp cần có định dạng như sau:

* Mỗi dòng trong tệp chứa một bản ghi
* Mỗi bản ghi là một chuỗi dữ liệu được phân tách bằng dấu phân cách đã chọn
* Bản ghi đầu tiên chứa danh sách tên trường xác định định dạng của phần còn lại trong tệp
* Các tên trường bắt buộc là username, password, firstname, lastname, email';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Xem trước người dùng tải lên';
$string['uploadusersresult'] = 'Kết quả tải người dùng lên';
$string['useraccountupdated'] = 'Đã cập nhật người dùng';
$string['useraccountuptodate'] = 'Người dùng đã cập nhật';
$string['userdeleted'] = 'Đã xóa người dùng';
$string['userrenamed'] = 'Đã đổi tên người dùng';
$string['userscreated'] = 'Đã tạo người dùng';
$string['usersdeleted'] = 'Đã xóa người dùng';
$string['usersrenamed'] = 'Đã đổi tên người dùng';
$string['usersskipped'] = 'Đã bỏ qua người dùng';
$string['usersupdated'] = 'Đã cập nhật người dùng';
$string['usersweakpassword'] = 'Người dùng có mật khẩu yếu';
$string['userthemesnotallowed'] = 'Giao diện người dùng chưa được bật, vì vậy mọi giao diện có trong tệp tải người dùng lên sẽ bị bỏ qua.';
$string['uubulk'] = 'Chọn để thực hiện thao tác hàng loạt với người dùng';
$string['uubulkall'] = 'Tất cả người dùng';
$string['uubulknew'] = 'Người dùng mới';
$string['uubulkupdated'] = 'Người dùng đã cập nhật';
$string['uucsvline'] = 'Dòng CSV';
$string['uulegacy1role'] = '(Học viên gốc) typeN=1';
$string['uulegacy2role'] = '(Giáo viên gốc) typeN=2';
$string['uulegacy3role'] = '(Giáo viên không chỉnh sửa gốc) typeN=3';
$string['uunoemailduplicates'] = 'Ngăn địa chỉ email trùng lặp';
$string['uuoptype'] = 'Kiểu tải lên';
$string['uuoptype_addinc'] = 'Thêm tất cả, thêm số vào tên đăng nhập nếu cần';
$string['uuoptype_addnew'] = 'Chỉ thêm người dùng mới, bỏ qua người dùng hiện có';
$string['uuoptype_addupdate'] = 'Thêm người dùng mới và cập nhật người dùng hiện có';
$string['uuoptype_update'] = 'Chỉ cập nhật người dùng hiện có';
$string['uupasswordcron'] = 'Được tạo trong cron';
$string['uupasswordnew'] = 'Mật khẩu người dùng mới';
$string['uupasswordold'] = 'Mật khẩu người dùng hiện có';
$string['uustandardusernames'] = 'Chuẩn hóa tên đăng nhập';
$string['uuupdateall'] = 'Ghi đè bằng tệp và giá trị mặc định';
$string['uuupdatefromfile'] = 'Ghi đè bằng tệp';
$string['uuupdatemissing'] = 'Điền thông tin còn thiếu từ tệp và giá trị mặc định';
$string['uuupdatetype'] = 'Thông tin người dùng hiện có';
$string['uuusernametemplate'] = 'Mẫu tên đăng nhập';
$string['warningprefix'] = 'Cảnh báo:';
