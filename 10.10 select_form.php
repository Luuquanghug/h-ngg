<?php
if (isset($_POST['pay'])) {
    if (empty($_POST['pay'])) {
        echo "Cần chọn hình thức thanh toán";
    } else {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        $pay = $_POST['pay'];
        echo $pay;
    }
}

?>

<html>

<head>
    <title>
        Nhập dữ liệu form từ SELECT BOX
    </title>
</head>

<body>
    <h1>Đặt hàng</h1>
    <form action="" method="POST">
        <label for="">Hình thức thanh toán</label><br>
        <select name="pay" id="">
            <option value="">-- Chọn --</option>
            <option value="cod">Thanh toán tại nhà</option>
            <option value="banking">Thanh toán qua thẻ tín dụng</option>
        </select><br><br>
        <input type="submit" name="btn_order" value="Đặt hàng">
    </form>
</body>

</html>