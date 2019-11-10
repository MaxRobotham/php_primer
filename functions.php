<?php 

    $title = "Functions";
    include 'includes/header.php'; 
?>
<body>
    <h1> Functions</h1>

    <?php
        
    //defining a function

    function writeMessage(){
        echo "you are awsome!!<br/>";
    }

    // Calling a function
    writeMessage();
    writeMessage();
    writeMessage();

    echo "<hr/>";

    writeMessage();

    //function with paremeter 
    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        $num2 = $num2 + 1;
        echo " the sum of $num1 and $num2 is: $sum <br/>";
    }
    //Pass by referernce - use ampersand in parameter
    function changeNum(&$num){
        $num = $num + 10;
        //$num+=10;
    }

    function returnProduct($num1,$num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    $num  =501;
    addfunction (10,20);
    addFunction(10,$num);
    addFunction('10',"15");

    changeNum($num);
    echo $num . '<br/>';

    $return_value = returnProduct(10,200);
    echo  $return_value . '<br/>';
    ?>
 <?php require 'includes/footer.php'?>