<?php
  $tenloaisp = $_POST['tenloaisp'];
  $danhmuc = $_POST['danhmuc'];
  if(isset($_POST['themloaisanpham'])){
      $sql_them = "INSERT INTO loaisp(tenloaisp,iddm) VALUES ('$tenloaisp','$danhmuc')";
      $query = mysqli_query($conn,$sql_them);
      header('location:index.php?quanly=danhsachloaisp');
  }else if(isset($_POST['sualoaisanpham'])){
        $id = $_GET['id'];
        $sql_update = "UPDATE loaisp SET tenloaisp='". $tenloaisp."', iddm='". $danhmuc."' WHERE idLoaisp='$id'";
        mysqli_query($conn,$sql_update);
        header('location:index.php?quanly=danhsachloaisp');
  }else{
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM loaisp WHERE idLoaisp ='".$id."'";
        mysqli_query($conn,$sql_xoa);
        header('location:index.php?quanly=danhsachloaisp');
  }


?>