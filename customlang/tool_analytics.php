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
 * @subpackage analytics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Độ chính xác';
$string['actionexecutedgroupedusefulness'] = 'Các tác vụ được nhóm';
$string['actions'] = 'Tác vụ';
$string['actionsexecutedbyusers'] = 'Các tác vụ do người dùng thực hiện';
$string['actionsexecutedbyusersfor'] = 'Các tác vụ do người dùng thực hiện cho mô hình "{$a}"';
$string['allpredictions'] = 'Tất cả dự đoán';
$string['alltimesplittingmethods'] = 'Tất cả khoảng thời gian phân tích';
$string['analysingsitedata'] = 'Đang phân tích dữ liệu trang web';
$string['analysis'] = 'Phân tích';
$string['analyticmodels'] = 'Các mô hình phân tích';
$string['bettercli'] = 'Việc đánh giá mô hình và tạo dự đoán có thể đòi hỏi xử lý nặng. Bạn nên chạy các tác vụ này từ dòng lệnh.';
$string['cantguessenddate'] = 'Không thể xác định ngày kết thúc';
$string['cantguessstartdate'] = 'Không thể xác định ngày bắt đầu';
$string['classdoesnotexist'] = 'Lớp {$a} không tồn tại';
$string['clearmodelpredictions'] = 'Bạn có chắc muốn xóa tất cả dự đoán của "{$a}" không?';
$string['clearpredictions'] = 'Xóa dự đoán';
$string['clienablemodel'] = 'Bạn có thể bật mô hình bằng cách chọn khoảng thời gian phân tích theo ID. Lưu ý rằng bạn cũng có thể bật mô hình sau này bằng giao diện web (\'none\' để thoát).';
$string['clievaluationandpredictions'] = 'Một tác vụ đã lên lịch sẽ lặp qua các mô hình đã bật và lấy dự đoán. Việc đánh giá mô hình qua giao diện web bị tắt. Bạn có thể cho phép thực hiện các quy trình này theo cách thủ công qua giao diện web bằng cách tắt thiết lập phân tích <a href="{$a}">\'onlycli\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Một tác vụ đã lên lịch sẽ lặp qua các mô hình đã bật và lấy dự đoán. Việc đánh giá mô hình qua giao diện web bị tắt. Quản trị viên trang web có thể bật tính năng này.';
$string['component'] = 'Thành phần';
$string['componentcore'] = 'Lõi';
$string['componentselect'] = 'Chọn tất cả mô hình do thành phần \'{$a}\' cung cấp';
$string['componentselectnone'] = 'Bỏ chọn tất cả';
$string['contexts'] = 'Ngữ cảnh';
$string['contexts_help'] = 'Mô hình sẽ bị giới hạn trong tập hợp ngữ cảnh này. Nếu không chọn ngữ cảnh nào, sẽ không áp dụng giới hạn ngữ cảnh.';
$string['createmodel'] = 'Tạo mô hình';
$string['currenttimesplitting'] = 'Khoảng thời gian phân tích hiện tại';
$string['delete'] = 'Xóa';
$string['deletemodelconfirmation'] = 'Bạn có chắc muốn xóa "{$a}" không? Không thể hoàn tác những thay đổi này.';
$string['disabled'] = 'Đã tắt';
$string['editmodel'] = 'Chỉnh sửa mô hình "{$a}"';
$string['edittrainedwarning'] = 'Mô hình này đã được huấn luyện. Lưu ý rằng việc thay đổi chỉ báo hoặc khoảng thời gian phân tích sẽ xóa các dự đoán trước đó và bắt đầu tạo dự đoán mới.';
$string['enabled'] = 'Đã bật';
$string['errorcantenablenotimesplitting'] = 'Bạn cần chọn khoảng thời gian phân tích trước khi bật mô hình';
$string['errornoenabledandtrainedmodels'] = 'Không có mô hình nào vừa được bật vừa được huấn luyện để dự đoán.';
$string['errornoenabledmodels'] = 'Không có mô hình nào được bật để huấn luyện.';
$string['errornoexport'] = 'Chỉ có thể xuất các mô hình đã được huấn luyện';
$string['errornostaticevaluated'] = 'Không thể đánh giá các mô hình dựa trên giả định. Theo định nghĩa, chúng luôn chính xác 100%.';
$string['errornostaticlog'] = 'Không thể đánh giá các mô hình dựa trên giả định vì không có nhật ký hiệu suất.';
$string['erroronlycli'] = 'Chỉ cho phép thực thi qua dòng lệnh';
$string['errortrainingdataexport'] = 'Không thể xuất dữ liệu huấn luyện mô hình';
$string['evaluate'] = 'Đánh giá';
$string['evaluatemodel'] = 'Đánh giá mô hình';
$string['evaluationinbatches'] = 'Nội dung trang web được tính toán và lưu theo từng lô. Có thể dừng quá trình đánh giá bất cứ lúc nào. Khi chạy lại, quá trình sẽ tiếp tục từ điểm đã dừng.';
$string['evaluationmode'] = 'Chế độ đánh giá';
$string['evaluationmode_help'] = 'Có hai chế độ đánh giá:

