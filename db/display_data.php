<html>
<head>
<tiltle> Display data into database</title>
<style type= "text/css">
table{
	border:2px solid red;
	backgroungd color:#FFC
	}
th	{
		border-bottom 5px solid #000
	}
td	{
	border-bottom: 2px solid #666
	}
</style>
</head>
<body>
<h1>display data from database</h1>
<?php

include('connect-mysql.php');

$sqlget="SELECT*FROM customer";
$sqldata=mysqli_query($dbcon,$sqlget) or die('ertror getting data')

echo"<table>";
echo"<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";

while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	echo"<tr><td>";
	echo$row['customerID'];
	echo"</td><td>";
	echo$row['customerFName'];
	echo"</td><td>";
	echo"</td></tr>";
	}
echo"</table>";

</body>
</html>
