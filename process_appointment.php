<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dept_id = $_POST['dept_id'];
    $symptoms = $_POST['symptoms'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    
    // Connect to the database
    $mysqli = new mysqli("127.0.0.1", "root", "", "vitageneral");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Retrieve patient details
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM patientdetails WHERE patient_username = '$username'";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $patientData = $result->fetch_assoc();
        $patient_id = $patientData['patient_id'];
        $patient_name = $patientData['name'];
    } else {
        echo "Error fetching patient data: " . $mysqli->error;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the department_name from the form
        $department_name = $_POST["dept_id"];
    
        // Query the database to retrieve the doctor_name
        $sql = "SELECT doctor_name FROM doctordetails WHERE department = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $department_name);
        $stmt->execute();
        $stmt->bind_result($doctor_name);
        
        // Fetch the result
        $stmt->fetch();
        $stmt->close();
    
        
    // Insert appointment details into the patienthistory table
    $sql = "INSERT INTO patienthistory (patientID, Date, SlotTiming, Symptoms, Department, DoctorName) 
            VALUES ('$patient_id', '$booking_date', '$booking_time', '$symptoms', '$dept_id', '$doctor_name')";

    if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Booking successful! You will now be redirected back to your Profile.");</script>';
        echo '<script>window.location.href = "patientPortalFront.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
}
?>