<?php

if (isset($_SESSION['username'])) 
{
    header("Location: /");
$pagename = "Employees";


$result = mysqli_query($conn, "SELECT col1, col2, col3, col4, col5, col6 FROM table_name");

// Initialize an empty array to store the data
$data = array();

// Iterate through the result set and add each row to the array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
        exit();


}
;

require "views/employees.view.php";