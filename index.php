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

        .main-container {
            display: flex;
            justify-content: space-between;
        }

        .left-container {
            width: 70%;
            padding: 20px;
            text-align: left;
        }

        .left-container h1 {
            margin-top: 2px;
            color: #009cb4; /* Change the h2 color to #307f30 */
            font-size: 98px; /* Adjust the font size as needed */
        }

        .left-container h2 {            
            color: #307f30; /* Change the h2 color to #307f30 */
            font-size: 64px; /* Adjust the font size as needed */
        }

        .left-container h3 {
            margin-top: 5px;
            color: #000; /* Change the h2 color to #307f30 */
            font-size: 24px; /* Adjust the font size as needed */
        }

        .right-container {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px; /* Adjust the height as needed */
            position: relative;
        }

        .carousel-image {
            max-width: 100%; /* Ensure images fit within the container */
            max-height: 100%; /* Ensure images fit within the container */
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
    <div class="main-container">
        <div class="left-container">
            <h2>Welcome to</h2>
            <h1>Vita General Hospital</h1>
            <h3>Empowering Future Health</h3>
        </div>
        <div class="right-container">
            <div class="image-container" id="image-carousel">
                <img src="P1.png" class="carousel-image" alt="Image 1">
            </div>
        </div>
    </div>
        <script>
            const images = ["P1.png", "P2.png", "P3.png", "P4.png", "P5.png"];
            let currentIndex = 0;

            function changeImage() {
                const carousel = document.getElementById("image-carousel");
                carousel.innerHTML = `<img src="${images[currentIndex]}" class="carousel-image" alt="Image ${currentIndex + 1}">`;
                currentIndex = (currentIndex + 1) % images.length;
            }

            // Change the image every 5 seconds
            setInterval(changeImage, 5000);
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
