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
 * @subpackage repository
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Trình chọn tệp có hỗ trợ truy cập';
$string['activaterep'] = 'Kho lưu trữ đang hoạt động';
$string['activerepository'] = 'Các plugin kho lưu trữ khả dụng';
$string['activitybackup'] = 'Bản sao lưu hoạt động';
$string['add'] = 'Thêm';
$string['addfile'] = 'Thêm...';
$string['addfiletext'] = 'Thêm tệp';
$string['addplugin'] = 'Thêm plugin kho lưu trữ';
$string['aliaseschange'] = 'Có {$a} liên kết đến tệp này. Nếu tiếp tục, các vị trí hiện đang liên kết đến tệp sẽ tự động được cập nhật để sử dụng một bản sao của tệp thay thế.';
$string['allowexternallinks'] = 'Cho phép liên kết ngoài';
$string['areacategoryintro'] = 'Giới thiệu danh mục';
$string['areacourseintro'] = 'Giới thiệu khóa học';
$string['areacourseoverviewfiles'] = 'Ảnh khóa học';
$string['areamainfile'] = 'Tệp chính';
$string['arearoot'] = 'Hệ thống';
$string['areauserbackup'] = 'Bản sao lưu người dùng';
$string['areauserdraft'] = 'Bản nháp';
$string['areauserpersonal'] = 'Tệp riêng tư';
$string['areauserprofile'] = 'Hồ sơ';
$string['attachedfiles'] = 'Tệp đính kèm';
$string['attachment'] = 'Tệp đính kèm';
$string['author'] = 'Tác giả';
$string['automatedbackup'] = 'Sao lưu tự động';
$string['back'] = 'Quay lại';
$string['backtodraftfiles'] = 'Quay lại trình quản lý tệp bản nháp';
$string['cachecleared'] = 'Các tệp đã lưu trong bộ nhớ đệm đã được xóa';
$string['cacheexpire'] = 'Thời hạn bộ nhớ đệm';
$string['cannotaccessparentwin'] = 'Khi sử dụng HTTPS, kho lưu trữ không được làm mới tự động. Thay vào đó, bạn cần quay lại trình chọn tệp và chọn lại kho lưu trữ.';
$string['cannotdelete'] = 'Không thể xóa tệp này.';
$string['cannotdownload'] = 'Không thể tải tệp này xuống';
$string['cannotdownloaddir'] = 'Không thể tải thư mục này xuống';
$string['cannotinitplugin'] = 'Gọi plugin_init không thành công';
$string['cannotunzipcontentunreadable'] = 'Không thể giải nén tệp này vì không thể đọc nội dung của tệp.';
$string['cannotunzipextractfileerror'] = 'Không thể giải nén tệp này vì không thể đọc một hoặc nhiều tệp bên trong.';
$string['cannotunzipquotaexceeded'] = 'Không thể giải nén tệp này vì sẽ vượt quá kích thước tối đa cho phép trong vùng nháp.';
$string['choosealink'] = 'Chọn một liên kết...';
$string['chooselicense'] = 'Chọn giấy phép';
$string['chooselicense_help'] = 'Theo các liên kết này để biết thêm thông tin về các tùy chọn giấy phép hiện có:';
$string['cleancache'] = 'Xóa các tệp bộ nhớ đệm của tôi';
$string['close'] = 'Đóng';
$string['commonrepositorysettings'] = 'Cài đặt chung của kho lưu trữ';
$string['configallowexternallinks'] = 'Tùy chọn này cho phép tất cả người dùng chọn có sao chép phương tiện bên ngoài vào Moodle hay không. Nếu tắt tùy chọn này, phương tiện luôn được sao chép vào Moodle (điều này thường tốt nhất cho tính toàn vẹn dữ liệu và bảo mật nói chung). Nếu bật, người dùng có thể chọn mỗi khi thêm phương tiện vào văn bản.';
$string['configcacheexpire'] = 'Khoảng thời gian (tính bằng giây) lưu danh sách tệp vào bộ nhớ đệm cục bộ khi duyệt các kho lưu trữ bên ngoài.';
$string['configgetfiletimeout'] = 'Thời gian chờ tính bằng giây khi tải tệp bên ngoài xuống Moodle.';
$string['configsaved'] = 'Đã lưu cấu hình!';
$string['configsyncfiletimeout'] = 'Thời gian chờ tính bằng giây để đồng bộ hóa kích thước tệp bên ngoài.';
$string['configsyncimagetimeout'] = 'Thời gian chờ tính bằng giây khi tải tệp hình ảnh từ kho lưu trữ bên ngoài trong quá trình đồng bộ hóa.';
$string['confirmdelete'] = 'Bạn có chắc muốn xóa kho lưu trữ {$a} không? Nếu chọn "Tiếp tục và tải xuống", các tham chiếu tệp đến nội dung bên ngoài sẽ được tải xuống Moodle. Quá trình này có thể mất nhiều thời gian.';
$string['confirmdeletefile'] = 'Bạn có chắc muốn xóa tệp này không?';
$string['confirmdeletefilewithhref'] = 'Bạn có chắc muốn xóa tệp này không? Có {$a} liên kết đến tệp này. Nếu tiếp tục, các vị trí hiện đang liên kết đến tệp sẽ tự động được cập nhật để sử dụng bản sao của tệp.';
$string['confirmdeletefolder'] = 'Bạn có chắc muốn xóa thư mục này không? Tất cả tệp và thư mục con sẽ bị xóa.';
$string['confirmdeleteselectedfile'] = 'Bạn có chắc muốn xóa {$a} tệp đã chọn không?';
$string['confirmremove'] = 'Bạn có chắc muốn gỡ bỏ plugin kho lưu trữ này, các tùy chọn của plugin và <strong>tất cả các phiên bản của plugin</strong> - {$a} không? Nếu chọn "Tiếp tục và tải xuống", các tham chiếu tệp đến nội dung bên ngoài sẽ được tải xuống Moodle. Quá trình này có thể mất nhiều thời gian.';
$string['confirmrenamefile'] = 'Bạn có chắc muốn đổi tên/di chuyển tệp này không?';
$string['confirmrenamefolder'] = 'Bạn có chắc muốn di chuyển/đổi tên thư mục này không? Mọi vị trí hiện đang liên kết đến các tệp trong thư mục này sẽ tự động được cập nhật để sử dụng bản sao của tệp.';
$string['continueuninstall'] = 'Tiếp tục';
$string['continueuninstallanddownload'] = 'Tiếp tục và tải xuống';
$string['copying'] = 'Đang sao chép';
$string['coursebackup'] = 'Bản sao lưu khóa học';
$string['create'] = 'Tạo';
$string['createfolder'] = 'Tạo thư mục';
$string['createfolderfail'] = 'Không thể tạo thư mục này';
$string['createfoldersuccess'] = 'Tạo thư mục thành công';
$string['createinstance'] = 'Tạo phiên bản kho lưu trữ';
$string['createrepository'] = 'Tạo phiên bản kho lưu trữ';
$string['createxxinstance'] = 'Tạo phiên bản "{$a}"';
$string['date'] = 'Ngày';
$string['datecreated'] = 'Đã tạo';
$string['deleted'] = 'Đã xóa kho lưu trữ';
$string['deleterepository'] = 'Xóa kho lưu trữ này';
$string['detailview'] = 'Xem chi tiết';
$string['dimensions'] = 'Kích thước';
$string['disabled'] = 'Đã tắt';
$string['displayasdetails'] = 'Hiển thị chi tiết tệp';
$string['displayasicons'] = 'Hiển thị biểu tượng tệp';
$string['displayastree'] = 'Hiển thị dạng cây tệp';
$string['displaydetails'] = 'Hiển thị thư mục cùng chi tiết tệp';
$string['displayicons'] = 'Hiển thị thư mục cùng biểu tượng tệp';
$string['displaytree'] = 'Hiển thị thư mục dưới dạng cây tệp';
$string['download'] = 'Tải xuống';
$string['downloadallfiles'] = 'Tải xuống tất cả tệp';
$string['downloadfolder'] = 'Tải xuống tất cả';
$string['downloadsucc'] = 'Tệp đã được tải xuống thành công';
$string['draftareanofiles'] = 'Không thể tải xuống vì không có tệp nào được đính kèm';
$string['editrepositoryinstance'] = 'Chỉnh sửa phiên bản kho lưu trữ';
$string['emptylist'] = 'Danh sách trống';
$string['emptytype'] = 'Không thể tạo loại kho lưu trữ: tên loại đang để trống';
$string['enablecourseinstances'] = 'Cho phép người dùng thêm phiên bản kho lưu trữ vào khóa học';
$string['enableuserinstances'] = 'Cho phép người dùng thêm phiên bản kho lưu trữ vào ngữ cảnh người dùng';
$string['enter'] = 'Nhập';
$string['entername'] = 'Vui lòng nhập tên thư mục';
$string['enternewname'] = 'Vui lòng nhập tên tệp mới';
$string['error'] = 'Đã xảy ra lỗi không xác định!';
$string['errordoublereference'] = 'Không thể ghi đè tệp bằng liên kết vì đã có liên kết đến tệp này.';
$string['errornotyourfile'] = 'Bạn chỉ có thể chọn các tệp do mình thêm.';
$string['errorpostmaxsize'] = 'Tệp bạn đang tải lên quá lớn để máy chủ xử lý.';
$string['erroruniquename'] = 'Tên phiên bản kho lưu trữ phải là duy nhất';
$string['errorwhilecommunicatingwith'] = 'Đã xảy ra lỗi khi giao tiếp với kho lưu trữ \'{$a}\'.';
$string['errorwhiledownload'] = 'Đã xảy ra lỗi khi tải tệp xuống: {$a}';
$string['existingrepository'] = 'Kho lưu trữ này đã tồn tại';
$string['federatedsearch'] = 'Tìm kiếm liên kết';
$string['fileexists'] = 'Tên tệp đã được sử dụng, vui lòng dùng tên khác';
$string['fileexistsdialog_editor'] = 'Một tệp có tên đó đã được đính kèm vào văn bản bạn đang chỉnh sửa.';
$string['fileexistsdialog_filemanager'] = 'Một tệp có tên đó đã được đính kèm';
$string['fileexistsdialogheader'] = 'Tệp đã tồn tại';
$string['filename'] = 'Tên tệp';
$string['filenotnull'] = 'Bạn phải chọn một tệp để tải lên.';
$string['filepicker'] = 'Trình chọn tệp';
$string['filesaved'] = 'Tệp đã được lưu';
$string['filesizenull'] = 'Không thể xác định kích thước tệp';
$string['folderexists'] = 'Tên thư mục đã được sử dụng, vui lòng dùng tên khác';
$string['foldernotfound'] = 'Không tìm thấy thư mục';
$string['folderrecurse'] = 'Không thể di chuyển thư mục vào thư mục con của chính nó.';
$string['getfile'] = 'Chọn tệp này';
$string['getfiletimeout'] = 'Đã hết thời gian chờ lấy tệp';
$string['help'] = 'Trợ giúp';
$string['iconview'] = 'Xem dưới dạng biểu tượng';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'phiên bản';
$string['instancedeleted'] = 'Đã xóa phiên bản';
$string['instances'] = 'Các phiên bản kho lưu trữ';
$string['instancesforcourses'] = '{$a} phiên bản dùng chung toàn khóa học';
$string['instancesforsite'] = '{$a} phiên bản dùng chung toàn trang';
$string['instancesforusers'] = '{$a} phiên bản riêng tư của người dùng';
$string['invalidfiletype'] = 'Không thể chấp nhận loại tệp {$a}.';
$string['invalidfiletypetitle'] = 'Không chấp nhận loại tệp';
$string['invalidfiletypewithaccepted'] = 'Tệp \'{$a->filename}\' không thuộc loại được chấp nhận. Các loại tệp được chấp nhận là: {$a->acceptedfiletypes}';
$string['invalidjson'] = 'Chuỗi JSON không hợp lệ';
$string['invalidparams'] = 'Tham số không hợp lệ';
$string['invalidplugin'] = 'Plugin kho lưu trữ {$a} không hợp lệ';
$string['invalidrepositoryid'] = 'ID kho lưu trữ không hợp lệ';
$string['isactive'] = 'Đang hoạt động?';
$string['keyword'] = 'Từ khóa';
$string['lastmodified'] = 'Sửa đổi lần cuối';
$string['license'] = 'Giấy phép';
$string['linkexternal'] = 'Liên kết bên ngoài';
$string['listview'] = 'Xem dạng danh sách';
$string['loading'] = 'Đang tải...';
$string['login'] = 'Đăng nhập vào tài khoản của bạn';
$string['logintoaccount'] = 'Đăng nhập vào tài khoản {$a} của bạn';
$string['logout'] = 'Đăng xuất';
$string['lostsource'] = 'Lỗi. Thiếu nguồn. {$a}';
$string['makefilecontrolledlink'] = 'Tạo liên kết đến tệp có kiểm soát quyền truy cập';
$string['makefileinternal'] = 'Tạo bản sao của tệp';
$string['makefilelink'] = 'Liên kết đến tệp bên ngoài';
$string['makefilereference'] = 'Liên kết đến tệp';
$string['manage'] = 'Quản lý kho lưu trữ';
$string['manageinstances'] = 'Quản lý các phiên bản';
$string['manageurl'] = 'Quản lý';
$string['manageuserrepository'] = 'Quản lý kho lưu trữ cá nhân';
$string['missingsourcekey'] = 'Thiếu khóa nguồn. Cũng cần cung cấp khóa này để truy xuất tệp.';
$string['moving'] = 'Đang di chuyển';
$string['name'] = 'Tên';
$string['newfolder'] = 'Thư mục mới';
$string['newfoldername'] = 'Tên thư mục mới';
$string['noenter'] = 'Chưa nhập gì';
$string['nofilesattached'] = 'Không có tệp đính kèm';
$string['nofilesavailable'] = 'Không có tệp nào';
$string['nofilesselected'] = 'Chưa chọn tệp nào';
$string['nolicenses'] = 'Không có giấy phép nào';
$string['nomorefiles'] = 'Không cho phép đính kèm thêm tệp';
$string['nopathselected'] = 'Chưa chọn đường dẫn đích (nhấp đúp vào nút cây để chọn)';
$string['nopermissiontoaccess'] = 'Không có quyền truy cập kho lưu trữ này.';
$string['norepositoriesavailable'] = 'Rất tiếc, không kho lưu trữ nào hiện có của bạn có thể trả về tệp ở định dạng yêu cầu.';
$string['norepositoriesexternalavailable'] = 'Rất tiếc, không kho lưu trữ nào hiện có của bạn có thể trả về tệp bên ngoài.';
$string['noresult'] = 'Không có kết quả tìm kiếm';
$string['notyourinstances'] = 'Bạn không thể xem/chỉnh sửa các phiên bản kho lưu trữ của người dùng khác';
$string['off'] = 'Đã bật nhưng bị ẩn';
$string['on'] = 'Đã bật và hiển thị';
$string['openpicker'] = 'Chọn một tệp...';
$string['operation'] = 'Thao tác';
$string['original'] = 'Bản gốc';
$string['originalextensionchange'] = 'Thay đổi phần mở rộng tệp từ \'.{$a->originalextension}\' thành \'.{$a->newextension}\' có thể khiến tệp không mở được.';
$string['originalextensionremove'] = 'Phần mở rộng tệp gốc đã bị xóa khi đổi tên tệp. Việc xóa phần mở rộng ".{$a}" có thể khiến tệp không mở được.';
$string['overwrite'] = 'Ghi đè';
$string['overwriteall'] = 'Ghi đè tất cả';
$string['path'] = 'Đường dẫn';
$string['plugin'] = 'Plugin kho lưu trữ';
$string['pluginerror'] = 'Lỗi trong plugin kho lưu trữ.';
$string['pluginname'] = 'Tên plugin kho lưu trữ';
$string['pluginnamehelp'] = 'Nếu để trống, tên mặc định sẽ được sử dụng.';
$string['popup'] = 'Nhấp vào nút "Đăng nhập" để đăng nhập';
$string['popupblockeddownload'] = 'Cửa sổ tải xuống đã bị chặn, vui lòng cho phép cửa sổ bật lên rồi thử lại.';
$string['preview'] = 'Xem trước';
$string['privacy:metadata:repository'] = 'Thành phần Repository lưu trữ các loại kho lưu trữ trong hệ thống con lõi.';
$string['privacy:metadata:repository_instances'] = 'Thành phần các plugin Repository lưu trữ dữ liệu về các phiên bản kho lưu trữ của người dùng trong hệ thống con lõi.';
$string['privacy:metadata:repository_instances:name'] = 'Tên tùy chỉnh của phiên bản kho lưu trữ.';
$string['privacy:metadata:repository_instances:password'] = 'Mật khẩu tùy chọn được cấu hình cho phiên bản kho lưu trữ.';
$string['privacy:metadata:repository_instances:timecreated'] = 'Ngày/giờ tạo phiên bản kho lưu trữ.';
$string['privacy:metadata:repository_instances:timemodified'] = 'Ngày/giờ sửa đổi phiên bản kho lưu trữ.';
$string['privacy:metadata:repository_instances:typeid'] = 'ID loại của phiên bản kho lưu trữ.';
$string['privacy:metadata:repository_instances:userid'] = 'ID của người dùng sở hữu phiên bản kho lưu trữ.';
$string['privacy:metadata:repository_instances:username'] = 'Tên người dùng tùy chọn được cấu hình cho phiên bản kho lưu trữ.';
$string['privatefilesof'] = '{$a} Tệp riêng tư';
$string['readonlyinstance'] = 'Bạn không thể chỉnh sửa/xóa phiên bản chỉ đọc';
$string['referencesexist'] = 'Có {$a} liên kết đến tệp này';
$string['referenceslist'] = 'Các liên kết';
$string['refresh'] = 'Làm mới';
$string['refreshnonjsfilepicker'] = 'Vui lòng đóng cửa sổ này và làm mới trình chọn tệp không dùng JavaScript';
$string['removed'] = 'Đã gỡ bỏ kho lưu trữ';
$string['renameall'] = 'Đổi tên tất cả';
$string['renameto'] = 'Đổi tên thành "{$a}"';
$string['repositories'] = 'Các kho lưu trữ';
$string['repository'] = 'Kho lưu trữ';
$string['repositorycourse'] = 'Kho lưu trữ của khóa học';
$string['repositoryerror'] = 'Kho lưu trữ từ xa trả về lỗi: {$a}';
$string['repositoryicon'] = 'Biểu tượng kho lưu trữ';
$string['save'] = 'Lưu';
$string['saveas'] = 'Lưu thành';
$string['saved'] = 'Đã lưu';
$string['saving'] = 'Đang lưu';
$string['search'] = 'Tìm kiếm';
$string['searching'] = 'Tìm kiếm trong';
$string['searchrepo'] = 'Tìm kiếm kho lưu trữ';
$string['sectionbackup'] = 'Bản sao lưu mục';
$string['select'] = 'Chọn';
$string['setmainfile'] = 'Đặt làm tệp chính';
$string['setmainfile_help'] = 'Nếu có nhiều tệp trong thư mục, tệp chính là tệp xuất hiện trên trang xem. Các tệp khác như hình ảnh hoặc video có thể được nhúng trong tệp đó. Trong trình quản lý tệp, tệp chính được đánh dấu bằng tiêu đề in đậm.';
$string['settings'] = 'Cài đặt';
$string['setupdefaultplugins'] = 'Thiết lập các plugin kho lưu trữ mặc định';
$string['siteinstances'] = 'Các phiên bản kho lưu trữ của trang web';
$string['size'] = 'Kích thước';
$string['sourcekeymismatch'] = 'URL nguồn không khớp với khóa nguồn.';
$string['submit'] = 'Gửi';
$string['sync'] = 'Đồng bộ hóa';
$string['syncfiletimeout'] = 'Đã hết thời gian chờ đồng bộ hóa tệp';
$string['syncimagetimeout'] = 'Đã hết thời gian chờ đồng bộ hóa hình ảnh';
$string['thumbview'] = 'Xem dưới dạng biểu tượng';
$string['title'] = 'Chọn một tệp...';
$string['type'] = 'Loại';
$string['typenotvisible'] = 'Loại không hiển thị';
$string['undisclosedreference'] = '(Không tiết lộ)';
$string['undisclosedsource'] = '(Không tiết lộ)';
$string['unknownoriginal'] = 'Không xác định';
$string['unknownsource'] = 'Nguồn không xác định';
$string['unzipped'] = 'Giải nén thành công';
$string['updatefileextensiontitle'] = 'Đổi tên tệp?';
$string['updateinvalidfiletype'] = 'Bạn không thể đổi phần mở rộng tệp thành \'.{$a->fileextension}\'. Các loại tệp được chấp nhận là: {$a->acceptedfiletypes}';
$string['upload'] = 'Tải tệp này lên';
$string['uploaderror'] = 'Lỗi tải tệp lên';
$string['uploading'] = 'Đang tải lên...';
$string['uploadsucc'] = 'Tệp đã được tải lên thành công';
$string['uselatestfile'] = 'Sử dụng tệp mới nhất';
$string['usenonjsfilemanager'] = 'Mở trình quản lý tệp trong cửa sổ mới';
$string['usenonjsfilepicker'] = 'Mở bộ chọn tệp trong cửa sổ mới';
$string['usercontextrepositorydisabled'] = 'Bạn không thể chỉnh sửa kho lưu trữ này trong ngữ cảnh người dùng';
$string['wrongcontext'] = 'Bạn không thể truy cập ngữ cảnh này';
$string['xhtmlerror'] = 'Có thể bạn đang sử dụng tiêu đề XHTML strict. Một số thành phần YUI không hoạt động trong chế độ này; vui lòng tắt chế độ này.';
$string['ziped'] = 'Nén thư mục thành công';

// Added for Moodle 5.3.1+ missing strings.
$string['filenametoolong'] = 'Tên tệp, bao gồm cả phần mở rộng, không được dài quá {$a} ký tự.';
$string['filenametoolongtitle'] = 'Tên tệp quá dài';
