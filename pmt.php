<?php
$servername = "localhost";
$username = "root";
$password = "";
$sqema = "test";
$con = new mysqli($servername,$username,$password);
if($con->connect_error) {
    die ("ar gamovida:" . $con->connect_error);
}
$sql="SELECT age_name,first_name,last_name FROM person  ";
$shedegi=$con->query($sql);

 echo "<table border='1px'>
  <thead>
  <th>asaki</th>
  <th>saxeli</th>
  <th>gvari</th>
  </thead>
</table>";

while ($cxrili=$shedegi->fetch_assoc()) {
    ?> 
    <tr>
    <td> <?echo  $cxrili["age_name"]  ;?></td>
    <td><?echo  $cxrili["first_name"]  ;?></td>
    <td><?echo  $cxrili["last_name"]  ;?></td>
    </tr>;
    <?  
}
$con->close();
?>