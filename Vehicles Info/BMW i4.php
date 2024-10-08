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
    <link rel="shortcut icon" href="../image/Logo.jpg" type="image/png">

    <title> BMW i4 </title>

</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="../login/header.php" class="logo"> <span>Pahiya</span>Wala </a>

        <nav class="navbar">
            <a href="../login/header.php">home</a>
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

        <h3>BMW i4</h3>
        <img  src="../image/Cars/BMW i4/BMWI4BACKDROp.jpg" class="responsive" alt="">



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
                    <img src="../image/Cars/BMW i4/Cross View.png" alt="BMW i4">
                    <div class="content">

                        <h3>BMW i4</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/BMW i4/Side View.png" alt="">
                    <div class="content">
                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/BMW i4/Front View.jpg" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/BMW i4/Cross View.png" alt="">
                    <div class="content">
                        <h3> Cross View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/BMW i4/Interior.jpg" alt=" Interior">
                    <div class="content">
                        <h3>Interior</h3>


                    </div>
                </div>

                <!-- <div class="swiper-slide box">
                    <img src="../image/Cars/BMW i4/Automatic transmission.png" alt="Automatic transmission">
                    <div class="content">
                        <h3>Automatic transmission</h3>


                    </div>
                </div> -->

             <!--   <div class="swiper-slide box">
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
                    <img src="../image/Cars/BMW i4/" alt="">
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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 69.90 Lakh onwards &emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
        <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic ,<br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 493-590 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-8 hours 15 minutes &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 83.9 kWh &nbsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- 5 seater Sedan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 445 litres
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
                    <td>i4 e-drive 40</td>
                    <td>₹ 69.90 Lakh</td>
                    <td> Cruise Control, Push Button Start, Wireless Charger, Alloy Wheels, Steering Mounted Controls</td>
                    <td><a href="../Road Price/BMW_i4.php" class="btn">View on road price</a></td>

                </tr>
               <!-- <tr>
                    <td>Nexon EV Max XZ Plus 7.2 KW Fast Charger</td>
                    <td>₹ 18.84 Lakh</td>
                    <td>Cruise Control, Push Button Start, Wireless Charger, Alloy Wheels, Steering Mounted Controls</td>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus Lux 3.3 KW</td>
                    <td>₹ 19.34 Lakh</td>
                    <td>Sunroof, Cruise Control, Push Button Start, Wireless Charger, Ventilated Seats</td>
                </tr>
                <tr>
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
        <p>A big battery and fast charging speeds always add up to a good score in this section, so it's not surprising that the i4 is one of the better choices for those prone to range anxiety. It’s not perfect, though; as always, the claimed maximum range is tricky to replicate in the real world, and not every public charging point out there right now can take full advantage of the i4's fastest possible charging speed of 205kW.
            <span id="dots">...</span><span id="more">
        
         <br><br><strong>Exterior</strong><br>
        
         The i4 measures 188.5 inches in length (almost four inches longer than a Tesla Model 3), 72.9 inches in width, and 57 inches in height. The wheelbase stretches to 112.4 inches. Being an EV, the i4 is predictably heavy. <br>
         <br>
         Tata has given it a few new features too, such as an electronic stability program with i-VBAC, hill hold assist, hill descent control, three driving modes (Eco, City, and Sport), multi-mode regenerative braking, and cruise control. 
        
         <br><br><strong>Interior</strong><br>
        
        
         The layout of the i4’s cabin will be very familiar to any current 3 or 4 Series owner. Build quality is excellent, and the dashboard design is clean and minimalistic – dominated by a large curved display panel that features both a 12.3-inch driver’s screen and a 14.9-inch infotainment display. 
        
         <br><br><strong>Electric powertrain</strong><br>
        
        
         The 2022 BMW i4 is an electric sedan that mostly retains the conventional style of the 4-Series, but swaps in an electric powertrain. It competes against other electric vehicles, ranging from the Tesla Model 3 to the Genesis GV60 and Kia EV6. Though the i4’s styling choices are mostly conservative, the electric drivetrain transforms it into something new for BMW. If you can get past the front styling, the i4 offers a potent combination of drivability, technology, and features, without producing any emissions.   <br>
         <br>
        
        0
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://www.bmw.in/content/dam/bmw/marketIN/bmw_in/brochure%20download/brochureupload/2023/Jan/BMW_NSC_i4%20Brochure_Edit_Jan23_LR1.pdf.asset.1674213109404.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cars/BMW i4/Skyscraper Grey metallic.png" alt="Grey">
                    <div class="content">
                        <h3> Grey</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cars/BMW i4/Front View.jpg" alt=" White">
                    <div class="content">
                        <h3> White</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/BMW i4/Black Sapphire metallic.png" alt="Black">
                    <div class="content">
                        <h3>Black</h3>
                        <!-- <div class="price">$55,000/-</div> -->
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                

            </div>-->

            <div class="swiper-pagination"></div>

        </div>


    </section>

<!-- Video Information of Vehicles -->
<section class="VIDEO"  id="VIDEO">
    <h3 class="heading">Video </h3>


    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/lw8V9fl9FwM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     
     <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/jHF3RHQCqsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

     
<br> <strong>For More Information : </strong> <a href="https://www.bing.com/ck/a?!&&p=681449292ae11b5cJmltdHM9MTY3MzgyNzIwMCZpZ3VpZD0wMWFhMDg5OS05MzVkLTZkMzUtMDQxYy0xYWVjOTJlZjZjZTEmaW5zaWQ9NTQyNw&ptn=3&hsh=3&fclid=01aa0899-935d-6d35-041c-1aec92ef6ce1&psq=bmw+i4+electric+more+information&u=a1aHR0cHM6Ly93d3cuYm13LmNvbS9lbi9ldmVudHMvaWFhMjAyMS9ibXctaXgtYm13LWk0LWZpcnN0LWxvb2suaHRtbCM6fjp0ZXh0PVRoZSUyMEJNVyUyMGk0JTIwaXMlMjB0aGUlMjBicmFuZCVFMiU4MCU5OXMlMjBmaXJzdCUyMGZ1bGx5LHNwb3J0aW5nJTIwcHJvd2VzcyUyMHdpdGglMjBjb21mb3J0YWJsZSUyMHJhbmdlJTIwYW5kJTIwZWxlZ2FudCUyMGRlc2lnbi4&ntb=1" target="_blank" >Click Here </a>

</section>

<section class="Test_drive" id="Test_drive">
    <a href="https://www.bing.com/ck/a?!&&p=060c57a437cb409cJmltdHM9MTY3MzgyNzIwMCZpZ3VpZD0wMWFhMDg5OS05MzVkLTZkMzUtMDQxYy0xYWVjOTJlZjZjZTEmaW5zaWQ9NTE5Mw&ptn=3&hsh=3&fclid=01aa0899-935d-6d35-041c-1aec92ef6ce1&psq=bmw+i4+electric+test+drive&u=a1aHR0cHM6Ly93d3cuYm13LmluL2VuL2FsbC1tb2RlbHMvYm13LWkvaTQvMjAyMS9ibXctaTQtaGlnaGxpZ2h0cy5odG1s&ntb=1" class="btn" target="_blank">Book a Test Ride</a>

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