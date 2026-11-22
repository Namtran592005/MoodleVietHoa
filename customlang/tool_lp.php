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
 * @subpackage lp
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Hành động';
$string['activities'] = 'Hoạt động';
$string['addcohorts'] = 'Thêm nhóm người dùng';
$string['addcohortstosync'] = 'Thêm nhóm người dùng để đồng bộ hóa';
$string['addcompetency'] = 'Thêm năng lực';
$string['addcoursecompetencies'] = 'Thêm năng lực vào khóa học';
$string['addcrossreferencedcompetency'] = 'Thêm năng lực tham chiếu chéo';
$string['addingcompetencywillresetparentrule'] = 'Thêm năng lực mới sẽ xóa quy tắc được thiết lập cho \'{$a}\'. Bạn có muốn tiếp tục không?';
$string['addnewcompetency'] = 'Thêm năng lực mới';
$string['addnewcompetencyframework'] = 'Thêm khung năng lực mới';
$string['addnewplan'] = 'Thêm kế hoạch học tập mới';
$string['addnewtemplate'] = 'Thêm mẫu kế hoạch học tập mới';
$string['addnewuserevidence'] = 'Thêm minh chứng mới';
$string['addtemplatecompetencies'] = 'Thêm năng lực vào mẫu kế hoạch học tập';
$string['aisrequired'] = '\'{$a}\' là bắt buộc';
$string['aplanswerecreated'] = 'Đã tạo {$a} kế hoạch học tập.';
$string['aplanswerecreatedmoremayrequiresync'] = 'Đã tạo {$a} kế hoạch học tập; các kế hoạch còn lại sẽ được tạo trong lần đồng bộ hóa tiếp theo.';
$string['assigncohorts'] = 'Phân công nhóm người dùng';
$string['averageproficiencyrate'] = 'Tỷ lệ thành thạo trung bình của các kế hoạch học tập hoàn thành dựa trên mẫu này là {$a}%.';
$string['cancelreviewrequest'] = 'Hủy yêu cầu đánh giá';
$string['cannotaddrules'] = 'Không thể cấu hình năng lực này.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Không thể tạo kế hoạch học tập mới. Ngày đến hạn của mẫu đã qua hoặc sắp đến.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Không thể tạo kế hoạch học tập mới khi mẫu này đang bị ẩn.';
$string['category'] = 'Danh mục';
$string['chooserating'] = 'Chọn mức đánh giá...';
$string['cohortssyncedtotemplate'] = 'Các nhóm người dùng được đồng bộ hóa với mẫu kế hoạch học tập này';
$string['competenciesforframework'] = 'Các năng lực thuộc {$a}';
$string['competenciesmostoftennotproficient'] = 'Các năng lực thường chưa đạt mức thành thạo nhất trong những kế hoạch học tập đã hoàn thành';
$string['competenciesmostoftennotproficientincourse'] = 'Các năng lực thường chưa đạt mức thành thạo nhất trong khóa học này';
$string['competencycannotbedeleted'] = 'Không thể xóa năng lực \'{$a}\\';
$string['competencycreated'] = 'Đã tạo năng lực';
$string['competencycrossreferencedcompetencies'] = '{$a} năng lực được tham chiếu chéo';
$string['competencyframework'] = 'Khung năng lực';
$string['competencyframeworkcreated'] = 'Đã tạo khung năng lực.';
$string['competencyframeworkname'] = 'Tên';
$string['competencyframeworkroot'] = 'Không có mục cha (năng lực cấp cao nhất)';
$string['competencyframeworks'] = 'Các khung năng lực';
$string['competencyframeworkupdated'] = 'Đã cập nhật khung năng lực.';
$string['competencyoutcome_complete'] = 'Đánh dấu là hoàn thành';
$string['competencyoutcome_evidence'] = 'Đính kèm minh chứng';
$string['competencyoutcome_none'] = 'Không có';
$string['competencyoutcome_recommend'] = 'Đề xuất năng lực';
$string['competencypicker'] = 'Bộ chọn năng lực';
$string['competencyrule'] = 'Quy tắc năng lực';
$string['competencyupdated'] = 'Đã cập nhật năng lực';
$string['completeplan'] = 'Hoàn thành kế hoạch học tập này';
$string['completeplanconfirm'] = 'Đặt kế hoạch học tập \'{$a}\' thành hoàn thành? Nếu có, trạng thái hiện tại của tất cả năng lực của người dùng sẽ được ghi lại và kế hoạch sẽ chuyển sang chế độ chỉ đọc.';
$string['configurecoursecompetencysettings'] = 'Cấu hình năng lực của khóa học';
$string['configurescale'] = 'Cấu hình thang đánh giá';
$string['coursecompetencies'] = 'Năng lực của khóa học';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Các mức đánh giá năng lực trong khóa học này không ảnh hưởng đến kế hoạch học tập.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Các mức đánh giá năng lực trong khóa học này được cập nhật ngay lập tức trong kế hoạch học tập.';
$string['coursecompetencyratingsquestion'] = 'Khi một năng lực của khóa học được đánh giá, mức đánh giá đó có cập nhật năng lực trong kế hoạch học tập hay chỉ áp dụng cho khóa học?';
$string['coursesusingthiscompetency'] = 'Các khóa học được liên kết với năng lực này';
$string['coveragesummary'] = 'Đã bao phủ {$a->competenciescoveredcount} trên {$a->competenciescount} năng lực ( {$a->coveragepercentage}% )';
$string['createlearningplans'] = 'Tạo kế hoạch học tập';
$string['createplans'] = 'Tạo kế hoạch học tập';
$string['crossreferencedcompetencies'] = 'Các năng lực được tham chiếu chéo';
$string['default'] = 'Mặc định';
$string['deletecompetency'] = 'Xóa năng lực \'{$a}\'?';
$string['deletecompetencyframework'] = 'Xóa khung năng lực \'{$a}\'?';
$string['deletecompetencyparenthasrule'] = 'Xóa năng lực \'{$a}\'? Thao tác này cũng sẽ xóa quy tắc được thiết lập cho mục cha của năng lực đó.';
$string['deleteplan'] = 'Xóa kế hoạch học tập \'{$a}\'?';
$string['deleteplans'] = 'Xóa các kế hoạch học tập';
$string['deletetemplate'] = 'Xóa mẫu kế hoạch học tập \'{$a}\'?';
$string['deletetemplatewithplans'] = 'Mẫu này có các kế hoạch học tập liên quan. Bạn phải chỉ định cách xử lý các kế hoạch đó.';
$string['deletethisplan'] = 'Xóa kế hoạch học tập này';
$string['deletethisuserevidence'] = 'Xóa minh chứng này';
$string['deleteuserevidence'] = 'Xóa minh chứng học tập trước đây \'{$a}\'?';
$string['description'] = 'Mô tả';
$string['duedate'] = 'Ngày đến hạn';
$string['duedate_help'] = 'Ngày mà kế hoạch học tập cần được hoàn thành.';
$string['editcompetency'] = 'Chỉnh sửa năng lực';
$string['editcompetencyframework'] = 'Chỉnh sửa khung năng lực';
$string['editplan'] = 'Chỉnh sửa kế hoạch học tập';
$string['editrating'] = 'Chỉnh sửa mức đánh giá';
$string['edittemplate'] = 'Chỉnh sửa mẫu kế hoạch học tập';
$string['editthisplan'] = 'Chỉnh sửa kế hoạch học tập này';
$string['editthisuserevidence'] = 'Chỉnh sửa minh chứng này';
$string['edituserevidence'] = 'Chỉnh sửa minh chứng';
$string['evidence'] = 'Minh chứng';
$string['filterbyactivity'] = 'Lọc năng lực theo tài nguyên hoặc hoạt động';
$string['findcourses'] = 'Tìm khóa học';
$string['frameworkcannotbedeleted'] = 'Không thể xóa khung năng lực \'{$a}\\';
$string['hidden'] = 'Ẩn';
$string['hiddenhint'] = '(ẩn)';
$string['idnumber'] = 'Số ID';
$string['inheritfromframework'] = 'Kế thừa từ khung năng lực (mặc định)';
$string['itemstoadd'] = 'Các mục cần thêm';
$string['jumptocompetency'] = 'Chuyển đến năng lực';
$string['jumptouser'] = 'Chuyển đến người dùng';
$string['learningplancompetencies'] = 'Các năng lực trong kế hoạch học tập';
$string['learningplans'] = 'Kế hoạch học tập';
$string['levela'] = 'Cấp {$a}';
$string['linkcompetencies'] = 'Liên kết các năng lực';
$string['linkcompetency'] = 'Liên kết năng lực';
$string['linkedcompetencies'] = 'Các năng lực được liên kết';
$string['linkedcourses'] = 'Các khóa học được liên kết';
$string['linkedcourseslist'] = 'Các khóa học được liên kết:';
$string['listcompetencyframeworkscaption'] = 'Danh sách khung năng lực';
$string['listofevidence'] = 'Danh sách minh chứng';
$string['listplanscaption'] = 'Danh sách kế hoạch học tập';
$string['listtemplatescaption'] = 'Danh sách mẫu kế hoạch học tập';
$string['loading'] = 'Đang tải...';
$string['locatecompetency'] = 'Định vị năng lực';
$string['managecompetenciesandframeworks'] = 'Quản lý năng lực và khung năng lực';
$string['modcompetencies'] = 'Năng lực của khóa học';
$string['modcompetencies_help'] = 'Các năng lực của khóa học được liên kết với hoạt động này.';
$string['move'] = 'Di chuyển';
$string['movecompetency'] = 'Di chuyển năng lực';
$string['movecompetencyafter'] = 'Di chuyển năng lực xuống sau \'{$a}\\';
$string['movecompetencyframework'] = 'Di chuyển khung năng lực';
$string['movecompetencytochildofselfwillresetrules'] = 'Di chuyển năng lực sẽ xóa quy tắc của chính năng lực đó, cùng các quy tắc được thiết lập cho mục cha và vị trí đích. Bạn có muốn tiếp tục không?';
$string['movecompetencywillresetrules'] = 'Di chuyển năng lực sẽ xóa các quy tắc được thiết lập cho mục cha và vị trí đích. Bạn có muốn tiếp tục không?';
$string['moveframeworkafter'] = 'Di chuyển khung năng lực xuống sau \'{$a}\\';
$string['movetonewparent'] = 'Chuyển vị trí';
$string['myplans'] = 'Kế hoạch học tập của tôi';
$string['nfiles'] = '{$a} tệp';
$string['noactivities'] = 'Không có hoạt động nào';
$string['nocompetencies'] = 'Chưa có năng lực nào được tạo trong khung này.';
$string['nocompetenciesinactivity'] = 'Chưa có năng lực nào được liên kết với hoạt động hoặc tài nguyên này.';
$string['nocompetenciesincourse'] = 'Chưa có năng lực nào được liên kết với khóa học này.';
$string['nocompetenciesinevidence'] = 'Chưa có năng lực nào được liên kết với minh chứng này.';
$string['nocompetenciesinlearningplan'] = 'Chưa có năng lực nào được liên kết với kế hoạch học tập này.';
$string['nocompetenciesinlist'] = 'Chưa có năng lực nào được chọn.';
$string['nocompetenciesintemplate'] = 'Chưa có năng lực nào được liên kết với mẫu kế hoạch học tập này.';
$string['nocompetencyframeworks'] = 'Chưa có khung năng lực nào được tạo.';
$string['nocompetencyselected'] = 'Chưa chọn năng lực nào';
$string['nocrossreferencedcompetencies'] = 'Không có năng lực nào khác được tham chiếu chéo với năng lực này.';
$string['noevidence'] = 'Không có minh chứng';
$string['nofiles'] = 'Không có tệp';
$string['nolinkedcourses'] = 'Không có khóa học nào được liên kết với năng lực này';
$string['noparticipants'] = 'Không tìm thấy người tham gia nào.';
$string['noplanswerecreated'] = 'Không có kế hoạch học tập nào được tạo.';
$string['notemplates'] = 'Chưa có mẫu kế hoạch học tập nào được tạo.';
$string['nourl'] = 'Không có URL';
$string['nouserevidence'] = 'Chưa có minh chứng về quá trình học tập trước đây nào được thêm.';
$string['nouserplans'] = 'Chưa có kế hoạch học tập nào được tạo.';
$string['oneplanwascreated'] = 'Đã tạo một kế hoạch học tập';
$string['outcome'] = 'Kết quả';
$string['overridegrade'] = 'Ghi đè điểm năng lực hiện có khi hoàn thành.';
$string['parentcompetency'] = 'Mục cha';
$string['parentcompetency_edit'] = 'Chỉnh sửa mục cha';
$string['parentcompetency_help'] = 'Xác định mục cha mà năng lực sẽ được thêm vào. Mục cha có thể là một năng lực khác trong cùng khung hoặc nút gốc của khung năng lực đối với năng lực cấp cao nhất.';
$string['path'] = 'Đường dẫn:';
$string['planapprove'] = 'Kích hoạt';
$string['plancompleted'] = 'Đã hoàn thành kế hoạch học tập';
$string['plancreated'] = 'Đã tạo kế hoạch học tập';
$string['plandescription'] = 'Mô tả';
$string['planname'] = 'Tên';
$string['plantemplate'] = 'Chọn mẫu kế hoạch học tập';
$string['plantemplate_help'] = 'Kế hoạch học tập được tạo từ mẫu sẽ chứa danh sách các năng lực phù hợp với mẫu. Các cập nhật đối với mẫu sẽ được phản ánh trong mọi kế hoạch được tạo từ mẫu đó.';
$string['planunapprove'] = 'Chuyển về bản nháp';
$string['planupdated'] = 'Đã cập nhật kế hoạch học tập';
$string['pluginname'] = 'Kế hoạch học tập';
$string['points'] = 'Điểm';
$string['pointsgivenfor'] = 'Điểm được trao cho \'{$a}\\';
$string['privacy:metadata'] = 'Plugin Kế hoạch học tập không lưu trữ dữ liệu cá nhân nào.';
$string['proficient'] = 'Thành thạo';
$string['progress'] = 'Tiến độ';
$string['rate'] = 'Đánh giá';
$string['ratecomment'] = 'Ghi chú minh chứng';
$string['rating'] = 'Mức đánh giá';
$string['ratingaffectsonlycourse'] = 'Đánh giá một năng lực chỉ cập nhật năng lực đó trong khóa học này';
$string['ratingaffectsuserplans'] = 'Đánh giá một năng lực cũng cập nhật năng lực đó trong tất cả các kế hoạch học tập';
$string['reopenplan'] = 'Mở lại kế hoạch học tập này';
$string['reopenplanconfirm'] = 'Mở lại kế hoạch học tập \'{$a}\'? Nếu có, trạng thái năng lực của người dùng được ghi lại tại thời điểm kế hoạch hoàn tất trước đó sẽ bị xóa và kế hoạch sẽ được kích hoạt lại.';
$string['requestreview'] = 'Yêu cầu đánh giá';
$string['reviewer'] = 'Người đánh giá';
$string['reviewstatus'] = 'Trạng thái đánh giá';
$string['savechanges'] = 'Lưu thay đổi';
$string['scale'] = 'Thang đo';
$string['scale_help'] = 'Thang đo xác định cách đo mức độ thành thạo của một năng lực. Sau khi chọn thang đo, bạn cần cấu hình thang đo đó.

