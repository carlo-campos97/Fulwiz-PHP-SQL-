<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Function Definition
    <br>
    <?php
    function message(){
        echo "Welcome to Cebu";
    }
    message();
    echo "<br/>";
    function notif($user){
        echo "Welcome, ". $user;
        
    }
        notif("Maria"); #calling the notif function
        echo "<br/>";
        notif("John");
        //function with return value
        function total($price,$quantity){
            $total = $price * $quantity;
            $total = number_format($total,2);
            return $total; 
        }
        echo "<br/>";
        echo "Total is " . Total(99.99,3);
    ?>
    <hr>
    <?php

    function monthlypayment($prodprice,$down,$monthstopay){
        $loanamount = $prodprice - $down;
        $init_monthlypay = $loanamount / $monthstopay;
        $interest = $init_monthlypay * 0.03;
        $monthlyPayWithInterest = $init_monthlypay + $interest;
        return "Monthly Payment: " . number_format($monthlyPayWithInterest,2) . 
        "<br/>" . 
        "Interest is: " . $interest . "<br/>" . 
        "Monthly Payment without interest: " . number_format($init_monthlypay,2) . 
        "<br/> <hr/>";
        
    }

    echo monthlypayment(40000,10000,9);
    echo monthlypayment(10000,3000,6);
    ?>
</body>
</html>