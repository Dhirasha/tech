
<html>

    <head>
		<link href="pages/help/drop.css" rel="stylesheet" type="text/css"/>
        <style>

            container .content {
                    background:#white; 
                    color:#9370DB ;
                     width: 80%;
					 height:80%;           
                     padding: 20px;
					 opacity: 0.6;
					filter: alpha(opacity=50);
                    position: fixed;
                            }

            

            .dropbtn:hover, .dropbtn:focus {
                background-color: #5072a7;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown a:hover {background-color: #ddd;}

            .show {display: block;}
        </style>

    </head>


    <body>

            
            <div class="content">

                <center><h1> <font style="height:35px;  text-align:center; font-size:40px; text-decoration:bold; color:orange;font-family:aqua;">Frequently Asked</font> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:black;font-family:aqua;">Questions</font></h1></center><br><br>
					<p><font style:bold; size="5" >Click the button to open the dropdown menu.</font></p>
  

                <div class="dropdown">

                    <button onclick="myFunction()" class="dropbtn" >Frequently Asked Questions</button>
                 
                    <div id="myDropdown" class="dropdown-content">
                       
                        <a href='pages/help/Cost and Payment.php'><u><b>Cost and Payment</b></u></a>
                    	<hr>
                        <a href="pages/help/WordPress.php"><u><b>WordPress</b></u></a>
                    	<hr>
                        <a href="pages/help/Timeline.php"><u><b>Timeline</b></u></a>
                    	<hr>
                    	<a href="pages/help/Design Process.php"><u><b>Design Process</b></u></a>
                    	<hr>
                    	<a href="pages/help/Communication.php"><u><b>Communication</b></u></a>
                    	<hr>
                        <a href="pages/help/Training.php"><u><b>Training and Support</b></u></a>
                        <hr>
                    	<a href="pages/help/Web Hosting and Domain Registration.php"><u><b>Web Hosting and Domain Registration</b></u></a>
                    	
                
                    </div>
                </div>
            </div>
       

        <script>

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }


        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>


    </body>
</html>
