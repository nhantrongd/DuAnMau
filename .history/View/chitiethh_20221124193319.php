 <div class="left-view-box">
    <div class="left-view">
        <?php
             extract($cthh);
        ?>
        <h3><?=$ten_hh?></h3>
        <div class="content-box-cthh">
            <?php
                $hinh=$img_path.$hinh;
                echo'
                <div class="boxhhct">
                <img src="'.$hinh.'">
                <div class="motahh">'.$mo_ta.'
                <div>
                    - Giá: <span>'.$don_gia.'đ</span>
                </div>
                    <a>- Qùa tặng trị giá: <span>'.$giam_gia.'đ</span></a>
                <div>
                    <a>- Ngày nhập: '.$ngay_nhap.'</a>
                </div>
                div
                </div>
                </div>
                ';
            ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#binhluan").load("view/binhluanform.php",{idproduct: <?=$ma_hh?>});
        });
    </script>
    <div class="left-view" id="binhluan">
        
    </div>
    <div class="left-view">
        <h3>Sản phẩm cùng loại</h3>
        <div class="content-box-cthh">
            <div class="dshh-cungloai">
            <?php
                foreach($clhh as $clhh){
                    extract($clhh);
                    $linkhh="index.php?page=hanghoa&ma_hh=".$ma_hh;
                    echo'
                        <li><a href="'.$linkhh.'">'.$ten_hh.'</a></li>
                    ';
                }
            ?>
            </div>
        </div>
    </div>
 </div>
 <?php
   include "right.php";
 ?>
 