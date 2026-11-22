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
 * @package    mod
 * @subpackage lti
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Chấp nhận';
$string['accept_grades'] = 'Chấp nhận điểm từ công cụ';
$string['accept_grades_admin'] = 'Chấp nhận điểm từ công cụ';
$string['accept_grades_admin_help'] = 'Chỉ định liệu nhà cung cấp công cụ có thể thêm, cập nhật, đọc và xóa điểm liên quan đến các phiên bản của công cụ này hay không.

Một số nhà cung cấp công cụ hỗ trợ gửi điểm trở lại Moodle dựa trên các thao tác được thực hiện trong công cụ, tạo ra trải nghiệm tích hợp hơn.';
$string['accept_grades_from_tool'] = 'Cho phép {$a} thêm điểm vào sổ điểm';
$string['accept_grades_help'] = 'Chỉ định liệu nhà cung cấp công cụ có thể thêm, cập nhật, đọc và xóa điểm chỉ liên quan đến phiên bản công cụ bên ngoài này hay không.

Một số nhà cung cấp công cụ hỗ trợ gửi điểm trở lại Moodle dựa trên các thao tác được thực hiện trong công cụ, tạo ra trải nghiệm tích hợp hơn.

Lưu ý rằng cài đặt này có thể bị ghi đè trong cấu hình công cụ.';
$string['accepted'] = 'Đã chấp nhận';
$string['action'] = 'Thao tác';
$string['activate'] = 'Kích hoạt';
$string['activatetoadddescription'] = 'Bạn cần kích hoạt công cụ này trước khi có thể thêm mô tả.';
$string['active'] = 'Đang hoạt động';
$string['activity'] = 'Hoạt động';
$string['add_ltiadv'] = 'Thêm LTI Advantage';
$string['add_ltilegacy'] = 'Thêm LTI cũ';
$string['addnewapp'] = 'Bật ứng dụng bên ngoài';
$string['addserver'] = 'Thêm máy chủ đáng tin cậy mới';
$string['addtool'] = 'Thêm công cụ';
$string['addtype'] = 'Thêm công cụ được cấu hình sẵn';
$string['allow'] = 'Cho phép';
$string['allowsetting'] = 'Cho phép công cụ lưu 8K cài đặt trong Moodle';
$string['always'] = 'Luôn luôn';
$string['autoaddtype'] = 'Thêm công cụ';
$string['automatic'] = 'Tự động, dựa trên URL của công cụ';
$string['baseurl'] = 'URL cơ sở/tên đăng ký công cụ';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Chuỗi cơ sở OAuth của LTI';
$string['basiclti_endpoint'] = 'Điểm cuối khởi chạy LTI';
$string['basiclti_in_new_window'] = 'Hoạt động của bạn đã mở trong cửa sổ mới. Nếu không thấy, hãy kiểm tra trình chặn cửa sổ bật lên của trình duyệt.';
$string['basiclti_in_new_window_open'] = 'Mở trong cửa sổ mới';
$string['basiclti_parameters'] = 'Tham số khởi chạy LTI';
$string['basicltiactivities'] = 'Các hoạt động LTI';
$string['basicltifieldset'] = 'Nhóm trường ví dụ tùy chỉnh';
$string['basicltiintro'] = 'Mô tả hoạt động';
$string['basicltiname'] = 'Tên hoạt động';
$string['basicltisettings'] = 'Cài đặt Basic Learning Tool Interoperability (LTI)';
$string['cachedef_keyset'] = 'Lưu thông tin bộ khóa của các công cụ vào bộ nhớ đệm';
$string['cancel'] = 'Hủy';
$string['cancelled'] = 'Đã hủy';
$string['capabilities'] = 'Các quyền năng lực';
$string['capabilities_help'] = 'Chọn các quyền năng lực bạn muốn cung cấp cho nhà cung cấp công cụ. Có thể chọn nhiều quyền năng lực.';
$string['capabilitiesrequired'] = 'Công cụ này cần truy cập dữ liệu sau để kích hoạt:';
$string['cleanaccesstokens'] = 'Công cụ bên ngoài xóa mã thông báo truy cập đã hết hạn';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Nhấp để tiếp tục</a>';
$string['clientidadmin'] = 'ID máy khách';
$string['clientidadmin_help'] = 'ID máy khách là giá trị duy nhất dùng để nhận diện một công cụ. ID này được tự động tạo cho mỗi công cụ sử dụng hồ sơ bảo mật JWT được giới thiệu trong LTI 1.3 và cần được gửi cho nhà cung cấp công cụ để họ cấu hình kết nối ở phía mình.';
$string['comment'] = 'Nhận xét';
$string['configpassword'] = 'Mật khẩu công cụ từ xa mặc định';
$string['configpreferheight'] = 'Chiều cao ưu tiên mặc định';
$string['configpreferwidget'] = 'Đặt tiện ích làm kiểu khởi chạy mặc định';
$string['configpreferwidth'] = 'Chiều rộng ưu tiên mặc định';
$string['configresourceurl'] = 'URL tài nguyên mặc định';
$string['configtoolurl'] = 'URL công cụ từ xa mặc định';
$string['configtypes'] = 'Bật các ứng dụng LTI';
$string['configured'] = 'Đã cấu hình';
$string['confirmtoolactivation'] = 'Bạn có chắc chắn muốn kích hoạt công cụ này không?';
$string['contentitem_deeplinking'] = 'Hỗ trợ Deep Linking (Thông điệp Content-Item)';
$string['contentitem_deeplinking_help'] = 'Nếu được chọn, tùy chọn \'Chọn nội dung\' sẽ khả dụng khi thêm công cụ bên ngoài.';
$string['contentitem_multiple_description'] = 'Các mục sau sẽ được thêm vào khóa học của bạn:';
$string['contentitem_multiple_graded'] = 'Hoạt động có chấm điểm (Điểm tối đa: {$a})';
$string['contentselected'] = 'Đã chọn nội dung';
$string['courseactivitiesorresources'] = 'Các hoạt động hoặc tài nguyên của khóa học';
$string['courseexternaltooladd'] = 'Thêm công cụ LTI bên ngoài mới';
$string['courseexternaltooladdsuccess'] = 'Đã thêm {$a}.';
$string['courseexternaltooledit'] = 'Chỉnh sửa {$a}';
$string['courseexternaltooleditsuccess'] = 'Đã lưu thay đổi.';
$string['courseexternaltooliconalt'] = 'Biểu tượng của {$a}';
$string['courseexternaltools'] = 'Các công cụ LTI bên ngoài';
$string['courseexternaltoolsinfo'] = 'Công cụ LTI bên ngoài là các ứng dụng bổ trợ mà bạn có thể tích hợp vào khóa học, chẳng hạn như nội dung tương tác hoặc bài đánh giá. Học viên có thể truy cập và sử dụng chúng mà không cần rời khỏi khóa học.';
$string['courseexternaltoolsnoeditpermissions'] = 'Bạn không có quyền chỉnh sửa công cụ này';
$string['courseexternaltoolsnoviewpermissions'] = 'Xem các công cụ bên ngoài của khóa học';
$string['courseid'] = 'Số ID khóa học';
$string['courseinformation'] = 'Thông tin khóa học';
$string['courselink'] = 'Đi đến khóa học';
$string['coursemisconf'] = 'Khóa học được cấu hình sai';
$string['coursetooldeleted'] = 'Đã xóa {$a}';
$string['createdon'] = 'Ngày tạo';
$string['curllibrarymissing'] = 'Cần có phần mở rộng PHP cURL cho công cụ bên ngoài.';
$string['custom'] = 'Tham số tùy chỉnh';
$string['custom_help'] = 'Tham số tùy chỉnh là các cài đặt do nhà cung cấp công cụ sử dụng. Ví dụ: một tham số tùy chỉnh có thể dùng để hiển thị một tài nguyên cụ thể từ nhà cung cấp. Mỗi tham số cần được nhập trên một dòng riêng theo định dạng "name=value"; ví dụ: "chapter=3".

