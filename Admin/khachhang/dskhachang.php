<div class="p-4">
    <form class="color-form col-11 m-auto">
        <div class="color-title bg-success py-3">Quản lý khách hàng</div>
        <table class="table table-hover w-55 m-auto">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Mã KH</th>
                    <th scope="col">Id</th>
                    <th scope="col">Địa chỉ email</th>
                    <th scope="col">Vai trò</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?php foreach($khachhang as $dskhachhang){ 
                    extract($dskhachhang);
                    $fixkh="index.php?page=fixkh&ma_kh=".$ma_kh;
                    $delkh="index.php?page=delkh&ma_kh=".$ma_kh;
                    echo'
            <tbody>
                <tr>
                    <td>
                        <input type="checkbox" id="checkbox" name="all" value="0"></input>
                    </td>
                    <td scope="row">'.$ma_kh.'</td>
                    <td>'.$username.'</td>
                    <td>'.$email.'</td>
                    <td>'.$vai_tro.'</td>
                    <td>
                    <a href="'.$fixkh.'"><input type="button" value="Sửa"></a>
                    <a href="'.$delkh.'"><input type="button" value="Xóa"></a>
                </tr>
            </tbody>';
            }
            ?>
        </table>
    </form>
</div>