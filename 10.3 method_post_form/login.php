<?php
function show_array($data){
    if(is_array($data)){
   echo "<pre>";
print_r($data);
echo "<pre>"; 
}
}
// show_array($_SERVER);

// Kiểm tra submit form
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
$password = $_POST['password'];

echo "{$username} = {$password}";
}
?>

<html>
    <head>
        <title>
            Truyền dữ liệu form phuong thức POST
        </title>
    </head>
    <body>
        <h1>Đăng Nhập</h1>
        <form action = "" method = "POST">
            Name: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="btn_login" value="login" >
        </form>
    </body>
</html>