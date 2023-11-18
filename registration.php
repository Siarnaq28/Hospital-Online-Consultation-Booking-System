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
        body {
            font-family: Arial, sans-serif;
            background-color: #d3eced;
            text-align: center;
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

        h1 {
            color: #307f30; /* Change the h1 color to #307f30 */
        }

        label {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            color: #049cb4; /* Change label color to #049cb4 */
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 70%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #84cddc; /* Change the border color to #84cddc */
            border-radius: 5px;
        }

        input[type="text"]::placeholder,
        input[type="password"]::placeholder,
        input[type="email"]::placeholder {
            color: #84cddc; /* Change the placeholder color to #84cddc */
        }

        input[type="password"] {
            font-family: 'Arial', sans-serif; /* Change font for password field */
        }

        input[type="submit"] {
            background-color: #009cb4;
            color: #fff;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #007a8c;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-left">
            <div class="header-logo">
                <img src="Logo.png" alt="Hospital Logo" class="logo">
            </div>
        </div>
        <div class="header-right">
            <div class="contact-box">
                <p>Emergency: 1987</p>
                <p>Contact: 1860-455-5677</p>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="patient.php">Patient Login</a></li>
        </ul>
    </nav>
    <!-- Main Content Section -->
    <section>
        <div class="container">
            <h1>Patient Registration</h1>
            <form action="register.php" method="post" id="registration-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="passcode">Password:</label>
                <input type="text" id="passcode" name= "passcode" required><br> <!-- Fix the name attribute -->
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" required><br>
                <label>Sex:</label>
                <label for="male">Male</label>
                <input type="radio" id="male" name="sex" value="Male" required>
                <label for="female">Female</label>
                <input type="radio" id="female" name="sex" value="Female" required>
                <label for="others">Others</label>
                <input type="radio" id="others" name="sex" value="Others" required>

                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <input type="submit" value="Register">
            </form>
        </div>
    </script>
    </section>

    <!-- Footer Section -->
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
