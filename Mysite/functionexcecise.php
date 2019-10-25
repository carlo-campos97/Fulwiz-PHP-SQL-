<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- comments -->
    <?php// echo "hello PHP";?>
    <?php// echo "hello World";?> <br>
    
    <?php 
    
    echo "<br/>";
    echo "Web Development";
    echo "<br/>";
    $number = 100;
    $number2 = 500;
    echo $number;
    echo "<br/>";
    $firstname = "John";
    $lastname = "Doe";
    echo $firstname." ".$lastname;
    echo "<br/>";
    echo "Welcome, $firstname $lastname";
    ?>
    <hr>
    <?php
    $price = 30;
    echo $price . "<br/>";
    $price = 40;
    echo "New Price $price"; 
    define("pi",3.14);
    echo "<br/>";
    echo "The value of Pi is". pi;
    echo "<br/>";

    ?>
    <hr>
    <?php
    $text = "the quick brown fox";
    echo "orginal text : $text"; "<br/>";
    echo "<br/>";
    echo ucwords($text) . "<br/>";
    echo strtolower($text) ."<br/>";
      ?>
      <hr>
      <?php
      $user = "John";
      echo str_repeat ($user, 5);
      $product = "computer";
      $product2 = "smartphone";
      echo "<br/>";
      //display = > com-001;
      //display =>phone-001
      echo substr($product,0,3) ."-001";
      echo "<br/>";
      echo substr($product2,5,6) . "-001";
      echo "<br/>";
      $text2 = "the quick brown fox jumps over the lazy dog";
      echo "Position:" . strpos($text2, "fox");
      echo "<br/>";
      $item = "watermelon";
      echo 'The length of item is' . strlen($item);
      echo "<br/>";
      echo str_replace("quick", "slow", $text);
      ?>


</body>

</html>