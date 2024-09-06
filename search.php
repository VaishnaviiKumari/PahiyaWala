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
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/logo.jpeg" type="image/png">

    <title>PahiyaWala</title>


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
            <a href="Login/logout.php" class="btn">logout</a>
            <i class="far fa-user"></i> 

    </header>

    <div class="login-form-container">

        <span id="close-login-form" class="fas fa-times"></span>

       

    </div>

    <!-- /* Home Image and Text */ -->


    <section class="home" id="home">

        <h3 style="font-size: xx-large;" >Search your E-Vehicle</h3>

    </section>

        <section >
                    <input style="font-size: xx-large;" type="text" id="myInput" onkeyup="myFunction()" name="search" placeholder="I'm looking for..." class="navbar-form-search">
        </section>

        <section>      
          <div class="">
            <ul id="myUL" >
            <li><a href="Vehicles Info/Atul Elite Plus.php" style="color: black; ">  Atul Elite Plus            </a> </li>
            <li><a href="Vehicles Info/Mahindra Treo Yaari SFT.php"style="color: black; ">Mahindra Treo Yaari SFT</a></li>
            <li><a href="Vehicles Info/Kinetic Safar Smart.php"style="color: black; ">Kinetic Safar Smart            </a></li>
            <li><a href="Vehicles Info/Lohia Comfort F2F.php"style="color: black; ">Lohia Comfort F2F </a></li>
            
            <li><a href="Vehicles Info/Mahindra Treo.php"style="color: black; ">Mahindra Treo            </a></li>
            <li><a href="Vehicles Info/e-shaft.php"style="color: black; ">E-Shaft</a></li>
            <li><a href="Vehicles Info/piaggio_ape_e_city.php"style="color: black; ">Piaggio Ape E-City            </a></li>
            <li><a href="Vehicles Info/BMW i4.php"style="color: black; ">BMW i4            </a></li>

            </ul>
        </div>

    </section>


        <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        </script>








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
                <a href="#"> <i class="fas fa-phone"></i> +91 73586 21555 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91 75602 54500 </a>
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

    <script src="js/script.js"></script>

</body>

</html>