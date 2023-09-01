<div class="p-4">
    <form class="color-form col-11 m-auto">
        <div class="color-title bg-success py-3">Tổng hợp bình luận</div>
        <table class="table table-hover w-55 m-auto">
            <thead>
                <tr>
                    <th scope="col">Hàng hóa</th>
                    <th scope="col">Số BL</th>
                    <th scope="col">Mới nhất</th>
                    <th scope="col">Cũ nhất</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($thbl as $bl){
                        extract($bl);
                        echo'  
                        <tr>
                        <td>'.$ten_loai.'</td>
                        <td>'.$ma_hh.'</td>
                        <td>'.$ngay_bl.'</td>
                        <td>'.$ngay_bl.'</td>
                        <td>
                        <input type="button" name="chi_tiet">Chi tiết</input>
                        </td>
                    </tr>';
                    } 
                    var_dump($ma_hh)
                ?>
            </tbody>
        </table>
    </form>
</div>