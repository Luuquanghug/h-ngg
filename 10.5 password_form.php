<?php
/*
b1: ktra submit form
b2: lấy dữ liệu
 */

if (isset($_POST['btn_login'])) { // isset: Đây là hàm kiểm tra một biến dữ liệu có xác định và khác NULL hay không?
    if (empty($_POST['password'])) {
        echo "Không được để Trống";
    }
    $password = $_POST['password'];
    echo $password;
}
?>

<html>

<head>
    <title>
        Lấy dữ liệu từ Password
    </title>
</head>

<body>
    <h1>Đăng Nhập</h1>
    <form action="" method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>