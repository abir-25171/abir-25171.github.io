<?php
session_start();
// dBase file
include "dbConfig.php";
             
if ($_GET["op"] == "login")
 {
 if (!$_POST["username"] || !$_POST["password"])
  {
  die("You need to provide a username and password.");
  }
 
  $user=$_POST["username"];
  $pass=$_POST["password"];
  $email=$_POST["email"];
  
 $q = "SELECT * FROM dbUsers WHERE username='$user' AND password ='$pass'";
  
 // Run query
 $r = mysql_query($q);

 if ( $obj = @mysql_fetch_object($r) )
  {
  // Login good, create session variables
  $_SESSION["valid_id"] = $obj->id;
  $_SESSION["valid_user"] = $_POST["username"];
  $_SESSION["valid_time"] = time();

  // Redirect to member page
  Header("Location: members.php");
  }
 else
  {
  // Login not successful
  die("Sorry, could not log you in. Wrong login information.");
  }
 }
else
 {
//If all went right the Web form appears and users can log in
 echo "<form action=\"?op=login\" method=\"POST\">";
 echo "Username: <input name=\"username\" size=\"15\"><br />";
 echo "Password: <input type=\"password\" name=\"password\" size=\"8\"><br />";
 echo "<input type=\"submit\" value=\"Login\">";
 echo "</form>";
 }
?>

 
	<html>
	<body style="background-color:red">
	</body>
	</html>
