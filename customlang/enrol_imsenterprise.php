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
 * @package    enrol
 * @subpackage imsenterprise
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Sau khi lưu cài đặt, bạn có thể muốn';
$string['allowunenrol'] = 'Cho phép dữ liệu IMS hủy ghi danh học viên và giáo viên';
$string['allowunenrol_desc'] = 'Nếu bật, việc ghi danh vào khóa học sẽ bị xóa khi được chỉ định trong dữ liệu Enterprise.';
$string['basicsettings'] = 'Cài đặt cơ bản';
$string['categoryidnumber'] = 'Cho phép mã số danh mục';
$string['categoryidnumber_desc'] = 'Nếu bật, IMS Enterprise sẽ tạo danh mục có mã số.';
$string['categoryseparator'] = 'Ký tự phân tách danh mục';
$string['categoryseparator_desc'] = 'Bắt buộc khi bật \'Cho phép mã số danh mục\'. Ký tự dùng để phân tách tên danh mục và mã số.';
$string['coursesettings'] = 'Tùy chọn dữ liệu khóa học';
$string['createnewcategories'] = 'Tạo danh mục khóa học mới (ẩn) nếu không tìm thấy trong Moodle';
$string['createnewcategories_desc'] = 'Nếu phần tử &lt;org&gt;&lt;orgunit&gt; có trong dữ liệu khóa học đầu vào, nội dung của phần tử sẽ được dùng để chỉ định danh mục nếu khóa học được tạo mới. Trình bổ trợ sẽ KHÔNG phân loại lại các khóa học hiện có.

Nếu không có danh mục nào mang tên mong muốn, một danh mục ẩn sẽ được tạo.';
$string['createnewcourses'] = 'Tạo khóa học mới (ẩn) nếu không tìm thấy trong Moodle';
$string['createnewcourses_desc'] = 'Nếu bật, trình bổ trợ ghi danh IMS Enterprise có thể tạo khóa học mới cho mọi khóa học có trong dữ liệu IMS nhưng không có trong cơ sở dữ liệu Moodle. Các khóa học mới tạo ban đầu sẽ bị ẩn.';
$string['createnewusers'] = 'Tạo tài khoản người dùng cho những người chưa đăng ký trong Moodle';
$string['createnewusers_desc'] = 'Dữ liệu ghi danh IMS Enterprise thường mô tả một tập hợp người dùng. Nếu bật, tài khoản sẽ được tạo cho những người dùng không tìm thấy trong cơ sở dữ liệu Moodle.

Người dùng được tìm trước theo mã số, sau đó theo tên đăng nhập Moodle. Trình bổ trợ IMS Enterprise không nhập mật khẩu. Nên sử dụng trình bổ trợ xác thực để xác thực người dùng.';
$string['cronfrequency'] = 'Tần suất xử lý';
$string['deleteusers'] = 'Xóa tài khoản người dùng khi được chỉ định trong dữ liệu IMS';
$string['deleteusers_desc'] = 'Nếu bật, dữ liệu ghi danh IMS Enterprise có thể yêu cầu xóa tài khoản người dùng (nếu cờ "recstatus" được đặt thành 3, nghĩa là xóa tài khoản). Theo tiêu chuẩn của Moodle, bản ghi người dùng thực sự không bị xóa khỏi cơ sở dữ liệu Moodle mà chỉ được đánh dấu là đã xóa.';
$string['disableenrolmentandremoveallroles'] = 'Tạm ngưng ghi danh và xóa tất cả vai trò';
$string['disableenrolonly'] = 'Chỉ tạm ngưng ghi danh';
$string['doitnow'] = 'thực hiện nhập IMS Enterprise ngay bây giờ';
$string['emptyattribute'] = 'Để trống';
$string['filelockedmail'] = 'Tệp văn bản bạn đang sử dụng để ghi danh bằng tệp IMS ({$a}) không thể bị tiến trình cron xóa. Điều này thường có nghĩa là quyền truy cập tệp không chính xác. Vui lòng sửa quyền để Moodle có thể xóa tệp, nếu không tệp có thể bị xử lý nhiều lần.';
$string['filelockedmailsubject'] = 'Lỗi quan trọng: Tệp ghi danh';
$string['fixcasepersonalnames'] = 'Chuyển tên riêng sang kiểu viết hoa chữ cái đầu mỗi từ';
$string['fixcaseusernames'] = 'Chuyển tên đăng nhập thành chữ thường';
$string['ignore'] = 'Bỏ qua';
$string['importimsfile'] = 'Nhập tệp IMS Enterprise';
$string['imsenterprise:config'] = 'Cấu hình các phiên bản ghi danh IMS Enterprise';
$string['imsenterprisecrontask'] = 'Xử lý tệp ghi danh';
$string['imsrolesdescription'] = 'Đặc tả IMS Enterprise bao gồm 8 loại vai trò riêng biệt. Vui lòng chọn cách bạn muốn gán chúng trong Moodle, bao gồm cả việc có bỏ qua loại nào hay không.';
$string['location'] = 'Vị trí tệp';
$string['logtolocation'] = 'Vị trí xuất tệp nhật ký (để trống nếu không ghi nhật ký)';
$string['mailadmins'] = 'Thông báo cho quản trị viên qua email';
$string['mailusers'] = 'Thông báo cho người dùng qua email';
$string['messageprovider:imsenterprise_enrolment'] = 'Tin nhắn ghi danh IMS Enterprise';
$string['miscsettings'] = 'Khác';
$string['nestedcategories'] = 'Cho phép danh mục lồng nhau';
$string['nestedcategories_desc'] = 'Nếu bật, IMS Enterprise sẽ tạo các danh mục lồng nhau';
$string['noaction'] = 'Không thực hiện hành động';
$string['pluginname'] = 'Tệp IMS Enterprise';
$string['pluginname_desc'] = 'Phương thức này sẽ liên tục kiểm tra và xử lý một tệp văn bản có định dạng đặc biệt tại vị trí bạn chỉ định. Tệp phải tuân theo đặc tả IMS Enterprise và chứa các phần tử XML person, group và membership.';
$string['privacy:metadata'] = 'Trình bổ trợ ghi danh bằng tệp IMS Enterprise không lưu trữ dữ liệu cá nhân nào.';
$string['processphoto'] = 'Thêm dữ liệu ảnh người dùng vào hồ sơ';
$string['processphotowarning'] = 'Cảnh báo: Việc xử lý ảnh có thể làm tăng đáng kể tải trên máy chủ. Bạn không nên bật tùy chọn này nếu dự kiến xử lý số lượng lớn học viên.';
$string['removeenrolmentandallroles'] = 'Xóa ghi danh và các vai trò';
$string['restricttarget'] = 'Chỉ xử lý dữ liệu nếu có chỉ định đích sau đây';
$string['restricttarget_desc'] = 'Tệp dữ liệu IMS Enterprise có thể dành cho nhiều "đích" - các LMS khác nhau hoặc các hệ thống khác nhau trong một trường học/đại học. Có thể chỉ định trong tệp Enterprise rằng dữ liệu dành cho một hoặc nhiều hệ thống đích có tên, bằng cách ghi tên trong các thẻ <target> nằm trong thẻ <properties>.