* Mô hình đã huấn luyện - Dữ liệu trang web được dùng làm dữ liệu kiểm tra để đánh giá độ chính xác của mô hình đã huấn luyện.
* Cấu hình - Dữ liệu trang web được chia thành dữ liệu huấn luyện và dữ liệu kiểm tra, nhằm vừa huấn luyện vừa kiểm tra độ chính xác của cấu hình mô hình.

Chế độ mô hình đã huấn luyện chỉ khả dụng nếu một mô hình đã huấn luyện được nhập vào trang web và chưa được huấn luyện lại bằng dữ liệu trang web.';
$string['evaluationmodecolconfiguration'] = 'Cấu hình';
$string['evaluationmodecoltrainedmodel'] = 'Mô hình đã huấn luyện';
$string['evaluationmodeconfiguration'] = 'Đánh giá cấu hình mô hình';
$string['evaluationmodeinfo'] = 'Mô hình này đã được nhập vào trang web. Bạn có thể đánh giá hiệu suất của mô hình hoặc đánh giá hiệu suất cấu hình mô hình bằng dữ liệu trang web.';
$string['evaluationmodetrainedmodel'] = 'Đánh giá mô hình đã huấn luyện';
$string['executescheduledanalysis'] = 'Thực thi phân tích đã lên lịch';
$string['export'] = 'Xuất';
$string['exportincludeweights'] = 'Bao gồm trọng số của mô hình đã huấn luyện';
$string['exportmodel'] = 'Xuất cấu hình';
$string['exporttrainingdata'] = 'Xuất dữ liệu huấn luyện';
$string['extrainfo'] = 'Thông tin';
$string['generalerror'] = 'Lỗi đánh giá. Mã trạng thái {$a}';
$string['goodmodel'] = 'Đây là mô hình tốt để dùng tạo dự đoán. Hãy bật mô hình để bắt đầu nhận dự đoán.';
$string['ignoreversionmismatches'] = 'Bỏ qua sự không khớp phiên bản';
$string['ignoreversionmismatchescheckbox'] = 'Bỏ qua những khác biệt giữa phiên bản trang web này và phiên bản trang web ban đầu.';
$string['importedsuccessfully'] = 'Đã nhập mô hình thành công.';
$string['importmodel'] = 'Nhập mô hình';
$string['indicators'] = 'Chỉ báo';
$string['indicators_help'] = 'Chỉ báo là những yếu tố mà bạn cho rằng sẽ giúp dự đoán chính xác mục tiêu.';
$string['indicators_link'] = 'Chỉ báo';
$string['indicatorsnum'] = 'Số lượng chỉ báo: {$a}';
$string['info'] = 'Thông tin';
$string['insights'] = 'Thông tin chuyên sâu';
$string['insightsreport'] = 'Báo cáo thông tin chuyên sâu';
$string['invalidanalysables'] = 'Các phần tử trang web không hợp lệ';
$string['invalidanalysablesinfo'] = 'Trang này liệt kê các phần tử có thể phân tích nhưng không thể được mô hình dự đoán này sử dụng. Các phần tử được liệt kê không thể dùng để huấn luyện mô hình dự đoán, cũng như mô hình không thể tạo dự đoán cho chúng.';
$string['invalidanalysablestable'] = 'Bảng các phần tử có thể phân tích không hợp lệ của trang web';
$string['invalidcurrenttimesplitting'] = 'Khoảng thời gian phân tích hiện tại không hợp lệ đối với mục tiêu của mô hình này. Vui lòng chọn khoảng thời gian khác.';
$string['invalidindicatorsremoved'] = 'Đã thêm mô hình mới. Các chỉ báo không tương thích với mục tiêu đã chọn đã tự động bị loại bỏ.';
$string['invalidprediction'] = 'Không thể lấy dự đoán do không hợp lệ';
$string['invalidtimesplitting'] = 'Khoảng thời gian phân tích đã chọn không hợp lệ đối với mục tiêu đã chọn.';
$string['invalidtimesplittinginmodels'] = 'Khoảng thời gian phân tích được một số mô hình sử dụng không hợp lệ. Vui lòng chọn khoảng thời gian khác cho các mô hình sau: {$a}';
$string['invalidtraining'] = 'Không thể huấn luyện mô hình do không hợp lệ';
$string['loginfo'] = 'Ghi thêm thông tin vào nhật ký';
$string['missingmoodleversion'] = 'Tệp đã nhập không xác định số phiên bản';
$string['modelid'] = 'ID mô hình';
$string['modelinvalidanalysables'] = 'Các phần tử có thể phân tích không hợp lệ đối với mô hình "{$a}"';
$string['modelname'] = 'Tên mô hình';
$string['modelresults'] = '{$a} kết quả';
$string['modeltimesplitting'] = 'Khoảng thời gian phân tích';
$string['newmodel'] = 'Mô hình mới';
$string['nextpage'] = 'Trang tiếp theo';
$string['noactionsfound'] = 'Người dùng chưa thực hiện tác vụ nào trên các thông tin chuyên sâu đã tạo.';
$string['nodatatoevaluate'] = 'Không có dữ liệu để đánh giá mô hình';
$string['nodatatopredict'] = 'Không có phần tử mới nào cần lấy dự đoán.';
$string['nodatatotrain'] = 'Không có dữ liệu mới để sử dụng cho việc huấn luyện.';
$string['noinvalidanalysables'] = 'Trang web này không có phần tử có thể phân tích nào không hợp lệ.';
$string['notdefined'] = 'Chưa được xác định';
$string['pluginname'] = 'Các mô hình phân tích';
$string['predictionprocessfinished'] = 'Quá trình dự đoán đã hoàn tất';
$string['predictionresults'] = 'Kết quả dự đoán';
$string['predictmodels'] = 'Dự đoán bằng các mô hình';
$string['predictorresultsin'] = 'Thông tin nhật ký của bộ dự đoán trong thư mục {$a}';
$string['previouspage'] = 'Trang trước';
$string['privacy:metadata'] = 'Plugin mô hình phân tích không lưu trữ dữ liệu cá nhân nào.';
$string['restoredefault'] = 'Khôi phục các mô hình mặc định';
$string['restoredefaultempty'] = 'Vui lòng chọn các mô hình cần khôi phục.';
$string['restoredefaultinfo'] = 'Các mô hình mặc định này bị thiếu hoặc đã thay đổi kể từ khi được cài đặt. Bạn có thể khôi phục các mô hình mặc định đã chọn.';
$string['restoredefaultnone'] = 'Đã tạo tất cả mô hình mặc định do lõi và các plugin đã cài đặt cung cấp. Không tìm thấy mô hình mới; không có gì cần khôi phục.';
$string['restoredefaultsome'] = 'Đã tạo lại thành công {$a->count} mô hình mới.';
$string['restoredefaultsubmit'] = 'Khôi phục các mục đã chọn';
$string['sameenddate'] = 'Ngày kết thúc hiện tại phù hợp';
$string['samestartdate'] = 'Ngày bắt đầu hiện tại phù hợp';
$string['scheduledanalysisresults'] = 'Kết quả sử dụng khoảng thời gian phân tích {$a->name}';
$string['scheduledanalysisresultscli'] = 'Kết quả sử dụng khoảng thời gian phân tích {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Chọn khoảng thời gian phân tích bạn muốn dùng để đánh giá cấu hình mô hình.';
$string['target'] = 'Mục tiêu';
$string['target_help'] = 'Mục tiêu là điều mà mô hình sẽ dự đoán.';
$string['target_link'] = 'Mục tiêu';
$string['timesplittingnotdefined'] = 'Chưa xác định khoảng thời gian phân tích.';
$string['timesplittingnotdefined_help'] = 'Bạn cần chọn khoảng thời gian phân tích trước khi bật mô hình.';
$string['trainandpredictmodel'] = 'Đang huấn luyện mô hình và tính toán dự đoán';
$string['trainingprocessfinished'] = 'Quá trình huấn luyện đã hoàn tất';
$string['trainingresults'] = 'Kết quả huấn luyện';
$string['trainmodels'] = 'Huấn luyện mô hình';
$string['versionnotsame'] = 'Tệp đã nhập thuộc phiên bản khác ({$a->importedversion}) với phiên bản hiện tại ({$a->version})';
$string['viewlog'] = 'Nhật ký đánh giá';
$string['weeksenddateautomaticallyset'] = 'Ngày kết thúc được tự động đặt dựa trên ngày bắt đầu và số lượng mục';
$string['weeksenddatedefault'] = 'Ngày kết thúc được tự động tính từ ngày bắt đầu khóa học.';
