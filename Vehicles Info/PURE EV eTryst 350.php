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
    
    <title>PURE EV eTryst 350</title>

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

        <h3>PURE EV eTryst 350</h3>
        <img  src="../image/Bike/PURE EV eTryst 350/download (7).jpg" class="responsive" alt="">

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
                    <img src="../image/Bike/PURE EV eTryst 350/download (8).jpg" alt="PURE EV eTryst 350">
                    <div class="content">

                        <h3>PURE EV eTryst 350</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (9).jpg" alt="">
                    <div class="content">
                        <h3>Left Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download.jpg" alt="">
                    <div class="content">
                        <h3>Right Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (3).jpg" alt="">
                    <div class="content">
                        <h3>Rear View</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (6).jpg" alt="Super Mileage">
                    <div class="content">
                        <h3>Super Mileage</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (1).jpg" alt="Amazing Wheels">
                    <div class="content">
                        <h3>Amazing Wheels</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (2).jpg" alt="Body">
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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 1,54,999 onwards &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic <br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 90-140 Kms &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :- 6.5 hrs &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 1-2 People <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 3.5 kwh &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <!-- <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- SUV &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
        <i class="fa-solid fa-bicycle"></i> <strong>Max speed</strong> :- 85 kmph
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
                    <td>eTryst 350 STD</td>
                    <td>₹ 1,54,999</td>
                    <td>Ride Mode - Drive 60 kmph | Cross Over 75 kmph | Thrill 85 kmph, Controller - 72 V 4 KW Vector Looped, BMS - Active Balance 100 A</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                 <!-- <tr>
                    <td>Prana Elite</td>
                    <td>₹ 3,00,000</td>
                    <td>3 Channel Hydraulic Brake System With Engine Cut-Off, Practice Mode - 45 kmph, Drive Mode - 123 kmph, Sports Mode - 123 kmph, Reverse Mode - 5 kmph</td>
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
        <p>PURE EV Etryst-350 is an electric street bike available at a starting price of Rs. 1,54,999 in India. It is available in only 1 variant and 3 colours. PURE EV Etryst-350 generates 3000 W power from its motor. PURE EV Etryst-350 comes up with both front and rear disc brakes.

            Pure EV eTryst 350 is an electric motorcycle priced at Rs 1,54,999 (ex-showroom). It’s available in three colours: Sea Blue, Tan Red, and Punch Black. Pure EV offers the eTryst 350 in only one variant.
            <span id="dots">...</span><span id="more">
        
         <br><br>
         The eTryst 350 is a naked electric bike with a hint of youthful design. It gets a hexagonal headlight and slim bodywork. Pure EV has equipped the eTryst 350 with a slightly muscular tank with extensions, a single-piece seat, and a tubular crash guard for added safety.
         <br><br>
         The eTryst 350 uses a 3kW motor mated to a 3.5kWh battery. Its top speed is limited to 85kmph and the maximum range for the electric bike is 140km. On the feature front, the eTryst 350 features an LED and regenerative braking.
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://pureevwebsite.s3.ap-south-1.amazonaws.com/v2/img/etryst350/eTryst350_UserManual.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (10).jpg" alt="Punch Black">
                    <div class="content">
                        <h3>Punch Black</h3>
                        
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (11).jpg" alt="Sea Blue">
                    <div class="content">
                        <h3>Perfect Blue</h3>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (12).jpg" alt="Tan Red">
                    <div class="content">
                        <h3>Tan Red</h3>
                    </div>
                </div>                
                <!-- <div class="swiper-slide box">
                    <img src="../image/Bike/PURE EV eTryst 350/download (15).jpg" alt="Progressive Green">
                    <div class="content">
                        <h3>Progressive Green</h3>
                    </div>
                </div>                 -->

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

<!-- Video Information of Vehicles -->
<section class="VIDEO"  id="VIDEO">
    <h3 class="heading">VIDEO  </h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/diZofZH_VX0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Uc-pNcWlc-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    
    <br> 
<br> <strong>For More Information : </strong> <a href="https://pureev.in/etryst-350/?gclid=Cj0KCQiAt66eBhCnARIsAKf3ZNGZdyYN0u26_Bc0O_uDuSFYO5rnFYvPbZWO1SJ_KUBGIrLoXYd6LGIaAs6kEALw_wcB" target="_blank" >Click Here </a>

</section>

<section class="Test_drive" id="Test_drive">
    <a href="https://pureev.in/enquiry/index.html" class="btn" target="_blank">Book a Test Ride</a>
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