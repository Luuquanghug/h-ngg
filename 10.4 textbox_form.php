<?php
/*
b1: ktra submit form
b2: lấy dữ liệu
 */

 if(isset($_POST['btn_login'])){ // isset: Đây là hàm kiểm tra một biến dữ liệu có xác định và khác NULL hay không?
    // hiển thị dữ liệu của username
    // print_r($_POST);
    // echo $_POST['username'];

    if(empty($_POST['username'])){
        echo "Không được để Trống";
    }
     $username = $_POST['username'];
     echo $username;
 }
?>

<html>
    <head>
        <title>
            Lấy dữ liệu từ Text box
        </title>
    </head>
    <body>
        <h1>Đăng Nhập</h1>
        <form action = "" method = "POST">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="btn_login" value="login" >
        </form>
    </body>
</html>