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
 * @package    customfield
 * @subpackage number
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytypes'] = 'Loại hoạt động';
$string['automaticallypopulated'] = 'Tự động điền';
$string['crontaskname'] = 'Tác vụ điền tự động các trường tùy chỉnh dạng số';
$string['decimalplaces'] = 'Số chữ số thập phân';
$string['defaultvalueconfigerror'] = 'Giá trị mặc định phải nằm giữa giá trị tối thiểu và tối đa';
$string['display'] = 'Mẫu hiển thị';
$string['display_help'] = 'Cách hiển thị giá trị của trường. Sử dụng các chỗ giữ chỗ sau:

* **{value}** - hiển thị giá trị theo định dạng chung (số thực với số chữ số thập phân được cấu hình trong trường)
* **$ {value}** - giá bằng đô la
* **{value} hrs** - thời lượng tính bằng giờ';
$string['displayvalueconfigerror'] = 'Chỗ giữ chỗ không hợp lệ';
$string['displaywhenzero'] = 'Hiển thị khi bằng không';
$string['displaywhenzero_help'] = 'Cách hiển thị giá trị trường khi giá trị là "0". Ví dụ, với giá tiền bạn có thể hiển thị từ "Miễn phí", nhưng với thời lượng, bạn có thể để trống vì điều đó có nghĩa là thời lượng chưa được ước tính.

Để trống nếu bạn không muốn hiển thị gì khi giá trị được đặt là "0".';
$string['fieldtype'] = 'Loại trường';
$string['fieldtype_help'] = 'Chọn loại trường số cần thiết lập. Một số tùy chọn yêu cầu nhập thủ công trong trang cài đặt khóa học, trong khi các tùy chọn khác sẽ tự động điền giá trị, chẳng hạn như số hoạt động được chỉ định trong khóa học.';
$string['genericfield'] = 'Trường chung cho mọi dữ liệu dạng số';
$string['headerdisplaysettings'] = 'Định dạng hiển thị';
$string['invalidprovider'] = 'Nhà cung cấp không chính xác';
$string['manualinput'] = 'Nhập thủ công';
$string['maximumvalue'] = 'Giá trị tối đa';
$string['maximumvalueerror'] = 'Giá trị phải nhỏ hơn hoặc bằng {$a}';
$string['minimumvalue'] = 'Giá trị tối thiểu';
$string['minimumvalueconfigerror'] = 'Giá trị tối thiểu phải nhỏ hơn giá trị tối đa';
$string['minimumvalueerror'] = 'Giá trị phải lớn hơn hoặc bằng {$a}';
$string['missingrequired'] = 'Thiếu ID phiên bản hoặc ID trường';
$string['nofactivities'] = 'Số lượng hoạt động trong khóa học';
$string['pluginname'] = 'Số';
$string['privacy:metadata'] = 'Plugin trường tùy chỉnh dạng số không lưu trữ dữ liệu cá nhân';
$string['specificsettings'] = 'Cài đặt trường số';
