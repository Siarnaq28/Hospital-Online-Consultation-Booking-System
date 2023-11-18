<?php
// Database credentials
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "vitageneral";
$flag = 0;
// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $patient_username = $_POST["username"];
    $password = $_POST["passcode"];
    $name = $_POST["name"];
    $patient_age = $_POST["age"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone"];

    // SQL query to insert data
    $sql = "INSERT INTO patientdetails (patient_username, password, name, patient_age, sex, email, phone_number)
            VALUES ('$patient_username', '$password', '$name', '$patient_age', '$sex', '$email', '$phone_number')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Registration successful! You will now be redirected to the Login Page.");</script>';
        echo '<script>window.location.href = "patient.php";</script>';
        $flag = 1;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $flag = 0;
    }
}

// Close the database connection
mysqli_close($conn);
if ($flag=1) {
    echo '<script>alert("Registration successful! You will now be redirected to the Login Page.");</script>';
    echo '<script>window.location.href = "patient.php";</script>';
    exit;
} 
?>
