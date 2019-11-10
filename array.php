<?php
    $title = "Array";
    include 'includes/header.php'; 
?>
<body>
    <h1>Arrays </h1>
    <?php
        // a variable
        $num =3;

        // an array
        //only one datatype
        $numbers = array (1,2,3,4,5,6,7,8,9,10);
        echo $numbers[5];

        echo "<p> $numbers[9]</p>";
        $size =count($numbers); // count will count all numbers in array and will assign it to the variable size
        echo "<p>Array numbers is size: $size</p>";

        for($count =0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    
    ?>
 <?php require 'includes/footer.php'?>