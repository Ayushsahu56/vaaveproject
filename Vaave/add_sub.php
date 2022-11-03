<?php  include 'db.php';

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
				<h2>Add A Subject</h2>
				
								
				<form method="POST" action="add.php">
						
						<p>
							<label>Subject Name:</label>
							<input type="text" name="sub_name">
						</p>
						
						<input type="submit" name="submitt" value ="submit">


				</form>
			</div>

	</main>


	







</body>
</html>