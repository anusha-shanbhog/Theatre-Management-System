<?php
if(isset($_POST['submit']))
{
   /*
  This file contains database configuration assuming you are running mysql using user "root" and password ""
	*/
 
	$server = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "movie";
 
   	//create connection
	$conn= mysqli_connect($server, $dbUsername , $dbPassword, $dbname);
 
	//Check the connection
	if($conn == false){
    	dir('Error: Cannot connect');
	}
 
	//$username = "username";
	//$password = "password";
    $usermessage=$_POST['usermessage'];
	$username = $_POST['username'];
    $usermail = $_POST['usermail'];
    
	$sql = "INSERT INTO `user_feedback` (`usermessage`, `username`, `usermail`) VALUES ('$usermessage', '$username', '$usermail');";
    if($conn->query($sql) == TRUE)
	{
  
      header("location: contact_us.php");
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
        <link rel="stylesheet" href="contactus.css">
    </head>
    <body>
        <div class="header">
         <img class="logo1" src="homepage.jpg">

         <div class="nav">
         <a style="text-decoration:none"; href="assign1.php">HOME</a>
         <a style="text-decoration:none"; href="admin.php">ADMIN</a>
            <a style="text-decoration:none"; href="login.php">LOGIN</a>
            
            <a style="text-decoration:none"; href="aboutus.php">ABOUT US</a>
            
            <a style="text-decoration:none"; href="contact_us.php">CONTACT</a>
         </div>
       
        </div>

    <div class="shagil">
        <img id="seat" src="img_contact_banner.jpg" height="700px" width="100%">
        <em>Our</em>
        <p><i>DOORS ARE ALWAYS OPEN</i></p>
    </div>
    <div class="contact">
        <p id="connect">
            ᴄᴏɴɴᴇᴄᴛ ᴡɪᴛʜ ᴜꜱ
        </p>
        <a href="https://instagram.com/cz_groups?utm_medium=copy_link"><img id="inslogo" src="instagram_icon.svg" height="25px" width="50px"></a>
        <p class="part2">
            ᴇᴍᴀɪʟ
        </p>
        <a  href="https://mail.google.com/mail/u/1/?view=cm&fs=1&to=contact.cinemazone@gmail.com&tf=1" id="part21">contact.cinemazone@gmail.com</a>
        <p id="phone1">
            ᴘʜᴏɴᴇ

        </p>
        <phone id="mobile">+91 9886409959</phone>
    </div>
    <div class="address">
        𝚂𝚃𝙾𝚁𝙴 𝙰𝙳𝙳𝚁𝙴𝚂𝚂
    </div>
    <div class="loc">
        𝟸𝟶𝟾, 𝙰𝚞𝚛𝚊 𝙼𝚊𝚕𝚕, 𝙼𝙶 𝚁𝚘𝚊𝚍
    </div>
    <div class="area">
        𝙱𝙰𝙽𝙶𝙰𝙻𝙾𝚁𝙴 - 𝟻𝟼𝟶𝟶𝟶𝟷
    </div>
   <div class="line">
       <hr>
   </div>
   <div class="feed">
       <p id='text'>LET'S HAVE A CHAT</p>
       <form action="contact_us.php" method="POST">
           <textarea id="blabla" placeholder="𝙼𝚢 𝙼𝚎𝚜𝚜𝚊𝚐𝚎..." rows="10" cols="90" name="usermessage" required></textarea>
           <input type="text" id="usname" placeholder="𝙼𝚢 𝚗𝚊𝚖𝚎 𝚒𝚜..."  name="username" required>
           <input type="text" id="mail" placeholder="𝚁𝚎𝚙𝚕𝚢 𝚖𝚎 𝚝𝚘 𝚎𝚖𝚊𝚒𝚕..."  name="usermail" required>
           <button type="submit" onclick="message()" name="submit" id="bton"value="🇸​🇪​🇳​🇩​ 🇲​🇾​ 🇲​🇪​🇸​🇸​🇦​🇬​🇪​">🇸​🇪​🇳​🇩​ 🇲​🇾​ 🇲​🇪​🇸​🇸​🇦​🇬​🇪</button>
       </form>
   </div>
   <div class="footer">
    <p id="ft">© 2022,🇨​🇮​🇳​🇪​🇲​🇦​ 🇿​🇴​🇳​🇪​🇸​. 🇦​🇱​🇱​ 🇷​🇮​🇬​🇭​🇹​🇸​ 🇷​🇪​🇸​🇪​🇷​🇻​🇪​🇩​. 🇩​🇪​🇸​🇮​🇬​🇳​🇪​🇩​ 🇧​🇾​ 🇨​🇿​ 🇬​🇷​🇴​🇺​🇵​🇸​ </p>
   </div>
   
   <script>
        function message()
        {
            alert("Successfully submitted");
        }
        </script>
    
    </body>
   