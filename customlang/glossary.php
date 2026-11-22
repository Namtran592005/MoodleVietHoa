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
 * @subpackage glossary
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Thêm danh mục';
$string['addcomment'] = 'Thêm nhận xét';
$string['addentry'] = 'Thêm mục từ mới';
$string['addingcomment'] = 'Thêm nhận xét';
$string['addsingleentry'] = 'Thêm mục từ';
$string['alias'] = 'Từ khóa';
$string['aliases'] = 'Từ khóa';
$string['aliases_help'] = 'Mỗi mục từ trong bảng thuật ngữ có thể có một danh sách từ khóa (hoặc từ đồng nghĩa) đi kèm. Nếu mục từ được tự động liên kết, mọi từ khóa cũng sẽ được tự động liên kết.

Nhập mỗi từ khóa trên một dòng mới (không phân tách bằng dấu phẩy).';
$string['allcategories'] = 'Tất cả danh mục';
$string['allentries'] = 'TẤT CẢ';
$string['allowcomments'] = 'Cho phép nhận xét về mục từ';
$string['allowcomments_help'] = 'Nếu được bật, tất cả người tham gia có quyền tạo nhận xét sẽ có thể thêm nhận xét vào các mục từ trong bảng thuật ngữ.';
$string['allowduplicatedentries'] = 'Cho phép mục từ trùng lặp';
$string['allowduplicatedentries_help'] = 'Nếu được bật, nhiều mục từ có thể có cùng tên khái niệm.';
$string['allowprintview'] = 'Cho phép chế độ xem bản in';
$string['allowprintview_help'] = 'Nếu được bật, học viên sẽ được cung cấp liên kết đến phiên bản bảng thuật ngữ thân thiện với máy in. Giáo viên luôn có thể sử dụng liên kết này.';
$string['andmorenewentries'] = 'và {$a} mục từ mới khác.';
$string['answer'] = 'Câu trả lời';
$string['approvaldisplayformat'] = 'Định dạng hiển thị khi phê duyệt';
$string['approvaldisplayformat_help'] = 'Khi phê duyệt mục từ trong bảng thuật ngữ, bạn có thể muốn sử dụng định dạng hiển thị khác';
$string['approve'] = 'Phê duyệt';
$string['areaattachment'] = 'Tệp đính kèm';
$string['areaentry'] = 'Định nghĩa';
$string['areyousuredelete'] = 'Bạn có chắc chắn muốn xóa mục từ này không?';
$string['areyousuredeletecomment'] = 'Bạn có chắc chắn muốn xóa nhận xét này không?';
$string['areyousureexport'] = 'Bạn có chắc chắn muốn xuất mục từ này sang';
$string['ascending'] = 'tăng dần';
$string['attachment'] = 'Tệp đính kèm';
$string['attachment_help'] = 'Bạn có thể đính kèm tùy chọn một hoặc nhiều tệp vào mục từ trong bảng thuật ngữ.';
$string['author'] = 'tác giả';
$string['authorview'] = 'Duyệt theo tác giả';
$string['back'] = 'Quay lại';
$string['bynameondate'] = 'bởi {$a->name} - {$a->date}';
$string['cachedef_concepts'] = 'Liên kết khái niệm';
$string['cantinsertcat'] = 'Không thể chèn danh mục';
$string['cantinsertrec'] = 'Không thể chèn bản ghi';
$string['cantinsertrel'] = 'Không thể chèn mối liên kết giữa danh mục và mục từ';
$string['casesensitive'] = 'Mục từ này phân biệt chữ hoa chữ thường';
$string['casesensitive_help'] = 'Thiết lập này xác định việc liên kết tự động với mục từ có yêu cầu khớp chính xác chữ hoa và chữ thường hay không.';
$string['cat'] = 'mèo';
$string['categories'] = 'Danh mục';
$string['category'] = 'Danh mục';
$string['categorydeleted'] = 'Đã xóa danh mục';
$string['categoryview'] = 'Duyệt theo danh mục';
$string['changeto'] = 'đổi thành {$a}';
$string['cnfallowcomments'] = 'Xác định liệu bảng thuật ngữ có mặc định cho phép nhận xét về các mục từ hay không';
$string['cnfallowdupentries'] = 'Xác định liệu bảng thuật ngữ có mặc định cho phép các mục từ trùng lặp hay không';
$string['cnfapprovalstatus'] = 'Xác định trạng thái phê duyệt mặc định của mục từ do học viên đăng';
$string['cnfcasesensitive'] = 'Xác định liệu mục từ có mặc định phân biệt chữ hoa chữ thường khi được liên kết hay không';
$string['cnfdefaulthook'] = 'Chọn lựa chọn mặc định sẽ hiển thị khi bảng thuật ngữ được xem lần đầu';
$string['cnfdefaultmode'] = 'Chọn khung mặc định sẽ hiển thị khi bảng thuật ngữ được xem lần đầu.';
$string['cnffullmatch'] = 'Xác định liệu mục từ khi được liên kết có mặc định khớp với toàn bộ từ (không khớp với từ nằm bên trong từ khác) hay không.';
$string['cnflinkentry'] = 'Xác định liệu mục từ có được tự động liên kết theo mặc định hay không';
$string['cnflinkglossaries'] = 'Xác định liệu bảng thuật ngữ có được tự động liên kết theo mặc định hay không';
$string['cnfrelatedview'] = 'Chọn định dạng hiển thị sẽ dùng cho việc liên kết tự động và xem mục từ.';
$string['cnfshowgroup'] = 'Chỉ định có hiển thị dấu ngắt nhóm hay không.';
$string['cnfsortkey'] = 'Chọn khóa sắp xếp mặc định.';
$string['cnfsortorder'] = 'Chọn thứ tự sắp xếp mặc định.';
$string['cnfstudentcanpost'] = 'Xác định liệu học viên có thể đăng mục từ theo mặc định hay không';
$string['cnftabs'] = 'Chọn các thẻ hiển thị cho định dạng bảng thuật ngữ này';
$string['comment'] = 'Nhận xét';
$string['commentdeleted'] = 'Nhận xét đã bị xóa.';
$string['comments'] = 'Nhận xét';
$string['commentson'] = 'Nhận xét về';
$string['commentupdated'] = 'Nhận xét đã được cập nhật.';
$string['completiondetail:entries'] = 'Tạo mục từ: {$a}';
$string['completionentries'] = 'Thêm mục từ';
$string['completionentriesdesc'] = 'Học viên phải tạo ít nhất {$a} mục từ';
$string['concept'] = 'Khái niệm';
$string['concepts'] = 'Khái niệm';
$string['configenablerssfeeds'] = 'Tùy chọn này sẽ bật khả năng sử dụng nguồn cấp RSS cho tất cả bảng thuật ngữ. Bạn vẫn cần bật nguồn cấp theo cách thủ công trong cài đặt của từng bảng thuật ngữ.';
$string['current'] = 'Hiện đang được sắp xếp {$a}';
$string['currentglossary'] = 'Bảng thuật ngữ hiện tại';
$string['date'] = 'ngày';
$string['dateview'] = 'Duyệt theo ngày';
$string['defaultapproval'] = 'Được phê duyệt theo mặc định';
$string['defaultapproval_help'] = 'Nếu đặt là không, giáo viên phải phê duyệt mục từ trước khi mọi người có thể xem được.';
$string['defaulthook'] = 'Điểm neo mặc định';
$string['defaultmode'] = 'Chế độ mặc định';
$string['defaultsortkey'] = 'Khóa sắp xếp mặc định';
$string['defaultsortorder'] = 'Thứ tự sắp xếp mặc định';
$string['definition'] = 'Định nghĩa';
$string['definitions'] = 'Định nghĩa';
$string['deletecategory'] = 'Xóa danh mục';
$string['deleteentry'] = 'Xóa mục từ';
$string['deleteentrya'] = 'Xóa mục từ: {$a}';
$string['deletenotenrolled'] = 'Mục từ của người dùng chưa ghi danh';
$string['deletingcomment'] = 'Đang xóa nhận xét';
$string['deletingnoneemptycategory'] = 'Xóa danh mục này sẽ không xóa các mục từ bên trong; chúng sẽ được đánh dấu là chưa phân loại.';
$string['descending'] = 'giảm dần';
$string['destination'] = 'Đích đến của các mục từ được nhập';
$string['destination_help'] = 'Có thể nhập các mục từ và thêm vào bảng thuật ngữ hiện tại hoặc vào một bảng thuật ngữ mới; trong trường hợp này, bảng thuật ngữ mới sẽ được tạo dựa trên thông tin trong tệp XML.';
$string['disapprove'] = 'Hủy phê duyệt';
$string['displayformat'] = 'Định dạng hiển thị';
$string['displayformat_help'] = 'Có 7 định dạng hiển thị:

