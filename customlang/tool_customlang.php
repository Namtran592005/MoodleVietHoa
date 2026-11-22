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
 * @subpackage customlang
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Lưu chuỗi vào gói ngôn ngữ';
$string['checkout'] = 'Mở gói ngôn ngữ để chỉnh sửa';
$string['checkoutdone'] = 'Đã tải gói ngôn ngữ';
$string['checkoutinprogress'] = 'Đang tải gói ngôn ngữ';
$string['cliexportfileexists'] = 'Tệp dành cho {$a->lang} đã tồn tại, đang bỏ qua. Nếu muốn ghi đè, hãy thêm tùy chọn --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Không tìm thấy tệp {$a->filepath} cho ngôn ngữ {$a->lang}. Đang bỏ qua tệp này.';
$string['cliexportheading'] = 'Bắt đầu xuất các tệp ngôn ngữ.';
$string['cliexportnofilefoundforlang'] = 'Không tìm thấy tệp nào để xuất. Đang bỏ qua việc xuất ngôn ngữ này.';
$string['cliexportstartexport'] = 'Đang xuất ngôn ngữ {$a}';
$string['cliexportzipdone'] = 'Đã tạo tệp Zip: {$a}';
$string['cliexportzipfail'] = 'Không thể tạo tệp zip {$a}';
$string['clifiles'] = 'Các tệp cần nhập vào {$a}';
$string['cliimporting'] = 'Nhập tệp chuỗi (chế độ {$a})';
$string['climissingfiles'] = 'Thiếu các tệp hợp lệ';
$string['climissinglang'] = 'Thiếu ngôn ngữ';
$string['climissingmode'] = 'Thiếu hoặc chế độ không hợp lệ (các giá trị hợp lệ là all, new hoặc update)';
$string['climissingsource'] = 'Thiếu tệp hoặc thư mục';
$string['clinolog'] = 'Không có gì để nhập vào {$a}';
$string['confirmcheckin'] = 'Bạn sắp lưu các sửa đổi vào gói ngôn ngữ cục bộ. Thao tác này sẽ xuất các chuỗi đã tùy chỉnh từ trình dịch vào thư mục dữ liệu của trang web và trang web sẽ bắt đầu sử dụng các chuỗi đã sửa đổi. Nhấn \'Tiếp tục\' để lưu.';
$string['customlang:edit'] = 'Chỉnh sửa bản dịch cục bộ';
$string['customlang:export'] = 'Xuất bản dịch cục bộ';
$string['customlang:view'] = 'Xem bản dịch cục bộ';
$string['editlangpack'] = 'Chỉnh sửa gói ngôn ngữ';
$string['export'] = 'Xuất các chuỗi tùy chỉnh';
$string['exportfilter'] = 'Chọn (các) thành phần để xuất';
$string['filter'] = 'Lọc chuỗi';
$string['filtercomponent'] = 'Hiển thị chuỗi của các thành phần này';
$string['filtercustomized'] = 'Chỉ bản đã tùy chỉnh';
$string['filtermodified'] = 'Chỉ bản đã sửa đổi trong phiên này';
$string['filteronlyhelps'] = 'Chỉ trợ giúp';
$string['filtershowstrings'] = 'Hiển thị chuỗi';
$string['filterstringid'] = 'Mã định danh chuỗi';
$string['filtersubstring'] = 'Chỉ các chuỗi có chứa';
$string['headingcomponent'] = 'Thành phần';
$string['headinglocal'] = 'Tùy chỉnh cục bộ';
$string['headingstandard'] = 'Văn bản tiêu chuẩn';
$string['headingstringid'] = 'Chuỗi';
$string['import'] = 'Nhập các chuỗi tùy chỉnh';
$string['import_all'] = 'Tạo hoặc cập nhật tất cả chuỗi từ (các) thành phần';
$string['import_mode'] = 'Chế độ nhập';
$string['import_new'] = 'Chỉ tạo các chuỗi chưa được tùy chỉnh cục bộ';
$string['import_update'] = 'Chỉ cập nhật các chuỗi đã được tùy chỉnh cục bộ';
$string['importfile'] = 'Nhập tệp';
$string['langpack'] = '(Các) thành phần ngôn ngữ';
$string['markinguptodate'] = 'Đánh dấu bản tùy chỉnh là đã cập nhật';
$string['markinguptodate_help'] = 'Bản dịch tùy chỉnh có thể trở nên lỗi thời nếu bản gốc tiếng Anh hoặc bản dịch chính đã được sửa đổi kể từ khi chuỗi được tùy chỉnh trên trang web của bạn. Hãy xem lại bản dịch tùy chỉnh. Nếu thấy bản dịch vẫn cập nhật, hãy chọn hộp kiểm. Nếu không, hãy chỉnh sửa bản dịch.';
$string['markuptodate'] = 'đánh dấu là đã cập nhật';
$string['modifiedno'] = 'Không có chuỗi nào được sửa đổi để lưu.';
$string['modifiednum'] = 'Có {$a} chuỗi đã sửa đổi. Bạn có muốn lưu các thay đổi này vào gói ngôn ngữ cục bộ không?';
$string['nolocallang'] = 'Không tìm thấy chuỗi cục bộ.';
$string['nostringsfound'] = 'Không tìm thấy chuỗi nào, vui lòng thay đổi cài đặt bộ lọc';
$string['notice_ignorenew'] = 'Đang bỏ qua chuỗi {$a->component}/{$a->stringid} vì chuỗi này chưa được tùy chỉnh.';
$string['notice_ignoreupdate'] = 'Đang bỏ qua chuỗi {$a->component}/{$a->stringid} vì chuỗi này đã được xác định.';
$string['notice_inexitentstring'] = 'Không tìm thấy chuỗi {$a->component}/{$a->stringid}.';
$string['notice_missingcomponent'] = 'Thiếu thành phần {$a->component}.';
$string['notice_success'] = 'Đã cập nhật thành công chuỗi {$a->component}/{$a->stringid}.';
$string['placeholder'] = 'Placeholder';
$string['placeholder_help'] = 'Placeholder là các câu lệnh đặc biệt như `{$a}` hoặc `{$a->something}` trong chuỗi. Chúng sẽ được thay thế bằng một giá trị khi chuỗi thực sự được hiển thị.

Điều quan trọng là phải sao chép chính xác như trong chuỗi gốc. Không dịch hoặc thay đổi hướng từ trái sang phải của chúng.';
$string['placeholderwarning'] = 'chuỗi chứa placeholder';
$string['pluginname'] = 'Tùy chỉnh ngôn ngữ';
$string['privacy:metadata'] = 'Plugin Tùy chỉnh ngôn ngữ không lưu trữ dữ liệu cá nhân nào.';
$string['savecheckin'] = 'Lưu thay đổi vào gói ngôn ngữ';
$string['savecontinue'] = 'Áp dụng thay đổi và tiếp tục chỉnh sửa';
