<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 2/13/17
 * Time: 9:30 AM
 */


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_getlist = "SELECT ID, Email FROM Subscriber";
$result = $conn->query($sql_getlist);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["ID"]. " - Name: ". $row["Email"]. " <br>";
    }
} else {
    echo "0 results";
}

$conn->close();
