<?php 
    if(is_array($fixhh)){
        extract($fixhh);
        $maloai=$ma_loai;
    }
    $hinhpath="../uploads/".$hinh;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80px'>";
    }else{
        $hinh="No img";
    }
?>
<div class="p-4">
<form class="color-form col-11 m-auto" action="index.php?page=updatehh" method="post" enctype="multipart/form-data">
    <div class="color-title bg-success py-3">Cập nhật hàng hóa</div>
    <div class="flex">
    <div class="m-content px-3 row">
        <div class="col-4">
            <label for="ma_hh" class="form-label">Mã loại</label>
            <input type="text" class="form-control" readonly name="ma_hh" value="<?=$ma_loai?>">
        </div>
        <div class="col-4">
            <label for="ten_hh" class="form-label">Tên hàng hóa</label>
            <input type="text" class="form-control" name="ten_hh" value="<?=$ten_hh?>">
        </div>
        <div class="col-4">
            <label for="don_gia" class="form-label">Đơn giá</label>
            <input type="number" class="form-control" name="don_gia" value="<?=$don_gia?>">
        </div>
    </div>
    <div class="m-content  px-3 row">
        <div class="col-4">
            <label for="giam_gia" class="form-label">Giảm giá</label>
            <input type="number" class="form-control" name="giam_gia" value="<?=$giam_gia?>">
        </div>
        <div class="col-4">
            <label for="hinh" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" name="hinh" id="hinh" placeholder="Hình ảnh">
            <?=$hinh?>
        </div>
        <div class="col-4">
                <label for="ma_loai" class="form-label">Loại hàng</label>
                <select name="ma_loai">
                <?php 
                foreach($loai as $listloai){
                    extract($listloai);
                    if($maloai==$ma_loai)
                    echo '<option value="'.$ma_loai.'" selected>'.$ten_loai.'</option>';
                    else
                    echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                }
                ?>
                <input type="submit" name="chon" value="Chọn">
            </select>
        </div>
    </div>
    <div class="m-content">
        <div class="col-4">
            <label for="dac_biet" class="form-label">Đặc biệt</label><br>
            <input type="radio" name="dac_biet" id="dac_biet" value="1">Đặc biệt
            <input type="radio" name="dac_biet" id="dac_biet" value="0" checked>Bình thuờng
        </div>
        <div class="col-4">
            <label for="so_luot_xem" class="form-label">Số lượt xem</label>
            <input type="number" class="form-control" name="so_luot_xem" value="<?=$so_luot_xem?>">
        </div>
    </div>
    </div>
    <div class="mb-5 px-3">
        <label for="mo_ta" class="form-label">Mô tả</label>
        <textarea row="5" class="form-control" name="mo_ta" id="mo_ta"><?=$mo_ta?></textarea>
    </div>
    <div class="mb-5 px-3 submit">
        <input type="hidden" value="<?=$ma_hh?>" name="ma_hh">
        <a href="index.php?page=dshh"><input type="submit" value="Cập nhật" name="cap_nhat"></a>
        <input type="reset" value="Nhập lại" name="nhap_lai">
        <a href="index.php?page=dshh"><input type="button" value="Danh sách" name="danh_sach"></a>
        <div>    
            <?php
            if(isset($thongbao)&&($thongbao!="")) 
            echo $thongbao; 
            ?>
        </div>
    </div>

</form>
</div>