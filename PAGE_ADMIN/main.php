
    <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='themsanpham'){
                include("view/themsanpham.php");
            }

            else if($tam =='danhmuc'){
                include("view/danhmucsanpham.php");
            }

            else if($tam =='themdanhmuc'){
                include("view/themdanhmuc.php");
            }

            else if($tam =='suadanhmuc'){
                include("view/suadanhmuc.php");
            }

            else if($tam =='themloaisp'){
                include("view/themloaisp.php");
            }

            else if($tam =='suasanpham'){
                include("view/suasanpham.php");
            }

            else if($tam =='sualoaisp'){
                include("view/sualoaisp.php");
            }

            else if($tam =='suasizesp'){
                include("view/suasizesp.php");
            }

            else if($tam =='danhsachsizesp'){
                include("view/danhsachsizesp.php");
            }

            else if($tam =='danhsachloaisp'){
                include("view/danhsachloaisp.php");
            }
            
            else if($tam =='xulythemsanpham'){
                include("xuly/xulythemsanpham.php");
            }

            else if($tam =='timkiemtensp'){
                include("view/timkiemtensp.php");
            }

            else if($tam =='xulythemsize'){
                include("xuly/xulythemsize.php");
            }

            else if($tam =='xulythemloaisp'){
                include("xuly/xulythemloaisp.php");
            }


            else if($tam =='xulythemdanhmuc'){
                include("xuly/xulythemdanhmuc.php");
            }

            else if($tam =='timkiemsanpham'){
                include("view/timkiemsanpham.php");
            }

            else if($tam =='danhsachsanpham'){
                include("view/danhsachsanpham.php");
            }

            else if($tam =='themsizesp'){
                include("view/themsize.php");
            }
            
            else {
                include("view/index.php");
            }
