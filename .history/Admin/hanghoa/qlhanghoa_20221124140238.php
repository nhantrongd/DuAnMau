<div class="p-4">
    <form class="color-form col-11 m-auto" action="index.php?page=hh" method="post" enctype="multipart/form-data">
        <div class="color-title bg-success py-3">Thêm hàng hóa</div>
        <div class="flex">
        <div class="m-content px-3 row">
            <div class="col-4">
                <label for="ma_hh" class="form-label">Mã hàng hóa</label>
                <input type="text" class="form-control" readonly name="ma_hh" id="ma_hh" placeholder="Mã hàng hóa">
            </div>
            <div class="col-4">
                <label for="ten_hh" class="form-label">Tên hàng hóa</label>
                <input type="text" class="form-control" name="ten_hh" id="ten_hh" placeholder="Tên hàng hóa">
            </div>
            <div class="col-4">
                <label for="don_gia" class="form-label">Đơn giá</label>
                <input type="number" class="form-control" name="don_gia" id="don_gia" placeholder="Đơn giá">
            </div>
        </div>
        <div class="m-content  px-3 row">
            <div class="col-4">
                <label for="giam_gia" class="form-label">Giảm giá</label>
                <input type="number" class="form-control" name="giam_gia" id="giam_gia" placeholder="Giảm giá">
            </div>
            <div class="col-4">
                <label for="hinh" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" name="hinh" id="hinh" placeholder="Hình ảnh">
            </div>
            <div class="col-4">
                <label for="ma_loai" class="form-label">Loại hàng</label>
                <select name="ma_loai">
                <?php 
                foreach($loai as $listloai){
                    extract($listloai);
                    echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                }
                ?>
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
                <input type="number" class="form-control" name="so_luot_xem" id="so_luot_xem" placeholder="Số lượt xem" value="0">
            </div>
        </div>
        </div>
        <div class="mb-5 px-3">
            <label for="mo_ta" class="form-label">Mô tả</label>
            <textarea row="5" class="form-control" name="mo_ta" id="mo_ta" placeholder="Mô tả"></textarea>
        </div>
        <div class="mb-5 px-3 submit">
            <input type="submit" value="Thêm mới" name="them_moi"></input>
            <input type="submit" value="Nhập lại" name="nhap_lai"></input> 
            <a href="index.php?page=dshh"><input type="button" value="Danh sách" name="danh_sach"></a>
        </div>
        <?php
        if (isset($tho)) {
            # code...
        }
        
        ?>
    </form>
</div>