<?php
 $size = $_POST['size'];
 $soluong = $_POST['soluong'];
 if(isset($_POST['themsizesanpham'])){
    $id = $_GET['id'];
    $sql_them = "INSERT INTO size (idSP,sizevalue,soluongtonkho) VALUES ('$id','$size','$soluong')";
    $query = mysqli_query($conn,$sql_them);
    header('location:index.php?quanly=danhsachsizesp');

}else if(isset($_POST['suasizesanpham'])){
    $id = $_GET['id'];
    $sql_update = "UPDATE size SET sizevalue='". $size."', soluongtonkho='". $soluong."' WHERE idSize='$id'";
    mysqli_query($conn, $sql_update);
    header('location:index.php?quanly=danhsachsizesp');
}else{
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM size WHERE idSize ='".$id."'";
    mysqli_query($conn,$sql_xoa);
    header('location:index.php?quanly=danhsachsizesp');
}

?>