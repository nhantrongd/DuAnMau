
 <div class="banner-header-menu">
                <div class="banner-header-sub">
                    <div class="header-banner-left">
                        <div class="click click-content">
                            <div class="favorite-img">
                                <img src="Content/img/banner2.png" alt="">
                            </div>
                            <div class="favorite-img">
                                <img src="Content/img/banner3.png" alt="">
                            </div>
                            <div class="favorite-img">
                                <img src="Content/img/banner4.png" alt="">
                            </div>
                            <div class="favorite-img">
                                <img src="Content/img/banner5.png" alt="">
                            </div>
                            <div class="favorite-img">
                                <img src="Content/img/banner6.png" alt="">
                            </div>
                        </div>
                        <div class="click click-tab">
                            <div class="favorite-img-top">
                                <a>Laptop tựu trường. Điểm cao thưởng lớn</a>
                            </div>
                            <div class="favorite-img-top">
                                <a>Đồng hồ thời trang. Sale 35%</a>
                            </div>
                            <div class="favorite-img-top">
                                <a>Chờ đón iPhone 13. Đăng ký trước</a>
                            </div>
                            <div class="favorite-img-top">
                                <a>Galaxy Z Fold3 / Z Fild3. Trả góp 0%</a>
                            </div>
                            <div class="favorite-img-top">
                                <a>Reno6 Z 5G / Reno6 5G. Trả góp 0</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-banner-right">
                        <div class="img-right">
                            <img src="Content/img/bannerright1.jpg" alt="">
                        </div>
                        <div class="img-right">
                            <img src="Content/img/bannerright2.jpg" alt="">
                        </div>
                        <div class="img-right">
                            <img src="Content/img/bannerright3.jpg" alt="">
                        </div>
                        <div class="img-right">
                            <img src="Content/img/bannerright4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
