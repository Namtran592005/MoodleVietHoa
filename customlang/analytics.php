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
 * @subpackage analytics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Không sử dụng được đối tượng có thể phân tích {$a->analysableid}: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Đối tượng có thể phân tích {$a->analysableid} không hợp lệ cho mục tiêu này: {$a->result}';
$string['analysisinprogress'] = 'Vẫn đang được phân tích bởi một lần thực thi trước đó';
$string['analytics'] = 'Phân tích dữ liệu';
$string['analyticsdisabled'] = 'Phân tích dữ liệu đã bị tắt. Bạn có thể bật tính năng này trong "Quản trị trang > Tính năng nâng cao".';
$string['analyticslogstore'] = 'Kho nhật ký dùng cho phân tích dữ liệu';
$string['analyticslogstore_help'] = 'Kho nhật ký mà API phân tích dữ liệu sẽ sử dụng để đọc hoạt động của người dùng.';
$string['analyticssettings'] = 'Cài đặt phân tích dữ liệu';
$string['analyticssiteinfo'] = 'Thông tin trang';
$string['calclifetime'] = 'Giữ kết quả tính toán phân tích dữ liệu trong';
$string['configlcalclifetime'] = 'Thông số này xác định khoảng thời gian bạn muốn giữ dữ liệu tính toán. Thao tác này không xóa các dự đoán, nhưng sẽ xóa dữ liệu được dùng để tạo dự đoán. Tốt nhất nên sử dụng tùy chọn mặc định để kiểm soát dung lượng đĩa. Tuy nhiên, nếu bạn dùng các bảng tính toán cho mục đích khác, bạn có thể muốn tăng giá trị này.';
$string['defaultpredictionsprocessor'] = 'Bộ xử lý dự đoán mặc định';
$string['defaultpredictoroption'] = 'Bộ xử lý mặc định ({$a})';
$string['defaulttimesplittingmethods'] = 'Khoảng thời gian phân tích mặc định để đánh giá mô hình';
$string['defaulttimesplittingmethods_help'] = 'Khoảng thời gian phân tích xác định thời điểm hệ thống tính toán dự đoán và phần nhật ký hoạt động sẽ được xét đến cho các dự đoán đó. Quy trình đánh giá mô hình sẽ lần lượt xử lý các khoảng thời gian phân tích này, trừ khi một khoảng thời gian phân tích cụ thể được chỉ định.';
$string['disabledmodel'] = 'Mô hình đã bị vô hiệu hóa';
$string['erroralreadypredict'] = 'Tệp {$a} đã được sử dụng để tạo dự đoán.';
$string['errorcannotreaddataset'] = 'Không thể đọc tệp bộ dữ liệu {$a}.';
$string['errorcannotusetimesplitting'] = 'Khoảng phân tích được cung cấp không thể dùng cho mô hình này.';
$string['errorcannotwritedataset'] = 'Không thể ghi tệp bộ dữ liệu {$a}.';
$string['errorexportmodelresult'] = 'Không thể xuất mô hình học máy.';
$string['errorimport'] = 'Lỗi khi nhập tệp JSON đã cung cấp.';
$string['errorimportmissingclasses'] = 'Các thành phần phân tích sau không có trên trang này: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Mô hình đã cung cấp yêu cầu cài đặt các plugin sau: {$a}. Lưu ý rằng phiên bản không nhất thiết phải khớp với phiên bản được cài đặt trên trang của bạn. Trong hầu hết trường hợp, cài đặt cùng phiên bản hoặc phiên bản mới hơn của plugin là đủ.';
$string['errorimportversionmismatches'] = 'Phiên bản của các thành phần sau khác với phiên bản được cài đặt trên trang này: {$a}. Bạn có thể dùng tùy chọn \'Bỏ qua các phiên bản không khớp\' để bỏ qua những khác biệt này.';
$string['errorinvalidcontexts'] = 'Không thể sử dụng một số ngữ cảnh đã chọn cho mục tiêu này.';
$string['errorinvalidindicator'] = 'Chỉ báo {$a} không hợp lệ';
$string['errorinvalidtarget'] = 'Mục tiêu {$a} không hợp lệ';
$string['errorinvalidtimesplitting'] = 'Khoảng phân tích không hợp lệ; vui lòng đảm bảo bạn thêm tên lớp đầy đủ.';
$string['errornocontextrestrictions'] = 'Mục tiêu đã chọn không hỗ trợ các giới hạn ngữ cảnh';
$string['errornoexportconfig'] = 'Đã xảy ra sự cố khi xuất cấu hình mô hình.';
$string['errornoexportconfigrequirements'] = 'Chỉ có thể xuất các mô hình không tĩnh có khoảng phân tích.';
$string['errornoindicators'] = 'Mô hình này không có chỉ báo nào.';
$string['errornopredictresults'] = 'Bộ xử lý dự đoán không trả về kết quả nào. Hãy kiểm tra nội dung thư mục đầu ra để biết thêm thông tin.';
$string['errornoroles'] = 'Chưa xác định vai trò học viên hoặc giáo viên. Hãy xác định chúng trong trang cài đặt phân tích.';
$string['errornotarget'] = 'Mô hình này không có mục tiêu nào.';
$string['errornotimesplittings'] = 'Mô hình này không có khoảng phân tích.';
$string['errorpredictioncontextnotavailable'] = 'Ngữ cảnh dự đoán này không còn khả dụng.';
$string['errorpredictionformat'] = 'Định dạng tính toán dự đoán không đúng';
$string['errorpredictionnotfound'] = 'Không tìm thấy dự đoán';
$string['errorpredictionsprocessor'] = 'Lỗi bộ xử lý dự đoán: {$a}';
$string['errorpredictwrongformat'] = 'Không thể giải mã kết quả trả về từ bộ xử lý dự đoán: "{$a}"';
$string['errorprocessornotready'] = 'Bộ xử lý dự đoán đã chọn chưa sẵn sàng: {$a}';
$string['errorsamplenotavailable'] = 'Mẫu dự đoán không còn khả dụng.';
$string['errorunexistingmodel'] = 'Mô hình không tồn tại {$a}';
$string['errorunexistingtimesplitting'] = 'Khoảng phân tích đã chọn không khả dụng.';
$string['errorunknownaction'] = 'Tác vụ không xác định';
$string['eventinsightsviewed'] = 'Đã xem thông tin chuyên sâu';
$string['eventpredictionactionstarted'] = 'Đã bắt đầu quá trình dự đoán';
$string['fixedack'] = 'Chấp nhận';
$string['incorrectlyflagged'] = 'Đánh dấu sai';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Hệ thống đã tạo thông tin chuyên sâu cho bạn.';
$string['insightinfomessageplain'] = 'Hệ thống đã tạo thông tin chuyên sâu cho bạn: {$a}';
$string['insightmessagesubject'] = 'Thông tin chuyên sâu mới cho "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Không thể phân tích bằng khoảng phân tích {$a}.';
$string['invalidtimesplitting'] = 'Mô hình có ID {$a} cần có khoảng phân tích trước khi có thể dùng để huấn luyện.';
$string['levelinstitution'] = 'Trình độ giáo dục';
$string['levelinstitutionisced0'] = 'Giáo dục mầm non (‘thấp hơn tiểu học’ đối với trình độ học vấn đạt được)';
$string['levelinstitutionisced1'] = 'Giáo dục tiểu học';
$string['levelinstitutionisced2'] = 'Giáo dục trung học cơ sở';
$string['levelinstitutionisced3'] = 'Giáo dục trung học phổ thông';
$string['levelinstitutionisced4'] = 'Giáo dục sau trung học, không thuộc bậc đại học (có thể bao gồm đào tạo doanh nghiệp hoặc đào tạo cộng đồng/tổ chức phi chính phủ)';
$string['levelinstitutionisced5'] = 'Giáo dục đại học chu kỳ ngắn (có thể bao gồm đào tạo doanh nghiệp hoặc đào tạo cộng đồng/tổ chức phi chính phủ)';
$string['levelinstitutionisced6'] = 'Trình độ cử nhân hoặc tương đương';
$string['levelinstitutionisced7'] = 'Trình độ thạc sĩ hoặc tương đương';
$string['levelinstitutionisced8'] = 'Trình độ tiến sĩ hoặc tương đương';
$string['modeinstruction'] = 'Hình thức giảng dạy';
$string['modeinstructionblendedhybrid'] = 'Kết hợp hoặc lai';
$string['modeinstructionfacetoface'] = 'Trực tiếp';
$string['modeinstructionfullyonline'] = 'Hoàn toàn trực tuyến';
$string['modeloutputdir'] = 'Thư mục đầu ra của mô hình';
$string['modeloutputdirwithdefaultinfo'] = 'Thư mục nơi các bộ xử lý dự đoán lưu trữ toàn bộ thông tin đánh giá. Hữu ích cho việc gỡ lỗi và nghiên cứu. Nếu để trống, {$a} sẽ được dùng làm mặc định.';
$string['modeltimelimit'] = 'Giới hạn thời gian phân tích cho mỗi mô hình';
$string['modeltimelimitinfo'] = 'Cài đặt này giới hạn thời gian mỗi mô hình dùng để phân tích nội dung trang.';
$string['neutral'] = 'Trung lập';
$string['neverdelete'] = 'Không bao giờ xóa các phép tính';
$string['nocourses'] = 'Không có khóa học nào để phân tích';
$string['nodata'] = 'Không có dữ liệu để phân tích';
$string['noevaluationbasedassumptions'] = 'Không thể đánh giá các mô hình dựa trên giả định.';
$string['noinsights'] = 'Không có thông tin chuyên sâu nào được báo cáo';
$string['noinsightsmodel'] = 'Mô hình này không tạo thông tin chuyên sâu';
$string['nonewdata'] = 'Không có dữ liệu mới. Mô hình sẽ được phân tích sau khoảng phân tích tiếp theo.';
$string['nonewranges'] = 'Chưa có dự đoán mới. Mô hình sẽ được phân tích sau khoảng phân tích tiếp theo.';
$string['nopredictionsyet'] = 'Chưa có dự đoán nào';
$string['noranges'] = 'Chưa có dự đoán nào';
$string['notapplicable'] = 'Không áp dụng';
$string['notrainingbasedassumptions'] = 'Các mô hình dựa trên giả định không cần huấn luyện';
$string['notuseful'] = 'Không hữu ích';
$string['novaliddata'] = 'Không có dữ liệu hợp lệ';
$string['novalidsamples'] = 'Không có mẫu hợp lệ';
$string['onlycli'] = 'Chỉ thực thi các quy trình phân tích qua dòng lệnh';
$string['onlycliinfo'] = 'Các quy trình phân tích như đánh giá mô hình, huấn luyện thuật toán học máy hoặc tạo dự đoán có thể mất một khoảng thời gian. Chúng chạy dưới dạng tác vụ cron hoặc có thể được kích hoạt qua dòng lệnh. Nếu tắt tùy chọn này, bạn có thể chạy các quy trình phân tích theo cách thủ công qua giao diện web.';
$string['percentonline'] = 'Tỷ lệ trực tuyến';
$string['percentonline_help'] = 'Nếu tổ chức của bạn cung cấp các khóa học kết hợp hoặc lai, tỷ lệ phần trăm công việc của học viên được thực hiện trực tuyến trong Moodle là bao nhiêu? Nhập số từ 0 đến 100.';
$string['predictionsprocessor'] = 'Bộ xử lý dự đoán';
$string['predictionsprocessor_help'] = 'Bộ xử lý dự đoán là phần phụ trợ học máy xử lý các bộ dữ liệu được tạo bằng cách tính toán các chỉ báo và mục tiêu của mô hình. Mỗi mô hình có thể sử dụng một bộ xử lý khác nhau. Bộ xử lý được chỉ định ở đây sẽ là bộ xử lý mặc định.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Các mô hình phân tích';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Người dùng đã chỉnh sửa mô hình';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Nhật ký được dùng cho các mô hình phân tích';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Người dùng đã chỉnh sửa nhật ký';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Các phép tính chỉ báo';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Ngữ cảnh';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Thời điểm kết thúc tính toán';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Lớp tính toán chỉ báo';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'ID mẫu';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Bảng nguồn của mẫu';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Thời điểm bắt đầu tính toán';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Thời điểm tạo dự đoán';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Giá trị đã tính toán';
$string['privacy:metadata:analytics:predictionactions'] = 'Các tác vụ dự đoán';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Tên tác vụ';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'ID dự đoán';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Thời điểm thực hiện tác vụ dự đoán';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Người dùng đã thực hiện tác vụ';
$string['privacy:metadata:analytics:predictions'] = 'Các dự đoán';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Các phép tính chỉ báo';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Ngữ cảnh';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ID mô hình';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Dự đoán';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Điểm dự đoán';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Chỉ mục của khoảng phân tích';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'ID mẫu';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Thời điểm tạo dự đoán';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Thời điểm kết thúc tính toán';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Thời điểm bắt đầu tính toán';
$string['processingsitecontents'] = 'Đang xử lý nội dung trang';
$string['successfullyanalysed'] = 'Đã phân tích thành công';
$string['timesplittingmethod'] = 'Khoảng phân tích';
$string['timesplittingmethod_help'] = 'Khoảng phân tích xác định thời điểm hệ thống tính toán dự đoán và phần nhật ký hoạt động được xem xét cho các dự đoán đó. Ví dụ: thời lượng khóa học có thể được chia thành nhiều phần, mỗi phần sẽ tạo một dự đoán khi kết thúc.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Loại hình tổ chức';
$string['typeinstitutionacademic'] = 'Học thuật';
$string['typeinstitutionngo'] = 'Tổ chức phi chính phủ (NGO)';
$string['typeinstitutiontraining'] = 'Đào tạo doanh nghiệp';
$string['useful'] = 'Hữu ích';
$string['viewdetails'] = 'Xem chi tiết';
$string['viewinsight'] = 'Xem thông tin chuyên sâu';
$string['viewinsightdetails'] = 'Xem chi tiết thông tin chuyên sâu';
$string['viewprediction'] = 'Xem chi tiết dự đoán';
$string['washelpful'] = 'Thông tin này có hữu ích không?';
