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
 * @subpackage portfolio
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Xử lý lần xuất đang hoạt động';
$string['activeportfolios'] = 'Các hồ sơ năng lực hiện có';
$string['addalltoportfolio'] = 'Xuất tất cả sang hồ sơ năng lực';
$string['addnewportfolio'] = 'Thêm hồ sơ năng lực mới';
$string['addtoportfolio'] = 'Xuất sang hồ sơ năng lực';
$string['alreadyalt'] = 'Đang xuất - vui lòng nhấp vào đây để xử lý việc chuyển này';
$string['alreadyexporting'] = 'Bạn đang có một lần xuất hồ sơ năng lực đang hoạt động trong phiên này. Trước khi tiếp tục, bạn phải hoàn tất hoặc hủy lần xuất này. Bạn có muốn tiếp tục không? (Chọn Không để hủy)';
$string['availableformats'] = 'Các định dạng xuất hiện có';
$string['callbackclassinvalid'] = 'Lớp callback được chỉ định không hợp lệ hoặc không thuộc hệ phân cấp portfolio_caller';
$string['callercouldnotpackage'] = 'Không thể đóng gói dữ liệu của bạn để xuất: lỗi ban đầu là {$a}';
$string['cannotsetvisible'] = 'Không thể đặt thành hiển thị - plugin đã bị tắt hoàn toàn do cấu hình sai';
$string['commonportfoliosettings'] = 'Cài đặt hồ sơ năng lực chung';
$string['commonsettingsdesc'] = '<p>Việc xác định một lần chuyển dữ liệu mất thời gian \'Trung bình\' hay \'Nhiều\' sẽ quyết định người dùng có thể chờ cho đến khi quá trình chuyển hoàn tất hay không.</p><p>Các kích thước đến ngưỡng \'Trung bình\' được xử lý ngay mà không cần hỏi người dùng; với các lần chuyển \'Trung bình\' và \'Nhiều\', người dùng sẽ được lựa chọn nhưng được cảnh báo rằng quá trình có thể mất một lúc.</p><p>Ngoài ra, một số plugin hồ sơ năng lực có thể hoàn toàn bỏ qua tùy chọn này và buộc tất cả các lần chuyển phải được đưa vào hàng đợi.</p>';
$string['configexport'] = 'Cấu hình dữ liệu đã xuất';
$string['configplugin'] = 'Cấu hình plugin hồ sơ năng lực';
$string['configure'] = 'Cấu hình';
$string['confirmcancel'] = 'Bạn có chắc chắn muốn hủy lần xuất này không?';
$string['confirmexport'] = 'Vui lòng xác nhận lần xuất này';
$string['confirmsummary'] = 'Tóm tắt lần xuất của bạn';
$string['continuetoportfolio'] = 'Tiếp tục đến danh mục hồ sơ của bạn';
$string['deleteportfolio'] = 'Xóa phiên bản danh mục hồ sơ';
$string['destination'] = 'Đích đến';
$string['disabled'] = 'Rất tiếc, chức năng xuất sang danh mục hồ sơ chưa được bật trên trang này';
$string['disabledinstance'] = 'Đã tắt';
$string['displayarea'] = 'Khu vực xuất';
$string['displayexpiry'] = 'Thời hạn chuyển';
$string['displayinfo'] = 'Thông tin xuất';
$string['dontwait'] = 'Không chờ';
$string['enabled'] = 'Bật danh mục hồ sơ';
$string['enableddesc'] = 'Nếu được bật, người dùng có thể xuất nội dung, chẳng hạn như bài đăng diễn đàn và bài nộp bài tập, sang danh mục hồ sơ bên ngoài hoặc trang HTML.';
$string['err_uniquename'] = 'Tên danh mục hồ sơ phải là duy nhất (trong từng plugin)';
$string['exportalreadyfinished'] = 'Đã xuất danh mục hồ sơ!';
$string['exportalreadyfinisheddesc'] = 'Đã xuất danh mục hồ sơ!';
$string['exportcomplete'] = 'Đã xuất danh mục hồ sơ!';
$string['exportedpreviously'] = 'Các lần xuất trước đây';
$string['exportexceptionnoexporter'] = 'Đã phát sinh portfolio_export_exception với phiên hoạt động nhưng không có đối tượng exporter';
$string['exportexpired'] = 'Đã hết hạn xuất danh mục hồ sơ';
$string['exportexpireddesc'] = 'Bạn đã thử xuất lại một số thông tin hoặc bắt đầu một lần xuất trống. Để thực hiện đúng, hãy quay lại vị trí ban đầu và bắt đầu lại. Điều này đôi khi xảy ra nếu bạn dùng nút quay lại sau khi quá trình xuất hoàn tất hoặc đánh dấu trang một URL không hợp lệ.';
$string['exporting'] = 'Đang xuất sang danh mục hồ sơ';
$string['exportingcontentfrom'] = 'Đang xuất nội dung từ {$a}';
$string['exportingcontentto'] = 'Đang xuất nội dung sang {$a}';
$string['exportqueued'] = 'Đã đưa yêu cầu xuất danh mục hồ sơ vào hàng đợi chuyển thành công';
$string['exportqueuedforced'] = 'Đã đưa yêu cầu xuất danh mục hồ sơ vào hàng đợi chuyển thành công (hệ thống từ xa bắt buộc chuyển theo hàng đợi)';
$string['failedtopackage'] = 'Không tìm thấy tệp để đóng gói';
$string['failedtosendpackage'] = 'Không gửi được dữ liệu của bạn đến hệ thống danh mục hồ sơ đã chọn: lỗi ban đầu là {$a}';
$string['filedenied'] = 'Không được phép truy cập tệp này';
$string['filenotfound'] = 'Không tìm thấy tệp';
$string['fileoutputnotsupported'] = 'Không hỗ trợ viết lại đầu ra tệp cho định dạng này';
$string['format_document'] = 'Tài liệu';
$string['format_file'] = 'Tệp';
$string['format_image'] = 'Hình ảnh';
$string['format_leap2a'] = 'Định dạng danh mục hồ sơ Leap2A';
$string['format_mbkp'] = 'Định dạng bản sao lưu Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Bản trình chiếu';
$string['format_richhtml'] = 'HTML kèm tệp đính kèm';
$string['format_spreadsheet'] = 'Bảng tính';
$string['format_text'] = 'Văn bản thuần';
$string['format_video'] = 'Video';
$string['highdbsizethreshold'] = 'Kích thước cơ sở dữ liệu lớn khi chuyển';
$string['highdbsizethresholddesc'] = 'Số bản ghi cơ sở dữ liệu vượt quá mức này được xem là cần nhiều thời gian để chuyển';
$string['highfilesizethreshold'] = 'Kích thước tệp lớn khi chuyển';
$string['highfilesizethresholddesc'] = 'Kích thước tệp vượt quá mức này được xem là cần nhiều thời gian để chuyển';
$string['insanebody'] = 'Xin chào! Bạn nhận được thông báo này với tư cách quản trị viên của {$a->sitename}.

