<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $grant_id = $_POST['grant_id'];
    $project_title = $_POST['project_title'];
	$principal_investigator = $_POST["principal_investigator"];
    $grant_number = $_POST["grant_number"];
	$project_summary = $_POST["project_summary"];
	$project_description = $_POST["project_description"];
	$department = $_POST["department"];
	$timeline = $_POST["timeline"];
	$budget = $_POST["budget"];
	$application_date = $_POST["application_date"];
	$funding_agency	= $_POST["funding_agency"];
    $supporting_documents = $_POST["supporting_documents"];
    $project_status = $_POST["project_status"];
    $project_impact = $_POST["project_impact"];

    $query = "UPDATE grants SET project_title = '$project_title', principal_investigator = '$principal_investigator', grant_number = '$grant_number', project_summary = '$project_summary', project_description = '$project_description', department = '$department', timeline = '$timeline', budget = '$budget', application_date = '$application_date', funding_agency = '$funding_agency', supporting_documents = '$supporting_documents', project_status = '$project_status', project_impact = '$project_impact' WHERE grant_id = $grant_id";
    mysqli_query($conn, $query);
    header("Location: grants-applications.php");
}
?>