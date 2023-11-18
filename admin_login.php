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
        <!-- Your main content goes here -->
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
