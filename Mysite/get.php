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
    if(isset($_POST['submit'])){
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $age = $_POST['pAge'];
        if (empty($fName) || empty($lName) || empty($age)){
            if(empty($fName)){
                echo "The First Name is empty! <br/>";
            }
            if(empty($lName)){
                echo "The Last Name is empty! <br/>";
            }
            if(empty($age)){
                echo "Age is empty! <br/>";
            }
         echo  "<a href=\"post.php\">Go Back </a>";
        }
        else{
            echo "Welcome $fName $lName <br/> Age is $age";
        }
        
       
    }
    else{
       // echo "GO to post.php first";
       header("location:post.php");
    }
   ?>
</body>
</html>