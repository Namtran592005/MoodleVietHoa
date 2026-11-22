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
 * @subpackage scorm
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Kích hoạt';
$string['activityloading'] = 'Bạn sẽ được tự động chuyển hướng đến hoạt động sau';
$string['activityoverview'] = 'Bạn có các gói SCORM cần xử lý';
$string['activitypleasewait'] = 'Đang tải hoạt động, vui lòng đợi ...';
$string['adminsettings'] = 'Cài đặt quản trị';
$string['advanced'] = 'Tham số';
$string['aicchacpkeepsessiondata'] = 'Dữ liệu phiên AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Thời lượng tính bằng ngày lưu dữ liệu phiên AICC HACP bên ngoài (giá trị cao sẽ làm bảng đầy dữ liệu cũ, nhưng có thể hữu ích khi gỡ lỗi)';
$string['aicchacptimeout'] = 'Thời gian chờ AICC HACP';
$string['aicchacptimeout_desc'] = 'Thời lượng tính bằng phút mà một phiên AICC HACP bên ngoài có thể duy trì trạng thái mở';
$string['aiccuserid'] = 'AICC truyền mã người dùng dạng số';
$string['aiccuserid_desc'] = 'Tiêu chuẩn AICC dành cho tên người dùng hạn chế hơn nhiều so với Moodle và chỉ cho phép chữ và số, dấu gạch ngang và dấu gạch dưới. Không cho phép dấu chấm, dấu cách và ký hiệu @. Nếu được bật, mã số người dùng sẽ được truyền cho gói AICC thay vì tên người dùng.';
$string['aliasonly'] = 'Khi chọn tệp imsmanifest.xml từ kho lưu trữ, bạn phải dùng bí danh/lối tắt cho tệp này.';
$string['allattempts'] = 'Tất cả lần làm SCORM';
$string['allowapidebug'] = 'Kích hoạt gỡ lỗi và theo dõi API (thiết lập mặt nạ ghi nhận bằng apidebugmask)';
$string['allowedattemptsstudent'] = 'Số lần làm được phép cho mỗi học viên';
$string['allowtypeaicchacp'] = 'Bật AICC HACP bên ngoài';
$string['allowtypeaicchacp_desc'] = 'Nếu được bật, tùy chọn này cho phép giao tiếp AICC HACP bên ngoài mà không yêu cầu người dùng đăng nhập đối với các yêu cầu POST từ gói AICC bên ngoài.';
$string['allowtypeexternal'] = 'Bật loại gói bên ngoài';
$string['allowtypeexternalaicc'] = 'Bật URL AICC trực tiếp';
$string['allowtypeexternalaicc_desc'] = 'Nếu được bật, tùy chọn này cho phép dùng URL trực tiếp đến gói AICC.';
$string['allowtypelocalsync'] = 'Bật loại gói đã tải xuống';
$string['apidebugmask'] = 'Mặt nạ ghi nhận gỡ lỗi API - dùng biểu thức chính quy đơn giản trên &lt;username&gt;:&lt;activityname&gt;, ví dụ admin:.* sẽ chỉ gỡ lỗi cho người dùng admin';
$string['areacontent'] = 'Tệp nội dung';
$string['areapackage'] = 'Tệp gói';
$string['asset'] = 'Tài nguyên';
$string['assetlaunched'] = 'Tài nguyên - Đã xem';
$string['attempt'] = 'Lần làm bài';
$string['attempt1'] = '1 lần làm bài';
$string['attempts'] = 'Lần làm bài';
$string['attemptsmanagement'] = 'Quản lý lần làm bài';
$string['attemptstatusall'] = 'Bảng điều khiển và trang truy cập';
$string['attemptstatusentry'] = 'Chỉ trang truy cập';
$string['attemptstatusmy'] = 'Chỉ bảng điều khiển';
$string['attemptsx'] = '{$a} lần làm bài';
$string['attr_error'] = 'Giá trị không hợp lệ cho thuộc tính ({$a->attr}) trong thẻ {$a->tag}.';
$string['autocommit'] = 'Tự động ghi nhận';
$string['autocommit_help'] = 'Nếu được bật, dữ liệu SCORM sẽ tự động được lưu vào cơ sở dữ liệu. Tùy chọn này hữu ích với các đối tượng SCORM không thường xuyên lưu dữ liệu.';
$string['autocommitdesc'] = 'Tự động lưu dữ liệu SCORM nếu gói SCORM không tự lưu.';
$string['autocontinue'] = 'Tự động tiếp tục';
$string['autocontinue_help'] = 'Nếu được bật, các đối tượng học tập tiếp theo sẽ tự động được khởi chạy; nếu không, phải dùng nút Tiếp tục.';
$string['autocontinuedesc'] = 'Nếu được bật, các đối tượng học tập tiếp theo sẽ tự động được khởi chạy; nếu không, phải dùng nút Tiếp tục.';
$string['averageattempt'] = 'Số lần làm bài trung bình';
$string['averageattemptperstudent'] = 'Số lần làm bài trung bình của mỗi học viên';
$string['badarchive'] = 'Bạn phải cung cấp một tệp zip hợp lệ';
$string['badimsmanifestlocation'] = 'Đã tìm thấy tệp imsmanifest.xml nhưng tệp không nằm ở thư mục gốc của tệp zip. Vui lòng đóng gói lại SCORM.';
$string['badmanifest'] = 'Một số lỗi trong tệp kê khai: xem nhật ký lỗi';
$string['browse'] = 'Xem trước';
$string['browsed'] = 'Đã xem qua';
$string['browsemode'] = 'Chế độ xem trước';
$string['browsemodewithname'] = 'Chế độ xem trước: {$a}';
$string['browserepository'] = 'Duyệt kho lưu trữ';
$string['cachedef_elements'] = 'Bộ nhớ đệm phần tử';
$string['calculatedweight'] = 'Trọng số được tính';
$string['calendarend'] = '{$a} đóng';
$string['calendarstart'] = '{$a} mở';
$string['cannotaccess'] = 'Bạn không thể gọi tập lệnh này theo cách đó';
$string['cannotfindsco'] = 'Không tìm thấy SCO';
$string['chooseapacket'] = 'Chọn hoặc cập nhật gói';
$string['closebeforeopen'] = 'Bạn đã đặt ngày đóng trước ngày mở.';
$string['collapsetocwinsize'] = 'Thu gọn mục lục khi kích thước cửa sổ nhỏ hơn';
$string['collapsetocwinsizedesc'] = 'Cài đặt này cho phép bạn chỉ định kích thước cửa sổ nhỏ hơn ngưỡng mà mục lục sẽ tự động thu gọn.';
$string['compatibilitysettings'] = 'Cài đặt tương thích';
$string['completed'] = 'Đã hoàn thành';
$string['completiondetail:allscos'] = 'Thực hiện tất cả các phần của hoạt động này';
$string['completiondetail:completionscore'] = 'Đạt điểm từ {$a} trở lên';
$string['completiondetail:completionstatuscompleted'] = 'Hoàn thành hoạt động';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Hoàn thành hoặc đạt hoạt động';
$string['completiondetail:completionstatuspassed'] = 'Đạt hoạt động';
$string['completionscorerequired'] = 'Yêu cầu điểm tối thiểu';
$string['completionscorerequireddesc'] = 'Cần đạt điểm tối thiểu {$a} để hoàn thành';
$string['completionstatus_completed'] = 'Đã hoàn thành';
$string['completionstatus_passed'] = 'Đạt';
$string['completionstatusallscos'] = 'Tất cả SCO phải trả về trạng thái hoàn thành';
$string['completionstatusallscos_help'] = 'Một số gói SCORM có nhiều thành phần hoặc "SCO". Khi bật tùy chọn này, tất cả SCO trong gói phải trả về lesson_status tương ứng thì hoạt động mới được đánh dấu là hoàn thành.';
$string['completionstatusrequired'] = 'Yêu cầu trạng thái';
$string['completionstatusrequired_help'] = 'Chọn một hoặc nhiều trạng thái sẽ yêu cầu người dùng đạt ít nhất một trạng thái đã chọn để được đánh dấu là hoàn thành hoạt động SCORM này, đồng thời đáp ứng mọi yêu cầu hoàn thành hoạt động khác.';
$string['completionstatusrequireddesc'] = 'Học viên phải đạt ít nhất một trong các trạng thái sau: {$a}';
$string['confirmloosetracks'] = 'CẢNH BÁO: Có vẻ như gói đã bị thay đổi hoặc chỉnh sửa. Nếu cấu trúc gói thay đổi, một số dữ liệu theo dõi của người dùng có thể bị mất trong quá trình cập nhật.';
$string['contents'] = 'Nội dung';
$string['coursepacket'] = 'Gói khóa học';
$string['coursestruct'] = 'Cấu trúc nội dung';
$string['crontask'] = 'Xử lý SCORM trong nền';
$string['currentwindow'] = 'Cửa sổ hiện tại';
$string['datadir'] = 'Lỗi hệ thống tệp: Không thể tạo thư mục dữ liệu khóa học';
$string['defaultdisplaysettings'] = 'Cài đặt hiển thị mặc định';
$string['defaultgradesettings'] = 'Cài đặt điểm mặc định';
$string['defaultothersettings'] = 'Các cài đặt mặc định khác';
$string['deleteallattempts'] = 'Xóa tất cả lần làm SCORM';
$string['deleteattemptcheck'] = 'Bạn có chắc chắn muốn xóa hoàn toàn các lần làm bài này không?';
$string['deleteselected'] = 'Xóa các lần làm bài đã chọn';
$string['deleteuserattemptcheck'] = 'Bạn có chắc chắn muốn xóa hoàn toàn tất cả lần làm bài của mình không?';
$string['details'] = 'Chi tiết theo dõi';
$string['directories'] = 'Hiển thị liên kết thư mục';
$string['disabled'] = 'Đã tắt';
$string['display'] = 'Hiển thị gói';
$string['displayattemptstatus'] = 'Hiển thị trạng thái lần làm bài';
$string['displayattemptstatus_help'] = 'Tùy chọn này cho phép hiển thị tóm tắt các lần làm bài của người dùng trong khối tổng quan khóa học trên Bảng điều khiển và/hoặc trang truy cập SCORM.';
$string['displayattemptstatusdesc'] = 'Có hiển thị tóm tắt các lần làm bài của người dùng trong khối tổng quan khóa học trên Bảng điều khiển và/hoặc trang truy cập SCORM hay không.';
$string['displaycoursestructure'] = 'Hiển thị cấu trúc khóa học trên trang truy cập';
$string['displaycoursestructure_help'] = 'Nếu được bật, mục lục sẽ hiển thị trên trang tổng quan SCORM.';
$string['displaycoursestructuredesc'] = 'Nếu được bật, mục lục sẽ hiển thị trên trang tổng quan SCORM.';
$string['displaydesc'] = 'Có hiển thị gói SCORM trong cửa sổ mới hay không.';
$string['displaysettings'] = 'Cài đặt hiển thị';
$string['dnduploadscorm'] = 'Thêm gói SCORM';
$string['domxml'] = 'Thư viện ngoài DOMXML';
$string['element'] = 'Phần tử';
$string['enter'] = 'Vào';
$string['entercourse'] = 'Vào khóa học';
$string['errorlogs'] = 'Nhật ký lỗi';
$string['eventattemptdeleted'] = 'Đã xóa lần làm bài';
$string['eventinteractionsviewed'] = 'Đã xem các tương tác';
$string['eventreportviewed'] = 'Đã xem báo cáo';
$string['eventscolaunched'] = 'Đã khởi chạy SCO';
$string['eventscorerawsubmitted'] = 'Đã nộp điểm thô SCORM';
$string['eventstatussubmitted'] = 'Đã nộp trạng thái SCORM';
$string['eventtracksviewed'] = 'Đã xem dữ liệu theo dõi';
$string['eventuserreportviewed'] = 'Đã xem báo cáo người dùng';
$string['everyday'] = 'Mỗi ngày';
$string['everytime'] = 'Mỗi lần sử dụng';
$string['exceededmaxattempts'] = 'Bạn đã đạt số lần làm bài tối đa.';
$string['exit'] = 'Thoát khóa học';
$string['exitactivity'] = 'Thoát hoạt động';
$string['expired'] = 'Rất tiếc, hoạt động này đã đóng vào {$a} và hiện không còn khả dụng';
$string['external'] = 'Cập nhật lịch của các gói bên ngoài';
$string['failed'] = 'Không đạt';
$string['finishscorm'] = 'Nếu bạn đã xem xong tài nguyên này, {$a}';
$string['finishscormlinkname'] = 'nhấp vào đây để quay lại trang khóa học';
$string['firstaccess'] = 'Truy cập lần đầu';
$string['firstattempt'] = 'Lần làm bài đầu tiên';
$string['floating'] = 'Nổi';
$string['forceattemptalways'] = 'Luôn luôn';
$string['forceattemptoncomplete'] = 'Khi lần làm bài trước đã hoàn thành, đạt hoặc không đạt';
$string['forcecompleted'] = 'Buộc hoàn thành';
$string['forcecompleted_help'] = 'Nếu được bật, trạng thái của lần làm bài hiện tại sẽ bị buộc thành "completed". (Chỉ áp dụng cho các gói SCORM 1.2.)';
$string['forcecompleteddesc'] = 'Tùy chọn này đặt giá trị mặc định cho cài đặt buộc hoàn thành';
$string['forcejavascript'] = 'Buộc người dùng bật JavaScript';
$string['forcejavascript_desc'] = 'Nếu được bật (khuyến nghị), tùy chọn này ngăn truy cập các đối tượng SCORM khi trình duyệt của người dùng không hỗ trợ hoặc chưa bật JavaScript. Nếu tắt, người dùng có thể xem SCORM nhưng giao tiếp API sẽ thất bại và thông tin điểm sẽ không được lưu.';
$string['forcejavascriptmessage'] = 'Cần có JavaScript để xem đối tượng này. Vui lòng bật JavaScript trong trình duyệt rồi thử lại.';
$string['forcenewattempts'] = 'Buộc bắt đầu lần làm bài mới';
$string['forcenewattempts_help'] = 'Có 3 tùy chọn:

