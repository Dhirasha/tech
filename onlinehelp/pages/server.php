<?php
require('auth.php');
require('conn.php');

if (isset($_POST['usrreg'])){
    usr_reg();
}

if (isset($_POST['companyreg'])){
    company_reg();
}

if (isset($_POST['problemsubmit'])){
    submit_problem();
}
if (isset($_POST['submit_answer'])){
    answer($_POST['problemid']);
}


//functions for user 
function usr_reg(){
    global $db;
    $uname=$_POST['name'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $num=$_POST['name'];
 

    if (chk_uname($uname)==TRUE){
        $query1 = "INSERT into user(uname,email,pwd,num) VALUES('$uname','$email','$pwd','$num')";
        mysqli_query($db,$query1);
        echo "Welcome to Jobsite".$uname;
        echo "<a href='../home.php'><button >Home</button></a>";
        mysqli_close($db);
    }
    else{
        echo "User name already taken <br><br>";
        echo "<button ><a href='../home.php'>Register Again</button></a>";

    }
}

function chk_uname($uname){
    global $db;
    $query = "SELECT * FROM user WHERE uname = '$uname'";
    $results = mysqli_query($db,$query);
    if (mysqli_num_rows($results) == 1){
        return FALSE;
    }
    else{
        return TRUE;
    }
    mysqli_close($db);
    
}


if(isset($_POST['usrcnt'])){
    print_r($_POST);
   
   echo    $name = $_POST['firstname'];
   echo $email = $_POST['email'];
   echo $comment = $_POST['comment'];
   echo $query = "INSERT INTO contact(`name`,`email`,comment)
   VALUES('$name','$email','$comment')    ";
   $result=mysqli_query($db,$query);
   header('location:../profile.php');
}


if(isset($_POST['submit_feedback'])){
    print_r($_POST);
   echo $type= $_POST['type'];
   echo    $name = $_POST['name'];
   echo $email = $_POST['email'];
   echo $comment = $_POST['comment'];
   $query = "INSERT INTO feedback(`type`,`name`,`email`,comment)
   VALUES('$type','$name','$email','$comment')    ";
   $result=mysqli_query($db,$query);
   header('location:../profile.php');
}



//functions for company registration
function company_reg(){
    global $db;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $cat=$_POST['category'];
    $pwd=$_POST['pwd'];
  

    $query1 = "INSERT into company(companyname,email,category,pwd) VALUES('$name','$email','$cat','$pwd')";
    mysqli_query($db,$query1);
//    mysqli_close($db);
    header('location:../Home.php');
}

//lists companies of a selected category
function company_listing($cat){
    global $db;
    $query= "SELECT companyname FROM company WHERE category='$cat'";
    $result= mysqli_query($db,$query);
    while ($company=mysqli_fetch_assoc($result)){
        echo '<Option value='."'".$company['companyname']."'".'>'.$company['companyname'].'</Option>';
    }
}


//sumbit problem
function submit_problem(){
    global $db;
    $techproblem=mysqli_real_escape_string($db,$_POST['problem']);
    $company=$_POST['company'];

    $user=$_SESSION['username'];
    $query1 = "INSERT into problem(username,company,problem) VALUES('$user','$company','$techproblem')";
    mysqli_query($db,$query1);
    echo "Your Problem will be received by representatives at $company. Please visit your <a href='../profile.php'>profile</a> to see if the problem has been answered";
    
}

//lists problems by a user
function problem_listing(){
    global $db;
    $user=$_SESSION['username'];
    $query= "SELECT * FROM problem WHERE username='$user'";
    $result= mysqli_query($db,$query);
    while ($company=mysqli_fetch_assoc($result)){
        if ($company['status']==0){
            $status="Not Answered";
            $color="red;";
            $link="";
        }
        else{
            $status = "Answered";
            $color="green;";
            $link="answer.php?id=".$company['problemid'];
        }
        echo '<li style="float:none">'.$company['company'].
        '<a style="display:inline;font-size:18px;color:'.
        $color.
        '">'.
        $status.
        '</a><br>'.
        
        '<small style="font-size:18px;"><form action="pages/server.php" method="POST"> <textarea name="problem" >'.$company['problem'].'</textarea><button name="update_problem" type="submit" >Save</button>
        <input type="hidden" name="problemid" value="'.$company['problemid'].'">
        </form></small>'.'<br>'.
        '<a style="display:inline;font-size:18px;color:white" href="delete.php?problemid='.$company['problemid'].'&type=problem">Delete</a><br>';
        
        if($status=="Answered"){
        
        echo
        '<p style="font-size:20px;">'.
        '<br><strong>Answer:  </strong>'. 
        $company['answer'].
        '</p>';

        }

        echo 
        '<hr>'.
        '</li>';
    }
}

if(isset($_POST['update_problem'])){
    $problem = $_POST['problem'];
    $problemid = $_POST['problemid'];
    $query = " UPDATE `problem` SET `problem`= '$problem' WHERE  `problemid`= '$problemid'";
    echo $query;
    mysqli_query($db,$query);
    header('location:../profile.php');
}



//lists problems for a company
function list_for_company(){
    global $db;
    $email=$_SESSION['username'];
    $query= "SELECT companyname FROM company WHERE email='$email'";
    $result=mysqli_fetch_assoc(mysqli_query($db,$query));
    $name= $result['companyname'];

    $query2= "SELECT * FROM problem WHERE company='$name'";
    $result2=mysqli_query($db,$query2);

    while ($company=mysqli_fetch_assoc($result2)){
        if ($company['status']==0){
            $status="No Answer";
             
            $link="";
            echo '<li style="float:none">'.
            '<form action="pages/server.php" method="POST">'.
            $company['problem'].'<br>'.
            'Posted by '. $company['username'].'<br>'.
            '<textarea name="answer"></textarea>'.'<br>'.
            '<input type="hidden" value="'.$company['problemid'].'" name="problemid" />'.
            '<button style="float:none" name="submit_answer" type="submit">Answer</button>'.
            '</form>'.
            '<hr>'.
            '</li>';
        }
        else{
            $status = "See Answer";
            $link="answer.php?id=".$company['problemid'];
        }
        
    }
}

//Processes Answers
function answer($problemid){
    global $db;
    $answer=$_POST['answer'];
    $problemid=$_POST['problemid'];

    $query="UPDATE `problem` SET `status` = '1', `answer` = '$answer' WHERE `problem`.`problemid` = $problemid";
    $result=mysqli_query($db,$query);
    header('location:../company.php');
}

//admin Tasks
function admin($table){
    // echo $table;
    global $db;
    $query = "SELECT * FROM $table";
    $result = mysqli_query($db, $query);
    echo '<ul>';
    $keys = array_keys(mysqli_fetch_assoc($result));

    while($entry = mysqli_fetch_array($result)){
        for ($x=0; $x<sizeof($entry)/2;$x++){
            echo '<li><strong>'.$keys[$x].'</strong><br>'.$entry[$x].'</li><br>';
        }
        echo '<strong>'.$table.' Actions:</strong>
        <a href="./delete.php?'.$keys[0].'='.$entry[0].'&type='.$table.'">Delete</a>
        <hr>';
    }
    echo '</ul>';
}   
?>