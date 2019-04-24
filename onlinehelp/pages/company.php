<html>
	<head>
		<style>
		form{
			
	    	background-color:;
	      	border: none;
	      	text-decoration: none;
	      	margin: 4px 2px;
	      	cursor: pointer;
	      	position: relative;
	      	width: 450px;
	      	margin: 1 auto;
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
		.container{
			
    		border: none;
    	  	padding: 32px 32px;
    		text-decoration: none;
    		margin: 4px 2px;
    		cursor: pointer;
	
		}
		button{
			background-color:#2F4F4F;
			color:white;
			padding:22px 18px;
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

	input[type=submit] {
		    background-color: #2F4F4F;
		    color: white;
		    padding: 12px 20px;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
}

	input[type=reset] {
	    background-color: #2F4F4F;
	    color: white;
	    padding: 12px 20px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
}

	input[type=submit]:hover {
    	background-color: #45a049;

}
		.container {
			border: 2px;
			border-radius:4px;
    	  	padding: 32px 32px;
    		text-decoration: none;
    		margin: 4px 2px;
    		cursor: pointer;
			font-size:20;
}
		</style>

	
	</head>

	<body>
		<div class="container">
			<form name="con" action="./server.php" method="POST">	
			
			<center><h1> <font style="height:42px;  text-align:center; font-size:30px; text-decoration:bold; color:orange;font-family:aqua;">Register</font> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:black;font-family:aqua;">Your</font> <font style="height:42px;  text-align:center; font-size:42px; text-decoration:bold; color:orange;font-family:aqua;">Company</font> </h1></center><br>
	
			<b><h3 style="font-style: italic;  text-align:center; size:9;">Are you a tech company? Register with us to provide technical assistance to customers around the globe.</h3></b><br>
	
			<center><img src="comp.jpeg" ></center><br><br>
	
	
				<div class="form">
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
				
					<div class="modal-footer">
                 		<button type="submit" name="usrreg">Submit</button></center>
				 		 <a href="../Home.php"><center><button type="button" class="cancelbtn"> Cancel </button></center></a>		
				 				
            		</div>		
				</div>
			</center>

		</form>
    	</div>
	</body>
</html>