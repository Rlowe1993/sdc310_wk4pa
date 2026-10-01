<?php
    function get_db_conn() {
        // Connect to Database
        $hostname = "localhost";
        $username = "ecpi_user";
        $password = "Password1";
        $dbname = "sdc310_wk4pa";
        $conn = @mysqli_connect($hostname, $username, $password, $dbname);
        if ($conn) {
            return $conn;
        } else {
            $con = mysqli_connect($hostname, $username, $password);
            $sql = file_get_contents('sdc310_wk4pa.sql');
            $index = 1;
            mysqli_multi_query($con, $sql);
            do {
                if ($result = mysqli_store_result($con)) {
                    mysqli_free_result($result);
                }
                if (mysqli_errno($con)) {
                    echo "SQL statment " . $index . " failed " . mysqli_error($con);
                }
                $index++;
            } while (mysqli_more_results($con) && mysqli_next_result($con));
            $conn = mysqli_connect($hostname, $username, $password, $dbname);
            if (mysqli_connect_errno()) {
                echo "Database Connection Failed" . mysqli_connect_error();
                exit();
            }
            return $conn;
        }
    }

    function get_all_products() {
        // Query for all products
        $query = "SELECT * FROM products";
        return mysqli_query(get_db_conn(), $query);
    }
?>