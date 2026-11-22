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
 * @subpackage xmldb
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Thực tế';
$string['addpersistent'] = 'Thêm các trường lưu trữ bắt buộc';
$string['aftertable'] = 'Sau bảng:';
$string['back'] = 'Quay lại';
$string['backtomainview'] = 'Quay lại trang chính';
$string['cannotuseidfield'] = 'Không thể chèn trường "id". Đây là cột tự động tăng số.';
$string['change'] = 'Thay đổi';
$string['charincorrectlength'] = 'Độ dài không chính xác cho trường char';
$string['check_bigints'] = 'Tìm số nguyên không chính xác trong cơ sở dữ liệu';
$string['check_defaults'] = 'Tìm các giá trị mặc định không nhất quán';
$string['check_foreign_keys'] = 'Tìm vi phạm khóa ngoại';
$string['check_indexes'] = 'Tìm chỉ mục cơ sở dữ liệu bị thiếu';
$string['checkbigints'] = 'Kiểm tra số nguyên';
$string['checkdefaults'] = 'Kiểm tra giá trị mặc định';
$string['checkforeignkeys'] = 'Kiểm tra khóa ngoại';
$string['checkindexes'] = 'Kiểm tra chỉ mục';
$string['completelogbelow'] = '(xem toàn bộ nhật ký tìm kiếm bên dưới)';
$string['confirmcheckbigints'] = 'Chức năng này tìm kiếm <a href="https://tracker.moodle.org/browse/MDL-11038">các trường số nguyên có khả năng được xác định không chính xác</a> trên máy chủ Moodle của bạn và tạo các câu lệnh SQL cần thiết (nhưng không thực thi!) để xác định chính xác tất cả số nguyên trong cơ sở dữ liệu.

Sau khi được tạo, bạn có thể sao chép các câu lệnh và thực thi chúng an toàn trong giao diện SQL yêu thích (nhớ sao lưu dữ liệu trước).

Bạn nên sử dụng phiên bản mới nhất (+) hiện có của bản phát hành Moodle trước khi tìm kiếm các số nguyên không chính xác.

Chức năng này không thực hiện thao tác nào trên cơ sở dữ liệu (chỉ đọc dữ liệu), vì vậy có thể chạy an toàn bất cứ lúc nào.';
$string['confirmcheckdefaults'] = 'Chức năng này tìm kiếm các giá trị mặc định không nhất quán trên máy chủ Moodle của bạn và tạo các câu lệnh SQL cần thiết (nhưng không thực thi!) để xác định chính xác tất cả giá trị mặc định.

Sau khi được tạo, bạn có thể sao chép các câu lệnh và thực thi chúng an toàn trong giao diện SQL yêu thích (nhớ sao lưu dữ liệu trước).

Bạn nên sử dụng phiên bản mới nhất (+) hiện có của bản phát hành Moodle trước khi tìm kiếm các giá trị mặc định không nhất quán.

Chức năng này không thực hiện thao tác nào trên cơ sở dữ liệu (chỉ đọc dữ liệu), vì vậy có thể chạy an toàn bất cứ lúc nào.';
$string['confirmcheckforeignkeys'] = 'Chức năng này tìm kiếm các vi phạm tiềm ẩn đối với khóa ngoại được xác định trong các định nghĩa install.xml. (Moodle hiện không tạo các ràng buộc khóa ngoại thực tế trong cơ sở dữ liệu, vì vậy có thể tồn tại dữ liệu không hợp lệ.)

Bạn nên sử dụng phiên bản mới nhất (+) hiện có của bản phát hành Moodle trước khi tìm kiếm các vi phạm khóa ngoại tiềm ẩn.

Chức năng này không thực hiện thao tác nào trên cơ sở dữ liệu (chỉ đọc dữ liệu), vì vậy có thể chạy an toàn bất cứ lúc nào.';
$string['confirmcheckindexes'] = 'Chức năng này tìm kiếm các chỉ mục có thể bị thiếu trên máy chủ Moodle của bạn và tạo các câu lệnh SQL cần thiết (nhưng không thực thi!) để đảm bảo mọi thứ được cập nhật.

