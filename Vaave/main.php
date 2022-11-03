<?php 
include 'db.php';
$query = "SELECT * FROM questions";
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
<form action="question.php">
	<main>
			<div class="container">
				<h2>Test Your PHP Knowledge</h2>
				<p>
					This is a multiple choise quiz to test your PHP Knowledge.
				</p>
				<div class="select-style">
				<label for="cars">Select Subject</label>
					
				<select name="sub_id" id="sub_id" class="button1" >
				<?php
					$query = "SELECT * FROM subject";
					// Get the Subject
					$result = mysqli_query($connection,$query);
					while($subject = mysqli_fetch_assoc($result)) 
					{
					?>
				<option value="<?=$subject['id']?>"><?=$subject['sub_name']?></option>
				
				
				<?php
				}
			
				?>
				</select>
				</div>
				<input type="hidden" value="1" id="numb" name="numb">
				<button class="button" type="submit" class="start">Start Quize</button>
				

			</div>

	</main>
	</form>


	
