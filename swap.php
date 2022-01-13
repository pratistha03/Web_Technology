<!doctype html>
<html>
	<head>
		<title>Swapping two numbers</title>
	</head>
		<?php
			$a = 4;
			$b = 5;
			echo "The assigned number is: a = ".$a."<br>"."and b = ".$b;
			echo"<br><br>";
			
			$a= $a+$b;
			$b = $a-$b;
                        $a=$a-$b;

			echo "The swapped number is: a = ".$a."<br>"."and b = ".$b;
		?>
	<body>
		
	</body>
</html>