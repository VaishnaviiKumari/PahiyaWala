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
    <link rel="stylesheet" href="../css/repair_now.css">
    <link rel="shortcut icon" href="../image/logo.png" type="image/png">

    <title>Buy Insurance</title>


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
        <img data-speed="5" class="home-parallax" src="../Other Services/images/insurance.png" alt="" style="height: 40rem;">
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

    <!-- Prices of Different Varriants  -->
    <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Insurance <span>Companies</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Car Insurance Company</th>
                    <th>Motor OD Claim Settlement Ratio FY20</th>
                    <th>Network Garages</th>
                </tr>
                <tr>
                    <td>IFFCO Tokio General Insurance</td>
                    <td>95.30%</td>
                    <td>4,300+</td>
                    <td><a href="https://www.iffcotokio.co.in/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Royal Sundaram General Insurance</td>
                    <td>92.66%</td>
                    <td>4,600+</td>
                    <td><a href="https://my.royalsundaram.in/car-insurance?utm_source=google&utm_medium=search&utm_campaign=Brand_Product_Car_Exact&utm_content=Car_Insurance&utm_term=royal%20sundaram%20general%20insurance&gclid=CjwKCAiA3KefBhByEiwAi2LDHEEEw5vMctpxVhF5odGIsPH9yb4GbJOvQ7z3A9_o4RNNjBFV2s70CRoCbJwQAvD_BwE"
                            class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>The Oriental Insurance Company</td>
                    <td>92.66%</td>
                    <td>3,100+</td>
                    <td><a href="https://orientalinsurance.org.in/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>HDFC ERGO General Insurance</td>
                    <td>91.76%</td>
                    <td>6,800+</td>
                    <td><a href="https://www.hdfcergo.com/campaigns/all-in-one-product-new?&utm_source=google_search&utm_medium=cpc&utm_campaign=AIO_Search_Brand_Exact&utm_adgroup=HDFC-Ergo-Insurance-General&utm_adid=377555221346&utm_term=hdfc%20ergo%20general%20insurance&utm_network=g&utm_matchtype=e&utm_device=c&utm_location=9299577&utm_sitelink=&utm_placement=&ci=aiogsearch&SEM=1&gclid=CjwKCAiA3KefBhByEiwAi2LDHAeArrs9hXUYjcTdub8_GzKZlfMQuBFuUkeiquiLw-WY-3bs8otNDxoC25IQAvD_BwE"
                            class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Universal Sompo General Insurance</td>
                    <td>91.23%</td>
                    <td>3,500+</td>
                    <td><a href="https://www.universalsompo.com/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Tata AIG General Insurance</td>
                    <td>90.78%</td>
                    <td>5,000+</td>
                    <td><a href="https://www.tataaig.com/?&utm_source=google&utm_medium=cpc&utm_campaign=%7bTAGIC_Brand_Core_Product_Desktop_EM%7d-tata%20aig%20general%20insurance&utm_adgroup=Policy&utm_term=tata%20aig%20general%20insurance&utm_network=g&utm_matchtype=e&utm_device=c&utm_placement=&utm_content=625980230575&utm_Adposition=&utm_location=9299577&utm_Sitelink=&gclid=CjwKCAiA3KefBhByEiwAi2LDHHVT5V0cZUk9TDssPFlHH7xhzIlQEL7FIv4z1NJfMMa-2NW-b5xQFxoCcl0QAvD_BwE&gclsrc=aw.ds"
                            class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>The New India Assurance</td>
                    <td>90.49%</td>
                    <td>3,000+</td>
                    <td><a href="https://www.newindia.co.in/portal/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>SBI General Insurance</td>
                    <td>89.60%</td>
                    <td>16000+</td>
                    <td><a href="https://www.sbigeneral.in/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Bajaj Allianz General Insurance</td>
                    <td>89.51%</td>
                    <td>4,000+</td>
                    <td><a href="https://www.bajajallianz.com/general-insurance.html?utm_source=GoogleBrandBagic&param1=Enhanced_Sitelink&param2=Bajaj_Allianz_General_Insurance+Exact&param3=bajaj%20allianz%20general%20insurance&utm_content=SEM&gclid=CjwKCAiA3KefBhByEiwAi2LDHCNu4OcJNS7V67V269-AJqvd9TBokO4dAq2GePlXQAngPtSFjvTbGhoC1c8QAvD_BwE&gclsrc=aw.ds"
                            class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Future Generali India Insurance</td>
                    <td>88.83%</td>
                    <td>900+</td>
                    <td><a href="https://general.futuregenerali.in/buyonline/Home.html?gclid=CjwKCAiA3KefBhByEiwAi2LDHEnMhwnSmoqb-K4t9_Glho8p-dMPYjsjhmdTwW555aAfmyz9cDIqCBoCTXYQAvD_BwE#/MotorRenew?utm_source=Google&utm_medium=cpc&utm_campaign=Sok_FG_Brand_Search_Motor_06052022&utm_term=future%20generali%20two%20wheeler%20insurance"
                            class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>ICICI Lombard General Insurance</td>
                    <td>87.99%</td>
                    <td>5,200+</td>
                    <td><a href="https://www.icicilombard.com/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Liberty General Insurance</td>
                    <td>87.71%</td>
                    <td>5,600+</td>
                    <td><a href="https://www.libertyinsurance.in/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Cholamandalam MS General Insurance</td>
                    <td>98%</td>
                    <td>4,300+</td>
                    <td><a href="https://www.cholainsurance.com/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>National Insurance Company</td>
                    <td>85.71%</td>
                    <td>7,100+</td>
                    <td><a href="https://nationalinsurance.nic.co.in/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Edelweiss General Insurance</td>
                    <td>84.52%</td>
                    <td>3,100+</td>
                    <td><a href="https://www.edelweissinsurance.com/myaccount/login" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Reliance General Insurance</td>
                    <td>84.26%</td>
                    <td>1,000+</td>
                    <td><a href="https://www.reliancegeneral.co.in/Insurance/Home.aspx?utm_source=google&utm_medium=cpc&utm_campaign=RGI_Search_PureBrand_Exact&gclid=CjwKCAiA3KefBhByEiwAi2LDHIyZR2h2ncmDvYZlyPJaAQc7TZeJ-inQGwSrrF1dCWbyvZwsO7rj5hoC8YsQAvD_BwE"
                            class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Acko General Insurance</td>
                    <td>83.91%</td>
                    <td>3,800+</td>
                    <td><a href="https://www.acko.com/lp/comprehensiveaff/?utm_source=affiliate&utm_medium=native&utm_campaign=affiliate01&utm_term=2_NTV403k&utm_content=2&gclid=CjwKCAiA3KefBhByEiwAi2LDHHRXBlERy2VzIXQOxefR0H1ZpsqHwxtgnrxMFYcVLUuP4CEy9uLZUBoCr7IQAvD_BwE"
                            class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>United India Insurance Company</td>
                    <td>82.93%</td>
                    <td>2,000+</td>
                    <td><a href="https://uiic.co.in/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Kotak Mahindra General Insurance</td>
                    <td>82.81%</td>
                    <td>3,100+</td>
                    <td><a href="https://www.kotakgeneral.com/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Go Digit General Insurance</td>
                    <td>80.47%</td>
                    <td>1,300+</td>
                    <td><a href="https://www.godigit.com/?utm_source=google&utm_medium=cpc&utm_campaign=AO-Brand_Digit_Pure_New_EX&utm_content=Pure_Brand_Core&utm_term=go%20digit%20general%20insurance&gclid=CjwKCAiA3KefBhByEiwAi2LDHKt94Q6RllTS6mah16JT3zVO_2CLKLXYavN_E27eXRtTVfIeilnuSxoCGEUQAvD_BwE"
                            class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Magma HDI General Insurance</td>
                    <td>77.26%</td>
                    <td>1,400+</td>
                    <td><a href="https://www.magmahdi.com/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Shriram General Insurance</td>
                    <td>77.26%</td>
                    <td>4,000+</td>
                    <td><a href="https://www.shriramgi.com/" class="btn" target="_blank">View Plans</a></td>
                </tr>
                <tr>
                    <td>Navi General Insurance</td>
                    <td>76.20%</td>
                    <td>2,000+</td>
                    <td><a href="https://navi.com/health-insurance-plan?utm_source=google&utm_medium=searchad&utm_campaign=GI_website_traffic_brand&gclid=CjwKCAiA3KefBhByEiwAi2LDHB99sO_aK8LO_pNcvITjnnS26wN1hDqlSeErY07KzPZfTId6NMeP_xoCZ6YQAvD_BwE" class="btn"
                            target="_blank">View Plans</a></td>
                </tr>
            </table>
        </div>


    </section>

    <section class="choose_insurance" style="background-color:   #d7f8db">
        <h1 style="font-size: xx-large;">How To Choose The Best Car Insurance Company In India?</h1>
        <p style="font-size:large;">Choosing the right car insurance company in India can be a bit challenging, but with the right information, you can easily find the best one that meets your needs. Here are a few factors to consider when choosing a car insurance company in India.
        </p> <br>
        <h3 style="font-size: x-large;">Financial stability: </h3>
        <p style="font-size:large;">The first and foremost factor to consider is the financial stability of the insurance company. This will help ensure that the company is capable of paying claims in case of an accident or loss. You can research the financial standing of insurance
            companies by checking their ratings and reviews from reliable sources.</p> <br>

        <h3 style="font-size: x-large;">Coverage options:</h3>
        <p style="font-size:large;">It's important to choose an insurance company that offers a wide range of coverage options, including liability coverage, collision coverage, and comprehensive coverage. Make sure to understand the different types of coverage options and select
            the one that best meets your needs.</p> <br>

        <h3 style="font-size: x-large;">Claims process:</h3>
        <p style="font-size:large;">The claim process is an important factor to consider when choosing an insurance company. Make sure the company has a simple and efficient claims process so that you can receive the compensation you're entitled to in a timely manner.</p> <br>

        <h3 style="font-size: x-large;">Customer service:</h3>
        <p style="font-size:large;">Good customer service is crucial when it comes to car insurance. Choose a company that has a reputation for providing excellent customer service and has a dedicated team to help you in case of any questions or issues.</p> <br>

        <h3 style="font-size: x-large;">Price:</h3>
        <p style="font-size:large;">Last but not least, compare the prices of different car insurance companies to find the best one that meets your budget. Keep in mind that the cheapest option may not always be the best choice, as it may not provide adequate coverage.</p> <br>

        <br>
        <p style="font-size:large;">These are a few factors to consider when choosing a car insurance company in India. It's important to do your research and compare the different options before making a final decision.</p>

    </section>
    <br><br>
    <section class="insurance_types" style="background-color:  #d7f8db">
        <h1 style="font-size: xx-large;">Types of Car Insurance Plans Offered By Different Insurance Companies</h1>
        <p style="font-size:large;">In India, there are two main types of car insurance plans offered by insurance companies:
        </p> <br>
        <h3 style="font-size: x-large;">Third-Party Liability Insurance: </h3>
        <p style="font-size:large;">This type of insurance is mandatory by law and covers damages or injuries caused to a third party or their property while operating your vehicle.</p> <br>

        <h3 style="font-size: x-large;">Comprehensive Insurance:</h3>
        <p style="font-size:large;">Comprehensive insurance is an optional insurance that provides coverage for your own vehicle, as well as third-party liability. This type of insurance covers losses or damages to your vehicle caused by events such as accidents, theft, fire, and
            natural disasters.</p> <br>

        <p style="font-size:large;">Within these two main types of insurance, there are various sub-types and options offered by different insurance companies, including:</p> <br>

        <h3 style="font-size: x-large;">Zero Depreciation Cover:</h3>
        <p style="font-size:large;">This type of insurance covers the cost of replacing parts of the vehicle without factoring in depreciation.</p> <br>

        <h3 style="font-size: x-large;">Engine Protector:</h3>
        <p style="font-size:large;">This type of insurance covers damages to the engine caused by events such as floods or earthquakes.</p> <br>

        <br>
        <h3 style="font-size: x-large;">Personal Accident Cover:</h3>
        <p style="font-size:large;">This type of insurance covers medical expenses and compensation in case of an accident</p>

    </section>



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