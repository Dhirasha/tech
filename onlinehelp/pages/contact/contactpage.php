<html>
	<head>
		<link href="pages/contact/form1.css" rel="stylesheet" type="text/css"/>
		
	</head>
	
	<body>
		
	
        <form name="contact" action = "pages/server.php" method="POST">
            
            <div class="form">
				
				<center><h1> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:orange;font-family:aqua;">Contact </font> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:black;font-family:aqua;">Us</font></h1></center><br><br>
			     <center><img src="pages/contact/im.jpeg"></center><br><br>
				
                <center>
				<label for="firstname"><b>Name :</b></lable>
				<input type="text" id="fname" name="firstname"><br><br>
				<label for="email"><b>E-mail:</b></label>
				<input type="email" id="email" name="email" ><br><br>
				<label for="comment"><b>Comment:</b></label><br>
    			<textarea id="comment" name="comment" placeholder="Write something.." style="height:100px; width:400px"></textarea><br><br>
                    </center>
                <div class="container">
                    <center><button type="submit" name="usrcnt" class="registerbtn">Submit</button></center>
				<a href="Home.php"><center><button type="button" class="registerbtn"> Cancel</button></center></a>
				</div>	
	
		   
            </div>
			
		
		
			<br>
			<div>
			<h1 style="color:black; text-align:center; size:18;">Contact Details</h1>

	
			<center><h3>Address</h3>
			<p>No.32,<br>
			Reid Avenue,<br>
			Colombo 07.</p>


			<h3>Call us</h3>
			<p>071 6458220<br>
			071 9933027<br></p>
	

	
			<h3>Email Us</h3>
			<a href="daau@gmail.com">daau@gmail.com</a></center>
		
			</div>
		
		
	
	</body>
</html>