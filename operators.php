<?php
    $a=5;
    $b=10;
    echo "a= ". $a."<br>";
    echo "b= ". $a."<br>";
    $c=$a+$b;
    echo "Sum of a and b = ". $c. "<br>";
    if($a == $b)
        echo $a. " and  ". $b. " are equal. <br>";
    else
        echo $a. " and  ". $b. " are not equal. <br>";
    $result = false || true;
    echo "Logical OR operator of '0' and '1' = ". $result;
?>