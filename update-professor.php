<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $prof_id = $_POST['prof_id'];
    $full_name = $_POST['full_name'];
	$address_ = $_POST["address_"];
    $email = $_POST["email"];
	$joining_date = $_POST["joining_date"];
	$user_id = $_POST["user_id"];
	$password_ = $_POST["password_"];
	$mobile_number = $_POST["mobile_number"];
	$designation = $_POST["designation"];
	$department = $_POST["department"];
	$date_of_birth	= $_POST["date_of_birth"];
    $education = $_POST["education"];
    $publications = $_POST["publications"];
    $citations = $_POST["citations"];
    $h_index = $_POST["h_index"];
    $description_ = $_POST["description_"];

    $query = "UPDATE professors SET full_name = '$full_name', address_ = '$address_', email = '$email', joining_date = '$joining_date', user_id = '$user_id', password_ = '$password_', mobile_number = '$mobile_number', designation = '$designation', department = '$department', date_of_birth = '$date_of_birth', education = '$education', publications = '$publications', citations = '$citations', h_index = '$h_index', description_ = '$description_' WHERE prof_id = $prof_id";
    mysqli_query($conn, $query);
    header("Location: all-professors.php");
}
?>