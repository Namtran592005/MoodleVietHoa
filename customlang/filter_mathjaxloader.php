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
 * @package    filter
 * @subpackage mathjaxloader
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Dấu phân cách phương trình bổ sung';
$string['additionaldelimiters_help'] = 'Bộ lọc MathJax phân tích văn bản để tìm các phương trình nằm giữa các ký tự dấu phân cách.

Có thể thêm danh sách các ký tự dấu phân cách được nhận diện tại đây (ví dụ: AsciiMath sử dụng `). Dấu phân cách có thể gồm nhiều ký tự và có thể phân tách nhiều dấu phân cách bằng dấu phẩy.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL MathJax';
$string['httpsurl_help'] = 'URL đầy đủ đến thư viện MathJax.';
$string['localinstall'] = 'Cài đặt MathJax cục bộ';
$string['localinstall_help'] = 'Cấu hình MathJax mặc định sử dụng phiên bản MathJax trên CDN, nhưng có thể cài đặt MathJax cục bộ nếu cần.

Điều này có thể hữu ích để tiết kiệm băng thông hoặc do các hạn chế của proxy cục bộ.

Để sử dụng bản cài đặt MathJax cục bộ, trước tiên hãy tải xuống toàn bộ thư viện MathJax từ https://www.mathjax.org/. Sau đó cài đặt thư viện trên máy chủ web. Cuối cùng, cập nhật các thiết lập bộ lọc MathJax httpurl và/hoặc httpsurl để trỏ đến URL MathJax.js cục bộ.';
$string['mathjaxsettings'] = 'Cấu hình MathJax';
$string['mathjaxsettings_desc'] = 'Cấu hình MathJax mặc định phù hợp với hầu hết người dùng, nhưng MathJax có khả năng tùy chỉnh cao và có thể thêm bất kỳ tùy chọn cấu hình MathJax tiêu chuẩn nào dưới dạng JSON tại đây. Trường này phải để trống hoặc chứa một đối tượng JSON hợp lệ! Ví dụ: để bật AsciiMath và tính năng thu phóng, hãy đặt trường này thành:
<pre>
{
  "loader": {"load": ["input/asciimath"]},
  "options": {"menuOptions": {"settings": {"zoom": "DoubleClick"}}}
}
</pre>';
$string['privacy:metadata'] = 'Plugin MathJax không lưu trữ dữ liệu cá nhân nào.';
$string['texfiltercompatibility'] = 'Khả năng tương thích với bộ lọc TeX';
$string['texfiltercompatibility_help'] = 'Có thể sử dụng bộ lọc MathJax thay thế cho bộ lọc ký hiệu TeX.

Để hỗ trợ tất cả dấu phân cách mà bộ lọc ký hiệu TeX hỗ trợ, MathJax sẽ được cấu hình để hiển thị tất cả phương trình "trong dòng" cùng với văn bản.';
