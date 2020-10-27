Tài liệu hướng dẫn để cài đặt lên webserver
1. Download code và giải nén về thư mục htdocs trong XAMPP
2. Đăng nhập vào phpmyadmin
3. Tạo cơ sở dữ liệu tên là: dangky
4. Chạy đoạn mã SQL sau trong CSDL vừa tạo:
CREATE TABLE persion(
	id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    phone VARCHAR(50),
    email VARCHAR(50) NOT NULL,
    province VARCHAR(50) NOT NULL,
    district VARCHAR(50) NOT NULL,
    ward VARCHAR(50) NOT NULL
);
5. Vào localhost và kiểm tra