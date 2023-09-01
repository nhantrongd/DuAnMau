<div class="register">
    <div class="register-right">
        <?php
            if(isset($_SESSION['tk'])&&(is_array($_SESSION['tk']))){
                extract($_SESSION['tk']);
            }
        ?>
        <form action="index.php?page=capnhattk" method="post">
        <h2>Cập nhật tài khoản</h2>
        <div class="logo-form">
        <img src="Content/img/icon.png" alt="Avatar" text-align="center" class="avatar">
        </div>
        <div class="form-container">
            <div class="margin form-group">
                <label for="ten">Tên truy cập: </label> <br>
                <input type="text" name="username" readonly value="<?=$username?>">
            </div>
            <div class="margin form-group">
                <label for="mat_khau">Mật khẩu: </label> <br>
                <input type="password" name="mat_khau" value="<?=$mat_khau?>">
            </div>
            <div class="margin form-group">
                <label for="ten">Email: </label> <br>
                <input type="email" name="email" value="<?=$email?>">
            </div>
            <input type="hidden" name="ma_kh" value="<?=$ma_kh?>">
            <input type="submit" class="form-button" name="capnhat" value="Cập nhật">
            <input type="reset" class="form-button" value="Nhập lại">
        </div>
        </form>
    </div>
</div>
<?php
   include "right.php";
 ?>