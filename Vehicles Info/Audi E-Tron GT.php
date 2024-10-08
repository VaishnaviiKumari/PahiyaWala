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
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/png">

    <title>Audi E-Tron GT </title>

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

        <h3>Audi E-Tron Gt</h3>
        <img src="../image/Cars/Audi E-Tron GT/Audi e-tron-GT.jpg" class="responsive" alt="">



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
                    <img src="../image/Cars/Audi E-Tron GT/View.png" alt="Audi E-Tron GT">
                    <div class="content">

                        <h3>Audi E-Tron GT</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Side View.jpg" alt="">
                    <div class="content">
                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Front View.png" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Side View.jpg" alt="">
                    <div class="content">
                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/CROSS VIEW.jpg" alt="">
                    <div class="content">
                        <h3>Cross View</h3>

                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Interiors.jpg" alt="Audi E-Tron GT Interiors">
                    <div class="content">
                        <h3> Interiors</h3>


                    </div>
                </div>

                <!-- <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/View.png" alt="Automatic transmission">
                    <div class="content">
                        <h3>Automatic transmission</h3>


                    </div>
                </div> -->

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Drivers seat Interior.jpg" alt="">
                    <div class="content">
                        <h3>Drivers seat Interior </h3>


                    </div>
                </div>

                <!--   <div class="swiper-slide box">
                    <img src="../image/Cars/Tata Nexon EV/Permanent magnet synchronous motor.png" alt="">
                    <div class="content">
                        <h3> Permanent magnet synchronous motor</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Tata Nexon EV/sunroof.jpg" alt="">
                    <div class="content">
                        <h3> Sunroof</h3>


                    </div>
                </div> -->

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT" alt="">
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
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 1.94 crore onwards &emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic <br>
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 401-481 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-5 hours 30 minutes &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br>
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 93.4 kWh &nbsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- 5 seater Coupe SUV &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot Space</strong> :- 660 litres
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
                    <td>Audi E-Tron GT Quattro </td>
                    <td>₹ 1.70 crore</td>
                    <td> Cruise Control, Push Button Start, Wireless Charger, Alloy Wheels, Steering Mounted Controls</td>
                    <td><a href="#" class="btn">View on road price</a></td>
                </tr>
                <tr>
                    <!-- <td>Audi E- Tron GT</td>
                    <td>₹ 1.70 crore</td>
                    <td>Cruise Control, Push Button Start, Wireless Charger, Alloy Wheels, Steering Mounted Controls</td>
                </tr>
               <tr>
                    <td>Audi RS E-Tron GT</td>
                    <td>₹ 1.94 crore</td>
                    <td>Power Stearing, Cruise Control, Push Button Start, Wireless Charger, Ventilated Seats</td>
                </tr>-->
                    <!--    <tr>
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
                </tr>-->
            </table>
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>The Audi e-tron GT is a battery electric executive car produced by Audi since late 2020 as part of the e-tron battery electric sub-brand, and the third fully electric car model, after e-tron and e-tron Sportback SUVs. Based on the J1 platform
            shared with the Porsche Taycan, the car went on sale in March 2021.</p>
        <span id="dots">...</span><span id="more">
        
         <br><br><strong>Exterior</strong><br>
        
         On the base model e-tron GT, standard exterior features include 20-inch wheels with 245/45 R20 front and 285/40 R20 rear summer tires; adaptive air suspension; auto-dimming, folding, heated, and power-adjustable side mirrors; LED headlights; and LED taillights with dynamic indicators <br>
         <br>
         
        
         <br><br><strong>Interior</strong><br>
        
         The steering wheel is wrapped in Alcantara, there is a carbon fibre design on the dashboard paired with plenty of piano black and brushed aluminum. The seats too are sportier and have a good dose of red stitching. It also gets a 12.3-inch virtual cockpit that is hugely customisable. 
        
         <br><br><strong>Electric powertrain</strong><br>
        
        
         2× AC synchronous electric motors, front and rear axle powered by e-tron.Maximum 475 kW (646 PS; 637 hp)    <br>
         <br>
        
        
         The maximum power of the Audi e-tron GT quattro is 390 kW (523 hp). The maximum torque is 472 lb-ft. The Audi e-tron GT quattro is all wheel drive and can accelerate from 0 to 62 miles per hour in 4.1 seconds. The top speed is 152 mph.

        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://www.audi.in/dam/nemo/in/models/etron-GT/Audi_E-GT_DigitalBrochure.pdf " class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Front View.png" alt="Blue">
                    <div class="content">
                        <h3>Blue</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Side View.jpg" alt="Pristine White">
                    <div class="content">
                        <h3>Pristine White</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Full View.png" alt="Black">
                    <div class="content">
                        <h3>Black</h3>
                        <!-- <div class="price">$55,000/-</div> -->
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Audi E-Tron GT/Cross View.jpg" alt="Starlight">
                    <div class="content">
                        <h3>Starlight</h3>
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

        <iframe width="560" height="315" src="https://www.youtube.com/embed/bErpx1sFao4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

        <!--   <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/uwgfiJ-xEW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     <br> -->


        <br> <strong>For More Information : </strong> <a href="https://www.audi.in/in/web/en/models/e-tron-gt/audi-e-tron-gt.html" target="_blank">Click Here </a>

    </section>

    <section class="Test_drive" id="Test_drive">
        <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwiAl_GIr8z8AhWrmWYCHUhKC-8YABAAGgJzbQ&ohost=www.google.com&cid=CAESa-D2N0PDulxjaaMEanOPhzKHJVhnoJwMGfrxdZoaimgaY4okMgOsVUoeOBltJJID6tVD8DWDq_6LiLn1tWiTQDX104nW-K2_ZZgm8KMAZqHBWGtvi-nL9InzwSbq8Y7lOIiHSEQPEsUoW0ap&sig=AOD64_2sORxDLpxbmZhhQD5kwEgtFi7E8w&q&adurl&ved=2ahUKEwji3OmIr8z8AhXG-TgGHViODOQQ0Qx6BAgJEAE"
            class="btn" target="_blank">Book a Test Ride</a>

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