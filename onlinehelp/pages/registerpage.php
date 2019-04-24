<?php
	session_start();
	?>

<html>
	<head>
		<style>
		form{
			background-color: #4CAF50;
    		text-decoration: none;
    		margin: 4px 2px;
    		cursor: pointer;
			position: relative;
  			width: 450px;
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
			button{
			background-color:#2F4F4F;
			color:white;
			padding:20px 12px;
			margin:8px 0;
			border:none;
			cursor:pointer;
			width:20%;
			float:center;
		}
		input[type=text], select, textarea {
		    width: 60%; 
		    padding: 12px; 
		    border: 1px solid #ccc; 
		    border-radius: 4px;
		    box-sizing: border-box;  
		    margin-top: 6px; 
		    margin-bottom: 16px; 
		    resize: vertical ;

}
			input[type=password]{
			    width: 60%; 
			    padding: 12px; 
			    border: 1px solid #ccc; 
			    border-radius: 4px;
			    box-sizing: border-box;  
			    margin-top: 6px; 
			    margin-bottom: 16px; 
			    resize: vertical ;

}
			input[type=email]{
				    width: 60%; 
				    padding: 12px; 
				    border: 1px solid #ccc; 
				    border-radius: 4px;
				    box-sizing: border-box;  
				    margin-top: 6px; 
				    margin-bottom: 16px; 
				    resize: vertical ;

		
	    }
		
		</style>
		
	</head>
	<body>

	<form name="com"  action = "server.php" method="POST">

		<center><h1> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:orange;font-family:aqua;">Register</font> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:black;font-family:aqua;">Yourselves</font></h1></center><br><br>
	
		
				<center><img src="photo.jpeg" ></center><br><br>
	
		<div class="form">
			<center><b>	User Name: </b></label>
			<input type="text" placeholder="Enter Username...." name="name" required></center><br><br>
			
		
			<center><b>Contact No: </b></label>
			<input type="text" placeholder="Enter your contact no.." name="num" required></center><br><br>
			
			
			<center><b>	Email Address: </b></label>
			<input type="text" placeholder="Enter your email address.." name="email" required></center><br><br>
				
			<center><b>	Password: </b></label>
			<input type="password" placeholder="Enter your password.." name="pwd" required></center><br><br>
			
		
			<center><b>	Confirm Password: </b></label>
			<input type="password" placeholder="Enter your confirm password.." name="pwd" required></center><br><br>
			<div class="modal-footer">
                 <center><button type="submit" name="usrreg">Submit</button></center>
				 <a href="../Home.php"><center><button type="button" class="cancelbtn"> Cancel </button></center></a>		
            </div>		
			
			
			
		
		
		</form>
		</body>
</html>	