<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scooter Selling</title>
    <link rel="stylesheet" href="css/stylevehicles.css">
</head>

<body>
    <section>
        <header class="header">

            <div id="menu-btn" class="fas fa-bars"></div>

            <a href="login/header.php" class="logo"> <span>Pahiya</span>Wala </a>

            <nav class="navbar">
                <a href="login/header.php">home</a>
                <a href="#vehicles">vehicles</a>
                <a href="#services">services</a>
                <a href="#featured">featured</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

            <div id="login-btn">
           <p style="font-size: larger;"> <strong><span><?php echo $_SESSION['usermail']; ?></span></strong><br> </p>
            <a href="Login/logout.php" class="btn">logout</a>
            <i class="far fa-user"></i>         
        </div>

        </header>
    </section>

    <section>
        <div class="login-form-container">

            <span id="close-login-form" class="fas fa-times"></span>

            <form action="">
                <h3>user login</h3>
                <input type="email" placeholder="email" class="box">
                <input type="password" placeholder="password" class="box">
                <p> forget your password <a href="#">click here</a> </p>
                <input type="submit" value="login" class="btn">
                <p>or login with</p>
                <div class="buttons">
                    <a href="#" class="btn"> google </a>
                    <a href="#" class="btn"> facebook </a>
                </div>
                <p> don't have an account <a href="#">create one</a> </p>
            </form>

        </div>
    </section>


    <section class="heading" id="headings">
        <h1>Choose your Scooter </h1>
    </section>

    <section class="services" id="services">

        <div class="box-container">

        <div class="box">
                <img src="image/Scooter/AMO Electric Jaunty-3W/3.jpeg" alt="">
                <div class="content">
                    <h3>AMO Electric Jaunty-3W</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/AMO Electric Jaunty-3W.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Ampere Magnus EX/5.jpeg" alt="">
                <div class="content">
                    <h3>Ampere Magnus EX</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Ampere Reo/2.jpeg" alt="">
                <div class="content">
                    <h3>Ampere Reo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/arther 450x/image 2.jpg" alt="">
                <div class="content">
                    <h3>arther 450x</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Ather 450X.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Avera Retrosa/1.jpeg" alt="">
                <div class="content">
                    <h3>Avera Retrosa</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Avera Retrosa.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Avon E Lite/1.jpeg" alt="">
                <div class="content">
                    <h3>Avon E Lite</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Avon E Mate/3.jpeg" alt="">
                <div class="content">
                    <h3>Avon E Mate</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Avon E Scoot/4.jpeg" alt="">
                <div class="content">
                    <h3>Avon E Scoot</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Avon E Star/1.jpeg" alt="">
                <div class="content">
                    <h3>Avon E Star</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/BAJAJ CHETAK/4.jpeg" alt="">
                <div class="content">
                    <h3>BAJAJ CHETAK</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Bajaj Chetak.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/BattRE Electric Mobility LoEV/1.jpeg" alt="">
                <div class="content">
                    <h3>BattRE Electric Mobility LoEV</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/BOUNCE INFINITY E1/3.jpeg" alt="">
                <div class="content">
                    <h3>BOUNCE INFINITY E1</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Deltic Drixx/2.jpeg" alt="">
                <div class="content">
                    <h3>Deltic Drixx</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/EVOLET Dhanno/5.jpeg" alt="">
                <div class="content">
                    <h3>EVOLET Dhanno</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Hero ELectric NYX/2.jpeg" alt="">
                <div class="content">
                    <h3>Hero ELectric NYX</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/HERO ELECTRIC OPTIMA/1.jpeg" alt="">
                <div class="content">
                    <h3>HERO ELECTRIC OPTIMA</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Hero Electric Photon/4.jpeg" alt="">
                <div class="content">
                    <h3>Hero Electric Photon</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/HERO VIDA V1/1.jpeg" alt="">
                <div class="content">
                    <h3>HERO VIDA V1</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Vida V1.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/iVOOMi S1/1.jpeg" alt="">
                <div class="content">
                    <h3>iVOOMi S1</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/iVOOMi S1.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Kinetic Green Zoom/1.jpeg" alt="">
                <div class="content">
                    <h3>Kinetic Green Zoom</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Komaki XGT KM/3.jpeg" alt="">
                <div class="content">
                    <h3>Komaki XGT KM</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Komaki XGT Classic.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Komaki Xone/1.jpeg" alt="">
                <div class="content">
                    <h3>Komaki Xone</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Li-ions Spock Electric Scooter/1.jpeg" alt="">
                <div class="content">
                    <h3>Li-ions Spock Electric Scooter</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Lohia Oma Star/1.jpeg" alt="">
                <div class="content">
                    <h3>Lohia Oma Star</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Lohia Oma Star Li/2.jpeg" alt="">
                <div class="content">
                    <h3>Lohia Oma Star Li</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Okinawa Dual 100/5.jpeg" alt="">
                <div class="content">
                    <h3>Okinawa Dual 100</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Okinawa Ridge.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Okinawa iPraise+/1.jpeg" alt="">
                <div class="content">
                    <h3>Okinawa iPraise+</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Okinawa Okhi90/1.jpeg" alt="">
                <div class="content">
                    <h3>Okinawa Okhi90</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Okinawa PraisePro/1.jpeg" alt="">
                <div class="content">
                    <h3>Okinawa PraisePro</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Okinawa R30/1.jpeg" alt="">
                <div class="content">
                    <h3>Okinawa R30</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Okinawa Ridge/1.jpeg" alt="">
                <div class="content">
                    <h3>Okinawa Ridge</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Okinawa Ridge.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/ola s1 images/image 1.webp" alt="">
                <div class="content">
                    <h3>ola s1</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Ola S1.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Raftaar Cruiser/1.jpeg" alt="">
                <div class="content">
                    <h3>Raftaar Cruiser</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Raftaar Cruiser.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Raftaar Electrica/1.jpeg" alt="">
                <div class="content">
                    <h3>Raftaar Electrica</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Raftaar Galaxy/5.jpeg" alt="">
                <div class="content">
                    <h3>Raftaar Galaxy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/SIMPLE ENERGY ONE/1.jpeg" alt="">
                <div class="content">
                    <h3>SIMPLE ENERGY ONE</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/SIMPLE ENERGY ONE.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Techo Electra Emerge/3.jpeg" alt="">
                <div class="content">
                    <h3>Techo Electra Emerge</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Techo Electra Emerge.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Techo Electra Neo/2.jpeg" alt="">
                <div class="content">
                    <h3>Techo Electra Neo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Techo Electra Neo.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Techo Electric Raptor/2.jpeg" alt="">
                <div class="content">
                    <h3>Techo Electric Raptor</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Techo Electra Raptor.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Tunwal Storm ZX Advance 2/2.jpeg" alt="">
                <div class="content">
                    <h3>Tunwal Storm ZX Advance 2</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Tunwal Storm ZX Advance 2.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Tunwal T 133/2.jpeg" alt="">
                <div class="content">
                    <h3>Tunwal T 133</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Tunwal T 133.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/TVS I QUBE/1.jpeg" alt="">
                <div class="content">
                    <h3>TVS I QUBE</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/TVS iQube ELectric.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Ujaas Energy eGO/5.jpeg" alt="">
                <div class="content">
                    <h3>Ujaas Energy eGO</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Ujaas Energy eGO.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Ujaas Energy eSpa/3.jpeg" alt="">
                <div class="content">
                    <h3>Ujaas Energy eSpa</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Ujaas Energy eSpa.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Scooter/Ujaas Energy eZy/4.jpeg" alt="">
                <div class="content">
                    <h3>Ujaas Energy eZy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Ujaas Energy eZy.php" class="btn">check out</a>
                </div>
            </div>


        </div>

    </section>


    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5366368065065!2d76.8491072148019!3d23.0774433849253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Bhopal!5e0!3m2!1sen!2sin!4v1672863431119!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <input type="text" placeholder="your name" class="box">
                <input type="email" placeholder="your email" class="box">
                <input type="tel" placeholder="subject" class="box">
                <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>

        </div>

    </section>

    <section class="footer" id="footer">

        <div class="box-container">

            <!-- <div class="box">
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            </div> -->

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 73586 21555 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91 75602 54500 </a>
                <a href="#"> <i class="fas fa-envelope"></i> pahiyawala@gmail.com </a>
                <a href="https://goo.gl/maps/adzVULcYLZRwrspG8" target="_blank"> <i class="fas fa-map-marker-alt"></i> Kotri Kalan, Bhopal, Madhya Pradesh - 466114 </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="https://www.facebook.com/profile.php?id=100089343104174" target="_blank"> <i class="fab fa-facebook-f" target="_blank"></i> facebook </a>

                <a href="https://twitter.com/Pahiyawala" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>

                <a href="https://www.instagram.com/pahiyawala/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>

                <a href="https://www.linkedin.com/in/pahiya-wala-137073262/" target="_blank"> <i class="fab fa-linkedin" target="_blank"></i> linkedin </a>

                <a href="https://in.pinterest.com/pahiyawala/" target="_blank"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>


    </section>
</body>

</html>