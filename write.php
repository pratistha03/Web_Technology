<?php
    $file="data.txt";
    if(file_exists($file)){
        $handle=fopen($file, "a");
        $content=fwrite($handle, "Hello, how are you?");
        echo $content;
        fclose ($handle);
    }
    else{
        echo "ERROR";
    }
?>