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
 * @package    cachestore
 * @subpackage file
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Dọn thư mục không đồng bộ';
$string['asyncpurge_help'] = 'Nếu bật, thư mục mới sẽ được tạo với phiên bản bộ nhớ đệm và thư mục cũ sẽ được xóa không đồng bộ thông qua tác vụ đã lên lịch.';
$string['autocreate'] = 'Tự động tạo thư mục';
$string['autocreate_help'] = 'Nếu bật, thư mục được chỉ định trong đường dẫn sẽ tự động được tạo nếu chưa tồn tại.';
$string['lockwait'] = 'Thời gian chờ khóa tối đa';
$string['lockwait_help'] = 'Thời gian tối đa tính bằng giây để chờ khóa độc quyền trước khi đọc hoặc ghi khóa bộ nhớ đệm. Chỉ áp dụng cho các định nghĩa bộ nhớ đệm yêu cầu khóa đọc hoặc ghi.';
$string['path'] = 'Đường dẫn bộ nhớ đệm';
$string['path_help'] = 'Thư mục dùng để lưu trữ tệp cho kho bộ nhớ đệm này. Nếu để trống (mặc định), một thư mục sẽ được tự động tạo trong thư mục moodledata. Có thể dùng tùy chọn này để trỏ kho tệp đến một thư mục trên ổ đĩa có hiệu năng tốt hơn (chẳng hạn như ổ đĩa trong bộ nhớ).';
$string['pluginname'] = 'Bộ nhớ đệm tệp';
$string['prescan'] = 'Quét trước thư mục';
$string['prescan_help'] = 'Nếu bật, thư mục sẽ được quét khi bộ nhớ đệm được sử dụng lần đầu và các yêu cầu tệp sẽ được đối chiếu với dữ liệu quét trước. Tùy chọn này có thể hữu ích nếu hệ thống tệp chậm và các thao tác với tệp đang gây nghẽn.';
$string['privacy:metadata'] = 'Tiện ích kho bộ nhớ đệm tệp lưu trữ dữ liệu trong thời gian ngắn như một phần của chức năng lưu vào bộ nhớ đệm; dữ liệu này được xóa thường xuyên.';
$string['serializer_igbinary'] = 'Bộ tuần tự hóa Igbinary';
$string['serializer_php'] = 'Bộ tuần tự hóa PHP mặc định';
$string['singledirectory'] = 'Kho lưu trữ một thư mục';
$string['singledirectory_help'] = 'Nếu bật, các tệp (mục đã lưu trong bộ nhớ đệm) sẽ được lưu trong một thư mục duy nhất thay vì chia thành nhiều thư mục.

Bật tùy chọn này sẽ tăng tốc các thao tác với tệp, nhưng làm tăng nguy cơ gặp phải giới hạn của hệ thống tệp.

Chỉ nên bật tùy chọn này nếu đáp ứng các điều kiện sau:

* Bạn biết số lượng mục trong bộ nhớ đệm đủ nhỏ để không gây sự cố cho hệ thống tệp đang dùng.
* Dữ liệu được lưu trong bộ nhớ đệm không tốn nhiều tài nguyên để tạo. Nếu có, giữ nguyên cài đặt mặc định có thể vẫn là lựa chọn tốt hơn vì giảm nguy cơ xảy ra sự cố.';
$string['task_asyncpurge'] = 'Dọn không đồng bộ các thư mục phiên bản bộ nhớ đệm cũ trong kho tệp';
$string['useserializer'] = 'Sử dụng bộ tuần tự hóa';
$string['useserializer_help'] = 'Bộ tuần tự hóa dùng để tuần tự hóa dữ liệu. Nếu có, bộ tuần tự hóa igbinary có thể giảm dung lượng lưu trữ cần thiết cho các bộ nhớ đệm lớn. Tính năng này chỉ được hỗ trợ khi phần mở rộng igbinary đã được tải.';
