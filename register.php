<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style/login.css">
    <!-- font awesome icons go here  -->
</head>

<body>
    <nav class="content">
        <div class="logo">
            <a href="home.html">TNFAMIS</a>
        </div>
        <div class="nav-links">
            <div><a href="home.html">HOME</a> |</div>
            <div><a href="contact.html">CONTACT</a> |</div>
            <div><a href="about.html">ABOUT</a> |</div>
        </div>
        <div class="register-btn">
            <a href="login.php">LOG IN</a>
        </div>
    </nav>
    <div class="container">
        <div class="box form-box">
            <header>Register farmer</header>
            <form action="" method="post">
                <?php
        include("php/config.php");
        if(isset($_POST['submit'])){
            // Retrieve form data
            $username = $_POST['username'];
            $passport = $_POST['passport'];
            $village = $_POST['village'];
            $location = $_POST['location'];
            $ward = $_POST['ward'];
            $constituency = $_POST['constituency']; // Retrieve selected constituency
            $land_size_on_maize = $_POST['land_size_on_maize'];
            $expected_yield = $_POST['expected_yield'];
            $land_size_other_crops = $_POST['land_size_other_crops']; 
            $total_average = $_POST['total_average'];
            $password = $_POST['password'];
        
            // Verify unique username
            $verify_query = mysqli_query($con,"SELECT * FROM kim WHERE username ='$username'");
            if(mysqli_num_rows($verify_query) != 0){
                echo "<div class='message'>
                        <p>This username is already used, please choose another one!</p>
                      </div><br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go back</button>";
            } else {
                // Insert data into the database
                mysqli_query($con,"INSERT INTO kim(username, passport, village, location, ward, constituency, land_size_on_maize, expected_yield, land_size_other_crops, total_average, password) 
                                VALUES('$username','$passport', '$village', '$location', '$ward', '$constituency', '$land_size_on_maize','$expected_yield','$land_size_other_crops','$total_average','$password')") or die("Error occurred");
        
                // Display success message
                echo "<div class='message'>
                        <p>Registration successful</p>
                      </div><br>";
        
                // Redirect to login page
                header("location: login5.php");
                exit; // Make sure to exit after header redirection
            }
        }else
        {

        ?>
                <div class="field input">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" id="username" autocomplete="off" placeholder="kevin doe">

                </div>

                <div class="field input">
                    <label for="passport">Passport/ID</label><br>
                    <input type="number" name="passport" id="passport" autocomplete="off" placeholder="12345678">

                </div>

                <div class="field input">
                    <label for="village">Village</label><br>
                    <input type="text" name="village" id="village" autocomplete="off" placeholder="kibomet">

                </div>

                <div class="field input">
                    <label for="location">Location</label><br>
                    <input type="text" name="location" id="location" placeholder="location">

                </div>
                <div class="field input">
                    <label for="ward">Ward</label><br>
                    <input type="text" name="ward" id="ward" placeholder="ward">

                </div>
                <div class="field input">
                         <label for="constituency">Constituency</label><br>
                            <select name="constituency" id="constituency">
                             <option value="saboti">Saboti</option>
                             <option value="endebess">Endebess</option>
                             <option value="kiminini">Kiminini</option>
                             <option value="kwanza">Kwanza</option>
                             <option value="cherangany">Cherangany</option>
                            </select>
                </div>
                <div class="field input">
                    <label for="land_size_on_maize">Land size on maize</label><br>
                    <input type="number" name="land_size_on_maize" id="land_size_on_maize" placeholder="100 acres">

                </div>
                <div class="field input">
                    <label for="expected_yield">Expected yield</label><br>
                    <input type="number" name="expected_yield" id="expected_yield" placeholder="1000 bags">

                </div>
                <div class="field input">
                    <label for="land_size_other_crops">Land size on other crops</label><br>
                    <input type="number" name="land_size_other_crops" id="land_size_other_crops" placeholder="100 acres">

                </div>
                <div class="field input">
                    <label for="total_average">Total average of land</label><br>
                    <input type="number" name="total_average" id="total_average" placeholder="1000 acres">

                </div>
                <div class="field input">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password">

                </div>
                <div>
                    <span class="small">By continuing you are agreeing to our <a href="">Privacy policy </a>and our <a
                            href="">Terms and Conditions</a></span>
                </div>

                <div class="field">
                    <!-- <label for="submit">username</label> -->
                    <button type="submit" name="submit">Submit</button>

                </div>
                <div class="link">
                    <span>Already a member? <a href="login.html">Sign in</a></span>
                </div>
            </form>
            <?php } ?>
        </div>

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