* Không - Nếu lần làm bài trước đã hoàn thành, đạt hoặc không đạt, học viên sẽ được chọn vào chế độ xem lại hoặc bắt đầu lần làm bài mới.
* Khi lần làm bài trước đã hoàn thành, đạt hoặc không đạt - Tùy chọn này dựa vào việc gói SCORM đặt trạng thái \'completed\', \'passed\' hoặc \'failed\'.
* Luôn luôn - Mỗi lần vào lại hoạt động SCORM sẽ tạo một lần làm bài mới và học viên sẽ không được đưa về vị trí đã đạt tới trong lần làm trước.';
$string['found'] = 'Đã tìm thấy tệp kê khai';
$string['frameheight'] = 'Chiều cao của khung hoặc cửa sổ trình chiếu.';
$string['framewidth'] = 'Chiều rộng của khung hoặc cửa sổ trình chiếu.';
$string['fromleft'] = 'Từ trái';
$string['fromtop'] = 'Từ trên';
$string['fullscreen'] = 'Lấp đầy toàn màn hình';
$string['general'] = 'Dữ liệu chung';
$string['gradeaverage'] = 'Điểm trung bình';
$string['gradeforattempt'] = 'Điểm cho lần làm bài';
$string['gradehighest'] = 'Điểm cao nhất';
$string['grademethod'] = 'Phương pháp tính điểm';
$string['grademethod_help'] = 'Phương pháp tính điểm xác định cách tính điểm cho một lần làm hoạt động.

