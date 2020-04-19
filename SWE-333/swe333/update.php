<?php
	include_once "crud.php";
	$Crud = new crud();
	if(isset ($_POST['update'])){
		$student_id = $_POST['student_id'];
		$email = $_POST['email'];
		$id = $_POST['id'];
		$sql = "UPDATE info SET student_id='$student_id' ,email='$email' where id=$id";
		$result = $Crud->execute($sql);
		if($result){
			//echo "Data added successfully";
			header('location:show.php');
		}
		else{
			echo "Insertion problem!";
		}
	}
?>