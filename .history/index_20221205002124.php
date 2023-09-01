<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<?php
$page = '';
if(isset($_GET['page'])==true) $page =$_GET['page']; 
?>

<?php 
 	ob_start();
	session_start();
    include "pdo/pdo.php";
    include "pdo/loai.php";
    include "pdo/hanghoa.php";
	include "global.php";
	include "pdo/khachhang.php";
	include "pdo/bil.php";
	$loai_ds=loai_selectall();
	$hh_new=hh_selectall_home(); 
	$hh_yt=hh_selectall_favorite();
	$hh_mb=hh_selectall_mb();
	$hh_lt=hh_selectall_lt();
	$hh_pk=hh_selectall_pk();
	if(!isset($_SESSION['cart']))$_SESSION['cart']=array();
?>
    	<!-- ~~~=| Header START |=~~~ -->
	<?php include "Guest/header.php"; ?>
	<!-- ~~~=| Header END |=~~~ -->
	
	
	<!-- ~~~=| Banner START |=~~~ -->
    <?php if($page=="")include "Guest/body.php"; ?>

	<!-- ~~~=| Banner END |=~~~ -->
	<section class="main_news_wrapper">
		<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7 col-xs-12">
			<div class="fashion_area">
				<?php
				switch ($page){
				case "login": 
					if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
						$username=$_POST['username'];
						$mat_khau=$_POST['mat_khau'];
						$checktk=kh_getinfo_check($username);
						if(is_array ($checktk)){
							if ($checktk['mat_khau']==$mat_khau) {
								$_SESSION['tk']=$checktk;
								header('Location: index.php');
							}else{
								$thongbao="Sai mật khẩu ";
							}
							// $thongbao="Đăng nhập thành công";
						}else{
							$thongbao="Chưa có tài khoản";
						}
					}
					include "Guest/dangnhap.php";
				break;

				case "dangky": 
					if(isset($_POST['dangky'])&&($_POST['dangky'])){
						$username=$_POST['username'];
						$mat_khau=$_POST['mat_khau'];
						$email=$_POST['email'];
						$dia_chi=$_POST['dia_chi'];
						$vai_tro=$_POST['vai_tro'];
						kh_insert($username,$mat_khau,$email,$dia_chi,$vai_tro);
						$thongbao="Đăng ký thành công";
					}
					include "Guest/dangky.php";
				break;

				case "quenmk": 
					if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
						$username=$_POST['username'];
						$email=$_POST['email'];
						$checkmk=kh_getinfo_checkmk($username,$email);
						if(is_array($checkmk)){
						$thongbao="Mật khẩu của bạn là: ".$checkmk['mat_khau'];
						}else{
						$thongbao="Email không tồn tại";
						}
					}
					include "Guest/forgot_password.php";
				break;

				case "doimk": include "Guest/doimk.php";
				break;
				case "capnhattk": 
					if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
						$username=$_POST['username'];
						$mat_khau=$_POST['mat_khau'];
						$email=$_POST['email'];
						$ma_kh=$_POST['ma_kh'];
						kh_update($username,$mat_khau,$email,$ma_kh);
						$_SESSION['tk']=kh_getinfo_check($username,$mat_khau);
						header('Location: index.php?page=capnhattk');
					}
					include "Guest/capnhattk.php";
				break;

				case "addcart":
					if(isset($_POST['delcart'])&&($_POST['delcart'])) unset($_SESSION['cart']);
					if(isset($_POST['clickcart'])&&($_POST['clickcart'])){
						$ma_hh=$_POST['ma_hh'];
						$ten_hh=$_POST['ten_hh'];
						$hinh=$_POST['hinh'];
						$gia_hh=$_POST['don_gia'];
						$soluong=$_POST['so_luong'];
						if ($soluong<1) {
							$soluong=1;
						}
						$ttien=$soluong*$gia_hh;
						//Kiểm tra sản phẩm trong giỏ hàng

						$fl=0; //Kiểm tra sản phẩm có trùng không
						for($i=0; $i < sizeof($_SESSION['cart']); $i++){
							if($_SESSION['cart'][$i][0]==$ma_hh){
							$fl=1;
							 $newsl=$soluong+$_SESSION['cart'][$i][4];
							 $_SESSION['cart'][$i][4]=$newsl;
							 break;
							}
						}
						//Nếu không trùng thì thêm mới  
						if($fl==0){
						//Thêm mới sản phẩm
						$addhh=[$ma_hh,$ten_hh,$hinh,$gia_hh,$soluong,$ttien];
						array_push($_SESSION['cart'],$addhh);
						}

					}
					include "View/addcart.php";
					break;

				case "delcart":
					if(isset($_GET['idcart'])) {
					array_splice($_SESSION['cart'],$_GET['idcart'],1);
					}
					else{
						$_SESSION['cart']=array();
					}
					header('Location: index.php?page=addcart');
					break;

				case "bilcart":
					if(isset($_POST['dat_hang'])&&($_POST['dat_hang'])) {
					$username=$_POST['username'];
					$ma_kh = $_SESSION['tk']['ma_kh'];
					$email=$_POST['email'];
					$dia_chi=$_POST['dia_chi'];
					$tel=$_POST['tel'];
					$tt=$_POST['thanh_toan'];
					// $totalbil=tong_bil();
					if(isset($_POST['cart_selected'])){
						$product_row = $_POST['cart_selected'];
						bil_insert($ma_kh,$username,$email,$dia_chi,$tel,$tt);
						$cart_row = $_SESSION['cart'];
						$bill = bill_selectOne();
						$id_bill = $bill['ma_bil'];
						foreach($product_row as $product){
							orderBill_insert($id_bill,$cart_row[$product][0],$cart_row[$product][4],$cart_row[$product][3]);
						}
						include "View/bilcart.php";
						break;
					}else{
						$tb = "Hãy chọn hàng hóa";
					}
					//insert đơn hàng
					
					}
					include "View/addcart.php";
					break;
	
				case "hanghoa":
					if(isset($_GET['ma_hh'])&&($_GET['ma_hh'])>0){
					$ma_hh=$_GET['ma_hh'];
					$cthh=hh_getinfo($ma_hh);
					extract($cthh);
					$clhh=hh_getinfo_cl($ma_hh,$ma_loai);
					include "View/chitiethh.php";
					break;
					}
					else{
					include "index.php";
					}

				case "loaihanghoa":
					if(isset($_POST['key'])&&($_POST['key'])!=""){
						$key=$_POST['key'];
					}
					else{
						$key="";
					}
					if(isset($_GET['ma_loai'])&&($_GET['ma_loai'])>0){
					$ma_loai=$_GET['ma_loai'];
					}
					else{
						$ma_loai=0;
					}
					$loaihanghoa=hh_selectall($key,$ma_loai);
					$tenloai=hh_getinfo_nameloai($ma_loai);
					include "View/loaihanghoa.php";
					break;
				case "dathang": 
					if (!isset($_SESSION['tk'])) {
						$tb="chưa đăng nhập";
						include "View/addcart.php";
						break;
					}	
				case "donhang":
					$tcdonhang = orderBill_selectAllByIdUser()
					include "View/donhang.php";
					break;
				case "gioithieu": 	
				include "View/gioithieu.php"; break;
				case "lienhe": 	
					include "View/lienhe.php"; break;
				case "gopy": 	
					include "View/gopy.php"; break;
				case "hoidap": 	
					include "View/hoidap.php"; break;

				case "thoat": 
				header('Location: index.php');	
				include "Guest/thoat.php"; break;

				// case "loai": include "tintrongloai.php"; break;
				// case "gioithieu": include "gioithieu.php"; break;
				// case "tin": include "chitiettin.php"; break;
				// case "search": include 'Timkiem.php'; break;
				// case "quantri": include 'quantri.php'; break;
				break;
				}
				?>
			</div>
		</div>
        </div>
        </div>
	</section>
	
	
	<!-- ~~~=| Footer START |=~~~ -->
	<?php include "Guest/footer.php";?>
</body>
</html>