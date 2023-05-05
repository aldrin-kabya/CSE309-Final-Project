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
        if (isset($_GET['grant_id'])) {
            $grant_id = $_GET['grant_id'];
            $result = mysqli_query($conn, "SELECT * FROM grants WHERE grant_id = $grant_id");
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
                            <h4>Grant Application</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Funding</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Apply for Grants</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Project Details</h5>
							</div>
							<div class="card-body">
                                <form action="update-grants.php" method="post">
								<input type="hidden" name="grant_id" value="<?php echo $row['grant_id']; ?>">
								<input type="hidden" name="grant_number" value="<?php echo $row['grant_number']; ?>">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Project Title</label>
												<input type="text" name="project_title" value="<?php echo $row['project_title']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Pricipal Investigator</label>
												<input type="text" name="principal_investigator" value="<?php echo $row['principal_investigator']; ?>" class="form-control">
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group mb-4">
												<label class="form-label">Project Summary</label>
												<textarea name="project_summary" class="form-control" rows="5"><?php echo $row['project_summary']; ?></textarea>
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group mb-4">
												<label class="form-label">Project Description</label>
												<textarea name="project_description" class="form-control" rows="5"><?php echo $row['project_description']; ?></textarea>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Department</label>
												<select name="department" class="form-control">  
													<option value="Computer Science" <?php if($row['department'] == 'Computer Science') echo 'selected'; ?>>Computer Science</option>
													<option value="Electrical" <?php if($row['department'] == 'Electrical') echo 'selected'; ?>>Electrical</option>
													<option value="Mechanical" <?php if($row['department'] == 'Mechanical') echo 'selected'; ?>>Mechanical</option>
												</select>
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Timeline</label>
												<input type="text" name="timeline" value="<?php echo $row['timeline']; ?>" class="form-control">
											</div>
										</div>				
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Budget</label>
												<input type="text" name="budget" value="<?php echo $row['budget']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group mb-4">
												<label class="form-label">Starting Date</label>
												<input name="application_date" value="<?php echo $row['application_date']; ?>" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group mb-4">
												<label class="form-label">Funding Agency</label>
												<select name="funding_agency" class="form-control">
													<option value="Google Research" <?php if($row['funding_agency'] == 'Google Research') echo 'selected'; ?>>Google Research</option>
													<option value="Microsoft Research" <?php if($row['funding_agency'] == 'Microsoft Research') echo 'selected'; ?>>Microsoft Research</option>
													<option value="IBM Research" <?php if($row['funding_agency'] == 'IBM Research') echo 'selected'; ?>>IBM Research</option>
                                                    <option value="Intel Labs" <?php if($row['funding_agency'] == 'Intel Labs') echo 'selected'; ?>>Intel Labs</option>
                                                    <option value="Facebook Research" <?php if($row['funding_agency'] == 'Facebook Research') echo 'selected'; ?>>Facebook Research</option>
                                                    <option value="AWS Research" <?php if($row['funding_agency'] == 'AWS Research') echo 'selected'; ?>>AWS Research</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group mb-4">
												<label class="form-label">Grant Status</label>
												<select name="project_status" class="form-control">
													<option value="Pending" <?php if($row['project_status'] == 'Pending') echo 'selected'; ?>>Pending</option>
													<option value="Awarded" <?php if($row['project_status'] == 'Awarded') echo 'selected'; ?>>Awarded</option>
													<option value="Rejected" <?php if($row['project_status'] == 'Rejected') echo 'selected'; ?>>Rejected</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Project Impact</label>
												<textarea name="project_impact" class="form-control" rows="5"><?php echo $row['project_impact']; ?></textarea>
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

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
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
	$project_title = $_POST['project_title'];
	$principal_investigator = $_POST["principal_investigator"];
    $grant_number = '#' . rand(10000, 99999);
	$project_summary = $_POST["project_summary"];
	$project_description = $_POST["project_description"];
	$department = $_POST["department"];
	$timeline = $_POST["timeline"];
	$budget = $_POST["budget"];
	$application_date = $_POST["application_date"];
	$funding_agency	= $_POST["funding_agency"];
    $supporting_documents = $_POST["supporting_documents"];
    $project_status = $_POST["project_status"];
    $project_impact = $_POST["project_impact"];

	// Connect to the MySQL database
	include 'connection.php';

	// Insert the project name into the database
    $sql = "INSERT INTO grants (project_title, principal_investigator, grant_number, project_summary, project_description, department, timeline, budget, application_date, funding_agency, supporting_documents, project_status, project_impact) VALUES ('$project_title', '$principal_investigator', '$grant_number', '$project_summary', '$project_description', '$department', '$timeline', '$budget', '$application_date', '$funding_agency', '$supporting_documents', '$project_status', '$project_impact')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error adding record: " . mysqli_error($conn);
    }

	// Close the database connection
	$conn->close();
}
?>