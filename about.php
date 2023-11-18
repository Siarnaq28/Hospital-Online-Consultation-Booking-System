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

        .about-container {
            width: 97%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px 0;
            margin-right:40px;  
        }

        .about-container h3 {
            color: #307f30;
            margin: 0;
        }

        .about-container p {
            display: flex;
        }

        .mission-vision-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        
        .mission-vision-container h4{
            color: #307f30;
        }

        .mission, .vision {
            width: 85%; /* Adjust the width as needed */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .mission h4, .vision h4 {
            color = #307f30;
            margin: 0;
        }

        .mission p, .vision p {
            display: flex;
        }

        .department-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .department {
            width: calc(30% - 20px); /* 3 images in each row with some margin between them */
            margin: 10px 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            position: relative;
        }

        .department h3 {
            color: #307f30;
            margin: 0;
        }

        .department p {
            margin-top: 5px;
        }

        .department img {
            width: 100%;
            max-height: 250px; /* Adjust the maximum height as needed */
            height: auto;
        }

        .department-details {
            position: absolute;
            top: 0;
            left: 0;
            display: none;
            background-color: rgba(132,205,220, 0.7);
            color: #fff;
            width: 95%;
            height: 250px;
            text-align: center;
            padding: 10px;
        }

        .department:hover .department-details {
            display: block;
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
        <div class="about-container">
            <h3>About Us</h3>
            <p>Welcome to VitaCare General Hospital, your trusted healthcare provider. We are dedicated to delivering exceptional medical services with a patient-centric approach. Our commitment to quality and compassion sets us apart in the healthcare industry.</p>
        </div>
            <div class="mission-vision-container">
                <div class="mission">
                    <h4>Mission</h4>
                    <p>Our mission is to provide high-quality healthcare services to our patients, focusing on their well-being and satisfaction. We are committed to delivering compassionate care and promoting a healthier community.</p>
                </div>

                <div class="vision">
                    <h4>Vision</h4>
                    <p>Our vision is to become a leading healthcare institution known for innovation, excellence, and patient-centric care. We aim to continuously improve our services and set the standard for healthcare quality.</p>
                </div>
            </div>

            <h3 style="color: #307f30;">Departments</h3>
            <div class="department-container">
                <!-- Department: Anesthesiology -->
                <div class="department">
                    <div class="department-image">
                        <img src="anesthesiology.webp" alt="Anesthesiology Department">
                    </div>
                    <div class="department-details">
                        <h3>Anesthesiology</h3>
                        <p>Our Anesthesiology department provides expert anesthesia care for various medical procedures. Patient safety and comfort are our top priorities.</p>
                    </div>
                </div>

                <!-- Department: Cardiology -->
                <div class="department">
                    <div class="department-image">
                        <img src="cardi.jpg" alt="Cardiology Department">
                    </div>
                    <div class="department-details">
                        <h3>Cardiology</h3>
                        <p>Our Cardiology department is dedicated to providing comprehensive heart care services. Our team of experienced cardiologists and state-of-the-art equipment ensure top-notch cardiac care.</p>
                    </div>
                </div>

                <!-- Department: Dermatology -->
                <div class="department">
                    <div class="department-image">
                        <img src="derma.webp" alt="Dermatology Department">
                    </div>
                    <div class="department-details">
                        <h3>Dermatology</h3>
                        <p>Our Dermatology department focuses on skin health and provides expert care for a variety of dermatological conditions. We offer both medical and cosmetic dermatology services.</p>
                    </div>
                </div>

                <!-- Department: General Medicine -->
                <div class="department">
                    <div class="department-image">
                        <img src="general.jpg" alt="General Medicine Department">
                    </div>
                    <div class="department-details">
                        <h3>General Medicine</h3>
                        <p>General Medicine encompasses a wide range of medical services. Our department offers primary care, diagnosis, and treatment for various health conditions.</p>
                    </div>
                </div>

                <!-- Department: Gynecology and Obstetrics -->
                <div class="department">
                    <div class="department-image">
                        <img src="preg.jpg" alt="Gynecology and Obstetrics Department">
                    </div>
                    <div class="department-details">
                        <h3>Gynecology and Obstetrics</h3>
                        <p>Our Gynecology and Obstetrics department specializes in women's health and offers care for expectant mothers, gynecological exams, and reproductive health services.</p>
                    </div>
                </div>

                <!-- Department: Oncology -->
                <div class="department">
                    <div class="department-image">
                        <img src="onco.jpg" alt="Oncology Department">
                    </div>
                    <div class="department-details">
                        <h3>Oncology</h3>
                        <p>Our Oncology department is committed to providing comprehensive cancer care, including diagnosis, treatment, and support services. We stand with our patients in their fight against cancer.</p>
                    </div>
                </div>

                <!-- Department: Orthopedics -->
                <div class="department">
                    <div class="department-image">
                        <img src="ortho.png" alt="Orthopedics Department">
                    </div>
                    <div class="department-details">
                        <h3>Orthopedics</h3>
                        <p>Our Orthopedics department specializes in the diagnosis and treatment of musculoskeletal conditions, including joint replacements and sports injuries.</p>
                    </div>
                </div>

                <!-- Department: Pathology -->
                <div class="department">
                    <div class="department-image">
                        <img src="patho.jpg" alt="Pathology Department">
                    </div>
                    <div class="department-details">
                        <h3>Pathology</h3>
                        <p>Our Pathology department plays a vital role in disease diagnosis and management. We provide accurate and timely laboratory testing services to support patient care.</p>
                    </div>
                </div>

                <!-- Department: Pediatrics -->
                <div class="department">
                    <div class="department-image">
                        <img src="pedo.jpg" alt="Pediatrics Department">
                    </div>
                    <div class="department-details">
                        <h3>Pediatrics</h3>
                        <p>Our Pediatrics department is dedicated to the health and well-being of children. We provide comprehensive pediatric care, including preventive care, vaccinations, and treatment of childhood illnesses.</p>
                    </div>
                </div>

                <!-- Department: Psychiatry -->
                <div class="department">
                    <div class="department-image">
                        <img src="psych.jpg" alt="Psychiatry Department">
                    </div>
                    <div class="department-details">
                        <h3>Psychiatry</h3>
                        <p>Our Psychiatry department offers mental health services and support for individuals experiencing emotional and psychological challenges. Our team of psychiatrists and therapists provides compassionate care.</p>
                    </div>
                </div>

                <!-- Department: Surgery -->
                <div class="department">
                    <div class="department-image">
                        <img src="surgery.jpg" alt="Surgery Department">
                    </div>
                    <div class="department-details">
                        <h3>Surgery</h3>
                        <p>Our Surgery department is a center of excellence for surgical care. We offer a wide range of surgical services, including general surgery, minimally invasive procedures, and advanced surgical techniques.</p>
                    </div>
                </div>
            </div>

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
