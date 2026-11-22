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
 * @subpackage dataprivacy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Hoạt động và tài nguyên';
$string['addcategory'] = 'Thêm danh mục';
$string['addnewdefaults'] = 'Thêm mặc định mô-đun mới';
$string['addpurpose'] = 'Thêm mục đích';
$string['addroleoverride'] = 'Thêm ghi đè vai trò';
$string['allowfiltering'] = 'Cho phép lọc dữ liệu xuất theo khóa học';
$string['allowfiltering_desc'] = 'Nếu bật, cán bộ phụ trách quyền riêng tư có thể chọn xuất dữ liệu người dùng từ các khóa học đã chọn thay vì tất cả khóa học. Khi bật tính năng này, yêu cầu xuất sẽ bắt đầu ở trạng thái \'Đang chờ xử lý\' và chỉ có thể được phê duyệt sau khi tác vụ nền hoàn tất.';
$string['approve'] = 'Phê duyệt';
$string['approvedrequestsubmitted'] = 'Yêu cầu của bạn đã được gửi và sẽ sớm được xử lý.';
$string['approverequest'] = 'Phê duyệt yêu cầu';
$string['approverequestall'] = 'Phê duyệt yêu cầu (tất cả dữ liệu)';
$string['approveselectedcourses'] = 'Phê duyệt các khóa học đã chọn';
$string['automaticdatadeletionapproval'] = 'Tự động phê duyệt yêu cầu xóa dữ liệu';
$string['automaticdatadeletionapproval_desc'] = 'Nếu được bật, các yêu cầu xóa dữ liệu sẽ tự động được phê duyệt.<br/>Lưu ý rằng tính năng tự động phê duyệt chỉ áp dụng cho các yêu cầu xóa dữ liệu mới khi bật cài đặt này. Các yêu cầu xóa dữ liệu hiện có đang chờ phê duyệt vẫn cần được cán bộ phụ trách quyền riêng tư phê duyệt thủ công.';
$string['automaticdataexportapproval'] = 'Phê duyệt tự động yêu cầu xuất dữ liệu';
$string['automaticdataexportapproval_desc'] = 'Nếu bật, các yêu cầu xuất dữ liệu sẽ được tự động phê duyệt.<br/>Lưu ý: việc phê duyệt tự động chỉ áp dụng cho các yêu cầu xuất dữ liệu mới khi bật cài đặt này. Các yêu cầu xuất dữ liệu hiện có đang chờ phê duyệt vẫn phải được cán bộ phụ trách quyền riêng tư phê duyệt thủ công.';
$string['automaticdeletionrequests'] = 'Tạo yêu cầu xóa dữ liệu tự động';
$string['automaticdeletionrequests_desc'] = 'Nếu bật, yêu cầu xóa dữ liệu sẽ tự động được tạo khi bất kỳ tài khoản người dùng nào bị xóa thủ công.';
$string['bulkapproverequests'] = 'Phê duyệt yêu cầu';
$string['bulkdenyrequests'] = 'Từ chối yêu cầu';
$string['cachedef_contextlevel'] = 'Mục đích và danh mục cấp ngữ cảnh';
$string['cachedef_purpose'] = 'Mục đích dữ liệu';
$string['cachedef_purpose_overrides'] = 'Ghi đè mục đích trong công cụ Quyền riêng tư dữ liệu';
$string['cancelrequest'] = 'Hủy yêu cầu';
$string['cancelrequestconfirmation'] = 'Bạn có muốn hủy yêu cầu dữ liệu này không?';
$string['cannotreset'] = 'Không thể đặt lại yêu cầu này. Chỉ có thể đặt lại các yêu cầu bị từ chối.';
$string['categories'] = 'Các danh mục';
$string['categorieslist'] = 'Danh sách danh mục dữ liệu';
$string['category'] = 'Danh mục';
$string['category_help'] = 'Danh mục trong sổ đăng ký dữ liệu mô tả một loại dữ liệu. Có thể thêm danh mục mới hoặc chọn Kế thừa để áp dụng danh mục dữ liệu từ ngữ cảnh cấp cao hơn. Các ngữ cảnh theo thứ tự từ thấp đến cao là: Khối > Mô-đun hoạt động > Khóa học > Danh mục khóa học > Trang chính.';
$string['categorycreated'] = 'Đã tạo danh mục';
$string['categorydefault'] = 'Danh mục mặc định';
$string['categorydefault_help'] = 'Danh mục mặc định là danh mục dữ liệu được áp dụng cho mọi phiên bản mới. Nếu chọn Kế thừa, danh mục dữ liệu từ ngữ cảnh cấp cao hơn sẽ được áp dụng. Các ngữ cảnh theo thứ tự từ thấp đến cao là: Khối > Mô-đun hoạt động > Khóa học > Danh mục khóa học > Người dùng > Trang chính.';
$string['categoryupdated'] = 'Đã cập nhật danh mục';
$string['close'] = 'Đóng';
$string['compliant'] = 'Tuân thủ';
$string['confirmapproval'] = 'Bạn có thực sự muốn phê duyệt yêu cầu dữ liệu này không?';
$string['confirmbulkapproval'] = 'Bạn có thực sự muốn phê duyệt hàng loạt các yêu cầu dữ liệu đã chọn không?';
$string['confirmbulkdenial'] = 'Bạn có thực sự muốn từ chối hàng loạt các yêu cầu dữ liệu đã chọn không?';
$string['confirmcompletion'] = 'Bạn có thực sự muốn đánh dấu yêu cầu của người dùng này là đã hoàn tất không?';
$string['confirmcontextdeletion'] = 'Bạn có thực sự muốn xác nhận xóa các ngữ cảnh đã chọn không? Thao tác này cũng sẽ xóa toàn bộ dữ liệu người dùng trong các ngữ cảnh con tương ứng.';
$string['confirmdenial'] = 'Bạn có thực sự muốn từ chối yêu cầu dữ liệu này không?';
$string['confirmrequestresubmit'] = 'Bạn có chắc muốn hủy yêu cầu {$a->type} hiện tại của {$a->username} và gửi lại yêu cầu không?';
$string['contactdataprotectionofficer'] = 'Liên hệ cán bộ phụ trách quyền riêng tư';
$string['contactdataprotectionofficer_desc'] = 'Nếu bật, người dùng có thể liên hệ với cán bộ phụ trách quyền riêng tư và gửi yêu cầu dữ liệu thông qua liên kết trên trang hồ sơ của họ.';
$string['contactdpoviaprivacypolicy'] = 'Vui lòng liên hệ cán bộ phụ trách quyền riêng tư như mô tả trong chính sách quyền riêng tư.';
$string['contextlevelname10'] = 'Trang chính';
$string['contextlevelname30'] = 'Người dùng';
$string['contextlevelname40'] = 'Danh mục khóa học';
$string['contextlevelname50'] = 'Khóa học';
$string['contextlevelname70'] = 'Mô-đun hoạt động';
$string['contextlevelname80'] = 'Khối';
$string['contextpurposecategorysaved'] = 'Đã lưu mục đích và danh mục.';
$string['createcategory'] = 'Tạo danh mục dữ liệu';
$string['createdeletedatarequest'] = 'Tạo yêu cầu xóa dữ liệu';
$string['createnewdatarequest'] = 'Tạo yêu cầu dữ liệu mới';
$string['createpurpose'] = 'Tạo mục đích dữ liệu';
$string['creationauto'] = 'Tự động';
$string['creationmanual'] = 'Thủ công';
$string['datadeletion'] = 'Xóa dữ liệu';
$string['datadeletionpagehelp'] = 'Dữ liệu đã hết thời hạn lưu trữ được liệt kê tại đây. Vui lòng xem lại và xác nhận việc xóa dữ liệu; thao tác xóa sau đó sẽ được thực hiện bởi tác vụ đã lên lịch "Xóa các ngữ cảnh hết hạn".';
$string['dataprivacy:downloadallrequests'] = 'Tải xuống dữ liệu đã xuất của mọi người';
$string['dataprivacy:downloadownrequest'] = 'Tải xuống dữ liệu đã xuất của chính bạn';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Yêu cầu xóa dữ liệu của trẻ vị thành niên';
$string['dataprivacy:makedatarequestsforchildren'] = 'Gửi yêu cầu dữ liệu cho trẻ vị thành niên';
$string['dataprivacy:managedataregistry'] = 'Quản lý sổ đăng ký dữ liệu';
$string['dataprivacy:managedatarequests'] = 'Quản lý yêu cầu dữ liệu';
$string['dataprivacy:requestdelete'] = 'Yêu cầu xóa dữ liệu của chính bạn';
$string['dataprivacy:requestdeleteforotheruser'] = 'Yêu cầu xóa dữ liệu thay mặt người dùng khác';
$string['dataregistry'] = 'Sổ đăng ký dữ liệu';
$string['dataregistryinfo'] = 'Sổ đăng ký dữ liệu cho phép thiết lập danh mục (loại dữ liệu) và mục đích (lý do xử lý dữ liệu) cho tất cả nội dung trên trang web, từ người dùng và khóa học đến hoạt động và khối. Có thể thiết lập thời hạn lưu trữ cho từng mục đích. Khi hết thời hạn lưu trữ, dữ liệu sẽ được đánh dấu và liệt kê để xóa, chờ quản trị viên xác nhận.';
$string['datarequestcreatedforuser'] = 'Đã tạo yêu cầu dữ liệu cho {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Được tạo tự động từ tác vụ đã lên lịch (người dùng đã bị xóa trước đó).';
$string['datarequestcreatedupondelete'] = 'Được tạo tự động khi xóa người dùng.';
$string['datarequestemailsubject'] = 'Yêu cầu dữ liệu: {$a}';
$string['datarequests'] = 'Các yêu cầu dữ liệu';
$string['dataretentionexplanation'] = 'Bản tóm tắt này hiển thị các danh mục và mục đích mặc định để lưu trữ dữ liệu người dùng. Một số khu vực có thể có danh mục và mục đích cụ thể hơn những mục được liệt kê ở đây.';
$string['dataretentionsummary'] = 'Tóm tắt thời hạn lưu trữ dữ liệu';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'Ngày yêu cầu';
$string['daterequesteddetail'] = 'Ngày yêu cầu:';
$string['defaultexpired'] = 'Dữ liệu của tất cả người dùng';
$string['defaultexpiredexcept'] = 'Dữ liệu của tất cả người dùng, ngoại trừ những người có một trong các vai trò sau:<br>
{$a->unexpired}';
$string['defaultsinfo'] = 'Danh mục và mục đích mặc định được áp dụng cho tất cả phiên bản mới và hiện có nếu chưa thiết lập giá trị.';
$string['defaultssaved'] = 'Đã lưu các giá trị mặc định';
$string['defaultswarninginfo'] = 'Cảnh báo: Thay đổi các giá trị mặc định này có thể ảnh hưởng đến thời hạn lưu trữ của các phiên bản hiện có.';
$string['defaultunexpired'] = 'Chỉ dữ liệu của người dùng có một trong các vai trò sau:<br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Chỉ dữ liệu của người dùng có một trong các vai trò sau:<br>
{$a->expired}
Trừ khi họ cũng có một trong các vai trò sau:<br>
{$a->unexpired}';
$string['deletecategory'] = 'Xóa danh mục';
$string['deletecategorytext'] = 'Bạn có chắc muốn xóa danh mục \'{$a}\' không?';
$string['deletedefaults'] = 'Xóa các giá trị mặc định: {$a}';
$string['deletedefaultsconfirmation'] = 'Bạn có chắc muốn xóa danh mục và mục đích mặc định cho {$a} mô-đun không?';
$string['deleteexistingdeleteduserstask'] = 'Tạo yêu cầu xóa dữ liệu cho người dùng đã bị xóa trước đó';
$string['deleteexpiredcontextstask'] = 'Xóa các ngữ cảnh hết hạn';
$string['deleteexpireddatarequeststask'] = 'Xóa các tệp xuất yêu cầu dữ liệu đã hết hạn';
$string['deletemyaccount'] = 'Xóa tài khoản của tôi';
$string['deletepurpose'] = 'Xóa mục đích';
$string['deletepurposetext'] = 'Bạn có chắc muốn xóa mục đích \'{$a}\' không?';
$string['deny'] = 'Từ chối';
$string['denyrequest'] = 'Từ chối yêu cầu';
$string['deprecated'] = 'Không còn được dùng';
$string['deprecatedexplanation'] = 'Plugin này đang sử dụng phiên bản cũ của một trong các giao diện quyền riêng tư và cần được cập nhật.';
$string['download'] = 'Tải xuống';
$string['downloadexpireduser'] = 'Tệp tải xuống đã hết hạn. Gửi yêu cầu mới nếu bạn muốn xuất dữ liệu cá nhân của mình.';
$string['dporolemapping'] = 'Ánh xạ vai trò cán bộ phụ trách quyền riêng tư';
$string['dporolemapping_desc'] = 'Cán bộ phụ trách quyền riêng tư có thể quản lý các yêu cầu dữ liệu. Quyền năng lực tool/dataprivacy:managedatarequests phải được cho phép đối với một vai trò thì vai trò đó mới được liệt kê làm tùy chọn ánh xạ vai trò cán bộ phụ trách quyền riêng tư.';
$string['duplicaterole'] = 'Vai trò đã được chỉ định';
$string['editcategories'] = 'Chỉnh sửa các danh mục';
$string['editcategory'] = 'Chỉnh sửa danh mục';
$string['editdefaults'] = 'Chỉnh sửa giá trị mặc định: {$a}';
$string['editmoduledefaults'] = 'Chỉnh sửa giá trị mặc định của mô-đun';
$string['editpurpose'] = 'Chỉnh sửa mục đích';
$string['editpurposes'] = 'Chỉnh sửa các mục đích';
$string['effectiveretentionperiodcourse'] = '{$a} (sau ngày kết thúc khóa học)';
$string['effectiveretentionperioduser'] = '{$a} (kể từ lần cuối người dùng truy cập trang web)';
$string['emailsalutation'] = 'Kính gửi {$a},';
$string['errorcannotrequestdeleteforother'] = 'Bạn không có quyền tạo yêu cầu xóa dữ liệu cho người dùng này.';
$string['errorcannotrequestdeleteforself'] = 'Bạn không có quyền tạo yêu cầu xóa dữ liệu cho chính mình.';
$string['errorcannotrequestexportforself'] = 'Bạn không có quyền tạo yêu cầu xuất dữ liệu cho chính mình.';
$string['errorcontactdpodisabled'] = 'Tùy chọn liên hệ cán bộ phụ trách quyền riêng tư đã bị tắt.';
$string['errorcontexthasunexpiredchildren'] = 'Ngữ cảnh "{$a}" vẫn có các ngữ cảnh con chưa hết hạn. Không có ngữ cảnh nào được đánh dấu để xóa.';
$string['errorinvalidrequestcomments'] = 'Trường nhận xét chỉ được chứa văn bản thuần.';
$string['errorinvalidrequestcreationmethod'] = 'Phương thức tạo yêu cầu không hợp lệ!';
$string['errorinvalidrequeststatus'] = 'Trạng thái yêu cầu không hợp lệ!';
$string['errorinvalidrequesttype'] = 'Loại yêu cầu không hợp lệ!';
$string['errornocapabilitytorequestforothers'] = 'Người dùng {$a->requestedby} không có quyền năng lực để gửi yêu cầu dữ liệu thay mặt người dùng {$a->userid}';
$string['errornoexpiredcontexts'] = 'Không có ngữ cảnh nào hết hạn cần xử lý';
$string['errornoselectedcourse'] = 'Bạn phải chọn ít nhất một khóa học';
$string['errorrequestalreadyexists'] = 'Bạn đã có một yêu cầu đang được xử lý.';
$string['errorrequestnotfound'] = 'Không tìm thấy yêu cầu';
$string['errorrequestnotwaitingforapproval'] = 'Yêu cầu không đang chờ phê duyệt. Yêu cầu có thể chưa sẵn sàng hoặc đã được xử lý.';
$string['errorsendingmessagetodpo'] = 'Đã xảy ra lỗi khi gửi tin nhắn đến {$a}.';
$string['exceptionnotificationbody'] = '<p>Đã xảy ra ngoại lệ khi gọi <b>{$a->fullmethodname}</b>.<br>Điều này có nghĩa là plugin <b>{$a->component}</b> chưa hoàn tất việc xử lý dữ liệu. Thông tin ngoại lệ sau đây có thể được chuyển cho nhà phát triển plugin:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Đã xảy ra ngoại lệ khi xử lý dữ liệu quyền riêng tư';
$string['expandplugin'] = 'Mở rộng và thu gọn plugin.';
$string['expandplugintype'] = 'Mở rộng và thu gọn loại plugin.';
$string['expiredretentionperiodtask'] = 'Thời hạn lưu trữ đã hết';
$string['expiredrolewithretention'] = '{$a->retention} (Đã hết hạn)';
$string['expiry'] = 'Thời điểm hết hạn';
$string['explanationtitle'] = 'Các biểu tượng được sử dụng trên trang này và ý nghĩa của chúng.';
$string['external'] = 'Bổ sung';
$string['externalexplanation'] = 'Một plugin bổ sung được cài đặt trên trang web này.';
$string['filterexportdata'] = 'Phê duyệt yêu cầu (dữ liệu từ các khóa học đã chọn)';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Khóa học trang chủ';
$string['gdpr_art_6_1_a_description'] = 'Chủ thể dữ liệu đã đồng ý xử lý dữ liệu cá nhân của mình cho một hoặc nhiều mục đích cụ thể';
$string['gdpr_art_6_1_a_name'] = 'Sự đồng ý (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Việc xử lý là cần thiết để thực hiện hợp đồng mà chủ thể dữ liệu là một bên hoặc để thực hiện các bước theo yêu cầu của chủ thể dữ liệu trước khi giao kết hợp đồng';
$string['gdpr_art_6_1_b_name'] = 'Hợp đồng (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Việc xử lý là cần thiết để tuân thủ nghĩa vụ pháp lý mà bên kiểm soát dữ liệu phải thực hiện';
$string['gdpr_art_6_1_c_name'] = 'Nghĩa vụ pháp lý (GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'Việc xử lý là cần thiết để bảo vệ lợi ích thiết yếu của chủ thể dữ liệu hoặc của một cá nhân khác';
$string['gdpr_art_6_1_d_name'] = 'Lợi ích thiết yếu (GDPR Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Việc xử lý là cần thiết để thực hiện nhiệm vụ vì lợi ích công cộng hoặc khi thực thi thẩm quyền chính thức được trao cho bên kiểm soát dữ liệu';
$string['gdpr_art_6_1_e_name'] = 'Nhiệm vụ công (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Việc xử lý là cần thiết cho các mục đích phục vụ lợi ích hợp pháp mà bên kiểm soát dữ liệu hoặc bên thứ ba theo đuổi, trừ khi lợi ích đó bị lấn át bởi lợi ích, các quyền cơ bản và quyền tự do của chủ thể dữ liệu cần được bảo vệ dữ liệu cá nhân, đặc biệt khi chủ thể dữ liệu là trẻ em';
$string['gdpr_art_6_1_f_name'] = 'Lợi ích hợp pháp (GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'Chủ thể dữ liệu đã đưa ra sự đồng ý rõ ràng cho việc xử lý dữ liệu cá nhân đó vì một hoặc nhiều mục đích cụ thể, trừ trường hợp luật của Liên minh hoặc quốc gia thành viên quy định rằng chủ thể dữ liệu không thể gỡ bỏ lệnh cấm được nêu tại khoản 1 Điều 9 GDPR';
$string['gdpr_art_9_2_a_name'] = 'Sự đồng ý rõ ràng (GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Việc xử lý là cần thiết để thực hiện các nghĩa vụ và quyền cụ thể của bên kiểm soát dữ liệu hoặc chủ thể dữ liệu trong lĩnh vực lao động, an sinh xã hội và luật bảo trợ xã hội, trong phạm vi được luật của Liên minh hoặc quốc gia thành viên hoặc thỏa ước tập thể theo luật của quốc gia thành viên cho phép, đồng thời có các biện pháp bảo vệ thích hợp đối với các quyền cơ bản và lợi ích của chủ thể dữ liệu';
$string['gdpr_art_9_2_b_name'] = 'Luật lao động và an sinh/bảo trợ xã hội (GDPR Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Việc xử lý là cần thiết để bảo vệ lợi ích thiết yếu của chủ thể dữ liệu hoặc của một cá nhân khác khi chủ thể dữ liệu không thể đồng ý về mặt thể chất hoặc pháp lý';
$string['gdpr_art_9_2_c_name'] = 'Bảo vệ lợi ích thiết yếu (GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Việc xử lý được thực hiện trong khuôn khổ các hoạt động hợp pháp, với các biện pháp bảo vệ thích hợp, bởi một quỹ, hiệp hội hoặc tổ chức phi lợi nhuận khác có mục tiêu chính trị, triết học, tôn giáo hoặc công đoàn; với điều kiện việc xử lý chỉ liên quan đến thành viên, cựu thành viên hoặc những người thường xuyên liên hệ với tổ chức đó vì các mục đích của tổ chức, và dữ liệu cá nhân không được tiết lộ ra bên ngoài tổ chức nếu không có sự đồng ý của chủ thể dữ liệu';
$string['gdpr_art_9_2_d_name'] = 'Các hoạt động hợp pháp liên quan đến thành viên/người liên hệ thân thiết của quỹ, hiệp hội hoặc tổ chức phi lợi nhuận khác (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Việc xử lý liên quan đến dữ liệu cá nhân được chủ thể dữ liệu công khai rõ ràng';
$string['gdpr_art_9_2_e_name'] = 'Dữ liệu do chủ thể dữ liệu công khai (GDPR Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Việc xử lý là cần thiết để xác lập, thực hiện hoặc bảo vệ các khiếu kiện pháp lý, hoặc khi tòa án thực hiện chức năng xét xử';
$string['gdpr_art_9_2_f_name'] = 'Khiếu kiện pháp lý và thủ tục tố tụng tại tòa án (GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Việc xử lý là cần thiết vì lý do lợi ích công cộng quan trọng, căn cứ theo luật của Liên minh hoặc quốc gia thành viên; luật này phải tương xứng với mục tiêu theo đuổi, tôn trọng bản chất của quyền bảo vệ dữ liệu và quy định các biện pháp phù hợp, cụ thể để bảo vệ các quyền cơ bản và lợi ích của chủ thể dữ liệu';
$string['gdpr_art_9_2_g_name'] = 'Lợi ích công cộng quan trọng (GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Việc xử lý là cần thiết cho mục đích y tế dự phòng hoặc y tế nghề nghiệp, đánh giá năng lực làm việc của người lao động, chẩn đoán y tế, cung cấp dịch vụ chăm sóc hoặc điều trị sức khỏe hay xã hội, hoặc quản lý các hệ thống và dịch vụ chăm sóc sức khỏe hoặc xã hội, căn cứ theo luật của Liên minh hoặc quốc gia thành viên hoặc theo hợp đồng với chuyên gia y tế, đồng thời tuân theo các điều kiện và biện pháp bảo vệ nêu tại khoản 3 Điều 9 GDPR';
$string['gdpr_art_9_2_h_name'] = 'Mục đích y tế (GDPR Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Việc xử lý là cần thiết vì lý do lợi ích công cộng trong lĩnh vực y tế công cộng, chẳng hạn như bảo vệ trước các mối đe dọa nghiêm trọng xuyên biên giới đối với sức khỏe hoặc bảo đảm tiêu chuẩn cao về chất lượng và an toàn của dịch vụ chăm sóc sức khỏe, dược phẩm hoặc thiết bị y tế; căn cứ theo luật của Liên minh hoặc quốc gia thành viên quy định các biện pháp phù hợp, cụ thể để bảo vệ quyền và quyền tự do của chủ thể dữ liệu, đặc biệt là nghĩa vụ bảo mật nghề nghiệp';
$string['gdpr_art_9_2_i_name'] = 'Y tế công cộng (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Việc xử lý là cần thiết cho mục đích lưu trữ vì lợi ích công cộng, nghiên cứu khoa học hoặc lịch sử, hoặc mục đích thống kê theo Điều 89(1), căn cứ theo luật của Liên minh hoặc quốc gia thành viên; luật này phải tương xứng với mục tiêu theo đuổi, tôn trọng bản chất của quyền bảo vệ dữ liệu và quy định các biện pháp phù hợp, cụ thể để bảo vệ các quyền cơ bản và lợi ích của chủ thể dữ liệu';
$string['gdpr_art_9_2_j_name'] = 'Lợi ích công cộng hoặc nghiên cứu khoa học/lịch sử/thống kê (GDPR Art. 9.2(j))';
$string['hide'] = 'Thu gọn tất cả';
$string['httpwarning'] = 'Dữ liệu tải xuống từ trang web này có thể không được mã hóa. Vui lòng liên hệ quản trị viên hệ thống và yêu cầu cài đặt SSL trên trang web này.';
$string['inherit'] = 'Kế thừa';
$string['lawfulbases'] = 'Căn cứ hợp pháp';
$string['lawfulbases_help'] = 'Chọn ít nhất một tùy chọn làm căn cứ hợp pháp để xử lý dữ liệu cá nhân. Để biết chi tiết về các căn cứ hợp pháp này, vui lòng xem <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = 'Đánh dấu là hoàn tất';
$string['markedcomplete'] = 'Cán bộ phụ trách quyền riêng tư đã đánh dấu yêu cầu của bạn là hoàn tất.';
$string['message'] = 'Tin nhắn';
$string['messagelabel'] = 'Tin nhắn:';
$string['messageprovider:contactdataprotectionofficer'] = 'Yêu cầu dữ liệu';
$string['messageprovider:datarequestprocessingresults'] = 'Kết quả xử lý yêu cầu dữ liệu';
$string['messageprovider:notifyexceptions'] = 'Thông báo ngoại lệ của yêu cầu dữ liệu';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Yêu cầu dữ liệu cá nhân của tôi';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} mục con';
$string['newrequest'] = 'Yêu cầu mới';
$string['noactivitiestoload'] = 'Không có hoạt động nào';
$string['noassignedroles'] = 'Không có vai trò nào được chỉ định trong ngữ cảnh này';
$string['noblockstoload'] = 'Không có khối nào';
$string['nocategories'] = 'Chưa có danh mục nào';
$string['nocoursestoload'] = 'Không có hoạt động nào';
$string['nocoursetofilter'] = 'Người dùng chưa ghi danh vào khóa học nào để chọn';
$string['nodatarequests'] = 'Không có yêu cầu dữ liệu nào';
$string['nodatarequestsmatchingfilter'] = 'Không có yêu cầu dữ liệu nào khớp với bộ lọc đã cho';
$string['noexpiredcontexts'] = 'Cấp ngữ cảnh này không có dữ liệu nào đã hết thời hạn lưu trữ.';
$string['nopersonaldatarequests'] = 'Bạn không có yêu cầu dữ liệu cá nhân nào';
$string['nopurposes'] = 'Chưa có mục đích nào';
$string['nosubjectaccessrequests'] = 'Không có yêu cầu dữ liệu nào cần bạn xử lý';
$string['nosystemdefaults'] = 'Mục đích và danh mục của trang chính chưa được xác định.';
$string['notset'] = 'Chưa thiết lập (dùng giá trị mặc định)';
$string['notyetexpired'] = '{$a} (chưa hết hạn)';
$string['overrideinstances'] = 'Đặt lại các phiên bản có giá trị tùy chỉnh';
$string['pluginname'] = 'Quyền riêng tư dữ liệu';
$string['pluginname_help'] = 'Plugin quyền riêng tư dữ liệu';
$string['pluginregistry'] = 'Sổ đăng ký quyền riêng tư của plugin';
$string['pluginregistrytitle'] = 'Sổ đăng ký tuân thủ quyền riêng tư của plugin';
$string['privacy'] = 'Quyền riêng tư';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Các bộ lọc hiện được áp dụng cho trang yêu cầu dữ liệu.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Số lượng yêu cầu dữ liệu mà người dùng muốn xem trên mỗi trang';
$string['privacy:metadata:purpose'] = 'Thông tin về các mục đích dữ liệu được tạo cho trang web này.';
$string['privacy:metadata:purpose:usermodified'] = 'ID của người dùng đã sửa đổi mục đích';
$string['privacy:metadata:request'] = 'Thông tin từ các yêu cầu dữ liệu cá nhân (yêu cầu truy cập và xóa dữ liệu) được gửi cho trang web này.';
$string['privacy:metadata:request:comments'] = 'Mọi nhận xét của người dùng kèm theo yêu cầu.';
$string['privacy:metadata:request:dpocomment'] = 'Mọi nhận xét của cán bộ phụ trách quyền riêng tư của trang web về yêu cầu.';
$string['privacy:metadata:request:requestedby'] = 'ID của người dùng gửi yêu cầu, nếu yêu cầu được gửi thay mặt người dùng khác.';
$string['privacy:metadata:request:timecreated'] = 'Dấu thời gian cho biết thời điểm người dùng gửi yêu cầu.';
$string['privacy:metadata:request:userid'] = 'ID của người dùng sở hữu yêu cầu';
$string['privacyofficeronly'] = 'Chỉ những người dùng được gán vai trò cán bộ phụ trách quyền riêng tư ({$a}) mới có quyền truy cập nội dung này';
$string['privacyrequestexpiry'] = 'Thời hạn yêu cầu dữ liệu';
$string['privacyrequestexpiry_desc'] = 'Khoảng thời gian các yêu cầu dữ liệu đã được phê duyệt có thể tải xuống trước khi hết hạn. Nếu đặt bằng 0 thì không giới hạn thời gian.';
$string['protected'] = 'Được bảo vệ';
$string['protectedlabel'] = 'Việc lưu giữ dữ liệu này có ưu tiên pháp lý cao hơn yêu cầu được lãng quên của người dùng. Dữ liệu này chỉ bị xóa sau khi hết thời hạn lưu giữ.';
$string['purpose'] = 'Mục đích';
$string['purpose_help'] = 'Mục đích mô tả lý do xử lý dữ liệu. Có thể thêm mục đích mới hoặc chọn Kế thừa để áp dụng mục đích từ ngữ cảnh cấp cao hơn. Các ngữ cảnh (từ thấp đến cao): Khối > Mô-đun hoạt động > Khóa học > Danh mục khóa học > Người dùng > Trang web.';
$string['purposecreated'] = 'Đã tạo mục đích';
$string['purposedefault'] = 'Mục đích mặc định';
$string['purposedefault_help'] = 'Mục đích mặc định là mục đích được áp dụng cho mọi phiên bản mới. Nếu chọn Kế thừa, mục đích từ ngữ cảnh cấp cao hơn sẽ được áp dụng. Các ngữ cảnh (từ thấp đến cao): Khối > Mô-đun hoạt động > Khóa học > Danh mục khóa học > Người dùng > Trang web.';
$string['purposeoverview'] = 'Mục đích mô tả cách sử dụng dự kiến và chính sách lưu giữ dữ liệu được lưu trữ. Cơ sở lưu trữ và giữ lại dữ liệu đó cũng được nêu trong mục đích.';
$string['purposes'] = 'Mục đích';
$string['purposeslist'] = 'Danh sách mục đích sử dụng dữ liệu';
$string['purposeupdated'] = 'Đã cập nhật mục đích';
$string['replyto'] = 'Trả lời tới';
$string['requestactions'] = 'Thao tác';
$string['requestapproved'] = 'Yêu cầu đã được phê duyệt';
$string['requestby'] = 'Người yêu cầu';
$string['requestbydetail'] = 'Người yêu cầu:';
$string['requestcomments'] = 'Nhận xét';
$string['requestcomments_help'] = 'Ô này cho phép bạn nhập thêm thông tin chi tiết về yêu cầu dữ liệu.';
$string['requestcreation'] = 'Ngày tạo';
$string['requestdenied'] = 'Yêu cầu đã bị từ chối';
$string['requestemailintro'] = 'Bạn đã nhận được một yêu cầu dữ liệu:';
$string['requestfor'] = 'Người dùng';
$string['requestmarkedcomplete'] = 'Yêu cầu đã được đánh dấu là hoàn tất';
$string['requestorigin'] = 'Trang web';
$string['requestsapproved'] = 'Các yêu cầu đã được phê duyệt';
$string['requestsdenied'] = 'Các yêu cầu đã bị từ chối';
$string['requeststatus'] = 'Trạng thái';
$string['requestsubmitted'] = 'Yêu cầu của bạn đã được gửi đến cán bộ phụ trách quyền riêng tư';
$string['requesttype'] = 'Loại';
$string['requesttype_help'] = 'Chọn lý do liên hệ với cán bộ phụ trách quyền riêng tư. Lưu ý rằng việc xóa toàn bộ dữ liệu cá nhân sẽ khiến bạn không thể đăng nhập vào trang web nữa.';
$string['requesttypedelete'] = 'Xóa toàn bộ dữ liệu cá nhân của tôi';
$string['requesttypedeleteshort'] = 'Xóa';
$string['requesttypeexport'] = 'Xuất toàn bộ dữ liệu cá nhân của tôi';
$string['requesttypeexportallowfiltering'] = 'Xuất dữ liệu cá nhân của tôi';
$string['requesttypeexportshort'] = 'Xuất';
$string['requesttypeothers'] = 'Yêu cầu chung';
$string['requesttypeothersshort'] = 'Tin nhắn';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Coi các khóa học không có ngày kết thúc là đang hoạt động';
$string['requireallenddatesforuserdeletion_desc'] = 'Khi tính thời hạn hết hiệu lực của người dùng, cần xem xét một số yếu tố:

