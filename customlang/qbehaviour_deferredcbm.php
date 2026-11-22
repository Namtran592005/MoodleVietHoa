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
 * @package    qbehaviour
 * @subpackage deferredcbm
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Độ chính xác';
$string['accuracyandbonus'] = 'Độ chính xác + Điểm thưởng';
$string['assumingcertainty'] = 'Bạn chưa chọn mức độ chắc chắn. Giả định: {$a}.';
$string['averagecbmmark'] = 'Điểm CBM trung bình';
$string['basemark'] = 'Điểm cơ bản {$a}';
$string['breakdownbycertainty'] = 'Phân tích theo mức độ chắc chắn';
$string['cbmbonus'] = 'Điểm thưởng CBM';
$string['cbmgradeexplanation'] = 'Đối với CBM, điểm ở trên được hiển thị so với điểm tối đa khi trả lời đúng tất cả với C=1.';
$string['cbmgrades'] = 'Điểm CBM';
$string['cbmgrades_help'] = 'Với phương pháp Chấm điểm dựa trên mức độ chắc chắn (CBM), trả lời đúng mọi câu hỏi với C=1 (ít chắc chắn) sẽ được điểm 100%. Điểm có thể lên đến 300% nếu trả lời đúng mọi câu hỏi với C=3 (rất chắc chắn). Những ngộ nhận (câu trả lời sai nhưng tự tin) làm giảm điểm nhiều hơn so với câu trả lời sai nhưng thừa nhận chưa chắc chắn. Điều này thậm chí có thể dẫn đến điểm tổng thể âm.

**Độ chính xác** là tỷ lệ phần trăm câu trả lời đúng, không tính mức độ chắc chắn nhưng có tính đến điểm tối đa của từng câu hỏi. Phân biệt thành công giữa các câu trả lời đáng tin cậy hơn và kém tin cậy hơn sẽ được điểm cao hơn so với việc chọn cùng một mức độ chắc chắn cho mọi câu hỏi. Điều này được thể hiện qua **Điểm thưởng CBM**. **Độ chính xác** + **Điểm thưởng CBM** là thước đo kiến thức tốt hơn **Độ chính xác**. Những ngộ nhận có thể dẫn đến điểm thưởng âm, như một lời cảnh báo để xem xét kỹ điều bạn biết và không biết.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'Điểm CBM {$a}';
$string['certainty'] = 'Mức độ chắc chắn';
$string['certainty_help'] = 'Phương pháp chấm điểm dựa trên mức độ chắc chắn yêu cầu bạn cho biết bạn nghĩ câu trả lời của mình đáng tin cậy đến mức nào. Các mức độ có sẵn:

Mức độ chắc chắn | C=1 (Không chắc) | C=2 (Trung bình) | C=3 (Khá chắc)
---------------- | ---------------- | ---------------- | ---------------
Điểm nếu đúng    | 1                | 2                | 3
Điểm nếu sai     | 0                | -2               | -6
Xác suất trả lời đúng | <67%          | 67-80%           | >80%

Bạn sẽ đạt điểm tốt nhất khi thừa nhận sự không chắc chắn. Ví dụ, nếu nghĩ rằng có hơn 1/3 khả năng trả lời sai, bạn nên chọn C=1 để tránh nguy cơ bị điểm âm.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certainty-1'] = 'Không biết';
$string['certainty1'] = 'C=1 (Không chắc: <67%)';
$string['certainty2'] = 'C=2 (Trung bình: >67%)';
$string['certainty3'] = 'C=3 (Khá chắc: >80%)';
$string['certaintyshort-1'] = 'Không biết';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Không biết';
$string['foransweredquestions'] = 'Kết quả chỉ dành cho {$a} câu hỏi đã trả lời';
$string['forentirequiz'] = 'Kết quả cho toàn bộ bài kiểm tra ({$a} câu hỏi)';
$string['howcertainareyou'] = 'Mức độ chắc chắn{$a->help}: {$a->choices}';
$string['judgementok'] = 'Tốt';
$string['judgementsummary'] = 'Câu trả lời: {$a->responses}. Độ chính xác: {$a->fraction}. (Khoảng tối ưu từ {$a->idealrangelow} đến {$a->idealrangehigh}). Bạn đã {$a->judgement} khi sử dụng mức độ chắc chắn này.';
$string['noquestions'] = 'Không có câu trả lời';
$string['overconfident'] = 'quá tự tin';
$string['pluginname'] = 'Phản hồi trì hoãn với CBM';
$string['privacy:metadata'] = 'Plugin hành vi câu hỏi Phản hồi trì hoãn với CBM không lưu trữ dữ liệu cá nhân nào.';
$string['slightlyoverconfident'] = 'hơi quá tự tin';
$string['slightlyunderconfident'] = 'hơi thiếu tự tin';
$string['underconfident'] = 'thiếu tự tin';
$string['weightx'] = 'Trọng số {$a}';
