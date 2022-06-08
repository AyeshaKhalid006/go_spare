<?php

$conn = new mysqli('localhost','root','','internat_ccrentacars');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 

$name = $_POST["name"];
$phone = $_POST["phone"];
$plocation = $_POST["plocation"];
 $dlocation = $_POST["dlocation"];
 $time = $_POST["time"];
 $car = $_POST["car"];
 

 $echo = $car;
// echo = plocation;

$sql = "INSERT INTO ccrentacartable (name,phone,pick_location,drop_location,pick_time, car)
VALUES ('$name','$phone','$plocation','$dlocation','$time','$car')";

if (mysqli_query($conn, $sql)) {
  header('Location: https://ccrentacars.com/contactus.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>