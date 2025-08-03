<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm";

$motor1 = $_POST["motor1"];
$motor2 = $_POST["motor2"];
$motor3 = $_POST["motor3"];
$motor4 = $_POST["motor4"];
$motor5 = $_POST["motor5"];
$motor6 = $_POST["motor6"];

echo $motor1 . "<br>";
echo $motor2 . "<br>";
echo $motor3 . "<br>";
echo $motor4 . "<br>";
echo $motor5 . "<br>";
echo $motor6 . "<br>";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($motor1) && !empty($motor2) && !empty($motor3) && !empty($motor4) && !empty($motor5) && !empty($motor6)) {
    $sql = "INSERT INTO Poses (motor1, motor2, motor3, motor4, motor5, motor6, statusx, created)
            VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6', '0', '')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Some motor values are missing.";
}

$conn->close();
?>