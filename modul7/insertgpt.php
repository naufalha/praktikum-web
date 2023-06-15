<?php
// Connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data from $_POST
$value1 = $_POST['no_ktp'];
$value2 = $_POST['nama_pasien'];
$value3 = $_POST['jenis_kelamin'];
$value3 = $_POST['tanggal_lahir'];

// Prepare insert query with placeholders
$sql = "INSERT INTO pasien (column1, column2, column3) VALUES (?, ?, ?)";

// Create a prepared statement
$stmt = $conn->prepare($sql);

// Bind the parameters and execute the statement
$stmt->bind_param("sss", $value1, $value2, $value3);

// Execute the statement
if ($stmt->execute()) {
    echo "Record inserted successfully.";
} else {
    echo "Error inserting record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
