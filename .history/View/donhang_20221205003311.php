<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($tcdonhang)){?>
        <table border="1">
                <thead>
                    <th>Mã đơn</th>
                    <th>Tên người nhận</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Phương thức thanh toán</th>
                    <th>Chức năng</th>
                </thead>
            <?php 
                foreach($tcdonhang as $donhang){
            ?>
                <tr>
                    <td><?=$donhang['ma_bil']?></td>
                    <td><?=$donhang['username']?></td>
                    <td><?=$donhang['email']?></td>
                    <td><?=$donhang['dia_chi']?></td>
                    <td><?=$donhang['tel']?></td>
                    <td>
                        <?php
                            if($donhang['thanh_toan']==1) echo "Thanh toán trực tiếp";
                            else echo "Thanh toán khi nhận hàng";
                        ?>
                    </td>
                    <td>
                        <a href="index.php?page=chitietdonhang&id=<?=$donhang['ma_bil']?>">Xem chi tiết</a>
                    </td>
                </tr>
            <?php    }
            ?>
        </table>
    <?php }else{ ?>
        <table></table>
    <?php } ?>
</body>
</html>