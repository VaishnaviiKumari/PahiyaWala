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
    

    <title> Ather 450X  </title>
    <link rel="shortcut icon" href="../image/Logo.jpeg" type="image/png">

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

        <h3>Ather 450X</h3>
        <img  src="../image/Scooter/arther 450x/Ather 450X Banner.jpg" class="responsive" alt="">



    </section>


    <section>
        <div class="Vehicle_bar" id="Vehicle_bar">
            <p><b>
                <a href="#Images">Images </a>
                <a href="#Specifications">Specifications </a>
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
                    <img src="../image/Scooter/arther 450x/Cosmic Black.png"alt="">
                    <div class="content">

                        <h3>Ather 450X</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/frunk.png" alt="">
                    <div class="content">
                        <h3>Frunk</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/Speedometer.jpg" alt="">
                    <div class="content">
                        <h3>Speedometer</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/Taillight.png" alt="">
                    <div class="content">
                        <h3>Tail Light</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/Headlight.png" alt="">
                    <div class="content">
                        <h3>Head Light</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/boot-space.png" alt="">
                    <div class="content">
                        <h3>Boot </h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/Seat.png" alt="">
                    <div class="content">
                        <h3>Seat</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/" alt="">
                    <div class="content">
                        <h3>  </h3>


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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 1.36 - 1.59 Lakh &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-gears"></i><strong> Speed Modes</strong> :- Automatic <br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 108  Km &emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :- 4-5 hours &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- Single  <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 3.7 kWh &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-motorcycle"></i> <strong> Top Speed</strong> :- 90 KMPH &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-suitcase-rolling"></i> <strong>Storage</strong> :- 22 litres
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
                    <td> Ather 450 Plus Gen 3 </td>
                    <td>₹ 1.36 Lakh</td>
                    <td> It comes with an engine putting out and of max power and max torque respectively. </td>
                    <td><a href="#" class="btn"> RoadPrice</a></td>
                </tr>
                <tr>
                    <td> Ather 450X Gen 3 </td>
                    <td>₹ 1.59 Lakh</td>
                    <td> It comes with an engine putting out and of max power and max torque respectively. </td>
                    <td><a href="#" class="btn"> RoadPrice</a></td>
                </tr>
                <!-- <tr>
                    <td>Nexon EV Max XZ Plus 7.2 KW Fast Charger</td>
                    <td>₹ 18.84 Lakh</td>
                    <td>Cruise Control, Push Button Start, Wireless Charger, Alloy Wheels, Steering Mounted Controls</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 3.3 KW</td>
                    <td>₹ 19.34 Lakh</td>
                    <td>Sunroof, Cruise Control, Push Button Start, Wireless Charger, Ventilated Seats</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 3.3 KW Jet</td>
                    <td>₹ 19.54 Lakh</td>
                    <td> Touch-screen Display, Reverse Camera with Guidance Parking Assist, Rear AC, Integrated Music System, Steering Adjustment</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 7.2 KW Fast Charger</td>
                    <td>₹ 19.84 Lakh</td>
                    <td>Sunroof, Cruise Control, Push Button Start, Wireless Charger, Ventilated Seats</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 7.2 KW Fast Charger Jet </td>
                    <td>₹ 20.04 Lakh </td>
                    <td>Touch-screen Display, Reverse Camera with Guidance Parking Assist, Rear AC, Integrated Music System, Steering Adjustment</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr> -->
            </table>
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>
            The Ather 450X Gen 3’s claimed real world range (TrueRange in Ather speak) stands at 105km in Eco mode and 85km under Ride mode. Since the Ather 450X Gen 3 is built on the same platform as the Ather 450X, it continues to use the same underpinnings: front telescopic fork, rear monoshock suspension, front and rear disc brakes with combined braking system and a belt drive. 
            <span id="dots">...</span><span id="more">
        
         <br><br><strong>Ather 450X Price:</strong><br>
        
        The Ather 450 Plus Gen 3 is priced at Rs 1,37,092 while the 450X Gen 3 will set you back by Rs 1,60,102 (ex-showroom Gurgugram, including FAME II subsidies). We spent our fair share of saddle time with the 3rd generation of the electric scooter and came back pleasantly surprised at its capabilities         <br>
         <br>
                 
         <br><br><strong>Features</strong><br>
        
         As part of the latest AtherStack 5.0 software update, the Gen 3 scooters get a host of changes which can be accessed on the seven-inch colour touchscreen. Firstly, the layout of the console itself has been subtly changed, with icons like Bluetooth and time readout moving to the top right, similar to that on a mobile phone. It also comes with several gesture functions for better user interface. The Ather 450X already has Google maps on offer, but the update revises this too, with new 3D Vector Maps, which allow for perspective change, akin to Android Auto seen in cars, as well as traffic updates, giving you an ever clearer estimation of when you’ll reach your destination. A trip planner is also offered, so you can plan stops along your route, say to accommodate charging stations, on longer trips. Also on offer is AutoHold (or hill hold) which can function almost indefinitely, till you tap on the brakes to disengage it. The lighting system is all-LED, and the electric scooter also features Bluetooth connection based music and call controls. Moreover, the 450X comes with integrated 4G LTE SIM connectivity. It also gets 2GB RAM and 16GB ROM. The updated 450X also features a redesigned seat for better rider and pillion comfort. It is backwards compatible with 450X as well. 
 
         <br><br><strong>Engine </strong><br>
        
        
         The Ather 450X uses a 6kW and 26Nm Permanent Magnet Synchronous (PMS) Motor linked to a 3.7kWh Lithium-ion battery pack and a Battery Management System (BMS). It offers a claimed range of 85km in Ride mode and 105km in Eco. The Ather 450X can accelerate from nought to 40kmph in 3.3 seconds (claimed) in Warp mode.          <br>
         <br>
        
        
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://assets.atherenergy.com/ather450x-gen3_1-specifications.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/Cosmic Black.png" alt="">
                    <div class="content">
                        <h3>Cosmic Black </h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/Lunar Grey.png" alt="">
                    <div class="content">
                        <h3> Lunar Grey</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/SaltGreen.png" alt="">
                    <div class="content">
                        <h3>Salt Green</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/SpaceGrey.png" alt="">
                    <div class="content">
                        <h3>Space Grey</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/Still White.png" alt="">
                    <div class="content">
                        <h3>Still White</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/arther 450x/True Red.png" alt="">
                    <div class="content">
                        <h3>True Red</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

<!-- Video Information of Vehicles -->
<section class="VIDEO"  id="VIDEO">
    <h3 class="heading">VIDEO  </h3>

    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/62j9-Zu2v9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/EdMJRMqOIbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      <br>

     
<br> <strong>For More Information : </strong> <a href="https://www.atherenergy.com/" target="_blank" >Click Here </a>

</section>

<section class="Test_drive" id="Test_drive">
    <a href="https://app.atherenergy.com/product/450x/testride" class="btn" target="_blank">Book a Test Ride</a>

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