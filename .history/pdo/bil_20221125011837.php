<?php
function bil_insert($username,$email,$dia_chi,$tel,$tt){
    $sql="INSERT INTO bil(username,email,dia_chi,tel,thanh_toan) VALUES('$username','$email','$dia_chi','$tel','$tt')";
    pdo_execute($sql);
}
function bill_selectOne(){
    $sql = "SELECT * FROM bill ORDER BY ma_bill DESC LIMIT 1";
    return pdo_query_one($sql);
}
function order
?>