Sau khi được tạo, bạn có thể sao chép các câu lệnh và thực thi chúng an toàn trong giao diện SQL yêu thích (nhớ sao lưu dữ liệu trước).

Bạn nên sử dụng phiên bản mới nhất (+) hiện có của bản phát hành Moodle trước khi tìm kiếm các chỉ mục bị thiếu.

Chức năng này không thực hiện thao tác nào trên cơ sở dữ liệu (chỉ đọc dữ liệu), vì vậy có thể chạy an toàn bất cứ lúc nào.';
$string['confirmdeletefield'] = 'Bạn có chắc chắn muốn xóa trường này không:';
$string['confirmdeleteindex'] = 'Bạn có chắc chắn muốn xóa chỉ mục này không:';
$string['confirmdeletekey'] = 'Bạn có chắc chắn muốn xóa khóa này không:';
$string['confirmdeletetable'] = 'Bạn có chắc chắn muốn xóa bảng này không:';
$string['confirmdeletexmlfile'] = 'Bạn có chắc chắn muốn xóa tệp này không:';
$string['confirmrevertchanges'] = 'Bạn có chắc chắn muốn hoàn nguyên các thay đổi đã thực hiện đối với:';
$string['create'] = 'Tạo';
$string['createtable'] = 'Tạo bảng:';
$string['defaultincorrect'] = 'Giá trị mặc định không chính xác';
$string['delete'] = 'Xóa';
$string['delete_field'] = 'Xóa trường';
$string['delete_index'] = 'Xóa chỉ mục';
$string['delete_key'] = 'Xóa khóa';
$string['delete_table'] = 'Xóa bảng';
$string['delete_xml_file'] = 'Xóa tệp XML';
$string['doc'] = 'Tài liệu';
$string['docindex'] = 'Chỉ mục tài liệu:';
$string['documentationintro'] = 'Tài liệu này được tự động tạo từ định nghĩa cơ sở dữ liệu XMLDB. Tài liệu chỉ có bằng tiếng Anh.';
$string['down'] = 'Xuống';
$string['duplicate'] = 'Sao chép';
$string['duplicatefieldname'] = 'Đã tồn tại một trường khác có tên này';
$string['duplicatefieldsused'] = 'Các trường được dùng bị trùng lặp';
$string['duplicateindexname'] = 'Tên chỉ mục bị trùng';
$string['duplicatekeyname'] = 'Đã tồn tại một khóa khác có tên này';
$string['duplicatetablename'] = 'Đã tồn tại một bảng khác có tên này';
$string['edit'] = 'Chỉnh sửa';
$string['edit_field'] = 'Chỉnh sửa trường';
$string['edit_field_save'] = 'Lưu trường';
$string['edit_index'] = 'Chỉnh sửa chỉ mục';
$string['edit_index_save'] = 'Lưu chỉ mục';
$string['edit_key'] = 'Chỉnh sửa khóa';
$string['edit_key_save'] = 'Lưu khóa';
$string['edit_table'] = 'Chỉnh sửa bảng';
$string['edit_table_save'] = 'Lưu bảng';
$string['edit_xml_file'] = 'Chỉnh sửa tệp XML';
$string['enumvaluesincorrect'] = 'Giá trị không hợp lệ cho trường enum';
$string['expected'] = 'Mong đợi';
$string['extensionrequired'] = 'Rất tiếc - cần có phần mở rộng PHP \'{$a}\' để thực hiện thao tác này. Vui lòng cài đặt phần mở rộng nếu bạn muốn sử dụng tính năng này.';
$string['extraindexesfound'] = 'Tìm thấy chỉ mục thừa';
$string['field'] = 'Trường';
$string['fieldnameempty'] = 'Tên trường đang để trống';
$string['fields'] = 'Các trường';
$string['fieldsnotintable'] = 'Trường không tồn tại trong bảng';
$string['fieldsusedinindex'] = 'Trường này được dùng làm chỉ mục';
$string['fieldsusedinkey'] = 'Trường này được dùng làm khóa.';
$string['filemodifiedoutfromeditor'] = 'Cảnh báo: Tệp đã được sửa đổi cục bộ khi đang sử dụng XMLDB Editor. Lưu sẽ ghi đè các thay đổi cục bộ.';
$string['filenotwriteable'] = 'Không thể ghi vào tệp';
$string['fkunknownfield'] = 'Khóa ngoại {$a->keyname} trên bảng {$a->tablename} trỏ đến trường không tồn tại {$a->reffield} trong bảng được tham chiếu {$a->reftable}.';
$string['fkunknowntable'] = 'Khóa ngoại {$a->keyname} trên bảng {$a->tablename} trỏ đến bảng không tồn tại {$a->reftable}.';
$string['fkviolationdetails'] = 'Khóa ngoại {$a->keyname} trên bảng {$a->tablename} bị vi phạm bởi {$a->numviolations} trong số {$a->numrows} hàng.';
$string['float2numbernote'] = 'Lưu ý: Mặc dù các trường "float" được XMLDB hỗ trợ đầy đủ, bạn nên chuyển sang dùng các trường "number".';
$string['floatincorrectdecimals'] = 'Số chữ số thập phân không chính xác cho trường float';
$string['floatincorrectlength'] = 'Độ dài không chính xác cho trường float';
$string['generate_all_documentation'] = 'Toàn bộ tài liệu';
$string['generate_documentation'] = 'Tài liệu';
$string['gotolastused'] = 'Đi đến tệp được sử dụng gần đây nhất';
$string['incorrectfieldname'] = 'Tên không hợp lệ';
$string['incorrectindexname'] = 'Tên chỉ mục không hợp lệ';
$string['incorrectkeyname'] = 'Tên khóa không hợp lệ';
$string['incorrecttablename'] = 'Tên bảng không hợp lệ';
$string['index'] = 'Chỉ mục';
$string['indexes'] = 'Các chỉ mục';
$string['indexnameempty'] = 'Tên chỉ mục đang để trống';
$string['integerincorrectlength'] = 'Độ dài của trường số nguyên không chính xác';
$string['key'] = 'Khóa';
$string['keynameempty'] = 'Tên khóa không được để trống';
$string['keys'] = 'Các khóa';
$string['listreservedwords'] = 'Danh sách từ dành riêng<br />(dùng để cập nhật <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">các từ dành riêng của XMLDB</a>)';
$string['load'] = 'Tải';
$string['main_view'] = 'Giao diện chính';
$string['masterprimaryuniqueordernomatch'] = 'Các trường trong khóa ngoại phải được liệt kê theo cùng thứ tự như trong UNIQUE KEY của bảng được tham chiếu.';
$string['missing'] = 'Thiếu';
$string['missingindexes'] = 'Đã phát hiện chỉ mục bị thiếu';
$string['mustselectonefield'] = 'Bạn phải chọn một trường để xem các thao tác liên quan đến trường!';
$string['mustselectoneindex'] = 'Bạn phải chọn một chỉ mục để xem các thao tác liên quan đến chỉ mục!';
$string['mustselectonekey'] = 'Bạn phải chọn một khóa để xem các thao tác liên quan đến khóa!';
$string['new_table_from_mysql'] = 'Bảng mới từ MySQL';
$string['newfield'] = 'Trường mới';
$string['newindex'] = 'Chỉ mục mới';
$string['newkey'] = 'Khóa mới';
$string['newtable'] = 'Bảng mới';
$string['newtablefrommysql'] = 'Bảng mới từ MySQL';
$string['nofieldsspecified'] = 'Chưa chỉ định trường nào';
$string['nomasterprimaryuniquefound'] = 'Các cột mà khóa ngoại tham chiếu phải thuộc một KEY chính hoặc duy nhất trong bảng được tham chiếu. Lưu ý rằng cột nằm trong UNIQUE INDEX là chưa đủ.';
$string['nomissingorextraindexesfound'] = 'Không phát hiện chỉ mục bị thiếu hoặc thừa, vì vậy không cần thực hiện thêm thao tác nào.';
$string['noreffieldsspecified'] = 'Chưa chỉ định trường tham chiếu nào';
$string['noreftablespecified'] = 'Không tìm thấy bảng tham chiếu đã chỉ định';
$string['noviolatedforeignkeysfound'] = 'Không phát hiện khóa ngoại nào bị vi phạm';
$string['nowrongdefaultsfound'] = 'Không phát hiện giá trị mặc định nào không nhất quán. Cơ sở dữ liệu của bạn không cần thực hiện thêm thao tác nào.';
$string['nowrongintsfound'] = 'Không phát hiện số nguyên nào không chính xác. Cơ sở dữ liệu của bạn không cần thực hiện thêm thao tác nào.';
$string['numberincorrectdecimals'] = 'Số chữ số thập phân của trường số không chính xác';
$string['numberincorrectlength'] = 'Độ dài của trường số không chính xác';
$string['numberincorrectwholepart'] = 'Phần nguyên của trường số quá lớn';
$string['pendingchanges'] = 'Lưu ý: Bạn đã thay đổi tệp này. Bạn có thể lưu các thay đổi bất cứ lúc nào.';
$string['pendingchangescannotbesaved'] = 'Tệp này có thay đổi nhưng không thể lưu! Vui lòng xác minh rằng cả thư mục và tệp "install.xml" bên trong đều có quyền ghi dành cho máy chủ web.';
$string['pendingchangescannotbesavedreload'] = 'Tệp này có thay đổi nhưng không thể lưu! Vui lòng xác minh rằng cả thư mục và tệp "install.xml" bên trong đều có quyền ghi dành cho máy chủ web. Sau đó tải lại trang này để có thể lưu các thay đổi.';
$string['persistentfieldscomplete'] = 'Các trường sau đã được thêm:';
$string['persistentfieldsconfirm'] = 'Bạn có muốn thêm các trường sau không:';
$string['persistentfieldsexist'] = 'Các trường sau đã tồn tại:';
$string['pluginname'] = 'Trình chỉnh sửa XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Khóa chính không được phép có giá trị null';
$string['privacy:metadata'] = 'Plugin trình chỉnh sửa XMLDB không lưu trữ dữ liệu cá nhân nào.';
$string['reconcile_files'] = 'Tìm các tệp XMLDB cần được đối chiếu';
$string['reconcile_files_intro'] = 'Chức năng này kiểm tra nội dung của tất cả các tệp XMLDB để xác minh rằng chúng khớp với kết quả được tạo từ trình chỉnh sửa XMLDB.

