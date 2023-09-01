<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="row-right-content">
                <div class="news-body-right">
                    <div class="title-news-right">
                        <h2>Top yêu thích</h2>
                    </div>
                    <div class="content-news-right">
                        <?php 
                            foreach($hh_yt as $hh){
                                extract($hh);
                                $linkhh="index.php?page=hanghoa&ma_hh=".$ma_hh;
                                $hinh=$img_path.$hinh;
                                echo '<div class="box-product-box">
                                <img src="'.$hinh.'" alt="">
                                <div class="infor-product">
                                    <div class="name-product">
                                        <a href="'.$linkhh.'">'.$ten_hh.'</a>
                                    </div>
                                    <div class="sale-product">
                                        <div class="price-product">
                                            <a href="#">Giá:'.number_format($don_gia).'đ</a>
                                        </div>
                                        <div class="button-product">
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
                                </div>
                                </div>';
                            }
                        ?>
                    </div>
                </div>
    </div>
    <div class="sub-body-news">
                    <div class="news-body-left">
                        <div class="title-news-left">
                            <h2>CHUYÊN TRANG THƯƠNG HIỆU</h2>
                        </div>
                        <div class="content-news">
                            <img src="Content/img/news.png" alt="">
                            <img src="Content/img/news1.png" alt="">
                            <img src="Content/img/news2.png" alt="">
                        </div>
                    </div>
                </div>
</body>
</html>