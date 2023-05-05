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
        if (isset($_GET['pub_id'])) {
            $pub_id = $_GET['pub_id'];
            $result = mysqli_query($conn, "SELECT * FROM publications WHERE pub_id = $pub_id");
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
                            <h4>Edit Publication</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Publications</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Publication</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Edit Publication</h4>
							</div>
							<div class="card-body">
								<form action="update-publications.php" method="post">
                                <input type="hidden" name="pub_id" value="<?php echo $row['pub_id']; ?>">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Publication Title</label>
												<input type="text" name="publication_title" value="<?php echo $row['publication_title']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
                                            <label class="form-label">Publisher</label>
                                            <select name="publisher" class="form-control">
                                                <option value="IEEE" <?php if($row['publisher'] == 'IEEE') echo 'selected'; ?>>IEEE</option>
                                                <option value="Springer" <?php if($row['publisher'] == 'Springer') echo 'selected'; ?>>Springer</option>
                                                <option value="ACM" <?php if($row['publisher'] == 'ACM') echo 'selected'; ?>>ACM</option>
                                                <option value="Elsevier" <?php if($row['publisher'] == 'Elsevier') echo 'selected'; ?>>Elsevier</option>
                                            </select>
                                            </div>

										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Author(s)</label>
												<input type="text" name="authors" value="<?php echo $row['authors']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Notes</label>
												<input type="text" name="notes" value="<?php echo $row['notes']; ?>" class="form-control">
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
                                                <label class="form-label">Publication Type</label>
                                                <select name="publication_type" class="form-control">
                                                    <option value="Conference" <?php if ($row['publication_type'] == 'Conference') echo 'selected'; ?>>Conference</option>
                                                    <option value="Journal" <?php if ($row['publication_type'] == 'Journal') echo 'selected'; ?>>Journal</option>
                                                    <option value="Book" <?php if ($row['publication_type'] == 'Book') echo 'selected'; ?>>Book</option>
                                                </select>
                                            </div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Submission Date</label>
												<input  name="submission_date" value="<?php echo $row['submission_date']; ?>" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Keywords</label>
												<input name="keywords" value="<?php echo $row['keywords']; ?>" type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
                                                <label class="form-label">Publication Status</label>
                                                <select name="publication_status" class="form-control">
                                                    <option value="Submitted" <?php if ($row['publication_status'] == 'Submitted') echo 'selected'; ?>>Submitted</option>
                                                    <option value="Under Review" <?php if ($row['publication_status'] == 'Under Review') echo 'selected'; ?>>Under Review</option>
                                                    <option value="Accepted" <?php if ($row['publication_status'] == 'Accepted') echo 'selected'; ?>>Accepted</option>
                                                    <option value="Published" <?php if ($row['publication_status'] == 'Published') echo 'selected'; ?>>Published</option>
                                                </select>
                                            </div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Abstract</label>
												<textarea name="abstract" class="form-control" rows="5"><?php echo $row['abstract']; ?></textarea>
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

