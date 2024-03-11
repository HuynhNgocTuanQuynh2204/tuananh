<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Thêm loại sản phẩm</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemloaisp" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Tên loại sản phẩm</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tenloaisp" placeholder="Tên loại sản phẩm"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Danh mục sản phẩm</label>
                    <select id="inputState" class="form-select" name="danhmuc">
                        <?php
                            $sql_dm ="SELECT * FROM danhmuc ORDER BY iddm DESC";
                            $query_dm = mysqli_query($conn,$sql_dm);
                            while($row_dm = mysqli_fetch_array($query_dm)){
                        ?>
                        <option value="<?php echo $row_dm['iddm']  ?>"><?php echo $row_dm['tendm'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="themloaisanpham">Thêm loại sản phẩm</button>
                </div>
            </form>
        </section>
    </div>
</div>