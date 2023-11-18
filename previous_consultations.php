<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Previous Bookings</title>
    <style>
        body {
            background-color: #d3eced;
            color: #000;
            font-family: Arial, sans-serif;
        }

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
        table {
        width: 100%;
        border-collapse: collapse;
        background-color: #09120D;
        color: #009CB3;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #009CB3;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #fff;
    }

    tr:nth-child(odd) {
        background-color: #fff;
    }

    th, td {
        border: 1px solid #009CB3;
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
            margin-top: 100px;
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
                    echo "<div class='welcome-dropdown'>Profile
                        <div class='dropdown-content'>
                            <a href='patientPortalFront.php'>Go Back</a>
                        </div>
                    </div>";
                ?>
            </div>
        </div>
    </header>
    <h1>Previous Bookings</h1>
    <?php
    // Establish a database connection
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "vitageneral";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_SESSION['username'];
    $patIDSql = "SELECT patient_id FROM patientdetails WHERE patient_username = '$username'";
    $patIDResult = $conn->query($patIDSql);

    if ($patIDResult && $patIDResult->num_rows > 0) {
        $patIDRow = $patIDResult->fetch_assoc();
        $patID = $patIDRow['patient_id'];
        }
    // Fetch data from the patienthistory table
    $sql = "SELECT * FROM patienthistory WHERE PatientID = '$patID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Patient ID</th><th>Date</th><th>Slot Timing</th><th>Symptoms</th><th>Department</th><th>Doctor</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["PatientID"] . "</td>";
            echo "<td>" . $row["Date"] . "</td>";
            echo "<td>" . $row["SlotTiming"] . "</td>";
            echo "<td>" . $row["Symptoms"] . "</td>";
            echo "<td>" . $row["Department"] . "</td>";
            echo "<td>" . $row["DoctorName"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo '<script>alert("No Previous Cosultations! You will now be redirected back to your Profile.");</script>';
        echo '<script>window.location.href = "patientPortalFront.php";</script>';
    }

    // Close the database connection
    $conn->close();
    ?>
    <footer>
        <div class="footer-left">
            <p>&copy; 2023 VitaCare General Hospital</p>
        </div>
        <div class="footer-right">
            <p>VitaCare General Hospital<br>123 Hospital St, Bangalore<br>Phone: (+044)4567-3456|3457<br>Email: info@vitacarehospital.com</p>
        </div>
    </footer>
</body>
</html>
