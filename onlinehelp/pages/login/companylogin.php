<html>
	<head>
		<link href="pages/login/formstr.css" rel="stylesheet" type="text/css"/>
		
	</head>
	<body>
		

	<form action = "./pages/auth.php" method="POST">
		<div class="form">
		<center><h1> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:orange;font-family:aqua;">Company</font> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:black;font-family:aqua;">Login</font></h1></center><br><br>
			<center><img src="pages/login/comp.jpeg" width="60%"; height="80%"; ></center><br><br>
	
		
			
			<center><b>	Company e-mail: </b>
			<input type="text" placeholder="Enter Email...." name="email" required></center><br>
			
		
			
			<center><b>	Password: </b>
			<input type="password" placeholder="Enter your password.." name="pwd" required></center><br><br>
			
		
			<center><button type="submit" name="companylogin" class="registerbtn"> Login</button><br>
		
			<div class="container">
				
				<label>No Account yet?</label>
                <a href="pages/company.php"></a>
				
				<span class="pwd">Forgot<a href="#"> Password?</a>
				</span>
               
			</div>	
                 
           </center>	
			
        </div>
        
        </form>
   </body>
</html>
		
		
		