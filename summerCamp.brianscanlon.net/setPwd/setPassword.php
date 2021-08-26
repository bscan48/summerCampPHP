
<?php


// set the password

$servername = "127.0.0.1";
$username = "briansca_summercamp";
$password = "Sp3ctra8900";
$dbname = "briansca_summercamp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";



$password = 'Password1234';

$hashedPassword = password_hash($password,PASSWORD_BCRYPT);

$sql = "UPDATE admins SET hashed_password='" . $hashedPassword . "' WHERE username='example'";

echo 'sql=' . $sql . '<br>';

echo 'hashedPassword=' . $hashedPassword . '<br>';


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully<br>";
} else {
  echo "Error updating record: " . $conn->error . '<br>';
}

$conn->close();?>