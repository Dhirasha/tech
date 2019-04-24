<html>
    <head>
    
        <link href="pages/technical/drop.css" rel="stylesheet" type="text/css"/>
        <style>
            .content{
            background: rgba(0, 0, 0, 0.5); 
            width: 100%;
            height: 100%;
            padding: 20px;
            opacity: 0.9;
            filter: alpha(opacity=50);
        }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>
    </head>
    <body>
     <div class="content"> 
        
        <center><h1> <font style="height:25px;  text-align:center; font-size:40px; text-decoration:bold; color:orange;font-family:aqua;">Select Your</font> <font style="height:35px;  text-align:center; font-size:30px; text-decoration:bold; color:black;font-family:aqua;">Problem Category</font></h1></center><br><br>
        <p><font style="color:black; font-size:20px;"><b><i>We are ready to provide the assistance for your problems in,</i></font>
            <font style="color:Maroon; font-size:22px:">
       
            <ul>
                <li> HARDWARE</li> <br>
                <li>SOFTWARE</li><br>
                <li> IOT</li>
            </ul>
        </font>
        
         <p><i><font style="color:black; font-size:22px;"><b>You can contact our registered companies to solve any technical problem you have.Contact our registered companies according to your problem category.We are ready to guide you at any inconvenience.</b></i></font></p>
        

        <center><img src="pages/technical/hw.png" width="30%" height="50%" ><img src="pages/technical/swt.jpg" width="30%" height="50%" > <img src="pages/technical/iot.png" width="30%" height="40%" ></center>
        <p><font style:bold; size="4" >Move the mouse over the button to open the dropdown menu.</font></p>
  
       
        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
                
            <div class="dropdown-content">
                 <a href="category.php?cat=Hardware">Hardware</a>
                 <a href="category.php?cat=Software">Software</a>
                <a href="category.php?cat=IOT">IOT and Others</a>
            </div>
        </div>
    </div>

    </body>
</html>
