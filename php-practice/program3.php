<?php
$servername="localhost";
$username="root";
$password="";
$database="pavankumar";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was successful<br>";
}

//creating a table in the database
$sql = "CREATE TABLE MyGuest (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();


?>