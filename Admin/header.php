<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../Content/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <style>
        .sub-menu-item a {
        line-height: var(--height);
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        list-style: none;
        text-decoration: none;
        color: #000;
        margin: 5px 15.7px;}
    </style>
</head>
<body>
    <div class="container">

        <!-- Header -->
        <div id="header">
        <div class="banner-fixed">
                <img src="../Content/img/sidebar_left.png" herf="#header" class="img-sidebar-left">
                <img src="../Content/img/sidebar_right.png" herf="#header" class="img-sidebar-right">
            </div>
            <div class="banner">
                <div class="banner-heaeder-top">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="../Content/img/banner.png" height="auto" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img src="../Content/img/1banner.png" height="auto" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img src="../Content/img/2banner.png" height="auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="menu-header-mid">
                    <div>
                        <div class="menu-header-left">
                            <div class="menu-header">
                                <a href="index.php">
                                    <img src="../Content/img/icon.png" class="icon-menu">
                                </a>
                            </div>
                            <div class="search-header margin-left">
                                <input id="search" type="text" class="input-search" onkeyup="suggestSearch(event);" placeholder="Bạn tìm gì..." name="key" autocomplete="off" maxlength="100">
                                <i class="far fa-search"></i>
                                </input>
                            </div>
                            <div class="cart-header margin-left">
                                <div class="border-header-cart">
                                <a href="index.php?page=lh">Loại hàng</a>
                                <a href="index.php?page=hh">Hàng hóa</a>
                                <a href="index.php?page=dskh">Khách hàng</a>
                                <a href="index.php?page=bl">Bình luận</a>
                                <!-- <a href="index.php?page=tk">Thống kê</a> -->
                                <a href="index.php?page=hoadon&act=list">Hóa đơn</a>
                                </div>
                            </div>

                        </div>
                        <div class="menu-header-right">
                            <div class="content-right">
                                <div class="dropdown">
                                    <button class="dropbtn">                                        
                                        <a href="index.php?page=thoat">Thoát</a>
                                     <i class="fa fa-caret-down"></i>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>