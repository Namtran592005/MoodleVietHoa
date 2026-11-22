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
 * @subpackage blog
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Thêm mục mới';
$string['addnewexternalblog'] = 'Đăng ký blog bên ngoài';
$string['assocdescription'] = 'Nếu bạn viết về một khóa học và/hoặc mô-đun hoạt động, hãy chọn chúng tại đây.';
$string['associated'] = '{$a} liên quan';
$string['associatewithcourse'] = 'Blog về khóa học {$a->coursename}';
$string['associatewithmodule'] = 'Blog về {$a->modtype}: {$a->modname}';
$string['association'] = 'Liên kết';
$string['associations'] = 'Các liên kết';
$string['associationunviewable'] = 'Người khác không thể xem mục này cho đến khi liên kết một khóa học với mục đó hoặc thay đổi trường \'Công bố tới\'.';
$string['author'] = 'Tác giả';
$string['autotags'] = 'Thêm các thẻ này';
$string['autotags_help'] = 'Nhập một hoặc nhiều thẻ cục bộ (phân tách bằng dấu phẩy) mà bạn muốn tự động thêm vào mỗi mục blog được sao chép từ blog bên ngoài vào blog cục bộ.';
$string['backupblogshelp'] = 'Nếu bật, blog sẽ được đưa vào các bản sao lưu tự động của TRANG.';
$string['blockexternalstitle'] = 'Blog bên ngoài';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog về {$a->type} này';
$string['blogaboutthiscourse'] = 'Thêm mục về khóa học này';
$string['blogaboutthismodule'] = 'Thêm mục về {$a} này';
$string['blogadministration'] = 'Quản trị blog';
$string['blogattachment'] = 'Tệp đính kèm blog';
$string['blogdeleteconfirm'] = 'Xóa mục blog \'{$a}\'?';
$string['blogdisable'] = 'Tính năng viết blog đã bị tắt!';
$string['blogentries'] = 'Các mục blog';
$string['blogentriesabout'] = 'Các mục blog về {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Các mục blog về {$a->course} của nhóm {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Các mục blog về {$a->mod} của nhóm {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Các mục blog về {$a->course} của {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Các mục blog về {$a->mod} này của {$a->user}';
$string['blogentrybyuser'] = 'Mục blog của {$a}';
$string['blogpreferences'] = 'Tùy chọn blog';
$string['blogs'] = 'Các blog';
$string['blogscourse'] = 'Blog khóa học';
$string['blogssite'] = 'Blog của trang';
$string['blogtags'] = 'Thẻ blog';
$string['cannoteditentryorblog'] = 'Bạn không thể chỉnh sửa mục này hoặc blog này';
$string['cannotviewcourseblog'] = 'Bạn không có quyền cần thiết để xem blog trong khóa học này';
$string['cannotviewcourseorgroupblog'] = 'Bạn không có quyền cần thiết để xem blog trong khóa học/nhóm này';
$string['cannotviewsiteblog'] = 'Bạn không có quyền cần thiết để xem tất cả blog của trang';
$string['cannotviewuserblog'] = 'Bạn không có quyền cần thiết để đọc blog của người dùng';
$string['configexternalblogcrontime'] = 'Tần suất Moodle kiểm tra các blog bên ngoài để tìm mục mới.';
$string['configmaxexternalblogsperuser'] = 'Số lượng blog bên ngoài mà mỗi người dùng được phép liên kết với blog Moodle của họ.';
$string['configuseblogassociations'] = 'Bật tính năng liên kết mục blog với khóa học và mô-đun khóa học.';
$string['configuseexternalblogs'] = 'Cho phép người dùng chỉ định nguồn cấp blog bên ngoài. Moodle thường xuyên kiểm tra các nguồn cấp này và sao chép mục mới vào blog cục bộ của người dùng đó.';
$string['courseblog'] = 'Blog khóa học: {$a}';
$string['courseblogdisable'] = 'Blog khóa học chưa được bật';
$string['courseblogs'] = 'Người dùng chỉ có thể xem blog của những người cùng tham gia khóa học';
$string['deleteblogassociations'] = 'Liên kết blog';
$string['deleteblogassociations_help'] = 'Nếu được chọn, các mục blog sẽ không còn liên kết với khóa học này hoặc bất kỳ hoạt động hay tài nguyên nào trong khóa học. Bản thân các mục blog sẽ không bị xóa.';
$string['deleteentry'] = 'Xóa mục';
$string['deleteexternalblog'] = 'Hủy đăng ký blog bên ngoài này';
$string['deleteotagswarn'] = 'Bạn có chắc chắn muốn xóa các thẻ này khỏi tất cả bài đăng blog và xóa chúng khỏi hệ thống không?';
$string['description'] = 'Mô tả';
$string['description_help'] = 'Nhập một hoặc hai câu tóm tắt nội dung blog bên ngoài của bạn. (Nếu không cung cấp mô tả, mô tả được ghi trong blog bên ngoài của bạn sẽ được sử dụng).';
$string['donothaveblog'] = 'Rất tiếc, bạn không có blog riêng.';
$string['editentry'] = 'Chỉnh sửa mục blog';
$string['editexternalblog'] = 'Chỉnh sửa blog bên ngoài này';
$string['emptybody'] = 'Nội dung mục blog không được để trống';
$string['emptyrssfeed'] = 'URL bạn nhập không trỏ đến nguồn cấp RSS hợp lệ';
$string['emptytitle'] = 'Tiêu đề mục blog không được để trống';
$string['emptyurl'] = 'Bạn phải chỉ định URL của một nguồn cấp RSS hợp lệ';
$string['entrybody'] = 'Nội dung mục blog';
$string['entrybodyonlydesc'] = 'Mô tả mục';
$string['entryerrornotyours'] = 'Mục này không thuộc về bạn';
$string['entrysaved'] = 'Mục của bạn đã được lưu';
$string['entrytitle'] = 'Tiêu đề mục';
$string['entrytitlewithlink'] = 'Tiêu đề mục kèm liên kết';
$string['eventblogassociationadded'] = 'Đã tạo liên kết blog';
$string['eventblogassociationdeleted'] = 'Đã xóa liên kết blog';
$string['eventblogentriesviewed'] = 'Đã xem các mục blog';
$string['eventblogexternaladded'] = 'Đã đăng ký blog bên ngoài';
$string['eventblogexternalremoved'] = 'Đã hủy đăng ký blog bên ngoài';
$string['eventblogexternalupdated'] = 'Đã cập nhật blog bên ngoài';
$string['evententryadded'] = 'Đã thêm mục blog';
$string['evententrydeleted'] = 'Đã xóa mục blog';
$string['evententryupdated'] = 'Đã cập nhật mục blog';
$string['eventexternalblogsviewed'] = 'Đã xem các blog bên ngoài đã đăng ký';
$string['externalblogcrontime'] = 'Lịch chạy cron cho blog bên ngoài';
$string['externalblogdeleteconfirm'] = 'Hủy đăng ký blog bên ngoài này?';
$string['externalblogdeleted'] = 'Đã hủy đăng ký blog bên ngoài';
$string['externalblogs'] = 'Blog bên ngoài';
$string['feedisinvalid'] = 'Nguồn cấp dữ liệu này không hợp lệ';
$string['feedisvalid'] = 'Nguồn cấp dữ liệu này hợp lệ';
$string['filterblogsby'] = 'Lọc mục theo...';
$string['filtertags'] = 'Lọc thẻ';
$string['filtertags_help'] = 'Bạn có thể dùng tính năng này để lọc các mục muốn sử dụng. Nếu nhập thẻ ở đây (phân tách bằng dấu phẩy), chỉ các mục có những thẻ này mới được sao chép từ blog bên ngoài.';
$string['groupblog'] = 'Blog nhóm: {$a}';
$string['groupblogdisable'] = 'Blog nhóm chưa được bật';
$string['groupblogentries'] = 'Các mục blog liên kết với {$a->coursename} của nhóm {$a->groupname}';
$string['groupblogs'] = 'Người dùng chỉ có thể xem blog của những người cùng nhóm';
$string['incorrectblogfilter'] = 'Đã chỉ định loại bộ lọc blog không chính xác';
$string['intro'] = 'Nguồn cấp RSS này được tự động tạo từ một hoặc nhiều blog.';
$string['invalidgroupid'] = 'ID nhóm không hợp lệ';
$string['invalidurl'] = 'Không thể truy cập URL này';
$string['linktooriginalentry'] = 'Mục blog gốc';
$string['maxexternalblogsperuser'] = 'Số blog bên ngoài tối đa cho mỗi người dùng';
$string['myprofileotherblogs'] = 'Xem các mục blog';
$string['myprofilesiteblogs'] = 'Xem các mục blog của trang';
$string['myprofileuserblogs'] = 'Xem các mục blog của tôi';
$string['name'] = 'Tên';
$string['name_help'] = 'Nhập tên mô tả cho blog bên ngoài của bạn. (Nếu không nhập tên, tiêu đề blog bên ngoài sẽ được sử dụng).';
$string['noentriesyet'] = 'Hiện không có mục nào hiển thị';
$string['noguestpost'] = 'Khách không thể đăng blog!';
$string['nopermissionstodeleteentry'] = 'Bạn không có quyền cần thiết để xóa mục blog này';
$string['norighttodeletetag'] = 'Bạn không có quyền xóa thẻ này - {$a}';
$string['nosuchentry'] = 'Không có mục blog như vậy';
$string['notallowedtoedit'] = 'Bạn không được phép chỉnh sửa mục này';
$string['numberofentries'] = 'Số mục: {$a}';
$string['numberoftags'] = 'Số thẻ cần hiển thị';
$string['page-blog-edit'] = 'Các trang chỉnh sửa blog';
$string['page-blog-index'] = 'Các trang liệt kê blog';
$string['page-blog-x'] = 'Tất cả các trang blog';
$string['pagesize'] = 'Số mục blog trên mỗi trang';
$string['permalink'] = 'Liên kết cố định';
$string['personalblogs'] = 'Người dùng chỉ có thể xem blog của chính mình';
$string['preferences'] = 'Tùy chọn blog';
$string['privacy:metadata:core_comments'] = 'Bình luận liên kết với các mục blog';
$string['privacy:metadata:core_files'] = 'Tệp đính kèm vào các mục blog';
$string['privacy:metadata:core_tag'] = 'Thẻ liên kết với các mục blog';
$string['privacy:metadata:external'] = 'Liên kết đến nguồn cấp RSS bên ngoài';
$string['privacy:metadata:external:description'] = 'Mô tả nguồn cấp dữ liệu';
$string['privacy:metadata:external:filtertags'] = 'Danh sách thẻ dùng để lọc các mục';
$string['privacy:metadata:external:name'] = 'Tên nguồn cấp dữ liệu';
$string['privacy:metadata:external:timefetched'] = 'Thời điểm nguồn cấp dữ liệu được lấy lần cuối';
$string['privacy:metadata:external:timemodified'] = 'Thời điểm liên kết được sửa đổi lần cuối';
$string['privacy:metadata:external:url'] = 'URL của nguồn cấp dữ liệu';
$string['privacy:metadata:external:userid'] = 'ID của người dùng đã thêm mục blog bên ngoài';
$string['privacy:metadata:post'] = 'Thông tin liên quan đến các mục blog';
$string['privacy:metadata:post:content'] = 'Nội dung của mục blog bên ngoài';
$string['privacy:metadata:post:created'] = 'Ngày tạo mục blog';
$string['privacy:metadata:post:lastmodified'] = 'Ngày mục blog được sửa đổi lần cuối';
$string['privacy:metadata:post:publishstate'] = 'Mục có hiển thị với người khác hay không';
$string['privacy:metadata:post:subject'] = 'Tiêu đề mục blog';
$string['privacy:metadata:post:summary'] = 'Văn bản mục blog';
$string['privacy:metadata:post:uniquehash'] = 'Mã định danh duy nhất của mục bên ngoài, thường là URL';
$string['privacy:metadata:post:userid'] = 'ID của người dùng đã thêm mục blog';
$string['privacy:metadata:post:usermodified'] = 'Người dùng sửa đổi mục lần cuối';
$string['privacy:path:blogassociations'] = 'Các bài đăng blog được liên kết';
$string['privacy:unknown'] = 'Không xác định';
$string['published'] = 'Đã xuất bản';
$string['publishto'] = 'Xuất bản cho';
$string['publishto_help'] = 'Có 3 tùy chọn:

