<?php
require 'PHPMailer/PHPMailerAutoload.php';
if(isset($_POST['submit']))
    {
        $name= $_POST['name'];
        $city =$_POST['city'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $loantype =$_POST['loantype'];
        $loanamount =$_POST['loanamount'];
        $toc=$_POST['toc'];

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
            $mail->Subject = 'Online Services';
            $mail->Body    = '<h3 style="color:green;">Contact Details:-</h3><br />
                                <strong>Name:&emsp;</strong>'.$name.'<br /><br />
                                <strong>Email:&emsp;</strong>'.$email.'<br /><br />
                                <strong>Phone:&emsp;</strong>'.$mobile.'<br /><br />
                                <strong>City:&emsp;</strong>'.$city.'<br /><br />
                                <strong>Loan Type:&emsp;</strong>'.$loantype.'<br /><br />
                                <strong>Agree With T & C:&emsp;</strong>'.$toc.'<br /><br />
                                <strong>Loan Amount:&emsp;</strong>'.$loanamount.'<br /><br />';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if($mail->send()){
                echo "<script> alert ('Your Request send successfully.Our team will get in touch with you shortly.');</script>";
                echo "<script>window.location='index.php';</script>";
            }else{
                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
                echo "<script> alert ('Something went wrong. Please try again later.');</script>";
                echo "<script>window.location='index.php';</script>";
            }
    }

//Create an instance; passing `true` enables exceptions
?>