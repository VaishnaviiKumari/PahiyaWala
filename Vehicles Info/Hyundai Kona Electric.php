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
    <!--favicon-->
    <link rel="shortcut icon" href="../image/LOGO.jpg" type="image/png">

    <title>Hyundai Kona Electric</title>

</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <span>Pahiya</span>Wala </a>

        <nav class="navbar">
            <a href="#home">home</a>
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

        <h3>Hyundai Kona Electric</h3>
        <img src="../image/Cars/Hyundai Kona Electric/Hyundai Kona Electric.png" class="responsive" alt="">



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
                    <img src="../image/Cars/Hyundai Kona Electric/Front View.png" alt="Hyundai Kona Electric">
                    <div class="content">

                        <h3>Hyundai Kona Electric</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/Side View.png" alt="">
                    <div class="content">
                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/Front View.png" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/Interiors.jpg" alt="Interiors">
                    <div class="content">
                        <h3>Interiors</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/" alt="">
                    <div class="content">
                        <h3> </h3>

                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section style="text-align: center;">
        <a href="#" class="btn">check out</a>
    </section>

    <!-- Overview or Specifications of the Vehicle -->
    <section class="Specifications " id="Specifications">
        <h3 class="heading">Specifications </h3>
        <div style="font-size: 1.2vw;">
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 23.84 Lakh onwards &emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic <br>
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 452 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-6 hours 10 minutes &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br>
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 39.2 kWh &nbsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- 5 seater SUV &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 332 litres
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
                    <td>Kona Premium</td>
                    <td>₹ 23.84 Lakh</td>
                    <td>Push Button Start, Wireless Charger, Alloy Wheels, Steering Mounted Controls,Led lights</td>
                </tr>
                <tr>
                    <td>Kona Premium Dual Tone</td>
                    <td>₹ 24.03 Lakh</td>
                    <td>Push Button Start, Wireless Charger, Alloy Wheels, Steering Mounted Controls,Led lights</td>
                </tr>
                <!--  <tr>
                    <td>Nexon EV Max XZ Plus Lux 3.3 KW</td>
                    <td>₹ 19.34 Lakh</td>
                    <td>Sunroof, Cruise Control, Push Button Start, Wireless Charger, Ventilated Seats</td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 3.3 KW Jet</td>
                    <td>₹ 19.54 Lakh</td>
                    <td> Touch-screen Display, Reverse Camera with Guidance Parking Assist, Rear AC, Integrated Music System, Steering Adjustment</td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 7.2 KW Fast Charger</td>
                    <td>₹ 19.84 Lakh</td>
                    <td>Sunroof, Cruise Control, Push Button Start, Wireless Charger, Ventilated Seats</td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 7.2 KW Fast Charger Jet </td>
                    <td>₹ 20.04 Lakh </td>
                    <td>Touch-screen Display, Reverse Camera with Guidance Parking Assist, Rear AC, Integrated Music System, Steering Adjustment</td>
                </tr> -->
            </table>
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>Hyundai Kona Electric is a 5 seater SUV available in a price range of Rs. 23.84 - 24.03 Lakh*. It is available in 2 variants, a -, / and a single Automatic transmission. Other key specifications of the Kona Electric include a kerb weight of and
            boot space of Liters. The Kona Electric is available in 5 colours.
            <span id="dots">...</span><span id="more">
        
         <br><br><strong>Exterior</strong><br>
        
         The bold exterior design catches the eye with muscular sculpted shapes, sleek LED lighting and unique details that highlight the strong Hyundai KONA Electric SUV DNA at its core. <br>
         <br>
         
         <br><br><strong>Interior</strong><br>
        
         The second you get into KONA Electric, you enter the heart of unmatched comfort. Intelligently placed button type Shift-by-wire system, impeccably designed Bridge-type centre console; everything has been designed and positioned to make your driving experience as smooth as possible.
         <br>
         KONA Electric’s distinctive design language continues throughout the spacious cabin. Complemented by a choice of high quality materials and advanced technology, the premium interior delivers an exceptionally comfortable drive for everyone on board.
        
        
         <br><br><strong>Electric powertrain</strong><br>
        
        
         Hyundai's electric SUV is powered by a 39.2kWh battery pack, mated to an electric motor that makes 136PS and 395Nm of torque.   <br>
         <br>
        
        
         The ARAI claimed range is 452km and Hyundai says the EV has a zero to 100kmph sprint time of 9.7 seconds.


        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://www.hyundai.com/content/dam/hyundai/in/en/data/brochure/Hyundai_KONA_SUV_brochure.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/Front View.png" alt="Daytona Grey">
                    <div class="content">
                        <h3>Daytona Grey</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/Hyundai Kona Electric.jpg" alt="Pristine White">
                    <div class="content">
                        <h3>Pristine White</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/Side View.jpg" alt="Blue">
                    <div class="content">
                        <h3>Blue</h3>
                        <!-- <div class="price">$55,000/-</div> -->
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/Red.png" alt="Red">
                    <div class="content">
                        <h3>Red</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

    <!-- Video Information of Vehicles -->
    <section class="VIDEO" id="VIDEO">
        <h3 class="heading">VIDEO </h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/auYTkCUg1gk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

        <!--  <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/uwgfiJ-xEW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     <br>-->


        <br> <strong>For More Information : </strong> <a href="https://www.hyundai.com/in/en/find-a-car/kona-electric/features" target="_blank">Click Here </a>

    </section>

    <section class="Test_drive" id="Test_drive">
        <a href="https://www.hyundai.com/in/en/click-to-buy/request-a-test-drive" class="btn" target="_blank">Book a Test Ride</a>

    </section>


    <!--     
<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>

</section> -->


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
                <h3>Social media</h3>
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