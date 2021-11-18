<?php
    require 'db_credentials.php';

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE $dbname";
    if (mysqli_query($conn, $sql)) {
        echo "<br>Database created successfully<br>";
    } else {
        echo "Error creating database :" . mysqli_error($conn);
    }
    
    $sql = "USE $dbname";
    if (mysqli_query($conn, $sql)) {
        echo "<br>Database created successfully<br>";
    } else {
        echo "Error creating database :" . mysqli_error($conn);
    }

    $sql = "CREATE TABLE $table_users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(128) NOT NULL,
        created_at DATETIME,
        updated_at DATETIME,
        last_login_at DATETIME,
        last_logout_at DATETIME,
        UNIQUE (email)
    )";

    if (mysqli_query($conn, $sql)) {
        echo "<br>Table created successfully<br>";
    } else {
        echo "<br>Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn)
?>
