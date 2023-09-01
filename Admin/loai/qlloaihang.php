
<div class="p-4">
    <div class="color-form col-11 m-auto">
    <form action="index.php?page=lh" method="post">
        <div class="color-title bg-success py-3">Quản lý loại hàng</div>
        <div class="col-6 px-3">
            <label for="ma_loai" class="form-label">Mã loại</label>
            <input type="text" class="form-control" readonly name="ma_loai" id="ma_loai" placeholder="Mã loại">
        </div>
        <div class="col-6 px-3">
            <label for="ten_loai" class="form-label">Tên loại</label>
            <input type="text" class="form-control" name="ten_loai" id="ten_loai" placeholder="Tên loại">
        </div>
        <div class="mb-5 px-3 submit">
            <input type="submit" value="Thêm mới" name="them_moi">
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