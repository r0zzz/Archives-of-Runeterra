<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST["send"])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'archivesofruneterra@gmail.com'; // email address
        $mail->Password = 'geivxmtvohwimlya'; // app passsword on gmail
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($_POST["email"]);

        $mail->addAddress('archivesofruneterra@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = "Message from User";
        $mail->Body = $_POST["message"];

        $mail->send();

        echo
        "
        <script>
            document.location.href = 'contact.php';
            alert('Message Sent');
        </script>
        ";
    }
?>