<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addnew.php" method="POST">
    
    <label for= ""> Firstname </label><br>
    <input type= "TEXT" name= "firstname" ><br>
    <label for= ""> LastName  </label><br>
    <input type= "TEXT" name="lastname" ><br>
    <label type=""> gender  </label><br>
    <input type= "TEXT" name= "gender"><br>
    <label for= ""> Birthdate  </label><br>
    <input type= "TEXT" name= "birthdate"><br>
    <label for= ""> Department  </label><br>
    <input type= "TEXT" name= "department"><br>
    <label for= ""> rank  </label><br>
    <input type= "TEXT" name= "rank"><br>  
    <input type = "hidden"name= "id" ><br>
    <input type = "submit" name= "add"value = "ADD">
</form>

</body>
</html>