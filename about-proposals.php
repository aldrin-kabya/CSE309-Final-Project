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

        <?php        
        // Connect to the MySQL database
        include 'connection.php';

        // Get the proposal ID from the URL
        $proposal_id = $_GET['id'];

        // Fetch the details of the selected proposal from the database
        $query = "SELECT * FROM proposals WHERE id = $proposal_id";
        $result = $conn->query($query);
        $proposal = $result->fetch_assoc();
        ?>
    
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Proposal Details</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Proposals</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Proposal Details</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-3 col-xxl-4 col-lg-4">
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<img class="img-fluid" src="images/others/pic3.jpg" alt="">
									<div class="card-body">
										<h4 class="mb-0"><?php echo $proposal['project_name']; ?></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h2 class="card-title">About Project</h2>
									</div>
									<div class="card-body pb-0">
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Duration</strong>
												<span class="mb-0"><?php echo $proposal['project_duration']; ?></span>
											</li>
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Professor</strong>
												<span class="mb-0"><?php echo $proposal['professor_name']; ?></span>
											</li>
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Budget</strong>
												<span class="mb-0">$<?php echo $proposal['budget']; ?></span>
											</li>
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Submission Date</strong>
												<span class="mb-0"><?php echo $proposal['starting_date']; ?></span>
											</li>
										</ul>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-8">
						<div class="card">
							<div class="card-body">
                                <h4 class="text-primary">Abstract</h4>
								<p class="mb-5"><?php echo $proposal['abstract']; ?></p>
                                <h4 class="text-primary">Proposal Details</h4>
								<p class="mb-5"><?php echo $proposal['proposal_details']; ?></p>
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
</body>
</html>