* Đơn giản, kiểu từ điển - Không hiển thị tác giả và tệp đính kèm được hiển thị dưới dạng liên kết
* Liên tục, không có tác giả - Các mục từ hiển thị nối tiếp nhau, chỉ được phân cách bằng các biểu tượng chỉnh sửa
* Đầy đủ, có tác giả - Định dạng hiển thị giống diễn đàn, hiển thị thông tin tác giả và tệp đính kèm dưới dạng liên kết
* Đầy đủ, không có tác giả - Định dạng hiển thị giống diễn đàn, không hiển thị tác giả và tệp đính kèm dưới dạng liên kết
* Bách khoa toàn thư - Giống định dạng "Đầy đủ, có tác giả", nhưng hình ảnh đính kèm được hiển thị ngay trong nội dung
* Danh sách mục từ - Các khái niệm được liệt kê dưới dạng liên kết
* FAQ - Từ CÂU HỎI và CÂU TRẢ LỜI lần lượt được thêm vào khái niệm và định nghĩa';
$string['displayformatcontinuous'] = 'Liên tục, không có tác giả';
$string['displayformatdefault'] = 'Mặc định giống định dạng hiển thị';
$string['displayformatdictionary'] = 'Đơn giản, kiểu từ điển';
$string['displayformatencyclopedia'] = 'Bách khoa toàn thư';
$string['displayformatentrylist'] = 'Danh sách mục từ';
$string['displayformatfaq'] = 'FAQ';
$string['displayformatfullwithauthor'] = 'Đầy đủ, có tác giả';
$string['displayformatfullwithoutauthor'] = 'Đầy đủ, không có tác giả';
$string['displayformats'] = 'Định dạng hiển thị';
$string['displayformatssetup'] = 'Thiết lập định dạng hiển thị';
$string['duplicatecategory'] = 'Trùng lặp danh mục';
$string['duplicateentry'] = 'Trùng lặp mục từ';
$string['editalways'] = 'Luôn cho phép chỉnh sửa';
$string['editalways_help'] = 'Thiết lập này xác định liệu mục từ luôn có thể chỉnh sửa hay học viên chỉ có thể chỉnh sửa mục từ của mình trong khoảng thời gian chỉnh sửa đã cấu hình (thường là 30 phút).';
$string['editcategories'] = 'Chỉnh sửa danh mục';
$string['editcategory'] = 'Chỉnh sửa danh mục';
$string['editentry'] = 'Chỉnh sửa mục từ';
$string['editentrya'] = 'Chỉnh sửa mục từ: {$a}';
$string['editingcomment'] = 'Đang chỉnh sửa nhận xét';
$string['entbypage'] = 'Số mục từ hiển thị mỗi trang';
$string['entries'] = 'Mục từ';
$string['entrieswithoutcategory'] = 'Mục từ chưa có danh mục';
$string['entry'] = 'Mục từ';
$string['entryalreadyexist'] = 'Mục từ đã tồn tại';
$string['entryapproved'] = 'Mục từ này đã được phê duyệt';
$string['entrydeleted'] = 'Đã xóa mục từ';
$string['entryexported'] = 'Đã xuất mục từ thành công';
$string['entryishidden'] = '(mục từ này hiện đang bị ẩn)';
$string['entryleveldefaultsettings'] = 'Cài đặt mặc định ở cấp mục từ';
$string['entrylink'] = 'Liên kết mục từ: {$a}';
$string['entrynotapproved'] = 'Mục chưa được phê duyệt';
$string['entrysaved'] = 'Mục từ này đã được lưu';
$string['entryupdated'] = 'Mục từ này đã được cập nhật';
$string['entryusedynalink'] = 'Mục từ này sẽ được tự động liên kết';
$string['entryusedynalink_help'] = 'Nếu quản trị viên đã bật tính năng tự động liên kết bảng thuật ngữ trên toàn trang và đánh dấu hộp kiểm này, mục từ sẽ được tự động liên kết ở mọi nơi xuất hiện các từ và cụm từ thuộc khái niệm trong phần còn lại của khóa học.';
$string['errcannoteditothers'] = 'Bạn không thể chỉnh sửa mục từ của người khác.';
$string['errconceptalreadyexists'] = 'Khái niệm này đã tồn tại. Bảng thuật ngữ này không cho phép mục từ trùng lặp.';
$string['errdeltimeexpired'] = 'Bạn không thể xóa mục từ này. Thời hạn đã hết!';
$string['erredittimeexpired'] = 'Thời gian chỉnh sửa mục từ này đã hết.';
$string['errorparsingxml'] = 'Đã xảy ra lỗi khi phân tích cú pháp tệp. Hãy đảm bảo tệp có cú pháp XML hợp lệ.';
$string['errreservedkeywords'] = 'Một hoặc nhiều từ khóa chứa ký tự đặc biệt không được phép sử dụng.';
$string['eventcategorycreated'] = 'Danh mục đã được tạo';
$string['eventcategorydeleted'] = 'Danh mục đã bị xóa';
$string['eventcategoryupdated'] = 'Danh mục đã được cập nhật';
$string['evententryapproved'] = 'Mục từ đã được phê duyệt';
$string['evententrycreated'] = 'Mục từ đã được tạo';
$string['evententrydeleted'] = 'Mục từ đã bị xóa';
$string['evententrydisapproved'] = 'Mục từ đã bị hủy phê duyệt';
$string['evententryupdated'] = 'Mục từ đã được cập nhật';
$string['evententryviewed'] = 'Mục từ đã được xem';
$string['explainaddentry'] = 'Thêm mục từ mới vào bảng thuật ngữ hiện tại.<br />Khái niệm và định nghĩa là các trường bắt buộc.';
$string['explainall'] = 'Hiển thị TẤT CẢ mục từ trên một trang';
$string['explainalphabet'] = 'Duyệt bảng thuật ngữ bằng chỉ mục này';
$string['explainexport'] = 'Nhấp vào nút bên dưới để xuất các mục từ trong bảng thuật ngữ.<br />Bạn có thể nhập lại bất cứ lúc nào vào khóa học này hoặc khóa học khác.<p>Lưu ý rằng tệp đính kèm (ví dụ: hình ảnh) và tác giả sẽ không được xuất.</p>';
$string['explainimport'] = 'Bạn phải chỉ định tệp cần nhập và xác định tiêu chí của quá trình này.<p>Gửi yêu cầu và xem lại kết quả.</p>';
$string['explainspecial'] = 'Hiển thị các mục từ không bắt đầu bằng chữ cái';
$string['export'] = 'Xuất';
$string['exportedentry'] = 'Mục từ đã xuất';
$string['exportentries'] = 'Xuất mục từ';
$string['exportentriestoxml'] = 'Xuất mục từ sang tệp XML';
$string['exportfile'] = 'Xuất mục từ ra tệp';
$string['exportglossary'] = 'Xuất bảng thuật ngữ';
$string['exporttomainglossary'] = 'Xuất sang bảng thuật ngữ chính';
$string['filetoimport'] = 'Tệp cần nhập';
$string['filetoimport_help'] = 'Duyệt và chọn tệp XML trên máy tính của bạn có chứa các mục từ cần nhập.';
$string['fillfields'] = 'Khái niệm và định nghĩa là các trường bắt buộc.';
$string['filtername'] = 'Tự động liên kết bảng thuật ngữ';
$string['fullmatch'] = 'Chỉ khớp toàn bộ từ';
$string['fullmatch_help'] = 'Thiết lập này xác định liệu chỉ các từ hoàn chỉnh mới được liên kết hay không. Ví dụ: mục trong bảng thuật ngữ có tên "construct" sẽ không tạo liên kết bên trong từ "constructivism".';
$string['glossary:addinstance'] = 'Thêm bảng thuật ngữ mới';
$string['glossary:approve'] = 'Phê duyệt và hủy phê duyệt các mục';
$string['glossary:comment'] = 'Tạo bình luận';
$string['glossary:export'] = 'Xuất các mục';
$string['glossary:exportentry'] = 'Xuất một mục';
$string['glossary:exportownentry'] = 'Xuất một mục của bạn';
$string['glossary:import'] = 'Nhập các mục';
$string['glossary:managecategories'] = 'Quản lý danh mục';
$string['glossary:managecomments'] = 'Quản lý bình luận';
$string['glossary:manageentries'] = 'Quản lý các mục';
$string['glossary:rate'] = 'Đánh giá các mục';
$string['glossary:view'] = 'Xem bảng thuật ngữ';
$string['glossary:viewallratings'] = 'Xem tất cả đánh giá thô do từng cá nhân đưa ra';
$string['glossary:viewanyrating'] = 'Xem tổng điểm đánh giá mà bất kỳ ai nhận được';
$string['glossary:viewrating'] = 'Xem tổng điểm đánh giá bạn nhận được';
$string['glossary:write'] = 'Tạo mục mới';
$string['glossaryleveldefaultsettings'] = 'Thiết lập mặc định cấp bảng thuật ngữ';
$string['glossarytype'] = 'Loại bảng thuật ngữ';
$string['glossarytype_help'] = 'Bảng thuật ngữ chính là nơi có thể nhập các mục từ bảng thuật ngữ phụ. Mỗi khóa học chỉ có thể có một bảng thuật ngữ chính. Nếu không cần nhập mục từ bảng thuật ngữ, tất cả bảng thuật ngữ trong khóa học đều có thể là bảng thuật ngữ phụ.';
$string['guestnoedit'] = 'Khách không được phép chỉnh sửa bảng thuật ngữ';
$string['importcategories'] = 'Nhập danh mục';
$string['importedcategories'] = 'Các danh mục đã nhập';
$string['importedentries'] = 'Các mục đã nhập';
$string['importentries'] = 'Nhập các mục';
$string['importentriesfromxml'] = 'Nhập các mục từ tệp XML';
$string['includegroupbreaks'] = 'Bao gồm dấu phân cách nhóm';
$string['indicator:cognitivedepth'] = 'Nhận thức trong bảng thuật ngữ';
$string['indicator:cognitivedepth_help'] = 'Chỉ báo này dựa trên mức độ nhận thức mà học viên đạt được trong hoạt động Bảng thuật ngữ.';
$string['indicator:cognitivedepthdef'] = 'Nhận thức trong bảng thuật ngữ';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm mức độ tham gia nhận thức do các hoạt động Bảng thuật ngữ mang lại trong khoảng thời gian phân tích này (Cấp độ = Không xem, Xem, Nộp bài)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Tương tác xã hội trong bảng thuật ngữ';
$string['indicator:socialbreadth_help'] = 'Chỉ báo này dựa trên mức độ tương tác xã hội mà học viên đạt được trong hoạt động Bảng thuật ngữ.';
$string['indicator:socialbreadthdef'] = 'Tương tác xã hội trong bảng thuật ngữ';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm mức độ tương tác xã hội do các hoạt động Bảng thuật ngữ mang lại trong khoảng thời gian phân tích này (Cấp độ = Không tham gia, Chỉ có người tham gia)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['isglobal'] = 'Bảng thuật ngữ này có áp dụng trên toàn trang không?';
$string['isglobal_help'] = 'Bảng thuật ngữ toàn cục có các mục được liên kết từ khắp trang web, thay vì chỉ trong khóa học chứa bảng thuật ngữ. Chỉ quản trị viên mới có thể đặt bảng thuật ngữ thành toàn cục.';
$string['lastedited'] = '(Chỉnh sửa lần cuối: {$a})';
$string['letter'] = 'chữ cái';
$string['linkcategory'] = 'Tự động liên kết danh mục này';
$string['linkcategory_help'] = 'Nếu tính năng tự động liên kết bảng thuật ngữ được bật và thiết lập này cũng được bật, tên danh mục sẽ tự động được liên kết ở bất cứ nơi nào xuất hiện trong phần còn lại của khóa học. Khi người tham gia nhấp vào liên kết tên danh mục, họ sẽ được chuyển đến trang "Duyệt theo danh mục" của bảng thuật ngữ.';
$string['linking'] = 'Tự động liên kết';
$string['mainglossary'] = 'Bảng thuật ngữ chính';
$string['maxtimehaspassed'] = 'Rất tiếc, đã hết thời gian tối đa để chỉnh sửa bình luận này ({$a})!';
$string['modulename'] = 'Bảng thuật ngữ';
$string['modulename_help'] = '#### Tính năng chính
* Tạo mục có văn bản, hình ảnh, video và các phương tiện nhúng khác
* Duyệt các mục theo thứ tự bảng chữ cái, danh mục hoặc tác giả
* Cho phép học viên tạo, bình luận và đánh giá các mục

