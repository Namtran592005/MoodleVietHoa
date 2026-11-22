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
 * @package    quiz
 * @subpackage statistics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Câu trả lời thực tế';
$string['allattempts'] = 'tất cả các lần làm bài';
$string['allattemptsavg'] = 'Điểm trung bình của tất cả các lần làm bài';
$string['allattemptscount'] = 'Tổng số lần làm bài đã hoàn tất và được chấm điểm';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" biến thể {$a->variant}';
$string['analysisofresponses'] = 'Phân tích câu trả lời';
$string['analysisofresponsesfor'] = 'Phân tích câu trả lời cho {$a}';
$string['analysisvariant'] = '"{$a->name}" biến thể {$a->variant}';
$string['attempts'] = 'Các lần làm bài';
$string['attemptsall'] = 'tất cả các lần làm bài';
$string['attemptsfirst'] = 'lần làm bài đầu tiên';
$string['backtoquizreport'] = 'Quay lại trang báo cáo thống kê chính.';
$string['calculatefrom'] = 'Tính thống kê từ';
$string['calculatingallstats'] = 'Đang tính thống kê cho bài kiểm tra, các câu hỏi và phân tích dữ liệu câu trả lời';
$string['cic'] = 'Hệ số nhất quán nội tại (cho {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Số lượng';
$string['counttryno'] = 'Số lượng lần thử {$a}';
$string['coursename'] = 'Tên khóa học';
$string['detailedanalysis'] = 'Phân tích chi tiết hơn các câu trả lời cho câu hỏi này';
$string['detailedanalysisforvariant'] = 'Phân tích chi tiết hơn các câu trả lời cho biến thể {$a} của câu hỏi này';
$string['discrimination_index'] = 'Chỉ số phân biệt';
$string['discriminative_efficiency'] = 'Hiệu quả phân biệt';
$string['downloadeverything'] = 'Tải toàn bộ báo cáo xuống dưới dạng';
$string['duration'] = 'Mở trong';
$string['effective_weight'] = 'Trọng số hiệu quả';
$string['errordeleting'] = 'Lỗi khi xóa các bản ghi {$a} cũ.';
$string['errormedian'] = 'Lỗi khi lấy trung vị';
$string['errorpowerquestions'] = 'Lỗi khi lấy dữ liệu để tính phương sai điểm câu hỏi';
$string['errorpowers'] = 'Lỗi khi lấy dữ liệu để tính phương sai điểm bài kiểm tra';
$string['errorrandom'] = 'Lỗi khi lấy dữ liệu mục phụ';
$string['errorratio'] = 'Tỷ lệ lỗi (cho {$a})';
$string['errorstatisticsquestions'] = 'Lỗi khi lấy dữ liệu để tính thống kê điểm câu hỏi';
$string['facility'] = 'Chỉ số độ dễ';
$string['firstattempts'] = 'các lần làm bài đầu tiên';
$string['firstattemptsavg'] = 'Điểm trung bình của các lần làm bài đầu tiên';
$string['firstattemptscount'] = 'Số lần làm bài đầu tiên đã hoàn tất và được chấm điểm';
$string['frequency'] = 'Tần suất';
$string['getstatslockprogress'] = 'Đang chờ tác vụ xử lý. Vui lòng chờ hoặc thử lại sau.';
$string['getstatslocktimeout'] = 'Hết thời gian chờ khóa tính thống kê';
$string['getstatslocktimeoutdesc'] = 'Số giây chờ khóa khi bắt đầu tính thống kê cho một bài kiểm tra. Cài đặt này chủ yếu dùng để kiểm thử; không thay đổi nếu bạn không biết rõ mình đang làm gì.';
$string['highestattempts'] = 'lần làm bài có điểm cao nhất';
$string['highestattemptsavg'] = 'Điểm trung bình của các lần làm bài có điểm cao nhất';
$string['intended_weight'] = 'Trọng số dự kiến';
$string['kurtosis'] = 'Độ nhọn của phân phối điểm (cho {$a})';
$string['lastattempts'] = 'lần làm bài cuối cùng';
$string['lastattemptsavg'] = 'Điểm trung bình của các lần làm bài cuối cùng';
$string['lastcalculated'] = 'Tính lần cuối cách đây {$a->lastcalculated}; kể từ đó đã có {$a->count} lần làm bài.';
$string['maximumfacility'] = 'Độ dễ tối đa';
$string['median'] = 'Điểm trung vị (cho {$a})';
$string['medianfacility'] = 'Độ dễ trung vị';
$string['minimumfacility'] = 'Độ dễ tối thiểu';
$string['modelresponse'] = 'Câu trả lời mẫu';
$string['nameforvariant'] = 'Biến thể {$a->variant} của {$a->name}';
$string['negcovar'] = 'Hiệp phương sai âm giữa điểm câu hỏi và tổng điểm lần làm bài';
$string['negcovar_help'] = 'Điểm của câu hỏi này trong tập hợp các lần làm bài này biến thiên ngược chiều với tổng điểm lần làm bài. Điều này có nghĩa là tổng điểm lần làm bài thường thấp hơn mức trung bình khi điểm câu hỏi này cao hơn mức trung bình và ngược lại.

