<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="Content/css/style.css">
    <link rel="stylesheet" href="Content/css/style1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link

    <style>
        :root{
            --hegiht:44px;
        }
        .content-box-cthh form {
    width: 100%;
    display: flex;
}

.content-box-cthh form input:last-child {
    width: 50px;
    margin:10px 10px;
    cursor: pointer;

}

.content-box-cthh form input:not(:last-child) {
    width: 100%;
    margin:10px 10px;
    border-radius: 5px;
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.5);
}
.dshh-cungloai table{
    width:100%;
}
.dshh-cungloai table td:not(:first-child){
    width:15%;

}
.dshh-cungloai table td{
    border:none;
    padding: 2px;

}

    </style>
</head>

<body>
    <div class="container">

        <!-- Header -->
        <div id="header">
            <div class="banner-fixed">
                <img src="Content/img/sidebar_left.png" herf="#header" class="img-sidebar-left">
                <img src="Content/img/sidebar_right.png" herf="#header" class="img-sidebar-right">
            </div>
            <div class="banner">
                <div class="banner-heaeder-top">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="Content/img/banner.png" height="auto" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img src="Content/img/1banner.png" height="auto" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img src="Content/img/2banner.png" height="auto" alt="">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
                <div class="menu-header-mid">
                    <div>
                        <div class="menu-header-left">
                            <div class="menu-header">
                                <a href="index.php">
                                    <img src="Content/img/icon.png" class="icon-menu">
                                </a>
                            </div>
                            <div class="search-header margin-left">
                                <form action="index.php?page=loaihanghoa" method="post">
                                    <input id="search" type="text" placeholder="Bạn tìm gì...?" name="key">
                                    <input id="search-submit" type="x" value="Tìm">
                                </form>
                            </div>
                            <div class="cart-header margin-left">
                                <div class="border-header-cart">
                                <a href="index.php?page=gioithieu">Giới thiệu</a>
                                <a href="index.php?page=hoidap">Hỏi đáp</a>
                                <a href="index.php?page=lienhe">Liên hệ</a>
                                <a href="index.php?page=gopy">Góp ý</a>
                                </div>
                            </div>
                            <span class="material-icons-outlined">
shopping_cart
</span>
                        </div>
                        <div class="menu-header-right">
                            <div class="content-right">
                                <?php
                                    if(isset($_SESSION['tk'])){
                                    extract($_SESSION['tk']);
                                ?>
                                <div class="dropdown">
                                    <button class="dropbtn"><?=$username?>
                                    <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-content">
                                    <a href="index.php?page=capnhattk">Cập nhật tài khoản</a>
                                    <a href="index.php?page=doimk">Đổi mật khẩu</a>

                                <?php 
                                    if($vai_tro==1){ ?>
                                    <a href="admin/index.php">Quản trị</a>
                                <?php } ?>
                                    <a href="index.php?page=thoat">Thoát</a>
                                    </div>
                                </div>
                                ?>
                                <?php
                                }else{
                                
                                ?>
                            <div class="dropdown">
                                <button class="dropbtn">Tài khoản
                                     <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                <a href="index.php?page=login">Đăng nhập</a>
                                <a href="index.php?page=dangky">Đăng ký</a>
                                <a href="index.php?page=quenmk">Quên mật khẩu</a>
                                </div>
                            </div> 
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-header-bot">
                    <div class="banner-bot"> 
                        <?php 
                            foreach($loai_ds as $loai){
                                extract($loai);
                                $linkloai="index.php?page=loaihanghoa&ma_loai=".$ma_loai;
                                echo'<div class="sub-menu-item">
                                <ul>
                                    <a href="'.$linkloai.'">'.$ten_loai.'</a>
                                </ul>
                            </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  