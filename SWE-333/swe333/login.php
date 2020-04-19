<?php
	session_start();
	include_once 'crud.php';
	$Crud = new crud();
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$sql = "SELECT * FROM login where email='$email' and password = '$password'";
		$result = $Crud->getData($sql);
		
		if(!empty($result)){
			$_SESSION['email']=$email;
			foreach($result as $res){
				$isAdmin = $res['isAdmin'];
				$isUser = $res['isUser'];
				if($isAdmin == '1'){
					
					header('location:add.php');
				}
				else{
					header('location:show.php');
				}
			}
			
				
			
			//header('location:index.php');
		}
	}

?>

<form action="login.php" method="POST">
	Email:</br>
	<input type ="email" name ="email" placeholder="Enter your email"/><br>
	Password:</br>
	<input type ="password" name ="password" placeholder="Enter your password"/><br>
	<input type ="submit" name="login" value="login">
</form>