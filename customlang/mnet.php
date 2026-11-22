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
 * @subpackage mnet
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'Thông tin về máy chủ của bạn';
$string['accesslevel'] = 'Cấp độ truy cập';
$string['addhost'] = 'Thêm máy chủ';
$string['addnewhost'] = 'Thêm máy chủ mới';
$string['addtoacl'] = 'Thêm vào danh sách kiểm soát truy cập';
$string['allhosts'] = 'Tất cả máy chủ';
$string['allhosts_no_options'] = 'Không có tùy chọn nào khi xem nhiều máy chủ';
$string['allow'] = 'Cho phép';
$string['allowaccess'] = 'Cho phép truy cập';
$string['applicationtype'] = 'Loại ứng dụng';
$string['authfail_nosessionexists'] = 'Ủy quyền thất bại: phiên mnet không tồn tại.';
$string['authfail_sessiontimedout'] = 'Ủy quyền thất bại: phiên mnet đã hết thời gian.';
$string['authfail_usermismatch'] = 'Ủy quyền thất bại: người dùng không khớp.';
$string['authmnetdisabled'] = 'Plugin xác thực MNet đã bị <strong>tắt</strong>.';
$string['badcert'] = 'Đây không phải là chứng chỉ hợp lệ.';
$string['certdetails'] = 'Chi tiết chứng chỉ';
$string['configmnet'] = 'MNet cho phép máy chủ này giao tiếp với các máy chủ hoặc dịch vụ khác.';
$string['couldnotgetcert'] = 'Không tìm thấy chứng chỉ tại <br />{$a}. <br />Máy chủ có thể đang ngừng hoạt động hoặc được cấu hình không chính xác.';
$string['couldnotmatchcert'] = 'Chứng chỉ này không khớp với chứng chỉ hiện được máy chủ web công bố.';
$string['courses'] = 'khóa học';
$string['courseson'] = 'khóa học trên';
$string['current_transport'] = 'Phương thức truyền tải hiện tại';
$string['currentkey'] = 'Khóa công khai hiện tại';
$string['databaseerror'] = 'Không thể ghi thông tin vào cơ sở dữ liệu.';
$string['deleteaserver'] = 'Đang xóa máy chủ';
$string['deletedhostinfo'] = 'Máy chủ này đã bị xóa. Nếu muốn khôi phục, hãy đổi trạng thái đã xóa trở lại \'Không\'.';
$string['deletedhosts'] = 'Máy chủ đã xóa: {$a}';
$string['deletehost'] = 'Xóa máy chủ';
$string['deletekeycheck'] = 'Bạn có chắc chắn muốn xóa khóa này không?';
$string['deleteoutoftime'] = 'Đã hết thời hạn 60 giây để xóa khóa này. Vui lòng bắt đầu lại.';
$string['deleteuserrecord'] = 'SSO ACL: xóa bản ghi của người dùng \'{$a->user}\' khỏi {$a->host}.';
$string['deletewrongkeyvalue'] = 'Đã xảy ra lỗi. Nếu bạn không định xóa khóa SSL của máy chủ, có thể bạn đang là mục tiêu của một cuộc tấn công ác ý. Không có hành động nào được thực hiện.';
$string['deny'] = 'Từ chối';
$string['denyaccess'] = 'Từ chối truy cập';
$string['description'] = 'Mô tả';
$string['duplicate_usernames'] = 'Không thể tạo chỉ mục trên các cột "mnethostid" và "username" trong bảng người dùng của bạn.<br />Điều này có thể xảy ra khi <a href="{$a}" target="_blank">bảng người dùng có tên người dùng trùng lặp</a>.<br />Quá trình nâng cấp vẫn sẽ hoàn tất thành công. Nhấp vào liên kết ở trên để xem hướng dẫn khắc phục sự cố trong cửa sổ mới. Bạn có thể xử lý việc này sau khi nâng cấp xong.<br />';
$string['enabled_for_all'] = '(Dịch vụ này đã được bật cho tất cả máy chủ).';
$string['enterausername'] = 'Vui lòng nhập tên người dùng hoặc danh sách tên người dùng được phân tách bằng dấu phẩy.';
$string['error7020'] = 'Lỗi này thường xảy ra nếu trang từ xa đã tạo một bản ghi cho bạn với wwwroot không chính xác, ví dụ: https://yoursite.com thay vì https://www.yoursite.com. Vui lòng liên hệ với quản trị viên của trang từ xa, cung cấp wwwroot của bạn (như được chỉ định trong config.php) và yêu cầu họ cập nhật bản ghi cho máy chủ của bạn.';
$string['error7022'] = 'Thông điệp bạn gửi đến trang từ xa đã được mã hóa đúng cách nhưng không được ký. Điều này rất bất thường; nếu lỗi này xảy ra, có lẽ bạn nên báo cáo lỗi (cung cấp càng nhiều thông tin càng tốt về phiên bản ứng dụng liên quan, v.v.).';
$string['error7023'] = 'Trang từ xa đã thử giải mã thông điệp của bạn bằng tất cả khóa lưu cho trang của bạn nhưng đều thất bại. Bạn có thể khắc phục sự cố này bằng cách tạo lại khóa thủ công với trang từ xa. Điều này khó xảy ra trừ khi bạn đã không liên lạc với trang từ xa trong vài tháng.';
$string['error7024'] = 'Bạn gửi một thông điệp không được mã hóa đến trang từ xa, nhưng trang đó không chấp nhận liên lạc không mã hóa từ trang của bạn. Điều này rất bất thường; nếu lỗi này xảy ra, có lẽ bạn nên báo cáo lỗi (cung cấp càng nhiều thông tin càng tốt về phiên bản ứng dụng liên quan, v.v.).';
$string['error7026'] = 'Khóa dùng để ký thông điệp của bạn khác với khóa mà máy chủ từ xa lưu cho máy chủ của bạn. Ngoài ra, máy chủ từ xa đã thử lấy khóa hiện tại của bạn nhưng không thành công. Vui lòng tạo lại khóa thủ công với máy chủ từ xa rồi thử lại.';
$string['error709'] = 'Trang từ xa không thể lấy khóa SSL từ bạn.';
$string['eventaccesscontrolcreated'] = 'Đã tạo quyền kiểm soát truy cập';
$string['eventaccesscontrolupdated'] = 'Đã cập nhật quyền kiểm soát truy cập';
$string['expired'] = 'Khóa này đã hết hạn vào';
$string['expires'] = 'Có hiệu lực đến';
$string['expireyourkey'] = 'Xóa khóa này';
$string['expireyourkeyexplain'] = 'Moodle tự động luân chuyển khóa của bạn mỗi 28 ngày (theo mặc định), nhưng bạn có thể <em>tự</em> làm khóa này hết hạn bất cứ lúc nào. Việc này chỉ hữu ích nếu bạn cho rằng khóa đã bị xâm phạm. Khóa thay thế sẽ được tự động tạo ngay lập tức.<br />Xóa khóa này sẽ khiến các ứng dụng khác không thể liên lạc với bạn cho đến khi bạn liên hệ thủ công với từng quản trị viên và cung cấp khóa mới.<br />';
$string['exportfields'] = 'Các trường cần xuất';
$string['failedaclwrite'] = 'Không thể ghi vào danh sách kiểm soát truy cập MNet cho người dùng \'{$a}\'.';
$string['findlogin'] = 'Tìm thông tin đăng nhập';
$string['forbidden-function'] = 'Hàm đó chưa được bật cho RPC.';
$string['forbidden-transport'] = 'Phương thức truyền tải bạn đang cố sử dụng không được phép.';
$string['forcesavechanges'] = 'Buộc lưu các thay đổi';
$string['helpnetworksettings'] = 'Cấu hình giao tiếp MNet';
$string['hidelocal'] = 'Ẩn người dùng cục bộ';
$string['hideremote'] = 'Ẩn người dùng từ xa';
$string['host'] = 'máy chủ';
$string['hostcoursenotfound'] = 'Không tìm thấy máy chủ hoặc khóa học';
$string['hostdeleted'] = 'Đã xóa máy chủ';
$string['hostexists'] = 'Đã có bản ghi cho máy chủ có tên máy chủ này. (Có thể máy chủ đã bị xóa.) <a href="{$a}">Chỉnh sửa bản ghi</a>';
$string['hostlist'] = 'Danh sách máy chủ được kết nối mạng';
$string['hostname'] = 'Tên máy chủ';
$string['hostnamehelp'] = 'Tên miền đầy đủ của máy chủ từ xa, ví dụ: www.example.com';
$string['hostnotconfiguredforsso'] = 'Máy chủ này chưa được cấu hình để đăng nhập từ xa.';
$string['hostsettings'] = 'Cài đặt máy chủ';
$string['http_self_signed_help'] = 'Cho phép kết nối bằng chứng chỉ SSL tự ký DIY trên máy chủ từ xa.';
$string['http_verified_help'] = 'Cho phép kết nối bằng chứng chỉ SSL đã xác minh trong PHP trên máy chủ từ xa, nhưng qua http (không phải https).';
$string['https_self_signed_help'] = 'Cho phép kết nối qua http bằng SSL tự ký DIY trong PHP trên máy chủ từ xa.';
$string['https_verified_help'] = 'Cho phép kết nối bằng chứng chỉ SSL đã xác minh trên máy chủ từ xa.';
$string['id'] = 'ID';
$string['idhelp'] = 'Giá trị này được tự động gán và không thể thay đổi';
$string['importfields'] = 'Các trường cần nhập';
$string['inspect'] = 'Kiểm tra';
$string['installnosuchfunction'] = 'Lỗi lập trình! Đang có thao tác cố cài đặt một hàm mnet xmlrpc ({$a->method}) từ một tệp ({$a->file}), nhưng không tìm thấy hàm này!';
$string['installnosuchmethod'] = 'Lỗi lập trình! Đang có thao tác cố cài đặt một phương thức mnet xmlrpc ({$a->method}) trên một lớp ({$a->class}), nhưng không tìm thấy phương thức này!';
$string['installreflectionclasserror'] = 'Lỗi lập trình! MNet không thể kiểm tra nội quan cho phương thức \'{$a->method}\' trong lớp \'{$a->class}\'. Thông báo lỗi gốc, nếu có ích: \'{$a->error}\\';
$string['installreflectionfunctionerror'] = 'Lỗi lập trình! MNet không thể kiểm tra nội quan cho hàm \'{$a->method}\' trong tệp \'{$a->file}\'. Thông báo lỗi gốc, nếu có ích: \'{$a->error}\\';
$string['invalidaccessparam'] = 'Tham số truy cập không hợp lệ.';
$string['invalidactionparam'] = 'Tham số hành động không hợp lệ.';
$string['invalidhost'] = 'Bạn phải cung cấp mã định danh máy chủ hợp lệ';
$string['invalidpubkey'] = 'Khóa này không phải là khóa SSL hợp lệ. ({$a})';
$string['invalidurl'] = 'Tham số URL không hợp lệ.';
$string['ipaddress'] = 'Địa chỉ IP';
$string['is_in_range'] = 'Địa chỉ IP <code>{$a}</code> đại diện cho một máy chủ đáng tin cậy hợp lệ.';
$string['ispublished'] = '{$a} đã bật dịch vụ này cho bạn.';
$string['issubscribed'] = '{$a} đang đăng ký dịch vụ này trên máy chủ của bạn.';
$string['keydeleted'] = 'Khóa của bạn đã được xóa và thay thế thành công.';
$string['keydeletedcancelled'] = 'Không có thay đổi nào được thực hiện đối với khóa.';
$string['keymismatch'] = 'Khóa công khai bạn đang lưu cho máy chủ này khác với khóa công khai hiện được máy chủ công bố. Khóa hiện được công bố là:';
$string['last_connect_time'] = 'Thời điểm kết nối gần nhất';
$string['last_connect_time_help'] = 'Thời điểm bạn kết nối với máy chủ này lần gần nhất.';
$string['last_transport_help'] = 'Phương thức truyền tải bạn đã dùng trong lần kết nối gần nhất với máy chủ này.';
$string['leavedefault'] = 'Thay vào đó, hãy dùng cài đặt mặc định';
$string['listservices'] = 'Liệt kê dịch vụ';
$string['loginlinkmnetuser'] = '<br />Nếu bạn là người dùng MNet từ xa và có thể <a href="{$a}">xác nhận địa chỉ email tại đây</a>, bạn có thể được chuyển hướng đến trang đăng nhập của mình.<br />';
$string['logs'] = 'nhật ký';
$string['managemnetpeers'] = 'Quản lý máy chủ ngang hàng';
$string['method'] = 'Phương thức';
$string['methodhelp'] = 'Trợ giúp về phương thức {$a}';
$string['methodsavailableonhost'] = 'Các phương thức có trên {$a}';
$string['methodsavailableonhostinservice'] = 'Các phương thức có sẵn cho {$a->service} trên {$a->host}';
$string['methodsignature'] = 'Chữ ký phương thức của {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Nối tối đa 3 chuỗi và trả về kết quả';
$string['mnet_session_prohibited'] = 'Người dùng từ máy chủ chính của bạn hiện không được phép chuyển sang {$a}.';
$string['mnetdisabled'] = 'MNet đang <strong>bị tắt</strong>.';
$string['mnetidprovider'] = 'Nhà cung cấp ID MNet';
$string['mnetidproviderdesc'] = 'Bạn có thể dùng tiện ích này để lấy liên kết đăng nhập, nếu cung cấp được địa chỉ email chính xác khớp với tên đăng nhập bạn đã dùng trước đó.';
$string['mnetidprovidermsg'] = 'Bạn có thể đăng nhập tại nhà cung cấp {$a} của mình.';
$string['mnetidprovidernotfound'] = 'Rất tiếc, không tìm thấy thêm thông tin nào.';
$string['mnetpeers'] = 'Máy chủ ngang hàng';
$string['mnetservices'] = 'Dịch vụ';
$string['mnetsettings'] = 'Cài đặt MNet';
$string['moodle_home_help'] = 'Đường dẫn đến trang chủ của ứng dụng MNet trên máy chủ từ xa, ví dụ: /moodle/.';
$string['name'] = 'Tên';
$string['net'] = 'Kết nối mạng';
$string['networksettings'] = 'Cài đặt mạng';
$string['never'] = 'Không bao giờ';
$string['noaclentries'] = 'Không có mục nào trong danh sách kiểm soát truy cập SSO';
$string['noaddressforhost'] = 'Rất tiếc, không thể phân giải tên máy chủ ({$a})!';
$string['nocurl'] = 'Chưa cài đặt thư viện PHP cURL';
$string['nolocaluser'] = 'Không có bản ghi cục bộ cho người dùng từ xa và không thể tạo bản ghi vì máy chủ này không tự động tạo người dùng. Vui lòng liên hệ với quản trị viên!';
$string['nomodifyacl'] = 'Bạn không được phép sửa đổi danh sách kiểm soát truy cập MNet.';
$string['nonmatchingcert'] = 'Chủ thể của chứng chỉ: <br /><em>{$a->subject}</em><br />không khớp với máy chủ mà chứng chỉ đến từ đó:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Đã xảy ra sự cố khi lấy khóa công khai.<br />Có thể máy chủ không cho phép MNet hoặc khóa không hợp lệ.';
$string['nosite'] = 'Không tìm thấy khóa học cấp trang';
$string['nosuchfile'] = 'Tệp/hàm {$a} không tồn tại.';
$string['nosuchfunction'] = 'Không tìm thấy hàm hoặc hàm này bị cấm dùng cho RPC.';
$string['nosuchmodule'] = 'Địa chỉ của hàm không đúng nên không thể tìm thấy. Vui lòng dùng định dạng mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Không thể lấy khóa công khai để xác minh chữ ký.';
$string['nosuchservice'] = 'Dịch vụ RPC không chạy trên máy chủ này.';
$string['nosuchtransport'] = 'Không tồn tại phương thức truyền tải có ID đó.';
$string['not_in_range'] = 'Địa chỉ IP <code>{$a}</code> không đại diện cho một máy chủ đáng tin cậy hợp lệ.';
$string['notBASE64'] = 'Chuỗi này không ở định dạng mã hóa base64. Đây không thể là khóa hợp lệ.';
$string['notenoughidpinfo'] = 'Nhà cung cấp danh tính của bạn không cung cấp đủ thông tin để chúng tôi tạo hoặc cập nhật tài khoản của bạn trên hệ thống cục bộ. Rất tiếc!';
$string['notinxmlrpcserver'] = 'Đang cố truy cập ứng dụng khách MNet từ xa bên ngoài quá trình thực thi máy chủ XMLRPC';
$string['notmoodleapplication'] = 'CẢNH BÁO: Đây không phải là ứng dụng Moodle, vì vậy một số phương thức kiểm tra có thể không hoạt động chính xác.';
$string['notPEM'] = 'Khóa này không ở định dạng PEM. Khóa sẽ không hoạt động.';
$string['notpermittedtojump'] = 'Bạn không có quyền bắt đầu phiên từ xa từ máy chủ Moodle này.';
$string['notpermittedtojumpas'] = 'Bạn không thể bắt đầu phiên từ xa khi đang đăng nhập với tư cách người dùng khác.';
$string['notpermittedtoland'] = 'Bạn không có quyền bắt đầu phiên từ xa.';
$string['off'] = 'Tắt';
$string['on'] = 'Bật';
$string['options'] = 'Tùy chọn';
$string['peerprofilefielddesc'] = 'Tại đây, bạn có thể ghi đè cài đặt toàn cục về các trường hồ sơ cần gửi và nhập khi tạo người dùng mới';
$string['permittedtransports'] = 'Các phương thức truyền tải được phép';
$string['phperror'] = 'Lỗi PHP nội bộ đã khiến yêu cầu của bạn không thể được xử lý.';
$string['position'] = 'Vị trí';
$string['postrequired'] = 'Chức năng xóa yêu cầu một yêu cầu POST.';
$string['privacy:metadata:external:mahara'] = 'Plugin này có thể gửi dữ liệu ra bên ngoài đến một ứng dụng Mahara được liên kết.';
$string['privacy:metadata:external:moodle'] = 'Plugin này có thể gửi dữ liệu ra bên ngoài đến một ứng dụng Moodle được liên kết.';
$string['privacy:metadata:mnet_external:address'] = 'Địa chỉ của người dùng.';
$string['privacy:metadata:mnet_external:alternatename'] = 'Tên thay thế của người dùng.';
$string['privacy:metadata:mnet_external:autosubscribe'] = 'Tùy chọn về việc tự động đăng ký người dùng vào các diễn đàn mà họ đăng bài.';
$string['privacy:metadata:mnet_external:calendartype'] = 'Tùy chọn của người dùng về loại lịch sẽ sử dụng.';
$string['privacy:metadata:mnet_external:city'] = 'Thành phố của người dùng.';
$string['privacy:metadata:mnet_external:country'] = 'Quốc gia nơi người dùng sinh sống.';
$string['privacy:metadata:mnet_external:currentlogin'] = 'Lần đăng nhập hiện tại của người dùng này.';
$string['privacy:metadata:mnet_external:department'] = 'Phòng ban nơi người dùng này làm việc.';
$string['privacy:metadata:mnet_external:description'] = 'Thông tin chung về người dùng này.';
$string['privacy:metadata:mnet_external:email'] = 'Địa chỉ email để liên hệ.';
$string['privacy:metadata:mnet_external:emailstop'] = 'Tùy chọn ngừng gửi email cho người dùng.';
$string['privacy:metadata:mnet_external:firstaccess'] = 'Thời điểm người dùng này truy cập trang lần đầu.';
$string['privacy:metadata:mnet_external:firstname'] = 'Tên của người dùng.';
$string['privacy:metadata:mnet_external:firstnamephonetic'] = 'Thông tin phiên âm tên của người dùng.';
$string['privacy:metadata:mnet_external:id'] = 'ID người dùng';
$string['privacy:metadata:mnet_external:idnumber'] = 'Mã số định danh do cơ sở cấp';
$string['privacy:metadata:mnet_external:imagealt'] = 'Văn bản thay thế cho hình ảnh của người dùng.';
$string['privacy:metadata:mnet_external:institution'] = 'Cơ sở mà người dùng này là thành viên.';
$string['privacy:metadata:mnet_external:lang'] = 'Tùy chọn của người dùng về ngôn ngữ hiển thị.';
$string['privacy:metadata:mnet_external:lastaccess'] = 'Thời điểm người dùng truy cập trang lần gần nhất.';
$string['privacy:metadata:mnet_external:lastlogin'] = 'Lần đăng nhập gần nhất của người dùng này.';
$string['privacy:metadata:mnet_external:lastname'] = 'Họ của người dùng.';
$string['privacy:metadata:mnet_external:lastnamephonetic'] = 'Thông tin phiên âm họ của người dùng.';
$string['privacy:metadata:mnet_external:maildigest'] = 'Cài đặt bản tổng hợp email của người dùng này.';
$string['privacy:metadata:mnet_external:maildisplay'] = 'Tùy chọn của người dùng về việc hiển thị địa chỉ email cho người dùng khác.';
$string['privacy:metadata:mnet_external:middlename'] = 'Tên đệm của người dùng';
$string['privacy:metadata:mnet_external:phone1'] = 'Số điện thoại của người dùng.';
$string['privacy:metadata:mnet_external:phone2'] = 'Số điện thoại bổ sung của người dùng.';
$string['privacy:metadata:mnet_external:picture'] = 'Thông tin chi tiết về ảnh gắn với người dùng này.';
$string['privacy:metadata:mnet_external:policyagreed'] = 'Cờ xác định người dùng đã đồng ý với chính sách của trang hay chưa.';
$string['privacy:metadata:mnet_external:suspended'] = 'Cờ cho biết người dùng đã bị đình chỉ trên hệ thống này hay chưa.';
$string['privacy:metadata:mnet_external:timezone'] = 'Múi giờ của người dùng';
$string['privacy:metadata:mnet_external:trackforums'] = 'Tùy chọn về diễn đàn và việc theo dõi diễn đàn.';
$string['privacy:metadata:mnet_external:trustbitmask'] = 'Mặt nạ bit tin cậy';
$string['privacy:metadata:mnet_external:username'] = 'Tên đăng nhập của người dùng này.';
$string['privacy:metadata:mnet_log'] = 'Thông tin chi tiết về các hành động từ xa do người dùng cục bộ thực hiện khi đăng nhập vào hệ thống từ xa.';
$string['privacy:metadata:mnet_log:action'] = 'Hành động do người dùng thực hiện.';
$string['privacy:metadata:mnet_log:cmid'] = 'ID của mô-đun khóa học.';
$string['privacy:metadata:mnet_log:course'] = 'ID khóa học trên hệ thống từ xa nơi hành động diễn ra.';
$string['privacy:metadata:mnet_log:coursename'] = 'Tên đầy đủ của khóa học trên hệ thống từ xa nơi hành động diễn ra.';
$string['privacy:metadata:mnet_log:hostid'] = 'ID MNet của hệ thống từ xa.';
$string['privacy:metadata:mnet_log:info'] = 'Thông tin bổ sung về hành động.';
$string['privacy:metadata:mnet_log:ip'] = 'Địa chỉ IP được sử dụng khi hành động diễn ra.';
$string['privacy:metadata:mnet_log:module'] = 'Mô-đun trên hệ thống từ xa nơi hành động diễn ra.';
$string['privacy:metadata:mnet_log:remoteid'] = 'ID từ xa của người dùng đã thực hiện hành động trên hệ thống từ xa.';
$string['privacy:metadata:mnet_log:time'] = 'Thời điểm hành động diễn ra.';
$string['privacy:metadata:mnet_log:url'] = 'URL của hệ thống từ xa nơi hành động diễn ra.';
$string['privacy:metadata:mnet_log:userid'] = 'ID cục bộ của người dùng đã thực hiện hành động trên hệ thống từ xa.';
$string['privacy:metadata:mnet_session'] = 'Thông tin chi tiết về từng phiên người dùng MNet trên hệ thống từ xa. Dữ liệu được lưu trữ tạm thời.';
$string['privacy:metadata:mnet_session:expires'] = 'Thời điểm phiên hết hạn.';
$string['privacy:metadata:mnet_session:mnethostid'] = 'ID MNet của hệ thống từ xa.';
$string['privacy:metadata:mnet_session:token'] = 'Mã định danh phiên duy nhất';
$string['privacy:metadata:mnet_session:useragent'] = 'Tác nhân người dùng được dùng để truy cập hệ thống từ xa';
$string['privacy:metadata:mnet_session:userid'] = 'ID của người dùng chuyển sang hệ thống từ xa.';
$string['privacy:metadata:mnet_session:username'] = 'Tên đăng nhập của người dùng chuyển sang hệ thống từ xa.';
$string['profileexportfields'] = 'Các trường cần gửi';
$string['profilefielddesc'] = 'Tại đây, bạn có thể cấu hình danh sách các trường hồ sơ được gửi và nhận qua MNet khi tài khoản người dùng được tạo hoặc cập nhật. Bạn cũng có thể ghi đè cài đặt này riêng cho từng máy chủ ngang hàng MNet. Lưu ý rằng các trường sau luôn được gửi và không thể tùy chọn: {$a}';
$string['profilefields'] = 'Các trường hồ sơ';
$string['profileimportfields'] = 'Các trường cần nhập';
$string['promiscuous'] = 'Không hạn chế';
$string['publickey'] = 'Khóa công khai';
$string['publickey_help'] = 'Khóa công khai được tự động lấy từ máy chủ từ xa.';
$string['publickeyrequired'] = 'Bạn phải cung cấp khóa công khai.';
$string['publish'] = 'Công bố';
$string['reallydeleteserver'] = 'Bạn có chắc muốn xóa máy chủ này không?';
$string['receivedwarnings'] = 'Đã nhận được các cảnh báo sau';
$string['recordnoexists'] = 'Bản ghi không tồn tại.';
$string['reenableserver'] = 'Không - chọn tùy chọn này để bật lại máy chủ.';
$string['registerallhosts'] = 'Đăng ký tất cả máy chủ (chế độ không hạn chế)';
$string['registerallhostsexplain'] = 'Bạn có thể chọn tự động đăng ký tất cả máy chủ cố gắng kết nối với bạn. Điều này có nghĩa là danh sách máy chủ của bạn sẽ có bản ghi cho mọi trang MNet kết nối với bạn và yêu cầu khóa công khai của bạn.<br />Bạn có thể cấu hình dịch vụ cho \'Tất cả máy chủ\' bên dưới; bằng cách bật một số dịch vụ tại đó, bạn có thể cung cấp dịch vụ cho mọi máy chủ từ xa mà không phân biệt.';
$string['registerhostsoff'] = 'Hiện đang <b>tắt</b> tính năng đăng ký tất cả máy chủ';
$string['registerhostson'] = 'Hiện đang <b>bật</b> tính năng đăng ký tất cả máy chủ';
$string['remotecourses'] = 'Các khóa học từ xa';
$string['remotehost'] = 'Máy chủ từ xa';
$string['remotehosts'] = 'Các máy chủ từ xa';
$string['remoteuser'] = 'Người dùng {$a->remotetype} từ xa';
$string['remoteuserinfo'] = 'Hồ sơ được lấy từ <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Kết nối mạng cần có phần mở rộng OpenSSL';
$string['restore'] = 'Khôi phục';
$string['returnvalue'] = 'Giá trị trả về';
$string['reviewhostdetails'] = 'Xem lại thông tin máy chủ';
$string['reviewhostservices'] = 'Xem lại dịch vụ của máy chủ';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP không mã hóa';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (tự ký)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (đã ký)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (tự ký)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (đã ký)';
$string['selectaccesslevel'] = 'Vui lòng chọn cấp độ truy cập trong danh sách.';
$string['selectahost'] = 'Vui lòng chọn máy chủ từ xa.';
$string['service'] = 'Tên dịch vụ';
$string['serviceid'] = 'ID dịch vụ';
$string['servicesavailableonhost'] = 'Các dịch vụ có sẵn trên {$a}';
$string['serviceswepublish'] = 'Các dịch vụ chúng tôi cung cấp cho {$a}.';
$string['serviceswesubscribeto'] = 'Các dịch vụ trên {$a} mà chúng tôi đăng ký.';
$string['settings'] = 'Cài đặt';
$string['showlocal'] = 'Hiển thị người dùng cục bộ';
$string['showremote'] = 'Hiển thị người dùng từ xa';
$string['ssl_acl_allow'] = 'ACL SSO: Cho phép người dùng \'{$a->user}\' từ \'{$a->host}\\';
$string['ssl_acl_deny'] = 'ACL SSO: Từ chối người dùng \'{$a->user}\' từ \'{$a->host}\\';
$string['sslverification'] = 'Xác minh SSL';
$string['sslverification_help'] = 'Tùy chọn này cho phép bạn cấu hình mức độ bảo mật khi kết nối với máy chủ ngang hàng bằng HTTPS.

