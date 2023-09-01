<?php 
    if(is_array($fixkh)){
        extract($fixkh);
    }
?>
<div class="p-4">
    <div class="color-form col-11 m-auto">
    <form action="index.php?page=updatekh" method="post">
        <div class="color-title bg-success py-3">Cập nhật tài khoản</div>
        <div class="col-6 px-3">
            <label for="ma_kh" class="form-label">Mã khách hàng</label>
            <input type="text" class="form-control" readonly value="<?=$ma_kh?>">
        </div>
        <div class="col-6 px-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?=$username?>">
        </div>
        <div class="col-6 px-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?=$email?>">
        </div>
        <div class="col-6 px-3">
            <label for="ma_khau" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="mat_khau" value="<?=$ma_khau?>">
        </div>
        <div class="mb-5 px-3 submit">
            <input type="hidden" value="<?php if(isset($ma_kh)&&($ma_kh>0)) echo $ma_kh;?>" name="ma_kh">
            <input type="submit" value="Cập nhật" name="cap_nhat">
            <input type="reset" value="Nhập lại" name="nhap_lai">
            <a href="index.php?page=dskh"><input type="button" value="Danh sách"></a>
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