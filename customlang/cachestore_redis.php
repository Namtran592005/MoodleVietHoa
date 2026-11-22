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
 * @subpackage redis
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Đường dẫn tệp Tổ chức phát hành chứng chỉ (CA)';
$string['ca_file_help'] = 'Vị trí của tệp Tổ chức phát hành chứng chỉ trên hệ thống tệp cục bộ';
$string['clustermode'] = 'Chế độ cụm';
$string['clustermode_help'] = 'Bật chế độ cụm sẽ chạy chức năng Redis Cluster, cho phép máy chủ của bạn phục vụ nhiều máy chủ để xử lý đồng thời các yêu cầu.';
$string['clustermodeunavailable'] = 'Redis Cluster hiện không khả dụng. Hãy đảm bảo phần mở rộng Redis của PHP hỗ trợ chức năng Redis Cluster.';
$string['compressor_none'] = 'Không nén.';
$string['compressor_php_gzip'] = 'Sử dụng nén gzip.';
$string['compressor_php_zstd'] = 'Sử dụng nén Zstandard.';
$string['connectiontimeout'] = 'Thời gian chờ kết nối';
$string['connectiontimeout_help'] = 'Thiết lập thời gian chờ khi thử kết nối với máy chủ Redis.';
$string['encrypt_connection'] = 'Sử dụng mã hóa Transport Layer Security (TLS)';
$string['encrypt_connection_help'] = 'Sử dụng Transport Layer Security (TLS) để kết nối với Redis. Không sử dụng \'tls://\' trong tên máy chủ Redis; thay vào đó hãy dùng tùy chọn này.';
$string['password'] = 'Mật khẩu';
$string['password_help'] = 'Thiết lập mật khẩu của máy chủ Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Tiền tố khóa';
$string['prefix_help'] = 'Tiền tố này được dùng cho tất cả tên khóa trên máy chủ Redis.
* Nếu chỉ có một phiên bản Moodle sử dụng máy chủ này, bạn có thể giữ giá trị mặc định.
* Do giới hạn độ dài khóa, chỉ được phép dùng tối đa 5 ký tự.';
$string['prefixinvalid'] = 'Tiền tố không hợp lệ. Bạn chỉ có thể sử dụng a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Tiện ích kho bộ nhớ đệm Redis lưu trữ dữ liệu trong thời gian ngắn như một phần của chức năng lưu vào bộ nhớ đệm. Dữ liệu này được lưu trên máy chủ Redis và thường xuyên bị xóa.';
$string['privacy:metadata:redis:data'] = 'Các loại dữ liệu được lưu trong bộ nhớ đệm';
$string['readtimeout'] = 'Thời gian chờ đọc';
$string['readtimeout_help'] = 'Thiết lập số giây chờ để đọc dữ liệu từ máy chủ Redis.';
$string['serializer_igbinary'] = 'Bộ tuần tự hóa Igbinary';
$string['serializer_php'] = 'Bộ tuần tự hóa PHP mặc định';
$string['server'] = 'Máy chủ';
$string['server_help'] = 'Máy chủ Redis dùng để kiểm tra.

Một số giá trị ví dụ:

* testredis.abc.com - Kết nối với máy chủ Redis bằng tên máy chủ (cổng mặc định là 6379).
* testredis.abc.com:1234 - Kết nối với máy chủ Redis bằng tên máy chủ và cổng cụ thể.
* 1.2.3.4 - Kết nối với máy chủ Redis bằng địa chỉ IP (cổng mặc định là 6379).
* 1.2.3.4:1234 - Kết nối với máy chủ Redis bằng địa chỉ IP và cổng cụ thể.
* unix:///var/redis.sock - Kết nối với máy chủ Redis bằng socket Unix.
* /var/redis.sock - Kết nối với máy chủ Redis bằng socket Unix (định dạng thay thế).

Nếu bật chế độ cụm, hãy chỉ định các máy chủ, mỗi máy chủ trên một dòng, ví dụ:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Để biết thêm thông tin, hãy xem <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Chấp nhận kết nối máy khách</a> và <a href="https://redis.io/resources/clients/#php">Máy khách Redis PHP</a>.';
$string['task_ttl'] = 'Giải phóng bộ nhớ được các mục hết hạn trong bộ nhớ đệm Redis sử dụng';
$string['test_clustermode'] = 'Chế độ cụm';
$string['test_clustermode_desc'] = 'Bật kiểm tra ở chế độ Redis Cluster.';
$string['test_password'] = 'Mật khẩu máy chủ kiểm tra';
$string['test_password_desc'] = 'Mật khẩu máy chủ kiểm tra Redis.';
$string['test_serializer'] = 'Bộ tuần tự hóa';
$string['test_serializer_desc'] = 'Bộ tuần tự hóa dùng để kiểm tra.';
$string['test_server'] = 'Máy chủ kiểm tra';
$string['test_server_desc'] = 'Máy chủ Redis dùng để kiểm tra.

Một số giá trị ví dụ:

* testredis.abc.com - Kết nối với máy chủ Redis bằng tên máy chủ (cổng mặc định là 6379).
* testredis.abc.com:1234 - Kết nối với máy chủ Redis bằng tên máy chủ và cổng cụ thể.
* 1.2.3.4 - Kết nối với máy chủ Redis bằng địa chỉ IP (cổng mặc định là 6379).
* 1.2.3.4:1234 - Kết nối với máy chủ Redis bằng địa chỉ IP và cổng cụ thể.
* unix:///var/redis.sock - Kết nối với máy chủ Redis bằng socket Unix.
* /var/redis.sock - Kết nối với máy chủ Redis bằng socket Unix (định dạng thay thế).

Nếu bật chế độ cụm, hãy chỉ định các máy chủ, mỗi máy chủ trên một dòng, ví dụ:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Để biết thêm thông tin, hãy xem <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Chấp nhận kết nối máy khách</a> và <a href="https://redis.io/resources/clients/#php">Máy khách Redis PHP</a>.';
$string['test_ttl'] = 'Kiểm tra thời gian tồn tại (TTL)';
$string['test_ttl_desc'] = 'Chạy kiểm tra hiệu năng bằng bộ nhớ đệm yêu cầu TTL (thao tác ghi chậm hơn).';
$string['usecompressor'] = 'Sử dụng bộ nén';
$string['usecompressor_help'] = 'Chỉ định bộ nén sẽ dùng sau khi tuần tự hóa. Việc này được thực hiện ở cấp API Cache của Moodle, không phải ở cấp php-redis.';
$string['useserializer'] = 'Sử dụng bộ tuần tự hóa';
$string['useserializer_help'] = 'Chỉ định bộ tuần tự hóa sẽ dùng.
Các bộ tuần tự hóa hợp lệ là Redis::SERIALIZER_PHP hoặc Redis::SERIALIZER_IGBINARY.
Bộ sau chỉ được hỗ trợ khi phpredis được cấu hình với tùy chọn --enable-redis-igbinary và tiện ích mở rộng igbinary đã được tải.';
