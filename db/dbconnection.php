<?php
DEFINE('DBUSER','root');
DEFINE('DBPASSWORD','');
DEFINE('DBHOST','localhost');
DEFINE('DBNAME','movie booking');
$dbconnection = mysqli_connect(DBHOST,DBNAME,DBUSER,DBPASSWORD);

if (!dbconnection){
	die('error!connect to database');
	}
echo'you are successfully connected';
?>
