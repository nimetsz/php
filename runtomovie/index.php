<?php
    require_once 'db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"/>
    <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css rel="stylesheet"/>
    <link href="style.css" rel="stylesheet">
  <title>Homepage</title>
</head>
<body>
<header class="baslik">
        <div class="container">
            <h1>Runtomovie</h1>
        </div>
    </header> 
    <div class="galeri">
        <div class="picture">
            <img src="cinema.jpeg" height="425px" width="800px"> 
        </div>
        <div class="buton1">
            <a href="">Movies</a>
            <a href="iletisim.php">Contact</a>
            <a href="">Login</a>
        </div>
        <div class="web">
            <a href="add.php"><h2>Get your ticket!</h2></a>
        </div>
    </div>
    <div id="hakkımızda" class="orta_alan">
        <div class="orta">
            <div class="icerik">
                <div class="orta_buton">
                    <a href="#"><i class="fas fa-film" style="font-size: 36px; color: #ffffff;"></i></a>
                </div>
                <a href="#" style="color:#ffffff"><h3>New Movies</h3></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
        </div>
        <div class="orta">
            <div class="icerik">
                <div class="orta_buton">
                   <a href="#"><i class="fas fa-door-open" style="font-size: 36px; color: #ffffff;"></i></a>
                </div>  
                <a href="#" style="color:#ffffff"><h3>About us</h3></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>  
        <div class="orta">
            <div class="icerik">
                <div class="orta_buton">
                   <a href="iletisim.php"><i class="fas fa-ticket-alt" style="font-size: 36px; color: #ffffff;"></i></a>
                </div>  
                <a href="iletisim.php" style="color:#ffffff"><h3>Tickets</h3></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
        </div>
    </div> 

    </body>
</html>