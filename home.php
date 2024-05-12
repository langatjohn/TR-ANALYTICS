<?php
    session_start();

    include ("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/login.css">
</head>

<body>
    <nav class="content">
     
        <div class="logo">
            <a href="./home.php">TNFAMIS</a>
        </div>
        <div class="nav-links">
            <div><a href="home.php">HOME</a> |</div>
            <div><a href="contact.html">CONTACT</a> |</div>
            <div><a href="about.html">ABOUT</a> |</div>
            <!-- <div> <a href="php/logout.php"> <button class="btn">Log Out</button></a></div> -->
        </div>
        <div class="register-btn">
            <a href="register.php">LOG IN</a>
        </div>
    </nav>

    <section class="container">
        <div>
            <h1>Dashboard</h1>
            <p>Click on the images to view the report. </p>
        </div>
        <div class="container-flex">
            <div class="images">
                <a href="test2.php"><img src="images/products.jpg" alt="" ></a>
                <p>Report of expected <b>maize yield</b></p>
            </div>
            <div class="images">
                <a href="testAT.php"><img src="images/maize field.jpg" alt=""></a>
                <p>Total acre of maize plantation</p>
            </div>
            <div class="images">
                <a href="testO.php"><img src="images/crop plantation.jpg" alt=""></a>
                <p>Report of other crops </p>
            </div>
        </div>

    </section>

    <section class="about">
        <h1>About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At perspiciatis itaque 
            quia voluptates quae. <br>Temporibus, cumque animi iure cum veniam voluptatum nam corporis! 
            Iste porro culpa consequuntur, doloribus nostrum nulla.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At perspiciatis itaque 
                quia voluptates quae. <br>Temporibus, cumque animi iure cum veniam voluptatum nam corporis! 
                Iste porro culpa consequuntur, doloribus nostrum nulla.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At perspiciatis itaque 
                    quia voluptates quae. <br>Temporibus, cumque animi iure cum veniam voluptatum nam corporis! 
                    Iste porro culpa consequuntur, doloribus nostrum nulla.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At perspiciatis itaque 
                        quia voluptates quae. <br>Temporibus, cumque animi iure cum veniam voluptatum nam corporis! 
                        Iste porro culpa consequuntur, doloribus nostrum nulla.</p>
    </section>

    <section class="contact">
        <h1>Get in Touch</h1>
        <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, delectus fugit quam deserunt </i></p>
        <a href="" class="btn">Contact us</a>
    </section>

    <section class="footer">
        <div class="logo">
            <a href="index.html">TNFAMIS</a>
        </div>
        <div class="footer-links">
            <div class="right-links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="left-links">
                <ul>
                    <li><a href="">Privacy policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                </ul>
            </div>
            <div>
                <a href="https://facebook.com/"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://youtube.com/"><i class="fa-brands fa-square-youtube"></i></a>
                <a href="https://x.com/"><i class="fa-brands fa-square-x-twitter"></i></a>
                <a href="https://linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <p>TNFAMIS. Copyright &copy; 2024</p>
    </section>

</body>

</html>