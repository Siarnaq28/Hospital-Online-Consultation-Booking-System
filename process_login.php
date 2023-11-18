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
    $username = $_POST["username"];
    $password = $_POST["passcode"];

    // SQL query to check patient's login credentials
    $sql = "SELECT * FROM patientdetails WHERE patient_username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Successful login
        session_start(); // Start a new session or resume the existing session
        $_SESSION['username'] = $username; 
        echo '<script>alert("Login successful! You will now be redirected to the Patient Portal.");</script>';
        echo '<script>window.location.href = "patientPortalFront.php";</script>';
        $flag = 1;
        exit;
    } else {
        // Invalid login, show an error message or redirect to a login error page
        echo "Invalid username or password.";
        $flag = 0;
    }
}

// Close the database connection
mysqli_close($conn);
?>
