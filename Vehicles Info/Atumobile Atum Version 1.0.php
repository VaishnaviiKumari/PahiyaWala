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
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/png">
    
    <title>Atumobile Atum Version 1.0</title>

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

        <h3>Atumobile Atum Version 1.0</h3>
        <img  src="../image/Bike/Atumobile Atum Version 1.0/download (5).jpg" class="responsive" alt="">

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
                    <img src="../image/Bike/Atumobile Atum Version 1.0/images.jpg" alt="Atumobile Atum Version 1.0">
                    <div class="content">

                        <h3>Atumobile Atum Version 1.0</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download (6).jpg" alt="">
                    <div class="content">
                        <h3>Left Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download (7).jpg" alt="">
                    <div class="content">
                        <h3>Right Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download (3).jpg" alt="">
                    <div class="content">
                        <h3>Rear View</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download (2).jpg" alt="Super Mileage">
                    <div class="content">
                        <h3>Super Mileage</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download (8).jpg" alt="Amazing Wheels">
                    <div class="content">
                        <h3>Amazing Wheels</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download.jpg" alt="Body">
                    <div class="content">
                        <h3>Body</h3>


                    </div>
                </div>

                <!-- <div class="swiper-slide box">
                    <img src="../image/Cars/Tata Nexon EV" alt="">
                    <div class="content">
                        <h3> </h3>

                    </div>
                </div> --> 

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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 74,999 onwards &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic <br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 100 Kms &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :- 3.4 hrs &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 1-2 People <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 2.4 kwh &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <!-- <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- SUV &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
        <i class="fa-solid fa-bicycle"></i> <strong>Max speed</strong> :- 65 kmph
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
                    <td>Atum Version 1.0 STD</td>
                    <td>₹ 74,999</td>
                    <td>Electric,100 Km/Full Charge</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                 <!-- <tr>
                    <td>Kratos R</td>
                    <td>₹ 1,68,374</td>
                    <td>180 Km, 105 Kmph, 140 kg, 4-5 Hrs</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr> -->
                <!-- <tr>
                    <td>F77 Limited</td>
                    <td>₹ 5,50,000</td>
                    <td>Ride Modes - Glide | Combat | Ballistic, Park Assist, SRB10 Battery Pack, Battery Management System, IEC 62196-6 Charging Port, Throttle Control, Up To 75 km Of Range Per Hour Of Charge, Ambient Light Sensor, Headlight Auto On/Off, GNSS enabled real-time position and velocity discovery, Maps with real-time traffic information, Vehicle Locator, Ride History & Ride Analytics, Temperature, Voltage and Current Sensors with Active Tracking and Efficiency Mapping across the Vehicle, Sensor Fusion technology using 9- axis Inertial Measurement Unit (IMU) along with built-in accelerometer, gyroscope & magnetometer Shock and Impact sensors for Fall and Crash Detection Error reporting through Ultraviolette Smartphone App , LTE connectivity with integrated eSIM, WLAN, GPS/GLONASS, Hazard Lights, Lockdown Mode, Fall & Crash Sensor, Emergency Contact Alert , Aero Wheel Disc, Lever Guard</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr> -->
                <!--<tr>
                    <td>Hum Basic- Mid Range</td>
                    <td>₹ 34,175</td>
                    <td>Acceleration (0-25 kmph) - 9 Sec, 4” Multi-Functional Display, Mount For Accessories, Battery Weight (MR or LR)- 4.8 Kg, Battery Weight (NR)- 2.7 Kg, Noise- 63 db</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Hum Standard- Mid Range</td>
                    <td>₹ 34,975</td>
                    <td>Acceleration (0-25 kmph) - 9 Sec, Noise - 63 db, 4” Multi-Functional Display, Mount For Accessories, Battery Weight (MR or LR)- 4.8 Kg, Battery Weight (NR)- 2.7 Kg</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr> -->
            </table>    
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>Atumobile, an EV startup based in Hyderabad, launched its first electric bike, the Atum Version 1.0, back in September 2020. This made-in-India retro-style electric bike was priced at an introductory Rs 49,999 (excluding GST and shipping charges), but now, it has gone up to Rs 74,999(ex-showroom). The electric bike can be pre-ordered for Rs 999 through the brand’s official website. 
            <span id="dots">...</span><span id="more">
        
         <br><br>
         The Atum Version 1.0 is powered by a 48V, 27Ah removable lithium-ion battery pack linked to a 48V, 250W hub motor. Its top speed is restricted to just 25kmph, so you don’t require a licence to ride it. The claimed 100km range sounds pretty good for a low-speed electric bike. It takes 3-4 hours to charge the battery pack completely. 
         <br><br>
         Instead of a traditional fuel tank, there’s a 14-litre lockable storage compartment for added practicality. The hardtail e-bike rides on a telescopic front fork, spoke wheels, fat 4-inch tyres, 160mm mechanical disc brakes at both ends, and an all-LED lighting system. 
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <!-- <section style="text-align: center;" id="Brochure">
        <a href="https://static.autox.com/uploads/bikes/brochure/2022/07/Rorr-Product-Spec-Sheet.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section> -->


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download (6).jpg" alt="Black">
                    <div class="content">
                        <h3>Black</h3>
                        
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download (1).jpg" alt="Blue">
                    <div class="content">
                        <h3>Blue</h3>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download.jpg" alt="Red">
                    <div class="content">
                        <h3>Red</h3>
                    </div>
                </div>                
                <!-- <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile Atum Version 1.0/download (1).jpg" alt="Yellow">
                    <div class="content">
                        <h3>Yellow</h3>
                    </div>
                </div>                 -->

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

<!-- Video Information of Vehicles -->
<section class="VIDEO"  id="VIDEO">
    <h3 class="heading">VIDEO  </h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/mgiH7emdj5c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Ofg3vuzYBQU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/yUy83V-RBeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/yUy83V-RBeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <br> 
<br> <strong>For More Information : </strong> <a href="https://atumobile.co/?gclid=Cj0KCQiAlKmeBhCkARIsAHy7WVs5e7r0GlBE1CGOh9vFWEE1hgNlzmYlEfgLI_UP0nJ6je-b9Qudy-YaAsAGEALw_wcB" target="_blank" >Click Here </a>

</section>

<!-- <section class="Test_drive" id="Test_drive">
    <a href="https://www.kabiramobility.com/km-3000" class="btn" target="_blank">Book a Test Ride</a>
</section> -->


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