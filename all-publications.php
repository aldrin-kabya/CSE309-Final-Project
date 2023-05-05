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
                            <h4>Publications List</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Publications</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Publications List</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Publications List</h4>
								<a href="add-publications.php" class="btn btn-primary">+ Add new</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th>#</th>
												<th>Publication Title</th>
												<th>Author(s)</th>
												<th>Publisher</th>
												<th>Submission Date</th>
												<th>Type</th>
												<th>Status</th>
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
                                                mysqli_query($conn, "DELETE FROM publications WHERE pub_id='$id'");
                                            }

                                            // Execute SQL query
                                            $result = mysqli_query($conn, "SELECT * FROM publications");

                                            // Check if any records were returned
                                            if (mysqli_num_rows($result) > 0) {
                                                $serial_no = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '<tr>';
                                                    echo '<td><strong>' . $serial_no++ . '</strong></td>';
                                                    echo '<td>' . $row['publication_title'] . '</td>';
                                                    echo '<td>' . $row['authors'] . '</td>';
                                                    echo '<td>' . $row['publisher'] . '</td>';
                                                    echo '<td>' . $row['submission_date'] . '</td>';
                                                    echo '<td>' . $row['publication_type'] . '</td>';
                                                    echo '<td>' . $row['publication_status'] . '</td>';
                                                    echo '<td>';
                                                    echo '<a href="edit-publications.php?pub_id=' . $row['pub_id'] . '" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>';
                                                    echo '<form method="post">';
                                                    echo '<input type="hidden" name="id" value="' . $row['pub_id'] . '">';
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