<?php
if(isset($_POST['submit']))
{
   /*
  This file contains database configuration assuming you are running mysql using user "root" and password ""
	*/
 
	$server = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "Movie";
 
   	//create connection
	$conn= mysqli_connect($server, $dbUsername , $dbPassword, $dbname);
 
	//Check the connection
	if($conn == false){
    	dir('Error: Cannot connect');
	}
 
	//$username = "username";
	//$password = "password";
 
	$username = $_POST['username'];
    $usermail = $_POST['usermail'];
    $usernumber = $_POST['usernumber'];
    $userpassword = $_POST['userpassword'];
	
	
	


	
 
 
	$sql = "INSERT INTO `users` (`username`, `password`, `phoneno`, `email`) VALUES ('$username', '$userpassword', $usernumber, '$usermail')";
    if($conn->query($sql) == TRUE)
	{
  
      header("location: login.php");
	}
	else
	{
  	echo "Not done";
	}
 
 
mysqli_close($conn);
}
?>











<!DOCTYPE html>
<html>
    <head>
        <title>Cinema Zone</title>
        <link rel="icon" href="homepage.jpg">
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <div class="header">
        <img class="logo1" src="homepage.jpg">

        <div class="nav">
        <a style="text-decoration:none"; href="assign1.php">HOME</a>
        <a style="text-decoration:none"; href="#bla">ADMIN</a>
            <a style="text-decoration:none"; href="login.php">LOGIN</a>
            <a style="text-decoration:none";href="aboutus.php">ABOUT US</a>
            
            <a style="text-decoration:none";href="contact_us.php">CONTACT</a>
        </div>
    </div><br/>
    <div class="loginform">
        <img id="adjust" src="Banner-Image-519x640.png" height="500px" width="auto">
        <p id="sat">Already have an account?<a id="reg" href="login.php">Login</a></p>
        <h2>𝗖𝗿𝗲𝗮𝘁𝗲 𝗔𝗰𝗰𝗼𝘂𝗻𝘁 𝘄𝗶𝘁𝗵 𝗖𝗭</h2>
   <form action="register.php" method="POST" id="registerform" >
       <p id="username">Username:</p>
       <input type="text" name="username" id="userrname" required>
       <p id="usermail">Email ID:</p>
       <input type="text"name="usermail" id="userrmail" required>
       <p id="usernumberr">Mobile:</p>
       <input type="number" name="usernumber" id="userrnumber"required>
       <p id="userpassword">Password:</p>
       <input type="password" name="userpassword" id="userpasswordd">
       <button onclick="message1()" type="submit"name="submit" value="submit">𝚂𝚞𝚋𝚖𝚒𝚝</button>
       
   </form>
   
































       </div>
       <div class="footer">
           <p id="ft">© 2021,🇨​🇮​🇳​🇪​🇲​🇦​ 🇿​🇴​🇳​🇪​🇸​. 🇦​🇱​🇱​ 🇷​🇮​🇬​🇭​🇹​🇸​ 🇷​🇪​🇸​🇪​🇷​🇻​🇪​🇩​. 🇩​🇪​🇸​🇮​🇬​🇳​🇪​🇩​ 🇧​🇾​ 🇨​🇿​ 🇬​🇷​🇴​🇺​🇵​🇸​ </p>
          </div>
          <script>
        function message1()
        {
            alert("Successfully submitted");
        }
        </script>
    </body>