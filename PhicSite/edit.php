<?php
include_once('config.php');
//if(!isset($_GET['key']));
//{
//    header ("location:index.php")
//}
$eid = $_GET['key'];
$efname = $_GET['fname'];
echo "editing employee ID: " . $eid . ": {$efname}";
$sql = "select * from  phic.tblemployee where id = :id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $eid));
while($row = $query->fetch(PDO::FETCH_ASSOC)){
    $firstname = $row['Efname'];
    $lastname = $row['Elname'];
    $gender = $row['Egender'];
    $bday = $row['Ebirthdate'];
    $dept = $row['Edept'];
    $rank = $row['rank'];
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
    
        <label for= ""> Firtsname</label><br>
        <input type= "TEXT" name="firstname" value="<?php echo $firstname ?>"><br>
        <label for= ""> LastName</label><br>
        <input type= "TEXT" name="lastname" value="<?php echo $lastname ?>"><br>
        <label for= "">gender</label><br>
        <input type= "TEXT" name="gender"value="<?php echo $gender ?>"><br>
        <label for= ""> Birthdate</label><br>
        <input type= "TEXT" name="birthday"value="<?php echo $bday ?>"><br>
        <label for= ""> Department</label><br>
        <input type= "TEXT" name="dept"value="<?php echo $dept ?>"><br>
        <label for= ""> rank</label><br>
        <input type= "TEXT" name="rank"value="<?php echo $rank ?>"><br>  
        <input type = "hidden"name= "id" value= "<?php echo $eid?>">
        <input type = "submit" name= "update"value = "Update">
</form>



</body>
</html>
 


