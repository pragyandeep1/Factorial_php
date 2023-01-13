<?php 
	if (isset($_POST['submit'])) {
		echo "Enter a number: ";
		$a = $_POST['number'];
		echo $a;
		$f = 1;
		for ($i=1; $i <= $a; $i++) { 
			$f = $f *$i;
		}	
	}

	?>
	<form method="POST" action="">
		<input type="number" name="number">
		<input type="submit" name="submit" value="Factorial">
	</form>
	<?php
	echo "Factorial of $a is $f";
	?>
	