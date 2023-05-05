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
        if (isset($_GET['id'])) {
            $proposal_id = $_GET['id'];
            $result = mysqli_query($conn, "SELECT * FROM proposals WHERE id = $proposal_id");
            $proposal = mysqli_fetch_array($result);
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
                            <h4>Edit Proposal</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Proposals</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Proposal</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Proposal Details</h4>
							</div>
							<div class="card-body">
								<form action="update-proposals.php" method="post">
								<input type="hidden" name="id" value="<?php echo $proposal['id']; ?>">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Project Name</label>
												<input type="text" name="project_name" class="form-control" value="<?php echo $proposal['project_name']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Department</label>
												<input type="text" name="department" class="form-control" value="<?php echo $proposal['department']; ?>">
											</div>
										</div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Abstract</label>
												<textarea name="abstract" class="form-control" rows="5"><?php echo $proposal['abstract']; ?></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Project Details</label>
												<textarea name="proposal_details" class="form-control" rows="5"><?php echo $proposal['proposal_details']; ?></textarea>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Starts From</label>
												<input name="starting_date" class="datepicker-default form-control" id="datepicker" value="<?php echo $proposal['starting_date']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Project Duration</label>
												<input type="text" name="project_duration" class="form-control" value="<?php echo $proposal['project_duration']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Budget</label>
												<input type="text" name="budget" class="form-control" value="<?php echo $proposal['budget']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Professor Name</label>
												<input type="text" name="professor_name" class="form-control" value="<?php echo $proposal['professor_name']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Students/Collaborators</label>
												<input type="text" name="collaborators" class="form-control" value="<?php echo $proposal['collaborators']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Contact Number</label>
												<input type="text" name="contact_number" class="form-control" value="<?php echo $proposal['contact_number']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
                                                <label class="form-label">Project Status</label>
                                                <select name="project_status" class="form-control">
                                                    <option value="Ongoing" Ongoing<?php if ($proposal['project_status'] == 'Ongoing') echo 'selected'; ?>>Ongoing</option>
                                                    <option value="Completed" <?php if ($proposal['project_status'] == 'Completed') echo 'selected'; ?>>Completed</option>
                                                    <option value="Suspended" <?php if ($proposal['project_status'] == 'Suspended') echo 'selected'; ?>>Suspended</option>
                                                </select>
                                            </div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Progress</label>
												<input type="text" name="progress" class="form-control" value="<?php echo $proposal['progress']; ?>">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary" name="save">Save</button>
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