Bạn có thể để nguyên trường này, trừ khi nhà cung cấp công cụ yêu cầu thay đổi.';
$string['custominstr'] = 'Tham số tùy chỉnh';
$string['debuglaunch'] = 'Tùy chọn gỡ lỗi';
$string['debuglaunchoff'] = 'Khởi chạy bình thường';
$string['debuglaunchon'] = 'Khởi chạy chế độ gỡ lỗi';
$string['default'] = 'Mặc định';
$string['default_launch_container'] = 'Vùng chứa khởi chạy mặc định';
$string['default_launch_container_help'] = 'Vùng chứa khởi chạy ảnh hưởng đến cách hiển thị công cụ khi khởi chạy từ khóa học. Một số vùng chứa cung cấp nhiều không gian màn hình hơn cho công cụ, còn những vùng chứa khác tạo cảm giác tích hợp tốt hơn với môi trường Moodle.

* **Mặc định** - Sử dụng vùng chứa khởi chạy được chỉ định trong cấu hình công cụ.
* **Nhúng** - Công cụ được hiển thị trong cửa sổ Moodle hiện tại, tương tự như hầu hết các loại hoạt động khác.
* **Nhúng, không có khối** - Công cụ được hiển thị trong cửa sổ Moodle hiện tại, chỉ có các nút điều khiển điều hướng ở đầu trang.
* **Cửa sổ mới** - Công cụ mở trong cửa sổ mới và chiếm toàn bộ không gian có sẵn.
        Tùy thuộc vào trình duyệt, công cụ sẽ mở trong tab mới hoặc cửa sổ bật lên.
        Trình duyệt có thể chặn cửa sổ mới mở.';
$string['delegate'] = 'Ủy quyền cho giáo viên';
$string['delegate_tool'] = 'Theo định nghĩa Deep Linking hoặc ủy quyền cho giáo viên';
$string['delete'] = 'Xóa';
$string['delete_confirmation'] = 'Bạn có chắc chắn muốn xóa công cụ được cấu hình sẵn này không?';
$string['deletecoursetool'] = 'Xóa {$a}';
$string['deletecoursetoolconfirm'] = 'Thao tác này sẽ xóa {$a} khỏi các công cụ LTI hiện có trong khóa học của bạn.';
$string['deletecoursetoolwithusageconfirm'] = '{$a} hiện đang được sử dụng trong ít nhất một hoạt động trong khóa học của bạn. Nếu xóa công cụ này, các hoạt động sử dụng nó sẽ không còn hoạt động.<br><br>Bạn có chắc chắn muốn xóa {$a} không?';
$string['display_description'] = 'Hiển thị mô tả hoạt động khi học viên truy cập công cụ';
$string['display_description_help'] = 'Nội dung từ công cụ này được nhúng trong một trang của khóa học. Tùy chọn này xác định liệu mô tả hoạt động có được hiển thị trên trang đó hay không.';
$string['display_name'] = 'Hiển thị tên hoạt động khi học viên truy cập công cụ';
$string['display_name_help'] = 'Nội dung từ công cụ này được nhúng trong một trang của khóa học. Tùy chọn này xác định liệu tên hoạt động có được hiển thị trên trang đó hay không.';
$string['donot'] = 'Không gửi';
$string['donotaccept'] = 'Không chấp nhận';
$string['donotallow'] = 'Không cho phép';
$string['dontshowinactivitychooser'] = 'Không hiển thị trong bộ chọn hoạt động';
$string['duplicateregurl'] = 'URL đăng ký này đã được sử dụng';
$string['dynreg_update_btn_new'] = 'Đăng ký làm công cụ bên ngoài mới';
$string['dynreg_update_btn_update'] = 'Cập nhật';
$string['dynreg_update_name'] = 'Tên công cụ';
$string['dynreg_update_notools'] = 'Không có công cụ nào trong ngữ cảnh.';
$string['dynreg_update_text'] = 'Đã có các công cụ gắn với miền của đăng ký. Bạn muốn cập nhật một công cụ bên ngoài đã cài đặt
hay tạo một công cụ bên ngoài mới?';
$string['dynreg_update_url'] = 'URL cơ sở';
$string['dynreg_update_version'] = 'Phiên bản LTI';
$string['dynreg_update_warn_dupdomain'] = 'Không nên có nhiều công cụ bên ngoài trong cùng một miền.';
$string['editdescription'] = 'Nhấp vào đây để thêm mô tả cho công cụ này';
$string['editmanualinstancedeprecationwarning'] = 'Các hoạt động công cụ bên ngoài được cấu hình thủ công không còn được hỗ trợ. Đừng lo, hoạt động này vẫn sẽ hoạt động như hiện tại, nhưng bạn không thể thay đổi cấu hình công cụ tại đây nữa.
<br><br>
Để thay đổi công cụ hoặc tạo hoạt động mới bằng công cụ này, trước tiên cần thêm công cụ vào khóa học tại Khóa học > Thêm > Công cụ LTI bên ngoài. Sau đó, bạn có thể tạo hoạt động mới bằng cách chọn trực tiếp công cụ trong bộ chọn hoạt động.
<br><br>
Bạn có thể đọc thêm về cách thêm công cụ LTI bên ngoài trong tài liệu <a href="{$a}" target="_blank">Công cụ bên ngoài</a>.';
$string['embed'] = 'Nhúng';
$string['embed_no_blocks'] = 'Nhúng, không có khối';
$string['enableemailnotification'] = 'Gửi email thông báo';
$string['enableemailnotification_help'] = 'Nếu bật, học viên sẽ nhận được email thông báo khi bài nộp cho công cụ của họ được chấm điểm.';
$string['enterkeyandsecret'] = 'Nhập khóa người dùng và bí mật dùng chung';
$string['enterkeyandsecret_help'] = 'Nếu được cung cấp khóa người dùng và/hoặc bí mật dùng chung, hãy nhập chúng tại đây';
$string['entitycourseexternaltools'] = 'Công cụ LTI bên ngoài';
$string['errorbadurl'] = 'URL không phải là URL công cụ hoặc gói nội dung hợp lệ.';
$string['errorincorrectconsumerkey'] = 'Khóa người dùng không chính xác.';
$string['errorinvaliddata'] = 'Dữ liệu không hợp lệ: {$a}';
$string['errorinvalidmediatype'] = 'Loại phương tiện không hợp lệ: {$a}';
$string['errorinvalidresponseformat'] = 'Định dạng phản hồi Content-Item không hợp lệ.';
$string['errormisconfig'] = 'Công cụ được cấu hình sai. Vui lòng yêu cầu quản trị viên Moodle sửa cấu hình công cụ.';
$string['errortooltypenotfound'] = 'Không tìm thấy loại công cụ LTI.';
$string['existing_window'] = 'Cửa sổ hiện tại';
$string['extensions'] = 'Dịch vụ mở rộng LTI';
$string['external_tool_type'] = 'Công cụ được cấu hình sẵn';
$string['external_tool_type_help'] = '* **Tự động, dựa trên URL công cụ** - Cấu hình công cụ phù hợp nhất được tự động chọn. Nếu URL công cụ không được nhận dạng, có thể cần nhập thủ công thông tin chi tiết về cấu hình công cụ.
* **Một công cụ được cấu hình sẵn cụ thể** - Cấu hình công cụ được chỉ định sẽ được dùng khi giao tiếp với nhà cung cấp công cụ bên ngoài. Nếu URL công cụ có vẻ không thuộc nhà cung cấp đó, một cảnh báo sẽ xuất hiện. Không phải lúc nào cũng cần nhập URL công cụ.
* **Cấu hình tùy chỉnh** - Có thể cần nhập thủ công khóa người dùng và bí mật dùng chung. Có thể lấy các thông tin này từ nhà cung cấp công cụ. Tuy nhiên, không phải công cụ nào cũng yêu cầu khóa người dùng và bí mật dùng chung; trong trường hợp đó, có thể để trống các trường này.

