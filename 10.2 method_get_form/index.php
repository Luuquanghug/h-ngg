
<?php
# Lấy dữ liệu từ url từ phương thức GET
$mod =$_GET['mod'];
$act =$_GET['act'];
$id =$_GET['id'];

echo "{$mod} - {$act} - {$id}";

function show_array($data){
    if(is_array($data)){
   echo "<pre>";
print_r($data);
echo "<pre>"; 
}
}
if(isset($_GET['btn_search'])){ // Đây là hàm kiểm tra một biến dữ liệu có xác định và khác NULL hay không?
    show_array($_GET);

$q =$_GET['q'];
echo $q;
}

?>

<html>
    <head>
        <title>
            Truyền dữ liệu form phuong thức GET
        </title>
    </head>
    <body>
        <a href="?mod=product&act=detail&id=1268">Sản Phẩm</a>
        <h1>Tìm Kiếm</h1>
        <form action = "" method = "GET">
            Tìm Kiếm: <input type="text" name="q">
            <input type="submit" name="btn_search" value="Search" >
        </form>
    </body>
</html>