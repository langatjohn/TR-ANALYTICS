<?php
  session_start();  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
<nav class="content">
        <div class="logo">
            <a href="home.php">TNFAMIS</a>
        </div>
        <div class="nav-links">
            <div><a href="home.php">HOME</a> |</div>
            <div><a href="contact.html">CONTACT</a> |</div>
            <div><a href="about.html">ABOUT</a> |</div>
        </div>
        <div class="register-btn">
            <a href="register.php">SIGN UP</a>
        </div>
    </nav>
     <div class="container">
        <div class="box form-box">
            <?php
                include("php/config.php");
                if(isset($_POST['submit'])){
                    $username = mysqli_real_escape_string($con,$_POST['username']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);

                    $result = mysqli_query($con,"SELECT * FROM kim WHERE username='$username' AND password='$password'") or die("select error");
                    $row = mysqli_fetch_assoc($result);

                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = $row['username'];
                        // $_SESSION['username'] = $row['username'];
                        $_SESSION['village'] = $row['village'];
                        $_SESSION['location'] = $row['location'];
                        $_SESSION['ward'] = $row['ward'];
                        $_SESSION['constituency'] = $row['constituency'];
                        $_SESSION['land_size_on_maize'] = $row['land_size_on_maize'];
                        $_SESSION['land_size_other_crops'] = $row['land_size_other_crops'];
                        $_SESSION['expected_yield'] = $row['expected_yield'];
                        $_SESSION['total_average'] = $row['total_average'];
                        $_SESSION['password'] = $row['password'];
                    }else{
                        echo "<div class='message'>
                              <p>wrong username or password </p>
                                 </div><br>";
                        echo "<a href='index.php'><button class='btn'> login now<button>";
                        }
                        if(isset($_SESSION['valid'])){
                            header("location: home.php");
                        }
                    }else{
                

            ?>
            <div>
            <header></header>
            <div>
            <form action="" method="post">
                <div class="field input">
                    <label for="id username">farmer name</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>

                </div>

                <div class="field input">
                    <label for="password">passsword</label>
                    <input type="password" name="password" id="password"autocomplete="off"  required>

                </div>

                <!-- <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password"autocomplete="off"  required>

                </div> -->

                <div class="login-form">
                    <!-- <label for="submit">username</label> -->
                    <input type="submit" name="submit" class="button" value="login">

                </div>
                <div class="link">
                    dont have account <a href="register.php">signup now</a>
                </div>

            </form>

            </div>           
            </div>
            

        </div>
        <?php } ?>                
     </div>
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