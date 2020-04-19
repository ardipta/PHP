<?php
include_once "crud.php";

$Crude = new crud();


$id=$_GET['id'];

if($Crude->delete($id,'info')){
	header('location:index.php');
	
}


?>