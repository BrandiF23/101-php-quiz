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
	<title>Quickest Quiz in Town - Q:1</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<div class="score">
	<?php 
		echo "Current score " . $current_score;
		?>
		</div>

	<div class="question-count">
			Question 2
	</div>

	<div class="question-prompt">
			<?php echo $quiz[2]; ?>

			
	<form action="question3.php">
 		<input type="radio" name="answer" value="A" checked> A <br>
 	 	<input type="radio" name="answer" value="B" checked> B <br>
  		<input type="radio" name="answer" value="C" checked> C <br>
  		<input type="radio" name="answer" value="D" checked> D <br>
  		<input type="hidden" name="current_question" value="<?php echo $current_question; ?>">
  		<input type="hidden" name="current_score" value="<?php echo $current_score; ?>">
  		<input type="submit" value="Next Question">
	</form>


</body>
</html>