### Chỉnh sửa công cụ được cấu hình sẵn

Có ba biểu tượng bên cạnh danh sách thả xuống công cụ được cấu hình sẵn:

* **Thêm** - Tạo cấu hình công cụ ở cấp khóa học. Tất cả phiên bản công cụ bên ngoài trong khóa học này đều có thể dùng cấu hình đó.
* **Chỉnh sửa** - Chọn một công cụ cấp khóa học từ danh sách thả xuống, sau đó nhấp vào biểu tượng này. Bạn có thể chỉnh sửa chi tiết cấu hình công cụ.
* **Xóa** - Xóa công cụ cấp khóa học đã chọn.';
$string['external_tool_types'] = 'Các công cụ được cấu hình sẵn';
$string['failedtoconnect'] = 'Moodle không thể giao tiếp với hệ thống "{$a}"';
$string['failedtocreatetooltype'] = 'Không thể tạo công cụ mới. Vui lòng kiểm tra URL rồi thử lại.';
$string['failedtodeletetoolproxy'] = 'Không thể xóa đăng ký công cụ. Bạn có thể cần truy cập "Quản lý đăng ký công cụ bên ngoài" và xóa thủ công.';
$string['filter_basiclti_configlink'] = 'Cấu hình các trang web ưu tiên và mật khẩu của chúng';
$string['filter_basiclti_password'] = 'Bắt buộc phải có mật khẩu';
$string['filterconfig'] = 'Quản trị LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Dùng cấu hình hiện có cho phiên bản được cấu hình sai';
$string['fixnew'] = 'Cấu hình mới';
$string['fixnewconf'] = 'Xác định cấu hình mới cho phiên bản được cấu hình sai';
$string['fixold'] = 'Dùng cấu hình hiện có';
$string['force_ssl'] = 'Bắt buộc dùng SSL';
$string['force_ssl_help'] = 'Chọn tùy chọn này sẽ buộc mọi lần khởi chạy đến nhà cung cấp công cụ phải dùng SSL.

Ngoài ra, mọi yêu cầu dịch vụ web từ nhà cung cấp công cụ cũng sẽ dùng SSL.

Nếu dùng tùy chọn này, hãy xác nhận rằng trang Moodle và nhà cung cấp công cụ đều hỗ trợ SSL.';
$string['generaltool'] = 'Công cụ chung';
$string['grading'] = 'Định tuyến điểm';
$string['icon_url'] = 'URL biểu tượng';
$string['icon_url_help'] = 'URL biểu tượng cho phép thay đổi biểu tượng hiển thị trong danh sách khóa học của hoạt động này. Thay vì dùng biểu tượng LTI mặc định,
có thể chỉ định biểu tượng thể hiện loại hoạt động.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'Nhận thức LTI';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên mức độ nhận thức mà học viên đạt được trong một hoạt động LTI.';
$string['indicator:cognitivedepthdef'] = 'Nhận thức LTI';
$string['indicator:cognitivedepthdef_help'] = 'Trong khoảng thời gian phân tích này, người tham gia đã đạt được tỷ lệ phần trăm mức độ tham gia nhận thức mà các hoạt động LTI cung cấp (Các mức = Chưa xem, Xem, Nộp, Xem phản hồi)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Tương tác xã hội LTI';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên mức độ tương tác xã hội mà học viên đạt được trong một hoạt động LTI.';
$string['indicator:socialbreadthdef'] = 'Tương tác xã hội LTI';
$string['indicator:socialbreadthdef_help'] = 'Trong khoảng thời gian phân tích này, người tham gia đã đạt được tỷ lệ phần trăm mức độ tương tác xã hội mà các hoạt động LTI cung cấp (Các mức = Không tham gia, Người tham gia một mình, Người tham gia cùng người khác)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['initiatelogin'] = 'URL khởi tạo đăng nhập';
$string['initiatelogin_help'] = 'URL công cụ sẽ nhận các yêu cầu khởi tạo đăng nhập. Cần có URL này thì mới có thể gửi thành công thông điệp đến công cụ.';
$string['invalidid'] = 'ID LTI không chính xác';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Loại khóa công khai';
$string['keytype_help'] = 'Phương thức xác thực được dùng để xác thực công cụ.';
$string['keytype_keyset'] = 'URL bộ khóa';
$string['keytype_rsa'] = 'Khóa RSA';
$string['launch_in_moodle'] = 'Khởi chạy công cụ trong Moodle';
$string['launch_in_popup'] = 'Khởi chạy công cụ trong cửa sổ bật lên';
$string['launch_url'] = 'URL công cụ';
$string['launch_url_help'] = 'URL công cụ là địa chỉ web của Công cụ bên ngoài và có thể chứa thông tin bổ sung, chẳng hạn như tài nguyên cần hiển thị.
Nếu không chắc cần nhập gì vào URL công cụ, vui lòng hỏi nhà cung cấp công cụ để biết thêm thông tin.

