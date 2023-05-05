<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $stud_id = $_POST['stud_id'];
    $student_name = $_POST['student_name'];
	$academic_level = $_POST["academic_level"];
	$student_id = $_POST["student_id"];
	$supervisor = $_POST["supervisor"];
	$email = $_POST["email"];
	$registration_date = $_POST["registration_date"];
	$gender = $_POST["gender"];
	$mobile_number = $_POST["mobile_number"];
	$date_of_birth = $_POST["date_of_birth"];
	$address_ = $_POST["address_"];
	$major	= $_POST["major"];
	$status	= $_POST["student_status"];

    $query = "UPDATE students SET student_name = '$student_name', academic_level = '$academic_level', student_id = '$student_id', supervisor = '$supervisor', email = '$email', registration_date = '$registration_date', gender = '$gender', mobile_number = '$mobile_number', date_of_birth = '$date_of_birth', address_ = '$address_', major = '$major', student_status = '$status' WHERE stud_id = $stud_id";
    mysqli_query($conn, $query);
    header("Location: all-students.php");
}
?>