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
        include('header.html');
        include('sidebar.html');

        include 'connection.php';
        if (isset($_GET['stud_id'])) {
            $stud_id = $_GET['stud_id'];
            $result = mysqli_query($conn, "SELECT * FROM students WHERE stud_id = $stud_id");
            $row = mysqli_fetch_array($result);
        }
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
                            <h4>Edit Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Student</a></li>
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
                                <form action="update-student.php" method="post">
                                <input type="hidden" name="stud_id" value="<?php echo $row['stud_id']; ?>">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Student Name</label>
												<input type="text" name="student_name" value="<?php echo $row['student_name']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Academic Level</label>
												<select name="academic_level" class="form-control">
													<option value="Undergraduate" <?php if($row['academic_level'] == 'Undergraduate') echo 'selected'; ?>>Undergraduate</option>
													<option value="Masters" <?php if($row['academic_level'] == 'Masters') echo 'selected'; ?>>Masters</option>
													<option value="PhD" <?php if($row['academic_level'] == 'PhD') echo 'selected'; ?>>PhD</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label"> Student ID</label>
												<input type="text" name="student_id" value="<?php echo $row['student_id']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Registration Date</label>
												<input name="registration_date" value="<?php echo $row['registration_date']; ?>" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select name="gender" class="form-control">
													<option value="Male" <?php if($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
													<option value="Female" <?php if($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" name="mobile_number" value="<?php echo $row['mobile_number']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Birth</label>
												<input name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" class="datepicker-default form-control" id="datepicker1">
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Supervisor</label>
												<input type="text" name="supervisor" value="<?php echo $row['supervisor']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea name="address_" class="form-control" rows="1"><?php echo $row['address_']; ?></textarea>
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Major</label>
												<input type="text" name="major" value="<?php echo $row['major']; ?>" class="form-control">
											</div>
										</div>
                                        <div class="form-group">
                                                <label class="form-label">Research Status</label>
                                                <select name="student_status" class="form-control">
                                                    <option value="Ongoing" <?php if ($row['student_status'] == 'Ongoing') echo 'selected'; ?>>Ongoing</option>
                                                    <option value="Completed" <?php if ($row['student_status'] == 'Completed') echo 'selected'; ?>>Completed</option>
                                                    <option value="Suspended" <?php if ($row['student_status'] == 'Suspended') echo 'selected'; ?>>Suspended</option>
                                                </select>
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