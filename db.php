<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
       <script>
       function rame() {
           alert("test test");
       }
       </script> 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "katerina";
$name = $_GET['name'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT saxeli, gvari, asaki FROM person WHERE saxeli='$name'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
echo $row['saxeli'];
?>
<script>
alert("test test");
</script>
<?
$conn->close();
?>
