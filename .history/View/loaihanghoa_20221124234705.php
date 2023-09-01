

                <!-- Mobile -->
                <div class="sub-hot-item1">
                    <div class="title-hot-item">
                        <div class="title-left">
                            <h2><?=$tenloai?></h2>
                        </div>
                       
                    </div>
                    <div class="hot-item-mobile">
                        <?php
                            foreach ($loaihanghoa as $lhh){
                                extract($lhh);
                                // $hinh=$img_path.$hinh;
                                $linkhh="index.php?page=hanghoa&ma_hh=".$ma_hh;
                                echo'<div class="card-mobile">
                                <div class="center-img">
                                    <img src="'$img_path.$hinh'" alt="'.$linkhh.'">
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
            </div>