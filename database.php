<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'topic_dekd');

    try {
        $dbcon = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    } catch (mysqli_sql_exception) {
        echo "Cannot connect to database" . mysqli_connect_error();
    }
    
?>