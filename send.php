<?php

        $message = 'Клиент заполнил следующее: <br/>';
        $eol = "<br/>";
        $message .= $eol;

        if (isset($_POST['name'])) {
            $message .= 'Имя: '.$_POST['name'];
        }
        if (isset($_POST['phone'])) {
            $message .= 'Телефон: '.$_POST['phone'];
        }
        if (isset($_POST['email'])) {
            $message .= 'E-mail: '.$_POST['email'];
        }
$message .= $eol.stripslashes($message).$eol;




$to  = "<stairs116@gmail.com>, " ;

$subject = "Заявка";


$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: От кого письмо <from@example.com>\r\n";
$headers .= "Reply-To: reply-to@example.com\r\n";

mail($to, $subject, $message, $headers);
?>
