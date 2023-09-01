<div class="register">
    <div class="register-right">
        <form action="xulydangki.php" method="post">
        <h2>Đổi mật khẩu</h2>
        <div class="logo-form">
        <img src="Content/img/icon.png" alt="Avatar" text-align="center" class="avatar">
        </div>
        <div class="form-container">
            <div class="margin form-group">
                <label for="ten">Tên truy cập: </label> <br>
                <input type="text" name="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="margin form-group">
                <label for="ten">Mật khẩu cũ: </label> <br>
                <input type="password" name="mat_khau" placeholder="Mật khẩu cũ" required>
            </div>
            <div class="margin form-group">
                <label for="ten">Mật khẩu mới: </label> <br>
                <input type="password" name="mat_khau" placeholder="Mật khẩu mới" required>
            </div>
            <div class="margin form-group">
                <label for="ten">Nhập lại mật khẩu mới: </label> <br>
                <input type="password" name="mat_khau" placeholder="Nhập lại mật khẩu mới" required>
            </div>
            <input type="submit" class="form-button" name="u" value="Đăng nhập">
        </div>
        </form>
    </div>
</div>
<?php
   include "right.php";
 ?>