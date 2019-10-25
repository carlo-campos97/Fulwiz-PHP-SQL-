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
        $myvalue = -200;
        echo abs ($myvalue);

        ?>
        Exponential: pow(base,power)
        <?php
        echo "<br/>";
        echo pow (2,8);
        ?>
        square root: sqrt(value)
        <?php
        echo "<br/>";
        echo sqrt(144);
        ?>
        
        Modulo:
        <?php
        echo "<br/>";
        echo fmod(2650,100);
        ?>
        <?php
        

        echo rand(0,100);
        echo "<br/>";
        ?>
        <?php  
         echo "ceil of 74.5 is" . ceil (74.5) . "<br/>";
         echo "floor of 74.5 is" . floor(74.5) . "<br/>";
         echo "round of 74.4 is" . round(74.4) . "<br/>";
         echo "round of 74.4 is" . round (74.5) . "<br/>";
          
        ?>

        <?php
        $value = 2333331.12;
        echo "the value of 233331.12 is " .number_format($value,2);
        ?>

        <?php
        $queue =1;
        $queue++;
        echo $queue;
        echo "<br/>";
        $queue--;
        echo $queue;
        ?>

        <?php
        $numbers = array(23,45,64,34,13,4);
        echo "<br/>";
        echo $numbers[0];
        ?>


    </body>
    </html>