<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prescription Downloader</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

header {
    background-color: #009CB3;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.logo {
    width: 413px;
    height: 230px;
}

.header-left {
    float: left;
}

.header-right {
    float: right;
}

.patient-details, .doctor-details {
    width: 50%;
    float: left;
    padding: 20px;
    box-sizing: border-box;
    background-color: #fff;
    align-items: right;
    margin: 20px;
}

.horizontal-line {
    clear: both;
    border-top: 1px solid #009CB3;
    margin: 20px 0;
}

h2 {
    color: #009CB3;
}

.symptoms, .diagnosis, .medication {
    width: 50%;
    float: left;
    padding: 20px;
    box-sizing: border-box;
    background-color: #fff;
    margin: 20px;
}

footer {
            background-color: #2494b8;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            height: 100px;
            margin-top: 0px;
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
            <img src="Logo.png" alt="Hospital Logo" class="logo">
        </div>
        <div class="header-right">
            <!-- Add content on the right side of the header if needed -->
        </div>
    </header>

    <?php
    // Establish a database connection
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "vitageneral";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $username = $_SESSION['username'];
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch patient details from the database
    $patientDetailsSql = "SELECT * FROM patientdetails WHERE patient_username = '$username'";
    $patientDetailsResult = $conn->query($patientDetailsSql);
    
    if ($patientDetailsResult && $patientDetailsResult->num_rows > 0) {
        $patientDetails = $patientDetailsResult->fetch_assoc();
    }

    $patIDSql = "SELECT patient_id FROM patientdetails WHERE patient_username = '$username'";
$patIDResult = $conn->query($patIDSql);

if ($patIDResult && $patIDResult->num_rows > 0) {
    $patIDRow = $patIDResult->fetch_assoc();
    $patID = $patIDRow['patient_id'];
}


    // Fetch doctor details from the database
    $doctorDetailsSql = "SELECT * FROM patienthistory WHERE PatientID = '$patID'";
    $doctorDetailsResult = $conn->query($doctorDetailsSql);

    if ($doctorDetailsResult && $doctorDetailsResult->num_rows > 0) {
        $doctorDetails = $doctorDetailsResult->fetch_assoc();
    }

    // Close the database connection
    $conn->close();
    ?>

    <div class="patient-details">
        <h2>Patient Details</h2>
        <p>Patient Name: <?php echo $patientDetails['name'];?></p>
        <p>Patient Age: <?php echo $patientDetails['patient_age'];?></p>
        <p>Patient Sex: <?php echo $patientDetails['sex'];?></p>
        <p>Email ID: <?php echo $patientDetails['email'];?></p>
        <p>Phone Number: <?php echo $patientDetails['phone_number'];?></p>
    </div>

    <div class="doctor-details">
        <h2>Doctor Details</h2>
        <p>Doctor Name: <?php echo $doctorDetails['DoctorName']; ?></p>
        <p>Department: <?php echo $doctorDetails['Department']; ?></p>

    </div>
    
    <div class="horizontal-line"></div>

    <div class="symptoms">
        <h2>Symptoms</h2>
        <p><?php echo $doctorDetails['Symptoms']; ?></p>
        <!-- Add more symptoms details as needed -->
    </div>

    <div class="diagnosis">
        <h2>Diagnosis</h2>
        <p><?php echo $doctorDetails['Diagnosis']; ?></p>
        <!-- Add more diagnosis details as needed -->
    </div>

    <div class="medication">
        <h2>Medication</h2>
        <p><?php echo $doctorDetails['MedicinesPrescribed']; ?></p>
        <!-- Add more medication details as needed -->
    </div>
    
    <div class="horizontal-line"></div>

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
