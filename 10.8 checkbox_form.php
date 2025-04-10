<?php
if(isset($_POST['btn_register'])){
    if(isset($_POST['rules'])){
        $rules = $_POST['rules'];
        echo $rules;
    } else {
        echo "Cần đọc và xác nhận điều khoản";
    }
}
?>

<html>

<head>
    <title>
        Nhập dữ liệu form từ Check Box
    </title>
</head>

<body>
    <h1>Đăng Ký</h1>
    <form action="" method="POST">
        <p style="width: 200px; height: 70px; overflow-y: scroll;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ad vel corporis aperiam id blanditiis veniam saepe dolorum officia suscipit.</p>
        <input type="checkbox" name="rules" value="yes" id="rules"/>
        <label for="rules">Đồng ý</label><br><br>
        <input type="submit" name="btn_register" value="Register">
    </form>
</body>

</html>