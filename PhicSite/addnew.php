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
if(isset($_POST['add'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $department = $_POST['department'];
    $rank = $_POST['rank'];
    if(empty($firstname) || empty($lastname) || empty($gender) || empty($birthdate) || empty($department) || empty($rank)){
        if(empty($firstname)){
            echo "First Name is empty";
        }
        if(empty($lastname)){
            echo "Last Name is empty";
        }
        if(empty($gender)){
            echo "Gender is empty";
        }
        if(empty($birthdate)){
            echo "Birthdate is empty";
        }
        if(empty($department)){
            echo "Department is empty";
        }
        if(empty($rank)){
            echo "Rank is empty";
        }

        echo "<a href=\"add.php\">Back </a>";

    }
    else{

    $sql = "insert into phic.tblemployee ";
    $sql .= "(Efname, Elname, Egender, Ebirthdate, Edept, rank) ";
    $sql .= "values (:fname, :lname, :gender, :bday, :dept, :rank) ";
    $query = $conn->prepare($sql);
    $query -> bindparam(':fname', $firstname);
    $query -> bindparam(':lname', $lastname);
    $query -> bindparam(':gender', $gender);
    $query -> bindparam(':bday', $birthdate);
    $query -> bindparam(':dept', $department);
    $query -> bindparam(':rank', $rank);
    $query -> execute();

    echo "Successfully updated" . "<br/>";
    echo "<a href = \"index.php\">Back</a>";
    }
}
else{
    echo "ERROR: Restricted Access!";
}
    ?>
</body>
</html>