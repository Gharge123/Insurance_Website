<?php
$servername = "localhost"; // Database server name or IP address
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "employee_ratings"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = $_POST['employee_name'];
    $employee_cases = $_POST['employee_cases'];
    $fraud_rating = $_POST['fraud_rating'];
    $connectivity_rating = $_POST['connectivity_rating'];
    $communication_rating = $_POST['communication_rating'];
    $tat_rating = $_POST['tat_rating'];
    $performance = $_POST['performance'];

    $sql = "INSERT INTO ratings (employee_name, employee_cases, fraud_rating, connectivity_rating, communication_rating, tat_rating, performance)
    VALUES ('$employee_name', '$employee_cases', '$fraud_rating', '$connectivity_rating', '$communication_rating', '$tat_rating', '$performance')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
