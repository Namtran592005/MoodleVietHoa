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
 * @package    tiny
 * @subpackage recordrtc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedpausing'] = 'Cho phép tạm dừng';
$string['allowedtypes'] = 'Loại bản ghi';
$string['allowedtypes_desc'] = 'Có thể tạo những loại bản ghi nào trong trình soạn thảo TinyMCE? Ngoài cài đặt này, còn có các quyền năng lực kiểm soát quyền truy cập vào tùy chọn ghi.';
$string['attachrecording'] = 'Đính kèm bản ghi';
$string['audioandvideo'] = 'Âm thanh và video';
$string['audiobitrate'] = 'Tốc độ bit âm thanh';
$string['audiobitrate_desc'] = 'Chất lượng bản ghi âm thanh (số càng lớn thì chất lượng càng cao).';
$string['audiobuttontitle'] = 'Ghi âm thanh';
$string['audiortcformat'] = 'Định dạng âm thanh';
$string['audiortcformatdefault'] = 'Mặc định của trình duyệt';
$string['audiortcformatmp3'] = 'MP3';
$string['audiotimelimit'] = 'Giới hạn thời lượng âm thanh';
$string['audiotimelimit_desc'] = 'Thời lượng tối đa của các đoạn ghi âm.';
$string['audiotitle'] = 'Ghi âm thanh';
$string['confirm_yes'] = 'Có';
$string['discard_desc'] = 'Đang có bản ghi. Bạn có muốn dừng ghi không?';
$string['discard_title'] = 'Xác nhận đóng';
$string['downloadrecording'] = 'Tải bản ghi xuống';
$string['downloadrecordinghint'] = 'Để tránh mất bản ghi, hãy tải bản ghi xuống thiết bị của bạn.';
$string['gumabort'] = 'Đã xảy ra sự cố khiến không thể sử dụng webcam/micro/màn hình.';
$string['gumabort_title'] = 'Đã xảy ra sự cố';
$string['gumnotallowed'] = 'Bạn phải cho phép trình duyệt truy cập webcam/micro/màn hình.';
$string['gumnotallowed_title'] = 'Quyền không hợp lệ';
$string['gumnotfound'] = 'Không phát hiện thiết bị đầu vào.';
$string['gumnotfound_title'] = 'Thiếu thiết bị';
$string['gumnotreadable'] = 'Có điều gì đó đang ngăn trình duyệt truy cập webcam/micro/màn hình.';
$string['gumnotreadable_title'] = 'Lỗi phần cứng';
$string['gumnotsupported'] = 'Trình duyệt của bạn không hỗ trợ ghi hình qua kết nối không an toàn.';
$string['gumnotsupported_title'] = 'Không hỗ trợ kết nối không an toàn';
$string['gumoverconstrained'] = 'Webcam/micro/màn hình hiện tại không thể tạo luồng đáp ứng các ràng buộc bắt buộc.';
$string['gumoverconstrained_title'] = 'Sự cố về ràng buộc';
$string['gumsecurity'] = 'Trình duyệt của bạn không hỗ trợ ghi hình qua kết nối không an toàn.';
$string['gumsecurity_title'] = 'Không hỗ trợ kết nối không an toàn';
$string['gumtype'] = 'Đã thử lấy luồng từ webcam/micro/màn hình nhưng không có ràng buộc nào được chỉ định.';
$string['gumtype_title'] = 'Chưa chỉ định ràng buộc';
$string['helplinktext'] = 'RecordRTC';
$string['insecurealert'] = 'Trình duyệt của bạn có thể không cho phép plugin này hoạt động trừ khi được sử dụng qua HTTPS hoặc từ localhost.';
$string['insecurealert_title'] = 'Kết nối không an toàn!';
$string['kbrate'] = '{$a} kb/s';
$string['maxfilesizehit'] = 'Bạn đã đạt đến giới hạn kích thước tối đa cho phép tải tệp lên. Để tránh mất bản ghi, bạn có thể tải bản ghi xuống thiết bị của mình.';
$string['maxfilesizehit_title'] = 'Bản ghi quá lớn';
$string['norecordingfound'] = 'Đã xảy ra lỗi. Không có nội dung nào được ghi.';
$string['norecordingfound_title'] = 'Không tìm thấy bản ghi';
$string['nowebrtc'] = 'Trình duyệt của bạn chưa hỗ trợ hoặc chỉ hỗ trợ hạn chế các công nghệ WebRTC nên không thể sử dụng với plugin này. Vui lòng chuyển sang trình duyệt khác hoặc nâng cấp trình duyệt.';
$string['nowebrtc_title'] = 'Không hỗ trợ WebRTC';
$string['onlyaudio'] = 'Âm thanh';
$string['onlyscreen'] = 'Màn hình';
$string['onlyvideo'] = 'Video';
$string['pause'] = 'Tạm dừng';
$string['pluginname'] = 'RecordRTC';
$string['privacy:metadata'] = 'Plugin RecordRTC không lưu trữ dữ liệu cá nhân.';
$string['recordagain'] = 'Ghi lại';
$string['recordagain_desc'] = 'Bạn đã ghi một số nội dung. Ghi lại sẽ xóa nội dung này. Bạn có chắc muốn đặt lại bản ghi không?';
$string['recordagain_title'] = 'Xác nhận ghi lại';
$string['recordingfailed'] = 'Không thể ghi. Hãy thử lại.';
$string['recordinguploaded'] = 'Đã tải bản ghi lên';
$string['recordrtc:recordaudio'] = 'Ghi âm thanh trong trình soạn thảo văn bản';
$string['recordrtc:recordscreen'] = 'Ghi màn hình trong trình soạn thảo văn bản';
$string['recordrtc:recordvideo'] = 'Ghi video trong trình soạn thảo văn bản';
$string['recordrtc:use'] = 'Sử dụng TinyMCE RecordRTC';
$string['resume'] = 'Tiếp tục';
$string['screenbitrate'] = 'Tốc độ bit màn hình';
$string['screenbitrate_desc'] = 'Chất lượng bản ghi màn hình (số càng lớn thì chất lượng càng cao).';
$string['screenbuttontitle'] = 'Ghi màn hình';
$string['screenresolution_fhd'] = '1920 x 1080 (16:9)';
$string['screenresolution_hd'] = '1280 x 720 (16:9)';
$string['screensharingstopped'] = 'Bạn đã dừng chia sẻ màn hình trước khi bắt đầu ghi. Vui lòng cho phép chia sẻ màn hình trong cài đặt trình duyệt rồi bắt đầu ghi lại.';
$string['screensharingstopped_title'] = 'Đã dừng chia sẻ';
$string['screensize'] = 'Kích thước ghi màn hình';
$string['screensize_desc'] = 'Kích thước độ phân giải video đầu ra.';
$string['screentimelimit'] = 'Giới hạn thời lượng ghi màn hình';
$string['screentimelimit_desc'] = 'Thời lượng tối đa của bản ghi màn hình.';
$string['screentitle'] = 'Ghi màn hình';
$string['startrecording'] = 'Bắt đầu ghi';
$string['stoprecording'] = 'Dừng ghi';
$string['timelimitwarning'] = 'Bạn phải nhập một số lớn hơn 0.';
$string['uploadaborted'] = 'Đã hủy tải lên:';
$string['uploadfailed'] = 'Tải lên thất bại với lỗi: {$a->error}';
$string['uploadfailed404'] = 'Tải lên thất bại: tệp quá lớn';
$string['uploading'] = 'Đang tải lên - {$a->progress}%';
$string['uploadprogress'] = 'đã hoàn tất';
$string['videobitrate'] = 'Tốc độ bit video';
$string['videobitrate_desc'] = 'Chất lượng bản ghi video (số càng lớn thì chất lượng càng cao).';
$string['videobuttontitle'] = 'Ghi video';
$string['videorecordmenutitle'] = 'Menu ghi video';
$string['videotimelimit'] = 'Giới hạn thời lượng video';
$string['videotimelimit_desc'] = 'Thời lượng tối đa của các đoạn video.';
$string['videotitle'] = 'Ghi video';
