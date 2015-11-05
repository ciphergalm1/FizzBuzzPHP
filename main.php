<html>
<head>
</head>
<body>
	<?php
			$x = 0;
			for($x=0;$x<101;$x++){
				echo($x);
				if($x%15==0){
					echo("FizzBuzz");
				}
				if($x%3==0){
					echo("Fizz");
				}
				if($x%5==0){
					echo("Buzz");
				}
			}
			
	?>
</body>

</html>