Bạn có thể nhập URL gói nội dung nếu có; các thông tin còn lại trên biểu mẫu sẽ được tự động điền.

Nếu đã chọn một công cụ được cấu hình sẵn, có thể bạn không cần nhập URL công cụ. Trường hợp này thường áp dụng khi liên kết công cụ chỉ dùng để khởi chạy hệ thống của nhà cung cấp công cụ, chứ không dẫn đến một tài nguyên cụ thể.';
$string['launchinpopup'] = 'Vùng chứa khi khởi chạy';
$string['launchinpopup_help'] = 'Vùng chứa khi khởi chạy ảnh hưởng đến cách hiển thị công cụ khi được khởi chạy từ khóa học. Một số vùng chứa dành nhiều không gian màn hình hơn cho công cụ, trong khi những vùng chứa khác tạo cảm giác tích hợp hơn với môi trường Moodle.

* **Mặc định** - Dùng vùng chứa khởi chạy được chỉ định trong cấu hình công cụ.
* **Nhúng** - Công cụ được hiển thị trong cửa sổ Moodle hiện tại, tương tự như hầu hết các loại hoạt động khác.
* **Nhúng, không có khối** - Công cụ được hiển thị trong cửa sổ Moodle hiện tại, chỉ có các điều khiển điều hướng
        ở đầu trang.
* **Cửa sổ mới** - Công cụ mở trong cửa sổ mới, chiếm toàn bộ không gian khả dụng.
        Tùy trình duyệt, công cụ sẽ mở trong tab mới hoặc cửa sổ bật lên.
        Trình duyệt có thể chặn cửa sổ mới mở.';
$string['launchoptions'] = 'Tùy chọn khởi chạy';
$string['lti'] = 'LTI';
$string['lti_administration'] = 'Chỉnh sửa công cụ được cấu hình sẵn';
$string['lti_errormsg'] = 'Công cụ trả về thông báo lỗi sau: "{$a}"';
$string['lti_launch_error'] = 'Đã xảy ra lỗi khi khởi chạy công cụ bên ngoài:';
$string['lti_launch_error_tool_request'] = '<p>
Để gửi yêu cầu quản trị viên hoàn tất cấu hình công cụ, hãy nhấp <a href="{$a->admin_request_url}" target="_top">vào đây</a>.
</p>';
$string['lti_launch_error_unsigned_help'] = '<p>Lỗi này có thể do thiếu khóa người dùng và bí mật dùng chung cho nhà cung cấp công cụ.</p>
<p>Nếu có khóa người dùng và bí mật dùng chung, bạn có thể nhập chúng khi chỉnh sửa phiên bản công cụ bên ngoài (đảm bảo các tùy chọn nâng cao đang hiển thị).</p>
<p>Ngoài ra, bạn có thể <a href="{$a->course_tool_editor}">tạo cấu hình nhà cung cấp công cụ ở cấp khóa học</a>.</p>';
$string['lti_tool_request_added'] = 'Đã gửi yêu cầu cấu hình công cụ thành công. Bạn có thể cần liên hệ với quản trị viên để hoàn tất cấu hình công cụ.';
$string['lti_tool_request_existing'] = 'Yêu cầu cấu hình công cụ cho miền này đã được gửi.';
$string['lti:addcoursetool'] = 'Thêm cấu hình công cụ dành riêng cho khóa học';
$string['lti:addinstance'] = 'Thêm công cụ bên ngoài mới';
$string['lti:addmanualinstanceprohibitederror'] = 'Không còn hỗ trợ tạo thủ công công cụ khi chưa có định nghĩa công cụ cho khóa học. Vui lòng tạo công cụ cho khóa học trước, sau đó dùng công cụ đó để tạo các phiên bản hoạt động.';
$string['lti:addpreconfiguredinstance'] = 'Thêm công cụ được cấu hình sẵn';
$string['lti:admin'] = 'Đóng vai trò quản trị viên khi công cụ được khởi chạy';
$string['lti:grade'] = 'Xem điểm được trả về từ công cụ bên ngoài';
$string['lti:manage'] = 'Đóng vai trò Giảng viên khi công cụ được khởi chạy';
$string['lti:requesttooladd'] = 'Yêu cầu cấu hình công cụ trên toàn trang';
$string['lti:view'] = 'Khởi chạy các hoạt động công cụ bên ngoài';
$string['ltisettings'] = 'Cài đặt LTI';
$string['ltiunknownserviceapicall'] = 'Lệnh gọi API dịch vụ LTI không xác định.';
$string['ltiversion'] = 'Phiên bản LTI';
$string['ltiversion_help'] = 'Phiên bản LTI được dùng để ký thông điệp và yêu cầu dịch vụ: LTI 1.0/1.1 và LTI 2.0 dùng hồ sơ bảo mật OAuth 1.0A; LTI 1.3.0 dùng JWT.';
$string['main_admin'] = 'Trợ giúp chung';
$string['main_admin_help'] = 'Công cụ bên ngoài cho phép người dùng Moodle tương tác với các tài nguyên học tập được lưu trữ từ xa. Thông qua một giao thức khởi chạy đặc biệt, công cụ từ xa có thể truy cập thông tin chung về người dùng khởi chạy công cụ. Ví dụ: tên cơ sở, ID khóa học, ID người dùng và các thông tin khác như tên hoặc địa chỉ email của người dùng.

Các công cụ được liệt kê trên trang này được chia thành ba loại:

* **Đang hoạt động** - Các nhà cung cấp công cụ này đã được quản trị viên phê duyệt và cấu hình. Chúng có thể được dùng trong bất kỳ khóa học nào trên trang web này. Nếu nhập khóa người dùng và bí mật dùng chung, mối quan hệ tin cậy sẽ được thiết lập giữa trang web này và công cụ từ xa, tạo ra kênh giao tiếp an toàn.
* **Đang chờ** - Các nhà cung cấp công cụ này được đưa vào thông qua quá trình nhập gói, nhưng chưa được quản trị viên cấu hình. Giáo viên vẫn có thể dùng công cụ từ các nhà cung cấp này nếu có khóa người dùng và bí mật dùng chung, hoặc nếu không cần các thông tin đó.
* **Bị từ chối** - Các nhà cung cấp công cụ này được đánh dấu là không được quản trị viên dự định cung cấp trên trang web. Giáo viên vẫn có thể dùng công cụ từ các nhà cung cấp này nếu có khóa người dùng và bí mật dùng chung, hoặc nếu không cần các thông tin đó.';
$string['manage_external_tools'] = 'Quản lý công cụ';
$string['manage_tool_proxies'] = 'Quản lý đăng ký công cụ bên ngoài';
$string['manage_tools'] = 'Quản lý công cụ được cấu hình sẵn';
$string['manuallyaddtype'] = 'Ngoài ra, bạn có thể <a href="{$a}">cấu hình công cụ theo cách thủ công</a>.';
$string['miscellaneous'] = 'Khác';
$string['misconfiguredtools'] = 'Phát hiện các phiên bản công cụ được cấu hình sai';
$string['missingparameterserror'] = 'Trang được cấu hình sai: "{$a}"';
$string['module_class_type'] = 'Loại mô-đun Moodle';
$string['modulename'] = 'Công cụ bên ngoài';
$string['modulename_help'] = 'Mô-đun hoạt động công cụ bên ngoài cho phép học viên tương tác với các tài nguyên và hoạt động học tập trên những trang web khác. Ví dụ: công cụ bên ngoài có thể cung cấp quyền truy cập vào một loại hoạt động mới hoặc tài liệu học tập từ nhà xuất bản.

