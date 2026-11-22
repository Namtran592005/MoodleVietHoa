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
 * @subpackage assign
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityattachments'] = 'Tệp đính kèm của hoạt động bài tập';
$string['activitydate:submissionsdue'] = 'Hạn nộp:';
$string['activitydate:submissionsopen'] = 'Mở nhận bài nộp:';
$string['activitydate:submissionsopened'] = 'Đã mở:';
$string['activityeditor'] = 'Hướng dẫn hoạt động';
$string['activityeditor_help'] = 'Những việc bạn muốn học viên thực hiện cho bài tập này. Nội dung này chỉ hiển thị trên trang nộp bài, nơi học viên chỉnh sửa và nộp bài tập.';
$string['activityoverview'] = 'Bạn có bài tập cần xử lý';
$string['addattempt'] = 'Cho phép làm thêm một lần';
$string['addnewattempt'] = 'Thêm lần làm bài mới';
$string['addnewattempt_help'] = 'Thao tác này sẽ tạo một bài nộp trống mới để bạn thực hiện.';
$string['addnewattemptfromprevious'] = 'Thêm lần làm bài mới dựa trên bài nộp trước';
$string['addnewattemptfromprevious_help'] = 'Thao tác này sẽ sao chép nội dung bài nộp trước của bạn sang một bài nộp mới để bạn tiếp tục thực hiện.';
$string['addnewgroupoverride'] = 'Thêm ngoại lệ cho nhóm';
$string['addnewuseroverride'] = 'Thêm ngoại lệ cho người dùng';
$string['addsubmission'] = 'Thêm bài nộp';
$string['addsubmission_help'] = 'Bạn chưa nộp bài.';
$string['allocatedmarker'] = 'Người chấm được phân công';
$string['allocatedmarker_help'] = 'Người chấm được phân công cho bài nộp này.';
$string['allowsubmissions'] = 'Cho phép người dùng tiếp tục nộp bài cho bài tập này.';
$string['allowsubmissionsfromdate'] = 'Cho phép nộp bài từ';
$string['allowsubmissionsfromdate_help'] = 'Nếu được bật, học viên sẽ không thể nộp bài trước ngày này. Nếu bị tắt, học viên có thể bắt đầu nộp bài ngay.';
$string['allowsubmissionsshort'] = 'Cho phép thay đổi bài nộp';
$string['alwaysshowdescription'] = 'Luôn hiển thị mô tả';
$string['alwaysshowdescription_help'] = 'Nếu bị tắt, mô tả bài tập ở trên chỉ hiển thị với học viên kể từ ngày "Cho phép nộp bài từ".';
$string['applytoteam'] = 'Áp dụng điểm và phản hồi cho toàn bộ nhóm';
$string['assign:addinstance'] = 'Thêm bài tập mới';
$string['assign:editothersubmission'] = 'Chỉnh sửa bài nộp của học viên khác';
$string['assign:exportownsubmission'] = 'Xuất bài nộp của chính mình';
$string['assign:grade'] = 'Chấm điểm bài tập';
$string['assign:grantextension'] = 'Cấp gia hạn';
$string['assign:manageallocations'] = 'Quản lý người chấm được phân công cho bài nộp';
$string['assign:managegrades'] = 'Xem xét và công bố điểm';
$string['assign:managemarkedallocations'] = 'Quản lý người chấm được phân công cho bài nộp sau khi họ đã chấm';
$string['assign:manageoptionalallocations'] = 'Quản lý người chấm tùy chọn được phân công cho bài nộp';
$string['assign:manageoverrides'] = 'Quản lý ngoại lệ của bài tập';
$string['assign:managerestrictedgrades'] = 'Quản lý điểm bị giới hạn bởi các yêu cầu chấm nhiều lần';
$string['assign:receivegradernotifications'] = 'Nhận thông báo về bài nộp dành cho người chấm';
$string['assign:releasegrades'] = 'Công bố điểm';
$string['assign:revealidentities'] = 'Tiết lộ danh tính học viên';
$string['assign:reviewgrades'] = 'Xem xét điểm';
$string['assign:showhiddengrader'] = 'Xem danh tính của người chấm bị ẩn';
$string['assign:submit'] = 'Nộp bài tập';
$string['assign:view'] = 'Xem bài tập';
$string['assign:viewblinddetails'] = 'Xem danh tính học viên khi bật chế độ nộp bài ẩn danh';
$string['assign:viewgrades'] = 'Xem điểm';
$string['assign:viewownsubmissionsummary'] = 'Xem tóm tắt bài nộp của chính mình';
$string['assignfeedback'] = 'Plugin phản hồi';
$string['assignfeedbackpluginname'] = 'Plugin phản hồi';
$string['assignmentduedigesthtml'] = '<p>Xin chào {$a->firstname},</p>
<p>Các bài tập sau sẽ đến hạn vào <strong>{$a->duedate}</strong>.</p>
{$a->digest}';
$string['assignmentduedigestitem'] = '<strong>{$a->assignmentname}</strong> trong khóa học {$a->coursename}<br/>
<strong>Hạn nộp: {$a->duetime}</strong><br/>
<a href="{$a->url}" aria-label="Đi tới {$a->assignmentname}">Đi tới hoạt động</a>';
$string['assignmentduedigestsms'] = 'Một hoặc nhiều bài tập sẽ đến hạn trong 7 ngày nữa. Đăng nhập để xem các bài tập sắp đến hạn.';
$string['assignmentduedigestsubject'] = 'Bạn có bài tập đến hạn trong 7 ngày nữa';
$string['assignmentduesoonhtml'] = '<p>Xin chào {$a->firstname},</p>
<p>Bài tập <strong>{$a->assignmentname}</strong> trong khóa học {$a->coursename} sắp đến hạn.</p>
<p><strong>Hạn nộp: {$a->duedate}</strong></p>
<p><a href="{$a->url}">Đi tới hoạt động</a></p>';
$string['assignmentduesoonofflinehtml'] = '<p>Xin chào {$a->firstname},</p>
<p>Bài tập <strong>{$a->assignmentname}</strong> trong khóa học {$a->coursename} sắp đến hạn.</p>
<p>Nếu bạn đã nộp bài, bạn không cần thực hiện thêm thao tác nào.</p>
<p><strong>Hạn nộp: {$a->duedate}</strong></p>
<p><a href="{$a->url}">Đi tới hoạt động</a></p>';
$string['assignmentduesoonsms'] = 'Bài tập {$a->assignmentname} của bạn đến hạn vào {$a->duedate}: {$a->shortlink}';
$string['assignmentduesoonsubject'] = 'Đến hạn vào {$a->duedate}: {$a->assignmentname}';
$string['assignmentisdue'] = 'Bài tập đến hạn';
$string['assignmentmail'] = '{$a->grader} đã gửi phản hồi về bài nộp
bài tập \'{$a->assignment}\' của bạn

Bạn có thể xem phản hồi được đính kèm vào bài nộp:

    {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} đã gửi phản hồi về bài nộp bài tập \'{$a->assignment}\' của bạn.</p>
<p>Bạn có thể xem phản hồi được đính kèm vào <a href="{$a->url}">bài nộp bài tập</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} đã gửi phản hồi về bài nộp
bài tập \'{$a->assignment}\' của bạn. Bạn có thể xem phản hồi được đính kèm vào bài nộp.';
$string['assignmentname'] = 'Tên bài tập';
$string['assignmentoverduehtml'] = '<p>Xin chào {$a->firstname},</p>
<p><strong>{$a->assignmentname}</strong> trong khóa học {$a->coursename} đã đến hạn vào <strong>{$a->duedate}</strong>.</p>
<p>Bạn vẫn có thể nộp bài tập, nhưng bài nộp sẽ được đánh dấu là nộp muộn.</p>
<p><a href="{$a->url}">Đi tới hoạt động</a></p>';
$string['assignmentoverduehtmlcutoffsnippet'] = '<strong>trước {$a->cutoffdate}</strong>';
$string['assignmentoverduesms'] = 'Bài tập {$a->assignmentname} của bạn đã quá hạn kể từ {$a->duedate}: {$a->shortlink}';
$string['assignmentoverduesubject'] = 'Quá hạn: {$a->assignmentname}';
$string['assignmentplugins'] = 'Các plugin bài tập';
$string['assignmentsperpage'] = 'Số bài tập trên mỗi trang';
$string['assignsubmission'] = 'Plugin nộp bài';
$string['assignsubmissionpluginname'] = 'Plugin nộp bài';
$string['assigntimeleft'] = 'Thời gian còn lại';
$string['attemptheading'] = 'Lần làm bài {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Các lần làm bài trước';
$string['attemptnumber'] = 'Số lần làm bài';
$string['attemptreopenmethod'] = 'Cấp lần làm bài';
$string['attemptreopenmethod_automatic'] = 'Tự động';
$string['attemptreopenmethod_automatic_help'] = 'Sau mỗi lần làm bài, lần tiếp theo sẽ tự động được cấp sau khi chấm điểm.';
$string['attemptreopenmethod_help'] = 'Cài đặt này kiểm soát cách cấp lần làm bài cho học viên đối với bài tập này. Với mỗi lần làm bài, điểm và phản hồi sẽ được lưu để giáo viên và học viên xem. Các tùy chọn gồm:

