<?php
session_start(); // Start or resume the session

if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}

// Database connection setup (Replace with your database credentials)
$mysqli = new mysqli("127.0.0.1", "root", "", "vitageneral");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch patient information from the database
$username = $_SESSION['username'];

// Fetch patient information from the database
$sql = "SELECT * FROM patientdetails WHERE patient_username = '$username'";
$result = $mysqli->query($sql);

if ($result && $result->num_rows > 0) {
    $patientData = $result->fetch_assoc();
} else {
    echo "Error fetching patient data: " . $mysqli->error;
}

$mysqli->close(); // Close the database connection
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        /* Header Styles */
        header {
            background-color: #fff;
            color: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            height: 100px;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .header-right {

            display: flex;
            align-items: center;
        }

        .header-contact {
            margin-left: 20px;
        }
        
        .contact-box {
            background-color: #009cb4;
            padding: 5px 25px;
            border-radius: 4px;
            color: #fff;
        }

        .header-contact p {
            margin: 0;
            color: #000;
            transition: color 0.3s; /* Hover effect */
        }


        .header-divider {
            border-left: 1px solid #000;
            height: 30px;
            margin: 0 20px;
        }

        .logo {
            width: 410px;
            height: 230px;
        }
        
        .welcome-dropdown {
            position: relative;
        }

        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown-btn {
            text-decoration: none;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }

        .welcome-dropdown {
            position: relative;
            display: inline-block; /* To allow hovering */
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #307781;
            min-width: 100px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .welcome-dropdown:hover .dropdown-content {
            display: block;
        }

/* Style the rest of the dropdown as in the previous example */


        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #2980b9;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }


        nav {
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            background-color: #009cb4;
            text-align: center;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin: 0 15px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s; /* Hover effect */
        }

        nav a:hover {
            color: #000; /* Color change on hover */
        }

        body {
            background-color: #d3eced; /* Set the background color of the page */
        }

        .container {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        }

        h2 {
            color: #307f30; /* Change the h2 color to #307f30 */
        }

        label {
            display: block;
            margin-top: 10px;
            color: #049cb4; /* Change label color to #049cb4 */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #84cddc; /* Change the border color to #84cddc */
            border-radius: 5px;
        }

        input[type="text"]::placeholder,
        input[type="password"]::placeholder {
            color: #84cddc; /* Change the placeholder color to #84cddc */
        }

        input[type="password"] {
            font-family: 'Arial', sans-serif; /* Change font for password field */
        }

        input[type="submit"] {
            background-color: #009cb4;
            color: #fff;
            padding: 10px 20px;
            margin-top: 50px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #007a8c;
        }

        .register-link {
            margin-top: 0px;
        }

        .admin-link {
            margin-top: 10px;
        }

        /* Footer Styles */
        footer {
            background-color: #2494b8;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            height: 100px;
        }

        .footer-left {
            display: flex;
            align-items: center;
        }

        .footer-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
    </style>
</head>
</head>
<body>
    <header>
        <div class="header-left">
            <div class="header-logo">
                <img src="Logo.png" alt="Hospital Logo" class="logo">
            </div>
        </div>
        <div class="header-right">
            <div class="contact-box">
                <?php
                    $name = $patientData['name'];
                    echo "<div class='welcome-dropdown'>Welcome $name
                        <div class='dropdown-content'>
                            <a href='logout.php'>Log Out</a>
                        </div>
                    </div>";
                ?>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="previous_consultations.php">Previous Bookings</a></li>
            <li><a href="prescription_downloader.php">Prescription Downloader</a></li>
            <li><a href="book_appointment.php">Book an Appointment</a></li>
        </ul>
    </nav>

    <div class="container">
        <section class="left-side">
            <h2>Patient Information</h2>
            <p>Name: <?php echo $patientData['name']; ?></p>
            <p>ID: <?php echo $patientData['patient_id']; ?></p>
            <p>Age: <?php echo $patientData['patient_age']; ?></p>
            <p>Sex: <?php echo $patientData['sex']; ?></p>
            <p>Phone Number: <?php echo $patientData['phone_number']; ?></p>
            <p>Email: <?php echo $patientData['email']; ?></p>
        </section>

    </div>
    <footer>
        <div class="footer-left">
            <p>&copy; 2023 VitaCare General Hospital</p>
        </div>
        <div class="footer-right">
            <p>VitaCare General Hospital<br>123 Hospital St, Bangalore<br>Phone: (+044)4567-3456|3457<br>Email: info@vitacarehospital.com</p>
        </div>
    </footer>
    <!-- Rest of your HTML content here -->

</body>
</html>
