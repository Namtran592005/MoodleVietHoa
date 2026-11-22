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
 * @package    repository
 * @subpackage flickr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Khóa API';
$string['callbackurl'] = 'URL gọi lại';
$string['callbackurltext'] = '<ol>
<li>Truy cập lại <a href="http://www.flickr.com/services/api/keys/">Khóa API Flickr</a>.</li>
<li>Đảm bảo bạn đặt URL gọi lại cho khóa Flickr này là <strong>{$a}</strong></li></ol>';
$string['callbackwarning'] = '<ol>
<li>Lấy <a href="http://www.flickr.com/services/api/keys/">Khóa API và khóa bí mật Flickr</a> từ Flickr cho trang Moodle này.</li>
<li>Nhập các thông tin đó tại đây, sau đó nhấp vào Lưu rồi nhấp vào Cài đặt để quay lại trang này. Bạn sẽ thấy Moodle đã tạo URL gọi lại cho bạn.</li>
<li>Chỉnh sửa lại thông tin khóa <a href="http://www.flickr.com/services/api/keys/">Flickr</a> và đặt URL gọi lại.</li></ol>';
$string['configplugin'] = 'Cấu hình Flickr';
$string['emailaddress'] = 'Địa chỉ email';
$string['flickr:view'] = 'Xem kho lưu trữ Flickr';
$string['invalidemail'] = 'Địa chỉ email Flickr không hợp lệ';
$string['notitle'] = 'notitle';
$string['nullphotolist'] = 'Không có ảnh nào trong tài khoản này';
$string['pluginname'] = 'Flickr';
$string['pluginname_help'] = 'Kho lưu trữ trên flickr.com';
$string['privacy:metadata:repository_flickr'] = 'Plugin kho lưu trữ Flickr lưu trữ tùy chọn của người dùng và truyền dữ liệu người dùng từ Moodle đến hệ thống từ xa.';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token'] = 'Tùy chọn token OAuth của kho lưu trữ Flickr.';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token_secret'] = 'Tùy chọn khóa bí mật OAuth của kho lưu trữ Flickr; thông tin này không được đưa vào bản xuất dữ liệu riêng tư.';
$string['privacy:metadata:repository_flickr:text'] = 'Truy vấn văn bản tìm kiếm của người dùng trong kho lưu trữ Flickr.';
$string['remember'] = 'Ghi nhớ tôi';
$string['secret'] = 'Khóa bí mật';
$string['username'] = 'Email tài khoản Flickr';
