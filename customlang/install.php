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
 * @subpackage install
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Thư mục quản trị được chỉ định không chính xác';
$string['admindirname'] = 'Thư mục quản trị';
$string['admindirsetting'] = 'Một số rất ít máy chủ web sử dụng /admin làm URL đặc biệt để bạn truy cập bảng điều khiển hoặc chức năng tương tự. Thật không may, URL này xung đột với vị trí chuẩn của các trang quản trị Moodle. Bạn có thể khắc phục bằng cách đổi tên thư mục quản trị trong bản cài đặt rồi nhập tên mới tại đây. Ví dụ: <br /> <br /><b>moodleadmin</b><br /> <br /> Thao tác này sẽ sửa các liên kết quản trị trong Moodle.';
$string['admindirsettinghead'] = 'Đang thiết lập thư mục quản trị ...';
$string['admindirsettingsub'] = 'Một số rất ít máy chủ web sử dụng /admin làm URL đặc biệt để bạn truy cập bảng điều khiển hoặc chức năng tương tự. Thật không may, URL này xung đột với vị trí chuẩn của các trang quản trị Moodle. Bạn có thể khắc phục bằng cách đổi tên thư mục quản trị trong bản cài đặt rồi nhập tên mới tại đây. Ví dụ: <br /> <br /><b>moodleadmin</b><br /> <br /> Thao tác này sẽ sửa các liên kết quản trị trong Moodle.';
$string['availablelangs'] = 'Gói ngôn ngữ hiện có';
$string['caution'] = 'Thận trọng';
$string['chooselanguage'] = 'Chọn ngôn ngữ';
$string['chooselanguagehead'] = 'Chọn ngôn ngữ';
$string['chooselanguagesub'] = 'Vui lòng chọn ngôn ngữ cho quá trình cài đặt. Ngôn ngữ này cũng sẽ được dùng làm ngôn ngữ mặc định của trang web, nhưng bạn có thể thay đổi sau.';
$string['cliadminemail'] = 'Địa chỉ email của người dùng quản trị mới';
$string['cliadminpassword'] = 'Mật khẩu của người dùng quản trị mới';
$string['cliadminusername'] = 'Tên người dùng của tài khoản quản trị';
$string['clialreadyconfigured'] = 'Tệp cấu hình config.php đã tồn tại. Vui lòng sử dụng admin/cli/install_database.php để cài đặt Moodle cho trang này.';
$string['clialreadyinstalled'] = 'Tệp cấu hình config.php đã tồn tại. Vui lòng sử dụng admin/cli/install_database.php để nâng cấp Moodle cho trang này.';
$string['cliinstallfinished'] = 'Cài đặt hoàn tất thành công.';
$string['cliinstallheader'] = 'Chương trình cài đặt dòng lệnh Moodle {$a}';
$string['climustagreelicense'] = 'Trong chế độ không tương tác, bạn phải đồng ý với giấy phép bằng cách chỉ định tùy chọn --agree-license';
$string['clinoreplyemail'] = 'Địa chỉ email không trả lời';
$string['cliskipdatabase'] = 'Bỏ qua cài đặt cơ sở dữ liệu.';
$string['clisupportemail'] = 'Địa chỉ email hỗ trợ';
$string['clitablesexist'] = 'Các bảng cơ sở dữ liệu đã tồn tại; không thể tiếp tục cài đặt bằng Giao diện dòng lệnh (CLI).';
$string['compatibilitysettings'] = 'Đang kiểm tra cài đặt PHP của bạn ...';
$string['compatibilitysettingshead'] = 'Đang kiểm tra cài đặt PHP của bạn ...';
$string['compatibilitysettingssub'] = 'Máy chủ của bạn cần vượt qua tất cả các kiểm tra này để Moodle hoạt động chính xác';
$string['configfilenotwritten'] = 'Trình cài đặt không thể tự động tạo tệp config.php chứa các cài đặt bạn đã chọn, có thể vì thư mục Moodle không có quyền ghi. Bạn có thể tự sao chép mã sau vào một tệp có tên config.php trong thư mục gốc của Moodle.';
$string['configfilewritten'] = 'Đã tạo config.php thành công';
$string['configurationcomplete'] = 'Đã hoàn tất cấu hình';
$string['configurationcompletehead'] = 'Đã hoàn tất cấu hình';
$string['configurationcompletesub'] = 'Moodle đã thử lưu cấu hình của bạn vào một tệp trong thư mục gốc của bản cài đặt Moodle.';
$string['database'] = 'Cơ sở dữ liệu';
$string['databasehead'] = 'Cài đặt cơ sở dữ liệu';
$string['databasehost'] = 'Máy chủ cơ sở dữ liệu';
$string['databasename'] = 'Tên cơ sở dữ liệu';
$string['databasepass'] = 'Mật khẩu cơ sở dữ liệu';
$string['databaseport'] = 'Cổng cơ sở dữ liệu';
$string['databasesocket'] = 'Unix socket';
$string['databasetypehead'] = 'Chọn trình điều khiển cơ sở dữ liệu';
$string['databasetypesub'] = 'Moodle hỗ trợ một số loại máy chủ cơ sở dữ liệu. Nếu bạn không biết nên dùng loại nào, hãy liên hệ với quản trị viên máy chủ.';
$string['databaseuser'] = 'Người dùng cơ sở dữ liệu';
$string['dataroot'] = 'Thư mục dữ liệu';
$string['datarooterror'] = 'Không tìm thấy hoặc không thể tạo \'thư mục dữ liệu\' bạn đã chỉ định. Hãy sửa đường dẫn hoặc tự tạo thư mục đó.';
$string['datarootpermission'] = 'Quyền của thư mục dữ liệu';
$string['datarootpublicerror'] = '\'Thư mục dữ liệu\' bạn chỉ định có thể được truy cập trực tiếp qua web; bạn phải sử dụng một thư mục khác.';
$string['dbconnectionerror'] = 'Không thể kết nối với cơ sở dữ liệu bạn đã chỉ định. Vui lòng kiểm tra cài đặt cơ sở dữ liệu.';
$string['dbcreationerror'] = 'Lỗi tạo cơ sở dữ liệu. Không thể tạo cơ sở dữ liệu có tên đã cho với các cài đặt được cung cấp';
$string['dbhost'] = 'Máy chủ';
$string['dbpass'] = 'Mật khẩu';
$string['dbport'] = 'Cổng';
$string['dbprefix'] = 'Tiền tố bảng';
$string['dbtype'] = 'Loại';
$string['directorysettings'] = '<p>Vui lòng xác nhận các vị trí của bản cài đặt Moodle này.</p>

