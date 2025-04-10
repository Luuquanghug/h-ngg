<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
// show_array($_SERVER);

// Kiểm tra submit form
if (isset($_POST['btn_login'])) { // Đây là hàm kiểm tra một biến dữ liệu có xác định và khác NULL hay không?
    $info_user = array(
        'username' => 'admin',
        'password' => 'ademin!@#',
    );
    $error = array(); // cắm cờ error cho mảng để đỡ phải chạy thêm if của username và password
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để Trống Tên Đăng Nhập";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để Trống Mật Khẩu";
    } else {
        $password = $_POST['password'];
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    /*
        b1: ktra dữ liệu
        b2: gán dữ liệu
        b3: ktra login
        b4: xử lí login
           TH1: chuyển hướng cart.php
           TH2: thông báo : lỗi đăng nhập
 */

    if (empty($error)) { // dữ liệu đã nhập
        if (($username == $info_user['username']) && ($password == $info_user['password'])) {
            $redirect_to = $_POST['redirect_to'];
            echo $redirect_to;
            // redirect_to: chuyển hướng đến

            header("location: {$redirect_to}");
            // Hàm chuyển hướng đến file cart.php

        } else{
            $error['login'] = "Tên Đăng Nhập hoặc Mật Khẩu không đúng";
            
        }
    }
    if(!empty($error)){
        show_array($error);
    }
}
?>

<html>

<head>
    <title>
        Nhận dữ liệu từ Hidden field
    </title>
</head>

<body>
    <h1>Đăng Nhập</h1>
    <form action="" method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="hidden" name="redirect_to" value="cart.php" />
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>