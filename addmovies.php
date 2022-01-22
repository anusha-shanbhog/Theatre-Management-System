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
        <img class="logo1" src="logo.png">

        <div class="nav">
            
            <a href="assign1.php">HOME</a>
            <a  href="logout.php">LOGOUT</a>
            
            
            <a href="contact_us.php">CONTACT</a>
        </div>
    </div><br/>

        <div class="add">
            ADD MOVIES
        </div>
        <div class="loginbox1">
            
            
            <center>
                <form method="POST" action="" enctype="multipart/form-data">
                <p>Choose Movie Image  <br/><input type="file" name="image"/></p>
                <p>Movie Name</p>
                <input type="text" name="movie" placeholder="Enter Movie Name" required="">
                <p>Castings</p>
                <input type="text" name="castings" placeholder="Enter Cast Name" required=""><br/>
                <p>Timings</p>
                <input type="text" name="timings"  required=""><br/>
                <p>Price</p>
                <input type="number" name="price"  required=""><br/>
                <input class="butn2" type="submit" name="addmovie" value="Add Movie"/>
                </form>
            </center>
        </div>
        <?php
$connection=mysqli_connect("localhost","root","","Movie");

$log = filter_has_var(INPUT_POST, 'addmovie');
if($log == TRUE)
{
    $file = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];   
        $folder = "C:\xampp\htdocs\dbmsprojectwork\movies".$file;
    $moviiename=filter_input(INPUT_POST, 'movie');
    $moviiecast=filter_input(INPUT_POST, 'castings');
    $moviietime=filter_input(INPUT_POST, 'timings');
    $moviieprice=filter_input(INPUT_POST, 'price');
    $query = "INSERT INTO `movii`(`movieimage`, `moviename`, `cast`, `timings`, `price`) VALUES ('$file','$moviiename','$moviiecast','$moviietime','$moviieprice');";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        echo '<script type="text/javascript">alert("movie uploaded ")</script>';
        
        echo '<meta http-equiv="refresh" content="5;addmovies.php"/>';
    }
 else {
        echo '<script type="text/javascript">alert("movie upload fail")</script>';
        echo '<meta http-equiv="refresh" content="0;addmovies.php"/>';
    }
    
}




?>
    </body>
</html>
