<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pavankumar";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}
// Insert data into the table
$sql = "INSERT INTO myguests (id, firstname, lastname, email, reg_date) VALUES (3, 'julie', 'dooley', 'julie@example.com', '2024-08-23')";
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . $conn->error;
}
// Close the connection
$conn->close();

?>
