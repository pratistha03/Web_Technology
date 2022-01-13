<?php
$handle=fopen("data.txt","r");
echo("file opened sucessfully.");

$file="data.txt";
if(file_exists($file)){
    $handle=fopen($file,"r");
    $content=fread($handle,filesize($file));
    echo $content;
    fclose($handle);
}
else{
    echo"ERROR: file doesn't exist";
}
?>