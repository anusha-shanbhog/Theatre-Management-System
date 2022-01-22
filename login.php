<?php 
 session_start();
 if(isset($_SESSION['user'])&& isset($_SESSION['password']))   
{
    
    header("location:assign1.php");
}

?><!DOCTYPE html>
<html>
    <head>
        <title>Cinema Zone</title>
        <link rel="icon" href="homepage.jpg">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="header">
        <img class="logo1" src="homepage.jpg">

        <div class="nav">
        <a href="assign1.php">HOME</a>
        <a href="admin.php">ADMIN</a>
            
            
            <a style="text-decoration:none"; href="aboutus.php">ABOUT US</a>
            
            <a style="text-decoration:none";href="contact_us.php">CONTACT</a>
        </div>
    </div><br/>
    <div class="loginform">
     <img id="adjust" src="Banner-Image-519x640.png" height="500px" width="auto">
     <p id="sat">New to www.cinemazones.com?<a id="reg" href="register.php">Register Now</a></p>
     <h2>𝗟𝗼𝗴𝗶𝗻 𝗧𝗼 𝗖𝗭</h2>
     <form id="loginn" method="POST">
    <p id="mumbai">Username : </p><br/>
    <input id="email" type="text" name="user" required >
    <p id="bombay">Password : </p><br/>
    <input id="email" type="password" name="password"required >
    <button type="submit" name="login" value="Login">𝙻𝙾𝙶 𝙸𝙽</button>
</form>

    </div>
    <div class="footer">
        <p id="ft">© 2021,🇨​🇮​🇳​🇪​🇲​🇦​ 🇿​🇴​🇳​🇪​🇸​. 🇦​🇱​🇱​ 🇷​🇮​🇬​🇭​🇹​🇸​ 🇷​🇪​🇸​🇪​🇷​🇻​🇪​🇩​. 🇩​🇪​🇸​🇮​🇬​🇳​🇪​🇩​ 🇧​🇾​ 🇨​🇿​ 🇬​🇷​🇴​🇺​🇵​🇸​ </p>
       </div>




<?php 

include 'dbconfigg.php';
if(isset($_POST['login']))
        {
            $user=$_POST['user'];
            $password=$_POST['password'];
            $sql="select * from `users` where username='$user' and password='$password'";
            include 'dbconfigg.php';
            
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                session_start();
                $_SESSION['user']=$user;
                $_SESSION['password']=$password;
                header("location:assign1.php");
            }
            else
            {
                echo '<script>alert("userid or password incorrect");</script>';
            }
        }
?>
    </body>
</html>