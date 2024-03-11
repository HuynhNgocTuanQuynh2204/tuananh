<?php
  $sql = "SELECT * FROM loaisp WHERE idLoaisp = '$_GET[id]' ";
  $kq = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($kq);
?>
<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
            <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa loại sản phẩm</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemloaisp&id=<?php echo $row['idLoaisp'] ?>"
                enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Tên loại sản phẩm</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tenloaisp"
                        placeholder="Tên loại sản phẩm" value="<?php echo $row['tenloaisp'] ?>" vsd>
                </div>
                <div class="col-md-6">
                    <label for="danhMuc" class="form-label">Danh mục sản phẩm</label>
                    <select id="danhMuc" class="form-select" name="danhmuc">
                        <?php
                        $sql_dm = "SELECT * FROM danhmuc ORDER BY iddm DESC";
                        $query_dm = mysqli_query($conn, $sql_dm);
                        while ($row_dm = mysqli_fetch_array($query_dm)) {
                            ?>
                        <option value="<?php echo $row_dm['iddm'] ?>"
                            <?php if ($row_dm['iddm'] == $row['iddm']) echo 'selected'; ?>>
                            <?php echo $row_dm['tendm'] ?>
                        </option>
                        <?php
                            }
                            ?>
                    </select>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="sualoaisanpham">Sửa loại sản phẩm</button>
                </div>
            </form>
        </section>
    </div>
</div>