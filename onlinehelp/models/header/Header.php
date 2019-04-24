<html>
	<head>
	
    <style>
    h2{
    background-color: black;
     opacity: 0.5;
    filter: Alpha(opacity=50);
    filter: alpha(opacity=80);
    -moz-opacity: 0.80;
    -khtml-opacity: 0.8;
    opacity: 0.6;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 13%;
    padding: 0;
    margin: 0;
}
#h2 #h2-content{
            margin: 6px;
            background-color: #1E90hj;
            width: 50%;
            height:20%;
        
}
.button2 {
    
    
	color: black;
	text-align: center;
	text-decoration: none;
	font-size: 18px;
	
}

.disabled {
    opacity: 0.6;
    cursor:pointer;
}


</style>

	</head>
	
		
		 <!-- <align-items:top; height: 50%; > -->
		<h2> <font size="14" color="#ADD8E6">
            DAAU<img src="photo/hand.png" height="100px" align="middle"></font>
         Online Tech Support</h2><br><br><br><br> 
         
        </h2>
			
    
   
             <?php
                if (isset($_SESSION['username'])){
                    echo $_SESSION['username'];
                    echo '<form style="width:auto;background-color:transparent;border:none;" action="pages/auth.php" method="POST" >
                    <button style="" name="profile">Profile</button>
                    <button style="float:right" name="logout">Logout</button>
	                </form>';
                }
                ?>
		 		<div style ="width: 100%; height:10%;"> 

        
		 
         
	</body>
</html>