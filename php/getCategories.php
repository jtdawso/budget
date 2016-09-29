<?php
$db = new SQLite3('../budget.db');
if (!$db) die ($db->lastErrorMsg());
$res = $db->query('Select * from categories');
while($row = $res->fetchArray(SQLITE3_ASSOC) ){
      echo $row['name'] ."\n";
   }

?>
