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
 * @subpackage courseformat
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsection'] = 'Thêm mục';
$string['availability_hide'] = 'Ẩn khỏi trang khóa học';
$string['availability_hide_help'] = 'Không khả dụng cho học viên.';
$string['availability_show'] = 'Hiển thị trên trang khóa học';
$string['availability_show_help'] = 'Học viên có thể truy cập (tùy thuộc vào các hạn chế truy cập được thiết lập).';
$string['availability_stealth'] = 'Đặt ở trạng thái khả dụng nhưng không hiển thị trên trang khóa học';
$string['availability_stealth_help'] = 'Học viên có thể truy cập nếu bạn cung cấp liên kết. Các hoạt động vẫn xuất hiện trong sổ điểm và các báo cáo khác.';
$string['bulkcancel'] = 'Đóng thao tác hàng loạt';
$string['bulkedit'] = 'Thao tác hàng loạt';
$string['bulkeditingcourse'] = 'Chỉnh sửa hàng loạt khóa học: {$a}';
$string['bulkselection'] = 'Đã chọn {$a}';
$string['bulkselection_plural'] = 'Đã chọn {$a}';
$string['cm_add_feedback'] = 'Đã thêm {$a->modname}.';
$string['cm_complete_feedback'] = 'Đã đánh dấu {$a->name} là hoàn tất.';
$string['cm_complete_feedback_batch'] = 'Đã đánh dấu các hoạt động được chọn ({$a->count}) là hoàn tất.';
$string['cm_delete_feedback'] = 'Đã xóa {$a->name}.';
$string['cm_delete_feedback_batch'] = 'Đã xóa các hoạt động được chọn ({$a->count}).';
$string['cm_duplicate_feedback'] = 'Đã nhân đôi {$a->name}.';
$string['cm_duplicate_feedback_batch'] = 'Đã nhân đôi các hoạt động được chọn ({$a->count}).';
$string['cm_hide_feedback'] = '{$a->name} hiện đã bị ẩn.';
$string['cm_hide_feedback_batch'] = 'Các hoạt động được chọn ({$a->count}) hiện đã bị ẩn.';
$string['cm_move_after_feedback'] = 'Đã chuyển {$a->name} đến sau {$a->targetCmName}.';
$string['cm_move_after_feedback_batch'] = 'Đã chuyển các hoạt động được chọn ({$a->count}) đến sau {$a->targetCmName}.';
$string['cm_move_before_feedback'] = 'Đã chuyển {$a->name} đến trước {$a->targetCmName}.';
$string['cm_move_before_feedback_batch'] = 'Đã chuyển các hoạt động được chọn ({$a->count}) đến trước {$a->targetCmName}.';
$string['cm_move_feedback'] = 'Đã chuyển {$a->name} đến mục {$a->targetSectionName}.';
$string['cm_move_feedback_batch'] = 'Đã chuyển các hoạt động được chọn ({$a->count}) đến mục {$a->targetSectionName}.';
$string['cm_moveleft_feedback'] = 'Đã chuyển {$a->name} sang trái.';
$string['cm_moveright_feedback'] = 'Đã chuyển {$a->name} sang phải.';
$string['cm_nogroups_feedback'] = 'Đã đổi chế độ nhóm của {$a->name} thành Không có nhóm.';
$string['cm_separategroups_feedback'] = 'Đã đổi chế độ nhóm của {$a->name} thành Nhóm riêng biệt.';
$string['cm_show_feedback'] = '{$a->name} hiện đã được hiển thị.';
$string['cm_show_feedback_batch'] = 'Các hoạt động được chọn ({$a->count}) hiện đã được hiển thị.';
$string['cm_stealth_feedback'] = '{$a->name} hiện đã khả dụng nhưng không hiển thị trên trang khóa học.';
$string['cm_stealth_feedback_batch'] = 'Các hoạt động được chọn ({$a->count}) hiện đã khả dụng nhưng không hiển thị trên trang khóa học.';
$string['cm_uncomplete_feedback'] = 'Đã đánh dấu {$a->name} là chưa hoàn tất.';
$string['cm_uncomplete_feedback_batch'] = 'Đã đánh dấu các hoạt động được chọn ({$a->count}) là chưa hoàn tất.';
$string['cm_visiblegroups_feedback'] = 'Đã đổi chế độ nhóm của {$a->name} thành Nhóm hiển thị.';
$string['cmavailability'] = 'Tính khả dụng của hoạt động';
$string['cmdelete_info'] = 'Thao tác này sẽ xóa {$a->name} và mọi dữ liệu người dùng mà hoạt động này chứa.';
$string['cmdelete_subsectiontitle'] = 'Xóa mục con?';
$string['cmdelete_title'] = 'Xóa hoạt động?';
$string['cmmove_info'] = 'Chuyển {$a} đến sau';
$string['cmmove_subsectiontitle'] = 'Chuyển mục con';
$string['cmmove_title'] = 'Chuyển hoạt động';
$string['cmsdelete'] = 'Xóa các hoạt động';
$string['cmsdelete_info'] = 'Thao tác này sẽ xóa {$a->count} hoạt động và mọi dữ liệu người dùng mà chúng chứa.';
$string['cmsdelete_title'] = 'Xóa các hoạt động đã chọn?';
$string['cmsduplicate'] = 'Nhân đôi các hoạt động';
$string['cmsmove'] = 'Chuyển các hoạt động';
$string['cmsmove_info'] = 'Chuyển {$a} hoạt động đến sau';
$string['cmsmove_title'] = 'Chuyển các hoạt động đã chọn';
$string['courseindex'] = 'Chỉ mục khóa học';
$string['courseindexoptions'] = 'Tùy chọn chỉ mục khóa học';
$string['linearnavigationsettings'] = 'Bật điều hướng tuần tự';
$string['linearnavigationsettings_help'] = 'Hiển thị nút \'Trước\' và \'Tiếp theo\' trên các trang hoạt động để giúp người học lần lượt di chuyển qua khóa học.';
$string['maxsectionaddmessage'] = 'Bạn đã đạt đến số mục tối đa được phép trong một khóa học.';
$string['nobulkaction'] = 'Không có thao tác hàng loạt nào khả dụng';
$string['orphansectionwarning'] = 'Mục này và nội dung bên trong không thuộc cấu trúc khóa học và không hiển thị với học viên. Để sử dụng nội dung này, hãy chuyển nội dung đó sang một mục khác.';
$string['preference:coursesectionspreferences'] = 'Tùy chọn mục của người dùng cho khóa học {$a}';
$string['privacy:metadata:preference:coursesectionspreferences'] = 'Tùy chọn mục của người dùng như thu gọn và mở rộng.';
$string['section_add_feedback'] = 'Đã thêm mục.';
$string['section_delete_feedback'] = 'Đã xóa mục khóa học {$a->name}.';
$string['section_delete_feedback_batch'] = 'Đã xóa các mục khóa học được chọn ({$a->count}).';
$string['section_hide_feedback'] = 'Đã ẩn mục khóa học {$a->name}.';
$string['section_hide_feedback_batch'] = 'Đã ẩn các mục khóa học được chọn ({$a->count}).';
$string['section_move_after_feedback'] = 'Đã chuyển mục khóa học {$a->name} đến sau mục khóa học {$a->targetSectionName}.';
$string['section_move_after_feedback_batch'] = 'Đã chuyển các mục khóa học được chọn ({$a->count}) đến sau mục khóa học {$a->targetSectionName}.';
$string['section_show_feedback'] = 'Đã hiển thị mục khóa học {$a->name}.';
$string['section_show_feedback_batch'] = 'Đã hiển thị các mục khóa học được chọn ({$a->count}).';
$string['sectionaddmax'] = 'Bạn đã đạt đến số mục tối đa được phép trong một khóa học...';
$string['sectionavailability_title'] = 'Tính khả dụng của mục';
$string['sectiondelete_info'] = 'Thao tác này sẽ xóa {$a->name} và tất cả hoạt động trong mục đó.';
$string['sectiondelete_title'] = 'Xóa mục?';
$string['sectionmove_info'] = 'Chuyển {$a} đến sau';
$string['sectionmove_title'] = 'Chuyển mục';
$string['sectionsavailability'] = 'Tính khả dụng của các mục';
$string['sectionsavailability_title'] = 'Tính khả dụng của các mục';
$string['sectionsdelete'] = 'Xóa các mục';
$string['sectionsdelete_info'] = 'Thao tác này sẽ xóa {$a->count} mục và tất cả hoạt động bên trong.';
$string['sectionsdelete_title'] = 'Xóa các mục đã chọn?';
$string['sectionsmove'] = 'Chuyển các mục';
$string['sectionsmove_info'] = 'Chuyển {$a} mục đến sau';
$string['sectionsmove_title'] = 'Chuyển các mục đã chọn';
$string['selectcm'] = 'Chọn hoạt động {$a}';
$string['selectsection'] = 'Chọn mục {$a}';
