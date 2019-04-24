<?php
    session_start();
    $db=mysqli_connect('localhost','root','','techsup');

    if (isset($_POST['login'])){
        $username=$_POST['name'];
        $pass=$_POST['pwd'];
        $query = "SELECT * FROM user WHERE uname = '$username' AND pwd = '$pass'";
        $results = mysqli_query($db,$query);
    
        if (mysqli_num_rows($results) == 1){
            $_SESSION['username']=$username;
            header('location:../profile.php');
        }
        else{
            echo 'Wrong username password combination';
            echo "<form method='post' action='auth.php'><button type='submit' name='logout' >Retry</button></form>";
        }
    }

    if (isset($_POST['companylogin'])){
        echo 'companylogin';
        $email=$_POST['email'];
        $pass=$_POST['pwd'];
        $query = "SELECT * FROM company WHERE email = '$email' AND pwd = '$pass'";
        $results = mysqli_query($db,$query);
    
        if (mysqli_num_rows($results) == 1){
            $_SESSION['username']=$email;
            echo 'LOGGED IN';
            header('location:../company.php');
        }
        else{
            echo 'Wrong username password combination';
            echo "<form method='post' action='auth.php'><button type='submit' name='logout' >Retry</button></form>";
        }
    }

    if (isset($_POST['adminlogin'])){
        $pass=$_POST['pwd'];
        $query = "SELECT * FROM user WHERE uname = 'admin' AND pwd = '$pass'";
        $results = mysqli_query($db,$query);
    
        if (mysqli_num_rows($results) == 1){
            $_SESSION['username']='admin';
            echo 'LOGGED IN';
            header('location:../admin.php');
        }
        else{
            echo 'Wrong username password combination';
            echo "<form method='post' action='auth.php'><button type='submit' name='logout' >Retry</button></form>";
        }
    }
    
    if (isset ($_POST['logout'])){
        session_destroy();
        header('location:../login.php');
    }

    if (isset ($_POST['profile'])){
        header('location:../profile.php');
    }
    
    