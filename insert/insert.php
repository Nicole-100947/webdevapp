<?php
  $con = mysqli_connect('127.0.0.1','root','')
  if(!$con)
  {
      echo 'Not Connected To Server';
  }
  
  if(!mysqli_select_db($con,'sign up user data'))
  {
      echo 'The Database Is Not Selected';
  }
  $Name = $_POST['username'];
  $Email = $_POST['email'];

  $sql = "INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";
  if(!mysqli_query($con,$sql))
  {
     echo 'Not Inserted';
  }
  else
  {
      echo 'Inserted';
  }
  header("refresh:2; url=index.html");
?>