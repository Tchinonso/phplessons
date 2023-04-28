<?php
$file = "extras/userrfile.txt";

if(file_exists($file)){
    // echo readfile($file);

    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
} else {
    $handle = fopen($file, 'w');
    $content = 'john' . PHP_EOL . 'jenni' .  PHP_EOL . 'mike';
    fwrite($handle, $content);
    fclose($handle);
}


?>