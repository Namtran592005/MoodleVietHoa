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
 * @package    quiz
 * @subpackage overview
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Hiển thị tất cả các lần làm bài';
$string['allattemptscontributetograde'] = 'Tất cả các lần làm bài đều được tính vào điểm cuối cùng của người dùng.';
$string['allstudents'] = 'Hiển thị tất cả {$a}';
$string['attemptsonly'] = 'Chỉ hiển thị {$a} đã làm bài';
$string['attemptsprepage'] = 'Số lần làm bài hiển thị mỗi trang';
$string['deleteselected'] = 'Xóa các lần làm bài đã chọn';
$string['done'] = 'Xong';
$string['err_failedtodeleteregrades'] = 'Không thể xóa điểm đã tính của các lần làm bài';
$string['err_failedtorecalculateattemptgrades'] = 'Không thể tính lại điểm các lần làm bài';
$string['highlightinggraded'] = 'Lần làm bài của người dùng được tính vào điểm cuối cùng sẽ được tô sáng.';
$string['needed'] = 'Cần thiết';
$string['noattemptsonly'] = 'Chỉ hiển thị / tải xuống {$a} chưa làm bài';
$string['noattemptstoregrade'] = 'Không có lần làm bài nào cần chấm lại';
$string['nogradepermission'] = 'Bạn không có quyền chấm điểm bài kiểm tra này.';
$string['onlyoneattemptallowed'] = 'Mỗi người dùng chỉ được phép làm bài kiểm tra này một lần.';
$string['optallattempts'] = 'tất cả các lần làm bài';
$string['optallstudents'] = 'tất cả {$a} người đã hoặc chưa làm bài kiểm tra';
$string['optattemptsonly'] = '{$a} người đã làm bài kiểm tra';
$string['optnoattemptsonly'] = '{$a} người chưa làm bài kiểm tra';
$string['optonlyregradedattempts'] = 'đã được chấm lại / được đánh dấu là cần chấm lại';
$string['overview'] = 'Điểm';
$string['overviewdownload'] = 'Tải xuống tổng quan';
$string['overviewfilename'] = 'grades';
$string['overviewreport'] = 'Báo cáo điểm';
$string['overviewreportgraph'] = 'Tổng số học viên đạt các khoảng điểm';
$string['overviewreportgraphgroup'] = 'Số học viên trong nhóm \'{$a}\' đạt các khoảng điểm';
$string['pagesize'] = 'Kích thước trang';
$string['pluginname'] = 'Điểm';
$string['preferencespage'] = 'Tùy chọn chỉ áp dụng cho trang này';
$string['preferencessave'] = 'Hiển thị báo cáo';
$string['preferencesuser'] = 'Tùy chọn của bạn cho báo cáo này';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Có hiển thị điểm cho từng vị trí câu hỏi hay không.';
$string['privacy:preference:slotmarks:no'] = 'Điểm không được hiển thị bên cạnh vị trí câu hỏi.';
$string['privacy:preference:slotmarks:yes'] = 'Điểm được hiển thị bên cạnh vị trí câu hỏi.';
$string['regrade'] = 'Chấm điểm lại';
$string['regrade_allattempts'] = 'Tất cả các lần làm bài';
$string['regrade_allquestions'] = 'Tất cả câu hỏi';
$string['regrade_attempts'] = 'Chấm điểm lại các lần làm bài...';
$string['regrade_commitregrade'] = 'Xác nhận chấm điểm lại';
$string['regrade_dryrun'] = 'Chạy thử';
$string['regrade_help'] = 'Chấm điểm lại sẽ tính lại điểm tự động của các lần làm bài, sử dụng phiên bản hiện tại của từng câu hỏi nếu có thể. Chạy thử cho phép bạn xem trước những thay đổi về điểm mà không ảnh hưởng đến các lần làm bài.';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'Lần chạy thử chấm điểm lại gần nhất cho thấy việc chấm lại sẽ thay đổi điểm của {$a->questions} câu hỏi trong {$a->attempts} lần làm bài.';
$string['regrade_regradenow'] = 'Chấm điểm lại ngay';
$string['regrade_selectedattempts'] = 'Các lần làm bài đã chọn';
$string['regrade_selectedquestions'] = 'Các câu hỏi đã chọn';
$string['regradecomplete'] = 'Đã chấm điểm lại xong';
$string['regradedsuccessfullyxofy'] = 'Đã chấm điểm lại xong ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Đang chấm điểm lại';
$string['regradingattemptissue'] = 'Vị trí {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Đang chấm điểm lại lần làm bài ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Không thể chấm lại các câu hỏi sau trong lần làm bài {$a->attemptnum} của {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Đang chấm lại lần làm bài ({$a->done}/{$a->count}) - Lần làm bài {$a->attemptnum} của {$a->name} (id {$a->attemptid})';
$string['show'] = 'Hiển thị / tải xuống';
$string['showattempts'] = 'Chỉ hiển thị / tải xuống các lần làm bài';
$string['showdetailedmarks'] = 'Điểm cho từng câu hỏi';
$string['showinggraded'] = 'Chỉ hiển thị lần làm bài đã được chấm điểm của mỗi người dùng.';
$string['showinggradedandungraded'] = 'Hiển thị các lần làm bài đã và chưa được chấm điểm của mỗi người dùng. Lần làm bài đã được chấm điểm của mỗi người dùng được tô sáng. Phương pháp tính điểm cho bài kiểm tra này là {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' trong nhóm \'{$a->groupname}\\';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' trong nhóm này';
