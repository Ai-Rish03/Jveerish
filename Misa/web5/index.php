<!DOCTYPE html>
<html>
<body>

<?php

	session_start();

	if(isset ($_SESSION['views'])){
		$num_visits = $_SESSION['views'];
		$_SESSION['views'] = $_SESSION['views']+1;
	}
	else{
		$num_visits = $_SESSION['views']=0;

	}
?>
	<h1>Hello</h1>
	<p>You have visited this page <?= $num_visits ?> times</p>
	<p><a href="?reset=true">Reset</a></p>


<?php
	
	if($num_visits !=10) {

	}
	else{
		header('location: congratulations.php');
	}

?>


<?php

	if ($num_visits == 5) {
		echo '<h2>Wow!</h2>';
		echo 'You sure come to this page a lot.';
	}

?>


</body>
</html>