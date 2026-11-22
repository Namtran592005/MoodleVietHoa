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
 * @package    qtype
 * @subpackage calculated
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Thêm mục';
$string['addmoreanswerblanks'] = 'Thêm ô trả lời khác.';
$string['addsets'] = 'Thêm (các) tập dữ liệu';
$string['answerdisplay'] = 'Hiển thị câu trả lời';
$string['answerformula'] = 'Công thức câu trả lời {$a}';
$string['answerhdr'] = 'Câu trả lời';
$string['answerstoleranceparam'] = 'Tham số dung sai câu trả lời';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Bất kỳ giá trị nào';
$string['atleastoneanswer'] = 'Bạn cần cung cấp ít nhất một câu trả lời.';
$string['atleastonerealdataset'] = 'Cần có ít nhất một tập dữ liệu thực trong nội dung câu hỏi';
$string['atleastonewildcard'] = 'Cần có ít nhất một ký tự đại diện trong công thức câu trả lời hoặc nội dung câu hỏi';
$string['calcdistribution'] = 'Phân phối';
$string['calclength'] = 'Số chữ số thập phân';
$string['calcmax'] = 'Giá trị tối đa';
$string['calcmin'] = 'Giá trị tối thiểu';
$string['choosedatasetproperties'] = 'Chọn thuộc tính tập dữ liệu của ký tự đại diện';
$string['choosedatasetproperties_help'] = 'Tập dữ liệu là một tập hợp các giá trị được chèn vào vị trí của ký tự đại diện. Bạn có thể tạo tập dữ liệu riêng cho một câu hỏi cụ thể hoặc tập dữ liệu dùng chung cho các câu hỏi dạng tính toán khác trong danh mục.';
$string['correctanswerformula'] = 'Công thức đáp án đúng';
$string['correctanswershows'] = 'Đáp án đúng hiển thị';
$string['correctanswershowsformat'] = 'Định dạng';
$string['correctfeedback'] = 'Cho mọi câu trả lời đúng';
$string['dataitemdefined'] = 'có sẵn với {$a} giá trị số đã được xác định';
$string['datasetrole'] = 'Các ký tự đại diện <strong>{x..}</strong> sẽ được thay bằng một giá trị số từ tập dữ liệu của chúng';
$string['decimals'] = 'với {$a}';
$string['deleteitem'] = 'Xóa mục';
$string['deletelastitem'] = 'Xóa mục cuối cùng';
$string['distributionoption'] = 'Chọn tùy chọn phân phối';
$string['editdatasets'] = 'Chỉnh sửa tập dữ liệu của các ký tự đại diện';
$string['editdatasets_help'] = 'Có thể tạo giá trị ký tự đại diện bằng cách nhập một số vào từng trường ký tự đại diện rồi nhấp vào nút thêm. Để tự động tạo từ 10 giá trị trở lên, hãy chọn số lượng giá trị cần tạo trước khi nhấp vào nút thêm. Phân phối đều có nghĩa là mọi giá trị giữa các giới hạn đều có khả năng được tạo như nhau; phân phối log-uniform có nghĩa là các giá trị gần giới hạn dưới có khả năng được tạo cao hơn.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'sẽ sử dụng một tập dữ liệu dùng chung đã có';
$string['existingcategory2'] = 'một tệp từ tập hợp tệp đã có, cũng được các câu hỏi khác trong danh mục này sử dụng';
$string['existingcategory3'] = 'một liên kết từ tập hợp liên kết đã có, cũng được các câu hỏi khác trong danh mục này sử dụng';
$string['forceregeneration'] = 'buộc tạo lại';
$string['forceregenerationall'] = 'Buộc tạo lại tất cả ký tự đại diện';
$string['forceregenerationshared'] = 'Chỉ buộc tạo lại các ký tự đại diện không dùng chung';
$string['functiontakesatleasttwo'] = 'Hàm {$a} phải có ít nhất hai đối số';
$string['functiontakesnoargs'] = 'Hàm {$a} không nhận đối số';
$string['functiontakesonearg'] = 'Hàm {$a} phải có đúng một đối số';
$string['functiontakesoneortwoargs'] = 'Hàm {$a} phải có một hoặc hai đối số';
$string['functiontakestwoargs'] = 'Hàm {$a} phải có đúng hai đối số';
$string['generatevalue'] = 'Tạo giá trị mới trong khoảng';
$string['getnextnow'] = 'Lấy ngay \'Mục cần thêm\' mới';
$string['hexanotallowed'] = 'Giá trị {$a->value} ở định dạng thập lục phân của tập dữ liệu <strong>{$a->name}</strong> không được phép';
$string['illegalformulasyntax'] = 'Cú pháp công thức không hợp lệ bắt đầu bằng \'{$a}\\';
$string['incorrectfeedback'] = 'Với mọi câu trả lời sai';
$string['itemno'] = 'Mục {$a}';
$string['itemscount'] = 'Số lượng<br />mục';
$string['itemtoadd'] = 'Mục cần thêm';
$string['keptcategory1'] = 'sẽ sử dụng cùng tập dữ liệu dùng chung hiện có như trước';
$string['keptcategory2'] = 'một tệp từ cùng tập hợp tệp có thể dùng lại của danh mục như trước';
$string['keptcategory3'] = 'một liên kết từ cùng tập hợp liên kết có thể dùng lại của danh mục như trước';
$string['keptlocal1'] = 'sẽ sử dụng cùng tập dữ liệu riêng hiện có như trước';
$string['keptlocal2'] = 'một tệp từ cùng tập hợp tệp riêng của câu hỏi như trước';
$string['keptlocal3'] = 'một liên kết từ cùng tập hợp liên kết riêng của câu hỏi như trước';
$string['lengthoption'] = 'Chọn tùy chọn độ dài';
$string['loguniform'] = 'Phân phối log-uniform';
$string['loguniformbit'] = 'chữ số, theo phân phối log-uniform';
$string['makecopynextpage'] = 'Trang tiếp theo (câu hỏi mới)';
$string['mandatoryhdr'] = 'Các ký tự đại diện bắt buộc có trong câu trả lời';
$string['max'] = 'Tối đa';
$string['min'] = 'Tối thiểu';
$string['minmax'] = 'Khoảng giá trị';
$string['missingformula'] = 'Thiếu công thức';
$string['missingname'] = 'Thiếu tên câu hỏi';
$string['missingquestiontext'] = 'Thiếu nội dung câu hỏi';
$string['mustenteraformulaorstar'] = 'Bạn phải nhập một công thức hoặc \'*\'.';
$string['newcategory1'] = 'sẽ sử dụng một tập dữ liệu dùng chung mới';
$string['newcategory2'] = 'một tệp từ tập hợp tệp mới cũng có thể được các câu hỏi khác trong danh mục này sử dụng';
$string['newcategory3'] = 'một liên kết từ tập hợp liên kết mới cũng có thể được các câu hỏi khác trong danh mục này sử dụng';
$string['newlocal1'] = 'sẽ sử dụng một tập dữ liệu riêng mới';
$string['newlocal2'] = 'một tệp từ tập hợp tệp mới chỉ được câu hỏi này sử dụng';
$string['newlocal3'] = 'một liên kết từ tập hợp liên kết mới chỉ được câu hỏi này sử dụng';
$string['newsetwildcardvalues'] = 'bộ giá trị ký tự đại diện mới';
$string['nextitemtoadd'] = '\'Mục cần thêm\' tiếp theo';
$string['nextpage'] = 'Trang tiếp theo';
$string['nocoherencequestionsdatyasetcategory'] = 'Đối với câu hỏi có id {$a->qid}, id danh mục {$a->qcat} không trùng với id danh mục {$a->sharedcat} của ký tự đại diện dùng chung {$a->name}. Hãy chỉnh sửa câu hỏi.';
$string['nocommaallowed'] = 'Không được dùng dấu phẩy ,; hãy dùng dấu chấm . như trong 0.013 hoặc 1.3e-2';
$string['nodataset'] = 'không có gì - đây không phải là ký tự đại diện';
$string['nosharedwildcard'] = 'Không có ký tự đại diện dùng chung trong danh mục này';
$string['notvalidnumber'] = 'Giá trị ký tự đại diện không phải là một số hợp lệ';
$string['oneanswertrueansweroutsidelimits'] = 'Có ít nhất một câu trả lời đúng nằm ngoài giới hạn giá trị thực.<br />Hãy chỉnh sửa các thiết lập dung sai của câu trả lời trong phần Tham số nâng cao';
$string['param'] = 'Tham số {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Với mọi câu trả lời đúng một phần';
$string['pluginname'] = 'Tính toán';
$string['pluginname_help'] = 'Câu hỏi tính toán cho phép tạo các câu hỏi số riêng lẻ bằng cách sử dụng ký tự đại diện trong dấu ngoặc nhọn. Khi làm bài kiểm tra, các ký tự này được thay bằng các giá trị riêng lẻ. Ví dụ, câu hỏi "Diện tích hình chữ nhật có chiều dài {l} và chiều rộng {w} là bao nhiêu?" sẽ có công thức đáp án đúng là "{l}*{w}" (trong đó * biểu thị phép nhân).';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'Thêm câu hỏi tính toán';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi tính toán';
$string['pluginnamesummary'] = 'Câu hỏi tính toán tương tự câu hỏi số, nhưng các số được sử dụng sẽ được chọn ngẫu nhiên từ một tập hợp khi làm bài kiểm tra.';
$string['possiblehdr'] = 'Các ký tự đại diện có thể có chỉ xuất hiện trong nội dung câu hỏi';
$string['privacy:metadata'] = 'Loại câu hỏi Tính toán không lưu trữ dữ liệu cá nhân nào.';
$string['questiondatasets'] = 'Tập dữ liệu câu hỏi';
$string['questiondatasets_help'] = 'Tập dữ liệu các ký tự đại diện sẽ được sử dụng trong từng câu hỏi riêng lẻ';
$string['questionstoredname'] = 'Tên lưu trữ câu hỏi';
$string['replacewithrandom'] = 'Thay bằng một giá trị ngẫu nhiên';
$string['reuseifpossible'] = 'Dùng lại giá trị trước đó nếu có';
$string['setno'] = 'Bộ {$a}';
$string['setwildcardvalues'] = 'bộ giá trị ký tự đại diện';
$string['sharedwildcard'] = 'Ký tự đại diện dùng chung {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Ký tự đại diện dùng chung';
$string['sharedwildcards'] = 'Các ký tự đại diện dùng chung';
$string['showitems'] = 'Hiển thị';
$string['significantfigures'] = 'với {$a}';
$string['significantfiguresformat'] = 'chữ số có nghĩa';
$string['synchronize'] = 'Đồng bộ hóa dữ liệu từ các tập dữ liệu dùng chung với các câu hỏi khác trong bài kiểm tra';
$string['synchronizeno'] = 'Không đồng bộ hóa';
$string['synchronizeyes'] = 'Đồng bộ hóa';
$string['synchronizeyesdisplay'] = 'Đồng bộ hóa và hiển thị tên tập dữ liệu dùng chung làm tiền tố cho tên câu hỏi';
$string['tolerance'] = 'Dung sai ±';
$string['tolerancetype'] = 'Loại';
$string['trueanswerinsidelimits'] = 'Câu trả lời đúng: {$a->correct} nằm trong giới hạn của giá trị thực {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">LỖI Câu trả lời đúng: {$a->correct} nằm ngoài giới hạn của giá trị thực {$a->true}</span>';
$string['uniform'] = 'Phân phối đều';
$string['uniformbit'] = 'số thập phân, theo phân phối đều';
$string['unsupportedformulafunction'] = 'Hàm {$a} không được hỗ trợ';
$string['updatecategory'] = 'Cập nhật danh mục';
$string['updatedatasetparam'] = 'Cập nhật các tham số của tập dữ liệu';
$string['updatetolerancesparam'] = 'Cập nhật các tham số dung sai của câu trả lời';
$string['updatewildcardvalues'] = 'Cập nhật các giá trị ký tự đại diện';
$string['useadvance'] = 'Dùng nút nâng cao để xem lỗi';
$string['usedinquestion'] = 'Được sử dụng trong câu hỏi';
$string['wildcard'] = 'Ký tự đại diện {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Các tham số ký tự đại diện dùng để tạo giá trị';
$string['wildcardrole'] = 'Các ký tự đại diện <strong>{x..}</strong> sẽ được thay bằng một giá trị số từ các giá trị được tạo';
$string['wildcards'] = 'Các ký tự đại diện {a}...{z}';
$string['wildcardvalues'] = 'Giá trị ký tự đại diện';
$string['wildcardvaluesgenerated'] = 'Các giá trị ký tự đại diện đã tạo';
$string['youmustaddatleastoneitem'] = 'Bạn phải thêm ít nhất một mục dữ liệu trước khi có thể lưu câu hỏi này.';
$string['youmustaddatleastonevalue'] = 'Bạn phải thêm ít nhất một bộ giá trị ký tự đại diện trước khi có thể lưu câu hỏi này.';
$string['zerosignificantfiguresnotallowed'] = 'Câu trả lời đúng không thể có không chữ số có nghĩa nào!';

// Added for Moodle 5.3.1+ missing strings.
$string['item(s)'] = 'mục';
$string['lastitem(s)'] = 'các mục cuối cùng';
