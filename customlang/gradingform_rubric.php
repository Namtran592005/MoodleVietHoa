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
 * @package    gradingform
 * @subpackage rubric
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Thêm tiêu chí';
$string['additionalfeedback'] = 'Phản hồi bổ sung';
$string['alwaysshowdefinition'] = 'Cho phép người dùng xem trước bảng tiêu chí (nếu không, bảng chỉ hiển thị sau khi chấm điểm)';
$string['backtoediting'] = 'Quay lại chỉnh sửa';
$string['confirmdeletecriterion'] = 'Bạn có chắc chắn muốn xóa tiêu chí này không?';
$string['confirmdeletelevel'] = 'Bạn có chắc chắn muốn xóa mức này không?';
$string['criterion'] = 'Tiêu chí {$a}';
$string['criterionaddlevel'] = 'Thêm mức';
$string['criteriondelete'] = 'Xóa tiêu chí';
$string['criterionduplicate'] = 'Nhân đôi tiêu chí';
$string['criterionempty'] = 'Nhấp để chỉnh sửa tiêu chí';
$string['criterionmovedown'] = 'Di chuyển xuống';
$string['criterionmoveup'] = 'Di chuyển lên';
$string['criterionremark'] = 'Nhận xét cho tiêu chí {$a->description}: {$a->remark}';
$string['definerubric'] = 'Định nghĩa bảng tiêu chí';
$string['description'] = 'Mô tả';
$string['enableremarks'] = 'Cho phép người chấm thêm nhận xét bằng văn bản cho từng tiêu chí';
$string['err_mintwolevels'] = 'Mỗi tiêu chí phải có ít nhất hai mức';
$string['err_nocriteria'] = 'Bảng tiêu chí phải có ít nhất một tiêu chí';
$string['err_nodefinition'] = 'Định nghĩa mức không được để trống';
$string['err_nodescription'] = 'Mô tả tiêu chí không được để trống';
$string['err_novariations'] = 'Các mức của một tiêu chí không thể đều có cùng số điểm';
$string['err_scoreformat'] = 'Số điểm cho mỗi mức phải là một số hợp lệ';
$string['err_totalscore'] = 'Tổng điểm tối đa có thể đạt được khi chấm bằng bảng tiêu chí phải lớn hơn 0';
$string['gradingof'] = 'Chấm điểm {$a}';
$string['level'] = 'Mức {$a->definition}, {$a->score} điểm.';
$string['leveldefinition'] = 'Định nghĩa mức {$a}';
$string['leveldelete'] = 'Xóa mức {$a}';
$string['levelempty'] = 'Nhấp để chỉnh sửa mức';
$string['levelsgroup'] = 'Nhóm mức';
$string['lockzeropoints'] = 'Tính điểm với điểm tối thiểu bằng điểm thấp nhất có thể đạt được theo bảng tiêu chí';
$string['lockzeropoints_help'] = 'Thiết lập này chỉ áp dụng nếu tổng số điểm tối thiểu của từng tiêu chí lớn hơn 0. Nếu đánh dấu, điểm tối thiểu của hoạt động sẽ là điểm thấp nhất có thể đạt được theo bảng tiêu chí. Nếu không đánh dấu, điểm thấp nhất có thể đạt được theo bảng tiêu chí sẽ được quy đổi thành điểm tối thiểu có thể có của hoạt động (là 0 trừ khi sử dụng thang điểm).';
$string['name'] = 'Tên';
$string['needregrademessage'] = 'Định nghĩa bảng tiêu chí đã thay đổi sau khi học viên này được chấm điểm. Học viên không thể xem bảng tiêu chí này cho đến khi bạn kiểm tra bảng và cập nhật điểm.';
$string['notset'] = 'Chưa thiết lập';
$string['pluginname'] = 'Bảng tiêu chí';
$string['pointsvalue'] = '{$a} điểm';
$string['previewrubric'] = 'Xem trước bảng tiêu chí';
$string['privacy:metadata:criterionid'] = 'Mã định danh của một tiêu chí cụ thể đang được chấm điểm.';
$string['privacy:metadata:fillingssummary'] = 'Lưu trữ thông tin về điểm của người dùng được tạo bằng bảng tiêu chí.';
$string['privacy:metadata:instanceid'] = 'Mã định danh liên quan đến một điểm trong hoạt động.';
$string['privacy:metadata:levelid'] = 'Mức đạt được trong bảng tiêu chí.';
$string['privacy:metadata:remark'] = 'Nhận xét liên quan đến tiêu chí trong bảng tiêu chí đang được đánh giá.';
$string['regrademessage1'] = 'Bạn sắp lưu các thay đổi cho bảng tiêu chí đã được sử dụng để chấm điểm. Vui lòng cho biết có cần xem lại các điểm hiện có hay không. Nếu chọn tùy chọn này, bảng tiêu chí sẽ bị ẩn với học viên cho đến khi mục của họ được chấm lại.';
$string['regrademessage5'] = 'Bạn sắp lưu những thay đổi quan trọng cho bảng tiêu chí đã được sử dụng để chấm điểm. Giá trị trong sổ điểm sẽ không thay đổi, nhưng bảng tiêu chí sẽ bị ẩn với học viên cho đến khi mục của họ được chấm lại.';
$string['regradeoption0'] = 'Không đánh dấu để chấm lại';
$string['regradeoption1'] = 'Đánh dấu để chấm lại';
$string['restoredfromdraft'] = 'LƯU Ý: Lần chấm điểm gần nhất cho người này chưa được lưu đúng cách nên các điểm nháp đã được khôi phục. Nếu muốn hủy các thay đổi này, hãy sử dụng nút \'Hủy\' bên dưới.';
$string['rubric'] = 'Bảng tiêu chí';
$string['rubricmapping'] = 'Quy tắc quy đổi điểm thành điểm số';
$string['rubricmappingexplained'] = 'Điểm thấp nhất có thể đạt được theo bảng tiêu chí này là <b>{$a->minscore} điểm</b>. Điểm này sẽ được quy đổi thành điểm tối thiểu có thể có của hoạt động (là 0 trừ khi sử dụng thang điểm). Điểm tối đa <b>{$a->maxscore} điểm</b> sẽ được quy đổi thành điểm tối đa. Các điểm trung gian sẽ được quy đổi tương ứng.