Có 4 phương pháp tính điểm:

* Đối tượng học tập - Số đối tượng học tập đã hoàn thành/đạt
* Điểm cao nhất - Điểm cao nhất đạt được trong tất cả đối tượng học tập đã đạt
* Điểm trung bình - Trung bình của tất cả điểm số
* Tổng điểm - Tổng của tất cả điểm số';
$string['grademethoddesc'] = 'Phương pháp tính điểm xác định cách tính điểm cho một lần làm hoạt động.';
$string['gradereported'] = 'Điểm đã báo cáo';
$string['gradescoes'] = 'Đối tượng học tập';
$string['gradesettings'] = 'Cài đặt điểm';
$string['gradesum'] = 'Tổng điểm';
$string['height'] = 'Chiều cao';
$string['hidden'] = 'Ẩn';
$string['hidebrowse'] = 'Tắt chế độ xem trước';
$string['hidebrowse_help'] = 'Chế độ xem trước cho phép học viên xem hoạt động trước khi làm. Nếu chế độ xem trước bị tắt, nút xem trước sẽ bị ẩn.';
$string['hidebrowsedesc'] = 'Chế độ xem trước cho phép học viên xem hoạt động trước khi làm.';
$string['hideexit'] = 'Ẩn liên kết thoát';
$string['hidereview'] = 'Ẩn nút xem lại';
$string['hidetoc'] = 'Hiển thị cấu trúc nội dung trong trình phát';
$string['hidetoc_help'] = 'Cách hiển thị mục lục trong trình phát SCORM';
$string['hidetocdesc'] = 'Cài đặt này chỉ định cách hiển thị mục lục trong trình phát SCORM.';
$string['highestattempt'] = 'Lần làm bài có điểm cao nhất';
$string['identifier'] = 'Mã định danh câu hỏi';
$string['incomplete'] = 'Chưa hoàn thành';
$string['indicator:cognitivedepth'] = 'SCORM nhận thức';
$string['indicator:cognitivedepth_help'] = 'Chỉ báo này dựa trên mức độ nhận thức mà học viên đạt được trong hoạt động SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM nhận thức';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được tỷ lệ này trong mức độ tham gia nhận thức mà các hoạt động SCORM cung cấp trong khoảng thời gian phân tích này (Các cấp độ = Chưa xem, Đã xem, Đã nộp, Đã xem phản hồi)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Tương tác xã hội SCORM';
$string['indicator:socialbreadth_help'] = 'Chỉ báo này dựa trên mức độ tương tác xã hội mà học viên đạt được trong một hoạt động SCORM.';
$string['indicator:socialbreadthdef'] = 'Tương tác xã hội SCORM';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được tỷ lệ này trong mức độ tương tác xã hội do các hoạt động SCORM cung cấp trong khoảng thời gian phân tích này (Các mức = Không tham gia, Chỉ có người tham gia)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = 'Tương tác';
$string['invalidactivity'] = 'Hoạt động SCORM không hợp lệ';
$string['invalidhacpsession'] = 'Phiên HACP không hợp lệ';
$string['invalidmanifestname'] = 'Chỉ có thể chọn tệp imsmanifest.xml hoặc tệp .zip';
$string['invalidmanifestresource'] = 'CẢNH BÁO: Không tìm thấy các tài nguyên sau được tham chiếu trong tệp kê khai của bạn:';
$string['invalidstatus'] = 'Trạng thái không hợp lệ';
$string['invalidurl'] = 'URL được chỉ định không hợp lệ';
$string['invalidurlhttpcheck'] = 'URL được chỉ định không hợp lệ. Thông báo gỡ lỗi:<pre>{$a->cmsg}</pre>';
$string['largetrackupgrade'] = 'Bước nâng cấp tiếp theo này có thể mất một khoảng thời gian để hoàn tất. Trang của bạn có {$a} bản ghi theo dõi SCORM cần được chuyển sang cấu trúc bảng mới. Vui lòng kiên nhẫn vì không thể hiển thị thanh tiến trình.';
$string['last'] = 'Truy cập lần cuối vào';
$string['lastaccess'] = 'Lần truy cập gần nhất';
$string['lastattempt'] = 'Lần làm bài hoàn thành gần nhất';
$string['lastattemptlock'] = 'Khóa sau lần làm bài cuối cùng';
$string['lastattemptlock_help'] = 'Nếu được bật, học viên sẽ không thể khởi chạy trình phát SCORM sau khi đã sử dụng hết số lần làm bài được cấp.';
$string['lastattemptlockdesc'] = 'Nếu được bật, học viên sẽ không thể khởi chạy trình phát SCORM sau khi đã sử dụng hết số lần làm bài được cấp.';
$string['leavepage'] = 'Rời khỏi trang';
$string['location'] = 'Hiển thị thanh địa chỉ';
$string['masteryoverride'] = 'Điểm thành thạo ghi đè trạng thái';
$string['masteryoverride_help'] = 'Nếu được bật và có cung cấp điểm thành thạo, khi gọi LMSFinish và đã thiết lập điểm thô, trạng thái sẽ được tính lại dựa trên điểm thô và điểm thành thạo. Mọi trạng thái do SCORM cung cấp (bao gồm cả "chưa hoàn thành") sẽ bị ghi đè.';
$string['masteryoverridedesc'] = 'Tùy chọn này đặt giá trị mặc định cho thiết lập ghi đè điểm thành thạo';
$string['max'] = 'Điểm tối đa';
$string['maximumattempts'] = 'Số lần làm bài';
$string['maximumattempts_help'] = 'Thiết lập này cho phép giới hạn số lần làm bài. Chỉ áp dụng cho các gói SCORM 1.2 và AICC.';
$string['maximumattemptsdesc'] = 'Tùy chọn này đặt số lần làm bài tối đa mặc định cho một hoạt động';
$string['maximumgradedesc'] = 'Tùy chọn này đặt điểm tối đa mặc định cho một hoạt động';
$string['menubar'] = 'Hiển thị thanh menu';
$string['min'] = 'Điểm tối thiểu';
$string['minimumscoregreater'] = 'Điểm tối thiểu phải lớn hơn 0.';
$string['missing_attribute'] = 'Thiếu thuộc tính {$a->attr} trong thẻ {$a->tag}';
$string['missing_tag'] = 'Thiếu thẻ {$a->tag}';
$string['missingparam'] = 'Thiếu tham số bắt buộc hoặc tham số không chính xác';
$string['mode'] = 'Chế độ';
$string['modulename'] = 'Gói SCORM';
$string['modulename_help'] = '#### Tính năng chính
* Thêm các gói nội dung SCORM dưới dạng tệp zip
* Theo dõi tiến độ, mức độ hoàn thành và điểm của học viên

