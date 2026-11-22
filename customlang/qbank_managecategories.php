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
 * @package    qbank
 * @subpackage managecategories
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['after'] = 'Sau {$a}';
$string['before'] = 'Trước {$a}';
$string['categoryincategory'] = 'Không thể di chuyển danh mục vào chính danh mục đó.';
$string['categorymoved'] = 'Đã di chuyển danh mục thành công.';
$string['categorymovedto'] = 'Đã di chuyển danh mục đến <a href="{$a->url}">{$a->name}</a>.';
$string['confirmdelete'] = 'Xóa danh mục "{$a}"? Mọi danh mục con sẽ được chuyển đến danh mục cha của danh mục này.';
$string['deletecategory'] = 'Xóa danh mục';
$string['descriptionnotdisplayed'] = 'Không hiển thị mô tả danh mục';
$string['destinationcategory'] = 'Danh mục đích';
$string['displaydescription'] = 'Hiển thị mô tả danh mục';
$string['editcategoryname'] = 'Tên mới cho {$a}';
$string['editcategorynamehint'] = 'Chỉnh sửa tên danh mục';
$string['error:category'] = 'Bạn phải chọn một danh mục hợp lệ';
$string['idnumberexists'] = 'Số ID đã được sử dụng. Hãy thay đổi số này để di chuyển hoặc cập nhật danh mục.';
$string['lastcategoryinthiscontext'] = 'Đây là danh mục duy nhất trong ngữ cảnh này. Bạn cần thêm một danh mục khác nếu muốn di chuyển danh mục này.';
$string['movecategory'] = 'Di chuyển {$a}';
$string['movequestions'] = 'Câu hỏi cần di chuyển';
$string['movequestions:all'] = 'Tất cả câu hỏi trong danh mục này ({$a})';
$string['movequestions:inuse'] = 'Các câu hỏi đang được sử dụng trong danh mục này ({$a})';
$string['movequestionsbeforedeleting'] = 'Di chuyển câu hỏi trước khi xóa danh mục';
$string['movequestionsexplanation'] = '<p>Danh mục <strong>{$a->name}</strong> có chứa câu hỏi (bao gồm mọi câu hỏi bị ẩn hoặc ngẫu nhiên).</p>
<ul>
<li>Tổng số câu hỏi: {$a->allcount}</li>
<li>Số câu hỏi đang được sử dụng: {$a->inusecount}</li>
</ul>
<p>Chọn những câu hỏi cần giữ lại và danh mục sẽ chuyển chúng đến. Những câu hỏi còn lại sẽ bị xóa cùng với danh mục.</p>';
$string['newchild'] = 'Làm danh mục con mới của {$a}';
$string['pluginname'] = 'Quản lý danh mục';
$string['privacy:preference:includesubcategories_filter_default'] = 'Cho biết tùy chọn bộ lọc "Cũng hiển thị câu hỏi từ danh mục con" có được bật theo mặc định khi người dùng xem ngân hàng câu hỏi hay không.';
$string['privacy:preference:showdescriptions'] = 'Cờ cho biết mô tả danh mục có được hiển thị hay không.';
$string['questionsubcategoriesdisplayed'] = 'Khi chọn danh mục trong ngân hàng câu hỏi, tùy chọn "Cũng hiển thị câu hỏi từ danh mục con" được sử dụng, vì vậy câu hỏi từ các danh mục con được đưa vào kết quả lọc.';
$string['questionsubcategoriesnotdisplayed'] = 'Khi chọn danh mục trong ngân hàng câu hỏi, tùy chọn "Cũng hiển thị câu hỏi từ danh mục con" không được sử dụng, vì vậy câu hỏi từ các danh mục con không được đưa vào kết quả lọc.';
$string['showcategorydescription'] = 'Hiển thị mô tả';
