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
 * @subpackage webservice
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Ngoại lệ kiểm soát truy cập';
$string['actwebserviceshhdr'] = 'Các giao thức dịch vụ web đang hoạt động';
$string['addaservice'] = 'Thêm dịch vụ';
$string['addcapabilitytousers'] = 'Kiểm tra quyền năng lực của người dùng';
$string['addcapabilitytousersdescription'] = 'Người dùng cần có hai quyền năng lực - webservice:createtoken và một quyền năng lực khớp với các giao thức được sử dụng, ví dụ webservice/rest:use, webservice/soap:use. Để thực hiện việc này, hãy tạo một vai trò dịch vụ web với các quyền năng lực phù hợp được cho phép và gán vai trò đó cho người dùng dịch vụ web ở cấp hệ thống.';
$string['addexternalservice'] = 'Thêm dịch vụ bên ngoài';
$string['addfunction'] = 'Thêm hàm';
$string['addfunctionhelp'] = 'Chọn hàm cần thêm vào dịch vụ.';
$string['addfunctions'] = 'Thêm các hàm';
$string['addfunctionsdescription'] = 'Chọn các hàm cần thiết cho dịch vụ vừa tạo.';
$string['addrequiredcapability'] = 'Gán/bỏ gán quyền năng lực bắt buộc';
$string['addservice'] = 'Thêm dịch vụ mới: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Thêm hàm vào dịch vụ "{$a}"';
$string['allusers'] = 'Tất cả người dùng';
$string['apiexplorer'] = 'Trình khám phá API';
$string['apiexplorernotavalaible'] = 'Trình khám phá API chưa khả dụng.';
$string['arguments'] = 'Đối số';
$string['authmethod'] = 'Phương thức xác thực';
$string['callablefromajax'] = 'Có thể gọi từ AJAX';
$string['cannotcreatetoken'] = 'Không có quyền tạo token dịch vụ web cho dịch vụ {$a}.';
$string['checkusercapability'] = 'Kiểm tra quyền năng lực của người dùng';
$string['checkusercapabilitydescription'] = 'Người dùng cần có các quyền năng lực phù hợp với giao thức được sử dụng, ví dụ webservice/rest:use, webservice/soap:use. Để thực hiện việc này, hãy tạo một vai trò dịch vụ web có các quyền năng lực giao thức được cho phép và gán vai trò đó cho người dùng dịch vụ web ở cấp hệ thống.';
$string['configwebserviceplugins'] = 'Vì lý do bảo mật, chỉ nên bật các giao thức đang được sử dụng.';
$string['context'] = 'Ngữ cảnh';
$string['createservicedescription'] = 'Dịch vụ là một tập hợp các hàm dịch vụ web. Bạn sẽ cho phép người dùng truy cập một dịch vụ mới. Trên trang <strong>Thêm dịch vụ</strong>, hãy chọn các tùy chọn \'Bật\' và \'Người dùng được ủy quyền\'. Chọn \'Không yêu cầu quyền năng lực\'.';
$string['createserviceforusersdescription'] = 'Dịch vụ là một tập hợp các hàm dịch vụ web. Bạn sẽ cho phép người dùng truy cập một dịch vụ mới. Trên trang <strong>Thêm dịch vụ</strong>, hãy chọn \'Bật\' và bỏ chọn \'Người dùng được ủy quyền\'. Chọn \'Không yêu cầu quyền năng lực\'.';
$string['createtoken'] = 'Tạo token';
$string['createtokenforuser'] = 'Tạo token cho người dùng';
$string['createtokenforuserdescription'] = 'Tạo token cho người dùng dịch vụ web.';
$string['createuser'] = 'Tạo một người dùng cụ thể';
$string['createuserdescription'] = 'Cần có một người dùng dịch vụ web để đại diện cho hệ thống điều khiển Moodle.';
$string['criteriaerror'] = 'Thiếu quyền tìm kiếm theo tiêu chí.';
$string['default'] = 'Mặc định là "{$a}"';
$string['deleteaservice'] = 'Xóa dịch vụ';
$string['deleteservice'] = 'Xóa dịch vụ: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Xóa dịch vụ cũng sẽ xóa các token liên quan đến dịch vụ đó. Bạn có thực sự muốn xóa dịch vụ bên ngoài "{$a}" không?';
$string['deletetoken'] = 'Xóa token';
$string['deletetokenconfirm'] = 'Bạn có thực sự muốn xóa token dịch vụ web này của <strong>{$a->user}</strong> trên dịch vụ <strong>{$a->service}</strong> không?';
$string['deprecated'] = 'Không còn được khuyến nghị sử dụng';
$string['disabledwarning'] = 'Tất cả giao thức dịch vụ web đều bị tắt. Có thể tìm thấy thiết lập "Bật dịch vụ web" trong Tính năng nâng cao.';
$string['doc'] = 'Tài liệu';
$string['docaccessrefused'] = 'Bạn không được phép xem tài liệu cho token này';
$string['downloadfiles'] = 'Có thể tải xuống tệp';
$string['downloadfiles_help'] = 'Nếu bật, mọi người dùng đều có thể tải tệp xuống bằng khóa bảo mật của họ. Tất nhiên, họ chỉ được truy cập các tệp mà họ được phép tải xuống trên trang web.';
$string['editaservice'] = 'Chỉnh sửa dịch vụ';
$string['editexternalservice'] = 'Chỉnh sửa dịch vụ bên ngoài';
$string['editservice'] = 'Chỉnh sửa dịch vụ: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Đã bật';
$string['enabledocumentation'] = 'Bật tài liệu dành cho nhà phát triển';
$string['enabledocumentationdescription'] = 'Có tài liệu dịch vụ web chi tiết cho các giao thức đã bật.';
$string['enableprotocols'] = 'Bật giao thức';
$string['enableprotocolsdescription'] = 'Cần bật ít nhất một giao thức. Vì lý do bảo mật, chỉ nên bật các giao thức sẽ được sử dụng.';
$string['enablews'] = 'Bật dịch vụ web';
$string['enablewsdescription'] = 'Phải bật dịch vụ web trong mục Tính năng nâng cao.';
$string['entertoken'] = 'Nhập khóa bảo mật/token:';
$string['error'] = 'Lỗi: {$a}';
$string['errorcatcontextnotvalid'] = 'Bạn không thể thực thi các hàm trong ngữ cảnh danh mục (id danh mục:{$a->catid}). Thông báo lỗi ngữ cảnh là: {$a->message}';
$string['errorcodes'] = 'Thông báo lỗi';
$string['errorcoursecontextnotvalid'] = 'Bạn không thể thực thi các hàm trong ngữ cảnh khóa học (id khóa học:{$a->courseid}). Thông báo lỗi ngữ cảnh là: {$a->message}';
$string['errorinvalidparam'] = 'Tham số "{$a}" không hợp lệ.';
$string['errornotemptydefaultparamarray'] = 'Tham số \'{$a}\' trong mô tả dịch vụ web là cấu trúc đơn hoặc nhiều phần tử. Giá trị mặc định chỉ có thể là mảng rỗng. Hãy kiểm tra mô tả dịch vụ web.';
$string['erroroptionalparamarray'] = 'Tham số \'{$a}\' trong mô tả dịch vụ web là cấu trúc đơn hoặc nhiều phần tử. Không thể đặt tham số này thành VALUE_OPTIONAL. Hãy kiểm tra mô tả dịch vụ web.';
$string['eventwebservicefunctioncalled'] = 'Đã gọi hàm dịch vụ web';
$string['eventwebserviceloginfailed'] = 'Đăng nhập dịch vụ web thất bại';
$string['eventwebserviceservicecreated'] = 'Đã tạo dịch vụ web';
$string['eventwebserviceservicedeleted'] = 'Đã xóa dịch vụ web';
$string['eventwebserviceserviceupdated'] = 'Đã cập nhật dịch vụ web';
$string['eventwebserviceserviceuseradded'] = 'Đã thêm người dùng dịch vụ web';
$string['eventwebserviceserviceuserremoved'] = 'Đã xóa người dùng dịch vụ web';
$string['eventwebservicetokencreated'] = 'Đã tạo token dịch vụ web';
$string['eventwebservicetokensent'] = 'Đã gửi token dịch vụ web';
$string['execute'] = 'Thực thi';
$string['executewarnign'] = 'CẢNH BÁO: Nếu nhấn thực thi, cơ sở dữ liệu của bạn sẽ bị thay đổi và các thay đổi không thể tự động hoàn tác!';
$string['externalservice'] = 'Dịch vụ bên ngoài';
$string['externalservicefunctions'] = 'Các hàm dịch vụ bên ngoài';
$string['externalservices'] = 'Các dịch vụ bên ngoài';
$string['externalserviceusers'] = 'Người dùng dịch vụ bên ngoài';
$string['failedtolog'] = 'Không thể ghi nhật ký';
$string['filenameexist'] = 'Tên tệp đã tồn tại: {$a}';
$string['forbiddenwsuser'] = 'Không thể tạo token cho người dùng chưa xác nhận, đã xóa, bị tạm khóa hoặc khách.';
$string['function'] = 'Hàm';
$string['functions'] = 'Các hàm';
$string['generalstructure'] = 'Cấu trúc chung';
$string['information'] = 'Thông tin';
$string['installexistingserviceshortnameerror'] = 'Đã tồn tại một dịch vụ web có tên ngắn "{$a}". Không thể cài đặt/cập nhật dịch vụ web khác có cùng tên ngắn này.';
$string['installserviceshortnameerror'] = 'Lỗi mã hóa: tên ngắn dịch vụ "{$a}" chỉ được chứa ký tự chữ và số, dấu gạch dưới (_), dấu gạch nối (-) hoặc dấu chấm (.)';
$string['invalidextparam'] = 'Tham số API bên ngoài không hợp lệ: {$a}';
$string['invalidextresponse'] = 'Phản hồi API bên ngoài không hợp lệ: {$a}';
$string['invalidiptoken'] = 'Token không hợp lệ - IP của bạn không được hỗ trợ';
$string['invalidtimedtoken'] = 'Token không hợp lệ - token đã hết hạn';
$string['invalidtoken'] = 'Token không hợp lệ - không tìm thấy token';
$string['iprestriction'] = 'Giới hạn IP';
$string['iprestriction_help'] = 'Người dùng cần gọi dịch vụ web từ các IP được liệt kê (phân tách bằng dấu phẩy).';
$string['key'] = 'Khóa';
$string['keyshelp'] = 'Các khóa được dùng để truy cập tài khoản Moodle của bạn từ các ứng dụng bên ngoài.';
$string['loginrequired'] = 'Chỉ giới hạn cho người dùng đã đăng nhập';
$string['manageprotocols'] = 'Quản lý giao thức';
$string['managetokens'] = 'Quản lý token';
$string['missingcaps'] = 'Thiếu quyền năng lực';
$string['missingcaps_help'] = 'Danh sách các quyền năng lực do dịch vụ khai báo mà người dùng chưa có. Một số chức năng của dịch vụ có thể không khả dụng nếu thiếu các quyền năng lực này.';
$string['missingpassword'] = 'Thiếu mật khẩu';
$string['missingrequiredcapability'] = 'Cần có quyền năng lực {$a}.';
$string['missingusername'] = 'Thiếu tên người dùng';
$string['nameexists'] = 'Tên này đã được một dịch vụ khác sử dụng';
$string['nocapabilitytouseparameter'] = 'Người dùng không có quyền năng lực cần thiết để sử dụng tham số {$a}';
$string['nofunctions'] = 'Dịch vụ này không có hàm nào.';
$string['norequiredcapability'] = 'Không yêu cầu quyền năng lực';
$string['notoken'] = 'Danh sách token trống.';
$string['onesystemcontrolling'] = 'Cho phép hệ thống bên ngoài điều khiển Moodle';
$string['onesystemcontrollingdescription'] = 'Các bước sau giúp bạn thiết lập dịch vụ web Moodle để cho phép hệ thống bên ngoài tương tác với Moodle. Việc này bao gồm thiết lập phương thức xác thực bằng token (khóa bảo mật).';
$string['onlyseecreatedtokens'] = 'Bạn chỉ có thể xem các token do mình tạo.';
$string['operation'] = 'Thao tác';
$string['optional'] = 'Tùy chọn';
$string['passwordisexpired'] = 'Mật khẩu đã hết hạn.';
$string['phpparam'] = 'XML-RPC (cấu trúc PHP)';
$string['phpresponse'] = 'XML-RPC (cấu trúc PHP)';
$string['postrestparam'] = 'Mã PHP cho REST (yêu cầu POST)';
$string['potusers'] = 'Người dùng chưa được ủy quyền';
$string['potusersmatching'] = 'Người dùng chưa được ủy quyền khớp với';
$string['print'] = 'In tất cả';
$string['privacy:metadata'] = 'API WebService không lưu trữ dữ liệu nào';
$string['protocol'] = 'Giao thức';
$string['removefunction'] = 'Xóa';
$string['removefunctionconfirm'] = 'Bạn có thực sự muốn xóa hàm "{$a->function}" khỏi dịch vụ "{$a->service}" không?';
$string['requireauthentication'] = 'Phương thức này yêu cầu xác thực với quyền xxx.';
$string['required'] = 'Bắt buộc';
$string['requiredcapability'] = 'Quyền năng lực bắt buộc';
$string['requiredcapability_help'] = 'Nếu được đặt, chỉ người dùng có quyền năng lực bắt buộc mới có thể truy cập dịch vụ.';
$string['requiredcaps'] = 'Các quyền năng lực bắt buộc';
$string['resettokencomplete'] = 'Đã đặt lại token được chọn';
$string['resettokenconfirm'] = 'Bạn có thực sự muốn đặt lại khóa dịch vụ web này của <strong>{$a->user}</strong> trên dịch vụ <strong>{$a->service}</strong> không?';
$string['resettokenconfirmsimple'] = 'Bạn có thực sự muốn đặt lại khóa này không? Mọi liên kết đã lưu có chứa khóa cũ sẽ không còn hoạt động.';
$string['response'] = 'Phản hồi';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Tài khoản được khôi phục cần đặt lại mật khẩu trước khi nhận token.';
$string['restparam'] = 'REST (tham số POST)';
$string['restrictedusers'] = 'Chỉ người dùng được ủy quyền';
$string['restrictedusers_help'] = 'Thiết lập này xác định liệu tất cả người dùng có quyền tạo token dịch vụ web có thể tạo token cho dịch vụ này thông qua trang khóa bảo mật của họ, hay chỉ người dùng được ủy quyền mới có thể làm điều đó.';
$string['securitykey'] = 'Khóa bảo mật (token)';
$string['securitykeys'] = 'Các khóa bảo mật';
$string['selectauthorisedusers'] = 'Chọn người dùng được ủy quyền';
$string['selectedcapability'] = 'Đã chọn';
$string['selectedcapabilitydoesntexit'] = 'Quyền năng lực bắt buộc hiện được đặt ({$a}) không còn tồn tại. Vui lòng thay đổi và lưu các thay đổi.';
$string['selectservice'] = 'Chọn một dịch vụ';
$string['selectspecificuser'] = 'Chọn một người dùng cụ thể';
$string['selectspecificuserdescription'] = 'Thêm người dùng dịch vụ web làm người dùng được ủy quyền.';
$string['service'] = 'Dịch vụ';
$string['servicehelpexplanation'] = 'Dịch vụ là một tập hợp các hàm. Tất cả người dùng hoặc chỉ những người dùng được chỉ định đều có thể truy cập dịch vụ.';
$string['servicename'] = 'Tên dịch vụ';
$string['servicenotavailable'] = 'Dịch vụ web không khả dụng. (Dịch vụ không tồn tại hoặc có thể đã bị tắt.)';
$string['servicerequireslogin'] = 'Dịch vụ web không khả dụng. (Phiên đã đăng xuất hoặc hết hạn.)';
$string['servicesbuiltin'] = 'Các dịch vụ tích hợp sẵn';
$string['servicescustom'] = 'Các dịch vụ tùy chỉnh';
$string['serviceusers'] = 'Người dùng được ủy quyền';
$string['serviceusersettings'] = 'Thiết lập người dùng';
$string['serviceusersmatching'] = 'Người dùng được ủy quyền khớp với';
$string['serviceuserssettings'] = 'Thay đổi thiết lập cho người dùng được ủy quyền';
$string['shortnametaken'] = 'Tên ngắn đã được một dịch vụ khác sử dụng ({$a})';
$string['simpleauthlog'] = 'Đăng nhập bằng xác thực đơn giản';
$string['step'] = 'Bước';
$string['supplyinfo'] = 'Thêm chi tiết';
$string['testauserwithtestclientdescription'] = 'Mô phỏng quyền truy cập dịch vụ từ bên ngoài bằng ứng dụng khách kiểm thử dịch vụ web. Trước khi thực hiện, hãy đăng nhập với tư cách người dùng có quyền năng lực moodle/webservice:createtoken và lấy khóa bảo mật (token) từ trang tùy chọn của người dùng. Bạn sẽ sử dụng token này trong ứng dụng khách kiểm thử. Trong ứng dụng khách kiểm thử, hãy chọn một giao thức đã bật có xác thực bằng token. <strong>CẢNH BÁO: Các hàm bạn kiểm thử SẼ ĐƯỢC THỰC THI với tư cách người dùng này, vì vậy hãy cẩn thận khi chọn hàm để kiểm thử!</strong>';
$string['testclient'] = 'Ứng dụng khách kiểm thử dịch vụ web';
$string['testclientdescription'] = '* Ứng dụng khách kiểm thử dịch vụ web <strong>thực thi</strong> các hàm trong <strong>THỰC TẾ</strong>. Không kiểm thử các hàm mà bạn không biết. <br/>* Chưa phải tất cả các hàm dịch vụ web hiện có đều được triển khai trong ứng dụng khách kiểm thử. <br/>* Để kiểm tra xem người dùng có thể truy cập một số hàm hay không, bạn có thể kiểm thử các hàm mà bạn chưa cho phép.<br/>* Để xem thông báo lỗi rõ ràng hơn, hãy đặt chế độ gỡ lỗi thành <strong>{$a->mode}</strong> trong {$a->atag}.';
$string['testwithtestclient'] = 'Kiểm thử dịch vụ';
$string['testwithtestclientdescription'] = 'Mô phỏng truy cập bên ngoài vào dịch vụ bằng ứng dụng khách kiểm thử dịch vụ web. Sử dụng một giao thức đã bật có xác thực bằng token. <strong>CẢNH BÁO: Các hàm bạn kiểm thử SẼ ĐƯỢC THỰC THI, vì vậy hãy cẩn thận khi chọn hàm để kiểm thử!</strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Xác thực bằng token';
$string['tokencopied'] = 'Đã sao chép văn bản vào bảng nhớ tạm.';
$string['tokencreatedbyadmin'] = 'Chỉ quản trị viên mới có thể đặt lại (*)';
$string['tokencreator'] = 'Người tạo';
$string['tokenfilter'] = 'Bộ lọc token';
$string['tokenfilterreset'] = 'Hiển thị tất cả token';
$string['tokenfiltersubmit'] = 'Chỉ hiển thị các token khớp';
$string['tokenname'] = 'Tên';
$string['tokennamehint'] = 'Nếu bạn không nhập tên, hệ thống sẽ sử dụng một tên ngẫu nhiên.';
$string['tokennameprefix'] = 'Webservice-{$a}';
$string['tokennewmessage'] = 'Sao chép token ngay bây giờ. Token sẽ không được hiển thị lại sau khi bạn rời khỏi trang này.';
$string['unknownoptionkey'] = 'Khóa tùy chọn không xác định ({$a})';
$string['unnamedstringparam'] = 'Tham số chuỗi chưa được đặt tên.';
$string['updateusersettings'] = 'Cập nhật';
$string['uploadfiles'] = 'Có thể tải tệp lên';
$string['uploadfiles_help'] = 'Nếu bật, mọi người dùng đều có thể tải tệp lên khu vực tệp riêng tư hoặc khu vực tệp nháp của mình bằng khóa bảo mật. Hạn mức tệp của từng người dùng vẫn được áp dụng.';
$string['userasclients'] = 'Người dùng làm ứng dụng khách bằng token';
$string['userasclientsdescription'] = 'Các bước sau giúp bạn thiết lập dịch vụ web Moodle để người dùng đóng vai trò ứng dụng khách. Các bước này cũng giúp thiết lập phương thức xác thực bằng token (khóa bảo mật) được khuyến nghị. Trong trường hợp sử dụng này, người dùng sẽ tạo token của mình từ trang khóa bảo mật thông qua trang tùy chọn.';
$string['usermissingcaps'] = 'Các quyền năng lực còn thiếu: {$a}';
$string['usernameorid'] = 'Tên đăng nhập / ID người dùng';
$string['usernameorid_help'] = 'Nhập tên đăng nhập hoặc ID người dùng.';
$string['usernotallowed'] = 'Người dùng không được phép sử dụng dịch vụ này. Trước tiên, bạn cần cho phép người dùng này trên trang quản lý người dùng được phép của {$a}.';
$string['userservices'] = 'Các dịch vụ của người dùng: {$a}';
$string['usersettingssaved'] = 'Đã lưu cài đặt người dùng';
$string['validuntil'] = 'Có hiệu lực đến';
$string['validuntil_empty'] = 'Token này không có ngày hết hạn.';
$string['validuntil_help'] = 'Nếu được đặt, dịch vụ sẽ bị vô hiệu hóa cho người dùng này sau ngày đó.';
$string['webservice'] = 'Dịch vụ web';
$string['webservices'] = 'Các dịch vụ web';
$string['webservicesoverview'] = 'Tổng quan';
$string['webservicetokens'] = 'Token dịch vụ web';
$string['wrongusernamepassword'] = 'Tên đăng nhập hoặc mật khẩu không đúng';
$string['wsaccessuserdeleted'] = 'Từ chối truy cập dịch vụ web đối với tên đăng nhập đã bị xóa: {$a}';
$string['wsaccessuserexpired'] = 'Từ chối truy cập dịch vụ web đối với tên đăng nhập có mật khẩu đã hết hạn: {$a}';
$string['wsaccessusernologin'] = 'Từ chối truy cập dịch vụ web đối với tên đăng nhập sử dụng phương thức xác thực nologin: {$a}';
$string['wsaccessusersuspended'] = 'Từ chối truy cập dịch vụ web đối với tên đăng nhập bị tạm ngưng: {$a}';
$string['wsaccessuserunconfirmed'] = 'Từ chối truy cập dịch vụ web đối với tên đăng nhập chưa được xác nhận: {$a}';
$string['wsclientdoc'] = 'Tài liệu về ứng dụng khách dịch vụ web Moodle';
$string['wsdocapi'] = 'Tài liệu API';
$string['wsdocumentation'] = 'Tài liệu dịch vụ web';
$string['wsdocumentationdisable'] = 'Tài liệu dịch vụ web đã bị tắt.';
$string['wsdocumentationintro'] = 'Để tạo ứng dụng khách, chúng tôi khuyên bạn nên đọc {$a->doclink}';
$string['wsdocumentationlogin'] = 'hoặc nhập tên đăng nhập và mật khẩu dịch vụ web của bạn:';
$string['wspassword'] = 'Mật khẩu dịch vụ web';
$string['wsusername'] = 'Tên đăng nhập dịch vụ web';
