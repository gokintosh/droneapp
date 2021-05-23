

<?php

@$fName = $_POST['field1'];
@$lName = $_POST['field2'];
@$phone = $_POST['field3'];
@$city = $_POST['field4'];
@$street = $_POST['field5'];
@$hNumber = $_POST['field6'];

@$login = $_POST['login'];
@$email = $_POST['email'];
@$password= $_POST['password'];
//data receiving from client.php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "drone_delivery";

// Create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
    }
echo "Connected successfully";

$sql = "INSERT INTO client (CLIENT_NAME, CLIENT_SURNAME, PHONE, CITY, STREET, HOUSE_NUMBER)
VALUES ('$fName', '$lName', '$phone', '$city', '$street', '$hNumber')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$sql = "INSERT INTO user_data (login, email, password)
VALUES ('$login', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $pass, $dbname);

$sql = mysqli_query($conn, "SELECT id_client FROM client ORDER BY id_client DESC LIMIT 1");
$rekord = mysqli_fetch_array($sql);
$last_id = $rekord['id_client'];
echo $last_id;

$sql = mysqli_query($conn, "SELECT ID_USER FROM user_data ORDER BY ID_USER DESC LIMIT 1");
$rekord = mysqli_fetch_array($sql);
$present_id = $rekord['ID_USER'];
echo $present_id;

$sql = "UPDATE user_data SET CLIENT_ID = $last_id where ID_USER=$present_id ";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
header("Location: client.php");
                                ?>

