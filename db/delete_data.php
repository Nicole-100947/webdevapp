<?php

if (isset($_POST['delete'])){
	$hostname="localhost";
	$username="root";
	$password="";
	$databaseName="movie booking";

	$id=$_POST['id'];

	$connect=mysqli_connect($hostname,$username,$password,$databaseName);

	$query="DELETE FROM 'customers' WHERE'id'=$id";

	$results=mysqli_query($connect,$query);
	if($result){
		echo'data deleted';
	}
	else{
		echo'unsuccessful delete';
	}
	mysqli_close($connect);

	}
?>
<html>
	<head>
	<title>PHP DELETE DATA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=devisce-width, initial-scale=1.0">
	</head>
	<body>
		<form action="php_delete_data_from_mysql_datbase.php" method="post">
			ID TO DELETE:£nbap;<input type ="text" name="id" required><br><br>
			<input type="submit" name="delete" value="clear Data">
		</form>
	</body>
</html>
