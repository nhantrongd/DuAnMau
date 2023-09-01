<div class="p-4">
    <div class="color-form col-9 m-auto">
        <div class="color-title bg-success py-3">Danh sách hàng hóa</div>
        <table class="table table-hover w-55 m-auto">
    <form action="index.php?page=dshh" method="post">
        <input type="text" name="kw" id="textkw">
        <select name="ma_loai">
            <option value="0" selected>Tất cả</option>
            <?php 
                foreach($loai as $listloai){
                    extract($listloai);
                    echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                }
            ?>
            <input type="submit" name="chon" value="Chọn">
        </select>
    </form>
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Tên HH</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Hình</th>
                    <th scope="col">Hình</th>
                    <th scope="col">Lượt xem</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?php 
                foreach($hanghoa as $listhh){
                    extract($listhh);
                    $fixhh="index.php?page=fixhh&ma_hh=".$ma_hh;
                    $delhh="index.php?page=delhh&ma_hh=".$ma_hh;
                    $hinhpath="../uploads/".$hinh;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='80px'>";
                    }else{
                        $hinh="No img";
                    }
                    echo '
                    <tbody>
                        <tr>
                    <td>
                        <input type="checkbox" id="checkbox" name="all" value="0"></input>
                    </td>
                        <td scope="row">'.$ma_loai.'</td>
                        <td>'.$ten_hh.'</td>
                        <td>'.$don_gia.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$ngay_nhap.'</td>
                        <td>'.$so_luot_xem.'</td>
                    <td>
                    <a href="'.$fixhh.'"><input type="button" value="Sửa"></a>
                    <a href="'.$delhh.'"><input type="button" value="Xóa"></a>
                    </td>
                        </tr>
                    </tbody>
                         ';
                }
            ?>
        </table>
</div>
</div>