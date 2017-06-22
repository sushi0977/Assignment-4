<?php

// database functions ************************************************

function fConnectToDatabase() {
   $db = new PDO('mysql:host=127.0.0.1;dbname=testDB', 'sushi0907', 'YF2fv2MZ101V68LM');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   return $db;
}
?>
