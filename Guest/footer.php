<!-- Footer -->
<div class="footer">
            <div class="subfooter">
                <div class="footer-contet-top">
                    <div class="footer-sub-content row-footer">
                        <div><a href="">Cộng tác bán hàng cùng TGDĐ</a></div>
                        <div><a href="">Lịch sử mua hàng</a></div>
                        <div><a href="">Tìm hiểu mua trả góp</a></div>
                        <div><a href="">Chính sách bảo mật</a></div>
                        <div><a href="">Xem thêm</a></div>
                    </div>
                    <div class="footer-infor row-footer">
                        <div><a href="#">Tuyển dụng</a></div>
                        <div><a href="#">Gửi góp ý, khiếu nại</a></div>
                        <div><a href="#">GTìm siêu thị (2.729 shop)</a></div>
                        <div><a href="#">Xem bản mobile</a></div>
                        <div><a href="#">Giới thiệu công ty TGDĐ</a></div>
                    </div>
                    <div class="footer-hotline row-footer">
                    <div><a href="#">Tổng đài hỗ trợ (Miễn phí gọi)</a></div>
                    <div><a href="#">Gọi mua: 1800.1060 </a></div>
                    <div><a href="#">Kỹ thuật: 1800.1763 </a></div>
                    <div><a href="#">Khiếu nại: 1800.1062 </a></div>
                    <div><a href="#">Bảo hành: 1800.1064 </a></div>
                    </div>
                    <div class="footer-link row-footer">
                        <div><a href="#"><i class="fab fa-facebook">3678k Fan</i></a></div>
                        <div><a href="#"><i class="fab fa-facebook">3678k Fan</i></a></div>
                        <div><a href="#"><i class="fab fa-facebook">3678k Fan</i></a></div>
                        <div><a href="#"><i class="fab fa-facebook">3678k Fan</i></a></div>
                        <div><a href="#"><i class="fab fa-facebook">3678k Fan</i></a></div>
                    </div>
                </div>
                <div class="footer-content-bot"><a>© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
                Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Xem chính sách sử dụng</a>
                </div>
            </div>
        </div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <!-- slideshow header-->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";

        }
    </script>
    <!-- slideshow-content -->
    <script>
        $('.slideshow-content-body').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            focusOnSelect: true
        });
    </script>
    <script>
        $('.lap-content-body').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            focusOnSelect: true
        });
    </script>
    <!-- slideshow-item -->
    <script>
        $(document).ready(function() {
            $('.click-tab').slick({});
            $('.click-content').slick({});
        });

        $('.click-content').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.click-tab',
            infinite: false
        });
        $('.click-tab').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.click-content',
            focusOnSelect: true,
            infinite: false
                // centerMode: true
        });
    </script>
</body>
</html>