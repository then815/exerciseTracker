<?php
// Create a connection
$message = '';

$db = new MySQLi('SERVER','DB NAME','DBPASS','DB');
if($db->connect_error){
    $message = $db->connect_error;
}else{
   $sql = 'SELECT * FROM tracking ORDER BY id DESC LIMIT 1';
    $result = $db->query($sql);
    if($db->error){
        $message = $db->error;
       
    }
    $prev = $result->fetch_assoc();
}

?>
