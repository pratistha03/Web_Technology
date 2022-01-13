<?php
$file="data.txt";
if(file_exists($file)){
    if(rename($file,"newfile.txt")){
        echo"file rename successfully";
    }
    else{
        echo"ERROR. File cant be rename";
    }
}
else{
    echo"ERROR: file doesn't exist";
}
?>