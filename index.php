<?php 

session_start();
$_SESSION['username'] = "Stephan";
print "Hello, " . $_SESSION['username'];
?>