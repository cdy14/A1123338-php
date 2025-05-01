<?php
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    '0425hw'
);
$uName = $_GET["uName"];
mysqli_set_charset($link, "utf8");

$no;
$uEmail;
$uPhoto;

$sql = "SELECT * FROM user WHERE Name='$uName'";
if ($result = mysqli_query($link, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $no = $row["no"];
        $uEmail = $row["email"];
        $uPhoto = $row["photo"];
    }
}
echo "姓名: $uName<br>";
echo "信箱: $uEmail<br>";
echo "照片連結: $uPhoto<br>";
echo "<img src='$uPhoto' alt='photo' style='width:80%'><br>";
echo "<br>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'candychen911@gmail.com';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('candychen911@gmail.com', 'Mailer');
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress($uEmail);               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $subject="恭喜註冊網站";
    $mail->CharSet = "UTF-8";
    $mail->Subject = $subject;
    $mail->Body    = "
    恭喜註冊成功<br>
    Name: ".$uName."<br>
    這是你的照片<br>
    <img src='$uPhoto' alt='photo' style='width:80%'><br>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>