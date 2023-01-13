<?php 
	function Fact ($a){
		$f = 1;
		for ($i=1; $i <= $a; $i++) { 
			$f = $f *$i;
		}
		return $f;
	}

	echo "Enter a number: ";

?>
	<form method="POST" action="">
		<input type="number" name="number">
		<input type="submit" name="submit" value="Factorial">
	</form>
<?php

	if (isset($_POST['submit'])) {
		$a = $_POST['number'];
		$fact = Fact($a);	
		echo "Factorial of $a is $fact";
	}
	
 ?>