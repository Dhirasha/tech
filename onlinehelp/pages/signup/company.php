<html>
	<head>
		<link href="pages/signup/formstr.css" rel="stylesheet" type="text/css"/>

	
	</head>

	<body>
		
        <form name="con" action="./pages/server.php" method="POST">	
			<div class="form">
			<center><h1> <font style="height:42px;  text-align:center; font-size:30px; text-decoration:bold; color:orange;font-family:aqua;">Register</font> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:black;font-family:aqua;">Your</font> <font style="height:42px;  text-align:center; font-size:42px; text-decoration:bold; color:orange;font-family:aqua;">Company</font> </h1></center><br><br>
	
			<b><h3 style="font-style: italic;  text-align:center; size:9;">Are you a tech company? Register with us to provide technical assistance to customers around the globe.</h3></b><br>
	
			<center><img src="pages/signup/comp.jpeg" ></center><br><br>
	
				
				<center>
		
					<b>Company Name:</b>
					<input type="text" id="fname" name="name" placeholder="Company Name.." required=""><br><br><br>
					<b>Email :</b>
					<input type="text" id="idn" name="email" placeholder="Your email.." required=""><br><br><br>
					<b>Password:</b>
					<input type="password" id="connum" name="pwd" required=""><br><br><br>
					<b>Category :</b>
					
					<select name ="category" >
						<option value="Hardware">Hardware</option>
						<option value="Software">Software</option>
						<option value="IOT">IOT</option>
					</select><br><br><br>
				
					<div class="container">
                 		<center><button type="submit" name="companyreg" class="registerbtn">Submit</button></center>
                        <a href="Home.php"><center><button type="button" class="registerbtn"> Cancel</button></center></a>	
				 				
            		</div>		
				
			</center>
            
        </div>
        </form>
    	
	</body>
</html>