<?php

define('BASE_URL', 'http://localhost/Proffi_Group/');

function upload_from_url($file_url) {
    $url_segments = explode('/', $file_url);
    $file_name = urldecode(end($url_segments));
    if (false !== $file_name) {
        $file_name_parts = explode('.', $file_name);
        if (in_array(strtolower(end($file_name_parts)), array('jpeg','jpg','png','gif'))) {
            $destination=fopen("upload/".$file_name,"w");
            $source=fopen($file_url,"r");
            $maxsize=300*1024;
            $length=0;
            while (($a=fread($source,1024))&&($length<$maxsize)) {
                $length=$length+1024;
                fwrite($destination,$a);
            }
            fclose($source);
            fclose($destination);
        }
    }
    $new_file_url = BASE_URL.'upload/'.$file_name;
    return $new_file_url;
}

$res = array('err' => 'Не указан URL файла');

if (isset($_POST['file_url'])) {
    $new_url = upload_from_url($_POST['file_url']);
    $res = array('file_url' => $new_url);
}

echo json_encode($res);