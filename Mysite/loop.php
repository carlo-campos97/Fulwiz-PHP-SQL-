<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    for LOOPs:
    <?php
    for ($val = 1; $val<=10; $val++){

    
    echo "hello" ."<br/>";
    }
    ?>
    <hr>

    while LOOPs
    <?php
    $init = 0;
    while($init < 10){
        echo $init . ",";
        $init ++;
    }

?>
<hr>
foreach
<?php
$data = array("john","doe",24,"cebu" );
foreach($data as $person){
    echo $person . "<br/>";
}

?>
<hr>
<?php
      $person = array(
        "first_name" => "Kevin", 
        "last_name"  => "Skoglund",
        "address"    => "123 Main Street",
        "city"       => "Beverly Hills",
        "state"      => "CA",
        "zip_code"   => "90210"
      );
     
      
foreach($person as $att => $value)
{
    echo $att . " - ". $value. "<br/>";
}
?>


</body>
</html>

