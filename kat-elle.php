<?php
$servername = "localhost";
$username = "root";
$password = "";
$schema="test";
$conn = new mysqli($servername, $username, $password, $schema);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$saxelinm=$_GET['saxeli'];
    $gvari=$_GET['gvari'];
    $asaki=$_GET['asaki'];
$sql = "INSERT INTO pirveli (saxeli, gvari, asaki) 
  VALUES ('$saxelinm', '$gvari', '$asaki')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 
?>
<form  action="kat-elle.php" method="GET">
saxeli:<input type="text" name="saxeli">    <br>
gvari:<input type="text" name="gvari" >  <br>
asaki:<input type="text"  name="asaki"><br>
  <input type="submit" value="submit"> 
</form>
