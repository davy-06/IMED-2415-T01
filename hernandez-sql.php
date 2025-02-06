<?php

$db_server = "localhost";
$db_user = "david.hernandez107";
$db_pass = "1490792";
$db_name = "db";
$conn = "";

$conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
);

if ($conn)
        echo "You are connected! ", $db_name;
echo "<p>";

$sql = "SELECT * FROM `employees` limit 50";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        $result = mysqli_query($conn, $sql);
        echo "<table><td>Employee Number:</td> ";
        echo "<td>Birth Rate:</td> ";
        echo "<td>First Name:</td> ";
        echo "<td>Last Name:</td> ";
        echo "<td>Gender:</td> ";
        echo "<td>Hire Date:</td> ";
        if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>", $row["emp_no"], "</td>";
                        echo "<td>", $row["birth_date"], "</td>";
                        echo "<td>", $row["first_name"], "</td>";
                        echo "<td>", $row["last_name"], "</td>";
                        echo "<td>", $row["gender"], "</td>";
                        echo "<td>", $row["hire_date"], "</td>";
                        echo "</tr>";
                }
        }
        echo "</tr></tables>";
        mysqli_close($conn);
        echo "Connection Closed!";
} else {
        echo "Could not connect!";
}
