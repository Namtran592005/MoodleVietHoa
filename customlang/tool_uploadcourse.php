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
 * @subpackage uploadcourse
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Cho phép xóa';
$string['allowdeletes_help'] = 'Có chấp nhận trường xóa hay không.';
$string['allowrenames'] = 'Cho phép đổi tên';
$string['allowrenames_help'] = 'Có chấp nhận trường đổi tên hay không.';
$string['allowresets'] = 'Cho phép đặt lại';
$string['allowresets_help'] = 'Có chấp nhận trường đặt lại hay không.';
$string['cachedef_helper'] = 'Bộ nhớ đệm trợ giúp';
$string['cannotdeletecoursenotexist'] = 'Không thể xóa khóa học không tồn tại';
$string['cannotforcelang'] = 'Không có quyền buộc dùng ngôn ngữ cho khóa học này';
$string['cannotgenerateshortnameupdatemode'] = 'Không thể tạo tên viết tắt khi cho phép cập nhật';
$string['cannotreadbackupfile'] = 'Không thể đọc tệp sao lưu';
$string['cannotrenamecoursenotexist'] = 'Không thể đổi tên khóa học không tồn tại';
$string['cannotrenameidnumberconflict'] = 'Không thể đổi tên khóa học vì số ID bị trùng với một khóa học hiện có';
$string['cannotrenameshortnamealreadyinuse'] = 'Không thể đổi tên khóa học vì tên viết tắt đã được sử dụng';
$string['cannotupdatefrontpage'] = 'Bạn không được phép thay đổi trang chủ của trang web.';
$string['canonlyrenameinupdatemode'] = 'Chỉ có thể đổi tên khóa học khi cho phép cập nhật';
$string['canonlyresetcourseinupdatemode'] = 'Chỉ có thể đặt lại khóa học ở chế độ cập nhật';
$string['couldnotresolvecatgorybyid'] = 'Không thể tìm thấy danh mục theo ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Không thể tìm thấy danh mục theo số ID';
$string['couldnotresolvecatgorybypath'] = 'Không thể tìm thấy danh mục theo đường dẫn';
$string['coursecreated'] = 'Đã tạo khóa học';
$string['coursedeleted'] = 'Đã xóa khóa học';
$string['coursedeletionnotallowed'] = 'Không được phép xóa khóa học';
$string['coursedoesnotexistandcreatenotallowed'] = 'Khóa học không tồn tại và không được phép tạo khóa học';
$string['courseexistsanduploadnotallowed'] = 'Khóa học đã tồn tại và không được phép cập nhật';
$string['coursefile'] = 'Tệp';
$string['coursefile_help'] = 'Tệp này phải là tệp CSV.';
$string['courseidnumberincremented'] = 'Đã tăng số ID khóa học từ {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Quy trình khóa học';
$string['courserenamed'] = 'Đã đổi tên khóa học';
$string['courserenamingnotallowed'] = 'Không được phép đổi tên khóa học';
$string['coursereset'] = 'Đã đặt lại khóa học';
$string['courseresetnotallowed'] = 'Hiện không được phép đặt lại khóa học';
$string['courserestored'] = 'Đã khôi phục khóa học';
$string['coursescreated'] = 'Số khóa học đã tạo: {$a}';
$string['coursesdeleted'] = 'Số khóa học đã xóa: {$a}';
$string['courseserrors'] = 'Lỗi khóa học: {$a}';
$string['courseshortnamegenerated'] = 'Đã tạo tên viết tắt khóa học: {$a}';
$string['courseshortnameincremented'] = 'Đã tăng tên viết tắt khóa học từ {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Tổng số khóa học: {$a}';
$string['coursesupdated'] = 'Số khóa học đã cập nhật: {$a}';
$string['coursetemplatename'] = 'Khôi phục từ khóa học này sau khi tải lên';
$string['coursetemplatename_help'] = 'Nhập tên viết tắt của một khóa học hiện có để dùng làm mẫu tạo tất cả khóa học.';
$string['coursetorestorefromdoesnotexist'] = 'Khóa học dùng để khôi phục không tồn tại';
$string['courseupdated'] = 'Đã cập nhật khóa học';
$string['courseuploadnotallowed'] = 'Không có quyền tải khóa học lên danh mục: {$a}';
$string['courseuploadupdatenotallowed'] = 'Đã có khóa học với tên viết tắt này nhưng bạn không có quyền sử dụng chức năng tải khóa học lên để cập nhật khóa học đó.';
$string['createall'] = 'Tạo tất cả, tăng tên viết tắt nếu cần';
$string['createnew'] = 'Chỉ tạo khóa học mới, bỏ qua khóa học đã tồn tại';
$string['createorupdate'] = 'Tạo khóa học mới hoặc cập nhật khóa học hiện có';
$string['csvdelimiter'] = 'Dấu phân cách CSV';
$string['csvdelimiter_help'] = 'Ký tự dùng để phân tách các chuỗi dữ liệu trong mỗi bản ghi.';
$string['csvfileerror'] = 'Định dạng tệp CSV có vấn đề. Vui lòng kiểm tra số lượng tiêu đề và cột có khớp nhau không, đồng thời xác nhận dấu phân cách và mã hóa tệp chính xác. {$a}';
$string['csvline'] = 'Dòng';
$string['customfieldinvalid'] = 'Trường tùy chỉnh \'{$a}\' trống hoặc chứa dữ liệu không hợp lệ';
$string['defaultvalues'] = 'Giá trị khóa học mặc định';
$string['defaultvaluescustomfieldcategory'] = 'Giá trị mặc định cho \'{$a}\\';
$string['downloadcontentnotallowed'] = 'Không được phép cấu hình tải nội dung khóa học xuống';
$string['encoding'] = 'Mã hóa';
$string['encoding_help'] = 'Mã hóa của tệp CSV.';
$string['errorcannotcreateorupdateenrolment'] = 'Không thể tạo hoặc cập nhật phương thức ghi danh \'{$a}\\';
$string['errorcannotdeleteenrolment'] = 'Không thể xóa phương thức ghi danh \'{$a}\\';
$string['errorcannotdisableenrolment'] = 'Không thể tắt phương thức ghi danh \'{$a}\\';
$string['errorunsupportedmethod'] = 'Phương thức ghi danh \'{$a}\' không được hỗ trợ khi tải lên CSV';
$string['errorwhiledeletingcourse'] = 'Lỗi khi xóa khóa học';
$string['errorwhilerestoringcourse'] = 'Lỗi khi khôi phục khóa học';
$string['generatedshortnamealreadyinuse'] = 'Tên viết tắt được tạo đã được sử dụng';
$string['generatedshortnameinvalid'] = 'Tên viết tắt được tạo không hợp lệ';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'Số ID đã được một khóa học sử dụng';
$string['importoptions'] = 'Tùy chọn nhập';
$string['invalidbackupfile'] = 'Tệp sao lưu không hợp lệ';
$string['invalidcourseformat'] = 'Định dạng khóa học không hợp lệ';
$string['invalidcsvfile'] = 'Tệp CSV đầu vào không hợp lệ';
$string['invaliddownloadcontent'] = 'Giá trị tải nội dung khóa học xuống không hợp lệ';
$string['invalidencoding'] = 'Mã hóa không hợp lệ';
$string['invalideupdatemode'] = 'Đã chọn chế độ cập nhật không hợp lệ';
$string['invalidfullnametoolong'] = 'Trường tên đầy đủ được giới hạn ở {$a} ký tự';
$string['invalidmode'] = 'Đã chọn chế độ không hợp lệ';
$string['invalidroles'] = 'Tên vai trò không hợp lệ: {$a}';
$string['invalidshortname'] = 'Tên viết tắt không hợp lệ';
$string['invalidshortnametoolong'] = 'Trường tên viết tắt được giới hạn ở {$a} ký tự';
$string['invalidvisibilitymode'] = 'Chế độ hiển thị không hợp lệ';
$string['missingmandatoryfields'] = 'Thiếu giá trị cho các trường bắt buộc: {$a}';
$string['missingshortnamenotemplate'] = 'Thiếu tên viết tắt và chưa thiết lập mẫu tên viết tắt';
$string['mode'] = 'Chế độ tải lên';
$string['mode_help'] = 'Tùy chọn này cho phép bạn chỉ định có thể tạo và/hoặc cập nhật khóa học hay không.';
$string['nochanges'] = 'Không có thay đổi';
$string['pluginname'] = 'Tải khóa học lên';
$string['preview'] = 'Xem trước';
$string['privacy:metadata'] = 'Plugin tải khóa học lên không lưu trữ dữ liệu cá nhân nào.';
$string['reset'] = 'Đặt lại khóa học sau khi tải lên';
$string['reset_help'] = 'Có đặt lại khóa học sau khi tạo/cập nhật hay không.';
$string['restoreafterimport'] = 'Khôi phục sau khi nhập';
$string['result'] = 'Kết quả';
$string['rowpreviewnum'] = 'Số hàng xem trước';
$string['rowpreviewnum_help'] = 'Số hàng trong tệp CSV sẽ được xem trước ở trang tiếp theo. Tùy chọn này giúp giới hạn kích thước của trang tiếp theo.';
$string['shortnametemplate'] = 'Mẫu tạo tên viết tắt';
$string['shortnametemplate_help'] = 'Tên viết tắt của khóa học được hiển thị trong thanh điều hướng. Bạn có thể dùng cú pháp mẫu tại đây (%f = tên đầy đủ, %i = số ID), hoặc nhập giá trị ban đầu để tăng dần.';
$string['templatefile'] = 'Khôi phục từ tệp này sau khi tải lên';
$string['templatefile_help'] = 'Chọn một tệp để dùng làm mẫu tạo tất cả khóa học.';
$string['unknownimportmode'] = 'Chế độ nhập không xác định';
$string['updatemissing'] = 'Điền các mục còn thiếu bằng dữ liệu CSV và giá trị mặc định';
$string['updatemode'] = 'Chế độ cập nhật';
$string['updatemode_help'] = 'Nếu cho phép cập nhật khóa học, bạn cũng phải cho công cụ biết sẽ dùng dữ liệu nào để cập nhật khóa học.';
$string['updatemodedoessettonothing'] = 'Chế độ cập nhật không cho phép cập nhật bất kỳ nội dung nào';
$string['updateonly'] = 'Chỉ cập nhật các khóa học hiện có';
$string['updatewithdataonly'] = 'Chỉ cập nhật bằng dữ liệu CSV';
$string['updatewithdataordefaults'] = 'Cập nhật bằng dữ liệu CSV và giá trị mặc định';
$string['uploadcourse:use'] = 'Sử dụng công cụ tải khóa học lên';
$string['uploadcourses'] = 'Tải khóa học lên';
$string['uploadcourses_help'] = 'Có thể tải khóa học lên bằng tệp văn bản. Tệp cần có định dạng như sau:

* Mỗi dòng trong tệp chứa một bản ghi
* Mỗi bản ghi là một chuỗi dữ liệu được phân tách bằng dấu phân cách đã chọn
* Bản ghi đầu tiên chứa danh sách tên trường xác định định dạng của phần còn lại trong tệp
* Các tên trường bắt buộc là shortname, fullname và category';
$string['uploadcoursespreview'] = 'Xem trước khóa học tải lên';
$string['uploadcoursesresult'] = 'Kết quả tải khóa học lên';
