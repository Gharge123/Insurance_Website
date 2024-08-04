<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "balifeinsurance"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $company_name = $_POST['Companynm'];
    $claim_no = $_POST['Claimno'];
    $work_done = $_POST['WorkDone'];

    $sql = "INSERT INTO tasks (date, company_name, claim_no, work_done) VALUES ('$date', '$company_name', '$claim_no', '$work_done')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Task added successfully'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