* Thủ công - Sau mỗi lần làm bài, bạn có thể cấp lần tiếp theo qua trang Bài nộp hoặc trang Chấm bài.
* Tự động - Sau mỗi lần làm bài, lần tiếp theo sẽ tự động được cấp sau khi chấm điểm.
* Tự động đến khi đạt - Sau mỗi lần làm bài, lần tiếp theo sẽ tự động được cấp sau khi chấm điểm, cho đến khi học viên đạt điểm đậu.';
$string['attemptreopenmethod_manual'] = 'Thủ công';
$string['attemptreopenmethod_manual_help'] = 'Sau mỗi lần làm bài, bạn có thể cấp lần tiếp theo qua trang Bài nộp hoặc trang Chấm bài.';
$string['attemptreopenmethod_none'] = 'Không bao giờ';
$string['attemptreopenmethod_untilpass'] = 'Tự động đến khi đạt';
$string['attemptreopenmethod_untilpass_help'] = 'Sau mỗi lần làm bài, lần tiếp theo sẽ tự động được cấp sau khi chấm điểm, cho đến khi học viên đạt điểm đậu.';
$string['attemptsettings'] = 'Cài đặt lần làm bài';
$string['availability'] = 'Tính khả dụng';
$string['back'] = 'Quay lại';
$string['backtoassignment'] = 'Quay lại bài tập';
$string['batchoperationaddattempt'] = 'Cấp lần làm bài';
$string['batchoperationconfirmaddattempt'] = 'Cho phép làm thêm một lần đối với các bài nộp đã chọn?';
$string['batchoperationconfirmdownloadselected'] = 'Tải các bài nộp đã chọn xuống?';
$string['batchoperationconfirmgrantextension'] = 'Cấp gia hạn cho tất cả bài nộp đã chọn?';
$string['batchoperationconfirmlock'] = 'Khóa tất cả bài nộp đã chọn?';
$string['batchoperationconfirmremovesubmission'] = 'Xóa các bài nộp đã chọn?';
$string['batchoperationconfirmreverttodraft'] = 'Chuyển các bài nộp đã chọn về bản nháp?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Đặt phân công chấm bài cho tất cả bài nộp đã chọn?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Đặt trạng thái quy trình chấm điểm cho tất cả bài nộp đã chọn?';
$string['batchoperationconfirmunlock'] = 'Mở khóa tất cả bài nộp đã chọn?';
$string['batchoperationdownloadselected'] = 'Tải xuống';
$string['batchoperationgrantextension'] = 'Gia hạn';
$string['batchoperationlock'] = 'Khóa';
$string['batchoperationremovesubmission'] = 'Xóa';
$string['batchoperationreverttodraft'] = 'Chuyển về bản nháp';
$string['batchoperationsdescription'] = 'Với mục đã chọn...';
$string['batchoperationsetmarkingallocation'] = 'Phân công người chấm';
$string['batchoperationsetmarkingworkflowstate'] = 'Thay đổi trạng thái chấm bài';
$string['batchoperationunlock'] = 'Mở khóa';
$string['batchsetallocatedmarker'] = 'Đặt người chấm được phân công cho {$a} người dùng đã chọn.';
$string['batchsetmarkingworkflowstateforusers'] = 'Đặt trạng thái quy trình chấm điểm cho {$a} người dùng đã chọn.';
$string['beginassignment'] = 'Bắt đầu làm bài tập';
$string['blindmarking'] = 'Bài nộp ẩn danh';
$string['blindmarking_help'] = 'Bài nộp ẩn danh ẩn danh tính học viên đối với người chấm. Không thể thay đổi cài đặt nộp bài ẩn danh sau khi có bài nộp hoặc điểm liên quan đến bài tập này.';
$string['blindmarkingenabledwarning'] = 'Hoạt động này đã bật chế độ nộp bài ẩn danh.';
$string['blindmarkingnogradewarning'] = 'Hoạt động này đã bật chế độ nộp bài ẩn danh. Điểm sẽ không được thêm vào sổ điểm cho đến khi danh tính học viên được tiết lộ qua menu "Thao tác".';
$string['bulkactionsselection'] = 'Chọn thao tác hàng loạt';
$string['cachedef_overrides'] = 'Thông tin ngoại lệ của người dùng và nhóm';
$string['calendardue'] = '{$a} đến hạn';
$string['calendarextension'] = '{$a} đến hạn (đã gia hạn)';
$string['calendargradingdue'] = '{$a} cần được chấm điểm';
$string['caneditsubmission'] = 'Bạn có thể chỉnh sửa bài nộp và nộp bài sau khi hết thời hạn, nhưng bài nộp sẽ được đánh dấu là nộp muộn.';
$string['changeallocatedmarkersaftergrade'] = 'Một số người dùng đã chọn có điểm đã thống nhất; các điểm này có thể được cập nhật nếu thay đổi người chấm được phân công.';
$string['changefilters'] = 'Thay đổi bộ lọc';
$string['changeuser'] = 'Đổi người dùng';
$string['choosegradingaction'] = 'Thao tác chấm điểm';
$string['choosemarker'] = 'Chọn...';
$string['chooseoperation'] = 'Chọn thao tác';
$string['clickexpandreviewpanel'] = 'Nhấp để mở rộng bảng xem xét';
$string['collapsegradepanel'] = 'Thu gọn bảng điểm';
$string['collapsereviewpanel'] = 'Thu gọn bảng xem xét';
$string['comment'] = 'Nhận xét';
$string['completiondetail:submit'] = 'Nộp bài';
$string['completionsubmit'] = 'Nộp bài';
$string['configshowrecentsubmissions'] = 'Mọi người có thể xem thông báo về các bài nộp trong báo cáo hoạt động gần đây.';
$string['confirmbatchgradingoperation'] = 'Bạn có chắc chắn muốn {$a->operation} cho {$a->count} học viên không?';
$string['confirmstart'] = 'Bạn có {$a} để hoàn thành bài tập này. Khi bắt đầu, đồng hồ sẽ đếm ngược và không thể tạm dừng.';
$string['confirmsubmission'] = 'Bạn có chắc chắn muốn nộp bài để chấm điểm không? Bạn sẽ không thể thực hiện thêm thay đổi nào.';
$string['confirmsubmissionheading'] = 'Xác nhận nộp bài';
$string['conversionexception'] = 'Không thể chuyển đổi bài tập. Ngoại lệ: {$a}.';
$string['couldnotconvertgrade'] = 'Không thể chuyển đổi điểm bài tập cho người dùng {$a}.';
$string['couldnotconvertsubmission'] = 'Không thể chuyển đổi bài nộp của bài tập cho người dùng {$a}.';
$string['couldnotcreatecoursemodule'] = 'Không thể tạo mô-đun khóa học.';
$string['couldnotcreatenewassignmentinstance'] = 'Không thể tạo phiên bản bài tập mới.';
$string['couldnotfindassignmenttoupgrade'] = 'Không tìm thấy phiên bản bài tập cũ để nâng cấp.';
$string['crontask'] = 'Xử lý nền cho mô-đun bài tập';
$string['currentassigngrade'] = 'Điểm hiện tại trong bài tập';
$string['currentattempt'] = 'Đây là lần làm bài {$a}.';
$string['currentattemptof'] = 'Đây là lần làm bài {$a->attemptnumber} (được phép làm {$a->maxattempts} lần).';
$string['currentgrade'] = 'Điểm hiện tại trong sổ điểm';
$string['cutoffdate'] = 'Ngày hết hạn';
$string['cutoffdate_help'] = 'Nếu được đặt, bài nộp sẽ không được chấp nhận sau ngày này nếu không có gia hạn. Nếu không được đặt, bài nộp luôn được chấp nhận.';
$string['cutoffdatecolon'] = 'Ngày hết hạn: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Ngày hết hạn không thể sớm hơn ngày bắt đầu cho phép nộp bài.';
$string['cutoffdatevalidation'] = 'Ngày hết hạn không thể sớm hơn hạn nộp.';
$string['defaultgradescale'] = 'Thang điểm';
$string['defaultgradescale_help'] = 'Thang điểm mặc định cho các bài tập mới. Chỉ có các thang điểm tiêu chuẩn được dùng.';
$string['defaultgradetype'] = 'Kiểu điểm';
$string['defaultgradetype_help'] = 'Kiểu điểm mặc định cho các bài tập mới.';
$string['defaultlayout'] = 'Khôi phục bố cục mặc định';
$string['defaultsettings'] = 'Thiết lập bài tập mặc định';
$string['defaultsettings_help'] = 'Các thiết lập này xác định giá trị mặc định cho tất cả bài tập mới.';
$string['defaultteam'] = 'Nhóm mặc định';
$string['deleteallsubmissions'] = 'Tất cả bài nộp';
$string['description'] = 'Mô tả';
$string['disabled'] = 'Đã tắt';
$string['downloadall'] = 'Tải xuống tất cả bài nộp';
$string['downloadasfolders'] = 'Tải bài nộp xuống theo thư mục';
$string['downloadasfolders_help'] = 'Có thể tải bài nộp của bài tập xuống theo các thư mục. Mỗi bài nộp sẽ được đặt trong một thư mục riêng, cấu trúc thư mục được giữ nguyên đối với mọi thư mục con và tên tệp không bị thay đổi.';
$string['downloadselectedsubmissions'] = 'Tải xuống các bài nộp đã chọn';
$string['duedate'] = 'Hạn nộp';
$string['duedate_help'] = 'Đây là thời điểm đến hạn nộp bài tập. Vẫn có thể nộp sau ngày này, nhưng bài nộp muộn sẽ được đánh dấu là nộp trễ. Đặt ngày hết hạn để ngăn việc nộp bài sau một ngày nhất định.';
$string['duedateaftersubmissionvalidation'] = 'Hạn nộp phải sau ngày bắt đầu cho phép nộp bài.';
$string['duedatecolon'] = 'Hạn nộp: {$a}';
$string['duedatereached'] = 'Đã qua hạn nộp bài tập này';
$string['duedatevalidation'] = 'Hạn nộp không thể sớm hơn ngày bắt đầu cho phép nộp bài.';
$string['duplicateoverride'] = 'Tạo bản ghi đè trùng lặp';
$string['editaction'] = 'Thao tác...';
$string['editattemptfeedback'] = 'Chỉnh sửa điểm và phản hồi cho lần làm bài số {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Bạn đang chỉnh sửa phản hồi cho một lần làm bài trước đó. Đây là lần làm bài thứ {$a->attemptnumber} trên tổng số {$a->totalattempts} lần.';
$string['editingstatus'] = 'Trạng thái chỉnh sửa';
$string['editonline'] = 'Chỉnh sửa trực tuyến';
$string['editoverride'] = 'Chỉnh sửa bản ghi đè';
$string['editsubmission'] = 'Chỉnh sửa bài nộp';
$string['editsubmission_help'] = 'Bạn vẫn có thể thay đổi bài nộp của mình.';
$string['editsubmissionother'] = 'Chỉnh sửa bài nộp của {$a}';
$string['enabled'] = 'Đã bật';
$string['enableoptionalmarker'] = 'Bật người chấm tùy chọn';
$string['enableoptionalmarkeraftergraded'] = 'Bật người chấm tùy chọn mới sẽ xóa điểm hiện tại.';
$string['enabletimelimit'] = 'Bật giới hạn thời gian cho bài tập';
$string['enabletimelimit_help'] = 'Nếu được bật, bạn có thể đặt giới hạn thời gian trên trang thiết lập bài tập.';
$string['errorgradechangessaveddetail'] = 'Các thay đổi về điểm và phản hồi chưa được lưu.';
$string['errornosubmissions'] = 'Không có bài nộp nào để tải xuống';
$string['errorquickgradingvsadvancedgrading'] = 'Không lưu được điểm vì bài tập này hiện đang sử dụng chế độ chấm điểm nâng cao';
$string['errorrecordmodified'] = 'Không lưu được điểm vì có người đã sửa đổi một hoặc nhiều bản ghi sau thời điểm bạn tải trang.';
$string['eventagreedgradecalculated'] = 'Đã tính điểm thống nhất';
$string['eventallsubmissionsdownloaded'] = 'Đang tải xuống tất cả bài nộp.';
$string['eventassessablesubmitted'] = 'Đã nộp bài.';
$string['eventbatchsetmarkerallocationviewed'] = 'Đã xem thiết lập phân công người chấm theo lô';
$string['eventbatchsetworkflowstateviewed'] = 'Đã xem thiết lập trạng thái quy trình theo lô.';
$string['eventextensiongranted'] = 'Đã cấp gia hạn.';
$string['eventfeedbackupdated'] = 'Đã cập nhật phản hồi';
$string['eventfeedbackviewed'] = 'Đã xem phản hồi';
$string['eventgradingformviewed'] = 'Đã xem biểu mẫu chấm điểm';
$string['eventgradingtableviewed'] = 'Đã xem bảng chấm điểm';
$string['eventidentitiesrevealed'] = 'Danh tính đã được tiết lộ.';
$string['eventmarkeradded'] = 'Đã phân công người chấm';
$string['eventmarkerenabledupdated'] = 'Đã cập nhật trạng thái bật người chấm';
$string['eventmarkerremoved'] = 'Đã hủy phân công người chấm';
$string['eventmarkerupdated'] = 'Đã cập nhật người chấm được phân công.';
$string['eventoverridecreated'] = 'Đã tạo bản ghi đè bài tập';
$string['eventoverridedeleted'] = 'Đã xóa bản ghi đè bài tập';
$string['eventoverrideupdated'] = 'Đã cập nhật bản ghi đè bài tập';
$string['eventremovesubmissionformviewed'] = 'Đã xem xác nhận xóa bài nộp.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Đã xem trang xác nhận tiết lộ danh tính.';
$string['eventstatementaccepted'] = 'Người dùng đã chấp nhận tuyên bố về bài nộp.';
$string['eventsubmissionconfirmationformviewed'] = 'Đã xem biểu mẫu xác nhận nộp bài.';
$string['eventsubmissioncreated'] = 'Đã tạo bài nộp.';
$string['eventsubmissionduplicated'] = 'Người dùng đã tạo bản sao bài nộp của mình.';
$string['eventsubmissionformviewed'] = 'Đã xem biểu mẫu nộp bài.';
$string['eventsubmissiongraded'] = 'Bài nộp đã được chấm điểm.';
$string['eventsubmissionlocked'] = 'Bài nộp của người dùng đã bị khóa.';
$string['eventsubmissionmarked'] = 'Bài nộp đã được chấm.';
$string['eventsubmissionremoved'] = 'Đã xóa bài nộp.';
$string['eventsubmissionstatusupdated'] = 'Đã cập nhật trạng thái bài nộp.';
$string['eventsubmissionstatusviewed'] = 'Đã xem trạng thái bài nộp.';
$string['eventsubmissionunlocked'] = 'Bài nộp của người dùng đã được mở khóa.';
$string['eventsubmissionupdated'] = 'Đã cập nhật bài nộp.';
$string['eventsubmissionviewed'] = 'Đã xem bài nộp.';
$string['eventworkflowstateupdated'] = 'Đã cập nhật trạng thái quy trình.';
$string['expandreviewpanel'] = 'Mở rộng bảng đánh giá';
$string['extensionduedate'] = 'Hạn nộp sau khi gia hạn';
$string['extensionduedatecurrent'] = 'Hạn nộp sau khi gia hạn hiện tại';
$string['extensionduedatenone'] = 'Không có';
$string['extensionduedaterange'] = 'Nhiều ngày khác nhau trong khoảng từ {$a->earliest} đến {$a->latest}';
$string['extensionduedatewithout'] = 'Người dùng chưa được gia hạn hiện tại: {$a}';
$string['extensionnotafterduedate'] = 'Ngày gia hạn phải sau hạn nộp';
$string['extensionnotafterfromdate'] = 'Ngày gia hạn phải sau ngày bắt đầu cho phép nộp bài';
$string['feedback'] = 'Phản hồi';
$string['feedbackavailableanonhtml'] = 'Bạn có phản hồi mới cho bài nộp bài tập \'{$a->assignment}\' của mình. Bạn có thể xem phản hồi được đính kèm vào <a href="{$a->url}">bài nộp bài tập</a>.';
$string['feedbackavailableanonsmall'] = 'Phản hồi mới cho bài tập {$a->assignment}';
$string['feedbackavailableanonsms'] = 'Phản hồi mới về \'{$a->assignment}\' trong \'{$a->coursefullname}\'. Đăng nhập để xem';
$string['feedbackavailableanontext'] = 'Bạn có phản hồi mới cho
bài nộp bài tập \'{$a->assignment}\' của mình

