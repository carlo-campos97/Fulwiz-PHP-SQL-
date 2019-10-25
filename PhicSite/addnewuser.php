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
if(isset($_POST['add']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    if(empty($username) || empty($password) || empty($role))
    {
        if(empty($username))
        {
            echo "usernameis empty";
        }
        if(empty($password))
        {
            echo "password is empty";
        }
        if(empty($role))
        {
            echo "role is empty";
        }
        
        

        echo "<a href=\"add.php\">Back </a>";

    }
    else{

    $sql = "insert into phic.tbusers";
    $sql .= "(username, password, role) ";
    $sql .= "values (:username, :password, :role) ";
    $query = $conn->prepare($sql);
    $query -> bindparam(':username', $username);
    $query -> bindparam(':password', $password);
    $query -> bindparam(':role', $role);
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