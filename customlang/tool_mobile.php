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
 * @subpackage mobile
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activedeviceslabel'] = 'Thiết bị đang hoạt động để nhận thông báo đẩy';
$string['activitiesoverview'] = 'Tổng quan về các hoạt động';
$string['adodbdebugwarning'] = 'Tính năng gỡ lỗi ADOdb đang bật. Cần tắt tính năng này trong cài đặt plugin xác thực cơ sở dữ liệu ngoài hoặc plugin ghi danh cơ sở dữ liệu ngoài.';
$string['androidappid'] = 'Mã định danh duy nhất của ứng dụng Android';
$string['androidappid_desc'] = 'Có thể giữ giá trị mặc định cho cài đặt này, trừ khi bạn có ứng dụng Android tùy chỉnh.';
$string['apppolicy'] = 'URL chính sách ứng dụng';
$string['apppolicy_help'] = 'URL của chính sách dành cho người dùng ứng dụng, được liệt kê trên trang Giới thiệu trong ứng dụng. Nếu để trống, URL chính sách của trang web sẽ được sử dụng.';
$string['apprequired'] = 'Chức năng này chỉ khả dụng khi truy cập bằng ứng dụng Moodle dành cho thiết bị di động hoặc máy tính.';
$string['autologinkeygenerationlockout'] = 'Tạo khóa đăng nhập tự động bị chặn. Bạn cần chờ {$a} phút giữa các yêu cầu.';
$string['autologinmintimebetweenreq'] = 'Thời gian tối thiểu giữa các yêu cầu đăng nhập tự động';
$string['autologinmintimebetweenreq_desc'] = 'Thời gian tối thiểu giữa các yêu cầu đăng nhập tự động từ ứng dụng di động. Nếu người dùng ứng dụng thường xuyên được yêu cầu nhập thông tin xác thực khi xem nội dung nhúng từ trang web, hãy đặt giá trị thấp hơn.';
$string['autologinnotallowedtoadmins'] = 'Quản trị viên trang web không được phép đăng nhập tự động.';
$string['autologout'] = 'Bắt buộc tự động đăng xuất người dùng';
$string['autologout_desc'] = 'Vì lý do bảo mật, bạn có thể bắt buộc tự động đăng xuất người dùng khi họ rời khỏi hoặc đóng ứng dụng, hoặc khi ứng dụng chuyển sang chạy nền. Người dùng sẽ phải đăng nhập lại khi quay lại ứng dụng.';
$string['autologoutcustom'] = 'Thời gian tùy chỉnh sau khi người dùng rời khỏi hoặc đóng ứng dụng';
$string['autologoutinmediate'] = 'Ngay sau khi người dùng rời khỏi hoặc đóng ứng dụng';
$string['autologouttime'] = 'Bộ hẹn giờ tự động đăng xuất';
$string['billedannually'] = 'Thanh toán hằng năm';
$string['branding'] = 'Thương hiệu';
$string['brandingandcustomisation'] = 'Thương hiệu và tùy chỉnh';
$string['brandingbrandcoloursacrosstheapp'] = 'Màu sắc thương hiệu trên toàn ứng dụng.';
$string['brandingbrandcoloursacrosstheapplearnmore'] = 'Tìm hiểu thêm về thương hiệu và tùy chỉnh trên Cổng thông tin Moodle Apps.';
$string['brandinginappsportal'] = 'Cấu hình màu sắc thương hiệu trong Cổng thông tin Apps';
$string['cachedef_plugininfo'] = 'Lưu danh sách các plugin có phần bổ trợ dành cho thiết bị di động';
$string['cachedef_subscriptioninfo'] = 'Lưu thông tin đăng ký ứng dụng Moodle.';
$string['clickheretolaunchtheapp'] = 'Nhấp vào đây nếu ứng dụng không tự động mở.';
$string['configmobilecssurl'] = 'Tệp CSS để tùy chỉnh giao diện ứng dụng di động.';
$string['currentusage'] = 'Mức sử dụng hiện tại';
$string['customisation'] = 'Tùy chỉnh';
$string['customlangstrings'] = 'Chuỗi ngôn ngữ tùy chỉnh';
$string['customlangstrings_desc'] = 'Bạn có thể tùy chỉnh các từ và cụm từ hiển thị trong ứng dụng tại đây. Nhập mỗi chuỗi ngôn ngữ tùy chỉnh trên một dòng theo định dạng: mã định danh chuỗi, chuỗi ngôn ngữ tùy chỉnh và mã ngôn ngữ, phân tách bằng dấu gạch đứng. Ví dụ:
<pre>
core.user.student|Người học|vi
core.user.student|Aprendiz|es
</pre>
Để xem danh sách đầy đủ các mã định danh chuỗi, hãy tham khảo tài liệu.';
$string['custommenuitems'] = 'Mục menu tùy chỉnh';
$string['custommenuitems_desc'] = 'Có thể thêm các mục vào menu chính của ứng dụng bằng cách khai báo tại đây. Nhập mỗi mục menu tùy chỉnh trên một dòng theo định dạng: văn bản mục, URL liên kết, phương thức mở liên kết và mã ngôn ngữ (không bắt buộc, chỉ hiển thị mục cho người dùng sử dụng ngôn ngữ được chỉ định), phân tách bằng dấu gạch đứng.

