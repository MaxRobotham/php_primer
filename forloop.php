

<?php
     $title = "forloop";
    include 'includes/header.php'; 
 ?>
<body>
    <?php 
        // for loop

        for($count = 0; $count < 10; $count++){
            echo '<p>hello world</p>';

        }

        // for loop

        for($count = 0; $count < 256; $count++){
            echo "<p>The count is: $count</p>";
            
        }
    ?>
 <?php require 'includes/footer.php'?>