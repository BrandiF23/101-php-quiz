<?php
	
	include 'quiz.php';

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[2]) {
			$current_score += 1;
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quickest Quiz in Town - Q:3</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<!--<div class="score">
	<?php 
		echo "Current score " . $current_score;
		?>
		</div>-->

	<div class="question-count">
			Question 3
	</div>

	<div class="question-prompt">
			<?php echo $quiz[3]; ?>

			
	<form action="results.php">
 		<input type="radio" name="answer" value="A">A<br>
 	 	<input type="radio" name="answer" value="B">B<br>
  		<input type="radio" name="answer" value="C">C<br>
  		<input type="radio" name="answer" value="D">D<br>
  		<input type="hidden" name="current_score" value="<?php echo $current_score; ?>"><br>
  		<input type="submit" value="Next Question">
	</form>

		<!--<div class="next-button">
		<a href="results.php">Results</a>
		</div>-->

</body>
</html>