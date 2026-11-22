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
 * @subpackage behat
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Công cụ quản trị này giúp nhà phát triển và người viết bài kiểm thử tạo các tệp .feature mô tả chức năng của Moodle và tự động chạy chúng. Các định nghĩa bước có thể sử dụng trong tệp .feature được liệt kê bên dưới.';
$string['allavailablesteps'] = 'Tất cả định nghĩa bước hiện có';
$string['errorbehatcommand'] = 'Lỗi khi chạy lệnh CLI behat. Hãy thử chạy "{$a} --help" thủ công từ CLI để tìm hiểu thêm về sự cố.';
$string['errorcomposer'] = 'Chưa cài đặt các phần phụ thuộc của Composer.';
$string['errordataroot'] = '$CFG->behat_dataroot chưa được thiết lập hoặc không hợp lệ.';
$string['errorsetconfig'] = 'Cần thiết lập $CFG->behat_dataroot, $CFG->behat_prefix và $CFG->behat_wwwroot trong config.php.';
$string['erroruniqueconfig'] = 'Các giá trị $CFG->behat_dataroot, $CFG->behat_prefix và $CFG->behat_wwwroot phải khác với các giá trị $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot và $CFG->phpunit_prefix.<br/>Hoặc nếu $CFG->behat_prefix giống nhau, thì $CFG->behat_dbname hoặc $CFG->behat_dbhost phải khác với $CFG->phpunit_dbname và $CFG->phpunit_dbhost, cũng như $CFG->dbname và $CFG->dbhost.';
$string['fieldvalueargument'] = 'Đối số giá trị trường';
$string['fieldvalueargument_help'] = 'Đối số này cần được điền bằng một giá trị trường. Có nhiều loại trường, bao gồm các loại đơn giản như hộp kiểm, danh sách chọn hoặc vùng văn bản, và các loại phức tạp như bộ chọn ngày. Xem tài liệu dành cho nhà phát triển <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance_testing</a> để biết chi tiết về các giá trị trường cần dùng.';
$string['giveninfo'] = 'Given. Các quy trình thiết lập môi trường';
$string['infoheading'] = 'Thông tin';
$string['installinfo'] = 'Đọc {$a} để biết thông tin về cài đặt và thực thi bài kiểm tra';
$string['newstepsinfo'] = 'Đọc {$a} để biết thông tin về cách thêm định nghĩa bước mới';
$string['newtestsinfo'] = 'Đọc {$a} để biết thông tin về cách viết bài kiểm tra mới';
$string['nostepsdefinitions'] = 'Không có định nghĩa bước nào khớp với bộ lọc này';
$string['pluginname'] = 'Kiểm thử chấp nhận';
$string['privacy:metadata'] = 'Plugin Kiểm thử chấp nhận không lưu trữ dữ liệu cá nhân.';
$string['stepsdefinitionscomponent'] = 'Khu vực';
$string['stepsdefinitionscontains'] = 'Có chứa';
$string['stepsdefinitionsfilters'] = 'Định nghĩa bước';
$string['stepsdefinitionstype'] = 'Loại';
$string['theninfo'] = 'Then. Các bước kiểm tra để đảm bảo kết quả đúng như mong đợi';
$string['unknownexceptioninfo'] = 'Đã xảy ra sự cố với Selenium hoặc trình duyệt của bạn. Hãy đảm bảo bạn đang sử dụng phiên bản Selenium mới nhất. Lỗi:';
$string['viewsteps'] = 'Lọc';
$string['warndirrootconfigfound'] = 'Đã tìm thấy tệp cấu hình tại {$a}. Tệp này không được tự động cập nhật và có thể trở nên lỗi thời. Chúng tôi khuyên bạn nên xóa tệp này.';
$string['wheninfo'] = 'When. Hành động gây ra một sự kiện';
$string['wrongbehatsetup'] = 'Thiết lập behat có vấn đề nên không thể liệt kê các định nghĩa bước: <b>{$a->errormsg}</b><br/><br/>Vui lòng kiểm tra:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix và $CFG->behat_wwwroot đã được thiết lập trong config.php với các giá trị khác với $CFG->dataroot, $CFG->prefix và $CFG->wwwroot.</li>
<li>Bạn đã chạy "{$a->behatinit}" từ thư mục gốc Moodle.</li>
<li>Các phần phụ thuộc đã được cài đặt trong vendor/ và tệp {$a->behatcommand} có quyền thực thi.</li></ul>';