Để tạo hoạt động công cụ bên ngoài, cần có nhà cung cấp công cụ hỗ trợ LTI (Khả năng tương tác công cụ học tập). Giáo viên có thể tạo hoạt động công cụ bên ngoài hoặc sử dụng công cụ do quản trị viên trang web cấu hình.

Hoạt động công cụ bên ngoài khác với tài nguyên URL ở một số điểm:

* Công cụ bên ngoài nhận biết ngữ cảnh, tức là có quyền truy cập thông tin về người dùng đã khởi chạy công cụ, chẳng hạn như cơ sở, khóa học và tên
* Công cụ bên ngoài hỗ trợ đọc, cập nhật và xóa điểm gắn với phiên bản hoạt động
* Cấu hình công cụ bên ngoài thiết lập mối quan hệ tin cậy giữa trang web của bạn và nhà cung cấp công cụ, cho phép hai bên giao tiếp an toàn';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = 'Các công cụ bên ngoài';
$string['modulenamepluralformatted'] = 'Các công cụ bên ngoài';
$string['name'] = 'Tên';
$string['never'] = 'Không bao giờ';
$string['new_window'] = 'Cửa sổ mới';
$string['no_lti_configured'] = 'Chưa cấu hình công cụ bên ngoài nào đang hoạt động.';
$string['no_lti_pending'] = 'Không có công cụ bên ngoài nào đang chờ.';
$string['no_lti_rejected'] = 'Không có công cụ bên ngoài nào bị từ chối.';
$string['no_lti_tools'] = 'Chưa cấu hình công cụ bên ngoài nào.';
$string['no_tp_accepted'] = 'Không có đăng ký công cụ bên ngoài nào được chấp nhận.';
$string['no_tp_cancelled'] = 'Không có đăng ký công cụ bên ngoài nào bị hủy.';
$string['no_tp_configured'] = 'Không có đăng ký công cụ bên ngoài chưa đăng ký nào được cấu hình.';
$string['no_tp_pending'] = 'Không có đăng ký công cụ bên ngoài nào đang chờ.';
$string['no_tp_rejected'] = 'Không có đăng ký công cụ bên ngoài nào bị từ chối.';
$string['noattempts'] = 'Chưa có lần làm bài nào trên phiên bản công cụ này';
$string['nocourseexternaltoolsnotice'] = 'Chưa có công cụ LTI bên ngoài nào.';
$string['noltis'] = 'Không có phiên bản công cụ bên ngoài nào';
$string['noprofileservice'] = 'Không tìm thấy dịch vụ hồ sơ';
$string['noservers'] = 'Không tìm thấy máy chủ nào';
$string['notypes'] = 'Hiện chưa thiết lập công cụ LTI nào trong Moodle. Nhấp vào liên kết Cài đặt ở trên để thêm công cụ.';
$string['noviewusers'] = 'Không tìm thấy người dùng nào có quyền sử dụng công cụ này';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 yêu cầu cấu hình tệp openssl.cnf hợp lệ và máy chủ web của bạn có thể truy cập tệp này. Vui lòng liên hệ quản trị viên trang web để cấu hình và bật openssl cho trang web này.';
$string['optionalsettings'] = 'Cài đặt tùy chọn';
$string['organization'] = 'Thông tin tổ chức';
$string['organizationdescr'] = 'Mô tả tổ chức';
$string['organizationid_default'] = 'ID tổ chức mặc định';
$string['organizationid_default_help'] = 'Giá trị mặc định dùng cho ID tổ chức. ID trang web nhận diện bản cài đặt Moodle này.';
$string['organizationidguid'] = 'ID tổ chức';
$string['organizationidguid_help'] = 'Mã nhận diện duy nhất của phiên bản Moodle này, được gửi đến công cụ dưới dạng GUID của phiên bản nền tảng.

Nếu để trống trường này, giá trị mặc định sẽ được dùng.';
$string['organizationurl'] = 'URL tổ chức';
$string['organizationurl_help'] = 'URL cơ sở của phiên bản Moodle này.

Nếu để trống trường này, giá trị mặc định dựa trên cấu hình trang web sẽ được dùng.';
$string['pagesize'] = 'Số bài nộp hiển thị mỗi trang';
$string['parameter'] = 'Tham số công cụ';
$string['parameter_help'] = 'Tham số công cụ là các cài đặt mà nhà cung cấp công cụ yêu cầu truyền trong proxy công cụ được chấp nhận.';
$string['password'] = 'Bí mật dùng chung';
$string['password_admin'] = 'Bí mật dùng chung';
$string['password_admin_help'] = 'Có thể xem bí mật dùng chung như mật khẩu dùng để xác thực quyền truy cập vào công cụ. Nhà cung cấp công cụ cần cung cấp bí mật này
cùng với khóa người dùng.

Các công cụ không yêu cầu Moodle giao tiếp an toàn và không cung cấp dịch vụ bổ sung (chẳng hạn như báo cáo điểm)
có thể không cần bí mật dùng chung.';
$string['password_help'] = 'Đối với các công cụ được cấu hình sẵn, không cần nhập bí mật dùng chung tại đây vì bí mật dùng chung sẽ được
cung cấp trong quá trình cấu hình.

Cần nhập trường này nếu tạo liên kết đến một nhà cung cấp công cụ chưa được cấu hình.
Nếu nhà cung cấp công cụ sẽ được dùng nhiều lần trong khóa học này, bạn nên thêm cấu hình công cụ cho khóa học.

Có thể xem bí mật dùng chung như mật khẩu dùng để xác thực quyền truy cập vào công cụ. Nhà cung cấp công cụ cần cung cấp bí mật này
cùng với khóa người dùng.

