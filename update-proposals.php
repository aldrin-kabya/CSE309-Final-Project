<?php
include 'connection.php';
if (isset($_POST['save'])) {
	$proposal_id = $_POST['id'];
	$project_name = $_POST['project_name'];
	$department = $_POST["department"];
	$proposal_details = $_POST["proposal_details"];
	$starting_date = $_POST["starting_date"];
	$project_duration = $_POST["project_duration"];
	$budget = $_POST["budget"];
	$professor_name = $_POST["professor_name"];
	$collaborators = $_POST["collaborators"];
	$contact_number = $_POST["contact_number"];
	$project_status = $_POST["project_status"];
	$progress = $_POST["progress"];

	// Update the row in the database
	$sql = "UPDATE proposals SET project_name='$project_name', department='$department', proposal_details='$proposal_details', starting_date='$starting_date', project_duration='$project_duration', budget='$budget', professor_name='$professor_name', collaborators='$collaborators', contact_number='$contact_number', project_status='$project_status', progress='$progress' WHERE id='$proposal_id'";

    mysqli_query($conn, $sql);
    header("Location: all-proposals.php");

}

?>