Bạn có thể xem phản hồi được đính kèm vào bài nộp:

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} đã gửi phản hồi cho bài nộp bài tập \'{$a->assignment}\' của bạn.
Bạn có thể xem phản hồi được đính kèm vào <a href="{$a->url}">bài nộp bài tập</a>.';
$string['feedbackavailablesmall'] = '{$a->username} đã gửi phản hồi cho bài tập {$a->assignment}';
$string['feedbackavailablesms'] = 'Phản hồi mới về \'{$a->assignment}\' trong \'{$a->coursefullname}\'. Đăng nhập để xem';
$string['feedbackavailabletext'] = '{$a->username} đã gửi phản hồi cho
bài nộp bài tập \'{$a->assignment}\' của bạn

Bạn có thể xem phản hồi được đính kèm vào bài nộp:

    {$a->url}';
$string['feedbackplugin'] = 'Plugin phản hồi';
$string['feedbackpluginforgradebook'] = 'Plugin phản hồi sẽ chuyển nhận xét vào sổ điểm';
$string['feedbackpluginforgradebook_help'] = 'Chỉ một plugin phản hồi của bài tập có thể chuyển phản hồi vào sổ điểm.';
$string['feedbackplugins'] = 'Các plugin phản hồi';
$string['feedbacksettings'] = 'Thiết lập phản hồi';
$string['feedbacktypes'] = 'Loại phản hồi';
$string['filesubmissions'] = 'Bài nộp dạng tệp';
$string['filter'] = 'Lọc';
$string['filterall'] = 'Tất cả';
$string['filterdraft'] = 'Bản nháp';
$string['filtergraded'] = 'Đã chấm điểm';
$string['filtergrantedextension'] = 'Đã cấp gia hạn';
$string['filternone'] = 'Không lọc';
$string['filternotsubmitted'] = 'Chưa nộp';
$string['filterrequiregrading'] = 'Cần chấm điểm';
$string['filtersubmitted'] = 'Đã nộp';
$string['fixrescalednullgrades'] = 'Bài tập này có một số điểm bị lỗi. Bạn có thể <a href="{$a->link}">tự động sửa các điểm này</a>. Việc này có thể ảnh hưởng đến tổng điểm khóa học.';
$string['fixrescalednullgradesconfirm'] = 'Bạn có chắc chắn muốn sửa các điểm bị lỗi không? Tất cả điểm bị ảnh hưởng sẽ bị xóa. Việc này có thể ảnh hưởng đến tổng điểm khóa học.';
$string['fixrescalednullgradesdone'] = 'Đã sửa điểm.';
$string['gradeabovemaximum'] = 'Điểm phải nhỏ hơn hoặc bằng {$a}.';
$string['gradeactions'] = 'Thao tác điểm';
$string['gradebelowzero'] = 'Điểm phải lớn hơn hoặc bằng không.';
$string['gradebreakdown'] = 'Chi tiết điểm';
$string['gradecanbechanged'] = 'Có thể thay đổi điểm';
$string['gradechangessaveddetail'] = 'Đã lưu các thay đổi về điểm và phản hồi';
$string['graded'] = 'Đã chấm điểm';
$string['gradedby'] = 'Người chấm';
$string['gradedfollowupsubmit'] = 'Đã chấm - đã nộp lại';
$string['gradedon'] = 'Đã chấm vào';
$string['gradeitem:submissions'] = 'Bài nộp';
$string['gradelocked'] = 'Điểm này bị khóa hoặc bị ghi đè trong sổ điểm.';
$string['gradeoutof'] = 'Điểm trên {$a}';
$string['gradeoutofhelp'] = 'Điểm';
$string['gradeoutofhelp_help'] = 'Nhập điểm cho bài nộp của học viên tại đây. Bạn có thể nhập số thập phân.';
$string['gradepenalty'] = 'Điểm trừ';
$string['gradepenalty_help'] = 'Nếu được bật, điểm trừ sẽ áp dụng cho các bài tập nộp sau hạn nộp.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} đã cập nhật bài nộp bài tập của họ cho \'{$a->assignment}\' vào lúc {$a->timeupdated}. Có thể xem tại <a href="{$a->url}">bài nộp bài tập</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} đã cập nhật bài nộp cho bài tập {$a->assignment}.';
$string['gradersubmissionupdatedsms'] = '{$a->username} đã cập nhật bài nộp cho bài tập \'{$a->assignment}\' trong \'{$a->coursefullname}\'. Đăng nhập để xem';
$string['gradersubmissionupdatedtext'] = '{$a->username} đã cập nhật bài nộp bài tập của họ
cho \'{$a->assignment}\' vào lúc {$a->timeupdated}