Cách sử dụng
* Nhập mô-đun học trực tuyến SCORM thương mại và theo dõi kết quả học tập của học viên
* Cung cấp hướng dẫn tương tác và theo dõi việc học viên hoàn thành hướng dẫn
* Cung cấp mô phỏng được đóng gói theo định dạng SCORM';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulename_summary'] = 'Tải lên và hiển thị nội dung Sharable Content Object Reference Model (SCORM) hiện có. SCORM thường được sử dụng với học liệu khóa học của bên thứ ba.';
$string['modulenameplural'] = 'Các gói SCORM';
$string['myaiccsessions'] = 'Các phiên AICC của tôi';
$string['myattempts'] = 'Các lần làm bài của tôi';
$string['nav'] = 'Hiển thị thanh điều hướng';
$string['nav_help'] = 'Thiết lập này xác định có hiển thị hay ẩn các nút điều hướng và vị trí của chúng.

Có 3 tùy chọn:

* Không - Không hiển thị các nút điều hướng
* Bên dưới nội dung - Hiển thị các nút điều hướng bên dưới nội dung gói SCORM
* Nổi - Hiển thị các nút điều hướng ở dạng nổi; vị trí tính từ trên xuống và từ trái sang do gói SCORM xác định.';
$string['navdesc'] = 'Thiết lập này xác định có hiển thị hay ẩn các nút điều hướng và vị trí của chúng.';
$string['navigation'] = 'Điều hướng';
$string['navpositionleft'] = 'Vị trí các nút điều hướng tính từ bên trái, theo pixel.';
$string['navpositiontop'] = 'Vị trí các nút điều hướng tính từ phía trên, theo pixel.';
$string['networkdropped'] = 'Có vẻ như kết nối Internet của bạn không ổn định hoặc phiên của bạn đã hết hạn. Tiến độ có thể không được lưu. Vui lòng thoát và khởi chạy lại hoạt động này.';
$string['networkdroppedmobile'] = 'Có vẻ như kết nối Internet của bạn không ổn định hoặc phiên của bạn đã hết hạn. Tiến độ có thể không được lưu. Vui lòng thoát và khởi chạy lại hoạt động này. Bạn có thể mở lại hoạt động này trong ứng dụng di động để có kết nối ổn định hơn.';
$string['newattempt'] = 'Bắt đầu lần làm bài mới';
$string['next'] = 'Tiếp tục';
$string['no_attributes'] = 'Thẻ {$a->tag} phải có thuộc tính';
$string['no_children'] = 'Thẻ {$a->tag} phải có thẻ con';
$string['noactivity'] = 'Không có gì để báo cáo';
$string['noattemptsallowed'] = 'Số lần làm bài được phép';
$string['noattemptsmade'] = 'Số lần bạn đã làm bài';
$string['nolimit'] = 'Không giới hạn số lần làm bài';
$string['nomanifest'] = 'Gói tệp không hợp lệ - thiếu imsmanifest.xml hoặc cấu trúc AICC';
$string['noprerequisites'] = 'Rất tiếc, bạn không đáp ứng các điều kiện tiên quyết cần thiết để truy cập hoạt động này.';
$string['noreports'] = 'Không có báo cáo nào để hiển thị';
$string['normal'] = 'Bình thường';
$string['noscriptnoscorm'] = 'Trình duyệt của bạn không hỗ trợ JavaScript hoặc đã tắt hỗ trợ JavaScript. Gói SCORM này có thể không phát hoặc lưu dữ liệu chính xác.';
$string['not_corr_type'] = 'Kiểu không khớp với thẻ {$a->tag}';
$string['notattempted'] = 'Chưa làm bài';
$string['notopenyet'] = 'Rất tiếc, hoạt động này chưa khả dụng cho đến {$a}';
$string['objectives'] = 'Mục tiêu';
$string['openafterclose'] = 'Bạn đã đặt ngày mở sau ngày đóng';
$string['optallstudents'] = 'tất cả người dùng';
$string['optattemptsonly'] = 'chỉ người dùng đã làm bài';
$string['options'] = 'Tùy chọn (Một số trình duyệt không cho phép)';
$string['optionsadv'] = 'Tùy chọn (Nâng cao)';
$string['optionsadv_desc'] = 'Nếu được chọn, chiều rộng và chiều cao sẽ được liệt kê trong phần cài đặt nâng cao.';
$string['optnoattemptsonly'] = 'chỉ người dùng chưa làm bài';
$string['organization'] = 'Tổ chức';
$string['organizations'] = 'Các tổ chức';
$string['othersettings'] = 'Cài đặt bổ sung';
$string['package'] = 'Tệp gói';
$string['package_help'] = 'Tệp gói là tệp ZIP chứa các tệp định nghĩa khóa học SCORM hoặc AICC.';
$string['packagedir'] = 'Lỗi hệ thống tệp: Không thể tạo thư mục gói';
$string['packagefile'] = 'Chưa chỉ định tệp gói';
$string['packagehdr'] = 'Gói';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Thiết lập này cho phép chỉ định URL của gói SCORM thay vì chọn tệp bằng trình chọn tệp.';
$string['page-mod-scorm-x'] = 'Bất kỳ trang mô-đun SCORM nào';
$string['pagesize'] = 'Kích thước trang';
$string['passed'] = 'Đạt';
$string['php5'] = 'PHP 5 (thư viện DOMXML gốc)';
$string['pluginadministration'] = 'Quản trị gói SCORM';
$string['pluginname'] = 'Gói SCORM';
$string['popup'] = 'Cửa sổ mới';
$string['popuplaunched'] = 'Gói SCORM này đã được mở trong cửa sổ bật lên. Nếu bạn đã xem xong tài nguyên này, hãy nhấp vào đây để quay lại trang khóa học';
$string['popupmenu'] = 'Trong menu thả xuống';
$string['popupopen'] = 'Mở gói trong cửa sổ mới';
$string['popupsblocked'] = 'Có vẻ như cửa sổ bật lên đang bị chặn, khiến gói SCORM này không thể chạy. Vui lòng kiểm tra cài đặt trình duyệt trước khi thử lại.';
$string['position_error'] = 'Thẻ {$a->tag} không thể là thẻ con của thẻ {$a->parent}';
$string['preferencespage'] = 'Tùy chọn chỉ áp dụng cho trang này';
$string['preferencesuser'] = 'Tùy chọn cho báo cáo này';
$string['prev'] = 'Trước';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Trạng thái bài học cần theo dõi';
$string['privacy:metadata:aicc_session:scormmode'] = 'Chế độ của phần tử cần theo dõi';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Trạng thái của phần tử cần theo dõi';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Thời lượng phiên cần theo dõi';
$string['privacy:metadata:aicc_session:timecreated'] = 'Thời điểm phần tử được theo dõi được tạo';
$string['privacy:metadata:aicc:data'] = 'Dữ liệu cá nhân được chuyển tiếp từ hệ thống con AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Trình bổ trợ này gửi dữ liệu ra bên ngoài bằng AICC HACP.';
$string['privacy:metadata:attempt'] = 'Số lần làm bài';
$string['privacy:metadata:scoes_track:element'] = 'Tên phần tử cần theo dõi';
$string['privacy:metadata:scoes_track:value'] = 'Giá trị của phần tử đã cho';
$string['privacy:metadata:scorm_aicc_session'] = 'Thông tin phiên của AICC HACP';
$string['privacy:metadata:scorm_attempt'] = 'Các lần làm bài SCORM của người dùng';
$string['privacy:metadata:timemodified'] = 'Thời điểm phần tử được theo dõi sửa đổi lần cuối';
$string['privacy:metadata:userid'] = 'ID của người dùng đã truy cập hoạt động SCORM';
$string['protectpackagedownloads'] = 'Bảo vệ tệp tải xuống của gói';
$string['protectpackagedownloads_desc'] = 'Nếu được bật, chỉ người dùng có quyền năng lực course:manageactivities mới có thể tải xuống các gói SCORM. Nếu bị tắt, các gói SCORM luôn có thể được tải xuống (qua ứng dụng di động hoặc phương thức khác).';
$string['raw'] = 'Điểm thô';
$string['regular'] = 'Tệp kê khai thông thường';
$string['report'] = 'Báo cáo';
$string['reportcountallattempts'] = '{$a->nbusers} người dùng có {$a->nbattempts} lần làm bài, trong tổng số {$a->nbresults} kết quả';
$string['reportcountattempts'] = '{$a->nbresults} kết quả ({$a->nbusers} người dùng)';
$string['reports'] = 'Báo cáo';
$string['repositorynotsupported'] = 'Kho lưu trữ này không hỗ trợ liên kết trực tiếp đến tệp imsmanifest.xml.';
$string['response'] = 'Câu trả lời';
$string['result'] = 'Kết quả';
$string['results'] = 'Kết quả';
$string['review'] = 'Xem lại';
$string['reviewmode'] = 'Chế độ xem lại';
$string['rightanswer'] = 'Đáp án đúng';
$string['scoes'] = 'Đối tượng học tập';
$string['score'] = 'Điểm';
$string['scorm:addinstance'] = 'Thêm gói SCORM mới';
$string['scorm:deleteownresponses'] = 'Xóa các lần làm bài của chính mình';
$string['scorm:deleteresponses'] = 'Xóa các lần làm bài SCORM';
$string['scorm:savetrack'] = 'Lưu dữ liệu theo dõi';
$string['scorm:skipview'] = 'Bỏ qua trang tổng quan';
$string['scorm:viewreport'] = 'Xem báo cáo';
$string['scorm:viewscores'] = 'Xem điểm';
$string['scormclose'] = 'Khả dụng đến';
$string['scormcourse'] = 'Khóa học tập';
$string['scormloggingoff'] = 'Đã tắt ghi nhật ký API';
$string['scormloggingon'] = 'Đã bật ghi nhật ký API';
$string['scormopen'] = 'Khả dụng từ';
$string['scormresponsedeleted'] = 'Đã xóa các lần làm bài của người dùng';
$string['scormstandard'] = 'Chế độ tiêu chuẩn SCORM';
$string['scormstandarddesc'] = 'Khi bị tắt, Moodle cho phép các gói SCORM 1.2 lưu nhiều dữ liệu hơn mức đặc tả cho phép và sử dụng định dạng tên đầy đủ của Moodle khi truyền tên người dùng cho gói SCORM.';
$string['scormtype'] = 'Loại';
$string['scormtype_help'] = '* Gói đã tải lên - Tải trực tiếp tệp SCORM từ máy tính của bạn.
* Tệp kê khai SCORM bên ngoài - Liên kết đến tệp imsmanifest.xml từ xa. (Đối với URL khác miền, hãy dùng \'Gói đã tải xuống\' để tránh sự cố lưu điểm.)
* Gói đã tải xuống - Liên kết đến tệp ZIP từ xa. Hệ thống lưu một bản sao cục bộ và tự động cập nhật khi tệp nguồn thay đổi.
* URL AICC bên ngoài - Liên kết đến URL khởi chạy của một hoạt động AICC.';
$string['scrollbars'] = 'Cho phép cuộn cửa sổ';
$string['search:activity'] = 'Gói SCORM - thông tin hoạt động';
$string['selectall'] = 'Chọn tất cả';
$string['selectnone'] = 'Bỏ chọn tất cả';
$string['show'] = 'Hiển thị';
$string['sided'] = 'Sang bên cạnh';
$string['skipview'] = 'Học viên bỏ qua trang cấu trúc nội dung';
$string['skipview_help'] = 'Thiết lập này xác định có bỏ qua (không hiển thị) trang cấu trúc nội dung hay không. Nếu gói chỉ chứa một đối tượng học tập, luôn có thể bỏ qua trang cấu trúc nội dung.';
$string['skipviewdesc'] = 'Tùy chọn này đặt mặc định về việc bỏ qua cấu trúc nội dung của một trang';
$string['slashargs'] = 'CẢNH BÁO: đối số dấu gạch chéo bị tắt trên trang này và các đối tượng có thể không hoạt động như mong đợi!';
$string['stagesize'] = 'Kích thước vùng hiển thị';
$string['stagesize_help'] = 'Hai thiết lập này xác định chiều rộng và chiều cao của khung/cửa sổ dành cho các đối tượng học tập.';
$string['started'] = 'Bắt đầu vào';
$string['status'] = 'Trạng thái';
$string['statusbar'] = 'Hiển thị thanh trạng thái';
$string['student_response'] = 'Câu trả lời của học viên';
$string['studentattempted'] = 'Học viên đã làm bài';
$string['subplugintype_scormreport'] = 'Báo cáo';
$string['subplugintype_scormreport_plural'] = 'Báo cáo';
$string['suspended'] = 'Đã tạm ngưng';
$string['syntax'] = 'Lỗi cú pháp';
$string['tag_error'] = 'Thẻ không xác định ({$a->tag}) có nội dung này: {$a->value}';
$string['time'] = 'Thời gian';
$string['title'] = 'Tiêu đề';
$string['toc'] = 'Mục lục';
$string['toggletableofcontents'] = 'Bật/tắt mục lục';
$string['too_many_attributes'] = 'Thẻ {$a->tag} có quá nhiều thuộc tính';
$string['too_many_children'] = 'Thẻ {$a->tag} có quá nhiều phần tử con';
$string['toolbar'] = 'Hiển thị thanh công cụ';
$string['totalattempts'] = 'Tổng số lần làm bài';
$string['totaltime'] = 'Thời gian';
$string['trackcorrectcount'] = 'Số câu trả lời đúng';
$string['trackcorrectcount_help'] = 'Số kết quả đúng của câu hỏi';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Đây là mã định danh do gói SCORM đặt cho câu hỏi này; đặc tả SCORM không cho phép cung cấp toàn bộ nội dung câu hỏi.';
$string['trackingloose'] = 'CẢNH BÁO: Dữ liệu theo dõi của gói này sẽ bị mất!';
$string['tracklatency'] = 'Thời gian trễ';
$string['tracklatency_help'] = 'Khoảng thời gian từ lúc câu hỏi được cung cấp cho người học trả lời đến lúc có câu trả lời đầu tiên.';
$string['trackpattern'] = 'Mẫu';
$string['trackpattern_help'] = 'Đây là câu trả lời đúng cho câu hỏi này; nội dung này không hiển thị câu trả lời của người học.';
$string['trackresponse'] = 'Câu trả lời';
$string['trackresponse_help'] = 'Đây là câu trả lời của người học cho câu hỏi này';
$string['trackresult'] = 'Kết quả';
$string['trackresult_help'] = 'Cho biết người học có nhập câu trả lời đúng hay không.';
$string['trackscoremax'] = 'Điểm tối đa';
$string['trackscoremax_help'] = 'Giá trị tối đa có thể được gán cho điểm thô';
$string['trackscoremin'] = 'Điểm tối thiểu';
$string['trackscoremin_help'] = 'Giá trị tối thiểu có thể được gán cho điểm thô';
$string['trackscoreraw'] = 'Điểm thô';
$string['trackscoreraw_help'] = 'Số liệu phản ánh kết quả của người học so với khoảng giá trị được giới hạn bởi giá trị tối thiểu và tối đa';
$string['tracksuspenddata'] = 'Dữ liệu tạm dừng';
$string['tracksuspenddata_help'] = 'Cung cấp không gian để lưu trữ và truy xuất dữ liệu giữa các phiên của người học';
$string['tracktime'] = 'Thời gian';
$string['tracktime_help'] = 'Thời điểm bắt đầu lần làm bài';
$string['tracktype'] = 'Loại';
$string['tracktype_help'] = 'Loại câu hỏi, ví dụ: "choice" hoặc "shortanswer".';
$string['trackweight'] = 'Trọng số';
$string['trackweight_help'] = 'Trọng số được gán cho câu hỏi khi tính điểm.';
$string['type'] = 'Loại';
$string['typeaiccurl'] = 'URL AICC bên ngoài';
$string['typeexternal'] = 'Tệp kê khai SCORM bên ngoài';
$string['typelocal'] = 'Gói đã tải lên';
$string['typelocalsync'] = 'Gói đã tải xuống';
$string['undercontent'] = 'Bên dưới nội dung';
$string['unstablenetwork'] = 'Mạng không ổn định';
$string['unziperror'] = 'Đã xảy ra lỗi trong quá trình giải nén gói';
$string['updatefreq'] = 'Tần suất tự động cập nhật';
$string['updatefreq_error'] = 'Chỉ có thể đặt tần suất tự động cập nhật khi tệp gói được lưu trữ bên ngoài';
$string['updatefreq_help'] = 'Cho phép tự động tải xuống và cập nhật gói bên ngoài';
$string['updatefreqdesc'] = 'Thiết lập này đặt tần suất tự động cập nhật mặc định cho một hoạt động';
$string['validateascorm'] = 'Kiểm tra tính hợp lệ của gói';
$string['validation'] = 'Kết quả kiểm tra tính hợp lệ';
$string['validationtype'] = 'Thiết lập này chọn thư viện DOMXML dùng để kiểm tra tính hợp lệ của tệp kê khai SCORM. Nếu không biết, hãy giữ nguyên lựa chọn hiện tại.';
$string['value'] = 'Giá trị';
$string['versionwarning'] = 'Phiên bản tệp kê khai cũ hơn 1.3, có cảnh báo tại thẻ {$a->tag}';
$string['viewallreports'] = 'Xem báo cáo cho {$a} lần làm bài';
$string['viewalluserreports'] = 'Xem báo cáo cho {$a} người dùng';
$string['whatgrade'] = 'Cách tính điểm các lần làm bài';
$string['whatgrade_help'] = 'Nếu cho phép nhiều lần làm bài, thiết lập này xác định lần làm bài có điểm cao nhất, điểm trung bình, lần đầu tiên hay lần cuối cùng hoàn thành sẽ được ghi vào sổ điểm. Tùy chọn lần hoàn thành cuối cùng không tính các lần làm bài có trạng thái \'không đạt\'.

Lưu ý về cách xử lý nhiều lần làm bài:

* Tùy chọn bắt đầu lần làm bài mới được cung cấp bằng hộp kiểm phía trên nút Nhập trên trang cấu trúc nội dung. Vì vậy, hãy đảm bảo người học có thể truy cập trang đó nếu bạn muốn cho phép làm bài nhiều lần.
* Một số gói SCORM có khả năng xử lý thông minh các lần làm bài mới, nhưng nhiều gói thì không. Điều này có nghĩa là nếu người học vào lại một lần làm bài đã có, nội dung SCORM có thể ghi đè các lần làm bài trước đó nếu không có logic nội bộ để ngăn việc này, ngay cả khi lần làm bài đã \'hoàn thành\' hoặc \'đạt\'.
* Các thiết lập "Buộc hoàn thành", "Buộc làm lần mới" và "Khóa sau lần làm bài cuối cùng" cũng hỗ trợ quản lý nhiều lần làm bài.';
$string['whatgradedesc'] = 'Nếu cho phép nhiều lần làm bài, điểm cao nhất, điểm trung bình, lần làm bài đầu tiên hay lần cuối cùng hoàn thành sẽ được ghi vào sổ điểm.';
$string['width'] = 'Chiều rộng';
$string['window'] = 'Cửa sổ';
$string['youmustselectastatus'] = 'Bạn phải chọn trạng thái cần yêu cầu';
