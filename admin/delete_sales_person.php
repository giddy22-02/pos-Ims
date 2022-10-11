<?php
	include('session.php');
	
	$id=$_GET['id'];
	
	mysqli_query($conn,"delete from user where userid='$id'");
	mysqli_query($conn,"delete from sales_person where userid='$id'");
	
	header('location:sales_person.php');

?>