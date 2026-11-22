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
 * @subpackage guide
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Thêm nhận xét thường dùng';
$string['addcriterion'] = 'Thêm tiêu chí';
$string['additionalcomments'] = 'Nhận xét bổ sung';
$string['additionalcommentsforcriterion'] = 'Nhận xét bổ sung cho tiêu chí, {$a}';
$string['alwaysshowdefinition'] = 'Hiển thị định nghĩa hướng dẫn cho học viên';
$string['backtoediting'] = 'Quay lại chỉnh sửa';
$string['clicktocopy'] = 'Nhấp để sao chép văn bản này vào phần phản hồi tiêu chí';
$string['clicktoedit'] = 'Nhấp để chỉnh sửa';
$string['clicktoeditname'] = 'Nhấp để chỉnh sửa tên tiêu chí';
$string['comment'] = 'Nhận xét';
$string['commentpickerforcriterion'] = 'Bộ chọn nhận xét thường dùng cho phần nhận xét bổ sung của {$a}';
$string['comments'] = 'Nhận xét thường dùng';
$string['commentsdelete'] = 'Xóa nhận xét';
$string['commentsempty'] = 'Nhấp để chỉnh sửa nhận xét';
$string['commentsmovedown'] = 'Di chuyển xuống';
$string['commentsmoveup'] = 'Di chuyển lên';
$string['confirmdeletecriterion'] = 'Bạn có chắc chắn muốn xóa mục này không?';
$string['confirmdeletelevel'] = 'Bạn có chắc chắn muốn xóa mức này không?';
$string['criterion'] = 'Tên tiêu chí';
$string['criteriondelete'] = 'Xóa tiêu chí';
$string['criterionempty'] = 'Nhấp để chỉnh sửa tiêu chí';
$string['criterionmovedown'] = 'Di chuyển xuống';
$string['criterionmoveup'] = 'Di chuyển lên';
$string['criterionname'] = 'Tên tiêu chí';
$string['criterionremark'] = 'Nhận xét về tiêu chí {$a}';
$string['definemarkingguide'] = 'Định nghĩa hướng dẫn chấm điểm';
$string['description'] = 'Mô tả';
$string['descriptionmarkers'] = 'Mô tả dành cho người chấm';
$string['descriptionstudents'] = 'Mô tả dành cho học viên';
$string['err_maxscoreisnegative'] = 'Điểm tối đa không hợp lệ; không cho phép giá trị âm';
$string['err_maxscorenotnumeric'] = 'Điểm tối đa của tiêu chí phải là số';
$string['err_nocomment'] = 'Nhận xét không được để trống';
$string['err_nodescription'] = 'Mô tả dành cho học viên không được để trống';
$string['err_nodescriptionmarkers'] = 'Mô tả dành cho người chấm không được để trống';
$string['err_nomaxscore'] = 'Điểm tối đa của tiêu chí không được để trống';
$string['err_noshortname'] = 'Tên tiêu chí không được để trống';
$string['err_scoreinvalid'] = 'Điểm được cho ở tiêu chí \'{$a->criterianame}\' không hợp lệ; điểm tối đa là: {$a->maxscore}';
$string['err_scoreisnegative'] = 'Điểm được cho ở tiêu chí \'{$a->criterianame}\' không hợp lệ; không cho phép giá trị âm';
$string['err_shortnametoolong'] = 'Tên tiêu chí phải có ít hơn 256 ký tự';
$string['gradingof'] = 'Chấm điểm {$a}';
$string['guide'] = 'Hướng dẫn chấm điểm';
$string['guidemappingexplained'] = 'CẢNH BÁO: Hướng dẫn chấm điểm của bạn có điểm tối đa là <b>{$a->maxscore} điểm</b>, nhưng điểm tối đa được thiết lập cho hoạt động là {$a->modulegrade}. Điểm tối đa trong hướng dẫn chấm điểm sẽ được quy đổi theo điểm tối đa của hoạt động.<br />
    Các điểm trung gian sẽ được quy đổi tương ứng và làm tròn đến mức điểm khả dụng gần nhất.';