* Mục được chọn là \'Mặc định\' là mức đánh giá được gán khi một năng lực tự động hoàn tất.
* (Các) mục được chọn là \'Thành thạo\' xác định (các) giá trị sẽ đánh dấu năng lực là thành thạo khi được đánh giá.';
$string['scalevalue'] = 'Giá trị thang đo';
$string['search'] = 'Tìm kiếm...';
$string['selectcohortstosync'] = 'Chọn các nhóm đồng bộ';
$string['selectcompetencymovetarget'] = 'Chọn vị trí để chuyển năng lực này đến:';
$string['selectedcompetency'] = 'Năng lực đã chọn';
$string['selectuserstocreateplansfor'] = 'Chọn người dùng để tạo kế hoạch học tập';
$string['sendallcompetenciestoreview'] = 'Gửi tất cả năng lực cần đánh giá để xác minh minh chứng học tập trước đây \'{$a}\\';
$string['sendcompetenciestoreview'] = 'Gửi năng lực để đánh giá';
$string['shortname'] = 'Tên';
$string['sitedefault'] = '(Mặc định của trang)';
$string['startreview'] = 'Bắt đầu đánh giá';
$string['state'] = 'Tình trạng';
$string['status'] = 'Trạng thái';
$string['stopreview'] = 'Hoàn tất đánh giá';
$string['stopsyncingcohort'] = 'Dừng đồng bộ nhóm';
$string['taxonomies'] = 'Hệ phân loại';
$string['taxonomy_add_behaviour'] = 'Thêm hành vi';
$string['taxonomy_add_competency'] = 'Thêm năng lực';
$string['taxonomy_add_concept'] = 'Thêm khái niệm';
$string['taxonomy_add_domain'] = 'Thêm lĩnh vực';
$string['taxonomy_add_indicator'] = 'Thêm chỉ báo';
$string['taxonomy_add_level'] = 'Thêm cấp độ';
$string['taxonomy_add_outcome'] = 'Thêm kết quả';
$string['taxonomy_add_practice'] = 'Thêm thực hành';
$string['taxonomy_add_proficiency'] = 'Thêm mức độ thành thạo';
$string['taxonomy_add_skill'] = 'Thêm kỹ năng';
$string['taxonomy_add_value'] = 'Thêm giá trị';
$string['taxonomy_edit_behaviour'] = 'Chỉnh sửa hành vi';
$string['taxonomy_edit_competency'] = 'Chỉnh sửa năng lực';
$string['taxonomy_edit_concept'] = 'Chỉnh sửa khái niệm';
$string['taxonomy_edit_domain'] = 'Chỉnh sửa lĩnh vực';
$string['taxonomy_edit_indicator'] = 'Chỉnh sửa chỉ báo';
$string['taxonomy_edit_level'] = 'Chỉnh sửa cấp độ';
$string['taxonomy_edit_outcome'] = 'Chỉnh sửa kết quả';
$string['taxonomy_edit_practice'] = 'Chỉnh sửa thực hành';
$string['taxonomy_edit_proficiency'] = 'Chỉnh sửa mức độ thành thạo';
$string['taxonomy_edit_skill'] = 'Chỉnh sửa kỹ năng';
$string['taxonomy_edit_value'] = 'Chỉnh sửa giá trị';
$string['taxonomy_parent_behaviour'] = 'Hành vi cha';
$string['taxonomy_parent_competency'] = 'Năng lực cha';
$string['taxonomy_parent_concept'] = 'Khái niệm cha';
$string['taxonomy_parent_domain'] = 'Lĩnh vực cha';
$string['taxonomy_parent_indicator'] = 'Chỉ báo cha';
$string['taxonomy_parent_level'] = 'Cấp độ cha';
$string['taxonomy_parent_outcome'] = 'Kết quả cha';
$string['taxonomy_parent_practice'] = 'Thực hành cha';
$string['taxonomy_parent_proficiency'] = 'Mức độ thành thạo cha';
$string['taxonomy_parent_skill'] = 'Kỹ năng cha';
$string['taxonomy_parent_value'] = 'Giá trị cha';
$string['taxonomy_selected_behaviour'] = 'Hành vi đã chọn';
$string['taxonomy_selected_competency'] = 'Năng lực đã chọn';
$string['taxonomy_selected_concept'] = 'Khái niệm đã chọn';
$string['taxonomy_selected_domain'] = 'Lĩnh vực đã chọn';
$string['taxonomy_selected_indicator'] = 'Chỉ báo đã chọn';
$string['taxonomy_selected_level'] = 'Cấp độ đã chọn';
$string['taxonomy_selected_outcome'] = 'Kết quả đã chọn';
$string['taxonomy_selected_practice'] = 'Thực hành đã chọn';
$string['taxonomy_selected_proficiency'] = 'Mức độ thành thạo đã chọn';
$string['taxonomy_selected_skill'] = 'Kỹ năng đã chọn';
$string['taxonomy_selected_value'] = 'Giá trị đã chọn';
$string['template'] = 'Mẫu kế hoạch học tập';
$string['templatebased'] = 'Dựa trên mẫu';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Các nhóm sẽ không được đồng bộ nếu ngày đến hạn của mẫu đã qua.';
$string['templatecohortnotsyncedwhilehidden'] = 'Các nhóm sẽ không được đồng bộ khi mẫu này đang bị ẩn.';
$string['templatecompetencies'] = 'Các năng lực trong mẫu kế hoạch học tập';
$string['templatecreated'] = 'Đã tạo mẫu kế hoạch học tập';
$string['templatename'] = 'Tên';
$string['templates'] = 'Các mẫu kế hoạch học tập';
$string['templateupdated'] = 'Đã cập nhật mẫu kế hoạch học tập';
$string['totalrequiredtocomplete'] = 'Tổng số yêu cầu để hoàn tất';
$string['unlinkcompetencycourse'] = 'Hủy liên kết năng lực \'{$a}\' khỏi khóa học?';
$string['unlinkcompetencyplan'] = 'Hủy liên kết năng lực \'{$a}\' khỏi kế hoạch học tập?';
$string['unlinkcompetencytemplate'] = 'Hủy liên kết năng lực \'{$a}\' khỏi mẫu kế hoạch học tập?';
$string['unlinkplanstemplate'] = 'Hủy liên kết các kế hoạch học tập khỏi mẫu của chúng';
$string['unlinkplantemplate'] = 'Hủy liên kết khỏi mẫu kế hoạch học tập';
$string['unlinkplantemplateconfirm'] = 'Hủy liên kết kế hoạch học tập \'{$a}\' khỏi mẫu của kế hoạch? Mọi thay đổi đối với mẫu sẽ không còn được áp dụng cho kế hoạch. Không thể hoàn tác thao tác này.';
$string['uponcoursecompletion'] = 'Khi khóa học hoàn tất:';
$string['uponcoursemodulecompletion'] = 'Khi hoạt động hoàn tất:';
$string['usercompetencyfrozen'] = 'Bản ghi này hiện đã bị đóng băng. Bản ghi phản ánh trạng thái năng lực của người dùng tại thời điểm kế hoạch học tập được đánh dấu là hoàn tất.';
$string['userevidence'] = 'Minh chứng học tập trước đây';
$string['userevidencecreated'] = 'Đã tạo minh chứng học tập trước đây';
$string['userevidencedescription'] = 'Mô tả';
$string['userevidencefiles'] = 'Tệp';
$string['userevidencename'] = 'Tên';
$string['userevidencesummary'] = 'Tóm tắt';
$string['userevidenceupdated'] = 'Đã cập nhật minh chứng học tập trước đây';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'URL phải bắt đầu bằng \'http://\' hoặc \'https://\'.';
$string['viewdetails'] = 'Xem chi tiết';
$string['visible'] = 'Hiển thị';
$string['visible_help'] = 'Có thể ẩn khung năng lực trong khi thiết lập hoặc cập nhật lên phiên bản mới.';
$string['when'] = 'Khi nào';
$string['xcompetencieslinkedoutofy'] = 'Có {$a->x}/{$a->y} năng lực được liên kết với các khóa học';
$string['xcompetenciesproficientoutofy'] = 'Có {$a->x}/{$a->y} năng lực đạt mức thành thạo';
$string['xcompetenciesproficientoutofyincourse'] = 'Bạn thành thạo {$a->x}/{$a->y} năng lực trong khóa học này.';
$string['xplanscompletedoutofy'] = 'Đã hoàn tất {$a->x}/{$a->y} kế hoạch học tập cho mẫu này';
