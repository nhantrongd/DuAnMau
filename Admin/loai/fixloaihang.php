<?php 
    if(is_array($fixloai)){
        extract($fixloai);
    }
?>
<div class="p-4">
    <div class="color-form col-11 m-auto">
    <form action="index.php?page=updateloai" method="post">
        <div class="color-title bg-success py-3">Cập nhật loại hàng</div>
        <div class="col-6 px-3">
            <label for="ma_loai" class="form-label">Mã loại</label>
            <input type="text" class="form-control" readonly placeholder="Mã loại">
        </div>
        <div class="col-6 px-3">
            <label for="ten_loai" class="form-label">Tên loại</label>
            <input type="text" class="form-control" name="ten_loai" value="<?php if(isset($ten_loai)&&($ten_loai !="")) echo $ten_loai;?>">
        </div>
        <div class="mb-5 px-3 submit">
            <input type="hidden" value="<?php if(isset($ma_loai)&&($ma_loai>0)) echo $ma_loai;?>" name="ma_loai">
            <input type="submit" value="Cập nhật" name="cap_nhat">
            <input type="reset" value="Nhập lại" name="nhap_lai">
            <a href="index.php?page=dslh"><input type="button" value="Danh sách"></a>
        <div>    
            <?php
            if(isset($thongbao)&&($thongbao!="")) 
            echo $thongbao; 
            ?>
        </div>
        </div>
    </form>
    </div>
</div>