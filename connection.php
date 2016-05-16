<?php
$servername = "jayers.domaincommysql.com";
$username = "easylodging";
$password = "Amoeba01";
$dbname = "easylodging";


  $firstname = "firstname";
  $lastname = "lastname";
  $email = "email";
  $address = "address";
  $comment = "comment";
  $preferred = "preferred";
  $room = "room";
  $NumberOfNights = "NumberOfNights";
  $AdultCount = "AdultCount";
  $YouthCount = "YouthCount";
  $ChildCount = "ChildCount";

  define('DB_HOST', 'jayers.domaincommysql.com');
define('DB_NAME', 'easylodging');
define('DB_USER','easylodging');
define('DB_PASSWORD','Amoeba01');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);}

$sql = "INSERT INTO Guests (firstname, lastname, email, adddress, comment, room, preferred, NumberOfNights, AdultCount, YouthCount, ChildCount)
VALUES ($firstname, $lastname, $email, $comment, $room, preferred, $NumberOfNights, $AdultCount, $YouthCount, $ChildCount)";


$conn->close();




?>


