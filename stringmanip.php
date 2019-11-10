<?php 
    $title = "String Manipulation";
    include 'includes/header.php'; ?>
<body>
<h1> PHP String Manipulation</h1>
    <?php
    // concatination of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "max robotham";
        echo $phrase1 . ", names max ,".$phrase2;
        echo '<br/>';

        echo '<hr/>';    
        //string transformation
        echo ' Uppercase first letter ' .ucfirst($name).'<br/>'; // upper case for first letter
        echo ' Uppercase first letter of each word ' .ucwords($name).'<br/>'; // upper case the first letter of each word
        echo ' Uppercase case : '.strtoupper($name).'<br/>'; //turn all words to upper case
        echo ' Uppercase case : '.strtolower("THIS WAS ALL UPPPER CASE").'<br/>'; //turn all words to lower case
        echo '<hr/>';    
        echo 'Repeat string: '. str_repeat($name,10) . '<br/>'; // repeating scrings 10 times
        echo 'Repeat string: '. strtoupper(str_repeat($name,10)) . '<br/>'; //repeating a string 10 times and also returning it in upper case
        echo 'Get a substring; '. substr($name,5,10).'<br/>';  //extract string starting from the 5th letter and stop at the 10th letter

        Echo 'Get position of string : ' .strpos($name, 'm').'<br/>';
        //return NULL
        //echo 'get position of string: '. strpos($combine,'z;).'<br/>';
        Echo 'Find Character "R": ' .strchr($name, 'R').'<br/>';
        Echo 'Find Character "r": ' .strchr($name, 'r').'<br/>';
        Echo 'Find Character "s": ' .strchr($name, 'x').'<br/>';
        Echo 'Find Character "e": ' .strchr($name, 'e').'<br/>';

        echo 'Find Length of String: '.strlen($name) .'<br/>';

        echo 'Without Trim: '."A". "B C D". "E".'<br/>';
        echo 'Trim Spaces on both sides: '."A". trim ("B C D"). "E".'<br/>';
        echo 'Trim Spaces on left sides: '."A". ltrim ("B C D"). "E".'<br/>';
        echo 'Trim Spaces on right sides: '."A". rtrim ("B C D"). "E".'<br/>';


        echo ' Replace string with another: ' . str_replace("stand", "sit", $phrase2 ) . '<br/>';//calls phrase2 amd replaces stand with the word sit


    ?>
 <?php require 'includes/footer.php'?>