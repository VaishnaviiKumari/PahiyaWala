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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Vehicles Info.css">
    <link rel="icon" type="image/png" href="../image/logo.png">

    <title>Tunwal Storm ZX Advance 2</title>

</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

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

        <h3>Tunwal Storm ZX Advance 2</h3>
        <img src="../image/Scooter/ola s1 images/cover.jpg" class="responsive" alt="">



    </section>


    <section>
        <div class="Vehicle_bar" id="Vehicle_bar">
            <p><b>
                <a href="#Images">Images           </a>
                <a href="#Specifications">Specifications        </a>
                <a href="#Price_Variants">Prices</a>
                <a href="#Summary">Summary</a>
                <a href="#Brochure">Brochure</a>
                <a href="#featured">Colour</a>
                <a href="#VIDEO">Video</a></b>
                <b><a href="#Test_drive">Book Test Ride</a></b>
                </b>
            </p>
        </div>
    </section>

    <section class="vehicles" id="vehicles">

        <h4 class="heading" id="Images"> Images </h4>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Tunwal Storm ZX Advance 2/1.jpeg" alt="">
                    <div class="content">

                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Tunwal Storm ZX Advance 2/2.jpeg" alt="">
                    <div class="content">
                        <h3>Cross View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Tunwal Storm ZX Advance 2/6.jpeg" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

            </div>
        </div>

        </div>

        <div class="swiper-pagination"></div>

        </div>

    </section>

    <section style="text-align: center;">
        <a href="#Price_Variants" class="btn">Checkout</a>
    </section>

    <!-- Overview or Specifications of the Vehicle -->
    <section class="Specifications " id="Specifications">
        <h3 class="heading">Specifications </h3>
        <div style="font-size: 1.2vw;">
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 1.34 Lakh onwards &emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-gears"></i><strong> Motor Power</strong> :- 850 Watt <br>
            <i class="fa-solid fa-gears"></i><strong> Motor </strong> :- BLDC &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 120 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-6 hrs 30 Minutes &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
            <!-- <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br> -->
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 1.56 kWh &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 34 litre &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-car-side"></i> <strong> Max Speed</strong> :- 30 KMPH &nbsp;
        </div>
    </section>


    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>The Ola S1 electric scooter is the first electric vehicle product from Ola electric and is available in two variants, Ola S1 and Ola S1 Pro. The Ola S1 and its higher-spec variant, Ola S1 Pro share the same basic design and 8.5 kW electric motor,
            but differ in performance, range, a few features, and number of colours.Both the S1 and S1 Pro are powered by the same electric motor with maximum performance of 8.5 kW and 58 Nm of torque.
            <span id="dots">...</span><span id="more">
        <br>
        <br>
        The S1 gets a 2.98 kWh battery pack, while the S1 Pro gets a 3.97 kWh battery pack. Claimed acceleration is 0 to 40 kmph in just 3 seconds, for the S1 Pro, while the S1 has 0 to 40 kmph acceleration in 3.6 seconds. Claimed accleration from 0 to 60 kmph are 7 seconds and 5 seconds for the S1 and S1 Pro respectively. The S1 has a top speed of 90 kmph, while the S1 Pro has a top speed of 115 kmph.

        The Ola S1 has claimed range of 121 km on a single charge while the Ola S1 Pro has claimed range of 181 km range. With a fast charger, both the Ola S1 and S1 Pro can be charged with 75 km range in just 18 minutes. On a conventional home charging port, the S1 can be charged 100 per cent in 4 hours 48 minutes, while the S1 Pro can be charged 100 per cent in 6 hours 30 minutes. Both the S1 and S1 Pro come with a long list of standard features, and advanced technology. <br> <br> The electric scooter gets a vehicle control unit (VCU), which gets an octa-core processor, 3 GB of RAM and high-speed connectivity through 4G, Wi-Fi and Bluetooth. The Ola S1 gets two riding modes, Normal and Sports, while the S1 Pro comes with three riding modes, Normal, Sports and Hyper.
        
        The Ola S1 has been priced at Rs. 99,999, while the S1 Pro has been priced at Rs. 1,39,999. 
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://static.autox.com/uploads/bikes/brochure/2021/08/ola-s1-brochure.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Porcelain White.jpg" alt="Porcelain White">
                    <div class="content">
                        <h3>Porcelain White</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Neo Mint.jpg" alt="Neo Mint">
                    <div class="content">
                        <h3>Neo Mint</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Coral Glam.jpg" alt="Coral Glam">
                    <div class="content">
                        <h3>Coral Glam</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Jet Black.jpg" alt="Jet Black">
                    <div class="content">
                        <h3>Jet Black</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Liquid Silver.jpg" alt="Liquid Silver">
                    <div class="content">
                        <h3>Liquid Silver</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Marshmellow.jpg" alt="Marshmellow">
                    <div class="content">
                        <h3>Marshmellow</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Millenial Pink.jpg" alt="Millenial Pink">
                    <div class="content">
                        <h3>Millenial Pink</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Anthracite Grey.jpg" alt="Anthracite Grey">
                    <div class="content">
                        <h3>Anthracite Grey</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Midnight Blue.jpg" alt="Midnight Blue">
                    <div class="content">
                        <h3>Midnight Blue</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Matt Black.jpg" alt="Matt Black">
                    <div class="content">
                        <h3>Matt Black</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Gerua.jpg" alt="Gerua">
                    <div class="content">
                        <h3>Gerua</h3>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

    <!-- Video Information of Vehicles -->
    <section class="VIDEO" id="VIDEO">
        <h3 class="heading">VIDEO </h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/w3-1_OyqdDs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        &emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

        <iframe width="560" height="315" src="https://www.youtube.com/embed/G3JDo_JPVEk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <br> <strong>For More Information : </strong> <a href="https://olaelectric.com/s1" target="_blank">Click Here </a>

    </section>

    <!-- Test Ride -->
    <section class="Test_drive" id="Test_drive">
        <a href="https://olaelectric.com/experience-centre-info" class="btn" target="_blank">Book a Test Ride</a>

    </section>

    <!-- Footer Section -->

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
                <a href="https://www.facebook.com/profile.php?id=100089343104174" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://twitter.com/Pahiyawala" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="https://www.instagram.com/pahiyawala/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
                <a href=" www.linkedin.com/in/pahiyawala" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="https://in.pinterest.com/pahiyawala/" target="_blank"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>


    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="Vehicles Info.js"></script>

</body>

</html>