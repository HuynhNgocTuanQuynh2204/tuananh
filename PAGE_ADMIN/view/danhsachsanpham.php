<link rel="stylesheet" href="css/table.css">

<?php
 if(isset($_GET['trang'])){
    $page = $_GET['trang'];
}else {
    $page =1;
}
if($page == '' || $page == 1){
    $begin = 0;
}else{
    $begin =($page*5)-5;
}
$sql = "SELECT sanpham.idSP, sanpham.tenSP, sanpham.img, sanpham.gia, sanpham.mota, sanpham.idLoaisp, sanpham.iddm,loaisp.tenloaisp,danhmuc.tendm, GROUP_CONCAT(size.sizevalue) AS all_sizes, GROUP_CONCAT(size.soluongtonkho) AS all_stock
        FROM sanpham 
        LEFT JOIN size ON sanpham.idSP = size.idSP 
        LEFT JOIN loaisp ON sanpham.idLoaisp = loaisp.idLoaisp 
        LEFT JOIN danhmuc ON sanpham.iddm = danhmuc.iddm
        GROUP BY sanpham.idSP
        ORDER BY sanpham.idSP DESC LIMIT $begin,5";
$qr = mysqli_query($conn, $sql);
?>


<body>
    <div class="main p-3">
        <div class="text-center">
            <div class="container" style="padding: 10px;">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-6">
                        <form class="form-inline" action="index.php?quanly=timkiemsanpham" method="POST">
                            <div class="input-group w-100">
                                <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên sản phẩm"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                                        kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h6 style="text-align: center;padding: 10px;">Danh sách sản phẩm</h6>
            <a href="index.php?quanly=themsanpham" class="btn btn-secondary" style="margin-left: 700px;padding: 10px;">Thêm sản phẩm</a>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Giá</th>
                                        <th>Size</th>
                                        <th>Số lượng tồn kho</th>
                                        <th>Mô tả</th>
                                        <th>Loại sản phẩm</th>
                                        <th>Danh mục</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                        <th>Thêm size,số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($qr)) {
                            $i++;
                        ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row['tenSP'] ?></td>
                                        <td><img src="../IMAGES/anhcsld/<?php echo $row['img'] ?>" class="img-fluid"
                                                style="max-width: 100px;"></td>
                                        <td><?php echo $row['gia'] ?></td>
                                        <td><?php echo $row['all_sizes'] ?></td>
                                        <td><?php echo $row['all_stock'] ?></td>
                                        <td><?php echo $row['mota'] ?></td>
                                        <td><?php echo $row['tenloaisp'] ?></td>
                                        <td><?php echo $row['tendm'] ?></td>
                                        <td><a href="index.php?quanly=suasanpham&id=<?php echo $row['idSP'] ?>"
                                                class="btn btn-primary">Sửa</a></td>
                                        <td><a href="index.php?quanly=xulythemsanpham&id=<?php echo $row['idSP'] ?>"
                                                class="btn btn-danger">Xóa</a></td>
                                        <td><a href="index.php?quanly=themsizesp&id=<?php echo $row['idSP'] ?>"
                                                class="btn btn-success">Thêm</a></td>
                                    </tr>
                                    <?php
                        }
                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
<?php
$sql_trang = mysqli_query($conn, 'SELECT * FROM sanpham');
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count / 5);
?>
<div class="d-flex justify-content-center">
    <ul class="pagination">
        <?php
        for ($i = 1; $i <= $trang; $i++) {
        ?>
        <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
            <a class="page-link" href="index.php?quanly=danhsachsanpham&trang=<?php echo $i; ?>"><?php echo $i; ?></a>
        </li>
        <?php
        }
        ?>
    </ul>
</div>
<div class="d-flex justify-content-between">
    <p class="d-flex justify-content-between"> Trang hiện tại: <?php echo $page; ?>/<?php echo $trang; ?></p>
</div>

</body>