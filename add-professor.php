<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ResearchFlow | Research Management System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

    <?php
        ob_start();
        include('header.html');
        include('sidebar.html');
    ?>	
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Professor</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="add-professor.html">Professors</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Professor</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Basic Info</h5>
							</div>
							<div class="card-body">
                                <form action="add-professor.php" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Full Name</label>
												<input type="text" name="full_name" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<input type="text" name="address_" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" name="email" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Joining Date</label>
												<input name="joining_date" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">User ID</label>
												<input type="text" name="user_id" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Password</label>
												<input type="password" name="password_" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" name="mobile_number" class="form-control">
											</div>
										</div>										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Designation</label>
												<input type="text" name="designation" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Department</label>
												<select name="department" class="form-control">  
													<option value="Computer Science">Computer Science</option>
													<option value="Electrical">Electrical</option>
													<option value="Mechanical">Mechanical</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Birth</label>
												<input name="date_of_birth" class="datepicker-default form-control" id="datepicker1">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Education</label>
												<input type="text" name="education" class="form-control">
											</div>
										</div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Publications</label>
												<input type="text" name="publications" class="form-control">
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Citations</label>
												<input type="text" name="citations" class="form-control">
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">h-index</label>
												<input type="text" name="h_index" class="form-control">
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group mb-4">
												<label class="form-label">Description</label>
												<textarea name="description_" class="form-control" rows="5"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">Profile Photo<br>
												<input type="file" class="dropify" name="file" data-default-file="">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary" name="submit">Submit</button>
											<button type="button" class="btn btn-light" onclick="history.back()">Cancel</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
	
	<!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>
	
	<!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>

</body>
</html>


<?php

if (isset($_POST['submit'])) {
	$full_name = $_POST['full_name'];
	$address_ = $_POST["address_"];
    $email = $_POST["email"];
	$joining_date = $_POST["joining_date"];
	$user_id = $_POST["user_id"];
	$password_ = $_POST["password_"];
	$mobile_number = $_POST["mobile_number"];
	$designation = $_POST["designation"];
	$department = $_POST["department"];
	$date_of_birth	= $_POST["date_of_birth"];
    $education = $_POST["education"];
    $publications = $_POST["publications"];
    $citations = $_POST["citations"];
    $h_index = $_POST["h_index"];
    $description_ = $_POST["description_"];
	$file_name = $_FILES['file']['name'];

	// Connect to the MySQL database
	include 'connection.php';

	// Insert the project name into the database
    $sql = "INSERT INTO professors (full_name, address_, email, joining_date, user_id, password_, mobile_number, designation, department, date_of_birth, education, publications, citations, h_index, description_, photo) VALUES ('$full_name', '$address_', '$email', '$joining_date', '$user_id', '$password_', '$mobile_number', '$designation', '$department', '$date_of_birth', '$education', '$publications', '$citations', '$h_index', '$description_', '$file_name')";

    if (mysqli_query($conn, $sql)) {
        header("Location: all-professors.php");
        exit();
    } else {
        echo "Error adding record: " . mysqli_error($conn);
    }

	// Close the database connection
	$conn->close();
    ob_end_flush();
}
?>