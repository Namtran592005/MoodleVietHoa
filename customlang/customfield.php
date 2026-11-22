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
 * @subpackage customfield
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Thao tác';
$string['addingnewcustomfield'] = 'Đang thêm {$a} mới';
$string['addnewcategory'] = 'Thêm danh mục mới';
$string['afterfield'] = 'Sau trường {$a}';
$string['categoryadded'] = 'Đã thêm danh mục.';
$string['categoryconverted'] = 'Đã chuyển đổi danh mục thành công thành các trường tùy chỉnh dùng chung';
$string['categorynotfound'] = 'Không tìm thấy danh mục';
$string['checked'] = 'Đã chọn';
$string['commonsettings'] = 'Chung';
$string['componentsettings'] = 'Cài đặt component';
$string['confirmdeletecategory'] = 'Bạn có chắc muốn xóa danh mục này không? Tất cả các trường trong danh mục và mọi dữ liệu liên quan đến chúng cũng sẽ bị xóa. Không thể hoàn tác thao tác này.';
$string['confirmdeletefield'] = 'Bạn có chắc muốn xóa trường này cùng tất cả dữ liệu liên quan không? Không thể hoàn tác thao tác này.';
$string['conversionerror'] = 'Không thể chuyển đổi thành các trường tùy chỉnh dùng chung';
$string['convertcategory'] = 'Chuyển thành dùng chung';
$string['convertcategoryconfirm'] = 'Bạn có chắc muốn chuyển đổi danh mục này và tất cả các trường trong đó thành các trường tùy chỉnh dùng chung không? Thao tác này sẽ cung cấp các trường này cho mọi thực thể hỗ trợ trường tùy chỉnh, chẳng hạn như khóa học, nhóm, cohort, v.v. <br/><br/>Sau khi chuyển đổi, danh mục dùng chung sẽ được bật theo mặc định nhưng có thể tắt thủ công. </br><br/>Không thể hoàn tác thao tác này.';
$string['convertcategorytitle'] = 'Chuyển đổi thành các trường tùy chỉnh dùng chung?';
$string['createnewcustomfield'] = 'Thêm trường';
$string['customfield'] = 'Trường tùy chỉnh';
$string['customfielddata'] = 'Dữ liệu trường tùy chỉnh';
$string['customfields'] = 'Các trường tùy chỉnh';
$string['defaultvalue'] = 'Giá trị mặc định';
$string['deletecategory'] = 'Xóa danh mục trường tùy chỉnh: {$a}';
$string['deletefield'] = 'Xóa trường tùy chỉnh: {$a}';
$string['description'] = 'Mô tả';
$string['description_help'] = 'Mô tả được hiển thị trong biểu mẫu bên dưới trường.';
$string['edit'] = 'Chỉnh sửa';
$string['editcategoryname'] = 'Chỉnh sửa tên danh mục';
$string['editfield'] = 'Chỉnh sửa trường tùy chỉnh: {$a}';
$string['editingfield'] = 'Đang cập nhật {$a}';
$string['errorfieldtypenotfound'] = 'Không tìm thấy loại trường {$a}';
$string['erroruniquevalues'] = 'Giá trị này đã được sử dụng.';
$string['eventcategorycreated'] = 'Đã tạo danh mục trường tùy chỉnh';
$string['eventcategorydeleted'] = 'Đã xóa danh mục trường tùy chỉnh';
$string['eventcategoryupdated'] = 'Đã cập nhật danh mục trường tùy chỉnh';
$string['eventfieldcreated'] = 'Đã tạo trường tùy chỉnh';
$string['eventfielddeleted'] = 'Đã xóa trường tùy chỉnh';
$string['eventfieldupdated'] = 'Đã cập nhật trường tùy chỉnh';
$string['eventsharedcategoryusagedisabled'] = 'Đã tắt việc sử dụng danh mục dùng chung';
$string['eventsharedcategoryusageenabled'] = 'Đã bật việc sử dụng danh mục dùng chung';
$string['fieldname'] = 'Tên';
$string['fieldnotfound'] = 'Không tìm thấy trường';
$string['fieldshortname'] = 'Tên rút gọn';
$string['formfieldcheckshortname'] = 'Tên rút gọn đã tồn tại';
$string['invalidshortnameerror'] = 'Tên rút gọn chỉ được chứa chữ cái thường không dấu, chữ số và dấu gạch dưới (_).';
$string['isdataunique'] = 'Dữ liệu duy nhất';
$string['isdataunique_help'] = 'Cài đặt này xác định liệu giá trị đã nhập có phải là duy nhất và chưa từng được nhập trước đó hay không.';
$string['isfieldrequired'] = 'Bắt buộc';
$string['isfieldrequired_help'] = 'Trường bắt buộc là trường phải được điền giá trị trước khi gửi biểu mẫu.';
$string['link'] = 'Liên kết';
$string['linktarget'] = 'Đích liên kết';
$string['modify'] = 'Sửa đổi';
$string['movecategory'] = 'Di chuyển "{$a}"';
$string['movefield'] = 'Di chuyển "{$a}"';
$string['no'] = 'Không';
$string['nocategories'] = 'Không có trường tùy chỉnh hoặc danh mục nào.';
$string['nopermissionconfigure'] = 'Bạn không có quyền cấu hình các trường ở đây.';
$string['notchecked'] = 'Chưa chọn';
$string['otherfields'] = 'Các trường khác';
$string['otherfieldsn'] = 'Các trường khác {$a}';
$string['privacy:metadata:customfield_data'] = 'Đại diện cho dữ liệu trường tùy chỉnh được lưu vào một ngữ cảnh';
$string['privacy:metadata:customfield_data:charvalue'] = 'Giá trị dữ liệu khi thuộc kiểu ký tự';
$string['privacy:metadata:customfield_data:contextid'] = 'ID của ngữ cảnh nơi dữ liệu được lưu';
$string['privacy:metadata:customfield_data:decvalue'] = 'Giá trị dữ liệu khi thuộc kiểu số thập phân';
$string['privacy:metadata:customfield_data:fieldid'] = 'ID định nghĩa trường';
$string['privacy:metadata:customfield_data:instanceid'] = 'ID phiên bản liên quan đến dữ liệu';
$string['privacy:metadata:customfield_data:intvalue'] = 'Giá trị dữ liệu khi thuộc kiểu số nguyên';
$string['privacy:metadata:customfield_data:shortcharvalue'] = 'Giá trị dữ liệu khi thuộc kiểu ký tự ngắn';
$string['privacy:metadata:customfield_data:timecreated'] = 'Thời điểm tạo dữ liệu';
$string['privacy:metadata:customfield_data:timemodified'] = 'Thời điểm sửa đổi dữ liệu gần nhất';
$string['privacy:metadata:customfield_data:value'] = 'Giá trị dữ liệu khi thuộc kiểu văn bản';
$string['privacy:metadata:customfield_data:valueformat'] = 'Định dạng của giá trị khi thuộc kiểu văn bản';
$string['privacy:metadata:customfield_data:valuetrust'] = 'Cờ độ tin cậy của giá trị khi thuộc kiểu văn bản';
$string['privacy:metadata:customfield_shared'] = 'Đại diện cho trường tùy chỉnh dùng chung được lưu vào một ngữ cảnh';
$string['privacy:metadata:customfield_shared:area'] = 'Khu vực được liên kết với trường dùng chung';
$string['privacy:metadata:customfield_shared:categoryid'] = 'ID của danh mục chứa trường dùng chung';
$string['privacy:metadata:customfield_shared:component'] = 'Component được liên kết với trường dùng chung';
$string['privacy:metadata:customfield_shared:itemid'] = 'ID của mục được liên kết với trường dùng chung';
$string['privacy:metadata:customfieldpluginsummary'] = 'Các trường dành cho nhiều component khác nhau';
$string['privacy:metadata:filepurpose'] = 'Tệp đính kèm với dữ liệu trường tùy chỉnh';
$string['sharedcategoryhelptext'] = 'Khi được bật, các trường tùy chỉnh trong danh mục này sẽ được sử dụng';
$string['sharedcustomfieldalreadyexists'] = 'Một hoặc nhiều tên rút gọn trong danh mục này đã tồn tại dưới dạng trường tùy chỉnh dùng chung. Để tiếp tục chuyển đổi, hãy đổi tên các trường bị trùng trong danh mục này hoặc sửa đổi các trường tùy chỉnh dùng chung hiện có.';
$string['sharedcustomfields'] = 'Các trường tùy chỉnh dùng chung';
$string['shortname'] = 'Tên rút gọn';
$string['shortname_help'] = 'Tên rút gọn phải là duy nhất và chỉ được chứa chữ cái thường không dấu, chữ số và dấu gạch dưới (_). Tên này không được hiển thị ở bất kỳ đâu trên trang web nhưng có thể được dùng để đồng bộ hóa với các hệ thống bên ngoài hoặc trong web service.';
$string['showdate'] = 'Hiển thị ngày';
$string['specificsettings'] = 'Cài đặt cụ thể';
$string['therearenofields'] = 'Không có trường nào trong danh mục này';
$string['totopofcategory'] = 'Lên đầu danh mục {$a}';
$string['type'] = 'Loại';
$string['unknownhandler'] = 'Không tìm thấy trình xử lý trường tùy chỉnh cho component {$a->component} và khu vực {$a->area}.';
$string['yes'] = 'Có';
