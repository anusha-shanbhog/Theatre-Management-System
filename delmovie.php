<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id=$_GET['id'];
        $sql="delete from movii where id='$id'";
         include 'dbconfigg.php';
         if(mysqli_query($conn,$sql))
            {
               echo '<script>alert("movie Deleted Successful")</script>';
        echo '<meta http-equiv="refresh" content="0;adminhome.php"/>';;
            }
            else
            {
                echo "deleted unsuccessfull";
            }
        ?>
    </body>
</html>