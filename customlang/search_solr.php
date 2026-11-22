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
 * @package    search
 * @subpackage solr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_indextoobig'] = 'Chỉ mục lớn hơn kích thước đã chỉ định';
$string['check_nocore'] = 'Không tìm thấy chỉ mục trên máy chủ Solr';
$string['check_nosize'] = 'Không thể xác định kích thước chỉ mục trên máy chủ Solr';
$string['check_notconnected'] = 'Không thể kết nối với máy chủ Solr';
$string['check_time'] = 'Máy chủ phản hồi với trạng thái trong {$a}';
$string['connectionerror'] = 'Máy chủ Solr được chỉ định không khả dụng hoặc chỉ mục được chỉ định không tồn tại';
$string['connectionsettings'] = 'Cài đặt kết nối';
$string['errorcreatingschema'] = 'Lỗi khi tạo lược đồ Solr: {$a}';
$string['errorsolr'] = 'Công cụ tìm kiếm Solr báo lỗi: {$a}';
$string['errorvalidatingschema'] = 'Lỗi khi xác thực lược đồ Solr: trường {$a->fieldname} không tồn tại. Vui lòng <a href="{$a->setupurl}">truy cập liên kết này</a> để thiết lập các trường bắt buộc.';
$string['extensionerror'] = 'Chưa cài đặt tiện ích mở rộng PHP Apache Solr. Vui lòng kiểm tra tài liệu.';
$string['fileindexing'] = 'Bật lập chỉ mục tệp';
$string['fileindexing_help'] = 'Nếu cài đặt Solr của bạn hỗ trợ, tính năng này cho phép Moodle gửi tệp để lập chỉ mục.<br/>
Bạn cần lập chỉ mục lại toàn bộ nội dung trang web sau khi bật tùy chọn này để thêm tất cả tệp.';
$string['fileindexsettings'] = 'Cài đặt lập chỉ mục tệp';
$string['indexsize'] = 'Chỉ mục đang sử dụng {$a} trên máy chủ Solr.';
$string['indexsizelimit'] = 'Giới hạn kích thước chỉ mục';
$string['indexsizelimit_desc'] = 'Hiển thị lỗi trên trang báo cáo trạng thái nếu chỉ mục tìm kiếm lớn hơn kích thước này (tính bằng byte) và cảnh báo nếu vượt quá 90%. Đặt bằng 0 để không giới hạn kích thước chỉ mục.';
$string['maxindexfilekb'] = 'Kích thước tệp tối đa để lập chỉ mục (kB)';
$string['maxindexfilekb_help'] = 'Các tệp lớn hơn số kilobyte này sẽ không được đưa vào chỉ mục tìm kiếm. Nếu đặt bằng 0, tệp ở mọi kích thước đều sẽ được lập chỉ mục.';
$string['minimumsolr4'] = 'Solr 4.0 là phiên bản tối thiểu cần thiết cho Moodle';
$string['missingconfig'] = 'Máy chủ Apache Solr của bạn chưa được cấu hình trong Moodle.';
$string['multivaluedfield'] = 'Trường "{$a}" trả về một mảng thay vì giá trị đơn. Vui lòng xóa chỉ mục hiện tại, tạo chỉ mục mới và chạy setup_schema.php trước khi lập chỉ mục dữ liệu trong Solr.';
$string['nodatafromserver'] = 'Không có dữ liệu từ máy chủ';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Trình bổ trợ này gửi dữ liệu ra bên ngoài đến một công cụ tìm kiếm Solr được liên kết. Trình bổ trợ không lưu dữ liệu cục bộ.';
$string['privacy:metadata:data'] = 'Dữ liệu cá nhân được chuyển tiếp từ hệ thống con tìm kiếm.';
$string['schemafieldautocreated'] = 'Trường "{$a}" đã tồn tại trong lược đồ Solr. Có thể bạn đã quên chạy tập lệnh này trước khi lập chỉ mục dữ liệu và các trường đã được Solr tự động tạo. Vui lòng xóa chỉ mục hiện tại, tạo chỉ mục mới và chạy lại setup_schema.php trước khi lập chỉ mục dữ liệu trong Solr.';
$string['schemasetupfromsolr5'] = 'Phiên bản máy chủ Solr của bạn thấp hơn 5.0. Tập lệnh này chỉ có thể thiết lập lược đồ nếu phiên bản Solr của bạn từ 5.0 trở lên. Bạn cần tự thiết lập các trường trong lược đồ theo \\\\search_solr\\\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Truy vấn tìm kiếm';
$string['searchinfo_help'] = 'Có thể chỉ định trường cần tìm bằng cách thêm tiền tố \'title:\', \'content:\', \'name:\' hoặc \'intro:\' vào truy vấn tìm kiếm. Ví dụ, tìm kiếm \'title:news\' sẽ trả về kết quả có từ \'news\' trong tiêu đề.

Có thể dùng toán tử Boolean (\'AND\', \'OR\', \'NOT\') để kết hợp hoặc loại trừ từ khóa.

Có thể dùng ký tự đại diện (\'*\' hoặc \'?\') để đại diện cho các ký tự trong truy vấn tìm kiếm.';
$string['setupok'] = 'Lược đồ đã sẵn sàng để sử dụng.';
$string['solrauthpassword'] = 'Mật khẩu xác thực HTTP';
$string['solrauthuser'] = 'Tên người dùng xác thực HTTP';
$string['solrhttpconnectionport'] = 'Cổng';
$string['solrhttpconnectiontimeout'] = 'Thời gian chờ';
$string['solrhttpconnectiontimeout_desc'] = 'Thời gian chờ kết nối HTTP là khoảng thời gian tối đa tính bằng giây được phép cho thao tác truyền dữ liệu HTTP.';
$string['solrindexname'] = 'Tên chỉ mục';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Công cụ Solr không phải là công cụ tìm kiếm được cấu hình';
$string['solrsecuremode'] = 'Chế độ bảo mật';
$string['solrserverhostname'] = 'Tên máy chủ';
$string['solrserverhostname_desc'] = 'Tên miền của máy chủ Solr.';
$string['solrsetting'] = 'Cài đặt Solr';
$string['solrsslcainfo'] = 'Tên chứng chỉ SSL CA';
$string['solrsslcainfo_desc'] = 'Tên tệp chứa một hoặc nhiều chứng chỉ CA dùng để xác minh máy ngang hàng';
$string['solrsslcapath'] = 'Đường dẫn chứng chỉ SSL CA';
$string['solrsslcapath_desc'] = 'Đường dẫn thư mục chứa nhiều chứng chỉ CA dùng để xác minh máy ngang hàng';
$string['solrsslcert'] = 'Chứng chỉ SSL';
$string['solrsslcert_desc'] = 'Tên tệp chứa chứng chỉ riêng tư định dạng PEM';
$string['solrsslkey'] = 'Khóa SSL';
$string['solrsslkey_desc'] = 'Tên tệp chứa khóa riêng tư định dạng PEM';
$string['solrsslkeypassword'] = 'Mật khẩu khóa SSL';
$string['solrsslkeypassword_desc'] = 'Mật khẩu cho tệp khóa riêng tư định dạng PEM';
