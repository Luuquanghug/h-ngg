<?php
if(isset($_POST['btn_add'])){
    if(empty($_POST['post_detail'])){
        // XỬ LÝ THÔNG BÁO LỖI
        echo "Bạn cần nhập vào thông tin bài viết";
    } else {
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}

?>

<html>

<head>
    <title>
        Nhập dữ liệu form từ TEXTAREA
    </title>
</head>

<body>
    <h1>Thêm bài viết</h1>
    <form action="" method="POST">
        <label for="">Chi tiết</label><br>
        <textarea name="post_detail" cols="30" rows="10" id=""></textarea><br><br>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>

</html>