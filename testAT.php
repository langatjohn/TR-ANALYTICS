<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/login.css">
    <title>Yield Dashboard</title>
    <style>
        body{
            background-color: green;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Yield Dashboard</h2>

<table>
    <tr>
        <!-- <th>Location</th>
        <th>Ward</th>
        <th>Constituency</th> -->
        <th>Total acre of maize plantation</th>
    </tr>
    <?php
    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "john";

    // Create connection
    $conn = new mysqli($servername = "localhost", $username, $password, $dbname = "john");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch data from the "kim" table
    $sql = "SELECT  AVG(total_average) AS average_yield FROM kim";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            // echo "<td>" . $row["location"]. "</td>";
            // echo "<td>" . $row["ward"]. "</td>";
            // echo "<td>" . $row["constituency"]. "</td>";
            echo "<td>" . $row["average_yield"]. "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 results</td></tr>";
    }
    $conn->close();
    ?>
</table>
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
