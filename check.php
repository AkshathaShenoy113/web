
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$usn = $_GET["usn"];;

$sql = "SELECT * FROM students where usn = '$usn' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $res =  $row["result"];
    }
} else {
    echo "0 results";
}

if($res == 1)
{
	echo '<script language="javascript">';
  echo 'alert("PASS")';  //not showing an alert box.
  echo '</script>';
}
else
{
	echo '<script language="javascript">';
  echo 'alert("FAIL")';  //not showing an alert box.
  echo '</script>';
}
$conn->close();

?>