Có thể xem tại đây:

    {$a->url}';
$string['gradestudent'] = 'Chấm điểm học viên: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Chấm điểm {$a}';
$string['grading'] = 'Chấm điểm';
$string['gradingchangessaved'] = 'Đã lưu các thay đổi về điểm';
$string['gradingduedate'] = 'Nhắc tôi chấm điểm trước ngày';
$string['gradingduedate_help'] = 'Ngày dự kiến hoàn tất việc chấm các bài nộp. Ngày này được dùng để ưu tiên thông báo trên bảng điều khiển dành cho giáo viên.';
$string['gradingdueduedatevalidation'] = 'Ngày nhắc chấm điểm không thể sớm hơn hạn nộp.';
$string['gradingduefromdatevalidation'] = 'Ngày nhắc chấm điểm không thể sớm hơn ngày bắt đầu cho phép nộp bài.';
$string['gradingmethodpreview'] = 'Tiêu chí chấm điểm';
$string['gradingoptions'] = 'Tùy chọn';
$string['gradingrestricted'] = 'Việc chấm điểm bị giới hạn cho đến khi tất cả người chấm hoàn tất.';
$string['gradingstatus'] = 'Trạng thái chấm điểm';
$string['gradingstudent'] = 'Chấm điểm học viên';
$string['gradingsummary'] = 'Tóm tắt chấm điểm';
$string['grantextension'] = 'Cấp gia hạn';
$string['grantextensionforusers'] = 'Cấp gia hạn cho {$a} học viên';
$string['groupoverrides'] = 'Bản ghi đè nhóm';
$string['groupoverridesdeleted'] = 'Đã xóa các ghi đè theo nhóm';
$string['groupsnone'] = 'Không có nhóm nào trong khóa học này.';
$string['groupsubmissionsettings'] = 'Thiết lập nộp bài theo nhóm';
$string['hiddenuser'] = 'Người tham gia';
$string['hidegrader'] = 'Ẩn danh tính người chấm với học viên';
$string['hidegrader_help'] = 'Nếu được bật, danh tính của người dùng chấm bài nộp sẽ không được hiển thị, vì vậy học viên không thể biết ai đã chấm bài của mình.

Lưu ý rằng thiết lập này không ảnh hưởng đến ô nhận xét trên trang chấm điểm.';
$string['hideshow'] = 'Ẩn/Hiện';
$string['inactiveoverridehelp'] = '* Bản ghi đè này không hoạt động vì quyền truy cập của người dùng vào hoạt động bị hạn chế. Nguyên nhân có thể là do phân công nhóm hoặc vai trò, các hạn chế truy cập khác hoặc hoạt động đang bị ẩn.';
$string['includesuspendedparticipants'] = 'Bao gồm người tham gia bị tạm ngưng';
$string['indicator:cognitivedepth'] = 'Nhận thức trong bài tập';
$string['indicator:cognitivedepth_help'] = 'Chỉ báo này dựa trên độ sâu nhận thức mà học viên đạt được trong một hoạt động bài tập.';
$string['indicator:cognitivedepthdef'] = 'Nhận thức trong bài tập';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này trong mức độ tham gia nhận thức mà các hoạt động Bài tập cung cấp trong khoảng thời gian phân tích này (Các mức = Chưa xem, Đã xem, Đã nộp, Đã xem phản hồi, Nhận xét về phản hồi, Nộp lại sau khi xem phản hồi)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Mức độ tương tác xã hội trong bài tập';
$string['indicator:socialbreadth_help'] = 'Chỉ báo này dựa trên mức độ tương tác xã hội mà học viên đạt được trong một hoạt động bài tập.';
$string['indicator:socialbreadthdef'] = 'Mức độ tương tác xã hội trong bài tập';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này trong mức độ tương tác xã hội mà các hoạt động Bài tập cung cấp trong khoảng thời gian phân tích này (Các mức = Không tham gia, Tự tham gia, Tham gia cùng người khác)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['instructionfiles'] = 'Tệp hướng dẫn';
$string['introattachments'] = 'Tệp bổ sung';
$string['introattachments_help'] = 'Có thể thêm các tệp bổ sung để sử dụng trong bài tập, chẳng hạn như mẫu trả lời.';
$string['invalidfloatforgrade'] = 'Không thể hiểu điểm đã nhập: {$a}';
$string['invalidgradeforscale'] = 'Điểm được cung cấp không hợp lệ với thang điểm hiện tại';
$string['invalidgroupid'] = 'ID nhóm không hợp lệ';
$string['invalidmarkerallocation:notenoughmarkers'] = 'Không đủ người chấm ({$a->markers}) để đáp ứng số lượng yêu cầu cho bài tập này ({$a->requested}).';
$string['invalidoverrideid'] = 'ID ghi đè không hợp lệ';
$string['invaliduserid'] = 'ID người dùng không hợp lệ';
$string['lastmodifiedgrade'] = 'Sửa đổi lần cuối (điểm)';
$string['lastmodifiedsubmission'] = 'Sửa đổi lần cuối (bài nộp)';
$string['latesubmissions'] = 'Bài nộp muộn';
$string['latesubmissionsaccepted'] = 'Được phép đến {$a}';
$string['loading'] = 'Đang tải...';
$string['locksubmissionforstudent'] = 'Ngăn học viên nộp thêm bài: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Khóa bài nộp';
$string['manageassignfeedbackplugins'] = 'Quản lý các plugin phản hồi bài tập';
$string['manageassignsubmissionplugins'] = 'Quản lý các plugin nộp bài tập';
$string['markactions'] = 'Thao tác chấm điểm';
$string['markallocatedsubmissions'] = 'Chấm các bài nộp được phân công';
$string['marker'] = 'Người chấm';
$string['markerallocations'] = 'Phân công người chấm';
$string['markercount'] = 'Số người chấm bắt buộc';
$string['markercount_help'] = 'Số người chấm bắt buộc cho bài tập. Không bao gồm người chấm tùy chọn.';
$string['markercountdecreasevalidation'] = 'Không thể giảm số người chấm bắt buộc vì thao tác này sẽ xóa các phân công người chấm.';
$string['markerfilter'] = 'Bộ lọc người chấm';
$string['markerfilternomarker'] = 'Không có người chấm';
$string['markernumber'] = 'Người chấm {$a}';
$string['markgradeaverage'] = 'Điểm trung bình';
$string['markgradeaverage_help'] = 'Tính điểm trung bình của tất cả điểm đã cho.';
$string['markgrademanual'] = 'Thủ công';
$string['markgrademanual_help'] = 'Không tính toán; chỉ nhập thủ công.';
$string['markgrademaximum'] = 'Điểm tối đa';
$string['markgrademaximum_help'] = 'Sử dụng điểm cao nhất trong tất cả điểm đã cho.';
$string['markingallocation'] = 'Sử dụng phân công người chấm';
$string['markingallocation_help'] = 'Nếu được bật cùng với quy trình chấm điểm, người chấm có thể được phân công cho từng học viên cụ thể.';
$string['markinganonymous'] = 'Cho phép công bố một phần điểm trong khi chấm ẩn danh';
$string['markinganonymous_help'] = 'Nếu được bật cùng với bài nộp ẩn danh và quy trình chấm điểm, tùy chọn này cho phép công bố một phần điểm trong khi chấm ẩn danh.';
$string['markinginprogresswarning'] = 'Bạn đã nhập điểm nhưng chưa đặt trạng thái là "Đã chấm xong". Chỉ các điểm ở trạng thái này mới đủ điều kiện để tính điểm.';
$string['markingstate'] = 'Trạng thái chấm điểm';
$string['markingworkflow'] = 'Sử dụng quy trình chấm điểm';
$string['markingworkflow_help'] = 'Nếu được bật, điểm sẽ trải qua một loạt giai đoạn quy trình trước khi được công bố cho học viên. Tùy chọn này cho phép chấm nhiều vòng và công bố điểm cho tất cả học viên cùng một lúc.';
$string['markingworkflowstate'] = 'Trạng thái quy trình chấm điểm';
$string['markingworkflowstate_help'] = 'Các trạng thái quy trình có thể bao gồm (tùy thuộc vào quyền của bạn):

