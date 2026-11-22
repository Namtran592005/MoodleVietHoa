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
 * @subpackage completion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Đạt điểm';
$string['achievingpassinggrade'] = 'Đạt điểm đạt yêu cầu';
$string['activities'] = 'Các hoạt động';
$string['activitiescompleted'] = 'Hoàn thành hoạt động';
$string['activitiescompletednote'] = 'Lưu ý: Cần thiết lập tính năng hoàn thành hoạt động để hoạt động xuất hiện trong danh sách trên.';
$string['activitieslabel'] = 'Hoạt động / tài nguyên';
$string['activityaggregation'] = 'Điều kiện yêu cầu';
$string['activityaggregation_all'] = 'Hoàn thành TẤT CẢ hoạt động đã chọn';
$string['activityaggregation_any'] = 'Hoàn thành BẤT KỲ hoạt động nào đã chọn';
$string['activitycompletion'] = 'Điều kiện hoàn thành';
$string['activitycompletionupdated'] = 'Đã lưu các thay đổi';
$string['activitygradetopassnotset'] = 'Hoạt động này chưa được thiết lập điểm đạt yêu cầu hợp lệ. Có thể thiết lập điểm này trong mục Điểm của phần cài đặt hoạt động.';
$string['addconditions'] = 'Thêm điều kiện';
$string['affectedactivities'] = 'Các thay đổi sẽ ảnh hưởng đến <b>{$a}</b> hoạt động hoặc tài nguyên sau:';
$string['aggregationmethod'] = 'Phương thức tổng hợp';
$string['all'] = 'Tất cả';
$string['allconditions'] = 'Hoạt động được xem là hoàn thành khi học viên thực hiện tất cả những việc sau:';
$string['any'] = 'Bất kỳ';
$string['approval'] = 'Phê duyệt';
$string['areyousureoverridecompletion'] = 'Bạn có chắc chắn muốn ghi đè trạng thái hoàn thành hiện tại của hoạt động này đối với người dùng này và đánh dấu là "{$a}" không?';
$string['badautocompletion'] = 'Bạn phải chọn ít nhất một điều kiện.';
$string['badcompletiongradeitemnumber'] = 'Không thể bật yêu cầu điểm cho <b>{$a}</b> vì chưa bật chấm điểm theo {$a}.';
$string['bulkactivitycompletion'] = 'Chỉnh sửa hàng loạt trạng thái hoàn thành hoạt động';
$string['bulkactivitydetail'] = 'Chọn các hoạt động bạn muốn chỉnh sửa hàng loạt.';
$string['bulkcompletiontracking'] = 'Theo dõi tiến độ hoàn thành';
$string['bulkcompletiontracking_help'] = '<strong>Không có:</strong> Không chỉ báo trạng thái hoàn thành hoạt động

<strong>Thủ công:</strong> Học viên có thể tự đánh dấu hoạt động là đã hoàn thành

