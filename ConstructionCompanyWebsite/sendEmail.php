<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        // SMTP settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = ""; ## enter email
        $mail->Password = ""; ## enter password
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        // Email Settings
        $mail->isHTML(true);
        $mail->AddReplyTo($email, $name);
        $mail->setFrom($email, $name);
        $mail->addAddress(""); ## enter receiver email
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) 
        {
            $status = "success";
            $response = "Email is sent!";
        } 
        else 
        {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status"=>$status, "response"=>$response)));
    }
?>


