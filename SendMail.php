<?php
    include "PHPMailer-master/src/PHPMailer.php";
    include "PHPMailer-master/src/Exception.php";
    include "PHPMailer-master/src/OAuth.php";
    include "PHPMailer-master/src/POP3.php";
    include "PHPMailer-master/src/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;



    $mail = new PHPMailer(true);                             
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'nguyenlanh1040@gmail.com';                 
    $mail->Password = 'lanhpro123';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                    
 
    //Recipients
    $mail->setFrom('nguyenlanh1040@gmail.com', 'Mailer');
    $mail->addAddress('nguyenlanh1040@gmail.com', 'Joe User');     
    $mail->addAddress('nguyenlanh1040@gmail.com');               
    $mail->addReplyTo('nguyenchutich385@gmail.com', 'Information');
    $mail->addCC('nguyenlanh1040@gmail.com');
    $mail->addBCC('nguyenlanh1040@gmail.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         
    $mail->addAttachment('images/about_bg.jpg');    
 
    //Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>