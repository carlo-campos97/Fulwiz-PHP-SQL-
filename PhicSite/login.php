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
    if(isset($_session['user'])){
        header("location: index.php");
    }
    require"config.php";
    if(isset($_POST['login'])){
        $eusername=$_POST['username'];
        $epassword=$_POST['password'];
        
        $sql = "SELECT * from phic.tbusers where username = :user password = :pass ";
        $query = $conn->prepare($sql);
        $query -> bindparam(':user', $eusername);
        $query -> bindparam(':pass',$epassword);
        $query ->execute();
        
        $count =$query->rowCount();
        if($count >0){
            while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                $eid = $row['ID'];
            }
            session_start();
            $_SESSION['user'] = $eid;
            echo "Accepted ID: " . $eid;
            header("location: index.php");
        }
        else{
            echo "error";
        }
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

    </body>
</html>