Trong trường hợp này, không thể tính trọng số câu hỏi hiệu quả theo phương trình của chúng tôi. Trọng số câu hỏi hiệu quả được tính cho các câu hỏi khác trong bài kiểm tra này là trọng số hiệu quả của các câu hỏi đó nếu điểm tối đa của những câu hỏi được tô sáng có hiệp phương sai âm được đặt thành 0.

Nếu bạn chỉnh sửa bài kiểm tra và đặt điểm tối đa của (các) câu hỏi có hiệp phương sai âm này thành 0, trọng số câu hỏi hiệu quả của chúng sẽ bằng 0 và trọng số câu hỏi hiệu quả thực tế của các câu hỏi khác sẽ bằng giá trị được tính hiện tại.';
$string['nogradedattempts'] = 'Chưa có lần làm bài nào cho bài kiểm tra này, hoặc tất cả các lần làm bài đều có câu hỏi cần chấm điểm thủ công.';
$string['nostats'] = 'Không thể hoàn tất việc tính thống kê. Có thể đang có một phép tính kéo dài. Vui lòng thử lại sau.';
$string['nostudentsingroup'] = 'Nhóm này hiện chưa có học viên nào';
$string['optiongrade'] = 'Điểm một phần';
$string['partofquestion'] = 'Phần của câu hỏi';
$string['pluginname'] = 'Thống kê';
$string['position'] = 'Vị trí';
$string['positions'] = 'Vị trí';
$string['privacy:metadata'] = 'Mặc dù plugin Thống kê bài kiểm tra có các bảng cơ sở dữ liệu, dữ liệu trong đó là dữ liệu tổng hợp và không mô tả một cá nhân cụ thể.';
$string['questioninformation'] = 'Thông tin câu hỏi';
$string['questionname'] = 'Tên câu hỏi';
$string['questionnumber'] = 'Câu #';
$string['questionstatistics'] = 'Thống kê câu hỏi';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Loại câu hỏi';
$string['quizinformation'] = 'Thông tin bài kiểm tra';
$string['quizname'] = 'Tên bài kiểm tra';
$string['quizoverallstatistics'] = 'Thống kê tổng quan bài kiểm tra';
$string['quizstructureanalysis'] = 'Phân tích cấu trúc bài kiểm tra';
$string['random_guess_score'] = 'Điểm đoán ngẫu nhiên';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Phạm vi thống kê của các câu hỏi này';
$string['recalculatedebounce'] = 'Độ trễ gộp các lần tính lại thống kê';
$string['recalculatedebouncedesc'] = 'Thời gian trì hoãn các tác vụ tính lại thống kê đã xếp hàng để tránh tính lại nhiều lần. Đặt thành 0 để ngăn tự động tính lại.';
$string['recalculatenow'] = 'Tính lại ngay';
$string['recalculatenowadded'] = 'Đã thêm yêu cầu tính lại vào hàng đợi.';
$string['recalculatepending'] = 'Đang chờ tính lại. Tác vụ dự kiến chạy sau {$a} giây.';
$string['recalculatependingpast'] = 'Đã lên lịch tính lại và tác vụ sẽ chạy sớm nhất có thể.';
$string['recalculatetask'] = 'Tính lại thống kê câu hỏi';
$string['reportsettings'] = 'Cài đặt tính thống kê';
$string['response'] = 'Câu trả lời';
$string['skewness'] = 'Độ lệch của phân phối điểm (cho {$a})';
$string['slotstructureanalysis'] = 'Phân tích cấu trúc cho câu hỏi số {$a}';
$string['standarddeviation'] = 'Độ lệch chuẩn (cho {$a})';
$string['standarddeviationq'] = 'Độ lệch chuẩn';
$string['standarderror'] = 'Sai số chuẩn (cho {$a})';
$string['statistics'] = 'Thống kê';
$string['statistics:view'] = 'Xem báo cáo thống kê';
$string['statisticsreport'] = 'Báo cáo thống kê';
$string['statisticsreportgraph'] = 'Thống kê theo vị trí câu hỏi';
$string['statsfor'] = 'Thống kê bài kiểm tra (cho {$a})';
$string['variant'] = 'Biến thể';
$string['viewanalysis'] = 'Xem chi tiết';
$string['whichtries'] = 'Phân tích câu trả lời của';
