<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_passowrd = '**********';
    $db_name = 'chat';

    if($connection = mysqli_connect($db_host, $db_user, $db_passowrd,$db_name)){

        echo "Connected to Database Server..... <br />";

        if ($connection->connect_errno) {
            echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
        } else {
            if ($result = $connection->query("SELECT DATABASE()")) {
                $row = $result->fetch_row();
                printf("Default database is %s.\n", $row[0]);
                $result->close();
            }
        }
    } else {
        echo "Unable to Connect to MYSQL Server.<br />";
    }

?>