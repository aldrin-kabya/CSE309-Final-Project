<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ResearchFlow | Research Management System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/jqvmap/css/jqvmap.min.css">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin-2.css">

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
                <div class="row">
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-primary overflow-hidden">
							<div class="card-header">
								<h3 class="card-title text-white">Funding Sources</h3>
								<h5 class="text-white mb-0"><span style="font-size: 32px;">6</span></h5>
							</div>
						</div>
					</div>

                    <?php
                        include 'connection.php';

                        $query = "SELECT SUM(citations) AS total_citations FROM professors";
                        $result = $conn->query($query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $total_citations = $row['total_citations'];
                        } else {
                            $total_citations = 0;
                        }
                    ?>

					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-success overflow-hidden">
							<div class="card-header">
								<h3 class="card-title text-white">Total Citations</h3>
								<h5 class="text-white mb-0"><span style="font-size: 32px;"><?php echo $total_citations; ?></span></h5>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-secondary overflow-hidden">
							<div class="card-header pb-3">
								<h3 class="card-title text-white">Average H-index</h3>
								<h5 class="text-white mb-0"><span style="font-size: 32px;">
                                <?php
                                    // Query to calculate the average h-index
                                    $query = "SELECT AVG(h_index) AS average_h_index FROM professors";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo round($row['average_h_index']);
                                ?>
                                </span></h5>
							</div>
						</div>
					</div>

                    <?php
                        // Connect to the MySQL database
                        include 'connection.php';

                        // Calculate the number of grants awarded
                        $query = "SELECT COUNT(*) AS total_awarded FROM grants WHERE project_status = 'Awarded'";
                        $result = $conn->query($query);
                        $row = mysqli_fetch_assoc($result);
                        $total_awarded = $row['total_awarded'];

                        // Calculate the total number of grants
                        $query = "SELECT COUNT(*) AS total_grants FROM grants";
                        $result = $conn->query($query);
                        $row = mysqli_fetch_assoc($result);
                        $total_grants = $row['total_grants'];

                        // Calculate the funding success rate
                        if ($total_grants > 0) {
                            $success_rate = round(($total_awarded / $total_grants) * 100) . '%';
                        } else {
                            $success_rate = 'N/A';
                        }
                    ?>

					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-danger overflow-hidden">
							<div class="card-header pb-3">
								<h3 class="card-title text-white">Funding Success Rate</h3>
								<h5 class="text-white mb-0"><span style="font-size: 32px;"><?php echo $success_rate; ?> </span></h5>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-6 col-sm-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Research Publications</h3>
							</div>
							<div class="card-body">
								<canvas id="barChart_2"></canvas>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-6 col-sm-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Funding Awarded</h3>
							</div>
							<div class="card-body">
								 <canvas id="areaChart_1"></canvas>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-xxl-8 col-lg-8 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Research Projects</h5>
                            </div>
                            <div class="card-body">
                                <div class="widget-todo dz-scroll" style="height:370px;" id="DZ_W_Projects">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Project</th>
                                                <th scope="col">Assigned Professors</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php
                                            // Connect to the MySQL database
                                            include 'connection.php';

                                            $query = "SELECT * FROM proposals";
                                            $result = $conn->query($query);

                                            if (mysqli_num_rows($result) > 0) {
                                                $serial_no = 1;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>';
                                                    echo '<td><strong>' . $serial_no++ . '</strong></td>';
                                                    echo '<td>' . $row['project_name'] . '</td>';
                                                    echo '<td>' . $row['professor_name'] . '</td>';
                                                    ?>
                                                        <td>
                                                            <?php
                                                            $status = $row['project_status'];
                                                            if ($status == "Completed") {
                                                                echo '<span class="badge badge-rounded badge-primary text-white">' . $status . '</span>';
                                                            } elseif ($status == "Ongoing") {
                                                                echo '<span class="badge badge-rounded badge-warning">' . $status . '</span>';
                                                            } else {
                                                                echo '<span class="badge badge-rounded badge-danger">' . $status . '</span>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <?php
                                                                $status = $row['project_status'];
                                                                $progress_bar_class = '';
                                                                if ($status == "Completed") {
                                                                    $progress_bar_class = 'bg-primary';
                                                                } elseif ($status == "Suspended") {
                                                                    $progress_bar_class = 'bg-danger';
                                                                } elseif ($status == "Ongoing") {
                                                                    $progress_bar_class = 'bg-warning';
                                                                }
                                                                ?>
                                                                <div class="progress-bar <?php echo $progress_bar_class; ?>" style="width: <?php echo $row['progress']; ?>%;" role="progressbar">
                                                                    <span class="sr-only"><?php echo $row['progress']; ?>% Complete</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Notifications</h4>
                            </div>
                            <div class="card-body"> 
                                <div class="widget-todo dz-scroll" style="height:370px;" id="DZ_W_Notifications">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic1.jpg">
												<div class="col">
													<h5 class="mb-1">Paper accepted for publication</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic2.jpg">
												<div class="col">
													<h5 class="mb-1">Meeting rescheduled to tomorrow</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic3.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder: Draft report due</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge success"></div>
											<a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic4.jpg">
												<div class="col">
													<h5 class="mb-1">Data collection deadline extended</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div>
											<a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic5.jpg">
												<div class="col">
													<h5 class="mb-1">New research collaboration opportunity</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic6.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder: Final Report Submission</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic7.jpg">
												<div class="col">
													<h5 class="mb-1">Funding application approved</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge danger"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic8.jpg">
												<div class="col">
													<h5 class="mb-1">Peer review completed</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic9.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder: Upcoming research presentation</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge warning"></div>
											<a class="timeline-panel text-muted d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic10.jpg">
												<div class="col">
													<h5 class="mb-1">Research article published</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
						</div>
					</div>
					<div class="col-lg-12">
                        <div class="card">
							<div class="card-header">
                                <h4 class="card-title">New Student List </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped">
                                        <thead>
                                            <tr>
												<th class="px-5 py-3">Name</th>
                                                <th class="py-3">Assigned Supervisor</th>
                                                <th class="py-3">Major</th>
                                                <th class="py-3">Status</th>
                                                <th class="py-3">Registration Date</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers" style="line-height: 3.5;">

                                        <?php
                                            // Connect to the MySQL database
                                            include 'connection.php';

                                            $query = "SELECT * FROM students ORDER BY stud_id DESC LIMIT 7";
                                            $result = $conn->query($query);

                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>';
                                                    echo '<td>' . $row['student_name'] . '</td>';
                                                    echo '<td>' . $row['supervisor'] . '</td>';
                                                    ?>
                                                        <td>
                                                            <?php
                                                            $status = $row['student_status'];
                                                            if ($status == "Completed") {
                                                                echo '<span class="badge badge-rounded badge-primary text-white">' . $status . '</span>';
                                                            } elseif ($status == "Ongoing") {
                                                                echo '<span class="badge badge-rounded badge-warning">' . $status . '</span>';
                                                            } else {
                                                                echo '<span class="badge badge-rounded badge-danger">' . $status . '</span>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <?php
                                                        echo '<td>' . $row['major'] . '</td>';
                                                        echo '<td>' . $row['registration_date'] . '</td>';
                                                        ?>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>

                                    
                                        </tbody>
                                    </table>
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
                <p>Aldrin Kabya Biswas, ID 2030443</p>
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

    <!-- Chart ChartJS plugin files -->
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Chart sparkline plugin files -->
    <script src="vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
	
		<!-- Demo scripts -->
    <script src="js/dashboard/dashboard-3.js"></script>
	
	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
	
</body>
</html>