<?php
	
	include 'quiz.php';

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[1]) {
			$current_score += 1;
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quickest Quiz in Town - Q:2</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<!--<div class="score">
	<?php 
		echo "Current score " . $current_score;
		?>
		</div>-->

	<div class="question-count">
			Question 2
	</div>

	<div class="question-prompt">
			<?php echo $quiz[2]; ?>

			
	<form action="question3.php">
 		<input type="radio" name="answer" value="A">A<br>
 	 	<input type="radio" name="answer" value="B">B<br>
  		<input type="radio" name="answer" value="C">C<br>
  		<input type="radio" name="answer" value="D">D<br>
  		<input type="hidden" name="current_score" value="<?php echo $current_score; ?>"><br>
  		<input type="submit" value="Next Question">
	</form>

		<!--<div class="next-button">
		<a href="question3.php">Next Question</a>
		</div>-->

</body>
</html>