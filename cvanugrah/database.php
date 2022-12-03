
<?php
//connection to mysql
$db = new mysqli('localhost', 'root', '', 'cvanugrah');
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
?>