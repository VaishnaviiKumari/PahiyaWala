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
    

    <title> Bajaj Chetak </title>
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

        <h3>Bajaj Chetak</h3>
        <img  src="../image/Scooter/BAJAJ CHETAK/Banner .jpg" class="responsive" alt="">



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
                    <img src="../image/Scooter/BAJAJ CHETAK/Velluto Russo.png"alt="">
                    <div class="content">

                        <h3>BAJAJ CHETAK</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Right Side View.png"alt="">
                    <div class="content">

                        <h3>Right Side View</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Left Side View.png"alt="">
                    <div class="content">

                        <h3>Left Side View</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Speedometer.png"alt="">
                    <div class="content">

                        <h3>Speedometer</h3>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Self Starter Button.png"alt="">
                    <div class="content">

                        <h3>Self Starter Button</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Front Tyre View.png" alt="">
                    <div class="content">
                        <h3>Front Tyre View</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Rear Tyre View.png" alt="">
                    <div class="content">
                        <h3>Rear Tyre View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Rear View.png" alt="">
                    <div class="content">
                        <h3>Rear View</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Front View.png" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Headlight.png" alt="">
                    <div class="content">
                        <h3>Head Light</h3>


                    </div>
                </div>

                

                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Seat.png" alt="">
                    <div class="content">
                        <h3>Seat</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Boot.png" alt="">
                    <div class="content">
                        <h3>Boot</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/" alt="">
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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 1.52 Lakh &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-gears"></i><strong> Speed Modes</strong> :- Automatic <br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 95  Km &emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :- 5 hours &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- Double  <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 2.89 kWh &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-motorcycle"></i> <strong> Top Speed</strong> :- 63 KMPH &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-suitcase-rolling"></i> <strong>Storage</strong> :- 18L
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
                    <td> Premium </td>
                    <td>₹ 1.52 Lakh</td>
                    <td> It comes with an engine putting out and of max power and max torque respectively. </td>
                    <td><a href="#" class="btn"> RoadPrice</a></td>
                </tr>
                <!-- <tr>
                    <td> Retrosa II </td>
                    <td>₹ 1.28 Lakh</td>
                    <td> It comes with an engine putting out and of max power and max torque respectively. </td>
                    <td><a href="#" class="btn"> RoadPrice</a></td>
                </tr> -->
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
            BAJAJ CHETAK/ plans to expand to northern and southern states of India this year. It currently sells the Retrosa only in Andhra Pradesh at Rs 1,19,400 (ex-showroom). It is powered by a 3kW Bosch hub motor, which is good for a claimed range of 140km and a top speed of 90kmph. In terms of equipment, it gets two ride modes (Economy and Sport+), a fully digital instrument cluster, which displays a plethora of information, and LED lights at both ends. It features telescopic fork at the front and dual shock absorbers at the rear. Stopping power comes from disc brakes at either end.            <span id="dots">...</span><span id="more">
        
         <br><br><strong>SMART RANGE</strong><br>
        
         absolute minimum range (120-140 km) to be sufficient and with
         a safe margin         <br>
                 
         <br><strong>RIDING STYLE</strong><br>
        
         5 speed gear performance settings. By simply using your key,
         you can go from economy to sport+ mode instantly. 
         <br><br><strong>PARK ASSISTANT </strong><br>
        
        
         works back and forth (reverse mode) with maximum speed
         5 km/hour.     <br>    <br>
         <strong>TOP SPEED</strong><br>
         Within couple of seconds it gives you pickup speed of 90 kmph
            and gives you pleasant noise free ride<br><br>
         <strong>MOTOR</strong><br>
         Wheel hub BLDC motor with 3000 Watt for better performance.<br><br>
         
         <strong>BATTERY</strong><br>
         Lithium Iron Phosphate battery is designed to last and backed by a 5* year, unlimited* mileage warranty. We designed our A.I. and user interaction to be as intuitive and convenient as possible, giving you back more of your invaluable time<br><br>

         <strong>START-STOP </strong><br>
         With a single push shut down and restarting the motor can be done instantly, reducing the amount of time the motor spends idling, thereby reducing energy consumption. 
         <br><br>

        
        
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://static.autox.com/uploads/bikes/brochure/2021/07/bajaj-chetak-brochure.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Brooklyn Black.png" alt="">
                    <div class="content">
                        <h3>Brooklyn Black </h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Velluto Russo.png" alt="">
                    <div class="content">
                        <h3> Velluto Russo (Red)</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Hazel Nut.png" alt="">
                    <div class="content">
                        <h3> Hazel Nut</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/Indogi Metallic.png" alt="">
                    <div class="content">
                        <h3> Indogi Metallic</h3>
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

    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/4uq5Wc3smK8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/AjW6eqThYbg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


     
<br>    <br> <strong>For More Information : </strong> <a href="https://www.chetak.com/" target="_blank" >Click Here </a>

</section>


<section class="Test_drive" id="Test_drive">
    <a href="https://testride.chetak.com/login" class="btn" target="_blank">Book a Test Ride</a>

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