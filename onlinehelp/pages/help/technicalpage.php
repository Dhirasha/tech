<html>
    <head>
    
        <link href="pages/technical/drop.css" rel="stylesheet" type="text/css"/>
        <style>
            .content{
            background: rgba(0, 0, 0, 0.5); 
            color: #f1f1f1;
            width: 100%;
            height: 100%;
            padding: 20px;
        }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>
    </head>
    <body>
     <div class="content"> 
        <h1 style="color:white; size:20px; ">Select your Problem Category</h1>
        <img src="pages/technical/hard.png" width="25%" height="35%" > <img src="pages/technical/sw.jpg" width="25%" height="35%" > <img src="pages/technical/IOT.png" width="25%" height="35%" >
        <p><font style:bold; size="5" >Move the mouse over the button to open the dropdown menu.</font></p>
  
       
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
