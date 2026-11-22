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
 * @subpackage lti
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Thêm nội dung';
$string['adddeployment:deploymentid'] = 'ID triển khai';
$string['adddeployment:deploymentid_help'] = 'Mỗi lần triển khai công cụ (trang web này) trên một nền tảng sẽ được gán một ID triển khai duy nhất cho đăng ký đó. Phải đăng ký ID triển khai với công cụ (trang web này) trước khi cho phép khởi chạy từ lần triển khai công cụ tương ứng.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID triển khai không hợp lệ. ID triển khai đã tồn tại cho đăng ký ứng dụng này.';
$string['adddeployment:name'] = 'Tên triển khai';
$string['addtocourse'] = 'Thêm vào khóa học';
$string['addtogradebook'] = 'Thêm vào sổ điểm';
$string['allowframeembedding'] = 'Lưu ý: Nên bật cài đặt quản trị trang web \'Cho phép nhúng khung\', để công cụ được hiển thị trong khung thay vì cửa sổ mới.';
$string['authltimustbeenabled'] = 'Lưu ý: Trình bổ trợ này cũng yêu cầu bật trình bổ trợ xác thực LTI.';
$string['cartridgeurl'] = 'URL Cartridge';
$string['cookiesarerequired'] = 'Trình duyệt của bạn đang chặn cookie';
$string['cookiesarerequiredinfo'] = 'Không thể khởi chạy công cụ này vì có vẻ trình duyệt của bạn đang chặn cookie của bên thứ ba.
<br><br>
Để sử dụng công cụ này, hãy thử thay đổi cài đặt cookie của trình duyệt hoặc dùng trình duyệt khác.';
$string['copiedtoclipboard'] = 'Đã sao chép {$a} vào bảng tạm';
$string['copytoclipboard'] = 'Sao chép vào bảng tạm';
$string['couldnotestablishproxy'] = 'Không thể thiết lập proxy với bên tiêu thụ.';
$string['customproperties'] = 'Thuộc tính tùy chỉnh';
$string['deeplinkingurl'] = 'URL liên kết sâu';
$string['deletedactivity'] = 'Hoạt động đã bị xóa';
$string['deletedactivityalt'] = 'Hoạt động được chia sẻ bởi phiên bản này đã bị xóa';
$string['deletedactivitydescription'] = 'Hoạt động được chia sẻ bởi phiên bản này đã bị xóa. Bạn có thể chọn hoạt động khác để chia sẻ bằng cách chỉnh sửa phiên bản hoặc, nếu không còn cần thiết, chỉ cần xóa phiên bản. Xóa phiên bản sẽ gỡ bỏ mọi lượt ghi danh người dùng liên quan.';
$string['deploymentadd'] = 'Thêm lần triển khai';
$string['deploymentaddnotice'] = 'Đã thêm lần triển khai';
$string['deploymentdelete'] = 'Xóa lần triển khai';
$string['deploymentdeleteconfirm'] = 'Cảnh báo: Xóa một lần triển khai sẽ khiến mọi người dùng theo các liên kết tài nguyên gắn với lần triển khai công cụ này trên nền tảng mất quyền truy cập. Các dịch vụ đồng bộ thành viên và điểm cho những tài nguyên này cũng sẽ bị xóa. Bạn có chắc muốn xóa ID triển khai \'{$a}\' không?';
$string['deploymentdeletenotice'] = 'Đã xóa lần triển khai';
$string['deploymentid'] = 'ID triển khai';
$string['deployments'] = 'Các lần triển khai';
$string['deploymentsinfo'] = 'Nền tảng tạo ID triển khai khi công cụ được cung cấp trong một ngữ cảnh. Việc này có thể diễn ra lúc đăng ký hoặc sau đó, khi công cụ được cung cấp cho một khóa học hoặc danh mục cụ thể. Phải nhập ID triển khai tại đây trước khi cho phép khởi chạy từ lần triển khai công cụ.';
$string['details'] = 'Chi tiết';
$string['editplatformdetails'] = 'Chỉnh sửa chi tiết nền tảng';
$string['endpointltiversionnotice'] = 'Các điểm cuối công cụ bên dưới chỉ dành cho thiết lập LTI 1.3 thủ công. Đối với các phiên bản trước (1.1/2.0), có thể tìm thông tin chi tiết dành cho bên tiêu thụ trên trang \'Được xuất bản dưới dạng công cụ LTI\', truy cập qua điều hướng khóa học.';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu bật, người dùng chỉ có thể truy cập đến ngày này.';
$string['enrolenddateerror'] = 'Ngày kết thúc ghi danh không thể sớm hơn ngày bắt đầu';
$string['enrolisdisabled'] = 'Trình bổ trợ \'Xuất bản dưới dạng công cụ LTI\' đã bị tắt.';
$string['enrolltiversionincorrect'] = 'Tài nguyên chưa được thiết lập để sử dụng LTI cũ (phiên bản 1.1/2.0). Vui lòng liên hệ quản trị viên của công cụ này.';
$string['enrolmentfinished'] = 'Đã kết thúc ghi danh.';
$string['enrolmentnotstarted'] = 'Ghi danh chưa bắt đầu.';
$string['enrolperiod'] = 'Thời hạn ghi danh';
$string['enrolperiod_help'] = 'Khoảng thời gian ghi danh còn hiệu lực, tính từ lúc người dùng tự ghi danh từ hệ thống từ xa. Nếu tắt, thời hạn ghi danh sẽ không giới hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu bật, người dùng chỉ có thể truy cập kể từ ngày này.';
$string['existingregistrationerror'] = 'Đã tồn tại đăng ký cho issuer và client ID này.';
$string['failedrequest'] = 'Yêu cầu thất bại. Lý do: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Để truy cập công cụ, vui lòng theo liên kết bên dưới.';
$string['gradesync'] = 'Đồng bộ điểm';
$string['gradesync_help'] = 'Có gửi điểm từ công cụ đến hệ thống từ xa (bên tiêu thụ LTI) hay không.';
$string['incorrecttoken'] = 'Token không chính xác. Vui lòng kiểm tra URL và thử lại, hoặc liên hệ quản trị viên của công cụ này.';
$string['invalidexpiredregistrationurl'] = 'URL đăng ký không hợp lệ hoặc đã hết hạn. Vui lòng kiểm tra URL và thử lại.';
$string['invalidrequest'] = 'Yêu cầu không hợp lệ';
$string['invalidtoolconsumer'] = 'Bên tiêu thụ công cụ không hợp lệ.';
$string['jwksurl'] = 'URL JWKS';
$string['launchdetails'] = 'Chi tiết khởi chạy';
$string['launchdetails_help'] = 'Cần URL cartridge (còn gọi là URL cấu hình) kèm secret hoặc URL khởi chạy để cấu hình công cụ.';
$string['launchurl'] = 'URL khởi chạy';
$string['loginurl'] = 'URL khởi tạo đăng nhập';
$string['lti:config'] = 'Cấu hình các phiên bản \'Xuất bản dưới dạng công cụ LTI\\';
$string['lti:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Chi tiết khởi chạy';
$string['lti13launchdetails_help'] = 'URL khởi chạy và các thuộc tính tùy chỉnh chỉ cần thiết khi cấu hình thủ công liên kết tài nguyên trên nền tảng. Nếu có thể, giáo viên nên ưu tiên quy trình chọn nội dung (liên kết sâu) để tạo liên kết tài nguyên.';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Đã xảy ra sự cố khi lấy cấu hình OpenID từ nền tảng. Kết quả không phải JSON hợp lệ. Nguyên nhân cũng có thể là cấu hình máy chủ bị chặn. Hãy đảm bảo trang web của bạn được cấu hình để kết nối với miền nền tảng và thử lại bằng URL đăng ký mới.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Dữ liệu khởi chạy hoặc cấu hình công cụ không hợp lệ. Không tìm thấy lần triển khai (ID triển khai: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Dữ liệu khởi chạy không hợp lệ. Tài nguyên \'{$a}\' không khả dụng hoặc không tồn tại.';
$string['ltiadvlauncherror:invalidregistration'] = 'Dữ liệu khởi chạy hoặc cấu hình công cụ không hợp lệ. Không tìm thấy đăng ký nền tảng (issuer: {$a->platform}, client ID: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Dữ liệu khởi chạy không hợp lệ. Trường claim tùy chỉnh \'id\' là bắt buộc để khởi chạy hoạt động hoặc tài nguyên qua LTI Advantage.';
$string['ltilegacy'] = 'LTI cũ (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Các công cụ LTI cũ (1.1/2.0) đã lỗi thời. Nội dung hiện nên được chia sẻ bằng LTI Advantage.';
$string['ltiversion'] = 'Phiên bản LTI';
$string['ltiversion_help'] = 'Phiên bản LTI sẽ được dùng để truy cập nội dung đã xuất bản.

LTI Advantage cho phép xuất bản nội dung lên các nền tảng đã đăng ký trước mà không cần thay đổi trên nền tảng mỗi khi xuất bản nội dung mới. Thỏa thuận bảo mật được thiết lập giữa nền tảng và công cụ.

Các phiên bản cũ (1.1 và 2.0) yêu cầu tạo đăng ký công cụ mới trên bên tiêu thụ cho mỗi nội dung mới được xuất bản, vì mỗi nội dung đã xuất bản có thỏa thuận bảo mật riêng với trang bên tiêu thụ và phải được thiết lập riêng từng trường hợp.';
$string['managedeployments'] = 'Quản lý các lần triển khai';
$string['maxenrolled'] = 'Số người dùng được ghi danh tối đa';
$string['maxenrolled_help'] = 'Số người dùng từ xa tối đa có thể truy cập công cụ. Nếu đặt là 0, số người dùng được ghi danh không giới hạn.';
$string['maxenrolledreached'] = 'Đã đạt số người dùng từ xa tối đa được phép truy cập công cụ.';
$string['membersync'] = 'Đồng bộ người dùng';
$string['membersync_help'] = 'Có đồng bộ người dùng đã ghi danh trên hệ thống từ xa với lượt ghi danh trong khóa học này bằng tác vụ đã lên lịch hay không; tác vụ sẽ tạo tài khoản cho từng người dùng từ xa khi cần và ghi danh hoặc hủy ghi danh họ theo yêu cầu.

Nếu chọn không, tài khoản sẽ được tạo cho người dùng từ xa khi họ truy cập công cụ và họ sẽ được tự động ghi danh.';
$string['membersyncmode'] = 'Chế độ đồng bộ người dùng';
$string['membersyncmode_help'] = 'Có ghi danh và/hoặc hủy ghi danh người dùng từ xa khỏi khóa học này hay không.';
$string['membersyncmodeenrolandunenrol'] = 'Ghi danh người dùng mới và hủy ghi danh người dùng không còn có';
$string['membersyncmodeenrolnew'] = 'Ghi danh người dùng mới';
$string['membersyncmodeunenrolmissing'] = 'Hủy ghi danh người dùng không còn có';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Không tìm thấy lần triển khai công cụ nào';
$string['nopublishedcontent'] = 'Chưa có tài nguyên hoặc hoạt động nào được xuất bản';
$string['noregisteredplatforms'] = 'Không có nền tảng đã đăng ký';
$string['notoolsprovided'] = 'Không có công cụ nào được cung cấp';
$string['opensslconfiginvalid'] = 'LTI 1.3 yêu cầu cấu hình tệp openssl.cnf hợp lệ và cung cấp tệp này cho máy chủ web. Vui lòng liên hệ quản trị viên trang web để cấu hình và bật openssl cho trang web này.';
$string['opentool'] = 'Mở công cụ';
$string['platformdetails'] = 'Chi tiết nền tảng';
$string['platformdetailsinfo'] = 'Sau khi thiết lập công cụ trên nền tảng, phải ghi lại thông tin chi tiết của nền tảng tại đây để hoàn tất đăng ký.
<ul>
<li>Với đăng ký động, thông tin này sẽ được tự động thiết lập và không cần thay đổi thêm.</li>
<li>Với đăng ký thủ công, phải sao chép thủ công thông tin này từ nền tảng.</li>
</ul>';
$string['pluginname'] = 'Xuất bản dưới dạng công cụ LTI';
$string['pluginname_desc'] = 'Plugin \'Xuất bản dưới dạng công cụ LTI\', cùng với plugin xác thực LTI, cho phép người dùng từ xa truy cập các khóa học và hoạt động được chọn. Nói cách khác, Moodle hoạt động như một nhà cung cấp công cụ LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'Danh sách người dùng được ghi danh thông qua nhà cung cấp LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Thời điểm người dùng truy cập khóa học lần gần nhất';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Điểm gần nhất được ghi nhận của người dùng';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Thời điểm người dùng được ghi danh';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID của người dùng';
$string['provisioningmode'] = 'Chế độ cấp tài khoản';
$string['provisioningmode_help'] = 'Thiết lập này xác định cách xử lý tài khoản khi khởi chạy lần đầu. Có một số chế độ được hỗ trợ:
<ul>
<li>Chỉ tài khoản mới (tự động). Tài khoản sẽ tự động được tạo cho người dùng khởi chạy từ nền tảng. Đây là chế độ mặc định khi học viên khởi chạy.</li>
<li>Tài khoản hiện có và tài khoản mới (hỏi người dùng). Người dùng được lựa chọn cách xử lý. Họ có thể liên kết tài khoản hiện có hoặc tạo tài khoản mới. Đây là tùy chọn linh hoạt nhất và là mặc định khi giáo viên khởi chạy.</li>
<li>Chỉ tài khoản hiện có (hỏi người dùng). Người dùng sẽ được yêu cầu liên kết tài khoản hiện có và không thể truy cập tài nguyên công cụ nếu không thực hiện việc này.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Chế độ cấp tài khoản khi học viên khởi chạy lần đầu';
$string['provisioningmodeteacherlaunch'] = 'Chế độ cấp tài khoản khi giáo viên khởi chạy lần đầu';
$string['publishedcontent'] = 'Nội dung đã xuất bản';
$string['publishedcontent_help'] = 'Tài nguyên hoặc hoạt động đã xuất bản có thể được sử dụng trên các nền tảng đã đăng ký thông qua quy trình chọn nội dung (liên kết sâu). Ngoài ra, có thể tạo thủ công liên kết tài nguyên trên nền tảng bằng URL khởi chạy và các thuộc tính tùy chỉnh được cung cấp.';
$string['registeredplatforms'] = 'Các nền tảng đã đăng ký';
$string['registeredplatformsltiversionnotice'] = 'Các nền tảng được liệt kê bên dưới đã đăng ký để giao tiếp qua LTI 1.3. Với các phiên bản cũ hơn, không cần đăng ký bên tiêu thụ.';
$string['registerplatform:accesstokenurl'] = 'URL mã thông báo truy cập';
$string['registerplatform:accesstokenurl_help'] = 'URL mà công cụ sẽ gửi các yêu cầu mã thông báo truy cập đến. URL này do nền tảng cung cấp.';
$string['registerplatform:authrequesturl'] = 'URL yêu cầu xác thực';
$string['registerplatform:authrequesturl_help'] = 'URL mà công cụ sẽ gửi các yêu cầu xác thực OpenID Connect đến. URL này do nền tảng cung cấp.';
$string['registerplatform:clientid'] = 'ID khách hàng';
$string['registerplatform:clientid_help'] = 'Chuỗi dùng để xác định đăng ký công cụ trên nền tảng. Chuỗi này do nền tảng cung cấp.';
$string['registerplatform:duplicateregistrationerror'] = 'ID khách hàng không hợp lệ. ID khách hàng này đã được đăng ký cho ID nền tảng đã cung cấp.';
$string['registerplatform:invalidurlerror'] = 'URL không hợp lệ. Bạn đã thêm http:// hoặc https:// chưa?';
$string['registerplatform:jwksurl'] = 'URL bộ khóa công khai';
$string['registerplatform:jwksurl_help'] = 'URL bộ khóa công khai hoặc JWKS, được dùng để lấy khóa công khai của nền tảng. URL này do nền tảng cung cấp.';
$string['registerplatform:name'] = 'Tên nền tảng';
$string['registerplatform:name_help'] = 'Tên ngắn mô tả nền tảng. Có thể thay đổi tên này bất cứ lúc nào.';
$string['registerplatform:platformid'] = 'ID nền tảng (issuer)';
$string['registerplatform:platformid_help'] = 'URL xác định nền tảng học tập của bên thứ ba. URL này do nền tảng cung cấp.';
$string['registerplatformadd'] = 'Đăng ký nền tảng';
$string['registerplatformaddnotice'] = 'Đã thêm đăng ký nền tảng';
$string['registerplatformdelete'] = 'Xóa đăng ký nền tảng';
$string['registerplatformdeleteconfirm'] = 'Bạn có chắc chắn muốn xóa đăng ký cho nền tảng \'{$a}\' không? Thao tác này cũng sẽ xóa tất cả các lượt triển khai công cụ được lưu trong đăng ký này.';
$string['registerplatformdeletenotice'] = 'Đã xóa đăng ký nền tảng';
$string['registerplatformedit'] = 'Chỉnh sửa đăng ký';
$string['registerplatformeditnotice'] = 'Đã cập nhật đăng ký nền tảng';
$string['registration'] = 'Đăng ký công cụ đã xuất bản';
$string['registrationdeeplinklabel'] = 'Thêm nội dung từ {$a}';
$string['registrationdynamic'] = 'Đăng ký động';
$string['registrationmanual'] = 'Đăng ký thủ công';
$string['registrationresourcelinklabel'] = 'Khởi chạy nội dung từ {$a}';
$string['registrationstatus'] = 'Trạng thái';
$string['registrationstatusactive'] = 'Đang hoạt động';
$string['registrationstatuspending'] = 'Đang chờ';
$string['registrationurl'] = 'URL đăng ký';
$string['registrationurl_help'] = 'Nếu sử dụng URL đăng ký (còn gọi là URL proxy), công cụ sẽ được cấu hình tự động.';
$string['registrationurlinfomessage'] = 'Nếu nền tảng hỗ trợ đăng ký động, hãy sử dụng URL đăng ký bên dưới. Để biết thêm thông tin về đăng ký động, hãy xem tài liệu <a href="{$a}">Xuất bản dưới dạng công cụ LTI</a>.';
$string['remotesystem'] = 'Hệ thống từ xa';
$string['requirecompletion'] = 'Yêu cầu hoàn thành khóa học hoặc hoạt động trước khi đồng bộ điểm';
$string['returnurlnotset'] = 'Chưa thiết lập URL quay lại.';
$string['roleinstructor'] = 'Vai trò dành cho giáo viên';
$string['roleinstructor_help'] = 'Vai trò được gán trong công cụ cho giáo viên từ xa.';
$string['rolelearner'] = 'Vai trò dành cho học viên';
$string['rolelearner_help'] = 'Vai trò được gán trong công cụ cho học viên từ xa.';
$string['secret'] = 'Mã bí mật';
$string['secret_help'] = 'Chuỗi ký tự được chia sẻ với hệ thống từ xa (bên tiêu thụ LTI) để cấp quyền truy cập vào công cụ.';
$string['sharedexternaltools'] = 'Đã xuất bản dưới dạng công cụ LTI';
$string['successfulregistration'] = 'Đăng ký thành công';
$string['tasksyncgrades'] = 'Đồng bộ điểm của công cụ LTI đã xuất bản';
$string['tasksyncmembers'] = 'Đồng bộ người dùng của công cụ LTI đã xuất bản';
$string['tooldetails'] = 'Chi tiết công cụ';
$string['toolsprovided'] = 'Các công cụ đã xuất bản';
$string['toolsprovided_help'] = 'Có thể chia sẻ công cụ với một trang khác bằng cách cung cấp thông tin khởi chạy hoặc URL đăng ký.';
$string['tooltobeprovided'] = 'Công cụ cần xuất bản';
$string['toolurl'] = 'URL công cụ';
$string['userdefaultvalues'] = 'Giá trị mặc định của người dùng';
$string['viewplatformdetails'] = 'Xem chi tiết nền tảng';
$string['viewtoolendpoints'] = 'Xem các điểm cuối của công cụ';
