<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:login.php');
	}
?>

<a href ='add.php'>Add new data</a> 

<?php
	include_once "crud.php";
	$Crud = new crud();
	$result = $Crud->getData("SELECT * from info order by id
	DESC");
	echo "<table border = '1'><tr><th> Student ID</th>
	<th>Email </th>
	<th>Action</th></tr>";
	foreach($result as $row ){
		 
		 echo "<tr><td>".$row['student_id']."</td>";
		 echo "<td>".$row['email']."</td>";
		 
		 
		 
		 echo "<td> <a href = 'edit.php?id= $row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td></tr>";
			
	}
	echo"</table>";
	
	
	?>
