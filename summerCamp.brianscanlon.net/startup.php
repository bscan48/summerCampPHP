<?php
//Startup.php
require_once('../summerCampPrivate/initialize.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Server Summer Camp</title>
</head>
<body>

<h1>Reseting Summer Camp Server</h1>

<?php
// Create connection
$dbport = "8889";

echo DB_SERVER . "<br>";

//$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME, $dbport);
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM admins;";

if ($conn->multi_query($sql) === TRUE) {
    echo "Table admins cleared successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$password = 'Password1234';

$hashedPassword = password_hash($password,PASSWORD_BCRYPT);

//$sql = "UPDATE admins SET hashed_password='" . $hashedPassword . "' WHERE username='example'";

$sql = "INSERT INTO admins (first_name, last_name, email, username,";
$sql .= "hashed_password) VALUES ('John', 'Doe', 'john@example.com',";
$sql .= "'example', '" . $hashedPassword . "');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "DELETE FROM camp_classes;";

if ($conn->multi_query($sql) === TRUE) {
    echo "Table camp_classes cleared successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  


$sql = "INSERT INTO camp_classes (Classid, ClassName, ClassDescription,";
$sql .= "Begins, Ends, DaysMonWeek1, DaysTueWeek1, DaysWedWeek1, DaysThrWeek1,";
$sql .= "DaysFriWeek1, DaysSatWeek1, DaysSunWeek1, DaysMonWeek2, DaysTueWeek2,";
$sql .= "DaysWedWeek2, DaysThrWeek2, DaysFriWeek2, DaysSatWeek2, DaysSunWeek2,";
$sql .= "EnrollmentMonWeek1, EnrollmentTueWeek1, EnrollmentWedWeek1, ";
$sql .= "EnrollmentThrWeek1, EnrollmentFriWeek1, EnrollmentSatWeek1, ";
$sql .= "EnrollmentSunWeek1, EnrollmentMonWeek2, EnrollmentTueWeek2, ";
$sql .= "EnrollmentWedWeek2, EnrollmentThrWeek2, EnrollmentFriWeek2, ";
$sql .= "EnrollmentSatWeek2, EnrollmentSunWeek2, StartTime, EndTime, ";
$sql .= "Tuition1, Tuition2, Tuition3, Capacity, MinimumClassSize, ";
$sql .= "Instructor, PrintTickets, Enrollment, TimeStamp, TypeOfClass)";
$sql .= "VALUES ('SWM001', 'Swimming 1', 'Introduction to swimming',";
$sql .= "'2021-06-07', '2021-07-02', 0,0,0,0,0,0,0,0,0,0,0,0,0,0,";
$sql .= "0,0,0,0,0,0,0,0,0,0,0,0,0,0,'08:00','10:00',100,110,0,20,5,'Joe Smith',0,0,";
$sql .= "null,'Swim');";

$sql .= "INSERT INTO camp_classes (Classid, ClassName, ClassDescription,";
$sql .= "Begins, Ends, DaysMonWeek1, DaysTueWeek1, DaysWedWeek1, DaysThrWeek1,";
$sql .= "DaysFriWeek1, DaysSatWeek1, DaysSunWeek1, DaysMonWeek2, DaysTueWeek2,";
$sql .= "DaysWedWeek2, DaysThrWeek2, DaysFriWeek2, DaysSatWeek2, DaysSunWeek2,";
$sql .= "EnrollmentMonWeek1, EnrollmentTueWeek1, EnrollmentWedWeek1, ";
$sql .= "EnrollmentThrWeek1, EnrollmentFriWeek1, EnrollmentSatWeek1, ";
$sql .= "EnrollmentSunWeek1, EnrollmentMonWeek2, EnrollmentTueWeek2, ";
$sql .= "EnrollmentWedWeek2, EnrollmentThrWeek2, EnrollmentFriWeek2, ";
$sql .= "EnrollmentSatWeek2, EnrollmentSunWeek2, StartTime, EndTime, ";
$sql .= "Tuition1, Tuition2, Tuition3, Capacity, MinimumClassSize, ";
$sql .= "Instructor, PrintTickets, Enrollment, TimeStamp, TypeOfClass)";
$sql .= "VALUES ('ART001', 'Painting 1', 'Introduction to painting',";
$sql .= "'2021-07-05', '2021-07-30', 0,0,0,0,0,0,0,0,0,0,0,0,0,0,";
$sql .= "0,0,0,0,0,0,0,0,0,0,0,0,0,0,'10:00','12:00',100,0,0,20,5,'Jane Doe',0,0,";
$sql .= "null,'Class');";

$sql .= "INSERT INTO camp_classes (Classid, ClassName, ClassDescription,";
$sql .= "Begins, Ends, DaysMonWeek1, DaysTueWeek1, DaysWedWeek1, DaysThrWeek1,";
$sql .= "DaysFriWeek1, DaysSatWeek1, DaysSunWeek1, DaysMonWeek2, DaysTueWeek2,";
$sql .= "DaysWedWeek2, DaysThrWeek2, DaysFriWeek2, DaysSatWeek2, DaysSunWeek2,";
$sql .= "EnrollmentMonWeek1, EnrollmentTueWeek1, EnrollmentWedWeek1, ";
$sql .= "EnrollmentThrWeek1, EnrollmentFriWeek1, EnrollmentSatWeek1, ";
$sql .= "EnrollmentSunWeek1, EnrollmentMonWeek2, EnrollmentTueWeek2, ";
$sql .= "EnrollmentWedWeek2, EnrollmentThrWeek2, EnrollmentFriWeek2, ";
$sql .= "EnrollmentSatWeek2, EnrollmentSunWeek2, StartTime, EndTime, ";
$sql .= "Tuition1, Tuition2, Tuition3, Capacity, MinimumClassSize, ";
$sql .= "Instructor, PrintTickets, Enrollment, TimeStamp, TypeOfClass)";
$sql .= "VALUES ('FLD001', 'FieldTrip 1', 'Disneyland',";
$sql .= "'2021-06-20', '2021-06-20', 0,0,0,0,0,0,0,0,0,0,0,0,0,0,";
$sql .= "0,0,0,0,0,0,0,0,0,0,0,0,0,0,'09:00','18:00',200,210,0,20,5,'Bob Jones',0,0,";
$sql .= "null,'Trip');";


if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
    exit;
?>
    
</body>
</html>

