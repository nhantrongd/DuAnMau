<?php
function bil_insert($username,$email,$dia_chi,$tel,$tt){
    $sql="INSERT INTO bil(username,email,dia_chi,tel,thanh_toan,ma_hh) VALUES('$username','$email','$dia_chi','$tel','$tt','$ma_hh')";
    pdo_execute($sql);
}

?>