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
	<!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

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
                            <h4>All Professors</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Professors</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Professors</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills mb-3">
							<a href="add-professor.php" class="btn btn-primary">+ Add new</a>
						</ul>
						<div class="row tab-content">
							<div class="row">								

							<?php
								// Connect to the MySQL database
								include 'connection.php';

								// Check if the delete button was clicked
								if (isset($_POST['delete'])) {
									$id = $_POST['id'];
									mysqli_query($conn, "DELETE FROM professors WHERE prof_id='$id'");
								}

								// Execute SQL query
								$result = mysqli_query($conn, "SELECT * FROM professors");

								// Check if any records were returned
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										echo '
										<div class="col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="card card-profile">
												<div class="card-header justify-content-end pb-0">
													<div class="dropdown">
														<button class="btn btn-link" type="button" data-toggle="dropdown">
															<span class="dropdown-dots fs--1"></span>
														</button>
														<div class="dropdown-menu dropdown-menu-right border py-0">
															<div class="py-2">
																<form method="post">
																<input type="hidden" name="id" value="' . $row['prof_id'] . '">
																<a class="dropdown-item" href="edit-professor.php?prof_id='.$row["prof_id"].'">Edit</a>
																<button type="submit" class="dropdown-item text-danger" name="delete">Delete</button>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body pt-2">
													<div class="text-center">
														<div class="profile-photo">
															<img src="images/profile/'.$row["photo"].'" width="100" class="img-fluid rounded-circle" alt="">
														</div>
														<h3 class="mt-4 mb-1">'.$row["full_name"].'</h3>
														<p class="text-muted">'.$row["education"].'</p>
														<ul class="list-group mb-3 list-group-flush">
															<li class="list-group-item px-0 d-flex justify-content-between">
																<span class="mb-0">Designation :</span><strong>'.$row["designation"].'</strong></li>
															<li class="list-group-item px-0 d-flex justify-content-between">
																<span class="mb-0">Phone No. :</span><strong>'.$row["mobile_number"].'</strong></li>
															<li class="list-group-item px-0 d-flex justify-content-between">
																<span class="mb-0">Email:</span><strong>'.$row["email"].'</strong></li>
															<li class="list-group-item px-0 d-flex justify-content-between">
																<span class="mb-0">Address:</span><strong>'.$row["address_"].'</strong></li>
														</ul>
														<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.php?prof_id='.$row["prof_id"].'">Read More</a>
													</div>
												</div>
											</div>
										</div>';
									}
								} else {
									echo "0 results";
								}
								
								$conn->close();
								?>

							</div>
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
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
	
    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
	
</body>
</html>