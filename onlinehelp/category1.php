<?php
session_start();
if (!isset($_SESSION['username'])){
		header('location:login.php');
	}
require('pages/server.php');
?>


	<div>
		<div style="width: 100%; height: 17%; ">
			<?php include 'models/header/Header.php' ?> 
		</div>
	</div>
		<div ><?php include 'models/menu/menubar.php' ?> </div><br>

	<div  style="margin-top:100;font-size:18px;">
		<form action="pages/server.php" method="POST">
		<label>Select your prefered Tech Support Company </label>
		<button name="problemsubmit" type="submit">Submit</button>	</center>
		</form>
		<select name="company">
		<?php company_listing($_GET['cat']);?>
		</select><br>
		<label>Your Problem here</label><br>
		<textarea name="problem" placeholder="Write your tech problem.." style="height:100px; width:300px"></textarea><br>
		<center>

<button name="problemsubmit" type="submit">Submit</button>	</center>
		</form>
	</div>
	

	</body>
</html>
	




