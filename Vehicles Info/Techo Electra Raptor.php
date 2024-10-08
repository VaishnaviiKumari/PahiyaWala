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

    <title>Techo Electric Raptor</title>

</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <span>Pahiya</span>Wala </a>

        <nav class="navbar">
            <a href="../index.html">home</a>
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

        <h3>Techo Electric Raptor</h3>
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
                </b>
            </p>
        </div>
    </section>

    <section class="vehicles" id="vehicles">

        <h4 class="heading" id="Images"> Images </h4>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Techo Electric Raptor/Raptor Left Side (1).jpg" alt="">
                    <div class="content">

                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Techo Electric Raptor/Raptor Front Three-Quarter.jpg" alt="">
                    <div class="content">
                        <h3>Cross View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Techo Electric Raptor/Raptor Side (1).jpg" alt="">
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
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 57 Thousands onwards &emsp;&emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-gears"></i><strong> Motor Power</strong> :- 250 Watt <br>
            <i class="fa-solid fa-gears"></i><strong> Motor </strong> :- BLDC &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 100 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-4 to 5 Hours &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
            <!-- <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br> -->
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 1.8 kWh &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;
            <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 19 litre &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;
            <i class="fa-solid fa-car-side"></i> <strong> Max Speed</strong> :- 25 KMPH &nbsp;
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
                    <td>Techo Electra Raptor</td>
                    <td>₹ 57,893</td>
                    <td>90-100 Km, 25 Kmph, 60 kg, 4-5 Hrs</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>

            </table>
        </div>


    </section>


    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>Techo Electra Raptor is an electric scooter available at a starting price of Rs. 57,893 in India. It is available in only 1 variant and 5 colours. Techo Electra Raptor generates 250 W power from its motor. With front disc and rear drum brakes,
            Techo Electra Raptor comes up with combined braking system of both wheels.
            <span id="dots">...</span><span id="more">
        <br>
        <br>
        The Emerge is an electric scooter from Pune-based start-up Techno Electra. The scooter has an edgy design language that is further accentuated with the use of designer graphics and use of premium parts. The scooter features a LED lighting all-around and is offered with the choice of five colour shades red, white-grey, silver-green, silver-blue and black-orange.
        <br>
        <br>
        The Raptor is built around a rigid tubular chassis and is powered by a 250 Watt BDLC motor that draws its power from a pack of four 12V 32Ah lead-acid batteries. The battery pack takes around 5-7 hours for a full charge following to which is claimed by the manufacturer to provide a range of 75-85 km. The Raptor is certified by ARAI and comes with several features like a centre locking system, LCD digital speedometer, and mobile charging USB port. It also comes with a forward-neutral-reverse switch. <br> <br> For cycle parts, the e-scooter is suspended by telescopic forks up front and dual shock absorbers for the rear. Braking is taken care by a disc brake at the front and a drum brake for the rear. The scooter rides on 10-inch tubeless tyres and has a ground clearance of 150mm.
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://static.autox.com/uploads/bikes/brochure/2021/07/techo-electra-raptor-brochure.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Techo Electric Raptor/Black.jpg" alt="Black">
                    <div class="content">
                        <h3>Black</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Scooter/Techo Electric Raptor/White.jpg" alt="White">
                    <div class="content">
                        <h3>White</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Techo Electric Raptor/Green.jpg" alt="Green">
                    <div class="content">
                        <h3>Green</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Techo Electric Raptor/Red.jpg" alt="Red">
                    <div class="content">
                        <h3>Red</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Techo Electric Raptor/Blue.jpg" alt="Blue">
                    <div class="content">
                        <h3>Blue</h3>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


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