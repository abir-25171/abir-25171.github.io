<?php
session_start();

if (!$_SESSION["valid_user"])
{
// User not logged in, redirect to login page
Header("Location: login.php");
}

// Member only content
// ...
// ...
// ...

// Display Member information
echo "<p>User ID: " . $_SESSION["valid_id"];
echo "<p>Username: " . $_SESSION["valid_user"];
echo "<p>Logged in: " . date("m/d/Y", $_SESSION["valid_time"]);

// Display logout link
echo "<p><a href=\"logout.php\">Click here to logout!</a></p>";
?>
<html>
<body style="background-color:red">
<p>Which Blodd Group do you need:</p><br>
<form action="http://localhost/book/practice2/search.php" method="post">
Blood group:<input type="text" name="bloodgroup">
<input type="submit">
</form>
</body>
</html>