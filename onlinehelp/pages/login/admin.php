<html>
	<head>
	
		<style>
			form {
				 position: relative;
	  			width: 250px;
	  			margin: 0 auto;
	  			background: rgba(130,130,130,.3);
	  			padding: 20px 22px;
	  			border: 2px solid;
	  			border-radius: 5px;
	  			padding: 20px;
	    		font-size:20;
	 			border-top-color: rgba(255,255,255,.4);
				border-left-color: rgba(255,255,255,.4);
				border-bottom-color: rgba(60,60,60,.4);
				border-right-color: rgba(60,60,60,.4);
	}
				.container {
    				border-radius: 5px;
    				background-color:#4CAF50 ;
      			 	padding: 20px;
    				font-size:20;
    }
				button{
    				background-color: #2F4F4F;
    				color: white;
   					padding: 12px 20px;
   					border: none;
    				border-radius: 4px;
    				cursor: pointer;
	}

		</style>
	</head>
	
	<body>
		<div class="form">
		<form action = "../auth.php" method="POST">	

		<h2 style="color:black; text-align:center; size:23;">Admin Login</h2>	
		
			<div class= "container"> 
					
				<label><b>	Password: </b></label>
				<input type="password" placeholder="Enter Root Password" name="pwd" required><br><br>
			
				<center><button type="submit" name="adminlogin"> Login</button><br><br>
				<span class="pwd">Forgot<a href="#"> Password?</a>
				</span>
	    		</label></center>
		
				
			</div>
		</div>
		</form>	
	</body>
</html>