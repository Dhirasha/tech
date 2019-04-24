<?php
// session_start();
require('pages/auth.php');
if (!isset($_SESSION['username'])){
		header('location:login.php');
	}
require('pages/server.php');
?>


	<div>
		<div style="width: 100%; height: 17%; ">
			<?php include 'models/header/Header.php' ?> 
		</div>
	
		<div>
			<div style="width: 100%; height: 40%; "><?php include 'models/menu/menubar.php' ?> 
		</div>
		<br>
		
	    <div  style="margin-top:50;font-size:18px;"><br><br>
	   <div>
		<form action="pages/server.php" method="POST">
			<center>
			<label><font size="5">Select your prefered Tech Support Company</font> </label>
			<select name="company">
			<?php company_listing($_GET['cat']);?>
			</select><br>
			<label><font size="5px">Type Your Problem here</font></label><br>
			<textarea name="problem" placeholder="Write your tech problem.." style="height:200px; width:500px" required></textarea>
			<br>
			<button name="problemsubmit" type="submit">Submit</button>	
			</center>
		</form>
	</div>
	

	</body>
</html>
	