Danh sách các tệp cần được đối chiếu (tạo lại) sẽ hiển thị và có thể dùng trình chỉnh sửa XMLDB để khắc phục.';
$string['reconcile_files_no'] = 'Tất cả các tệp đều ổn. Không cần đối chiếu.';
$string['reconcile_files_yes'] = 'Đã tìm thấy các tệp cần đối chiếu:';
$string['reconcilefiles'] = 'Đối chiếu các tệp XMLDB';
$string['reserved'] = 'Được dành riêng';
$string['reservedwords'] = 'Từ dành riêng';
$string['revert'] = 'Hoàn nguyên';
$string['revert_changes'] = 'Hoàn nguyên các thay đổi';
$string['save'] = 'Lưu';
$string['searchresults'] = 'Kết quả tìm kiếm';
$string['selectaction'] = 'Chọn thao tác:';
$string['selectdb'] = 'Chọn cơ sở dữ liệu:';
$string['selectfieldkeyindex'] = 'Chọn trường/khóa/chỉ mục:';
$string['selectonecommand'] = 'Vui lòng chọn một thao tác trong danh sách để xem mã PHP';
$string['selectonefieldkeyindex'] = 'Vui lòng chọn một trường/khóa/chỉ mục trong danh sách để xem mã PHP';
$string['selecttable'] = 'Chọn bảng:';
$string['table'] = 'Bảng';
$string['tablenameempty'] = 'Tên bảng không được để trống';
$string['tables'] = 'Các bảng';
$string['unknownfield'] = 'Tham chiếu đến một trường không xác định';
$string['unknowntable'] = 'Tham chiếu đến một bảng không xác định';
$string['unload'] = 'Dỡ tải';
$string['up'] = 'Lên';
$string['view'] = 'Xem';
$string['view_reserved_words'] = 'Xem các từ dành riêng';
$string['view_structure_php'] = 'Xem PHP cấu trúc';
$string['view_structure_sql'] = 'Xem SQL cấu trúc';
$string['view_table_php'] = 'Xem PHP bảng';
$string['view_table_sql'] = 'Xem SQL bảng';
$string['viewedited'] = 'Xem bản đã chỉnh sửa';
$string['vieworiginal'] = 'Xem bản gốc';
$string['viewphpcode'] = 'Xem mã PHP';
$string['viewsqlcode'] = 'Xem mã SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Các khóa ngoại bị vi phạm';
$string['violatedforeignkeysfound'] = 'Đã phát hiện khóa ngoại bị vi phạm';
$string['violations'] = 'Các vi phạm';
$string['wrong'] = 'Sai';
$string['wrongdefaults'] = 'Đã phát hiện giá trị mặc định không chính xác';
$string['wrongints'] = 'Đã phát hiện số nguyên không chính xác';
$string['wronglengthforenum'] = 'Độ dài của trường enum không chính xác';
$string['wrongnumberofreffields'] = 'Số lượng trường tham chiếu không chính xác';
$string['wrongreservedwords'] = 'Các từ dành riêng hiện đang được sử dụng<br />(lưu ý rằng tên bảng không quan trọng nếu sử dụng $CFG->prefix)';
$string['yesextraindexesfound'] = 'Đã phát hiện các chỉ mục bổ sung sau.';
$string['yesmissingindexesfound'] = '<p>Đã phát hiện một số chỉ mục bị thiếu trong cơ sở dữ liệu của bạn. Dưới đây là thông tin chi tiết và các câu lệnh SQL cần chạy trong công cụ SQL bạn chọn để tạo chúng. Hãy nhớ sao lưu dữ liệu trước!</p>
<p>Bạn nên chạy lại tiện ích này để kiểm tra xem còn chỉ mục nào bị thiếu hay không.</p>';
$string['yeswrongdefaultsfound'] = '<p>Đã phát hiện một số giá trị mặc định không nhất quán trong cơ sở dữ liệu của bạn. Dưới đây là thông tin chi tiết và các câu lệnh SQL cần chạy trong công cụ SQL bạn chọn để khắc phục. Hãy nhớ sao lưu dữ liệu trước!</p>
<p>Bạn nên chạy lại tiện ích này để kiểm tra xem còn giá trị mặc định nào không nhất quán hay không.</p>';
$string['yeswrongintsfound'] = '<p>Đã phát hiện một số số nguyên không chính xác trong cơ sở dữ liệu của bạn. Dưới đây là thông tin chi tiết và các câu lệnh SQL cần chạy trong công cụ SQL bạn chọn để khắc phục. Hãy nhớ sao lưu dữ liệu trước!</p>
<p>Bạn nên chạy lại tiện ích này để kiểm tra xem còn số nguyên nào không chính xác hay không.</p>';