<strong>Có điều kiện:</strong> Hiển thị hoạt động là đã hoàn thành khi đáp ứng các điều kiện';
$string['checkactivity'] = 'Hộp kiểm cho hoạt động / tài nguyên: {$a}';
$string['checkall'] = 'Chọn hoặc bỏ chọn tất cả hoạt động và tài nguyên';
$string['checkallsection'] = 'Chọn hoặc bỏ chọn tất cả hoạt động và tài nguyên trong mục sau: {$a}';
$string['completeactivity'] = 'Hoàn thành hoạt động';
$string['completed'] = 'Đã hoàn thành';
$string['completedunlocked'] = 'Đã mở khóa các tùy chọn hoàn thành';
$string['completedunlockedtext'] = 'Khi bạn lưu biểu mẫu này, dữ liệu hoàn thành sẽ bị xóa rồi được tính toán lại nếu có thể. Để tránh điều này, bạn có thể rời khỏi trang mà không lưu.';
$string['completedwarning'] = 'Đã khóa các tùy chọn hoàn thành';
$string['completedwarningtext'] = 'Hoạt động này được đánh dấu là đã hoàn thành đối với một hoặc nhiều học viên. Nếu bạn mở khóa cài đặt để thay đổi rồi lưu biểu mẫu, dữ liệu hoàn thành sẽ bị xóa và được tính toán lại nếu có thể. Không thể tính toán lại trạng thái hoàn thành thủ công, vì vậy học viên sẽ cần đánh dấu hoạt động là đã hoàn thành một lần nữa.';
$string['completion'] = 'Theo dõi tiến độ hoàn thành';
$string['completion_automatic'] = 'Thêm yêu cầu';
$string['completion_help'] = 'Nếu được bật, tiến độ hoàn thành hoạt động sẽ được theo dõi thủ công hoặc tự động dựa trên một số điều kiện. Có thể đặt nhiều điều kiện nếu cần. Khi đó, hoạt động chỉ được xem là hoàn thành khi đáp ứng TẤT CẢ điều kiện.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Học viên phải tự đánh dấu hoạt động là đã hoàn thành';
$string['completion_none'] = 'Không có';
$string['completion_status'] = 'Trạng thái';
$string['completion-alt-auto-enabled'] = 'Hệ thống đánh dấu mục này là đã hoàn thành theo các điều kiện: {$a}';
$string['completion-alt-auto-fail'] = 'Đã hoàn thành: {$a} (chưa đạt điểm đạt yêu cầu)';
$string['completion-alt-auto-n'] = 'Chưa hoàn thành: {$a}';
$string['completion-alt-auto-n-override'] = 'Chưa hoàn thành: {$a->modname} (do {$a->overrideuser} đặt)';
$string['completion-alt-auto-pass'] = 'Đã hoàn thành: {$a} (đã đạt điểm đạt yêu cầu)';
$string['completion-alt-auto-y'] = 'Đã hoàn thành: {$a}';
$string['completion-alt-auto-y-override'] = 'Đã hoàn thành: {$a->modname} (do {$a->overrideuser} đặt)';
$string['completion-alt-manual-enabled'] = 'Học viên có thể tự đánh dấu mục này là đã hoàn thành: {$a}';
$string['completion-alt-manual-n'] = 'Chưa hoàn thành: {$a}. Chọn để đánh dấu là đã hoàn thành.';
$string['completion-alt-manual-n-override'] = 'Chưa hoàn thành: {$a->modname} (do {$a->overrideuser} đặt). Chọn để đánh dấu là đã hoàn thành.';
$string['completion-alt-manual-y'] = 'Đã hoàn thành: {$a}. Chọn để đánh dấu là chưa hoàn thành.';
$string['completion-alt-manual-y-override'] = 'Đã hoàn thành: {$a->modname} (do {$a->overrideuser} đặt). Chọn để đánh dấu là chưa hoàn thành.';
$string['completion-fail'] = 'Đã hoàn thành (chưa đạt điểm đạt yêu cầu)';
$string['completion-n'] = 'Chưa hoàn thành';
$string['completion-n-override'] = 'Chưa hoàn thành (do {$a} đặt)';
$string['completion-pass'] = 'Đã hoàn thành (đã đạt điểm đạt yêu cầu)';
$string['completion-y'] = 'Đã hoàn thành';
$string['completion-y-override'] = 'Đã hoàn thành (do {$a} đặt)';
$string['completionactivitydefault'] = 'Sử dụng mặc định của hoạt động';
$string['completionanygrade_desc'] = 'Bất kỳ điểm nào';
$string['completiondisabled'] = 'Đã tắt, không hiển thị trong phần cài đặt hoạt động';
$string['completionduration'] = 'Ghi danh';
$string['completionenabled'] = 'Đã bật, điều khiển thông qua cài đặt hoàn thành và hoạt động';
$string['completionexpected'] = 'Đặt lời nhắc trong Dòng thời gian';
$string['completionexpected_help'] = 'Tùy chọn này cho phép bạn đặt lời nhắc để học viên làm hoạt động này. Lời nhắc sẽ xuất hiện trong khối Dòng thời gian trên Bảng điều khiển của họ với nội dung "{$a} cần được thực hiện".';
$string['completionexpecteddesc'] = 'Dự kiến hoàn thành vào {$a}';
$string['completionexpectedfor'] = 'Cần hoàn thành {$a->instancename}';
$string['completionicons'] = 'Các hộp kiểm hoàn thành';
$string['completionicons_help'] = 'Dấu kiểm bên cạnh tên hoạt động có thể được dùng để cho biết khi nào hoạt động đã hoàn thành.

