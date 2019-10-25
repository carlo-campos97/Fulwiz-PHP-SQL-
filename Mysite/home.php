<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>