<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "demo";


mysql_connect ($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['uname'])){

    $uname=$_POST['uname'];
    $password=$_POST['pword'];

    $sql ="select * from loginform where user = '" .$uname."' AND Pass='".$password."' limit 1";

    $result = mysql_query($sql);
    if(mysql_num_rows($result)==1){
    echo "You Have Successfully Logged in";
    header('location: panel.php');
    exit();
    }

    else{
    echo "You Have Entered An Incorrect Password";
    exit();
    }
}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IA1</title>
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="IA1style.css">

</head>
<body>
<div class="container">
<div class="form">
<form id="login" method="post" action="" class="signin-form">
    <img src="imgs/login2.jpg">
    <p></p>
    <!-- <div> -->
        <label for="uname" >Username <br></label>
        <input type="text" id="uname" name="uname" placeholder="Enter Username" required>
    <!-- </div> -->

    <p></p>
    <!-- <div> -->
    <label for="pword" >Password <br></label>
    <input type="password" id="pword" name="pword" placeholder="Enter Password" required>
    <!-- </div> -->
    <!--<br />-->
    <!--<hr>-->

    <p></p>
    <!-- <div > -->
        <button>Login</button>
    <!-- </div> -->


</form>
</div>
<address style="color: white">
  Author: Edudzi Mamattah
</address>
</body>
</html>