<html>
	<head>
		
		<link href="pages/feedback/format.css" rel="stylesheet" type="text/css"/>
	
	
	</head>
	
	<body>
	
	<form action="pages/server.php" method="POST">
	
    <div class="container">
	<center><h1> <font style="height:35px;  text-align:center; font-size:40px; text-decoration:bold; color:orange;font-family:aqua;">Feedback</font> <font style="height:35px;  text-align:center; font-size:40px; text-decoration:bold; color:black;font-family:aqua;">Form</font></h1></center><br><br>
        <p><b><font style="size:35px;">We would love to hear your thoughts,concerns or problems with anything so we can improve!</font></b></p><br>
	
		<!-- <div class="form"> -->
				<input type="radio" name="type" value="Comment">Comments<br><br>
				<input type="radio" name="type" value="report">Bug Reports<br><br>
				<input type="radio" name="type" value="question">Questions<br><br><br>
				<label>User Name:</label>
				<input type="text" name="name"><br><br><br><br>
				<label>E-mail :</label>
				<input type="email" name="email" required><br><br><br>
				<label>Describe Feedback :</label>
				<textarea name="comment" placeholder="Your Comment"maxlength="1000" rows="5" cols="28"></textarea><br><br><br>
				<center><input type="submit" name="submit_feedback" ></center>
			
		
        </div>
		
    </form>	
		
    </body>
</html>