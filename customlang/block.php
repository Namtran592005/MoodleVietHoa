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
 * @subpackage block
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Thêm khối {$a}';
$string['anypagematchingtheabove'] = 'Mọi trang khớp với các điều kiện trên';
$string['appearsinsubcontexts'] = 'Xuất hiện trong các ngữ cảnh phụ';
$string['assignrolesinblock'] = 'Gán vai trò trong khối {$a}';
$string['blocksdrawertoggle'] = 'Ẩn/hiện ngăn khối';
$string['blocksettings'] = 'Thiết lập khối';
$string['bracketfirst'] = '{$a} (đầu tiên)';
$string['bracketlast'] = '{$a} (cuối cùng)';
$string['configureblock'] = 'Cấu hình khối {$a}';
$string['contexts'] = 'Ngữ cảnh trang';
$string['contexts_help'] = 'Ngữ cảnh là các loại trang cụ thể hơn, nơi khối này có thể được hiển thị trong vị trí khối ban đầu. Các tùy chọn ở đây sẽ khác nhau tùy theo vị trí khối ban đầu và vị trí hiện tại của bạn. Ví dụ: bạn có thể giới hạn một khối chỉ xuất hiện trên các trang diễn đàn trong một khóa học bằng cách thêm khối vào khóa học (để khối xuất hiện trên tất cả các trang con), sau đó mở một diễn đàn và chỉnh sửa lại thiết lập khối để giới hạn hiển thị chỉ trên các trang diễn đàn.';
$string['createdat'] = 'Vị trí khối ban đầu';
$string['createdat_help'] = 'Vị trí ban đầu nơi khối được tạo. Thiết lập khối có thể khiến khối xuất hiện ở các vị trí khác (ngữ cảnh) trong vị trí ban đầu. Ví dụ: khối được tạo trên trang khóa học có thể hiển thị trong các hoạt động của khóa học đó. Khối được tạo trên trang chủ có thể hiển thị trên toàn trang.';
$string['defaultregion'] = 'Khu vực mặc định';
$string['defaultregion_help'] = 'Giao diện có thể xác định một hoặc nhiều khu vực khối có tên để hiển thị các khối. Thiết lập này xác định khu vực mà bạn muốn khối này xuất hiện theo mặc định. Có thể ghi đè khu vực này trên các trang cụ thể nếu cần.';
$string['defaultweight'] = 'Thứ tự mặc định';
$string['defaultweight_help'] = 'Thứ tự mặc định cho phép bạn chọn vị trí tương đối mà khối sẽ xuất hiện trong khu vực đã chọn, ở đầu hoặc cuối. Vị trí cuối cùng được tính dựa trên tất cả các khối trong khu vực đó (ví dụ: trên thực tế, chỉ có một khối có thể ở đầu). Có thể ghi đè giá trị này trên các trang cụ thể nếu cần.';
$string['deleteblock'] = 'Xóa khối {$a}';
$string['deleteblockcheck'] = 'Thao tác này sẽ xóa khối {$a}.';
$string['deleteblockinprogress'] = 'Đang xóa khối {$a}...';
$string['deleteblockwarning'] = '<p>Bạn sắp xóa một khối đang xuất hiện ở nơi khác.</p><p>Vị trí khối ban đầu: {$a->location}<br />Hiển thị trên các loại trang: {$a->pagetype}</p><p>Bạn có chắc chắn muốn tiếp tục không?</p>';
$string['deletecheck'] = 'Xóa khối {$a}?';
$string['deletecheck_modal'] = 'Xóa khối?';
$string['hideblock'] = 'Ẩn khối {$a}';
$string['hidepanel'] = 'Ẩn bảng';
$string['moveblock'] = 'Di chuyển khối {$a}';
$string['moveblockafter'] = 'Di chuyển khối đến sau khối {$a}';
$string['moveblockbefore'] = 'Di chuyển khối đến trước khối {$a}';
$string['moveblockinregion'] = 'Di chuyển khối đến khu vực {$a}';
$string['movingthisblockcancel'] = 'Đang di chuyển khối này ({$a})';
$string['myblocks'] = 'Các khối của tôi';
$string['onthispage'] = 'Trên trang này';
$string['pagetypes'] = 'Loại trang';
$string['pagetypewarning'] = 'Loại trang đã chỉ định trước đó không còn có thể chọn. Vui lòng chọn loại trang phù hợp nhất bên dưới.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Ghi lại thời điểm người dùng ghim một khối';
$string['privacy:metadata:userpref:hiddenblock'] = 'Ghi lại thời điểm người dùng thu gọn/ẩn một khối';
$string['privacy:request:blockisdocked'] = 'Cho biết khối có được ghim hay không';
$string['privacy:request:blockishidden'] = 'Cho biết khối có bị ẩn/thu gọn hay không';
$string['region'] = 'Khu vực';
$string['restrictpagetypes'] = 'Hiển thị trên các loại trang';
$string['showblock'] = 'Hiển thị khối {$a}';
$string['showoncontextandsubs'] = 'Hiển thị trên \'{$a}\' và mọi trang bên trong mục này';
$string['showoncontextonly'] = 'Chỉ hiển thị trên \'{$a}\\';
$string['showonentiresite'] = 'Hiển thị trên toàn bộ trang';
$string['showonfrontpageandsubs'] = 'Hiển thị trên trang chủ và mọi trang được thêm vào trang chủ.';
$string['showonfrontpageonly'] = 'Chỉ hiển thị trên trang chủ';
$string['subpages'] = 'Chọn trang';
$string['thisspecificpage'] = 'Trang cụ thể này';
$string['visible'] = 'Hiển thị';
$string['weight'] = 'Thứ tự';
$string['wherethisblockappears'] = 'Vị trí hiển thị của khối này';

// Added for Moodle 5.3.1+ missing strings.
$string['site-*'] = 'Bất kỳ trang cấp cao nhất nào của site';