Cách sử dụng
* Xây dựng bộ sưu tập các khái niệm chính cho khóa học
* Thu thập từ vựng và định nghĩa trong lớp học ngôn ngữ
* Phát triển bảng thuật ngữ cộng tác về các thuật ngữ kỹ thuật';
$string['modulename_link'] = 'mod/glossary/view';
$string['modulename_summary'] = 'Tạo danh sách thuật ngữ và định nghĩa như từ điển để học viên tra cứu hoặc đóng góp.';
$string['modulenameplural'] = 'Các bảng thuật ngữ';
$string['myentries'] = 'Các mục của tôi';
$string['newentries'] = 'Các mục bảng thuật ngữ mới';
$string['newglossary'] = 'Bảng thuật ngữ mới';
$string['newglossarycreated'] = 'Đã tạo bảng thuật ngữ mới.';
$string['newglossaryentries'] = 'Các mục bảng thuật ngữ mới:';
$string['nocomment'] = 'Không tìm thấy bình luận';
$string['nocomments'] = '(Không tìm thấy bình luận nào về mục này)';
$string['noconceptfound'] = 'Không tìm thấy khái niệm hoặc định nghĩa.';
$string['noentries'] = 'Không tìm thấy mục nào trong mục này';
$string['noentry'] = 'Không tìm thấy mục.';
$string['nopermissiontodelcomment'] = 'Bạn không thể xóa bình luận của người khác!';
$string['nopermissiontodelinglossary'] = 'Bạn không thể bình luận trong bảng thuật ngữ này!';
$string['nopermissiontoviewresult'] = 'Bạn chỉ có thể xem kết quả của các mục do chính mình tạo';
$string['notapproved'] = 'Mục trong bảng thuật ngữ chưa được phê duyệt.';
$string['notcategorised'] = 'Chưa phân loại';
$string['numberofentries'] = 'Số lượng mục';
$string['numberofentriesneedapprove'] = 'Cần phê duyệt';
$string['onebyline'] = '(mỗi dòng một mục)';
$string['page-mod-glossary-edit'] = 'Trang thêm/chỉnh sửa mục trong bảng thuật ngữ';
$string['page-mod-glossary-view'] = 'Trang xem bảng thuật ngữ';
$string['page-mod-glossary-x'] = 'Trang bất kỳ của mô-đun bảng thuật ngữ';
$string['pendingapproval'] = 'Đang chờ phê duyệt';
$string['pendingapprovalcount'] = 'Đang chờ phê duyệt ({$a})';
$string['pluginadministration'] = 'Quản trị bảng thuật ngữ';
$string['pluginname'] = 'Bảng thuật ngữ';
$string['popupformat'] = 'Định dạng cửa sổ bật lên';
$string['print'] = 'In';
$string['printerfriendly'] = 'Phiên bản thân thiện với máy in';
$string['printviewnotallowed'] = 'Không cho phép chế độ xem bản in';
$string['privacy'] = 'Quyền riêng tư của kết quả';
$string['privacy:metadata:core_comments'] = 'Các bình luận về định nghĩa trong bảng thuật ngữ được lưu bằng hệ thống core_comment';
$string['privacy:metadata:core_files'] = 'Các tệp được liên kết với định nghĩa trong bảng thuật ngữ được lưu bằng hệ thống core_files';
$string['privacy:metadata:core_rating'] = 'Các đánh giá được thêm vào mục trong bảng thuật ngữ được lưu bằng hệ thống core_rating';
$string['privacy:metadata:core_tag'] = 'Thẻ được thêm vào định nghĩa trong bảng thuật ngữ được lưu bằng hệ thống core_tag';
$string['privacy:metadata:glossary_entries'] = 'Thông tin về các mục của người dùng trong một hoạt động Bảng thuật ngữ cụ thể';
$string['privacy:metadata:glossary_entries:attachment'] = 'Tệp đính kèm của mục do người dùng thêm';
$string['privacy:metadata:glossary_entries:concept'] = 'Khái niệm của mục do người dùng thêm';
$string['privacy:metadata:glossary_entries:definition'] = 'Định nghĩa của mục do người dùng thêm';
$string['privacy:metadata:glossary_entries:glossaryid'] = 'ID của hoạt động Bảng thuật ngữ';
$string['privacy:metadata:glossary_entries:timemodified'] = 'Dấu thời gian cho biết thời điểm người dùng chỉnh sửa mục trong bảng thuật ngữ';
$string['privacy:metadata:glossary_entries:userid'] = 'ID của người dùng đã thêm mục vào bảng thuật ngữ này';
$string['question'] = 'Câu hỏi';
$string['rejectedentries'] = 'Các mục bị từ chối';
$string['rejectionrpt'] = 'Báo cáo từ chối';
$string['removeallglossarytags'] = 'Tất cả thẻ bảng thuật ngữ';
$string['resetglossaries'] = 'Xóa các mục khỏi';
$string['resetglossariesall'] = 'Các mục từ tất cả bảng thuật ngữ';
$string['rssarticles'] = 'Số bài viết gần đây trong RSS';
$string['rssarticles_help'] = 'Thiết lập này xác định số khái niệm trong mục bảng thuật ngữ được đưa vào nguồn RSS. Thông thường, số lượng từ 5 đến 20 là phù hợp.';
$string['rssfeed'] = 'Nguồn RSS';
$string['rsssubscriberss'] = 'Hiển thị nguồn RSS cho các khái niệm của \'{$a}\\';
$string['rsstype'] = 'Nguồn RSS cho hoạt động này';
$string['rsstype_help'] = 'Để bật nguồn RSS cho hoạt động này, hãy chọn đưa vào nguồn các khái niệm có tác giả hoặc không có tác giả.';
$string['search:activity'] = 'Bảng thuật ngữ - thông tin hoạt động';
$string['search:entry'] = 'Bảng thuật ngữ - các mục';
$string['searchindefinition'] = 'Tìm kiếm toàn văn';
$string['secondaryglossary'] = 'Bảng thuật ngữ phụ';
$string['seeallentries'] = 'Xem tất cả các mục';
$string['showall'] = 'Hiển thị liên kết \'TẤT CẢ\\';
$string['showall_help'] = 'Nếu bật, người tham gia có thể duyệt tất cả các mục cùng lúc.';
$string['showalphabet'] = 'Hiển thị các liên kết chữ cái';
$string['showalphabet_help'] = 'Nếu bật, người tham gia có thể duyệt bảng thuật ngữ theo các chữ cái trong bảng chữ cái.';
$string['showspecial'] = 'Hiển thị liên kết \'Ký tự đặc biệt\\';
$string['showspecial_help'] = 'Nếu bật, người tham gia có thể duyệt bảng thuật ngữ theo các ký tự đặc biệt, chẳng hạn như @ và #.';
$string['sortby'] = 'Sắp xếp theo';
$string['sortbycreation'] = 'Theo ngày tạo';
$string['sortbylastupdate'] = 'Theo lần cập nhật gần nhất';
$string['sortchronogically'] = 'Sắp xếp theo trình tự thời gian';
$string['special'] = 'Ký tự đặc biệt';
$string['standardview'] = 'Duyệt theo bảng chữ cái';
$string['studentcanpost'] = 'Học viên có thể thêm mục';
$string['tagarea_glossary_entries'] = 'Các mục trong bảng thuật ngữ';
$string['tagsdeleted'] = 'Đã xóa các thẻ bảng thuật ngữ';
$string['totalentries'] = 'Tổng số mục';
$string['usedynalink'] = 'Tự động liên kết các mục trong bảng thuật ngữ';
$string['usedynalink_help'] = 'Nếu quản trị viên đã bật tính năng tự động liên kết bảng thuật ngữ trên toàn trang và thiết lập này được bật, biểu mẫu "Thêm mục mới" sẽ có tùy chọn tự động liên kết mục ở mọi nơi các từ và cụm từ của khái niệm xuất hiện trong phần còn lại của khóa học.';
$string['visibletabs'] = 'Các thẻ hiển thị';
$string['warningstudentcapost'] = '(Chỉ áp dụng nếu đây không phải là bảng thuật ngữ chính)';
$string['withauthor'] = 'Các khái niệm có tác giả';
$string['withoutauthor'] = 'Các khái niệm không có tác giả';
$string['writtenby'] = 'bởi';
$string['youarenottheauthor'] = 'Bạn không phải là tác giả của bình luận này nên không được phép chỉnh sửa.';
