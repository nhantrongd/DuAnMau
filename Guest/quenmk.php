<div class="register">
    <div class="register-right">
        <form action="index.php?page=quenmk" method="post">
        <h2>Quên mật khẩu</h2>
        <div class="logo-form">
        <img src="Content/img/icon.png" alt="Avatar" text-align="center" class="avatar">
        </div>
        <div class="form-container">
            <div class="margin form-group">
                <label for="ten">Tên truy cập: </label> <br>
                <input type="text" name="username" placeholder="Tên đăng nhập" class="form-control" required>
            </div>
            <div class="margin form-group">
                <label for="email">Nhập Email:</label> <br>
                <input type="email" class="form-control" id="email" name="email" >    
            </div>
            <input class="form-button" name="guiemail" type="submit" value="Tìm lại mật khẩu">
        </div>
        <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
</div>
        </form>
    </div>
    <?php
   include "right.php";
 ?>
</div>
