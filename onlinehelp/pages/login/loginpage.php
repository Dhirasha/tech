
<html>
	<head>
		<link href="pages/login/formstr.css" rel="stylesheet" type="text/css"/>
		
		
	</head>
	
    <body>
	
	<form action = "./pages/server.php" method="POST">

	  <div class="form">
	
		<center><h1> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:orange;font-family:aqua;">User </font> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:black;font-family:aqua;">Login</font></h1></center><br><br>
				<center><img src="pages/login/pic.jpeg" width="50%"; height="80%"; ></center><br><br>
	
		
			<center><b>	User Name: </b>
			<input type="text" placeholder="Enter Username...." name="name" required></center><br>
			
		
			
			<center><b>	Password: </b>
                
			<input type="password" placeholder="Enter your password.." name="pwd" required></center><br><br>
			
		
			<center><button type="submit" name="login" class="registerbtn"> Login</button></center><br>
			
  			
  			
			<div class="container">
    		<label><center>No Account yet?<a href="./pages/registerpage.php">Register</a></center></label>
           
            </div>
        </div>
        </form>
		
    </body>
</html>
			
			
			
		
		
