
<?php
session_start();
if(isset($_SESSION['user'])&& isset($_SESSION['password']))   
{
    $user=$_SESSION['user'];
}
else{
    echo '<script>alert("SIGN IN TO BOOK A MOVIE")</script>';
    echo '<meta http-equiv="refresh" content="0;login.php"/>';
    
}
$id = $_GET['id'];

include 'dbconfigg.php';
$records = mysqli_query($conn, "select * from movii where id=$id");
while ($data = mysqli_fetch_array($records)) {
    $movieimage = $data['movieimage'];
    $moviename = $data['moviename'];
    $cast = $data['cast'];
    $timings = $data['timings'];
    $price = $data['price'];
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
            
        <a href="assign1.php">HOME</a>
            <a style="text-decoration:none"; href="admin.php">ADMIN</a>
            <a style="text-decoration:none"; href="login.php">LOGIN</a>
            <a style="text-decoration:none"; href="aboutus.php">ABOUT US</a>
            <a style="text-decoration:none"; href="contact_us.php">CONTACT US</a>
            
            
        </div>
    </div><br/>
    
       <div class="banner" style="background-image: linear-gradient(rgba(1,0,0,0.75),rgba(1,0,0,0.25)),url(movies/<?php echo "$movieimage"; ?>)">
     
        <br/>
        <br/>
        <br/>

            <div class="container-fluid">
                <div class="row">

                    <div class=" col-lg-6 col-md-4 col-12 my-3 moviedetails"><br/><br/><br/><br/>
                        <h4 class="moviedetail"> <span style="color:#ffa000;">MOVIE NAME :</span><?php echo "$moviename<br/>"?>
                        <h4 class="moviedetail"> <span style="color:#fdb71a;">CAST :</span><?php echo "$cast<br/>"?>  
                        <h4 class="moviedetail"> <span style="color:#fdb71a;">TIME :</span><?php echo "$timings<br/>"?> 
                        <h4 class="moviedetail"> <span style="color:#fdb71a;">PRICE :</span><?php echo "$price<br/>"?> 

                 <!--    <div class="det" style="position:absolute; line-height:155%">-->
                        
                        </div>
                        </h4>

                            <a href="book1.php?id=<?php  echo $id; ?>"><button style="colour:red;position: absolute; margin-top:280px; margin-left:-725px; width:155px;" class="butn"  name="book">BOOK</button></a>
                    </div>
                    <div class=" col-lg-6 col-md-4 col-12 my-3 ">
                        <img style="position:absolute; margin-top:-310px; margin-left:1050px;"src="movies/<?php echo "$movieimage";  ?>" class="movies"/>

                    </div>
                </div>
            </div>
        </div>
        <div class="footerone" style="background-color: #fdb71a;
  width:100%;
  height: 70px;
  
  margin-top: -3%;">
        <p id="ftone" style=" color:black;
  font-weight: bolder;
  font-size: 30px;
  position: absolute;
  margin-top: 5px;
  margin-left:300px;">© 2021,🇨​🇮​🇳​🇪​🇲​🇦​ 🇿​🇴​🇳​🇪​🇸​. 🇦​🇱​🇱​ 🇷​🇮​🇬​🇭​🇹​🇸​ 🇷​🇪​🇸​🇪​🇷​🇻​🇪​🇩​. 🇩​🇪​🇸​🇮​🇬​🇳​🇪​🇩​ 🇧​🇾​ 🇨​🇿​ 🇬​🇷​🇴​🇺​🇵​🇸​ </p>
       </div>
</html>