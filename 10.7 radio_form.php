

<?php
if (isset($_POST['btn_register'])) { // isset: Đây là hàm kiểm tra một biến dữ liệu có xác định và khác NULL hay không?

    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (empty($_POST['gender'])) {
        echo "Chưa chọn giới tính";
    } else {
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }
}
?>
<html>

<head>
    <title>
        Nhập dữ liệu form từ Radio Button
    </title>
</head>

<body>
    <h1>Đăng Ký</h1>
    <form action="" method="POST">
        <input type="radio" name="gender" value="male" id="male" checked="checked">
        <!-- Thuộc tính checked để mặc định giá trị là Nam khi mở file Đăng Ký -->
        <Label for="male">Nam</Label><br>
        <input type="radio" name="gender" value="female" id="female">
        <Label for="female">Nữ</Label><br><br>
        <input type="submit" name="btn_register" value="Register">
    </form>
</body>

</html>