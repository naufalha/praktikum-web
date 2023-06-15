$conn = new mysqli('localhost', 'root', 'password', 'uts_web');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM pasien";
$result = $conn->query($sql);

echo "<table>";
echo "<tr><th>Column 1</th><th>Column 2</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['column1'] . "</td>";
    echo "<td>" . $row['column2'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
