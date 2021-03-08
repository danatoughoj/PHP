<?php 
// open connection
	$conn = mysqli_connect("localhost","root","","Orange_academy");
	if(!$conn){
		die('cannot connec to to server');
	}