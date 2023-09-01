<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Breadcrumbs -->
    <div class="register">
        <div class="register-right">
    <form action="index.php?page=dangky" method="post">
        <h2>Đăng ký thành viên</h2>
        <div class="form-container">
            <div class="form-group">
                <label for="ten">Tên truy cập: </label> <br>
                <input type="text" name="username" placeholder="Tên đăng nhập" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="mk">Mật khẩu: </label> <br>
                <input type="password" name="mat_khau" placeholder="Mật khẩu" id="password" required>

            </div>

            <div class="form-group">
                <label for="email">Nhập Email:</label> <br>
                <input type="email" class="form-control" id="email" name="email" >    
            </div>
            <div class="form-group">
                <label for="ten">Địa chỉ: </label> <br>
                <input type="text" name="dia_chi" class="form-control">
            </div>

            <div class="form-group1">
                <label for="gender">Vai trò: </label> <br>
                 <input type="radio" name="vai_tro"  value=1> <label>Admin</label> 
                 <input type="radio" name="vai_tro"  value=0 checked> <label>Guest</label> 
            </div>

            <div class="form-group1">
                <p>Bạn đã có tài khoản.<a href="index.php?page=dangnhap">Đăng nhập</a></p>
            </div>

            <div class="btn-group">
               <input type="submit" class="form-button" name="dangky" value="Đăng ký"> 
               <input type="reset" class="form-button" value="Nhập lại"> 
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
        </div>

    </form>
    </div>
    </div>
    <?php
   include "right.php";
 ?>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

</body>

</html>