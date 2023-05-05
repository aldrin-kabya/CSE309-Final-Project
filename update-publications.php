<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $pub_id = $_POST['pub_id'];
    $publication_title = $_POST['publication_title'];
    $authors = $_POST['authors'];
    $publisher = $_POST['publisher'];
    $submission_date = $_POST['submission_date'];
    $publication_type = $_POST['publication_type'];
    $publication_status = $_POST['publication_status'];

    $query = "UPDATE publications SET publication_title = '$publication_title', authors = '$authors', publisher = '$publisher', submission_date = '$submission_date', publication_type = '$publication_type', publication_status = '$publication_status' WHERE pub_id = $pub_id";
    mysqli_query($conn, $query);
    header("Location: all-publications.php");
}
?>