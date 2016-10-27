<?php

	$quiz = array(
		0 => "What is the first holiday of the year?",
		1 => "How much wood would a woodchuck chuck if a woodchuck could chuck wood?",
		2 => "1-10: How exciting is this quiz?",
		);

	$answers = array(
		0 => "New Year's Day",
		1 => "How WOOD I know",
		2 => "10",
		);

	$possible_answers = array(
		0 => array(
			"Halloween",
			"Christmas",
			"New Year's Eve",
			"New Year's Day",
			),
		1 => array(
			"2",
			"80",
			"232",
			"How WOOD I know",
			),
		2 => array(
			"4",
			"8",
			"10",
			"1",)
		);


	if (count($_GET) == 0) {
		$current_score = 0;
		$current_question = 0;
	} else {
		$current_question = (int)$_GET["current_question"];
		$current_score = (int)$_GET["current_score"];

		if ($_GET["answer"] == $answers[$current_question]) {
			$current_score += 1;
		}

			$current_question += 1;
		}
	

	if ($current_question == (count($quiz))) {
		$last_question = true;
	} else {
		$last_question = false;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quickest Quiz in Town</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="feedback">
		Your current score is <?php echo $current_score; ?>
		<!-- Dynamically populate the score -->
	</div>



	
	<?php if ($last_question) { ?>
		<div class="final-result">
			You've finished the quiz! Your final score is <?php echo $current_score; ?> out of 3.
			<!-- Dynamically populate the score -->
		</div>
	<?php } else { ?>

		<div class="answer">

		<div class="question-prompt">
			<?php echo $quiz[$current_question]; ?>
		</div>


			
			<form>
			<?php foreach ($possible_answers[$current_question] as $value) {?>
				<input type="radio" name="answer" value="<?php echo $value; ?>"><?php echo $value; ?><br>
			<?php 
			}
			?>
				<span><input class="next-question" type="submit" value="Next Question"></span>

				<input type="hidden" name="current_score" value="<?php echo $current_score ; ?>">
				<input type="hidden" name="current_question" value="<?php echo $current_question ; ?>">
			</form>
		</div>

	<?php } ?>
	


</body>
</html>
