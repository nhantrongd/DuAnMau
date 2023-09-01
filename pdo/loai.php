<?php //DAO cho bảng loai
function loai_selectall(){
    $sql="SELECT * FROM loai ORDER BY ma_loai";
    $loai= pdo_query($sql);
    return $loai;
}

function loai_insert($tenloai){
    $sql="INSERT INTO loai(ten_loai) VALUES('$tenloai')";
    pdo_execute($sql);
}

function loai_delete($ma_loai){
    $sql="DELETE FROM loai WHERE ma_loai=".$ma_loai;
    pdo_execute($sql);
}

function loai_getinfo($ma_loai){
    $sql="SELECT * FROM loai WHERE ma_loai=".$ma_loai;
    $fixloai=pdo_query_one($sql);
    return $fixloai;
}

function loai_update($ma_loai,$ten_loai){
    $sql="UPDATE loai SET ten_loai='".$ten_loai."' WHERE ma_loai=".$ma_loai;
    pdo_execute($sql);
}
?>
