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

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/repair.css">
    <link rel="shortcut icon" href="../image/logo.png" type="image/png">

    <title>Exchange your Batteries</title>

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
        <img data-speed="5" class="home-parallax" src="../Other Services/images/batterycharging.jpg" alt="">
    </section>

    <!-- Icons -->
    <section class="icons-container">

        <div class="icons">
            <i class="fa-solid fa-map-marker"></i>
            <div class="content">
                <h3>150+</h3>
                <p>Active Locations</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-star"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>Ratings</p>
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
                <p>Vehicles Repaired</p>
            </div>
        </div>

    </section>

    <!-- ZipCode -->

    <section class="newsletter">

        <h3>Where do you want to exchange your battery?</h3>

        <p style="color: black; text-align: center; font-size: 2rem;">Our Service executive will arrive at your doorstep!</p>

    </section>
    <br>
    <section class="address" style="background-color: lightgreen;">
        <form action="">
            <div class="container" style="background-color:  lightgreen;">
                <h1>
                    <p style="font-size: 4rem; margin-left: 17rem;">Enter your Address</p>
                </h1>
                <!-- Name -->
                <input type="text" name="" placeholder="Name" style="
        border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">

                <!-- E-mail ID -->
                <input class="email" type="text" name="" placeholder="E-mail ID" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">
                <br>

                <!-- Mobile No. -->
                <input class="mobile_no" type="text" name="" placeholder="Mobile Number" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">

                <!-- Pin Code -->
                <input class="pin_code" type="text" name="" placeholder="Pin Code" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">
                <br>
                <!-- Address -->
                <input class="address" type="text" name="" placeholder="Address" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">

                <!-- Locality -->
                <input class="locality" type="text" name="" placeholder="Locality" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">
                <br>

                <!-- City/District/Town -->
                <input class="city_district_town" type="text" name="" placeholder="City/District/Town" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">

                <!-- State-->
                <input class="state" type="text" name="" placeholder="State" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">
                <br>

                <!-- Landmark -->
                <input class="landmark" type="text" name="" placeholder="Landmark" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">

                <!-- Alternate phone Number -->
                <input class="alternate_phone_number" type="text" name="" placeholder="Alternate Phone Number" style="border: none; margin: 20px;font-family: 'Inter';font-size: 25px;
        outline: none;
        border: none;
        border-bottom: 2px solid black;
        background: lightgreen;">
                <br>
                <br>
                <br>
                <br>
                <!-- Button -->
                <a href="#" class="button" style="position: absolute;
        width: 254px;
        height: 38px;
        top: 115rem;
        left: 105rem;
        background: #1E1E1E;
        box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.3);
        border-radius: 4px;
        font-size: 20px;
        color: #EAEAEA;
        text-decoration: none;
        text-align: center;
        font-size: 2.3rem;">Save</a>

                <p style="position: absolute;
        width: 254px;
        height: 38px;
        top: 120rem;
        left: 105rem;
        border-radius: 4px;
        font-size: 15px;
        color: #ff0000;
        text-decoration: none;
        text-align: center;
        font-size: 2.3rem;">After clicking to 'save'..Sit back and relax! <br>Our customer service will reach out to you</p>


            </div>
        </form>
    </section>

    <br>
    <br>
    <br>
    <br>
    <!-- Reviews -->
    <section class="reviews" id="reviews">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/pic-1.png" alt="">
                    <div class="content">
                        <p>If I can say about a car in one word is fabulous car for every middle class family. It's mileage is better than other petrol and diesel variant. I recommend to buy this car and enjoy the ride.</p>
                        <h3>Vicky Kaushal</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-2.png" alt="">
                    <div class="content">
                        <p>Easy to get the test Drive, the driving experience was very easy and fun although it does feel a bit small when compared to its rivals, Looks are decent not very sporty or classy, performance is on par with its rivals never feels
                            out of control, service cost should be considerably lesser.</p>
                        <h3>Rashmika</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-3.png" alt="">
                    <div class="content">
                        <p>Buying experience is awesome and Dealer also helped us to find the correct model as per requirement. The riding experience is just freaking fantastic and ride quality is awesome as well.</p>
                        <h3>Rahul Verma</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-4.png" alt="">
                    <div class="content">
                        <p>Driving an electric vehicle, or EV, can be a very enjoyable experience. Many people who have made the switch from a traditional gasoline-powered car to an EV have reported that they prefer the smooth and quiet operation of an electric
                            drivetrain.
                        </p>
                        <h3>Senorita</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-5.png" alt="">
                    <div class="content">
                        <p>It was a smooth and efficient drive throughout.However can consider on the price range.The looks were great and the exterior rocked.There could be a mild upgrade on the price part.</p>
                        <h3>Ranchor Das</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-7.jpeg" alt="">
                    <div class="content">
                        <p>The awesome bike I have no words to say about this bike. Performance good Mileage good The look was so nice Driving comfortable Everything of this bike is awesome</p>
                        <h3>Pathaan</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- Contact -->
    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5366368065065!2d76.8491072148019!3d23.0774433849253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Bhopal!5e0!3m2!1sen!2sin!4v1672863431119!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

                <form action="">
                <h3>get in touch</h3>
                <input type="text" placeholder="your name" class="box">
                <input type="email" placeholder="your email" class="box">
                <input type="tel" placeholder="subject" id="Subject" class="box">
                <textarea placeholder="your message" id="Message" class="box" cols="30" rows="10"></textarea>
                <input type="button" value="send message" id="EmailButton" class="btn" onclick="SendMail()">
            </form>

        </div>

    </section>

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
                <a href="Terms and Condition/t&c.html"> <i class="fas fa-arrow-right"></i> Terms and Conditions </a>
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
                <a href="https://www.facebook.com/profile.php?id=100089343104174" target="_blank"> <i class="fab fa-facebook-f" target="_blank"></i> facebook </a>

                <a href="https://twitter.com/Pahiyawala" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>

                <a href="https://www.instagram.com/pahiyawala/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>

                <a href="https://www.linkedin.com/in/pahiya-wala-137073262/" target="_blank"> <i class="fab fa-linkedin" target="_blank"></i> linkedin </a>

                <a href="https://in.pinterest.com/pahiyawala/" target="_blank"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>


    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="../js/script.js"></script>


</body>

</html>