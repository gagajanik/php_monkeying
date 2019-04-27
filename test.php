<? require 'conn.php'; ?>
<table border='1px'>
     <thead>
     <th>id</th>
     <th>saxeli</th>
     <th>gvari</th>
     <th>asaki</th>
     </thead> 
     <tbody>
     <? 
     $sql = "SELECT id, saxeli, gvari, asaki FROM pirveli";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
      ?>
     <tr>
     <td><? echo $row["id"];?></td>
     <td><? echo $row["saxeli"];?></td>
     <td><? echo $row["gvari"];?></td>
     <td><? echo $row["asaki"];?></td>
     </tr>
     <?
     } 
    }
    $conn->close();
     ?>
     </tbody>
</table>