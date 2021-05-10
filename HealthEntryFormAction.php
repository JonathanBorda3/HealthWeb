<?php
session_start();

include "db_conn.php";

if (isset($_POST['submit'])) {

echo '';

function validate($data){

$data = trim($data);

$data = stripslashes($data);

$data = htmlspecialchars($data);

return $data;

}

$heartRate = validate($_POST['heartRate']);

$bloodPressure = validate($_POST['bloodPressure']);

$activity = validate($_POST['activity']);

$calorie_intake = validate($_POST['calorie_intake']);

$calorie_outake = validate($_POST['calorie_outake']);

if (empty($heartRate)) {

header("Location: HealthEntryForm.php?error=Heart Rate is required");

exit();

}else if(empty($bloodPressure)){

header("Location: HealthEntryForm.php?error=Blood Pressure is required");

exit();

}else if(empty($activity)){

header("Location: HealthEntryForm.php?error=Activity Per Day is required");

exit();

}else if(empty($calorie_intake)){

header("Location: HealthEntryForm.php?error=Calorie Intake is required");

exit();

}else if(empty($calorie_outake)){

header("Location: HealthEntryForm.php?error=Calorie Outake is required");

exit();

}else{

//$sql = "INSERT INTO entry values('$heartRate','$bloodPressure','$activity','$calorie_intake','$calorie_outake')";
$sql = "INSERT INTO healthentryform(heart_rate,blood_pressure,activity_per_day,calorie_intake,calorie_outake) values('$heartRate','$bloodPressure','$activity','$calorie_intake','$calorie_outake')";

if (mysqli_query($conn, $sql)) {

header("Location: HealthEntryForm.php?success=Added Successfully");

exit();

}else{

header("Location: HealthEntryForm.php?error=Error!");

exit();

}

}

}else{

header("Location: HealthEntryForm.php");

exit();

}

