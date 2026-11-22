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
 * @package    tool
 * @subpackage task
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Thao tác';
$string['adhoc'] = 'Đột xuất';
$string['adhocempty'] = 'Hàng đợi tác vụ đột xuất trống';
$string['adhocqueueold'] = 'Tác vụ chưa xử lý cũ nhất đã tồn tại {$a->age}, lâu hơn {$a->max}';
$string['adhocqueuesize'] = 'Hàng đợi tác vụ đột xuất có {$a} tác vụ';
$string['adhoctaskid'] = 'ID tác vụ đột xuất: {$a}';
$string['adhoctaskrun'] = 'Đã bắt đầu chạy tác vụ đột xuất';
$string['adhoctasks'] = 'Tác vụ đột xuất';
$string['adhoctasksdue'] = 'Tác vụ đột xuất đến hạn';
$string['adhoctasksfailed'] = 'Tác vụ đột xuất thất bại';
$string['adhoctasksfuture'] = 'Tác vụ đột xuất trong tương lai';
$string['adhoctasksrunning'] = 'Tác vụ đột xuất đang chạy';
$string['asap'] = '<abbr title="Sớm nhất có thể">ASAP</abbr>';
$string['backtoadhoctasks'] = 'Quay lại các tác vụ đột xuất';
$string['backtoscheduledtasks'] = 'Quay lại các tác vụ đã lên lịch';
$string['blocking'] = 'Đang chặn';
$string['cannotfindthepathtothecli'] = 'Không tìm thấy đường dẫn đến tệp thực thi PHP CLI nên đã hủy chạy tác vụ. Hãy đặt cài đặt \'Đường dẫn đến PHP CLI\' trong Quản trị trang / Máy chủ / Đường dẫn hệ thống.';
$string['checkadhocqueue'] = 'Hàng đợi tác vụ đột xuất';
$string['checkcronrunning'] = 'Cron đang chạy';
$string['checklongrunningtaskcount'] = 'Tác vụ chạy lâu: {$a}';
$string['checklongrunningtasks'] = 'Tác vụ chạy lâu';
$string['checkmaxfaildelay'] = 'Độ trễ thất bại tối đa của tác vụ';
$string['classname'] = 'Tên lớp';
$string['clearfaildelay_confirm'] = 'Bạn có chắc chắn muốn xóa độ trễ thất bại của tác vụ \'{$a}\' không? Sau khi xóa độ trễ, tác vụ sẽ chạy theo lịch trình bình thường.';
$string['component'] = 'Thành phần';
$string['confirmdeletetaskwithid'] = 'Bạn có chắc chắn muốn xóa tác vụ có ID {$a->id} không?';
$string['corecomponent'] = 'Lõi';
$string['crondisabled'] = 'Cron đã bị tắt. Không có tác vụ mới nào được bắt đầu. Hệ thống sẽ không hoạt động đúng cho đến khi Cron được bật lại.';
$string['cronok'] = 'Cron đang chạy thường xuyên';
$string['default'] = 'Mặc định';
$string['defaultx'] = 'Mặc định: {$a}';
$string['deleteadhoctask'] = 'Xóa tác vụ tùy biến {$a}';
$string['disabled'] = 'Đã tắt';
$string['disabled_help'] = 'Các tác vụ theo lịch đã tắt sẽ không được thực thi bằng cron, nhưng vẫn có thể được thực thi thủ công qua công cụ Giao diện dòng lệnh (CLI).';
$string['edittaskschedule'] = 'Chỉnh sửa lịch tác vụ: {$a}';
$string['enablerunnow'] = 'Cho phép \'Chạy ngay\' đối với các tác vụ theo lịch';
$string['enablerunnow_desc'] = 'Cho phép quản trị viên chạy ngay một tác vụ theo lịch thay vì chờ tác vụ chạy theo lịch. Tính năng này yêu cầu phải thiết lập \'Đường dẫn đến PHP CLI\' (pathtophp) trong Đường dẫn hệ thống. Tác vụ chạy trên máy chủ web, vì vậy bạn có thể muốn tắt tính năng này để tránh các vấn đề hiệu suất tiềm ẩn.';
$string['faildelay'] = 'Độ trễ khi thất bại';
$string['failed'] = 'Thất bại';
$string['fromcomponent'] = 'Từ component: {$a}';
$string['hostname'] = 'Tên máy chủ';
$string['lastcronstart'] = 'Thời gian kể từ lần chạy cron gần nhất: {$a}';
$string['lastruntime'] = 'Lần chạy gần nhất';
$string['lastupdated'] = 'Cập nhật lần cuối {$a}.';
$string['nextruntime'] = 'Lần chạy tiếp theo';
$string['noclassname'] = 'Chưa chỉ định tên lớp';
$string['notasks'] = 'Không có tác vụ nào để chạy';
$string['payload'] = 'Dữ liệu tải trọng';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin đã tắt';
$string['pluginname'] = 'Cấu hình tác vụ theo lịch';
$string['privacy:metadata'] = 'Plugin Cấu hình tác vụ theo lịch không lưu trữ dữ liệu cá nhân nào.';
$string['resettasktodefaults'] = 'Đặt lại lịch tác vụ về mặc định';
$string['resettasktodefaults_help'] = 'Thao tác này sẽ loại bỏ mọi thay đổi cục bộ và khôi phục lịch tác vụ về cài đặt ban đầu.';
$string['run_adhoctasks'] = 'Chạy các tác vụ tùy biến';
$string['runadhoc'] = 'Chạy các tác vụ tùy biến ngay bây giờ?';
$string['runadhoc_confirm'] = 'Các tác vụ sẽ chạy trên máy chủ web và có thể mất một khoảng thời gian để hoàn tất.';
$string['runadhoctask'] = 'Chạy tác vụ \'{$a->task}\' có ID {$a->taskid}';
$string['runadhoctasks'] = 'Chạy tất cả tác vụ \'{$a}\\';
$string['runadhoctasksfailed'] = 'Chạy các tác vụ \'{$a}\' đã thất bại';
$string['runagain'] = 'Chạy lại';
$string['runasap'] = 'Chạy sớm nhất có thể';
$string['runasap_confirm'] = 'Bạn có chắc muốn chạy tác vụ \'{$a}\' sớm nhất có thể không? Tác vụ sẽ chạy qua cron vào thời điểm sớm nhất có thể.';
$string['runasaperrorrunning'] = 'Tác vụ \'{$a}\' đang chạy và không thể được lên lịch chạy sớm nhất có thể.';
$string['runasapsuccess'] = 'Tác vụ \'{$a}\' đã được lên lịch chạy sớm nhất có thể.';
$string['runclassname'] = 'Chạy tất cả';
$string['runclassnamedueonly'] = 'Chỉ chạy các tác vụ đến hạn';
$string['runclassnamefailedonly'] = 'Chạy tất cả tác vụ đã thất bại';
$string['running'] = 'Đang chạy';
$string['runningalltasks'] = 'Đang chạy tất cả tác vụ';
$string['runningfailedtasks'] = 'Đang chạy các tác vụ đã thất bại';
$string['runningtasks'] = 'Các tác vụ đang chạy';
$string['runnow'] = 'Chạy ngay';
$string['runnow_confirm'] = 'Bạn có chắc muốn chạy tác vụ \'{$a}\' ngay bây giờ không? Tác vụ sẽ chạy trên máy chủ web và có thể mất một khoảng thời gian để hoàn tất.';
$string['runpattern'] = 'Mẫu chạy';
$string['scheduled'] = 'Đã lên lịch';
$string['scheduledtaskchangesdisabled'] = 'Cấu hình Moodle đã ngăn việc sửa đổi danh sách tác vụ theo lịch';
$string['scheduledtasks'] = 'Các tác vụ theo lịch';
$string['showall'] = 'Hiển thị tất cả';
$string['showfailedonly'] = 'Chỉ hiển thị các tác vụ đã thất bại';
$string['showsummary'] = 'Hiển thị tóm tắt các tác vụ tùy biến';
$string['slowtask'] = 'Tác vụ đã chạy lâu hơn {$a}';
$string['started'] = 'Đã bắt đầu';
$string['taskage'] = 'Thời gian chạy';
$string['taskdetails'] = 'Các tác vụ đã chạy lâu hơn {$a->time} (tối đa {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = 'Tác vụ đã tắt';
$string['taskfailures'] = '{$a} tác vụ bị lỗi';
$string['taskid'] = 'ID tác vụ';
$string['tasklogs'] = 'Nhật ký tác vụ';
$string['tasknofailures'] = 'Không có tác vụ nào bị lỗi';
$string['taskrunningtime'] = 'Tác vụ đã chạy trong {$a}';
$string['taskscheduleday'] = 'Ngày';
$string['taskscheduleday_help'] = 'Trường ngày trong tháng của lịch tác vụ. Trường này sử dụng cùng định dạng với cron của Unix. Một số ví dụ:

