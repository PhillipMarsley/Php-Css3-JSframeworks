<?php
    /* 
    =================================================================================
        Gets the file that opens up a connection to a MySQL database.
        Sets that open connection to a variable.
    =================================================================================
    */ 
    include 'mySqlConnection.php';
    $mySqlConn = OpenCon();
    echo "Connected Successfully";

    /* 
    =================================================================================
        SQL Query &
        Store data retrived from SQL Query
    =================================================================================
    */ 
    $getAllSuperpowers = "SELECT * 
                            FROM superpower";
    $result = $mySqlConn -> query($getAllSuperpowers);

    /* 
    =================================================================================
        Loop through and print data
    =================================================================================
    */ 
    if ($result -> num_rows > 0) {
        echo "<table>";
        echo "<tr> <th>ID</th> <th>TYPE</th> </tr>";

        while($row = $result -> fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["superpowerId"] . "</td>";
            echo "<td>" . $row["type"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } 
    else {
        echo "<table>";
        echo "<tr> <th>ID</th> <th>TYPE</th> </tr>";
        echo "<tr>";
        echo "<td colspan='2'>0 Results</td>";
        echo "</tr>";
        echo "</table>";
    }

    CloseCon($mySqlConn);
?>