Thông thường bạn không cần quan tâm đến điều này. Để trống cài đặt và Moodle sẽ luôn xử lý tệp dữ liệu, bất kể có chỉ định đích hay không. Nếu không, hãy nhập chính xác tên sẽ được xuất trong thẻ <target>.';
$string['roles'] = 'Vai trò';
$string['settingfullname'] = 'Thẻ mô tả IMS cho tên đầy đủ khóa học';
$string['settingfullnamedescription'] = 'Tên đầy đủ là trường bắt buộc của khóa học, vì vậy bạn phải xác định thẻ mô tả được chọn trong tệp IMS Enterprise';
$string['settingshortname'] = 'Thẻ mô tả IMS cho tên ngắn khóa học';
$string['settingshortnamedescription'] = 'Tên ngắn là trường bắt buộc của khóa học, vì vậy bạn phải xác định thẻ mô tả được chọn trong tệp IMS Enterprise';
$string['settingsummary'] = 'Thẻ mô tả IMS cho phần tóm tắt khóa học';
$string['settingsummarydescription'] = 'Đây là trường tùy chọn, hãy chọn \'Để trống\' nếu bạn không muốn chỉ định phần tóm tắt khóa học';
$string['sourcedidfallback'] = 'Sử dụng \'sourcedid\' làm userid của người dùng nếu không tìm thấy trường \'userid\\';
$string['sourcedidfallback_desc'] = 'Trong dữ liệu IMS, trường <sourcedid> thể hiện mã ID ổn định của một người trong hệ thống nguồn. Trường <userid> là một trường riêng, cần chứa mã ID người dùng sử dụng để đăng nhập. Trong nhiều trường hợp, hai mã này có thể giống nhau nhưng không phải lúc nào cũng vậy.

Một số hệ thống thông tin học viên không xuất trường <userid>. Nếu gặp trường hợp này, bạn nên bật cài đặt để sử dụng <sourcedid> làm ID người dùng Moodle. Nếu không, hãy tắt cài đặt này.';
$string['truncatecoursecodes'] = 'Cắt ngắn mã khóa học theo độ dài này';
$string['truncatecoursecodes_desc'] = 'Trong một số trường hợp, bạn có thể muốn cắt ngắn mã khóa học theo độ dài chỉ định trước khi xử lý. Nếu vậy, hãy nhập số ký tự vào ô này. Nếu không, hãy để trống và mã sẽ không bị cắt ngắn.';
$string['unenrolaction'] = 'Hành động hủy ghi danh';
$string['unenrolaction_desc'] = 'Hành động cần thực hiện khi người dùng bị hủy ghi danh khỏi khóa học (chỉ áp dụng khi bật cài đặt hủy ghi danh ở trên).';
$string['updatecourses'] = 'Cập nhật khóa học';
$string['updatecourses_desc'] = 'Nếu bật, trình bổ trợ ghi danh IMS Enterprise có thể cập nhật tên đầy đủ và tên ngắn của khóa học (nếu cờ "recstatus" được đặt thành 2, nghĩa là cập nhật).';
$string['updateusers'] = 'Cập nhật tài khoản người dùng khi được chỉ định trong dữ liệu IMS';
$string['updateusers_desc'] = 'Nếu bật, dữ liệu ghi danh IMS Enterprise có thể chỉ định các thay đổi đối với tài khoản người dùng (nếu cờ "recstatus" được đặt thành 2, nghĩa là cập nhật).';
$string['usecapitafix'] = 'Chọn ô này nếu sử dụng Capita (vì định dạng XML của họ hơi khác)';
$string['usecapitafix_desc'] = 'Hệ thống dữ liệu học viên do Capita tạo ra có một lỗi nhỏ trong dữ liệu XML đầu ra. Nếu sử dụng Capita, bạn nên bật cài đặt này; nếu không, hãy bỏ chọn.';
$string['usersettings'] = 'Tùy chọn dữ liệu người dùng';
$string['zeroisnotruncation'] = '0 nghĩa là không cắt ngắn';
