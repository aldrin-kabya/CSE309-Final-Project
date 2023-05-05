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

            $prof_id = $_GET['prof_id'];

            // Execute SQL query
            $result = mysqli_query($conn, "SELECT * FROM professors WHERE prof_id = $prof_id");
            $row = $result->fetch_assoc();

            // Check if any records were returned
            if ($result->num_rows > 0) {
                echo '
                <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4>Professor Profile</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0);">Professors</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0);">Professor Profile</a></li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl-3 col-xxl-4 col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="text-center p-3 overlay-box" style="background-image: url(images/others/img1.jpg);">
                                            <div class="profile-photo">
                                                <img src="images/profile/'.$row["photo"].'" width="100" class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <h3 class="mt-3 mb-1 text-white">'.$row["full_name"].'</h3>
                                            <p class="text-white mb-0">Professor</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Publications</span> <strong class="text-muted">'.$row["publications"].'</strong></li>
                                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Citations</span> <strong class="text-muted">'.$row["citations"].'</strong></li>
                                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">h-index</span> <strong class="text-muted">'.$row["h_index"].'</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-title">about me</h2>
                                        </div>
                                        <div class="card-body pb-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex px-0 justify-content-between">
                                                    <strong>Department</strong>
                                                    <span class="mb-0">'.$row["department"].'</span>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between">
                                                    <strong>Education</strong>
                                                    <span class="mb-0">'.$row["education"].'</span>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between">
                                                    <strong>Designation</strong>
                                                    <span class="mb-0">'.$row["designation"].'</span>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between">
                                                    <strong>Projects Completed</strong>
                                                    <span class="mb-0">'.$row["publications"].'</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header d-block">
                                            <h4 class="card-title">Address </h4>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0">'.$row["address_"].'</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-9 col-xxl-8 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-tab">
                                        <div class="custom-tab-1">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">About Me</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="about-me" class="tab-pane fade active show">
                                                    <div class="profile-about-me">
                                                        <div class="pt-4 border-bottom-1 pb-4">
                                                            <p>'.$row["description_"].'</p>
                                                        </div>
                                                    </div>
                                                    <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                                        <h4 class="text-primary mb-4">Interests</h4>
                                                        <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10">Artificial Intelligence</a>
                                                        <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10">Computer Vision</a>
                                                        <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10">Machine Learning</a>
                                                        <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10">Natural Language Processing</a>
                                                    </div>
                                                    <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                                        <h4 class="text-primary mb-4">Language</h4><a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                                        <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                                    </div>
                                                    <div class="profile-personal-info">
                                                        <h4 class="text-primary mb-4">Personal Information</h4>
                                                        <div class="row mb-4">
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>'.$row["full_name"].'</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>'.$row["email"].'</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                <h5 class="f-w-500">Availability <span class="pull-right">:</span></h5>
                                                            </div>
                                                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>Full Time</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>27</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                                            </div>
                                                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>'.$row["address_"].'</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                <h5 class="f-w-500">Year Experience <span class="pull-right">:</span></h5>
                                                            </div>
                                                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>18 Year Experience</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="my-posts" class="tab-pane fade">
                                                    <div class="my-post-content pt-3">
                                                        <div class="post-input">
                                                            <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea> <a href="javascript:void()"><i class="ti-clip"></i> </a>
                                                            <a href="javascript:void()"><i class="ti-camera"></i> </a><a href="javascript:void()" class="btn btn-primary">Post</a>
                                                        </div>
                                                        <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                            <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                            <a class="post-title" href="javascript:void()">
                                                                <h4>Collection of textile samples lay spread</h4>
                                                            </a>
                                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                                of spare which enjoy whole heart.</p>
                                                            <button class="btn btn-primary mr-3"><span class="mr-3"><i class="fa fa-heart"></i></span>Like</button>
                                                            <button class="btn btn-secondary"><span class="mr-3"><i class="fa fa-reply"></i></span>Reply</button>
                                                        </div>
                                                        <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                            <img src="images/profile/9.jpg" alt="" class="img-fluid">
                                                            <a class="post-title" href="javascript:void()">
                                                                <h4>Collection of textile samples lay spread</h4>
                                                            </a>
                                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                                of spare which enjoy whole heart.</p>
                                                            <button class="btn btn-primary mr-3"><span class="mr-3"><i class="fa fa-heart"></i></span>Like</button>
                                                            <button class="btn btn-secondary"><span class="mr-3"><i class="fa fa-reply"></i></span>Reply</button>
                                                        </div>
                                                        <div class="profile-uoloaded-post pb-5">
                                                            <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                            <a class="post-title" href="javascript:void()">
                                                                <h4>Collection of textile samples lay spread</h4>
                                                            </a>
                                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                                of spare which enjoy whole heart.</p>
                                                            <button class="btn btn-primary mr-3"><span class="mr-3"><i class="fa fa-heart"></i></span>Like</button>
                                                            <button class="btn btn-secondary"><span class="mr-3"><i class="fa fa-reply"></i></span>Reply</button>
                                                        </div>
                                                        <div class="text-center mb-2"><a href="javascript:void()" class="btn btn-primary">Load More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>';
        } else {
            echo "0 results";
        }

        $conn->close();
		?>


        
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
	
</body>
</html>