* Chưa chấm - người chấm chưa bắt đầu
* Đang chấm - người chấm đã bắt đầu nhưng chưa hoàn tất
* Đã chấm xong - người chấm đã hoàn tất nhưng có thể cần kiểm tra/chỉnh sửa lại
* Đang xét duyệt - bài chấm đang được giáo viên phụ trách kiểm tra chất lượng
* Sẵn sàng công bố - giáo viên phụ trách đã hài lòng với kết quả chấm nhưng có thể chờ trước khi cho học viên xem
* Đã công bố - học viên có thể xem điểm/phản hồi';
$string['markingworkflowstateinmarking'] = 'Đang chấm';
$string['markingworkflowstateinreview'] = 'Đang xét duyệt';
$string['markingworkflowstatenotmarked'] = 'Chưa chấm';
$string['markingworkflowstatereadyforrelease'] = 'Sẵn sàng công bố';
$string['markingworkflowstatereadyforreview'] = 'Đã chấm xong';
$string['markingworkflowstatereleased'] = 'Đã công bố';
$string['marknoun'] = 'Điểm';
$string['markoutof'] = 'Điểm trên {$a}';
$string['markoutof_help'] = 'Nhập điểm cho bài nộp của học viên tại đây. Bạn có thể nhập số thập phân.';
$string['marks'] = 'Điểm';
$string['markverb'] = 'Chấm điểm';
$string['maxattempts'] = 'Số lần làm bài được phép';
$string['maxattempts_help'] = 'Số lần nộp bài tối đa mà học viên có thể thực hiện. Khi đạt đến số lần này, bài nộp sẽ không thể được mở lại.';
$string['maxgrade'] = 'Điểm tối đa';
$string['maxmarkercount'] = 'Giới hạn tối đa số người chấm bắt buộc';
$string['maxmarkercount_help'] = 'Số lượng tối đa người chấm bắt buộc có thể chọn cho một bài tập.';
$string['maxoptionalmarkercount'] = 'Giới hạn tối đa số người chấm tùy chọn';
$string['maxoptionalmarkercount_help'] = 'Số lượng tối đa người chấm tùy chọn có thể chọn cho một bài tập.';
$string['maxperpage'] = 'Số bài tập tối đa mỗi trang';
$string['maxperpage_help'] = 'Số bài tập tối đa mà người chấm có thể hiển thị trên trang chấm điểm bài tập. Cài đặt này hữu ích để tránh hết thời gian chờ trong các khóa học có nhiều người tham gia.';
$string['messageprovider:assign_due_digest'] = 'Thông báo về bài tập đến hạn trong 7 ngày';
$string['messageprovider:assign_due_soon'] = 'Thông báo bài tập sắp đến hạn';
$string['messageprovider:assign_notification'] = 'Thông báo về bài tập';
$string['messageprovider:assign_overdue'] = 'Thông báo bài tập quá hạn';
$string['modulename'] = 'Bài tập';
$string['modulename_help'] = '#### Tính năng chính
*  Cung cấp hướng dẫn và yêu cầu cho bài tập
*  Cho phép học viên nộp mọi loại tệp hoặc nhập trực tiếp vào trình soạn thảo văn bản trực tuyến
*  Quản lý hạn nộp và kiểm soát việc chấp nhận bài nộp muộn
*  Sử dụng bảng tiêu chí hoặc hướng dẫn chấm điểm để cho điểm và phản hồi
*  Học viên có thể nộp bài cá nhân hoặc theo nhóm

