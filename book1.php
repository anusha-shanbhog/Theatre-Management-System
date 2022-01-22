<?php

session_start();
if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
    $user = $_SESSION['user'];
} else {
    header("location:assign1.php");
}

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
    <title>Cinema Zone</title>
        <link rel="icon" href="homepage.jpg">
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assign1..css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <img class="logo1" src="homepage.jpg">

            <div class="nav">

                <a  style="text-decoration:none"; href="assign1.php">HOME</a>
                <a style="text-decoration:none"; href="logout.php">SIGN-OUT</a>
                
                <a style="text-decoration:none"; href="aboutus.php">ABOUT US</a>

                <a style="text-decoration:none"; href="contact_us.php">CONTACT</a>
            </div>
        </div><br/>

        <div class="banner1" >

            <br/>
            <center><h1>𝕊𝔼𝕃𝔼ℂ𝕋 𝕊𝔼𝔸𝕋𝕊</h1><br/>
                <h5>Screen this way</h5>
                <hr class="line"></center>
            <div class="container-fluid">
                <form action="" method="POST">
                   <center> <div class="row" > 
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="1" id="1">01&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="2" id="2">02&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="3" id="3">03&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="4"id="4">04&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="5"id="5">05&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="6"id="6">06&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="7"id="7">07&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="8"id="8">08&emsp;&emsp;
                        </div>
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]"value="9" id="9">9&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="10" id="10">10&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="11" id="11">11&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="12" id="12">12&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="13"id="13">13&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="14"id="14">14&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="15"id="15">15&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="16" id="16">16&emsp;&emsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="17"id="17">17&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="18"id="18">18&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="19"id="19">19&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="20"id=20>20&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="21"id="21">21&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="22"id=22>22&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="23"id="23">23&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="24"id="24">24&emsp;&emsp;
                        </div>
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="25"id="25">25&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="26"id="26">26&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="27"id="27">27&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="28"id="28">28&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="29"id="29">29&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="30"id="30">30&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="31"id="31">31&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="32"id="32">32&emsp;&emsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="33"id="33">33&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="34"id="34">34&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="35"id="35">35&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="36"id="36">36&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="37"id="37">37&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="38"id="38">38&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="39"id="39">39&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="40"id="40">40&emsp;&emsp;
                        </div>
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="41"id="41">41&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="42"id="42">42&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="43"id="43">43&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="44"id="44">44&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="45"id="45">45&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="46"id="46">46&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="47"id="47">47&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="48" id="48">48&emsp;&emsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="49"id="49">49&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="50"id="50">50&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="51"id="51">51&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="52"id="52">52&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="53" id="53">53&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="54"id="54">54&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="55"id="55">55&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="56"id="56">56&emsp;&emsp;
                        </div>
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="57"id="57">57&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="58"id="58">58&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="59" id="59">59&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="60"id="60">60&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="61"id="61">61&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="62"id="62">62&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="63"id="63">63&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="64"id="64">64&emsp;&emsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="65"id="65">65&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="66"id="66">66&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="67"id="67">67&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="68"id="68">68&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="69"id="69">69&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="70"id="70">70&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="71"id="71">71&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="72"id="72">72&emsp;&emsp;
                        </div>
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="73"id="73">73&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="74"id="74">74&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="75"id="75">75&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="76" id="76">76&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="77" id="77">77&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="78"id="78">78&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="79"id="79">79&emsp;&emsp;
                            <input type="checkbox" name="seat[]"value="80"id="80">80&emsp;&emsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="81"id="81">81&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="82"id="82">82&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="83"id="83">83&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="84"id="84">84&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="85"id="85">85&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="86"id="86">86&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="87"id="87">87&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="88"id="88">88&emsp;&emsp;
                        </div>
                        <div class="col-lg-5 col-md-6 col-6 py-3 ml-5">
                            <input type="checkbox" name="seat[]" value="89"id="89">89&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="90"id="90">90&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="91"id="91">91&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="92"id="92">92&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="93"id="93">93&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="94"id="94">94&emsp;&emsp;
                            <input type="checkbox"  name="seat[]"value="95"id="95">95&emsp;&emsp;
                            <input type="checkbox" name="seat[]" value="96"id="96">96&emsp;&emsp;
                        </div>
                        
                    </div><br/></center>
                    
                    <center><button type="submit" class="btn btn-primary" name="submit">Book</button></center>
                    
                    
            </div><?php
            include 'dbconfigg.php';
            if(isset($_POST['submit'])){
                $seats= $_POST['seat'];
                foreach ($seats as $item){
                    //echo $item . "<br/>";
                    $query="insert into book(seat_no,movie_name) values ('$item','$moviename')";
                    $query_run= mysqli_query($conn, $query);
                }
                if($query_run){
                    echo '<script>alert("movie booked")</script>';
                    echo '<meta http-equiv="refresh" content="0;assign1.php"/>';
        
                }
 else {
     echo '<script>alert("movie book unsuccessful")</script>';
     echo '<meta http-equiv="refresh" content="0;assign1.php"/>';
        
 }
            }
            ?>
        </form>

    </div>

<?php 
            
include 'dbconfigg.php';
$seats_query="select * from book where movie_name='$moviename'; ";
$query_run= mysqli_query($conn, $seats_query);
if(mysqli_num_rows($query_run)>0){
    
    foreach ($query_run as $seat){
       $a= $seat['seat_no'];
       
       echo "<script>document.getElementById('$a').disabled=true;</script>";
       
    }
     
}

?>
     <div class="footerone" style="background-color: #fdb71a;
             width:100%;
             height: 70px;
             margin-top: -2%;">
            <p id="ftone" style=" color:black;
               font-weight: bolder;
               font-size: 30px;
               position: absolute;
               margin-top: 5px;
               margin-left:300px;">© 2021,🇨​🇮​🇳​🇪​🇲​🇦​ 🇿​🇴​🇳​🇪​🇸​. 🇦​🇱​🇱​ 🇷​🇮​🇬​🇭​🇹​🇸​ 🇷​🇪​🇸​🇪​🇷​🇻​🇪​🇩​. 🇩​🇪​🇸​🇮​🇬​🇳​🇪​🇩​ 🇧​🇾​ 🇨​🇿​ 🇬​🇷​🇴​🇺​🇵​🇸​ </p>
        </div>

</body>

</html>