$string['guidenotcompleted'] = 'Vui lòng nhập điểm hợp lệ cho từng tiêu chí';
$string['guideoptions'] = 'Tùy chọn hướng dẫn chấm điểm';
$string['guidestatus'] = 'Trạng thái hướng dẫn chấm điểm hiện tại';
$string['hidemarkerdesc'] = 'Ẩn mô tả tiêu chí dành cho người chấm';
$string['hidestudentdesc'] = 'Ẩn mô tả tiêu chí dành cho học viên';
$string['informationforcriterion'] = 'Thông tin về {$a}';
$string['insertcomment'] = 'Chèn nhận xét thường dùng';
$string['maxscore'] = 'Điểm tối đa';
$string['name'] = 'Tên';
$string['needregrademessage'] = 'Định nghĩa hướng dẫn chấm điểm đã thay đổi sau khi học viên này được chấm điểm. Học viên không thể xem hướng dẫn chấm điểm này cho đến khi bạn kiểm tra hướng dẫn và cập nhật điểm.';
$string['outof'] = 'Điểm trên tổng {$a}';
$string['pluginname'] = 'Hướng dẫn chấm điểm';
$string['previewmarkingguide'] = 'Xem trước hướng dẫn chấm điểm';
$string['privacy:metadata:criterionid'] = 'Mã định danh của một tiêu chí dùng để chấm điểm nâng cao.';
$string['privacy:metadata:fillingssummary'] = 'Lưu trữ thông tin về điểm và phản hồi của người dùng theo hướng dẫn chấm điểm.';
$string['privacy:metadata:instanceid'] = 'Mã định danh của một điểm được sử dụng bởi hoạt động.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Có hiển thị mô tả tiêu chí dành cho người chấm hay không';
$string['privacy:metadata:preference:showstudentdesc'] = 'Có hiển thị mô tả tiêu chí dành cho học viên hay không';
$string['privacy:metadata:remark'] = 'Nhận xét liên quan đến tiêu chí chấm điểm này.';
$string['privacy:metadata:score'] = 'Điểm cho tiêu chí chấm điểm này.';
$string['regrademessage1'] = 'Bạn sắp lưu các thay đổi cho hướng dẫn chấm điểm đã được sử dụng để chấm điểm. Vui lòng cho biết có cần xem lại các điểm hiện có hay không. Nếu chọn tùy chọn này, hướng dẫn chấm điểm sẽ bị ẩn với học viên cho đến khi mục của họ được chấm lại.';
$string['regrademessage5'] = 'Bạn sắp lưu những thay đổi quan trọng cho hướng dẫn chấm điểm đã được sử dụng để chấm điểm. Giá trị trong sổ điểm sẽ không thay đổi, nhưng hướng dẫn chấm điểm sẽ bị ẩn với học viên cho đến khi mục của họ được chấm lại.';
$string['regradeoption0'] = 'Không đánh dấu để chấm lại';
$string['regradeoption1'] = 'Đánh dấu để chấm lại';
$string['remark_help'] = 'Nhập nhận xét bổ sung về tiêu chí này.';
$string['restoredfromdraft'] = 'LƯU Ý: Lần chấm điểm gần nhất cho người này chưa được lưu đúng cách nên các điểm nháp đã được khôi phục. Nếu muốn hủy các thay đổi này, hãy sử dụng nút \'Hủy\' bên dưới.';
$string['save'] = 'Lưu';
$string['saveguide'] = 'Lưu hướng dẫn chấm điểm và đưa vào sử dụng';
$string['saveguidedraft'] = 'Lưu dưới dạng bản nháp';
$string['score'] = 'điểm';
$string['score_help'] = 'Nhập điểm cho {$a->criterion} trong khoảng từ 0 đến {$a->maxscore}.';
$string['scoreforcriterion'] = 'Điểm của {$a}';
$string['showmarkerdesc'] = 'Hiển thị mô tả tiêu chí dành cho người chấm';
$string['showmarkspercriterionstudents'] = 'Hiển thị điểm theo từng tiêu chí cho học viên';
$string['showstudentdesc'] = 'Hiển thị mô tả tiêu chí dành cho học viên';
