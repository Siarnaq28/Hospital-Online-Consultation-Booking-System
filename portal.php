<html>
<head>
    <title>Patient Portal</title>
</head>
<body>
    <header>
        <h1>Welcome to Your Patient Portal</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="patient-portal.php">Patient Portal</a></li>
        </ul>
    </nav>
    <section id="left-section">
        <img src="patient-photo.jpg" alt="Patient Photo">
        <p>Name: John Doe</p>
        <p>ID: 123456</p>
        <p>Age: 30</p>
        <p>Sex: Male</p>
        <p>Phone Number: 123-456-7890</p>
        <p>Email: john@example.com</p>
    </section>
    <section id="right-section">
        <h2>Previous Consultations</h2>
        <table>
            <tr>
                <th>Date</th>
                <th>Booking ID</th>
                <th>Symptoms</th>
                <th>Doctor Name</th>
                <th>Diagnosis</th>
            </tr>
            <tr>
                <td>2023-01-15</td>
                <td>78901</td>
                <td>Fever, Cough</td>
                <td>Dr. Smith</td>
                <td>Common Cold</td>
            </tr>
            <!-- Add more rows as needed -->
        </table>
        <a href="download-prescription.php">Download Prescription</a>
        <a href="generate-booking-slip.php">Generate Booking Slip</a>
        <h2>Book an Appointment</h2>
        <form>
            <label for="doctor">Choose a Doctor:</label>
            <select id="doctor" name="doctor" required>
                <option value="dr-smith">Dr. Smith</option>
                <!-- Add more options for other doctors -->
            </select><br>

            <label for="time-slot">Choose a Time Slot:</label>
            <select id="time-slot" name="time-slot" required>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <!-- Add more options for time slots -->
            </select><br>

            <label for="symptoms">Symptoms (max 3):</label>
            <input type="text" id="symptoms" name="symptoms" required><br>

            <input type="submit" value="Submit">
        </form>
    </section>
    <footer>
        <p>Contact us at: <a href="contact.php">Contact</a></p>
    </footer>
</body>
</html>