Một số phiên bản plugin danh mục hồ sơ đã tự động bị tắt do cấu hình sai. Điều này có nghĩa là hiện người dùng không thể xuất nội dung sang các danh mục hồ sơ này.

Danh sách các phiên bản plugin danh mục hồ sơ đã bị tắt:

{$a->textlist}

Bạn nên khắc phục vấn đề này càng sớm càng tốt bằng cách truy cập {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Xin chào! Bạn nhận được thông báo này với tư cách quản trị viên của {$a->sitename}.</p>
<p>Một số phiên bản plugin danh mục hồ sơ đã tự động bị tắt do cấu hình sai. Điều này có nghĩa là hiện người dùng không thể xuất nội dung sang các danh mục hồ sơ này.</p>
<p>Danh sách các phiên bản plugin danh mục hồ sơ đã bị tắt:</p>
{$a->htmllist}
<p>Bạn nên khắc phục vấn đề này càng sớm càng tốt bằng cách truy cập <a href="{$a->fixurl}">các trang cấu hình danh mục hồ sơ</a></p>';
$string['insanebodysmall'] = 'Xin chào! Bạn nhận được thông báo này với tư cách quản trị viên của {$a->sitename}. Một số phiên bản plugin danh mục hồ sơ đã tự động bị tắt do cấu hình sai. Điều này có nghĩa là hiện người dùng không thể xuất nội dung sang các danh mục hồ sơ này. Bạn nên khắc phục vấn đề này càng sớm càng tốt bằng cách truy cập {$a->fixurl}.';
$string['insanesubject'] = 'Một số phiên bản danh mục hồ sơ đã tự động bị tắt';
$string['instancedeleted'] = 'Đã xóa danh mục hồ sơ thành công';
$string['instanceismisconfigured'] = 'Phiên bản danh mục hồ sơ được cấu hình sai, đang bỏ qua. Lỗi là: {$a}';
$string['instancenotdelete'] = 'Không xóa được danh mục hồ sơ';
$string['instancenotsaved'] = 'Không lưu được danh mục hồ sơ';
$string['instancesaved'] = 'Đã lưu danh mục hồ sơ thành công';
$string['intro'] = 'Nội dung bạn tạo, chẳng hạn như bài nộp bài tập, bài đăng diễn đàn và bài viết blog, có thể được xuất sang danh mục hồ sơ hoặc tải xuống.<br>
Bạn có thể ẩn bất kỳ danh mục hồ sơ nào không muốn sử dụng để danh mục đó không xuất hiện như một tùy chọn xuất nội dung.';
$string['invalidaddformat'] = 'Định dạng thêm không hợp lệ được truyền cho portfolio_add_button. ({$a}) Phải là một trong PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Không tìm thấy thuộc tính ({$a}) của portfolio_button';
$string['invalidconfigproperty'] = 'Không tìm thấy thuộc tính cấu hình ({$a->property} của {$a->class})';
$string['invalidexportproperty'] = 'Không tìm thấy thuộc tính cấu hình xuất ({$a->property} của {$a->class})';
$string['invalidfileareaargs'] = 'Đối số khu vực tệp truyền cho set_file_and_format_data không hợp lệ - phải chứa contextid, component, filearea và itemid';
$string['invalidformat'] = 'Có thành phần đang xuất một định dạng không hợp lệ, {$a}';
$string['invalidinstance'] = 'Không tìm thấy phiên bản danh mục hồ sơ đó';
$string['invalidpreparepackagefile'] = 'Lệnh gọi prepare_package_file không hợp lệ - phải thiết lập single hoặc multifiles';
$string['invalidproperty'] = 'Không tìm thấy thuộc tính ({$a->property} của {$a->class})';
$string['invalidsha1file'] = 'Lệnh gọi get_sha1_file không hợp lệ - phải thiết lập single hoặc multifiles';
$string['invalidtempid'] = 'ID xuất không hợp lệ. Có thể ID đã hết hạn';
$string['invaliduserproperty'] = 'Không tìm thấy thuộc tính cấu hình người dùng ({$a->property} của {$a->class})';
$string['leap2a_emptyselection'] = 'Chưa chọn giá trị bắt buộc';
$string['leap2a_entryalreadyexists'] = 'Bạn đã thử thêm mục Leap2A có ID ({$a}) đã tồn tại trong nguồn dữ liệu này';
$string['leap2a_feedtitle'] = 'Bản xuất Leap2A từ Moodle cho {$a}';
$string['leap2a_filecontent'] = 'Đã thử đặt nội dung của mục Leap2A thành một tệp thay vì sử dụng lớp con file';
$string['leap2a_invalidentryfield'] = 'Bạn đã thử đặt trường mục không tồn tại ({$a}) hoặc không thể đặt trực tiếp';
$string['leap2a_invalidentryid'] = 'Bạn đã thử truy cập một mục bằng ID không tồn tại ({$a})';
$string['leap2a_missingfield'] = 'Thiếu trường mục Leap2A bắt buộc {$a}';
$string['leap2a_nonexistantlink'] = 'Một mục Leap2A ({$a->from}) đã thử liên kết đến mục không tồn tại ({$a->to}) với rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'Đang ghi đè kiểu ban đầu của mục ({$a}) thành selection trong make_selection';
$string['leap2a_selflink'] = 'Một mục Leap2A ({$a->id}) đã thử liên kết đến chính nó với rel {$a->rel}';
$string['logs'] = 'Nhật ký chuyển';
$string['logsummary'] = 'Các lần chuyển thành công trước đây';
$string['manageportfolios'] = 'Quản lý danh mục hồ sơ';
$string['manageyourportfolios'] = 'Quản lý danh mục hồ sơ của bạn';
$string['mimecheckfail'] = 'Plugin danh mục hồ sơ {$a->plugin} không hỗ trợ mimetype {$a->mimetype} đó';
$string['missingcallbackarg'] = 'Thiếu đối số callback {$a->arg} cho lớp {$a->class}';
$string['moderatedbsizethreshold'] = 'Kích thước cơ sở dữ liệu vừa phải khi chuyển';
$string['moderatedbsizethresholddesc'] = 'Số bản ghi cơ sở dữ liệu vượt quá mức này được xem là cần thời gian vừa phải để chuyển';
$string['moderatefilesizethreshold'] = 'Kích thước tệp vừa phải khi chuyển';
$string['moderatefilesizethresholddesc'] = 'Kích thước tệp vượt quá mức này được xem là cần thời gian vừa phải để chuyển';
$string['multipleinstancesdisallowed'] = 'Đang cố tạo một phiên bản khác của plugin không cho phép có nhiều phiên bản ({$a})';
$string['mustsetcallbackoptions'] = 'Bạn phải thiết lập các tùy chọn callback trong hàm tạo portfolio_add_button hoặc bằng phương thức set_callback_options';
$string['noavailableplugins'] = 'Rất tiếc, hiện không có danh mục hồ sơ nào để bạn xuất nội dung sang';
$string['nocallbackclass'] = 'Không tìm thấy lớp callback cần sử dụng ({$a})';
$string['nocallbackcomponent'] = 'Không tìm thấy component được chỉ định {$a}.';
$string['nocallbackfile'] = 'Có lỗi trong mô-đun bạn đang xuất nội dung từ đó - không tìm thấy tệp danh mục hồ sơ bắt buộc';
$string['noclassbeforeformats'] = 'Bạn phải thiết lập lớp callback trước khi gọi set_formats trong portfolio_button';
$string['nocommonformats'] = 'Không có định dạng chung giữa các plugin danh mục hồ sơ hiện có và vị trí gọi {$a->location} (bên gọi hỗ trợ {$a->formats})';
$string['noinstanceyet'] = 'Chưa chọn';
$string['nologs'] = 'Không có nhật ký nào để hiển thị!';
$string['nomultipleexports'] = 'Rất tiếc, đích đến danh mục hồ sơ ({$a->plugin}) không hỗ trợ xuất nhiều lần cùng lúc. Vui lòng <a href="{$a->link}">hoàn tất lần xuất hiện tại trước</a> rồi thử lại';
$string['nonprimative'] = 'Một giá trị không nguyên thủy đã được truyền làm đối số callback cho portfolio_add_button. Từ chối tiếp tục. Khóa là {$a->key} và giá trị là {$a->value}';
$string['nopermissions'] = 'Rất tiếc, bạn không có đủ quyền cần thiết để xuất tệp từ khu vực này';
$string['notexportable'] = 'Rất tiếc, không thể xuất loại nội dung bạn đang cố xuất';
$string['notimplemented'] = 'Rất tiếc, bạn đang cố xuất nội dung ở định dạng chưa được triển khai ({$a})';
$string['notyetselected'] = 'Chưa chọn';
$string['notyours'] = 'Bạn đang cố tiếp tục một lần xuất danh mục hồ sơ không thuộc về bạn!';
$string['nouploaddirectory'] = 'Không thể tạo thư mục tạm để đóng gói dữ liệu của bạn';
$string['off'] = 'Đã bật nhưng bị ẩn';
$string['on'] = 'Đã bật và hiển thị';
$string['plugin'] = 'Plugin danh mục hồ sơ';
$string['plugincouldnotpackage'] = 'Không đóng gói được dữ liệu của bạn để xuất: lỗi ban đầu là {$a}';
$string['pluginismisconfigured'] = 'Plugin danh mục hồ sơ được cấu hình sai, đang bỏ qua. Lỗi là: {$a}';
$string['portfolio'] = 'Danh mục hồ sơ';
$string['portfolios'] = 'Danh mục hồ sơ';
$string['privacy:metadata'] = 'Phân hệ danh mục hồ sơ hoạt động như một kênh, chuyển yêu cầu từ các plugin đến nhiều plugin danh mục hồ sơ khác nhau.';
$string['privacy:metadata:instance'] = 'Mã định danh danh mục hồ sơ';
$string['privacy:metadata:instancesummary'] = 'Lưu trữ dữ liệu về các phiên bản danh mục hồ sơ và tùy chọn.';
$string['privacy:metadata:name'] = 'Tên tùy chọn';
$string['privacy:metadata:portfolio_log'] = 'Nhật ký các lần chuyển danh mục hồ sơ (dùng để kiểm tra trùng lặp sau này)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Tên lớp được dùng để tạo lần chuyển';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Tên component chịu trách nhiệm xuất';
$string['privacy:metadata:portfolio_log:time'] = 'Thời điểm chuyển (nếu chuyển theo hàng đợi thì đây là thời điểm quá trình chuyển thực sự chạy, không phải lúc người dùng bắt đầu)';
$string['privacy:metadata:portfolio_log:userid'] = 'ID người dùng đã xuất nội dung';
$string['privacy:metadata:portfolio_tempdata'] = 'Lưu trữ dữ liệu tạm thời cho các lần xuất danh mục hồ sơ.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Dữ liệu xuất';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Thời điểm bản ghi này hết hạn';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Phiên bản plugin danh mục hồ sơ đang được sử dụng';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Người dùng thực hiện xuất';
$string['privacy:metadata:userid'] = 'ID người dùng';
$string['privacy:metadata:value'] = 'Giá trị của tùy chọn';
$string['privacy:path'] = 'Các phiên bản danh mục hồ sơ';
$string['queuesummary'] = 'Các lần chuyển hiện đang nằm trong hàng đợi';
$string['returntowhereyouwere'] = 'Quay lại vị trí trước đó';
$string['save'] = 'Lưu';
$string['selectedformat'] = 'Định dạng xuất đã chọn';
$string['selectedwait'] = 'Đã chọn chờ chưa?';
$string['selectplugin'] = 'Chọn đích đến';
$string['showhide'] = 'Hiện / ẩn';
$string['singleinstancenomultiallowed'] = 'Chỉ có một phiên bản plugin danh mục hồ sơ, plugin này không hỗ trợ xuất nhiều lần trong mỗi phiên và phiên hiện đã có một lần xuất đang hoạt động bằng plugin này!';
$string['somepluginsdisabled'] = 'Một số plugin danh mục hồ sơ đã bị tắt hoàn toàn vì chúng được cấu hình sai hoặc phụ thuộc vào một thành phần khác đang gặp vấn đề:';
$string['sure'] = 'Bạn có chắc chắn muốn xóa \'{$a}\' không? Không thể hoàn tác thao tác này.';
$string['thirdpartyexception'] = 'Đã phát sinh ngoại lệ của bên thứ ba trong quá trình xuất danh mục hồ sơ ({$a}). Ngoại lệ đã được bắt và ném lại, nhưng cần khắc phục vấn đề này';
$string['transfertime'] = 'Thời gian chuyển';
$string['unknownplugin'] = 'Không xác định (có thể đã bị quản trị viên gỡ bỏ)';
$string['wait'] = 'Chờ';
$string['wanttowait_high'] = 'Không khuyến nghị chờ lần chuyển này hoàn tất, nhưng bạn có thể chờ nếu chắc chắn và biết mình đang làm gì';
$string['wanttowait_moderate'] = 'Bạn có muốn chờ lần chuyển này không? Quá trình có thể mất vài phút';
