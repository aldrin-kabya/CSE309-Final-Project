<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="homepage/css/bootstrap.min.css">
    <link rel="stylesheet" href="homepage/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="homepage/css/style.css">


    <title>ResearchFlow</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="homepage/img/research-flow.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a class="btn btn-primary ms-lg-3" href="register.php">Register</a>
            </div>
        </div>
    </nav><!-- //NAVBAR -->

    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">Managing Research Projects Made Easy</h1>
                    <p class="text-white my-3">Research is an integral part of every scientific and academic
                        endeavor, and managing research projects efficiently and effectively
                        is crucial for their success. However, with the increasing volume of
                        data and complex workflows involved in modern research, managing
                        research projects can be a daunting task. This is where ResearchFlow
                        comes in. </p>
                    <a href="login.php" class="btn me-2 btn-primary">Sign In</a>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->

    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">OVERVIEW</h6>
                    <h1>Key Features</h1>
                    <p>ResearchFlow is a web-based platform designed to
                        streamline the management of research projects, allowing
                        researchers to focus on their work and not on administrative tasks.
                        With this system, you can easily manage tasks, organize documents,
                        collaborate with your team, and stay on top of your research projects
                        like never before.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect bounceInUp">
                        <div class="iconbox">
                            <i class='bx bxs-dashboard'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Dashboard</h5>
                        <p>View all the research activities at a glance including publications, funding awarded, research projects, new student list and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-calendar' ></i>
                        </div>
                        <h5 class="mt-4 mb-2">Calender</h5>
                        <p>An advanced all-in-one integrated calender where you can schedule meetings, research deadlines, milestones and events.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-user'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Faculty and Students</h5>
                        <p>View a comprehensive list of professors and students, along with their details and the ability to add or edit new information</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bx-laptop' ></i>
                        </div>
                        <h5 class="mt-4 mb-2">Projects</h5>
                        <p>View all the current projects with the ability to edit information and also add new proposals to the list</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-book-bookmark' ></i>
                        </div>
                        <h5 class="mt-4 mb-2">Publications</h5>
                        <p>View all submitted papers to be published along with the ability to change publication status</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bx-money' ></i>
                        </div>
                        <h5 class="mt-4 mb-2">Funding</h5>
                        <p>View all the submitted appplications for research grants with abilty to track and change status</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- SERVICES -->

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">CONTACT</h6>
                    <h1>Get In Touch</h1>
                    <p>If you have any questions about our services, or if you would like to provide us with feedback, please feel free to contact us using the form below. We will do our best to respond to your message within 24 hours.</p>
                </div>
            </div>

            <form action="index.php" method="post" class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-5">
                    <input type="text" name="email" class="form-control" placeholder="Enter E-mail">
                </div>
                <div class="col-md-10">
                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="col-md-10">
                    <textarea name="message" id="" cols="30" rows="5" class="form-control"
                        placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <button type="submit" class="btn btn-primary" name="submit">Contact</button>
                </div>
            </form>

        </div>
    </section><!-- CONTACT -->

    <footer>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-0" style="text-align: center;">Project by Aldrin Kabya Biswas, ID 2030443</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
	// Retrieve the project name from the form data
	$name = $_POST['name'];
	$email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

	// Connect to the MySQL database
	include 'connection.php';

	// Insert the project name into the database
    $sql = "INSERT INTO contact_info (name_, email, subject_, message_) VALUES ('$name', '$email', '$subject', '$message')";

    // Execute the SQL query
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close the database connection
	$conn->close();
}
?>