* So sánh lần đăng nhập gần nhất của người dùng với thời hạn lưu giữ dành cho người dùng; và
* Người dùng có đang được ghi danh tích cực vào khóa học nào hay không.

Khi kiểm tra trạng thái ghi danh hoạt động trong khóa học, nếu khóa học không có ngày kết thúc thì thiết lập này được dùng để xác định khóa học đó có được xem là đang hoạt động hay không.

Nếu khóa học không có ngày kết thúc và thiết lập này được bật thì không thể xóa người dùng.';
$string['requiresattention'] = 'Cần chú ý.';
$string['requiresattentionexplanation'] = 'Plugin này không triển khai Moodle privacy API. Nếu plugin lưu trữ dữ liệu cá nhân thì dữ liệu đó sẽ không thể được xuất hoặc xóa thông qua hệ thống quyền riêng tư của Moodle.';
$string['resubmitrequest'] = 'Gửi lại yêu cầu {$a->type} cho {$a->username}';
$string['resubmitrequestasnew'] = 'Gửi lại dưới dạng yêu cầu mới';
$string['resubmittedrequest'] = 'Yêu cầu {$a->type} hiện có của {$a->username} đã bị hủy và gửi lại';
$string['resultdeleted'] = 'Gần đây, bạn đã yêu cầu xóa tài khoản và dữ liệu cá nhân của mình trên {$a}. Quá trình này đã hoàn tất và bạn sẽ không thể đăng nhập nữa.';
$string['resultdownloadready'] = 'Bản sao dữ liệu cá nhân của bạn trên {$a} mà bạn đã yêu cầu gần đây hiện đã sẵn sàng để tải xuống từ liên kết sau.';
$string['retentionperiod'] = 'Thời hạn lưu giữ';
$string['retentionperiod_help'] = 'Thời hạn lưu giữ xác định khoảng thời gian dữ liệu cần được giữ lại. Khi hết thời hạn lưu giữ, dữ liệu sẽ được đánh dấu và liệt kê để xóa, chờ quản trị viên xác nhận.';
$string['retentionperiodnotdefined'] = 'Chưa xác định thời hạn lưu giữ';
$string['retentionperiodzero'] = 'Không có thời hạn lưu giữ';
$string['reviewdata'] = 'Xem lại dữ liệu';
$string['role'] = 'Vai trò';
$string['role_help'] = 'Vai trò mà phần ghi đè sẽ áp dụng.';
$string['roleoverride'] = 'Ghi đè vai trò';
$string['roleoverrideoverview'] = 'Có thể ghi đè chính sách lưu giữ mặc định cho các vai trò người dùng cụ thể, cho phép chỉ định thời hạn lưu giữ dài hơn hoặc ngắn hơn. Người dùng chỉ hết hạn khi tất cả vai trò của họ đều đã hết hạn.';
$string['roleoverrides'] = 'Ghi đè vai trò';
$string['selectbulkaction'] = 'Vui lòng chọn một thao tác hàng loạt.';
$string['selectcourses'] = 'Chọn các khóa học cần xuất';
$string['selectdatarequests'] = 'Vui lòng chọn các yêu cầu dữ liệu.';
$string['selectuserdatarequest'] = 'Chọn yêu cầu dữ liệu {$a->requesttype} của {$a->username}.';
$string['send'] = 'Gửi';
$string['sensitivedatareasons'] = 'Lý do xử lý dữ liệu cá nhân nhạy cảm';
$string['sensitivedatareasons_help'] = 'Chọn một hoặc nhiều lý do áp dụng để miễn trừ lệnh cấm xử lý dữ liệu cá nhân nhạy cảm gắn với mục đích này. Để biết thêm thông tin, xem <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = 'Đặt mặc định';
$string['showdataretentionsummary'] = 'Hiển thị bản tóm tắt lưu giữ dữ liệu';
$string['showdataretentionsummary_desc'] = 'Nếu bật, liên kết đến bản tóm tắt lưu giữ dữ liệu sẽ hiển thị ở chân trang và trong hồ sơ người dùng.';
$string['statusapproved'] = 'Đã phê duyệt';
$string['statusawaitingapproval'] = 'Đang chờ phê duyệt';
$string['statuscancelled'] = 'Đã hủy';
$string['statuscomplete'] = 'Hoàn tất';
$string['statusdeleted'] = 'Đã xóa';
$string['statusdetail'] = 'Trạng thái:';
$string['statusexpired'] = 'Đã hết hạn';
$string['statuspending'] = 'Đang chờ xử lý';
$string['statuspreprocessing'] = 'Tiền xử lý';
$string['statusprocessing'] = 'Đang xử lý';
$string['statusready'] = 'Sẵn sàng tải xuống';
$string['statusrejected'] = 'Bị từ chối';
$string['subjectscope'] = 'Phạm vi đối tượng';
$string['subjectscope_help'] = 'Phạm vi đối tượng liệt kê các vai trò có thể được chỉ định trong ngữ cảnh này.';
$string['summary'] = 'Tóm tắt cấu hình sổ đăng ký';
$string['systemconfignotsetwarning'] = 'Chưa xác định mục đích và danh mục của trang web. Nếu không xác định các mục này, mọi dữ liệu sẽ bị xóa khi xử lý yêu cầu xóa.';
$string['tobedeleted'] = 'Dữ liệu cần xóa';
$string['unexpiredrolewithretention'] = '{$a->retention} (Chưa hết hạn)';
$string['user'] = 'Người dùng';
$string['userlistexplanation'] = 'Plugin này có trình cung cấp cơ sở nhưng cũng cần triển khai trình cung cấp danh sách người dùng để hỗ trợ đầy đủ các chức năng quyền riêng tư.';
$string['userlistnoncompliant'] = 'Thiếu trình cung cấp danh sách người dùng';
$string['viewrequest'] = 'Xem yêu cầu';
$string['visible'] = 'Mở rộng tất cả';
