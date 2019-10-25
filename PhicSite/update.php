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
    include_once('config.php');
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $department = $_POST['dept'];
        $rank = $_POST['rank'];
    $sql = "update phic.tblemployee ";
    $sql .="set Efname = :fname, Elname = :lname, Egender = :gender, Ebirthdate = :bday, Edept = :dept, rank =:rank ";     
    $sql .= "where ID =:ID";
    $query = $conn->prepare($sql);
    $query -> bindparam(':ID', $id);
    $query -> bindparam(':fname', $firstname);
    $query -> bindparam(':lname', $lastname);
    $query -> bindparam(':gender', $gender);
    $query -> bindparam(':bday', $birthday);
    $query -> bindparam(':dept', $department);
    $query -> bindparam(':rank', $rank);
    $query ->execute();

    echo "succesfully updated " . " <br/>";
    
    }
    else{
        echo "ERROR: Restricted Access!";
    }
    ?>
</body>
</html>