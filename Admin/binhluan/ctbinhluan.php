<div class="p-4">
    <form class="color-form col-11 m-auto">
        <div class="color-title bg-success py-3">Chi tiết bình luận</div>
        <h3>Hàng hóa: Love story</h3>
        <table class="table table-hover w-55 m-auto">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Ngày BL</th>
                    <th scope="col">Người BL</th>
                    <th scope="col">Hàng hóa</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    foreach ($dsbl as $bl){
                        extract($bl);
                        $delbl="index.php?page=delbl&ma_bl=".$ma_bl;
                        echo'
                    <tr>
                        <td>
                            <input type="checkbox" id="checkbox" name="all" value="0"></input>
                        </td>
                        <td>'.$noi_dung.'</td>
                        <td>'.$ngay_bl.'</td>
                        <td>'.$username.'</td>
                        <td>'.$ten_hh.'</td>
                        <td>
                        <a href="'.$delbl.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
                    }
                ?>
            </tbody>
        </table>
    </form>
</div>