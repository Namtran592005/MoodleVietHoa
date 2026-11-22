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
 * @subpackage dbtransfer
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Các trình điều khiển cơ sở dữ liệu có sẵn để di chuyển';
$string['cliheading'] = 'Di chuyển cơ sở dữ liệu - đảm bảo không ai truy cập máy chủ trong quá trình di chuyển!';
$string['climigrationnotice'] = 'Đang di chuyển cơ sở dữ liệu, vui lòng chờ cho đến khi quá trình di chuyển hoàn tất, quản trị viên máy chủ cập nhật cấu hình và xóa tệp $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'Đang chuyển đổi các thao tác hiển thị nhật ký';
$string['dbexport'] = 'Xuất cơ sở dữ liệu';
$string['dbtransfer'] = 'Di chuyển cơ sở dữ liệu';
$string['enablemaintenance'] = 'Bật chế độ bảo trì';
$string['enablemaintenance_help'] = 'Tùy chọn này bật chế độ bảo trì trong và sau khi di chuyển cơ sở dữ liệu, ngăn tất cả người dùng truy cập cho đến khi quá trình di chuyển hoàn tất. Lưu ý rằng quản trị viên phải xóa thủ công tệp $CFG->dataroot/climaintenance.html sau khi cập nhật thiết lập config.php để tiếp tục hoạt động bình thường.';
$string['exportdata'] = 'Xuất dữ liệu';
$string['notargetconectexception'] = 'Không thể kết nối với cơ sở dữ liệu đích, rất tiếc.';
$string['options'] = 'Tùy chọn';
$string['pluginname'] = 'Truyền cơ sở dữ liệu';
$string['privacy:metadata'] = 'Plugin Truyền cơ sở dữ liệu không lưu trữ dữ liệu cá nhân.';
$string['targetdatabase'] = 'Cơ sở dữ liệu đích';
$string['targetdatabasenotempty'] = 'Cơ sở dữ liệu đích không được chứa bất kỳ bảng nào có tiền tố đã cho!';
$string['transferdata'] = 'Truyền dữ liệu';
$string['transferdbintro'] = 'Tập lệnh này sẽ truyền toàn bộ nội dung của cơ sở dữ liệu này sang một máy chủ cơ sở dữ liệu khác. Công cụ này thường được dùng để di chuyển dữ liệu sang một loại cơ sở dữ liệu khác.';
$string['transferdbtoserver'] = 'Truyền cơ sở dữ liệu Moodle này sang máy chủ khác';
$string['transferringdbto'] = 'Đang truyền cơ sở dữ liệu {$a->dbtypefrom} này sang cơ sở dữ liệu {$a->dbtype} "{$a->dbname}" trên "{$a->dbhost}"';
