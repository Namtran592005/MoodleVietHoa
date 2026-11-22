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
 * @package    qbank
 * @subpackage statistics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Có cần kiểm tra không?';
$string['discrimination_index_help'] = 'Thống kê câu hỏi cho thấy khả năng câu hỏi cần được kiểm tra. Ví dụ, nếu người học đạt điểm thấp ở câu hỏi nhưng điểm cao trong toàn bộ bài kiểm tra, hoặc đạt điểm cao ở câu hỏi nhưng điểm thấp trong toàn bộ bài kiểm tra, thì câu hỏi có thể có vấn đề, chẳng hạn như đáp án sai được đặt là đáp án đúng. Tuy nhiên, số liệu thống kê không phải lúc nào cũng chính xác; đây chỉ là dấu hiệu cho thấy câu hỏi cần được kiểm tra.';
$string['discriminative_efficiency'] = 'Hiệu quả phân biệt';
$string['discriminative_efficiency_help'] = 'Hiệu quả phân biệt là ước tính thống kê về mức độ câu hỏi đánh giá người học tốt như thế nào; giá trị càng cao càng tốt. Giá trị đặc biệt thấp có thể cho thấy câu hỏi có vấn đề. Câu hỏi quá khó hoặc quá dễ (có chỉ số độ dễ gần 0% hoặc 100%) cũng có thể dẫn đến giá trị thấp.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Chỉ số độ dễ';
$string['facility_index_help'] = 'Chỉ số độ dễ cho biết điểm trung bình (theo phần trăm) đạt được ở câu hỏi (tất cả phiên bản) trong tất cả bài kiểm tra có lần làm bài cho câu hỏi đó. Giá trị cao hơn thường cho biết câu hỏi dễ hơn.';
$string['likely'] = 'Có khả năng';
$string['na'] = 'Không áp dụng';
$string['pluginname'] = 'Thống kê câu hỏi';
$string['privacy:metadata'] = 'Plugin ngân hàng câu hỏi Thống kê câu hỏi không lưu trữ dữ liệu cá nhân.';
$string['unlikely'] = 'Không có khả năng';
$string['verylikely'] = 'Rất có khả năng';