Cách sử dụng
*  Thu thập bài luận hoặc bài tập môn học để phản hồi và chấm điểm
*  Giao nhiệm vụ nhóm để học viên cùng nộp một bài thuyết trình
*  Ghi nhận và chấm điểm bài làm ngoại tuyến, chẳng hạn như phần trình diễn trên lớp hoặc chuyến đi thực tế';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulename_summary'] = 'Thu thập bài nộp của học viên như bài luận, báo cáo hoặc dự án, đồng thời cung cấp phản hồi và điểm.';
$string['modulenameplural'] = 'Bài tập';
$string['moreusers'] = 'còn {$a}...';
$string['multimarkmethod'] = 'Tính điểm';
$string['multimarkmethod_help'] = 'Cách tính điểm khi có nhiều người chấm';
$string['multimarkrounding'] = 'Làm tròn';
$string['multimarkrounding_help'] = 'Có làm tròn lên, làm tròn xuống, làm tròn thông thường hay không làm tròn khi tính điểm trung bình';
$string['multimarkrounding:down'] = 'Làm tròn xuống';
$string['multimarkrounding:down_help'] = 'Điểm trung bình sẽ được làm tròn xuống thành số nguyên gần nhất.';
$string['multimarkrounding:natural'] = 'Làm tròn thông thường';
$string['multimarkrounding:natural_help'] = 'Điểm trung bình sẽ được làm tròn lên hoặc xuống theo quy tắc thông thường thành số nguyên gần nhất.';
$string['multimarkrounding:none'] = 'Không làm tròn';
$string['multimarkrounding:none_help'] = 'Điểm trung bình sẽ không được làm tròn.';
$string['multimarkrounding:up'] = 'Làm tròn lên';
$string['multimarkrounding:up_help'] = 'Điểm trung bình sẽ được làm tròn lên thành số nguyên gần nhất.';
$string['multimarkupdate'] = 'Cập nhật điểm thống nhất';
$string['multimarkupdate:clear'] = 'Xóa điểm thống nhất';
$string['multimarkupdate:clear_help'] = 'Xóa điểm thống nhất cho tất cả các lần làm bài mới nhất.';
$string['multimarkupdate:none'] = 'Giữ điểm thống nhất hiện tại';
$string['multimarkupdate:none_help'] = 'Giữ nguyên điểm thống nhất hiện tại cho đến khi điểm hoặc phân công người chấm được cập nhật.';
$string['multimarkupdate:recalculate'] = 'Tính lại điểm thống nhất';
$string['multimarkupdate:recalculate_help'] = 'Tính lại điểm thống nhất cho tất cả các lần làm bài mới nhất theo phương thức đã chọn.';
$string['multimarkupdatecalculatevalidation'] = 'Bạn phải chọn có cập nhật các điểm thống nhất hiện có hay không khi thay đổi cài đặt tính điểm của nhiều người chấm.';
$string['multimarkupdateenable'] = 'Một số điểm đã được cho. Nếu muốn bật tính năng chấm bởi nhiều người, bạn phải chọn cách xử lý các điểm này dưới dạng điểm thống nhất.';
$string['multimarkupdatemarkervalidation'] = 'Bạn phải chọn có cập nhật các điểm thống nhất hiện có hay không khi tăng số người chấm bắt buộc.';
$string['multimarkupdatemessage'] = 'Một số điểm thống nhất đã được xác định. Nếu muốn thay đổi phương thức tính điểm hoặc tăng yêu cầu về điểm, bạn phải chọn cách cập nhật các điểm thống nhất hiện có.';
$string['multipleteams'] = 'Là thành viên của nhiều hơn một nhóm';
$string['multipleteams_desc'] = 'Bài tập này yêu cầu nộp bài theo nhóm. Bạn là thành viên của nhiều nhóm. Để có thể nộp bài, bạn chỉ được là thành viên của một nhóm. Vui lòng liên hệ giáo viên để thay đổi tư cách thành viên nhóm của bạn.';
$string['multipleteamsgrader'] = 'Là thành viên của nhiều hơn một nhóm nên không thể nộp bài.';
$string['newsubmissions'] = 'Bài tập đã nộp';
$string['nextuser'] = 'Người dùng tiếp theo';
$string['noattempt'] = 'Chưa có lần làm bài';
$string['noclose'] = 'Không có ngày kết thúc';
$string['nofiles'] = 'Không có tệp.';
$string['nofilters'] = 'Không có bộ lọc';
$string['nograde'] = 'Chưa có điểm.';
$string['nogroupoverrides'] = 'Hiện không có trường hợp ghi đè nào cho nhóm.';
$string['nomoresubmissionsaccepted'] = 'Chỉ áp dụng cho những người tham gia đã được gia hạn';
$string['none'] = 'Không có';
$string['noonlinesubmissions'] = 'Bài tập này không yêu cầu bạn nộp bất cứ thứ gì trực tuyến';
$string['noopen'] = 'Không có ngày mở';
$string['nooverridedata'] = 'Bạn phải ghi đè ít nhất một cài đặt của bài tập.';
$string['nosavebutnext'] = 'Tiếp theo';
$string['nosubmission'] = 'Chưa có nội dung nào được nộp cho bài tập này';
$string['nosubmissionyet'] = 'Chưa có bài nộp nào';
$string['noteam'] = 'Không thuộc nhóm nào';
$string['noteam_desc'] = 'Bài tập này yêu cầu nộp bài theo nhóm. Bạn không thuộc nhóm nào nên không thể tạo bài nộp. Vui lòng liên hệ giáo viên để được thêm vào nhóm.';
$string['noteamgrader'] = 'Không thuộc nhóm nào nên không thể nộp bài.';
$string['notgraded'] = 'Chưa chấm điểm';
$string['notgradedyet'] = 'Chưa được chấm điểm';
$string['notifications'] = 'Thông báo';
$string['notifystudents'] = 'Thông báo cho học viên';
$string['nouseroverrides'] = 'Hiện không có trường hợp ghi đè nào cho người dùng.';
$string['nousers'] = 'Không có người dùng';
$string['nousersselected'] = 'Chưa chọn người dùng nào';
$string['numberofdraftsubmissions'] = 'Bản nháp';
$string['numberofparticipants'] = 'Người tham gia';
$string['numberofsubmissionsneedgrading'] = 'Cần chấm điểm';
$string['numberofsubmissionsneedgradinglabel'] = 'Cần chấm điểm: {$a}';
$string['numberofsubmittedassignments'] = 'Đã nộp';
$string['numberofteams'] = 'Nhóm';
$string['offline'] = 'Không yêu cầu nộp bài trực tuyến';
$string['open'] = 'Mở';
$string['opensubmissionexists'] = 'Đã tồn tại bài nộp cho bài tập đang mở.';
$string['optionalmarkercount'] = 'Số người chấm tùy chọn';
$string['optionalmarkercount_help'] = 'Số lượng người chấm tùy chọn cho bài tập.';
$string['optionalmarkercountdecreasevalidation'] = 'Không thể giảm số người chấm tùy chọn vì thao tác này sẽ xóa những người chấm đã được phân công hoặc bật.';
$string['outlinegrade'] = 'Điểm: {$a}';
$string['outof'] = '{$a->current} trên {$a->total}';
$string['overdue'] = 'Bài tập đã quá hạn: {$a}';
$string['override'] = 'Ghi đè';
$string['overridecannotsetboth'] = 'Không thể đặt đồng thời userid và groupid';
$string['overridechangegroupid'] = 'Không thể thay đổi ID nhóm của trường hợp ghi đè hiện có';
$string['overridechangeuserid'] = 'Không thể thay đổi ID người dùng của trường hợp ghi đè hiện có';
$string['overridedeletegroupsure'] = 'Bạn có chắc chắn muốn xóa trường hợp ghi đè cho nhóm {$a} không?';
$string['overridedeleteusersure'] = 'Bạn có chắc chắn muốn xóa trường hợp ghi đè cho người dùng {$a} không?';
$string['overridegroup'] = 'Ghi đè cho nhóm';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overridemustseteitheruserorgroup'] = 'Trường hợp ghi đè phải chỉ định người dùng hoặc nhóm';
$string['overridereason'] = 'Lý do ghi đè';
$string['overridereason_help'] = 'Có thể ghi lại lý do cho trường hợp ghi đè này.';
$string['overriderecalculatepenalty'] = 'Tính lại hình phạt cho (những) người dùng trong trường hợp ghi đè';
$string['overrides'] = 'Các trường hợp ghi đè';
$string['overrideuser'] = 'Ghi đè cho người dùng';
$string['overrideusereventname'] = '{$a->assign} - Ghi đè';
$string['page-mod-assign-view'] = 'Trang chính của mô-đun bài tập và trang nộp bài';
$string['page-mod-assign-x'] = 'Bất kỳ trang nào của mô-đun bài tập';
$string['paramtimeremaining'] = 'còn lại {$a}';
$string['participant'] = 'Người tham gia';
$string['penaltyduedatechangemessage'] = 'Một số điểm đã được cho. Để thay đổi hạn nộp hoặc bật/tắt hình phạt, trước tiên bạn phải chọn có tính lại các điểm hiện có hay không.';
$string['pluginadministration'] = 'Quản trị bài tập';
$string['pluginname'] = 'Bài tập';
$string['preventsubmissionnotingroup'] = 'Yêu cầu thuộc nhóm để nộp bài';
$string['preventsubmissionnotingroup_help'] = 'Nếu được bật, người dùng không thuộc nhóm nào sẽ không thể nộp bài.';
$string['preventsubmissions'] = 'Ngăn người dùng nộp thêm bài cho bài tập này.';
$string['preventsubmissionsshort'] = 'Ngăn thay đổi bài nộp';
$string['previous'] = 'Trước đó';
$string['previoususer'] = 'Người dùng trước đó';
$string['privacy:attemptpath'] = 'lần làm bài {$a}';
$string['privacy:blindmarkingidentifier'] = 'Mã định danh được dùng cho các bài nộp ẩn danh';
$string['privacy:gradepath'] = 'điểm';
$string['privacy:metadata:assignallocatedmarker'] = 'Lưu trữ các liên kết giữa người chấm được phân công và bài tập của học viên';
$string['privacy:metadata:assigndownloadasfolders'] = 'Tùy chọn người dùng về việc tải nhiều tệp bài nộp vào các thư mục hay không';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Dữ liệu phản hồi cho bài tập.';
$string['privacy:metadata:assignfilter'] = 'Các tùy chọn bộ lọc như \'Đã nộp\', \'Chưa nộp\', \'Cần chấm điểm\' và \'Được gia hạn\\';
$string['privacy:metadata:assigngrades'] = 'Lưu trữ điểm của người dùng cho bài tập';
$string['privacy:metadata:assignmark'] = 'Lưu trữ điểm chấm của người dùng cho bài tập';
$string['privacy:metadata:assignmarkerfilter'] = 'Lọc phần tổng quan bài tập theo người chấm được phân công.';
$string['privacy:metadata:assignmentid'] = 'ID bài tập';
$string['privacy:metadata:assignmessageexplanation'] = 'Tin nhắn được gửi cho học viên thông qua hệ thống nhắn tin.';
$string['privacy:metadata:assignoverrides'] = 'Lưu trữ thông tin ghi đè cho bài tập';
$string['privacy:metadata:assignoverrides:reason'] = 'Ghi chú tùy chọn ghi lại lý do ghi đè bài tập.';
$string['privacy:metadata:assignperpage'] = 'Số bài tập hiển thị trên mỗi trang.';
$string['privacy:metadata:assignquickgrading'] = 'Tùy chọn về việc có sử dụng tính năng chấm điểm nhanh hay không.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Lưu trữ thông tin bài nộp của người dùng';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Dữ liệu bài nộp cho bài tập.';
$string['privacy:metadata:assignuserflags'] = 'Lưu trữ siêu dữ liệu của người dùng, chẳng hạn như ngày gia hạn';
$string['privacy:metadata:assignusermapping'] = 'Liên kết ánh xạ cho các bài nộp ẩn danh';
$string['privacy:metadata:assignworkflowfilter'] = 'Lọc theo các giai đoạn quy trình khác nhau.';
$string['privacy:metadata:grade'] = 'Điểm số dạng số cho bài nộp này. Có thể được xác định bằng thang điểm/biểu mẫu chấm điểm nâng cao, v.v. nhưng luôn được chuyển đổi lại thành số dấu phẩy động.';
$string['privacy:metadata:grader'] = 'ID người dùng của người chấm điểm.';
$string['privacy:metadata:groupid'] = 'ID nhóm mà người dùng là thành viên.';
$string['privacy:metadata:latest'] = 'Giúp đơn giản hóa đáng kể các truy vấn cần lấy thông tin chỉ về lần làm bài mới nhất.';
$string['privacy:metadata:mailed'] = 'Người dùng này đã được gửi thư chưa?';
$string['privacy:metadata:markerenabled'] = 'Người chấm tùy chọn có được bật hay không';
$string['privacy:metadata:markeroptional'] = 'Người chấm được phân công có phải là tùy chọn hay không';
$string['privacy:metadata:timecreated'] = 'Thời điểm tạo';
$string['privacy:metadata:timestarted'] = 'Thời điểm bắt đầu';
$string['privacy:metadata:userid'] = 'ID của người dùng';
$string['privacy:studentpath'] = 'studentsubmissions';
$string['privacy:submissionpath'] = 'bài nộp';
$string['quickgrading'] = 'Chấm điểm nhanh';
$string['quickgrading_help'] = 'Tính năng chấm điểm nhanh cho phép bạn cho điểm (và kết quả học tập) trực tiếp trong bảng bài nộp. Tính năng này không tương thích với chấm điểm nâng cao và không được khuyến nghị khi có nhiều người chấm.';
$string['quickgradingchangessaved'] = 'Đã lưu các thay đổi về điểm';
$string['quickgradingresult'] = 'Chấm điểm nhanh';
$string['recordid'] = 'Mã định danh';
$string['relativedatessubmissiontimeleft'] = 'Được tính riêng cho từng học viên';
$string['removeallgroupoverrides'] = 'Tất cả ghi đè theo nhóm';
$string['removealluseroverrides'] = 'Tất cả ghi đè theo người dùng';
$string['removesubmission'] = 'Xóa bài nộp';
$string['removesubmissionconfirm'] = 'Bạn có chắc chắn muốn xóa bài nộp của mình không?';
$string['removesubmissionconfirmforstudent'] = 'Bạn có chắc chắn muốn xóa bài nộp của {$a} không?';
$string['removesubmissionconfirmforstudentwithtimelimit'] = 'Bạn có chắc chắn muốn xóa bài nộp của {$a} không? Lưu ý rằng thao tác này sẽ không đặt lại giới hạn thời gian của học viên. Bạn có thể cấp thêm thời gian bằng cách thêm ghi đè giới hạn thời gian cho người dùng.';
$string['removesubmissionconfirmwithtimelimit'] = 'Bạn có chắc chắn muốn xóa bài nộp của mình không? Lưu ý rằng thao tác này sẽ không đặt lại giới hạn thời gian của bạn.';
$string['removesubmissionforstudent'] = 'Xóa bài nộp của học viên: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Tùy chọn mở lại cho đến khi đạt không tương thích với bài nộp ẩn danh, vì điểm sẽ không được chuyển vào sổ điểm cho đến khi danh tính học viên được tiết lộ.';
$string['requireallteammemberssubmit'] = 'Yêu cầu tất cả thành viên nhóm nộp bài';
$string['requireallteammemberssubmit_help'] = 'Thiết lập này phải được sử dụng cùng với tùy chọn \'Yêu cầu học viên nhấp vào nút nộp bài\' trong phần Cài đặt bài nộp.

