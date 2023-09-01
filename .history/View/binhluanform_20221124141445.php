<?php 
    session_start();
    include "../pdo/pdo.php";
    include "../pdo/binhluan.php";
    $idproduct=$_REQUEST['idproduct'];
    $lisbl=bl_selectall($idproduct);
    // $username=username_bl($idproduct);
    // extract($username);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="" href="../Content/css/style.css">
    <link rel="stylesheet" type="" href="../Content/css/style1.css">
</head>
<body>
        <h3>Bình luận</h3>
        <div class="content-box-cthh">
            <div class="dshh-cungloai">
                <?php foreach ($lisbl as $bl){       
                    ;?>
                     <table>
                    <tr>
                    <td><li><a href=""> <?=$bl['noi_dung']?> </a></li></td>
                    <td><h4><?=$bl['username']?></h4></td>
                    <td><span><?=$bl['ngay_bl']?></span></td>
                    <td>
                 <?php 
                                    if($vai_tro==1){ ?>
                                    <a href="admin/index.php">Quản trị</a>
                                <?php } ?>
                    </td>
                    </tr>
                    </table>
               <?php } ?>
            </div>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <input type="hidden" name="idproduct" value="<?=$idproduct?>">
            <input type="hidden" name="ma_bl" value="<?=$ma_bl?>">
            <?php
                if(isset($_SESSION['tk'])&&($_SESSION['tk'])){?>
            <input id="search" type="text" name="noi_dung">
            <input id="search-submit" type="submit" name="gui" value="Gửi">
            <?php } ?>
            </form>
        </div>
        
        <?php 
        
        if(isset($_POST['gui'])&&($_POST['gui'])){
            $noi_dung=$_POST['noi_dung'];
            $ma_kh=$_SESSION['tk']['ma_kh'];
            $idproduct=$_POST['idproduct'];
            $ngay_bl=date('h:i:sa Y-m-d');
            bl_insert($noi_dung,$ma_kh,$idproduct,$ngay_bl);
            header("Location:".$_SERVER['HTTP_REFERER']);
        }
        ?>
</body>
</html>