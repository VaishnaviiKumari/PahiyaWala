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

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/repair_now.css">
    <link rel="stylesheet" href="..">
    <link rel="shortcut icon" href="../image/logo.png" type="image/png">

    <title>Battery Maintainence</title>


</head>

<body>

    <header class="header">


        <a href="../login/header.php" class="logo"> <span>Pahiya</span>Wala </a>

        <nav class="navbar">
            <a href="../login/header.php">home</a>
            <a href="#vehicles">vehicles</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
        </nav>

        <div id="login-btn">
           <p style="font-size: larger;"> <strong><span><?php echo $_SESSION['usermail']; ?></span></strong><br> </p>
            <a href="../Login/logout.php" class="btn">logout</a>
            <i class="far fa-user"></i>         
        </div>

    </header>

    <div class="login-form-container">

        <span id="close-login-form" class="fas fa-times"></span>

        

    </div>


    <section class="home" id="home">
        <img data-speed="5" class="home-parallax" src="../Other Services/images/batterycharging.jpg" alt="">
    </section>

    <!-- ZipCode -->

    <section class="newsletter">

        <h3>Where do you want your battery service?</h3>
        <p>Check your availability</p>

        <form action="">
            <input type="email" placeholder="Enter your pincode">
            <input type="submit" value="Find">
        </form>

    </section>

    <!-- Icons -->
    <section class="icons-container">

        <div class="icons">
            <i class="fa-solid fa-map-marker"></i>
            <div class="content">
                <h3>150+</h3>
                <p>Active Locations</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-star"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>Ratings</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>320+</h3>
                <p>happy clients</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>1500+</h3>
                <p>Vehicles Repaired</p>
            </div>
        </div>

    </section>

    <!-- Battery Services of Car  -->
    <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Electric <span>Cars</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Vehicle Name</th>
                    <th>Repair Your Old Battery</th>
                    <th>Buy New Batteries</th>
                    <th>Exchange Your Old Batteries</th>
                </tr>
                <tr>
                    <td>Tata Nexon EV Max</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Audi E-Tron GT</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Audi E-Tron</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Audi RS E-Tron GT</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>BMW I4</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>BMW IX Electric</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>BYD Auto Atto 3</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>BYD Auto E6 Electric</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hyundai Kona Electric</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Jaguar I-Pace</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>KIA EV6</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Mahindra E-Verito</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Mercedes Benz EQS</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Mercedes-Benz EQC</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>MG ZS EV</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Mini Cooper SE</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>PMV Eas-E</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Porsche Taycan</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Strom Motors R3</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Tata Tigor EV</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Tata Xpres-T EV</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Volvo XC40 Rechargea</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>

            </table>
        </div>


    </section>

    <!-- Battery Services of bikes  -->
    <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Electric <span>Bikes</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Vehicle Name</th>
                    <th>Repair Your Old Battery</th>
                    <th>Buy New Batteries</th>
                    <th>Exchange Your Old Batteries</th>
                </tr>
                <tr>
                    <td>Atumobile Atum Version 1.0</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Cyborg Bob-E</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Cyborg Yoda</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Joy E-Bike Beast</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Joy E-Bike Hurricane</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Joy E-Bike Monster</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Joy E-Bike Thunderbolt</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Kabira Mobility KM 3000</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Kabira Mobility KM 3000</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Komaki Ranger</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Oben Rorr</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Odysse Electric Evoqis</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>One Electric Motorcycles Kridn</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>PURE EV ETryst 350</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Revolt RV 400</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Srivaru Motors Prana</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Tork Kratos</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Ultraviolette F77</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>

            </table>
        </div>


    </section>

    <!-- Battery Services of Scooter  -->
    <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Electric <span>Scooter</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Vehicle Name</th>
                    <th>Repair Your Old Battery</th>
                    <th>Buy New Batteries</th>
                    <th>Exchange Your Old Batteries</th>
                </tr>
                <tr>
                    <td>Avon E Mate</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Avon E Scoot</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Avon E Star</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>BAJAJ CHETAK</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>BattRE Electric Mobility LoEV</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>BOUNCE INFINITY E1</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Deltic Drixx</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>EVOLET Dhanno</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero ELectric NYX</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>HERO ELECTRIC OPTIMA</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Electric Photon</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>HERO VIDA V1</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>IVOOMi S1</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Kinetic Green Zoom</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Komaki XGT KM</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Komaki Xone</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Li-Ions Spock</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Lohia Oma Star</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Lohia Oma Star Li</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Okinawa Dual 100</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Okinawa Okhi90</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Okinawa PraisePro</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Okinawa Ridge</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Ola S1</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Raftaar Cruiser</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Raftaar Electrica</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>SIMPLE ENERGY ONE</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Techo Electra Emerge</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Techo Electra Neo</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Techo Electric Raptor</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Tunwal Storm ZX Advance 2</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Tunwal T 133</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>TVS I QUBE</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Ujaas Energy EGO</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Ujaas Energy ESpa</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Ujaas Energy EZy</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>

            </table>
        </div>


    </section>

    <!-- Battery Services of Cycles  -->
    <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Electric <span>Cycles</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Vehicle Name</th>
                    <th>Repair Your Old Battery</th>
                    <th>Buy New Batteries</th>
                    <th>Exchange Your Old Batteries</th>
                </tr>
                <tr>
                    <td>Essel Energy GET 1</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Essel Energy GET 7</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Firebox Adventron</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro C1</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro C5X</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro C7+</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro C8i</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro Electric F6i</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro F1</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro F2i</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro F3i</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Hero Lectro H5</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Motovolt Hum</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Motovolt Ice</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Motovolt Kivo</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Motovolt Kivo 24</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Motovolt Kivo Easy</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Motovolt Urbn E-Bike</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Nexzu Bazinga</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Nexzu Roadlark</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Nexzu Rompus Plus</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>

            </table>
        </div>


    </section>


    <!-- Battery Services of E-Rickshaw  -->
    <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Electric <span>E-Rickshaw</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Vehicle Name</th>
                    <th>Repair Your Old Battery</th>
                    <th>Buy New Batteries</th>
                    <th>Exchange Your Old Batteries</th>
                </tr>
                <tr>
                    <td>Piaggio Ape E-City</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>E-Shaft</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Mahindra Treo</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Lohia Comfort F2F</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Kinetic Safar Smart</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Mahindra Treo Yaari SFT</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>
                <tr>
                    <td>Atul Elite Plus</td>
                    <td><a href="repair_batteries.php" class="btn2">Repair</a></td>
                    <td><a href="buy_batteries.php" class="btn2">Buy</a></td>
                    <td><a href="exchange_batteries.php" class="btn2">Exchange</a></td>
                </tr>

            </table>
        </div>


    </section>



    

    <!-- Contact -->
    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5366368065065!2d76.8491072148019!3d23.0774433849253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Bhopal!5e0!3m2!1sen!2sin!4v1672863431119!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

                <form action="">
                <h3>get in touch</h3>
                <input type="text" placeholder="your name" class="box">
                <input type="email" placeholder="your email" class="box">
                <input type="tel" placeholder="subject" id="Subject" class="box">
                <textarea placeholder="your message" id="Message" class="box" cols="30" rows="10"></textarea>
                <input type="button" value="send message" id="EmailButton" class="btn" onclick="SendMail()">
            </form>

        </div>

    </section>

    <section class="footer" id="footer">

        <div class="box-container">



            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
                <a href="Terms and Condition/t&c.html"> <i class="fas fa-arrow-right"></i> Terms and Conditions </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
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

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="../js/script.js"></script>
</body>

</html>