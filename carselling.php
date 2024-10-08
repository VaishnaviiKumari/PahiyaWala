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
    <title>Car Selling</title>
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

           

        </div>
    </section>

    

    <section class="heading" id="headings">
        <h1>Choose your car </h1>
    </section>

    <section class="services" id="services">

<div class="box-container">

    <div class="box">
        <img src="image/Cars/Tata Nexon EV Max/Tata Nexon EV Max.jpg" alt="">
        <div class="content">
            <h3>Tata Nexon EV Max</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Tata Nexon EV Max.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Audi E-Tron GT/Full View.png" alt="">
        <div class="content">
            <h3>Audi E-Tron GT</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Audi E-Tron GT.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Audi E-Tron/Side View.png" alt="">
        <div class="content">
            <h3>Audi e-Tron</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Audi e-Tron.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Audi RS E-Tron GT/Side View.png" alt="">
        <div class="content">
            <h3>Audi RS E-Tron GT</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Audi E-Tron GT.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/BMW i4/Front View.jpg" alt="">
        <div class="content">
            <h3>BMW i4</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/BMW i4.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/BMW iX Electric/Side View.jpg" alt="">
        <div class="content">
            <h3>BMW iX Electric</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/BMW iX Electric.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/BYD Auto Atto 3/Side View.jpg" alt="">
        <div class="content">
            <h3>BYD Auto Atto 3</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/BYD Auto Atto 3.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/BYD Auto E6 Electric/BYD-e6-Electric- image.jpg" alt="">
        <div class="content">
            <h3>BYD Auto E6 Electric</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/BYD Auto E6 Electric.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Hyundai Kona Electric/Front View.png" alt="">
        <div class="content">
            <h3>Hyundai Kona Electric</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Hyundai Kona Electric.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Jaguar I-Pace/Jaguar.jpg" alt="">
        <div class="content">
            <h3>Jaguar I-Pace</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Jaguar I-Pace.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/KIA EV6/Front View.jpg" alt="">
        <div class="content">
            <h3>KIA EV6</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/KIA EV6.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Mahindra E-Verito/Mahindra Verito.jpeg" alt="">
        <div class="content">
            <h3>Mahindra E-Verito</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Mahindra E-Verito.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Cars/Maruti Suzuki Grand Vitara Alpha+/Maruti Suzuki Grand Vitara Alpha+.jpg" alt="">
        <div class="content">
            <h3>Maruti Suzuki Grand Vitara Alpha+</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">check out</a>
        </div>
    </div> -->

    <div class="box">
        <img src="image/Cars/Mercedes Benz EQS/Front View.jpg" alt="">
        <div class="content">
            <h3>Mercedes Benz EQS</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Mercedes-Benz EQS.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Mercedes-Benz EQC/Front View.jpg" alt="">
        <div class="content">
            <h3>Mercedes-Benz EQC</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Mercedes-Benz EQC.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Cars/MG Hector Smart 1.5 Petrol Turbo Hybrid MT/MG Hector Smart 1.5 Petrol Turbo Hybrid MT.webp" alt="">
        <div class="content">
            <h3>MG Hector Smart 1.5 Petrol Turbo Hybrid MT</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">check out</a>
        </div>
    </div> -->

    <div class="box">
        <img src="image/Cars/MG ZS EV/Blue.jpg" alt="">
        <div class="content">
            <h3>MG ZS EV</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/MG ZS EV.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Mini Cooper SE/Midnight Black Metallic.jpg" alt="">
        <div class="content">
            <h3>Mini Cooper SE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Mini Cooper SE.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/PMV Eas-E/Side View.jpg" alt="">
        <div class="content">
            <h3>PMV Eas-E</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/PMV Eas-E.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Porsche Taycan/Front View.jpg" alt="">
        <div class="content">
            <h3>Porsche Taycan</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Porsche Taycan.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Strom Motors R3/Rear View.jpg" alt="">
        <div class="content">
            <h3>Strom Motors R3</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Strom Motors R3.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Cars/Tata Nexon EV/TATA NEXON EV 1.png" alt="">
        <div class="content">
            <h3>Tata Nexon EV</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">check out</a>
        </div>
    </div> -->



    <!-- <div class="box">
        <img src="image/Cars/Tata Nexon EV Prime/Tata Nexon EV Prime.jpg" alt="">
        <div class="content">
            <h3>Tata Nexon EV Prime</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">check out</a>
        </div>
    </div> -->

    <div class="box">
        <img src="image/Cars/Tata Tigor EV/Front View.png" alt="">
        <div class="content">
            <h3>Tata Tigor EV</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Tata Tigor EV.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Tata Xpres-T EV/tata express t ev image.jpg" alt="">
        <div class="content">
            <h3>Tata Xpres-T EV</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Tata Xpres-T EV.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Cars/Toyota Camry/Toyota Camry.jpg" alt="">
        <div class="content">
            <h3>Toyota Camry</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Toyota Urban Cruiser Hyryder 1.5 G e-Drive 2WD Hybrid/Toyota Urban Cruiser.jpg" alt="">
        <div class="content">
            <h3>Toyota Urban Cruiser</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Cars/Volvo XC40/Volvo XC40.jpg" alt="">
        <div class="content">
            <h3>Volvo XC40</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">check out</a>
        </div>
    </div> -->

    <div class="box">
        <img src="image/Cars/Volvo XC40 Recharge/Front View.png" alt="">
        <div class="content">
            <h3>Volvo XC40 Recharge</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Volvo XC40 Recharge.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Cars/Volvo XC60/Volvo XC60.jpg" alt="">
        <div class="content">
            <h3>Volvo XC60</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">check out</a>
        </div>
    </div> -->



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