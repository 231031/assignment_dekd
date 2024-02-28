<?php
    include("database.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {    
        $str_topic = $_POST['topic_dek'];
        $str_content = $_POST['content_dek'];
        echo $str_topic;
        // $sql = "INSERT INTO topicdekd (topic, content) VALUES ($str_topic, $str_content)";
        // mysqli_query($dbcon, $sql);

        // Prepare the SQL statement with placeholders
        $sql = "INSERT INTO topicdekd (topic, content) VALUES (?, ?)";
        
        // Prepare the SQL statement
        $stmt = mysqli_prepare($dbcon, $sql);
        
        if ($stmt) {
            // Bind the parameters to the SQL statement
            mysqli_stmt_bind_param($stmt, "ss", $str_topic, $str_content);
            
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                echo "Data inserted successfully.";
            } else {
                echo "Error: " . mysqli_error($dbcon);
            }
            
            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($dbcon);
        }
        
        // Close the database connection
        mysqli_close($dbcon);
        
        
    } else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
    }

?>