<?php
session_start();
if (isset($_SESSION['adminid']) && isset($_SESSION['adminpswd'])) {
    $adminid = $_SESSION['adminid'];
} else {
    header("location:logoutadmin.php");
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
            <a href="addmovies.php">ADD MOVIES</a>
            <a style="text-decoration:none"; href="logout.php">LOGOUT</a>
            <a style="text-decoration:none"; href="aboutus.php">ABOUT US</a>
            
            
        </div>
    </div><br/>

        <section class="my-5">
            <div class="py-3"><br/>
            <br/>
                <h1 class="text-center">MOVIES</h1>
                <center><hr color="yellow" width='500px;'></center>
            </div>

            <?php
            include 'dbconfigg.php';
            $records = mysqli_query($conn, "select * from movii"); // fetch data from database

            while ($data = mysqli_fetch_array($records)) {
                $id = $data['id'];
                
                ?>
                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-12 py-5 ml-5">
                        <img src="movies/<?php echo $data['movieimage']; ?>" class="card-img-top aboutimg" alt="...">
                    </div>
                    <div class="col-lg-8 col-md-9 col-12 py-5"><br/><br/><br/>
                        <h3><span class="detail">Movie Name :</span>  <span class="details"><?php echo $data['moviename']; ?></span></h3>
                        <h3><span class="detail">Movie Cast :</span> <span class="details"> <?php echo $data['cast']; ?></span></h3>
                        <h3><span class="detail">Movie Time :</span>  <span class="details"><?php echo $data['timings']; ?></span></h3><br/>
<a href="delmovie.php?id=<?php echo $id ?>"><button class="butn">Delete Movie</button></a>
                    </div>
                    


                </div>
            <?php } ?> 
        </section>

        








        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <div class="footerone" style="background-color: #fdb71a;
  width:100%;
  height: 70px;
  margin-top: 5%;">
        <p id="ftone" style=" color:black;
  font-weight: bolder;
  font-size: 30px;
  position: absolute;
  margin-top: 5px;
  margin-left:300px;">© 2021,🇨​🇮​🇳​🇪​🇲​🇦​ 🇿​🇴​🇳​🇪​🇸​. 🇦​🇱​🇱​ 🇷​🇮​🇬​🇭​🇹​🇸​ 🇷​🇪​🇸​🇪​🇷​🇻​🇪​🇩​. 🇩​🇪​🇸​🇮​🇬​🇳​🇪​🇩​ 🇧​🇾​ 🇨​🇿​ 🇬​🇷​🇴​🇺​🇵​🇸​ </p>
       </div>

    </body>
</html>