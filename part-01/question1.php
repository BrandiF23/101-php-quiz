<?php
	
	include 'quiz.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quickest Quiz in Town - Q:1</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<div class="question-count">
			Question 1
	</div>

	<div class="question-prompt">
			<?php echo $quiz[1]; ?>


	<form action="question2.php">
 		<input type="radio" name="answer" value="A">A<br>
 	 	<input type="radio" name="answer" value="B">B<br>
  		<input type="radio" name="answer" value="C">C<br>
  		<input type="radio" name="answer" value="D">D<br>
  		<input type="hidden" name="current_score" value="0"><br>
  		<input type="submit" value="Next Question">
	</form>

	<!--<div class="next-button">
		<a href="question2.php">Next Question</a>
	</div>-->

</body>
</html>