Nếu sử dụng thang điểm để chấm điểm, điểm sẽ được làm tròn và quy đổi thành các mức trong thang điểm như thể chúng là các số nguyên liên tiếp.

Có thể thay đổi cách tính điểm này bằng cách chỉnh sửa biểu mẫu và đánh dấu vào ô \'Tính điểm với điểm tối thiểu bằng điểm thấp nhất có thể đạt được theo bảng tiêu chí\'.';
$string['rubricnotcompleted'] = 'Vui lòng chọn một mức cho từng tiêu chí';
$string['rubricoptions'] = 'Tùy chọn bảng tiêu chí';
$string['rubricstatus'] = 'Trạng thái bảng tiêu chí hiện tại';
$string['save'] = 'Lưu';
$string['saverubric'] = 'Lưu bảng tiêu chí và đưa vào sử dụng';
$string['saverubricdraft'] = 'Lưu dưới dạng bản nháp';
$string['scoreinputforlevel'] = 'Nhập điểm cho mức {$a}';
$string['scorepostfix'] = '{$a} điểm';
$string['showdescriptionstudent'] = 'Hiển thị mô tả bảng tiêu chí cho người được chấm điểm';
$string['showdescriptionteacher'] = 'Hiển thị mô tả bảng tiêu chí trong khi đánh giá';
$string['showremarksstudent'] = 'Hiển thị nhận xét cho người được chấm điểm';
$string['showscorestudent'] = 'Hiển thị điểm của từng mức cho người được chấm điểm';
$string['showscoreteacher'] = 'Hiển thị điểm của từng mức trong khi đánh giá';
$string['sortlevelsasc'] = 'Thứ tự sắp xếp các mức:';
$string['sortlevelsasc0'] = 'Giảm dần theo số điểm';
$string['sortlevelsasc1'] = 'Tăng dần theo số điểm';
$string['zerolevelsabsent'] = 'Cảnh báo: Điểm thấp nhất có thể đạt được theo bảng tiêu chí này không phải là 0; điều này có thể dẫn đến điểm số không mong muốn cho hoạt động. Để tránh tình trạng này, mỗi tiêu chí nên có một mức 0 điểm.<br>
Có thể bỏ qua cảnh báo này nếu sử dụng thang điểm để chấm điểm và các mức thấp nhất trong bảng tiêu chí tương ứng với giá trị thấp nhất của thang điểm.';
