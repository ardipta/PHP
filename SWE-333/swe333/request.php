For permission to be an admin click here
<form action ="request.php" method = "POST">
	<input type = "submit" name = "request" value = "send request"><br>
</form>

<?php
	include_once "crud.php";
	$Crud = new crud();
	include_once "login.php";
	$Log = new login();
	

?>