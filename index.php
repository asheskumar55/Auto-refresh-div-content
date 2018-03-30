<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auto Refresh Div Content Using jQuery and AJAX</title>
	<?php include_once 'bootstrap.php' ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="container box">
		<form name="add_tweet" method="post">
			<h3 align="center">Tweet Page</h3>
			<div class="form-group">
				<textarea name="tweet" id="tweet" rows="4" class="form-control"></textarea>
			</div>
			<div class="form-group" align="right">
				<input type="button" name="btn_tweet" id="btn_tweet" class="btn btn-info" value="Tweet">
			</div>
		</form>
		
		<br/>
		<br/>
		<div id="load_tweets"></div>
		<!-- Refresh this Div content every second!-->
		<!-- For Refresh Div content every second we use SetInterval() !-->
	</div>
</body>
</html>

<script>
	$(document).ready(function(){
		$('#btn_tweet').click(function(){
			var tweet_txt = $('#tweet').val();
			if($.trim(tweet_txt)!= '')
			{
				$.ajax({
					url:"insert.php",
					method:"POST",
					data:{tweet:tweet_txt},
					dataType:"text",
					success:function(data)
					{
						$('#tweet').val("");
					}
				});
			}
		});

		setInterval(function(){
			$('#load_tweets').load("fetch.php").fadeIn("slow");
		}, 1000);
	});
</script>