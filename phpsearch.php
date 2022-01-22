<?php

$search = $_POST['search'];

$connection=mysqli_connect("localhost","root","","Movie");

$conn = new mysqli($servername, $username, $password, $db);

$sql = "select * from movii where name like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["moviename"]."  ".$row["cast"]."  ".$row["timings"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>