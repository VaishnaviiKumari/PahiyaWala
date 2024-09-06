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
    
    <title>Motovolt Kivo</title>

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

        <h3>Motovolt Kivo</h3>
        <!-- <img  src="../image/Cars/Tata Nexon EV/Tata Nexon EV Max backdrop1.jpg" class="responsive" alt=""> -->
        <img  src="../image/Cycles/Motovolt Kivo/download (6).jpg" class="responsive" alt="">



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
                    <img src="../image/Cycles/Motovolt Kivo/download (2).jpg" alt="Nexzu Bazinga">
                    <div class="content">

                        <h3>Motovolt Kivo</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (7).jpg" alt="">
                    <div class="content">
                        <h3>Left Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (3).jpg" alt="">
                    <div class="content">
                        <h3>Right Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (5).jpg" alt="">
                    <div class="content">
                        <h3>Rear View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (1).jpg" alt="Motovolt Kivo with carrier">
                    <div class="content">
                        <h3>With carrier</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (4).jpg" alt="Comfy Cusion">
                    <div class="content">
                        <h3>Comfy Cusion</h3>


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
        <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 29,774.00 onwards &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic <br>
        <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 25-70 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;
        <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :- 1 hr &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;
        <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 1-2 People <br>
        <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- Li-ion 0.576 kwh &nbsp;&emsp;&emsp;
        <!-- <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- SUV &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
        <i class="fa-solid fa-bicycle"></i> <strong>Max speed</strong> :- 25kmph
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
                    <td>Kivo Basic- Normal Range</td>
                    <td>₹ 29,774</td>
                    <td> Acceleration (0-25 Kmph) - 9 Sec, Noise - 63 db, Integrated Mud Guards, High Strength Tig Welded Frame, Battery Weight (MR or LR)- 4.8 Kg</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Kivo Standard- Normal Range</td>
                    <td>₹ 30,574</td>
                    <td>Acceleration (0-25 Kmph) - 9 Sec, Noise - 63 db, Electronic Horn, Integrated Mud Guards, High Strength Tig Welded Frame, Battery Weight (MR or LR)- 4.8 Kg</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Kivo Smart- Normal Range</td>
                    <td>₹ 32,825</td>
                    <td>Acceleration (0-25 Kmph) - 9 Sec, Noise - 63 db, Electronic Horn, Integrated Mud Guards, High Strength Tig Welded Frame, Connected Data Features, Battery Weight (MR or LR)- 4.8 Kg</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
                <tr>
                    <td>Kivo Basic- Mid Range</td>
                    <td>₹ 32,900</td>
                    <td>Acceleration (0-25 Kmph) - 9 Sec, Noise - 63 db, Integrated Mud Guards, High Strength Tig Welded Frame, Battery Weight (MR or LR)- 4.8</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
            </table>    
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>The price of Motovolt Kivo in India starts at Rs. 29,774 and goes upto Rs. 42,159. Motovolt Kivo comes with 16 variants which includes Kivo Basic - Normal Range, Kivo Standard - Normal Range. The top variant is Kivo Smart Plus - Long Range Fast Charge which comes at a price tag of Rs. 42,159.
            <span id="dots">...</span><span id="more">
        
         <br><br><strong>Exterior</strong><br>
        
         The Motovolt Kivo is built solidly, yet it feels light due to the use of steel in its frame—keeping the bike solid and lightweight at the same time makes it easy to zip through even against a strong breeze.
         <br><br><strong>Conclusion</strong><br>

         The stylish design, high-quality components, and robust build on the Motovolt Kivo electric bike will provide you with an amazing experience in your commute. Features such as these, make the Motovolt Kivo electric bike ideal for use on smooth as well as rough terrain. Hence, pick up the Motovolt Kivo electric bike today, contribute towards leaving ensuring a sustainable future, and have an amazing commuting experience.
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- For Download Brochure of the Vehicle
    <section style="text-align: center;" id="Brochure">
        <a href="https://nexonev.tatamotors.com/wp-content/themes/tata-nexon/images/Nexon-EV-MAX-Brochure.pdf" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section> -->


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (8).jpg" alt="Black">
                    <div class="content">
                        <h3>Black</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (7).jpg" alt="Pink">
                    <div class="content">
                        <h3>Pink</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (3).jpg" alt="Blue">
                    <div class="content">
                        <h3>Blue</h3>
                    </div>
                </div>                
                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Kivo/download (4).jpg" alt="Orange">
                    <div class="content">
                        <h3>Orange</h3>
                    </div>
                </div>                

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

<!-- Video Information of Vehicles -->
<section class="VIDEO"  id="VIDEO">
    <h3 class="heading">VIDEO  </h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/nYRyMnYSaOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/J6gMqsXmxfI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/28xznuFgU40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
     <br> 

     
<br> <strong>For More Information : </strong> <a href="https://www.motovolt.co/powerful-e-cycle-kivo" target="_blank" >Click Here </a>

</section>

<section class="Test_drive" id="Test_drive">
    <a href="https://www.motovolt.co/?gclid=Cj0KCQiAiJSeBhCCARIsAHnAzT8V9DRgkoShxda628CQgrAQZW047vDds0rqojNm_rF04Dvx-4w7mPAaAi3eEALw_wcB#" class="btn" target="_blank">Book a Test Ride</a>
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