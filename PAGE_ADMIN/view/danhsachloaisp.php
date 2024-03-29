<link rel="stylesheet" href="css/table.css">

<?php
$sql = "SELECT * FROM loaisp,danhmuc WHERE loaisp.iddm = danhmuc.iddm ORDER BY loaisp.idloaisp DESC";
$qr = mysqli_query($conn, $sql);
?>


<body>
    <div class="main p-3">
        <div class="text-center">
            <h6 style="text-align: center;padding: 10px;">Danh sách loại sản phẩm</h6>
            <a href="index.php?quanly=danhmuc" class="btn btn-secondary"
                style="margin-left: 400px;padding: 10px;">Danh mục</a>
            <a href="index.php?quanly=themloaisp" class="btn btn-info" style="padding: 10px;">Thêm loại sản phẩm</a>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên loại sản phẩm</th>
                                        <th>Tên danh mục</th>
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
                                        <td><?php echo $row['tenloaisp'] ?></td>
                                        <td><?php echo $row['tendm'] ?></td>
                                        <td><a href="index.php?quanly=sualoaisp&id=<?php echo $row['idLoaisp'] ?>"
                                                class="btn btn-primary">Sửa</a></td>
                                        <td><a href="index.php?quanly=xulythemloaisp&id=<?php echo $row['idLoaisp'] ?>"
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