<?php

    //use the PHP Mailer    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'yuyaengineer13@gmail.com';                     //SMTP username
        $mail->Password   = 'owrf rqpd ehom xflr';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('yuyaengineer13@gmail.com', 'Yuya Hamada');
        $mail->addAddress('yuyaengineer13@gmail.com', 'Yuya Hamada');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New enquiry - Yuya Portfolio Contact form';
        $mail->Body    = '<h3>Hello, you got a new enquiry</h3>
            <h4>Name: '.$name.'</h4>
            <h4>Email: '.$email.'</h4>
            <h4>Subject: '.$subject.'</h4>
            <h4>Message: '.$message.'</h4>
        ';
        $mail->send();
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
else 
{
    header('Location: index.html');
    exit(0);
}
?>

<html>
    <head>
        <title>Contact form -Complete-</title>
    </head>
    <body>
        <h1>Contact form -Received your message-</h1>
        <p><a href="index.html">Back to Top</a></p>
    </body>
</html>