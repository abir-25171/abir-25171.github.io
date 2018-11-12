
<?php
include_once 'dbconfig.php';


	$bloodgroup=$_POST['bloodgroup'];
	
    $query="SELECT * FROM dbusers where bloodgroup='$bloodgroup'";
 
 if($query_run=mysql_query($query)){
	 while($query_row=mysql_fetch_assoc($query_run)){
		 $username=$query_row['username'];
		 $bloodgroup=$query_row['bloodgroup'];
		 $email=$query_row['email'];
		 echo 'username='.$username.'  Bloodgroup:'.$bloodgroup.'  email:'.$email.'<br>';
	 }
 }

 ?>
    
	<html>
	<body style="background-color:red">
	</body>
	</html>