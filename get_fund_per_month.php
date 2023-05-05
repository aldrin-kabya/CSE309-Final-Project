<?php
    include 'connection.php';
    
    // Construct the query
    $sql = "SELECT DATE_FORMAT(STR_TO_DATE(application_date, '%d %M, %Y'), '%b') AS month, 
            SUM(CAST(REPLACE(budget, ',', '') AS UNSIGNED)) AS total_budget 
            FROM grants 
            WHERE project_status = 'Awarded' 
            GROUP BY month 
            ORDER BY MONTH(STR_TO_DATE(month, '%b')), 
            FIELD(month, 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May');
        ";

    // Execute the query
    $result = $conn->query($sql);

    // Build the data array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = intval($row["total_budget"]);
    }

    echo json_encode($data);

    // Close the database connection
    $conn->close();
?>