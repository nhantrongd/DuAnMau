<?php 
    $ROOT_URL = "/Duanmau2.1";
    $CONTENT_URL = "$ROOT_URL/Content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $Guest = "$ROOT_URL/Guest";
    $img_path="uploads/";

?>

<?php
/*
* Tạo mã xác nhận ngẫu nhiên và gửi mã về email đầu vào
*/
            function sendEmail($emailAddress)
            {
                $CONTENT_URL = $GLOBALS['CONTENT_URL'];
                $code = rand(1000, 10000);
                $mail__content = file_get_contents("$CONTENT_URL/doc/send-mail.txt");
                $mail__content = str_replace('{code}', $code, $mail__content);
                require "PHPMailer-master/src/Exception.php";
                require "PHPMailer-master/src/SMTP.php";
                require "PHPMailer-master/src/PHPMailer.php";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                try {
                    $mail->IsSMTP(); // enable SMTP
                    // $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
                    $mail->CharSet = "utf-8";
                    $mail->SMTPAuth = true; // authentication enabled
                    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                    $mail->Host = "smtp.gmail.com";
                    $mail->Port = 465; // or 587
                    $mail->IsHTML(true);
                    $mail->Username = "chienmummim@gmail.com";
                    $mail->Password = "flyswlxqdkeszpyy";
                    $mail->SetFrom("chienmummim2611@gmail.com");
                    $mail->Subject = "Thế giới di động xác nhận email của bạn: "; //Tiêu đề
                    $mail->Body =  $mail__content;
                    $mail->AddAddress("$emailAddress");
                    $mail->Send();
                    return $code;
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
            function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}
/**
 * Tạo session
 */
function add_session($name, $value)
{
    $_SESSION[$name] = $value;
}
/**
* Xuất đường dẫn hiện tại
* @return string Đường dẫn website hiện tại
*/
function getCurrentUrl(){
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
    else  
        $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   

    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
    
    return $url;  
}

function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/* Xóa cookie, $name là tên cookie muốn xóa
        */
function delete_cookie($name)
{
    add_cookie($name, "", -1);
}
/* Đọc giá trị cookie
        * $name là tên cookie, trả vể giá trị của cookie
        */
function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}

?>