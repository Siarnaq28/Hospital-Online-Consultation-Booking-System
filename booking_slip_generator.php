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

    // Fetch the list of available booking IDs
    $sql = "SELECT BookingID FROM patienthistory";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<form action='booking_slip_generator.php' method='get'>";
        echo "Choose a Booking: ";
        echo "<select name='booking_id'>";
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['BookingID'] . "'>" . $row['BookingID'] . "</option>";
        }
        echo "</select>";
        echo "<input type='submit' value='Generate Booking Slip'>";
        echo "</form>";
    } else {
        echo "No bookings found.";
    }

// Fetch the booking details from the database
$sql = "SELECT * FROM patienthistory WHERE BookingID = $booking_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Generate the booking slip
    $booking_slip = "Booking Slip\n";
    $booking_slip .= "Booking ID: " . $row['BookingID'] . "\n";
    $booking_slip .= "Patient ID: " . $row['patientID'] . "\n";
    $booking_slip .= "Date: " . $row['Date'] . "\n";
    $booking_slip .= "Slot Timing: " . $row['SlotTiming'] . "\n";
    $booking_slip .= "Symptoms: " . $row['Symptoms'] . "\n";
    $booking_slip .= "Doctor Name: " . $row['DoctorName'] . "\n";
    $booking_slip .= "Diagnosis: " . $row['Diagnosis'] . "\n";
    $booking_slip .= "Medicines Prescribed: " . $row['MedicinesPrescribed'];

    // Output the booking slip
    header("Content-Type: text/plain");
    header("Content-Disposition: attachment; filename=booking_slip.txt");
    echo $booking_slip;
} else {
    echo "Booking not found.";
}

// Close the database connection
$conn->close();
?>