<p><b>Địa chỉ web:</b>
Chỉ định địa chỉ web đầy đủ để truy cập Moodle.
Nếu trang web của bạn có thể truy cập qua nhiều URL, hãy chọn URL
phù hợp nhất mà học viên sẽ sử dụng. Không thêm dấu gạch chéo
ở cuối.</p>

<p><b>Thư mục Moodle:</b>
Chỉ định đường dẫn thư mục đầy đủ đến bản cài đặt này.
Đảm bảo chữ hoa và chữ thường chính xác.</p>

<p><b>Thư mục dữ liệu:</b>
Bạn cần một vị trí để Moodle lưu các tệp được tải lên. Thư mục này
phải có quyền đọc VÀ GHI đối với người dùng máy chủ web
(thường là \'nobody\' hoặc \'apache\'), nhưng không được phép truy cập
trực tiếp qua web. Trình cài đặt sẽ thử tạo thư mục nếu thư mục chưa tồn tại.</p>';
$string['directorysettingshead'] = 'Vui lòng xác nhận các vị trí của bản cài đặt Moodle này';
$string['directorysettingssub'] = '<b>Địa chỉ web:</b>
Chỉ định địa chỉ web đầy đủ để truy cập Moodle.
Nếu trang web của bạn có thể truy cập qua nhiều URL, hãy chọn URL
phù hợp nhất mà học viên sẽ sử dụng. Không thêm dấu gạch chéo
ở cuối.
<br />
<br />
<b>Thư mục Moodle:</b>
Chỉ định đường dẫn thư mục đầy đủ đến bản cài đặt này.
Đảm bảo chữ hoa và chữ thường chính xác.
<br />
<br />
<b>Thư mục dữ liệu:</b>
Bạn cần một vị trí để Moodle lưu các tệp được tải lên. Thư mục này
phải có quyền đọc VÀ GHI đối với người dùng máy chủ web
(thường là \'nobody\' hoặc \'apache\'), nhưng không được phép truy cập
trực tiếp qua web. Trình cài đặt sẽ thử tạo thư mục nếu thư mục chưa tồn tại.';
$string['dirroot'] = 'Thư mục Moodle';
$string['dirrooterror'] = 'Cài đặt \'Thư mục Moodle\' có vẻ không chính xác - chúng tôi không tìm thấy bản cài đặt Moodle tại đó. Giá trị bên dưới đã được đặt lại.';
$string['download'] = 'Tải xuống';
$string['downloadlanguagebutton'] = 'Tải xuống gói ngôn ngữ &quot;{$a}&quot;';
$string['downloadlanguagehead'] = 'Tải xuống gói ngôn ngữ';
$string['downloadlanguagenotneeded'] = 'Bạn có thể tiếp tục quá trình cài đặt bằng gói ngôn ngữ mặc định, "{$a}".';
$string['downloadlanguagesub'] = 'Bây giờ bạn có thể tải xuống gói ngôn ngữ và tiếp tục quá trình cài đặt bằng ngôn ngữ này.<br /><br />Nếu không thể tải xuống gói ngôn ngữ, quá trình cài đặt sẽ tiếp tục bằng tiếng Anh. (Sau khi hoàn tất cài đặt, bạn sẽ có cơ hội tải xuống và cài đặt thêm các gói ngôn ngữ khác.)';
$string['doyouagree'] = 'Bạn có đồng ý không? (có/không):';
$string['environmenthead'] = 'Đang kiểm tra môi trường ...';
$string['environmentsub'] = 'Chúng tôi đang kiểm tra xem các thành phần khác nhau của hệ thống có đáp ứng yêu cầu hệ thống hay không';
$string['environmentsub2'] = 'Mỗi bản phát hành Moodle yêu cầu một phiên bản PHP tối thiểu và một số tiện ích mở rộng PHP bắt buộc.
Việc kiểm tra toàn bộ môi trường được thực hiện trước mỗi lần cài đặt và nâng cấp. Nếu bạn không biết cách cài phiên bản mới hoặc bật tiện ích mở rộng PHP, hãy liên hệ với quản trị viên máy chủ.';
$string['errorsinenvironment'] = 'Kiểm tra môi trường không thành công!';
$string['fail'] = 'Thất bại';
$string['fileuploads'] = 'Tải tệp lên';
$string['fileuploadserror'] = 'Tùy chọn này phải được bật';
$string['fileuploadshelp'] = '<p>Tính năng tải tệp lên có vẻ đang bị tắt trên máy chủ của bạn.</p>

<p>Bạn vẫn có thể cài đặt Moodle, nhưng nếu không có tính năng này, bạn sẽ không thể
   tải lên tệp khóa học hoặc ảnh hồ sơ người dùng mới.</p>

<p>Để bật tính năng tải tệp lên, bạn (hoặc quản trị viên hệ thống) cần
   chỉnh sửa tệp php.ini chính trên hệ thống và đổi giá trị cài đặt
   <b>file_uploads</b> thành \'1\'.</p>';
$string['inputdatadirectory'] = 'Thư mục dữ liệu:';
$string['inputwebadress'] = 'Địa chỉ web:';
$string['inputwebdirectory'] = 'Thư mục Moodle:';
$string['installation'] = 'Cài đặt';
$string['invaliddbprefix'] = 'Tiền tố không hợp lệ. Tiền tố chỉ được gồm chữ thường và dấu gạch dưới.';
$string['langdownloaderror'] = 'Rất tiếc, không thể tải xuống ngôn ngữ "{$a}". Quá trình cài đặt sẽ tiếp tục bằng tiếng Anh.';
$string['langdownloadok'] = 'Đã cài đặt thành công ngôn ngữ "{$a}". Quá trình cài đặt sẽ tiếp tục bằng ngôn ngữ này.';
$string['memorylimit'] = 'Giới hạn bộ nhớ';
$string['memorylimiterror'] = 'Giới hạn bộ nhớ PHP được đặt khá thấp ... bạn có thể gặp sự cố sau này.';
$string['mysqliextensionisnotpresentinphp'] = 'PHP chưa được cấu hình đúng với tiện ích mở rộng MySQLi để giao tiếp với MySQL. Vui lòng kiểm tra tệp php.ini hoặc biên dịch lại PHP.';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p>Cơ sở dữ liệu là nơi lưu trữ phần lớn cài đặt và dữ liệu của Moodle, vì vậy cần được cấu hình tại đây.</p>
<p>Tên cơ sở dữ liệu, tên người dùng và mật khẩu là các trường bắt buộc; tiền tố bảng là tùy chọn.</p>
<p>Tên cơ sở dữ liệu chỉ được chứa chữ và số, ký hiệu đô la ($) và dấu gạch dưới (_).</p>
<p>Nếu cơ sở dữ liệu hiện chưa tồn tại và người dùng bạn chỉ định có quyền, Moodle sẽ thử tạo cơ sở dữ liệu mới với quyền và cài đặt phù hợp.</p>
<p>Trình điều khiển này không tương thích với công cụ MyISAM cũ.</p>';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>Cơ sở dữ liệu là nơi lưu trữ phần lớn cài đặt và dữ liệu của Moodle, vì vậy cần được cấu hình tại đây.</p>
<p>Tên cơ sở dữ liệu, tên người dùng và mật khẩu là các trường bắt buộc; tiền tố bảng là tùy chọn.</p>
<p>Tên cơ sở dữ liệu chỉ được chứa chữ và số, ký hiệu đô la ($) và dấu gạch dưới (_).</p>
<p>Nếu cơ sở dữ liệu hiện chưa tồn tại và người dùng bạn chỉ định có quyền, Moodle sẽ thử tạo cơ sở dữ liệu mới với quyền và cài đặt phù hợp.</p>
<p>Trình điều khiển này không tương thích với công cụ MyISAM cũ.</p>';
$string['nativemysqli'] = 'MySQL cải tiến (native/mysqli)';
$string['nativemysqlihelp'] = '<p>Cơ sở dữ liệu là nơi lưu trữ phần lớn cài đặt và dữ liệu của Moodle, vì vậy cần được cấu hình tại đây.</p>
<p>Tên cơ sở dữ liệu, tên người dùng và mật khẩu là các trường bắt buộc; tiền tố bảng là tùy chọn.</p>
<p>Tên cơ sở dữ liệu chỉ được chứa chữ và số, ký hiệu đô la ($) và dấu gạch dưới (_).</p>
<p>Nếu cơ sở dữ liệu hiện chưa tồn tại và người dùng bạn chỉ định có quyền, Moodle sẽ thử tạo cơ sở dữ liệu mới với quyền và cài đặt phù hợp.</p>';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>Cơ sở dữ liệu là nơi lưu trữ phần lớn cài đặt và dữ liệu của Moodle, vì vậy cần được cấu hình tại đây.</p>
<p>Tên cơ sở dữ liệu, tên người dùng, mật khẩu và tiền tố bảng là các trường bắt buộc.</p>
<p>Cơ sở dữ liệu phải tồn tại trước và người dùng phải có quyền đọc cũng như ghi vào cơ sở dữ liệu đó.</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Bây giờ bạn cần cấu hình cơ sở dữ liệu nơi lưu trữ phần lớn dữ liệu Moodle.
Cơ sở dữ liệu này phải được tạo trước, đồng thời phải tạo tên người dùng và mật khẩu để truy cập. Bắt buộc phải có tiền tố bảng.';
$string['nativesqlsrvnodriver'] = 'Microsoft Drivers for SQL Server for PHP chưa được cài đặt hoặc chưa được cấu hình đúng.';
$string['pass'] = 'Đạt';
$string['paths'] = 'Đường dẫn';
$string['pathserrcreatedataroot'] = 'Trình cài đặt không thể tạo thư mục dữ liệu ({$a->dataroot}).';
$string['pathshead'] = 'Xác nhận đường dẫn';
$string['pathsrodataroot'] = 'Không thể ghi vào thư mục gốc dữ liệu.';
$string['pathsroparentdataroot'] = 'Không thể ghi vào thư mục cha ({$a->parent}). Trình cài đặt không thể tạo thư mục dữ liệu ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Một số ít nhà cung cấp dịch vụ lưu trữ web sử dụng /admin làm URL đặc biệt để bạn truy cập bảng điều khiển hoặc một chức năng tương tự. Điều này không may xung đột với vị trí tiêu chuẩn của các trang quản trị Moodle. Bạn có thể khắc phục bằng cách đổi tên thư mục admin trong bản cài đặt và nhập tên mới tại đây. Ví dụ: <em>moodleadmin</em>. Thao tác này sẽ sửa các liên kết quản trị trong Moodle.';
$string['pathssubdataroot'] = '<p>Thư mục nơi Moodle sẽ lưu tất cả nội dung tệp do người dùng tải lên.</p>
<p>Người dùng máy chủ web (thường là \'www-data\', \'nobody\' hoặc \'apache\') cần có quyền đọc và ghi vào thư mục này.</p>
<p>Không được phép truy cập trực tiếp vào thư mục này qua web.</p>
<p>Nếu thư mục hiện chưa tồn tại, quá trình cài đặt sẽ thử tạo thư mục đó.</p>';
$string['pathssubdirroot'] = '<p>Đường dẫn đầy đủ đến thư mục chứa mã Moodle.</p>';
$string['pathssubwwwroot'] = '<p>Địa chỉ đầy đủ để truy cập Moodle, tức địa chỉ người dùng nhập vào thanh địa chỉ của trình duyệt để truy cập Moodle.</p>
<p>Không thể truy cập Moodle bằng nhiều địa chỉ. Nếu trang web của bạn có thể truy cập qua nhiều địa chỉ, hãy chọn địa chỉ dễ dùng nhất và thiết lập chuyển hướng vĩnh viễn từ mỗi địa chỉ còn lại.</p>
<p>Nếu có thể truy cập trang web từ cả Internet lẫn mạng nội bộ (đôi khi gọi là Intranet), hãy dùng địa chỉ công khai tại đây.</p>
<p>Nếu địa chỉ hiện tại không chính xác, vui lòng thay đổi URL trong thanh địa chỉ của trình duyệt rồi khởi động lại quá trình cài đặt.</p>';
$string['pathsunsecuredataroot'] = 'Vị trí thư mục gốc dữ liệu không an toàn';
$string['pathswrongadmindir'] = 'Thư mục quản trị không tồn tại';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP chưa được cấu hình đúng với tiện ích mở rộng PGSQL để giao tiếp với PostgreSQL. Vui lòng kiểm tra tệp php.ini hoặc biên dịch lại PHP.';
$string['phpextension'] = 'Tiện ích mở rộng PHP {$a}';
$string['phpversion'] = 'Phiên bản PHP';
$string['releasenoteslink'] = 'Để biết thông tin về phiên bản Moodle này, vui lòng xem ghi chú phát hành tại {$a}';
$string['safemode'] = 'Chế độ an toàn';
$string['safemodeerror'] = 'Moodle có thể gặp sự cố khi bật chế độ an toàn';
$string['safemodehelp'] = '<p>Moodle có thể gặp nhiều sự cố khi bật chế độ an toàn; đáng chú ý nhất là
   có thể Moodle sẽ không được phép tạo tệp mới.</p>

<p>Chế độ an toàn thường chỉ được bật bởi các nhà cung cấp dịch vụ lưu trữ web công cộng quá thận trọng, vì vậy có thể bạn sẽ phải
   tìm một nhà cung cấp dịch vụ lưu trữ web khác cho trang Moodle của mình.</p>

<p>Nếu muốn, bạn có thể thử tiếp tục cài đặt, nhưng hãy dự kiến sẽ gặp một số sự cố sau này.</p>';
$string['sessionautostart'] = 'Tự động khởi tạo phiên';
$string['sessionautostarterror'] = 'Tùy chọn này phải được tắt';
$string['sessionautostarthelp'] = '<p>Moodle yêu cầu hỗ trợ phiên và sẽ không hoạt động nếu thiếu tính năng này.</p>

<p>Có thể bật phiên trong tệp php.ini ... hãy tìm tham số session.auto_start.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP chưa được cấu hình đúng với tiện ích mở rộng SQLite. Vui lòng kiểm tra tệp php.ini hoặc biên dịch lại PHP.';
$string['upgradingqtypeplugin'] = 'Nâng cấp plugin question/type';
$string['webserverconfigproblemdescription'] = 'Máy chủ web của bạn chưa được cấu hình để ngăn truy cập vào các tệp bên ngoài thư mục /public. Để biết cách cấu hình máy chủ web chính xác, hãy xem tài liệu <a href="https://docs.moodle.org/en/Upgrading#Code_directories_restructure">Nâng cấp - Tái cấu trúc thư mục mã</a>. Sau khi cấu hình lại, hãy <a href="{$a}">truy cập lại thư mục gốc web</a>.';
$string['webservernotconfigured'] = 'Máy chủ web chưa được cấu hình';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Bạn đang thấy trang này vì đã cài đặt và khởi chạy thành công gói <strong>{$a->packname} {$a->packversion}</strong> trên máy tính của mình. Xin chúc mừng!';
$string['welcomep30'] = 'Bản phát hành này của <strong>{$a->installername}</strong> bao gồm các ứng dụng
    để tạo môi trường cho <strong>Moodle</strong> hoạt động, cụ thể là:';
$string['welcomep40'] = 'Gói này cũng bao gồm <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Việc sử dụng tất cả ứng dụng trong gói này chịu sự điều chỉnh của giấy phép tương ứng. Toàn bộ gói <strong>{$a->installername}</strong> là <a href="https://www.opensource.org/docs/definition_plain.html">mã nguồn mở</a> và được phân phối theo giấy phép <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Các trang tiếp theo sẽ hướng dẫn bạn qua một số bước đơn giản để
    cấu hình và thiết lập <strong>Moodle</strong> trên máy tính. Bạn có thể chấp nhận các
    cài đặt mặc định hoặc tùy chọn điều chỉnh chúng cho phù hợp với nhu cầu của mình.';
$string['welcomep70'] = 'Nhấp vào nút "Tiếp theo" bên dưới để tiếp tục thiết lập <strong>Moodle</strong>.';
$string['wwwroot'] = 'Địa chỉ web';
$string['wwwrooterror'] = '\'Địa chỉ web\' có vẻ không hợp lệ - có vẻ như không có bản cài đặt Moodle nào tại địa chỉ này. Giá trị bên dưới đã được đặt lại.';
