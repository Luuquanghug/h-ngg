<?php
if(isset($_POST['btn_add'])){
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    if(!empty($_POST['cat'])){
        # Cách xử lý 1
        foreach($_POST['cat'] as $item){
            echo $item.'<br>';
        }

        # Cách xử lý 2
        $list_cat = implode(',', $_POST['cat']);
        echo $list_cat;
    }
}
?>


<html>

<head>
    <title>
        Nhập dữ liệu form từ List Check Box
    </title>
</head>

<body>
    <h1>Chọn danh mục</h1>
    <form action="" method="POST">
        <input type="checkbox" name="cat[]" value="1" id="cat_1">
        <label for="cat_1">Thể thao</label><br><br>
        <input type="checkbox" name="cat[]" value="2" id="cat_2">
        <label for="cat_2">Xã hội</label><br><br>
        <input type="submit"  name="btn_add" value="Thêm bài viết">
    </form>
</body>

</html>