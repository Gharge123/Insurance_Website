<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "workdata"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $company_name = $_POST['Companynm'];
    $claim_no = $_POST['Claimno'];
    $work_done = $_POST['WorkDone'];

    $sql = "INSERT INTO tasks (date, company_name, claim_no, work_done) VALUES ('$date','$company_name', '$claim_no', '$work_done')";
    if ($conn->query($sql) === TRUE) {
        echo "New task created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle filtering
$whereClause = '';
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['startdate']) && isset($_GET['enddate'])) {
    $filterStartDate = $_GET['startdate'];
    $filterEndDate = $_GET['enddate'];
    $whereClause = "WHERE startdate >= '$filterStartDate' AND enddate <= '$filterEndDate'";
}

$sql = "SELECT date ,company_name, claim_no, work_done FROM tasks $whereClause";

echo $sql;
$result = $conn->query($sql);
?>
