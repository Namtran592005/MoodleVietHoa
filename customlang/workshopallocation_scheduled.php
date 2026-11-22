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
 * @package    workshopallocation
 * @subpackage scheduled
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Xử lý nền cho việc phân công theo lịch';
$string['currentstatus'] = 'Trạng thái hiện tại';
$string['currentstatusexecution'] = 'Trạng thái';
$string['currentstatusexecution1'] = 'Đã thực hiện vào {$a->datetime}';
$string['currentstatusexecution2'] = 'Sẽ được thực hiện lại vào {$a->datetime}';
$string['currentstatusexecution3'] = 'Sẽ được thực hiện vào {$a->datetime}';
$string['currentstatusexecution4'] = 'Đang chờ thực hiện';
$string['currentstatusnext'] = 'Lần thực hiện tiếp theo';
$string['currentstatusnext_help'] = 'Trong một số trường hợp, việc phân công được lên lịch tự động thực hiện lại ngay cả khi đã được thực hiện. Điều này có thể xảy ra, chẳng hạn như khi hạn nộp bài được gia hạn.';
$string['currentstatusreset'] = 'Đặt lại';
$string['currentstatusreset_help'] = 'Lưu biểu mẫu khi chọn ô này sẽ đặt lại trạng thái hiện tại. Toàn bộ thông tin về lần thực hiện trước sẽ bị xóa để có thể thực hiện phân công lại (nếu đã bật ở trên).';
$string['currentstatusresetinfo'] = 'Chọn ô này rồi lưu biểu mẫu để đặt lại kết quả thực hiện';
$string['currentstatusresult'] = 'Kết quả thực hiện gần đây';
$string['enablescheduled'] = 'Bật phân công theo lịch';
$string['enablescheduledinfo'] = 'Tự động phân công bài nộp khi kết thúc giai đoạn nộp bài';
$string['pluginname'] = 'Phân công theo lịch';
$string['privacy:metadata'] = 'Plugin Phân công theo lịch không lưu trữ dữ liệu cá nhân. Dữ liệu cá nhân thực tế về việc ai sẽ đánh giá bài của ai được lưu trong chính mô-đun Workshop và là cơ sở để xuất thông tin chi tiết về bài đánh giá.';
$string['randomallocationsettings'] = 'Cài đặt phân công';
$string['randomallocationsettings_help'] = 'Các tham số cho phương thức phân công ngẫu nhiên được xác định tại đây. Plugin phân công ngẫu nhiên sẽ sử dụng các tham số này để phân công bài nộp.';
$string['resultdisabled'] = 'Đã tắt phân công theo lịch';
$string['resultenabled'] = 'Đã bật phân công theo lịch';
$string['resultexecuted'] = 'Thành công';
$string['resultfailed'] = 'Không thể tự động phân công bài nộp';
$string['resultfailedconfig'] = 'Cấu hình phân công theo lịch không hợp lệ';
$string['resultfaileddeadline'] = 'Hội thảo chưa xác định hạn nộp bài';
$string['resultfailedphase'] = 'Hội thảo không ở giai đoạn nộp bài';
$string['resultvoid'] = 'Không có bài nộp nào được phân công';
$string['resultvoiddeadline'] = 'Chưa đến thời điểm sau hạn nộp bài';
$string['resultvoidexecuted'] = 'Phân công đã được thực hiện';
$string['scheduledallocationsettings'] = 'Cài đặt phân công theo lịch';
$string['scheduledallocationsettings_help'] = 'Nếu được bật, phương thức phân công theo lịch sẽ tự động phân công bài nộp để đánh giá khi kết thúc giai đoạn nộp bài. Thời điểm kết thúc giai đoạn có thể được xác định trong cài đặt hội thảo \'Hạn nộp bài\'.

Về mặt nội bộ, phương thức phân công ngẫu nhiên sẽ được thực hiện với các tham số đã xác định trong biểu mẫu này. Điều đó có nghĩa là phương thức phân công theo lịch hoạt động như thể giáo viên tự thực hiện phân công ngẫu nhiên vào cuối giai đoạn nộp bài bằng các cài đặt phân công bên dưới.

Lưu ý rằng việc phân công theo lịch sẽ *không* được thực hiện nếu bạn chuyển hội thảo sang giai đoạn đánh giá theo cách thủ công trước hạn nộp bài. Trong trường hợp đó, bạn phải tự phân công bài nộp. Phương thức phân công theo lịch đặc biệt hữu ích khi được sử dụng cùng với tính năng tự động chuyển giai đoạn.';
$string['setup'] = 'Thiết lập phân công theo lịch';
