<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf=8">
		<link rel="stylesheet">
	</head>
	<body>
		<form action="search_event.php" method="get">
			<label>
				<input type="text" name="keyword" placeholder="Search...">
			</label>
			<label>
			<input type="submit" value="Go">
			</label>
		</form>
	
	<?php 
			if(isset($_POST['submit'])){
				if($_GET['keyword']==""){
					echo "Silakan masukan kata";
				}
			}
		
	?>
	</body>
</html>