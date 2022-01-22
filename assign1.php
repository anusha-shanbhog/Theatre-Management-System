<!DOCTYPE html>
<html>
    <head>
        <title>Cinema Zone</title>
        <link rel="icon" href="homepage.jpg">
        <link rel="stylesheet" href="assign1..css">
        <link rel="stylesheet" href="style.css">
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

                <a  style="text-decoration:none"; href="assign1.php">HOME</a>
                <a style="text-decoration:none"; href="admin.php">ADMIN</a>
                <?php
                    session_start();
                    if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
                        ?>
                        <a class="nav-link active" href="logout.php"> <?php echo 'SIGN-OUT'; ?></a><?php
                    } else {
                        ?>
                        <a class="nav-link active" href="login.php"> <?php echo 'SIGN-IN'; ?></a>
<?php } ?></a>
                <a style="text-decoration:none"; href="aboutus.php">ABOUT US</a>

                <a style="text-decoration:none"; href="contact_us.php">CONTACT</a>
            </div>
        </div><br/>
        <div class="slidingpart">


        </div>
        <br/>
        <br/>
        <br/>
        <br/>

        <section class="my-5">
            <div class="py-3">
                <h1 class="text-center">ℕ𝕆𝕎 𝕊ℍ𝕆𝕎𝕀ℕ𝔾</h1>

            </div>


            <div class="container-fluid">
                <div class="row">

                    <?php
                    include 'dbconfigg.php';
                    $records = mysqli_query($conn, "select * from movii"); // fetch data from database

                    while ($data = mysqli_fetch_array($records)) {
                        ?>

                        <div class="card col-lg-3 col-md-4 col-12 my-3 " style="width: 18rem;background: black">
                            <img src="movies/<?php echo $data['movieimage']; ?>" class="card-img-top aboutimg" alt="...">
                            <div class="card-body ">
                                <h5 style=" margin-left:75px; margin-top:5px;" class="card-title"><?php echo $data['moviename']; ?></h5>
                                <p style=" margin-left:75px; margin-top:5px; margin-bottom:2px" class="card-text">Price : <?php echo $data['price']; ?></p>
                                <a style=" margin-left:60px; margin-top:5px;"href="moviedetails.php?id=<?php echo $data['id']; ?>" class="btn btn-primary ">Movie Details</a>
                            </div>

                        </div>
<?php } ?>
                </div>
            </div>
        </section>

        <div class="footerone" style="background-color: #fdb71a;
             width:100%;
             height: 70px;
             margin-top: 5%;">
            <p id="ftone" style=" color:black;
               font-weight: bolder;
               font-size: 30px;
               position: absolute;
               margin-top: 5px;
               margin-left:300px;">© 2022,🇨​🇮​🇳​🇪​🇲​🇦​ 🇿​🇴​🇳​🇪​🇸​. 🇦​🇱​🇱​ 🇷​🇮​🇬​🇭​🇹​🇸​ 🇷​🇪​🇸​🇪​🇷​🇻​🇪​🇩​. 🇩​🇪​🇸​🇮​🇬​🇳​🇪​🇩​ 🇧​🇾​ 🇨​🇿​ 🇬​🇷​🇴​🇺​🇵​🇸​ </p>
        </div>

    </body>