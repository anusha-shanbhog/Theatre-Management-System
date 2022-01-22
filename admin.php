<?php 
session_start();
if (isset($_SESSION['adminid']) && isset($_SESSION['adminpswd'])) {
    header("location:adminhome.php");
}
?>
<html>
    <head>
    <title>Cinema Zone</title>
        <link rel="icon" href="homepage.jpg">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assign1..css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">
    </head>
    <body>


    <div class="header">
        <img class="logo1" src="homepage.jpg">

        <div class="nav">
            
            <a style="text-decoration:none"; href="assign1.php">HOME</a>
            
            <a style="text-decoration:none"; href="aboutus.php">ABOUT US</a>
            
            <a style="text-decoration:none"; href="contact_us.php">CONTACT</a>
        </div>
    </div><br/>


        <div class="loginbox" style="position: absolute; margin-top:-10%" >
            <img src="adminlogo.png" class="avatar">
            <h1 style="color:black; font-weight:bolder; font-size:25px;" class="heading">Login here</h1>
            <form method="POST">
                <p style="color:black; font-weight:bolder;">USERNAME</p>
                <input style="color:white; background-color:black; border-radius:10px"type="text" autocomplete="off" name="adminid" placeholder="Enter userid" required="">
                <p style="color:black; font-weight:bolder;">PASSWORD</p>
                <input style="color:white; background-color:black;  border-radius:10px"type="password" autocomplete="off" name="adminpswd" placeholder="Enter password" required="">
                <input type="submit"  style="color:white; background-color:black; font-weight:bolder;"name="adminlogin" value="Login">
            </form>
        </div>
        <?php
        $in = filter_has_var(INPUT_POST, 'adminlogin');
        if ($in == TRUE) {
            $adminid = filter_input(INPUT_POST, 'adminid');
            $adminpswd = filter_input(INPUT_POST, 'adminpswd');
            if ($adminid == "dbms" && $adminpswd == "project") {
                session_start();
                $_SESSION['adminid'] = $adminid;
                $_SESSION['adminpswd'] = $adminpswd;
                header("location:adminhome.php");
            } else {
                echo '<script>alert ("incorrect username or password")</script>';
                echo '<meta http-equiv="refresh" content="0;admin.php"/>';
            }
        }
        ?>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <div class="footerone" style="background-color: #fdb71a;
  width:100%;
  height: 70px;
  margin-top: 35%;">
        <p id="ftone" style=" color:black;
  font-weight: bolder;
  font-size: 30px;
  position: absolute;
  margin-top: 5px;
  margin-left:300px;">© 2022,🇨​🇮​🇳​🇪​🇲​🇦​ 🇿​🇴​🇳​🇪​🇸​. 🇦​🇱​🇱​ 🇷​🇮​🇬​🇭​🇹​🇸​ 🇷​🇪​🇸​🇪​🇷​🇻​🇪​🇩​. 🇩​🇪​🇸​🇮​🇬​🇳​🇪​🇩​ 🇧​🇾​ 🇨​🇿​ 🇬​🇷​🇴​🇺​🇵​🇸​ </p>
       </div>
       
    </body>
</html>

