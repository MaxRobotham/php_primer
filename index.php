
    <?php
     $title = "Index";
     include 'includes/header.php'; 
     ?>

    <!-- Basic HTML -->
    <h1>hello world-PHP primer</h1>
    
    <br/>
    <?php 
    // printing to HTML using ocho
        echo  'Hello PHP!'; 
        echo '<br/>'; //HTML tags can be used in PHP by using echo command
        echo 'second line';
        
    
    //declare varible
    $name ='Max Robotham';
    $age = 18;

    //echo variable
    echo '<br/>';
    echo $name;
    //concatinate a variable to HTML content
    echo '<h1>My Name is : '.$name.' </h1>';
    echo '<h1>My age is : '.$age.' </h1>';

    //Echo using double quotes and interpolation
    echo "<h1>My age is : $age </h1>";

    
    ?>
    <button type="button" class="btn btn-primary">Click Me!!
    </button>
    <?php require 'includes/footer.php'?>
