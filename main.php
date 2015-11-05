<html>
<head>
</head>
<body>
	<?php
			
			for($x=1;$x<101;$x++){
				echo($x);
				echo(" ");
				if($x%15==0){
					echo("FizzBuzz");
				}
				if($x%3==0){
					echo("Fizz");
				}
				if($x%5==0){
					echo("Buzz");
				}
				echo("<br>");
			}
			
	?>
</body>

</html>