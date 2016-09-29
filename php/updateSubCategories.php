<?php
$statement = $_POST['statement'];
$db = new SQLite3('../budget.db');
if (!$db) die ($db->lastErrorMsg());

$res = $db->exec($statement);

?>
