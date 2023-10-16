<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Leave empty for XAMPP's default configuration
$dbname = "waste_db";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'distance' is provided as a query parameter
if (isset($_GET['distance'])) {
    $distance = $_GET['distance'];

    // Insert the data into the database
    $sql = "INSERT INTO data (distance,Block_name,dustbin_id) VALUES ('$distance','Administrator',012)";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Distance not set in GET data";
}

// Close the database connection
$conn->close();

// $hostname = "localhost";
// $username = "root";
// $password = ""; 
// $database = "waste_db";

// $conn = mysqli_connect($hostname,$username,$password, $database);
// $distance= 23;
// if (!$conn){
//     die("Connection failed:" .mysqli_connect_error());
// }
// echo"Database connection is ok <br>";
// if(isset($_POST["distance"]))
// {
// $d = $_POST["distance"];
// $sql =" INSERT INTO data (distance) VALUES ('.$d.')";

// if (mysqli_query($conn, $sql)) {
//     echo" new record created successful";

// }else{
//     echo"error:" . $sql .  "<br>" . mysqli_error($conn);
//     }
// }
?>
