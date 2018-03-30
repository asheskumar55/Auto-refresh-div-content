<?php 
	$connect=mysqli_connect("localhost","root","root","testing");
	$sql="SELECT * FROM tbl_tweet ORDER BY tweet_id DESC";
	$res=mysqli_query($connect,$sql);
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_array($res))
		{
			echo '<p>'.$row["tweet"].'</p>'; 
		}
	}
 ?>