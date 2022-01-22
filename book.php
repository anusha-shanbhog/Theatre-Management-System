<?php
$id = $_GET['id'];

include 'dbconfigg.php';
$records = mysqli_query($conn, "select * from movii where id=$id");
while ($data = mysqli_fetch_array($records)) {
    
    $moviename = $data['moviename'];
    
    $timings = $data['timings'];
    $price = $data['price'];
}
?>
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
                            <a class="nav-link active" aria-current="page" href="logout.php">SIGN-OUT</a>
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
        
         <div class="banner1">
            
            
            <center><form method="POST" action="" enctype="multipart/form-data">
                    <p>Choose Movie Image  <br/><input type="file" name="image"/></p>
                <p>Movie Name</p>
                <input type="text" name="movie" placeholder="enter movie name" required="">
                <p>castings</p>
                <input type="text" name="castings" placeholder="enter cast names" required=""><br/>
                <p>timings</p>
                <input type="text" name="timings"  required=""><br/>
                <p>price</p>
                <input type="number" name="price"  required=""><br/>
                <input class="butn2" type="submit" name="addmovie" value="Add Movie"/>
                </form></center>
        </div>
    </body>
</html>