<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasebname = "hngtest";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasebname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM test ORDER BY id DESC"; //SQL query to select all record from Database
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotels.ng Test</title>
</head>
<body>

<h3>Hotels.ng Demo - by Peter Pere</h3>
<div style="">

<?php if($result->num_rows > 0): ?>

<?php while ($row = $result->fetch_assoc()): ?>

	<b>Hotel Name:</b> <i><?php echo $row['hotel_name']; ?></i></br>
	<b>Hotel Description:</b> <i><?php echo $row['description']; ?></i></br>
	<b>Hotel Location:</b> <i><?php echo $row['location']; ?></i></p>

<?php endwhile; ?>

<?php elseif ($result->num_rows == 0): ?>
	<i><?php echo $row['hotel_name']; ?></i>



<?php endif; ?>
	
</div>



</body>
</html>