<?php

        $message = 'Клиент заполнил следующее: <br/>';
        $eol = "<br/>";
        $EOL = "\r\n";
        $boundary     = "--".md5(uniqid(time()));
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



foreach($_FILES["file"]["name"] as $key => $value){
    $filename = $_FILES["file"]["tmp_name"][$key];
    $file = fopen($filename, "rb");
    $data = fread($file,  filesize( $filename ) );
    fclose($file);
    $NameFile = $_FILES["file"]["name"][$key]; // в этой переменной надо сформировать имя файла (без всякого пути);
    $File = $data;
    $message .=  "$EOL--$boundary$EOL";
    $message .= "Content-Type: application/octet-stream; name=\"$NameFile\"$EOL";
    $message .= "Content-Transfer-Encoding: base64$EOL";
    $message .= "Content-Disposition: attachment; filename=\"$NameFile\"$EOL";
    $message .= $EOL; // раздел между заголовками и телом прикрепленного файла
    $message .= chunk_split(base64_encode($File));

}

mail($to, $subject, $message, $headers);
?>
