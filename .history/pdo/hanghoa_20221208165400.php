<?php //DAO cho bảng loai
function hh_selectall($kw,$ma_loai){
    $sql="SELECT * FROM hanghoa WHERE 1";
    if($kw!=""){
        $sql.=" and ten_hh like '%".$kw."%'";
    }
    if($ma_loai>0){
        $sql.=" and ma_loai = '".$ma_loai."'";
    }
    $sql.=" ORDER BY ma_hh DESC";
    $hh=pdo_query($sql);
    return $hh;
}

function hh_insert($tenhh,$giahh,$giamhh,$hinh,$mota,$viewhh,$ma_loai){
    $sql="INSERT INTO hanghoa(ten_hh,don_gia,giam_gia,hinh,mo_ta,so_luot_xem,ma_loai) VALUES('$tenhh','$giahh','$giamhh','$hinh','$mota','$viewhh','$ma_loai')";
    pdo_execute($sql);
}

function hh_delete($ma_hh){
    $sql="DELETE FROM hanghoa WHERE ma_hh=".$ma_hh;
    pdo_execute($sql);
}

function hh_getinfo($ma_hh){
    $sql="SELECT * FROM hanghoa WHERE ma_hh=".$ma_hh;
    $hh=pdo_query_one($sql);
    return $hh;
}

function hh_update($mahh,$tenhh,$giahh,$giamhh,$hinh,$mota,$viewhh,$ma_loai){
    if($hinh!="")
    $sql="UPDATE hanghoa SET ten_hh='".$tenhh."', don_gia='".$giahh."', giam_gia='".$giamhh."', hinh='".$hinh."', mo_ta='".$mota."', so_luot_xem='".$viewhh."', ma_loai='".$ma_loai."' WHERE ma_hh=".$mahh;
    else
    $sql="UPDATE hanghoa SET ten_hh='".$tenhh."', don_gia='".$giahh."', giam_gia='".$giamhh."', mo_ta='".$mota."', so_luot_xem='".$viewhh."', ma_loai='".$ma_loai."' WHERE ma_hh=".$mahh;
    pdo_execute($sql);
}
?>

<!-- Trang chủ  -->
<?php 
function hh_selectall_home(){
    $sql="SELECT * FROM hanghoa WHERE 1 ORDER BY giam_gia DESC LIMIT 0,10";
    $hh=pdo_query($sql);
    return $hh;
}

function hh_selectall_favorite(){
    $sql="SELECT * FROM hanghoa WHERE 1 ORDER BY so_luot_xem DESC LIMIT 0,10";
    $hh=pdo_query($sql);
    return $hh;
}

function hh_selectall_mb(){
    $sql="SELECT * FROM hanghoa WHERE ma_loai=1 ORDER BY ma_hh DESC LIMIT 0,10";
    $hh=pdo_query($sql);
    return $hh;
}

function hh_selectall_lt(){
    $sql="SELECT * FROM hanghoa WHERE ma_loai=2 ORDER BY ma_hh DESC LIMIT 0,10";
    $hh=pdo_query($sql);
    return $hh;
}

function hh_selectall_pk(){
    $sql="SELECT * FROM hanghoa WHERE ma_loai=4 ORDER BY ma_hh DESC LIMIT 0,10";
    $hh=pdo_query($sql);
    return $hh;
}

function hh_getinfo_cl($ma_hh,$ma_loai){
    $sql="SELECT * FROM hanghoa WHERE ma_loai=".$ma_loai." AND ma_hh<>".$ma_hh;
    $hh=pdo_query($sql);
    return $hh;
}

function hh_getinfo_nameloai($ma_loai){
    if($ma_loai>0){
    $sql="SELECT * FROM loai WHERE ma_loai=".$ma_loai;
    $hh=pdo_query_one($sql);
    extract($hh);
    return $ten_loai;
    }
    else{
        return "";
    }
}
function hh_selectAllById($ma_hh){
    $sql = "SELECT * FROM hanghoa WHERE "
}
?>