* Không: không có mức độ bảo mật
* Chỉ xác minh máy chủ: xác thực tên miền của chứng chỉ SSL
* Xác minh máy chủ và máy ngang hàng (khuyến nghị): xác thực tên miền và tổ chức cấp chứng chỉ SSL';
$string['ssoaccesscontrol'] = 'Kiểm soát truy cập SSO';
$string['ssoacldescr'] = 'Dùng trang này để cấp/từ chối quyền truy cập cho những người dùng cụ thể từ các máy chủ MNet từ xa. Tính năng này hoạt động khi bạn cung cấp dịch vụ SSO cho người dùng từ xa. Để kiểm soát khả năng chuyển sang các máy chủ MNet khác của người dùng <em>cục bộ</em>, hãy dùng hệ thống vai trò để cấp cho họ quyền năng lực <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Để tính năng này hoạt động, bạn phải bật Kết nối mạng và bật plugin xác thực MNet.';
$string['strict'] = 'Nghiêm ngặt';
$string['subscribe'] = 'Đăng ký';
$string['system'] = 'Hệ thống';
$string['testclient'] = 'Ứng dụng khách kiểm tra MNet';
$string['testtrustedhosts'] = 'Kiểm tra một địa chỉ';
$string['testtrustedhostsexplain'] = 'Nhập địa chỉ IP để kiểm tra xem đó có phải là máy chủ đáng tin cậy hay không.';
$string['theypublish'] = 'Họ cung cấp';
$string['theysubscribe'] = 'Họ đăng ký nhận';
$string['transport_help'] = 'Các tùy chọn này có tính tương hỗ, vì vậy bạn chỉ có thể buộc máy chủ từ xa sử dụng chứng chỉ SSL có chữ ký nếu máy chủ của bạn cũng có chứng chỉ SSL có chữ ký.';
$string['trustedhosts'] = 'Máy chủ XML-RPC';
$string['trustedhostsexplain'] = '<p>Cơ chế máy chủ đáng tin cậy cho phép các máy cụ thể thực hiện lệnh gọi qua XML-RPC đến bất kỳ phần nào của API Moodle. Tính năng này cho phép các tập lệnh kiểm soát hành vi của Moodle và có thể rất nguy hiểm nếu bật. Nếu không chắc chắn, hãy để tính năng này tắt.</p>
<p><strong>Không cần tính năng này cho bất kỳ tính năng MNet tiêu chuẩn nào!</strong> Chỉ bật nếu bạn biết rõ mình đang làm gì.</p>
<p>Để bật tính năng này, hãy nhập danh sách địa chỉ IP hoặc mạng,
mỗi địa chỉ trên một dòng. Một số ví dụ:</p>
Máy chủ cục bộ của bạn:<br />127.0.0.1<br />Máy chủ cục bộ của bạn (với một khối mạng):<br />127.0.0.1/32<br />Chỉ máy chủ có địa chỉ IP 192.168.0.7:<br />192.168.0.7/32<br />Bất kỳ máy chủ nào có địa chỉ IP từ 192.168.0.1 đến 192.168.0.255:<br />192.168.0.0/24<br />Bất kỳ máy chủ nào:<br />192.168.0.0/0<br />Rõ ràng ví dụ cuối cùng <strong>không</strong> phải là cấu hình được khuyến nghị.';
$string['turnitoff'] = 'Tắt';
$string['turniton'] = 'Bật';
$string['type'] = 'Loại';
$string['unknown'] = 'Không xác định';
$string['unknownerror'] = 'Đã xảy ra lỗi không xác định trong quá trình thương lượng.';
$string['usercannotchangepassword'] = 'Bạn không thể đổi mật khẩu tại đây vì bạn là người dùng từ xa.';
$string['userchangepasswordlink'] = '<br /> Bạn có thể đổi mật khẩu tại nhà cung cấp <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> của mình.';
$string['usernotfullysetup'] = 'Tài khoản người dùng của bạn chưa hoàn chỉnh. Bạn cần <a href="{$a}">quay lại nhà cung cấp</a> và hoàn tất hồ sơ tại đó. Bạn có thể cần đăng xuất rồi đăng nhập lại để thay đổi này có hiệu lực.';
$string['usersareonline'] = 'Cảnh báo: Hiện có {$a} người dùng từ máy chủ đó đang đăng nhập vào trang của bạn.';
$string['validated_by'] = 'Được mạng xác thực: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Xác minh máy chủ và đối tác';
$string['verifyhostonly'] = 'Chỉ xác minh máy chủ';
$string['verifysignature-error'] = 'Xác minh chữ ký không thành công. Đã xảy ra lỗi.';
$string['verifysignature-invalid'] = 'Xác minh chữ ký không thành công. Có vẻ như dữ liệu tải trọng này không được bạn ký.';
$string['version'] = 'Phiên bản';
$string['warning'] = 'Cảnh báo';
$string['wrong-ip'] = 'Địa chỉ IP của bạn không khớp với địa chỉ chúng tôi lưu.';
$string['xmlrpc-missing'] = 'Bạn phải cài đặt XML-RPC trong bản dựng PHP để có thể sử dụng tính năng này.';
$string['yourhost'] = 'Máy chủ của bạn';
$string['yourpeers'] = 'Các máy chủ ngang hàng của bạn';
