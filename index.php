<html>
    <head>
        <title>hello</title> 
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
                    <ul class="navbar-nav mr-auto mb-2 mb-lg- menubar">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">

                            <?php 
                            session_start();
                            if (isset($_SESSION['userid']) && isset($_SESSION['userpswd'])) { ?>
                                <a class="nav-link active" href="logout.php"> <?php echo 'LOGOUT'; ?></a><?php } 
                                else {
                                ?>
                                <a class="nav-link active" href="userlogin.php"> <?php echo 'LOGIN'; ?></a>
                                <?php } ?>
                                 

                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="admin.php">ADMIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">BOOKINGS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">CONTACT US</a>
                            </li>




                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>




            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="bacground.jpeg" alt="Los Angeles" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <img src="bacground.jpeg" alt="Chicago" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <img src="thtrlogo.jpg" alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>   
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

            <section class="my-5">
                <div class="py-3">
                    <h1 class="text-center">MOVIES</h1>

                </div>


                <div class="container-fluid">
                    <div class="row">
                        <?php
                        include 'dbconfigg.php';
                        $records = mysqli_query($conn, "select * from movii"); // fetch data from database

                        while ($data = mysqli_fetch_array($records)) {
                            ?>
                            <div class="card col-lg-3 col-md-4 col-12 my-3 " style="width: 18rem;background: #343a40">
                                <img src="movies/<?php echo $data['movieimage']; ?>" class="card-img-top aboutimg" alt="...">
                                <div class="card-body ">
                                    <h5 class="card-title"><?php echo $data['moviename']; ?></h5>
                                    <p class="card-text">price : <?php echo $data['price']; ?></p>
                                    <a href="moviedetails.php?id=<?php echo $data['id']; ?>" class="btn btn-primary ">movie details</a>
                                </div>

                            </div>
                        <?php } ?>
                </div>
            </div>
        </section>















        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>