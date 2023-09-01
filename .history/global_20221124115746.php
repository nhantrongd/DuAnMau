<?php 
    $ROOT_URL = "/Duanmau";
    $CONTENT_URL = "$ROOT_URL/Content";
    $ADMIN_URL = "$ROOT_URL/Admin";
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
                    $mail->Username = "reachy432@gmail.com";
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
/**
 * Tạo session
 */
function add_session($name, $value)
{
    $_SESSION[$name] = $value;
}

/**
 * Đăng nhập
 * @param string $user_email Địa chỉ email
 * @param string $password Mật khẩu
 * @return bool True = Đăng nhập thành công, False = Đăng nhập thất bại
 */
function user_signIn($user_email, $password)
{
    $sql = "SELECT * FROM user WHERE email=? AND password =?";
    if (pdo_query_one($sql, $user_email, $password)) {
        $acc = pdo_query_one($sql, $user_email, $password);
        extract($acc);
        add_session("login", $id_user);
        if (isset($_POST['remember'])) {
            add_cookie("username", $email, 7);
            add_cookie("password", $password, 7);
        } else {
            delete_cookie("username");
            delete_cookie("password");
        }
        return true;
    } else {
        return false;
    }
}

?>