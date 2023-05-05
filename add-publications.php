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
                            <h4>Add Publication</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Publications</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Publication</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Add Publication</h4>
							</div>
							<div class="card-body">
								<form action="add-publications.php" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Publication Title</label>
												<input type="text" name="publication_title" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Publisher</label>
												<select name="publisher" class="form-control">
													<option value="IEEE">IEEE</option>
													<option value="Springer">Springer</option>
													<option value="ACM">ACM</option>
													<option value="Elsevier">Elsevier</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Author(s)</label>
												<input type="text" name="authors" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Notes</label>
												<input type="text" name="notes" class="form-control">
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
												<label class="form-label">Publication Type</label>
												<select name="publication_type" class="form-control">
                                                    <option value="Conference">Conference</option>
													<option value="Journal">Journal</option>
													<option value="Book">Book</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Submission Date</label>
												<input  name="submission_date" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Keywords</label>
												<input name="keywords" type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Publication Status</label>
												<select name="publication_status" class="form-control">
													<option value="Submitted">Submitted</option>
													<option value="Under Review">Under Review</option>
                                                    <option value="Accepted">Accepted</option>
                                                    <option value="Published">Published</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Abstract</label>
												<textarea name="abstract" class="form-control" rows="5"></textarea>
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
	// Retrieve the project name from the form data
	$publication_title = $_POST['publication_title'];
	$publisher = $_POST["publisher"];
	$authors = $_POST["authors"];
	$notes = $_POST["notes"];
	$department = $_POST["department"];
	$publication_type = $_POST["publication_type"];
	$submission_date = $_POST["submission_date"];
	$keywords = $_POST["keywords"];
	$publication_status	= $_POST["publication_status"];
    $abstract = $_POST["abstract"];

	// Connect to the MySQL database
	include 'connection.php';

	// Insert the project name into the database
    $sql = "INSERT INTO publications (publication_title, publisher, authors, notes, department, publication_type, submission_date, keywords, publication_status, abstract) VALUES ('$publication_title', '$publisher', '$authors', '$notes', '$department', '$publication_type', '$submission_date', '$keywords', '$publication_status', '$abstract')";

    if (mysqli_query($conn, $sql)) {
        header("Location: all-publications.php");
        exit();
    } else {
        echo "Error adding record: " . mysqli_error($conn);
    }

	// Close the database connection
	$conn->close();
    ob_end_flush();
}
?>