* <strong>*</strong> Mỗi ngày
* <strong>*/2</strong> Cách ngày
* <strong>1</strong> Ngày đầu tiên mỗi tháng
* <strong>1,15</strong> Ngày đầu tiên và ngày 15 mỗi tháng';
$string['taskscheduledayofweek'] = 'Ngày trong tuần';
$string['taskscheduledayofweek_help'] = 'Trường ngày trong tuần của lịch tác vụ. Trường này sử dụng cùng định dạng với cron của Unix. Một số ví dụ:

* <strong>*</strong> Mỗi ngày
* <strong>0</strong> Chủ nhật hàng tuần
* <strong>6</strong> Thứ bảy hàng tuần
* <strong>1,5</strong> Thứ hai và thứ sáu hàng tuần';
$string['taskschedulehour'] = 'Giờ';
$string['taskschedulehour_help'] = 'Trường giờ của lịch tác vụ. Trường này sử dụng cùng định dạng với cron của Unix. Một số ví dụ:

* <strong>*</strong> Mỗi giờ
* <strong>*/2</strong> Cách mỗi 2 giờ
* <strong>2-10</strong> Mỗi giờ từ 2 giờ sáng đến 10 giờ sáng (bao gồm cả hai mốc)
* <strong>2,6,9</strong> 2 giờ sáng, 6 giờ sáng và 9 giờ sáng';
$string['taskscheduleminute'] = 'Phút';
$string['taskscheduleminute_help'] = 'Trường phút của lịch tác vụ. Trường này sử dụng cùng định dạng với cron của Unix. Một số ví dụ:

* <strong>*</strong> Mỗi phút
* <strong>*/5</strong> Cách mỗi 5 phút
* <strong>2-10</strong> Mỗi phút từ phút thứ 2 đến phút thứ 10 của giờ (bao gồm cả hai mốc)
* <strong>2,6,9</strong> Phút thứ 2, 6 và 9 của giờ';
$string['taskschedulemonth'] = 'Tháng';
$string['taskschedulemonth_help'] = 'Trường tháng của lịch tác vụ. Trường này sử dụng cùng định dạng với cron của Unix. Một số ví dụ:

* <strong>*</strong> Mỗi tháng
* <strong>*/2</strong> Cách tháng
* <strong>1</strong> Tháng 1 hàng năm
* <strong>1,5</strong> Tháng 1 và tháng 5 hàng năm';
$string['viewlogs'] = 'Xem nhật ký của {$a}';
