<div class="p-4">
    <form class="color-form col-11 m-auto">
        <div class="color-title bg-success py-3">Quản lý khách hàng</div>
        <div class="flex">
        <div class="m-content mb-3 px-3 row">
            <div class="col-6">
                <label for="ma_kh" class="form-label">Mã khách hàng</label>
                <input type="text" class="form-control" readonly name="ma_kh" id="ma_kh" placeholder="Mã khách hàng">
            </div>
            <div class="col-6">
                <label for="ho_ten" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" name="ho_ten" id="ho_ten" placeholder="Họ và tên">
            </div>
        </div>
        <div class="m-content mb-3 px-3 row">
            <div class="col-6">
                <label for="mat_khau" class="form-label">Mật khẩu</label>
                <input type="text" class="form-control" name="mat_khau" id="mat_khau" placeholder="Mật khẩu">
            </div>
            <div class="col-6">
                <label for="mat_khau" class="form-label">Xác nhận mật khẩu</label>
                <input type="text" class="form-control" name="mat_khau" id="mat_khau" placeholder="Nhập lại mật khẩu">
            </div>
        </div>
        <div class="m-content mb-3 px-3 row">
            <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="col-6">
                <label for="hinh" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" name="hinh" id="hinh" placeholder="Hình ảnh">
            </div>
        </div>
        <div class="m-content mb-3 px-3 row">
            <div class="col-6">
                <label for="dac_biet" class="form-label">Kích hoạt</label><br>
                <input type="radio" name="kich_hoat" id="dac_biet" value="1">Kích hoạt
                <input type="radio" name="kich_hoat" id="dac_biet" value="0" checked>Chưa kích hoạt
            </div>
            <div class="col-6">
                <label for="dac_biet" class="form-label">Vai trò</label><br>
                <input type="radio" name="vai_tro" id="dac_biet" value="1">Admin
                <input type="radio" name="vai_tro" id="dac_biet" value="0" checked>Khách
            </div>
        </div>
        </div>
        <div class="mb-5 px-3 submit">
            <input type="submit" value="Thêm mới" name="them_moi"></input>
            <input type="submit" value="Nhập lại" name="nhap_lai"></input> 
            <a href="index.php?page=dskh"><input type="button" value="Danh sách"></a>
        </div>
    </form>
</div>