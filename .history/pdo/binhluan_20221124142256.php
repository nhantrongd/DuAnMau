<?php //DAO cho bảng bình luận
function bl_selectall($idproduct){

    $sql = "SELECT binhluan.ma_bl binhluan.noi_dung, binhluan.ma_kh, binhluan.ma_hh, binhluan.ngay_bl, khachhang.username FROM ((binhluan INNER JOIN hanghoa ON hanghoa.ma_hh = binhluan.ma_hh) INNER JOIN khachhang ON khachhang.ma_kh = binhluan.ma_kh) WHERE hanghoa.ma_hh = " . $idproduct;

    //$sql="SELECT * FROM binhluan WHERE ma_hh='".$idproduct."' ORDER BY ma_bl";
    $bl= pdo_query($sql);
    return $bl;
}
function dsbl_selectall(){
    $sql = "SELECT binhluan.ma_bl, hanghoa.ten_hh, binhluan.noi_dung, binhluan.ma_kh, binhluan.ma_hh, binhluan.ngay_bl, khachhang.username FROM ((binhluan INNER JOIN hanghoa ON hanghoa.ma_hh = binhluan.ma_hh) INNER JOIN khachhang ON khachhang.ma_kh = binhluan.ma_kh)";
    $bl= pdo_query($sql);
    return $bl;
}

function bl_insert($noi_dung,$ma_kh,$idproduct,$ngay_bl){
    $sql="INSERT INTO binhluan(noi_dung,ma_kh,ma_hh,ngay_bl) VALUES('$noi_dung','$ma_kh','$idproduct','$ngay_bl')";
    pdo_execute($sql);
}

function bl_delete($ma_bl){
    $sql="DELETE FROM binhluan WHERE ma_bl=".$ma_bl;
    pdo_execute($sql);
}


// function username_bl($idproduct){
//     $sql= "SELECT  khachhang.username FROM ((binhluan
//     INNER JOIN hanghoa ON hanghoa.ma_hh = binhluan.ma_hh)
//     INNER JOIN khachhang ON khachhang.ma_kh = binhluan.ma_kh) WHERE binhluan.ma_hh=".$idproduct;

//     $kh=pdo_query($sql);
//     return $kh;
// }
?>