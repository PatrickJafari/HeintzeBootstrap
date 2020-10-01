<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=heintzetest', 'HeintzeTest', 'password');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
 }
// Datenbank schließen $pdo = null;
?>