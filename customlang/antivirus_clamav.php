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
 * @package    antivirus
 * @subpackage clamav
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Hiện tại có sự cố khi quét bằng AntiVirus. Tệp {$a->item} của bạn chưa được tải lên. Vui lòng thử lại sau.';
$string['clamfailed'] = 'ClamAV không chạy được. Thông báo lỗi trả về là "{$a}". Đây là kết quả từ ClamAV:';
$string['clamfailureonupload'] = 'Khi ClamAV gặp lỗi';
$string['configclamactlikevirus'] = 'Xử lý tệp như vi-rút';
$string['configclamdonothing'] = 'Xử lý tệp như an toàn';
$string['configclamfailureonupload'] = 'Nếu chọn \'Xử lý tệp như an toàn\', các tệp sẽ được chuyển đến thư mục đích. Nếu chọn \'Từ chối tải lên, thử lại\', người dùng sẽ được nhắc thử lại sau. Nếu chọn \'Xử lý tệp như vi-rút\', các tệp sẽ được chuyển vào khu vực cách ly hoặc bị xóa. Cảnh báo: Với tùy chọn này, nếu vì lý do nào đó clam không chạy được (thường do pathtoclam không hợp lệ), TẤT CẢ tệp đã tải lên sẽ được chuyển vào khu vực cách ly đã chỉ định hoặc bị xóa.';
$string['configclamtryagain'] = 'Từ chối tải lên, thử lại';
$string['errorcantopensocket'] = 'Kết nối tới Unix domain socket gặp lỗi {$a}';
$string['errorclamavnoresponse'] = 'ClamAV không phản hồi; hãy kiểm tra trạng thái đang chạy của daemon.';
$string['errornounixsocketssupported'] = 'Hệ thống này không hỗ trợ truyền tải qua Unix domain socket. Vui lòng sử dụng tùy chọn dòng lệnh.';
$string['invalidpathtoclam'] = 'Đường dẫn đến ClamAV, {$a}, không hợp lệ.';
$string['pathtoclam'] = 'Dòng lệnh';
$string['pathtoclamdesc'] = 'Nếu phương thức chạy được đặt là "dòng lệnh", hãy nhập đường dẫn đến ClamAV tại đây. Trên Linux, đường dẫn này sẽ là /usr/bin/clamscan hoặc /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Unix domain socket';
$string['pathtounixsocketdesc'] = 'Nếu phương thức chạy được đặt là "Unix domain socket", hãy nhập đường dẫn đến Unix socket của ClamAV tại đây. Trên Debian Linux, đường dẫn này sẽ là /var/run/clamav/clamd.ctl. Hãy đảm bảo daemon clamav có quyền đọc các tệp đã tải lên; cách dễ nhất để thực hiện việc này là thêm người dùng \'clamav\' vào nhóm máy chủ web (\'www-data\' trên Debian Linux).';
$string['pluginname'] = 'Phần mềm diệt vi-rút ClamAV';
$string['privacy:metadata'] = 'Plugin diệt vi-rút ClamAV không lưu trữ dữ liệu cá nhân.';
$string['quarantinedir'] = 'Thư mục cách ly';
$string['runningmethod'] = 'Phương thức chạy';
$string['runningmethodcommandline'] = 'Dòng lệnh';
$string['runningmethoddesc'] = 'Phương thức chạy ClamAV. Mặc định sử dụng dòng lệnh, tuy nhiên trên hệ thống Unix có thể đạt hiệu suất tốt hơn bằng cách sử dụng system socket.';
$string['runningmethodtcpsocket'] = 'TCP socket';
$string['runningmethodunixsocket'] = 'Unix domain socket';
$string['tcpsockethost'] = 'Tên máy chủ TCP socket';
$string['tcpsockethostdesc'] = 'Tên miền của máy chủ ClamAV';
$string['tcpsocketport'] = 'Cổng TCP socket';
$string['tcpsocketportdesc'] = 'Cổng sử dụng khi kết nối với ClamAV';
$string['tries'] = 'Số lần quét thử';
$string['tries_desc'] = 'Số lần ClamAV thử quét khi xảy ra lỗi trong quá trình quét.';
$string['tries_notice'] = 'Clamav đã thử quét {$a->tries} lần.
{$a->notice}';
$string['unknownerror'] = 'Đã xảy ra lỗi không xác định với ClamAV.';
