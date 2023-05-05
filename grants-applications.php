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
                            <h4>Grant Applications</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Funding</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Grant Applications</a></li>
                        </ol>
                    </div>
                </div>
				
                <div class="row">
					<div class="col-lg-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Grant Applications</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Serial</th>
                                                <th>Project Title</th>
                                                <th>Grant Number</th>
                                                <th>Funding Agency</th>
												<th>Pricipal Investigator</th>
												<th>Status </th>
                                                <th>Application Date</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            // Connect to the MySQL database
                                            include 'connection.php';

                                            // Check if the delete button was clicked
                                            if (isset($_POST['delete'])) {
                                                $id = $_POST['id'];
                                                mysqli_query($conn, "DELETE FROM grants WHERE grant_id='$id'");
                                            }

                                            // Execute SQL query
                                            $result = mysqli_query($conn, "SELECT * FROM grants");

                                            // Check if any records were returned
                                            if (mysqli_num_rows($result) > 0) {
                                                $serial_no = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '<tr>';
                                                    echo '<td><strong>' . $serial_no++ . '</strong></td>';
                                                    echo '<td>' . $row['project_title'] . '</td>';
                                                    echo '<td>' . $row['grant_number'] . '</td>';
                                                    echo '<td>' . $row['funding_agency'] . '</td>';
                                                    echo '<td>' . $row['principal_investigator'] . '</td>';
                                                    $status = $row['project_status'];
                                                    if ($status == "Pending") {
                                                        echo '<td><span class="badge badge-warning">Pending</span></td>';
                                                    } else if ($status == "Awarded") {
                                                        echo '<td><span class="badge badge-success">Awarded</span></td>';
                                                    } else if ($status == "Rejected") {
                                                        echo '<td><span class="badge badge-danger">Rejected</span></td>';
                                                    } else {
                                                        echo '<td>' . $status . '</td>';
                                                    }
                                                    echo '<td>' . $row['application_date'] . '</td>';
                                                    echo '<td>$' . $row['budget'] . '</td>';
                                                    echo '<td>';
                                                    echo '<a href="edit-grants.php?grant_id=' . $row['grant_id'] . '" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>';
                                                    echo '<form method="post">';
                                                    echo '<input type="hidden" name="id" value="' . $row['grant_id'] . '">';
                                                    echo '<button type="submit" name="delete" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></button>';
                                                    echo '</form>';
                                                    echo '</td>';
                                                    echo '</tr>';
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