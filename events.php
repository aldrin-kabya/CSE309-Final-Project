<?php

include 'connection.php';

// Check the action parameter and perform the corresponding action
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
switch ($action) {
    case 'add':
        addEvent($conn);
        break;
    case 'update':  
        updateEvent($conn);
        break;
    case 'delete':
        deleteEvent($conn);
        break;
    default:
        break;
}

// Add a new event to the database
function addEvent($conn) {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $start = isset($_POST['start']) ? $_POST['start'] : '';
    $end = isset($_POST['end']) ? $_POST['end'] : '';
    $category = isset($_POST['className']) ? $_POST['className'] : '';

    $sql = "INSERT INTO events (title, start, end, category) VALUES ('$title', '$start', '$end', '$category')";

    if ($conn->query($sql) === TRUE) {
        $response['status'] = 'success';
        $response['id'] = $conn->insert_id;
    } else {
        $response['status'] = 'error';
        $response['message'] = $conn->error;
    }

    echo json_encode($response);
}

// Update an existing event in the database
function updateEvent($conn) {
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $start = isset($_POST['start']) ? $_POST['start'] : '';
    $end = isset($_POST['end']) ? $_POST['end'] : '';
    $category = isset($_POST['className']) ? $_POST['className'] : '';

    $sql = "UPDATE events SET title='$title', start='$start', end='$end', category='$category' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
        $response['message'] = $conn->error;
    }

    echo json_encode($response);
}

// Delete an event from the database
function deleteEvent($conn) {
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    $sql = "DELETE FROM events WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
        $response['message'] = $conn->error;
    }

    echo json_encode($response);
}

// Close the database connection
$conn->close();

?>
