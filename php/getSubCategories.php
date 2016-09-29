<?php
$cat = $_POST['category'];
$db = new SQLite3('../budget.db');
if (!$db) die ($db->lastErrorMsg());

$res = $db->query('Select * from categories where name="'.$cat.'"');
$row = $res->fetchArray(SQLITE3_ASSOC);
$id = $row['id'];
$res = $db->query('Select * from subcategories where parent="'.$id.'"');
while($row = $res->fetchArray(SQLITE3_ASSOC) ){
      echo '{';
      echo '"name":"'.$row['name'];
      echo '", "perc":"'.$row['percentage'];
      echo '", "amt":"'.$row['amount'];
      echo '", "total":"'.$row['total'];
      echo '"}';
      echo "\n";
   }

?>
