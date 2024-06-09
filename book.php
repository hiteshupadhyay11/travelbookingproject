<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">


</head>

<body>


    <section class="header">

        <a href="home.php" class="logo">TOUR AND TRAVELS</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

        </nav>



        <div id="menu-btn" class="fas fa-bars"></div>


    </section>


    <!--header end-->

    <div class="heading" style="background:url(images/image6.jpg) no-repeat">
        <h1>book now!</h1>
    </div>
    <!--booking section starts-->
    <section class="booking">
        <h1 class="heading-title">book your trip with us!!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name:" name="name">
                </div>
                <div class="inputbox">
                    <span>email :</span>
                    <input type="text" placeholder="enter your e-mail:" name="email">
                </div>
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your Number:" name="phone">
                </div>
                <div class="inputbox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address:" name="address">
                </div>
                <div class="inputbox">
                    <span>where to :</span>
                    <input type="text" placeholder="place your destination:" name="location">
                </div>
                <div class="inputbox">
                    <span>how many:</span>
                    <input type="number" placeholder="no. of guests" name="guests">
                </div>
                <div class="inputbox">
                    <span>arrival :</span>
                    <input type="date" name="arrival">
                </div>
                <div class="inputbox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
    <!--booking section ends-->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-bars"></i>home</a>
                <a href="about.php"><i class="fas fa-bars"></i>about</a>
                <a href="package.php"><i class="fas fa-bars"></i>package</a>
                <a href="book.php"><i class="fas fa-bars"></i>book</a>
            </div>
            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-bars-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-bars-right"></i> About us</a>
                <a href="#"><i class="fas fa-bars-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-bars-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info </h3>
                <a href="#"><i class="fas fa-phone"></i> +917668405563</a>
                <a href="#"><i class="fas fa-phone"></i> +917668405563</a>
                <a href="#"><i class="fas fa-envelope"></i> hiteshupadhyay345@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Mumbai.India-400104</a>
            </div>

            <div class="box">
                <h3>Follow us on:</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-youtube"></i>you tube</a>
            </div>
        </div>

        <div class="credit"> created by <span>HITESH UPADHYAY</span>[All Rights Reserved!]</div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>




</body>

</html>