Nếu bật, tất cả thành viên nhóm phải nhấp vào nút nộp bài thì bài nộp của nhóm mới được xem là đã nộp. Nếu tắt, bất kỳ thành viên nào trong nhóm cũng có thể nhấp vào nút nộp bài.';
$string['requiresubmissionstatement'] = 'Yêu cầu học viên chấp nhận tuyên bố về bài nộp';
$string['requiresubmissionstatement_help'] = 'Yêu cầu học viên chấp nhận tuyên bố về bài nộp cho tất cả các bài nộp của bài tập này.';
$string['resizelayout'] = 'Thay đổi kích thước bố cục';
$string['revealidentities'] = 'Tiết lộ danh tính học viên';
$string['revealidentitiesconfirm'] = 'Bạn có chắc chắn muốn tiết lộ danh tính học viên trong bài tập này không? Không thể hoàn tác thao tác này. Sau khi danh tính học viên được tiết lộ, điểm sẽ được chuyển vào sổ điểm.';
$string['reverttodefaults'] = 'Khôi phục mặc định của bài tập';
$string['reverttodraft'] = 'Chuyển bài nộp về trạng thái bản nháp';
$string['reverttodraftforgroup'] = 'Chuyển bài nộp của nhóm {$a} về trạng thái bản nháp.';
$string['reverttodraftforstudent'] = 'Chuyển bài nộp của học viên về trạng thái bản nháp: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Chuyển bài nộp về bản nháp';
$string['reviewed'] = 'Đã xem xét';
$string['save'] = 'Lưu';
$string['saveallquickgradingchanges'] = 'Lưu tất cả thay đổi chấm điểm nhanh';
$string['saveandcontinue'] = 'Lưu và tiếp tục';
$string['savechanges'] = 'Lưu thay đổi';
$string['savegradingresult'] = 'Chấm điểm';
$string['savenext'] = 'Lưu và hiển thị mục tiếp theo';
$string['saveoverrideandstay'] = 'Lưu và nhập một ghi đè khác';
$string['savingchanges'] = 'Đang lưu thay đổi...';
$string['scale'] = 'Thang điểm';
$string['search:activity'] = 'Bài tập - thông tin hoạt động';
$string['selectedusers'] = 'Người dùng đã chọn';
$string['selectlink'] = 'Chọn...';
$string['selectuser'] = 'Chọn {$a}';
$string['sendlatenotifications'] = 'Thông báo cho người chấm về bài nộp muộn';
$string['sendlatenotifications_help'] = 'Nếu bật, người chấm (thường là giáo viên) sẽ nhận được thông báo mỗi khi học viên nộp bài tập muộn. Có thể cấu hình phương thức gửi thông báo.';
$string['sendnotificationduedatesoon'] = 'Thông báo cho người dùng về hạn nộp bài tập sắp đến';
$string['sendnotificationduedigest'] = 'Thông báo cho người dùng về các bài tập đến hạn trong 7 ngày tới';
$string['sendnotificationoverdue'] = 'Thông báo cho người dùng về bài tập đã quá hạn';
$string['sendnotifications'] = 'Thông báo cho người chấm về bài nộp';
$string['sendnotifications_help'] = 'Nếu bật, người chấm (thường là giáo viên) sẽ nhận được thông báo mỗi khi học viên nộp bài tập, dù nộp sớm, đúng hạn hay muộn. Có thể cấu hình phương thức gửi thông báo.';
$string['sendstudentnotifications'] = 'Thông báo cho học viên';
$string['sendstudentnotifications_help'] = 'Chọn ô này để gửi thông báo về điểm hoặc phản hồi đã cập nhật. Nếu bài tập sử dụng quy trình chấm điểm hoặc điểm bị ẩn trong báo cáo chấm điểm, thông báo sẽ chỉ được gửi sau khi điểm được công bố.';
$string['sendstudentnotificationsdefault'] = 'Mặc định cho \'Thông báo cho học viên\\';
$string['sendstudentnotificationsdefault_help'] = 'Khi chấm điểm cho từng học viên, mặc định có chọn \'Thông báo cho học viên\' không?';
$string['sendsubmissionreceipts'] = 'Gửi biên nhận bài nộp cho học viên';
$string['sendsubmissionreceipts_help'] = 'Tùy chọn này bật biên nhận bài nộp cho học viên. Học viên sẽ nhận được thông báo mỗi khi nộp bài tập thành công.';
$string['setmarkerallocationforlog'] = 'Thiết lập phân công chấm điểm: (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'Thiết lập người chấm được phân công';
$string['setmarkingworkflowstate'] = 'Thiết lập trạng thái quy trình chấm điểm';
$string['setmarkingworkflowstateforlog'] = 'Thiết lập trạng thái quy trình chấm điểm: (id={$a->id}, fullname={$a->fullname}, state={$a->state}).';
$string['settings'] = 'Cài đặt bài tập';
$string['showrecentsubmissions'] = 'Hiển thị bài nộp gần đây';
$string['status'] = 'Trạng thái';
$string['studentnotificationworkflowstateerror'] = 'Trạng thái quy trình chấm điểm phải là \'Đã công bố\' để thông báo cho học viên.';
$string['submission'] = 'Bài nộp';
$string['submissionactions'] = 'Thao tác với bài nộp';
$string['submissionattachments'] = 'Chỉ hiển thị tệp trong khi nộp bài';
$string['submissionattachments_help'] = 'Chọn ô này để chỉ hiển thị tệp trên trang nộp bài. Nếu không, tệp sẽ hiển thị trên cả trang bài tập và trang nộp bài.';
$string['submissioncontains'] = 'Bài nộp của bạn bao gồm:';
$string['submissioncopiedhtml'] = '<p>Bạn đã tạo bản sao bài nộp trước đây của mình cho bài tập \'{$a->assignment}\'.</p>
<p>Bạn có thể xem trạng thái <a href="{$a->url}">bài nộp</a> của mình.</p>';
$string['submissioncopiedsmall'] = 'Bạn đã sao chép bài nộp trước đây của mình cho {$a->assignment}';
$string['submissioncopiedsms'] = 'Bạn đã tạo bản sao bài nộp trước đây cho \'{$a->assignment}\' trong khóa học \'{$a->coursefullname}\'. Đăng nhập để xem';
$string['submissioncopiedtext'] = 'Bạn đã tạo bản sao bài nộp trước đây của mình cho bài tập \'{$a->assignment}\'

Bạn có thể xem trạng thái bài nộp của mình tại:

    {$a->url}';
$string['submissiondrafts'] = 'Yêu cầu học viên nhấp vào nút nộp bài';
$string['submissiondrafts_help'] = 'Học viên có cần nút nộp bài để cho biết họ đã hoàn tất chỉnh sửa bài nộp và bài đã sẵn sàng để chấm điểm không?';
$string['submissioneditable'] = 'Học viên có thể chỉnh sửa bài nộp này';
$string['submissionempty'] = 'Chưa có bài nào được nộp';
$string['submissionlog'] = 'Học viên: {$a->fullname}, Trạng thái: {$a->status}';
$string['submissionmodified'] = 'Bạn đã có dữ liệu bài nộp. Vui lòng rời khỏi trang này và thử lại.';
$string['submissionmodifiedgroup'] = 'Bài nộp đã bị người khác sửa đổi. Vui lòng rời khỏi trang này và thử lại.';
$string['submissionnotcopiedinvalidstatus'] = 'Bài nộp không được sao chép vì đã bị chỉnh sửa kể từ khi được mở lại.';
$string['submissionnoteditable'] = 'Học viên không thể chỉnh sửa bài nộp này';
$string['submissionnotopen'] = 'Bài tập này chưa mở để nhận bài nộp';
$string['submissionnotready'] = 'Bài tập này chưa sẵn sàng để nộp:';
$string['submissionplugins'] = 'Plugin bài nộp';
$string['submissionreceiptcontains'] = 'Nội dung đã nộp ({$a->total} mục):';
$string['submissionreceipthtml'] = '<p>Bài nộp của bạn cho bài tập \'{$a->assignment}\' đã được gửi.</p>
<p>Bạn có thể xem bài nộp và kiểm tra trạng thái trên <a href="{$a->url}">trang bài tập</a>.</p>
{$a->submissionsummaryhtml}';
$string['submissionreceiptotherhtml'] = 'Bài nộp của bạn cho bài tập \'{$a->assignment}\' đã được gửi. Bạn có thể xem trạng thái <a href="{$a->url}">bài nộp</a> của mình.';
$string['submissionreceiptothersmall'] = 'Bài nộp của bạn cho bài tập {$a->assignment} đã được gửi.';
$string['submissionreceiptothersms'] = 'Bạn đã nộp bài tập \'{$a->assignment}\' trong khóa học \'{$a->coursefullname}\'. Đăng nhập để xem trạng thái bài nộp';
$string['submissionreceiptothertext'] = 'Bài nộp của bạn cho bài tập \'{$a->assignment}\' đã được gửi.

Bạn có thể xem trạng thái bài nộp tại:

    {$a->url}';
$string['submissionreceipts'] = 'Gửi biên nhận bài nộp';
$string['submissionreceiptsmall'] = 'Xác nhận nộp bài tập - {$a->assignment}';
$string['submissionreceiptsms'] = 'Bạn đã nộp \'{$a->assignment}\' trong khóa học \'{$a->coursefullname}\'. Đăng nhập để xem trạng thái bài nộp';
$string['submissionreceipttext'] = 'Bạn đã nộp bài tập \'{$a->assignment}\'.

Bạn có thể xem trạng thái bài nộp tại:

    {$a->url}