Các công cụ không yêu cầu Moodle giao tiếp an toàn và không cung cấp dịch vụ bổ sung (chẳng hạn như báo cáo điểm)
có thể không cần bí mật dùng chung.';
$string['pending'] = 'Đang chờ';
$string['pluginadministration'] = 'Quản trị công cụ bên ngoài';
$string['pluginname'] = 'Công cụ bên ngoài';
$string['preferheight'] = 'Chiều cao ưu tiên';
$string['preferwidget'] = 'Ưu tiên khởi chạy dưới dạng tiện ích';
$string['preferwidth'] = 'Chiều rộng ưu tiên';
$string['press_to_submit'] = 'Nhấn để khởi chạy hoạt động này';
$string['privacy'] = 'Quyền riêng tư';
$string['privacy:metadata:coursefullname'] = 'Tên đầy đủ của khóa học mà từ đó người dùng truy cập LTI Consumer';
$string['privacy:metadata:courseid'] = 'ID của khóa học mà từ đó người dùng truy cập LTI Consumer';
$string['privacy:metadata:courseidnumber'] = 'Số ID của khóa học mà từ đó người dùng truy cập LTI Consumer';
$string['privacy:metadata:courseshortname'] = 'Tên viết tắt của khóa học mà từ đó người dùng truy cập LTI Consumer';
$string['privacy:metadata:createdby'] = 'Người dùng đã tạo bản ghi';
$string['privacy:metadata:email'] = 'Địa chỉ email của người dùng truy cập LTI Consumer';
$string['privacy:metadata:externalpurpose'] = 'LTI Consumer cung cấp thông tin người dùng và ngữ cảnh cho LTI Tool Provider.';
$string['privacy:metadata:firstname'] = 'Tên của người dùng truy cập LTI Consumer';
$string['privacy:metadata:fullname'] = 'Họ tên đầy đủ của người dùng truy cập LTI Consumer';
$string['privacy:metadata:lastname'] = 'Họ của người dùng truy cập LTI Consumer';
$string['privacy:metadata:lti_submission'] = 'Bài nộp LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'Dấu thời gian cho biết thời điểm bài nộp được gửi';
$string['privacy:metadata:lti_submission:dateupdated'] = 'Dấu thời gian cho biết thời điểm bài nộp được chỉnh sửa';
$string['privacy:metadata:lti_submission:gradepercent'] = 'Điểm của người dùng dưới dạng phần trăm';
$string['privacy:metadata:lti_submission:originalgrade'] = 'Điểm gốc của người dùng';
$string['privacy:metadata:lti_submission:userid'] = 'ID của người dùng đã nộp bài trong hoạt động LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxy LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Tên proxy LTI';
$string['privacy:metadata:lti_types'] = 'Các loại LTI';
$string['privacy:metadata:lti_types:name'] = 'Tên loại LTI';
$string['privacy:metadata:role'] = 'Vai trò của người dùng trong khóa học khi truy cập LTI Consumer';
$string['privacy:metadata:timecreated'] = 'Thời điểm tạo bản ghi';
$string['privacy:metadata:timemodified'] = 'Thời điểm chỉnh sửa bản ghi';
$string['privacy:metadata:userid'] = 'ID của người dùng truy cập LTI Consumer';
$string['privacy:metadata:useridnumber'] = 'Số ID của người dùng truy cập LTI Consumer';
$string['privacy:metadata:username'] = 'Tên đăng nhập của người dùng truy cập LTI Consumer';
$string['publickey'] = 'Khóa công khai';
$string['publickey_help'] = 'Khóa công khai (định dạng PEM) do công cụ cung cấp, dùng để xác minh chữ ký của các thông điệp và yêu cầu dịch vụ đến.';
$string['publickeyset'] = 'Bộ khóa công khai';
$string['publickeyset_help'] = 'Bộ khóa công khai mà trang web này sẽ dùng để lấy khóa công khai của công cụ, nhằm xác minh chữ ký của các thông điệp và yêu cầu dịch vụ đến.';
$string['quickgrade'] = 'Cho phép chấm điểm nhanh';
$string['quickgrade_help'] = 'Nếu bật, có thể chấm điểm nhiều công cụ trên một trang. Thêm điểm và nhận xét, sau đó nhấp nút "Lưu tất cả phản hồi của tôi" để lưu mọi thay đổi trên trang đó.';
$string['redirect'] = 'Bạn sẽ được chuyển hướng trong vài giây. Nếu không, hãy nhấn nút.';
$string['redirectionuris'] = 'URI chuyển hướng';
$string['redirectionuris_help'] = 'Danh sách URI (mỗi dòng một URI) mà công cụ dùng khi gửi yêu cầu cấp quyền. Phải đăng ký ít nhất một URI thì mới có thể gửi thành công thông điệp đến công cụ.';
$string['register'] = 'Đăng ký';
$string['register_warning'] = 'Có vẻ trang đăng ký mất khá nhiều thời gian để mở. Nếu trang không xuất hiện, hãy kiểm tra xem bạn đã nhập đúng URL trong cài đặt cấu hình chưa. Nếu Moodle dùng https, hãy đảm bảo công cụ đang cấu hình hỗ trợ https và URL bạn dùng cũng là https.';
$string['registertype'] = 'Cấu hình đăng ký công cụ bên ngoài mới';
$string['registration_options'] = 'Tùy chọn đăng ký';
$string['registrationname'] = 'Tên nhà cung cấp công cụ';
$string['registrationname_help'] = 'Nhập tên nhà cung cấp công cụ đang được đăng ký.';
$string['registrationurl'] = 'URL đăng ký';
$string['registrationurl_help'] = 'Nhà cung cấp công cụ cần cung cấp URL đăng ký làm địa chỉ nhận các yêu cầu đăng ký.';
$string['reject'] = 'Từ chối';
$string['rejected'] = 'Đã từ chối';
$string['resource'] = 'Tài nguyên';
$string['resourcekey'] = 'Khóa người dùng';
$string['resourcekey_admin'] = 'Khóa người dùng';
$string['resourcekey_admin_help'] = 'Có thể xem khóa người dùng như tên người dùng dùng để xác thực quyền truy cập vào công cụ.
Nhà cung cấp công cụ có thể dùng khóa này để xác định duy nhất trang Moodle mà từ đó người dùng khởi chạy công cụ.

Nhà cung cấp công cụ phải cung cấp khóa người dùng. Cách nhận khóa này khác nhau tùy nhà cung cấp công cụ.
Có thể thực hiện tự động hoặc cần trao đổi với nhà cung cấp công cụ.

Các công cụ không yêu cầu Moodle giao tiếp an toàn và không cung cấp dịch vụ bổ sung (chẳng hạn như báo cáo điểm)
có thể không cần khóa tài nguyên.';
$string['resourcekey_help'] = 'Đối với các công cụ được cấu hình sẵn, bạn không cần nhập khóa tài nguyên tại đây vì khóa người dùng sẽ được
cung cấp trong quá trình cấu hình.

