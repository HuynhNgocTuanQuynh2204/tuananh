<link rel="stylesheet" href="css/table.css">

<?php
$sql = "SELECT danhmuc.tendm,danhmuc.iddm, GROUP_CONCAT(loaisp.tenloaisp) AS all_sp
FROM danhmuc 
LEFT JOIN loaisp ON danhmuc.iddm = loaisp.iddm  
GROUP BY danhmuc.iddm
ORDER BY danhmuc.iddm DESC";
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
                                <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên danh mục"
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
            <h6 style="text-align: center;padding: 10px;">Danh sách danh mục</h6>
            <a href="index.php?quanly=themdanhmuc" class="btn btn-secondary"
                style="margin-left: 400px;padding: 10px;">Thêm danh mục</a>
            <a href="index.php?quanly=themloaisp" class="btn btn-info" style="padding: 10px;">Thêm loại sản phẩm</a>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên danh mục</th>
                                        <th>Tên loại sản phẩm</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
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
                                        <td><?php echo $row['tendm'] ?></td>
                                        <td><?php echo $row['all_sp'] ?></td>
                                        <td><a href="index.php?quanly=suadanhmuc&id=<?php echo $row['iddm'] ?>"
                                                class="btn btn-primary">Sửa</a></td>
                                        <td><a href="index.php?quanly=xulythemdanhmuc&id=<?php echo $row['iddm'] ?>"
                                                class="btn btn-danger">Xóa</a></td>
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
</body>