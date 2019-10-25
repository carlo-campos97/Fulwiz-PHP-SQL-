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
   // month: 1-12
   $month = 1;

    if ($month == 1){ 
      echo "january";
     }
    else if ($month == 2) {
        echo "february";
        }
    else if ($month ==3){
        echo "march";
    }
else if ($month == 4) {
        echo "april";
}
    else if ($month == 5){
        echo "may";
    }
else if ($month == 6){
    echo "june";
}
  else if ($month == 7){
      echo "july";
  }
   else if ($month == 8){
       echo "aug";
   }
   else if ($month == 9){
       echo "sept";
   }
   else if($number == 10){
       echo "october";
   }
   else if ($month == 11){
       echo "nov";
   }
   else if ($month == 12){
       echo "dec";
   }
?> 
 <hr>

  <?php
   $e = 200;
   if (isset($e)){
       echo 'variable $e is not set';
   }
   else {
       echo "varibale $e is set exist";
   }
   ?>
   <?php
   $quantity = 34;
   if (is_numeric($quantity)){

       $total = 5 *  $quantity;
   echo "is numeric". "<br/>";
   echo $total;
   }
else

{
    echo 'not numeric';
}   
?>



</body>
</html>
