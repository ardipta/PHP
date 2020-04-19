<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:login.php');
	}
?>


<form method ="POST" action="add.php">
	Student ID: <input type ="text" name = "student_id"/></br>
	Email: <input type ="email" name = "email"/></br>
	Password: <input type = "password" name = "password"></br>
	<input type = "submit" name = "addData" value = "send data to server"><br>
</form>
<?php
	include_once "crud.php";
	$Crud = new crud();
	if(isset ($_POST['addData'])){
		$student_id = $_POST['student_id'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$sql = "INSERT into info(student_id,email,password)
		VALUES('$student_id','$email','$password')";
		$result = $Crud->execute($sql);
		if($result){
			echo "Data added successfully";
			header('location:index.php');
		}
		else{
			echo "Insertion problem!";
		}
	}
?>