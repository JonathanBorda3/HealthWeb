<!DOCTYPE html>

<html>

<head>

<title>Health Entry Form</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<form action="HealthEntryFormAction.php" method="post">

<h2>DATA ENTRY</h2>

<?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

<?php if (isset($_GET['success'])) { ?>

<p class="success"><?php echo $_GET['success']; ?></p>

<?php } ?>

<label>Heart Rate</label>

<input type="text"

name="heartRate"

placeholder="Heart Rate"><br>

<label>Blood Pressure</label>

<input type="text"

name="bloodPressure"

placeholder="Blood Pressure"><br>

<label>Activity Per Day</label>

<input type="text"

name="activity"

placeholder="Activity Per Day"><br>

<label>Calorie Intake</label>

<input type="text"

name="calorie_intake"

placeholder="Calorie Intake"><br>

<label>Calorie Outake</label>

<input type="text"

name="calorie_outake"

placeholder="Calorie Outake"><br>

<button type="submit" name="submit">Add</button>

</form>

</body>

</html>

