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
    

    <title> Atumobile AtumVader   </title>
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

        <h3>Atumobile AtumVader</h3>
        <img  src="../image/Bike/Atumobile AtumVader/Backdrop.jpg" class="responsive" alt="">



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
                    <img src="../image/Bike/Atumobile AtumVader/Black.png"alt="">
                    <div class="content">

                        <h3>Atumobile AtumVader</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/Front Tyre View.png" alt="">
                    <div class="content">
                        <h3>Front Tyre View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/Fuel tank.png" alt="">
                    <div class="content">
                        <h3>Fuel tank</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/Head Light.png" alt="">
                    <div class="content">
                        <h3>Head Light</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/Rear Tyre View.png" alt="">
                    <div class="content">
                        <h3>Rear Tyre View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/Seat.png" alt="">
                    <div class="content">
                        <h3>Seat</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/download (5).jpg" alt="">
                    <div class="content">
                        <h3> Atumobile AtumVader </h3>


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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 99,999 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-gears"></i><strong> Speed Modes</strong> :- 3 ( L,M,H ) <br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 82 to 100 Km &emsp;&nbsp;&nbsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :- 3-4 hours &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- Single Seater <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 2.4 kWh &nbsp;&emsp;&emsp;
        <i class="fa-solid fa-car-side"></i> <strong> Top Speed</strong> :- 65 KMPH &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-suitcase-rolling"></i> <strong>Storage</strong> :- 25 litres
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
                    <td> Atumobile AtumVader STD </td>
                    <td>₹ 1.04 Lakh</td>
                    <td> It comes with an engine putting out and of max power and max torque respectively. </td>
                    <td><a href="#" class="btn">buy</a></td>
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
            The all-new and all-amazing Atum Vader is here and it’s every bit as good as you’d imagined. A classic cafe racer style design, a powerful 2.4 KW motor, a 65 km/h top speed, this electric bike is the whole package. But don’t take our word for it, ride it and see for yourself! Available in five spectacular colours, this high-speed EV is the perfect match for the adrenaline fiend in you. And you know what else? It’s the perfect alternative to highly polluting and climate-damaging petrol motorcycles. Now, go all the way without the guilt!            <span id="dots">...</span><span id="more">
        
         <br><br><strong>Battery Pack</strong><br>
        
         Our batteries are what make Atum Vader special. Resourceful, leak-proof and safe, our battery pack ensures smooth rides, always. Charge the vehicle at your own pace, in your own space, even if it’s an apartment on the 16th floor, or in an office cubicle. Never run out of charge with Atum Vader’s extremely portable Lithium-ion batteries! And by portable, we mean light and practical.         <br>
         <br>
         Charging

         3-4 hours
         Atum 1.0 gives up to 100 km range in one charge
         Range @25kmph
         
         *100 + kms
         Atum 1.0 gives up to 100 km range in one charge
         Range @45kmph
         
         *82 + kms
                 
         <br><br><strong>Features</strong><br>
        
        
         We know this saying isn’t uncommon, but Atum Vader is no common electric bike! Well, if Atum Vader was a rock band, it would be called LED Zeppelin. Headlight, indicator and taillight, you guessed it — All LED. We’re a bit extra, you know? Extra as in, Extraordinary!       
         
            Motor Power

            2.4 kW
            Extra - LED Lights

            Indicators, Tail Light, Rear Lamp
            Top Speed

            65 kmph
            Seat height

            809 mm
            Ground clearance

            230 mm
            Storage Capacity

            25 litres
 
         <br><br><strong>Built to Last </strong><br>
        
        
         Do you know rocket science? Us neither. We simply focus on what we know best — building durable, sturdy electric vehicles. Fitted with fat bike tires, Atum Vader is built for a wheeeeely comfy shuttle. For a lightweight bike, Atum Vader will have no bumpy rides even with a 200 Kg (GVW) load.
         <br>
         <br>
        
        
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://atumobile.co/atum-vader/technical-specifications" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/Black.png" alt="Daytona Grey">
                    <div class="content">
                        <h3>Black </h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/White.png" alt="Pristine White">
                    <div class="content">
                        <h3> White</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/REd.png" alt="Intensi Teal">
                    <div class="content">
                        <h3>Red</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/Blue.png" alt="Starlight">
                    <div class="content">
                        <h3>Blue</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Bike/Atumobile AtumVader/Bidge.png" alt="Starlight">
                    <div class="content">
                        <h3>Bidge</h3>
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

    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/9j96rRNej8Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/VRsGCMzKW2c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>     <br>

     
<br> <strong>For More Information : </strong> <a href="https://atumobile.co/atum-vader" target="_blank" >Click Here </a>

</section>

<section class="Test_drive" id="Test_drive">
    <a href="https://atumobile.co/test-ride" class="btn" target="_blank">Book a Test Ride</a>

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