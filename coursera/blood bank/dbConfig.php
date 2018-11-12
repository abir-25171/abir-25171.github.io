<?
$host="localhost";
$user="root";
$pass="";
$db="project member";

$ms=mysql_connect($host,$user,$pass);
if(!$ms)
{
echo "Error connecting to database.\n";
}

mysql_select_db($db);
?>