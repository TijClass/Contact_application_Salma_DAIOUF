<?php
	$id=$_GET['id'];
	include "./connect_bd.php";
	mysqli_query($conn,"delete from `contacts` where id='$id'");
	header('location:logout.php');
	
?>