<?php 
    $ROOT_URL = "/Duanmau";
    $CONTENT_URL = "$ROOT_URL/Content";
    $ADMIN_URL = "$ROOT_URL/Admin";
    $Guest = "$ROOT_URL/Guest";
    $img_path="uploads/";

?>
<?php/*
* Tạo mã xác nhận ngẫu nhiên và gửi mã về email đầu vào
*/
            function sendEmail($emailAddress)
            {
                $CONTENT_URL = $GLOBALS['CONTENT_URL'];
                $code = rand(1000, 10000);
                $mail__content = file_get_contents("$CONTENT_URL/doc/send-mail.txt");
                $mail__content = str_replace('{code}', $code, $mail__content);
                require "$CONTENT_URL/PHPMailer/src/Exception.php";
                require "$CONTENT_URL/PHPMailer/src/SMTP.php";
                require "$CONTENT_URL/PHPMailer/src/PHPMailer.php";
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
                    $mail->Username = "leminhchien2611@gmail.com";
                    $mail->Password = "qrqlcdfwmguahvzy";
                    $mail->SetFrom("reachy432@gmail.com");
                    $mail->Subject = "Electech xác nhận email của bạn: "; //Tiêu đề
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




?>