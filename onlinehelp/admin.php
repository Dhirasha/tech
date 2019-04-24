<?php
require('pages/server.php');
if (!isset($_SESSION['username'])){
		header('location:pages/login/admin.php');
	}
?>
<html>
	<head>
	<title>Admin Panel</title>
	<u><b><center><h2>Administrative Tasks</h2></center></b></u>
	<form action="pages/auth.php" method="POST" >
                    <button name="logout">Logout</button>
	                </form>
	</head>
	<body background="bcg.jpg">
		<div>
			<ul >
				<li style="display:inline"><a href="#users">Users</a></li>
				<li style="display:inline"><a href="#companies">Companies</a></li>
				<li style="display:inline"><a href="#problems">Problems</a></li>
				<li style="display:inline"><a href="#feedback">Feedback</a></li>
				<li style="display:inline"><a href="#messages">Messages</a></li>
			</ul>
		</div>
	<h2 id="users">Users</h2>
		<?php admin('user');?>
	<hr>
	<h2 id="companies">Companies</h2>
		<?php admin('company');?>
	<hr>
	<h2 id = "problems">Problems</h2>
		<?php admin('problem');?>
	<hr>
	<h2 id = "feedback">Feedback</h2>
		<?php admin('feedback');?>
	<hr> 
	<h2 id = "messages">Messages</h2>
		<?php admin('contact');?>
	<hr> 

	</body>
</html>