Bạn cần nhập trường này nếu tạo liên kết đến một nhà cung cấp công cụ chưa được cấu hình.
Nếu định sử dụng nhà cung cấp công cụ nhiều lần trong khóa học này, bạn nên thêm cấu hình công cụ cho khóa học.

Có thể xem khóa người dùng như tên người dùng dùng để xác thực quyền truy cập vào công cụ.
Nhà cung cấp công cụ có thể dùng khóa này để xác định duy nhất trang Moodle mà từ đó người dùng khởi chạy công cụ.

Nhà cung cấp công cụ phải cung cấp khóa người dùng. Cách nhận khóa này khác nhau tùy nhà cung cấp công cụ.
Có thể thực hiện tự động hoặc cần trao đổi với nhà cung cấp công cụ.

Các công cụ không yêu cầu Moodle giao tiếp an toàn và không cung cấp dịch vụ bổ sung (chẳng hạn như báo cáo điểm)
có thể không cần khóa tài nguyên.';
$string['resourceurl'] = 'URL tài nguyên';
$string['restricttocategory'] = 'Giới hạn theo danh mục';
$string['restricttocategory_help'] = 'Để giới hạn việc sử dụng công cụ này cho các khóa học thuộc một danh mục, hãy chọn một hoặc nhiều danh mục trong danh sách.';
$string['return_to_course'] = 'Nhấp <a href="{$a->link}" target="_top">vào đây</a> để quay lại khóa học.';
$string['saveallfeedback'] = 'Lưu tất cả phản hồi của tôi';
$string['search:activity'] = 'Công cụ bên ngoài - thông tin hoạt động';
$string['secure_icon_url'] = 'URL biểu tượng bảo mật';
$string['secure_icon_url_help'] = 'Tương tự URL biểu tượng, nhưng được dùng khi truy cập trang web an toàn qua SSL. Trường này giúp tránh để trình duyệt hiển thị cảnh báo về hình ảnh không an toàn.';
$string['secure_launch_url'] = 'URL công cụ bảo mật';
$string['secure_launch_url_help'] = 'Tương tự URL công cụ, nhưng được dùng thay cho URL công cụ khi cần mức độ bảo mật cao. Moodle sẽ dùng URL công cụ bảo mật thay cho URL công cụ nếu trang Moodle được truy cập qua SSL hoặc nếu cấu hình công cụ được đặt luôn khởi chạy qua SSL.

Bạn cũng có thể đặt URL công cụ thành địa chỉ https để bắt buộc khởi chạy qua SSL và để trống trường này.';
$string['selectcontent'] = 'Chọn nội dung';
$string['selectcontentvalidationerror'] = 'Bạn cần chọn nội dung cho hoạt động này.';
$string['send'] = 'Gửi';
$string['services'] = 'Dịch vụ';
$string['services_help'] = 'Chọn những dịch vụ bạn muốn cung cấp cho nhà cung cấp công cụ. Có thể chọn nhiều dịch vụ.';
$string['setupoptions'] = 'Tùy chọn thiết lập';
$string['share_email'] = 'Chia sẻ email của người khởi chạy với công cụ';
$string['share_email_admin'] = 'Chia sẻ email của người khởi chạy với công cụ';
$string['share_email_admin_help'] = 'Chỉ định có chia sẻ địa chỉ email của người dùng khởi chạy công cụ với nhà cung cấp công cụ hay không.
Nhà cung cấp công cụ có thể cần địa chỉ email của người khởi chạy để phân biệt những người dùng trùng tên trong giao diện hoặc gửi email
cho người dùng dựa trên các thao tác trong công cụ.';
$string['share_email_help'] = 'Chỉ định có chia sẻ địa chỉ email của người dùng khởi chạy công cụ với nhà cung cấp công cụ hay không.

Nhà cung cấp công cụ có thể cần địa chỉ email của người khởi chạy để phân biệt những người dùng trùng tên hoặc gửi email cho người dùng dựa trên các thao tác trong công cụ.

Lưu ý rằng tùy chọn này có thể bị ghi đè trong cấu hình công cụ.';
$string['share_name'] = 'Chia sẻ tên người khởi chạy với công cụ';
$string['share_name_admin'] = 'Chia sẻ tên người khởi chạy với công cụ';
$string['share_name_admin_help'] = 'Chỉ định có chia sẻ họ tên của người dùng khởi chạy công cụ với nhà cung cấp công cụ hay không.
Nhà cung cấp công cụ có thể cần tên người khởi chạy để hiển thị thông tin hữu ích trong công cụ.';
$string['share_name_help'] = 'Chỉ định có chia sẻ họ tên của người dùng khởi chạy công cụ với nhà cung cấp công cụ hay không.

Nhà cung cấp công cụ có thể cần tên người khởi chạy để hiển thị thông tin hữu ích trong công cụ.

Lưu ý rằng tùy chọn này có thể bị ghi đè trong cấu hình công cụ.';
$string['share_roster'] = 'Cho phép công cụ truy cập danh sách thành viên khóa học này';
$string['share_roster_admin'] = 'Công cụ có thể truy cập danh sách thành viên khóa học';
$string['share_roster_admin_help'] = 'Chỉ định công cụ có thể truy cập danh sách người dùng đã ghi danh vào các khóa học mà từ đó công cụ này được khởi chạy hay không.';
$string['share_roster_help'] = 'Chỉ định công cụ có thể truy cập danh sách người dùng đã ghi danh vào khóa học này hay không.

Lưu ý rằng tùy chọn này có thể bị ghi đè trong cấu hình công cụ.';
$string['show_in_course_activity_chooser'] = 'Hiển thị trong bộ chọn hoạt động và dưới dạng công cụ được cấu hình sẵn';
$string['show_in_course_lti1'] = 'Cách sử dụng cấu hình công cụ';
$string['show_in_course_lti1_help'] = 'Công cụ này có thể hiển thị trong bộ chọn hoạt động để giáo viên chọn thêm vào khóa học. Ngoài ra, công cụ có thể hiển thị trong menu thả xuống các công cụ được cấu hình sẵn khi thêm công cụ bên ngoài vào khóa học. Một tùy chọn khác là chỉ sử dụng cấu hình công cụ khi nhập chính xác URL công cụ lúc thêm công cụ bên ngoài vào khóa học.';
$string['show_in_course_lti2'] = 'Cách sử dụng cấu hình công cụ';
$string['show_in_course_lti2_help'] = 'Công cụ này có thể hiển thị trong bộ chọn hoạt động để giáo viên chọn thêm vào khóa học hoặc trong menu thả xuống các công cụ được cấu hình sẵn khi thêm công cụ bên ngoài vào khóa học.';
$string['show_in_course_no'] = 'Không hiển thị; chỉ sử dụng khi nhập URL công cụ phù hợp';
$string['show_in_course_preconfigured'] = 'Hiển thị dưới dạng công cụ được cấu hình sẵn khi thêm công cụ bên ngoài';
$string['showinactivitychooser'] = 'Hiển thị trong bộ chọn hoạt động';
$string['sitehost'] = 'Tên máy chủ trang web';
$string['siteid'] = 'ID trang web';
$string['size'] = 'Tham số kích thước';
$string['submission'] = 'Bài nộp';
$string['submissions'] = 'Các bài nộp';
$string['submissionsfor'] = 'Các bài nộp của {$a}';
$string['subplugintype_ltiresource'] = 'Tài nguyên dịch vụ LTI';
$string['subplugintype_ltiresource_plural'] = 'Các tài nguyên dịch vụ LTI';
$string['subplugintype_ltiservice'] = 'Dịch vụ LTI';
$string['subplugintype_ltiservice_plural'] = 'Các dịch vụ LTI';
$string['subplugintype_ltisource'] = 'Nguồn LTI';
$string['subplugintype_ltisource_plural'] = 'Các nguồn LTI';
$string['successfullycreatedtooltype'] = 'Đã tạo công cụ mới thành công!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Đã tải cấu hình công cụ từ nội dung đã chọn thành công.';
$string['toggle_debug_data'] = 'Bật/tắt dữ liệu gỡ lỗi';
$string['tool_settings'] = 'Cài đặt công cụ';
$string['tooldescription'] = 'Mô tả công cụ';
$string['tooldescription_help'] = 'Mô tả công cụ sẽ hiển thị cho giáo viên trong danh sách hoạt động.

