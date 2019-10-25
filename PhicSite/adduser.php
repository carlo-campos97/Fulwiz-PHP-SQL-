<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="addnewuser.php" method="POST">
    
    <label for= ""> Username </label><br>
    <input type= "TEXT" name= "username" ><br>
    <label for= ""> Password  </label><br>
    <input type= "TEXT" name="password" ><br>
    <label type=""> Role  </label><br>
    <input type= "TEXT" name= "role"><br>
    <input type = "hidden"name= "id" ><br>
    <input type = "submit" name= "add"value = "ADD">
</form>

</body>
</html>