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

    <title>MG ZS EV </title>

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

        <h3>MG ZS EV</h3>
        <img  src="../image/Cars/MG ZS EV/MG ZS EV.png" class="responsive" alt="">



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
                    <img src="../image/Cars/MG ZS EV/MG ZS EV.jpg" alt="MG ZS EV">
                    <div class="content">

                        <h3>MG ZS EV</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Side View.jpg" alt="">
                    <div class="content">
                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Front View.jpg" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Cross View.png" alt="">
                    <div class="content">
                        <h3>Cross View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Interior.jpg" alt=" Interior">
                    <div class="content">
                        <h3> Interior</h3>


                    </div>
                </div>

                <!-- <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Automatic transmission.png" alt="Automatic transmission">
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
                    <img src="../image/Cars/MG ZS EV/" alt="">
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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹  22.98 Lakh onwards &emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
        <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic<br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 419 to 461 km km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-16 hours &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 50.3 kWh &nbsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- 5 seater SUV &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 470 litres
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
                    <td>ZS EV Excite</td>
                    <td>₹ 22.98 Lakh</td>
                    <td> 44.5 kWh, Electric, Automatic, 419 Km</td>
                </tr>
                <tr>
                    <td>ZS EV Exclusive</td>
                    <td>₹ 26.90 Lakh</td>
                    <td>50.3 kWh, Electric, Automatic, 461 Km</td>
                </tr>
                <tr>
                    <td>ZS EV Exclusive Iconic Ivory</td>
                    <td>₹ 27.00 Lakh</td>
                    <td>50.3 kWh, Electric, Automatic, 461 Km</td>
                </tr>
                <!-- <tr>
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
        <p>The MG ZS EV is an electric SUV that targets the likes of the Jeep Compass and Tata Harrier. Primarily for environmentally conscious car buyers, it is a pretty easy and convenient car to live with. 
            <span id="dots">...</span><span id="more">
        
         <br><br><strong>Exterior</strong><br>
        
         Design highlights of the 2022 MG ZS EV include a revised grille with an integrated charging port, new LED headlamps and tail lights borrowed from its ICE sibling, the Astor apart from tweaked front and rear bumpers, as well as a set of new 17-inch dual-tone alloy wheels. <br>
         <br>
          
         <br><br><strong>Interior</strong><br>
        
        
         Inside, the new MG ZS EV facelift comes equipped with a 10.1-inch touchscreen infotainment system with Apple CarPlay and Android Auto, a panoramic sunroof, a fully digital instrument cluster, a 360-degree camera, cruise control, drive modes, electric parking brake, air purifier, rear AC vents, a six-way electrically-adjustable driver seat, and wireless charging. Also on offer will be 75 connected car features. 
        
         <br><br><strong>Electric powertrain</strong><br>
        
        
         Powering the facelifted MG ZS EV is a 50.3kWh battery pack that produces 173bhp and 280Nm of torque. The model is now claimed to return a range of 461kms in a single charge.   <br>
         <br>
        
        
         
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://www.mgmotor.co.in/content/dam/mgmotor/documents/mg-dc-pdf-0500.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Blue.jpg" alt="Blue">
                    <div class="content">
                        <h3>Blue</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Front View.jpg" alt=" White">
                    <div class="content">
                        <h3> White</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Side View.jpg" alt="Sky Blue">
                    <div class="content">
                        <h3>Sky Blue</h3>
                        <!-- <div class="price">$55,000/-</div> -->
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/Cross View.png" alt="Red">
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
<section class="VIDEO"  id="VIDEO">
    <h3 class="heading">VIDEO  </h3>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/5dBb_CUH1GU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<!-- 
     <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/uwgfiJ-xEW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     <br> -->

     
<br> <strong>For More Information : </strong> <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwie2I2g19P8AhWQCSsKHZEUAfwYABAAGgJzZg&ohost=www.google.com&cid=CAESa-D2KvKVznlm2gsDwVzDjupsW3ndm_VIJntKSzv-FmHdFRNb13ubUJZKXlrvwI1UXT4Fc_akIYDBfpl0m_PhaahTPTLoX-Tf4eZINEh2Ot8hLz8RdruzMrAeGca5d_a2kn4K31yluXkt4hQH&sig=AOD64_3SDJyLCDdg0hk1bQVIPp1DbpBZyQ&q&adurl&ved=2ahUKEwianoWg19P8AhX3TWwGHRksDvMQ0Qx6BAgKEAE" target="_blank" >Click Here </a>

</section>

<section class="Test_drive" id="Test_drive">
    <a href="https://www.mgmotor.co.in/tools/test-drive" class="btn" target="_blank">Book a Test Ride</a>

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