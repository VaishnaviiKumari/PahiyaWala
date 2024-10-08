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

    <title>Porsche Taycan</title>

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

        <h3>Porsche Taycan</h3>
        <img  src="../image/Cars/Porsche Taycan/Porsche Taycan Image.png" class="responsive" alt="">



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
                    <img src="../image/Cars/Porsche Taycan/Porche Taycan.jpg" alt="Porche Taycan">
                    <div class="content">

                        <h3>Porsche Taycan</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Side View.jpg" alt="">
                    <div class="content">
                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Front View.jpg" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Rear View.png" alt="">
                    <div class="content">
                        <h3>Rear View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Interior.jpg" alt=" Interior">
                    <div class="content">
                        <h3>Interior</h3>


                    </div>
                </div>

                <!-- <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Automatic transmission.png" alt="Automatic transmission">
                    <div class="content">
                        <h3>Automatic transmission</h3>


                    </div>
                </div> -->

                <!-- <div class="swiper-slide box">
                    <img src="../image/Cars/Tata Nexon EV/Dual Airbags.jpg" alt="">
                    <div class="content">
                        <h3>Dual Airbags </h3>


                    </div>
                </div>

                <div class="swiper-slide box">
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
                    <img src="../image/Cars/Porsche Taycan/" alt="">
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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 1.53 crore onwards &emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
        <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic<br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 354 to 431 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-4.5 hours &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 79.2  kWh &nbsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- 5 seater Wagon &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 446 litres
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
                    <td>Taycan Standard</td>
                    <td>₹ 1.53 Cr*</td>
                    <td> Taycan Standard has Multi-function Steering Wheel,Power Adjustable Exterior Rear View Mirror,Touch Screen,Automatic Climate Control,Anti Lock Braking System,Alloy Wheels,Fog Lights - Front,Power Windows Rear,Power Windows Front,Passenger Airbag.</td>
                </tr>
                <tr>
                    <td>Taycan 4S</td>
                    <td>₹ .67 Cr*</td>
                    <td>aycan 4S has Multi-function Steering Wheel,Power Adjustable Exterior Rear View Mirror,Touch Screen,Automatic Climate Control,Anti Lock Braking System,Alloy Wheels.</td>
                </tr>
                <tr>
                    <td>Taycan 4S Cross Turismo</td>
                    <td>₹ 1.74 Cr*</td>
                    <td> Taycan 4S Cross Turismo has Multi-function Steering Wheel,Power Adjustable Exterior Rear View Mirror.</td>
                </tr>
                <tr>
                    <td>Taycan Turbo</td>
                    <td>₹ 2.12 Cr*</td>
                    <td>  Taycan Turbo has Multi-function Steering Wheel,Power Adjustable Exterior Rear View Mirror,Touch Screen.</td>
                </tr>
                <tr>
                    <td>Taycan Turbo Cross Turismo</td>
                    <td>₹ 2.14 Cr*</td>
                    <td>Taycan Turbo Cross Turismo has Multi-function Steering Wheel,Power Adjustable Exterior Rear View Mirror,Touch Screen,Automatic Climate Control,Anti Lock Braking System,Alloy Wheels,Fog Lights.</td>
                </tr>
                <tr>
                    <td>Taycan Turbo S </td>
                    <td>₹ 2.34 Cr* </td>
                    <td>Taycan Turbo S has Multi-function Steering Wheel,Power Adjustable Exterior Rear View Mirror,Touch Screen,Automatic Climate Control,Anti Lock Braking System,Alloy Wheels.</td>
                </tr>
            </table>
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>This variant is available in 15 colours: Black, Carrara White, White, Neptune Blue, Jet Black Metallic, Carmine Red, Crayon, Dolomite Silver Metallic, Frozen Berry Metallic, Frozen Blue Metallic, Gentian Blue Metallic, Coffee Beige Metallic, Cherry Metallic, Volcano Grey Metallic and Ice Grey Metallic.
            <span id="dots">...</span><span id="more">
        
         <br><br><strong>Exterior</strong><br>
        
         The Taycan sedan is a very low-slung four-door electric sports car. In terms of the design, the Taycan features Porsche signature four-pointed daytime running lights, matrix LED headlights, rear lights with an LED light bar and charging ports on either side of the fenders. Meanwhile, it also has a coupé-style sloping roofline.  <br>
         <br>
         
        
         <br><br><strong>Interior</strong><br>
        
         The Taycan’s cockpit is inspired by the original 911 from 1963. However, this interior features ultramodern elements such as three displays: a 16.8-inch instrument cluster, a 10.9-inch infotainment touchscreen and an 8.4-inch climate control touchscreen. Additionally, it also comes with an optional co-passenger display. Apart from the displays, Porsche offers a variety of interior upholstery and colour choices. What is more, the upholstery is made of sustainable materials. The Nexon EV Max features a new Makarana Beige interior with leatherette upholstery for the seats. In addition, it gets cooled front seats, auto-dimming IRVM, a wireless handset charger, smartwatch compatibility, an air purifier, and a new drive-mode rotary dial. 
        
         <br><br><strong>Electric powertrain</strong><br>
        
        
         Except for the base Taycan rear-wheel drive, all the Taycan models use synchronous motors (one at each axle). Unlike regular electric vehicles, the Taycan features a two-speed automatic transmission. The first gear provides improved acceleration while cruising or at higher speeds and the transmission shifts to the second gear for higher efficiency. The first gear activates only in Sport and Sport Plus modes.  <br>
         <br>
        
        
         Porsche offers two different battery packs across the Taycan lineup: 79.2kWh and 93.4kWh. The range and power output vary depending on the variant and the battery sizes. When it comes to charging, the Taycan can be charged using AC and DC chargers. It is claimed that the Taycan is the first EV to support 800-volt super-fast charging.
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://files.porsche.com/filestore/download/usa/none/modelseries-j1-taycanandtaycanturismo-2-downloads-catalogue/default/b006c7dc-8999-11ec-80e9-005056bbdc38/Taycan-and-Taycan-Turismo-Interactive-Brochure.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Side View.jpg" alt="Frozenberry Metallic">
                    <div class="content">
                        <h3>Frozenberry Metallic</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Front View.jpg" alt="">
                    <div class="content">
                        <h3>Carrara White Metallic</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Jet Black Metallic.jpg" alt="Jet Black Metallic">
                    <div class="content">
                        <h3>Jet Black Metallic</h3>
                        <!-- <div class="price">$55,000/-</div> -->
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Porsche Taycan/Cherry Metallic.jpg" alt="Cherry Metallic">
                    <div class="content">
                        <h3>Cherry Metallic</h3>
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

    <iframe width="560" height="315" src="https://www.youtube.com/embed/KoD8_P1RpH8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

     <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/uwgfiJ-xEW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     <br> -->

     
<br> <strong>For More Information : </strong> <a href="https://www.porsche.com/middle-east/_india_/models/taycan/taycan-models/taycan/" target="_blank" >Click Here </a>

</section>

<section class="Test_drive" id="Test_drive">
    <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjT8Nram9T8AhX0wRYFHYjdAFsYABAAGgJ0bA&ohost=www.google.com&cid=CAESa-D2kC_kqAtL-e0ZxlsymR4jwQRcy0PxiNkbgHTzrcSaDvw_qMP753u_4VkyYjb72y18L1a_7_pSfJNnMfsG7Is76Yb0x3IiDxkpXB-l1Pe3ZglMgxd_eoq66bXkeiiNqHkTN1iKZ3-QhFKk&sig=AOD64_0Doc_BYmS5S-yX0SUScASl5_wEWA&q&adurl&ved=2ahUKEwjcs9Pam9T8AhWLB4gKHZYDC1YQ0Qx6BAgIEAE" class="btn" target="_blank">Book a Test Ride</a>

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