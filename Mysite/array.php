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
    //$numbers = array(23, 45, 68, 34, 36, 54);
    //echo "Index 5 is " .  $numbers[5];
   // $person = array("john","doe",24,array("php","mysql","javascript"),"cebu");
//echo "<br/>";
   // echo "Welcome"  .  strtoupper($person[0])  . ""  . strtoupper($person[1])  . "who lives in  $person[4] <br/>";
     "br/>";
   // echo "<br/>";
   // echo "skills: {$person[3][0]}, {$person[3][1]},{$person[3][2]}";
    //echo print_r($person);
    
    ?>

    
    <?php
    //echo "br/>";
    //$data = array("fname" => "john","lname =>","address" => "cebu");
    // echo "Welcome" {$data['fname']} {$data['lname']};
    
  ?>
<?php

//echo "number of items" . count($numbers). "br/>";
//echo "max number". max($numbers). "br/>";
///echo "min number". min($numbess). "br/>";
////ort($humbers);
///print_r($numbers);
//echo "is 68 in numbers?". in_array(68,$numbers);
?>
<hr>

<?php
 $data = array ("Product code" => "P-001",
          "Product " => "LG TV 50",
          "Price" => 2300000,
          "Brand " => "LG",
          "Stock" => 5
);
     
          foreach($data as $key => $values){
              if (is_numeric($values)){
                  $values = number_format($values,2);
              }
              echo $key . ":". $values . "<br/>";
          }
?>
       
</body>
</html>