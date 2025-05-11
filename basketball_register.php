<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_db";

// Connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form values
$name = $_POST['name'];
$email = $_POST['email'];
$roll = $_POST['roll'];

// Insert into DB
$sql = "INSERT INTO basketball_registrations (name, email, roll)
        VALUES ('$name', '$email', '$roll')";

if ($conn->query($sql) === TRUE) {
  echo "Basketball Registration Successful! <a href='activities.html'>Back to Activities</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
