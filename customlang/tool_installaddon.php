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
 * @subpackage installaddon
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Xác nhận';
$string['acknowledgementtext'] = 'Tôi hiểu rằng tôi có trách nhiệm sao lưu đầy đủ trang web này trước khi cài đặt các plugin bổ sung. Tôi chấp nhận và hiểu rằng plugin (đặc biệt là, nhưng không chỉ giới hạn ở, plugin có nguồn gốc từ các nguồn không chính thức) có thể chứa lỗ hổng bảo mật, khiến trang web không khả dụng hoặc gây rò rỉ hay mất dữ liệu riêng tư.';
$string['activitychooserfootertext'] = 'Duyệt thêm hoạt động tại';
$string['featuredisabled'] = 'Trình cài đặt plugin đã bị vô hiệu hóa trên trang web này.';
$string['installaddon'] = 'Cài đặt plugin!';
$string['installaddons'] = 'Cài đặt plugin';
$string['installfromrepo'] = 'Cài đặt plugin từ thư mục plugin Moodle';
$string['installfromrepo_help'] = 'Bạn sẽ được chuyển hướng đến thư mục plugin Moodle để tìm kiếm và cài đặt plugin. Lưu ý rằng tên đầy đủ, URL và phiên bản Moodle của trang web cũng sẽ được gửi đi để giúp quá trình cài đặt dễ dàng hơn.';
$string['installfromzip'] = 'Cài đặt plugin từ tệp ZIP';
$string['installfromzip_help'] = 'Tải lên gói ZIP của plugin để cài đặt trên trang web. Gói ZIP phải có cấu trúc giống như gói plugin được tải xuống từ Moodle Marketplace.';
$string['installfromzipfile'] = 'Gói ZIP';
$string['installfromzipfile_help'] = 'Gói ZIP của plugin chỉ được chứa một thư mục, có tên trùng với tên plugin. Tệp ZIP sẽ được giải nén vào vị trí thích hợp với loại plugin đó. Nếu gói được tải xuống từ Moodle Marketplace thì gói sẽ có cấu trúc này.';
$string['installfromzipinvalid'] = 'Gói ZIP của plugin chỉ được chứa một thư mục có tên trùng với tên plugin. Tệp được cung cấp không phải là gói ZIP plugin hợp lệ.';
$string['installfromziprootdir'] = 'Đổi tên thư mục gốc';
$string['installfromziprootdir_help'] = 'Một số gói ZIP, chẳng hạn như gói do Github tạo, có thể chứa tên thư mục gốc không chính xác. Nếu vậy, bạn có thể nhập tên chính xác tại đây.';
$string['installfromzipsubmit'] = 'Cài đặt plugin từ tệp ZIP';
$string['installfromziptype'] = 'Loại plugin';
$string['installfromziptype_help'] = 'Đối với các plugin khai báo chính xác tên component, trình cài đặt có thể tự động phát hiện loại plugin. Nếu tính năng tự động phát hiện không thành công, hãy chọn thủ công loại plugin chính xác. Cảnh báo: Quy trình cài đặt có thể thất bại nghiêm trọng nếu chỉ định sai loại plugin.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['marketplaceadminlinktext'] = 'Duyệt plugin mới';
$string['marketplacefindplugins'] = 'Tìm plugin trên Moodle Marketplace';
$string['marketplacefindpluginsintro'] = 'Để cài đặt plugin, hãy tải tệp ZIP của plugin từ Moodle Marketplace, sau đó quay lại đây để tải tệp lên.';
$string['marketplacelink'] = 'Moodle Marketplace';
$string['permcheck'] = 'Đảm bảo rằng tiến trình máy chủ web có quyền ghi vào vị trí gốc của loại plugin.';
$string['permcheckerror'] = 'Lỗi khi kiểm tra quyền ghi';
$string['permcheckprogress'] = 'Đang kiểm tra quyền ghi ...';
$string['permcheckrepeat'] = 'Kiểm tra lại';
$string['permcheckresultno'] = 'Vị trí loại plugin <em>{$a->path}</em> không có quyền ghi';
$string['permcheckresultyes'] = 'Vị trí loại plugin <em>{$a->path}</em> có quyền ghi';
$string['pluginname'] = 'Trình cài đặt plugin';
$string['privacy:metadata'] = 'Plugin trình cài đặt plugin không lưu trữ dữ liệu cá nhân.';
$string['remoterequestalreadyinstalled'] = 'Có yêu cầu cài đặt plugin {$a->name} ({$a->component}) phiên bản {$a->version} từ thư mục plugin Moodle trên trang web này. Tuy nhiên, plugin này <strong>đã được cài đặt</strong> trên trang web.';
$string['remoterequestconfirm'] = 'Có yêu cầu cài đặt plugin <strong>{$a->name}</strong> ({$a->component}) phiên bản {$a->version} từ thư mục plugin Moodle trên trang web này. Nếu tiếp tục, gói ZIP của plugin sẽ được tải xuống để xác thực. Hiện chưa có gì được cài đặt.';
$string['remoterequestinvalid'] = 'Có yêu cầu cài đặt plugin từ thư mục plugin Moodle trên trang web này. Rất tiếc, yêu cầu không hợp lệ nên không thể cài đặt plugin.';
$string['remoterequestnoninstallable'] = 'Có yêu cầu cài đặt plugin {$a->name} ({$a->component}) phiên bản {$a->version} từ thư mục plugin Moodle trên trang web này. Tuy nhiên, bước kiểm tra trước khi cài đặt plugin không thành công (mã lý do: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Có yêu cầu cài đặt plugin {$a->name} ({$a->component}) phiên bản {$a->version} từ thư mục plugin Moodle trên trang web này. Tuy nhiên, vị trí <strong>{$a->typepath}</strong> <strong>không có quyền ghi</strong>. Bạn cần cấp quyền ghi cho người dùng máy chủ web tại vị trí này, sau đó nhấn nút tiếp tục để kiểm tra lại.';
$string['remoterequestpluginfoexception'] = 'Rất tiếc... Đã xảy ra lỗi khi cố lấy thông tin về plugin {$a->name} ({$a->component}) phiên bản {$a->version}. Không thể cài đặt plugin. Bật chế độ gỡ lỗi để xem chi tiết lỗi.';
$string['seedocumentation'] = 'Xem tài liệu';
$string['typedetectionfailed'] = 'Không thể phát hiện loại plugin. Vui lòng chọn loại plugin theo cách thủ công.';
$string['typedetectionmismatch'] = 'Loại plugin đã chọn không khớp với loại được plugin khai báo: {$a}';
