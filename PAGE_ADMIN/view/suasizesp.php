<?php
$sql = "SELECT * FROM size WHERE idSize = '$_GET[id]' ";
$kq = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($kq);
?>
<div class="main p-3">
    <div class="text-center">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa size, số lượng sản phẩm</h6>
        <section class="container my-2 bg-secondary w-50 text-light p-2">
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemsize&id=<?php echo $row['idSize'] ?>" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Size</label>
                    <input type="text" class="form-control" id="validationDefault01" name="size" placeholder="Size của sản phẩm" value="<?php echo $row['sizevalue']; ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Số lượng</label>
                    <input type="text" class="form-control" id="validationDefault01" name="soluong" placeholder="Số lượng của sản phẩm" value="<?php echo $row['soluongtonkho']; ?>">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="suasizesanpham">Sửa vào sản phẩm</button>
                </div>
            </form>
        </section>
    </div>
</div>
