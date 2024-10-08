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
    

    <title>Nexzu Rompus Plus   </title>

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

        <h3>Nexzu Rompus Plus</h3>
        <img  src="../image/Cycles/Nexzu Rompus Plus/home pic.jpg" class="responsive" alt="">



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

    <!-- 
<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section> -->

    <section class="vehicles" id="vehicles">

        <h4 class="heading" id="Images"> Images </h4>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-1.jpg" alt="TATA NEXON EV">
                    <div class="content">

                        <h3>NEXZU ROMPUS PLUS</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-2.jpg" alt="">
                    <div class="content">
                        <!--<h3>Side View</h3>-->


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-3.jpg" alt="">
                    <div class="content">
                        <!--<h3>Front View</h3>-->


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-4.jpg" alt="">
                    <div class="content">
                        <!--<h3>Top View</h3>-->


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-5.jpg" alt="TATA NEXON EV Spacious Interior">
                    <div class="content">
                        <!--<h3>Spacious Interior</h3>-->


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-6.jpg" alt="Automatic transmission">
                    <div class="content">
                        <!--<h3>Automatic transmission</h3>-->


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-7.jpg" alt="">
                    <div class="content">
                        <!--<h3>Dual Airbags </h3>-->


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-7.jpg" alt="">
                    <div class="content">
                        


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/D-8.jpg" alt="">
                    <div class="content">
                        

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Tata Nexon EV" alt="">
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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 33,999 onwards &emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
        <i class="fa-solid fa-gears"></i><strong> Battery Type</strong> :- Lithium Ion <br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 25 kmph &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-6.5 to 15 hrs &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 2 People <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Top Speed</strong> :- 5.2 Ah &nbsp;&emsp;&emsp;&emsp;
        <!--<i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- SUV &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
        <i class="fa-solid fa-suitcase-rolling"></i> <strong>Charging Time </strong> :- 2.5-3 hours
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
                    <td>Nexzu Rompus Plus STD</td>
                    <td>Rs. 37,016</td>
                    <td>32km/charge , 250 motor power, BLDC motor, Battery Warrenty-1year,6months </td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>ROMPUS+</td>
                    <td>Rs. 33,999</td>
                    <td>25km/hr , Lithium-Ion 5.2Ah battery, In-Frame battery location,26″ Cotton Tube Tyres</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>NEXZU Rompus Plus E-Cycle for Women</td>
                    <td>Rs. 16,999</td>
                    <td>32 km travel range with minimum pedal assisting, 26" Nylon, Wide and knobby nylon tyres enhance the stability for the cycle.</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>NEXZU Rompus Plus E-Cycle for Women</td>
                    <td>Rs.33,981</td>
                    <td> Front Head lamp for night vision & Horn. Auto electric cut off on braking, Dual drive Mode - Pedelec and Full Throttle Mode, Anti-Skid Pedals and advanced disc brakes</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <!--<td>Nexon EV Max XZ Plus Lux 7.2 KW Fast Charger</td>
                    <td>₹ 19.84 Lakh</td>
                    <td>Sunroof, Cruise Control, Push Button Start, Wireless Charger, Ventilated Seats</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 7.2 KW Fast Charger Jet </td>
                    <td>₹ 20.04 Lakh </td>
                    <td>Touch-screen Display, Reverse Camera with Guidance Parking Assist, Rear AC, Integrated Music System, Steering Adjustment</td>
                    <td><a href="#" class="btn">buy</a></td>-->
                </tr>
                
            </table>
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>It is a 3-speed EV that can be used as a scooter or a bicycle! Running on a powerful 36V,250 Watts HUB BLDC Motor, the Rompus+ offers a powerful ride. It sports an in-frame 36V, 5.2AH Lithium-Ion battery which gives it an impressive 750 cycle battery life and full charge in just 2.5 to 3 hours.</p>
            <span id="dots">...</span><span id="more">
        
         <!--<br><br><strong>Exterior</strong><br>
        
         The new Nexon EV Max bears the same exterior design as the Nexon EV. Tata continues to offer projector headlamps, fog lamps, and the signature electric-blue inserts. However, the new electric SUV comes with four-wheel disc brakes and new 16-inch alloys. <br>
         <br>
         Tata has given it a few new features too, such as an electronic stability program with i-VBAC, hill hold assist, hill descent control, three driving modes (Eco, City, and Sport), multi-mode regenerative braking, and cruise control. 
        
         <br><br><strong>Interior</strong><br>
        
        
         The Nexon EV Max features a new Makarana Beige interior with leatherette upholstery for the seats. In addition, it gets cooled front seats, auto-dimming IRVM, a wireless handset charger, smartwatch compatibility, an air purifier, and a new drive-mode rotary dial. 
        
         <br><br><strong>Electric powertrain</strong><br>
        
        
          The new Nexon EV Max boasts a 40.5kWh battery pack delivering 141bhp and 250Nm. As per ARAI, this larger battery pack gives out a 437km travel range. Tata Motors offers a new 7.2kW AC charger with the Nexon EV Max, while a 3.3kW AC charger is available too.   <br>
         <br>-->
        
        
         <!--The SUV achieves zero to 100kmph in under nine seconds with an upgraded top speed rated at 140kmph. Meanwhile, the Nexon EV Max can be charged from zero to 80 per cent in a claimed 56 minutes with the 50kW DC fast charger, whereas the 7.2kW charger takes 6.5 hours.-->
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://nexzu.in/wp-content/uploads/2021/03/Nexzu-E-cycle-Owner-Manual_compressed.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/green.jpg" alt="Daytona Grey">
                    <div class="content">
                        <h3>green</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/multi.jpg" alt="Pristine White">
                    <div class="content">
                        <h3>black blue</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/red.jpg" alt="Intensi Teal">
                    <div class="content">
                        <h3>red</h3>
                        <!-- <div class="price">$55,000/-</div> -->
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Nexzu Rompus Plus/silver.jpg" alt="Starlight">
                    <div class="content">
                        <h3>greywhite</h3>
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

    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/PFJUHFkiX-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/z7Ot0L-uGiE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     <br>

     
<br> <strong>For More Information : </strong> <a href="https://nexonev.tatamotors.com/features/#nexonevmax" target="_blank" >Click Here </a>

</section>

<section class="Test_drive" id="Test_drive">
    <a href="https://nexonev.tatamotors.com/book-a-test-drive/" class="btn" target="_blank">Book a Test Ride</a>

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