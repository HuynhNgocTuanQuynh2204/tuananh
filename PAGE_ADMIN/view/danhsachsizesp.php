<link rel="stylesheet" href="css/table.css">

<?php
$sql = "SELECT * FROM size,sanpham WHERE size.idSP = sanpham.idSP ORDER BY size.idSize DESC";
$qr = mysqli_query($conn, $sql);
?>


<body>
    <div class="main p-3">
        <div class="text-center">
            
            <h6 style="text-align: center;padding: 10px;">Danh sách size sản phẩm</h6>
            <a href="index.php?quanly=danhsachsanpham" class="btn btn-secondary"
                style="margin-left: 400px;padding: 10px;">Danh sách sản phẩm</a>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Size</th>
                                        <th>Số lượng tồn kho</th>
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
                                        <td><?php echo $row['tenSP'] ?></td>
                                        <td><?php echo $row['sizevalue'] ?></td>
                                        <td><?php echo $row['soluongtonkho'] ?></td>
                                        <td><a href="index.php?quanly=suasizesp&id=<?php echo $row['idSize'] ?>"
                                                class="btn btn-primary">Sửa</a></td>
                                        <td><a href="index.php?quanly=xulythemsize&id=<?php echo $row['idSize'] ?>"
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