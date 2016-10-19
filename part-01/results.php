<?php
	
		include 'quiz.php';

		$current_score = $_GET["current_score"];

		if ($_GET["answer"] == $answers[3]) {
			$current_score += 1;
		}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Quickest Quiz in Town - Results</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
			<div class="question-count">
				Results
			</div>

		<div class="results"><?php 
		echo "You're finished! Your score is " . $current_score . " out of 3.";
		?><br>told you it was the quickest quiz in town</div>

</body>
</html>