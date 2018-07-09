<?php
if (isset($_POST['submitted'])){
	include('connect-mysql.php');
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$customerNumber=$_POST['customerNumber']
	$sqlinsert="INSERT INTO customer(customerFName,customerLName,customerNO) VALUES('$firstName','$lastName','$customerNumber')";

	if(!mysqli_query($dbconnection,$sqlinsert)){
		die('error detected while inserting new record')
	}
		$newrecord= "one recored added to the database";
?>

<html>
<head>
<tiltle> insert data to database</title>
</head>
<body>
<h1>insert data into database</h1>
<form method="POST" action="insert-data.php">
<input type="hidden" name="submitted" value="true"/>
<fieldset>
	<legend> new people</legend>
	<label>first name:input type="text" name= "fname"/></label>
	<label>last name:input type="text" name= "lname"/></label>
	</fieldset>
	<br/>
	input type="submit" value="add new person/>

</form>
<?php
echo $new record
?>
</body>
</html>
