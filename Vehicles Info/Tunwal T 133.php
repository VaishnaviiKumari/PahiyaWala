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

    <title>Tunwal T 133</title>

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

        <h3>Tunwal T 133</h3>
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
                    <img src="../image/Scooter/Tunwal T 133/sideview.png" alt="">
                    <div class="content">

                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Tunwal T 133/crossview.png" alt="">
                    <div class="content">
                        <h3>Cross View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Tunwal T 133/frontview.png" alt="">
                    <div class="content">
                        <h3>Front View</h3>


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
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 1 Lakh onwards &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-gears"></i><strong> Motor Power</strong> :- 1600 Watt <br>
            <i class="fa-solid fa-gears"></i><strong> Motor </strong> :- BLDC &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 100 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-6 - 7 hours &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
            <!-- <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br> -->
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity </strong> :- 1.2 kWh &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;
            <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 34 litre &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-car-side"></i> <strong> Max Speed</strong> :- 55 KMPH &nbsp;
        </div>
    </section>

    <!-- Prices of Different Varriants  -->
    <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Price <span>Variants</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Versions</th>
                    <th>Ex-Showroom price</th>
                    <th>Specifications</th>
                </tr>
                <tr>
                    <td>Tunwal T 133 STD</td>
                    <td>₹ 1,00,000</td>
                    <td>Push Button Start, 100 Km, 55 Kmph, 6-7 Hrs</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
            </table>
        </div>


    </section>


    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>The Tunwal T 133 is one of the most acclaimed and popular products from Tunwal on sale in India. There is only one version on sale and comes with a sticker price of Rs 1.00 Lakh. The Tunwal T 133 generates a max power of NA. Some of the main rivals
            include M2GO X1, Ola Electric S1 Air and TVS iQube Electric Tunwal T 133 have 1 variants ranging from Rs. 1.00 Lakh to Rs. 1.00 Lakh. Check all Specifications for Tunwal T 133.
            <span id="dots">...</span><span id="more">
        <br>
        <br>
        Performance of T 133 is backed by a Automatic transmission.
        <br>
        <br>

        Tunwal T 133 has Telescopic suspensions with 90/90-12 front tyre and rear tyre. It comes with a High Rigid Tubular Frame frame and Alloy.
         <br> 
         <br> 
         T 133 has 90/90-12 Front Tyre Size, 90/90-12 Rear Tyre Size.

         Keep reading to explore more about T 133's updated specs, latest prices, mileage, genuine user reviews, colours, exclusive images & videos, best offers near you, Tunwal scooter dealers. 
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://tunwal.com/wp-content/uploads/2018/06/brochure-min.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Tunwal T 133/red.png" alt="Red">
                    <div class="content">
                        <h3>Red</h3>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

    <!-- Test Ride -->
    <section class="Test_drive" id="Test_drive">
        <a href="https://tunwal.com/request-a-test-ride/" class="btn" target="_blank">Book a Test Ride</a>

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