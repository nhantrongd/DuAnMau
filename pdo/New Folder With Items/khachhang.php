<?php //DAO cho bảng khachhang
function kh_selectall(){
    $sql="select * from khachhang";
    return pdo_query($sql);
}
function kh_insert($username){
    $sql="INSERT INTO 'khachhang' ('username') VALUES (?)";
    pdo_execute($sql,$username);
}
function kh_delete($ma_kh){
    $sql="DELETE FROM 'khachhang' WHERE 'ma_kh' = ?";
    pdo_execute($sql,$ma_kh);
}
function kh_getinfo($ma_kh){
    $sql="SELECT * FROM 'khachhang' WHERE 'ma_kh' = ?";
    return pdo_query_one($sql,$ma_kh);
}
function kh_update($ma_kh,$username){
    $sql="UPDATE 'khachhang' SET 'username' = ? WHERE 'ma_kh' = ?";
    pdo_execute($sql,$username,$ma_kh);
}
?>
