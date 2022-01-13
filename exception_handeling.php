<?php
    class DivideByZeroException extends Exception { }  
    $dividend = 15;
    $divisor = 0;
    echo "Dividend = " .$dividend. "<br>";
    echo "Divisor = ". $divisor. "<br>";
    try {  
        if ($divisor == 0) {  
          throw new DivideByZeroException;  
        }   
        // else if ($divisor < 0) {  
        //    throw new DivideByNegativeNoException;   
        // }   
        else {  
          $result = $dividend / $divisor;  
          echo "Result of division = ". $result;  
        }  
      }  
      catch (DivideByZeroException $dz) {  
          echo "Divide by Zero Exception! </br>";  
      }  
     
      catch (Exception $ex) {  
          echo "Unknown Exception";  
      }  
  
?>