{$a->submissionsummarytext}';
$string['submissions'] = 'Bài nộp';
$string['submissionsclosed'] = 'Đã đóng nhận bài nộp';
$string['submissionsettings'] = 'Cài đặt bài nộp';
$string['submissionslocked'] = 'Bài tập này không nhận bài nộp';
$string['submissionslockedshort'] = 'Không cho phép thay đổi bài nộp';
$string['submissionstatement'] = 'Tuyên bố về bài nộp';
$string['submissionstatement_help'] = 'Tuyên bố mà mỗi học viên phải chấp nhận để nộp bài.';
$string['submissionstatementacceptedlog'] = 'Người dùng {$a} đã chấp nhận tuyên bố về bài nộp';
$string['submissionstatementdefault'] = 'Bài nộp này là sản phẩm do chính tôi thực hiện, ngoại trừ những phần tôi đã ghi nhận việc sử dụng tác phẩm của người khác.';
$string['submissionstatementrequired'] = 'Bạn cần đồng ý với tuyên bố này trước khi có thể nộp bài.';
$string['submissionstatementteamsubmission'] = 'Tuyên bố về bài nộp của nhóm';
$string['submissionstatementteamsubmission_help'] = 'Tuyên bố mà mỗi học viên phải chấp nhận để nộp bài của nhóm mình.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Tuyên bố về bài nộp của nhóm khi tất cả thành viên nhóm đều nộp bài';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Tuyên bố mà mỗi học viên phải chấp nhận để nộp bài với tư cách thành viên nhóm.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Bài nộp này là sản phẩm do tôi thực hiện với tư cách thành viên nhóm, ngoại trừ những phần tôi đã ghi nhận việc sử dụng tác phẩm của người khác.';
$string['submissionstatementteamsubmissiondefault'] = 'Bài nộp này là sản phẩm của nhóm tôi, ngoại trừ những phần chúng tôi đã ghi nhận việc sử dụng tác phẩm của người khác.';
$string['submissionstatus'] = 'Trạng thái bài nộp';
$string['submissionstatus_'] = 'Chưa có bài nộp';
$string['submissionstatus_draft'] = 'Bản nháp (chưa nộp)';
$string['submissionstatus_marked'] = 'Đã chấm điểm';
$string['submissionstatus_new'] = 'Chưa có bài nộp';
$string['submissionstatus_reopened'] = 'Đã mở lại';
$string['submissionstatus_submitted'] = 'Đã nộp để chấm điểm';
$string['submissionstatusheading'] = 'Trạng thái bài nộp';
$string['submissionsummary'] = '{$a->status}. Sửa đổi lần cuối vào {$a->timemodified}';
$string['submissionteam'] = 'Nhóm';
$string['submissiontypes'] = 'Loại bài nộp';
$string['submitaction'] = 'Nộp bài';
$string['submitassignment'] = 'Nộp bài tập';
$string['submitassignment_help'] = 'Sau khi nộp bài tập này, bạn sẽ không thể thực hiện thêm bất kỳ thay đổi nào.';
$string['submitforgrading'] = 'Nộp để chấm điểm';
$string['submitted'] = 'Đã nộp';
$string['submittedearly'] = 'Bài tập đã được nộp sớm {$a}';
$string['submittedlate'] = 'Bài tập đã được nộp muộn {$a}';
$string['submittedlateshort'] = 'Muộn {$a}';
$string['submittedovertime'] = 'Bài tập đã được nộp quá giới hạn thời gian {$a}';
$string['submittedundertime'] = 'Bài tập đã được nộp trước giới hạn thời gian {$a}';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Plugin phản hồi';
$string['subplugintype_assignfeedback_plural'] = 'Plugin phản hồi';
$string['subplugintype_assignsubmission'] = 'Plugin bài nộp';
$string['subplugintype_assignsubmission_plural'] = 'Plugin bài nộp';
$string['teamname'] = 'Nhóm: {$a}';
$string['teamsubmission'] = 'Học viên nộp bài theo nhóm';
$string['teamsubmission_help'] = 'Nếu bật, học viên sẽ được chia thành các nhóm dựa trên bộ nhóm mặc định hoặc một nhóm phân nhóm tùy chỉnh. Bài nộp của nhóm sẽ được chia sẻ giữa các thành viên và tất cả thành viên nhóm có thể xem thay đổi của nhau đối với bài nộp. Lưu ý: Bạn không thể thay đổi thiết lập này nếu đã có bài nộp.';
$string['teamsubmissiongroupingid'] = 'Nhóm phân nhóm dành cho các nhóm học viên';
$string['teamsubmissiongroupingid_help'] = 'Đây là nhóm phân nhóm mà bài tập sẽ sử dụng để xác định các nhóm học viên. Nếu không thiết lập, hệ thống sẽ sử dụng bộ nhóm mặc định.';
$string['textinstructions'] = 'Hướng dẫn bài tập';
$string['timelimit'] = 'Giới hạn thời gian';
$string['timelimit_help'] = 'Nếu bật, giới hạn thời gian sẽ được nêu trên trang bài tập và đồng hồ đếm ngược sẽ hiển thị trong khi làm bài.';
$string['timelimitnotenabled'] = 'Chưa bật giới hạn thời gian cho bài tập.';
$string['timelimitpassed'] = 'Đã hết thời gian giới hạn';
$string['timemodified'] = 'Sửa đổi lần cuối';
$string['timeremaining'] = 'Thời gian còn lại';
$string['timeremainingcolon'] = 'Thời gian còn lại: {$a}';
$string['togglezoom'] = 'Phóng to/thu nhỏ vùng';
$string['ungroupedusers'] = 'Thiết lập \'Yêu cầu nhóm nộp bài\' đang bật và một số người dùng không thuộc nhóm nào hoặc thuộc nhiều hơn một nhóm nên không thể nộp bài.';
$string['ungroupedusersoptional'] = 'Thiết lập \'Học viên nộp bài theo nhóm\' đang bật và một số người dùng không thuộc nhóm nào hoặc thuộc nhiều hơn một nhóm. Xin lưu ý rằng những học viên này sẽ nộp bài với tư cách thành viên của \'Nhóm mặc định\'.';
$string['unlimitedattempts'] = 'Không giới hạn';
$string['unlimitedattemptsallowed'] = 'Cho phép số lần làm bài không giới hạn.';
$string['unlimitedpages'] = 'Không giới hạn';
$string['unlocksubmissionforstudent'] = 'Cho phép học viên nộp bài: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Mở khóa bài nộp';
$string['unsavedchanges'] = 'Thay đổi chưa lưu';
$string['unsavedchangesquestion'] = 'Có thay đổi chưa lưu đối với điểm hoặc phản hồi. Bạn có muốn lưu thay đổi và tiếp tục không?';
$string['updategrade'] = 'Cập nhật điểm';
$string['updatetable'] = 'Lưu và cập nhật bảng';
$string['upgradenotimplemented'] = 'Chưa triển khai nâng cấp trong plugin ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Mặc định bài tập của người dùng';
$string['userextensiondate'] = 'Được gia hạn đến: {$a}';
$string['usergrade'] = 'Điểm của người dùng';
$string['useridlistnotcached'] = 'Các thay đổi về điểm CHƯA được lưu vì không thể xác định chúng thuộc về bài nộp nào.';
$string['usermark'] = 'Điểm của người dùng';
$string['useroverrides'] = 'Ghi đè theo người dùng';
$string['useroverridesdeleted'] = 'Đã xóa các ghi đè theo người dùng';
$string['usersnone'] = 'Không có người dùng nào ghi danh vào khóa học này hoặc không người dùng nào có thể truy cập bài tập.';
$string['usersubmissioncannotberemoved'] = 'Không thể xóa bài nộp của {$a}.';
$string['userswhoneedtosubmit'] = 'Người dùng cần nộp bài: {$a}';
$string['validmarkingworkflowstates'] = 'Các trạng thái quy trình chấm điểm hợp lệ';
$string['viewadifferentattempt'] = 'Xem lần làm bài khác';
$string['viewbatchmarkingallocation'] = 'Xem trang thiết lập phân công chấm điểm theo lô.';
$string['viewbatchsetmarkingworkflowstate'] = 'Xem trang thiết lập trạng thái quy trình chấm điểm theo lô.';
$string['viewfeedback'] = 'Xem phản hồi';
$string['viewfeedbackforuser'] = 'Xem phản hồi cho người dùng: {$a}';
$string['viewfull'] = 'Xem toàn bộ';
$string['viewfullgradingpage'] = 'Mở trang chấm điểm đầy đủ để đưa ra phản hồi';
$string['viewgradebook'] = 'Xem sổ điểm';
$string['viewgrader'] = 'Xem Grader';
$string['viewgrading'] = 'Xem tất cả bài nộp';
$string['viewgradingformforstudent'] = 'Xem trang chấm điểm cho học viên: (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Xem trang nộp bài tập của chính mình.';
$string['viewownsubmissionstatus'] = 'Xem trang trạng thái bài nộp của chính mình.';
$string['viewrevealidentitiesconfirm'] = 'Xem trang xác nhận tiết lộ danh tính học viên.';
$string['viewsubmission'] = 'Xem bài nộp';
$string['viewsubmissionforuser'] = 'Xem bài nộp của người dùng: {$a}';
$string['viewsubmissiongradingtable'] = 'Xem bảng chấm điểm bài nộp.';
$string['viewsummary'] = 'Xem tóm tắt';
$string['workflowcontext'] = 'Ngữ cảnh quy trình';
$string['workflowcontext_help_grade'] = 'Áp dụng trạng thái quy trình cho điểm tổng thể của bài nộp.';
$string['workflowcontext_help_mark'] = 'Áp dụng trạng thái quy trình cho điểm của bạn nếu bạn được phân công chấm bài.';
$string['workflowfilter'] = 'Bộ lọc quy trình';
$string['xofy'] = '{$a->x} trên {$a->y}';

// Added for Moodle 5.3.1+ missing strings.
$string['download all submissions'] = 'Tải xuống tất cả bài nộp trong một tệp zip.';
