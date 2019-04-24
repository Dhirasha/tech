<!DOCTYPE html>
<html>
<head>
	<style>
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
    
	}

	li {
		float: left;
		display:inline;
		border-right: 1px solid #bbb;
		
	}

	li a{
		display: block;
		color: white;
		text-align: center;
		padding: 14px 20px;
		text-decoration: none;
		font-size: 18px;
		font-weight: bold;
	}

	li a:hover{
		background-color: #ADD8E6;
		
	}
	
	body { 
		background:url("") no-repeat fixed center; 
			justify-content: center;
			max-width: 100%;
    		height: auto;
   		 	background-repeat: no-repeat;
   		 	background-size: cover; 
   		 
    		filter: alpha;
	}

	button{
		
		font-size: 18px;
		color: black;
		background-color: ;
		border: 2px solid black;
		padding: 10px 20px;
		border-radius: 4px;
		text-decoration: none;
		cursor: pointer;
		float: right;
		margin: 10px;
		
	}
	 
 
	</style>
	</head>
	<body>
		<div><?php if (!isset($_SESSION['username'])){
        echo '<a href="login.php"><button class="button">Login</button></a>';
		echo'<a href="pages/registerpage.php"><button class="button">Register</button></a>';
		}
		?></div> 

		

		<div class="nav">
		<ul>
            <li><a href="Home.php" ><font color="000000">Home</font></a></li>
            <li><a href="about.php" ><font color="000000">About Us</font></a></li>
            <li><a href="technical.php" ><font color="000000">Tech Support </font></a></li>
            <li><a href="Contact.php" ><font color="000000">Contact Us </font></a></li>
            <li><a href="membership.php" ><font color="000000">Partnership </font></a></li>
            <li><a href="feedback.php"><font color="000000">Feedback</font></a></li>
            <li><a href="Help.php"><font color="000000">FAQs</font></a></li>
        </ul>
		
    	<section style="max-height:400px;">
                    <img class="mySlides" src="photo/cover1.png" style="width:100%; height:220%;">
                     <img class="mySlides" src="photo/banner2.jpg" style="width:100%; height:220%;">
                     <img class="mySlides" src="photo/banner14.jpg" style="width:100%;height:220%;">
                      <img class="mySlides" src="photo/banner01.jpg" style="width:100%; height:220%; ">
                   
                     <img class="mySlides" src="photo/banner16.png" style="width:100%;height:220%;">
                    <img class="mySlides" src="photo/banner6.png" style="width:100%;height:220%;">
                     <img class="mySlides" src="photo/banner7.jpg" style="width:100%;height:220%;">
                    <img class="mySlides" src="photo/banner8.jpg" style="width:100%;height:220%;">
                    <img class="mySlides" src="photo/banner9.jpg" style="width:100%;height:220%;">
                      
                      
            </section>
    	</div>


            <script>
				var myIndex = 0;
				carousel();

			function carousel() {
			   	var i;
			    var x = document.getElementsByClassName("mySlides");
			    for (i = 0; i < x.length; i++) {
			        x[i].style.display = "none";
			    }
			    myIndex++;
			    if (myIndex > x.length) {myIndex = 1}
			    x[myIndex-1].style.display = "block";
			    setTimeout(carousel, 3000);
				}     
    
			</script>
	</body>
</html>
		
   
    

  	
	
	