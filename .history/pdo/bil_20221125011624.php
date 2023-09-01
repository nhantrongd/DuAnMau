<?php
function bil_insert($username,$email,$dia_chi,$tel,$tt){
    $sql="INSERT INTO bil(username,email,dia_chi,tel,thanh_toan) VALUES('$username','$email','$dia_chi','$tel','$tt')";
    pdo_execute($sql);
}
function bill_selectOne(){
    $sql = "SELECT "
}
?>