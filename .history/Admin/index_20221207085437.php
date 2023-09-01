<?php session_start(); ?>
<?php if(isset($_SESSION['tk']) && $_SESSION['tk']['vai_tro']==1 ){ ?>
    
    <?php 
        include "../pdo/pdo.php";
        include "../pdo/loai.php";
        include "../pdo/hanghoa.php";
        include "../pdo/khachhang.php";
        include "../pdo/binhluan.php";
    ?>
    <?php
        include "header.php";
        $page = '';
        if(isset($_GET['page'])==true){ 
            $page =$_GET['page']; 
                    switch ($page){
                // Loại
                    case "lh": 
                        if(isset($_POST['them_moi'])&&($_POST['them_moi'])){
                        $tenloai=$_POST['ten_loai'];
                        loai_insert($tenloai);
                        $thongbao="Thêm thành công";
                        } 
                    include "loai/qlloaihang.php";break;

                    case "dslh":
                        $loai=loai_selectall();
                        include "loai/dsloaihang.php";break;

                    case "delloai":
                        if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){
                        loai_delete($_GET['ma_loai']);
                        }
                        $loai=loai_selectall();
                        include "loai/dsloaihang.php";break;

                    case "fixloai":
                        if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){
                        $fixloai=loai_getinfo($_GET['ma_loai']);
                        }
                        include "loai/fixloaihang.php";break;

                    case "updateloai":
                        if(isset($_POST['cap_nhat'])&&($_POST['cap_nhat'])){
                        $ten_loai=$_POST['ten_loai'];
                        $ma_loai=$_POST['ma_loai'];
                        loai_update($ma_loai,$ten_loai);
                        $thongbao="Cập nhật thành công";
                        } 
                        $loai=loai_selectall();
                        include "loai/dsloaihang.php";break;
                
                // Hàng hóa
                    case "hh": 
                        if(isset($_POST['them_moi'])&&($_POST['them_moi'])){
                        $tenhh=$_POST['ten_hh'];
                        $giahh=$_POST['don_gia'];
                        $giamhh=$_POST['giam_gia'];  
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                            echo "";
                        }
                        $mota=$_POST['mo_ta'];
                        $viewhh=$_POST['so_luot_xem'];
                        $ma_loai=$_POST['ma_loai'];
                        hh_insert($tenhh,$giahh,$giamhh,$hinh,$mota,$viewhh,$ma_loai);
                        $thongbao="Hàng hóa đã được thêm";
                        } 
                        $loai=loai_selectall();
                    include "hanghoa/qlhanghoa.php";break;

                    case "dshh":
                        if(isset($_POST['chon'])&&($_POST['chon'])){
                            $kw=$_POST['kw'];
                            $ma_loai=$_POST['ma_loai'];
                        }else{
                            $kw="";
                            $ma_loai=0;
                        }
                        $loai=loai_selectall();
                        $hanghoa=hh_selectall($kw,$ma_loai);
                        include "hanghoa/dshanghoa.php";break;

                    case "delhh":
                        if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){
                        hh_delete($_GET['ma_hh']);
                        }
                        $hanghoa=hh_selectall("",0);
                        include "hanghoa/dshanghoa.php";break;

                    case "fixhh":
                        if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){
                        $fixhh=hh_getinfo($_GET['ma_hh']);
                        }
                        $loai=loai_selectall();
                        include "hanghoa/fixhanghoa.php";break;

                    case "updatehh":
                        if(isset($_POST['cap_nhat'])&&($_POST['cap_nhat'])){
                        $mahh=$_POST['ma_hh'];
                        $tenhh=$_POST['ten_hh'];
                        $giahh=$_POST['don_gia'];
                        $giamhh=$_POST['giam_gia'];  
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {

                        } else {

                        }
                        $mota=$_POST['mo_ta'];
                        $viewhh=$_POST['so_luot_xem'];
                        $ma_loai=$_POST['ma_loai'];
                        hh_update($mahh,$tenhh,$giahh,$giamhh,$hinh,$mota,$viewhh,$ma_loai);
                        $thongbao="Cập nhật thành công";
                        } 
                        $hanghoa=hh_selectall("",0);
                        include "hanghoa/dshanghoa.php";break;

                // Khách hàng
                    case "dskh":
                        $khachhang=kh_selectall();
                        include "khachhang/dskhachang.php";break;

                    case "delkh":
                        if(isset($_GET['ma_kh'])&&($_GET['ma_kh'])){
                        kh_delete($_GET['ma_kh']);
                        }
                        $khachhang=kh_selectall();
                        include "khachhang/dskhachang.php";break;

                    case "fixkh":
                        if(isset($_GET['ma_kh'])&&($_GET['ma_kh']>0)){
                        $fixkh=kh_getinfo($_GET['ma_kh']);
                        }
                        include "khachhang/fixkhachhang.php";break;

                    case "updatekh":
                        if(isset($_POST['cap_nhat'])&&($_POST['cap_nhat'])){
                        $username=$_POST['username'];
                        $email=$_POST['email'];
                        $mat_khau=$_POST['mat_khau'];
                        $ma_kh=$_POST['ma_kh'];
                        kh_update($username,$mat_khau,$email,$ma_kh);
                        $thongbao="Cập nhật thành công";
                        } 
                        $khachhang=kh_selectall();
                        include "khachhang/dskhachang.php";break;
                
                //Bình luận
                    case "bl": 
                        $dsbl=dsbl_selectall();
                    include "binhluan/ctbinhluan.php";break;
                    case "delbl":
                        if(isset($_GET['ma_bl'])&&($_GET['ma_bl']>0)){
                        bl_delete($_GET['ma_bl']);
                        }
                        $dsbl=dsbl_selectall();
                        include "binhluan/ctbinhluan.php";break;

                    case "tk": 
                    include "hanghoa/tkhanghoa.php";break;
                    default: include "body.php";
                    break;
                    case "thoat": 
                        // header('Location: ../index.php');	
                        include "../Guest/thoat.php"; break;
                    }
                //Hóa đơn
                    case "hoadon":
                        
                }
        if($page=="")require_once "body.php";
        include "footer.php";
    ?>
<?php }else{ header("location:../index.php"); }?>
