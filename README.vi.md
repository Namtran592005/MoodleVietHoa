# Gói ngôn ngữ tiếng Việt cho Moodle

Gói ngôn ngữ tiếng Việt và các chuỗi ngôn ngữ tùy biến dành cho **Moodle LMS 5.3.1+**.

Repository này chứa bộ file ngôn ngữ tiếng Việt đã hoàn thiện cho Moodle 5.3.1+. Các giá trị tiếng Anh có tính chất trung lập về ngôn ngữ, thuật ngữ kỹ thuật, mã hệ thống, tên sản phẩm hoặc giá trị cần giữ nguyên được bảo toàn theo chủ ý.

## Nội dung chính

- Bao phủ source ngôn ngữ production của Moodle 5.3.1+.
- Có đầy đủ các khóa chuỗi được tìm thấy trong source core Moodle 5.3.1+ dùng để đối chiếu.
- Bổ sung bản dịch tiếng Việt cho 41 khóa còn thiếu trong gói ban đầu.
- Giữ nguyên các giá trị tiếng Anh cần thiết như múi giờ, mã quốc gia, mã kỹ thuật, tên sản phẩm và các giá trị hệ thống khác.
- Bao gồm các chuỗi tùy biến của giao diện `theme_academi.php` có trong gói gốc.

## Cấu trúc repository

```text
MoodleVietHoa/
├── customlang/                         # Các file PHP ngôn ngữ để import
├── dist/
│   └── customlang_vi_moodle531_completed.zip
├── README.md                            # Tài liệu tiếng Anh
└── README.vi.md                         # Tài liệu tiếng Việt
```

Các file trong `customlang/` được giữ ở dạng phẳng, đúng với cấu trúc gói custom language của Moodle. File ZIP trong `dist/` là gói đã đóng sẵn để import và vẫn giữ các file PHP ở thư mục gốc bên trong ZIP.

## Cài đặt

1. Tải file [`dist/customlang_vi_moodle531_completed.zip`](dist/customlang_vi_moodle531_completed.zip), hoặc tự tạo file ZIP chứa trực tiếp các file PHP bên trong thư mục `customlang/`.
2. Đăng nhập Moodle bằng tài khoản quản trị viên.
3. Mở **Quản trị trang → Ngôn ngữ → Tùy biến ngôn ngữ**.
4. Chọn tiếng Việt (`vi`) và tải gói ngôn ngữ nếu Moodle yêu cầu.
5. Import hoặc áp dụng các chuỗi ngôn ngữ tùy biến theo quy trình quản trị Moodle của bạn.
6. Xóa cache Moodle sau khi import để các thay đổi có hiệu lực.

Tên menu có thể khác đôi chút tùy theo ngôn ngữ quản trị và các plugin đang cài đặt trên hệ thống.

## Tương thích

- Phiên bản mục tiêu: **Moodle LMS 5.3.1+**
- Nhánh/release dùng để đối chiếu: **MOODLE_5031 / Moodle 5.3.1+**
- Định dạng: các file PHP custom language của Moodle
- Bảng mã: UTF-8

Gói này dành cho Moodle 5.3.1+. Các phiên bản Moodle khác có thể bổ sung, xóa hoặc đổi tên khóa chuỗi. Nên đối chiếu lại với source của phiên bản Moodle đích trước khi sử dụng cho một phiên bản khác.

## Mức độ bao phủ

Gói đã được đối chiếu với source ngôn ngữ production của Moodle 5.3.1+:

- Đã đối chiếu 490 file ngôn ngữ production.
- Đã kiểm tra 33.159 khóa chuỗi trong source.
- Không còn khóa source nào bị thiếu trong gói hoàn chỉnh.
- Có 1.312 giá trị vẫn giống tiếng Anh theo chủ ý hoặc vì đó là giá trị trung lập về ngôn ngữ.

Trong tài liệu này, “đầy đủ” có nghĩa là mọi khóa chuỗi trong source đều có mục tương ứng trong gói. Điều đó không có nghĩa mọi mã kỹ thuật, tên riêng, mã hệ thống hoặc giá trị đặc thù của nền tảng đều được chuyển sang tiếng Việt.

## Giấy phép và ghi công

Moodle được phân phối theo GNU General Public License phiên bản 3. Repository này chứa các file tùy biến ngôn ngữ để sử dụng với Moodle. Khi phân phối lại file đã chỉnh sửa, hãy kiểm tra điều khoản giấy phép của bản Moodle và các plugin hoặc giao diện bên thứ ba có liên quan.

Đây là gói tùy biến ngôn ngữ tiếng Việt độc lập, không phải bản phát hành chính thức của Moodle.