Nếu hiển thị một hộp có đường viền chấm, dấu kiểm sẽ tự động xuất hiện khi bạn hoàn thành hoạt động theo các điều kiện do giáo viên đặt ra.

Nếu hiển thị một hộp có đường viền liền, bạn có thể nhấp vào đó để đánh dấu khi cho rằng mình đã hoàn thành hoạt động. (Nhấp lại sẽ bỏ dấu kiểm nếu bạn đổi ý.)';
$string['completionmenuitem'] = 'Mục Hoàn thành';
$string['completionnotenabled'] = 'Chưa bật tính năng hoàn thành';
$string['completionnotenabledforcourse'] = 'Chưa bật tính năng hoàn thành cho khóa học này';
$string['completionnotenabledforsite'] = 'Chưa bật tính năng hoàn thành cho trang này';
$string['completionondate'] = 'Ngày';
$string['completionondatevalue'] = 'Ngày khóa học sẽ được đánh dấu là đã hoàn thành';
$string['completionpassgrade'] = 'Yêu cầu đạt điểm đạt yêu cầu';
$string['completionpassgrade_desc'] = 'Điểm đạt yêu cầu';
$string['completionrequirements'] = 'Yêu cầu hoàn thành:';
$string['completionsettingslocked'] = 'Đã khóa cài đặt hoàn thành';
$string['completionupdated'] = 'Đã cập nhật trạng thái hoàn thành cho hoạt động <b>{$a}</b>';
$string['completionusegrade'] = 'Yêu cầu có điểm';
$string['completionusegrade_desc'] = 'Nhận điểm';
$string['completionview_desc'] = 'Xem hoạt động';
$string['configenablecompletion'] = 'Nếu được bật, có thể đặt các điều kiện hoàn thành khóa học và hoạt động. Bạn nên đặt điều kiện hoàn thành hoạt động để hiển thị dữ liệu có ý nghĩa cho người dùng trong phần tổng quan khóa học trên Bảng điều khiển.';
$string['confirmselfcompletion'] = 'Xác nhận tự hoàn thành';
$string['courseaggregation'] = 'Điều kiện yêu cầu';
$string['courseaggregation_all'] = 'Hoàn thành TẤT CẢ khóa học đã chọn';
$string['courseaggregation_any'] = 'Hoàn thành BẤT KỲ khóa học nào đã chọn';
$string['coursealreadycompleted'] = 'Bạn đã hoàn thành khóa học này rồi';
$string['coursecomplete'] = 'Khóa học đã hoàn thành';
$string['coursecompleted'] = 'Đã hoàn thành khóa học';
$string['coursecompletedmessage'] = '<p>Xin chúc mừng!</p><p>Bạn đã hoàn thành khóa học <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Hoàn thành khóa học';
$string['coursecompletioncondition'] = 'Điều kiện: {$a}';
$string['coursecompletionnavigation'] = 'Điều hướng cấp ba về hoàn thành khóa học';
$string['coursecompletionsettings'] = 'Cài đặt hoàn thành khóa học';
$string['coursegrade'] = 'Điểm khóa học';
$string['coursesavailable'] = 'Các khóa học hiện có';
$string['coursesavailableexplaination'] = 'Lưu ý: Cần đặt điều kiện hoàn thành khóa học để khóa học xuất hiện trong danh sách trên.';
$string['criteria'] = 'Tiêu chí';
$string['criteriagroup'] = 'Nhóm tiêu chí';
$string['criteriarequiredall'] = 'Cần đáp ứng tất cả tiêu chí bên dưới';
$string['criteriarequiredany'] = 'Cần đáp ứng bất kỳ tiêu chí nào bên dưới';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'Tải xuống ở định dạng bảng tính (UTF-8 .csv)';
$string['datepassed'] = 'Ngày đạt';
$string['days'] = 'Ngày';
$string['daysoftotal'] = '{$a->days} trên tổng số {$a->total}';
$string['daystakingcourse'] = 'Thời gian tham gia khóa học';
$string['daysuntilcompletion'] = 'Thời gian đến khi hoàn thành';
$string['defaultactivitycompletioncourse'] = 'Đây là các điều kiện hoàn thành mặc định cho hoạt động trong khóa học này.';
$string['defaultactivitycompletionsite'] = 'Đây là các điều kiện hoàn thành mặc định cho hoạt động trong tất cả khóa học.';
$string['defaultcompletion'] = 'Hoàn thành hoạt động mặc định';
$string['defaultcompletionupdated'] = 'Đã lưu thay đổi';
$string['deletecompletiondata'] = 'Dữ liệu hoàn thành';
$string['dependencies'] = 'Điều kiện phụ thuộc';
$string['dependenciescompleted'] = 'Hoàn thành các khóa học khác';
$string['detail_desc:receivegrade'] = 'Nhận điểm';
$string['detail_desc:receivepassgrade'] = 'Nhận điểm đạt yêu cầu';
$string['detail_desc:view'] = 'Xem';
$string['done'] = 'Hoàn tất';
$string['editconditions'] = 'Chỉnh sửa điều kiện';
$string['emptyconditionsinfo'] = 'Chưa đặt điều kiện hoàn thành nào cho hoạt động này.';
$string['emptyconditionswarning'] = 'Bạn phải thêm ít nhất một điều kiện hoàn thành.';
$string['enablecompletion'] = 'Bật theo dõi hoàn thành';
$string['enablecompletion_help'] = 'Nếu được bật, bạn có thể đặt điều kiện hoàn thành hoạt động hoặc khóa học.';
$string['enrolmentduration'] = 'Thời hạn ghi danh';
$string['enrolmentdurationlength'] = 'Người dùng phải duy trì ghi danh trong';
$string['err_noactivities'] = 'Chưa bật thông tin hoàn thành cho hoạt động nào nên không thể hiển thị thông tin. Bạn có thể bật thông tin hoàn thành bằng cách chỉnh sửa thiết lập của một hoạt động.';
$string['err_nocourses'] = 'Chưa bật tính năng hoàn thành khóa học cho khóa học nào khác nên không thể hiển thị thông tin. Bạn có thể bật tính năng hoàn thành khóa học trong phần thiết lập khóa học.';
$string['err_nograde'] = 'Chưa đặt điểm đạt khóa học cho khóa học này. Để bật loại tiêu chí này, bạn phải tạo điểm đạt cho khóa học.';
$string['err_noroles'] = 'Không có vai trò nào trong khóa học này có quyền năng lực moodle/course:markcomplete.';
$string['err_nousers'] = 'Không có học viên nào trong khóa học hoặc nhóm này để hiển thị thông tin hoàn thành. (Thông tin hoàn thành chỉ hiển thị với người dùng có quyền năng lực \'Được hiển thị trong báo cáo hoàn thành\'. Quyền năng lực này chỉ được cấp cho vai trò học viên mặc định; vì vậy, nếu không có học viên, bạn sẽ thấy thông báo này.)';
$string['err_settingslocked'] = 'Một hoặc nhiều học viên đã hoàn thành một tiêu chí nên các thiết lập đã bị khóa. Mở khóa thiết lập sẽ xóa dữ liệu hoàn thành của người dùng và có thể gây nhầm lẫn.';
$string['err_system'] = 'Đã xảy ra lỗi nội bộ trong hệ thống hoàn thành. (Quản trị viên hệ thống có thể bật thông tin gỡ lỗi để xem thêm chi tiết.)';
$string['eventcoursecompleted'] = 'Đã hoàn thành khóa học';
$string['eventcoursecompletionupdated'] = 'Đã cập nhật trạng thái hoàn thành khóa học';
$string['eventcoursemodulecompletionupdated'] = 'Đã cập nhật trạng thái hoàn thành hoạt động trong khóa học';
$string['eventdefaultcompletionupdated'] = 'Đã cập nhật thiết lập mặc định cho việc hoàn thành hoạt động trong khóa học';
$string['excelcsvdownload'] = 'Tải xuống ở định dạng tương thích với Excel (.csv)';
$string['failed'] = 'Không đạt';
$string['fraction'] = 'Phân số';
$string['graderequired'] = 'Điểm khóa học bắt buộc';
$string['gradexrequired'] = 'Yêu cầu {$a}';
$string['hiddenrules'] = 'Một số thiết lập dành riêng cho <b>{$a}</b> đã bị ẩn. Để xem, hãy bỏ chọn các hoạt động khác';
$string['incompatibleplugin'] = 'Hoạt động này không hỗ trợ thiết lập hoàn thành mặc định. Phải đặt điều kiện hoàn thành theo cách thủ công cho mỗi lần sử dụng.';
$string['inprogress'] = 'Đang thực hiện';
$string['manual'] = 'Thủ công';
$string['manualcompletionby'] = 'Người khác đánh dấu hoàn thành thủ công';
$string['manualcompletionbynote'] = 'Lưu ý: Vai trò phải được cấp quyền năng lực moodle/course:markcomplete thì mới xuất hiện trong danh sách.';
$string['manualselfcompletion'] = 'Tự đánh dấu hoàn thành thủ công';
$string['manualselfcompletionnote'] = 'Lưu ý: Phải thêm khối tự hoàn thành vào khóa học nếu bật tính năng tự đánh dấu hoàn thành thủ công.';
$string['markcomplete'] = 'Đánh dấu hoàn thành';
$string['markedcompleteby'] = 'Được {$a} đánh dấu hoàn thành';
$string['markingyourselfcomplete'] = 'Tự đánh dấu hoàn thành';
$string['modifybulkactions'] = 'Sửa đổi các thao tác bạn muốn chỉnh sửa hàng loạt';
$string['moredetails'] = 'Thêm chi tiết';
$string['nocriteriaset'] = 'Chưa đặt tiêu chí hoàn thành nào cho khóa học này';
$string['nogradeitem'] = 'Không thể bật yêu cầu điểm cho <b>{$a}</b> vì hoạt động này không được chấm điểm.';
$string['notcompleted'] = 'Chưa hoàn thành';
$string['notenroled'] = 'Bạn chưa ghi danh vào khóa học này';
$string['nottracked'] = 'Hiện bạn không được theo dõi trạng thái hoàn thành trong khóa học này';
$string['notyetstarted'] = 'Chưa bắt đầu';
$string['overallaggregation'] = 'Yêu cầu hoàn thành';
$string['overallaggregation_all'] = 'Khóa học được xem là hoàn thành khi đáp ứng TẤT CẢ điều kiện';
$string['overallaggregation_any'] = 'Khóa học được xem là hoàn thành khi đáp ứng BẤT KỲ điều kiện nào';
$string['pending'] = 'Đang chờ';
$string['periodpostenrolment'] = 'Khoảng thời gian sau khi ghi danh';
$string['privacy:metadata:completionstate'] = 'Hoạt động đã được hoàn thành hay chưa';
$string['privacy:metadata:course'] = 'Mã định danh khóa học';
$string['privacy:metadata:coursecompletedsummary'] = 'Lưu thông tin về người dùng đã đáp ứng các tiêu chí trong khóa học';
$string['privacy:metadata:coursemoduleid'] = 'ID hoạt động';
$string['privacy:metadata:coursemodulesummary'] = 'Lưu dữ liệu hoàn thành hoạt động của người dùng';
$string['privacy:metadata:coursesummary'] = 'Lưu dữ liệu hoàn thành khóa học của người dùng.';
$string['privacy:metadata:gradefinal'] = 'Điểm cuối cùng nhận được để hoàn thành khóa học';
$string['privacy:metadata:overrideby'] = 'ID người dùng của người đã ghi đè trạng thái hoàn thành hoạt động';
$string['privacy:metadata:reaggregate'] = 'Trạng thái hoàn thành khóa học có được tính toán lại hay không.';
$string['privacy:metadata:timecompleted'] = 'Thời điểm khóa học được hoàn thành.';
$string['privacy:metadata:timecreated'] = 'Thời điểm dữ liệu hoàn thành hoạt động được tạo';
$string['privacy:metadata:timeenrolled'] = 'Thời điểm người dùng được ghi danh vào khóa học';
$string['privacy:metadata:timemodified'] = 'Thời điểm trạng thái hoàn thành hoạt động được sửa đổi';
$string['privacy:metadata:timestarted'] = 'Thời điểm khóa học bắt đầu.';
$string['privacy:metadata:unenroled'] = 'Người dùng đã bị hủy ghi danh khỏi khóa học hay chưa';
$string['privacy:metadata:userid'] = 'ID người dùng có dữ liệu hoàn thành khóa học và hoạt động';
$string['privacy:metadata:viewed'] = 'Hoạt động đã được xem hay chưa';
$string['progress'] = 'Tiến độ học viên';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Tiến độ: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Công nhận kết quả học tập trước đây';
$string['remainingenroledfortime'] = 'Duy trì ghi danh trong một khoảng thời gian xác định';
$string['remainingenroleduntildate'] = 'Duy trì ghi danh đến một ngày xác định';
$string['reportpage'] = 'Đang hiển thị người dùng từ {$a->from} đến {$a->to} trên tổng số {$a->total}.';
$string['requiredcriteria'] = 'Tiêu chí bắt buộc';
$string['resetactivities'] = 'Bỏ chọn tất cả hoạt động và tài nguyên đã chọn';
$string['restoringcompletiondata'] = 'Đang ghi dữ liệu hoàn thành';
$string['roleaggregation'] = 'Điều kiện yêu cầu';
$string['roleaggregation_all'] = 'TẤT CẢ vai trò được chọn đánh dấu khi đáp ứng điều kiện';
$string['roleaggregation_any'] = 'BẤT KỲ vai trò nào được chọn đánh dấu khi đáp ứng điều kiện';
$string['roleidnotfound'] = 'Không tìm thấy ID vai trò {$a}';
$string['saved'] = 'Đã lưu';
$string['seedetails'] = 'Xem chi tiết';
$string['select'] = 'Chọn';
$string['self'] = 'Bản thân';
$string['selfcompletion'] = 'Tự hoàn thành';
$string['showcompletionconditions'] = 'Hiển thị điều kiện hoàn thành hoạt động';
$string['showcompletionconditions_help'] = 'Hiển thị điều kiện hoàn thành hoạt động trên trang khóa học.';
$string['showinguser'] = 'Đang hiển thị người dùng';
$string['studentsmust'] = 'Học viên phải';
$string['timecompleted'] = 'Thời điểm hoàn thành';
$string['todo'] = 'Việc cần làm';
$string['unenrolingfromcourse'] = 'Đang hủy ghi danh khỏi khóa học';
$string['unenrolment'] = 'Hủy ghi danh';
$string['unit'] = 'Đơn vị';
$string['unlockcompletion'] = 'Mở khóa thiết lập hoàn thành';
$string['unlockcompletiondelete'] = 'Mở khóa thiết lập hoàn thành và xóa dữ liệu hoàn thành của người dùng';
$string['updateactivities'] = 'Cập nhật trạng thái hoàn thành của các hoạt động đã chọn';
$string['usealternateselector'] = 'Sử dụng bộ chọn khóa học thay thế';
$string['usernotenroled'] = 'Người dùng chưa ghi danh vào khóa học này';
$string['viewcoursereport'] = 'Xem báo cáo khóa học';
$string['viewingactivity'] = 'Đang xem {$a}';
$string['withconditions'] = 'Có điều kiện';
$string['writingcompletiondata'] = 'Đang ghi dữ liệu hoàn thành';
$string['xdays'] = '{$a} ngày';
$string['youmust'] = 'Bạn phải';

// Added for Moodle 5.3.1+ missing strings.
$string['completion-pass-override'] = 'Đã hoàn thành (đạt điểm đạt, do {$a} thiết lập)';