Các phương thức mở liên kết gồm: app (liên kết đến hoạt động được ứng dụng hỗ trợ), inappbrowser (mở liên kết trong trình duyệt mà không rời ứng dụng), browser (mở liên kết trong trình duyệt mặc định của thiết bị bên ngoài ứng dụng) và embedded (hiển thị liên kết trong iframe trên trang mới trong ứng dụng).

Khi thiếu bản dịch của một mục cho một ngôn ngữ nhất định, ứng dụng sẽ dùng ngôn ngữ khác làm phương án dự phòng, trừ khi thêm "_only" vào mã ngôn ngữ.

Ví dụ:
<pre>
Trợ giúp ứng dụng|https://someurl.xyz/help|inappbrowser
Điểm của tôi|https://someurl.xyz/local/mygrades/index.php|embedded|vi
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Bạn chỉ thấy mục này bằng tiếng Anh|https://someurl.xyz/english|browser|en_only
</pre>';
$string['customusermenuitems'] = 'Mục menu người dùng tùy chỉnh';
$string['customusermenuitems_desc'] = 'Có thể thêm các mục vào menu người dùng của ứng dụng bằng cách khai báo tại đây. Nhập mỗi mục menu người dùng tùy chỉnh trên một dòng theo định dạng: văn bản mục, URL liên kết, phương thức mở liên kết và mã ngôn ngữ (không bắt buộc, chỉ hiển thị mục cho người dùng sử dụng ngôn ngữ được chỉ định), phân tách bằng dấu gạch đứng.

Các phương thức mở liên kết gồm: app (liên kết đến hoạt động được ứng dụng hỗ trợ), inappbrowser (mở liên kết trong trình duyệt mà không rời ứng dụng), browser (mở liên kết trong trình duyệt mặc định của thiết bị bên ngoài ứng dụng) và embedded (hiển thị liên kết trong iframe trên trang mới trong ứng dụng).

Khi thiếu bản dịch của một mục cho một ngôn ngữ nhất định, ứng dụng sẽ dùng ngôn ngữ khác làm phương án dự phòng, trừ khi thêm "_only" vào mã ngôn ngữ.