<div class="body">

        <!-- Sale -->
        <div class="content-body-top">
            <h2>Săn sale mỗi ngày</h2>
            <div class="slideshow-content-body">
                    <?php 
                        foreach($hh_new as $hh){
                            extract($hh);
                            $img=$img_path.$hinh;
                            $linkhh="index.php?page=hanghoa&ma_hh=".$ma_hh;
                            echo  '<div class="content-item">
                            <a href="'.$linkhh.'">
                            <img class="img-item" src="'.$img_path.$hinh.'" alt=""></a>
                            <div class="infor-content-item">
                                <div class="name-item row-content">
                                    <a href="'.$linkhh.'">'.$ten_hh.'</a>
                                </div>
                                <div class="price-item row-content">
                                    <a href="#">Giá: '.$don_gia.'đ</a>
                                </div>
                                <div class="gift-item row-content">
                                    <a href="#">Sale: '.$giam_gia.'đ</a><br><br>
                                    <form action="index.php?page=addcart" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="hinh" value="'.$hinh.'">
                                    <input type="hidden" name="ma_hh" value="'.$ma_hh.'">
                                    <input type="hidden" name="ten_hh" value="'.$ten_hh.'">
                                    <input type="hidden" name="don_gia" value="'.$don_gia.'">
                                    <input type="number" name="so_luong" min="1" max="10" value="1">
                                    <input type="submit" name="clickcart" value="Giỏ hàng">
                                </form>
                                </div>
                            </div>
                        </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="content-body-mid">
            <div class="hot-item">

                <!-- Mobile -->
                <div class="sub-hot-item">
                    <div class="title-hot-item">
                        <div class="title-left">
                            <h2>ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                        </div>
                        <div class="title-right">
                            <a href="http://">Samsung Galaxy A72</a>
                            <a href="http://">Samsung Galaxy A72</a>
                            <a href="http://">Samsung Galaxy A72</a>
                        </div>
                    </div>
                    <div class="hot-item-mobile">
                        <?php
                            foreach ($hh_mb as $mb){
                                extract($mb);
                                $img=$img_path.$hinh;
                                $linkhh="index.php?page=hanghoa&ma_hh=".$ma_hh;
                                echo'
                                <div class="card-mobile">
                                <div class="center-img">
                                <a href="'.$linkhh.'">
                                    <img src="'.$img.'" alt=""></a>
                                </div>
                                <div class="infor-card">
                                    <div class="name-card"><a href="'.$linkhh.'">'.$ten_hh.'</a></div>
                                    <div class="price-card"><a>Giá:'.$don_gia.'đ</a></div>
                                    <div class="gift-card"><a>Quà:'.$giam_gia.'đ</a></div>
                                <form action="index.php?page=addcart" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="hinh" value="'.$hinh.'">
                                <input type="hidden" name="ma_hh" value="'.$ma_hh.'">
                                <input type="hidden" name="ten_hh" value="'.$ten_hh.'">
                                <input type="hidden" name="don_gia" value="'.$don_gia.'">
                                <input type="number" name="so_luong" min="1" max="10" value="1">
                                <input type="submit" name="clickcart" value="Giỏ hàng">
                                </form>
                                </div>
                            </div>';
                            }
                        ?>
                    </div>
                </div>

                <!-- Laptop -->
                <div class="sub-hot-item">
                    <div class="title-hot-item">
                        <div class="title-left">
                            <h2>LAPTOP NỔI BẬT NHẤT</h2>
                        </div>
                        <div class="title-right">
                            <a href="http://">Macbook Air</a>
                            <a href="http://">Macbook Air</a>
                            <a href="http://">Macbook Air</a>
                        </div>
                    </div>
                    <div class="lap-content-body">
                        <?php
                            foreach($hh_lt as $lt){
                                extract($lt);
                                $img=$img_path.$hinh;
                                $linkhh="index.php?page=hanghoa&ma_hh=".$ma_hh;
                                echo'<div class="border content-item">
                                <a href="'.$linkhh.'">
                                <img class="img-item" src="'.$img.'" alt=""></a>
                                <div class="infor-content-item">
                                    <div class="name-item row-content">
                                        <a href="'.$linkhh.'">'.$ten_hh.'</a>
                                    </div>
                                    <div class="price-item row-content">
                                        <a href="#">Giá:'.$don_gia.'đ</a>
                                    </div>
                                    <div class="gift-item row-content">
                                        <a href="#">Quà:'.$giam_gia.'đ</a><br><br>
                                        <form action="index.php?page=addcart" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="hinh" value="'.$hinh.'">
                                        <input type="hidden" name="ma_hh" value="'.$ma_hh.'">
                                        <input type="hidden" name="ten_hh" value="'.$ten_hh.'">
                                        <input type="hidden" name="don_gia" value="'.$don_gia.'">
                                        <input type="number" name="so_luong" min="1" max="10" value="1">
                                        <input type="submit" name="clickcart" value="Giỏ hàng">
                                    </form>
                                    </div>
                                </div>
                            </div>';
                            }
                        ?>
                    </div>
                </div>

                <!-- Headphone -->
                <div class="sub-hot-item">
                    <div class="title-hot-item">
                        <div class="title-left">
                            <h2>PHỤ KIỆN NỔI BẬT NHẤT</h2>
                        </div>
                        <div class="title-right">
                            <a href="http://">Sạc dự phòng</a>
                            <a href="http://">Tai nghe</a>
                            <a href="http://">Ốp Lưng</a>
                        </div>
                    </div>
                    <div class="lap-content-body">
                    <?php
                            foreach($hh_pk as $pk){
                                extract($pk);
                                $img=$img_path.$hinh;
                                $linkhh="index.php?page=hanghoa&ma_hh=".$ma_hh;
                                echo'<div class="border content-item">
                                <a href="'.$linkhh.'">
                                <img class="img-item" src="'.$img.'" alt=""></a>
                                <div class="infor-content-item">
                                    <div class="name-item row-content">
                                        <a href="'.$linkhh.'">'.$ten_hh.'</a>
                                    </div>
                                    <div class="price-item row-content">
                                        <a href="#">Giá:'.$don_gia.'đ</a>
                                    </div>
                                    <div class="gift-item row-content">
                                        <a href="#">Quà:'.$giam_gia.'đ</a><br><br>
                                        <form action="index.php?page=addcart" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="hinh" value="'.$hinh.'">
                                        <input type="hidden" name="ma_hh" value="'.$ma_hh.'">
                                        <input type="hidden" name="ten_hh" value="'.$ten_hh.'">
                                        <input type="hidden" name="don_gia" value="'.$don_gia.'">
                                        <input type="number" name="so_luong" min="1" max="10" value="1">
                                        <input type="submit" name="clickcart" value="Giỏ hàng">
                                    </form>
                                    </div>
                                </div>
                            </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="../content-body-bot">

            <!-- News -->
            <div class="News-body">
                <div class="sub-body-news">
                    <div class="news-body-top">
                        <div class="title-news-top">
                            <h2>CHUYÊN TRANG THƯƠNG HIỆU</h2>
                        </div>
                        <div class="content-news">
                            <img src="Content/img/news.png" alt="">
                            <img src="Content/img/news1.png" alt="">
                            <img src="Content/img/news2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
