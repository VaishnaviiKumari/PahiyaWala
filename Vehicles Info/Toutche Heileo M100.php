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

    <title>Toutche Heileo M100</title>

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

        <h3>Toutche Heileo M100</h3>
        <img src="../image/Cycles/Toutche Heileo M100/sideview.jpg" class="responsive" alt="">

    </section>


    <section>
        <div class="Vehicle_bar" id="Vehicle_bar">
            <p><b>
                <a href="#Images">Images           </a>
                <a href="#Specifications">Specifications        </a>
                <a href="#Price_Variants">Prices</a>
                <a href="#Summary">Summary</a>
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
                    <img src="../image/Cycles/Toutche Heileo M100/sideview.jpg" alt="#">
                    <div class="content">

                        <h3>SideView</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/crossview.jpg" alt="#">
                    <div class="content">
                        <h3>CrossView</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/crossview2.jpg" alt="#">
                    <div class="content">
                        <h3>CrossView</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/frontview.jpg" alt="#">
                    <div class="content">
                        <h3>FrontView</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/back_crossview.jpg" alt="#">
                    <div class="content">
                        <h3>RearView</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/battery.jpg" alt="#">
                    <div class="content">
                        <h3>Battery</h3>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/battery_indicator.jpg" alt="#">
                    <div class="content">
                        <h3>Battery Indicator</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/topview.jpg" alt="">
                    <div class="content">
                        <h3>TopView</h3>

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
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 48,900.00 onwards &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric with Pedal Assist &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- Upto 80 Kms &nbsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :- 3 hrs &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 1 People&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- Li-ion 36 V &nbsp;&emsp;&emsp;&emsp;<br>
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
                    <td>Toutche Heileo M100 STD</td>
                    <td>₹ 48,900</td>
                    <td>Aluminium Alloy Frame, 60/80 Kms range on Pedal Assist, 7-Speed Shimano Gears,5-Level Power Assist, Detachable Li-ion Battery, LCD Display, Dual Disk Brakes, 60mm-travel Suspension, Walk Assist, Auto power-cut off on Braking</td>
                    <td><a href="#" class="btn">View on Road Price</a></td>
                </tr>
            </table>
        </div>


    </section>

    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>Equipped with an intelligent Controller, 9.6/12.8AH detachable Li-ion battery made of Panasonic cells and a 250W Rear BLDC Hub motor, the Heileo M100 is programmed to give you the best-ride quality on flat and steep terrains. You can get a range
            of 60 or 80 Kms per charge (on pedal-assist mode) depending on the battery variant (9.6AH or 12.8AH) you choose, with a top speed 25 Kmph (Government regulatory requirement)
            <span id="dots">...</span><span id="more">
        
         <br><br>
         <br>
         Heileo M100 frame is engineered to deliver high quality rides and be the 2nd lightest electric mountain bike in the market (21.4-21.8 Kgs) after the M200. Made of 6061 Aluminum alloy, the Heileo M100 is built to endure and coupled with a strong 60mm-travel front suspension fork with a lock-out feature.
         <br><br>
         <br>
         Heileo is not just an excellent electric bicycle but a top quality regular bicycle as well. It gives you a choice of being a regular bicycle when you need it to be, or run on electric modes (pedal-assist or throttle). The electric mode is powered by 5-levels of Power Assist and a right-hand-side Throttle. Please note that the fully-electric throttle mode consumes more energy and reduces the mileage per charge by up to 40%. Toutche recommends the Heileo bikes are used on pedal-assist mode as much as possible, for best experience and mileage.
         <br>

         <br>
         The battery is detachable and comes with a lock, so you can charge it anytime, anywhere. From a safety point of view, the fully electric throttle mode is designed to work only when the bike is in motion (and not from a standstill position) to avoid injuries/damages due to accidental use of throttle while parked inside homes, offices or with people around.
         <br>
         <br>
         Toutche offers the best warranty on its battery in the market - 18 months or 800 charge cycles (whichever is earlier). The electric motor and controller also come with an 18-month warranty and the frame comes with a 2-year warranty. Toutche has service facility available across 18 cities in India for its Heileo bikes (service can be booked directly from Toutche's website in the Service section).

        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/Orange.jpg" alt="#">
                    <div class="content">
                        <h3>Portland Orange</h3>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/sideview.jpg" alt="#">
                    <div class="content">
                        <h3>Spring Green</h3>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>


    </section>



    <!-- Video Information of Vehicles -->
    <section class="VIDEO" id="VIDEO">
        <h3 class="heading">VIDEO </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gMAml0Ihpa0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Vw_rq1IcQzA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <br>
        <br> <strong>For More Information : </strong> <a href="https://toutche.com/heileoM100.html?PID=M100" target="_blank">Click Here </a>

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