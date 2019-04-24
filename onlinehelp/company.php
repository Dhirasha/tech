<?php
	include('pages/server.php');
	if (!isset($_SESSION['username'])){
		header('location:login.php');
	}
	?>
<html>
	<head>
		
	</head>
	<body>
		<div style="width: 100%; height: 17%; "><?php include 'models/header/Header.php' ?> </div>
		<div style="width: 100%;margin-top: 10px; height: 5%;"><?php
		include 'models/menu/menubar.php' ?> </div>
	
	<!-- <table style="margin-left:0%; margin-top: 2%;">
  <tr>
		<!-- <th><?php 
		// include 'models/sidebar/sidebar.php';?></th> -->
    <!-- <td style="width: 800px;(122,215,243);" > -->
		<?php
		//  include 'pages/register/companypage.php'; ?></td> 
  </tr></table> 
	<div style="position:relative;top:250px;padding:5px;min-height:200px;z-index=1;background-color:gray;color:black">
	<h3>New Problems</h3>
	<ul>
	<?php list_for_company();?>
	</ul>
	</div>


	</body>
</html>
	




