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
    <title>Bike Selling</title>
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
        <h1>Choose your bike </h1>
    </section>

    <section class="services" id="services">

<div class="box-container">

    <div class="box">
        <img src="image/Bike/Atumobile Atum Version 1.0/Atumobile Atum Version 1.0.jpg" alt="">
        <div class="content">
            <h3>Atumobile Atum Version 1.0</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Atumobile Atum Version 1.0.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Bike/Atumobile AtumVader/download.jpg" alt="">
        <div class="content">
            <h3>Atumobile AtumVader</h3>
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
        <img src="image/Bike/Cyborg Bob-e/Cyborg Bob-e.jpg" alt="">
        <div class="content">
            <h3>Cyborg Bob-e</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Cyborg Bob-e.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Cyborg Yoda/Cyborg Yoda.jpg" alt="">
        <div class="content">
            <h3>Cyborg Yoda</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Cyborg Yoda.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Bike/Earth Energy EV Evolve R/download (1).jpg" alt="">
        <div class="content">
            <h3>Earth Energy EV Evolve R</h3>
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
        <img src="image/Bike/Earth Energy EV Evolve Z/download (1).jpg" alt="">
        <div class="content">
            <h3>Earth Energy EV Evolve Z</h3>
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
        <img src="image/Bike/Joy e-bike Beast/Joy e-bike Beast.jpg" alt="">
        <div class="content">
            <h3>Joy e-bike Beast</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Joy e-bike Beast.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Joy e-bike Hurricane/download (5).jpg" alt="">
        <div class="content">
            <h3>Joy e-bike Hurricane</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Joy e-bike Hurricane.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Joy e-bike Monster/download (1).jpg" alt="">
        <div class="content">
            <h3>Joy e-bike Monster</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Joy e-bike Monster.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Joy e-bike Thunderbolt/Joy e-bike Thunderbolt.jpg" alt="">
        <div class="content">
            <h3>Joy e-bike Thunderbolt</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Joy e-bike Thunderbolt.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/kabira Mobility KM 3000/kabira Mobility KM 3000.avif" alt="">
        <div class="content">
            <h3>kabira Mobility KM 3000</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/kabira Mobility KM 3000.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Kabira Mobility KM 4000/download (4).jpg" alt="">
        <div class="content">
            <h3>Kabira Mobility KM 4000</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Kabira Mobility KM 4000.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Komaki Ranger/download (5).jpg" alt="">
        <div class="content">
            <h3>Komaki Ranger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Komaki Ranger.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Bike/Komaki XGT Classic/Komaki XGT Classic.jpg" alt="">
        <div class="content">
            <h3>Komaki XGT Classic</h3>
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
        <img src="image/Bike/Oben Rorr/download (2).jpg" alt="">
        <div class="content">
            <h3>Oben Rorr</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Oben Rorr.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Odysse Electric Evoqis/download.jpg" alt="">
        <div class="content">
            <h3>Odysse Electric Evoqis</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Odysse Electric Evoqis.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/One Electric Motorcycles Kridn/download (5).jpg" alt="">
        <div class="content">
            <h3>One Electric Motorcycles Kridn</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/One Electric Motorcycles Kridn.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/PURE EV eTryst 350/PURE EV eTryst 350.jpg" alt="">
        <div class="content">
            <h3>PURE EV eTryst 350</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/PURE EV eTryst 350.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Revolt RV 400/download (2).jpg" alt="">
        <div class="content">
            <h3>Revolt RV 400</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Revolt RV 400.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Srivaru Motors Prana/download (6).jpg" alt="">
        <div class="content">
            <h3>Srivaru Motors Prana</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Srivaru Motors Prana.php" class="btn">check out</a>
        </div>
    </div>

    <div class="box">
        <img src="image/Bike/Tork Kratos/download (2).jpg" alt="">
        <div class="content">
            <h3>Tork Kratos</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Tork Kratos.php" class="btn">check out</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="image/Bike/Tunwal TZ 3.3/Tunwal TZ 3.3.jpg" alt="">
        <div class="content">
            <h3>Tunwal TZ 3.3</h3>
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
        <img src="image/Bike/Ultraviolette F77/download (7).jpg" alt="">
        <div class="content">
            <h3>Ultraviolette F77</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="Vehicles Info/Ultraviolette F77.php" class="btn">check out</a>
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
</body>

</html>