Ví dụ:
<pre>
Trợ giúp ứng dụng|https://someurl.xyz/help|inappbrowser
Điểm của tôi|https://someurl.xyz/local/mygrades/index.php|embedded|vi
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Bạn chỉ thấy mục này bằng tiếng Anh|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Chế độ tối';
$string['devicelimitnotrack'] = 'Giới hạn trên mỗi thiết bị (không theo dõi mức sử dụng)';
$string['disabledfeatures'] = 'Các tính năng đã tắt';
$string['disabledfeatures_desc'] = 'Chọn tại đây các tính năng bạn muốn tắt trong ứng dụng di động cho trang web của mình. Xin lưu ý rằng một số tính năng được liệt kê tại đây có thể đã bị tắt bằng các cài đặt trang web khác. Bạn cần đăng xuất rồi đăng nhập lại vào ứng dụng để thấy các thay đổi.';
$string['disabledfeatures_singular'] = 'Tính năng đã tắt';
$string['displayerrorswarning'] = 'Tính năng hiển thị thông báo gỡ lỗi (debugdisplay) đang bật. Cần tắt tính năng này.';
$string['downloadcourse'] = 'Tải khóa học xuống';
$string['downloadcourses'] = 'Tải các khóa học xuống';
$string['enabledeeplinkautologin'] = 'Đăng nhập tự động bằng liên kết sâu';
$string['enabledeeplinkautologin_desc'] = 'Tự động đăng nhập người dùng vào trang web trong ứng dụng di động khi họ mở liên kết sâu có chứa token xác thực hợp lệ.';
$string['enablesmartappbanners'] = 'Bật biểu ngữ ứng dụng';
$string['enablesmartappbanners_desc'] = 'Nếu bật, biểu ngữ quảng bá ứng dụng di động sẽ hiển thị khi truy cập trang web bằng trình duyệt trên thiết bị di động.';
$string['enhanced'] = 'Cao cấp';
$string['feature'] = 'Tính năng';
$string['featurecomparison'] = 'So sánh tính năng';
$string['filetypeexclusionlist'] = 'Danh sách loại tệp bị loại trừ';
$string['filetypeexclusionlist_desc'] = 'Chọn tất cả các loại tệp không dành cho thiết bị di động. Các tệp này sẽ được liệt kê trong khóa học; nếu người dùng cố mở, một cảnh báo sẽ thông báo rằng loại tệp đó không dành cho thiết bị di động. Người dùng có thể hủy hoặc bỏ qua cảnh báo để vẫn mở tệp.';
$string['filetypeexclusionlistplaceholder'] = 'Danh sách loại tệp di động bị loại trừ';
$string['forcedurlscheme'] = 'Nếu bạn chỉ muốn cho phép mở ứng dụng mang thương hiệu tùy chỉnh qua cửa sổ trình duyệt, hãy chỉ định lược đồ URL của ứng dụng tại đây. Nếu chỉ muốn cho phép ứng dụng chính thức, hãy đặt giá trị mặc định. Để trống trường này nếu muốn cho phép mọi ứng dụng.';
$string['forcedurlscheme_key'] = 'Lược đồ URL';
$string['forcelogout'] = 'Buộc đăng xuất';
$string['forcelogout_desc'] = 'Nếu bật, người dùng sẽ luôn được đăng xuất hoàn toàn, kể cả khi chuyển đổi tài khoản. Lần tiếp theo muốn truy cập trang web, họ phải nhập lại mật khẩu.';
$string['fullaccessfeatures'] = 'Bạn có toàn quyền truy cập vào các tính năng {$a}';
$string['getmoodleonyourmobile'] = 'Tải ứng dụng di động';
$string['getmorefromcurrentsetup'] = 'Tận dụng nhiều hơn thiết lập hiện tại của bạn';
$string['h5poffline'] = 'Xem nội dung H5P khi ngoại tuyến';
$string['httpsrequired'] = 'Yêu cầu HTTPS';
$string['insecurealgorithmwarning'] = 'Có vẻ chứng chỉ HTTPS sử dụng thuật toán ký không an toàn (SHA-1). Vui lòng thử cập nhật chứng chỉ.';
$string['invalidcertificatechainwarning'] = 'Có vẻ chuỗi chứng chỉ không hợp lệ. Chứng chỉ này có thể hoạt động trên trình duyệt nhưng không hoạt động trong ứng dụng di động.';
$string['invalidcertificateexpiredatewarning'] = 'Có vẻ chứng chỉ HTTPS của trang web đã hết hạn.';
$string['invalidcertificatestartdatewarning'] = 'Có vẻ chứng chỉ HTTPS của trang web chưa có hiệu lực (ngày bắt đầu trong tương lai).';
$string['invalidprivatetoken'] = 'Token riêng tư không hợp lệ. Token không được để trống hoặc truyền qua tham số GET.';
$string['invaliduserquotawarning'] = 'Hạn mức người dùng (userquota) được đặt thành một số không hợp lệ. Hạn mức này phải là một số hợp lệ (số nguyên) trong phần cài đặt bảo mật trang web.';
$string['iosappid'] = 'Mã định danh duy nhất của ứng dụng iOS';
$string['iosappid_desc'] = 'Có thể giữ giá trị mặc định cho cài đặt này, trừ khi bạn có ứng dụng iOS tùy chỉnh.';
$string['launchviasiteinbrowser'] = 'Khởi chạy qua trang web trong trình duyệt hệ thống';
$string['learnmore'] = 'Tìm hiểu thêm';
$string['limitedcustomlangstrings'] = 'Tổng số <strong>chuỗi ngôn ngữ tùy chỉnh</strong> trong gói <strong>{$a->plan}</strong> của bạn: {$a->limit}. <a href="{$a->url}">Xem chi tiết gói</a>.';
$string['limiteddisabledfeatures'] = 'Tổng số <strong>tính năng đã tắt</strong> trong gói <strong>{$a->plan}</strong> của bạn: {$a->limit}. <a href="{$a->url}">Xem chi tiết gói</a>.';
$string['limitedfeatures'] = 'Tính năng giới hạn';
$string['limitedmenuitems'] = 'Tổng số mục trong cả <strong>mục menu tùy chỉnh</strong> và <strong>mục menu người dùng tùy chỉnh</strong> trong gói <strong>{$a->plan}</strong> của bạn: {$a->limit}. <a href="{$a->url}">Xem chi tiết gói</a>.';
$string['limitnewdevices'] = 'Các thiết bị mới được thêm vượt quá giới hạn sẽ không nhận được thông báo đẩy.';
$string['limitreached'] = 'Đã đạt giới hạn';
$string['limitreachedmonthly'] = 'Đã đạt giới hạn thiết bị nhận thông báo đẩy hằng tháng';
$string['limitreachedpushnotifications'] = '🚨 Đã đạt giới hạn thiết bị nhận thông báo đẩy';
$string['loginintheapp'] = 'Qua ứng dụng';
$string['logininthebrowser'] = 'Qua cửa sổ trình duyệt (dành cho plugin SSO)';
$string['loginintheembeddedbrowser'] = 'Qua trình duyệt nhúng (dành cho plugin SSO)';
$string['logocanappearapp'] = 'Logo của bạn cũng có thể xuất hiện trong ứng dụng Moodle';
$string['logocanappearapp_desc'] = 'Sử dụng gói Cao cấp để mang đến trải nghiệm thương hiệu nhất quán cho người học trên trang web và thiết bị di động.';
$string['logointheapp'] = 'Logo trong ứng dụng';
$string['logointheapp_description'] = 'Bạn đã thiết lập logo, nhưng người học chưa thấy logo đó trong ứng dụng Moodle.';
$string['logoutconfirmation'] = 'Bạn có chắc muốn đăng xuất khỏi ứng dụng di động trên các thiết bị di động của mình không? Sau khi đăng xuất, bạn sẽ cần nhập lại tên đăng nhập và mật khẩu trong ứng dụng di động trên tất cả thiết bị đã cài đặt ứng dụng.';
$string['lookingforcsscustomisation'] = 'Bạn đang tìm cách tùy chỉnh CSS?';
$string['lookingforcustomisationfeatures'] = 'Bạn đang tìm các tính năng tùy chỉnh?';
$string['lookingforqrcodelogin'] = 'Bạn đang tìm cách đăng nhập bằng mã QR?';
$string['mainmenu'] = 'Menu chính';
$string['manage'] = 'Quản lý';
$string['managefiletypes'] = 'Quản lý loại tệp';
$string['matomocantrackapp'] = 'Matomo cũng có thể theo dõi ứng dụng Moodle';
$string['matomocantrackapp_desc'] = 'Bạn đã thiết lập Matomo cho trang web. Với gói Cao cấp, phiên bản Matomo của bạn cũng có thể theo dõi cách người học sử dụng ứng dụng Moodle.';
$string['matomointheapp'] = 'Matomo trong ứng dụng';
$string['matomointheapp_description'] = 'Matomo đã được thiết lập trên trang web của bạn nhưng chưa theo dõi ứng dụng Moodle.';
$string['messageprovider:pushlimitreached'] = 'Đã đạt giới hạn gói thông báo đẩy';
$string['messageprovider:pushlimitreached_help'] = 'Thông báo này được gửi khi số thiết bị có thể nhận thông báo đẩy đạt giới hạn hằng tháng. Khi đạt giới hạn, thông báo đẩy sẽ không được gửi đến thiết bị mới cho đến tháng sau hoặc khi nâng cấp gói.';
$string['minimumversion'] = 'Nếu chỉ định phiên bản ứng dụng (3.8.0 trở lên), người dùng đang sử dụng phiên bản cũ hơn sẽ được yêu cầu nâng cấp ứng dụng trước khi được phép truy cập trang web.';
$string['minimumversion_key'] = 'Phiên bản ứng dụng tối thiểu bắt buộc';
$string['missedadditionalusers'] = 'Người dùng bổ sung sẽ không nhận được thông báo đẩy trong tháng này.';
$string['missedusers'] = 'Người dùng đã ngừng nhận thông báo đẩy trong tháng này: {$a}.';
$string['mobileapp'] = 'Ứng dụng di động';
$string['mobileappearance'] = 'Giao diện di động';
$string['mobileappenabled'] = 'Trang web này đã bật quyền truy cập bằng ứng dụng di động.<br /><a href="{$a}">Tải ứng dụng di động</a>.';
$string['mobileappsubscription'] = 'Gói đăng ký ứng dụng Moodle';
$string['mobileauthentication'] = 'Xác thực trên thiết bị di động';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Tính năng di động';
$string['mobilenotificationsdisabledwarning'] = 'Thông báo trên thiết bị di động chưa được bật. Bạn cần bật thông báo trong phần Cài đặt thông báo.';
$string['mobilesettings'] = 'Cài đặt di động';
$string['modulenavigation'] = 'Điều hướng hoạt động tuần tự';
$string['moodleappsportalfeatureswarning'] = 'Xin lưu ý rằng một số tính năng có thể bị giới hạn tùy theo gói đăng ký Moodle app của bạn. Để biết chi tiết, hãy truy cập <a href="{$a}" target="_blank">Cổng Moodle Apps</a>.';
$string['movedcsstopremiumfeatures'] = 'CSS để tùy chỉnh ứng dụng di động đã được chuyển đến mục <a href="{$a->url}">{$a->urlname}</a>.';
$string['moveddisabledtopremiumfeatures'] = 'Các tính năng như tắt tính năng, mục menu tùy chỉnh và tùy chỉnh ngôn ngữ đã được chuyển đến mục <a href="{$a->url}">{$a->urlname}</a>.';
$string['movedqrtopremiumfeatures'] = 'Quyền truy cập bằng mã QR đã được chuyển đến mục <a href="{$a->url}">{$a->urlname}</a>. Mục này bao gồm cả mã QR cơ bản (miễn phí) và đăng nhập tự động bằng mã QR ({$a->upgradename}).';
$string['new'] = '(Mới! ⭐️)';
$string['nosubsblocked'] = 'Máy chủ Moodle của bạn có thể đang chặn kết nối đi đến Cổng Moodle Apps.';
$string['nosubscouldntretrieve'] = 'Không thể lấy thông tin chi tiết về gói của bạn';
$string['nosubsoerror'] = 'Không thể kết nối với Cổng Moodle Apps. Gói, giới hạn tính năng và dữ liệu sử dụng của bạn hiện tạm thời không khả dụng. Điều này không ảnh hưởng đến gói đăng ký đang hoạt động của bạn.';
$string['nosubstryagain'] = 'Thử lại';
$string['nosubsviewplan'] = 'Xem gói của bạn trên Cổng Moodle Apps';
$string['nosubswhyhappen'] = 'Vì sao điều này có thể xảy ra?';
$string['notifications'] = 'Thông báo';
$string['notificationsactivedevices'] = 'Thiết bị đang hoạt động';
$string['notificationscurrentactivedevices'] = 'Thiết bị nhận thông báo trong tháng này';
$string['notificationsignorednotifications'] = 'Thông báo chưa gửi';
$string['notificationslimitreached'] = 'Đã đạt giới hạn thiết bị hàng tháng. Một số người dùng không nhận được thông báo đẩy. Hãy nâng cấp gói để đảm bảo tất cả người dùng nhận được thông báo trên thiết bị di động.';
$string['notificationsmissingwarning'] = 'Không thể lấy thống kê thông báo của Moodle app. Hãy đảm bảo đã bật thông báo di động tại <a href="{$a}">Quản trị trang web > Nhắn tin > Di động</a>.';
$string['notificationsnewdevices'] = 'Thiết bị mới';
$string['notificationsseemore'] = 'Lưu ý: Thống kê sử dụng Moodle app không được tính theo thời gian thực. Để xem thống kê chi tiết hơn, bao gồm dữ liệu của các tháng trước, hãy đăng nhập vào <a href="{$a}" target="_blank">Cổng Moodle Apps</a>.';
$string['notificationssentnotifications'] = 'Thông báo đã gửi';
$string['oauth2identityproviders'] = 'Nhà cung cấp danh tính OAuth 2';
$string['offlineuse'] = 'Sử dụng ngoại tuyến';
$string['planbenefits'] = 'Quyền lợi của gói {$a} của bạn';
$string['plancontinues'] = 'Gói {$a} của bạn tiếp tục mà không có thay đổi';
$string['plandetails'] = 'Gói đăng ký Moodle app của bạn';
$string['planexpireson'] = 'Hết hạn vào {$a}.';
$string['planfeatures'] = 'Tính năng {$a}';
$string['planlastchecked'] = 'Trạng thái gói được kiểm tra lần cuối vào {$a}.';
$string['planneverchecked'] = 'Trạng thái gói chưa từng được kiểm tra.';
$string['pluginname'] = 'Công cụ Moodle app';
$string['pluginnotenabledorconfigured'] = 'Plugin chưa được bật hoặc cấu hình.';
$string['premiumfeatureonly'] = 'Chỉ dành cho tính năng cao cấp';
$string['premiumfeatures'] = 'Tính năng cao cấp';
$string['premiumonly'] = 'Chỉ dành cho gói cao cấp';
$string['privacy:metadata:core_userkey'] = 'Các khóa của người dùng được dùng để tạo khóa đăng nhập tự động cho người dùng hiện tại.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Ngày yêu cầu khóa đăng nhập tự động gần nhất. Cần cách nhau 6 phút giữa mỗi lần yêu cầu.';
$string['qrcodedisabled'] = 'Đã tắt quyền truy cập bằng mã QR';
$string['qrcodeformobileappaccess'] = 'Mã QR để truy cập bằng ứng dụng di động';
$string['qrcodeformobileapploginabout'] = 'Quét mã QR bằng ứng dụng di động để tự động đăng nhập. Mã QR sẽ hết hạn sau {$a}.';
$string['qrcodeformobileappurlabout'] = 'Quét mã QR bằng ứng dụng di động để điền URL trang web vào ứng dụng.';
$string['qrcodetype'] = 'Truy cập bằng mã QR';
$string['qrcodetype_desc'] = 'Người dùng thiết bị di động có thể quét mã QR để điền URL trang web. Với các trang web bảo mật (HTTPS), mã này cũng cho phép đăng nhập tự động mà không cần người dùng nhập tên đăng nhập và mật khẩu.';
$string['qrcodetypelogin'] = 'Mã QR có đăng nhập tự động';
$string['qrcodetypeloginonlypremium'] = 'Mã QR có đăng nhập tự động chỉ khả dụng trong gói Premium. Hãy nâng cấp để sử dụng tính năng này. <a href="{$a->url}">Xem chi tiết gói</a>.';
$string['qrcodetypeurl'] = 'Mã QR có URL trang web (miễn phí)';
$string['qrkeyttl'] = 'Thời hạn khóa xác thực QR';
$string['qrkeyttl_desc'] = 'Khoảng thời gian mã QR dùng để đăng nhập tự động còn hiệu lực.';
$string['qrsameipcheck'] = 'Kiểm tra cùng địa chỉ IP khi xác thực QR';
$string['qrsameipcheck_desc'] = 'Xác định xem người dùng có phải sử dụng cùng một mạng để tạo và quét mã QR đăng nhập hay không. Chỉ tắt tùy chọn này nếu người dùng báo gặp sự cố khi đăng nhập bằng QR.';
$string['qrsiteadminsnotallowed'] = 'Vì lý do bảo mật, quản trị viên trang web không được phép đăng nhập bằng mã QR, hoặc không được phép nếu bạn đang đăng nhập với tư cách người dùng khác.';
$string['readingthisemailgettheapp'] = 'Bạn đang đọc email này? <a href="{$a}">Tải ứng dụng di động và nhận thông báo trên thiết bị di động</a>.';
$string['refreshplanstatus'] = 'Làm mới trạng thái gói';
$string['register'] = 'Đăng ký';
$string['remoteaddons'] = 'Tiện ích bổ sung từ xa';
$string['responsivemainmenuitems'] = 'Mục menu đáp ứng';
$string['scanqrcode'] = 'Quét mã QR';
$string['scriptallowlist'] = 'Các miền JavaScript được cho phép';
$string['scriptallowlist_desc'] = 'Nhập các miền được phép tải tệp JavaScript bên ngoài trong Moodle app khi phát hiện chúng trong nội dung HTML do người dùng tạo.<br>
Mỗi miền phải được nhập trên một dòng riêng. Các tập lệnh có nguồn từ một trong các miền được liệt kê sẽ được phép tải. Các tập lệnh từ những miền khác sẽ tiếp tục bị chặn.<br>
JavaScript nội tuyến luôn bị chặn và không thể được cho phép.';
$string['sectionnavigation'] = 'Điều hướng mục tuần tự';
$string['selfsignedoruntrustedcertificatewarning'] = 'Có vẻ như chứng chỉ HTTPS tự ký hoặc không đáng tin cậy. Ứng dụng di động chỉ hoạt động với các trang web đáng tin cậy. Vui lòng dùng một công cụ kiểm tra SSL trực tuyến để chẩn đoán sự cố. Nếu công cụ cho biết chứng chỉ của bạn ổn, bạn có thể bỏ qua cảnh báo này.';
$string['setuplink'] = 'Trang tải ứng dụng';
$string['setuplink_desc'] = 'URL của trang có các tùy chọn tải ứng dụng di động từ App Store và Google Play. Liên kết đến trang tải ứng dụng được hiển thị ở chân trang và trong hồ sơ người dùng. Để trống nếu không muốn hiển thị liên kết.';
$string['shortentext'] = 'Rút ngắn văn bản trên màn hình nhỏ';
$string['showingcacheddata'] = 'Đồng bộ lần cuối: {$a->since} ngày trước ({$a->date}).';
$string['showinglivedata'] = 'Xem dữ liệu trực tiếp trên <a href="{$a}" target="_blank">Cổng Moodle Apps</a>.';
$string['showlogoinappheader'] = 'Hiển thị logo trong phần đầu ứng dụng';
$string['showlogoinappheader_desc'] = 'Hiển thị logo trang web trong phần đầu trang chủ và bảng điều khiển của ứng dụng di động thay cho tên trang web. Cần tải logo lên tại Quản trị trang web > Giao diện.';
$string['siteplugins'] = 'Plugin trang web';
$string['smartappbanners'] = 'Biểu ngữ ứng dụng';
$string['statisticstemporarilyunavailable'] = 'Thống kê thông báo hiện tạm thời không khả dụng. Thông báo vẫn được gửi như bình thường. Vui lòng kiểm tra lại sau.';
$string['subscription'] = 'Gói đăng ký';
$string['subscriptioncreated'] = 'Ngày bắt đầu';
$string['subscriptionerrorrequest'] = 'Đã xảy ra lỗi ngoài dự kiến khi cố lấy thông tin gói đăng ký Moodle app của bạn.';
$string['subscriptionexpiration'] = 'Ngày hết hạn';
$string['subscriptionfeaturenotapplied'] = 'Tính năng này đã được cấu hình trên trang web của bạn nhưng không nằm trong gói Moodle app. Vì vậy, cài đặt này sẽ không có tác dụng.';
$string['subscriptionfeatures'] = 'Tính năng trong gói đăng ký';
$string['subscriptionlimitsurpassed'] = 'Đã vượt quá giới hạn gói đăng ký';
$string['subscriptionregister'] = 'Để biết chi tiết về các gói ứng dụng khác nhau và xem thống kê sử dụng Moodle app, vui lòng truy cập <a href="{$a}" target="_blank">Cổng Moodle Apps</a>.';
$string['subscriptionsseemore'] = 'Lưu ý: Thông tin hiển thị không được cập nhật theo thời gian thực. Bạn có thể cần đăng xuất rồi đăng nhập lại để xem thông tin cập nhật. Để biết cách nâng cấp gói ứng dụng, vui lòng đăng nhập vào <a href="{$a}" target="_blank">Cổng Moodle Apps</a>.';
$string['switchaccount'] = 'Chuyển tài khoản';
$string['tasknotifypushnotificationlimittoadmins'] = 'Thông báo cho quản trị viên khi đạt giới hạn thông báo đẩy của ứng dụng di động';
$string['taskrefreshsubscriptioncache'] = 'Làm mới bộ nhớ đệm thông tin gói đăng ký Moodle app';
$string['typeoflogin'] = 'Kiểu đăng nhập';
$string['typeoflogin_desc'] = 'Nếu trang web sử dụng phương thức xác thực Đăng nhập một lần (SSO), hãy chọn đăng nhập qua cửa sổ trình duyệt hoặc qua trình duyệt nhúng. Trình duyệt nhúng mang lại trải nghiệm người dùng tốt hơn, nhưng không hoạt động với tất cả plugin SSO.';
$string['upgradeforunlimit'] = 'Nâng cấp lên {$a} để được truy cập không giới hạn.';
$string['upgradeplanlimits'] = 'Một số tính năng có giới hạn trong gói {$a}.';
$string['upgraderemovelimits'] = 'Nâng cấp lên {$a} để gỡ bỏ mọi giới hạn';
$string['upgradetosubscription'] = 'Nâng cấp lên {$a}';
$string['upgradeyourplan'] = '(Nâng cấp gói của bạn! 🚀)';
$string['upgradeyourplanaction'] = 'Nâng cấp gói của bạn';
$string['viewqrcode'] = 'Xem mã QR';

// Added for Moodle 5.3.1+ missing strings.
$string['learnmoreplan'] = 'Để tìm hiểu thêm về ứng dụng Moodle và các gói của ứng dụng, hãy xem <a href="{$a->url}" target="{$a->target}">tài liệu về các gói ứng dụng Moodle{$a->icon}</a>.';
$string['messagegreeting'] = 'Bạn nhận được thông báo này vì bạn là quản trị viên của {$a}.';
