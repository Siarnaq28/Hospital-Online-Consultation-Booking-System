<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book an Appointment</title>
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

        .header-logo {
            padding: 10px;
        }

        .logo {
            width: 410px;
            height: 230px;
        }

        h1 {
            color: #000;
            text-align: center;
        }

        form {
            text-align: left;
        }

        select, input[type="text"], input[type="date"] {
            width: 70%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        select {
            background-color: #1F3223;
            color: #009CB3;
        }

        input[type="text"], input[type="date"] {
            background-color: #1F3223;
            color: #009CB3;
            width: 60%;
        }

        input[type="submit"] {
            background-color: #009CB3;
            color: #09120D;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
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
            margin-top: 70px;
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
    </header>
    <h1>Book an Appointment</h1>
    <form action="process_appointment.php" method="post">
        <?php
        
        $username = $_SESSION['username'];

        // Connect to the database and fetch patient details
        $mysqli = new mysqli("127.0.0.1", "root", "", "vitageneral");

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $sql = "SELECT * FROM patientdetails WHERE patient_username = '$username'";
        $result = $mysqli->query($sql);

        if ($result && $result->num_rows > 0) {
            $patientData = $result->fetch_assoc();
        } else {
            echo "Error fetching patient data: " . $mysqli->error;
        }
        
        // Fetch departments from the doctordetails table
        $departmentOptions = "";
        $deptSql = "SELECT DISTINCT department FROM doctordetails";
        $deptResult = $mysqli->query($deptSql);

        if ($deptResult && $deptResult->num_rows > 0) {
            while ($row = $deptResult->fetch_assoc()) {
                $departmentOptions .= "<option value='" . $row['department'] . "'>" . $row['department'] . "</option>";
            }
        } else {
            echo "Error fetching department data: " . $mysqli->error;
        }

        // Close the database connection
        $mysqli->close();
        ?>
        <!-- Display patient details and the form fields -->
        <p>Patient Name: <?php echo $patientData['name']; ?></p>
        <p>Choose Department:
            <select name="dept_id">
                <?php echo $departmentOptions; ?>
            </select>
        </p>
        <p>Symptoms (Max 3): <input type="text" name="symptoms" required></p>
        <p>Choose Date: <input type="date" name="booking_date" required></p>
        <label for="booking_time">Choose Time:</label>
            <select name="booking_time" id="booking_time" required>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
            </select>
        <input type="submit" value="Book Appointment">
    </form>
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
