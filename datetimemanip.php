<?php 
    $title = "Date and time manipulation";
    include 'includes/header.php';
 ?>
<body>
    <h1>Date and time manipulation</h1>

    <?php
        $datenow= getdate();
        echo "Today's Date : <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . "<br/>";
        echo $datenow['year'] . "<br/>";
        
        echo "Today's Date :". $datenow['mon']. '/' . $datenow['mday'] .'/' . $datenow['year'] . '<br/>'; // concatinate the date month and year
        
        echo time() . '<br/>';

        print date("m/d/y G.i:s<br/>", time()) . '<br/>';
        print "today is ";
        print date ("j of F Y, \a\\t g.i a", time());

    ?>
 <?php require 'includes/footer.php'?>