* Bản thân (bản nháp) - Chỉ bạn và quản trị viên có thể xem mục này
* Mọi người trên trang này - Bất kỳ ai đã ghi danh trên trang này đều có thể đọc mục này
* Mọi người trên toàn thế giới - Bất kỳ ai, kể cả khách, đều có thể đọc mục này';
$string['publishtocourse'] = 'Người dùng cùng khóa học với bạn';
$string['publishtocourseassoc'] = 'Thành viên của khóa học được liên kết';
$string['publishtocourseassocparam'] = 'Thành viên của {$a}';
$string['publishtodraft'] = 'Bản nháp';
$string['publishtogroup'] = 'Người dùng cùng nhóm với bạn';
$string['publishtogroupassoc'] = 'Thành viên nhóm của bạn trong khóa học được liên kết';
$string['publishtogroupassocparam'] = 'Thành viên nhóm của bạn trong {$a}';
$string['publishtonoone'] = 'Bản thân (bản nháp)';
$string['publishtosite'] = 'Mọi người trên trang này';
$string['publishtoworld'] = 'Mọi người trên toàn thế giới';
$string['readfirst'] = 'Hãy đọc nội dung này trước';
$string['relatedblogentries'] = 'Các mục blog liên quan';
$string['retrievedfrom'] = 'Được lấy từ';
$string['rssfeed'] = 'Nguồn cấp RSS của blog';
$string['searchterm'] = 'Tìm kiếm: {$a}';
$string['settingsupdatederror'] = 'Đã xảy ra lỗi, không thể cập nhật tùy chọn blog';
$string['siteblogdisable'] = 'Blog trang chưa được bật';
$string['siteblogheading'] = 'Blog trang';
$string['siteblogs'] = 'Tất cả người dùng trên trang đều có thể xem mọi mục blog';
$string['tagdatelastused'] = 'Ngày thẻ được sử dụng lần cuối';
$string['tagparam'] = 'Thẻ: {$a}';
$string['tags'] = 'Thẻ';
$string['tagsort'] = 'Sắp xếp hiển thị thẻ theo';
$string['tagtext'] = 'Văn bản thẻ';
$string['timefetched'] = 'Thời điểm đồng bộ lần cuối';
$string['timewithin'] = 'Hiển thị các thẻ đã dùng trong số ngày này';
$string['updateentrywithid'] = 'Đang cập nhật mục';
$string['url'] = 'URL nguồn cấp RSS';
$string['url_help'] = 'Nhập URL nguồn cấp RSS cho blog bên ngoài của bạn.';
$string['useblogassociations'] = 'Bật liên kết blog';
$string['useexternalblogs'] = 'Bật blog bên ngoài';
$string['userblog'] = 'Blog người dùng: {$a}';
$string['userblogentries'] = 'Các mục blog của {$a}';
$string['valid'] = 'Hợp lệ';
$string['viewallblogentries'] = 'Tất cả mục về {$a} này';
$string['viewallmodentries'] = 'Xem tất cả mục về {$a->type}';
$string['viewallmyentries'] = 'Xem tất cả mục của tôi';
$string['viewblogentries'] = 'Các mục về {$a->type} này';
$string['viewblogsfor'] = 'Xem tất cả mục cho...';
$string['viewcourseblogs'] = 'Xem tất cả mục cho khóa học này';
$string['viewentriesbyuseraboutcourse'] = 'Xem các mục về khóa học này của {$a}';
$string['viewgroupblogs'] = 'Xem các mục cho nhóm...';
$string['viewgroupentries'] = 'Các mục của nhóm';
$string['viewmodblogs'] = 'Xem các mục cho mô-đun...';
$string['viewmodentries'] = 'Các mục của mô-đun';
$string['viewmyentries'] = 'Mục của tôi';
$string['viewmyentriesaboutcourse'] = 'Xem các mục của tôi về khóa học này';
$string['viewmyentriesaboutmodule'] = 'Xem các mục của tôi về {$a} này';
$string['viewsiteentries'] = 'Xem tất cả mục';
$string['viewuserentries'] = 'Xem tất cả mục của {$a}';
$string['worldblogs'] = 'Mọi người đều có thể đọc các mục được đặt ở chế độ truy cập toàn cầu';
$string['wrongexternalid'] = 'ID blog bên ngoài không chính xác';
