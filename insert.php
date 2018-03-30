<?php 
	$connect=mysqli_connect("localhost","root","root","testing");
	$sql = "INSERT INTO tbl_tweet (tweet) VALUES ('".$_POST["tweet"]."')";
	mysqli_query($connect, $sql);
 ?>