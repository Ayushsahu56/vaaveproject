<?php 
	include 'db.php';
	session_start(); 
	//Set Question Number
	$number = $_GET['numb'];
	$subject_num=$_GET['sub_id'];
	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number and sub_id = $subject_num";

	// Get the question
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = $number and sub_id = $subject_num";
	$choices = mysqli_query($connection,$query);
	// Get Total questions
	$query = "SELECT * FROM questions where sub_id = $subject_num";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
	
?>
<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<p>PHP Quizer</p>
		</div>
	</header>

	<main>
			<div class="container">
				<div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
				<p class="question"><?php echo $question['question_text']; ?> </p>
				<form method="POST" action="process.php">
					<ul class="choicess">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>" required='required'><?php echo $row['coption']; ?></li>
						<?php } ?>
						
						
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="hidden" name="subb_id" value="<?php echo $subject_num; ?>">
					<input type="submit" name="submit" value="Submit">


				</form>
				

			</div>

	</main>


	







</body>
</html>