Mô tả cần nêu công cụ dùng để làm gì, công cụ thực hiện những gì và mọi thông tin bổ sung mà giáo viên cần biết.';
$string['tooldetailsaccesstokenurl'] = 'URL mã thông báo truy cập';
$string['tooldetailsauthrequesturl'] = 'URL yêu cầu xác thực';
$string['tooldetailsclientid'] = 'ID máy khách';
$string['tooldetailsdeploymentid'] = 'ID triển khai';
$string['tooldetailsmailtosubject'] = 'Cấu hình công cụ LTI';
$string['tooldetailsmodalemail'] = 'Email';
$string['tooldetailsmodallink'] = 'Xem chi tiết cấu hình';
$string['tooldetailsmodaltitle'] = 'Chi tiết cấu hình công cụ';
$string['tooldetailsplatformid'] = 'ID nền tảng';
$string['tooldetailspublickeyseturl'] = 'URL bộ khóa công khai';
$string['toolisbeingused'] = 'Công cụ này đã được sử dụng {$a} lần';
$string['toolisnotbeingused'] = 'Công cụ này chưa được sử dụng';
$string['toolproxy'] = 'Đăng ký công cụ bên ngoài';
$string['toolproxy_help'] = 'Việc đăng ký công cụ bên ngoài cho phép quản trị viên trang Moodle cấu hình công cụ bên ngoài từ một proxy công cụ do nhà cung cấp công cụ hỗ trợ LTI 2.0 cung cấp. Để bắt đầu quy trình, chỉ cần URL đăng ký do nhà cung cấp công cụ cung cấp. Các quyền năng lực và dịch vụ cung cấp cho nhà cung cấp công cụ được chọn khi cấu hình đăng ký mới.

Các đăng ký công cụ trong trang này được chia thành bốn loại:

* **Đã cấu hình** - Các đăng ký công cụ này đã được thiết lập nhưng quy trình đăng ký chưa bắt đầu.
* **Đang chờ** - Quy trình đăng ký cho các đăng ký công cụ này đã bắt đầu nhưng chưa hoàn tất. Mở và lưu cài đặt để chuyển chúng
trở lại loại \'Đã cấu hình\'.
* **Đã chấp nhận** - Các đăng ký công cụ này đã được phê duyệt; tài nguyên được chỉ định trong proxy công cụ sẽ xuất hiện trên trang công cụ được cấu hình sẵn
với trạng thái ban đầu là \'Đang chờ\'.
* **Đã từ chối** - Các đăng ký công cụ này đã bị từ chối trong quá trình đăng ký. Mở và lưu cài đặt để chuyển chúng
trở lại loại \'Đã cấu hình\' và khởi động lại quy trình đăng ký.';
$string['toolproxyregistration'] = 'Đăng ký công cụ bên ngoài';
$string['toolregistration'] = 'Đăng ký công cụ bên ngoài';
$string['toolsetup'] = 'Cấu hình công cụ bên ngoài';
$string['tooltypenotfounderror'] = 'Công cụ LTI được dùng trong hoạt động này đã bị xóa. Nếu cần trợ giúp, hãy liên hệ giáo viên hoặc quản trị viên trang web.';
$string['tooltypes'] = 'Công cụ';
$string['toolurl'] = 'URL công cụ';
$string['toolurl_contentitemselectionrequest'] = 'URL chọn nội dung';
$string['toolurl_contentitemselectionrequest_help'] = 'URL chọn nội dung sẽ được dùng để khởi chạy trang chọn nội dung từ nhà cung cấp công cụ. Nếu để trống, URL công cụ sẽ được sử dụng.';
$string['toolurl_help'] = 'URL công cụ được dùng để đối chiếu URL công cụ với cấu hình công cụ tương ứng. Không bắt buộc thêm tiền tố http(s) vào URL.

Ngoài ra, URL cơ sở sẽ được dùng làm URL công cụ nếu không chỉ định URL công cụ trong phiên bản công cụ bên ngoài.

Ví dụ: URL cơ sở *tool.com* sẽ khớp với:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

URL cơ sở *www.tool.com/quizzes* sẽ khớp với:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

URL cơ sở *quiz.tool.com* sẽ khớp với:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Nếu có hai cấu hình công cụ khác nhau cho cùng một miền, cấu hình khớp cụ thể nhất sẽ được sử dụng.

Bạn cũng có thể chèn URL cartridge nếu có; thông tin chi tiết về công cụ sẽ được tự động điền.';
$string['toolurlplaceholder'] = 'URL công cụ...';
$string['typename'] = 'Tên công cụ';
$string['typename_help'] = 'Tên công cụ được dùng để nhận diện nhà cung cấp công cụ trong Moodle. Tên đã nhập sẽ hiển thị với giáo viên khi thêm công cụ bên ngoài vào khóa học.';
$string['types'] = 'Loại';
$string['unabletocreatetooltype'] = 'Không thể tạo công cụ';
$string['unabletofindtooltype'] = 'Không tìm thấy công cụ cho {$a->id}';
$string['unknownstate'] = 'Trạng thái không xác định';
$string['update'] = 'Cập nhật';
$string['usage'] = 'Số lần sử dụng';
$string['useraccountinformation'] = 'Thông tin tài khoản người dùng';
$string['userpersonalinformation'] = 'Thông tin cá nhân người dùng';
$string['validurl'] = 'URL hợp lệ phải bắt đầu bằng http(s)://';
$string['viewsubmissions'] = 'Xem bài nộp và màn hình chấm điểm';
