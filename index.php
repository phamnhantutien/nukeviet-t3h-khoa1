<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
<?php
    include('config.php');
    $hoten = $email = $phone = $province = $district = $ward = "";
    $nameErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["hoten"])){
            $hoten = test_input($_POST["hoten"]);
        }
        if(isset($_POST["phone"])){
            $phone = $_POST["phone"];
        }
        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }
        if(isset($_POST["province"])){
            $province = $_POST["province"];
        }
        if(isset($_POST["district"])){
            $district = $_POST["district"];
        }
        if(isset($_POST["ward"])){
            $ward = $_POST["ward"];
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="hoten">Họ tên:</label><br>
        <input type="text" id="hoten" name="hoten" required><br>
        <label for="phone">Điện thoại:</label><br>
        <input type="number" id="phone" name="phone"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="province">Tỉnh thành</label><br>
        <select id="province" name="province" required>
            <option value="">--Chọn--</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Hải Phòng">Hải Phòng</option>
            <option value="Hải Dương">Hải Dương</option>
            <option value="Hưng Yên">Hưng Yên</option>
            <option value="Hà Nam">Hà Nam</option>
            <option value="Nam Định">Nam Định</option>
            <option value="Thái Bình">Thái Bình</option>
            <option value="Ninh Bình">Ninh Bình</option>
            <option value="Hà Giang">Hà Giang</option>
            <option value="Cao Bằng">Cao Bằng</option>
            <option value="Lào Cai">Lào Cai</option>
            <option value="Bắc Cạn">Bắc Cạn</option>
            <option value="Lạng Sơn">Lạng Sơn</option>
            <option value="Tuyên Quang">Tuyên Quang</option>
            <option value="Yên Bái">Yên Bái</option>
            <option value="Thái Nguyên">Thái Nguyên</option>
            <option value="Phú Thọ">Phú Thọ</option>
            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
            <option value="Bắc Giang">Bắc Giang</option>
            <option value="Bắc Ninh">Bắc Ninh</option>
            <option value="Quảng Ninh">Quảng Ninh</option>
            <option value="Điện Biên">Điện Biên</option>
            <option value="Lai Châu">Lai Châu</option>
            <option value="Sơn La">Sơn La</option>
            <option value="Hòa Bình">Hòa Bình</option>
        </select><br>
        <label for="district">Quận huyện</label><br>
        <select id="district" name="district" required>
            <option value="">--Chọn--</option>
            <option value="Quận Ba Đình">Quận Ba Đình</option>
            <option value="Quận Tây Hồ">Quận Tây Hồ</option>
            <option value="Quận Hoàn Kiếm">Quận Hoàn Kiếm</option>
            <option value="Quận Long Biên">Quận Long Biên</option>
            <option value="Quận Hai Bà Trưng">Quận Hai Bà Trưng</option>
            <option value="Quận Hoàng Mai">Quận Hoàng Mai</option>
            <option value="Quận Đống đa">Quận Đống đa</option>
            <option value="Quận Thanh Xuân">Quận Thanh Xuân</option>
            <option value="Quận Cầu Giấy">Quận Cầu Giấy</option>
            <option value="Huyện Sóc Sơn">Huyện Sóc Sơn</option>
            <option value="Huyện Đông Anh">Huyện Đông Anh</option>
            <option value="Huyện Gia Lâm">Huyện Gia Lâm</option>
            <option value="Huyện Từ Liêm">Huyện Từ Liêm</option>
            <option value="Huyện Thanh Trì">Huyện Thanh Trì</option>
            <option value="Huyện Mê Linh">Huyện Mê Linh</option>
            <option value="Quận Hà Đông">Quận Hà Đông</option>
            <option value="Thị Xã Sơn Tây">Thị Xã Sơn Tây</option>
            <option value="Huyện Phúc Thọ">Huyện Phúc Thọ</option>
            <option value="Huyện Đan Phượng">Huyện Đan Phượng</option>
            <option value="Huyện Thạch Thất">Huyện Thạch Thất</option>
            <option value="Huyện Hòai Đức">Huyện Hòai Đức</option>
            <option value="Huyện Quốc Oai">Huyện Quốc Oai</option>
            <option value="Huyện Thanh Oai">Huyện Thanh Oai</option>
            <option value="Huyện Thường Tín">Huyện Thường Tín</option>
            <option value="Huyện Mỹ Đức">Huyện Mỹ Đức</option>
        </select><br>
        <label for="ward">Xã phường</label><br>
        <select id="ward" name="ward" required>
            <option value="">--Chọn--</option>
            <option value="Phường Phúc Xá">Phường Phúc Xá</option>
            <option value="Phường Trúc Bạch">Phường Trúc Bạch</option>
            <option value="Phường Vĩnh Phúc">Phường Vĩnh Phúc</option>
            <option value="Phường Cống Vị">Phường Cống Vị</option>
            <option value="Phường Liễu Giai">Phường Liễu Giai</option>
            <option value="P. Nguyễn Trung Trực">P. Nguyễn Trung Trực</option>
            <option value="Phường Ngọc Hà">Phường Ngọc Hà</option>
            <option value="Phường Đội Cấn">Phường Đội Cấn</option>
            <option value="Phường Kim Mã">Phường Kim Mã</option>
            <option value="Phường Giảng Võ">Phường Giảng Võ</option>
            <option value="Phường Thành Công">Phường Thành Công</option>
            <option value="Phường Điện Biên">Phường Điện Biên</option>
            <option value="Phường Quán Thánh">Phường Quán Thánh</option>
            <option value="Phường Ngọc Khánh">Phường Ngọc Khánh</option>
            <option value="Phường Nhật Tân">Phường Nhật Tân</option>
            <option value="Phường Tứ Liên">Phường Tứ Liên</option>
            <option value="Phường Quảng An">Phường Quảng An</option>
            <option value="Phường Xuân La">Phường Xuân La</option>
            <option value="Phường Bưởi">Phường Bưởi</option>
            <option value="Phường Thuỵ Khuê">Phường Thuỵ Khuê</option>
            <option value="Phường Phú Thượng">Phường Phú Thượng</option>
            <option value="Phường Yên Phụ">Phường Yên Phụ</option>
            <option value="Phường Phúc Tân">Phường Phúc Tân</option>
            <option value="Phường Hàng Mã">Phường Hàng Mã</option>
            <option value="Phường Hàng Buồm">Phường Hàng Buồm</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
<?php
    if(isset($_POST["hoten"]) && isset($_POST["email"]) && isset($_POST["province"]) 
        && isset($_POST["district"]) && isset($_POST["ward"])){
        $sql = "INSERT INTO persion (name, phone, email, province, district, ward)
        VALUES ('$hoten', '$phone', '$email', '$province', '$district', '$ward')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<br>" . "Thêm thông tin người dùng thành công";
    }
?>
</body>
</html>
