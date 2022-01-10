<?php
$conn=mysqli_connect('localhost','root','','db_semuadata');	
if (mysqli_connect_error()) {
	printf("Connct failed", mysql_error());
	exit();
}