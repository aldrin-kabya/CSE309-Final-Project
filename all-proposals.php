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
        session_start();

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
                            <h4>All Projects</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Projects</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Projects</a></li>
                        </ol>
                    </div>
                </div>
	            

                <?php
                // Connect to the MySQL database
	            include 'connection.php';
                
                // Execute SQL query
                $result = mysqli_query($conn, "SELECT * FROM proposals");
                

                // Check if any records were returned
                if (mysqli_num_rows($result) > 0) {
                    // Loop through each record and create a new card
                    while ($row = mysqli_fetch_assoc($result)) {
                        $proposal_id = $row['id'];
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 d-inline-block">
                            <div class="card">
                                <div class="card-body">
                                    <h4><?php echo $row['project_name']; ?></h4>
                                    <ul class="list-group mb-3 list-group-flush">
                                        <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted"><?php echo $row['starting_date']; ?></span></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between"><span class="mb-0">Duration:</span><strong><?php echo $row['project_duration']; ?></strong></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between"><span class="mb-0">Professor:</span><strong><?php echo $row['professor_name']; ?></strong></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between"><span><i class="mb-0"></i>Budget</span><strong>$<?php echo $row['budget']; ?></strong></li>
                                    </ul>
                                    <a href="about-proposals.php?id=<?php echo $proposal_id; ?>" class="btn btn-primary">Details</a>
                                    <a href="edit-proposals.php?id=<?php echo $proposal_id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="javascript:void()" class="btn btn-warning" id="approve_<?php echo $proposal_id; ?>" data-approved="0" onclick="toggleApproval(<?php echo $proposal_id; ?>)">Approve</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "No records found.";
                }
                ?>
				
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

    <script>
        function toggleApproval(proposal_id) {
        var button = document.getElementById("approve_" + proposal_id);
        var approved = button.getAttribute("data-approved");
        if (approved == "0") {
            // Change button state to approved
            button.innerText = "Approved";
            button.classList.remove("btn-warning");
            button.classList.add("btn-success");
            button.setAttribute("data-approved", "1");
            // Show success message
            var message = document.createElement("div");
            message.classList.add("alert", "alert-success");
            message.style.marginTop = "10px";
            message.innerText = "Proposal has been approved.";
            button.parentElement.appendChild(message);
            setTimeout(function() {
                message.style.display = "none";
            }, 2000);
        } else {
            button.innerText = "Approve";
            button.classList.remove("btn-success");
            button.classList.add("btn-warning");
            button.setAttribute("data-approved", "0");
            // Show success message
            var message = document.createElement("div");
            message.classList.add("alert", "alert-warning");
            message.style.marginTop = "10px";
            message.innerText = "Proposal has been disapproved.";
            button.parentElement.appendChild(message);
            setTimeout(function() {
                message.style.display = "none";
            }, 2000);
        }
    }
    </script>

    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>	

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
	
</body>
</html>