<?php

include_once "crud.php";

$Crud = new crud();

$id = $_GET['id'];

$result = $Crud->getData("SELECT * from info where id=$id");


foreach ($result as $res){
	
	$student_id = $res['student_id'];
	$email = $res['email'];
}
?>

<form action ="update.php" method="POST">
<input type="text" name="id" value="<?php echo $id;?>"  hidden><br>
<input type="text" name="student_id" value="<?php echo $student_id;?>"><br>
<input type="email"name="email" value="<?php echo $email;?>" ><br>
<input type = "submit" name = "update" value = "Update info">


</form>