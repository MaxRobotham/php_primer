<?php 
    $title = "While Loop";
    include 'includes/header.php'; 

?>
<body>
    <h1>While Loop</h1>

        <?php
            $grade = 0;
            // //infinite loop
            // while($grade <10){
            //     echo '<p>I am less than 10!' ;
            // }
            // Pre-Condition loop
            while($grade <10){
                echo '<p>I am less than 10!</p>' ;
                $grade++;
            }
            echo '<p> exit loop!</p>';

        ?>

    <h1>DO-While Loop</h1>
        <?php
         // Post-Condition loop
         $grade = 0;
            do{
                echo '<p>I am do while loop!</p>' ;
                $grade++;
            }while ($grade < 10);
            echo '<p> exit loop!</p>';
        ?>
 <?php require 'includes/footer.php'?>