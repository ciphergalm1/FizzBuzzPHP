<html>
<head>
</head>
<body>
	<?php
			
			for($x=1;$x<101;$x++){
				echo($x);
				echo(" ");
				$flag = false;
				if($x%7==0){
					echo("Git");
					echo(" ");
				}
				if($x%15==0){
					echo("FizzBuzz");
					$flag = true;
				}
				if($flag==false&&$x%3==0){
					echo("Fizz");
				}
				if($flag==false&&$x%5==0){
					echo("Buzz");
				}
				echo("<br>");
			}
			
	?>
</body>

</html>