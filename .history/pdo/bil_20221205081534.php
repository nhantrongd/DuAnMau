<?php
function bil_insert($ma_kh,$username,$email,$dia_chi,$tel,$tt){
    $sql="INSERT INTO `bil` (`ma_bil`, `ma_kh`, `username`, `email`, `dia_chi`, `tel`, `thanh_toan`) VALUES(null,'$ma_kh','$username','$email','$dia_chi','$tel','$tt')";
    pdo_execute($sql);
}
function bill_selectOne(){
    $sql = "SELECT * FROM bil ORDER BY ma_bil DESC LIMIT 1";
    return pdo_query_one($sql);
}
function orderBill_insert($ma_bil,$ma_hh,$so_luong,$don_gia){
    $sql = "INSERT INTO order_detail(ma_bil,ma_hh,so_luong,don_gia) VALUES ('$ma_bil','$ma_hh','$so_luong','$don_gia')";
    pdo_execute($sql);
}
function orderBill_selectAllByIdUser($ma_kh){
    $sql = "SELECT * FROM bil WHERE ma_kh = $ma_kh";
    return pdo_query($sql);
}
function orderBill_selectAllByIdBill($ma_bil){
    $sql = "SELECT * FROM order_detail WHERE ma_bil = $ma_bil";
    return pdo_query($sql);
}
function bill_cancel($)
?>