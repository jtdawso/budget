<?php
$db = new SQLite3('../budget.db');
if (!$db) die ($db->lastErrorMsg());

$res = $db->query('select categories.name as cat, subcategories.name as sub, subcategories.total as total, subcategories.amount, subcategories.percentage from categories inner join subcategories where subcategories.parent= categories.id');
while($row = $res->fetchArray(SQLITE3_ASSOC) ){
      echo '{';
      echo '"name":"'.$row['sub'];
      echo '", "parent":"'.$row['cat'];
      echo '", "perc":"'.$row['percentage'];
      echo '", "amt":"'.$row['amount'];
      echo '", "total":"'.$row['total'];
      echo '"}';
      echo "\n";
   }

?>
