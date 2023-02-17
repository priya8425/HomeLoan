<?php
require 'PHPMailer/PHPMailerAutoload.php';
if(isset($_POST['submit']))
    {
        $first_name= $_POST['first_name'];
        $email =$_POST['email'];
        $phone = $_POST['phone'];
        $city =$_POST['city'];
        $comments = $_POST['comments'];
            $mail = new PHPMailer;
            // $mail->SMTPDebug = 3; //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.marcksitservices.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'no-reply@marcksitservices.com';                     //SMTP username
            $mail->Password   = 'no-reply@marcksitservices2023';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('no-reply@marcksitservices.com', 'Home Loan');
            $mail->addAddress('yadavpriya1425@gmail.com');     //Add a recipient $email
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Contact Details';
            $mail->Body    = '<h3 style="color:green;">Contact Details:-</h3><br />
                                <strong>Name:&emsp;</strong>'.$first_name.'<br /><br />
                                <strong>Email:&emsp;</strong>'.$email.'<br /><br />
                                <strong>Phone:&emsp;</strong>'.$phone.'<br /><br />
                                <strong>City:&emsp;</strong>'.$city.'<br /><br />
                                <strong>Message:&emsp;</strong><p>'.$comments.'</p><br /><br />';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if($mail->send()){
                echo "<script> alert ('Message has been sent.Thank You for contact us.');</script>";
                echo "<script>window.location='index.php';</script>";
            }else{
                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
                echo "<script> alert ('Something went wrong. Please try again later.');</script>";
                echo "<script>window.location='index.php';</script>";
            }
    }


//Create an instance; passing `true` enables exceptions

?>