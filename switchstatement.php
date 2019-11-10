<?php 
    $title = "Switch statement";
    include 'includes/header.php'; ?>
<body>
    <h1>switch statement</h1>

    <?php 
    $grade ='A';

    switch($grade){
        case 'A':
            echo  '<h2 style="color: green">YOU ARE A SUPERSTART!</h2>';
                break;
        case 'B';
            echo '<h2 style="color: blue"> YOU DID WELL!</h2>';
                break;
        default:
            echo '<h2 style="color: red">you have failed...</h2>';
                break;            
    }
    
    ?>
 <?php require 'includes/footer.php'?>