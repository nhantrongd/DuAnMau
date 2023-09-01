<div class="p-4">
    <form class="color-form col-11 m-auto">
        <div class="color-title bg-success py-3">Quản lý loại hàng</div>
        <table class="table table-hover w-55 m-auto">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Tên loại</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?php 
                foreach($loai as $listloai){
                    extract($listloai);
                    $fixloai="index.php?page=fixloai&ma_loai=".$ma_loai;
                    $delloai="index.php?page=delloai&ma_loai=".$ma_loai;
                    echo '
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" id="checkbox" name="all" value="0"></input>
                        </td>
                        <td scope="row">'.$ma_loai.'</td>
                        <td>'.$ten_loai.'</td>
                        <td>
                        <a href="'.$fixloai.'"><input type="button" value="Sửa"></a>
                        <a href="'.$delloai.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                    </tbody>
                         ';
                }
            ?>
        </table>
        <div class="submit-ds">
            <input type="submit" value="Chọn tất cả" name="all">
            <input type="submit" value="Bỏ chọn tất cả" name="unall">
            <input type="submit" value="Xóa danh mục vừa chọn" name="delit">
           <a href="index.php?page=lh"> <input type="button" value="Nhập thêm" name="add">  </a>
        </div> 
    </form>
</div>