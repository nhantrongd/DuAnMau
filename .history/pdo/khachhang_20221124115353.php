<?php //DAO cho bảng khách hàng
function kh_selectall(){
    $sql="SELECT * FROM khachhang ORDER BY ma_kh";
    $kh= pdo_query($sql);
    return $kh;
}
/**
 * Kiểm tra sự tồn tại của email đầu vào
 * @param string $user_email Địa chỉ email kiểm tra
 * @return Bool True = đã tồn tại, False = không tồn tại
 */

function user_checkExistEmail($user_email)
{
    $sql = "SELECT * FROM khachhang WHERE email=?";
    return pdo_query_one($sql, $user_email);
}

function kh_insert($username,$mat_khau,$email,$dia_chi,$vai_tro){
    $sql="INSERT INTO khachhang(username,mat_khau,email,dia_chi,vai_tro) VALUES('$username','$mat_khau','$email','$dia_chi','$vai_tro')";
    pdo_execute($sql);
}

function kh_getinfo_check($username){
    $sql="SELECT * FROM khachhang WHERE username='".$username."'";
    $kh=pdo_query_one($sql);
    return $kh;
}

function kh_getinfo_checkmk($username,$email){
    $sql="SELECT * FROM khachhang WHERE username='".$username."' AND email='".$email."'";
    $kh=pdo_query_one($sql);
    return $kh;
}

function kh_update($username,$mat_khau,$email,$ma_kh){
    $sql="UPDATE khachhang SET  username='".$username."',mat_khau='".$mat_khau."', email='".$email."' WHERE ma_kh=".$ma_kh;
    pdo_execute($sql);
}

function kh_delete($ma_kh){
    $sql="DELETE FROM khachhang WHERE ma_kh=".$ma_kh;
    pdo_execute($sql);
}

function kh_getinfo($ma_kh){
    $sql="SELECT * FROM khachhang WHERE ma_kh=".$ma_kh;
    $fixloai=pdo_query_one($sql);
    return $fixloai;
}
?>