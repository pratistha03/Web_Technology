<?php
    $file="newfile.txt";
    if(file_exists($file)){
        if(unlink($file)){
            echo "File removed successfully";
        }
        else{
            echo"ERROR. File cant be deleted";
        }
    }
    else{
        echo"ERROR: file doesn't exist";
    }

?>