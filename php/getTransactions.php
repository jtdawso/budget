<?php
$month = $_POST['month'];
$db = new SQLite3('../budget.db');
if (!$db) die ($db->lastErrorMsg());
$q = 'select t.date, sc.name ,t.change,t.total from transactions as t inner join subcategories as sc on t.account = subcategory_id where date like "'.$month.'-%-%";';
$res = $db->query($q);
while($row = $res->fetchArray(SQLITE3_ASSOC) ){
      echo '{';
      echo '"Date":"'.$row['date'];
      echo '", "Account":"'.$row['name'];
      echo '", "Change":"'.$row['change'];
      echo '", "Total":"'.$row['total'];
      echo '"}';
      echo "\n";
   }

?>
