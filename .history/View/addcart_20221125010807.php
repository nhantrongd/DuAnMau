<?php 
if (isset($tb)) {
    echo $tb;
}
function tong_bil(){
 $tong=0;
 foreach($_SESSION['cart'] as $cartinfor){
     $totalprice=$cartinfor[3]*$cartinfor[4];
     $tong+=$totalprice;
    }
    return $tong;
  }
?>
<form action="index.php?page=bilcart" method="post">
    <div class="left-view-box">
        <div class="left-view">
        <h3>Thông tin giỏ hàng</h3>
        <table>
            <thead>
                    <tr>
                        <th></th>
                        <th scope="col">Tên HH</th>
                        <th scope="col">Hình</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col"></th>
                    </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_SESSION['cart'])!=""){
                $tong=0;
                $i=0;
                foreach($_SESSION['cart'] as $cartinfor){
                    $hinh=$img_path.$cartinfor[2];
                    $totalprice=$cartinfor[3]*$cartinfor[4];
                    $tong+=$totalprice;
                    echo'
                    <tr class="cart_row">
                    <td>
                        <input class="cart_checkbox" type="checkbox" id="checkbox" name="all" value="0"></input>
                    </td>
                        <td>'.$cartinfor[1].'</td>
                        <td><img height="50px" src="'.$hinh.'"></td>
                        <td>'.$cartinfor[3].'</td>
                        <td>'.$cartinfor[4].'</td>
                        <td>'.$totalprice.'</td>
                        <td><a href="index.php?page=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    $i+=1;
                }
                echo' <tr>
                <td colspan="5">Tổng đơn hàng</td>
                <td colspan="2">'.$tong.'</td>
                </tr>';}
                ?>
            </tbody>
        </table>
    </div>
    <div class="left-view" id="binhluan">
    
    </div>
        <div class="left-view">
            <h3>Thông tin khách hàng</h3>
            <div class="form-container">
                <div class="form-group">
                
                    <label for="ten">Tên truy cập: </label> <br>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ten">Địa chỉ: </label> <br>
                    <input type="text" name="dia_chi" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ten">Điện thoại: </label> <br>
                    <input type="text" name="tel" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ten">Email </label> <br>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group1">
                    <label for="gender">Vai trò: </label> <br>
                     <input type="radio" name="thanh_toan"  value=1> <label>Admin</label>
                     <input type="radio" name="thanh_toan"  value=0 checked> <label>Guest</label>
                </div>
            </div>
        </div>
        <div class="btn-group">
                   <input type="submit" class="form-button" name="dat_hang" value="Đặt hàng">
</form>
                   <form action="index.php?page=addcart" method="post">
                   <input type="submit" class="form-button" name="delcart" value="Xóa giỏ hàng"></a>
                   <a href="index.php"><input type="button" class="form-button" value="Tiếp tục đặt hàng"></a>
                   </form>
                </div>
        </div>
     <?php
       include "right.php";
     ?>
<script>
    var cart_checkboxs = document.querySelectorAll(".cart_checkbox");
    var index = 0;
    cart_checkboxs.forEach(cart_checkbox => {
        cart_checkbox.addEventListener(
            "click",
            function (event){
                if(event.target.checked == true){
                    let cart_row = event.target.parentElement.parentElement;
                    console.log(cart_row);
                    let ipt_request = document.createElement("input");
                    ipt_request.setAttribute("name","cart_selected");
                    ipt_request.setAttribute("type","hidden");
                    ipt_request.setAttribute("value",index)
                    cart_row.appendChild(ipt_request);
                    index++;
                }
            }
        )
    });
</script>