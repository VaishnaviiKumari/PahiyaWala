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
    <link rel="shortcut icon" href="image/logo.jpeg" type="image/png">

    <title>Ape E-City</title>

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

        <h3>Ape E-City</h3>
        <img src="../image/E-Rickshaw/11-e1619695896259.jpeg" class="responsive" alt="">



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
                </b>
            </p>
        </div>
    </section>

    <section class="vehicles" id="vehicles">

        <h4 class="heading" id="Images"> Images </h4>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/E-Rickshaw/ape_e_city/ape-e-city3side.png" alt="">
                    <div class="content">
                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/E-Rickshaw/ape_e_city/ape-e-city1front.png" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/E-Rickshaw/ape_e_city/ape-e-city2cross.png" alt="">
                    <div class="content">
                        <h3>Cross View</h3>


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
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 2.84 Lakh onwards &emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
            <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- PT gear with differential (Integral) <br>
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 110 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-3 hrs 45 mins &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 1 + 3 People <br>
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 4.5 kWh &nbsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-car-side"></i> <strong> Top Speed</strong> :- 45 kmph &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-suitcase-rolling"></i> <strong>Payload</strong> :- 413 kg
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
                    <td>Piaggio Ape E City</td>
                    <td>₹ 2.84 Lakh</td>
                    <td>689 kg, swappable, Lithium lon 48V, Rated : 7.5 kWh, 5.44 kW @ 3500 rpm, Peak Torque 29 Nm, Handle bar type</td>
                    <td><a href="#" class="btn">View on road price</a></td>
                </tr>

                <tr>
                    <td>Piaggio Ape E City</td>
                    <td>₹ 2.84 Lakh</td>
                    <td>713 kg, Lithium lon 48V, Rated : 7.5 kWh, 5.44 kW @ 3500 rpm, Peak Torque 29 Nm, Handle bar type</td>
                    <td><a href="#" class="btn">View on road price</a></td>
                </tr>
            </table>
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>Piaggio Ape three-wheeler is India's popular last-mile vehicle in the auto-rickshaw segment. The familiar Ape in the diesel/CNG/Petrol now comes in an all-electric battery-operated avatar. Piaggio wants to offer you a greener, more sustainable
            last-mile vehicle that offers the advantage of being lower on operating cost and higher on profit. Ape E City is your well-known passenger carrier three-wheeler that looks similar to the regular one with the only difference being zero sound,
            no clutch, and a fuel tank. You can use the Ape E City for your daily business needs, easy to drive, powerful, has enough space to carry 3-4 passengers, packed with features, and overall superior built quality.
            <span id="dots">...</span><span id="more">
        
         <br><br><br>
        
This all-electric e-rickshaw starts from an attractive ex-showroom price of ₹ 2.84 lakh.


The Ape E-City despite being an e-rickshaw is 689 kg of GVW and payload of 390 kg. You can take a comfortable 3-passenger comfortable seat that has generous cabin space and a cozy, wide passenger seat. <br>
         <br>

         Piaggio Ape E-City offers you some key benefits of performance, battery quality, and overall customer support for peaceful ownership and making sure you earn a high return. The Ape E City is an all-electric passenger carrier for your mobility business that offers compelling operating economics against the IC engine auto-rickshaw. You can explore this new electric auto by reading here. 
        
         <br><br><br>
        

         This EV 3W gets a dual-tone design and contemporary features, including safer doors, and blue vision lamps for better night-time visibility. Piaggio claims that the owner doesn’t need to worry about battery cost or charging while using this vehicle.
        
         <br><br><br>
        
        

         This Ape E City runs on modern swappable batteries, which can be interchanged by just swapping at any nearest charging station. The customer can find the nearest charging station at any given part of the city only by using the mobile app. The app will offer all the details on charging status, distance to empty, nearest station, and well as wallet balance.    <br>
         <br>
        
        

Ape E City is economical to operate with nominal registration, free permit, and no road tax. It gets an advanced digital display for the first time in any 3W for all the vehicle information. This EV has no clutch and gear and can start by switching to start without any noise and vibration. It gets powerful motors for superior performance, zero maintenance, no oil or filter change, and no battery maintenance.

<br>
<br>

 Piaggio offers 36 months or 100 000 km of warranty and three years of scheduled maintenance free and a comprehensive AMC promise for three years. 

Piaggio Ape E City Competitors: You can check out similar products such as Mahindra Treo, E-Alfa mini, Kinetic Safar Smart, Lohia Comfort, and Atul Elite Plus.
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://piaggio-cv.co.in/download-brochure/" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/E-Rickshaw/ape_e_city/ape-e-city3side.png" alt="Greyish Blue">
                    <div class="content">
                        <h3>Greyish Blue</h3>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

    <!-- Video Information of Vehicles -->
    <section class="VIDEO" id="VIDEO">
        <h3 class="heading">VIDEO </h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/WBdC35JLMiE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

        <br> <strong>For More Information : </strong> <a href="https://piaggio-cv.co.in/ape-e-city/" target="_blank">Click Here </a>

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