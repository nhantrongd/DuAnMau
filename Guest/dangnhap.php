<div class="login-left">
  <div class="login-sub-left">
<h2 class="section-heading">Đăng nhập</h2>
<form action="index.php?page=login" method="post">
  <div class="imgcontainer">
    <img src="Content/img/icon.png" alt="Avatar" class="avatar">
  </div>

  <div class="containerlogin">
    <label for="username"><b>Tên đăng nhập</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Enter Password" name="mat_khau" required>
        
    <input type="submit" class="form-button" name="dangnhap" value="Đăng nhập">
    <label>
      <input type="checkbox" checked="checked" name="nho"> Ghi nhớ
    </label>
  </div>

  <div class="containerlogin1" style="background-color:#f1f1f1">
    <div class="button-cancel">
    <input type="button" class="form-button" value="Thoát">
    </div>
    <div class="menu-login">
    <span class="mk"><a href="index.php?page=quenmk">Quên mật khẩu?</a></span>
    <span class="mk"><a href="index.php?page=doimk">Đổi mật khẩu</a></span>
    </div>
  </div>
</form>
</div>
<?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
</div>
<?php
   include "right.php";
 ?>
</body>
</html>