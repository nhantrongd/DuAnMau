<?php
function bil_insert($username,$email,$dia_chi,$tel,$tt){
    $sql="INSERT INTO bil(username,email,dia_chi,tel,thanh_toan) VALUES('$username','$email','$dia_chi','$tel','$tt')";
    pdo_execute($sql);
}
function bill_selectOne(){
    $sql = "SELECT * FROM bil ORDER BY ma_bil DESC LIMIT 1";
    return pdo_query_one($sql);
}
function orderBill_insert($ma_bill,$ma_hh,$so_luong,$don_gia){
    $sql = "INSERT INTO order_detail(ma_bil,ma_hh,so_luong,don_gia) VALUES ('$ma_bil','$ma_hh','$so_luong','$don_gia')";
    pdo_execute($sql);
}
?>