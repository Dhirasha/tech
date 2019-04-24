<?php
	require('pages/server.php');
 if (!isset($_SESSION['username'])){
 		header('location:login.php');
	 }
 elseif($_SESSION['username']=='admin'){
	 header('location:admin.php');
 }
?>

<html>
	<head>
		
	</head>
	<body>
		<div style="width: 100%; height: 17%; "><?php include 'models/header/Header.php' ?> </div>
		<div ><?php include 'models/menu/menubar.php' ?> </div>
	
	<div style="position:relative;z-index=1;background-color:gray;color:black">
	<center><h1>My Profile</h1></center>
	<ul>
		<?php problem_listing(); ?>
	</ul>
	</div>
	</body>
</html>
	




