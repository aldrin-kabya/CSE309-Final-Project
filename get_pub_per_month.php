<?php
    include 'connection.php';
    
    // Construct the query
    $sql = "SELECT DATE_FORMAT(STR_TO_DATE(submission_date, '%d %M, %Y'), '%b') AS month, COUNT(*) AS count 
            FROM publications 
            GROUP BY month 
            ORDER BY MONTH(STR_TO_DATE(month, '%b')), FIELD(month, 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May') 
            LIMIT 6;";

    // Execute the query
    $result = $conn->query($sql);

    // Build the data array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = intval($row["count"]);
    }

    echo json_encode($data);

    // Close the database connection
    $conn->close();
?>