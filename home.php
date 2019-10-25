<?php 
session_start();
if(isset($_SESSION['username'])){
    print "This is your class" . $_SESSION['username'] . "<br>";
    print "<a href=\"logout.php\">logout</a>";
}
else{
    print "Wa pa ka na ka login" . "</br>";
    print "<a href=\"index.php\"> go back to your index</a>";
}

?>