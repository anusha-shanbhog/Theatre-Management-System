<?php 
session_start();
if (isset($_SESSION['adminid']) && isset($_SESSION['adminpswd'])) {
    header("location:adminhome.php");
}
?>
<html>
    <head>
        <title>admin</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">
    </head>
    <body>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="thtrlogo.jpg" width="60px;" style="border-radius: 10px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item p-2">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>

                        <li class="nav-item p-2">
                            <a class="nav-link active" aria-current="page" href="#">admin</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>


        <div class="loginbox">
            <img src="adminlogo.png" class="avatar">
            <h1 class="heading">login here</h1>
            <form method="POST">
                <p>USERNAME</p>
                <input type="text" name="userid" placeholder="enter userid" required="">
                <p>PASSWORD</p>
                <input type="password" name="userpswd" placeholder="enter password" required="">
                <input type="submit" name="userlogin" value="login">
            </form>
        </div>
        <?php
        $in = filter_has_var(INPUT_POST, 'userlogin');
        if ($in == TRUE) {
            $adminid = filter_input(INPUT_POST, 'userid');
            $adminpswd = filter_input(INPUT_POST, 'userpswd');
            if ($adminid == "shaghil" && $adminpswd == "mohammed") {
                session_start();
                $_SESSION['userid'] = $adminid;
                $_SESSION['userpswd'] = $adminpswd;
                header("location:index.php");
            } else {
                echo '<script>alert ("incorrect username or password")</script>';
                echo '<meta http-equiv="refresh" content="0;index.php"/>';
            }
        }
        ?>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>

